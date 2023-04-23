<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>縱火</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>縱火</b>於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >研發。研發後所有的<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >對<nuxt-link to="/armor/Armor_Class_Standard_Building"
              >標準建築</nuxt-link
            >傷害+2，於《<nuxt-link to="/games/ak"
              >世紀帝國II：非洲王國</nuxt-link
            >》資料片後出現。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              讓所有<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >攻擊<nuxt-link to="/building">建築</nuxt-link
              >具有+2傷害，千萬不要小看這+2，大量的步兵聚集在一起破壞力相當大。
            </li>
            <li>
              許多<nuxt-link to="/civs">文明</nuxt-link>沒有好的<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >，但是縱火讓他們有機會快速拆除敵人<nuxt-link to="/building"
                >建築物</nuxt-link
              >，比方<nuxt-link to="/civs/Japanese">日本</nuxt-link>。
            </li>
            <li>
              某些文明可以短時間生產大量步兵，縱火讓他們省去了研發與生產攻城武器的費用，比方<nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Goths">哥德</nuxt-link>。
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：<nuxt-link
                to="/techs/Perfusion"
                >井噴</nuxt-link
              >讓縱火研發快100%
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
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
            >"縱火是蓄意放火燒毀建築物，荒地，垃圾箱，車輛或其他財產而造成損害的罪行。它可能與其他原因如自燃和天然野火區分開來縱火往往涉及蓄意向另一人或自己財產的製造火災，以詐領保險賠償金。"</em
          >
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>縱火引進，所有文明皆可研發</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              (35584更新) 長劍兵近戰防禦+1
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>(36202更新)
              不可研發縱火
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">縱火</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Arson.png" class="img-fluid" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              除了<nuxt-link to="/civs/Goths">哥德</nuxt-link>以外的所有文明
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/barracks.png" alt="" /><nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">25秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              所有步兵對<nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >傷害+2
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alltech' })

export default {
  components: {}
}
</script>
<style></style>
