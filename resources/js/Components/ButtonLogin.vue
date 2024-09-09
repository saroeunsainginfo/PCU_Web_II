<script setup>
import { defineProps } from "vue";

const props = defineProps({
    btn_login: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <button
        class="p-2 text-white  bg-blue-800 rounded-md hover:bg-blue-700"
    >
        {{ btn_login }}
    </button>
</template>

<style></style>
