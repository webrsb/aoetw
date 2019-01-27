<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>錐狀箭頭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            錐狀箭頭可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link> 研發可讓
            <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >、<nuxt-link to="/units/Watch_Tower">箭塔</nuxt-link>、
            <nuxt-link to="/units/Galley">戰船</nuxt-link>和<nuxt-link
              to="/units/Longboat"
              >維京大戰船</nuxt-link
            >+1攻擊和+1射程。<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >只有攻擊+1。
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
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：兵工廠的科技花費只需食物。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            錐狀箭頭使所有類型的弓箭手對穿著盔甲的部隊更加有效。錐狀箭頭旨在將力量集中一點並穿透敵人護甲，而不是一個廣泛的點。早期的箭矢用於狩獵或對付沒有裝甲的目標而言是OK的，但裝甲卻有效地消散了它的能量。錐狀箭頭可以把力量集中，在足夠短的距離內穿透任何裝甲。阿金庫爾的英國長弓手在對付法國騎士部隊時也使用了錐狀箭頭。錐狀箭頭在重力的作用下，擊中時能直接穿透頭盔，肩膀，腿部和手臂的護甲。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">錐狀箭頭</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Bodkinarrow.jpg" width="45" alt="" />
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
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img class="gg" src="~assets/Fletching.jpg" alt="" /><nuxt-link
                to="/techs/Fletching"
                >箭羽</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/Bracer.jpg" alt="" /><nuxt-link
                to="/techs/Bracer"
                >護腕</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">35秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">200</td>
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
            <td class="unit4">
              讓弓兵、城堡、箭塔、戰船和維京大戰船+1攻擊和+1射程；城鎮中心只+1攻擊。
            </td>
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
