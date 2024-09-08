<script setup>
import { Link } from '@inertiajs/vue3'

const props = defineProps({
    subIndex: Number,
    title: String,
    href: String,
})
</script>

<template>
    <Link :href="route(href)" :key="subIndex" class="menu-item hover:bg-lightBlueHover rounded-bl-md rounded-tl-md" v-if="href">
        <p class="flex-auto py-[6px] px-3 text-nowrap">
            {{title}}
        </p>
    </Link>
    <Link href="#" class="menu-item" v-else>
        <p class="flex-auto py-[6px] px-3 text-nowrap hover:bg-lightBlueHover rounded-bl-md rounded-tl-md">
            {{title}}
        </p>
    </Link>
</template>

<style scoped></style>
