<template lang="">

    <Head title="Home" />
    <Visitor>
        <header class="space-y-6">
            <Hero />
            <Marquee />
        </header>
        <section id="about" class="md:pt-20  max-w-7xl mx-auto">
            <About />
        </section>
        <section id="how-it-works" class="md:pt-28 space-y-4 max-w-7xl mx-auto">
            <HowItWork />
            <Faq />
        </section>
        <section id="Blog" class="md:pt-28 pt-8 lg:max-w-7xl mx-auto ">
            <div class="blog space-y-6 px-4">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-3xl dark:text-white">Blog</h1>
                    <a href="/blog" class=" text-black dark:text-white hover:opacity-80">View All</a>
                </div>
                <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-4 items-center justify-items-center">
                    <div v-for="blog in blogs" :key="blog.id">
                        <CardBlog :blog="blog" />
                    </div>
                </div>
            </div>
        </section>
        <section id="testimoni" class="md:pt-28 lg:max-w-7xl mx-auto">
            <Testi />
        </section>
    </Visitor>
</template>
<script>
    import Blog from '@/Pages/Frontend/Partials/Blog.vue'
    import Marquee from '@/Components/Marquee/Marquee.vue'
    import Testi from '@/Pages/Frontend/Partials/Testimonials.vue'
    import Faq from '@/Pages/Frontend/Partials/FAQ.vue'
    import HowItWork from '@/Pages/Frontend/Partials/HowItWork.vue'
    import About from '@/Pages/Frontend/Partials/AboutUs.vue'
    import {
        Head
    } from '@inertiajs/vue3'
    import Visitor from '@/Layouts/Visitor.vue'
    import Card from '@/Components/Card/CardProduct.vue'
    import Hero from '@/Pages/Frontend/Partials/Hero.vue'
    import CardBlog from '@/Components/Card/CardBlog.vue'
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
            CardBlog,
        },

        props: {
            blogs: Object
        }




    }
</script>
<style lang="">

</style>
