<template>
  <div>
    <navbar/>
    <nuxt/>
    <allbuilding/>
    <credit/>
  </div>
</template>

<script>
import navbar from "~/components/navbar.vue"
import allbuilding from "~/components/allbuilding.vue"
import credit from "~/components/credit.vue"

export default {
  components: {
    navbar,
    allbuilding,
    credit
  }
}
</script>

<style>
</style>
