<script setup>
const props = defineProps({
    size: {
        type: String,
        default: 24
    },
    color: ""
})
</script>

<template>
    <div>
        <svg :width="size" :height="size" viewBox="0 0 24 24" :fill="color" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 12H8.00901M12.0045 12H12.0135M15.991 12H16" stroke="#1C274C" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" />
            <circle cx="12" cy="12" r="10" stroke="#1C274C" stroke-width="1.5" />
        </svg>
    </div>
</template>

<style></style>
