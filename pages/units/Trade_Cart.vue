<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>貿易車隊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>貿易車隊</b>於<nuxt-link to="/building/Market">市集</nuxt-link
            >訓練，在<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >就可以生產。
          </p>
          <p>
            貿易車隊在兩個<nuxt-link to="/civs">文明</nuxt-link
            >或以上之間貿易而生產<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >，但事實上，這並不涉及資源上的交換，一輛空的貿易車隊會從自己的<nuxt-link
              to="/building/Market"
              >市集</nuxt-link
            >出發到其他文明的市集並帶回黃金。而黃金的量取決於兩個市場的距離，越遠黃金就越多，反之距離越短黃金越少。
          </p>
          <p>
            有趣的是貿易車隊不只只能和同盟國貿易甚至是中立、敵方的文明；當然除非敵方已經棄權，否則和敵對貿易是相當不明智的。
          </p>
          <p>
            貿易車隊每移動五格的距離就會生產出1單位的黃金，如果以最遠距離計算的話，一次可以得大的最大金額為517單位。
          </p>
          <p>
            在地圖上的黃金礦是相當有限的，在遊戲中後期時貿易是取得黃金的一項重要來源，所以請保護好自己的貿易路線，以防成為敵方的主要攻擊目標。在大後期決戰中，往往決定勝負的關鍵都在於貿易車隊有無安全的運行。
          </p>
          <h3>貿易的時機</h3>
          <div class="hrn1"></div>
          <div class="n1">
            通常實戰中，點下帝王的瞬間就會開始著手貿易車隊的運行，如太早進行貿易則會損害經濟，無法抵禦對手，而太晚貿易則會缺乏黃金。

            <h3>更多數據</h3>
            <div class="hrn1"></div>
            <div class="n1"></div>
            <table class="table-bordered" width="100%">
              <tr class="tta">
                <td class="unit" colspan="2" style="text-align: center;">
                  <div class="unititle">劣勢與優勢</div>
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:30%">強勢(容易對抗)</td>
                <td class="tta4">無</td>
              </tr>
              <tr>
                <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
                <td class="tta4">任何東西</td>
              </tr>
              <tr class="tta">
                <td class="unit" colspan="2" style="text-align: center;">
                  <div class="unititle">升級</div>
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">黃金收集速率</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/unique_tech.png"
                    style="margin: 2px;"
                    alt=""
                  /><nuxt-link to="/techs/Sultans">蘇丹</nuxt-link
                  >(+10%，<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">速度</td>
                <td class="tta4">
                  <img
                    class="gg"
                    style="margin: 2px;"
                    img
                    width="22"
                    src="~assets/caravan.png"
                    alt=""
                  /><nuxt-link to="/techs/Caravan">商隊</nuxt-link>(+50%)
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">
                  抗<nuxt-link to="/elements/Conversion">招降</nuxt-link>能力
                </td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/faith.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link><br />
                  <img
                    class="gg"
                    src="~assets/Heresy.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">造價減少</td>
                <td class="tta4">
                  <img
                    class="gg"
                    src="~assets/unique_tech_imperial.png"
                    style="margin: 2px;"
                    alt=""
                  /><nuxt-link to="/techs/Silk_Road">絲綢之路</nuxt-link
                  >(-50%，<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                </td>
              </tr>
            </table>
          </div>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研究<nuxt-link
                  to="/techs/Faith"
                  >忠誠信仰</nuxt-link
                >便宜50％。
              </li>
              <li>
                <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：在<nuxt-link
                  to="/elements/Line_of_Sight"
                  >視野</nuxt-link
                >內的動物不會被轉化
              </li>
              <li>
                <nuxt-link to="/civs/Chinese">中國</nuxt-link
                >：有利於貿易車隊的<nuxt-link to="/techs">科技</nuxt-link
                >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
                >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
                >便宜15/20％
              </li>
              <li>
                <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
                >：貿易車隊訓練減少20%黃金。
              </li>
            </ul>
          </div>
          <h3>團隊加分</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Berbers">立陶宛</nuxt-link>：<nuxt-link
                  to="/techs/Heresy"
                  >異端邪說</nuxt-link
                >與<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>研發快20%。
              </li>
              <li>
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
                >：貿易車隊所獲取的黃金單位增加25%。
              </li>
              <li>
                <nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >：貿易車隊對招降的抵抗力更強。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                貿易車隊
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/TradeCartIcon.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Villager">村民</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <nuxt-link to="/building/Market">市集</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">51秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
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
            <td class="unit3">跑速</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">7</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由小蝦協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allunit' })

export default {
  components: {}
}
</script>
<style></style>
