<template>
    <article class="border-l-2 border-gray-500 px-4 mb-8">
        <header>
            <h5 class="text-lg font-medium">{{ post.title }}</h5>
            <p class="text-sm text-gray-600">
                By
                <router-link
                    :to="{ name: 'posts.authors.index', params: {id: post.author.id} }"
                    class="font-medium underline hover:text-black">
                    {{ post.author.name }}
                </router-link> 
                in
                <span class="font-medium">
                    <router-link
                        :to="{ name: 'posts.topics.index', params: {slug: post.topic.slug} }"
                        class="underline hover:text-black">
                        {{ post.topic.name }}
                    </router-link>
                </span>
            </p>
        </header>
        <p class="text-gray-700 my-3">{{ post.lead }}</p>
        <footer>
            <div>
                <span
                    class="bg-gray-100 text-gray-700 text-xs font-medium mr-2 px-2.5 py-0.5 rounded"
                    v-for="tag in post.tags" :key="tag.id"
                    >
                    <router-link :to="{ name: 'posts.tags.index', params: {name: tag.name} }">
                        {{ tag.name }}
                    </router-link>
                </span>
                <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded inline-flex items-center">
                    <svg aria-hidden="true" class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                    {{ $filters.timeago(post.created_at) }}
                </span>
            </div>
            <div class="text-sm mt-2">
                <router-link :to="{ name: 'posts.show', params: {id: post.id} }" class="underline mr-3">Read more</router-link>
                <router-link :to="{ name: 'posts.show', params: {id: post.id} }" class="underline">Edit</router-link>
            </div>
        </footer>
    </article>
</template>

<script>
export default {
props: {
    post: Object
}
}
</script>
