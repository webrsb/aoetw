<template>
  <div>
    <navbar />
      <container>
        <slot />
      </container>
    <allar />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '戰術技巧 - Aoetw'
    }
  }
}
</script>
<style></style>
