<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鱷魚</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>鱷魚</b>在《<nuxt-link to="/games/ak"
            >世紀帝國II：非洲王國</nuxt-link
          >》首次出現，牠不提供<nuxt-link to="/resource/Food">食物</nuxt-link
          >但會出現在地圖的一些區域並且會攻擊<nuxt-link
            to="/elements/Line_of_Sight"
            >視野</nuxt-link
          >中的<nuxt-link to="/units/Villager">村民</nuxt-link
          >或軍事單位。如果村民沒有<nuxt-link to="/techs/Loom"
            >織布技術</nuxt-link
          >而且讓鱷魚先手的話很容易會成為鱷魚的盤中飧(除了<nuxt-link
            to="/civs/Magyars"
            >馬扎爾</nuxt-link
          >村民外)。鱷魚主要出現在東南亞和非洲地圖上。
        </p>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                鱷魚
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CrocodileIcon.jpg" width="80" alt="" />
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
            <td class="unit4">25</td>
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
