<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>蘇丹</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            蘇丹是<nuxt-link to="/civs/Indians">印度</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後從採礦、貿易、遺跡收集黃金的速度快10%。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              蘇丹科技是印度發展的重要基石，因為它讓採金工作速度快10%；<nuxt-link
                to="/units/Trade_Cart"
              ></nuxt-link
              >貿易車隊和<nuxt-link to="/units/Trade_Cog"></nuxt-link
              >貿易商旅每趟運載黃金量+10%；遺跡收集黃金速度也+10%。身為一個高度倚賴黃金單位的文明(
              <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、<nuxt-link
                to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >和<nuxt-link to="/units/Bombard_Cannon">火炮</nuxt-link
              >)，蘇丹是印度玩家需要及早研發的科技。
            </li>
            <li>
              蘇丹可以與其他團隊加成疊加，譬如<nuxt-link to="/civs/Aztecs"
                >阿茲特克</nuxt-link
              >或<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >，前者遺跡收集黃金量+33%，後者貿易馬車、貿易商旅每趟多25%黃金。
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
              >能夠加速蘇丹的研究時間(快25%)。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">蘇丹</div>
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
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Indians">印度</nuxt-link>
            </td>
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
            <td class="unit3">木材</td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">從採礦、貿易、遺跡收集黃金的速度快10%。</td>
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
