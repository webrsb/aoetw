<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>强力重裝長槍兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >中一個<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >種類。<b>强力重型長槍兵</b>出現在幾個活動場景中，並可在場景編輯器中找到。
          </p>
        </div>
        <h2>冷知識</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            這個單位無法在標準游戲中生產，雖然名字聽起來很厲害，但實質上僅僅衹是普通的<nuxt-link
              to="/units/Spearman"
              >槍兵</nuxt-link
            >加了一些<nuxt-link to="/elements/Hit_points">血量</nuxt-link
            >，並且在於<nuxt-link to="/units/Camel">駱駝</nuxt-link
            >對戰時，並不如普通槍兵。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                强力<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Heavypikemanicon.jpg" width="80" alt="" />
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
            <td class="unit3">血量</td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">攻擊獎勵</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_War_Elephant">戰象</nuxt-link
              >攻擊時+25，對<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >攻擊時+22，對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝單位</nuxt-link
              >攻擊時+16，對船舶攻擊時+16，對應戰士作戰時+1，對<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊時+1
            </td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">3.05</td>
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
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
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
        維基百科上的强力重裝長槍兵
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a
                href="https://en.wikipedia.org/wiki/Pike_(weapon)"
                target="_blank"
                >强力重裝長槍兵</a
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
