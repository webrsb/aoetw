<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>砲兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>砲兵</b>是<nuxt-link to="/civs/Turks">土耳其</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/building/Bombard_Tower"
              >火砲塔</nuxt-link
            >、<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
            >；<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
            >射程+2。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              砲兵讓<nuxt-link to="/civs/Turks">土耳其</nuxt-link
              ><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >的射程可打到敵隊<nuxt-link to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >。土耳其的<nuxt-link to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >有遊戲中最遠的射程(與有<nuxt-link to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >的巨型投機並列)土耳其的火砲在攻城上有更遠的射程。
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
              >能夠加速砲兵的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>趣聞</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            砲兵是唯一成本需要<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >和<nuxt-link to="/resource/Stone">石頭</nuxt-link>的<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >。
          </p>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            早期的火器和大砲是由為高價競買者服務的專業人士和僱傭軍所操控，在中世紀後期，高價競購者通常是控制東方重要貿易路線的土耳其人，這讓土耳其人獲得了這些新武器的重要經驗並且後來他們用這些火砲來對抗君士坦丁堡和其他基督教城堡。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">砲兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/unique_tech_imperial.png"
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
            <td class="unit4">
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>
            </td>
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
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">500</td>
          </tr>
          <tr>
            <td class="unit3">石材</td>
            <td class="unit4">450</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              火砲塔、火砲；<nuxt-link to="/units/Cannon_Galleon"
                >火砲戰船</nuxt-link
              >射程+2。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
