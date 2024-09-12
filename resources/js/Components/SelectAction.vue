<script setup>
import { ref } from "vue";
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
import HastagIcon from "./Icons/HastagIcon.vue";
import DocumentIcon from "./Icons/DocumentIcon.vue";
import MatchResultModal from "./MatchResultModal.vue";
import InputUsername from "./InputUsername.vue";

const isModalOpen = ref(false);

const openModal = () => {
    isModalOpen.value = true;
};
const closeModal = () => {
    isModalOpen.value = false;
};
</script>

<template>
    <div>
        <Menu as="div" class="relative inline-block text-left">
            <div>
                <MenuButton
                    class="inline-flex w-full justify-center items-center rounded-md px-4 py-2 text-sm font-medium hover:bg-lightGreyHoverColor focus:outline-none focus-visible:ring-2 focus-visible:ring-white/75"
                >
                    ...
                </MenuButton>
            </div>

            <transition
                enter-active-class="transition duration-100 ease-out"
                enter-from-class="transform scale-95 opacity-0"
                enter-to-class="transform scale-100 opacity-100"
                leave-active-class="transition duration-75 ease-in"
                leave-from-class="transform scale-100 opacity-100"
                leave-to-class="transform scale-95 opacity-0"
            >
                <MenuItems
                    class="absolute z-10 right-0 mt-2 w-56 divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none"
                >
                    <div class="px-1 py-1">
                        <MenuItem>
                            <button
                                class="group flex w-full items-center rounded-md px-2 py-2 text-sm hover:bg-scaffoldBackground"
                                @click="openModal"
                            >
                                <DocumentIcon class="mr-2" aria-hidden="true" />
                                Match Result
                            </button>
                        </MenuItem>
                        <MenuItem>
                            <button
                                class="group flex w-full items-center rounded-md px-2 py-2 text-sm hover:bg-scaffoldBackground"
                            >
                                <DocumentIcon class="mr-2" aria-hidden="true" />
                                Modified Pending Result
                            </button>
                        </MenuItem>
                        <MenuItem>
                            <button
                                class="group flex w-full items-center rounded-md px-2 py-2 text-sm hover:bg-scaffoldBackground"
                            >
                                <HastagIcon class="mr-2" aria-hidden="true" />
                                Update Fight Number
                            </button>
                        </MenuItem>
                    </div>
                </MenuItems>
            </transition>
        </Menu>

        <MatchResultModal :visible="isModalOpen" @close="closeModal">
            <form>
                <div
                    class="flex flex-col justify-between text-left items-center"
                >
                    <div class="flex flex-col w-full gap-3.5">
                        <div class="flex items-center">
                            <span class="basis-2/6 text-nowrap"
                                >Current result</span
                            >
                            <InputUsername class="w-full" />
                        </div>
                        <div class="flex items-center">
                            <span class="basis-2/6 text-nowrap"
                                >Modifier To</span
                            >
                            <InputUsername class="w-full" />
                        </div>
                        <div class="flex justify-end gap-3.5">
                            <button
                                type="button"
                                class="button-primary px-8 py-2 font-bold"
                                @click="closeModal"
                            >
                                Cancel
                            </button>
                            <button
                                type="button"
                                class="button-primary px-8 py-2 font-bold"
                                @click="closeModal"
                            >
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </MatchResultModal>
    </div>
</template>
