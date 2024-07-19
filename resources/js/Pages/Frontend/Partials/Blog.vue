<template lang="">
    <div class="blog space-y-4 px-4">
        <div class="flex justify-between items-center">
        <h1 class="font-bold text-3xl dark:text-white">Blog</h1>
        <a href="/blog" class=" text-black dark:text-white hover:opacity-80">View All</a>
        </div>
        <div class="grid md:grid-cols-3 gap-4 items-center justify-items-center">
        </div>
        <div v-for="blog in blogs" :key="blog.id">
             <CardBlog :blog="blog" />
         </div>
    </div>
</template>
<script setup>
import CardBlog from '@/Components/Card/CardBlog.vue';

const props = defineProps({
    blogs: Object
})
</script>
<style lang="">

</style>
