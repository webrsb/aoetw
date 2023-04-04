<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>金礦谷</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>金礦谷</b
            >這張地圖四周綠意盎然，中間寸草不生，但處處充滿了資源。玩家被中心的一個大坑隔開。中央的大坑是乾燥，貧瘠和沙地地形，一些玩家選擇留在森林區域而不是往中央發展，但這樣容易落後其他玩家因為坑內有大堆金礦可供使用。然而，為了<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >流血衝突是在所難免的。玩家在開採金礦的同時也要小心敵人的突襲。坑的邊緣都是斜坡，使得<nuxt-link
              to="/units/Archer_Units"
              >弓箭手單位</nuxt-link
            >可以藉由高地優勢射擊敵人。建造<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >、<nuxt-link to="/building/Castle">城堡</nuxt-link>和<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >將有助於保護<nuxt-link to="/units/Villager">村民</nuxt-link
            >。要贏得最終的勝利就不惜一切代價取得比別人更多的金礦吧!。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Golden_Pit_1.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>金礦谷邊緣是沙地的斜坡。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Golden_Pit_2.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>玩家時常為了中央豐富金礦而大打出手。</em>
            </p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Golden_Pit_3.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>兩方相遇在森林中大打出手。</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Golden_Pit_map.png" width="300" alt="" />
        <h4>標準兩人金礦谷地圖</h4>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allmap' })

export default {
  components: {}
}
</script>
<style></style>
