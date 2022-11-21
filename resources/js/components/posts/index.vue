<template>
    <section>
        <header>
            <div class="my-5">
                <h3 class="text-3xl font-bold">Posts</h3>
                <p class="text-gray-600">List of All Posts</p>
            </div>
        </header>
        <div v-if="$apollo.loading">Loading ..</div>
        <div v-else>
            <PostVue v-for="post in posts" :key="post.id" :post="post"/>
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
    apollo: {
        posts: gql`{
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
        }`
    }
}
</script>

<style></style>
