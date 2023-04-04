<template>
  <div>
    <navbar />
      <container>
        <slot />
      </container>
    <allen />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '數據 - Aoetw'
    }
  }
}
</script>
<style></style>
