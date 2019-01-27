<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>巨盾</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            巨盾是<nuxt-link to="/civs/Italians">義大利</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後徒步<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
            >護甲+1/+1。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              如果玩家依賴弓箭手和<nuxt-link to="/Genoese_units/Crossbowman"
                >熱那亞弩手</nuxt-link
              >做為進攻/防守的選擇，那麼巨盾要盡早研發。
            </li>
            <li>
              一開始巨盾的護甲加成只有加在熱那亞努手身上，後來在<nuxt-link
                to="/games/ak"
                >非洲王朝</nuxt-link
              >資料片中才改成所有徒步弓兵都有加乘。
            </li>
            <li>
              研發巨盾與否取決於資料片版本，如果是<nuxt-link to="/games/aof"
                >失落的王國</nuxt-link
              >版本，巨盾花費太貴玩家應該優先升級其他科技或是演進至帝王時代。
            </li>
            <li>
              在非洲王池資料片中巨盾的花費減低而且<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >吃的到加成。所以在某些情況下可以早點研發巨盾科技；然而
              <nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link
              >還是應該比巨盾先研發因為比較便宜。
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
              >能夠加速巨盾的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的王國</nuxt-link></em>
          </h3>
          <ul>
            <li>巨盾成本為550肉300金。</li>
            <li>
              巨盾只影響<nuxt-link to="/Genoese_units/Crossbowman"
                >熱那亞弩手</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>巨盾現在成本為300肉150金。</li>
            <li>
              巨盾現在會影響不只<nuxt-link to="/Genoese_units/Crossbowman"
                >熱那亞弩手</nuxt-link
              >以外的所有徒步<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >(包括 <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>)。
            </li>
            <li>4.8改版後巨盾不再影響矛兵了。</li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            實際上，巨盾是中世紀歐洲弓箭手使用的一種高凸形盾牌，作為一種移動掩體，讓他們在沒有射擊的情況下能躲在後面。外觀上，這款巨盾很像熱那亞弩兵的盾牌，儘管熱那亞弩兵在與敵人交戰時似乎並沒有躲在它後面過，因此在面對遠程對手時這個盾牌實在沒有作用。
          </p>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            這款巨盾是以意大利帕維亞市命名。它能讓弩兵和弓箭手在重新裝填時保護他們。手臂和背部的盾牌也使用較小的版本。巨盾常在攻城時使用。弩手在使用巨盾時會比較不容易受到傷害。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="">巨盾</nuxt-link></div>
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
                <nuxt-link to="">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>
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
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">徒步弓兵護甲+1/+1。</td>
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
