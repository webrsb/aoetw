<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>沼澤</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            玩家從被廣闊淺灘圍繞的“島嶼”開始，玩家可以自由穿梭淺灘上，地圖的中心是一個水體，陸地單位不能通過，有大量的<nuxt-link
              to="/units/animal/fish"
              >魚類</nuxt-link
            >可以捕撈。這張地圖被認為是水上的阿拉伯半島，因為它是一張開放的地圖，玩家可以同時使用<nuxt-link
              to="/units/Naval_Vessels"
              >海軍</nuxt-link
            >及陸軍，甚至讓陸軍海軍之間互相援助。這是張使用<nuxt-link
              to="/units/Demolition_Ship"
              >爆破船</nuxt-link
            >的絕佳地圖，操作得宜可以對敵方部隊跟<nuxt-link to="/building"
              >建築物</nuxt-link
            >造成巨大傷害。玩家的營地周圍是可建造的淺灘，陸地被雨林覆蓋，淺灘上有更多資源包括金礦和<nuxt-link
              to="/resource/Stone"
              >石礦</nuxt-link
            >。野生動物包括<nuxt-link to="/units/animal/Rhinoceros"
              >犀牛</nuxt-link
            >和<nuxt-link to="/units/animal/Water_Buffalo">水牛</nuxt-link
            >，還有分散的池塘裡面充滿魚類，中央海域也有更多魚類可以採集。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Bog_Islands.png" width="300" alt="" />
        <h4>兩人的沼澤地圖</h4>
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
