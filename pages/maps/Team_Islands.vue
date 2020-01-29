<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>團隊群島</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            開場同盟的玩家都在自己的<b>隊伍島嶼</b>上。地圖主要由水域包圍，但大多數戰鬥是在陸地上。能否防止敵人<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >登陸是勝利關鍵。建造<nuxt-link to="/building/Wonder"
              >世界奇觀</nuxt-link
            >是這張圖的前幾選勝利方式。如果團隊有<nuxt-link to="/civs/Huns"
              >匈人</nuxt-link
            >，他們的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            ><nuxt-link to="/techs/Atheism">無神論</nuxt-link
            >，能額外延長世界奇觀倒數時間100年，給予更多時間來摧毀敵人的奇觀。有良好合作默契的團隊通常會獲得勝利。<nuxt-link
              to="/civs/Vikings"
              >維京</nuxt-link
            >，<nuxt-link to="/civs/Persians">波斯</nuxt-link>，<nuxt-link
              to="/civs/Koreans"
              >朝鮮</nuxt-link
            >，<nuxt-link to="/civs/Italians">義大利</nuxt-link>和<nuxt-link
              to="/civs/Saracens"
              >薩拉森</nuxt-link
            >等<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
            >強盛的<nuxt-link to="/civs">文明</nuxt-link
            >在這張地圖上也有很大的優勢。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Team_Islands.jpg" width="300" alt="" />
        <h4>一張標準的團隊群島地圖</h4>
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
