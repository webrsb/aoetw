<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>天下第一騎</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>天下第一騎</b>為<nuxt-link to="/batt/Attila_the_Huna"
              >阿提拉戰役</nuxt-link
            >的第二關劇情關卡。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="13%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                200<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
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
                <div class="p4"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Huns">匈人</nuxt-link>（黃色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p8"></div>
                玩家2
              </td>
              <td class="tc6" width="35%">
                西徐亞人（橘色）<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6">
                索非亞（紅色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
              <td class="tc6">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6">
                奈沙（綠色）<nuxt-link to="/civs/Goths">哥德</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p7"></div>
                玩家4
              </td>
              <td class="tc6">
                亞得里亞堡（灰色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
              <td class="tc6">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6">
                第爾哈群（藍綠色）<nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6">底斯索隆尼卡（紫色）拜占庭</td>
              <td class="tc6">
                <div class="p1"></div>
                玩家7
              </td>
              <td class="tc6">東羅馬帝國（藍色）拜占庭</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              12位<nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link
              >、8位<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              14隻<nuxt-link to="/units/hero/Hunting_Wolf">獵狼</nuxt-link
              >、12位<nuxt-link to="/units/Petard">炸藥桶</nuxt-link
              >、5位答剌罕騎兵、2位<nuxt-link to="/units/Hussar"
                >匈牙利輕騎兵</nuxt-link
              >。
            </dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>掠奪這個羅馬的村落。</li>
              <li>
                當你有足夠的資源去建立一個基地的時候，你就可以生產軍隊來對抗羅馬人。
              </li>
              <li>
                <nuxt-link to="/batt/Training_the_Troops">訓練軍隊</nuxt-link
                >來剷平羅馬人的市鎮中心，以擊敗他們。
              </li>
            </ol>
          </div>
        </div>
        <h2>次要目標</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              給西徐亞的女戰士6個<nuxt-link to="/units/Villager">村民</nuxt-link
              >，以換取她們的支援。
            </li>
          </ul>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              每一個小村落（不包括羅馬的要塞）擁有的資源：<nuxt-link
                to="/resource/Food"
                >食物</nuxt-link
              >、<nuxt-link to="/resource/Wood">木材</nuxt-link>、<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              >、石頭、村民和軍隊。你的答剌罕騎兵將會被派到每一個村落去掠奪資源。
            </li>
            <li>
              這是突擊 -
              把你們所有的全拿出來，並統統給我滾出來！只要破壞一些<nuxt-link
                to="/building"
                >建築物</nuxt-link
              >，就會讓他們自動交出資源，所以不需毀壞每一座建築物。
            </li>
            <li>注意一些有資源的地點。因為以後你會需要它們的。</li>
            <li>匈人仍受限於城堡時代。</li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              阿提拉的匈人（黃色）以幾個<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >入侵東羅馬帝國，但沒有帶同任何的村民。他們預料只會受到來自這裡村落的抵抗。不料，羅馬軍隊（藍色）的駐防陣地就在東面。
            </li>
            <li>
              在你有充份的準備之前，不要輕易對它發動攻擊。其他的村莊可能有食物、木材、黃金、石頭、村民，或軍隊，你可利用這些資源來對抗羅馬。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                任務的第一部分就是單純的騎馬：用答剌罕騎兵燒毀索非亞的市鎮中心之前，建議先用馬弓騎兵把大部分的村民殺光。接下來，策馬前往Naissus，把對付索非亞的擄掠故技重施。
              </li>
              <li>
                地圖的西南方是第爾哈群，他們有五個<nuxt-link
                  to="/units/Spearman"
                  >長槍兵</nuxt-link
                >，還有一架<nuxt-link to="/units/Mangonel">投石車</nuxt-link
                >在<nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link
                >內。摧毀一部分的木牆引出投石車、用答剌罕騎兵殲滅之，運用你的馬弓騎兵去對付那些長槍兵。之後，小心翼翼地用馬弓騎兵在<nuxt-link
                  to="/building/Stone_Wall"
                  >石牆</nuxt-link
                >周遭逡巡，直到你可以看到<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >。
              </li>
              <li>
                如果控制得宜，馬弓騎兵不會被城堡射傷，還可以讓答剌罕騎兵有機會接近城堡下方。不過這僅適用於是在標準、簡單兩個難度，由於電腦沒有研發城垛射孔，答剌罕騎兵只要花點時間就能無損地摧毀城堡，而玩家也可以小憩片刻。
              </li>
              <li>
                當城堡終於被摧毀後，帶領你的人前往南方的底斯索隆尼卡，並讓他們在城市邊緣停下來。在這裡會建議小心控制單位，因為對方那些即將投降的村民很可能會死於你勇猛的騎兵之下。
              </li>
              <li>
                獲得村民後，加上你在前幾個村莊所得到的資源，你很快地可以建立一個基地。雖然羅馬人也在建設他們的基地、訓練他們的軍隊，不過並不如玩家快速、也沒有玩家聰明。所以玩家可以後來居上，樂勝羅馬人。派遣你現有的單位進入亞得里亞堡屠殺那裡的礦工，你就能得到財富。
              </li>
              <li>
                當你訓練好一批數量足夠的<nuxt-link to="/units/Knight"
                  >騎士</nuxt-link
                >與馬弓騎兵時，就朝西羅馬帝國進軍。在<nuxt-link
                  to="/building/Gate"
                  >城門</nuxt-link
                >周遭建立你的城堡，讓它漸漸削弱對方的防禦，你也可以用騎士吸引對方的軍隊。最後，你便能輕鬆地攻下西羅馬帝國的要塞。
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
                天下第一騎
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Attila_the_Hun/The_Great_Ride_map.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                情景信息
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/batt/Attila_the_Huna">阿提拉</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/civs/Huns">匈人</nuxt-link></td>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第一章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Scourge_of_God">上帝之怒</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Walls_of_Constantinople"
                >君士坦丁堡的城牆</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、竺叡協助編輯。</div>
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
