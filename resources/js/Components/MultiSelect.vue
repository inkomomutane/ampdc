<template>
    <MultiSelect
        :modelValue="modelValue"
        :options="options"
        filter
        :optionLabel="optionLabel"
        :optionValue="optionValue"
        :placeholder="placeholder"
        :maxSelectedLabels="maxSelectedLabels"
        :pt="{
                    root:{ class :'flex w-full cursor-pointer  border bg-gray-50  border-gray-300 dark:bg-gray-600 dark:border-gray-500 rounded-sm focus:ring-slate-500 focus:border-slate-500 p-2.5'},
                    panel:{ class: 'bg-white shadow-lg border border-1  p-2 overflow-auto'},
                    trigger: {class: 'pl-4 pr-2 mx-3'},
                    closeButton : {
                        class: 'px-3 '
                    },
                    header: {
                        class : 'py-2'
                    },
                    closeIcon : {
                        class: 'mx-2'
                    },
                    filterIcon: {
                        class : '-ml-6'
                    },
                    filterContainer :{
                        class : 'mx-0 border rounded-sm bg-gray-50 border-gray-400 focus:border-gray-400 focus:ring-0 focus:ring-gray-400'
                    },
                    filterInput : {
                    class: 'border-none ring-0 focus:ring-0 focus:border-none bg-transparent'
                  },
                item: ({ props, state, context } :any) => ({
                class: context.selected ? 'p-1 bg-gray-100 text-gray-900 font-medium p-1 px-4'
                : 'p-1 px-4 hover:bg-gray-50 cursor-pointer'
            }),
                    headerCheckboxContainer:
                        {class:'mx-2 ml-3'},
                    }"
    >
        <template #itemcheckboxicon="slotProps" @click.native.stop>
            <div v-if="slotProps.selected" :class="slotProps.class">
                <div class="inline-block relative mr-1">
                    <div
                        class="w-5 h-5 border-2 focus:ring-2 focus:ring-orange-500 bg-orange-400 text-white border-orange-400 rounded flex justify-center items-center"
                    >
                        <svg
                            class="w-3 h-3"
                            viewBox="0 0 48 48"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                                width="48"
                                height="48"
                                fill="white"
                                fill-opacity="0.01"
                            ></rect>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4 24L9 19L19 29L39 9L44 14L19 39L4 24Z"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="inline-block relative mr-1">
                    <div
                        class="w-5 h-5 border focus:ring-2 focus:ring-gray-500 bg-gray-100 text-transparent border-gray-400 rounded flex justify-center items-center"
                    >
                        <svg
                            class="w-3 h-3"
                            viewBox="0 0 48 48"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                                width="48"
                                height="48"
                                fill="white"
                                fill-opacity="0.01"
                            ></rect>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4 24L9 19L19 29L39 9L44 14L19 39L4 24Z"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
        </template>
        <template #headercheckboxicon="slotProps">
            <div v-if="slotProps.allSelected">
                <div class="inline-block relative mr-1">
                    <div
                        class="w-5 h-5 border-2 focus:ring-2 focus:ring-orange-500 bg-orange-400 text-white border-orange-400 rounded flex justify-center items-center"
                    >
                        <svg
                            class="w-3 h-3"
                            viewBox="0 0 48 48"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                                width="48"
                                height="48"
                                fill="white"
                                fill-opacity="0.01"
                            ></rect>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4 24L9 19L19 29L39 9L44 14L19 39L4 24Z"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="inline-block relative mr-1">
                    <div
                        class="w-5 h-5 border focus:ring-2 focus:ring-gray-500 bg-gray-100 text-transparent border-gray-400 rounded flex justify-center items-center"
                    >
                        <svg
                            class="w-3 h-3"
                            viewBox="0 0 48 48"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                                width="48"
                                height="48"
                                fill="white"
                                fill-opacity="0.01"
                            ></rect>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4 24L9 19L19 29L39 9L44 14L19 39L4 24Z"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
        </template>
    </MultiSelect>
</template>
<script setup lang="ts">
import MultiSelect from 'primevue/multiselect';

defineProps<{
    modelValue: any;
    options : Array<any>,
    optionLabel: string,
    optionValue:string,
    placeholder:string,
    maxSelectedLabels : number | undefined
}>();

defineEmits(['update:modelValue']);

</script>
