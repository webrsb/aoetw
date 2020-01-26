<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>大商隊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>大商隊</b>可以在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >時研究於<nuxt-link to="/building/Market">市集</nuxt-link
            >，前置<nuxt-link to="/techs">科技</nuxt-link>為<nuxt-link
              to="/techs/Cartography"
              >製圖學</nuxt-link
            >。 研究之後可以使<nuxt-link to="/units/Trade_Cart"
              >貿易車隊</nuxt-link
            >和<nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
            >的移動速度增加50%，變相的加速了<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >的獲取速度。研發大商隊是遊戲後期加速黃金收集速度的好方法，當然增加移動速度也使得被攻擊導致陣亡的機率大大降低。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">大商隊</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/caravan.png" width="45" alt="" />
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
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <nuxt-link to="/building/Market">市集</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">前置科技</td>
            <td class="unit4">
              <nuxt-link to="/techs/Cartography">製圖學</nuxt-link>
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
            <td class="unit4">200</td>
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
              增加<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
              >和<nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >50%的移動速度。
            </td>
          </tr>
        </table>
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
