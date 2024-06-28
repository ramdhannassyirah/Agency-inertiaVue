<template lang="">
    <Head title="Home" />
    <Visitor  >
    <header class="space-y-6">
        <Hero />
        <Marquee/>
    </header>
    <section id="about" class="pt-20 max-w-7xl mx-auto">
        <About />
    </section>
    <section id="how-it-works" class="pt-28 max-w-7xl mx-auto">
        <HowItWork />
    </section>
    <section id="contact" class="pt-28 max-w-7xl mx-auto">
        <Faq />
    </section>
    <section id="testimoni" class="pt-28 max-w-7xl mx-auto">
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
