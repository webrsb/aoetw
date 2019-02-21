<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allre />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allre from '~/components/allre.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '資源 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allre,
    credit,
    container
  }
}
</script>
<style></style>
