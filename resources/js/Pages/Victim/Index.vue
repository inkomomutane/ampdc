<template>
    <Head title="Víctima de VBG" />
    <AuthenticatedLayout className="bg-slate-100">
        <div class="grid grid-cols-1 md:grid-cols-10 justify-center content-center items-start w-[90%] md:w-[80%] mx-auto">
            <div
                class="md:col-span-6 bg-white p-8 rounded-sm text-sm text-gray-600 space-y-2 mb-2"
            >
                <header
                    class="border-b border-gray-200 pb-3 text-md font-semibold"
                >
                    Dados pessoais
                </header>

                <div class="w-full text-start">
                    <strong>Idade: </strong> {{ victim.age }} anos
                </div>
                <div class="w-full text-start">
                    <strong>Conctato: </strong> {{ victim.contact }}
                </div>

                <div class="flex w-full text-start border-y py-1">
                    <strong class="mr-2">
                        <svg
                            class="w-5 h-5"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                        >
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9l4.95-4.95zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
                                ></path>
                            </g>
                        </svg>
                    </strong>
                    {{ victim.neighborhood?.name }}
                </div>
                <div class="w-full text-start">
                    <strong>Tipo de violência: </strong>
                    {{ victim.violence?.name }}
                </div>

                <div class="w-full text-start">
                    <strong class="">Detalhes da violência: </strong>
                    <p v-html="victim.violence_description" class="mt-2"></p>
                </div>
            </div>
            <div class="md:col-span-4 flex flex-col  bg-white  md:mx-2 p-8 text-sm text-gray-600 space-y-2 ">
                <header
                    class=" pb-3 text-md font-semibold"
                >
                    Resolução dos casos da vítima
                </header>
                <div class="w-full ">
                  <ul class="border-b">
                        <li class="flex flex-row  items-center p-2 pl-0  border-t" v-for="status in victim.statuses">
                            <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-md dark:bg-gray-600 mx-1">
                                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="flex flex-col mx-1 items-start justify-start content-start">
                               <div class="font-semibold uppercase"> {{ status.organization?.name }} </div>
                                <div class="first-letter:uppercase lowercase p-1 text-xs font-semibold  text-white w-full rounded-sm" :class="statusBg(status.status)"> {{ status.status }} </div>
                            </div>
                        </li>
                  </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { PropType } from "vue";
import { Head } from "@inertiajs/vue3";
import { statusBg } from "@/Helpers/helpers";
defineProps({
    victim: {
        type: Object as PropType<App.Data.VictimData>,
        required: true,
    },
});
</script>
