<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>採石技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>採石技術</b>是<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            ><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
            >的<nuxt-link to="/techs">科技</nuxt-link>，研發後可使<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >收集<nuxt-link to="/resource/Stone">石礦</nuxt-link>的速度增快15%。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >:科技在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜10%/15%/20%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"黑暗時期歐洲的主要建築材料是<nuxt-link to="/resource/Wood"
              >木材</nuxt-link
            >因為木材存量豐富。接下來最有用的是從腐朽沒有人知道如何修復的羅馬建築中拯救的<nuxt-link
              to="/resource/Stone"
              >石頭</nuxt-link
            >。隨著<nuxt-link to="/civs">文明</nuxt-link
            >再次在這一領域融合，建築行業復甦，石材作為建築材料變得更加理想和實惠。採礦或採石需要製造石材切割工具和將石料從採石場運到建築工地的技術。"</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">採石技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/stone_mining.png" class="img-fluid" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
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
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/mining_camp.png" alt="" /><nuxt-link
                to="/building/Mining_Camp"
                >採礦營地</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/stone_shaft_mining.png"
                alt=""
              /><nuxt-link to="/techs/Stone_Shaft_Mining">礦井採石</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">30秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">使村民收集石礦速度增加15%。</td>
          </tr>
        </table>
      </div>
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
