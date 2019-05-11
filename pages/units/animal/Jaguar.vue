<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>豹</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>豹</b
          >是大型貓科掠食動物，牠主要出現在岩坑池和猶加敦等的美洲熱帶地圖上。豹與狼一樣有25的血，3的攻擊力
          ，不提供<nuxt-link to="/resource/Food">食物</nuxt-link
          >並且會攻擊<nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>中
          的<nuxt-link to="/units/Villager">村民</nuxt-link
          >或軍事單位。如果村民沒有<nuxt-link to="/techs/Loom"
            >織布技術</nuxt-link
          >而且被豹先手的話很容易會成為豹口下的犧牲品(除了<nuxt-link
            to="/civs/Magyars"
            >馬扎爾</nuxt-link
          >村民外，馬札爾村民可以一擊殺掉肉食野生動物)。
        </p>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                豹
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Jaguar-icon-aoe2.jpg" width="80" alt="" />
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
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的豹
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E8%B1%B9"
                    target="_blank"
                    >豹</a
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
