<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>後勤學</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            後勤學是拜占庭的特殊科技，可於帝王時代在城堡研發。研發後聖騎兵有0.5格的踐踏傷害(額外+5攻擊)，對步兵攻擊+6。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              有後勤學的拜占庭聖騎兵更能屠殺步兵單位，踐踏傷害則能有效對付一群步兵或是近戰單位。然而戟兵對聖騎兵仍舊是個威脅，應盡量避免與一大群的戟兵正面交鋒。
            </li>
            <li>
              後勤學並沒有加成在有拜占庭聖騎兵外表的英雄身上，如:阿提拉和貝里薩留
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
              >能夠加速後勤學的研究時間(快25%)。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">後勤學</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Unique-tech.jpg" width="45" alt="" />
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
            <td class="unit4">拜占庭</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">帝王時代</td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">城堡</td>
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
            <td class="unit3">食物</td>
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">600</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">聖騎兵有踐踏傷害，對步兵攻擊+6。</td>
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
