<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
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
            >
            <nuxt-link to="/units/hero">英雄</nuxt-link
            >，只能在地圖編輯器中使用。實際上他在<nuxt-link
              to="/batt/All_Roads_Lead_to_a_Besieged_City"
              >條條大路通圍城</nuxt-link
            >和
            <nuxt-link to="/Legionaries_on_the_Horizon!.php"
              >羅馬軍團隨時殺到</nuxt-link
            >這兩關中出現，不過名稱被改為<nuxt-link to="/batt/Alarica"
              >阿拉里克</nuxt-link
            >。
          </p>
          <p>
            他在遊戲中使用哥德衛隊的外型。作為一個英雄單位，他無法被招降且會自動回血(征服者入侵資料片以後)。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#d01022;">
              <div class="unititle">
                <nuxt-link to="">哥德人狄奧多利克</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/HussarIcon.jpg" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#d01022;">
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
            <td class="unit4">帝王世紀</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
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
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
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
                    >狄奧多里克大帝</a
                  ></strong
                ></i
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
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
