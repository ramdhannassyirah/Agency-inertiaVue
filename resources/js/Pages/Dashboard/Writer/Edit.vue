<template>
  <DashboardLayout>
    <Head title="Edit Blog" />
    <h1 class="font-bold text-2xl dark:text-white">Edit Blog</h1>
    <div class="mt-6">
      <form @submit.prevent="submit" class="space-y-6">
        <input type="hidden" v-model="form.author_id">
        
        <div>
          <label for="image" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Image</label>
          <input type="file" @change="onFileChange" id="image" class="block w-full rounded-md text-gray-900">
          <!-- Menampilkan nama file yang dipilih jika ada -->
          <span v-if="form.image && form.image.name">{{ form.image.name }}</span>
        </div>
        
        <div>
          <label for="title" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Title</label>
          <input type="text" v-model="form.title" id="title"
            class="block py-4 w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div>
          <label for="content" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Content</label>
          <textarea v-model="form.content" rows="10" id="content" 
            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
        </div>
        
        <button type="submit"
          class="w-full bg-black text-white py-3 px-4 rounded-lg hover:bg-gray-900 hover:text-gray-100">Update</button>
      </form>
    </div>
  </DashboardLayout>
</template>

<script>
import { Head } from '@inertiajs/vue3';
import DashboardLayout from '@/Layouts/DashboardLayout.vue';

export default {
  components: {
    DashboardLayout,
    Head
  },
  data() {
    return {
      form: {
        id: null,
        image: null,
        title: '',
        content: '',
        author_id: 1
      }
    };
  },
  mounted() {
    // Menginisialisasi nilai form dengan data blog yang diterima dari properti $page
    this.form.id = this.$page.props.blog.id;
    this.form.title = this.$page.props.blog.title;
    this.form.content = this.$page.props.blog.content;
  },
  methods: {
    submit() {
      // Mengirimkan permintaan update menggunakan inertia.put
      this.$inertia.put(route('blogs.update', { id: this.form.id }), this.form).then(() => {
        // Handle success, misalnya dengan memberikan feedback kepada user
        console.log('Blog updated successfully!');
      }).catch((error) => {
        // Handle error, misalnya menampilkan pesan error
        console.error('Failed to update blog:', error);
      });
    },
    onFileChange(e) {
      this.form.image = e.target.files[0];
    }
  }
};
</script>

<style>
/* Styling sesuai kebutuhan */
</style>
