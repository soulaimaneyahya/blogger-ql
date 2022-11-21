<template>
  <section>
      <div v-if="$apollo.loading">Loading ..</div>
      <div v-else>
        <header>
            <div class="my-5">
              <h3 class="text-3xl font-bold">{{ post.title }}</h3>
              <p class="text-gray-600">{{ post.lead }}</p>
            </div>
        </header>
        <article>
          <p class="text-gray-700 whitespace-pre-line my-6">{{ post.content }}</p>
        </article>
        <footer>
          <div class="mb-4">
            <span
                class="bg-gray-100 text-gray-700 text-xs font-medium mr-2 px-2.5 py-0.5 rounded"
                v-for="tag in post.tags" :key="tag.id"
                >
                <router-link :to="{ name: 'posts.tags.index', params: {name: tag.name} }">
                    {{ tag.name }}
                </router-link>
            </span>
          </div>
          <div class="flex mb-12">
            <img 
            :src="'/storage/faces/' + post.author.avatar" 
            alt="author-avatar" 
            class="w-16 h-16 rounded-full mr-6"
            />
            <div class="flex flex-col justify-center text-gray-600">
              <div>
                Written by
                <router-link 
                  :to="{ name: 'posts.authors.index', params: {id: post.author.id} }"
                  class="font-medium underline hover:text-black">
                  {{ post.author.name }}
                </router-link>
              </div>
              <div>
                Published in
                <router-link 
                  :to="{ name: 'posts.topics.index', params: {slug: post.topic.slug} }"
                  class="font-medium underline hover:text-black">
                  {{ post.topic.name }}
                </router-link> •
                on  <span class="font-medium">{{ $filters.longdate(post.created_at) }}</span>
              </div>
            </div>
          </div>
        </footer>
      </div>
  </section>
</template>

<script>
import { gql } from '@apollo/client/core'
export default {
  props: ["id"],
  apollo: {
      post: {
        query: gql`
          query($id: ID!) {
            post (id: $id) {
              id
              title
              lead
              content
              author {
                id
                name
                avatar
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
      `,
      variables () {
        return {
          id: this.id,
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
}
</script>

<style></style>
