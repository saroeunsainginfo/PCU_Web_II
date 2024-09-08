<script setup>
import Header from "../Components/Header.vue";
import Sidebar from "../Components/Sidebar.vue";
import { ref } from "vue";

const isCollapsed = ref(false);
function toggleSidebar() {
    isCollapsed.value = !isCollapsed.value;
}
</script>

<template>
    <div class="admin-layout font-default-sans">
        <Header :toggle-sidebar="toggleSidebar" :is-collapsed="isCollapsed" />
        <div class="flex content-screen">
            <Sidebar :is-collapsed="isCollapsed" />
            <div class="content overflow-y-auto p-4 h-full w-full">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
