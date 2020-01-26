<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鑄幣術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鑄幣術</b>研發後會將<nuxt-link to="/Tribute.php"
              >進貢費</nuxt-link
            >從30%->20%。如果玩家打算將資源送給盟友，或是降低交換資源的虧損，那這項<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >會相當有用處。<nuxt-link to="/techs/Banking">銀行制度</nuxt-link
            >是這項科技的下一個升級。
          </p>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為150F/50G</li>
            <li>需要50秒的研發時間</li>
            <li>
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
              >就可以研發
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>成本為200F/100G</li>
            <li>需要70秒研發</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/news/ver5-8">5.8版</nuxt-link>後，<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >才能研發
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >在西歐的黑暗時代，錢幣是沒有用的，因為野蠻部落基本上是文盲，也沒有可以管理硬幣鑄造的政府組織。而這個時代的羅馬硬幣非常的粗製濫造，通常是用低廉的金屬製成，到了查理慢帝王和其他強大的王國崛起，有了能有效控制鑄幣的穩地政府，可以穩定的提供貨幣供應，對於經濟的發展有巨大的推波助瀾效用，其中最著名的便是歐洲銀幣，大概是現在美元10美分的大小，銅和青銅則是鑄造成更小的面額。</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">鑄幣術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/coinage.png" width="45" alt="" />
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
              <img
                class="gg"
                src="~assets/castle_age.png"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <nuxt-link to="/building/Market">市集</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">70秒</td>
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
              將<nuxt-link to="/Tribute.php">進貢費</nuxt-link>降低至20%。
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
