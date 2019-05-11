<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>羅蘭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>羅蘭</strong
            >是可在《世紀帝國II》的地圖編輯器中使用的一名<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link>，他的原型是<a
              href="https://zh.wikipedia.org/wiki/%E6%9F%A5%E7%90%86%E6%9B%BC"
              target="_blank"
              ><nuxt-link to="/units/hero/Charlemagne">查理曼大帝</nuxt-link></a
            >麾下的一名<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>將領。
          </p>
          <p>
            遊戲中的他是一名<nuxt-link to="/units/Knight">騎士</nuxt-link
            >，會受到所有影響<nuxt-link to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >的升級及加成影響。由於他是一名<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >，因此不會被<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >且會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link>。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                羅蘭
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/KnightIcon.jpg" width="80" alt="" />
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
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">10(近戰)</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.3</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的羅蘭
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E7%BE%85%E8%98%AD_(%E9%A8%8E%E5%A3%AB)"
                    target="_blank"
                    >羅蘭</a
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
