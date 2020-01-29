<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>驢子</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>驢子</b>在《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》中是一個玩家無法生產的單位，他只出現在地圖編輯器裡。驢子在遊戲裡被用來在<nuxt-link
              to="/building/Market"
              >市集</nuxt-link
            >間搬運<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >，功能就像<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
            >一樣。但是跟貿易車隊相比，他們走得慢多了，但是他們能攜帶更多黃金，而且他們的速度可以透過研發<nuxt-link
              to="/techs/Caravan"
              >商隊</nuxt-link
            >來加速。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                驢子
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Donkeyicon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">種類</td>
            <td class="unit4">動物</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">70</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">護甲</td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">0.7</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">6</td>
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
