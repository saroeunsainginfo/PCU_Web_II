<script setup>
import { defineProps } from "vue";

const props = defineProps({
    class: String,
});
</script>

<template>
    <div :class="class" class="bg-blue-800 rounded-full"></div>
</template>

<style></style>
