<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>織布技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>織布技術</b>可於<nuxt-link to="/techs/age/Dark_Age"
              >黑暗時代</nuxt-link
            >在<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >研發。可讓<nuxt-link to="/units/Villager">村民</nuxt-link>+15
            HP，+1/+2護甲，總共是40 HP 和+1/+2護甲。
          </p>
          <p>
            織布技術在遊戲早期十分有用，因為它有助於保護村民預防早期攻擊，但會隨著敵軍力量的增加而效果下降。此外，織布技術讓村民更能對抗野生動物。如果沒有織布技術，一個村民（<nuxt-link
              to="/civs/Magyars"
              >馬扎爾</nuxt-link
            >村民除外）會輸給任何先攻擊他/她的野生動物。然而研發織布技術後同樣一個村民可以殺死兩頭不同時攻擊，而且不先攻擊野獸。同樣的在殺豬時候才不會輕易達成每日成就:殺豬死人
          </p>
          <p>
            但一般來說高手並不會輕易的在早期研發織布技術，因為越晚研發，經濟將會越好，所採集的資源也更多，通常都是點下<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >前才會研發，不過需要考慮的是打<nuxt-link
              to="/units/animal/Wild_Boar"
              >野豬</nuxt-link
            >時是否會因為過遠或是網路延遲而死村民，才不會因小失大。
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
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：該科技在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代研究速度快10%/15%/20%。
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
            <li>織布技術給村民護甲+1/+1。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>1.0c改版後織布技術現在給村民護甲+1/+2。</li>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >:1.0c改版後織布技術免費。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >:織布技術不再免費，不過開局<nuxt-link to="/resource/Gold"
                >黃金</nuxt-link
              >量+50。
            </li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            織布技術是除了<nuxt-link to="/building/Monastery">修道院</nuxt-link
            >的科技之外唯二只需要黃金的科技，另一個技術是<nuxt-link
              to="/techs/Spies"
              >間諜</nuxt-link
            >。
          </p>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            織布機的發明和織布能力是古代重要的技術，並成為歐洲在進入黑暗時期時能迅速恢復<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >的重要元素之一。好的羊毛衣服是延長北歐人類壽命的重要資產。人類為了取得羊毛養羊然後製作成布，布業因而成為中世紀早期的重要產業之一。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">織布技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Loom.jpg" width="45" alt="" />
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
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/dark_age.png" alt="" /><nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/town_center.png" alt="" /><nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">25秒</td>
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
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">村民+15 HP，+1/+2護甲。</td>
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
