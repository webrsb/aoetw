<template>
  <div>
    <navbar />
    <container>
      <slot />
    </container>
    <alltech />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '科技 - Aoetw'
    }
  }
}
</script>
<style></style>
