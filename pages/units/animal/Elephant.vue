<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>象</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>象</b>在《<nuxt-link to="/games/ak">世紀帝國II：非洲王國</nuxt-link
          >》首次出現，象有400的肉，但不會被馴化，必須去狩獵或是用<nuxt-link
            to="/units/Scout_Cavalry"
            >斥候</nuxt-link
          >或是<nuxt-link to="/units/Villager">村民</nuxt-link
          >射箭引誘到<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
          >圍捕，400的肉量比<nuxt-link to="/units/animal/Wild_Boar"
            >野豬</nuxt-link
          >提供的多，是初期相當龐大的<nuxt-link to="/resource/Food"
            >食物</nuxt-link
          >來源，讓象與<nuxt-link to="/units/animal/Rhinoceros">犀牛</nuxt-link
          >並列世紀帝國II中最有價值的野生食物來源。象只會出現在非洲或<nuxt-link
            to="/civs/Indians"
            >印度</nuxt-link
          >地圖上。象與野豬一樣會攻擊激怒牠的單位，象的移動速度快且近戰<nuxt-link
            to="/elements/Attack"
            >攻擊力</nuxt-link
          >高，最好要一定數量村民去獵殺或是一個村民當誘餌其他村民放箭圍捕比較好。第一隻象通常在10p的時候誘捕到城鎮中心殺掉，第二隻大概是17p左右打，當然也可以偷對方家的象。
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
            <li><nuxt-link to="/civs/Goths">哥德</nuxt-link>:獵人攜帶量+15</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/games/de">決定版</nuxt-link
              >的象的圖像顯示是非洲象，但單位顯示卻是亞洲象。
            </li>
            <li>
              雖然大象與野豬的HP相同，但大象的攻擊速度更快，獵人更容易在大象的攻擊下陣亡。
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
                  class="imgn hg"
                  width="200"
                  src="~assets/AoE2_elephant.png"
                  alt=""
              /></gallery>
              <p><em>世紀帝國II HD版的象。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                象
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/AoE2_elephant_icon.png" alt="" />
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
            <td class="unit4">400</td>
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
definePageMeta({ layout: 'allanimal' })

export default {
  components: {}
}
</script>
<style></style>
