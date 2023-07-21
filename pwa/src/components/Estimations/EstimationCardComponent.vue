<script setup>
const props = defineProps({
  estimation: Object
})
</script>

<template>
  <div class="main-content">
    <li>
      <RouterLink :to="{ path: `/results/${id}` }" class="estimate-card">
        <span class="project-name">{{ estimation.name }}</span>
        <span class="project-time">{{ estimation.time }}</span>
      </RouterLink>
    </li>
  </div>
</template>

<style scoped lang="scss"></style>
