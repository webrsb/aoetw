<template>
  <div>
    <navbar />
    <container />
    <allen />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allen from '~/components/allen.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw - 數據'
    }
  },
  components: {
    navbar,
    allen,
    credit,
    container
  }
}
</script>
<style></style>
