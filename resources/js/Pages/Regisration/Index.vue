<script setup>
import App from "../../Layout/App.vue";
import { Link } from "@inertiajs/vue3";
import { defineProps } from "vue";
import TitleContent from "../../Components/Icons/TitleContent.vue";
import NoRecord from "../../Components/NoRecord.vue";

const props = defineProps({
    registrations: Array,
});

const titleContent = [{ label: "Regisration Management" }];
</script>

<template>
    <App>
        <div class="flex justify-between items-center">
            <TitleContent :title="titleContent" />
            <Link
                :href="route('regisration.create')"
                role="button"
                class="button-primary px-12"
            >
                Create Registration
            </Link>
        </div>
        <div class="overflow-auto mt-4">
            <table class="table-auto min-w-max w-full bg-white">
                <thead class="h-10">
                    <tr
                        class="bg-primaryColor text-white divide-x divide-greyBorderColor"
                    >
                        <th class="px-2 font-bold">#</th>
                        <th class="px-2 text-nowrap">First Name</th>
                        <th class="px-2 text-nowrap">Last Name</th>
                        <th class="px-2">Phone Number</th>
                        <th class="px-2">Email</th>
                        <th class="px-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        v-if="registrations.length"
                        v-for="(item, index) in registrations"
                        :key="index"
                        class="divide-x divide-y border-b border-x text-center"
                    >
                        <td class="p-2">{{ index + 1 }}</td>
                        <td class="pl-6 text-left">{{ item.first_name }}</td>
                        <td class="pl-6 text-left">{{ item.last_name }}</td>
                        <td class="pl-6 text-left">{{ item.phone }}</td>
                        <td class="pl-6 text-left">{{ item.email }}</td>
                        <td class="p-2">
                            <SelectAction
                                class="flex justify-center items-center"
                                :data="item"
                                :modify-options="modifyOptions"
                            />
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

<style></style>
