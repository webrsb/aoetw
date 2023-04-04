<template>
  <div>
    <navbar />
      <container>
        <slot />
      </container>
    <allmap />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '地圖 - Aoetw'
    }
  }
}
</script>
<style></style>
