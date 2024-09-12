<script setup>
import { defineProps } from "vue";

const props = defineProps({
    visible: {
        type: Boolean,
        required: true,
    },
});
</script>
<template>
    <div
        v-if="visible"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    >
        <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-4">
            <div>
                <slot></slot>
            </div>
        </div>
    </div>
</template>
