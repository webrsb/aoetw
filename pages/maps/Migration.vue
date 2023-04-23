<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>移民</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>移民</b>只出現在多人連線遊戲中，圖上沒有任何的<nuxt-link
              to="/units/animal/Wild_Boar"
              >野豬</nuxt-link
            >，<nuxt-link to="/units/animal/Sheep">綿羊</nuxt-link
            >也離玩家的<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >很遠，可派一名<nuxt-link to="/units/Villager">村民</nuxt-link
            >幫忙找羊。<nuxt-link to="/civs/Malay">馬來</nuxt-link>和<nuxt-link
              to="/civs/Japanese"
              >日本</nuxt-link
            >等<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
            >強盛的<nuxt-link to="/civs">文明</nuxt-link>在這張圖上有不錯表現。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Migration.jpg" width="300" alt="" />
        <h4>一個標準移民地圖</h4>
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
