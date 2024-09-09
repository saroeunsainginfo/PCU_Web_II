<script setup>
const props = defineProps({
    colspan:{
        type: Number,
        default: 20
    },
    text: {
        type: String
    }
})
</script>

<template>
     <td :colspan="colspan" class="text-center">
        <p class="my-2 text-gray-600 font-bold">{{ text ?? "Not Data" }}</p>
    </td>
</template>

<style>

</style>
