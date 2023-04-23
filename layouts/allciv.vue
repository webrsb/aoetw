<template>
  <div>
    <navbar />
    <container>
      <slot />
    </container>
    <allciv />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '文明 - Aoetw'
    }
  }
}
</script>
<style></style>
