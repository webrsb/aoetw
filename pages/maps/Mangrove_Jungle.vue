<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>紅樹林</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            玩家的基地周圍除了鹿、<nuxt-link to="/units/animal/Water_Buffalo"
              >水牛</nuxt-link
            >及<nuxt-link to="/units/animal/Rhinoceros">犀牛</nuxt-link
            >外都被<b>紅樹林</b>包圍著，只要順著淺灘就能抵達敵方營地。地圖上的礦產非常多，但都被紅樹林圍住，需要更多伐木工或<nuxt-link
              to="/units/Onager"
              >中型投石車</nuxt-link
            >開路才能得到這些礦產。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/More_Mines.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>紅樹林裡有豐富礦產等著玩家去開採!</em>
            </p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Shallow.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>順著下方的淺灘走就能到達敵方城鎮。</em>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Mangrove_Jungle.png" width="300" alt="" />
        <h4>兩人的紅樹林平原地圖</h4>
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
