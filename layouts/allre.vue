<template>
  <div>
    <navbar />
    <nuxt />
    <allre />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allre from '~/components/allre.vue'
import credit from '~/components/credit.vue'
export default {
  components: {
    navbar,
    allre,
    credit
  }
}
</script>
<style></style>
