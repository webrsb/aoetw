<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>火炮戰船</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>火炮戰船在帝王時代的碼頭可以訓練。要訓練火炮戰船得先研發火炮戰船科技。</p>
          </div>
           <h3>戰術</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>火炮戰船的射程遠比城堡和火炮塔遠，而且對建築物有額外傷害加成，可說是"海上的火炮"(速度比火炮稍快)。火炮戰船有不錯的傷害，但是緩慢的開火速率，砲彈飛行時間長，有最小射程限制等缺點讓他們對船隻的攻擊幾乎沒有抵抗能力，尤其是
              <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>。</p>
            <p>當火炮戰船在執行岸邊轟炸城堡和箭塔時，火炮戰船身邊應該要有<nuxt-link to="/War_units/Galley">弩炮戰船</nuxt-link>和<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>做護衛保護。</p>
            <p>一般來說，火炮戰船主要用來清理敵方海岸線的建築物，偶爾騷擾範圍內的地面單位。他們不應該用來對付敵方的船隻，而且如果海上威脅沒有完全消失的話，他們很容易就會被消滅。</p>
            <p>西班牙的火炮戰船比其他文明的射速要快(每秒飛行7格而不是每秒飛行1.39格)，而且有<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>加成可以更容易擊中移動目標。</p>
          </div>
           <h3>文明可訓練與否</h3> 
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-ok okc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">可訓練</span></strong></h4>  <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、 <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、 <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、 <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、 <nuxt-link to="/civs/Chinese">中國</nuxt-link>、 <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
                  <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、 <nuxt-link to="/civs/Goths">哥德</nuxt-link>、 <nuxt-link to="/civs/Incas">印加</nuxt-link>、 <nuxt-link to="/civs/Indians">印度</nuxt-link>、
                    <nuxt-link to="/civs/Italians">義大利</nuxt-link>、 <nuxt-link to="/civs/Japanese">日本</nuxt-link>、 <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、 <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
                      <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、 <nuxt-link to="/civs/Malay">馬來</nuxt-link>、 <nuxt-link to="/civs/Malians">馬利</nuxt-link>、 <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
                        <nuxt-link to="/civs/Persians">波斯</nuxt-link>、 <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、 <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
                          <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、 <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、 <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。
                            <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、 <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、 <nuxt-link to="/civs/Vikings">維京</nuxt-link>。</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-remove noc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">不可訓練</span></strong></h4>  <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、 <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、 <nuxt-link to="/civs/Incas">印加</nuxt-link>、
                <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>。</div>
            </div>
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
              <td class="tta4"><nuxt-link to="/building">建築物</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Naval_Vessels">船</nuxt-link>、<nuxt-link to="/units/Bombard_Cannon">火炮</nuxt-link>、
                <nuxt-link to="/units/Monk">僧侶</nuxt-link>。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">範圍</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Unique-tech.jpg" alt=""><nuxt-link to="/techs/Artillery">砲兵</nuxt-link>(+2，<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">命中率</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Unique-tech.jpg" alt=""><nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>(火藥單位對移動目標命中率提升，<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">護甲</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Careening.jpg" alt=""><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>(護甲+0/+1)
                <br/>
                <img class="gg" src="~assets/CastleAgeUnique.png" style="margin: 2px;" alt=""><nuxt-link to="/techs/Carrack">克拉克帆船</nuxt-link>(護甲+1/+1，<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Drydock.jpg" alt=""><nuxt-link to="/Dry_building/Dock">旱碼頭</nuxt-link>(+15%)</td>
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
           <h3>剋火炮戰船的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對火炮戰船的額外傷害，按照傷殺力排列。
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
                  <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/GalleonAoE2.jpg" alt=""><nuxt-link to="/units/Galleon">重型弩炮戰船</nuxt-link> 
                    </li>
                    <li>
                      <img src="~assets/LongboatIcon.jpg" alt=""><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link>(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)</li>
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
          </div>以下技術可讓以下單位對火炮戰船有額外攻擊力
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
           <h3>文明加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：火炮戰船移動速度快10%。</li>
              <li><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>花費便宜50%。</li>
              <li><nuxt-link to="/civs/Chinese">中國</nuxt-link>：有利於火炮戰船的科技在帝王時代便宜20％。</li>
              <li><nuxt-link to="/civs/Italians">義大利</nuxt-link>：訓練火炮戰船成本便宜20%。研究<nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>，
                <nuxt-link to="/Dry building/Dock">旱碼頭</nuxt-link>和<nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>便宜50％。升級成精銳火炮戰船的花費便宜50%。</li>
              <li><nuxt-link to="/civs/Persians">波斯</nuxt-link>：火炮戰船訓練的速度在帝王提高20%。研究<nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>、
                <nuxt-link to="/Dry building/Dock">旱碼頭</nuxt-link>和升級精銳火炮戰船的速度快20％。</li>
              <li><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>：訓練火炮戰船的黃金花費減少15%，火炮戰船HP+10％。</li>
              <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：火炮戰船自身有彈道學加成而且砲彈速度更快。</li>
              <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>：火炮戰船HP+25%。升級精銳火炮戰船話費-50%。</li>
              <li><nuxt-link to="/civs/Vikings">維京</nuxt-link>：火炮戰船訓練的費用在帝王減少20%。</li>
            </ul>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>：火炮戰船訓練速度快20%。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：火炮戰船對招降的抵抗力更強。</li>
            </ul>
          </div>
           <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><nuxt-link to="/games/aok">世紀帝國</nuxt-link></em></h3>
            <ul>
              <li><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>減少20%船隻木材成本。</li>
              <li><nuxt-link to="/civs/Britons">不列顛</nuxt-link>:不能訓練火炮戰船。</li>
              <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>:火炮戰船的HP+50%。</li>
            </ul>
             <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>1.0版本<nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>還可減少35%的船隻訓練時間。</li>
              <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
              <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>:可以訓練火炮戰船。</li>
              <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>:火炮戰船受彈道學加成而且砲彈速度更快。</li>
              <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>:引進<nuxt-link to="/techs/Artillery">砲兵</nuxt-link>，火炮戰船現在HP+25%。</li>
            </ul>
             <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
            <ul>
              <li><nuxt-link to="/civs/Britons">不列顛</nuxt-link>:可以訓練火炮戰船了。</li>
              <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>:火炮戰船從科技樹移除。</li>
              <li><nuxt-link to="/civs/Italians">義大利</nuxt-link>:火炮戰船便宜15%。</li>
              <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>:火炮戰船自身有彈道學(不須研發彈道學)而砲彈速度變為7格/秒(~3.6倍快)。</li>
            </ul>
             <h3><em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em></h3>
            <ul>
              <li><nuxt-link to="/civs/Italians">義大利</nuxt-link>:4.8版本後火炮戰船現在便宜20%。</li>
            </ul>
          </div>
           <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>火炮戰船是唯一一個可以升級的非特殊火藥單位。</li>
              <li>火炮戰船和精銳火炮戰船共用一個頭像。他們也是唯一非特殊單位這麼做的。</li>
            </ul>
          </div>
           <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>大砲在十四世紀首次被裝在船上。這些大砲被安裝在船尾或船頭可以朝前面或後面的敵人發射。小型武器被安裝在軌道上，用於對付敵方船員。第一艘為戰鬥裝載大砲而建造的船出現在1406年。在船上有效地安裝大量大砲需要很多年才能解決。它需要新的設計來彌補船側的槍支的重量。解決方案的設計必須讓槍支能夠安全地射擊和重新裝填。粉末的儲存和取用也需要安全程序。真正能上戰場的火炮戰船直到中世紀晚期才出現。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle"><nuxt-link to="">火炮戰船</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/CannonGalleonIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
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
              <td class="unit4">請看分類</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="~assets/Imperial-age-research.jpg" alt=""><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
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
              <td class="unit4">46秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="">成本</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木</td>
              <td class="unit4">200</td>
            </tr>
            <tr>
              <td class="unit3">金</td>
              <td class="unit4">150</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="">數據</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">120</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">35(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">傷害加成</td>
              <td class="unit4">+200對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
                <br/>+40對<nuxt-link to="/armor/Armor_Class_Siege_Weapon">攻城武器</nuxt-link>
                <br/>+15對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
                <br/>+15對<nuxt-link to="/armor/Armor_Class_Archer">弓兵</nuxt-link>
                <br/>+15對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">射速</td>
              <td class="unit4">10秒/次</td>
            </tr>
            <tr>
              <td class="unit3">開火間隔</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">攻擊距離</td>
              <td class="unit4">13</td>
            </tr>
            <tr>
              <td class="unit3">最小攻擊距離</td>
              <td class="unit4">3</td>
            </tr>
            <tr>
              <td class="unit3">準確率</td>
              <td class="unit4">50%</td>
            </tr>
            <tr>
              <td class="unit3">投射物速度</td>
              <td class="unit4">1.95</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">6</td>
            </tr>
            <tr>
              <td class="unit3">防禦類型</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>
                <br/> <nuxt-link to="/armor/Armor_Class_Gunpowder_Unit">火藥單位</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1.1</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">15</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2" style="color: #fff">單位演變</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練所需科技</td>
              <td class="unit4">
                <img class="gg" src="~assets/Cannongalleonresearch.png" alt="">火炮戰船</td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""><nuxt-link to="/units/Elite_Cannon_Galleon">精銳火炮戰船</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/Elite-cannon-galleon-resear.jpg" alt="">525木材 500黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">30秒</td>
            </tr>
            <tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
           <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <nuxt-link to="/img/Cannongalleon.png"><img class="imgn hg" src="~assets/Cannongalleon.png" alt=""></nuxt-link> 
                <p><em>一群火炮戰船。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/CGHD.png"><img class="imgn hg" src="~assets/CGHD.png" alt=""></nuxt-link> 
                <p><em>各種火炮戰船(世紀帝國和征服者入侵資料片)。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/CGDLC.png"><img class="imgn hg" src="~assets/CGDLC.png" alt=""></nuxt-link> 
                <p><em>各種火炮戰船(HD擴充資料片)。</em>
                </p>
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