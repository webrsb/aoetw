<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>雅典衛城</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            《<nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >》首次出現的<b>雅典衛城</b>是一個非常開放的地圖，中間有一小圈池塘。玩家在特殊的山丘開始遊戲，地圖上具有獨特的灰色紋理斜坡無法建造<nuxt-link
              to="/building"
              >建築</nuxt-link
            >，因此幾乎不可能圍好基地。另外玩家必須下山為了爭奪<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >和<nuxt-link to="/resource/Stone">石礦</nuxt-link>而戰。
          </p>
          <gallery
            ><img
              position="centered"
              class="imgn hg"
              width="500"
              src="~assets/Acropolis-slope.jpg"
              alt=""
          /></gallery>
          <p class="text-center"><em>灰色斜坡無法建造任何建築。</em></p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Acropolis_Preview.jpg" width="300" alt="" />
        <h4>標準雅典衛城地圖</h4>
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
