<template lang="">
    <Visitor>

        <Head title="Blog Detail" />
        <div class="mx-auto max-w-7xl px-6">
            <div class="space-y-12">
                <div class="space-y-4 flex flex-col dark:text-white justify-center items-center ">
                    <span>12 September 2021</span>
                    <div class="w-1/2 text-center">
                        <h1 class="text-4xl font-bold ">What is Lorem ga Ipsum? Lorem, ipsum dolor sit
                            amet consectetur adipisicing elit.</h1>
                    </div>
                    <div class="w-1/2 text-center">
                        <span>Dibuat oleh Admin</span>
                    </div>
                </div>
                <div class="">
                    <img class="rounded-lg w-full h-[500px] object-cover object-center"
                        src="../../../../public/img/rakutak.jpeg">
                </div>

                <div class="">
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                </p>
                </div>
            </div>
        </div>
    </Visitor>
</template>
<script setup>
import Visitor from '@/Layouts/Visitor.vue';
import {
    Head
} from '@inertiajs/vue3';
</script>
<style lang="">

</style>
