<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>奧爾良的少女</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>奧爾良的少女</b>是在<nuxt-link to="/batt/Joan_of_Arc"
              >貞德戰役</nuxt-link
            >第二個劇情關卡，這是貞德帶領<nuxt-link to="/civs/Franks"
              >法國</nuxt-link
            >軍隊於奧爾良城的第一次重要的勝利。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="20%">
                <img
                  class="gg"
                  src="~assets/Feudal-age-reseach.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">無</td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p1">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Franks">法蘭克人</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p7">玩家4</div></td>
              <td class="tc6" width="38%">
                奧爾良（灰色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
              <td class="tc6" width="12%"><div class="p5">玩家5</div></td>
              <td class="tc6" width="38%">布諾（藍綠色）法蘭克</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p4">玩家6</div></td>
              <td class="tc6" width="38%">齊儂（黃色）法蘭克</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6"><div class="p6">玩家2</div></td>
              <td class="tc6">勃根地（紫色）法蘭克</td>
              <td class="tc6"><div class="p2">玩家3</div></td>
              <td class="tc6">
                北<nuxt-link to="/civs/Britons">不列顛</nuxt-link>（紅色）不列顛
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p8">玩家6</div></td>
              <td class="tc6">南不列顛（橘色）不列顛</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <img
                class="gg"
                src="~assets/Joanofarcicon.png"
                alt=""
              /><nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link><br />
              <img class="gg" src="~assets/Dukedalencon.png" alt="" /><nuxt-link
                to="/units/hero/Duke_D_Alencon"
                >阿朗松公爵</nuxt-link
              ><br />
              <img
                class="gg"
                src="~assets/ScoutCavalryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link><br />
              <img class="gg" src="~assets/KnightIcon.jpg" alt="" /><nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >*4<br />
              <img
                class="gg"
                src="~assets/2HandedswordsmanIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
              >*2
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              <img
                class="gg"
                src="~assets/CrossbowmanIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>*12<br />
              <img class="gg" src="~assets/KnightIcon.jpg" alt="" /><nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >*8<br />
              <img
                class="gg"
                src="~assets/TradeCartIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>*6<br />
              <img
                class="gg"
                src="~assets/VillagerMaleIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Villager">村民</nuxt-link>*3<br />
              <img
                class="gg"
                src="~assets/TransportShipIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>*2
            </dd>
          </dl>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>送貞德到布諾以便她可以指揮法國的軍隊。</li>
              <li>運送六車的補給品到奧爾良城去。</li>
              <li>
                只要毀掉一、兩座<nuxt-link to="/civs/Britons">英國</nuxt-link
                >人的<nuxt-link to="/building/Castle">城堡</nuxt-link
                >就可以要他們撤離。
              </li>
              <li>千萬保護奧爾良的大教堂別被摧毀。同時也要保住貞德的性命。</li>
            </ol>
          </div>
        </div>
        <h3>任務提示</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              在英國軍隊對我們造成更大傷亡之前，盡快趕到奧爾良去。但要特別注意駐在河的南邊的英國軍隊，同時別忘了和你的軍隊在布諾會合。
            </li>
            <li>
              一旦補給品送達奧爾良，你就可以建立你自己的軍力，法國<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >用來對付英國的<nuxt-link to="/units/Longbowman">長弓兵</nuxt-link
              >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >綽綽有餘。
            </li>
            <li>法國的城堡造價不貴，但防禦堅強。</li>
            <li>
              用你的<nuxt-link to="/building/Market">市集</nuxt-link
              >來進行資源的貿易，直到你有辦法出城為止。
            </li>
            <li>
              英國城堡有較強大的駐軍武力。所以在發動攻擊前，我們最好先組成一支陣容壯大的軍隊。
            </li>
            <li>
              奧爾良的<nuxt-link to="/building/Farm">農田</nuxt-link
              >多座落在城西，但都是在城外且脆弱不堪一擊。
            </li>
          </ul>
          <h3>細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              在玩家升級到<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >時，奧爾良城的<nuxt-link to="/building">建築</nuxt-link
              >仍然處於<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
              >的設計。
            </li>
            <li>因為奧爾良城預設玩家為大地之母。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                奧爾良的少女
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Joan2map.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Franks">法蘭克人</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第二章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/An_Unlikely_Messiah"
                >一個不大可能的彌賽亞</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Cleansing_of_the_Loire"
                >羅亞爾河大掃蕩</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由裕暉，亞諭協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
