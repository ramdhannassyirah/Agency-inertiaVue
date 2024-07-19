<template lang="">
    <Visitor>
        <Head title="Blog" />
        <div class="grid lg:grid-cols-3 md:grid-cols-2 justify-items-center gap-8 max-w-7xl mx-auto px-6">
            <div v-for="blog in blogs" :key="blog.id">
                <CardBlog :blog="blog" />
            </div>
        </div>
    </Visitor>
</template>
<script setup>
import Visitor from '@/Layouts/Visitor.vue';
import { Head } from '@inertiajs/vue3';
import CardBlog from '@/Components/Card/CardBlog.vue';

const props = defineProps({
    blogs: Object
})




</script>
<style lang="">

</style>
