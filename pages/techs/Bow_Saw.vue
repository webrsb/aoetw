<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>弓形鋸</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>弓形鋸</b>是<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            ><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link
            >的<nuxt-link to="/techs">科技</nuxt-link>，研發後可使<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >收集<nuxt-link to="/resource/Wood">木材</nuxt-link
            >的速度增快20%。一搬來說許可的話，建議一上<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >立即研發此科技，非常重要
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>:弓形鋸免費。</li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>:科技在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：研發該科技不消耗木材
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"弓形鋸有一個像弓一樣的圓形手柄，鋸片連接著弓端。使用弓形鋸的伐木工能減少浪費並從每棵樹中獲得更多可用的木材。"</em
          >
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
              (35584更新) 研發經濟科技不消耗木材
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">弓形鋸</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/bow_saw.png" alt="" />
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
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/lumber_camp.png" alt="" /><nuxt-link
                to="/building/Lumber_Camp"
                >伐木場</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/double-bit_axe.png"
                alt=""
              /><nuxt-link to="/techs/Double-Bit_Axe">雙面斧</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/two-man_saw.png" alt="" /><nuxt-link
                to="/techs/Two-Man_Saw"
                >雙人鋸</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
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
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">使村民收集木材速度增加20%。</td>
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
