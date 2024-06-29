<template lang="">
    <Visitor>
        <Head title="Blog" />
        <div class="grid md:grid-cols-3 justify-items-center gap-8 max-w-7xl mx-auto px-6">
            <CardBlog />
            <CardBlog />
            <CardBlog />
            <CardBlog />
            <CardBlog />
            <CardBlog />

        </div>
    </Visitor>
</template>
<script setup>
import Visitor from '@/Layouts/Visitor.vue';
import { Head } from '@inertiajs/vue3';
import CardBlog from '@/Components/Card/CardBlog.vue';
</script>
<style lang="">

</style>
