<template>
  <div>
    <navbar/>
    <nuxt/>
    <allunit2/>
    <credit/>
  </div>
</template>

<script>
import navbar from "~/components/navbar.vue"
import allunit2 from "~/components/allunit2.vue"
import credit from "~/components/credit.vue"

export default {
  components: {
    navbar,
    allunit2,
    credit
  }
}
</script>

<style>
</style>
