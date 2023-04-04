<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>河流</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>河流</b>與<nuxt-link to="/maps/Highland">高原</nuxt-link
            >地形相似，有許多河流分開玩家，也有一些淺灘連接陸地。玩家可以築牆擋住淺灘處，不過仍需要堤防敵方偷渡<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >或軍隊發動快攻。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Rivers_minimap.jpg" width="300" alt="" />
        <h4>兩人的河流地圖</h4>
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
