<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allunit2 />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allunit2 from '~/components/allunit2.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '英雄 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allunit2,
    credit,
    container
  }
}
</script>
<style></style>
