<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>羅賓漢</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>羅賓漢</strong>是《世紀帝國II》中的一名<nuxt-link
              to="/units/Archer_Units"
              >射手</nuxt-link
            ><nuxt-link to="/units/hero">英雄</nuxt-link>，他的原型是<nuxt-link
              to="/civs/Britons"
              >英國</nuxt-link
            >民間傳說中的一名俠盜。
          </p>
          <p>
            遊戲中的他是<nuxt-link to="/units/Longbowman">長弓兵</nuxt-link
            >，會受到所有影響<nuxt-link to="/units/Archer_Units">射手</nuxt-link
            >的升級及加成影響。由於他是一名<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >，因此不會被<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >且會自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >。(自<nuxt-link to="/games/aoc">征服者入侵</nuxt-link>以後)。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                羅賓漢
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/LongbowmanIcon.jpg" width="80" alt="" />
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
              <nuxt-link to="/units/Archer_Units">射手</nuxt-link
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
            <td class="unit4">110</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              11(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">5</td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">70%</td>
          </tr>
          <tr>
            <td class="unit3">箭矢速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">7</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Falcon6164協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的羅賓漢
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E7%BD%97%E5%AE%BE%E6%B1%89"
                    target="_blank"
                    >羅賓漢</a
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
