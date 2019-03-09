<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>東方劍士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            “世紀帝國II：被遺忘的時代”中一名不可分割的步兵部隊的<b>東方劍客</b>。它出現在幾個活動場景中，也可以在場景編輯器中找到。
          </p>
          <p>
            東方劍客與北歐劍客具有完全相同的數據，並且僅與普通長劍客不同，因為他們對<nuxt-link
              to="/armor/Armor_Class_Building"
              >建築物</nuxt-link
            >缺乏攻擊獎勵。
          </p>
          <p>
            兩個值得注意的現象分別是在<nuxt-link to="/batt/Ruins_of_Empires"
              >帝國的廢墟</nuxt-link
            >和<nuxt-link to="/civs/Indians">印度</nuxt-link>的Estado
            da，Francisco de Almeida<nuxt-link to="/batt">戰役</nuxt-link
            >中的第三和第四場景。
          </p>
        </div>
        <div class="n1">
          <h2>冷知識</h2>
          <p>
            事實上雖然都翻譯為劍士，但是在現實中<nuxt-link
              to="/units/hero/Eastern_Swordsman"
              >東方劍士</nuxt-link
            >可以被分爲用劍（雙刃）和刀（單刃）的不同兵種。<nuxt-link
              to="/civs/Chinese"
              >中國</nuxt-link
            >將領熱愛使用劍，而一般的士卒多用刀，劍在中國古代史一種較高級的階層喜愛的武器。另外，印度和一些東南亞國家使用時多配合盾和長矛使用，這與游戲中東方劍士的形象有所區別。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                東方劍士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Easternswordsmanicon.jpg" width="80" alt="" />
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
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">被遺忘的帝國</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
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
        維基百科上的劍士
        <div style="margin-left: 10px;">
          <i
            ><strong
              ><a href="https://en.wiktionary.org/wiki/swordsman">東方劍士</a>
            </strong>
          </i>
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
