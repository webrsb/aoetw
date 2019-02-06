<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>石礦</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-10">
        <p>
          石礦是四種主要資源之一，通常主要是由村民採集石礦，但也可以利用別的手段來獲得。
        </p>
      </div>
      <div class="col-md-2"><img src="~assets/Stone_aoe2.png" alt="" /></div>
      <div class="col-md-12">
        <h3>採集</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>通常可以在地圖上找到2~5塊石礦，每塊有350石頭。</p>
        </div>
        <h3>市場</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            市場可以用黃金換取石頭，但是必須收取30％的手續費並且每次買完後，價格都會調漲，但可以利用行會科技來降低手續費到15％，而薩拉森人的文明特性之一是手續費只要5％。
          </p>
        </div>
        <h3>科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>可加速收集石礦速度的科技:</p>
          <ul>
            <li><nuxt-link to="/techs/Wheelbarrow">獨輪推車</nuxt-link></li>
            <li><nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link></li>
            <li><nuxt-link to="/techs/Stone_Mining">採石技術</nuxt-link></li>
            <li>
              <nuxt-link to="/techs/Stone_Shaft_Mining">礦井採石</nuxt-link>
            </li>
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
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>:城堡造價便宜25%。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>:建築石材花費減少15%。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>:石礦採集速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">瑪雅</nuxt-link>:自然資源存量+15%。
            </li>
          </ul>
        </div>
        <h3>參見</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/resource/Food">食物</nuxt-link></li>
            <li><nuxt-link to="/resource/Wood">木材</nuxt-link></li>
            <li><nuxt-link to="/resource/Gold">黃金</nuxt-link></li>
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
