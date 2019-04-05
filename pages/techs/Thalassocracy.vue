<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>海上霸主</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>海上霸主</b>是<nuxt-link to="/civs/Malay">馬來</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後讓<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >升級成有攻擊能力的<nuxt-link to="/building/Harbor">海港</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              海上地圖海的控制權是非常重要的，海上霸主能把<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >升級成<nuxt-link to="/building/Harbor">海港</nuxt-link
              >，海港比碼頭大，但有攻擊能力能保衛周邊海岸安全，同時對<nuxt-link
                to="/armor/Armor_Class_Ship"
                >船隻</nuxt-link
              >有+9攻擊，可有效摧毀敵方船隻(尤其對方用<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >搶灘時)。海港也可作為進攻手段，蓋在敵方海岸可有效阻止敵方生產單位和捕魚。所以海上霸主能盡早研發就盡早。
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
              >能夠加速海上霸主的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            Thalassocracy是一個在有海上優勢的國家。這個詞源於希臘語thalassa（海）和克拉提亞（規則）。由於<nuxt-link
              to="/civs/Malay"
              >馬來</nuxt-link
            >阿基普拉戈擁有豐富的資源和戰略位置，幾千年前斯里維加亞等海上王國開始在這個地區興起。<nuxt-link
              to="/civs/Indians"
              >印度</nuxt-link
            >-<nuxt-link to="/civs/Chinese">中國</nuxt-link
            >航線上的船隻會停在這個港口進行貿易和補充物資，然後繼續前往中國或印度。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">海上霸主</div>
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
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/civs/Malay">馬來</nuxt-link></td>
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
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">讓碼頭升級成海港。</td>
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
