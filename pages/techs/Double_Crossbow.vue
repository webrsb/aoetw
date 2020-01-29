<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>雙弩箭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>雙弩箭</b>是<nuxt-link to="/civs/Khmer">高棉</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Ballista_Elephant"
              >弩砲象</nuxt-link
            >和<nuxt-link to="/units/Scorpion">弩砲</nuxt-link
            >一次發射兩個投射物。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              雙弩箭增強了<nuxt-link to="/units/Ballista_Elephant"
                >弩砲象</nuxt-link
              >和<nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >無可挑剔的弩砲(<nuxt-link to="/elements/Team_Bonus"
                >團隊加分</nuxt-link
              >:弩砲射程+1還有<nuxt-link to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >的加成)對大規模<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >的殺傷力。
            </li>
            <li>
              第二個投射物有一個輕微的錐形擴展，造成的傷害比第一個投射物小一點。
            </li>
            <li>
              大量有雙弩箭的弩砲象和弩砲可以摧毀大面積區域，這讓高棉的弩砲水平與<nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、和<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >的弩砲可以平起平坐。
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
              >能夠加速雙弩箭的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            雙弩箭是一組有雙弓弦的弩，使用者幾乎可以同時發射兩支箭。根據12世紀和13世紀初的浮雕，<nuxt-link
              to="/civs/Khmer"
              >高棉人</nuxt-link
            >以雙弩做為武器。這種做法是借鏡於<nuxt-link to="/civs/Chinese"
              >中國</nuxt-link
            >的。這些武器是用來攻城和防禦堡壘用的。然而高棉把這些武器放在<nuxt-link
              to="/units/War_Elephant"
              >戰象</nuxt-link
            >的身上作為另一種武器使用。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">雙弩箭</div>
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
            <td class="unit4"><nuxt-link to="/civs/Khmer">高棉</nuxt-link></td>
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
            <td class="unit4">700</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">弩砲象和弩砲一次發射兩炮。</td>
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
