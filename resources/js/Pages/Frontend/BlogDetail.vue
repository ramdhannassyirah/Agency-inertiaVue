<template lang="">
    <Visitor>
        <Head title="Detail Blog" />
        <div class="mx-auto max-w-7xl px-6">
            <div class="space-y-12">
                <div class="space-y-4 flex flex-col dark:text-white justify-center items-center ">
                    <span>{{ formatDate(blog.created_at) }}</span>
                    <div class="w-1/2 text-center">
                        <h1 class="md:text-4xl text-xl font-bold ">{{ blog.title }}</h1>
                    </div>
                    <div class="w-1/2 text-center">
                        <span>Dibuat oleh Admin</span>
                    </div>
                </div>
                <div class="">
                    <img class="rounded-lg w-full md:h-[500px] h-[290px] object-cover object-center"
                        :src="blog.image" :alt="blog.title">
                </div>

                <div class="dark:text-white">
                    <p class="text-lg">{{blog.content }}
                    </p>
                </div>
                <div>
                    <a class="inline-flex dark:text-white items-center hover:opacity-75" href="/blog"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12l4-4m-4 4 4 4" />
                        </svg>
                        Back</a>
                </div>
            </div>
        </div>
    </Visitor>
</template>
<script setup>
import Visitor from '@/Layouts/Visitor.vue';
import {
    Head
} from '@inertiajs/vue3';

const props = defineProps({
    blog: Object
})

const formatDate = (dateString) => {
    const options = { year: 'numeric', month: 'short', day: '2-digit' };
    return new Date(dateString).toLocaleDateString('en-US', options);
};
</script>
<style lang="">

</style>
