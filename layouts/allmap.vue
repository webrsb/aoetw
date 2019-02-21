<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allmap />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allmap from '~/components/allmap.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '地圖 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allmap,
    credit,
    container
  }
}
</script>
<style></style>
