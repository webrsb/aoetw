<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>馬勇士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>馬勇士</b>是一個<nuxt-link to="/units/Infantry_Units"
              >步兵單位</nuxt-link
            >，只有出現在編輯器的<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >。它結合了<nuxt-link to="/units/Archer_Units">遠程單位</nuxt-link
            >和近戰單位的特點。雖然看起來像<nuxt-link to="/units/Militia"
              >民兵</nuxt-link
            >，但實際上拋出長矛射敵人像一個戰茅兵。儘管是民兵形式，但圖標卻顯示出<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            ><nuxt-link to="/units/Archer">弓箭手</nuxt-link
            >的形象。馬勇士受騎兵<nuxt-link to="/units/Archer_Units"
              >射手</nuxt-link
            >升級的影響。
          </p>
          <p>
            現在馬勇士不再出現於編輯器中（自5.1版以來），但它仍然可以在遊戲檔案中找到。
          </p>
        </div>
        <div class="n1">
          <h2>冷知識</h2>
          <p>
            它最初計劃成為<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
            ><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，代替戰茅兵，但被<nuxt-link to="/units/Conquistador"
              >征服者</nuxt-link
            >取代。在<nuxt-link to="/games/ak">非洲王國</nuxt-link
            >中，馬勇士以<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
            >的形式，被作為伯伯爾的特殊單位。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                馬勇士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Genitour.jpg" width="80" alt="" />
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
            <td class="unit4">征服者戰役</td>
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
            <td class="unit4">60，70菁英</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">4，5(菁英)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">攻擊範圍</td>
            <td class="unit4">3，4(菁英)</td>
          </tr>
          <tr>
            <td class="unit3">最小攻擊範圍</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">90%</td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">弓兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.35</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">5，6(菁英)</td>
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
        維基百科上的馬勇士
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a href="https://en.wikipedia.org/wiki/Jinete">馬勇士</a>
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
