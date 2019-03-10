<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>龍船</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>龍船</b
            >是不可製造軍艦世紀帝國IIHD：被遺忘的帝國。它可以在場景編輯器中找到。它射擊一個不斷的火流，類似於噴火船。
          </p>
          <p>
            龍船的一個非常顯著的創景是在曼德勒眼鏡蛇（世紀帝國2資料片：<nuxt-link
              to="/games/aor"
              >王者崛起</nuxt-link
            >的拉賈斯的崛起），他們可以在<nuxt-link to="/units/edmap/Canoe"
              >獨木舟</nuxt-link
            >，皇家戰士和<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >附近找到。另一個是在狼山江<nuxt-link to="/batt">戰役</nuxt-link
            >場景（被遺忘的帝國）中。
          </p>
        </div>
        <div class="n1">
          <h2>冷知識</h2>
          <p>
            龍船現實中一般是指<nuxt-link to="/civs/Vikings">維京人</nuxt-link
            >的戰船，而説到<nuxt-link to="/civs/Chinese">中國</nuxt-link
            >，龍船是用來賽船的。兩者之間并沒有任何聯係，游戲的製作者僅僅衹是借用了龍船這個名詞來描述特殊的强大戰船
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                龍船
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Dragonshipicon.jpg" width="80" alt="" />
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
              <nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link>艦艇
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/batt/Battles_of_the_Conquerors"
                >征服者戰役</nuxt-link
              >
            </td>
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
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">攻擊獎勵</td>
            <td class="unit4">
              與船對抗時<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
              >+4，與龜船對抗時攻擊力+4，與<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >船對抗時攻擊力+4，與<nuxt-link to="/civs/Malay">馬來</nuxt-link
              >船塢對抗時+4
            </td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">0.25</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">攻擊範圍</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">船舶（+8）</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">6</td>
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
        維基百科上的龍船
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a
                href="https://en.wikipedia.org/wiki/Dragon_ship"
                target="_blank"
                >龍船</a
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
