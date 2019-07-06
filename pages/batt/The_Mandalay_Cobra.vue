<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>猛蛇出洞</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>猛蛇出洞</b>為<nuxt-link to="/batt/Bayinnaunga"
              >勃印曩戰役</nuxt-link
            >的第二關劇情關卡，此關描述<nuxt-link to="/units/hero/Bayinnaung"
              >勃印曩</nuxt-link
            >為了協助主君<nuxt-link to="/units/hero/Tabinshwehti"
              >德彬瑞蒂</nuxt-link
            >登基並確保對上<nuxt-link to="/civs/Burmese">緬甸</nuxt-link
            >地區的控制。在此情況下所進行的攏絡與征服。
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
                800<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／800<nuxt-link to="/resource/Food">食物</nuxt-link
                >／1,280<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／300<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">100</td>
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
              <td class="tc6"><div class="p3">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Burmese">緬甸人</nuxt-link>（綠色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p3">玩家5</div></td>
              <td class="tc6">東吁營地（綠色）緬甸</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6"><div class="p5">玩家2</div></td>
              <td class="tc6">
                若開邦（水藍）<nuxt-link to="/civs/Malay">馬來</nuxt-link>
              </td>
              <td class="tc6"><div class="p4">玩家3</div></td>
              <td class="tc6">
                撣族人（黃色）<nuxt-link to="/civs/Chinese">中國</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p2">玩家4</div></td>
              <td class="tc6">阿瓦國（紅色）緬甸</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            。<nuxt-link to="/units/hero">英雄</nuxt-link> -
            勃印曩x1、卑謬總督x1
          </p>
          <p>
            。<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link> -
            東吁勇士x6
          </p>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Scout_Cavalry"
              >斥候騎兵</nuxt-link
            >x2、<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link
            >x21、<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >x6、爆破船x2、<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>x2
          </p>
          <p>
            。 經濟單位&nbsp;-&nbsp;<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >x3。
          </p>
          <p>。 大地之母單位&nbsp;-&nbsp;德彬瑞蒂大王x1、東吁勇士x13、</p>
          <p>
            飛鏢騎兵x5、<nuxt-link to="/units/Elite_Battle_Elephant"
              >精銳矛象伕</nuxt-link
            >x6、<nuxt-link to="/units/Condottiero">傭兵</nuxt-link
            >x4、手銃兵x3、<nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link
            >x1、<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>x1、
          </p>
          <p>
            僧侶x2、村民x2、<nuxt-link to="/units/edmap/Canoe">獨木舟</nuxt-link
            >x3。
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>積攢到4000黃金</li>
              <li>殺死阿瓦國王康孟，奪取蒲甘王位。</li>
            </ol>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>不要失去聖物。</li>
              </ol>
            </div>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>人口上限為100</li>
              <li>
                蒲甘城是一座對信眾開放的城市，因此你不能在此建造防禦建築物（如：<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >、<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
                >、<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link>...）
              </li>
              <li>
                舍利聖物十分脆弱，如果輕易搬動或是搗毀其存放的位置，它們會因此毀壞。
              </li>
              <li>
                飛鏢騎兵適合且戰且走的戰術，為移動緩慢的象兵與<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >爭取到加入戰團的時間。
              </li>
              <li>如果德彬瑞蒂大王的人馬能盡快趕到，就能帶來優勢的兵力。</li>
            </ul>
            <h2>斥候</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  蒲甘城是一座重要的宗教聖城。有著許多重要的聖物<nuxt-link
                    to="/elements/Relic"
                    >遺跡</nuxt-link
                  >。這些佛牙舍利非常易碎，若是有人搬動他們、或是摧毀存放他們的寺廟，就會變成碎片。作為對所有信徒都開放的古都。蒲甘城沒有城牆，必須要靠機動部隊來守護。
                </li>
                <li>
                  蒲甘城是一座對信眾開放的城市，因此你不能在此建造防禦建築物（如：城堡、箭塔、城牆...）
                </li>
                <li>
                  撣族人(黃色)的部隊以重騎兵與<nuxt-link
                    to="/units/Archer_Units"
                    >弓兵</nuxt-link
                  >為主，他們的糧倉就是湖邊的稻田。那裏很容易被水路來的軍隊襲擊。
                </li>
                <li>
                  阿瓦國(紅色)與若開邦(水藍)加盟了撣族人的陣營。阿瓦國的步兵、飛鏢騎兵、僧侶與東吁部隊旗鼓相當；若開邦則有大量的快速步兵，也因為世代靠海，他們也有強勁的<nuxt-link
                    to="/units/Naval_Vessels"
                    >海軍</nuxt-link
                  >。
                </li>
                <li>
                  德彬瑞蒂大王在附近伺機而動，如果你能發現並通知他的大軍(大地之母)。他會與你並肩作戰。
                </li>
              </ul>
              <h2>細節</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    大王不是靠等來的，要靠自己找來。他的人馬就在地圖某處。其中還包含了些許<nuxt-link
                      to="/civs/Portuguese"
                      >葡萄牙</nuxt-link
                    >傭兵。
                  </li>
                  <li>
                    東吁勇士只出現在劇情<nuxt-link to="/batt">戰役</nuxt-link
                    >中，無法在標準模式中訓練。是移動快速的近戰徒步單位。開局便具有15+3的近戰<nuxt-link
                      to="/elements/Attack"
                      >攻擊力</nuxt-link
                    >。
                  </li>
                  <li>無法建造防禦建築物，只好靠著機動部隊來防守陣地。</li>
                  <li>
                    若開邦位於緬甸西南，北部與孟加拉接壤。在遊戲中以馬來代表。
                  </li>
                  <li>
                    阿瓦王國是在16世紀時統治上緬甸區域的治權，王室為受到高度緬甸化的撣族人
                  </li>
                  <li>現實中的舍利子是可以搬動的！</li>
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
                猛蛇出洞
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/(map)Bayinnaung_2.The_Mandalay_Cobra.jpg"
                  alt=""
                />
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
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Bayinnaunga">勃印曩</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Burmese">緬甸人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第三章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Burmese_Tigers">餓虎撲食</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Royal_Peacock">百鳥朝鳳</nuxt-link>
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
