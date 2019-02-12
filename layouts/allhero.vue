<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allhero />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allhero from '~/components/allhero.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw - 英雄'
    }
  },
  components: {
    chat,
    navbar,
    allhero,
    credit,
    container
  }
}
</script>
<style></style>
