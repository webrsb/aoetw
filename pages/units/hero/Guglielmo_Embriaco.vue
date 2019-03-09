<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>吉列爾莫‧安布裡科</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>吉列爾莫‧安布裡科</strong> 是一名在《世紀帝國II
            HD：<nuxt-link to="/games/ak">非洲王國</nuxt-link
            >》的地圖編輯器中能使用的<nuxt-link to="/armor/Armor_Class_Archer"
              >射手</nuxt-link
            >
            <nuxt-link to="/units/hero/">英雄</nuxt-link
            >。史實中的他是一名熱那亞商人暨軍事領袖，在第一次十字軍東征後給予了各個十字軍國家協助。
          </p>
          在遊戲中，他是一名數值更強的
          <nuxt-link to="/units/Genoese_Crossbowman">熱那亞弩手</nuxt-link
          >。由於他屬於<nuxt-link to="/units/hero">英雄</nuxt-link
          >單位，所以無法被<nuxt-link to="/elements/Conversion">招降</nuxt-link
          >，也會自動<nuxt-link to="/Regeneration">回血</nuxt-link
          >。他和其他<nuxt-link to="/units/Archer_Units">射手</nuxt-link
          >一樣，會受到所有影響射手的升級和加成影響。
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle" style="color: #fff;">吉列爾莫‧安布裡科</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/New_Genoese_Crossbowman.png"
                  width="80"
                  alt=""
                />
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
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link
              ><br /><nuxt-link to="/units/hero">英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">非洲王國</td>
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
            <td class="unit4">170</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              16(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link> +10
              <br />對<nuxt-link to="/armor/Armor_Class_War_Elephant"
                >戰象</nuxt-link
              >
              +10 <br />對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >
              +7 <br />對<nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>
              +7 <br />對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              +2 <br />
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
              <br />
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;"></div>
          <div style="margin-left: 60px;">
            維基百科上的<a
              href="https://en.wikipedia.org/wiki/Guglielmo_Embriaco"
              >吉列爾莫‧安布裡科</a
            >
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
