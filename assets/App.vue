<!-- resources/js/App.vue -->
<template>
    <div class="app">
        <h1>🎉 Vue 3 fonctionne !</h1>
        <p>Message : {{ message }}</p>
        <button @click="reverseMessage">Inverser le message</button>
    </div>
</template>

<script setup>
import { ref } from "vue";

const message = ref("Bienvenue Kévin !");

function reverseMessage() {
    message.value = message.value.split("").reverse().join("");
}
</script>

<style scoped>
.app {
    font-family: Avenir, Helvetica, sans-serif;
    text-align: center;
    margin-top: 50px;
}
button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 1rem;
}
</style>
