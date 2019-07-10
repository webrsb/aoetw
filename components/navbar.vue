<template>
  <b-navbar ref="navbar" toggleable="md" type="dark" variant="dark" sticky>
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
        <b-nav-item-dropdown text="單位">
          <b-dropdown-item to="/units/">單位總頁</b-dropdown-item>
          <b-dropdown-item to="/units/Infantry_Units">步兵單位</b-dropdown-item>
          <b-dropdown-item to="/units/Unique_Unit">特殊單位</b-dropdown-item>
          <b-dropdown-item to="/units/Cavalry_Units">騎兵單位</b-dropdown-item>
          <b-dropdown-item to="/units/Gunpowder_Unit">火藥單位</b-dropdown-item>
          <b-dropdown-item to="/units/Archer_Units">遠距離單位</b-dropdown-item>
          <b-dropdown-item to="/units/Naval_Vessels">海軍單位</b-dropdown-item>
          <b-dropdown-item to="/units/Siege_Weapons">攻城器單位</b-dropdown-item>
          <b-dropdown-item to="/units/Trash_Unit">垃圾兵單位</b-dropdown-item>
          <b-dropdown-item to="/units/hero/">英雄單位</b-dropdown-item>
          <b-dropdown-item to="/units/animal/">動物單位</b-dropdown-item>
          <b-dropdown-item to="/units/edmap">地圖編輯器單位</b-dropdown-item>
        </b-nav-item-dropdown>
        
        <b-nav-item-dropdown text="科技">
          <b-dropdown-item to="/techs/">科技總頁</b-dropdown-item>
          <b-dropdown-item to="/techs/untech">特殊科技</b-dropdown-item>
          </b-nav-item-dropdown>
          
        <b-nav-item to="/building">建築</b-nav-item>
        <b-nav-item to="/batt">戰役</b-nav-item>
        <b-nav-item-dropdown text="戰術技巧">
          <b-dropdown-item to="/ar">戰術技巧總頁</b-dropdown-item>
          <b-dropdown-item to="/ar/armstower">裝甲塔</b-dropdown-item>
          <b-dropdown-item to="/ar/scrush">肉馬開局</b-dropdown-item>
          <b-dropdown-item to="/ar/towerrush">純塔</b-dropdown-item>
          <b-dropdown-item to="/ar/brushfc">黑快搶城</b-dropdown-item>
          <b-dropdown-item to="/ar/brushtof">黑快轉封</b-dropdown-item>
          <b-dropdown-item to="/ar/archerstar">小弓開局</b-dropdown-item>
          <b-dropdown-item to="/ar/fontrush">前置槍矛</b-dropdown-item>
          <b-dropdown-item to="/ar/eglerush">老鷹開局</b-dropdown-item>
          <b-dropdown-item to="/ar/bbrush">黑暗爆民兵</b-dropdown-item>
          <b-dropdown-item to="/ar/armstar">裝甲開局</b-dropdown-item>
                  
          </b-nav-item-dropdown>

        <b-nav-item-dropdown text="遊戲元素">
          <b-dropdown-item to="/armor">防禦類型</b-dropdown-item>
          <b-dropdown-item to="/elements/Regeneration">回血</b-dropdown-item>
          <b-dropdown-item to="/elements/Garrison">駐軍</b-dropdown-item>
          <b-dropdown-item to="/elements/Hit_points">血量</b-dropdown-item>
          <b-dropdown-item to="/elements/Attack">攻擊</b-dropdown-item>
          <b-dropdown-item to="/elements/Rate_of_Fire">射速</b-dropdown-item>
          <b-dropdown-item to="/elements/Frame_delay">開火間隔</b-dropdown-item>
          <b-dropdown-item to="/elements/Area_of_Effect">擴散範圍</b-dropdown-item>
          <b-dropdown-item to="/elements/Team_Bonus">團隊加分</b-dropdown-item>
          <b-dropdown-item to="/elements/Relic">遺跡</b-dropdown-item>
          <b-dropdown-item to="/elements/Line_of_Sight">視野</b-dropdown-item>
          <b-dropdown-item to="/elements/Conversion">招降</b-dropdown-item>
          <b-dropdown-item to="/Garrison">駐軍</b-dropdown-item>
          <b-dropdown-item to="/resource/Food">食物</b-dropdown-item>
          <b-dropdown-item to="/resource/Tree">樹木列表</b-dropdown-item>
          <b-dropdown-item to="/resource/Berry_Bush">果樹</b-dropdown-item>
          <b-dropdown-item to="/resource/Gold">黃金</b-dropdown-item>
          <b-dropdown-item to="/resource/Stone">石頭</b-dropdown-item>
          <b-dropdown-item to="/resource/Wood">木材</b-dropdown-item>
          
        </b-nav-item-dropdown>
        
        <b-nav-item-dropdown text="資訊">
          <b-dropdown-item to="/top">世界知名玩家</b-dropdown-item>
          <b-dropdown-item to="/fotw">台港知名玩家</b-dropdown-item>
          <b-dropdown-item to="/history">歷屆大賽結果</b-dropdown-item>
          <b-dropdown-item to="/games/aok">帝王世紀</b-dropdown-item>
          <b-dropdown-item to="/games/aoc">征服者入侵</b-dropdown-item>
          <b-dropdown-item to="/games/aof">失落的帝國</b-dropdown-item>
          <b-dropdown-item to="/games/ak">非洲王朝</b-dropdown-item>
          <b-dropdown-item to="/games/aor">王者崛起</b-dropdown-item>
          <b-dropdown-item to="/games/aoe">最後的可汗</b-dropdown-item>
          <b-dropdown-item to="/news/ver5-7">5.7改版內容</b-dropdown-item>
          <b-dropdown-item to="/news/ver5-8">5.8改版內容</b-dropdown-item>
          
        </b-nav-item-dropdown>
        <b-nav-item to="/tree/vie">科技樹</b-nav-item>
        <b-nav-item to="/maps">地圖</b-nav-item>
        <b-nav-item-dropdown text="討論及影片分享區">
        <b-dropdown-item to="/civs/bestciv">文明強弱概敘</b-dropdown-item>
        <b-dropdown-item to="/qa">常見問題</b-dropdown-item>
        <b-dropdown-item to="/history">歷史比賽</b-dropdown-item>
        <b-dropdown-item to="/save/">記錄檔區</b-dropdown-item>
        <b-dropdown-item to="/ue">優異條目</b-dropdown-item>
        
        </b-nav-item-dropdown>
        
        
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
