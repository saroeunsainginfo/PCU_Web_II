<script setup>
import InputField from '../../Components/InputField.vue';
import Button from '../../Components/Button.vue';
import { Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    username: null,
    email: null,
    password: null,
    conform_password: null,
});

function submit() {
    console.log(form);
}
</script>

<template>
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="min-w-96 p-4 rounded-md shadow-lg">
            <h1 class="text-center text-lg font-bold">Register</h1>
            <form @submit.prevent="submit">
                <InputField v-model="form.username" label="Username" type="text" placeholder="username" />
                <InputField v-model="form.email" label="Email" type="text" placeholder="email" />
                <InputField v-model="form.password" label="Password" type="password" placeholder="********" />
                <InputField v-model="form.conform_password" label="Confirm Password" type="password"
                    placeholder="********" />
                <div>
                    <Link :href="route('auth.login')" class="text-sm text-blue-500 hover:underline">Have account?</Link>
                </div>
                <Button class="my-4" type="submit">Register</Button>
            </form>
        </div>
    </div>
</template>

<style scoped></style>
