<template lang="">
    <header class="fixed z-50 w-full font-inter" id="myElement">
        <nav class="bg-white dark:bg-gray-800 border-gray-200 py-6">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto lg:px-8 ">
                <div href="#" class="flex items-center">
                    <h1 class="text-2xl dark:text-white font-bold">Tokopia Agenxy</h1>
                </div>

                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1 "
                    id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:items-center   lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <Link href="/"
                                class="block py-2 pl-3 pr-4 text-gray-700 dark:text-white hover:dark:bg-transparent hover:opacity-75 transition-opacity duration-300   lg:p-0">
                            Home</Link>
                        </li>
                        <li>
                            <Link href="/#about"
                                class="block py-2 pl-3 pr-4 text-gray-700 dark:text-white hover:dark:bg-transparent hover:opacity-75 transition-opacity duration-300  border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0  lg:p-0 ">
                            About Us</Link>
                        </li>
                        <li>
                            <Link href="/#how-it-works"
                                class="block py-2 pl-3 pr-4 text-gray-700 dark:text-white hover:dark:bg-transparent hover:opacity-75 transition-opacity duration-300  border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0  lg:p-0">
                            How It Works</Link>
                        </li>

                        <li>
                            <Link href="/blog"
                                class="block py-2 pl-3 pr-4 text-gray-700 dark:text-white hover:dark:bg-transparent hover:opacity-75 transition-opacity duration-300  border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0  lg:p-0 ">
                            Blog</Link>
                        </li>
                        <li>
                            <Link href="/#testimoni"
                                class="block py-2 pl-3 pr-4 text-gray-700 dark:text-white hover:dark:bg-transparent hover:opacity-75 transition-opacity duration-300  border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0  lg:p-0">
                            Testimonials</Link>
                        </li>
                        <li>
                            <button onclick="(() => document.body.classList.toggle('dark'))()"
                                class="h-10 py-2 pl-3 w-10 rounded-lg p-2 hover:bg-gray-100 dark:hover:bg-transparent">
                                <svg class="fill-violet-700 bg-transparent block dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <svg class="fill-yellow-500 dark:hover:bg-transparent hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section class=" mx-auto min-h-screen pt-28 dark:bg-gray-800">
        <slot />
    </section>



    <footer class="bg-white pt-28  dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/"
                    class="hover:underline">Tokopia Agenxy™</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-500 sm:mt-0">
                <li>
                    <Link href="#" class="hover:underline me-4 md:me-6">About</Link>
                </li>
                <li>
                    <Link href="#" class="hover:underline me-4 md:me-6">Service</Link>
                </li>
                <li>
                    <Link href="#" class="hover:underline me-4 md:me-6">Testimonials</Link>
                </li>
                <li>
                    <Link href="#" class="hover:underline">Contact</Link>
                </li>
            </ul>
        </div>
    </footer>


</template>
<script setup>
import {
    onMounted
} from 'vue'
import {
    Link
} from '@inertiajs/vue3';
import {
    initFlowbite
} from 'flowbite'
onMounted(() => {
    initFlowbite();
})
</script>
<style lang="">

</style>
