<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>哥德人狄奧多利克</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>哥德人狄奧多利克</strong>是《世紀帝國II》中的一名<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link
            >，只能在地圖編輯器中使用。實際上他在<nuxt-link
              to="/batt/All_Roads_Lead_to_a_Besieged_City"
              >條條大路通圍城</nuxt-link
            >和<nuxt-link to="/batt/Legionaries_on_the_Horizon"
              >羅馬軍團隨時殺到</nuxt-link
            >這兩關中出現，不過名稱被改為<nuxt-link to="/batt/Alaric"
              >阿拉里克</nuxt-link
            >。
          </p>
          <p>
            他在遊戲中使用<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
            >的外型。作為一個<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位，他無法被<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >且會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >(<nuxt-link to="/games/aoc">征服者入侵</nuxt-link>資料片以後)。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                哥德人狄奧多利克
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Theodericthegothicon.png" width="80" alt="" />
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>
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
            <td class="unit4">450</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">10(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link> +3
              <br />對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >
              +2
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的哥德人狄奧多利克
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E7%8B%84%E5%A5%A7%E5%A4%9A%E9%87%8C%E5%85%8B%E5%A4%A7%E5%B8%9D"
                    target="_blank"
                    >狄奧多里克大帝</a
                  ></strong
                ></i
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allhero',
  components: {}
}
</script>
<style></style>
