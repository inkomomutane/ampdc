<script setup lang="ts">
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { nextTick, ref } from 'vue';
import Dropdown from 'primevue/dropdown';
import Editor from 'primevue/editor';
defineProps({
    violence_type: {
        type: Array<App.Data.ViolenceTypeData>,
        required: true,
    },
});

const confirmingUserDeletion = ref(false);

const nameIput = ref<HTMLInputElement | null>(null);

const contactIput = ref<HTMLInputElement | null>(null);

const form = useForm({
    name : '',
    age : '',
    contact: '',
    violence_type_id : null,
    description : ''
});

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;

    nextTick(() => nameIput.value?.focus());
};

const deleteUser = () => {
    form.delete(route('profile.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => nameIput.value?.focus(),
        onFinish: () => {
            form.reset();
        },
    });
};

const closeModal = () => {
    confirmingUserDeletion.value = false;

    form.reset();
};
</script>

<template>
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">Novo caso</h2>
            <p class="mt-1 text-sm text-gray-600">
                ...
            </p>
        </header>

        <PrimaryButton @click="confirmUserDeletion">Novo caso de VBG</PrimaryButton>

        <Modal :show="confirmingUserDeletion" @close="closeModal">
            <div class="p-6">
                <h2 class="text-md font-semibold text-gray-600">
                   Registar novo caso de VBG
                </h2>

                <div class="w-full  grid md:grid-cols-2 gap-4 mt-4">
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
                        <InputLabel for="Contacto" value="Contacto"/>
                        <TextInput
                            id="contact"
                            ref="contactIput"
                            v-model="form.contact"
                            type="text"
                            class="mt-2"
                            placeholder="Contacto"
                        />

                        <InputError :message="form.errors.contact" class="mt-2" />
                    </div>
                </div>
                <div class="w-full  grid md:grid-cols-2 gap-4 mt-4">
                    <div class="">
                        <InputLabel for="age" value="Idade"/>
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
                        <InputLabel for="violence_type" value="Tipo de violência" />
                        <Dropdown
                                        showClear
                                        v-model="form.violence_type_id"
                                        :options="violence_type"
                                        filter
                                        optionLabel="name"
                                        optionValue="id"
                                        placeholder="Tipo de violência"
                                    >
                                    <template #option="slotProps">
                                            <div
                                                class="flex align-items-center p-2 text-sm font-medium"
                                                :class="slotProps.option.id === form.violence_type_id ? 'bg-primary-300 hover:!bg-primary-300 ' : 'hover:bg-primary-200 '"
                                            >
                                                <div>
                                                    {{ slotProps.option.name }}
                                                </div>
                                            </div>
                                    </template>

                                    </Dropdown>
                        <InputError :message="form.errors.name" class="mt-2 " />
                    </div>
                    <div class="md:col-span-2">
                        <InputLabel for="description" value="Detalhes da violência"/>

                        <Editor :unstyled="false"  v-model="form.description" >
                            <template v-slot:toolbar>
                                <span class="ql-formats">
                                    <button v-tooltip.bottom="'Bold'" class="ql-bold"></button>
                                    <button v-tooltip.bottom="'Italic'" class="ql-italic"></button>
                                    <button v-tooltip.bottom="'Underline'" class="ql-underline"></button>
                                </span>
                            </template>
                        </Editor>

                        <InputError :message="form.errors.description" class="mt-2" />
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal"> Cancelar </SecondaryButton>

                    <PrimaryButton
                        class="ml-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deleteUser"
                    >
                        Registar
                    </PrimaryButton>
                </div>
            </div>
        </Modal>
    </section>
</template>
