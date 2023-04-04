<template>
  <play />
</template>

<script>
import play from '~/components/play'

definePageMeta({ layout: 'nochat' })

export default {
  components: {
    play
  },
  head() {
    return {
      title: '線上編輯器 - Aoetw'
    }
  }
}
</script>

<style></style>
