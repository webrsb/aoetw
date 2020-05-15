<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>義勇騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>義勇騎兵</b>是<nuxt-link to="/civs/Britons">不列顛</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後徒步<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
            >(包含矛兵)射程+1，<nuxt-link to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >攻擊+2。(<nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link>)
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              義勇騎兵結合<nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >的<nuxt-link to="/civs">文明</nuxt-link
              >加成可讓不列顛的徒步弓兵在遊戲中有最遠的射程，讓<nuxt-link
                to="/units/Longbowman"
                >長弓兵</nuxt-link
              >更適合長距離作戰。義勇騎兵也讓箭塔在有<nuxt-link
                to="/techs/Arrowslits"
                >箭狹槽</nuxt-link
              >加成後對小規模攻擊更具殺傷力。
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
            <li>
              義勇騎兵只能在<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >研發。
            </li>
            <li>義勇騎兵只會影響箭塔的第一次攻擊。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              義勇騎兵可在<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >研發。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>4.8改版後義勇騎兵會影響箭塔的第二次攻擊。</li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          「義勇騎兵」並非真的是<nuxt-link to="/units/Cavalry_Units"
            >騎兵</nuxt-link
          >，而是<nuxt-link to="/civs/Britons">英國</nuxt-link
          >中古時期的一種社會階層。
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在威爾士發展起來的長弓在愛德華一世的領導下成了英國人青睞的武器，他很快就明白了它可以如何有效部署弓箭手取得勝利。英國長弓兵在整個百年戰爭中對<nuxt-link
              to="/civs/Franks"
              >法國</nuxt-link
            >軍隊造成了嚴重打擊。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">義勇騎兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech.png" class="img-fluid" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
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
            <td class="unit4">60秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">750</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">450</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
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
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
