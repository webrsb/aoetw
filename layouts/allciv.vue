<template>
  <div>
    <navbar/>
    <nuxt/>
    <allciv/>
    <credit/>
  </div>
</template>

<script>
import navbar from "~/components/navbar.vue"
import allciv from "~/components/allciv.vue"
import credit from "~/components/credit.vue"

export default {
  components: {
    navbar,
    allciv,
    credit
  }
}
</script>

<style>
</style>
