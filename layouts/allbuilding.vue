<template>
  <div>
    <navbar />
      <container>
        <slot />
      </container>
    <allbuilding />
    <credit />
  </div>
</template>
<script>

export default {
  head() {
    return {
      title: '建築 - Aoetw'
    }
  }
}
</script>
<style></style>
