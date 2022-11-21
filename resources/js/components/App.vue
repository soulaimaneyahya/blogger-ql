<template>
    <div class="container mx-auto px-4 w-full md:w-3/4 lg:w-3/5 xl:w-2/3">
        <NavBar />
        <RouterView />
    </div>
</template>

<script>
import NavBar from './partials/NavBar.vue';
export default {
    components: { NavBar }
}
</script>

<style></style>
