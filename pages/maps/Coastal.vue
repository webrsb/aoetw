<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>沿海</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>沿海</b>地區為一半水域一半陸地。當陸上<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >耗盡時，玩家應該嘗試建造<nuxt-link to="/units/Fishing_Ship"
              >漁船</nuxt-link
            >和<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
            >來控制水域及獲得食物。控制海洋意味著穩定的食物供應和沿海突襲的能力。如果玩家早早失去對水域的控制權，那就該嘗試在封建晚期和<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >早期用快攻對敵人重要資源進行騷擾。在團隊遊戲中，最接近海洋的玩家應該盡快控制該海域，而陸地<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >應該試圖阻止其他玩家進攻海上，這樣就能控制幾乎所有的地圖。
          </p>
          <h3>優勢文明</h3>
          <p>
            <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
              to="/civs/Italians"
              >義大利</nuxt-link
            >、<nuxt-link to="/civs/Japanese">日本</nuxt-link>、<nuxt-link
              to="/civs/Spanish"
              >西班牙</nuxt-link
            >、<nuxt-link to="/civs/Vikings">維京</nuxt-link>。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Imgres-3.jpg" width="300" alt="" />
        <h4>一個標準沿海地圖</h4>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allmap',
  components: {}
}
</script>
<style></style>
