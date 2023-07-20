<template>
  <div class="input-group">
    <span class="main-label">Type de projet</span>

    <select name="project-type">
      <option value="">Choisir un type de projet</option>
      <option value="simple">Laravel</option>
      <option value="complex">Laravel et Vue.js</option>
    </select>
  </div>
  <div class="input-group">
    <span class="main-label">Type de design</span>

    <select name="design-type">
      <option value="">Choisir un type de design</option>
      <option value="simple">Design simple</option>
      <option value="complex">Design complexe</option>
      <option value="animations">Design complexe avec animations</option>
    </select>
  </div>
</template>
