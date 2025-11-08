<script setup>
defineProps({ cards: Array });
</script>

<template>
    <h1 class="text-4xl font-extrabold text-white mb-6">
        {{ name }}
    </h1>

    <ul v-for="card in cards" :key="card.id">
        <li class="text-white">
            {{ card.name }}
        </li>
        <li class="text-white">
            {{ card.attributs }}
        </li>
        <li class="text-white">
            {{ card.description }}
        </li>
        <li class="text-white">
            {{ card.attaque }}
        </li>
        <li class="text-white">
            {{ card.defense }}
        </li>
        <li class="text-white">
            {{ card.race }}
        </li>
        <li class="text-white">
            {{ card.structure }}
        </li>
        <li class="text-white">
            {{ card.type }}
        </li>
        <li class="text-white">
            {{ card.level }}
        </li>
        <li class="text-white">
            {{ card.genre }}
            <img src="../styles/light.webp" alt="" />
        </li>
    </ul>
</template>
