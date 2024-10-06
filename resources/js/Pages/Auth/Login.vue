<script setup>
import InputField from '../../Components/InputField.vue';
import Button from '../../Components/Button.vue';
import { Link, useForm, router } from '@inertiajs/vue3';

const form = useForm({
    email: null,
    password: null,
});

function submit() {
    const data = form.data();
    router.post(route("auth.login"), data);
}
</script>

<template>
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="min-w-96 p-4 rounded-md shadow-lg">
            <h1 class="text-center text-lg font-bold">Login System</h1>
            <form @submit.prevent="submit">
                <InputField v-model="form.email" label="Email" type="text" placeholder="email" />
                <InputField v-model="form.password" label="Password" type="password" placeholder="********" />
                <div>
                    <Link :href="route('auth.register')" class="text-sm text-blue-500 hover:underline">Don't Have
                    account?
                    </Link>
                </div>
                <Button class="my-4" type="submit">Login</Button>
            </form>
        </div>
    </div>
</template>

<style scoped></style>
