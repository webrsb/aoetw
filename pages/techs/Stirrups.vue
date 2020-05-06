<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>馬鐙</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>馬鐙</b>是<nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後所有騎兵攻速+25%。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/units/Konnik">保加利亞騎兵</nuxt-link
              >是在遊戲中最慢攻速的單位，
              但在研發馬鐙科技後，保加利亞騎兵攻速會和<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >一様，同時擁有比騎士更高的攻擊，因此在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >中，保加利亞騎兵的這項科技是必須的，但是成本非常高，因此建議先研發<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >科技。 在<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >中，精銳保加利亞騎兵的攻速比<nuxt-link to="/units/Paladin"
                >遊俠</nuxt-link
              >還快，
              加上容易生產和下馬後能作為步兵繼續作戰的能力，使保加利亞騎兵成為遊戲中最好的<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵單位</nuxt-link
              >和<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link>之一。
            </li>
            <li>
              馬鐙還影響<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >和重騎兵。以輕騎兵來說，這使他們能在垃圾兵中佔據巨大優勢，而且全滿的保加利亞<nuxt-link
                to="/units/Hussar"
                >匈牙利輕騎兵</nuxt-link
              >會成為遊戲中最強的輕騎兵，能在一對一戰鬥中擊敗與普通匈牙利輕騎兵、<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >匈牙利輕騎兵， 甚至是已研發<nuxt-link to="/techs/Farimba"
                >驃悍精神</nuxt-link
              >的<nuxt-link to="/civs/Malians">馬利</nuxt-link>輕騎兵。
            </li>
            <li>
              更新檔36906改為影響所有騎兵單位後連重騎兵系都有影響，這讓保加利亞的重裝騎士擁有不輸遊俠的戰鬥力（類似馬利的驃悍精神），但相對的這個改動讓保加利亞失去遊俠這個高階兵種。
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
              >能夠加速堡壘的研究時間(快25%)。
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
              最初馬蹬只影響輕騎兵和保加利亞騎兵。
            </li>
            <li>
              更新檔36906起，馬蹬影響所有騎兵，但相對地保加利亞失去遊俠。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">馬鐙</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
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
            <td class="unit4">35秒</td>
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
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >和<nuxt-link to="/units/Konnik">保加利亞騎兵</nuxt-link>攻速+25%
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! singsing612</div>
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
