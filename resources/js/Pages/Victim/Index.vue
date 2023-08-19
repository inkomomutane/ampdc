<template>
    <Head title="Víctima de VBG" />
    <AuthenticatedLayout>
        <div class=" flex justify-center content-center">
            <div class="w-[90%] sm:w-[80%] md:w-1/2 bg-white p-8">
             {{ victim.name }}
             {{  victim.contact }}
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
defineProps({
    victim: {
        type: Object,
        required: true,
    },
});
</script>
