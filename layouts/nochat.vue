<template>
  <div>
    <navbar />
    <container />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    credit,
    container
  }
}
</script>
<style>
</style>
