<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>徵兵制度</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            徵兵制度可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link>研發。研發後
            <nuxt-link to="/building/Barracks">軍營</nuxt-link>、<nuxt-link
              to="/building/Archery_Range"
              >射箭場</nuxt-link
            >、<nuxt-link to="/building/Stable">馬廄</nuxt-link>和
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >的單位訓練速度快33%。
          </p>
          <p>
            徵兵制度被認為是必不可少的研究，因為它在補充軍隊或積累大量單位方面非常有效益。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速徵兵制度的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：徵兵制度科技便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：徵兵制度免費。
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
              >能夠加速徵兵制度的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            中世紀的國王有能力召喚他們的附庸和農民民兵獲得有限的服務，徵兵是獲得軍人服役的下一個進展，它允許一個領主規範人民服長期的兵役，而不是每年只有幾個月的服役時間，在世界的一些地方，一個人可能會被徵召從事多年的軍旅服務。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">徵兵制度</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Conscription.jpg" width="45" alt="" />
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
            <td class="unit4">全部文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
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
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">軍營、射箭場、馬廄和城堡的單位訓練速度快33%。</td>
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
