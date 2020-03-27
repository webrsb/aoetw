<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>大草原耕種技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>大草原耕種技術</b>是<nuxt-link to="/civs/Cumans">庫曼</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >和<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >訓練速度+400%。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              大草原耕種技術提升了<nuxt-link to="/civs/Cumans">庫曼</nuxt-link
            >的主要單位：<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >和<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >的訓練速度。 如果是想組建一支快速並具成本效益的軍隊的話，再配合着庫曼<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            >移動速度的文明加成(騎兵速度在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >提升10％/ 15％)。這項科技將非常有用，但此科技並不影響<nuxt-link to="/units/Kipchaks">欽察</nuxt-link
            >和<nuxt-link to="/units/Genitour/">標槍騎兵</nuxt-link
            >。
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
              >能夠加速堡壘的研究時間(快25%)。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">大草原耕種技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>
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
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
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
            <td class="unit4">輕騎兵和馬弓騎兵訓練速度+400%。</td>
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
