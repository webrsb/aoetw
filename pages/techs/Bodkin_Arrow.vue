<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>錐狀箭頭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>錐狀箭頭</b>可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            研發可讓<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
            >、<nuxt-link to="/building/Castle">城堡</nuxt-link>、<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >、<nuxt-link to="/units/Galley">戰船</nuxt-link>和<nuxt-link
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
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >的科技花費只需<nuxt-link to="/resource/Food">食物</nuxt-link>。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            錐狀箭頭使所有類型的<nuxt-link to="/units/Archer">弓箭手</nuxt-link
            >對穿著盔甲的部隊更加有效。錐狀箭頭旨在將力量集中一點並穿透敵人護甲，而不是一個廣泛的點。早期的箭矢用於狩獵或對付沒有裝甲的目標而言是OK的，但裝甲卻有效地消散了它的能量。錐狀箭頭可以把力量集中，在足夠短的距離內穿透任何裝甲。阿金庫爾的<nuxt-link
              to="/civs/Britons"
              >英國</nuxt-link
            >長弓兵在對付<nuxt-link to="/civs/Franks">法國</nuxt-link
            ><nuxt-link to="/units/Knight">騎士</nuxt-link
            >部隊時也使用了錐狀箭頭。錐狀箭頭在重力的作用下，擊中時能直接穿透頭盔，肩膀，腿部和手臂的護甲。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">錐狀箭頭</div>
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
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
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
            <td class="unit3">研發時間</td>
            <td class="unit4">35秒</td>
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
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              讓<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >、城堡、<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >、<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
              >和<nuxt-link to="/units/Longboat">維京大戰船</nuxt-link
              >+1攻擊和+1射程；<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >只+1攻擊。
            </td>
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
