<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>雪山地</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>雪山地</b>是《<nuxt-link to="/games/ak"
              >世紀帝國II：非洲王國</nuxt-link
            >》中唯一設定不是在非洲的地圖。地圖上有些積雪的山頭，有一些結冰的池塘和森林，但大部分是廣闊的平地。一開始開局跟<nuxt-link
              to="/maps/Nomad"
              >游牧</nuxt-link
            >十分類似，玩家沒有<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >，<nuxt-link to="/units/Villager">村民</nuxt-link
            >散落在各地，也沒有<nuxt-link to="/units/Scout_Cavalry"
              >斥候</nuxt-link
            >。這張地圖上沒有漿果或<nuxt-link to="/units/animal/Wild_Boar"
              >野豬</nuxt-link
            >，但有相當數量的<nuxt-link to="/units/animal/Sheep">綿羊</nuxt-link
            >和鹿可當作<nuxt-link to="/resource/Food">食物</nuxt-link
            >。樹木很多，但<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >和金礦數量不多。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Sheeps_and_Goats.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em
                >地圖上有許多綿羊跟<nuxt-link to="/units/animal/Deer"
                  >鹿群</nuxt-link
                >可供獵食。</em
              >
            </p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Mines.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em
                >金礦跟<nuxt-link to="/resource/Stone">石礦</nuxt-link
                >的數量不多，玩家要謹慎使用。</em
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Mountain_Pass.png" width="300" alt="" />
        <h4>兩人的雪山地地圖</h4>
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
