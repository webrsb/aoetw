<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>堡壘</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>堡壘</b>跟<nuxt-link to="/maps/Arena">圍城</nuxt-link
            >是類似的地圖，玩家一開始有一座被<nuxt-link
              to="/building/Stone_Wall"
              >石牆</nuxt-link
            >圍繞的城鎮，可以防止敵方早期快攻，另外有5片<nuxt-link
              to="/building/Farm"
              >農田</nuxt-link
            >、4座<nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
            >、四棟<nuxt-link to="/building/House">居住房舍</nuxt-link
            >和一座<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >。所有玩家的<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >配置都是一樣的，意味著有些人的箭塔可以保護<nuxt-link
              to="/building/Stone_Wall"
              >城牆</nuxt-link
            >，有些人的卻沒有任何實質防禦作用。
          </p>
          <p>插堡，帝快或是城快這些在圍成可用的策略在堡壘也適用。</p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Fortress_two-player_match.jpg" width="300" alt="" />
        <h4>一個標準堡壘地圖</h4>
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
