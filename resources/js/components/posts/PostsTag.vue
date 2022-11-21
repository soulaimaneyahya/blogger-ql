<template>
  <section>
    <div v-if="$apollo.loading">Loading ...</div>
    <div v-else>
      <header>
          <div class="my-5">
            <h3 class="text-3xl font-bold">#{{ tag.name }}</h3>
            <p class="text-gray-600"><span>{{ postsCount }}</span> <span>posts</span></p>
          </div>
      </header>
      <PostVue v-for="post in tag.posts" :key="post.id" :post="post" />
    </div>
  </section>
</template>

<script>
import { gql } from '@apollo/client/core'
import PostVue from './partials/_post.vue';
export default {
    components: {
      PostVue,
    },
    props: ["name"],
    apollo: {
        tag: {
            query: gql`
            query($name: String!) {
                tag(name: $name) {
                  id
                  name
                  posts {
                    id
                    title
                    lead
                    author {
                        id
                        name
                    }
                    topic {
                        name
                        slug
                    }
                    tags {
                        id
                        name
                    }
                    created_at
                  }
                }
            }
            `,
            variables () {
                return {
                name: this.name,
                }
            },
            error() {
                return this.$router.push({
                    name: "notFound",
                    params: {
                        url: "wrong"
                    }
                });
            }
        }
    },
    computed: {
      postsCount() {
        return this.tag.posts.length;
      }
    },
}
</script>
