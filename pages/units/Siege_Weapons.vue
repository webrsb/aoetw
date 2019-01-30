<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>攻城器單位</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            攻城武器能在城堡時代開始訓練。他們是強大的機器，擅長破壞敵方建築和對付大量敵方單位。攻城武器的單位升級以及遠程的攻城武器(火砲)只有在帝王時代才有。
          </p>
          <p>
            除了衝撞車，攻城塔和爆炸桶之外，所有的攻城武器都擁有中到長的射程範圍。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              像船一樣，攻城武器不能讓僧侶治療，而必須由村民修復。
              修復攻城武器需要花費黃金。
            </li>
            <li>
              所有的攻城武器都需要花費木材和黃金，唯一例外的是爆炸桶，他們花費食物和黃金。一般來說，攻城單位是最昂貴且訓練時間最長的單位。
            </li>
            <li>要訓練火炮則必須先研發化學。</li>
            <li>
              攻城武器和僧侶一樣需要研發科技後才招降他們。要招降攻城武器，必須先研究信仰救贖。
            </li>
            <li>
              巨型投石機，中型投石車（從失落的帝國資料片開始）和重型投石車可以砸樹木開路，當然村民也可以。這相當具有戰略意義，特別是在森林茂密的地圖上例如:黑森林，可以繞後給對方來個措手不及。
            </li>
          </ul>
        </div>
        <h3>分類</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>攻城器可分為兩類，專門破壞建築物的和擅於對付步兵和弓兵的。</p>
          <strong>對建築物</strong>
          <ul>
            <li>
              <img class="gg" src="~assets/BatteringRamIcon.jpg" alt="" />
              <nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/BombardCannonIcon.jpg" alt="" />
              <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/PetardIcon.jpg" alt="" />
              <nuxt-link to="/units/Petard">爆炸桶</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/TrebuchetPackedIcon.jpg" alt="" />
              <nuxt-link to="/units/Trebuchet">投石機</nuxt-link>
            </li>
          </ul>
          <strong>對單位</strong>
          <ul>
            <li>
              <img class="gg" src="~assets/MangonelIcon.jpg" alt="" />
              <nuxt-link to="/units/Mangonel">投石車</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/ScorpionIcon.jpg" alt="" />
              <nuxt-link to="/units/Scorpion">弩砲</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/BombardCannonIcon.jpg" alt="" />
              <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/OrganGunIcon.jpg" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >手風琴砲</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Organ_Gun">弩砲象</nuxt-link>
            </li>
          </ul>
          <ul>
            <p>
              從非洲王朝資料片開始，<nuxt-link to="/units/Siege_Tower"
                >攻城塔</nuxt-link
              >無法攻擊敵方建築或單位，所以無法歸類在上面兩類。而在失落的帝國資料片攻城塔可以開火，然而他們的主要目的還是運送部隊，所以還是不歸類於以上兩種。
            </p>
            <p>
              火炮可以遠距離摧毀建築物，同時也能有效對敵方單位造成傷害，所以兩個類別都能放。
            </p>
            <p>
              雖然兩個分類的功能可以互相交換，但這樣做非常沒有效率。例如投石車可以對整群步兵造成巨量傷害，也能對城鎮中心從安全距離轟炸，但對上城堡就只有被打的份。巨型投石機在破壞防禦工事方面十分出色，但在攻擊單位上則命中率不佳，除了攻擊對方的巨型投石機除外。
            </p>
          </ul>
        </div>
        <h3>攻城器文明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、<nuxt-link
              to="/civs/Celts"
              >賽爾特</nuxt-link
            >和<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
            >因為他們的文明加成和
            <nuxt-link to="/units/Unique_Unit">獨特技術</nuxt-link
            >擁有最好的攻城武器。衣索比亞是唯一能夠使用<nuxt-link
              to="/building/Siege_Workshop"
              >攻城器製造</nuxt-link
            >所所有單位的文明。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>以下列出攻城武器有加成的文明</p>
          <ul>
            <li>
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link
              >：攻城武器開火速率快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：<nuxt-link
                to="/units/Demolition_Ship"
                >神風船</nuxt-link
              >+50% HP。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link
              >：巨型投石機命中率+30%。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：攻城器製造所的單位便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>:<nuxt-link
                to="/units/Cannon_Galleon"
                >火炮戰船</nuxt-link
              >有 <nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>加成。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>以下列出攻城武器的團隊加成</p>
          <ul>
            <li>
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link
              >：攻城器製造所工作速率快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>：<nuxt-link
                to="/units/Scorpion"
                >弩炮</nuxt-link
              >射程+1。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link
              >：投石車最小射程範圍從3改為1。
            </li>
          </ul>
        </div>
        <h3>攻城器單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td width="19%">攻城器單位</td>
              <td width="9%">生命值</td>
              <td width="9%">攻擊</td>
              <td width="9%">防禦</td>
              <td width="9%">射程</td>
              <td width="9%">射速</td>
              <td width="9%">視野</td>
              <td width="9%">速度</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/BatteringRamIcon.jpg" /><nuxt-link
                  to="/units/Battering_Ram"
                  >輕型衝撞車</nuxt-link
                >
              </td>
              <td class="tta3">175</td>
              <!--生命值!-->
              <td class="tta3">2</td>
              <!--攻擊!-->
              <td class="tta3">-3/180</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">5</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">0.5</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CappedRamIcon.jpg" /><nuxt-link
                  to="/units/Capped_Ram"
                  >裝甲衝撞車</nuxt-link
                >
              </td>
              <td class="tta3">200</td>
              <!--生命值!-->
              <td class="tta3">3</td>
              <!--攻擊!-->
              <td class="tta3">-3/190</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">5</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">0.5</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/SiegeRamIcon.jpg" /><nuxt-link
                  to="/units/Siege_Ram"
                  >重型衝撞車</nuxt-link
                >
              </td>
              <td class="tta3">270</td>
              <!--生命值!-->
              <td class="tta3">4</td>
              <!--攻擊!-->
              <td class="tta3">-3/195</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">5</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">0.6</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/MangonelIcon.jpg" /><nuxt-link
                  to="/units/Mangonel"
                  >輕型投石車</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">40</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">6</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.6</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/OnagerIcon.jpg" /><nuxt-link
                  to="/units/Onager"
                  >中型投石車</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">50</td>
              <!--攻擊!-->
              <td class="tta3">0/7</td>
              <!--防禦!-->
              <td class="tta3">8</td>
              <!--射程!-->
              <td class="tta3">6</td>
              <!--射速!-->
              <td class="tta3">10</td>
              <!--視野!-->
              <td class="tta3">0.6</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/SiegeOnagerIcon.jpg" /><nuxt-link
                  to="/Siege_units/Onager"
                  >重型投石車</nuxt-link
                >
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">75</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">8</td>
              <!--射程!-->
              <td class="tta3">6</td>
              <!--射速!-->
              <td class="tta3">10</td>
              <!--視野!-->
              <td class="tta3">0.6</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ScorpionIcon.jpg" /><nuxt-link
                  to="/units/Scorpion"
                  >弩炮</nuxt-link
                >
              </td>
              <td class="tta3">40</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">0/7</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.6</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.65</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/HeavyScorpionIcon.jpg" /><nuxt-link
                  to="/units/Heavy_Scorpion"
                  >重型弩炮</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">16</td>
              <!--攻擊!-->
              <td class="tta3">0/7</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.6</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.65</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/Siegetowericon.png" /><nuxt-link
                  to="/units/Siege_Tower"
                  >攻城塔</nuxt-link
                >
              </td>
              <td class="tta3">220</td>
              <!--生命值!-->
              <td class="tta3">0</td>
              <!--攻擊!-->
              <td class="tta3">-2/100</td>
              <!--防禦!-->
              <td class="tta3">N/A</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">0.8</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/BombardCannonIcon.jpg" /><nuxt-link
                  to="/units/Bombard_Cannon"
                  >火炮</nuxt-link
                >
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">40</td>
              <!--攻擊!-->
              <td class="tta3">2/5</td>
              <!--防禦!-->
              <td class="tta3">12</td>
              <!--射程!-->
              <td class="tta3">6.5</td>
              <!--射速!-->
              <td class="tta3">14</td>
              <!--視野!-->
              <td class="tta3">0.7</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/PetardIcon.jpg" /><nuxt-link
                  to="/units/Petard"
                  >爆炸桶</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">25</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">19</td>
              <!--視野!-->
              <td class="tta3">0.8</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/TrebuchetPackedIcon.jpg"
                /><nuxt-link to="/units/Trebuchet">巨型投石機(拆裝)</nuxt-link>
              </td>
              <td class="tta3">150</td>
              <!--生命值!-->
              <td class="tta3">0</td>
              <!--攻擊!-->
              <td class="tta3">2/8</td>
              <!--防禦!-->
              <td class="tta3">N/A</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">19</td>
              <!--視野!-->
              <td class="tta3">0.8</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/TrebuchetUnpackedIcon.jpg"
                /><nuxt-link to="/units/Trebuchet">巨型投石機(組裝)</nuxt-link>
              </td>
              <td class="tta3">150</td>
              <!--生命值!-->
              <td class="tta3">200</td>
              <!--攻擊!-->
              <td class="tta3">1/150</td>
              <!--防禦!-->
              <td class="tta3">16</td>
              <!--射程!-->
              <td class="tta3">10</td>
              <!--射速!-->
              <td class="tta3">19</td>
              <!--視野!-->
              <td class="tta3">0</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/OrganGunIcon.jpg"
                /><nuxt-link to="/units/Organ_Gun">風琴炮</nuxt-link>
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">16</td>
              <!--攻擊!-->
              <td class="tta3">2/4</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.45</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.85</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/OrganGunIcon.jpg"
                /><nuxt-link to="/units/Organ_Gun">精銳風琴炮</nuxt-link>
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">20</td>
              <!--攻擊!-->
              <td class="tta3">2/6</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.45</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.85</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Ballistaelephanticon.png"
                /><nuxt-link to="/units/Organ_Gun">弩砲象</nuxt-link>
              </td>
              <td class="tta3">250</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">6</td>
              <!--射速!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">0.8</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Ballistaelephanticon.png"
                /><nuxt-link to="/units/Organ_Gun">精銳弩砲象</nuxt-link>
              </td>
              <td class="tta3">290</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">6</td>
              <!--射速!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">0.8</td>
              <!--速度!-->
            </tr>
          </table>
        </div>
        <h3>相關科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tunitcc" style="width: 15%;">科技</td>
              <td class="tunitcc" style="width: 10%;">時代</td>
              <td class="tunitcc" style="width: 15%;">成本</td>
              <td class="tunitcc">影響</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Siegeengineers.jpg"
                  alt=""
                /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">500F 600W</td>
              <td class="tunitc6">
                攻城武器攻擊範圍+1(衝撞車除外)。對建築物攻擊加成+20%(炸藥桶+40%)。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img class="gg" src="~assets/Chemistry.jpg" alt="" /><nuxt-link
                  to="/techs/Chemistry"
                  >化學</nuxt-link
                >
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">300F 200G</td>
              <td class="tunitc6">
                開火單位(包括攻城單位)攻擊+1。研發後可生產火藥單位。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img class="gg" src="~assets/Heresy.png" alt="" /><nuxt-link
                  to="/techs/Heresy"
                  >異端邪說</nuxt-link
                >
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">1000G</td>
              <td class="tunitc6">被招降的單位/建築物立即死亡/毀壞)。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img class="gg" src="~assets/Faith.jpg" alt="" /><nuxt-link
                  to="/techs/Faith"
                  >忠誠信仰</nuxt-link
                >
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">750F 1000G</td>
              <td class="tunitc6">單位對僧侶(傳教士)的招降更具抵抗力。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Conscription.jpg"
                  alt=""
                /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">150F 150G</td>
              <td class="tunitc6">軍營、靶場、馬廄、城堡訓練部隊速度+33%。</td>
            </tr>
          </table>

          <h3>相關特殊科技</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="tunitcc" style="width: 15%;">文明</td>
                <td class="tunitcc" style="width: 10%;">科技</td>
                <td class="tunitcc" style="width: 15%;">成本</td>
                <td class="tunitcc">影響</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/CastleAgeUnique.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>
                </td>
                <td class="tunitc5">250F 250G</td>
                <td class="tunitc6">團隊的城堡工作效率快25%</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/CastleAgeUnique.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Teutons">條頓</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link>
                </td>
                <td class="tunitc5">400W 350G。</td>
                <td class="tunitc6">攻城武器近戰護甲+4。</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Britons">不列顛</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Warwolf">戰狼</nuxt-link>
                </td>
                <td class="tunitc5">500W 250G</td>
                <td class="tunitc6">
                  巨型投石機有範圍傷害，對靜止單位有100%命中率。
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Celts">賽爾特</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Furor_Celtica">賽爾特狂暴</nuxt-link>
                </td>
                <td class="tunitc5">750F 450G</td>
                <td class="tunitc6">攻城器製造所的單位+40% HP。</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Chinese">中國</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Rocketry">火箭術</nuxt-link>
                </td>
                <td class="tunitc5">750W 750G</td>
                <td class="tunitc6">中國連弩兵攻擊+2，弩炮攻擊+4。</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Torsion_Engines">扭力彈射器</nuxt-link>
                </td>
                <td class="tunitc5">1000F 600G</td>
                <td class="tunitc6">
                  攻城器製造所的單位傷害範圍增加(輕型衝撞車和攻城塔除外)。
                </td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Japanese">日本</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Kataparuto">彈射器</nuxt-link>
                </td>
                <td class="tunitc5">750F 400G</td>
                <td class="tunitc6">巨型投石機組裝/拆解速度加快。</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Koreans">韓國</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Shinkichon">神機箭</nuxt-link>
                </td>
                <td class="tunitc5">800W 500G</td>
                <td class="tunitc6">投石車射程+1。</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Drill">演習</nuxt-link>
                </td>
                <td class="tunitc5">500F 450G</td>
                <td class="tunitc6">攻城器製造所的單位移動速度+50%。</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>
                </td>
                <td class="tunitc5">700F 400G</td>
                <td class="tunitc6">火藥單位對移動目標的命中率提升。</td>
              </tr>
              <tr>
                <td class="tunitc6">
                  <img
                    src="~assets/Unique-tech.jpg"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/civs/Turks">土耳其</nuxt-link>
                </td>
                <td class="tunitc4">
                  <nuxt-link to="/techs/Artillery">砲兵</nuxt-link>
                </td>
                <td class="tunitc5">500G 450S</td>
                <td class="tunitc6">火炮塔、火炮戰船和火炮射程+2。</td>
              </tr>
            </table>

            <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
          </div>
          <div class="col-md-12">
            <h3>圖庫</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <div class="col-md-4">
                <nuxt-link to="/img/Siegeunitssiegeworkshop.png"
                  ><img
                    class="imgn hg"
                    width="180"
                    src="~assets/Siegeunitssiegeworkshop.png"
                    alt=""
                /></nuxt-link>
                <div class="lightbox-caption" style="width:220px">
                  <p><em>所有攻城器製造所可訓練的攻城器單位。</em></p>
                </div>
              </div>
              <div class="col-md-4">
                <nuxt-link to="/img/Siegeunitscastle.png"
                  ><img
                    class="imgn hg"
                    width="200"
                    src="~assets/Siegeunitscastle.png"
                    alt=""
                /></nuxt-link>
                <div class="lightbox-caption" style="width:220px">
                  <p><em>所有城堡可訓練的攻城器單位。</em></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allunit2',
  components: {}
}
</script>
<style></style>
