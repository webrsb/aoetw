<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>破壞者</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>破壞者</strong>是《<nuxt-link to="/games/aok"
              >世紀帝國II：帝王世紀</nuxt-link
            >》中的一名透過作弊換得的自殺<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >，只能在<nuxt-link to="/batt">戰役</nuxt-link
            >編輯器中找到或是透過輸入作弊密碼"to
            smithereens"破壞者就會出現在玩家的<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >旁邊，它也會出現在<nuxt-link to="/batt/Genghis_Khana"
              >成吉思汗</nuxt-link
            >第五戰役"<nuxt-link to="/batt/Pax_Mongolia"
              >蒙古治下的和平</nuxt-link
            >"。破壞者比一般的<nuxt-link to="/units/Petard">爆炸桶</nuxt-link
            >移動速度更快，對<nuxt-link to="/armor/Armor_Class_Building"
              >建築物</nuxt-link
            >的傷害力也更強。它的外觀是爆炸桶，由於他屬於英雄單位，因此不能被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >(在<nuxt-link to="/games/aoc">征服者</nuxt-link>資料片後)。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                破壞者
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Saboteuricon.png" width="80" alt="" />
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
              <nuxt-link to="">自殺單位<br />攻成武器<br />英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練地方</td>
            <td class="unit4">城鎮中心</td>
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
            <td class="unit4">45</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">100(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加城</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>+500
              <br />對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >+500
            </td>
          </tr>
          <tr>
            <td class="unit3">濺射範圍</td>
            <td class="unit4">2.5</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.35</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
