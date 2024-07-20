<template>
    <div class="w-full">
        <div class="card max-w-[380px] space-y-4">
            <div>
                <img class="rounded-lg w-[380px] h-[250px] object-cover object-center" :src="blog.image" :alt="blog.title">
            </div>
            <div class="card-body space-y-1">
                <div class="max-h-[64] overflow-hidden">
                    <a :href="`/blogs/${blog.id}`" class="card-title hover:opacity-80 text-xl font-semibold dark:text-white">
                        {{ blog.title }}
                    </a>
                </div>
                <div class="text-gray-500 space-x-3">
                    <span>
                        {{ formatDate(blog.created_at) }}
                    </span>
                    <span>
                        Dibuat oleh Admin
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    blog: {
        type: Object,
        required: true
    }
});

const formatDate = (dateString) => {
    const options = { year: 'numeric', month: 'short', day: '2-digit' };
    return new Date(dateString).toLocaleDateString('en-US', options);
};


</script>

<style scoped>
/* Jika ada gaya khusus yang perlu ditambahkan, tambahkan di sini */
</style>
