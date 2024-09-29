<script setup>
import { useForm, Link } from "@inertiajs/vue3";
import { ref } from "vue";
import App from "../../Layout/App.vue";
import TitleContent from "../../Components/Icons/TitleContent.vue";
import ListBoxGender from "../../Components/Registration/ListBoxGender.vue";

const titleContent = [{ label: "Created Registration" }];

const form = useForm({
    first_name: null,
    last_name: null,
    dob: null,
    gender: null,
    phone_number: null,
    email: null,
    address: null,
    instance: null,
});

const peopleArray = [{ name: "Male" }, { name: "Famele" }];

const selectedPersonObject = ref(peopleArray[0]);

const updateSelectedPerson = (person) => {
    selectedPersonObject.value = person;
};

function submit() {
    console.log(form);
}
</script>

<template>
    <App>
        <Link :href="route('registration.index')">
        <TitleContent :title="titleContent" />
        </Link>

        <div class="card-white mt-3">
            <div class="bg-primaryColor text-white rounded-t-md px-4 py-2">
                Registration
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
                                <label class="text-nowrap">Date of Birth<span class="text-danger">*</span></label>
                                <div class="block w-9/12">
                                    <input v-model="form.dob" class="input-default" type="text"
                                        placeholder="last name" />
                                </div>
                            </div>
                            <div class="flex items-baseline justify-between w-full gap-2">
                                <label class="text-nowrap">Gender<span class="text-danger">*</span></label>
                                <div class="block w-9/12">
                                    <ListBoxGender :people="peopleArray" :selectedPerson="selectedPersonObject"
                                        @update:selectedPerson="updateSelectedPerson
                                            " />
                                </div>
                            </div>
                            <div class="flex items-baseline justify-between w-full gap-2">
                                <label class="text-nowrap">Phone Number<span class="text-danger">*</span></label>
                                <div class="block w-9/12">
                                    <input v-model="form.phone_number" class="input-default" type="text"
                                        placeholder="last name" />
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
                                <div class="flex items-start justify-between w-full gap-2">
                                    <label class="text-nowrap mt-2">Address</label>
                                    <textarea v-model="form.address" class="input-default h-[100px] w-9/12"
                                        placeholder="address"></textarea>
                                </div>
                                <div class="flex items-start justify-between w-full gap-2">
                                    <label class="text-nowrap mt-2">Insurance
                                    </label>
                                    <textarea v-model="form.instance" class="input-default h-[100px] w-9/12"
                                        placeholder="insurance"></textarea>
                                </div>
                                <div class="flex justify-end w-full">
                                    <button class="button-primary px-12">
                                        Created
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </App>
</template>

<style></style>
