<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>騎兵單位</h1>
        <div class="hrn1"></div>
        <div class="spw">
          <em
            ><img
              src="~assets/Attila_the_Hun.png"
              width="50px;"
              alt=""
              style="margin-right:20px;"
            />阿提拉：不要搞錯了！：此頁面和<nuxt-link to="/units/Cavalier"
              >騎兵</nuxt-link
            >與<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵防禦</nuxt-link
            >。不同喔！</em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            騎兵單位是遊戲中四類軍事單位之一，另外三種分別是<nuxt-link
              to="/units/Infantry_Units"
              >步兵單位</nuxt-link
            >、<nuxt-link to="/units/Archer_Units">遠距離單位</nuxt-link>與
            <nuxt-link to="/units/Siege_Weapons">攻城武器單位</nuxt-link>。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            一般來說，騎兵單位是速度快，攻擊高，高HP和高護甲的單位。他們攻擊範圍很近，而且很貴。在正面碰撞中，他們很容易就能戰勝弓兵，步兵和攻城單位。
          </p>
          <p>
            請注意有些弓箭手在某種程度上也算作騎兵。例如，他們會從反騎兵單位的攻擊中獲得額外的傷害，並得到某些騎兵技術的加成，比如品種。但基本上他們在遊戲中被視為弓箭手而不是騎兵，所以在這篇文章中沒有多加討論。
          </p>
          <p>
            騎兵一開始可在封建時代的馬廄中訓練。有兩個特殊的騎兵單位能在城堡以外的地方訓練：<nuxt-link
              to="/units/Tarkan"
              >韃靼騎兵</nuxt-link
            >在
            <nuxt-link to="/techs/Marauders">掠奪者</nuxt-link
            >研究後可以在馬厩中訓練，而<nuxt-link to="/units/Imperial_Camel"
              >帝王駱駝騎兵</nuxt-link
            >則只能在馬廄訓練。拋開垃圾單位，所有騎兵單位訓練都需要食物和黃金。
          </p>
          <p>
            儘管騎兵部隊有很多優勢，但仍有一些缺點。反制騎兵最常用的那就是<nuxt-link
              to="/units/Pikeman"
              >長槍兵</nuxt-link
            >。每個使用騎兵的玩家遲早都會在戰場上遇見他們，
            <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>，<nuxt-link
              to="/units/Mameluke"
              >奴隸兵</nuxt-link
            >，<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>和
            <nuxt-link to="/units/Genoese_Crossbowman">熱那亞弩手</nuxt-link
            >也對騎兵部隊非常有效。此外，騎兵單位價格昂貴，通常需要花費黃金，如果玩家過度依賴他們那當黃金用完時極有可能會輸掉該場比賽。在狹窄有懸崖或樹林等障礙物的地圖上，騎兵部隊會難以接近障礙物後的部隊而淪為敵方的獵物。
          </p>
          <p>
            美洲文明沒有馬厩能訓練騎兵部隊。作為替代，他們可以訓練<nuxt-link
              to="/units/Eagle_Warrior"
              >鷹勇士</nuxt-link
            >。
          </p>
        </div>
        <h3>騎兵文明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>，<nuxt-link
              to="/civs/Franks"
              >法蘭克</nuxt-link
            >，<nuxt-link to="/civs/Huns">匈奴</nuxt-link>，
            <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>，<nuxt-link
              to="/civs/Mongols"
              >蒙古</nuxt-link
            >和<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >都是非常優秀的騎兵文明，非常依靠騎兵部隊。
            <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>，<nuxt-link
              to="/civs/Indians"
              >印度</nuxt-link
            >，<nuxt-link to="/civs/Malians">馬利</nuxt-link>和<nuxt-link
              to="/civs/Spanish"
              >西班牙</nuxt-link
            >也是偉大的騎兵文明，雖然比上述文明更不依賴騎兵。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>以下列出騎兵有加成的文明</p>
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：馬廄單位在城堡/帝王時代便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：<nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >便宜25％
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：騎兵單位HP+20％。
            </li>
            <li>
              <nuxt-link to="/civs/Indians">印度</nuxt-link>：<nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >護甲+1/+1。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>:<nuxt-link
                to="/units/Battle_Elephant"
                >矛象伕</nuxt-link
              >移動速度快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、:<nuxt-link
                to="/units/Scout_Cavalry"
                >斥侯騎兵</nuxt-link
              >便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>:<nuxt-link
                to="/units/Battle_Elephant"
                >矛象伕</nuxt-link
              >便宜30%。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>:<nuxt-link
                to="/units/Scout_Cavalry"
                >斥侯騎兵</nuxt-link
              >HP+30%。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>:<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >和<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
              >免費升級。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>以下列出騎兵的團隊加成</p>
          <ul>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >+2視野。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>：馬廄工作效率快20％。
            </li>
            <li>
              <nuxt-link to="/civs/Indians">印度</nuxt-link>：<nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >對建築攻擊+5。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>：<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >和<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>+2視野。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >對弓兵攻擊+2。
            </li>
          </ul>
        </div>
        <h3>騎兵單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td width="19%">騎兵單位</td>
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
                <img class="gg" src="~assets/ScoutCavalryIcon.jpg" /><nuxt-link
                  to="/units/Scout_Cavalry"
                  >斥侯騎兵</nuxt-link
                >
              </td>
              <td class="tta3">45</td>
              <td class="tta3">3</td>
              <td class="tta3">0/2</td>
              <td class="tta3">0</td>
              <td class="tta3">2.03</td>
              <td class="tta3">4</td>
              <td class="tta3">1.55</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/LightCavalryIcon.jpg" /><nuxt-link
                  to="/units/Light_Cavalry"
                  >輕騎兵</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">8</td>
              <!--視野!-->
              <td class="tta3">1.5</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/HussarIcon.jpg" /><nuxt-link
                  to="/units/Hussar"
                  >匈牙利輕騎兵</nuxt-link
                >
              </td>
              <td class="tta3">75</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">10</td>
              <!--視野!-->
              <td class="tta3">1.5</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/KnightIcon.jpg" /><nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >
              </td>
              <td class="tta3">100</td>
              <!--生命值!-->
              <td class="tta3">10</td>
              <!--攻擊!-->
              <td class="tta3">2/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.83</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CavalierIcon.jpg" /><nuxt-link
                  to="/units/Cavalier"
                  >騎兵</nuxt-link
                >
              </td>
              <td class="tta3">120</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">2/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.83</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/PaladinIcon.jpg" /><nuxt-link
                  to="/units/Paladin"
                  >遊俠</nuxt-link
                >
              </td>
              <td class="tta3">160</td>
              <!--生命值!-->
              <td class="tta3">14</td>
              <!--攻擊!-->
              <td class="tta3">2/3</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CamelIcon.jpg" /><nuxt-link
                  to="/units/Camel"
                  >駱駝騎兵</nuxt-link
                >
              </td>
              <td class="tta3">100</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1.45</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/HeavyCamelIcon.jpg" /><nuxt-link
                  to="/units/Heavy_Camel"
                  >重裝駱駝騎兵</nuxt-link
                >
              </td>
              <td class="tta3">120</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.45</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ImperialCamelIcon.jpg" /><nuxt-link
                  to="/units/Imperial_Camel"
                  >帝王駱駝騎兵</nuxt-link
                >
              </td>
              <td class="tta3">140</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.45</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Battleelephanticon.png"
                /><nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>
              </td>
              <td class="tta3">250</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">1/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">0.85</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Battleelephanticon.png"
                /><nuxt-link to="/units/Elite_Battle_Elephant"
                  >精銳矛象伕</nuxt-link
                >
              </td>
              <td class="tta3">300</td>
              <!--生命值!-->
              <td class="tta3">16</td>
              <!--攻擊!-->
              <td class="tta3">1/3</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">0.85</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/CataphractIcon.jpg" /><nuxt-link
                  to="/units/Cataphract"
                  >拜占庭聖騎兵</nuxt-link
                >
              </td>
              <td class="tta3">110</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">2/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.83</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/CataphractIcon.jpg"
                /><nuxt-link to="/units/Cataphract">精銳拜占庭聖騎兵</nuxt-link>
              </td>
              <td class="tta3">150</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">2/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.73</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/WarElephantIcon.jpg"
                /><nuxt-link to="/units/War_Elephant">戰象</nuxt-link>
              </td>
              <td class="tta3">450</td>
              <!--生命值!-->
              <td class="tta3">15</td>
              <!--攻擊!-->
              <td class="tta3">1/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">0.6</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/WarElephantIcon.jpg"
                /><nuxt-link to="/units/War_Elephant">精銳戰象</nuxt-link>
              </td>
              <td class="tta3">600</td>
              <!--生命值!-->
              <td class="tta3">20</td>
              <!--攻擊!-->
              <td class="tta3">1/3</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">0.6</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Saracenmamluk_icon.png"
                /><nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link>
              </td>
              <td class="tta3">65</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">2</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.4</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Saracenmamluk_icon.png"
                /><nuxt-link to="/units/Mameluke">精銳阿拉伯奴隸兵</nuxt-link>
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">10</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">3</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.4</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/TarkanIcon.jpg"
                /><nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>
              </td>
              <td class="tta3">100</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">1/3</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.13</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/TarkanIcon.jpg"
                /><nuxt-link to="/units/Tarkan">精銳韃靼騎兵</nuxt-link>
              </td>
              <td class="tta3">150</td>
              <!--生命值!-->
              <td class="tta3">11</td>
              <!--攻擊!-->
              <td class="tta3">1/4</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.13</td>
              <!--射速!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">1.35</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Magyar_Huszar_icon.jpg"
                /><nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link>
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.83</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.5</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Magyar_Huszar_icon.jpg"
                /><nuxt-link to="/units/Magyar_Huszar"
                  >精銳馬札爾驃騎兵</nuxt-link
                >
              </td>
              <td class="tta3">85</td>
              <!--生命值!-->
              <td class="tta3">10</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.83</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.5</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/New_Boyar.png" /><nuxt-link
                  to="/units/Boyar"
                  >貴族鐵騎</nuxt-link
                >
              </td>
              <td class="tta3">100</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">4/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.4</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/New_Boyar.png" /><nuxt-link
                  to="/units/Boyar"
                  >精銳貴族鐵騎</nuxt-link
                >
              </td>
              <td class="tta3">130</td>
              <!--生命值!-->
              <td class="tta3">14</td>
              <!--攻擊!-->
              <td class="tta3">6/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.4</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Ballistaelephanticon.png"
                /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link>
              </td>
              <td class="tta3">250</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.5</td>
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
                  src="~assets/Ballistaelephanticon.png"
                /><nuxt-link to="/units/Ballista_Elephant"
                  >精銳弩砲象</nuxt-link
                >
              </td>
              <td class="tta3">290</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.5</td>
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
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Bloodlines.png"
                  alt=""
                /><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">150F 100G</td>
              <td class="tunitc6">騎兵部隊生命值+20。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Husbandry.jpg"
                  alt=""
                /><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">250F</td>
              <td class="tunitc6">騎兵移動速度+10%。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Forging.jpg"
                  alt=""
                /><nuxt-link to="/techs/Forging">鍛造</nuxt-link>
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">150F</td>
              <td class="tunitc6">步兵騎兵攻擊+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Ironcasting.jpg"
                  alt=""
                /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">220F 120G</td>
              <td class="tunitc6">步兵騎兵攻擊+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Blastfurnace.jpg"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">275F 225G</td>
              <td class="tunitc6">步兵騎兵攻擊+2。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Scalebardingarmor.jpg"
                  alt=""
                /><nuxt-link to="/techs/Scale_Barding_Armor"
                  >騎兵鱗甲</nuxt-link
                >
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">150F</td>
              <td class="tunitc6">騎兵護甲+1/+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Chainbardingarmor.jpg"
                  alt=""
                /><nuxt-link to="/techs/Chain_Barding_Armor"
                  >騎兵鎖甲</nuxt-link
                >
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">250F 150G</td>
              <td class="tunitc6">騎兵護甲+1/+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Platebardingarmor.jpg"
                  alt=""
                /><nuxt-link to="/techs/Plate_Barding_Armor"
                  >騎兵板甲</nuxt-link
                >
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">350F 200G</td>
              <td class="tunitc6">騎兵護甲+1/+2。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Herbalmedicine.png"
                  alt=""
                /><nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">350G</td>
              <td class="tunitc6">駐紮單位自身治療速度變為4倍。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Heresy.png"
                  alt=""
                /><nuxt-link to="">異端邪說</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">1000G</td>
              <td class="tunitc6">被招降的單位/建築物立即死亡/毀壞)。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Faith.jpg"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">750F 1000G</td>
              <td class="tunitc6">單位對僧侶(傳教士)的招降更具抵抗力。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  style="margin: 2px;"
                  src="~assets/Conscription.jpg"
                  alt=""
                /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">150F 150G</td>
              <td class="tunitc6">軍營、靶場、馬廄、城堡訓練部隊速度+33%。</td>
            </tr>
          </table>
        </div>
        <h3>相關特殊科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered table-striped" width="100%">
            <tr>
              <td class="tunitcc" style="width: 15%;">文明</td>
              <td class="tunitcc" style="width: 10%;">特殊科技</td>
              <td class="tunitcc" style="width: 15%;">花費</td>
              <td class="tunitcc">影響</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
              </td>
              <td class="tunitc4">聚居堡壘</td>
              <td class="tunitc5">250F 250G</td>
              <td class="tunitc6">團隊的城堡工作效率快25%</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
              </td>
              <td class="tunitc4">馬格拉比駱駝</td>
              <td class="tunitc5">700F 300G</td>
              <td class="tunitc6">駱駝部隊獲得回血能力(每分鐘回15 HP)。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                />緬甸
              </td>
              <td class="tunitc4">象轎</td>
              <td class="tunitc5">200W 300F</td>
              <td class="tunitc6">矛象伕護甲+1/+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>
              </td>
              <td class="tunitc4">曼尼普爾騎兵</td>
              <td class="tunitc5">650F 400G</td>
              <td class="tunitc6">騎兵和飛鏢騎兵對建築物攻擊+3。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
              </td>
              <td class="tunitc4">後勤學</td>
              <td class="tunitc5">1000F 600G</td>
              <td class="tunitc6">拜占庭聖騎兵有踐踏傷害，對步兵攻擊+6。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
              <td class="tunitc4">騎士精神</td>
              <td class="tunitc5">400W 400W</td>
              <td class="tunitc6">馬廄工作速率快40%。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Huns">匈奴</nuxt-link>
              </td>
              <td class="tunitc4">掠奪者</td>
              <td class="tunitc5">300W 200G</td>
              <td class="tunitc6">韃靼騎兵可在馬廄訓練。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Khmer">高棉</nuxt-link>
              </td>
              <td class="tunitc4">象牙劍</td>
              <td class="tunitc5">200W 300G</td>
              <td class="tunitc6">矛象伕攻擊+3。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
              </td>
              <td class="tunitc4">雇傭兵</td>
              <td class="tunitc5">200F 300G</td>
              <td class="tunitc6">訓練馬札爾驃騎兵不需消耗黃金。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Malians">馬利</nuxt-link>
              </td>
              <td class="tunitc4">驃悍精神</td>
              <td class="tunitc5">650F 400G</td>
              <td class="tunitc6">馬廄單位攻擊+5。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Persians">波斯</nuxt-link>
              </td>
              <td class="tunitc4">象伕</td>
              <td class="tunitc5">300F 300G</td>
              <td class="tunitc6">戰象移動速度+30%。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/Unique-tech.jpg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
              </td>
              <td class="tunitc4">狂熱舉動</td>
              <td class="tunitc5">750F 800G</td>
              <td class="tunitc6">駱駝騎兵和奴隸兵+30 HP。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  width="22"
                  src="~assets/CastleAgeUnique.png"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
              </td>
              <td class="tunitc4">恰特拉傘</td>
              <td class="tunitc5">250F 250G</td>
              <td class="tunitc6">矛象伕+50 HP。</td>
            </tr>
          </table>
        </div>
        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="180"
                  src="~assets/Cavalryunitsstable.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:220px">
                <p><em>所有在馬廄訓練的騎兵單位。</em></p>
              </div>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Cavalryunitscastle.jpg"
                  alt=""
              /></gallery>
              <div class="lightbox-caption" style="width:220px">
                <p><em>所有在城堡訓練的騎兵單位。</em></p>
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
</template>
<script>
export default {
  layout: 'allunit2',
  components: {}
}
</script>
<style></style>
