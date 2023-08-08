<script setup lang="ts">
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps<{
    canResetPassword?: boolean;
    status?: string;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password');
        },
    });
};
</script>

<template>
<Head title="Log in" />


    <div class="grid lg:grid-cols-2 bg-orange-400 h-screen">
        <div class="col-span-1 flex justify-center  items-center ">
            <div class="w-3/4 md:w-3/6  lg:w-3/5 rounded-sm bg-white p-6 space-y-4 md:space-y-6 sm:p-8 shadow-sm">
                <h1 class="text-xl font-medium leading-tight tracking-tight text-primary-600 md:text-2xl dark:text-white text-center">Faça login na sua conta</h1>
                <form @submit.prevent="submit">
                <div>
                    <InputLabel for="email" value="Email" />
                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 placeholder:text-sm block w-full"
                        v-model="form.email"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Teu email"
                    />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>
                <div class="mt-4">
                    <InputLabel for="password" value="Palavra-passe" />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="current-password"
                        placeholder="•••••••••••••••••"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <div class="flex flex-col  items-start justify-end mt-4">
                    <button class="w-full py-2.5 mb-2 uppercase  bg-primary-500 text-white font-semibold text-sm" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Entrar
                    </button>

                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                        Esqueceu a senha?
                    </Link>


                </div>
            </form>
            </div>
         </div>
        <div class="hidden lg:flex h-full">
            <img class="w-full max-h-screen object-cover" src="@images/stopviolence.jpg" alt="" srcset="">
        </div>

    </div>


</template>