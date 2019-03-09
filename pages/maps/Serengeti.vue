<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>塞倫蓋提平原</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            這張地圖可以被視為<nuxt-link to="/maps/Arabia">阿拉伯</nuxt-link
            >的非洲版本，資源也比大多數地圖都要少。這張圖易攻難守，敵人隨時會從各方攻來，營地外面的<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >和<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >是敵人快攻的目首要標。盡早封鎖敵方資源能使敵人陷入困境，或者提早結束遊戲。當地的野生動物包括<nuxt-link
              to="/units/animal/Zebra"
              >斑馬</nuxt-link
            >，<nuxt-link to="/units/animal/Ostrich">鴕鳥</nuxt-link
            >，大象和<nuxt-link to="/units/animal/Lion">獅子</nuxt-link
            >。此外，還有<nuxt-link to="/units/animal/Goat">山羊</nuxt-link
            >可以放牧。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Towns.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>塞倫蓋提平原十分開闊，玩家要確實圍家是一件不容易的事。</em>
            </p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Rock_pillars.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em
                >塞倫蓋提平原上有一些巨大的岩柱，跟旁邊的矮樹木形成強烈對比。</em
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Serengeti.png" width="300" alt="" />
        <h4>兩人的塞倫蓋提平原地圖</h4>
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
