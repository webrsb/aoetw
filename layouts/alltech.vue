<template>
  <div>
    <navbar />
    <nuxt />
    <alltech />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import alltech from '~/components/alltech.vue'
import credit from '~/components/credit.vue'
export default {
  components: {
    navbar,
    alltech,
    credit
  }
}
</script>
<style></style>
