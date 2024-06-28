<template lang="">
    <Head title="Home" />
    <Visitor  >
    <header class="">
        <Hero />
    </header>
    <section id="about" class="pt-28">
        <About />
    </section>
    <section id="how-it-works" class="pt-28">
        <HowItWork />
    </section>
    <section id="contact" class="pt-28">
        <Faq />
    </section>
    <section id="testimoni" class="pt-28">
        <Testi />
    </section>
    </Visitor>
</template>
<script >
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
    }
}
</script>
<style lang="">

</style>
