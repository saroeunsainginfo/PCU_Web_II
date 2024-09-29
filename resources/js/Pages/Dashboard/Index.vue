<script setup>
import App from "../../Layout/App.vue";
import ArrowDownIcon from "../../Components/Icons/ArrowDownIcon.vue";
import TitleContent from "../../Components/Icons/TitleContent.vue";

const titleContent = [{ label: "Dashboard" }];

</script>

<template>
    <App>
        <TitleContent :title="titleContent" />

        <div class="grid grid-cols-5 gap-3 mt-3">
            <Link href="#" class="card-white text-center h-32 relative center-in-flex justify-center">
            <div class="block">
                Appointments
                <p class="font-bold text-2xl text-primaryColor">32</p>
            </div>
            </Link>
            <Link href="#" class="card-white text-center h-32 relative center-in-flex justify-center">
            <div class="block">
                Pending Invoices
                <p class="font-bold text-2xl text-primaryColor">193</p>
            </div>
            </Link>
            <Link href="#" class="card-white text-center h-32 relative center-in-flex justify-center">
            <div class="block">
                New Patients
                <p class="font-bold text-2xl text-primaryColor">3,492</p>
            </div>
            </Link>
            <Link href="#" class="card-white text-center h-32 relative center-in-flex justify-center">
            <div class="block">
                Inventory Alerts
                <p class="font-bold text-2xl text-primaryColor">19,290</p>
            </div>
            </Link>
            <div class="card-white text-center h-32 relative center-in-flex justify-center">
                <div class="block">
                    Dentist Availability
                    <p class="font-bold text-2xl text-primaryColor">43/100</p>
                </div>
            </div>
            <div class="card-white text-center h-32 relative center-in-flex justify-center">
                <div class="block">
                    Treatment Statistics
                    <p class="font-bold text-2xl text-primaryColor">43/100</p>
                </div>
            </div>
            <div class="card-white text-center h-32 relative center-in-flex justify-center">
                <div class="block">
                    System Notifications
                    <p class="font-bold text-2xl text-primaryColor">43/100</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:flex md:flex-wrap gap-x-3 p-3">
            <div class="p-3">
                <img src="/public/assets/static-chart.png" alt="">
            </div>
        </div>
    </App>
</template>

<style></style>
