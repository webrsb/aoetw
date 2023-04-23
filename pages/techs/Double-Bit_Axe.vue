<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>雙面斧</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>雙面斧</b>(2013版稱<b>雙刃斧</b>)是<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            ><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link
            >的<nuxt-link to="/techs">科技</nuxt-link>，研發後可使<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >收集<nuxt-link to="/resource/Wood">木材</nuxt-link
            >的速度增快20%。此科技非常重要，最好一上封建立即研發。當然你打的是<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡</nuxt-link
            >快攻，可以在點城堡後再研發。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>:雙面斧免費。</li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >:科技在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜10%/15%/20%。
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
            >"雙面斧一把大而重而且在兩側都有刀片的斧頭，它加速了砍伐樹木的速度。有了兩個切割邊緣，樵夫可以在刀片變鈍的時候切換，然後休息時同時磨礪兩個刃片。樵夫使用雙面斧後能更快，更高效地工作。"</em
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
              <div class="unititle2">雙面斧</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/double-bit_axe.png"
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
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
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
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/bow_saw.png" alt="" /><nuxt-link
                to="/techs/Bow_Saw"
                >弓形鋸</nuxt-link
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
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
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
