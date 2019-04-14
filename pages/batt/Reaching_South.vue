<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>揮師南下</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>揮師南下</b>為<nuxt-link to="/batt/Le_Loi">黎利戰役</nuxt-link
            >的第四關劇情關卡，此關描述<nuxt-link to="/civs/Vietnamese"
              >越南</nuxt-link
            ><nuxt-link to="/units/hero/Le_Loi">黎利</nuxt-link
            >在襲擊河內後，進軍明廷在清化南方的重鎮「茶隆關（今乂安省境內）」的經過。
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
                550<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／650<nuxt-link to="/resource/Food">食物</nuxt-link
                >／400<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／300<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
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
              <td class="tc6"><div class="p4">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Vietnamese">越南人</nuxt-link>（黃色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p5">玩家5</div></td>
              <td class="tc6">當地百姓（水藍色）越南</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6"><div class="p1" width="12%">玩家2</div></td>
              <td class="tc6" width="38%">
                琴彭軍（藍色）<nuxt-link to="/civs/Chinese">中國</nuxt-link>
              </td>
              <td class="tc6"><div class="p6" width="12%">玩家3</div></td>
              <td class="tc6" width="38%">明朝水師（紫色）中國</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p3">玩家4</div></td>
              <td class="tc6">明朝軍隊（綠色）中國</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >x2、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
            >x2、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
            >x3、<nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link>x4
          </p>
          。 經濟單位&nbsp;-&nbsp;<nuxt-link to="/units/Villager"
            >村民</nuxt-link
          >x7

          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>摧毀茶隆關的紀念碑。</li>
              <li>摧毀明軍在北邊的營地，這樣他們就無法馳援位於南邊的城池。</li>
              <li>在大明水師抵達茶隆關之前擊沉他們。</li>
              <li>
                摧毀明軍在北邊的<nuxt-link to="/building/Market">市集</nuxt-link
                >，斷絕他們的糧草和貿易補給。
              </li>
            </ol>
          </div>
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                摧毀明軍在北邊的營地，這樣他們就不能繼續增援他們的南部城池了。
              </li>
              <li>在明朝水師抵達茶隆關之前擊沉它們。</li>
              <li>摧毀明軍北邊的市場，斷絕他們的糧草和貿易補給。</li>
              <li>
                給當地百姓建造一座<nuxt-link to="/building/Mill">磨坊</nuxt-link
                >。
              </li>
              <li>探索密道。</li>
              <li>
                在河對面的山上建一座<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >。
              </li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              大越軍一開始是城堡時代，也可以升級到<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >。
            </li>
            <li>小心明軍的反撲。</li>
            <li>盡量去控制往茶隆關的要道。</li>
            <li>
              明軍鐵壁銅牆，<nuxt-link to="/building/Gate">城門</nuxt-link
              >可能是你唯一能攻破的地方。
            </li>
            <li>對茶隆關的強攻宜速戰速決。</li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              明朝的邊戍重鎮茶隆關（藍色）就在大越營地的南邊，此城內有精兵把守、外有兵糧支援；地勢險要、易守難攻。他們的援兵從水路（紫色）和陸地（綠色）都源源不斷地輸送而來。
            </li>
            <li>
              起義軍（黃色）必須要截斷茶隆關的援軍，奪取並據守茶隆關直到他黎利的主力大軍趕到。
            </li>
          </ul>
          <h2>細節</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                典型的<nuxt-link to="/maps/Arena">圍城</nuxt-link
                >打援關卡，等到黎利的大軍抵達便能發起主要攻勢。
              </li>
              <li>
                琴彭（？-？）明代茶隆關太守，堅守黎利長達七個月，糧盡無援而不支城破，戰死茶隆關。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                揮師南下
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/(map)Le_Loi - 4.Reaching_South.jpg" alt="" />
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
            <td class="unit4"><nuxt-link to="/batt/Le_Loi">黎利</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Vietnamese">越南人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第四章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Battle_at_Hanoi">圍困昇龍</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Three_Pronged_Attack">兵分三路</nuxt-link>
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
