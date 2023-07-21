<script setup>
import TitleComponent from '../components/TitleComponent.vue'
import EstimationDetailsComponent from '../components/Estimations/EstimationDetailsComponent.vue'
</script>

<template>
  <div class="main-content">
    <TitleComponent :title="'Résultat de l\'estimation'" :className="'main-title'" />
    <EstimationDetailsComponent />
  </div>
</template>
<style lang="scss" scoped></style>
