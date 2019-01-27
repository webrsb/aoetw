<template>
  <b-navbar
    ref="navbar"
    toggleable="md"
    type="dark"
    variant="dark"
    sticky
  >
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
    <b-navbar-brand to="/">Aoetw</b-navbar-brand>
    <b-collapse is-nav id="nav_collapse">
      <b-navbar-nav>
        <b-nav-item to="/civs">文明</b-nav-item>
        <b-nav-item to="/units">單位</b-nav-item>
        <b-nav-item to="/techs">科技</b-nav-item>
        <b-nav-item to="/building">建築</b-nav-item>
        <b-nav-item to="/armor">護甲分類</b-nav-item>
        <b-nav-item to="/batt">戰役</b-nav-item>
        <b-nav-item to="/ar">戰術技巧</b-nav-item>
        <b-nav-item to="/qa">常見問題</b-nav-item>
        <b-nav-item to="/talk">討論區</b-nav-item>
        <b-nav-item to="#">記錄檔區</b-nav-item>
        <b-nav-item to="/techs/tree">科技樹</b-nav-item>
        <b-nav-item to="/maps">地圖</b-nav-item>
      </b-navbar-nav>
      <b-navbar-nav class="ml-auto">
        <b-nav-form>
          <header_search />
        </b-nav-form>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>
<script>
import header_search from '~/components/header_search.vue'

export default {
  data() {
    return {
      scrollTimeout: null
    }
  },
  mounted() {
    this.focusScroll()
    clearTimeout(this.scrollTimeout)
  },
  updated() {
    clearTimeout(this.scrollTimeout)
    this.scrollTimeout = null
    this.focusScroll()
  },
  methods: {
    getOffsetToRoot (elm) {
      let result = 0

      while(elm !== null) {
        result += elm.offsetTop

        elm = elm.offsetParent
      }
      var test = document.createElement('DIV')
      test.style.position = 'absolute'
      test.style.top = '0px'
      test.style.left = '0px'
      test.style.width = '5px'
      test.style.height = result + 'px'
      test.style.backgroundColor = 'green'
      test.style.opacity = '0.2'
      test.style.zIndex = '100000'
      test.style.color = 'green'
      test.innerHTML = result
      document.body.appendChild(test)

      return result
    },
    offsetTop(el) {
      if (!el.getClientRects().length) {
        return 0
      }
      const bcr = el.getBoundingClientRect()
      const win = el.ownerDocument.defaultView
      return bcr.top + win.pageYOffset
    },
    focusScroll() {
      console.log('focusScroll')
      console.log(this.$route.hash)
      let hash = decodeURIComponent(this.$route.hash)
      this.$nextTick(() => {
        let el
        if (hash ) {
          el = document.getElementById(hash.slice(1))
          this.scrollIntoView(el)
        }
        if (!el) {
          el = this.$el.querySelector('h1')
        }
        if (el) {
          el.tabIndex = -1
          el.focus()
        }
      })
    },
    scrollIntoView(el) {
      if (el) {
        // Get the document scrolling element
        const scroller = document.scrollingElement || document.documentElement || document.body
        // Allow time for v-play to finish rendering
        this.scrollTimeout = setTimeout(() => {
          // scroll heading into view (minus offset to account for nav top height
          this.scrollTo(scroller, this.offsetTop(el) - 70, 100)
          this.scrollTimeout = null
        }, 100)
      }
    },  
    // Smooth Scroll handler methods
    easeInOutQuad(t, b, c, d) {
      t /= d / 2
      if (t < 1) return (c / 2) * t * t + b
      t--
      return (-c / 2) * (t * (t - 2) - 1) + b
    },
    scrollTo(scroller, to, duration, cb) {
      const start = scroller.scrollTop
      const change = to - start
      let that = this
      //const increment = 20
      const increment = 20
      let currentTime = 0
      const animateScroll = function() {
        currentTime += increment
        const val = that.easeInOutQuad(currentTime, start, change, duration)
        scroller.scrollTop = Math.round(val)
        if (currentTime < duration) {
          setTimeout(animateScroll, increment)
        } else if (cb && typeof cb === 'function') {
          cb()
        }
      }
      animateScroll()
    }
  },
  components: {
    header_search
  }
}
</script>
<style scoped>
.hrn1 {
  margin-top: 10px;
  margin-bottom: 10px;
  border: 0;
  border-top: 1px solid #b3b1b1;
}

li {
  display: flex;
  align-items: center;
}

@media (min-width: 768px){
  .navbar-expand-md {
      max-height: 86px;
      overflow: hidden;
  }
}
</style>
