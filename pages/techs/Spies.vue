<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>間諜</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>間諜</b>可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後可讓玩家看到敵方<nuxt-link to="/elements/Line_of_Sight"
              >視野</nuxt-link
            >。間諜是遊戲中唯一的成本變動<nuxt-link to="/techs">科技</nuxt-link
            >，它的花費取決於所有敵方(包括中立玩家)的<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >、<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
            >、<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>和<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >的數量。每個上述單位需花費200<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >，花費最低200黃金最高30000黃金。
          </p>
          <p>
            間諜被認為是最有用的技術之一，因為它可以讓玩家永久地看到敵人的動向。然而，間諜實際上也是研究成本最高的技術，在人口上限較高的遊戲中更是如此。希望研究間諜的玩家注意力放在開採大量黃金和市場交易上。
          </p>
          <p>
            研究間諜的好時機是一個團隊殺死了大多數的敵人<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >，並試圖終結敵人時。間諜能夠看到敵人的位置減少了當對手不願認輸的時候拖延的時間。
          </p>
          <p>
            據推測開發人員為了在遊戲即將結束時，特別是在非常大的巨型地圖上，避免長時間的偵察，因而開發了間諜這項技術。
          </p>
          <p>
            間諜在死亡競賽模式下被禁用，因為每個玩家擁有大量的起始黃金。在弒君遊戲中，間諜被禁用。它被<nuxt-link
              to="/techs/Spies"
              >叛徒</nuxt-link
            >所取代。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：間諜科技便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link>：<nuxt-link
                to="/techs/Atheism"
                >無神論</nuxt-link
              >研發後間諜科技便宜50%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            任何年齡的先進<nuxt-link to="/civs">文明</nuxt-link
            >都會收集有關潛在敵人的信息，作為其外交政策的一部分這種情報大部分是通過正常的貿易和外交渠道公開收集的。比較謹慎的國家會積極招募間諜和線人監督鄰近敵國的活動。在中世紀時期，拜占廷人和<nuxt-link
              to="/civs/Mongols"
              >蒙古人</nuxt-link
            >特別活躍地在他們的敵人中間僱傭間諜收集情報。間諜可以給予敵方部隊進攻的預警，或者搜索敵方防禦系統的弱點。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">間諜</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/spies_treason.png" alt="" />
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
            <td class="unit4">全部文明</td>
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
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">每個敵方村民花費200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">可看到敵方視野。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
