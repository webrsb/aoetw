<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>木材</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-10">
        <p>
          <b>木材</b>是四種主要資源之一，通常主要是由<nuxt-link
            to="/units/Villager"
            >村民</nuxt-link
          >採集木材，但也可以利用別的手段來獲得。
        </p>
      </div>
      <div class="col-md-2">
        <img src="~assets/Wood_aoe2.png" alt="" />
      </div>
      <div class="col-md-12">
        <h3>採集</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在地圖上有很多的木材，而每棵樹基本有100木材。有些樹則有比較多的木材量，例如:竹子150木、猴麵包樹200木等。
          </p>
        </div>
        <h3>市場</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            市場可以用<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >換取木材，但是必須收取30％的手續費，並且每次買完後價格都會調漲，但木材十分常見且量多，所以不建議用黃金去買木材。可以利用<nuxt-link
              to="/techs/Guilds"
              >公會制度</nuxt-link
            >
            來降低手續費到15％，而<nuxt-link to="/civs/Saracens"
              >薩拉森人</nuxt-link
            >的<nuxt-link to="/civs">文明</nuxt-link>特性之一是手續費只要5％。
          </p>
        </div>
        <h3>科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>可加速收集木材的<nuxt-link to="/techs">科技</nuxt-link>:</p>
          <ul>
            <li><nuxt-link to="/techs/Double-Bit_Axe">雙面斧</nuxt-link></li>
            <li><nuxt-link to="/techs/Bow_Saw">弓形鋸</nuxt-link></li>
            <li><nuxt-link to="/techs/Two-Man_Saw">雙人鋸</nuxt-link></li>
          </ul>
        </div>
        <h3>相關文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >:村民資源攜帶量+5。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>:村民伐木速度快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>:<nuxt-link
                to="/building/Farm"
                >農田</nuxt-link
              >成本便宜33%。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >成本減少15%。(團隊加成)
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >:遊戲一開始多50木材。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >:市場建造只要100木材。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>:<nuxt-link
                to="/building/Lumber_Camp"
                >伐木場</nuxt-link
              >、<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
              >、<nuxt-link to="/building/Mill">磨坊</nuxt-link
              >建造成本減少50%。
            </li>
            <li>
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>:<nuxt-link
                to="/building/Fish_Trap"
                >漁網</nuxt-link
              >成本便宜33%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
              >:伐木場科技免費研發。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:自然資源存量+15%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>:<nuxt-link
                to="/building"
                >建築</nuxt-link
              >成本便宜15%。(農田除外)
            </li>
          </ul>
        </div>
        <h3>參見</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/resource/Tree">樹木</nuxt-link></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allre' })

export default {
  components: {}
}
</script>
<style></style>
