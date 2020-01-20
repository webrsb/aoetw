<template>
  <div class="article">
    <b-alert :show="show" dismissible @dismissed="close">
      注意：您目前檢視的是已封存的2013版舊版資料，請 {{link}}
        <a :href="link"><b>點此</b></a> 進入<nuxt-link to="/games/de"
                  >決定版</nuxt-link>頁面。
    </b-alert>
    <nuxt />
  </div>
</template>

<script>
export default {
  data () {
    return {
      link: ''
    }
  },
  mounted () {
    this.setDeAddress()
  },
  computed: {
    show() {
      return this.$store.state.de_tip
    }
  },
  methods: {
    close () {
      this.$store.commit('closeTip')
    },
    setDeAddress () {
      if (process.client) {
        this.link = window.location.href.replace('/2013', '')
      }
    }
  },
  watch: {
    '$route' () {
      this.setDeAddress()
    }
  }
}
</script>
<style></style>
