<script setup></script>
<script setup></script>

<template>
  <form class="estimator-form" action="result.html">
    <div class="errors">Le nom du projet est obligatoire.</div>

    <div class="input-group">
      <span class="main-label">Développements spécifiques</span>

      <div class="specific-template-list" id="specificTemplateList"></div>

      <button class="button button-icon" type="button" id="addSpecificTemplate">
        <i class="fa fa-plus"></i>
      </button>
    </div>

    <button type="submit" class="button">Obtenir l'estimation</button>
  </form>
</template>

<style lang="scss" scoped></style>
