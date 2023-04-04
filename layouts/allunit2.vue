<template>
  <div>
    <navbar />
      <container>
        <slot />
      </container>
    <allunit2 />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '單位 - Aoetw'
    }
  }
}
</script>
<style></style>
