<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>榮冠戰爭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>榮冠戰爭</b>是<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >攻擊+4。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              榮冠戰爭的研發可讓<nuxt-link to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >和<nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
              >替代<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >成為阿茲的軍隊核心。與<nuxt-link to="/units/Spearman"
                >長槍兵</nuxt-link
              >搭配讓他們成為一支非常的危險部隊。即使<nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >與他們碰頭也會陷入苦戰，因為在大規模的戰鬥中，豹戰士能夠擊敗他們。
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
              >能夠加速榮冠戰爭的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            當城邦和州之間的正常競爭沒有產生足夠的祭品進行儀式時，<nuxt-link
              to="/civs/Aztecs"
              >阿茲特克人</nuxt-link
            >和他們的鄰居舉辦榮冠戰爭以增加祭品供應量，這些社會的戰士會熱血地奔赴這些戰爭，知道這是他們贏得榮耀和地位的機會。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">榮冠戰爭</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech_imperial.png" width="45" alt="" />
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/imperial_age.png"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
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
            <td class="unit4">60秒</td>
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
            <td class="unit4">450</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">750</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>攻擊+4。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
