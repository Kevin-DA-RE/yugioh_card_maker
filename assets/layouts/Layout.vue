<script setup>
import NeuralBg from "@/components/ui/bg-neural/NeuralBg.vue";
defineProps({ name: String });
</script>

<template>
    <NeuralBg class="absolute inset-0 -z-50" />
    <div class="z-10">
        <slot />
    </div>
</template>
