<template>
  <div>
    <navbar />
    <container />
    <alllarmor />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import alllarmor from '~/components/alllarmor.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw - 護甲'
    }
  },
  components: {
    navbar,
    alllarmor,
    credit,
    container
  }
}
</script>
<style></style>
