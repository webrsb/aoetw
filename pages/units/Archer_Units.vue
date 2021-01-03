<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>遠距離單位</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>遠距離單位</b>是遊戲中四類軍事單位之一，另外三種分別是<nuxt-link
              to="/units/Infantry_Units"
              >步兵單位</nuxt-link
            >、<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >與<nuxt-link to="/units/Siege_Weapons">攻城武器單位</nuxt-link
            >。遠距離單位包含<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
            >、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>、<nuxt-link
              to="/units/Cavalry_Archer"
              >馬弓騎兵</nuxt-link
            >、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
            >與<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link>等
          </p>
          <br /><strong
            >這邊說的遠距離單位，不包含<nuxt-link to="/units/Gbeto"
              >飛刀女獵手</nuxt-link
            >、<nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
            >、<nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link>、<nuxt-link
              to="/units/Ballista_Elephant"
              >弩砲象</nuxt-link
            >與<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
            >。</strong
          >
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            相對於<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >與<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            >，遠距離單位<nuxt-link to="/elements/Hit_points">血量</nuxt-link
            >、攻擊與裝甲都比較低。但卻擁有遠距離攻擊的能力。大部分的<nuxt-link
              to="/units/Archer"
              >弓箭手</nuxt-link
            >都是徒步的，而馬弓騎兵血量與速度都比徒步<nuxt-link
              to="/units/Archer_Units"
              >弓兵</nuxt-link
            >來得高，使他們能靠拉打戰術無損傷的情況下打擊步兵單位。
          </p>
          <p>
            遠距離單位於<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >在<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >訓練。矛兵與弓兵絕對是封建大戰的主力之一，尤其是弓矛混合下，如果對方沒有相對應的軍事，將帶來毀滅性的傷害。
          </p>
          <p>
            特殊的遠距離單位於<nuxt-link to="/building/Castle">城堡</nuxt-link
            >訓練，除了<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
            >、<nuxt-link to="/units/Slinger">投石手</nuxt-link>與<nuxt-link
              to="/units/Imperial_Skirmisher"
              >帝王戰矛兵</nuxt-link
            >，這三種兵在射箭場訓練。
          </p>
          <p>
            大多數的遠距離單位花費<nuxt-link to="/resource/Wood">木頭</nuxt-link
            >與<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >訓練，但也有一些少數是花費<nuxt-link to="/resource/Food"
              >食物</nuxt-link
            >。
          </p>
          <p>
            遠距離單位不擅長1對1的戰鬥，卻很適合大規模的集團戰，尤其在狹窄的通道或樹林，減少受傷害面積，以集火的方式打擊大量敵軍。
          </p>
          <p>
            總體來說，遠距離單位殺<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >的效率遠高於步兵單位與<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >，但對<nuxt-link to="/building">建築</nuxt-link
            >與攻城武器單位卻顯得無助，尤其是遇到<nuxt-link to="/units/Mangonel"
              >投石車</nuxt-link
            >，它能迅速消滅大規模的弓箭手。<nuxt-link to="/units/Siege_Ram"
              >重型衝撞車</nuxt-link
            >與其他兵種搭配也很適合對付遠距離單位，雖然<nuxt-link
              to="/units/Battering_Ram"
              >衝撞車</nuxt-link
            >對弓箭手沒有傷害性，但因為他的高遠距離裝甲，可以掩護其他單位擊殺對方。對弓箭手來說，最容易打擊他的莫過於矛兵，這種垃圾兵很便宜，很容易量產，不但高<nuxt-link
              to="/armor"
              >遠防</nuxt-link
            >對弓箭手也有加成傷害。
          </p>
          <p>
            其他著名的天敵還有<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
            >、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
            >、<nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
            >（他自己也是弓箭手）和<nuxt-link to="/units/War_Wagon"
              >馬戰車</nuxt-link
            >。
          </p>
        </div>
        <h3>弓兵文明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/units/Archer_Units">弓兵文明</nuxt-link>有<nuxt-link
              to="/civs/Britons"
              >不列顛</nuxt-link
            >、<nuxt-link to="/civs/Chinese">中國</nuxt-link>、<nuxt-link
              to="/civs/Ethiopians"
              >衣索比亞</nuxt-link
            >、<nuxt-link to="/civs/Italians">義大利</nuxt-link>、<nuxt-link
              to="/civs/Mayans"
              >馬雅</nuxt-link
            >與<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。
          </p>
          <p>
            而<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>與<nuxt-link
              to="/civs/Japanese"
              >日本</nuxt-link
            >是唯二<nuxt-link to="/units/Archer_Units">弓箭手單位</nuxt-link
            >與<nuxt-link to="/techs">科技</nuxt-link>全滿的<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >。
          </p>
          <p>
            而就馬弓騎兵而言，<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
            >、<nuxt-link to="/civs/Huns">匈人</nuxt-link>、<nuxt-link
              to="/civs/Indians"
              >印度</nuxt-link
            >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
              to="/civs/Mongols"
              >蒙古</nuxt-link
            >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link
            >與薩拉森都有優秀的馬弓騎兵，特別是那些擁有珍貴的<nuxt-link
              to="/techs/Parthian_Tactics"
              >安息人戰術</nuxt-link
            >的文明。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>以下列出弓兵有加成的文明</p>
          <ul>
            <li>不列顛：徒步弓兵在城堡/帝王額外+1/+2射程。</li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：矛兵便宜25％
            </li>
            <li>
              衣索比亞：弓兵<nuxt-link to="/elements/Rate_of_Fire"
                >射速</nuxt-link
              >提高15％。
            </li>
            <li>匈人：馬弓騎兵在城堡/帝王分別便宜10％/20％。</li>
            <li>義大利：火槍兵便宜15％。</li>
            <li>
              馬雅：弓箭手在<nuxt-link to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >分別便宜10％/20％/30％。
            </li>
            <li>蒙古：馬弓騎兵射速快20％。</li>
            <li>
              薩拉森：馬弓騎兵對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+3。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >和<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
              >的射速提高15％。
            </li>
            <li>
              土耳其：<nuxt-link to="/techs/Chemistry">化學</nuxt-link>免費。
            </li>
            <li>
              越南：射箭場單位分別在<nuxt-link to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >+10％/15％/20％的<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            以下列出弓兵的<nuxt-link to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >
          </p>
          <ul>
            <li>柏柏：可在射箭場訓練鏢槍騎兵。</li>
            <li>不列顛：射箭場效率提高20％。</li>
            <li>
              馬扎爾：徒步弓兵有+2<nuxt-link to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >。
            </li>
            <li>
              薩拉森：徒步弓兵對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >+1攻擊。
            </li>
            <li>
              土耳其：<nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
              >生產速度快20％。
            </li>
            <li>越南：可在射箭場訓練帝王戰矛兵。</li>
          </ul>
        </div>
        <h3>瑣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              不包含馬扎爾與柏柏，所有優秀的馬弓騎兵都是來自亞洲。安息人戰術也證明了這一點，10個可以研發的文明有9個在亞洲。
            </li>
            <li>
              遊戲中40個獨特單位有13個是弓箭手類型，包含5個馬弓騎兵，所以遠距離單位是<nuxt-link
                to="/units/Unique_Unit"
                >特殊單位</nuxt-link
              >內最大的軍事兵種。
            </li>
          </ul>
        </div>
        <h3>遠距離單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td width="19%">遠距單位</td>
              <td width="9%">
                <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
              </td>
              <td width="9%">
                <nuxt-link to="/elements/Attack">攻擊</nuxt-link>
              </td>
              <td width="9%"><nuxt-link to="/armor">防禦</nuxt-link></td>
              <td width="9%">射程</td>
              <td width="9%">
                <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
              </td>
              <td width="9%">命中率</td>
              <td width="9%">
                <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
              </td>
              <td width="9%">速度</td>
              <td width="9%">開火<br />間隔</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ArcherIcon.png" /><nuxt-link
                  to="/units/Archer"
                  >弓兵</nuxt-link
                >
              </td>
              <td class="tta3">30</td>
              <td class="tta3">4</td>
              <td class="tta3">0/0</td>
              <td class="tta3">4</td>
              <td class="tta3">2.03</td>
              <td class="tta3">80</td>
              <td class="tta3">6</td>
              <td class="tta3">0.96</td>
              <td class="tta3">5</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CrossbowmanIcon.png" /><nuxt-link
                  to="/units/Crossbowman"
                  >弩兵</nuxt-link
                >
              </td>
              <td class="tta3">35</td>
              <td class="tta3">5</td>
              <td class="tta3">0/0</td>
              <td class="tta3">5</td>
              <td class="tta3">2.03</td>
              <td class="tta3">85</td>
              <td class="tta3">7</td>
              <td class="tta3">0.96</td>
              <td class="tta3">5</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ArbalestIcon.png" /><nuxt-link
                  to="/units/Arbalester"
                  >強弩兵</nuxt-link
                >
              </td>
              <td class="tta3">40</td>
              <td class="tta3">6</td>
              <td class="tta3">0/0</td>
              <td class="tta3">5</td>
              <td class="tta3">2.03</td>
              <td class="tta3">90</td>
              <td class="tta3">7</td>
              <td class="tta3">0.96</td>
              <td class="tta3">5</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/SkirmisherIcon.png" /><nuxt-link
                  to="/units/Skirmisher"
                  >矛兵</nuxt-link
                >
              </td>
              <td class="tta3">30</td>
              <td class="tta3">2</td>
              <td class="tta3">0/3</td>
              <td class="tta3">5</td>
              <td class="tta3">3.05</td>
              <td class="tta3">90</td>
              <td class="tta3">6</td>
              <td class="tta3">0.96</td>
              <td class="tta3">5</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/EliteSkirmisherIcon.png"
                /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
              </td>
              <td class="tta3">35</td>
              <td class="tta3">3</td>
              <td class="tta3">0/4</td>
              <td class="tta3">5</td>
              <td class="tta3">3.05</td>
              <td class="tta3">90</td>
              <td class="tta3">7</td>
              <td class="tta3">0.96</td>
              <td class="tta3">5</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Imperialskirmishericon.png"
                /><nuxt-link to="/units/Imperial_Skirmisher"
                  >帝王戰矛兵</nuxt-link
                >
              </td>
              <td class="tta3">35</td>
              <td class="tta3">4</td>
              <td class="tta3">0/5</td>
              <td class="tta3">5</td>
              <td class="tta3">3.05</td>
              <td class="tta3">95</td>
              <td class="tta3">7</td>
              <td class="tta3">0.96</td>
              <td class="tta3">5</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CavalryArcherIcon.png" /><nuxt-link
                  to="/units/Cavalry_Archer"
                  >馬弓騎兵</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">50</td>
              <!--命中率!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.4</td>
              <!--速度!-->
              <td class="tta3">10</td>
              <!--<nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/HeavyCavArcherIcon.png"
                /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                  >重裝馬弓騎兵</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">50</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.4</td>
              <!--速度!-->
              <td class="tta3">10</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/HandCannoneerIcon.png" /><nuxt-link
                  to="/units/Hand_Cannoneer"
                  >火槍兵</nuxt-link
                >
              </td>
              <td class="tta3">35</td>
              <!--生命值!-->
              <td class="tta3">17</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">7</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">65</td>
              <!--命中率!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/Slinger_Icon.png" /><nuxt-link
                  to="/units/Slinger"
                  >投石手</nuxt-link
                >
              </td>
              <td class="tta3">40</td>
              <!--生命值!-->
              <td class="tta3">5</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">90</td>
              <!--命中率!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">5.5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/GenitourIcon.png" /><nuxt-link
                  to="/units/Genitour"
                  >標槍騎兵</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">3</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">90</td>
              <!--命中率!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
              <td class="tta3">3.05</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/GenitourIcon.png" /><nuxt-link
                  to="/units/Genitour"
                  >精銳標槍騎兵</nuxt-link
                >
              </td>
              <td class="tta3">55</td>
              <!--生命值!-->
              <td class="tta3">4</td>
              <!--攻擊!-->
              <td class="tta3">0/4</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">90</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
              <td class="tta3">3.05</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/LongbowmanIcon.png"
                /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>
              </td>
              <td class="tta3">35</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">70</td>
              <!--命中率!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/LongbowmanIcon.png"
                /><nuxt-link to="/units/Longbowman">精銳長弓兵</nuxt-link>
              </td>
              <td class="tta3">40</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">80</td>
              <!--命中率!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ChuKoNuIcon.png" /><nuxt-link
                  to="/units/Chu_Ko_Nu"
                  >連弩兵</nuxt-link
                >
              </td>
              <td class="tta3">45</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">3.65</td>
              <!--射速!-->
              <td class="tta3">80</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">3</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ChuKoNuIcon.png" /><nuxt-link
                  to="/units/Chu_Ko_Nu"
                  >精銳連弩兵</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">3.84</td>
              <!--射速!-->
              <td class="tta3">85</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">3</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/MangudaiIcon.png"
                /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.13</td>
              <!--射速!-->
              <td class="tta3">95</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.45</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/MangudaiIcon.png"
                /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link>
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.13</td>
              <!--射速!-->
              <td class="tta3">95</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.45</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/JanissaryIcon.png" /><nuxt-link
                  to="/units/Janissary"
                  >土耳其火槍兵</nuxt-link
                >
              </td>
              <td class="tta3">35</td>
              <!--生命值!-->
              <td class="tta3">17</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">8</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">50</td>
              <!--命中率!-->
              <td class="tta3">10</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">4</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/JanissaryIcon.png" /><nuxt-link
                  to="/units/Janissary"
                  >精銳土耳其火槍兵</nuxt-link
                >
              </td>
              <td class="tta3">40</td>
              <!--生命值!-->
              <td class="tta3">22</td>
              <!--攻擊!-->
              <td class="tta3">2/0</td>
              <!--防禦!-->
              <td class="tta3">8</td>
              <!--射程!-->
              <td class="tta3">3.49</td>
              <!--射速!-->
              <td class="tta3">50</td>
              <!--命中率!-->
              <td class="tta3">10</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">4</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/WarWagonIcon.png" /><nuxt-link
                  to="/units/War_Wagon"
                  >馬戰車</nuxt-link
                >
              </td>
              <td class="tta3">150</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.5</td>
              <!--射速!-->
              <td class="tta3">100</td>
              <!--命中率!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
              <td class="tta3">10</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/WarWagonIcon.png" /><nuxt-link
                  to="/units/War_Wagon"
                  >精銳馬戰車</nuxt-link
                >
              </td>
              <td class="tta3">200</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/4</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.5</td>
              <!--射速!-->
              <td class="tta3">100</td>
              <!--命中率!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
              <td class="tta3">10</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/PlumedArcherIcon.png" /><nuxt-link
                  to="/units/Plumed_Archer"
                  >羽毛箭射手</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">5</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">80</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/PlumedArcherIcon.png" /><nuxt-link
                  to="/units/Plumed_Archer"
                  >精銳羽毛箭射手</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">5</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">80</td>
              <!--命中率!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ConquistadorIcon.png" /><nuxt-link
                  to="/units/Conquistador"
                  >西班牙征服者</nuxt-link
                >
              </td>
              <td class="tta3">55</td>
              <!--生命值!-->
              <td class="tta3">16</td>
              <!--攻擊!-->
              <td class="tta3">2/2</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">2.93</td>
              <!--射速!-->
              <td class="tta3">65</td>
              <!--命中率!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">1.3</td>
              <!--速度!-->
              <td class="tta3">4</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ConquistadorIcon.png" /><nuxt-link
                  to="/units/Conquistador"
                  >精銳征服者</nuxt-link
                >
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">18</td>
              <!--攻擊!-->
              <td class="tta3">2/2</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">2.93</td>
              <!--射速!-->
              <td class="tta3">70</td>
              <!--命中率!-->
              <td class="tta3">9</td>
              <!--視野!-->
              <td class="tta3">1.3</td>
              <!--速度!-->
              <td class="tta3">4</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/ElephantArcherIcon.png"
                /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>
              </td>
              <td class="tta3">280</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.5</td>
              <!--射速!-->
              <td class="tta3">100</td>
              <!--命中率!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">0.8</td>
              <!--速度!-->
              <td class="tta3">4</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/ElephantArcherIcon.png"
                /><nuxt-link to="/units/Elephant_Archer"
                  >精銳象弓騎兵</nuxt-link
                >
              </td>
              <td class="tta3">330</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.5</td>
              <!--射速!-->
              <td class="tta3">100</td>
              <!--命中率!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">0.8</td>
              <!--速度!-->
              <td class="tta3">4</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/New_Genoese_Crossbowman.png"
                /><nuxt-link to="/units/Genoese_Crossbowman"
                  >熱那亞弩手</nuxt-link
                >
              </td>
              <td class="tta3">45</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">100</td>
              <!--命中率!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/New_Genoese_Crossbowman.png"
                /><nuxt-link to="/units/Genoese_Crossbowman"
                  >精銳熱那亞弩手</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">100</td>
              <!--命中率!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">0.96</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CamelArcherIcon.png" /><nuxt-link
                  to="/units/Camel_Archer"
                  >駱駝弓騎兵</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">95</td>
              <!--命中率!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.4</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CamelArcherIcon.png" /><nuxt-link
                  to="/units/Camel_Archer"
                  >精銳駱駝弓騎兵</nuxt-link
                >
              </td>
              <td class="tta3">65</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">1/1</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">95</td>
              <!--命中率!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.4</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/Arambaiicon.png" /><nuxt-link
                  to="/units/Arambai"
                  >飛鏢騎兵</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">17</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">20</td>
              <!--命中率!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.3</td>
              <!--速度!-->
              <td class="tta3">10</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/Arambaiicon.png" /><nuxt-link
                  to="/units/Arambai"
                  >精銳飛鏢騎兵</nuxt-link
                >
              </td>
              <td class="tta3">65</td>
              <!--生命值!-->
              <td class="tta3">19</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">30</td>
              <!--命中率!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.3</td>
              <!--速度!-->
              <td class="tta3">10</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/RattanarcherIcon2.png" /><nuxt-link
                  to="/units/Rattan_Archer"
                  >藤甲弓兵</nuxt-link
                >
              </td>
              <td class="tta3">35</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/4</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">80</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.1</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/RattanarcherIcon2.png" /><nuxt-link
                  to="/units/Rattan_Archer"
                  >精銳藤甲弓兵</nuxt-link
                >
              </td>
              <td class="tta3">40</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">90</td>
              <!--命中率!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.1</td>
              <!--速度!-->
              <td class="tta3">5</td>
              <!--開火間隔!-->
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
                  src="~assets/Thumb_Ring.png"
                  alt=""
                /><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">300F 250W</td>
              <td class="tunitc6">
                弓兵和馬弓騎兵開火速率更快並擁有100%命中率。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/parthian_tactics.png"
                  alt=""
                /><nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">200F 250G</td>
              <td class="tunitc6">
                <nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                  >馬弓騎兵護甲</nuxt-link
                >+1/+2，對<nuxt-link to="/armor/Armor_Class_Spearman"
                  >長槍兵</nuxt-link
                >攻擊+4。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/ballistics.png"
                  alt=""
                /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">300W 175G</td>
              <td class="tunitc6">
                弓兵、馬弓騎兵、<nuxt-link to="/units/Naval_Vessels"
                  >戰船</nuxt-link
                >、城堡和<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
                >對移動單位的命中率提升。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/chemistry.png"
                  alt=""
                /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">300F 200G</td>
              <td class="tunitc6">
                開火單位(包括<nuxt-link to="/units/Siege_Weapons"
                  >攻城單位</nuxt-link
                >)攻擊+1。研發後可生產火藥單位。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/padded_archer_armor.png"
                  alt=""
                /><nuxt-link to="/techs/Padded_Archer_Armor"
                  >弓兵護甲</nuxt-link
                >
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">100F</td>
              <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/leather_archer_armor.png"
                  alt=""
                /><nuxt-link to="/techs/Leather_Archer_Armor"
                  >弓兵皮甲</nuxt-link
                >
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">150F 150G</td>
              <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/ring_archer_armor.png"
                  alt=""
                /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">250F 250G</td>
              <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+2。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/fletching.png"
                  alt=""
                /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">100F 50G</td>
              <td class="tunitc6">
                弓兵、馬弓騎兵、戰船、城堡和箭塔的攻擊+1、範圍+1。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/bodkin_arrow.png"
                  alt=""
                /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">200F 100G</td>
              <td class="tunitc6">
                弓兵、馬弓騎兵、戰船、城堡和箭塔的攻擊+1、範圍+1。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/Bracer.png"
                  alt=""
                /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">300F 200G</td>
              <td class="tunitc6">
                弓兵、馬弓騎兵、戰船、城堡攻擊+1、範圍+1(箭塔只有攻擊+1)。
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
                  src="~assets/unique_tech.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Atlatl">擲矛器</nuxt-link>
              </td>
              <td class="tunitc5">450F 350G</td>
              <td class="tunitc6">矛兵和標槍騎兵+1攻擊和+1攻擊範圍。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech.png"
                  style="margin: 2px;"
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
                  class="gg"
                  src="~assets/unique_tech.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Britons">不列顛</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link>
              </td>
              <td class="tunitc5">750W 450G</td>
              <td class="tunitc6">徒步弓兵射程+1，箭塔攻擊+2。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Incas">印加</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Andean_Sling">安地斯彈弓</nuxt-link>
              </td>
              <td class="tunitc5">200F 300G</td>
              <td class="tunitc6">矛兵和投石手取消最小射程。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Italians">義大利</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Pavise">巨盾</nuxt-link>
              </td>
              <td class="tunitc5">300F 150G</td>
              <td class="tunitc6">
                徒步<nuxt-link to="/armor">遠程護甲</nuxt-link>+1/+1。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Obsidian_Arrows">黑曜石之箭</nuxt-link>
              </td>
              <td class="tunitc5">300F 300G</td>
              <td class="tunitc6">
                射箭場<nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link
                >對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
                >和<nuxt-link to="/armor/Armor_Class_stone_defense"
                  >石頭建築</nuxt-link
                >攻擊+6。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Turks">土耳其</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Sipahi">采邑騎兵</nuxt-link>
              </td>
              <td class="tunitc5">350F 150G</td>
              <td class="tunitc6">馬弓騎兵+20 HP。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Maghrabi_Camels">馬格拉比駱駝</nuxt-link>
              </td>
              <td class="tunitc5">700F 300G</td>
              <td class="tunitc6">
                <nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
                >部隊獲得<nuxt-link to="/elements/Regeneration">回血</nuxt-link
                >能力(每分鐘回15 HP)。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Manipur_Cavalry">曼尼普爾騎兵</nuxt-link>
              </td>
              <td class="tunitc5">650F 400G</td>
              <td class="tunitc6">
                騎兵和<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link
                >對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
                >攻擊+3。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Chinese">中國</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Rocketry">火箭技術</nuxt-link>
              </td>
              <td class="tunitc5">750W 750G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link
                >攻擊+2，弩砲攻擊+4。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Indians">印度</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Shatagni">印度火銃</nuxt-link>
              </td>
              <td class="tunitc5">500F 300G</td>
              <td class="tunitc6">火槍兵射程+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link>
              </td>
              <td class="tunitc5">600W 400G</td>
              <td class="tunitc6">馬弓騎兵攻擊和射程都+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>
              </td>
              <td class="tunitc5">700F 400G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
                >對移動目標的命中率提升。
              </td>
            </tr>
          </table>
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
