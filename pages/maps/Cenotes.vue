<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>岩坑池</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>岩坑池</b>的資源比大多數地圖都要少。它與<nuxt-link
              to="/maps/Arabia"
              >阿拉伯</nuxt-link
            >有許多相似之處，雖然它還有一些有沿岸<nuxt-link
              to="/units/animal/fish"
              >魚類</nuxt-link
            >的水池，而一些懸崖地區也讓玩家比在阿拉伯時更容易防禦。在這張地圖上強烈建議使用快攻，這不僅是因為地圖開放，而且因為早期塔攻可以封掉敵人資源並獲得快速的勝利。有時候木區因為過於分散，讓玩家難以防守及龜經濟（除非防禦玩家在<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >周圍建造塔樓），儘管奇怪的懸崖有時可能會有所幫助。<nuxt-link
              to="/resource/Stone"
              >石頭</nuxt-link
            >和金礦應該得到很好的保護，免受快攻或插堡騷擾，以免玩家缺乏資源。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Cenotes.png" width="300" alt="" />
        <h4>標準岩坑池地圖</h4>
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
