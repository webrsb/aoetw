<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>黑曜石之箭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            黑曜石之箭是<nuxt-link to="/civs/Mayans">馬雅</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/building/Archery_Range"
              >射箭場</nuxt-link
            ><nuxt-link to="/units/Archer">弓兵系</nuxt-link>對
            <nuxt-link to="/armor/Armor_Class_standard_building"
              >標準建築</nuxt-link
            >和<nuxt-link to="/armor/Armor_Class_stone_defense"
              >石造建築</nuxt-link
            >攻擊+6。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              弓兵通常需要搭配<nuxt-link to="/units/Siege_Weapons"></nuxt-link
              >攻城武器才能有效破壞建築物因為弓兵的傷害低而且建築物有護甲。另外瑪雅的科技樹十分有限，也沒有騎兵單位，而馬雅又相當倚賴弓箭手，使得破壞建築對馬雅是個頭痛的問題。
            </li>
            <li>
              。有了黑曜石之箭的馬雅弓兵可對建築物造成大量傷害，還可以在安全距離同時對建築射擊而不必圍繞著它。
            </li>
            <li>
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >科技因為比較便宜仍然要優先研發，另外黑曜石之箭沒有加成到<nuxt-link
                to="/Plumed_units/Archer"
                >羽毛箭射手</nuxt-link
              >。如果盟友有
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >的話弓箭手對建築物的總體攻擊會是+8(薩拉森<nuxt-link
                to="/Team_Bonus"
                >團隊加成</nuxt-link
              >:弓兵對建築物+2攻擊)。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速黑曜石之箭的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>黑曜石之箭讓弓兵對建築物攻擊+1。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>
              黑曜石之箭現在讓弓兵對建築物攻擊+6。4.8改版後對石造建築也攻擊+6。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle">
                <nuxt-link to="">黑曜石之箭</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CastleAgeUnique.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4"><nuxt-link to="/civs/Mayans">馬雅</nuxt-link></td>
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
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">射箭場弓兵單位對建築物和石造建築攻擊+6。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
