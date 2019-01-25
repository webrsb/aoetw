<template>
  <div>
    <navbar />
    <nuxt />
    <alllarmor />
    <credit />
  </div>
</template>

<script>
import navbar from '~/components/navbar.vue'
import alllarmor from '~/components/alllarmor.vue'
import credit from '~/components/credit.vue'

export default {
  components: {
    navbar,
    alllarmor,
    credit
  }
}
</script>

<style></style>
