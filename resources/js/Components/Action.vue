<script setup>
import { defineProps, defineEmits } from "vue";
import EditIcon from "./Icons/EditIcon.vue";
import DeleteIcon from "./Icons/DeleteIcon.vue";

const props = defineProps({
    id: {
        type: [String, Number],
        required: true,
    },
});

const emit = defineEmits(["edit", "delete"]);

const editItem = () => {
    emit("edit", props.id);
};
const deleteItem = () => {
    emit("delete", props.id);
};
</script>
<template>
    <div class="flex space-x-2">
        <button
            class="inline-flex items-center px-2 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
            @click="editItem"
        >
            <EditIcon /> Edit
        </button>

        <button
            class="inline-flex items-center px-2 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500"
            @click="deleteItem"
        >
            <DeleteIcon />Delete
        </button>
    </div>
</template>
<style scoped></style>
