<template>
    <div class="">
        <component-navbar />
        <div>
            <slot />
        </div>
    </div>
</template>

<script setup>
import ComponentNavbar from "./component-navbar.vue";
</script>

<style lang="scss" scoped></style>
