<template>
  <div>
    <navbar />
    <container />
    <allanimal />
    <credit />
  </div>
</template>
<script>
import navbar from '~/components/navbar.vue'
import allanimal from '~/components/allanimal.vue'
import credit from '~/components/credit.vue'
import container from '~/components/container.vue'

export default {
  components: {
    navbar,
    allanimal,
    credit,
    container
  }
}
</script>
<style></style>
