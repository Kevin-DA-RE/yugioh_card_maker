<script setup>
import { Button } from "@/components/ui/button";
import NeuralBg from "@/components/ui/bg-neural/NeuralBg.vue";
defineProps({ name: String });
</script>

<template>
    <NeuralBg class="absolute inset-0 -z-50" />
    <h1
        class="text-4xl font-extrabold text-white  mb-6 z-10"
    >
        Bienvenue {{ name }}
    </h1>
    <Button variant="destructive">Click me</Button>
</template>
