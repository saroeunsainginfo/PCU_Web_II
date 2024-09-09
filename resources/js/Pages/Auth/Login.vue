<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import Input from "../../Components/Input.vue";
import ButtonLogin from "../../Components/ButtonLogin.vue";
import CircleRight from "../../Components/CircleLeft.vue";
import CircleLeft from "../../Components/CircleLeft.vue";
import EyeIcon from "../../Components/Icons/EyeIcon.vue";

const form = useForm({
    username: null,
    password: null,
    password_confirm: null,
});

const passwordVisible = ref(false);

function togglePasswordVisibility() {
    passwordVisible.value = !passwordVisible.value;
}

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
                <div>
                    <label
                        class="mb-1 inline-block text-gray-700"
                        for="password"
                    >
                        Username/Email
                    </label>
                    <div class="relative h-10">
                        <input
                            v-model="form.username"
                            class="input-subfix-icon"
                            :class="[
                                form.errors.username
                                    ? 'border-danger'
                                    : 'border-greyBorderColor',
                            ]"
                            placeholder="username/email"
                        />

                    </div>

                    <div
                        v-if="form.errors.username"
                        class="text-xs text-danger"
                    >
                        {{ form.errors.username }}
                    </div>
                </div>
                <div>
                    <label
                        class="mb-1 inline-block text-gray-700"
                        for="password"
                    >
                        Password
                    </label>
                    <div class="relative h-10">
                        <input
                            :type="passwordVisible ? 'text' : 'password'"
                            v-model="form.password"
                            class="input-subfix-icon"
                            :class="[
                                form.errors.password
                                    ? 'border-danger'
                                    : 'border-greyBorderColor',
                            ]"
                            placeholder="············"
                        />
                        <div role="button" @click="togglePasswordVisibility">
                            <EyeIcon
                                class="absolute right-2 top-1/2 translate-y-[-50%]"
                                :size="24"
                            >
                            </EyeIcon>
                        </div>
                    </div>

                    <div
                        v-if="form.errors.password"
                        class="text-xs text-danger"
                    >
                        {{ form.errors.password }}
                    </div>
                </div>

                <div class="block">
                    <input
                        class="mt-1 mr-2 h-5 w-5 appearance-none rounded border border-gray-300 bg-contain bg-no-repeat align-top text-black shadow checked:bg-primaryColor focus:border-indigo-500 focus:shadow cursor-pointer"
                        type="checkbox"
                        id="remember-me"
                        v-model="form.remember"
                        style="
                            background-image: url('data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 20 20\'%3e%3cpath fill=\'none\' stroke=\'%23fff\' stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M6 10l3 3l6-6\'/%3e%3c/svg%3e');
                        "
                    />

                    <label class="inline-block" for="remember-me">
                        Remember Me
                    </label>
                </div>
                <ButtonLogin btn_login="Sign In" class="mt-2" />
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
