<script setup>
import { useForm } from "@inertiajs/vue3";
import Input from "../../Components/Input.vue";
import ButtonLogin from "../../Components/ButtonLogin.vue";
</script>

<template>
    <div class="relative h-screen w-screen flex justify-center items-center">
        <div
            class="absolute bottom-32 left-[29rem] -z-1 left w-24 h-24 bg-blue-800 rounded-full"
        ></div>
        <div class="z-20 p-10 rounded-sm shadow-2xl md:w-[30rem] bg-white">
            <form class="flex flex-col">
                <div class="mb-5">
                    <h3 class="text-xl font-bold">Sign In</h3>
                    <p class="text-gray-400">Get access to your account.</p>
                </div>
                <Input
                    label_name="Username/Email"
                    placeholder="username/email"
                    type="text"
                />
                <Input
                    label_name="Password"
                    placeholder="********"
                    type="password"
                />
                <ButtonLogin btn_login="Login" class="mt-2" />
            </form>
        </div>
        <div
            class="absolute -z-1 top-36 right-[30rem] w-16 h-16 bg-blue-800 rounded-full"
        ></div>
    </div>
</template>

<style></style>
