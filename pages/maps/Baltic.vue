<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>波羅的海</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>波羅的海</b
            >是一塊四面陸地，中間為海的中等大小的地圖。這張地圖注重隊友間、海陸軍之間的協調。
            玩家需要同時關注好這兩個才能在戰鬥中獲得勝利。把<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >生產重點放在<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >而不是<nuxt-link to="/building/Farm">農田</nuxt-link
            >是防止過度使用<nuxt-link to="/resource/Wood">木材</nuxt-link
            >的好方法。如地圖所示，分隔玩家的土地條是細長型的，所以使用圍牆是阻擋敵軍的好辦法。在隔離對手之後，玩家應該注重使用<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >和各式<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
            >來進行跨海攻擊。
          </p>
          <h3>優勢文明</h3>
          <div class="hrn1"></div>
          <p>請見<nuxt-link to="/civs/bestciv">文明優勢</nuxt-link></p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Baltic.jpg" width="300" alt="" />
        <h4>一個波羅的海地圖</h4>
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
