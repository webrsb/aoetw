<template>
  <div>
    <navbar />
    <nuxt />
    <allhero />
    <credit />
  </div>
</template>

<script>
import navbar from '~/components/navbar.vue'
import allhero from '~/components/allhero.vue'
import credit from '~/components/credit.vue'

export default {
  components: {
    navbar,
    allhero,
    credit
  }
}
</script>

<style></style>
