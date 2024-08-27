<script setup>
import SideBar from "../Components/SideBar.vue";
import Header from "../Components/Header.vue";
</script>

<template>
    <div class="flex h-screen overflow-hidden">
        <SideBar />
        <div
            class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
        >
            <Header />

            <!-- ==== Main Content ==== -->
            <main>
                <div class="mx-auto max-w-screen-2xl p-4">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>

<style></style>
