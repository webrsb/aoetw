<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>速不臺</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>速不臺</strong>或稱<b>書部台</b>是《<nuxt-link
              to="/games/aok"
              >世紀帝國II：帝王世紀</nuxt-link
            >》中的一名重裝<nuxt-link to="/units/Archer_Units"
              >馬弓騎兵英雄</nuxt-link
            >，可以在<nuxt-link to="/batt">戰役</nuxt-link
            >"遊牧民族的西遷"和戰役編輯器中找到。速不臺是<nuxt-link
              to="/units/hero/Genghis_Khan"
              >成吉思汗</nuxt-link
            >和窩闊台旗下的將軍和戰略家，他著名的事蹟是在兩天內擊敗匈牙利和波蘭軍隊，後來成為《世紀帝國II
            II: 帝王世紀》<nuxt-link to="/civs/Mongols">蒙古</nuxt-link
            >戰役的"承諾"和"蒙古治下的和平"戰役。速不臺的外觀是<nuxt-link
              to="/units/Heavy_Cavalry_Archer"
              >重裝馬弓騎兵</nuxt-link
            >，會受<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >加成但不受其他加成的影響。由於他屬於<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
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
              <div class="unititle" style="color: #fff;">速不臺</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Subotaiicon.png" width="80" alt="" />
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
              ><br /><nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              ><br />英雄
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
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              12(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>+5
              <br />對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link
              >+5
            </td>
          </tr>
          <tr>
            <td class="unit3">開火速率</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程範圍</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">50%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">7</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>(+2)
              <br /><nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              >(+2)
            </td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">1.65</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
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
