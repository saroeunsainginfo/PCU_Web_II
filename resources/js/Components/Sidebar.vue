<script setup>
import NotificationIcon from './Icons/NotificationIcon.vue';
import MenuItem from './MenuItem.vue';
import ReportIcon from './Icons/ReportIcon.vue';
import RiskIcon from './Icons/RiskIcon.vue';
import StockIcon from './Icons/StockIcon.vue';
import PaymentIcon from './Icons/PaymentIcon.vue';
import SettingIcon from './Icons/SettingIcon.vue';
import MemberIcon from './Icons/MemberIcon.vue';
import DashboardIcon from './Icons/DashboardIcon.vue';
import AppointmentIcon from './Icons/AppointmentIcon.vue';
import InventoryIcon from './Icons/InventoryIcon.vue';

const menuPatient = [
    {title: '1.1. Registration', href: "regisration.index"},
    {title: '1.2. Records', href: "record.index"},
    {title: '1.3. Scheduling', href: "scheduling.index"},
];

const menuDentists = [
    {title: '2.1. Dentist Profiles'},
    {title: '2.2. Schedule'},
];

const menuAppointment = [
    {title: '3.1. Booking',},
    {title: '3.2. Automatic Reminders'},
    {title: '3.2. Real-time ', },
];

const menuTreatment = [
    {title: '4.1. Treatment Plans'},
    {title: '4.2. Procedure Tracking'},
    {title: '4.3. Billing Integration'},
];
const menuReports = [
    {title: '5.1. '},
    {title: '5.2. '},
    {title: '5.3. '},
    {title: '5.4. '},
    {title: '5.5. '},
    {title: '5.6. '},
];

const menuSettings = [
    {title: '6.1. '},
    {title: '6.2. ', href: "dashboard.index"},
    {title: '6.3. '},
];

const prop = defineProps({
    isCollapsed: Boolean,
})

</script>

<template>
    <aside :class="{ 'sidebar-width': true, 'sidebar-collapsed' : isCollapsed }"
           class="flex-shrink-0 h-full bg-primaryColor text-white overflow-y-auto">
        <MenuItem
            :index="1"
            title="Dashboard"
            :href="route('dashboard.index')"
        >
            <template v-slot:icon>
                <DashboardIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <MenuItem
            :index="2"
            title="Patient Management"
            :items="menuPatient"
        >
            <template v-slot:icon>
                <StockIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <MenuItem
            :index="3"
            title="Dentist Management"
            :items="menuDentists"
        >
            <template v-slot:icon>
                <MemberIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <!-- <MenuItem
            :index="4"
            title="Appointment"
            :items="menuAppointment"
        >
            <template v-slot:icon>
                <AppointmentIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <MenuItem
            :index="5"
            title="Treatment"
            :items="menuTreatment"
        >
            <template v-slot:icon>
                <RiskIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <MenuItem
            :index="6"
            title="Payment "
            :items="menuTreatment"
        >
            <template v-slot:icon>
                <PaymentIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <MenuItem
            :index="7"
            title="Inventory"
            :items="menuTreatment"
        >
            <template v-slot:icon>
                <InventoryIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <MenuItem
            :index="8"
            title="Reports"
            :items="menuReports"
        >
            <template v-slot:icon>
                <ReportIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <MenuItem
            :index="9"
            title="Notification"
            :href="route('dashboard.index')"
        >
            <template v-slot:icon>
                <NotificationIcon
                    fill="white"
                />
            </template>
        </MenuItem>
        <MenuItem
            :index="10"
            title="Settings"
            :items="menuSettings"
        >
            <template v-slot:icon>
                <SettingIcon
                    fill="white"
                />
            </template>
        </MenuItem> -->
    </aside>
</template>

<style scoped>
</style>
