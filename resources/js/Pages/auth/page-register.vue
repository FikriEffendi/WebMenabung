<template>
    <div>
        <form action="" @submit.prevent="submit">
            <input type="text" v-model="form.name" placeholder="Name" />
            <input type="text" v-model="form.email" placeholder="Email" />
            <input type="text" v-model="form.password" placeholder="Password" />
            <input
                type="text"
                v-model="form.password_confirmation"
                placeholder="Confirm Password"
            />
        </form>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post("/register");
};
</script>

<style lang="scss" scoped></style>
