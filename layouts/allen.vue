<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allen />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allen from '~/components/allen.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '數據 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allen,
    credit,
    container
  }
}
</script>
<style></style>
