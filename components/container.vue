<template>
  <div class="article">
    <slot />
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
        window.location.href = window.location.href.replace(/(.+\/\/.+?)\/(.*)/, '$1/2013/$2')
      }
    }
  }
}
</script>
<style></style>
