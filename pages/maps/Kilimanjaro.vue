<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>吉力馬札羅山</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            玩家從一個沒有特色的大草原開始，樹木很少，就像大多數非洲地圖一樣。樹木是典型的相思樹，原產於非洲大部分地區。地圖上有一些池塘但裡面沒有任何<nuxt-link
              to="/units/animal/fish"
              >魚類</nuxt-link
            >可捕。除此之外，該地區還有大量的金礦和<nuxt-link
              to="/resource/Stone"
              >石礦</nuxt-link
            >。地圖上有<nuxt-link to="/units/animal/Zebra">斑馬</nuxt-link
            >/<nuxt-link to="/units/animal/Ostrich">鴕鳥</nuxt-link
            >和大象可供獵食，還有一些<nuxt-link to="/units/animal/Goat"
              >山羊</nuxt-link
            >可以放牧。<nuxt-link to="/maps/Kilimanjaro">吉力馬札羅山</nuxt-link
            >與<nuxt-link to="/maps/Arabia">阿拉伯</nuxt-link
            >十分相似，因為地形開闊天然屏障少，都是屬於易攻難守的地圖。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Savannah.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>地圖中間是廣闊草原，沒有甚麼遮蔽物。</em>
            </p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Huntable.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em
                >打獵的話有鴕鳥跟大象可以提供初期<nuxt-link to="/resource/Food"
                  >食物</nuxt-link
                >來源。</em
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Kilimanjaro.png" width="300" alt="" />
        <h4>兩人的吉力馬札羅山地圖</h4>
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
