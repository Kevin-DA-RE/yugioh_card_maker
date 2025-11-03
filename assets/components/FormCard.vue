<script setup lang="ts">
import { useForm } from 'vee-validate'
import { toTypedSchema } from '@vee-validate/zod'
import * as z from 'zod'
import { Button } from '@/components/ui/button'
import {
    FormControl,
    FormDescription,
    FormField,
    FormItem,
    FormLabel,
    FormMessage,
} from '@/components/ui/form'
import { Input } from '@/components/ui/input'
import { computed } from "vue";

const props = defineProps({
    mode: String,
});

const emit = defineEmits(["submit", "reset"]);

const title = computed(() => {
    switch (props.mode) {
        case "addCard":
            return "Création de la nouvelle carte";
        case "updateCard":
            return "Modifier la carte";
        case "deleteCard":
            return "Supprimer la carte";
    }
});

const labelSubmit = computed(() => {
    switch (props.mode) {
        case "addCard":
            return "Enregistrer";
        case "updateCard":
            return "Modifier";
        case "deleteCard":
            return "Supprimer";
    }
});

const formSchema = toTypedSchema(z.object({
    username: z.string().min(2).max(50),
}))

const form = useForm({
    validationSchema: formSchema,
})

const onSubmit = form.handleSubmit((values) => {
    console.log('Form submitted!', values)
       emit("submit");
})

const onReset = () => {
    form.resetForm(); // ✅ réinitialise tous les champs + erreurs
    console.log('Form reset')
    emit("reset")
}
</script>

<template>
    <form class="w-2/3 space-y-6 text-white" @submit="onSubmit" @reset="onReset">
        <FormField v-slot="{ componentField }" name="username">
            <FormItem>
                <FormLabel class="text-white">{{title}}</FormLabel>
                <FormControl>
                    <Input type="text" placeholder="shadcn" v-bind="componentField" />
                </FormControl>
                <FormDescription>
                    This is your public display name.
                </FormDescription>
                <FormMessage />
            </FormItem>
        </FormField>
        <Button type="submit">
            {{labelSubmit}}
        </Button>
    </form>
</template>