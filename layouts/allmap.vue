<template>
  <div>
    <navbar />
    <container />
    <allmap />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allmap from '~/components/allmap.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    allmap,
    credit,
    container
  }
}
</script>
<style></style>
