<script setup>
import EstimationCardComponent from '../components/Estimations/EstimationCardComponent.vue'
import TitleComponent from '../components/TitleComponent.vue'
</script>

<template>
  <div class="main-content">
    <TitleComponent :title="'Dernières estimations'" :className="'main-title'" />

    <ul class="estimate-list">
      <EstimationCardComponent />
    </ul>
  </div>
</template>

<style scoped lang="scss"></style>
