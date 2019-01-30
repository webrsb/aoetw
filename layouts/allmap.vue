<template>
  <div>
    <navbar />
    <nuxt />
    <allmap />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allmap from '~/components/allmap.vue'
import credit from '~/components/credit.vue'
export default {
  components: {
    navbar,
    allmap,
    credit
  }
}
</script>
<style></style>
