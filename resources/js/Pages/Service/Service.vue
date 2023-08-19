<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import CreateCase from "./CreateCase.vue";
defineProps({
    violence_types: {
        type: Array<App.Data.ViolenceTypeData>,
        required: true,
    },
    neighborhoods : {
        type : Array<App.Data.NeighborhoodData>,
        required:true
    },
    organizations : {
        type : Array<App.Data.OrganizationData>,
            required : true
    }
});
</script>

<template>
    <Head title="Atendimento" />
    <AuthenticatedLayout>
        <div>
            <CreateCase :organizations="organizations" :violence_types="violence_types" :neighborhoods="neighborhoods" />
        </div>
    </AuthenticatedLayout>
</template>
