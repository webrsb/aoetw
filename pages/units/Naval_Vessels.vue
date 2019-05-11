<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>海軍單位</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>海軍艦艇</b
            >也被稱為<b>船隻</b>，是“世紀帝國II”中唯一可以穿越水面的部隊。
            他們也可以通過淺水，但不能在陸地上移動。
            由於水是除了對海軍之外所有部隊的天然和不可逾越的障礙，因此在海圖上，例如:<nuxt-link
              to="/maps/Archipelago"
              >群島</nuxt-link
            >，<nuxt-link to="/maps/Coastal">沿海</nuxt-link>或<nuxt-link
              to="/maps/Baltic"
              >波羅的海</nuxt-link
            >，海軍都是至關重要的 。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            所有海軍船隻移動速度都很快，擁有高<nuxt-link to="/armor"
              >遠程護甲</nuxt-link
            >和高HP。
            因此，幾乎所有的船隻都能夠在海岸線上與陸上單位作戰，他們可以對近戰單位打帶跑；對<nuxt-link
              to="/units/Archer_Units"
              >遠程單位</nuxt-link
            >使用遠程攻擊並且具備良好的抗炮火能力。但是<nuxt-link
              to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >和<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >是他們的弱點。船隻對<nuxt-link to="/armor/Armor_Class_Building"
              >建築物</nuxt-link
            >都有攻擊加成，這使得他們是相當好清除海岸線的突襲單位，但是防禦性<nuxt-link
              to="/building"
              >建築</nuxt-link
            >也對船隻有額外傷害加成，所以只有能從安全距離轟炸時才去攻擊這些建築。
          </p>
          <p>
            所有的船隻都在<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >訓練，並花費<nuxt-link to="/resource/Wood">木材</nuxt-link
            >和<nuxt-link to="/resource/Gold">黃金</nuxt-link>。<nuxt-link
              to="/techs/age/Dark_Age"
              >黑暗時代</nuxt-link
            >的<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>和<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >只花費木材。
          </p>
        </div>
        <h3>海軍文明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、<nuxt-link
              to="/civs/Byzantines"
              >拜占庭</nuxt-link
            >、<nuxt-link to="/civs/Koreans">韓國</nuxt-link>、<nuxt-link
              to="/civs/Malay"
              >馬來</nuxt-link
            >、<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、<nuxt-link
              to="/civs/Saracens"
              >薩拉森</nuxt-link
            >、<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>和<nuxt-link
              to="/civs/Vikings"
              >維京</nuxt-link
            >是最好的<nuxt-link to="/units/Naval_Vessels">海軍文明</nuxt-link>。
          </p>
          <p>
            <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>和<nuxt-link
              to="/civs/Spanish"
              >西班牙</nuxt-link
            >是唯二有全船隻和碼頭相關<nuxt-link to="/techs">科技</nuxt-link
            >的<nuxt-link to="/civs">文明</nuxt-link>。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>以下列出海軍有加成的文明</p>
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：船隻移動速度快10%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：<nuxt-link
                to="/units/Fire_Ship"
                >火戰船</nuxt-link
              >開火速率快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：<nuxt-link
                to="/units/Demolition_Ship"
                >神風船</nuxt-link
              >+50% HP。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >：碼頭科技便宜50%；<nuxt-link to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>:漁船<nuxt-link
                to="/elements/Hit_points"
                >生命值</nuxt-link
              >加倍、+2遠程護甲、工作速率在<nuxt-link to="/techs/age/Dark_Age"
                >黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王+5%/+10%/+15%/+20%。
            </li>
            <li>
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>：漁船造價便宜33%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：碼頭有雙倍生命值並且在<nuxt-link to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >得工作速度+10%/+15%/+20%。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>：船隻HP+10%。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>：<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >生命值加倍以及多5的載運量；<nuxt-link to="/units/Galley"
                >戰船</nuxt-link
              >開火速率快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>:<nuxt-link
                to="/units/Cannon_Galleon"
                >火砲戰船</nuxt-link
              >有<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>加成。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:<nuxt-link
                to="/units/Galley"
                >戰船</nuxt-link
              >在<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >造價便宜15%/15%/20%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            以下列出海軍的<nuxt-link to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >
          </p>
          <ul>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：<nuxt-link
                to="/units/Galley"
                >戰船</nuxt-link
              ><nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>+50%。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>：<nuxt-link
                to="/units/Trade_Cog"
                >貿易商旅</nuxt-link
              >每趟黃金多50%。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：碼頭便宜15%。
            </li>
          </ul>
        </div>
        <h3>海軍單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td width="19%">
                <nuxt-link to="/units/Naval_Vessels">海軍單位</nuxt-link>
              </td>
              <td width="9%">生命值</td>
              <td width="9%">攻擊</td>
              <td width="9%">防禦</td>
              <td width="9%">射程</td>
              <td width="9%">
                <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
              </td>
              <td width="9%">視野</td>
              <td width="9%">速度</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/FishingShipIcon.jpg" /><nuxt-link
                  to="/units/Fishing_Ship"
                  >漁船</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">0</td>
              <!--攻擊!-->
              <td class="tta3">0/4</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.26</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/TransportShipIcon.jpg" /><nuxt-link
                  to="/units/Transport_Ship"
                  >運輸船</nuxt-link
                >
              </td>
              <td class="tta3">100</td>
              <!--生命值!-->
              <td class="tta3">0</td>
              <!--攻擊!-->
              <td class="tta3">4/8</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.45</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/TradeCogIcon.jpg" /><nuxt-link
                  to="/units/Trade_Cog"
                  >貿易商旅</nuxt-link
                >
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">0</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.32</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/Galley.jpg" /><nuxt-link
                  to="/units/Galley"
                  >戰船</nuxt-link
                >
              </td>
              <td class="tta3">120</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">1.43</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/WarGalley.jpg" /><nuxt-link
                  to="/units/War_Galley"
                  >弩砲戰船</nuxt-link
                >
              </td>
              <td class="tta3">135</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">1.43</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/GalleonAoE2.jpg" /><nuxt-link
                  to="/units/Galleon"
                  >重型弩砲戰船</nuxt-link
                >
              </td>
              <td class="tta3">165</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">1.43</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/FireGalleyIcon.jpg" /><nuxt-link
                  to="/units/Fire_Galley"
                  >火蒙衝</nuxt-link
                >
              </td>
              <td class="tta3">100</td>
              <!--生命值!-->
              <td class="tta3">1</td>
              <!--攻擊!-->
              <td class="tta3">0/4</td>
              <!--防禦!-->
              <td class="tta3">2.49</td>
              <!--射程!-->
              <td class="tta3">0.25</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.3</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/FireShipIcon.jpg" /><nuxt-link
                  to="/units/Fire_Ship"
                  >火戰船</nuxt-link
                >
              </td>
              <td class="tta3">120</td>
              <!--生命值!-->
              <td class="tta3">2</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">2.49</td>
              <!--射程!-->
              <td class="tta3">0.25</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/FastFireShipIcon.jpg" /><nuxt-link
                  to="/units/Fast_Fire_Ship"
                  >快速火戰船</nuxt-link
                >
              </td>
              <td class="tta3">140</td>
              <!--生命值!-->
              <td class="tta3">3</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">2.49</td>
              <!--射程!-->
              <td class="tta3">0.25</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.43</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/DemoRaftIcon.jpg" /><nuxt-link
                  to="/units/Demolition_Raft"
                  >自爆筏</nuxt-link
                >
              </td>
              <td class="tta3">45</td>
              <!--生命值!-->
              <td class="tta3">90</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.5</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/DemoShipIcon.jpg" /><nuxt-link
                  to="/units/Demolition_Ship"
                  >神風船</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">110</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.6</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/HeavyDemoShipIcon.jpg" /><nuxt-link
                  to="/units/Heavy_Demolition_Ship"
                  >重型神風船</nuxt-link
                >
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">140</td>
              <!--攻擊!-->
              <td class="tta3">0/5</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">N/A</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.6</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CannonGalleonIcon.jpg" /><nuxt-link
                  to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >
              </td>
              <td class="tta3">120</td>
              <!--生命值!-->
              <td class="tta3">35</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">13</td>
              <!--射程!-->
              <td class="tta3">10</td>
              <!--射速!-->
              <td class="tta3">15</td>
              <!--視野!-->
              <td class="tta3">1.1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CannonGalleonIcon.jpg" /><nuxt-link
                  to="/units/Elite_Cannon_Galleon"
                  >精銳火砲戰船</nuxt-link
                >
              </td>
              <td class="tta3">150</td>
              <!--生命值!-->
              <td class="tta3">45</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">15</td>
              <!--射程!-->
              <td class="tta3">10</td>
              <!--射速!-->
              <td class="tta3">17</td>
              <!--視野!-->
              <td class="tta3">1.1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/LongboatIcon.jpg" /><nuxt-link
                  to="/units/Longboat"
                  >維京大戰船</nuxt-link
                >
              </td>
              <td class="tta3">130</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">1.54</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/LongboatIcon.jpg" /><nuxt-link
                  to="/units/Longboat"
                  >精銳維京大戰船</nuxt-link
                >
              </td>
              <td class="tta3">160</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">1.54</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/TurtleShipIcon.jpg" /><nuxt-link
                  to="/units/Turtle_Ship"
                  >龜甲船</nuxt-link
                >
              </td>
              <td class="tta3">200</td>
              <!--生命值!-->
              <td class="tta3">50</td>
              <!--攻擊!-->
              <td class="tta3">6/5</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">6.04</td>
              <!--射速!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">0.9</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/TurtleShipIcon.jpg" /><nuxt-link
                  to="/units/Turtle_Ship"
                  >精銳龜甲船</nuxt-link
                >
              </td>
              <td class="tta3">300</td>
              <!--生命值!-->
              <td class="tta3">50</td>
              <!--攻擊!-->
              <td class="tta3">8/5</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">6.04</td>
              <!--射速!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">0.9</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CaravelIcon2.jpg" /><nuxt-link
                  to="/units/Caravel"
                  >卡拉維爾戰船</nuxt-link
                >
              </td>
              <td class="tta3">130</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">1.43</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CaravelIcon2.jpg" /><nuxt-link
                  to="/units/Caravel"
                  >精銳卡拉維爾戰船</nuxt-link
                >
              </td>
              <td class="tta3">150</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">1.43</td>
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
                  style="margin: 2px;"
                  src="~assets/Careening.jpg"
                  alt=""
                /><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">250F 150G</td>
              <td class="tunitc6">
                船隻護甲+1，<nuxt-link to="/units/Transport_Ship"
                  >運輸船</nuxt-link
                >可承載單位+5。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Gillnetsicon.jpg"
                  alt=""
                /><nuxt-link to="/techs/Gillnets">流刺網</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">150F 200G</td>
              <td class="tunitc6">漁船工作速率+25%。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Drydock.jpg"
                  alt=""
                /><nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">600F 400G</td>
              <td class="tunitc6">船隻航行速度+15%，運輸船可承載單位+10。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Shipwright.jpg"
                  alt=""
                /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">1000F 300G</td>
              <td class="tunitc6">
                船隻<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >花費-20%，單位生產速度+35%。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Fletching.jpg"
                  alt=""
                /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">100F 50G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Galley">戰船</nuxt-link>、<nuxt-link
                  to="/units/Longboat"
                  >維京大戰船</nuxt-link
                >、<nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link
                >的攻擊+1、範圍+1。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Bodkinarrow.jpg"
                  alt=""
                /><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">200F 100G</td>
              <td class="tunitc6">
                戰船、維京大戰船、卡拉維爾戰船的攻擊+1、範圍+1。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Bracer.jpg"
                  alt=""
                /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">300F 200G</td>
              <td class="tunitc6">
                戰船、維京大戰船、卡拉維爾戰船的攻擊+1、範圍+1。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Ballistics.jpg"
                  alt=""
                /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">300W 175G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link
                  to="/units/Cavalry_Archer"
                  >馬弓騎兵</nuxt-link
                >、戰船、城堡和<nuxt-link to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >對移動單位的命中率提升。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Chemistry.jpg"
                  alt=""
                /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">300F 200G</td>
              <td class="tunitc6">
                戰船、維京大戰船、卡拉維爾戰船的攻擊+1。研發後可生產<nuxt-link
                  to="/units/Gunpowder_Unit"
                  >火藥單位</nuxt-link
                >。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Heresy.png"
                  alt=""
                /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">1000G</td>
              <td class="tunitc6">
                被<nuxt-link to="/elements/Conversion">招降</nuxt-link
                >的單位/建築物立即死亡/毀壞)。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Faith.jpg"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">750F 1000G</td>
              <td class="tunitc6">
                單位對僧侶(<nuxt-link to="/units/Missionary">傳教士</nuxt-link
                >)的招降更具抵抗力。
              </td>
            </tr>
          </table>
        </div>
        <h3>相關特殊科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered table-striped" width="100%">
            <tr>
              <td class="tunitcc" style="width: 15%;">文明</td>
              <td class="tunitcc" style="width: 10%;">
                <nuxt-link to="/techs/untech">特殊科技</nuxt-link>
              </td>
              <td class="tunitcc" style="width: 15%;">花費</td>
              <td class="tunitcc">影響</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Greek_Fire">希臘之火</nuxt-link>
              </td>
              <td class="tunitc5">250F 300G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>+1攻擊範圍。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Indians">印度</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Sultans">蘇丹</nuxt-link>
              </td>
              <td class="tunitc5">400F 400W</td>
              <td class="tunitc6">
                挖金速度+10%；貿易黃金+10%；<nuxt-link to="/elements/Relic"
                  >遺跡</nuxt-link
                >產金快10%。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Italians">義大利</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Silk_Road">絲綢之路</nuxt-link>
              </td>
              <td class="tunitc5">500F 250G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
                >和<nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
                >造價減半。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Koreans">韓國</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Panokseon">板屋船</nuxt-link>
              </td>
              <td class="tunitc5">300W 300F</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>移動快15%。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Carrack">克拉克帆船</nuxt-link>
              </td>
              <td class="tunitc5">200W 300G</td>
              <td class="tunitc6">船隻護甲+1/+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
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
                  class="gg"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Turks">土耳其</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Artillery">砲兵</nuxt-link>
              </td>
              <td class="tunitc5">500G 450S</td>
              <td class="tunitc6">
                <nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
                >、<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                >和<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
                >射程+2。
              </td>
            </tr>
          </table>

          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="180"
                  src="~assets/Vesselcivilian.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:220px">
                <p><em>所有平民船隻。</em></p>
              </div>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Vesselmilitary.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:220px">
                <p><em>所有一般的戰鬥船艦。</em></p>
              </div>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Vesselunique.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:185px">
                <p><em>所有特殊單位船艦。</em></p>
              </div>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Sailsaokaoc.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:185px">
                <p>
                  <em
                    >不同旗幟的船隻(以戰船為例)(<nuxt-link to="/games/aok"
                      >帝王世紀</nuxt-link
                    >和<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
                    >資料片)。</em
                  >
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Sailshd.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:220px">
                <p><em>不同旗幟的船隻(以戰船為例)(HD擴充資料片)。</em></p>
              </div>
            </div>
          </div>
          <div class="thanks">感謝! 此頁面由賜齡和眠協助編輯</div>
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
