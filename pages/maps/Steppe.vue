<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>乾草原</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>乾草原</b>可說是金礦股的<nuxt-link to="/maps/Nomad"
              >游牧</nuxt-link
            >版本，在中心的不是金礦而是豐富可狩獵的動物。玩家從中央草原外的一個平坦草原開始。開局有3-4個可容納5人口的<nuxt-link
              to="/civs/Mongols"
              >蒙古</nuxt-link
            >包，可訓養動物也可能根據比賽有<nuxt-link to="/units/animal/Llama"
              >草尼馬</nuxt-link
            >、<nuxt-link to="/units/animal/Sheep">綿羊</nuxt-link>、<nuxt-link
              to="/units/animal/Cow"
              >乳牛</nuxt-link
            >的分別。玩家可以自己決定在哪裡建立他們的<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >，儘管大多數玩家就在他們的起點直接蓋。中央草原擁有極其平坦的地形，周圍有許多小的山丘。在中央草原上可以找到豐富的<nuxt-link
              to="/units/animal/Deer"
              >鹿群</nuxt-link
            >，提供良好的<nuxt-link to="/resource/Food">食物</nuxt-link
            >來源。有時候中間的草原也可能會有永久凍土出現。<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >在中間草原蒐集獵物的時候要小心敵方軍事單位進行攻擊和屠殺村民，因為在平坦地形上幾乎無法躲藏。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Steppe-deer.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>乾草原中間有很多可捕獵的鹿群。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Steppe-1.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>樹林成群環繞在地圖周圍。</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Steppe-mini-map.png" width="300" alt="" />
        <h4>乾草原地圖</h4>
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
