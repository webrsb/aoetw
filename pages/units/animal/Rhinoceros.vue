<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>犀牛</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>犀牛</b>在<nuxt-link to="/games/aor"
            >《世紀帝國 II HD: 王者崛起》</nuxt-link
          >首次出現，有400的肉，但不會被馴化，必須去狩獵或是用<nuxt-link
            to="/units/Scout_Cavalry"
            >斥候</nuxt-link
          >或是<nuxt-link to="/units/Villager">村民</nuxt-link
          >射箭引誘到<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
          >圍捕，400的肉量比<nuxt-link to="/units/animal/Wild_Boar"
            >野豬</nuxt-link
          >提供的多，是初期相當龐大的<nuxt-link to="/resource/Food"
            >食物</nuxt-link
          >來源，讓犀牛與象並列世紀帝國II中最有價值的野生食物來源。犀牛只會出現在東南亞地圖上。犀牛跟野豬和象會攻擊激怒牠的單位，不過不一樣的是犀牛通常一群會有三隻左右，最好要一定數量村民去獵殺或是一個村民當誘餌其他村民放箭圍捕比較好。
        </p>
        <h3>文明優勢</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>:打獵速度快50%
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:額外多獵取20%的肉量
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >:村民打野豬攻擊+5，攜帶量+15
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="hg"
                  width="200"
                  src="~assets/AOE2Rhinoceros.png"
                  alt=""
              /></gallery>
              <p><em>世紀帝國II的犀牛。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                犀牛
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/AOE2IconRhino.png" width="80" alt="" />
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
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的犀牛
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a href="https://zh.wikipedia.org/wiki/%E7%8A%80%E7%89%9B"
                    >犀牛</a
                  ></b
                ></i
              >
            </div>
          </div>
        </div>
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
