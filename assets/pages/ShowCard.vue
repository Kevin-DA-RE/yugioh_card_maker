<script setup>
import AnimateGrid from "@/components/ui/animate-grid/AnimateGrid.vue";
const props = defineProps({ cards: Array });

const cards = props.cards.map((card) => ({
    logo: card.image_url,
}));
</script>

<template>
    <div class="h-full w-full flex items-center justify-center p-4 text-white">
        <AnimateGrid :cards>
            <template #logo="{ logo }">
                <img class="logo mx-auto w-auto h-80" :src="logo" />
            </template>
        </AnimateGrid>
    </div>
</template>
