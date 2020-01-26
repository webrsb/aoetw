<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>強制徵兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>強制徵兵</b>是<nuxt-link to="/civs/Malay">馬來</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/building/Barracks">軍營</nuxt-link
            ><nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
            >不需花費<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              為了維持遊戲平衡，<nuxt-link to="/civs/Malay">馬來</nuxt-link
              >沒有<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
              >。然而在強制徵兵研發而且後期黃金變的稀少，搭配全滿的<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              ><nuxt-link to="/techs">科技</nuxt-link>，他們高CP值的<nuxt-link
                to="/units/Two-Handed_Swordsman"
                >雙手劍兵</nuxt-link
              >給予馬來在後期垃圾戰爭中一拚的機會
            </li>
            <li>
              如果馬來玩家想盡可能的在戰場上使用大量<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >作戰。就應該盡快研發強制徵兵讓他們的步兵像<nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >研發<nuxt-link to="/techs/Mercenaries">僱傭兵</nuxt-link
              >後的<nuxt-link to="/units/Magyar_Huszar">馬扎爾驃騎兵</nuxt-link
              >一樣不用黃金就能生產。
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
              >能夠加速強制徵兵的研究時間(快25%)。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">強制徵兵</div>
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
            <td class="unit4"><nuxt-link to="/civs/Malay">馬來</nuxt-link></td>
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
            <td class="unit4">40秒</td>
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
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">600</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">軍營步兵單位不需花費黃金。</td>
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
