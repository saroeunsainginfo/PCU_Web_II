<script setup>
import { useForm } from "@inertiajs/vue3";
import Input from "../../Components/Input.vue";
import ButtonLogin from "../../Components/ButtonLogin.vue";
import CircleRight from "../../Components/CircleLeft.vue";
import CircleLeft from "../../Components/CircleLeft.vue";

const form = useForm({
    username: null,
    password: null,
    password_confirm: null,
});

function submit() {
    console.log(form);
}
</script>

<template>
    <div class="h-screen w-screen flex justify-center items-center">
        <div class="absolute top-[7.8rem] right-[30.7rem]">
            <CircleRight class="w-10 h-10" />
            <CircleRight class="w-10 h-10" />
            <CircleRight class="w-14 h-14" />
        </div>
        <div
            class="relative z-10 p-10 rounded-sm shadow-md md:w-[30rem] bg-white"
        >
            <form @submit.prevent="submit" class="flex flex-col">
                <div class="mb-5">
                    <h3 class="text-xl font-bold">Sign In</h3>
                    <p class="text-gray-400">Get access to your account.</p>
                </div>
                <Input
                    label_name="Username/Email"
                    placeholder="username/email"
                    type="text"
                    v-model="form.username"
                />
                <Input
                    label_name="Password"
                    placeholder="********"
                    type="password"
                    v-model="form.password"
                />
                <Input
                    label_name="Confirm Password"
                    placeholder="********"
                    type="password"
                    v-model="form.password_confirm"
                />
                <ButtonLogin btn_login="Login" class="mt-2" />
            </form>
        </div>
        <div class="absolute bottom-[7rem] left-[31rem]">
            <CircleLeft class="w-10 h-10" />
            <CircleLeft class="w-16 h-16" />
            <CircleLeft class="w-10 h-10" />
        </div>
    </div>
</template>

<style></style>
