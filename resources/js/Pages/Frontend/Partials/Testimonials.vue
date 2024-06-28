<template lang="">
    <div>
        <div class="testi">
            <div class="space-y-6 pt-6 px-4 dark:text-white">
                <div class="space-y-4">
                    <p>Testimonials</p>
                    <h1 class="md:text-5xl font-bold text-3xl">What Our Clients Say <br/> About Us </h1>
                </div>
                <div>
                    <div class="overflow-x-auto no-scrollbar">
                        <div class="">
                            <div class="inline-flex gap-4">
                                <CardProduct />
                                <CardProduct/>
                                <CardProduct/>
                                <CardProduct/>
                                <CardProduct/>
                                <CardProduct/>
                                <CardProduct/>
                                <CardProduct/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import CardProduct from '@/Components/Card/CardProduct.vue';
export default {

    components: {
        CardProduct
    },

}
</script>
<style lang="">

</style>
