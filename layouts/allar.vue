<template>
  <div>
    <navbar />
    <nuxt />
    <allar />
    <credit />
  </div>
</template>

<script>
import navbar from '~/components/navbar.vue'
import allar from '~/components/allar.vue'
import credit from '~/components/credit.vue'

export default {
  components: {
    navbar,
    allar,
    credit
  }
}
</script>

<style></style>
