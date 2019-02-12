<template>
  <div>
    <chat />
    <navbar />
    <container />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    credit,
    container
  }
}
</script>
<style>
</style>
