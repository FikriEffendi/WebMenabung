<template>
    <div class="flex justify-center items-center min-h-screen">
        <div
            class="bg-gray-300 w-full max-w-sm h-96 rounded flex flex-col items-center gap-4 p-4"
        >
            <img
                src="/public/images/logo.svg"
                alt="Logo"
                class="max-w-[80%] max-h-[30%] w-full aspect-3/4"
            />
            <form action="" @submit="submit" class="space-y-3 w-full">
                <div class="space-y-1">
                    <label for="" class="block text-lg">Email</label>
                    <input
                        class="border w-full px-0.5 rounded"
                        type="text"
                        v-model="form.email"
                        placeholder="Email"
                    />
                </div>
                <div class="space-y-1">
                    <label for="" class="block text-lg">Password</label>
                    <input
                        class="border w-full px-0.5 rounded"
                        type="text"
                        v-model="form.password"
                        placeholder="Password"
                    />
                </div>
            </form>
            <div
                class="flex flex-col items-center gap-3 justify-center w-full h-full"
            >
                <div
                    class="w-full px-20 py-0.5 rounded text-center hover:bg-amber-100 bg-amber-200"
                >
                    Login
                </div>
                <div
                    class="w-full px-20 py-0.5 rounded text-center hover:bg-amber-100 bg-amber-200"
                >
                    Register
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    email: "",
    password: "",
});

const submit = () => {
    form.post("/login");
};
</script>

<style lang="scss" scoped></style>
