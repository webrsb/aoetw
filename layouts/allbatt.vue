<template>
  <div>
    <navbar />
    <container />
    <allbatt />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allbatt from '~/components/allbatt.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    allbatt,
    credit,
    container
  }
}
</script>
<style></style>
