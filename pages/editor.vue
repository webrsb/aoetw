<template>
  <play />
</template>

<script>
import play from '~/components/play'

export default {
  layout: 'nochat',
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
