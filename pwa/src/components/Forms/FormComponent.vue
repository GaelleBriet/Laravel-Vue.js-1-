<script setup>
import InputSelectComponent from './InputSelectComponent.vue'
import InputCheckboxComponent from './InputCheckboxComponent.vue'
import InputTextComponent from './InputTextComponent.vue'
import SpecificTemplateComponent from './SpecificTemplateComponent.vue'

import { useRouter } from 'vue-router'
import { ref } from 'vue'

const router = useRouter()
const projectName = ref('')
const selectedCheckboxes = ref([])

const handleSubmit = () => {
  console.log('project name :', projectName.value)

  const selectedCheckboxesArray = [...selectedCheckboxes.value]
  console.log('checkboxes selected :', selectedCheckboxesArray)

  router.push('/results')
}
const inputName = (name) => {
  projectName.value = name.target.value
}

const handleCheckboxChange = (values) => {
  selectedCheckboxes.value = values
}
</script>

<template>
  <form class="estimator-form" @submit.prevent="handleSubmit">
    <div class="errors">Le nom du projet est obligatoire.</div>

    <InputTextComponent @input="inputName" />

    <InputCheckboxComponent :checkboxes="checkboxes" @checkboxChange="handleCheckboxChange" />

    <SpecificTemplateComponent />

    <InputSelectComponent />

    <input type="submit" class="button" value="Obtenir l'estimation" />
  </form>
</template>

<style lang="scss" scoped></style>
