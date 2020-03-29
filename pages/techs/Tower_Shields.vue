<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>塔盾</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>塔盾</b>是<nuxt-link to="/civs/Lithuanians"
              >立陶宛</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
            >系和<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
            ><nuxt-link to="/armor">遠程護甲</nuxt-link
            >+1。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              立陶宛没有<nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
            >，因此塔盾對<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
            >系十分重要。而通過塔盾和其他科技加成，全滿<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
            >擁有遊戲中最高的<nuxt-link to="/armor">遠程護甲</nuxt-link
            >（+9），甚至可以與<nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
            >匹敵。
             </li>
            <li>
              這項科技本身就像<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
            >的科技，但考慮到其成本，<nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link
            >要優先研究，因為該科技能為戰矛兵增加更多的近防和遠防，同時只少花費50<nuxt-link to="/resource/Gold">黃金</nuxt-link>和節省大量<nuxt-link to="/resource/Food">食物</nuxt-link>。
             </li>
            <li>
              另外，塔盾不能在垃圾海中取得明顯的優勢。額外的<nuxt-link to="/armor">遠程護甲</nuxt-link
            >不會改變<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
            >對敵方戰矛兵的傷害（即使沒有塔盾，他們本來的遠程護甲（+8）已經抵消了戰矛兵的基礎傷害（+7），同時額外傷害不受遠程護甲的影響），同時因為立陶宛<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
            >没有<nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
            >，所以相比擁有步兵板甲的文明，立陶宛戟兵的近防和遠防均少1。即使在長槍兵系速度提高的文明加成下，在垃圾海中也不會佔有明顯優勢。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速絲綢之路的研究時間(快25%)。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">塔盾</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/unique_tech_imperial.png"
                  class="img-fluid"
                  alt=""
                />
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Lithuanians"
              >立陶宛</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/imperial_age.png" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle.png" alt="" /><nuxt-link
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
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">800</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              長槍兵系和矛兵遠程護甲+1。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! </div>
      </div>
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
