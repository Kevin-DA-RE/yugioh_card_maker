<script setup>
import Form from '../components/FormCard.vue'
defineProps({ name: String });

</script>

<template>
    <h1 class="text-4xl font-extrabold text-white  mb-6">
        {{ name }}
    </h1>
    <Form />

</template>