<template>
  <div>
    <navbar />
    <nuxt />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import credit from '~/components/credit.vue'
export default {
  components: {
    navbar,
    credit
  }
}
</script>
<style>
*,
*:before,
*:after {
  box-sizing: border-box;
  margin: 0;
}
</style>
