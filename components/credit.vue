<template>
  <footer class="bs-docs-footer">
    <div class="container">
      <p>
        Designed and built with all the love in the world by
        <a href="https://www.youtube.com/user/netss7/videos" target="_blank"
          >@cheap</a>
      </p>
      <p><nuxt-link v-if="page" :to="{ path: '/editor', query: { page }}">協助改善此頁面</nuxt-link></p>
    </div>
  </footer>
</template>
<script>
export default {
  data() {
    return {
      special_paths: [
        '/ar',
        '/armor',
        '/batt',
        '/building',
        '/civs',
        '/elements',
        '/games',
        '/maps',
        '/news',
        '/resource',
        '/techs',
        '/tree',
        '/tree/age',
        '/units',
        '/units/animal',
        '/units/hero',
        '/units/wide'
      ]
    }
  },
  computed: {
    page () {
      let r = this.$route.path
      if (this.special_paths.indexOf(r) > 0) {
        return r + '/index'
      }
      return r
    }
  }
}
</script>
<style></style>
