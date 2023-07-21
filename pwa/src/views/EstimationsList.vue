<script setup>
import EstimationCardComponent from '../components/Estimations/EstimationCardComponent.vue'
import TitleComponent from '../components/TitleComponent.vue'

// en dur en attendant de travailler l'api
const estimations = [
  { name: "O'clock", id: 1, time: '35h' },
  { name: "Music O'Wards", id: 2, time: '35h' },
  { name: 'Vue.js Converter', id: 3, time: '75h' },
  { name: "Pets n'Co", id: 4, time: '125h' },
  { name: 'Be my Beer', id: 5, time: '18h' }
]
</script>

<template>
  <div class="main-content">
    <TitleComponent :title="'Dernières estimations'" :className="'main-title'" />

    <ul class="estimate-list">
      <EstimationCardComponent
        v-for="estimation in estimations"
        :key="estimation.id"
        :estimation="estimation"
      />
    </ul>
  </div>
</template>

<style scoped lang="scss"></style>
