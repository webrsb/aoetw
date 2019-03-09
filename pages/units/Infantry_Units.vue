<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>步兵單位</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>步兵單位</b>是遊戲中四類軍事單位之一，另外三種分別是<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵單位</nuxt-link
            >、<nuxt-link to="/units/Archer_Units">遠距離單位</nuxt-link>與
            <nuxt-link to="/units/Siege_Weapons">攻城武器單位</nuxt-link>。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              步兵單位通常是<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >較低，速度也慢，不過是非常重要的單位，因為他相當便宜也容易量產，且早期就可以訓練。
            </li>
            <li>
              普通的步兵單位在<nuxt-link to="/building/Barracks">軍營</nuxt-link
              >裡訓練，<nuxt-link to="/units/Militia">民兵</nuxt-link
              >是第一個可以訓練的單位也是<nuxt-link to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
              >唯一可生產的軍事單位。
            </li>
            <li>
              <nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
              >的<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >在<nuxt-link to="/building/Castle">城堡</nuxt-link
              >裡面訓練，但有兩個例外，<nuxt-link to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >在研發<nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link
              >後可以在軍營訓練，而
              <nuxt-link to="/units/Condottiero">傭兵</nuxt-link
              >只要是<nuxt-link to="/civs/Italians">義大利</nuxt-link
              >及其同盟也可以在<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >時在軍營訓練。
            </li>
            <li>
              所有的步兵都需要<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >和<nuxt-link to="/resource/Food">食物</nuxt-link
              >訓練，而<nuxt-link to="/armor/Armor_Class_Spearman"
                >槍兵類</nuxt-link
              >是唯一的例外，他需要食物與<nuxt-link to="/resource/Wood"
                >木材</nuxt-link
              >。雖然大部分的步兵懼怕<nuxt-link to="/units/Archer_Units"
                >弓兵單位</nuxt-link
              >與<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
              >，但其實仍有一些好處:第一:他們成本很低，尤其是黃金，表示可以用較少的資源去換傷亡比。第二:
              <nuxt-link to="/units/Archer">弓箭手</nuxt-link
              >通常可以配合<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >，而<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >則是搭配<nuxt-link to="/units/Spearman">槍兵</nuxt-link>。
            </li>
            <li>
              由於速度很慢又是近戰，步兵很怕<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >。
            </li>
            <li>
              擅長對付步兵的單位是:<nuxt-link to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >、<nuxt-link to="/units/Slinger">投石手</nuxt-link>、<nuxt-link
                to="/units/Plumed_Archer"
                >羽毛箭射手</nuxt-link
              >、<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >、<nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
              >與<nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>
            </li>
          </ul>
        </div>
        <h3>步兵文明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            許多<nuxt-link to="/civs">文明</nuxt-link>依賴強大的步兵，<nuxt-link
              to="/civs/Aztecs"
              >阿茲特克人</nuxt-link
            >，<nuxt-link to="/civs/Burmese">緬甸人</nuxt-link>，
            <nuxt-link to="/civs/Japanese">日本人</nuxt-link>，<nuxt-link
              to="/civs/Slavs"
              >斯拉夫人</nuxt-link
            >和<nuxt-link to="/civs/Vikings">維京人</nuxt-link
            >可以說是所有文明中最強大的步兵。
            <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
              to="/civs/Goths"
              >哥德</nuxt-link
            >、<nuxt-link to="/civs/Incas">印加</nuxt-link>、<nuxt-link
              to="/civs/Malians"
              >馬利</nuxt-link
            >與
            <nuxt-link to="/civs/Teutons">條頓</nuxt-link>也是優秀的<nuxt-link
              to="/units/Infantry_Units"
              >步兵文明</nuxt-link
            >。而<nuxt-link to="/civs/Incas">印加</nuxt-link
            >是唯一有所有步兵單位和技術的文明。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>以下列出步兵有加成的文明</p>
          <ul>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
              >:步兵單位在<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >各有+1/+2/+3的攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>:<nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >便宜25%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>:步兵移動快25%。
            </li>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>:<nuxt-link
                to="/units/Spearman"
                >槍兵</nuxt-link
              >系免費升級。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >:步兵便宜35%，步兵對<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >有+1攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>:從<nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >開始，步兵<nuxt-link to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >快25%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >:軍營的步兵單位從<nuxt-link to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >各有+1/+2/+3的<nuxt-link to="/armor">遠防</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>:<nuxt-link
                to="/techs/Tracking"
                >追蹤技術</nuxt-link
              >是免費的。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:步兵在<nuxt-link
                to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >各有+10%/+15%/+20%的生命值。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            以下列出步兵的<nuxt-link to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >
          </p>
          <ul>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>:軍營工作效率快20%
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>:<nuxt-link
                to="/units/Condottiero"
                >傭兵</nuxt-link
              >可在軍營訓練
            </li>
          </ul>
        </div>
        <h3>步兵單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td width="19%">步兵單位</td>
              <td width="9%">生命值</td>
              <td width="9%">攻擊</td>
              <td width="9%">防禦</td>
              <td width="9%">射程</td>
              <td width="9%">攻擊速度</td>
              <td width="9%"><nuxt-link to="/los.php">視野</nuxt-link></td>
              <td width="9%">速度</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/MilitiaIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Militia">民兵</nuxt-link>
              </td>
              <td class="tta3">40</td>
              <td class="tta3">4</td>
              <td class="tta3">0/1</td>
              <td class="tta3">0</td>
              <td class="tta3">2.03</td>
              <td class="tta3">4</td>
              <td class="tta3">0.9</td>
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/ManAtArmsIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>
              </td>
              <td class="tta3">45</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--<nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">0.9</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/LongswordsManIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">0.9</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/2HandedswordsmanIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Two-Handed_Swordsman"
                  >雙手劍兵</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">0.9</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/ChampionIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">13</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">0.9</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/SpearmanIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
              </td>
              <td class="tta3">45</td>
              <!--生命值!-->
              <td class="tta3">3</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/PikemanIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
              </td>
              <td class="tta3">55</td>
              <!--生命值!-->
              <td class="tta3">4</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/HalberdierIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">3.05</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/EagleScoutIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">4</td>
              <!--攻擊!-->
              <td class="tta3">0/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/EagleWarriorIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
              </td>
              <td class="tta3">55</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/3</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.15</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/EliteEagleWarriorIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Elite_Eagle_Warrior"
                  >精銳鷹勇士</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/4</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.3</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/CondottieroNewIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/WBRSK.jpg" alt="" /><nuxt-link
                  to="/units/Woad_Raider"
                  >菘藍武士</nuxt-link
                >
              </td>
              <td class="tta3">65</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/WBRSK.jpg" alt="" /><nuxt-link
                  to="/units/Woad_Raider"
                  >精銳菘藍武士</nuxt-link
                >
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">13</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/TAXEM.jpg" alt="" /><nuxt-link
                  to="/units/Throwing_Axeman"
                  >擲斧兵</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">3</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/TAXEM.jpg" alt="" /><nuxt-link
                  to="/units/Throwing_Axeman"
                  >精銳擲斧兵</nuxt-link
                >
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">4</td>
              <!--射程!-->
              <td class="tta3">1.83</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/HuskarlIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">10</td>
              <!--攻擊!-->
              <td class="tta3">0/6</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.73</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">1.05</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/HuskarlIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link>
              </td>
              <td class="tta3">70</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">0/8</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.05</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                  to="/units/Samurai"
                  >日本武士</nuxt-link
                >
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">8</td>
              <!--攻擊!-->
              <td class="tta3">1/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                  to="/units/Samurai"
                  >精銳日本武士</nuxt-link
                >
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">1/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Crusade_avatar.png"
                  alt=""
                /><nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link>
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">5/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">0.7</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Crusade_avatar.png"
                  alt=""
                /><nuxt-link to="/units/Teutonic_Knight"
                  >精銳條頓武士</nuxt-link
                >
              </td>
              <td class="tta3">100</td>
              <!--生命值!-->
              <td class="tta3">17</td>
              <!--攻擊!-->
              <td class="tta3">10/2</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.13</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">0.7</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/VBRSK.jpg" alt="" /><nuxt-link
                  to="/units/Berserk"
                  >狂戰士</nuxt-link
                >
              </td>
              <td class="tta3">54</td>
              <!--生命值!-->
              <td class="tta3">9</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.13</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">1.05</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/VBRSK.jpg" alt="" /><nuxt-link
                  to="/units/Berserk"
                  >精銳狂戰士</nuxt-link
                >
              </td>
              <td class="tta3">62</td>
              <!--生命值!-->
              <td class="tta3">14</td>
              <!--攻擊!-->
              <td class="tta3">2/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.83</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1.05</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/JaguarWarriorIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">10</td>
              <!--攻擊!-->
              <td class="tta3">1/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.83</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/JaguarWarriorIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Jaguar_Warrior">精銳豹勇士</nuxt-link>
              </td>
              <td class="tta3">75</td>
              <!--生命值!-->
              <td class="tta3">12</td>
              <!--攻擊!-->
              <td class="tta3">2/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Kamayuk_Icon.jpg"
                  alt=""
                /><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>
              </td>
              <td class="tta3">60</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">1.93</td>
              <!--射速!-->
              <td class="tta3">4</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Kamayuk_Icon.jpg"
                  alt=""
                /><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link>
              </td>
              <td class="tta3">80</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">1/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.5</td>
              <!--射速!-->
              <td class="tta3">5</td>
              <!--視野!-->
              <td class="tta3">1</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ShotelIcon.png" alt="" /><nuxt-link
                  to="/units/Shotel_Warrior"
                  >彎刀勇士</nuxt-link
                >
              </td>
              <td class="tta3">40</td>
              <!--生命值!-->
              <td class="tta3">16</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/ShotelIcon.png" alt="" /><nuxt-link
                  to="/units/Shotel_Warrior"
                  >精銳彎刀勇士</nuxt-link
                >
              </td>
              <td class="tta3">50</td>
              <!--生命值!-->
              <td class="tta3">18</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/GbetoIcon.png" alt="" /><nuxt-link
                  to="/units/Gbeto"
                  >飛刀女獵手</nuxt-link
                >
              </td>
              <td class="tta3">30</td>
              <!--生命值!-->
              <td class="tta3">10</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">5</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">6</td>
              <!--視野!-->
              <td class="tta3">1.25</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="~assets/GbetoIcon.png" alt="" /><nuxt-link
                  to="/units/Gbeto"
                  >精銳飛刀女獵手</nuxt-link
                >
              </td>
              <td class="tta3">45</td>
              <!--生命值!-->
              <td class="tta3">13</td>
              <!--攻擊!-->
              <td class="tta3">0/0</td>
              <!--防禦!-->
              <td class="tta3">6</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">7</td>
              <!--視野!-->
              <td class="tta3">1.25</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Karambitwarrioricon.png"
                  alt=""
                /><nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link>
              </td>
              <td class="tta3">30</td>
              <!--生命值!-->
              <td class="tta3">6</td>
              <!--攻擊!-->
              <td class="tta3">0/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
            </tr>
            <tr>
              <td class="tta1">
                <img
                  class="gg"
                  src="~assets/Karambitwarrioricon.png"
                  alt=""
                /><nuxt-link to="/units/Karambit_Warrior"
                  >精銳爪刀勇士</nuxt-link
                >
              </td>
              <td class="tta3">40</td>
              <!--生命值!-->
              <td class="tta3">7</td>
              <!--攻擊!-->
              <td class="tta3">1/1</td>
              <!--防禦!-->
              <td class="tta3">0</td>
              <!--射程!-->
              <td class="tta3">2.03</td>
              <!--射速!-->
              <td class="tta3">3</td>
              <!--視野!-->
              <td class="tta3">1.2</td>
              <!--速度!-->
            </tr>
          </table>
        </div>
        <h3>相關科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tunitcc" style="width: 15%;">
                <nuxt-link to="/techs">科技</nuxt-link>
              </td>
              <td class="tunitcc" style="width: 10%;">時代</td>
              <td class="tunitcc" style="width: 15%;">成本</td>
              <td class="tunitcc">影響</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img class="gg" src="~assets/Tracking.jpg" alt="" /><nuxt-link
                  to="/techs/Tracking"
                  >追蹤技術</nuxt-link
                >
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">50F</td>
              <td class="tunitc6">步兵+2視野</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img class="gg" src="~assets/Squires.jpg" alt="" /><nuxt-link
                  to="/techs/Squires"
                  >護衛</nuxt-link
                >
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">100F</td>
              <td class="tunitc6">步兵速度+10%</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img class="gg" src="~assets/Arson.jpg" alt="" /><nuxt-link
                  to="/techs/Arson"
                  >縱火</nuxt-link
                >
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">150F 50G</td>
              <td class="tunitc6">
                步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_Standard_Building"
                  >標準建築</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img class="gg" src="~assets/Forging.jpg" alt="" /><nuxt-link
                  to="/techs/Forging"
                  >鍛造</nuxt-link
                >
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">150F</td>
              <td class="tunitc6">步兵攻擊+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Ironcasting.jpg"
                  alt=""
                /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">220F 120G</td>
              <td class="tunitc6">步兵攻擊+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Blastfurnace.jpg"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">275F 225G</td>
              <td class="tunitc6">步兵攻擊+2。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Scalemailarmor.jpg"
                  alt=""
                /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link>
              </td>
              <td class="tunitc4">封建</td>
              <td class="tunitc5">100F</td>
              <td class="tunitc6">步兵護甲+1/+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Chainmailarmor.jpg"
                  alt=""
                /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link>
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">200F 100G</td>
              <td class="tunitc6">步兵護甲+1/+1。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Platemailarmor.jpg"
                  alt=""
                /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">300F 150G</td>
              <td class="tunitc6">步兵護甲+1/+2。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
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
                <img class="gg" src="~assets/Heresy.png" alt="" /><nuxt-link
                  to="/techs/Heresy"
                  >異端邪說</nuxt-link
                >
              </td>
              <td class="tunitc4">城堡</td>
              <td class="tunitc5">1000G</td>
              <td class="tunitc6">
                被<nuxt-link to="/elements/Conversion">招降</nuxt-link
                >的單位/<nuxt-link to="/building">建築物</nuxt-link
                >立即死亡/毀壞)。
              </td>
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
              <td class="tunitc6">
                單位對僧侶(<nuxt-link to="/units/Missionary">傳教士</nuxt-link
                >)的招降更具抵抗力。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  class="gg"
                  src="~assets/Conscription.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>
              </td>
              <td class="tunitc4">帝王</td>
              <td class="tunitc5">150F 150G</td>
              <td class="tunitc6">
                軍營、靶場、<nuxt-link to="/building/Stable">馬廄</nuxt-link
                >、城堡訓練部隊速度+33%。
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
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Royal_Heirs">皇族血脈</nuxt-link>
              </td>
              <td class="tunitc5">300F 300G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
                >訓練速度加倍(8秒變4秒)。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/CastleAgeUnique.png"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Goths">哥德</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link>
              </td>
              <td class="tunitc5">450F 250G</td>
              <td class="tunitc6">
                軍營可以訓練<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                >。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/CastleAgeUnique.png"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Vikings">維京</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Chieftains">酋長</nuxt-link>
              </td>
              <td class="tunitc5">400F 300G</td>
              <td class="tunitc6">
                步兵對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
                >攻擊+5，對<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link
                >攻擊+2。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/Unique-tech.jpg"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link>
              </td>
              <td class="tunitc5">450F 750G</td>
              <td class="tunitc6">步兵攻擊+4。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/Unique-tech.jpg"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Bearded_Axe">倒鉤斧</nuxt-link>
              </td>
              <td class="tunitc5">400F 400G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
                >攻擊距離+1。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/Unique-tech.jpg"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Goths">哥德</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Perfusion">灌注士氣</nuxt-link>
              </td>
              <td class="tunitc5">400W 600G</td>
              <td class="tunitc6">軍營工作速度加倍。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/Unique-tech.jpg"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Incas">印加</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Couriers">信使</nuxt-link>
              </td>
              <td class="tunitc5">400F 200G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>、<nuxt-link
                  to="/units/Slinger"
                  >投石手</nuxt-link
                >和<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
                >的護甲+1/+2。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/Unique-tech.jpg"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Malay">馬來</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Forced_Levy">強制徵兵</nuxt-link>
              </td>
              <td class="tunitc5">1000F 600G</td>
              <td class="tunitc6">軍營步兵單位訓練不需花食物。</td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/Unique-tech.jpg"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/El_Dorado">黃金國</nuxt-link>
              </td>
              <td class="tunitc5">750F 450G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>+40 HP。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/Unique-tech.jpg"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Druzhina">王家侍從</nuxt-link>
              </td>
              <td class="tunitc5">1200F 500G</td>
              <td class="tunitc6">
                步兵單位有<nuxt-link to="/elements/Area_of_Effect"
                  >踐踏傷害</nuxt-link
                >。
              </td>
            </tr>
            <tr>
              <td class="tunitc6">
                <img
                  src="~assets/Unique-tech.jpg"
                  class="gg"
                  style="margin: 2px;"
                  alt=""
                /><nuxt-link to="/civs/Vikings">維京</nuxt-link>
              </td>
              <td class="tunitc4">
                <nuxt-link to="/techs/Berserkergang">狂戰士幫</nuxt-link>
              </td>
              <td class="tunitc5">450F 400G</td>
              <td class="tunitc6">
                <nuxt-link to="/units/Berserk">狂戰士</nuxt-link
                >回血速度提升(每分鐘回20 HP變每分鐘回40 HP)。
              </td>
            </tr>
          </table>

          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Infantryunitsbarracks.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有軍營裡可訓練的步兵單位。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Infantryunitscastle.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡裡可訓練的步兵單位。</em></p>
            </div>
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
