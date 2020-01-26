<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>神機箭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>神機箭</b>是<nuxt-link to="/civs/Koreans">韓國</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
            >、<nuxt-link to="/units/Onager">中型投石車</nuxt-link>和<nuxt-link
              to="/units/Siege_Onager"
              >重型投石車</nuxt-link
            >射程+1。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              如果<nuxt-link to="/civs/Koreans">韓國</nuxt-link
              >玩家在戰場上使用<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >那研發神機箭可以讓他們的攻擊範圍勝過幾乎所有的弓兵及大部分的攻程單位。同時他們不會再被<nuxt-link
                to="/units/Galleon"
                >重型弩砲戰船</nuxt-link
              >射爽爽，這在某些海島地圖上非常有價制。研發<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >後的韓國投石車是遊戲中最可怕的<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >之一。
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
              >能夠加速神機箭的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>神機箭給投石車系射程+2。</li>
            <li>1.0c改版後射程改為+1。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            儘管<nuxt-link to="/civs/Chinese">中國人</nuxt-link
            >對火藥的發明有信心，但許多人認為韓國的高麗王國是首先使用火箭和火藥作為武器使用。這個時期的編年史者提到高麗火箭和大砲對於他們的軍隊的成功非常重要。高麗和朝鮮王國的長期存在需要強大的軍事力量，因為在它們和一大堆潛在的敵人之間只有大海和阿姆諾克河。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">神機箭</div>
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
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>
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
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">800</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">500</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">投石車射程+1。</td>
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
