<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>島嶼</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            玩家在<b>島嶼</b>上一開始自己占據一座島，島上可能有鹿及一些<nuxt-link
              to="/units/animal/Sheep"
              >綿羊</nuxt-link
            >，並可能出現三種不同的地形:沙漠，草原和美洲叢林，每種地形會有溫帶森林，棕櫚樹或熱帶叢林等不同的樹種。此外還有些無人居住的小島，島上可能蘊藏豐富的<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >和<nuxt-link to="/resource/Stone">石礦</nuxt-link>。
          </p>
          <p>
            島嶼地圖對海洋的控制非常重要。玩家要盡可能發展<nuxt-link
              to="/units/Naval_Vessels"
              >海軍</nuxt-link
            >並探索有額外資源的小島來獲得比敵人更多的資源(黃金石礦)，同時阻止敵人發展海軍，並儘可能利用<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >發動早期快攻打得敵人措手不及。<nuxt-link to="/units/Naval_Vessels"
              >海軍文明</nuxt-link
            >，如<nuxt-link to="/civs/Malay">馬來人</nuxt-link>和<nuxt-link
              to="/civs/Saracens"
              >薩拉森人</nuxt-link
            >，在這張地圖上較有優勢。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/AoEII_Islands.png" width="300" alt="" />
        <h4>一個標準島嶼地圖</h4>
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
