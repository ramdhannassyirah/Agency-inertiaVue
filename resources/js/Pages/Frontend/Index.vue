<template lang="">
    <Head title="Home" />
    <Visitor  >
    <header class="space-y-6">
        <Hero />
        <Marquee/>
    </header>
    <section id="about" class="md:pt-20  max-w-7xl mx-auto">
        <About />
    </section>
    <section id="how-it-works" class="md:pt-28 space-y-4 max-w-7xl mx-auto">
        <HowItWork />
        <Faq />
    </section>
    <section id="Blog" class="md:pt-28 pt-8 max-w-7xl mx-auto ">
        <Blog />
    </section>
    <section id="testimoni" class="md:pt-28 max-w-7xl mx-auto">
        <Testi />
    </section>
    </Visitor>
</template>
<script >
import Blog from '@/Pages/Frontend/Partials/Blog.vue'
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
        Blog,
    }
}
</script>
<style lang="">

</style>
