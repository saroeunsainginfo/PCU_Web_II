<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { defineProps } from "vue";
import HamburgerIcon from "./Icons/HamburgerIcon.vue";
import SearchOutline from "./Icons/SearchOutline.vue";
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
import ArrowDownIcon from "./Icons/ArrowDownIcon.vue";
import LockPasswordIcon from "./Icons/LockPasswordIcon.vue";
import UserIcon from "./Icons/UserIcon.vue";

const props = defineProps({
    isCollapsed: Boolean,
    toggleSidebar: Function,
});
</script>

<template>
    <header
        class="header-height flex items-center w-full bg-primaryColor text-white"
    >
        <div
            :class="{ 'sidebar-width': true, 'sidebar-collapsed': isCollapsed }"
            class="w-full flex-shrink-0"
        >
            <Link
                :href="route('dashboard.index')"
                :class="{ hidden: isCollapsed }"
                class="text-2xl px-4 font-bold text-nowrap"
                >Dentisted</Link
            >
        </div>
        <div class="flex justify-between items-center w-full gap-3 px-4">
            <div class="inline-flex flex-shrink-0 items-center gap-3">
                <button type="button" class="px-1 py-2" @click="toggleSidebar">
                    <HamburgerIcon />
                </button>
                <div class="relative h-10 w-72">
                    <input
                        class="input-prefix-icon"
                        type="search"
                        placeholder="ស្វែងរក..."
                    />
                    <SearchOutline
                        class="absolute left-2 top-1/2 translate-y-[-50%]"
                        :size="18"
                        color="#C9C9C9"
                    />
                </div>
            </div>
            <div class="flex justify-end items-center w-full gap-3">
                <p class="block">Dentisted</p>
                <Menu as="div" class="relative pt-1" v-slot="{ open }">
                    <MenuButton
                        class="w-auto h-full inline-flex items-center gap-1"
                    >
                        <img
                            class="w-10 h-10 object-cover rounded-full"
                            src="https://i.pinimg.com/564x/2e/51/1d/2e511db66f1b3f4c245dabf90b6e351d.jpg"
                            alt=""
                        />
                        <ArrowDownIcon
                            color="white"
                            :class="[
                                open ? 'rotate-180 ' : 'rotate-0',
                                'transition-all',
                            ]"
                        />
                    </MenuButton>

                    <transition
                        enter-active-class="transition duration-100 ease-out"
                        enter-from-class="transform scale-95 opacity-0"
                        enter-to-class="transform scale-100 opacity-100"
                        leave-active-class="transition duration-75 ease-in"
                        leave-from-class="transform scale-100 opacity-100"
                        leave-to-class="transform scale-95 opacity-0"
                    >
                        <MenuItems
                            class="absolute z-20 right-0 w-72 origin-top-right rounded-md border border-lightGreyColor bg-white shadow-lg focus:outline-none"
                        >
                            <div class="text-center text-black pt-3">
                                <div class="flex justify-center">
                                    <div
                                        class="w-20 h-20 rounded-full border-2 border-lightGreyColor"
                                    >
                                        <img
                                            class="w-full h-full object-cover rounded-full"
                                            src="https://i.pinimg.com/564x/2e/51/1d/2e511db66f1b3f4c245dabf90b6e351d.jpg"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <p class="text-lg text-primaryColor">
                                    Dentisted
                                </p>
                                <hr class="my-3" />
                                <MenuItem v-slot="{ active }">
                                    <Link
                                        :class="[
                                            active ? 'bg-lightGreyColor' : '',
                                            'group flex w-full items-center px-3 py-2 transition-colors',
                                        ]"
                                    >
                                        <UserIcon size="20" class="mr-2" />
                                        Profile
                                    </Link>
                                </MenuItem>
                                <hr class="my-3" />
                                <div class="px-3 pb-3">
                                    <MenuItem>
                                        <Link
                                            :href="route('login')"
                                            class="group flex justify-center w-full bg-lightGreyColor border border-greyBorderColor text-red-500 rounded-md px-2 py-2 hover:bg-lightGreyHoverColor transition-colors"
                                        >
                                            Sign Out
                                        </Link>
                                    </MenuItem>
                                </div>
                            </div>
                        </MenuItems>
                    </transition>
                </Menu>
            </div>
        </div>
    </header>
</template>

<style></style>
