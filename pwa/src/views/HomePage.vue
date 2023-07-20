<script setup>
import TitleComponent from '../components/TitleComponent.vue'
import FormComponent from '../components/Forms/FormComponent.vue'
</script>

<template>
  <div class="main-content">
    <TitleComponent :title="'Calculato\'r'" :className="'main-title'" />
    <FormComponent />
  </div>
</template>

<style scoped lang="scss"></style>
