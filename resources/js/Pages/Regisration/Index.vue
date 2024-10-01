<script setup>
import App from "../../Layout/App.vue";
import { Link, usePage } from "@inertiajs/vue3";
import { defineProps } from "vue";
import TitleContent from "../../Components/Icons/TitleContent.vue";
import NoRecord from "../../Components/NoRecord.vue";
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
import EditIcon from "../../Components/Icons/EditIcon.vue";
import DeleteIcon from "../../Components/Icons/DeleteIcon.vue";

const props = defineProps({
    registrations: {
        type: Array,
        required: true,
        default: () => [],
    },
});

const titleContent = [{ label: "Registration Management" }];
</script>

<template>
    <App>
        <div class="flex justify-between items-center">
            <TitleContent :title="titleContent" />
            <Link :href="route('registration.create')" role="button" class="button-primary px-12">
            Create Registration
            </Link>
        </div>

        <div class="overflow-auto mt-4">
            <table class="table-auto min-w-max w-full bg-white">
                <thead class="h-10">
                    <tr class="bg-primaryColor text-white divide-x divide-greyBorderColor">
                        <th class="px-2 font-bold">#</th>
                        <th class="px-2 text-nowrap">First Name</th>
                        <th class="px-2 text-nowrap">Last Name</th>
                        <th class="px-2">Phone Number</th>
                        <th class="px-2">Email</th>
                        <th class="px-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-if="registrations && registrations.length" v-for="(item, index) in registrations" :key="index"
                        class="divide-x divide-y border-b border-x text-center">
                        <td class="p-2">{{ index + 1 }}</td>
                        <td class="pl-6 text-left">{{ item.first_name }}</td>
                        <td class="pl-6 text-left">{{ item.last_name }}</td>
                        <td class="pl-6 text-left">{{ item.phone }}</td>
                        <td class="pl-6 text-left">{{ item.email }}</td>
                        <td class="p-2 ">
                            <div class="flex justify-center items-center w-full gap-3">
                                <Menu as="div" class="relative pt-1" v-slot="{ open }">
                                    <MenuButton class="w-auto h-full inline-flex items-center gap-1">

                                        <p color="white" :class="[
                                            open ? 'rotate-0 ' : 'rotate-0',
                                            'transition-all',
                                        ]">...</p>
                                    </MenuButton>

                                    <transition enter-active-class="transition duration-100 ease-out"
                                        enter-from-class="transform scale-95 opacity-0"
                                        enter-to-class="transform scale-100 opacity-100"
                                        leave-active-class="transition duration-75 ease-in"
                                        leave-from-class="transform scale-100 opacity-100"
                                        leave-to-class="transform scale-95 opacity-0">
                                        <MenuItems
                                            class="absolute z-20 right-0 w-72 origin-top-right rounded-md border border-lightGreyColor bg-white shadow-lg focus:outline-none">
                                            <div class="text-center text-black pt-3">
                                                <hr class="my-3" />
                                                <MenuItem v-slot="{ active }">
                                                <Link :class="[
                                                    active ? 'bg-lightGreyColor' : '',
                                                    'group flex w-full items-center px-3 py-2 transition-colors',
                                                ]">
                                                <EditIcon size="20" class="mr-2" />
                                                Update
                                                </Link>
                                                </MenuItem>
                                                <MenuItem v-slot="{ active }">
                                                <Link :class="[
                                                    active ? 'bg-lightGreyColor' : '',
                                                    'group flex w-full items-center px-3 py-2 transition-colors',
                                                ]">
                                                <DeleteIcon size="20" class="mr-2" />
                                                <p class="text-red-500">Delete</p>
                                                </Link>
                                                </MenuItem>
                                                <hr class="my-3" />
                                            </div>
                                        </MenuItems>
                                    </transition>
                                </Menu>
                            </div>
                        </td>
                    </tr>
                    <tr v-else>
                        <NoRecord />
                    </tr>
                </tbody>
            </table>
        </div>
    </App>
</template>

<style scoped>
/* Add your styles if needed */
</style>
