<script setup lang="ts">
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Modal from "@/Components/Modal.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";
import Dropdown from "primevue/dropdown";
import Editor from "primevue/editor";
import MultiSelect from "primevue/multiselect";
import { ref } from "vue";
defineProps({
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
});

const registerTrigger = ref(false);


const form = useForm({
    name: "",
    age: "",
    contact: "",
    violence_type_id: null,
    neighborhood_id: null,
    description: "",
    organizations: [],
});

const openregisterModal = () => {
    registerTrigger.value = true;
};

const registerGBV = () => {
    form.post(route("dashboard.bgv.register"), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
    });
};

const closeModal = () => {
    registerTrigger.value = false;
    form.reset();
};

</script>

<template>
    <section class="space-y-6">
        <PrimaryButton @click="openregisterModal" class="rounded-sm"
            >Registar novo caso de VBG</PrimaryButton
        >

        <Modal :show="registerTrigger" @close="closeModal">
            <div class="p-6">
                <h2 class="text-md font-semibold text-gray-600">
                    Registar novo caso de VBG
                </h2>

                <div class="w-full grid md:grid-cols-2 gap-4 mt-4">
                    <div class="">
                        <InputLabel for="name" value="Nome completo" />

                        <TextInput
                            id="name"
                            ref="nameInput"
                            v-model="form.name"
                            type="text"
                            class="mt-2"
                            placeholder="Nome completo"
                        />

                        <InputError :message="form.errors.name" class="mt-2" />
                    </div>
                    <div class="">
                        <InputLabel for="Contacto" value="Contacto" />
                        <TextInput
                            id="contact"
                            ref="contactIput"
                            v-model="form.contact"
                            type="text"
                            class="mt-2"
                            placeholder="Contacto"
                        />

                        <InputError
                            :message="form.errors.contact"
                            class="mt-2"
                        />
                    </div>
                </div>
                <div class="w-full grid md:grid-cols-2 gap-4 mt-4">
                    <div class="">
                        <InputLabel for="age" value="Idade" />
                        <TextInput
                            id="age"
                            ref="ageInput"
                            v-model="form.age"
                            type="number"
                            class="mt-2"
                            placeholder="Idade"
                        />

                        <InputError :message="form.errors.age" class="mt-2" />
                    </div>
                    <div class="">
                        <InputLabel
                            for="violence_type"
                            value="Tipo de violência"
                        />
                        <Dropdown
                            showClear
                            v-model="form.violence_type_id"
                            :options="violence_types"
                            filter
                            optionLabel="name"
                            optionValue="id"
                            placeholder="Tipo de violência"
                        >
                            <template #option="slotProps">
                                <div
                                    class="flex align-items-center p-2 text-sm font-medium"
                                    :class="
                                        slotProps.option.id ===
                                        form.violence_type_id
                                            ? 'bg-primary-300 hover:!bg-primary-300 '
                                            : 'hover:bg-primary-200 '
                                    "
                                >
                                    <div>
                                        {{ slotProps.option.name }}
                                    </div>
                                </div>
                            </template>
                        </Dropdown>
                        <InputError :message="form.errors.violence_type_id" class="mt-2" />
                    </div>
                    <div class="md:col-span-2">
                        <InputLabel
                            for="description"
                            value="Detalhes da violência"
                        />

                        <Editor :unstyled="false" v-model="form.description">
                            <template v-slot:toolbar>
                                <span class="ql-formats">
                                    <button
                                        v-tooltip.bottom="'Bold'"
                                        class="ql-bold"
                                    ></button>
                                    <button
                                        v-tooltip.bottom="'Italic'"
                                        class="ql-italic"
                                    ></button>
                                    <button
                                        v-tooltip.bottom="'Underline'"
                                        class="ql-underline"
                                    ></button>
                                </span>
                            </template>
                        </Editor>

                        <InputError
                            :message="form.errors.description"
                            class="mt-2"
                        />
                    </div>
                </div>
                <div class="w-full grid md:grid-cols-2 gap-4 mt-4">
                    <div class="">
                        <InputLabel for="neighborhood_id" value="Proviniência" />
                        <Dropdown
                            showClear
                            v-model="form.neighborhood_id"
                            :options="neighborhoods"
                            filter
                            optionLabel="name"
                            optionValue="id"
                            placeholder="Proviniência"
                        >
                            <template #option="slotProps">
                                <div
                                    class="flex align-items-center p-2 text-sm font-medium"
                                    :class="
                                        slotProps.option.id ===
                                        form.neighborhood_id
                                            ? 'bg-primary-300 hover:!bg-primary-300 '
                                            : 'hover:bg-primary-200 '
                                    "
                                >
                                    <div>
                                        {{ slotProps.option.name }}
                                    </div>
                                </div>
                            </template>
                        </Dropdown>
                        <InputError :message="form.errors.neighborhood_id" class="mt-2" />
                    </div>
                    <div class="">
                        <InputLabel
                            for="organizations"
                            value="Necessita de encaminhamento para:"
                        />

                        <MultiSelect
                            v-model="form.organizations"
                            :options="organizations"
                            filter
                            optionLabel="name"
                            optionValue="id"
                            placeholder="Necessita de encaminhamento para:"
                            :maxSelectedLabels="2"
                        >
                        </MultiSelect>
                        <InputError
                            :message="form.errors.organizations"
                            class="mt-2"
                        />
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal">
                        Cancelar
                    </SecondaryButton>

                    <PrimaryButton
                        class="ml-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="registerGBV"
                    >
                        Registar
                    </PrimaryButton>
                </div>
            </div>
        </Modal>
    </section>
</template>
