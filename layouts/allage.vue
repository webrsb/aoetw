<template>
  <div>
    <navbar />
    <container />
    <allage />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allage from '~/components/allage.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw - 時代'
    }
  },
  components: {
    navbar,
    allage,
    credit,
    container
  }
}
</script>
<style></style>
