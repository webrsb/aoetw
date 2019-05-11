<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>企鵝</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            該<b>企鵝</b>是一種作弊單位在世紀帝國II中。然而，它並沒有出現在世紀帝國II：失落的帝國
            模組中。這是一個裝甲和傷害輸出相當高的<nuxt-link
              to="/units/Infantry_Units"
              >步兵單位</nuxt-link
            >。它只出現在場景編輯器中。
          </p>
          <p>企鵝與人類單位的游戲邏輯和機制是相同的。</p>
        </div>
        <div class="n1">
          <h2>冷知識</h2>
          <p>
            並看不出這是個什麽種的企鵝，然而當你輸入“I don't
            exist."時就會出現在你的<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >下任你指揮。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                企鵝
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Penguinicon.jpg" width="80" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
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
            <td class="unit4">64</td>
          </tr>
          <tr>
            <td class="unit3">攻擊方式</td>
            <td class="unit4">近戰</td>
          </tr>
          <tr>
            <td class="unit3">攻擊獎勵</td>
            <td class="unit4">
              攻擊<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >（包括防禦性建築）時攻擊+8
            </td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.92</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
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
        維基百科上的企鵝
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a href="https://en.wikipedia.org/wiki/Penguin" target="_blank"
                >企鵝</a
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
