<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>薩瓦蘭重騎兵(貝利沙魯實)</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>薩瓦蘭重騎兵</strong>是《<nuxt-link to="/games/aok"
              >世紀帝國II：帝王世紀</nuxt-link
            >》中的一名<nuxt-link to="/units/Cavalry_Units">騎兵英雄</nuxt-link
            >，只可以在<nuxt-link to="/batt">戰役</nuxt-link
            >編輯器中找到。薩瓦蘭重騎兵沒有出現在原先《世紀帝國II：帝王世紀》的戰役中，反而在《<nuxt-link
              to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》的戰役中出現好幾次。薩瓦蘭重騎兵有<nuxt-link
              to="/units/Cataphract"
              >拜占庭聖騎兵</nuxt-link
            >的外觀，但比一般拜占庭聖騎兵有較高的HP，不過裝甲和攻擊反而比較低。由於屬於<nuxt-link
              to="/units/hero"
              >英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >(在<nuxt-link to="/games/aoc">征服者</nuxt-link
            >資料片後)，他也會受<nuxt-link to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link>加成的影響。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                薩瓦蘭重騎兵
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Belisariusicon.png" width="80" alt="" />
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
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
            <td class="unit4">210</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">9(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>+6
            </td>
          </tr>
          <tr>
            <td class="unit3">開火速率</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.35</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
