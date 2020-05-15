<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>北歐劍士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            《<nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >》中一個<nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
            >的<b>北歐劍士</b>。它出現在幾個活動場景中，也可以在場景編輯器中找到。
          </p>
          <p>
            北歐劍客與東方劍士具有完全相同的數據，並且僅與普通長劍客不同，因為他們對<nuxt-link
              to="/armor/Armor_Class_Building"
              >建築物</nuxt-link
            >缺乏攻擊獎勵。
          </p>
          <p>
            北歐劍士通常看起來是為歐洲<nuxt-link to="/civs">文明</nuxt-link
            >作戰的，比如在梅魯斯的叛亂（<nuxt-link to="/batt/Baria"
              >巴里</nuxt-link
            >的第二種場景），那裡有這樣的隊伍服務於梅魯斯。然而除此之外，在潛逃（阿三的第三場景）中，北歐劍士更名為“精英紅衛兵”，Kannauj的Raja
            Jaichand有兩隊這種兵。也有可能衹有一個，但它會提醒合作夥伴和整個警衛。
          </p>
          <p>
            具有諷刺意味的是，儘管被命名為“劍客”，但他們的精靈清楚地顯示他們揮舞著手斧。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                北歐劍士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Nordicswordsmanicon.png" width="80" alt="" />
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
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">攻擊獎勵</td>
            <td class="unit4">
              與鷹對抗時<nuxt-link to="/elements/Attack">攻擊力</nuxt-link>+6
            </td>
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
            <td class="unit4">0.9</td>
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
        維基百科上的劍士
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a
                href="https://en.wiktionary.org/wiki/swordsman"
                target="_blank"
                >北歐劍士</a
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
