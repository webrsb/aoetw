<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>游牧</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>游牧</b
            >地圖三面環海，有時中間有河流穿過地圖，陸地可能有松樹和草地的溫帶地形；或棕梠樹和沙地的沙漠地形。玩家一開始有三名<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >沒有<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >，玩家要盡量選擇有大量資源環繞的點建造城鎮中心並開始發展，通常會選擇有<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >及大量金礦的地點。玩家應盡可能地探索地圖，同時不要太晚建造城鎮中心，因為敵人可能已經發展了自己的城鎮。
          </p>
          <p>
            在多人遊戲中，團隊可以嘗試在遊戲早期聯合他們的村民，以試圖迅速摧毀他們的對手。然而，這種策略充其量是有風險的，因為失敗可能導致嚴重的經濟劣勢。團隊也可以建立彼此非常靠近（甚至一起）的基地，以安全交換資源。也可以完開心地到對方村民附近蓋城鎮中心駐紮進去攻擊敵人。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Images-0.jpg" width="300" alt="" />
        <h4>標準游牧地圖</h4>
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
