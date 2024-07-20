<template lang="">
    <div>
        <div class="">
            <!-- ===== Sidebar Start ===== -->
            <Sidebar />
            <!-- ===== Sidebar End ===== -->

            <!-- ===== Content Area Start ===== -->
            <div class="">
                <!-- ===== Header Start ===== -->
                <Header />
                <!-- ===== Header End ===== -->

                <!-- ===== Main Content Start ===== -->
                <main class="max-w-7xl mx-auto">
                    <div class="p-4 sm:ml-60">
                        <div class=" p-4 mt-20">
                            <slot />
                        </div>
                    </div>
                </main>
                <!-- ===== Main Content End ===== -->
            </div>
            <!-- ===== Content Area End ===== -->
        </div>
        <!-- ===== Page Wrapper End ===== -->
    </div>
</template>
<script>
import Header from '@/Components/Header.vue'
import Sidebar from '@/Components/Sidebar.vue'
import { initFlowbite } from 'flowbite';
export default {
    components: {
        Header,
        Sidebar,
    },

    mounted() {
        initFlowbite();
    }

}
</script>
<style lang="">

</style>
