<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>帖木兒攻城術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>帖木兒攻城術</b>是<nuxt-link to="/civs/Tatars">韃靼</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Trebuchet">投石機</nuxt-link
            >+2射程、可啟用
            <nuxt-link to="/units/Flaming_Camel">火焰駱駝</nuxt-link>。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              韃靼本身已經擁有<nuxt-link to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >，可以增加<nuxt-link to="/units/Siege_Weapons"
                >攻城單位</nuxt-link
              >的射程和對建築物傷害，加上對低地建築物傷害+
              50％的文明加成，韃靼<nuxt-link to="/units/Trebuchet"
                >投石機</nuxt-link
              >本身已經很強。全滿的投石機會成為遊戲中射程最遠的單位（總共19射程），投石機也可以更自由地安裝。而韃靼應先在<nuxt-link
                to="/building/University"
                >大學</nuxt-link
              >研發攻城工程師，因為它可以給投石機+1射程，並且對建築物有高的傷害，同時也會影響其他攻城單位。
            </li>
            <li>
              <nuxt-link to="/units/Flaming_Camel">火焰駱駝</nuxt-link
              >則是相當於於剋制騎兵單位的炸藥桶，面對騎兵文明時可以讓敵方的騎兵群受到很大的傷害，對付建築物也有加成但是不如炸藥桶。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速帖木兒攻城術的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em>決定版</em>
          </h3>
          <ul>
            <li>
              最初研發後可以使巨型投石機額外多1射程。
            </li>
            <li>
              (36202) 更新，研發後巨型投石機額外多2射程，並可以訓練火焰駱駝。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">帖木兒攻城術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/unique_tech_imperial.png"
                  alt=""
                />
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/imperial_age.png" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">500</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              <nuxt-link to="/units/Trebuchet">投石機</nuxt-link>+2射程、可啟用
              <nuxt-link to="/units/Flaming_Camel">火焰駱駝</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! singsing612</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alltech' })

export default {
  components: {}
}
</script>
<style></style>
