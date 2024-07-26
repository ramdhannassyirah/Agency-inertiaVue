<template>
    <DashboardLayout>
      <Head title="Edit Testimonial" />
      <h1 class="font-bold text-2xl dark:text-white">Edit Testimonial</h1>
      <div class="mt-6">
        <form @submit.prevent="submit" class="space-y-6">
          <div>
            <label for="image" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Image</label>
            <input type="file" @change="onFileChange" id="image" class="block w-full rounded-md text-gray-900">
            <span v-if="form.image && form.image.name">{{ form.image.name }}</span>
          </div>
          <div>
            <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" id="name" v-model="form.name"
              class="block py-4 w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div>
            <label for="position" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Position</label>
            <input type="text" id="position" v-model="form.position"
              class="block py-4 w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div>
            <label for="rating" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Rate</label>
            <select v-model="form.rating" class="rounded-md w-40" name="rating" id="rating">
              <option disabled hidden value="">Berikan Rate</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div>
            <label for="content" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Content</label>
            <textarea v-model="form.content" rows="5" id="content"
              class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
          </div>
          <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded-lg">Kirim</button>
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
          image: null,
          name: '',
          position: '',
          rating: '',
          content: ''
        }
      };
    },
    mounted() {
      const testimonial = this.$page.props.testi;
      this.form.id = testimonial.id;
      this.form.name = testimonial.name || '';
      this.form.position = testimonial.position || '';
      this.form.rating = testimonial.rating || '';
      this.form.content = testimonial.content || '';
    },
    methods: {
      onFileChange(e) {
        this.form.image = e.target.files[0];
      },
      submit() {

        this.$inertia.put(route('testimonials.update', { id: this.$page.props.testi.id }), this.form
        )
      }
    }
  };
  </script>
  
  <style scoped>
  /* Sesuaikan styling sesuai kebutuhan */
  </style>
  