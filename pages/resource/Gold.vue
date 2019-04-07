<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>黃金</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-10">
        <p>
          <b>黃金</b
          >是四種主要資源之一，黃金用於大多數的單位訓練和升級，並且隨著遊戲進行會越來越珍貴。通常主要是由<nuxt-link
            to="/units/Villager"
            >村民</nuxt-link
          >採集黃金，但也可以利用別的手段來獲得。
        </p>
      </div>
      <div class="col-md-2"><img src="~assets/Gold_aoe2.png" alt="" /></div>
      <div class="col-md-12">
        <h3>採集</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            黃金可以在地圖上找到，每塊有800個黃金，是有限的，不過也是最快的收集方式。
          </p>
          <p>
            <nuxt-link to="/civs/Turks">土耳其人</nuxt-link
            >採集黃金特別快，而<nuxt-link to="/civs/Mayans">馬雅人</nuxt-link
            >可以從800黃金上取得920黃金。
          </p>
        </div>
        <h3>貿易</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>或<nuxt-link
              to="/units/Trade_Cog"
              >貿易商旅</nuxt-link
            >可以在兩座市場或<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >間獲得黃金，而距離越遠，生產的黃金越多。
          </p>
          <p>
            <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>的<nuxt-link
              to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >是貿易生產黃金快25％，而<nuxt-link to="/civs/Indians"
              >印度</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            ><nuxt-link to="/techs/Sultans">蘇丹</nuxt-link
            >王則是可以另外多10％的黃金。
          </p>
        </div>
        <h3>市集</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/building/Market">市集</nuxt-link>可以出售<nuxt-link
              to="/resource/Wood"
              >木頭</nuxt-link
            >、<nuxt-link to="/resource/Food">食物</nuxt-link>或是<nuxt-link
              to="/resource/Stone"
              >石頭</nuxt-link
            >換取黃金，但是必須收取30％的手續費並且每次賣完後，資源的價格都會降低，但可以利用行會<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >來降低手續費到15％，而<nuxt-link to="/civs/Saracens"
              >薩拉森人</nuxt-link
            >的<nuxt-link to="/civs">文明</nuxt-link>特性之一是手續費只要5％。
          </p>
        </div>
        <h3>遺跡</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/units/Monk">僧侶</nuxt-link>可以收集<nuxt-link
              to="/elements/Relic"
              >遺跡</nuxt-link
            >放進<nuxt-link to="/building/Monastery">修道院</nuxt-link
            >，屆此產生黃金，而<nuxt-link to="/civs/Aztecs"
              >阿茲特克人</nuxt-link
            >的團隊加分是遺跡生產黃金快33％，同樣印度的蘇丹王可以加快10%。
          </p>
        </div>
        <h3>參見</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/resource/Food">食物</nuxt-link></li>
            <li><nuxt-link to="/resource/Wood">木材</nuxt-link></li>
            <li><nuxt-link to="/resource/Stone">石礦</nuxt-link></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allre',
  components: {}
}
</script>
<style></style>
