<template>
  <div>
    <navbar />
    <container />
    <allunit2 />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allunit2 from '~/components/allunit2.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    allunit2,
    credit,
    container
  }
}
</script>
<style></style>
