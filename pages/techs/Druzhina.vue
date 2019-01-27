<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>王家侍從</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            王家侍從是<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後步兵對鄰近0.5格的單位有5的踐踏傷害。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              王家侍從是帝王時代斯拉夫軍的基石。他給予<nuxt-link
                to="/units/Champion"
                >劍兵勇士</nuxt-link
              >和<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >對鄰近敵人有踐踏傷害，這讓他們在大型戰鬥中能飛速地對殲滅敵方軍隊。然而
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >的技術仍然優先於王家侍從因為王家侍從是遊戲中最昂貴的特殊科技。
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
              >能夠加速王家侍從的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            王家侍從（俄語：дружина，lit.“Squad”）是早期俄羅斯一群幫助王子管理他的公國的人。
            王家侍從的個人成員被稱為druzhinniki，而王家侍從的第一個成員實際上是北歐戰士。
            他們最終加入了來自各個國家的當地斯拉夫貴族和冒險家。王家侍從的高級成員被稱為貴族鐵騎，並擔任王子最親密的顧問。在13世紀之後，王家侍從這個詞已經不再使用了。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">王家侍從</nuxt-link></div>
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
            <td class="unit4">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
            </td>
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
            <td class="unit4">1200</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">500</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">步兵對鄰近0.5格的單位有5的踐踏傷害。</td>
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
