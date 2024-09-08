<script setup>
import { defineProps } from "vue";

const props = defineProps({
    size: {
        type: Number,
        default: 24,
    },
    color: {
        type: String,
        default: "#163F78",
    },
});
</script>

<template>
    <div>
        <svg
            :width="size"
            :height="size"
            viewBox="0 0 23 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                d="M21.4995 10.2878L1.00054 10.2878"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
            />
            <path
                d="M18.8821 14.5889L1.00049 14.5889"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
            />
            <path
                d="M17.1375 5.81946L0.999962 5.8037"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
            />
            <path
                d="M21.499 1.41138L1.00005 1.41138"
                stroke="white"
                stroke-width="2"
                stroke-linecap="round"
            />
        </svg>
    </div>
</template>

<style></style>
