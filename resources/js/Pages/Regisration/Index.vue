<script setup>
import App from '../../Layout/App.vue';
import TitleContent from '../../Components/Icons/TitleContent.vue';

const titleContent = [{ label: "Regisration Management" }];

</script>

<template>
    <App>
        <TitleContent :title="titleContent"/>
    </App>
</template>

<style>

</style>
