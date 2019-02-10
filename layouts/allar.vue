<template>
  <div>
    <navbar />
    <container />
    <allar />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allar from '~/components/allar.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw - 戰術技巧'
    }
  },
  components: {
    navbar,
    allar,
    credit,
    container
  }
}
</script>
<style></style>
