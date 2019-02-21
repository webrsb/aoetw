<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allanimal />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allanimal from '~/components/allanimal.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '動物 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allanimal,
    credit,
    container
  }
}
</script>
<style></style>
