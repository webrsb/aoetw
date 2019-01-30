<template>
  <div>
    <navbar />
    <nuxt />
    <allage />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allage from '~/components/allage.vue'
import credit from '~/components/credit.vue'
export default {
  components: {
    navbar,
    allage,
    credit
  }
}
</script>
<style></style>
