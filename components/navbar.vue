<template>
  <b-navbar ref="navbar" toggleable="md" :dark="true" variant="dark" sticky="top">
    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
    <b-navbar-brand to="/">Aoetw</b-navbar-brand>
    <b-navbar-nav right>
      <b-nav-form>
        <header_search />
      </b-nav-form>
    </b-navbar-nav>
    <b-collapse is-nav id="nav_collapse">
      <b-navbar-nav>
        <b-nav-item to="/civs">文明</b-nav-item>
        <b-nav-item to="/units">單位</b-nav-item>
        <b-nav-item to="/techs">科技</b-nav-item>
        <b-nav-item to="/building">建築</b-nav-item>
        <b-nav-item to="/batt">戰役</b-nav-item>
        <b-nav-item to="/ar">戰術技巧</b-nav-item>
        <b-nav-item-dropdown text="遊戲元素">
          <b-dropdown-item to="/armor">防禦類型</b-dropdown-item>
          <b-dropdown-item to="/elements/Regeneration">回血</b-dropdown-item>
          <b-dropdown-item to="/elements/Garrison">駐軍</b-dropdown-item>
          <b-dropdown-item to="/elements/Hit_points">血量</b-dropdown-item>
          <b-dropdown-item to="/elements/Attack">攻擊</b-dropdown-item>
          <b-dropdown-item to="/elements/Rate_of_Fire">射速</b-dropdown-item>
          <b-dropdown-item to="/elements/Frame_delay">開火間隔</b-dropdown-item>
          <b-dropdown-item to="/elements/Area_of_Effect"
            >擴散範圍</b-dropdown-item
          >
          <b-dropdown-item to="/elements/Team_Bonus">團隊加分</b-dropdown-item>
          <b-dropdown-item to="/elements/Relic">遺跡</b-dropdown-item>
          <b-dropdown-item to="/elements/Taunts">嘲諷語音</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown text="資訊">
          <b-dropdown-item to="/top">世界知名玩家</b-dropdown-item>
          <b-dropdown-item to="/fotw">台港知名玩家</b-dropdown-item>
          <b-dropdown-item to="/history">歷屆大賽結果</b-dropdown-item>
          <b-dropdown-item to="/news/ver5-7">5.7改版內容</b-dropdown-item>
          <b-dropdown-item to="/news/ver5-8">5.8改版內容</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item to="/qa">常見問題</b-nav-item>
        <b-nav-item to="/talk">討論區</b-nav-item>
        <b-nav-item href="/save/">記錄檔區</b-nav-item>
        <b-nav-item to="/tree/vie">科技樹</b-nav-item>
        <b-nav-item to="/maps">地圖</b-nav-item>
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
    getOffsetToRoot(elm) {
      let result = 0
      while (elm !== null) {
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
      let hash = decodeURIComponent(this.$route.hash)
      this.$nextTick(() => {
        let el
        if (hash) {
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
        const scroller =
          document.scrollingElement || document.documentElement || document.body
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
@media (min-width: 768px) {
  .navbar-expand-md {
    max-height: 86px;
  }
  li {
    display: flex;
    align-items: center;
  }
}
</style>
