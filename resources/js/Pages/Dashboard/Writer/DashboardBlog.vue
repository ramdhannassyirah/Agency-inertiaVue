<template>
    <Head title="Data Blog"/>
    <DashboardLayout>

        <div class="">
            <h1 class="font-bold text-2xl mb-4">Data Blog</h1>
            <a href="/blogs/create" class="mb-2 bg-black rounded-md text-white px-4 py-2">Tambah Blog</a>
        </div>

        <div class="overflow-x-auto border-2 shadow-md mt-6 sm:rounded-lg">
            <table class="w-full text-sm text-left  rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Content
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date release
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="blogs in blog" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ blogs . title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ blogs . content }}
                        </td>
                        <td class="px-6 py-4">
                            {{ new Date(blogs . created_at) . toLocaleDateString() }}
                        </td>
                        <td class="px-6 py-4">
                            <a :href="`blogs/${blogs.id}/edit`"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </DashboardLayout>
</template>

<script setup>
    import {
        Head
    } from '@inertiajs/vue3';
    import DashboardLayout from '@/Layouts/DashboardLayout.vue'
    const props = defineProps({
        blog: {
            type: Object,
            required: true
        }
    });
</script>
