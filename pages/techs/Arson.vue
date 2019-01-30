<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>縱火</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            縱火於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在軍營研發。研發後所有的<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >對
            <nuxt-link to="/armor/Armor_Class_Standard_Building"
              >標準建築</nuxt-link
            >傷害+2，於<nuxt-link to="/games/ak">非洲王朝</nuxt-link
            >資料片後出現。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              讓所有步兵攻擊建築具有+2傷害，千萬不要小看這+2，大量的步兵聚集在一起破壞力相當大。
            </li>
            <li>
              許多文明沒有好的攻城武器，但是縱火讓他們有機會快速拆除敵人建築物，比方<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >。
            </li>
            <li>
              某些文明可以短時間生產大量步兵，縱火讓他們省去了研發與生產攻城武器的費用，比方<nuxt-link
                to="/civs/Ethiopians"
                >衣索匹亞</nuxt-link
              >、 <nuxt-link to="/civs/Goths">哥德</nuxt-link>。
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：科技在城堡/帝王時代各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：<nuxt-link
                to="/techs/Perfusion"
                >灌注士氣</nuxt-link
              >讓縱火研發快100%
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發縱火速度快20%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"縱火是蓄意放火燒毀建築物，荒地，垃圾箱，車輛或其他財產而造成損害的罪行。它可能與其他原因如自燃和天然野火區分開來
            縱火往往涉及蓄意向另一人或自己財產的製造火災，以詐領保險賠償金。"</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="">縱火</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Arson.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Barracks-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Barracks">軍營</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">25秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">所有步兵對標準建築傷害+2</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
