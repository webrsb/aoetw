<template>
  <div>
    <chat />
    <navbar />
    <container />
    <allunit />
    <credit />
  </div>
</template>
<script>
import chat from '~/components/chat.vue'
import navbar from '~/components/navbar.vue'
import allunit from '~/components/allunit.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  head() {
    return {
      title: 'Aoetw - 單位'
    }
  },
  components: {
    chat,
    navbar,
    allunit,
    credit,
    container
  }
}
</script>
<style></style>
