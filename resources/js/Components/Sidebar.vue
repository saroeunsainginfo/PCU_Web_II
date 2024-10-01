<script setup>
import MenuItem from "./MenuItem.vue";
import DentistIcon from "./Icons/DentistIcon.vue";
import DashboardIcon from "./Icons/DashboardIcon.vue";
import AdminIcon from "./Icons/AdminIcon.vue";

const menuPatient = [
    { title: "1.1. Registration", href: "registration.index" },
];

const prop = defineProps({
    isCollapsed: Boolean,
});
</script>

<template>
    <aside :class="{ 'sidebar-width': true, 'sidebar-collapsed': isCollapsed }"
        class="flex-shrink-0 flex flex-col justify-between h-full bg-white text-black overflow-y-auto shadow-md">
        <div>
            <MenuItem :index="1" title="Dashboard" :href="route('dashboard.index')">
            <template v-slot:icon>
                <DashboardIcon fill="black" />
            </template>
            </MenuItem>
            <MenuItem :index="1" title="Admin" :href="route('admin.index')">
            <template v-slot:icon>
                <AdminIcon fill="black" />
            </template>
            </MenuItem>
            <MenuItem :index="1" title="Dentist" :href="route('dentist.index')">
            <template v-slot:icon>
                <DentistIcon fill="black" />
            </template>
            </MenuItem>
        </div>

        <p class="text-gray-400 text-center mb-2">Version 1.0</p>
    </aside>
</template>

<style scoped></style>
