<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import CreateCase from "./CreateCase.vue";
import { Statuses } from "@/types/index";
import { PropType } from "vue";
import { watch } from "vue";
import { ref } from "vue";
import { statusBg } from "@/Helpers/helpers";
const props = defineProps({
    violence_types: {
        type: Array<App.Data.ViolenceTypeData>,
        required: true,
    },
    neighborhoods: {
        type: Array<App.Data.NeighborhoodData>,
        required: true,
    },
    organizations: {
        type: Array<App.Data.OrganizationData>,
        required: true,
    },
    victims: {
        type: Object as PropType<Statuses>,
        required: true,
    },
});
const links = ref(props.victims.links);
watch(
    () => props.victims.links,
    (value) => {
        links.value = value;
    }
);
</script>

<template>
    <Head title="Atendimento" />
    <AuthenticatedLayout>
        <div>
            <CreateCase
                :organizations="organizations"
                :violence_types="violence_types"
                :neighborhoods="neighborhoods"
            />
            <div>
                <div
                    class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4"
                >
                    <table
                        class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr class="border-b">
                                <th scope="col" class="px-6 py-3">
                                    Nome completo
                                </th>
                                <th scope="col" class="px-6 py-3">Idade</th>
                                <th scope="col" class="px-6 py-3">Bairro</th>
                                <th scope="col" class="px-6 py-3">
                                    Tipo de violência
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="">Estado do caso</span>
                                </th>
                                <th scope="col" class="px-6 py-3">ver dados</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="odd:bg-white even:bg-zinc-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                v-for="status in victims.data"
                                :key="(status.id as number)"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    {{ status.victim?.name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ status.victim?.age }} anos
                                </td>
                                <td class="px-6 py-4">
                                    {{ status.victim?.neighborhood?.name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ status.victim?.violence?.name }}
                                </td>
                                <td class="px-6 py-4 text-left">
                                    <span
                                        class="p-1 px-2 text-white font-semibold text-xs"
                                        :class="statusBg(status.status)"
                                    >
                                        {{ status.status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-left">
                                    <Link
                                        :href="
                                            route('dashboard.bgv.victim', {
                                                victim: status.victim?.id,
                                            })
                                        "
                                        class="flex w-fit bg-indigo-500 p-1 font-semibold shadow rounded text-xs text-white"
                                    >
                                        <svg
                                            class="w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                            aria-hidden="true"
                                        >
                                            <path
                                                d="M12 15a3 3 0 100-6 3 3 0 000 6z"
                                            ></path>
                                            <path
                                                fill-rule="evenodd"
                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav
                    class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                    aria-label="Table navigation"
                >
                    <span
                        class="text-sm font-normal text-gray-500 dark:text-gray-400"
                    >
                        Showing
                        <span
                            class="font-semibold text-gray-900 dark:text-white"
                            >{{
                                `${victims.meta.from ?? 0}-${
                                    victims.meta.to ?? 0
                                }`
                            }}</span
                        >
                        of
                        <span
                            class="font-semibold text-gray-900 dark:text-white"
                        >
                            {{ victims.meta.total }}</span
                        >
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li
                            v-if="links[0].active"
                            class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >
                            <Link
                                href=""
                                class="flex rounded-l-lg items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                >&laquo; Previous</Link
                            >
                        </li>
                        <li v-else>
                            <Link
                                class="flex rounded-l-lg items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                :href="links[0].url ?? ''"
                                >&laquo; Previous</Link
                            >
                        </li>
                        <li
                            v-for="link in links.slice(1, -1)"
                            :key="link.label"
                        >
                            <Link
                                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                v-if="!link.active"
                                :href="link.url ?? ''"
                                >{{ link.label }}
                            </Link>
                            <span
                                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 border border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                v-else
                                :class="`${
                                    link.active
                                        ? 'bg-gray-700 dark:bg-slate-600 text-white dark:text-slate-100'
                                        : ''
                                }`"
                                >{{ link.label }}</span
                            >
                        </li>
                        <li
                            v-if="links.slice(-1)[0].active"
                            class="disabled flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >
                            <span
                                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                >Next &raquo;</span
                            >
                        </li>
                        <li
                            v-else
                            class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                        >
                            <Link :href="links.slice(-1)[0].url ?? ''"
                                >Next &raquo;</Link
                            >
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
