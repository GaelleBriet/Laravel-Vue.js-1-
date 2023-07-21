<script setup></script>

<template>
  <div class="input-group">
    <label class="main-label" for="project-name">Nom du projet</label>
    <input
      type="text"
      id="project-name"
      name="name"
      placeholder="Nom"
      v-model="item"
      :input="item"
    />
  </div>
</template>

<style lang="scss" scoped></style>
