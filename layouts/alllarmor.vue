<template>
  <div>
    <navbar />
    <container>
      <slot />
    </container>
    <alllarmor />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '護甲 - Aoetw'
    }
  }
}
</script>
<style></style>
