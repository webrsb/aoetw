<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>高原</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>高原</b
            >是一張有許多懸崖，森林茂密，有一或多條河流穿過的地圖。當許多玩家加入遊玩時，地圖通常會有多條河流，但也不是沒有四人遊戲只出現一條河流的情況出現。
          </p>
          <p>
            河流通常會有一些淺灘連接陸地，也可能有一些小陸路可以讓玩家進到別的玩家的領地。玩家可以圍牆擋住這些地方，但是對方也可以蓋<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >用<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
            >偷渡軍隊到對岸發動奇襲。快攻在這圖上仍舊有效，不過龜著發展經濟也是可以的。
          </p>
          <p>
            在陸地和海上都強盛的<nuxt-link to="/civs">文明</nuxt-link
            >在這張地圖上會表現很好，例如<nuxt-link to="/civs/Spanish"
              >西班牙人</nuxt-link
            >和<nuxt-link to="/civs/Koreans">朝鮮人</nuxt-link>。<nuxt-link
              to="/units/Naval_Vessels"
              >海軍文明</nuxt-link
            >如<nuxt-link to="/civs/Malay">馬來人</nuxt-link>和<nuxt-link
              to="/civs/Vikings"
              >維京人</nuxt-link
            >也是很好的選擇。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Highland_AoEII.png" width="300" alt="" />
        <h4>一個標準高原地圖</h4>
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
