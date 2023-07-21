<script setup>
import router from '../../router'

const props = defineProps({
  estimation: Object
})

const handleDetails = () => {
  console.log('estimation id :', props.estimation.id)
  // router.push(`/results/${props.estimation.id}`)
  router.push({ name: 'results', params: { id: props.estimation.id } })
}
</script>

<template>
  <div class="main-content">
    <li @click="handleDetails" class="estimate-card">
      <span class="project-name">{{ estimation.name }}</span>
      <span class="project-time">{{ estimation.time }}</span>
    </li>
  </div>
</template>

<style scoped lang="scss"></style>
