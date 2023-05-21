<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鹿</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鹿</b>有140的肉，但不會被馴化，必須去狩獵或是用<nuxt-link
              to="/units/Scout_Cavalry"
              >斥候</nuxt-link
            >趕回<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >，是初期相當快速的<nuxt-link to="/resource/Food">食物</nuxt-link
            >來源。鹿通常三隻以上一群，他們的模組在各方面都與世紀帝國的羚羊非常相似。<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >獵殺鹿至少要兩箭，而最少3個村民殺鹿會比較有效率。一般來說打封建開打的遊戲，並不會去<nuxt-link
              to="/units/animal/Deer"
              >鹿群</nuxt-link
            >旁邊蓋<nuxt-link to="/building/Mill">磨坊</nuxt-link
            >，而是會用斥候趕回資源採集點，而趕鹿的技巧對新手來說相當困難，必須練習再練習，不斷的練習。
          </p>
        </div>
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
              遊戲中的鹿都有角，然而現實中只有公鹿才有角。而且只有在每年的特定季節角才會長出來。
            </li>
            <li>
              儘管許多情況下鹿是溫順的，但可以使用“場景編輯器”中的觸發事件使它們攻擊。北地傳奇(1000)場景中的Bug證明了這一點，
              該錯誤是由一隻鹿不知不覺地走進狼王歐魯先前佔領的地磚而引起的。鹿的“攻擊”看起來像是一隻吃草的瞪羚，它迅速搖晃角，但幾秒鐘的攻擊僅造成1點傷害。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                鹿
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Deer-icon-aoe2.png" alt="" />
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
              <nuxt-link to="/resource/Food">食物量</nuxt-link>
            </td>
            <td class="unit4">140</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">
              建議獵人數
            </td>
            <td class="unit4">2~4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠、賜齡協助編輯</div>
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
