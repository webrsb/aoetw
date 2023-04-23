<template>
  <div>
    <navbar />
    <container>
      <slot />
    </container>
    <alledmap />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '地圖編輯器的單位 - Aoetw'
    }
  }
}
</script>
<style></style>
