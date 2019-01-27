<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>義勇騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            義勇騎兵是<nuxt-link to="/civs/Britons">不列顛</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後徒步弓兵射程+1，箭塔攻擊+2。(團隊加成)
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              義勇騎兵結合不列顛的文明加成可讓不列顛的徒步弓兵在遊戲中有最遠的攻擊距離，讓長弓兵更適合長距離作戰。義勇騎兵也讓箭塔在有<nuxt-link
                to="/techs/Arrowslits"
                >箭狹槽</nuxt-link
              >加成後對小規模攻擊更具殺傷力。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速義勇騎兵的研究時間(快25%)。
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
            <li>義勇騎兵只能在帝王時代研發。</li>
            <li>義勇騎兵只會影響箭塔的第一次攻擊。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>義勇騎兵可在城堡時代研發。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>4.8改版後義勇騎兵會影響箭塔的第二次攻擊。</li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          「義勇騎兵」並非真的是騎兵，而是英國中古時期的一種社會階層。
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在威爾士發展起來的長弓在愛德華一世的領導下成了英國人青睞的武器，他很快就明白了它可以如何有效部署弓箭手取得勝利。英國長弓手在整個百年戰爭中對法國軍隊造成了嚴重打擊。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">義勇騎兵</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CastleAgeUnique.png" width="45" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
            </td>
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
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">60秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木材</td>
            <td class="unit4">750</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">450</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">徒步弓兵射程+1，箭塔攻擊+2。</td>
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
