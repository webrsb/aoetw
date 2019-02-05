<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>驃悍精神</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            驃悍精神是<nuxt-link to="/civs/Malians">馬利</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >單位(<nuxt-link to="/units/Knight">騎士</nuxt-link>、
            <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、<nuxt-link
              to="/units/Light_Cavalry"
              >輕騎兵</nuxt-link
            >)攻擊+5。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              剽悍精神讓馬利的<nuxt-link to="/units/Cavalry_Units"
                >騎兵單位</nuxt-link
              >是遊戲中最具威力的之一。他們的<nuxt-link to="/units/Heavy_Camel"
                >重裝駱駝騎兵</nuxt-link
              >可以獲得遊戲中最多的14攻擊，比
              <nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
              >還多。馬利的騎兵也是遊戲中攻擊排名非特殊騎兵第二(攻擊力19)和全遊戲第三，僅次於<nuxt-link
                to="/units/Elite_Battle_Elephant"
                >精銳矛象伕</nuxt-link
              >和 <nuxt-link to="/units/War_Elephant">波斯戰象</nuxt-link>。
            </li>
            <li>
              如果搭配<nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link
              >、<nuxt-link to="/units/Slinger">投石手</nuxt-link>或
              <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>對抗<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >，馬利軍隊在戰場上可說見神殺神，佛擋殺佛。
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
              >能夠加速驃悍精神的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在馬利帝國，Farimba是軍事貴族（法拉利）的成員，在戰爭時期擔任騎兵指揮官。Farimba是軍隊領導人，負責監督地方統治者，並確保地方政策不干涉皇帝的政策。Farimba的每一個人都在省會內駐紮著一支小軍，如果他認為領主不合時宜，他可以接管法庭。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="">驃悍精神</nuxt-link></div>
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
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>
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
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">650</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">馬廄單位攻擊+5。</td>
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
