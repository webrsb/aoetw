<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>爪哇野豬</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>爪哇野豬(Javelina)</b>在《<nuxt-link to="/games/aoc">世紀帝國II：征服者入侵</nuxt-link>》首次引入，它有75點生命值，也比鹿要難殺死得多。
          村民們必須集體出擊才能收獲這樣大的獵物，任何落單的村民都將落得死亡的下場。爪哇野豬提供340食物，比大多數可捕獵動物要多得多。
          它是野豬在功能和外觀上完全相同的美洲版本。
        </p>
        <h3>文明優勢</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>:打獵速度快50%。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:額外多獵取20%的肉量。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>:村民打<nuxt-link to="/units/animal/Wild_Boar">野豬</nuxt-link>攻擊+5，攜帶量+15。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>“ javelina”一詞源自西班牙的jabalina，意為“雌性野豬”和用來獵取野豬的矛（javelin）。</li>
            <li>儘管在遊戲中看起來與以前版本的野豬相同，但真正的爪哇野豬更小，臉更短，下巴的尖長牙在閉上嘴時不會突出嘴外。他們吃的也比野豬更素食。
            然而，當受傷或受到威脅時，它們仍然是危險的動物。</li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Javelina.png"
                  alt=""
              /></gallery>
              <p><em>岩坑池的爪哇野豬。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                爪哇野豬
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Iron-boar-icon-aoe2.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>量
            </td>
            <td class="unit4">340</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3">
              建議獵人數
            </td>
            <td class="unit4">5~10</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allanimal',
  components: {}
}
</script>
<style></style>
