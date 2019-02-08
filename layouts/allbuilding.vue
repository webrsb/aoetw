<template>
  <div>
    <navbar />
    <container />
    <allbuilding />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allbuilding from '~/components/allbuilding.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    allbuilding,
    credit,
    container
  }
}
</script>
<style></style>
