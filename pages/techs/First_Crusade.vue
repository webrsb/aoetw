<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>第一次十字軍東征</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>第一次十字軍東征</b>(簡稱東征)是<nuxt-link to="/civs/Sicilians">西西里</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後所有<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >(最多5座)一次性生產10個<nuxt-link to="/units/Serjeant"
              >薩金特衛兵</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              這項科技能快速的獲得大量<nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
              >。建造越多<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >，其效果就越好，例如在<nuxt-link to="/maps/Arena">競技場</nuxt-link
              >上建造4/5個城鎮中心，然後一次性獲得40/50個<nuxt-link to="/units/Serjeant"
              >薩金特衛兵</nuxt-link
            >，但這需要花費大量時間和資源。如果與西西里另一個特殊科技<nuxt-link to="/techs/Scutage">兵役免除稅</nuxt-link
              >一起使用，這項科技帶來的步兵將有助於獲得更多<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >。
            </li>
            <li>
              有些情況下，玩家需要抵禦對手入侵但又沒有足夠的部隊，這項科技就可以用來研發。另外，即使達到人口上限，仍然可以研發這項科技。
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
              >能夠加速第一次十字軍東征的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              西西里雖然不是1091年第一次十字軍東征的主力，但與許多歐洲國家一樣受十字軍東征的影響，大量軍事修會在西西里島成立，像醫院騎士團、聖殿騎士團、條頓騎士團。但是作為多民族國家的西西里阻止他們積極參加東征，僅為他們提供資源。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">第一次十字軍東征</div>
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
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Sicilians">西西里</nuxt-link>
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
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">300</td>
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
            <td class="unit4">
              所有<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >(最多5座)一次性生產10個<nuxt-link to="/units/Serjeant"
              >薩金特衛兵</nuxt-link
            >
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
