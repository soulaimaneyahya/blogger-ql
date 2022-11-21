import { createRouter, createWebHistory } from 'vue-router'

import HomePage from './components/pages/home.vue';
import AboutPage from './components/pages/about.vue';

import PostsIndex from './components/posts/index.vue';
import PostShow from './components/posts/show.vue';
import PostsTopic from './components/posts/PostsTopic.vue'
import PostsAuthor from './components/posts/PostsAuthor.vue'
import PostsTag from './components/posts/PostsTag.vue'

import notFound from './components/errors/404.vue';

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        // pages
        {
            path: '/',
            component: HomePage,
            name: 'pages.home',
        },
        {
            path: '/about',
            component: AboutPage,
            name: 'pages.about',
        },

        // posts
        {
            path: '/posts',
            component: PostsIndex,
            name: 'posts.index',
        },
        {
            path: '/posts/:id(\\d+)',
            component: PostShow,
            name: 'posts.show',
            props: true,
        },
        {
            path: '/posts/topics/:slug',
            component: PostsTopic,
            name: 'posts.topics.index',
            props: true,
        },
        {
            path: '/posts/authors/:id(\\d+)',
            component: PostsAuthor,
            name: 'posts.authors.index',
            props: true,
        },
        {
            path: '/posts/tags/:name',
            component: PostsTag,
            name: 'posts.tags.index',
            props: true,
        },

        // catch all 404
        {
            path: '/:url(.*)',
            name: 'notFound',
            component: notFound
        }
    ]
})

export default router
