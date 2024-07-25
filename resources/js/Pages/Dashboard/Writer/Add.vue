<template lang="">
    <DashboardLayout>

        <Head title="Create Blog" />
        <h1 class="font-bold text-2xl dark:text-white">Tambah Blog</h1>
        <div class="mt-6 ">
            <form @submit="submit" class="space-y-6">
                <input hidden type="text" value="1" v-model="form.author_id">
                <div>
                    <label for="image"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Image</label>
                    <input type="file" @input="form.image = $event.target.files[0]" id="image"
                        class="block  w-full rounded-md  text-gray-900 ">
                </div>
                <div>
                    <label for="title"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" v-model="form.title" id="title"
                        class="block py-4 w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="content"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Content</label>
                    <textarea type="text" v-model="form.content" rows="10" cols="10" id="content"
                        class="block  w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </textarea>

                
                </div>
                <button type="submit" class=" w-full bg-black text-white py-3 p-2 rounded-lg ">Kirim</button>
            </form>
        </div>
    </DashboardLayout>
</template>
<script>
    import {
        Head
    } from '@inertiajs/vue3';
    import DashboardLayout from '@/Layouts/DashboardLayout.vue'
    export default {
        components: {
            DashboardLayout,
            Head
        },
        data() {
            return {
                form: {
                    image: null,
                    title: '',
                    content: '',
                    author_id: 1,
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.post('/blogs', this.form)
                console.log(this.form)
            }
        },
    }
</script>
<style lang="">

</style>
