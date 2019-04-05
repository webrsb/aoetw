<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>席捲入荒</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p></p>
          <p>
            <b>席捲入荒</b>為<nuxt-link to="/batt/Suryavarman_I"
              >蘇利耶跋摩一世戰役</nuxt-link
            >的第二關劇情關卡，此關描述蘇利耶跋摩確立權位的一系列軍事行動經過。以及與勁敵<nuxt-link
              to="/units/hero/Jayaviravarman"
              >闍耶羅跋摩</nuxt-link
            >的爭雄。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                1,500<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／1,500<nuxt-link to="/resource/Food">食物</nuxt-link
                >／1,500<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／700<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">145</td>
            </tr>
          </table>

          <p></p>
          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p5">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Khmer">高棉人</nuxt-link>（水藍）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p7">玩家5</div></td>
              <td class="tc6">當地百姓（灰色）高棉</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6"><div class="p4" width="10%">玩家2</div></td>
              <td class="tc6" width="40%">
                闍耶羅跋摩的軍隊（黃色）<nuxt-link to="/civs/Malay"
                  >馬來</nuxt-link
                >
              </td>
              <td class="tc6"><div class="p2" width="10%">玩家3</div></td>
              <td class="tc6" width="40%">北方叛軍（紅色）高棉</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p8">玩家3</div></td>
              <td class="tc6">東方叛軍（橘色）高棉</td>
            </tr>
          </table>

          <p></p>
          <h3>開場</h3>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
            >x15、<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
            >x2、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
            >x13、<nuxt-link to="/units/Elite_Skirmisher">精銳戰矛兵</nuxt-link
            >x5、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >x6、<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
            >x4、<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>x2、<nuxt-link
              to="/units/Ballista_Elephant"
              >弩砲象</nuxt-link
            >x3。
          </p>
          <p>
            。 經濟單位 -<nuxt-link to="/units/Villager">村民</nuxt-link
            >x6、<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>x2。
          </p>
          <p>
            。
            <nuxt-link to="/units/Naval_Vessels">海軍單位</nuxt-link>
            -<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>x1。
          </p>
          <p>
            。 大地之母單位 -<nuxt-link to="/units/animal/Water_Buffalo"
              >水牛</nuxt-link
            >x3。
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>打敗北方叛軍</li>
              <li>打敗東方叛軍</li>
              <li>殺死闍耶羅跋摩並擊潰他的軍隊</li>
            </ol>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  摧毀各大營的防禦工事，這樣就能奪取該區域的控制權。根據區域的大小，有的敵軍指揮所是<nuxt-link
                    to="/building/Town_Center"
                    >城鎮中心</nuxt-link
                  >、有的則是<nuxt-link to="/building/Castle">城堡</nuxt-link>。
                </li>
              </ul>
            </div>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>不要忽視海軍，控制湄公河的交匯處能夠助你克敵。</li>
              <li>你現在四面楚歌，要提防敵人從四面八方攻來。</li>
              <li>
                可以征服就不要輕易摧毀，如果你能夠把敵人的主要防禦工事擊毀的話，他們就會投降為你所用。
              </li>
              <li>
                不同叛軍有不同的兵種，善用兵種相剋的道理。舉例來說：<nuxt-link
                  to="/units/Monk"
                  >僧侶</nuxt-link
                >可以輕鬆<nuxt-link to="/elements/Conversion">招降</nuxt-link
                >象兵，但在對上輕騎時就顯得力不從心。
              </li>
              <li>蘇利耶跋摩一世最高只能升級到城堡時代。</li>
            </ul>
            <h2>斥候</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  蘇利耶跋摩一世的軍隊（水藍）鎮守在高棉首都吳哥城以及帝國西邊的數座小鎮，但此時卻必須迎戰來自四面八方的敵人。
                </li>
                <li>
                  北方叛軍（紅色）在地圖北邊有數個據點，他們以<nuxt-link
                    to="/units/Crossbowman"
                    >弩兵</nuxt-link
                  >、輕騎兵和<nuxt-link to="/units/Mangonel">投石車</nuxt-link
                  >為主。
                </li>
                <li>
                  東方叛軍（橘色）佔據了地形險要的東邊，旗下有一支由僧侶、象兵與弩砲組成的軍團。
                </li>
                <li>
                  闍耶羅跋摩的軍隊
                  (黃色）控制著南邊湄公河畔的數座小鎮，他們的步兵一波又一波地朝蘇利耶跋摩一世攻擊。
                </li>
                <li>
                  闍耶羅跋摩（紫色）住在地圖南邊的堡壘中，由重裝步兵貼身保護。
                </li>
              </ul>
              <h2>細節</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    闍耶羅跋摩（？-1002），馬來裔吳哥王朝將領。後來稱帝，但遭到蘇利耶跋摩一世擊潰。
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                席捲入荒
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Suryavarman I-2.jpg" alt="" />
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/batt/Suryavarman_I">蘇利耶跋摩一世</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Khmer">高棉人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第二章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Usurpation">揭竿而起</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Dangerous_Mission">九死一生</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由亞諭、裕暉協助編輯。</div>
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
