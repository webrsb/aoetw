<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>重劍兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            世紀帝國1中出現的<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >兵種，功能類似于世紀帝國2中的<nuxt-link to="/units/Champion"
              >劍兵勇士</nuxt-link
            >，只出現在游戲的地圖編輯器中<b>重劍兵</b>對戰<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >部隊時並不吃虧，但是重劍兵的移動速度緩慢，非常懼怕遠距離部隊。很顯然緩慢的移動速度使得這個兵種早期也較容易被<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >欺負。
          </p>
        </div>
        <div class="n1">
          <h2>冷知識</h2>
          <p>
            早期的青銅劍主要作用是穿刺武器，而后，更重更大的劍則實質上為一把大刀。可以砍進裝甲，或抵擋僅僅有刺傷能力的短劍的攻擊。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                重劍兵
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Heavyswordsmanicon.jpg" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
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
            <td class="unit4">世紀帝國1</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.95</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks"></div>
      </div>
    </div>
    <div class="wiki" style="margin-top: 5px;">
      <div style="float: left;">
        <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
      </div>
      <div style="margin-left: 60px;">
        維基百科上的重劍兵
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a href="https://en.wikipedia.org/wiki/Jinete" target="_blank"
                >重劍兵</a
              >
            </strong>
          </i>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alledmap',
  components: {}
}
</script>
<style></style>
