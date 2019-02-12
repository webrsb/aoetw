<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allbatt />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allbatt from '~/components/allbatt.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw - 戰役'
    }
  },
  components: {
    chat,
    navbar,
    allbatt,
    credit,
    container
  }
}
</script>
<style></style>
