<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import CreateCase from "./CreateCase.vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
defineProps({
    violence_type: {
        type: Array<App.Data.ViolenceTypeData>,
        required: true,
    },
});
</script>

<template>
    <Head title="Atendimento" />
    <AuthenticatedLayout>
        <div>
            <CreateCase :violence_type="violence_type" />
        </div>
    </AuthenticatedLayout>
</template>
