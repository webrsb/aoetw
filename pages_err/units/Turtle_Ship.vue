<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>龜甲船</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>龜甲船是<nuxt-link to="/civs/Koreans">韓國</nuxt-link>在<nuxt-link to="/games/aoc">征服者入侵</nuxt-link>資料片中的第二個特殊單位，在
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>的<nuxt-link to="/building/Dock">碼頭</nuxt-link>可以訓練。它是一艘重裝甲的火炮戰船。</p>
            <p>龜甲船可在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>升級為精銳龜甲船。</p>
          </div>
           <h3>戰術</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>龜甲船可以自己消滅一小隊的敵方船艦。它的主要弱點是射程短、速度慢、而且造價高。這意味著對付龜甲船的最好的選擇可能是<nuxt-link to="/units/Galleon">重型弩炮戰船</nuxt-link>，因為它們更便宜，更快，射程更遠，讓他們能用打帶跑磨死龜甲船。陸上的火砲和僧侶也是對付龜甲船的不錯選擇。</p>
            <p>玩家不要掉入韓國只建造龜甲船作為海軍的迷思。龜甲船還是應該跟其他船隻搭配，通常是<nuxt-link to="/units/Galleon">重型弩炮戰船</nuxt-link>，防止敵方使用打帶跑，而龜甲船的任務就是吸收大量傷害同時造成巨量傷害，所以龜甲船應該都是在最前線作戰。龜甲船有非常高的護甲，即使是對船有加成的攻擊(例如
              <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>、箭塔)，龜甲船的額外防禦加成(+8/+11(精銳))可抵銷這些加成傷害，龜甲船對快速火戰船有+1防禦。</p>
          </div>
          <h3>更多數據</h3>
          <div class="hrn1"></div>
          <div class="n1"></div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">劣勢與優勢</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">強勢(容易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link>(近距離)、在岸邊的<nuxt-link to="/building">建築物</nuxt-link>、在岸邊和淺灘的陸地單位。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Bombard_Cannon">火炮</nuxt-link>、<nuxt-link to="/units/Monk">僧侶</nuxt-link>、<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>、
                <nuxt-link to="/building/Castle">城堡</nuxt-link>、箭塔、<nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(淺灘處)</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">護甲</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Careening.jpg" alt=""><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>(護甲+0/+1)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Drydock.jpg" alt=""><nuxt-link to="/Dry_building/Dock">旱碼頭</nuxt-link>(+15%)
                <br/>
                <img src="~assets/CastleAgeUnique.png" class="gg" alt=""><nuxt-link to="/techs/Panokseon">板屋船</nuxt-link>(+15%，<nuxt-link to="/civs/Koreans">韓國</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">抗招降能力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Faith.jpg" width="22" alt=""><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                <br/>
                <img class="gg" src="~assets/Heresy.png" width="22" alt=""><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">訓練速度</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="~assets/Shipwright.jpg" alt=""><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>(+54%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">造價減少</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="~assets/Shipwright.jpg" alt=""><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>(-20%)</td>
            </tr>
          </table>
          <h3>剋龜甲船的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對龜甲船的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+40攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Bombardtowericon.png" alt=""><nuxt-link to="/building/Bombard_Tower">火炮塔</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/BombardCannonIcon.jpg" alt=""><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+17攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HalberdierIcon.jpg" alt=""><nuxt-link to="/units/Halberdier">戟兵</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+16攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/PikemanIcon.jpg" alt=""><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+12攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">精銳日本武士</nuxt-link>(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/GalleonAoE2.jpg" alt=""><nuxt-link to="/units/Galleon">重型弩炮戰船</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/LongboatIcon.jpg" alt=""><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link>(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/units/Keep">大型箭塔</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" style="margin: 2px;" src="~assets/CondottieroNewIcon.jpg"
                      alt=""><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>和同盟限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">日本武士</nuxt-link>(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><nuxt-link to="/units/Spearman">長槍兵</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""> <nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>→
                      <img class="gg" src="~assets/ImperialCamelIcon.jpg"
                      alt=""> <nuxt-link to="/Imperial units/Camel">帝王駱駝騎兵</nuxt-link>(後者<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/WarGalley.jpg" width="22" alt=""><nuxt-link to="/War_units/Galley">弩炮戰船</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/LongboatIcon.jpg" alt=""><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/units/Guard_Tower">防禦箭塔</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/Dockicon.png" width="22" alt=""><nuxt-link to="/building/Dock">海港</nuxt-link>(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Galley.jpg" alt=""><nuxt-link to="/units/Galley">戰船</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/Ballistaelephanticon.png" alt=""><nuxt-link to="/Ballista_unitsanimal/Elephant">弩炮象</nuxt-link>→
                      <img class="gg" src="~assets/Ballistaelephanticon.png"
                      alt=""><nuxt-link to="/Ballista_unitsanimal/Elephant">精銳弩炮象</nuxt-link>(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CaravelIcon2.jpg" alt=""><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link>(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/units/Watch_Tower">瞭望箭塔</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CaravelIcon2.jpg" alt=""><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CamelIcon.jpg" alt=""><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><nuxt-link to="/Genoese_units/Crossbowman">精銳熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><nuxt-link to="/Genoese_units/Crossbowman">熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/FastFireShipIcon.jpg" alt=""><nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/FireGalleyIcon.jpg" alt=""><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>→
                      <img class="gg" src="~assets/FireShipIcon.jpg"
                      width="22" alt=""><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+1攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>以下技術可讓以下單位對龜甲船有額外攻擊力
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <img src="~assets/Heatedshot.png" width="22" alt=""><nuxt-link to="/techs/Heated_Shot">預熱射擊</nuxt-link> 
                <div style="margin:12px 0px;"><strong>+13攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/units/Keep">大型箭塔</nuxt-link> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/units/Guard_Tower">防禦箭塔</nuxt-link> 
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/units/Watch_Tower">瞭望箭塔</nuxt-link> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Castleicon.png" width="22" alt=""><nuxt-link to="/building/Castle">城堡</nuxt-link> 
                  </li>
                  <li>
                    <img class="gg" src="~assets/Dockicon.png" width="22" alt=""><nuxt-link to="/building/Harbor">海港</nuxt-link>(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)</li>
                </ul>
              </div>
            </div>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：龜甲船對招降的抵抗力更強。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>訓練龜甲船需要先建造<nuxt-link to="/building/Castle">城堡</nuxt-link>。</li>
              <li>訓練龜甲船需要200木200金。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
            <ul>
              <li>訓練龜甲船需要180木180金。</li>
            </ul>
            <h3><em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em></h3>
            <ul>
              <li>訓練龜甲船不再需要先建造城堡了。</li>
            </ul>
          </div>
          <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>雖然是火藥單位，龜甲船沒有受到<nuxt-link to="/civs/Turks">土耳其</nuxt-link>的團隊加成影響(火藥單位訓練速度快20%)。</li>
              <li>龜甲船是四個單位之一沒有任何攻擊加成的(其他三個是<nuxt-link to="/units/Militia">民兵</nuxt-link>、<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>和
                <nuxt-link to="/units/Knight">騎士</nuxt-link>系)。</li>
              <li>精銳龜甲船是唯一近防和遠防是藉由升級後增加的單位。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>在1592年日本武士的襲擊下，韓國和中國的命運依靠打破韓國海峽的入侵者供應線，韓國海軍上將楊善信再龜甲船的幫助下贏得了兩次海上勝利。這些戰艦是歷史上第一艘裝甲戰艦，這些戰艦的外形低調，在它們的寬闊邊緣安裝了一連炮，它們的側面和頂部是圓形的，形狀像扁平的龜甲殼，它們不適合在高處使用
              但在水域相對平靜的沿海水域相當有用，日本艦艇在與它們作戰時處於劣勢，大多數導彈射擊都是從圓形的盔甲上看到的，它們沒有為敵方登機口提供開口，無人護航的敵方船隻很快就被禁用
              由他們的大砲。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle"><nuxt-link to="">龜甲船</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/TurtleShipIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="">單位介紹</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link>、<nuxt-link to="/units/Naval_Vessels">船</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4"><nuxt-link to="/civs/Koreans">韓國</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="~assets/Castle-age-reseach.jpg" alt=""><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" src="~assets/Dockicon.png" alt=""><nuxt-link to="/building/Dock">碼頭</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">50秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="">成本</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木材</td>
              <td class="unit4">180</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">180</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="">數據</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">200/300(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">50(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">爆炸範圍</td>
              <td class="unit4">0.5</td>
            </tr>
            <tr>
              <td class="unit3">射速</td>
              <td class="unit4">6.04秒/次</td>
            </tr>
            <tr>
              <td class="unit3">開火間隔</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">攻擊距離</td>
              <td class="unit4">6</td>
            </tr>
            <tr>
              <td class="unit3">準確率</td>
              <td class="unit4">100%</td>
            </tr>
            <tr>
              <td class="unit3">投射物速度</td>
              <td class="unit4">7.8</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">6/8(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">5/6(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">防禦類型</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>(+8/+11(精銳))
                <br/> <nuxt-link to="/armor/Armor_Class_Turtle_Ship">龜甲船</nuxt-link>(+1(精銳))
                <br/> <nuxt-link to="/armor/Armor_Class_Gunpowder_Unit">火藥單位</nuxt-link>
                <br/> <nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">0.9</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">8</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2" style="color: #fff">單位演變</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img class="gg" src="~assets/TurtleShipIcon.jpg" alt="">精銳龜甲船</td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">1000食物 800黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">65秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <nuxt-link to="/img/Turtleshipgroup.png"><img class="imgn hg" src="~assets/Turtleshipgroup.png" alt=""></nuxt-link> 
                <p><em>一群龜甲船。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/Turtle_ship.jpg"><img class="imgn hg" src="~assets/Turtle_ship.jpg" alt=""></nuxt-link> 
                <p><em>最初的龜甲船(1.0c版本之前)。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/Turtleship.png"><img class="imgn hg" src="~assets/Turtleship.png" alt=""></nuxt-link> 
                <p><em>龜甲船美術圖。</em>
                </p>
              </div>
              <div class="col-md-12">
                <div class="col-md-4"> <nuxt-link to="/img/Turtle_Ship_paint.jpg"><img class="imgn hg" src="~assets/Turtle_Ship_paint.jpg" alt=""></nuxt-link> 
                  <p><em>16世紀的龜甲船。</em>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
</template>
<script>
export default {
  layout: 'allunit',
  components: {
  }
}
</script>
<style>
</style>