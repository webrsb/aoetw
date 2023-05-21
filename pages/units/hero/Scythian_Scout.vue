<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>斯基泰斥候</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>斯基泰斥候</strong>是《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》中的一名<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link>，在多關<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >中都有登場，最先登場的關卡是<nuxt-link to="/batt/Scourge_of_God"
              >上帝之怒</nuxt-link
            >，是有1000滴血的羅馬囚犯；在<nuxt-link to="/batt/Bukhara_557"
              >布哈拉</nuxt-link
            >戰役中則是玩家一開始就能指揮的單位。在地圖編輯器中也可以使用他。
          </p>
          <p>
            在<nuxt-link to="/batt/Sundjataa">松迪亞塔</nuxt-link
            >戰役的<nuxt-link to="/batt/Djeriba_Gold">虎口奪食</nuxt-link
            >這關中，玩家進入地圖南方的營地內時也可以取得八支斯基泰斥候(被改名為<nuxt-link
              to="/civs/Malians"
              >馬利</nuxt-link
            ><nuxt-link to="/units/Knight">騎士</nuxt-link
            >)，他們有傑出的<nuxt-link to="/armor">遠防</nuxt-link>和<nuxt-link
              to="/elements/Regeneration"
              >回血</nuxt-link
            >能力，是相當優秀的單位。
          </p>
          <p>
            他們在遊戲中使用<nuxt-link to="/units/Light_Cavalry"
              >輕騎兵</nuxt-link
            >的外型，由於他是一名<nuxt-link to="/units/hero">英雄</nuxt-link
            >，因此不會被<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >且會自動回血。
          </p>
          <br />軼事錄
          <hr />
          <p>
            雖然在遊戲中有同名的英雄單位可用，但在<nuxt-link
              to="/batt/Scourge_of_God"
              >上帝之怒</nuxt-link
            >這關中登場的斯基泰斥候卻是以有1000滴血的一般<nuxt-link
              to="/units/Scout_Cavalry"
              >斥候</nuxt-link
            >改名取代，原因不明。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                斯基泰斥候
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/LightCavalryIcon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              ><br /><nuxt-link to="/units/hero">英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">90</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">10(近戰)</td>
          </tr>

          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.5</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allhero' })

export default {
  components: {}
}
</script>
<style></style>
