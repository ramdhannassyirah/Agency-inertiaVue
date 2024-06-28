<template lang="">
    <Head title="Home" />
    <Visitor  >
    <header class="space-y-6">
        <Hero />
        <Marquee/>
    </header>
    <section id="about" class="md:pt-20 dark:mb-10 dark:bg-white dark:bg-opacity-5 dark:backdrop-blur-xl dark:pb-6 md:dark:p-6 md:dark:rounded-xl  max-w-7xl mx-auto">
        <About />
    </section>
    <section id="how-it-works" class="md:pt-28  max-w-7xl mx-auto dark:mb-10 dark:bg-white dark:bg-opacity-5 dark:pb-10 dark:backdrop-blur-xl md:dark:p-6 md:dark:rounded-xl">
        <HowItWork />
    </section>
    <section id="contact" class="md:pt-28 max-w-7xl mx-auto dark:mb-10 dark:bg-white dark:bg-opacity-5 dark:backdrop-blur-xl dark:py-14 md:dark:px-6 md:dark:rounded-xl">
        <Faq />
    </section>
    <section id="testimoni" class="md:pt-28 max-w-7xl mx-auto  dark:bg-white dark:bg-opacity-5 dark:backdrop-blur-xl md:dark:p-6 dark:pb-10 md:dark:rounded-xl">
        <Testi />
    </section>
    </Visitor>
</template>
<script >
import Marquee from '@/Components/Marquee/Marquee.vue'
import Testi from '@/Pages/Frontend/Partials/Testimonials.vue'
import Faq from '@/Pages/Frontend/Partials/FAQ.vue'
import HowItWork from '@/Pages/Frontend/Partials/HowItWork.vue'
import About from '@/Pages/Frontend/Partials/AboutUs.vue'
import { Head } from '@inertiajs/vue3'
import Visitor from '@/Layouts/Visitor.vue'
import Card from '@/Components/Card/CardProduct.vue'
import Hero from '@/Pages/Frontend/Partials/Hero.vue'
export default {
    layout: Visitor,
    components: {
        Card,
        Hero,
        Head,
        About,
        HowItWork,
        Faq,
        Testi,
        Marquee,
    }
}
</script>
<style lang="">

</style>
