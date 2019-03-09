<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鹿</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鹿</b>有140的肉，但不會被馴化，必須去狩獵或是用<nuxt-link
              to="/units/Scout_Cavalry"
              >斥候</nuxt-link
            >趕回<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >，是初期相當快速的<nuxt-link to="/resource/Food">食物</nuxt-link
            >來源。<nuxt-link to="/units/Villager">村民</nuxt-link
            >獵殺鹿至少要兩箭，而最少3個村民殺鹿會比較有效率。一般來說打封建開打的遊戲，並不會去<nuxt-link
              to="/units/animal/Deer"
              >鹿群</nuxt-link
            >旁邊蓋<nuxt-link to="/building/Mill">磨坊</nuxt-link
            >，而是會用斥候趕回資源採集點，而趕鹿的技巧對新手來說相當困難，必須練習再練習，不斷的練習。
          </p>
        </div>
        <h3>文明優勢</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>:打獵速度快50%
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:額外多獵取20%的肉量
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>:村民打<nuxt-link
                to="/units/animal/Wild_Boar"
                >野豬</nuxt-link
              >攻擊+5，攜帶量+15
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                鹿
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Deer-icon-aoe2.jpg" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物量</td>
            <td class="unit4">140</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allanimal',
  components: {}
}
</script>
<style></style>
