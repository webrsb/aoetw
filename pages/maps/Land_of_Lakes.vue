<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>百湖之城</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            玩家從半島的任意一角開始。在團體比賽中，同隊玩家共享整個半島。每個半島的地形平坦，幾乎沒有山丘，提供良好的建造地點。地圖中有大量的湖泊和池塘，它們為玩家提供了獨特的策略和機會。如果在錯誤的湖訓練<nuxt-link
              to="/units/Naval_Vessels"
              >海軍</nuxt-link
            >可能只是徒勞無功，而捕魚可以極大地促進玩家的經濟發展。在這張地圖上要好好地探索每個湖泊並計畫策略。由於每個半島三面環繞湖，玩家可以預期敵人攻擊方向並圍牆防禦，<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >和<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >可以幫助抵禦入侵者。遺將在連接每個半島的狹窄峽谷中找到，並且可以由<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >放到<nuxt-link to="/building/Monastery">修道院</nuxt-link
            >提供源源不斷的<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Land_of_lakes.png"
                alt=""
            /></gallery>
            <p class="text-center"><em>1號玩家一開始的城鎮。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Land_of_lakes_1.png"
                alt=""
            /></gallery>
            <p class="text-center"><em>連接兩個半島的狹窄通道。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Land_of_lakes_2.png"
                alt=""
            /></gallery>
            <p class="text-center"><em>在地圖角落藏在森林深處的金礦。</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Land_of_lakes_mini_map.png" width="300" alt="" />
        <h4>標準百湖之城地圖</h4>
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
