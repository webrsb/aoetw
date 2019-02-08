<template>
  <div>
    <navbar />
    <container />
    <alltech />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import alltech from '~/components/alltech.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    alltech,
    credit,
    container
  }
}
</script>
<style></style>
