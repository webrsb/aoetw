<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>綠洲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>綠洲</b
            >的中央有一個巨大的水坑，周圍有一圈巨大的棕櫚樹林。樹木在中心區域以外是有限的，但在中心非常豐富。這張地圖非常不對稱，因為有些地區森林覆蓋率低於其他地區;
            這些是砍伐的理想地點，因為它們可以進入中央湖泊，在那裡可以通過<nuxt-link
              to="/units/Fishing_Ship"
              >漁船</nuxt-link
            >收集<nuxt-link to="/resource/Food">食物</nuxt-link
            >。這張地圖的目標是控制<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >，食物和<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >豐富的沙漠，同時盡可能地利用中央綠洲的資源，並擊敗敵人。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Oasis.png" width="300" alt="" />
        <h4>綠洲地圖，可看見森林的分布很不平均。</h4>
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
