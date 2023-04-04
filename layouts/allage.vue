<template>
  <div>
    <navbar />
      <container>
        <slot />
      </container>
    <allage />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '時代 - Aoetw'
    }
  }
}
</script>
<style></style>
