<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>波斯弓兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>波斯弓兵</b>是<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後訓練<nuxt-link to="/units/Archer">徒步弓兵</nuxt-link
            >系消耗額外<nuxt-link to="/resource/Wood">木材</nuxt-link
            >，而不消耗<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              波斯弓兵是一項非常有用的科技，<nuxt-link to="/units/Archer"
                >弓兵</nuxt-link
              >系只花費60木材，但為了保持遊戲平衡，波斯缺乏<nuxt-link
                to="/units/Arbalester"
                >強弩兵</nuxt-link
              >和<nuxt-link to="/techs/Bracer">強力護腕</nuxt-link
              >的升級。話雖如此，弩兵在後期對戰中也能用於對抗<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >。另外，波斯弓兵只需木材，因此能將<nuxt-link to="/resource/Food"
                >食物</nuxt-link
              >和<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >都投入到<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
              >中，由弩兵來射殺剋制戰象的<nuxt-link to="/units/Spearman"
                >長槍兵</nuxt-link
              >和<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >。加上戰象和弩兵的移動速度都差不多，兩者可以互相配合。
            </li>
            <li>
              就像<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>的<nuxt-link
                to="/techs/untech"
                >特殊科技</nuxt-link
              ><nuxt-link to="/techs/Corvinian_Army">科維尼安軍隊</nuxt-link
              >和<nuxt-link to="/civs/Malay">馬來</nuxt-link
              >的特殊科技<nuxt-link to="/techs/Forced_Levy">強制徵兵</nuxt-link
              >一樣，應儘快研發波斯弓兵，以便最大程度地使用弓兵。由放弓兵要花費45黃金，因此玩家最好在需要7名或更多的弓箭手的情況下才研究，否則波斯弓兵的黃金成本會不划算。
              (7×45=315)
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
              >能夠加速波斯弓兵的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              弓兵將弓兵的成本為50木材。研發成本為200食物200黃金。
            </li>
            <li>
              (34699更新) 成本增加為60木材。
            </li>
            <li>
              (35584更新) 成本改為400食物300黃金。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">波斯弓兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech.png" alt="" />
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
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>
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
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              訓練<nuxt-link to="/units/Archer">徒步弓兵</nuxt-link
              >系消耗額外<nuxt-link to="/resource/Wood">木材</nuxt-link
              >，而不消耗<nuxt-link to="/resource/Gold">黃金</nuxt-link>
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
