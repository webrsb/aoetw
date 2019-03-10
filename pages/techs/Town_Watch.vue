<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城鎮瞭望</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>城鎮瞭望</b>可於<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >在<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >研發。研發後<nuxt-link to="/building">建築物</nuxt-link
            ><nuxt-link to="/los.php">視野</nuxt-link>+4。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：該科技在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：研究<nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >的時間在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代快10%/15%/20%。
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
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >:跟其他<nuxt-link to="/civs">文明</nuxt-link
              >一樣需要研發城鎮瞭望。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >:1.0c改版後免費獲得城鎮瞭望。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            每個城鎮和社區在中世紀的大部分時間依靠當地的領主和他的士兵們來保護他們，常常會有土匪，掠奪者或不友善的鄰近村莊會襲擊村子。城鎮瞭望可以定期對附近的鄉村進行監視，如果有危險發生可以馬上通報讓城鎮有時間準備防禦措施。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">城鎮瞭望</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Townwatch.jpg" width="45" alt="" />
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
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
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
            <td class="unit3">可升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/Townpatrol.jpg" alt="" /><nuxt-link
                to="/techs/Town_Patrol"
                >城鎮巡邏</nuxt-link
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
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
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
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
