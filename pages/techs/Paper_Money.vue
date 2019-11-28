<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>紙幣</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>紙幣</b>是<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後玩家和同盟立即獲得500<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              黃金在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >早期是非常重要的，因此應盡快研究紙幣。玩家擁有的盟友數量會隨著紙幣的影響而增加。例如一個3人的團隊可以500個<nuxt-link
                to="/resource/Food"
                >食物</nuxt-link
              >300木材換取1500金幣，這是一個超值的交易。
            </li>
            <li>
              即使玩家沒有盟友，如果地圖上的黃金已經用完了，它仍然可以使用。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>紙幣花費800食物，200黃金</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link>/em>
          </h3>
          <ul>
            <li>紙幣花費500食物，300木材</li>
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
              >能夠加速紙幣的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              紙幣技術很可能基於何奎利在15世紀的貨幣改革，他用紙幣代替金屬硬幣作為交易的媒介。
            </li>
            <li>
              紙幣本身是<nuxt-link to="/civs/Chinese">中國</nuxt-link
              >的發明，所以在遊戲中稱為“貨幣改革”更為準確。
            </li>
            <li>
              紙幣是第二種共享的獨特技術。 在4.8改版之前，只有<nuxt-link
                to="/civs/Berbers"
                >柏柏</nuxt-link
              >的特殊科技<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link
              >可以與別人共享。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">紙幣</div>
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
            </td>
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
            <td class="unit4">500</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">玩家和同盟立即獲得500黃金。</td>
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
