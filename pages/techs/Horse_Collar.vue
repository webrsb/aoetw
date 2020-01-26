<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>馬軛</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>馬軛</b>可於<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >的<nuxt-link to="/building/Mill">磨坊</nuxt-link
            >研發。可讓新種植的<nuxt-link to="/building/Farm">農田</nuxt-link
            >產量增加75<nuxt-link to="/resource/Food">食物</nuxt-link
            >(總共250食物)。<nuxt-link to="/techs/Heavy_Plow">重犁</nuxt-link
            >是更進一步的<nuxt-link to="/techs">科技</nuxt-link>。
          </p>
          <p>
            已耕種的農田即便馬軛研發完直到再次播種前都會維持原產量175食物，若是正在建造的農田則會吃到完整加成變250食物。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：該科技在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：該科技免費。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"在<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
            >，牛群是農場動物力量的主要來源，儘管馬被認為更強壯，更易於使用。然而，馬匹的牽繩會絆住他們，因此嚴重限制了它的拉力。在東方，可能是<nuxt-link
              to="/civs/Chinese"
              >中國</nuxt-link
            >，發明了一種胸前領，並在之後傳播到歐洲。這對歐洲農業來說是一個重要的創新，因為它極大地提高了馬匹的拉力。減少了耕地所需的時間，並讓更多的土地被種植。"</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">馬軛</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/horse_collar.png" width="45" alt="" />
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
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/feudal_age.png"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Mill-icon.jpg" alt="" /><nuxt-link
                to="/building/Mill"
                >磨坊</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/heavy_plow.png" alt="" /><nuxt-link
                to="/techs/Heavy_Plow"
                >重犁</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">20秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">農田產量增加75食物。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
