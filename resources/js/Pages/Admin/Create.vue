<script setup>
import { useForm, Link } from "@inertiajs/vue3";
import App from "../../Layout/App.vue";
import TitleContent from "../../Components/Icons/TitleContent.vue";

const titleContent = [{ label: "Created Admin" }];

const form = useForm({
    first_name: null,
    last_name: null,
    username: null,
    email: null,
    password: null,
    confirm_password: null,
});

function submit() {
    console.log(form);
}
</script>

<template>
    <App>
        <Link :href="route('admin.index')">
        <TitleContent :title="titleContent" />
        </Link>

        <div class="card-white mt-3">
            <div class="bg-primaryColor text-white rounded-t-md px-4 py-2">
                Admin
            </div>
            <div>
                <form @submit.prevent="submit" class="w-full p-3.5">
                    <div class="flex w-full gap-14 justify-between">
                        <div class="gap-4 w-full flex h-min flex-col justify-between items-center">
                            <div class="flex items-baseline justify-between w-full gap-2">
                                <label class="text-nowrap">First Name
                                    <span class="text-danger">*</span></label>
                                <div class="block w-9/12">
                                    <input v-model="form.first_name" class="input-default" type="text"
                                        placeholder="first name" />
                                </div>
                            </div>
                            <div class="flex items-baseline justify-between w-full gap-2">
                                <label class="text-nowrap">Last Name
                                    <span class="text-danger">*</span></label>
                                <div class="block w-9/12">
                                    <input v-model="form.last_name" class="input-default" type="text"
                                        placeholder="last name" />
                                </div>
                            </div>
                            <div class="flex items-baseline justify-between w-full gap-2">
                                <label class="text-nowrap">Username
                                </label>
                                <div class="block w-9/12">
                                    <input v-model="form.username" class="input-default" type="text"
                                        placeholder="username" />
                                </div>
                            </div>
                            <div class="flex items-center justify-between w-full gap-2">
                                <label class="flex justify-around gap-2 items-center">Email
                                </label>
                                <input v-model="form.email" class="input-default w-9/12" type="email"
                                    placeholder="email" />
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="gap-4 flex w-full flex-col justify-between items-center">
                                <div class="flex items-center justify-between w-full gap-2">
                                    <label class="flex justify-around gap-2 items-center">Password<span
                                            class="text-danger">*</span>
                                    </label>
                                    <input v-model="form.password" class="input-default w-9/12" type="password"
                                        placeholder="passwrod" />
                                </div>
                                <div class="flex items-center justify-between w-full gap-2">
                                    <label class="flex justify-around gap-2 items-center text-nowrap">Confirm
                                        Password<span class="text-danger">*</span>
                                    </label>
                                    <input v-model="form.confirm_password" class="input-default w-9/12" type="password"
                                        placeholder="confirm password" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end w-full">
                        <button class="button-primary px-12">
                            Created
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </App>
</template>

<style></style>
