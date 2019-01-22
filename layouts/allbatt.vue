<template>
  <div>
    <navbar/>
    <nuxt/>
    <allbatt/>
    <credit/>
  </div>
</template>

<script>
import navbar from "~/components/navbar.vue"
import allbatt from "~/components/allbatt.vue"
import credit from "~/components/credit.vue"

export default {
  components: {
    navbar,
    allbatt,
    credit
  }
}
</script>

<style>
</style>
