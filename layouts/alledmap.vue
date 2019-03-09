<template>
  <div>
    <chat />
    <navbar />
    <container />
    <alledmap />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import alledmap from '~/components/alledmap.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '地圖編輯器的單位 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    alledmap,
    credit,
    container
  }
}
</script>
<style></style>
