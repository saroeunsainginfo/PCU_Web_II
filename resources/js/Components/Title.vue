<script setup>
import { defineProps } from "vue";
const props = defineProps({
    title: String,
});
</script>

<template>
    <div>
        {{ title }}
    </div>
</template>

<style></style>
