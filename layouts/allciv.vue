<template>
  <div>
    <navbar />
    <container />
    <allciv />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allciv from '~/components/allciv.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw - 文明'
    }
  },
  components: {
    navbar,
    allciv,
    credit,
    container
  }
}
</script>
<style></style>
