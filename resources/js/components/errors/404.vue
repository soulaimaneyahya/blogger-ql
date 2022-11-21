<template>
    <section class="flex justify-center mt-12">
        <header>
            <div class="text-center text-gray-600 self-center">
            <h1 class="text-6xl font-sans text-shadow mb-4">404 | Not Found</h1>
            <h3 class="text-4xl font-sans text-shadow">URL "{{ $route.params.url || $route.params.id }}" Not Found</h3>
            </div>
        </header>
    
        <footer>
            <div class="absolute bottom-0 mb-12 text-gray-600 text-center text-xl">
            <span class="opacity-50 mr-2">Take me back to</span>
            <a href="#" class="border-b" @click="$router.go(-1)">where I was</a>
            </div>
        </footer>
    </section>
</template>
