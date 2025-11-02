<script setup>
import { Button } from "@/components/ui/button";
defineProps({ name: String });
</script>

<template>
    <h1>Bienvenue {{ name }}</h1>
    <Button variant="destructive">Click me</Button>
</template>
