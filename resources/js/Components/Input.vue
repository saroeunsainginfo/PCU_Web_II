<script setup>
import { defineProps, defineEmits } from "vue";

const props = defineProps({
    label_name: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        required: true,
    },
    placeholder: {
        type: String,
    },
    modelValue: {
        type: String,
        required: true,
    },
});

const emit = defineEmits(["update:modelvalue"]);
</script>

<template>
    <label for="">{{ label_name }}</label>
    <input
        :type="type"
        :placeholder="placeholder"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        class="p-2 my-2 rounded-md ring-1 ring-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500"
    />
</template>

<style></style>
