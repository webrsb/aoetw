<template>
  <div>
    <navbar />
    <container />
    <allhero />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allhero from '~/components/allhero.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    allhero,
    credit,
    container
  }
}
</script>
<style></style>
