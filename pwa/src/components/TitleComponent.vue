<script setup>
defineProps({
  title: String,
  className: String
})
</script>

<template>
  <h1 :class="className">{{ title }}</h1>
</template>

<style lang="scss" scoped>
/* Titles */
.main-title {
  font-size: 4rem;
  font-weight: 700;
  color: white;
  margin-bottom: 50px;
  text-align: center;
}
</style>
