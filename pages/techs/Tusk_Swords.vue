<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>象牙劍</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>象牙劍</b>是<nuxt-link to="/civs/Khmer">高棉</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Battle_Elephant"
              >矛象伕</nuxt-link
            >+3攻擊。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >的大象在象牙劍的加乘下變得除了有速度且更具殺傷力。高棉的還有全滿的<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              ><nuxt-link to="/techs">科技</nuxt-link>、<nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >和<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >可以加在大象身上。如果玩家在初期想以<nuxt-link
                to="/units/Battle_Elephant"
                >矛象伕</nuxt-link
              >作為<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >的主要單位，象牙劍也許可以比<nuxt-link to="/techs/Forging"
                >鍛造技術</nuxt-link
              >技術優先研發。但在一般情況下應該將其看作一項<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >技術並在<nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link
              >和<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
              >研發後再研發象牙劍。
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
              >能夠加速象牙劍的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            象牙劍是一對專門設計用於連接到象牙的刀片。這些武器加上大象身上的護甲，使大象在戰鬥中變得更加可怕。據稱過去有數百甚至數千的象牙劍存在世上。但是現今只有少數保存在博物館中。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">象牙劍</div>
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
            <td class="unit4"><nuxt-link to="/civs/Khmer">高棉</nuxt-link></td>
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
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">200</td>
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
            <td class="unit4">矛象伕+3攻擊。</td>
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
