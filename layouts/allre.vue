<template>
  <div>
    <navbar />
    <container />
    <allre />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allre from '~/components/allre.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    allre,
    credit,
    container
  }
}
</script>
<style></style>
