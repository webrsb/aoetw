<template>
  <div>
    <navbar />
    <container>
      <slot />
    </container>
    <allhero />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '英雄 - Aoetw'
    }
  }
}
</script>
<style></style>
