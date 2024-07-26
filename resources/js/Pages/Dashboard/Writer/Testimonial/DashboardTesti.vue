<template>
    <div class="">

        <Head title="Data Testimonial" />
        <DashboardLayout>
            <div class="">
                <h1 class="font-bold text-2xl mb-4">Data Testimonial</h1>
                <a href="/testimonials/create" class="mb-2 bg-black rounded-md text-white px-4 py-2">Tambah
                    Testimonial</a>
            </div>

            <div class="overflow-x-auto border-2 shadow-md mt-6 sm:rounded-lg">
                <table class="w-full text-sm text-left  rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Customer
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Rate
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
                        <tr v-for="test in testi" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-ellipsis whitespace-nowrap max-w-72 overflow-hidden text-gray-900  dark:text-white">
                                {{ test . name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ test . rating }}
                            </td>
                            <td class="px-6 py-4">
                                {{ new Date(test . created_at) . toLocaleDateString() }}
                            </td>
                            <td class="px-6 py-4">
                                <a :href="`testimonials/${test.id}/edit`"
                                    class="font-medium text-blue-600 pr-2 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" @click="deleteTesti(test.id)"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </DashboardLayout>s
    </div>
</template>

<script >
 import {
        Head
    } from '@inertiajs/vue3';
    import DashboardLayout from '@/Layouts/DashboardLayout.vue'
    
    export default {

    components: {
        DashboardLayout,
        Head
    },
    methods: {
        deleteTesti(id) {
            if (confirm('Are you sure you want to delete this blog?')) {
                // Mengirim permintaan delete menggunakan inertia.delete
                this.$inertia.delete(route('testimonials.destroy', id));
            }
        }
    },
    props: {
        testi: Object
    }
}
</script>

