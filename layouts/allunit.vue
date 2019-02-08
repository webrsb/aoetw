<template>
  <div>
    <navbar />
    <container />
    <allunit />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allunit from '~/components/allunit.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    allunit,
    credit,
    container
  }
}
</script>
<style></style>
