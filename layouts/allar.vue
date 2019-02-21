<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allar />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allar from '~/components/allar.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '戰術技巧 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allar,
    credit,
    container
  }
}
</script>
<style></style>
