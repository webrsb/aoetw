<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>超級隨機</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            選擇<b>超級隨機</b>時玩家永遠不知道他們會遇到什麼樣的地圖。玩家開局可能有各種單位，如<nuxt-link
              to="/units/Skirmisher"
              >矛兵</nuxt-link
            >，<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
            >，甚至是<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
            >，或者<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
            >。通常在超級隨機裡，玩家可能面臨嚴重的<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >短缺，使市場成為遊戲中最重要的<nuxt-link to="/building"
              >建築</nuxt-link
            >之一。由於玩家不知道地圖類型，因此偵察對於玩家至關重要。大多數地圖仍然相當開放，通常在地圖中心有大型障礙物，如森林或山脈。玩家需要探索地圖以找到資源所在的位置，並並根據地圖的佈局計畫帝國的未來走向。事實上，任何類型的玩法在超級隨機上都行的通。關鍵在於玩家<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >、地圖類型以及玩家的經驗與操作。
          </p>
        </div>
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
