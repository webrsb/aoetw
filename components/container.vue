<template>
  <div class="article">
    <nuxt />
    <div class="container" style="margin-bottom: 10px; text-align: center">
      <b-button pill size="sm" variant="outline-info" @click="redirect">檢視2013版頁面</b-button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    redirect () {
      if (process.client) {
        window.location.href = window.location.href.replace(/(?<=[^\/])\/((?<=$)|(?=[^\/]))/, '/2013/')
      }
    }
  }
}
</script>
<style></style>
