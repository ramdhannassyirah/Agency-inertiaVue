<template lang="">
    <Head title="Beranda" />
    <Visitor  >
    <header class="">
        <Hero />
    </header>
    <section class="pt-28">
        <About />
    </section>
    <section class="pt-28">
        <HowItWork />
    </section>
    <section class="pt-28">
        <Faq />
    </section>
    </Visitor>
</template>
<script >
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
    }
}
</script>
<style lang="">

</style>
