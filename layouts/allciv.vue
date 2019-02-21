<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allciv />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allciv from '~/components/allciv.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '文明 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allciv,
    credit,
    container
  }
}
</script>
<style></style>
