<script setup>
import App from "../../Layout/App.vue";
import {reactive} from  "vue"
import TitleContent from "../../Components/Icons/TitleContent.vue";
import NoRecord from "../../Components/NoRecord.vue";


const titleContent = [{ label: "Regisration Management" }];

const listRegistrations = reactive([
    {
        id: 1,
        first_name: "Ra",
        last_name: "Panha",
        phone_number: "089 123 125",
        email: "rapanhalucky@email.com"
    },
    {
        id: 2,
        first_name: "Ra",
        last_name: "Panha",
        phone_number: "089 123 125",
        email: "rapanhalucky@email.com"
    },
    {
        id: 3,
        first_name: "Ra",
        last_name: "Panha",
        phone_number: "089 123 125",
        email: "rapanhalucky@email.com"
    },
    {
        id: 4,
        first_name: "Ra",
        last_name: "Panha",
        phone_number: "089 123 125",
        email: "rapanhalucky@email.com"
    },
])

</script>

<template>
    <App>
        <TitleContent :title="titleContent" />

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
                        v-for="(item, index ) in listRegistrations" :key="index"
                    class="divide-x divide-y border-b border-x text-center">
                        <td class="p-2">{{ item.id }}</td>
                        <td class="p-2">{{ item.first_name }}</td>
                        <td class="p-2">{{ item.last_name }}</td>
                        <td class="p-2">{{ item.phone_number }}</td>
                        <td class="p-2">{{ item.email }}</td>
                        <td class="p-2"></td>
                    </tr>

                    <!-- === If is Not Items == -->
                    <tr>
                        <NoRecord />
                    </tr>
                </tbody>
            </table>
        </div>
    </App>
</template>

<style></style>
