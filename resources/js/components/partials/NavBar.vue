<template>
    <header>
      <navbar>
        <nav class="bg-white border-gray-200 py-5">
          <ul class="flex justify-start gap-5">
            <li>
              <router-link :to="{ name: 'pages.home' }" class="text-gray-900 hover:text-gray-700">Home</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'pages.about' }" class="text-gray-900 hover:text-gray-700">About</router-link>
            </li>
            <li>
              <router-link :to="{ name: 'posts.index' }" class="text-gray-900 hover:text-gray-700">Posts</router-link>
            </li>
          </ul>
        </nav>
      </navbar>
    </header>
</template>
