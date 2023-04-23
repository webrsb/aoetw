<template>
  <div>
    <navbar />
    <container>
      <slot />
    </container>
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: 'Aoetw'
    }
  }
}
</script>
<style>
</style>
