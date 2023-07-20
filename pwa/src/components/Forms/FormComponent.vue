<script setup>
import InputSelectComponent from './InputSelectComponent.vue'
import InputCheckboxComponent from './InputCheckboxComponent.vue'
import InputTextComponent from './InputTextComponent.vue'
import SpecificTemplateComponent from './SpecificTemplateComponent.vue'
</script>

<template>
  <form class="estimator-form" action="result.html">
    <div class="errors">Le nom du projet est obligatoire.</div>

    <InputTextComponent />

    <InputCheckboxComponent />

    <SpecificTemplateComponent />

    <InputSelectComponent />

    <button type="submit" class="button">Obtenir l'estimation</button>
  </form>
</template>

<style lang="scss" scoped></style>
