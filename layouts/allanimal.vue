<template>
  <div>
    <navbar />
    <nuxt />
    <allanimal />
    <credit />
  </div>
</template>

<script>
import navbar from '~/components/navbar.vue'
import allanimal from '~/components/allanimal.vue'
import credit from '~/components/credit.vue'

export default {
  components: {
    navbar,
    allanimal,
    credit
  }
}
</script>

<style></style>
