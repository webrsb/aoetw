<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>北畠將軍</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>北畠將軍</strong
            >是一名能在世紀帝國II的地圖編輯器中使用的<nuxt-link
              to="/armor/Armor_Class_Infantry"
              >步兵</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link
            >。他的原型是北畠親房，除了宮廷貴族的身分外，同時也是史家和著作家。雖然他的著作中含有個人的偏頗及政治動機，但卻是現存中最詳細的。在遊戲中北畠將軍是數值更強的
            <nuxt-link to="/units/Samurai">日本武士</nuxt-link
            >。由於他屬於英雄單位，所以無法被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >，也會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >（自《<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
            >》以後）。他和其他<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >一樣，會受到所有影響步兵的升級和加成影響。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle" style="color: #fff;">北畠將軍</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Aethelfirthicon.png" width="80" alt="" />
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
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link
              ><br /><nuxt-link to="/units/Hero">英雄</nuxt-link>
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
              <div class="unititle2" style="color: #fff;">數值</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">8(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
              +5 <br />對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >
              +2 <br />
            </td>
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
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
              <br />
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;"></div>
          <div style="margin-left: 60px;">
            維基百科上的<i
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/%E5%8C%97%E7%95%A0%E8%A6%AA%E6%88%BF"
                  >北畠將軍</a
                ></strong
              ></i
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
