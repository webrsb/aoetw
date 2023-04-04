<template>
  <div>
    <navbar />
      <container>
        <slot />
      </container>
    <allbatt />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '戰役 - Aoetw'
    }
  }
}
</script>
<style></style>
