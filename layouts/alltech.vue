<template>
  <div>
    <chat />
    <navbar />
    <container />
    <alltech />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import alltech from '~/components/alltech.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '科技 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    alltech,
    credit,
    container
  }
}
</script>
<style></style>
