<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>野馬</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>野馬</b>出現在《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》中，他們無法被馴化。他們的行為和鹿十分相似，如果一個單位太靠近他們，他們通常會逃跑。它們的外觀與普通馬一樣，但是他們只有5滴血，而普通的馬有50滴血，而且殺死他們不會給玩家任何<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >。
          </p>
        </div>
        <h3>出現時機</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            《<nuxt-link to="/batt/Walls_of_Constantinople"
              >阿提拉：君士坦丁堡的城牆</nuxt-link
            >》中，在基地的西邊看到三匹野馬。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                野馬
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Horse-icon-aoe2.jpg" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物量</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由進銘協助編輯</div>
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
