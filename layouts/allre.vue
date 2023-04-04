<template>
  <div>
    <navbar />
      <container>
        <slot />
      </container>
    <allre />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '資源 - Aoetw'
    }
  }
}
</script>
<style></style>
