<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>勃印曩</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>勃印曩</b>是個<nuxt-link to="/units/Cavalry_Units"
              >騎兵英雄</nuxt-link
            >，在《<nuxt-link to="/games/aor">世紀帝國II：王者崛起</nuxt-link
            >》資料片的勃印曩相關<nuxt-link to="/batt">戰役</nuxt-link
            >和地圖編輯器裡出現。
          </p>
          <p>
            在遊戲中的外貌是<nuxt-link to="/units/Elite_Battle_Elephant"
              >精銳矛象伕</nuxt-link
            >，不過有更高的HP和攻擊。勃印曩不能被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >而且會自行<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <p>
          勃印曩1517年－1581年），《明史》稱之為莽應龍，<nuxt-link
            to="/civs/Burmese"
            >緬甸</nuxt-link
          >東籲王朝的統治者之一，<nuxt-link to="/units/hero/Tabinshwehti"
            >德彬瑞蒂</nuxt-link
          >的繼承者。1551年至1581年在位。1551年勃印曩打敗自己的弟弟東吁王明康，即位於東吁，兩年後滅亡了孟族政權，建都於漢達瓦底。勃印曩在緬甸廣泛受到崇敬，被冠以「大帝」的尊稱。在位期間，將撣邦、寮國與蘭納併入緬甸領土。曾編制律書法典，統一度量衡，發展冶鐵、煉銅等手工業，對當時經濟文化有發展，但因征戰頻繁，人民遭受深重災難。1581年，他去世於下緬甸地區的漢達瓦底，當時緬甸的首都。
        </p>
        <div></div>
        <div></div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                勃印曩
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Bayinnaungicon.png" width="80" alt="" />
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">18(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >+10 <br />對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >+10
            </td>
          </tr>
          <tr>
            <td class="unit3">建設範圍</td>
            <td class="unit4">0.4(patch5.7後待確認)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_War_Elephant"
                >戰象</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.75</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5</td>
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
