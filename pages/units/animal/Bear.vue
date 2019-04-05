<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>熊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>熊</b>是<nuxt-link to="/games/aof"
            >《世紀帝國 II HD:失落的帝國》</nuxt-link
          >的一種大型野生動物。牠不提供<nuxt-link to="/resource/Food"
            >食物</nuxt-link
          >但會出現在地圖的一些區域並且會攻擊<nuxt-link to="/los.php"
            >視野</nuxt-link
          >中的<nuxt-link to="/units/Villager">村民</nuxt-link
          >或軍事單位。如果村民沒有<nuxt-link to="/techs/Loom"
            >織布技術</nuxt-link
          >而且被熊先手的話很容易會成為熊掌下的犧牲品(除了<nuxt-link
            to="/civs/Magyars"
            >馬扎爾</nuxt-link
          >村民外)。熊主要出現在歐洲地圖上。
        </p>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                熊
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/BearIcon.jpg" width="80" alt="" />
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
