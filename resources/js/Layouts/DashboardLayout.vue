<template lang="">
    <div>
        <div class="">
            <!-- ===== Sidebar Start ===== -->
            <Sidebar />
            <!-- ===== Sidebar End ===== -->

            <!-- ===== Content Area Start ===== -->
            <div class="    ">
                <!-- ===== Header Start ===== -->
                <Header />
                <!-- ===== Header End ===== -->

                <!-- ===== Main Content Start ===== -->
                <main>
                    <div class="p-4 sm:ml-64">
                        <div class="p-4  mt-14">
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
export default {
    components: {
        Header,
        Sidebar,
    }
}
</script>
<style lang="">

</style>
