<script setup>
import { computed } from 'vue';

const props = defineProps({
    label: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: 'text',
    },
    placeholder: {
        type: String,
        required: true,
    },
    modelValue: {
        type: String,
        default: '',
    },
});

const emit = defineEmits(['update:modelValue']);

const inputValue = computed({
    get: () => props.modelValue,
    set: (value) => emit('update:modelValue', value),
});
</script>

<template>
    <div class="flex flex-col justify-start gap-1 my-2">
        <label class="text-sm font-medium text-gray-700">{{ label }}</label>
        <input :type="type" :placeholder="placeholder" v-model="inputValue"
            class="px-4 py-2 rounded-md bg-white ring-1 ring-slate-300 focus:ring-1 focus:ring-slate-400 outline-none hover:bg-slate-50"
            required />
    </div>
</template>


<style scoped></style>
