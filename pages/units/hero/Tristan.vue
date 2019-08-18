<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>崔斯坦</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>崔斯坦</b>是一位在《<nuxt-link to="/games/ak"
              >世紀帝國II：非洲王國</nuxt-link
            >》資料片中登場的<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位，你可在地圖編輯器中找到他。在歷史上，崔斯坦是一名康沃爾人，他是<nuxt-link
              to="/units/hero/King_Arthur"
              >亞瑟王</nuxt-link
            >圓桌<nuxt-link to="/units/Knight">騎士</nuxt-link
            >的成員之一。他最知名的故事是與自己叔父的妻子依所德的一段不倫戀。
          </p>
          <p>
            崔斯坦在遊戲中以<nuxt-link to="/units/Magyar_Huszar"
              >馬扎爾驃騎兵</nuxt-link
            >的外表登場。所有對騎兵有用的<nuxt-link to="/techs">科技</nuxt-link
            >與加成對崔斯坦也有效。作為一個英雄單位，他無法被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >且會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
          <p>
            崔斯坦是來自於<nuxt-link to="/civs/Britons">英國</nuxt-link
            >的人物，但製作組卻用馬扎爾驃騎兵而非騎士作為他的外表。沒人知道為什麼。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                崔斯坦
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Magyar_Huszar_icon.jpg" width="80" alt="" />
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
            <td class="unit4">騎兵<br />英雄</td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>
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
            <td class="unit4">140</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">14(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +8對<nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link
              ><br />+2對<nuxt-link to="/armor/Armor_Class_Ram"
                >衝撞車</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">1.83</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">5.5</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
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
            <td class="unit3">跑速</td>
            <td class="unit4">1.5</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Steven協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的崔斯坦
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a href="https://tinyurl.com/ybrg2gl2" target="_blank"
                    >崔斯坦</a
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
