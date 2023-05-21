<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>輔佐新君</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>輔佐新君</b>為<nuxt-link to="/batt/Gajah_Mada"
              >加查·馬達戰役</nuxt-link
            >的第四關劇情關卡，此關描述<nuxt-link to="/units/hero/Gajah_Mada"
              >加查·馬達</nuxt-link
            >輔佐女王之子：哈亞烏魯克國王征服南洋各地的經過。
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
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                1,050<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／700<nuxt-link to="/resource/Food">食物</nuxt-link
                >／650<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／450<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">125</td>
            </tr>
          </table>

          <h3>AI</h3>

          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Malay">馬來人</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6">
                滿者伯夷人（淺藍）<nuxt-link to="/civs/Malay">馬來</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家2
              </td>
              <td class="tc6" width="38%">古戴人（藍色）馬來</td>
              <td class="tc6">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6" width="38%">
                望加錫人（綠色）<nuxt-link to="/civs/Vietnamese"
                  >越南</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">魯烏人（黃色）馬來</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
            >x3、<nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link
            >x6。
          </p>
          <p>
            。 大地之母單位 -<nuxt-link to="/units/Villager">村民</nuxt-link
            >x3、<nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link
            >x3、<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>x1。
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <li>
              摧毀古戴人的<nuxt-link to="/building/Dock">碼頭</nuxt-link>。
            </li>
            <li>摧毀望加錫人的碼頭。</li>
            <li>摧毀魯烏人的碼頭。</li>
          </div>

          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                因為初始島嶼上的資源與地盤都有限，所以你要盡快擴張到其他島嶼去。
              </li>
              <li>
                你可以透過捕魚來採集食物，這樣可以節省耕田所需的木材、而將木材用在造船上面。
              </li>
              <li>
                敵人有強大的<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
                >，因此如果你能在島上沿海建立防禦工事就可以輕易守住陣地，讓戰艦不用疲於奔命。
              </li>
              <li>
                敵人也建立了一些沿海防禦設施，若是想要摧毀他們的話你可以建造射程較遠的炮艦。你也可以使用一些<nuxt-link
                  to="/units/Naval_Vessels"
                  >船隻</nuxt-link
                >吸引防禦塔的火力，趁機剷除他們。
              </li>
              <li>你的人口上限為125。</li>
            </ul>
            <h2>斥候</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>你的海軍和剩餘兵力在北邊小島登陸。</li>
                <li>
                  這附近有一座投誠於滿者伯夷的村莊，我們只要找到村莊就可以使用他們的碼頭。
                </li>
                <li>
                  東邊的古戴人（藍色）控制著許多小島，他們主要以海盜為生。駕駛著又小又快的箭船，有時候也會使用載滿火藥的木筏。
                </li>
                <li>
                  望加錫人（綠色）生活在西南邊的群島上。他們<nuxt-link
                    to="/building/Watch_Tower"
                    >箭塔</nuxt-link
                  >林立，比古戴人的裝備更為先進。他們以戰艦、<nuxt-link
                    to="/units/Fire_Ship"
                    >火戰船</nuxt-link
                  >和<nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link
                  >為主。對我們充滿敵意，有可能率先攻擊我們的島嶼。
                </li>
                <li>
                  在更遠的南方有魯烏人（黃色）。他們的戰備非常先進，島嶼上有許多防禦塔守衛著。難以征服，他們也擅長使用火藥，所以會靠著炮艦與<nuxt-link
                    to="/building/Bombard_Tower"
                    >火砲塔</nuxt-link
                  >來守衛陣地。
                </li>
              </ul>
              <h2>細節</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    本關以海戰為主，登陸作戰雖然能夠確保征服，但對於速戰速決較少幫助。
                  </li>
                  <li>
                    古戴人 -
                    13世紀時，婆羅洲東南邊（今加里曼丹省）的小型區域治權。後遭滿者伯夷征服。
                  </li>
                  <li>
                    望加錫人 -
                    13世紀末，佔據南蘇拉威西島的區域治權。漢稱「錫江」。後遭滿者伯夷征服。
                  </li>
                  <li>
                    魯烏人 -
                    13世紀末，佔據南蘇拉威西島的區域治權。後遭滿者伯夷征服。
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
                輔佐新君
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Gajah_Mada/Serving_the_New_King_map.png" alt="" />
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
              <nuxt-link to="/batt/Gajah_Mada">加查·馬達</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Malay">馬來人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第一章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Oath_to_Unify_Nusantara"
                >誓統南洋</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Pasunda_Bubat_Tragedy"
                >風雲變色</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由亞諭、裕暉協助編輯。</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
