<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>裝在桶裡的皇帝</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>裝在桶裡的皇帝</b>是一個在<nuxt-link to="/batt/Barbarossa"
              >巴巴羅薩戰役</nuxt-link
            >最後一關：沈睡的皇帝中登場的<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >單位。在遊戲中以載著桶子<nuxt-link to="/units/Trade_Cart"
              >貿易車隊</nuxt-link
            >的外表出現，桶中裝著腓特烈<nuxt-link to="/batt/Barbarossa"
              >巴巴羅薩</nuxt-link
            >的屍體。十字軍的目標就是將皇帝帶回被穆斯林所佔領的耶路撒冷並將他在圓頂清真寺入葬。作為一個英雄單位，他無法被<nuxt-link
              to="/elements/Conversion"
              >招降</nuxt-link
            >且可以自動<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >（在<nuxt-link to="/games/aoc">征服者入侵</nuxt-link>資料片之後）。
          </p>
          <p>
            裝在桶裡的皇帝跟正常的<nuxt-link to="/units/Trade_Cart"
              >貿易車隊</nuxt-link
            >一樣，可以用來貿易。不過裝在桶裡的皇帝的外觀和一般貿易車隊相反，也就是車上有錢的時候車是空的，車上沒錢的時候車是滿的。另外，<nuxt-link
              to="/techs/Caravan"
              >商隊</nuxt-link
            >不會對裝在桶裡的皇帝有影響。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                裝在桶裡的皇帝
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Emperorinabarrelicon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Villager">村民</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">100</td>
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
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">無</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">7</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的巴巴羅薩
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a href="https://tinyurl.com/yd86cpxv" target="_blank"
                    >巴巴羅薩</a
                  ></strong
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
definePageMeta({ layout: 'allhero' })

export default {
  components: {}
}
</script>
<style></style>
