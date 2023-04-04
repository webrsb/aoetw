<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>尼羅河三角洲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            玩家起始位置的小島(三角洲)位於一條大型通航河流的河口，該河流將地圖劃分為兩個部分，到了出海口整個<nuxt-link
              to="/elements/Line_of_Sight"
              >視野</nuxt-link
            >會展開來。開局玩家在地圖最北端的小島上。除了4隻<nuxt-link
              to="/units/animal/Goat"
              >山羊</nuxt-link
            >和一些樹外什麼都沒有。在小島上幾乎不存在<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >和<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >。玩家必須盡快利用<nuxt-link to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >，將<nuxt-link to="/units/Villager">村民</nuxt-link
            >送到資源豐富的外圍陸地（取決於玩家的起始位置）。尼羅河還有相當數量的<nuxt-link
              to="/units/animal/fish"
              >魚類</nuxt-link
            >資源玩家應該好好利用，同時也要發展<nuxt-link
              to="/units/Naval_Vessels"
              >海軍</nuxt-link
            >，海軍強勢的<nuxt-link to="/civs">文明</nuxt-link
            >在這張圖上非常吃香。而野生動物包括大象和<nuxt-link
              to="/units/animal/Ostrich"
              >鴕鳥</nuxt-link
            >。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Nile.png" width="300" alt="" />
        <h4>兩人的尼羅河三角洲地圖</h4>
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
