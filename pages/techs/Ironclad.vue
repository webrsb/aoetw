<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鋼鐵甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鋼鐵甲</b>是<nuxt-link to="/civs/Teutons">條頓</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >近戰護甲+4。玩家要記住<nuxt-link to="/units/Battering_Ram"
              >衝撞車</nuxt-link
            >和<nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link
            >的近戰護甲是-3和-2，有鋼鐵甲後會變成1和2。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >懼怕近戰單位的原因有以下幾點:第一，<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >的攻擊範圍小且對不是<nuxt-link to="/building">建築</nuxt-link
              >和<nuxt-link to="/units/Siege_Weapons">攻城單位</nuxt-link
              >的任何東西沒有攻擊加成。第二，攻城單位在遊戲中的移動速度是最慢的，<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >靠近他們時也難以逃開。上述缺點讓<nuxt-link to="/units/Villager"
                >村民</nuxt-link
              >也能輕易地摧毀衝撞車。鋼鐵甲讓攻城單位可在對方伏擊或是有幾個近戰單位突破前線接近牠們時能多存活幾秒。鋼鐵甲給的加成比<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >的多而且還能抵銷<nuxt-link to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >給予近戰單位的攻擊加成。
            </li>
            <li>
              玩家需銘記在心的是有了鋼鐵甲還是不要讓攻城武器單獨行動。它讓玩家有一些時間可以反應並派軍隊保護攻城武器去完成他們的工作。
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
              >能夠加速鋼鐵甲的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為500木材/350黃金。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>成本降為400木材/350黃金</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">鋼鐵甲</div>
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
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>
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
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">攻城武器近戰護甲+4。</td>
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
