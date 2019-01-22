<template>
  <div>
    <navbar/>
    <nuxt/>
    <allunit/>
    <credit/>
  </div>
</template>

<script>
import navbar from "~/components/navbar.vue"
import allunit from "~/components/allunit.vue"
import credit from "~/components/credit.vue"

export default {
  components: {
    navbar,
    allunit,
    credit
  }
}
</script>

<style>
</style>
