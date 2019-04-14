<template>
  <footer class="bs-docs-footer">
    <div class="container" style="font-size:14px">
      <div>
        Designed and built with all the love in the world by
        <a href="https://www.youtube.com/user/netss7/videos" target="_blank"
          >@cheap</a
        >
      </div>
      <div v-if="upTime !== ''">此頁面最後編輯於 {{ upTime }}</div>
      <div>
        <nuxt-link v-if="page" :to="{ path: '/editor', query: { page } }"
          >協助改善此頁面</nuxt-link
        >
      </div>
    </div>
  </footer>
</template>
<script>
import axios from 'axios'

export default {
  data() {
    return {
      upTime: '',
      special_paths: [
        '',
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
  mounted() {
    this.updateTime()
  },
  computed: {
    page() {
      let r = this.$route.path

      if (r.charAt(r.length - 1) === '/') {
        r = r.slice(0, -1)
      }

      if (this.special_paths.indexOf(r) >= 0) {
        return r + '/index'
      }
      return r
    }
  },
  methods: {
    updateTime() {
      var that = this
      axios
        .get(`http://aoetw.com/getUpTime.php?path=${this.page}`)
        .then(res => {
          if (res.data === '') {
            that.upTime = ''
          } else {
            that.upTime = res.data.replace('T', ' ').replace('Z', '')
          }
        })
    }
  },
  watch: {
    $route(val, oldVal) {
      this.upTime = ''
      this.updateTime()
    }
  }
}
</script>
<style></style>
