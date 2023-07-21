<script setup>
import EstimationCardComponent from '../components/Estimations/EstimationCardComponent.vue'
import TitleComponent from '../components/TitleComponent.vue'

// en dur en attendant de travailler l'api
const estimations = [
  { name: "O'clock", id: 'o-clock', time: '35h' },
  { name: "Music O'Wards", id: 'music-o-wards', time: '35h' },
  { name: 'Vue.js Converter', id: 'vuejs-converter', time: '75h' },
  { name: "Pets n'Co", id: 'pets-n-co', time: '125h' },
  { name: 'Be my Beer', id: 'be-my-beer', time: '18h' }
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
