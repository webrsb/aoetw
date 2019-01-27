<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城鎮巡邏</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            城鎮巡邏可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
            研發。研發後建築物視野+4。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：該科技在城堡/帝王時代花費便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：研究<nuxt-link
                to="/techs/Town_Patrol"
                >城鎮巡邏</nuxt-link
              >的時間在城堡/帝王時代快15%/20%。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>城鎮巡邏成本為300肉200金。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>城鎮巡邏現在成本為300肉100金。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            隨著社區的發展，他們需要有更多的軍隊和資源來捍衛自己。城鎮瞭望轉型成由當地領主提供的城鎮巡邏隊能提供更多對社區安全的保護。
            城鎮巡邏的範圍可能遠離社區，直到可能出現敵人的過境點。更遠的巡邏意味著更早的警告和更多時間準備防禦敵人。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">城鎮巡邏</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Townpatrol.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="#">科技介紹</nuxt-link>
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
              <img
                class="gg"
                src="~assets/Town-center-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img class="gg" src="~assets/Townwatch.jpg" alt="" /><nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">建築物視野+4。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
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
