<template>
  <div>
    <navbar />
    <container>
      <slot />
    </container>
    <allanimal />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '動物 - Aoetw'
    }
  }
}
</script>
<style></style>
