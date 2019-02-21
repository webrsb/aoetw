<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allage />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allage from '~/components/allage.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '時代 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allage,
    credit,
    container
  }
}
</script>
<style></style>
