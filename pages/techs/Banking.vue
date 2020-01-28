<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>銀行制度</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>銀行制度</b>可以在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >時在<nuxt-link to="/building/Market">市集</nuxt-link
            >研發，前置<nuxt-link to="/techs">科技</nuxt-link>為<nuxt-link
              to="/techs/Coinage"
              >鑄幣術</nuxt-link
            >。 研究完成後它將免除所有<nuxt-link to="/Tribute.php"
              >進貢費</nuxt-link
            >，在與玩家交換或發送資源時就無需再支付其他費用。當你有這種需求時，強烈建議研發這項科技。
          </p>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為200F/100G</li>
            <li>需要50秒的研發時間</li>
            <li>
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >就可以研發
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為300F/200G</li>
            <li>需要70秒研發</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/news/ver5-8">5.8版</nuxt-link>後，<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >才能研發
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >在中古世紀的歐洲，利息與高利貸長期被西方教會所禁止，但事實證明這會阻礙經濟的發展。但通過一些小手段可以避免這種宗教法律上的約束，提供這種借貸的人通常是非基督教的，像是猶太人。而一些孔急用錢的王侯貴族常常利用屠殺或是迫害這些猶太商人來清償大筆的債務。而隨著宗教與政治氣氛的改變，特別在<nuxt-link
              to="/civs/Italians"
              >義大利</nuxt-link
            >的一些商業城市，逐漸的許多商業銀行如雨後村筍般的成立。</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">銀行制度</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/banking.png" class="img-fluid" alt="" />
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
              <img class="gg" src="~assets/imperial_age.png" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/market.png" alt="" /><nuxt-link
                to="/building/Market"
                >市集</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">前置科技</td>
            <td class="unit4">
              <nuxt-link to="/techs/Coinage">鑄幣術</nuxt-link>
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
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              免除所有<nuxt-link to="/Tribute.php">進貢費</nuxt-link>
            </td>
          </tr>
        </table>
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
