<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>強制徵兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            強制徵兵是<nuxt-link to="/civs/Malay">馬來</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後兵營步兵單位不需花費黃金。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              為了維持遊戲平衡，馬來沒有<nuxt-link to="/units/Champion"
                >劍兵勇士</nuxt-link
              >。然而在強制徵兵研發而且後期黃金變的稀少，搭配全滿的
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >科技，他們高CP值的<nuxt-link to="/units/Two-Handed_Swordsman"
                >雙手劍兵</nuxt-link
              >給予馬來在後期垃圾戰爭中一拚的機會
            </li>
            <li>
              如果馬來玩家想盡可能的在戰場上使用大量步兵作戰。就應該盡快研發強制徵兵讓他們的步兵像<nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >研發
              <nuxt-link to="/techs/Mercenaries">雇傭兵</nuxt-link
              >後的<nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link
              >一樣不用黃金就能生產。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
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
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">強制徵兵</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Unique-tech.jpg" width="45" alt="" />
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
            <td class="unit4"><nuxt-link to="/civs/Malay">馬來</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
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
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">600</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">兵營步兵單位不需花費黃金。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
