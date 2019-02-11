<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>帖木兒</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>帖木兒</strong>是《世紀帝國II》中的一名<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >
            <nuxt-link to="/units/Archer_Units">射手</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link
            >，也可在地圖編輯器中使用。史實中的他是突厥化
            <nuxt-link to="/civs/Mongols">蒙古</nuxt-link
            >的統治者，最著名的事蹟是在中亞建立了帖木兒王朝，企圖恢復蒙古帝國在<nuxt-link
              to="/units/hero/Genghis_Khan"
              >成吉思汗</nuxt-link
            >時代時的輝煌。他同時也是蒙兀兒帝國開國君主，
            <nuxt-link to="/units/hero/Babur">巴卑爾</nuxt-link>的曾祖父
          </p>
          <p>
            帖木兒在遊戲中以<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
            >的外型出現，和其他馬弓騎兵一樣，會受到影響馬弓騎兵的升級和家成影響。由於他是一名英雄，因此不會被招降且會自動回血。(自征服者入侵版本以後)。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                帖木兒
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Tamerlaneicon.png" width="80" alt="" />
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
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
              <br /><nuxt-link to="/units/Archer_Units">射手</nuxt-link>
              <br /><nuxt-link to="/units/hero">英雄</nuxt-link>
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
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">6(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
              +3
            </td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">4</td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">箭矢速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">1</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.41</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的帖木兒
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E5%B8%96%E6%9C%A8%E5%84%BF"
                    >帖木兒</a
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
