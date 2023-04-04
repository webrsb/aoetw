<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>庫曼傭兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>庫曼傭兵</b>是<nuxt-link to="/civs/Cumans">庫曼</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後隊伍成員能在城堡免費生產10名精銳<nuxt-link
              to="/units/Kipchaks"
              >欽察</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/units/Kipchaks">欽察</nuxt-link
              >是一個出色的突襲部隊，因此這項科技對突襲十分有用。而且這科技也可以受益於同盟的<nuxt-link
                to="/techs/untech"
                >特殊科技</nuxt-link
              >（例如，<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >因為<nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link
              >的特殊科技使得擁有更長射程和更高攻擊力的精銳欽察）。而10個精銳欽察對打帶跑戰術也十分有用。
            </li>
            <li>
              這項科技也有疊加效果，比如由4名<nuxt-link to="/civs/Cumans"
                >庫曼</nuxt-link
              >玩家組成的隊伍中，每位隊員也可以研究科技來為自己和隊員增加10個精銳欽察，因此整個團隊總共會有160個精銳欽察，總費用為2,600<nuxt-link
                to="/resource/Food"
                >食物</nuxt-link
              >和1600<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >，而不是正常訓練欽察的9,600<nuxt-link to="/resource/Wood"
                >木材</nuxt-link
              >和5,600黃金（不包括升級精鋭的成本）。
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
              >能夠加速庫曼傭兵的研究時間(快25%)。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">庫曼傭兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/unique_tech_imperial.png"
                  class="img-fluid"
                  alt=""
                />
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
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
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
            <td class="unit4">50秒</td>
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
            <td class="unit4">650</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              隊伍成員能在城堡免費生產10名精銳<nuxt-link to="/units/Kipchaks"
                >欽察</nuxt-link
              >。
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
