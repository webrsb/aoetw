<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allbuilding />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allbuilding from '~/components/allbuilding.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: '建築 - Aoetw'
    }
  },
  components: {
    chat,
    navbar,
    allbuilding,
    credit,
    container
  }
}
</script>
<style></style>
