<script setup>
import { Link } from "@inertiajs/vue3";
import HamburgerIcon from "./Icons/HamburgerIcon.vue";
</script>

<template>
    <header
        class="header-height flex items-center w-full bg-primaryColor text-white"
    >
        <div class="">
            <Link
                :href="route('dashboard.index')"
                class="text-2xl px-4 font-bold text-nowrap"
                >Dashboard</Link
            >
        </div>
        <div class="flex justify-between items-center w-full gap-3 px-4">
            <!-- === Left === -->
            <div class="inline-flex flex-shrink-0 items-center">
                <button>
                    <HamburgerIcon />
                </button>
            </div>

            <!-- === Right === -->
            <div class=""></div>
        </div>
    </header>
</template>

<style></style>
