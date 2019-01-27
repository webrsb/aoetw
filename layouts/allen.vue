<template>
  <div>
    <navbar />
    <nuxt />
    <allen />
    <credit />
  </div>
</template>

<script>
import navbar from '~/components/navbar.vue'
import allen from '~/components/allen.vue'
import credit from '~/components/credit.vue'

export default {
  components: {
    navbar,
    allen,
    credit
  }
}
</script>

<style></style>
