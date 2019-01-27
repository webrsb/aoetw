<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>採金技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            採金技術是<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            ><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
            >的科技，研發後可使村民收集金礦的速度增快15%。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >:科技在封建/城堡/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>:採金技術免費。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"自古以來甚至史前時代對黃金和白銀的追尋意味著從黑暗時代開始這些貴金屬在表面上幾乎找不到。要找到更多就必須從地下開採。由於貨幣和珠寶需求的推動，中世紀早期的黃金勘探和黃金開採技術相當進步。"</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">採金技術</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Goldmining.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="#">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Miningcampicon.png"
                alt=""
              /><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Goldshaftmining.jpg"
                alt=""
              /><nuxt-link to="/techs/Gold_Shaft_Mining">礦井採金</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">30秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">使村民收集金礦速度增加15%。</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
