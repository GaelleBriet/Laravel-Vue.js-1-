<script setup>
import InputSelectComponent from './InputSelectComponent.vue'
import InputCheckboxComponent from './InputCheckboxComponent.vue'
import InputTextComponent from './InputTextComponent.vue'
import SpecificTemplateComponent from './SpecificTemplateComponent.vue'

import { useRouter } from 'vue-router'
import { ref } from 'vue'

const router = useRouter()
const projectName = ref('')

const handleSubmit = () => {
  console.log('projectName :', projectName.value)
  router.push('/results')
}
const inputName = (name) => {
  projectName.value = name.target.value
}
</script>

<template>
  <form class="estimator-form" @submit.prevent="handleSubmit">
    <div class="errors">Le nom du projet est obligatoire.</div>

    <InputTextComponent @input="inputName" />

    <InputCheckboxComponent />

    <SpecificTemplateComponent />

    <InputSelectComponent />

    <input type="submit" class="button" value="Obtenir l'estimation" />
  </form>
</template>

<style lang="scss" scoped></style>
