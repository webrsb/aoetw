<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>地中海</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            如其名<b>地中海</b>是陸地中間包圍著一大片海，陸地跟海的比例非常不對稱，玩家起始的位置還有跟大海的距離會影響玩家的發展策略。然而控制中間海域是必須的，因為海不僅提供龐大的糧食來源，更重要的是能透過<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >偷渡軍隊對敵方發動奇襲，玩家自己也要提防海上的襲擊。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/AoEII_Mediterranean2.png" width="300" alt="" />
        <h4>一個標準地中海地圖</h4>
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
