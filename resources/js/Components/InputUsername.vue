<script setup>
import { validateInputUsername } from "@Admin/Utils/InputUtil.js";

const prop = defineProps({
    placeholder: {
        type: String,
        default: "",
    },
    hasPrefix: {
        type: Boolean,
        default: false,
    },
    maxLength: {
        type: Number,
        default: 4,
    },
    hasError: {
        type: Boolean,
        default: false,
    },
});

const modelValue = defineModel();
</script>

<template>
    <div class="relative h-10">
        <input
            :class="[
                'input-default',
                hasPrefix ? 'rounded-l-md' : 'rounded-l-md',
                hasError ? 'error' : '',
            ]"
            type="text"
            :placeholder="placeholder"
            :value="modelValue"
            @input="
                validateInputUsername($event, {
                    formatted: (newValue) => {
                        modelValue = newValue;
                    },
                })
            "
        />
    </div>
</template>

<style scoped></style>
