<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>四座湖泊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>四座湖泊</b>是一個開放地圖，上面佈滿了<nuxt-link
              to="/resource/Wood"
              >木頭</nuxt-link
            >，和<nuxt-link to="/units/animal/Goat">山羊</nuxt-link>為主的動物。
            四角各有一個湖泊，湖泊充滿魚類，為<nuxt-link
              to="/units/Fishing_Ship"
              >漁船</nuxt-link
            >提供了大量<nuxt-link to="/resource/Food">食物</nuxt-link>。
          </p>
          <p>
            其他開放地圖的戰術都適用於此。而且也使某些文明比起其他有利於開放地圖的文明更好。例如<nuxt-link
              to="/civs/Japanese"
              >日本</nuxt-link
            >能提高漁船的工作效率。值得一提的是，此地圖其中一個熱門的戰術就是偷跑到敵人一側的湖泊建造<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >，訓練<nuxt-link to="/units/Fire_Galley">火艨艟</nuxt-link
            >騷擾敵方漁船，從而控制湖泊。
          </p>
          <p>
            開局資源大多為8羊2豬4條鹿1果，2塊黃金與2塊石頭。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/four_lacks_minimap.png"
                alt=""
            /></gallery>
            <p class="text-center"><em>四座湖泊小地圖</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/four_lakes.png" width="300" alt="" />
        <h4>四人的四座湖泊地圖</h4>
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
