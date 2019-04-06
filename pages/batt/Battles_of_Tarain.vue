<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>塔蘭村之戰</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p></p>
          <p>
            <strong>塔蘭村之戰</strong>為<nuxt-link
              to="/batt/Battles_of_the_Forgotten"
              >失落的帝國戰役</nuxt-link
            >中<nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link
            >劇情<nuxt-link to="/batt">戰役</nuxt-link
            >的第四關（也是該劇情最後一關）。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                0<nuxt-link to="/resource/Wood">木頭</nuxt-link>，0<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >，0<nuxt-link to="/resource/Gold">黃金</nuxt-link>，0<nuxt-link
                  to="/resource/Stone"
                  >石頭</nuxt-link
                >
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">2/0</td>
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
                <div class="p8"></div>
                玩家1：
              </td>
              <td class="tc6" colspan="4">
                主角（橘色）<nuxt-link to="/civs/Indians">印度</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p2"></div>
                玩家2：
              </td>
              <td class="tc6" width="35%">兆汗大軍（紅色）印度</td>
              <td class="tc6">
                <div class="p5"></div>
                玩家3：
              </td>
              <td class="tc6">塔蘭村（水藍色）印度</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p3"></div>
                玩家4：
              </td>
              <td class="tc6" width="35%">
                古爾大軍（綠色）<nuxt-link to="/civs/Turks">土耳其</nuxt-link>
              </td>
              <td class="tc6" width="15%">
                <div class="p4"></div>
                玩家5：
              </td>
              <td class="tc6" width="35%">巴廷達（黃色）印度</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家6：
              </td>
              <td class="tc6">
                默罕穆德•古爾（藍色）<nuxt-link to="/civs/Persians"
                  >波斯</nuxt-link
                >
              </td>
            </tr>
          </table>

          <h3>開場：</h3>
          <p>布里斯比羅吉、金德‧伯勒達伊。</p>
          <h3>大地之母單位：</h3>
          <p>無</p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <p>布里斯比羅吉必須活著。</p>
            <p>第一階段可選軍隊與任務（此3項任務獎勵只影響初始部隊）</p>
            <ul>
              <li>點擊諸葛弩手來選擇勁弩單位。</li>
              <li>帶上至少10個你的人馬衝到敵軍插著旗幟的山頭上。</li>
              →→勁弩單位將會得到+2攻擊
            </ul>
            <ul>
              <li>點擊聖騎士來選擇騎士單位。</li>
              <li>洗劫敵軍的馬車，破壞他們的大帳營。</li>
              →→騎士單位+4攻擊
            </ul>
            <ul>
              <li>
                點擊<nuxt-link to="/units/Imperial_Camel"
                  >帝王駱駝騎兵</nuxt-link
                >以選擇大象單位。
              </li>
              <li>殺死15個敵軍單位！</li>
              →→大象單位+5攻擊
            </ul>
            <ol>
              <li>打敗古爾大軍（綠）。</li>
              <li>擊敗默罕穆德•古爾（藍），攻佔巴廷達（黃）。</li>
            </ol>
          </div>
        </div>
        <h2>次要任務</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              摧毀古爾大營裡的<nuxt-link to="/building/Castle">城堡</nuxt-link
              >，那是敵軍指揮和生產精銳單位的大本營。
            </li>
            <li>摧毀城池裡的清真寺，以便強化你們的信仰。</li>
            <li>
              派5個<nuxt-link to="/units/Villager">村民</nuxt-link
              >去要塞東邊的<nuxt-link to="/resource/Wood">木材</nuxt-link>堆那。
            </li>
            <li>
              破壞巴廷達東邊部的補給營的<nuxt-link to="/building/Market"
                >市集</nuxt-link
              >。
            </li>
            <li>破壞西邊連接引水渠的蓄水庫。</li>
          </ul>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                你可以隨意搭配不同的兵種組合來指揮這場戰鬥，但是要隨機應變，弓箭手應站在大象後面遠端射擊，騎兵則善於兩翼包抄。
              </li>
              <li>要記得為你的軍隊獲得經驗獎勵，這可以幫你贏下第一場戰鬥。</li>
              <li>切斷敵軍的供給線可以削弱巴廷達的抵抗力量。</li>
              <li>
                古爾在北邊遠處的大本營易守難攻，如果能早點去攻打的話比晚點去好。
              </li>
              <li>
                別只派一種兵力去作戰，因為他們的忠誠度可能會受戰局影響。(玩家生產的<nuxt-link
                  to="/units/Elephant_Archer"
                  >象弓騎兵</nuxt-link
                >會在古爾夜襲時叛變)
              </li>
            </ol>
          </div>
        </div>
        <h2>斥候回報</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              布里斯比羅吉‧兆汗（紅）的大軍在戰場南邊集結了，其中有重裝和輕步兵、步弓兵、<nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>、騎士和大象。
            </li>
            <li>
              默罕穆德‧古爾的大軍（綠）佔據了戰場的西北角，他的單位有<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、駱駝騎兵、<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link
              >(馬木留克)、騎兵和騎驢僧侶。此外，古爾的軍隊在北邊有座大本營。
            </li>
            <li>
              巴廷達（黃）是西北角上的一座防衛森嚴的城池，駐紮軍隊有馬弓騎兵、<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >和<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>。
            </li>
            <li>
              塔蘭村（水藍）是東南邊的一座小村莊，它們是中立的，但是我們可以利用它來和兆汗人做貿易。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">塔蘭村之戰</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <center><img src="~assets/Prithviraj_4.jpg" alt="" /></center>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Indians">印度</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役關卡編號</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第六章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Elopement">私奔</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由小蛇，竺叡協助編輯。</div>
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
