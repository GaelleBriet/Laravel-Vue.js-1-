<script setup>
import specificTemplate from '../specificTemplate'
import { onMounted } from 'vue'

onMounted(() => {
  specificTemplate.init()
})
</script>

<template>
  <div class="input-group">
    <span class="main-label">Développements spécifiques</span>

    <div class="specific-template-list" id="specificTemplateList"></div>

    <button class="button button-icon" type="button" id="addSpecificTemplate">
      <i class="fa fa-plus"></i>
    </button>
  </div>
</template>

<style scoped lang="scss"></style>
