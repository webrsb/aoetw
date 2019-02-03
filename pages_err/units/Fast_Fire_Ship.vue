<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>快速火戰船</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>快速火戰船在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>的碼頭可以訓練。這是一艘有"火焰噴射器"的船，對其他的船隻有攻擊加成，但必須靠近敵艦才能進行攻擊。。</p>
            <p>與火戰船相比，快速火戰船的傷害更高護甲也更厚。快速火戰船的速度也比火戰船快，可以追上<nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>，但是攻擊速度的話則還是跟火戰船一模一樣。</p>
          </div>
           <h3>戰術</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>儘管快速火戰船在與<nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>的對抗中表現更好，但是重型弩炮戰船的低成本和長射程，可以增加偵察的安全性和降低成本
              在大規模的對抗中，重型弩炮戰船可以輕易地運用長射程擊敗一群快速火戰船，但是如果得到其他海軍的適當支援，一支重型火戰船可以輕易地將一群重型弩炮戰船擊沉。快速火戰船在面對
              <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>和<nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>時也十分脆弱。</p>
            <p>。</p>
          </div>
           <h3>文明可訓練與否</h3> 
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-ok okc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">可訓練</span></strong></h4>  <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、 <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、 <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
                <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、 <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、 <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
                  <nuxt-link to="/civs/Goths">哥德</nuxt-link>、 <nuxt-link to="/civs/Incas">印加</nuxt-link>、 <nuxt-link to="/civs/Italians">義大利</nuxt-link>、 <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
                    <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、 <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、 <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、 <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
                      <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、 <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、 <nuxt-link to="/civs/Persians">波斯</nuxt-link>、 <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
                        <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、 <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。 <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-remove noc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">不可訓練</span></strong></h4>  <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、 <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、 <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
                <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、 <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、 <nuxt-link to="/civs/Indians">印度</nuxt-link>、 <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
                  <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、 <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、 <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
                    <nuxt-link to="/civs/Vikings">維京</nuxt-link>。</div>
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
              <td class="tta4"><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>、<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>、在岸邊的建築物和近戰單位、
                <nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>、<nuxt-link to="/units/Cannon_Galleon">火炮戰船</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>、<nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>、
                <nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>、箭塔、<nuxt-link to="/building/Castle">城堡</nuxt-link>、在岸邊的<nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link>單位。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">射程</td>
              <td class="tta4">
                <p>
                  <img class="gg" style="margin: 2px;" width="22" src="~assets/CastleAgeUnique.png"
                  alt=""><nuxt-link to="/techs/Greek_Fire">希臘之火</nuxt-link>(+1，<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">護甲</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Careening.jpg" alt=""><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>(護甲+0/+1)
                <br/>
              </td>
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
          <h3>剋快速火戰船的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對快速火戰船的額外傷害，按照傷殺力排列。
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
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/building/Keep">大型箭塔</nuxt-link> 
                    </li>
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
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link> 
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
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link> 
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
          </div>以下技術可讓以下單位對快速火戰船有額外攻擊力
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <img src="~assets/Heatedshot.png" width="22" alt=""><nuxt-link to="/techs/Heated_Shot">預熱射擊</nuxt-link> 
                <div style="margin:12px 0px;"><strong>+13攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/building/Keep">大型箭塔</nuxt-link> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link> 
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link> 
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
              <li><nuxt-link to="/civs/Berbers">阿茲特克</nuxt-link>：快速火戰船訓練速度提高15%。</li>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：快速火戰船移動速度提高10％。</li>
              <li><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：快速火戰船開火速率快25%。</li>
              <li><nuxt-link to="/civs/Italians">義大利</nuxt-link>：研究<nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>，
                <nuxt-link to="/Dry building/Dock">旱碼頭</nuxt-link>和<nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>便宜50％。</li>
              <li><nuxt-link to="/civs/Persians">波斯</nuxt-link>：快速火戰船在帝王時代訓練的速度提高20%，研究<nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>和
                <nuxt-link to="/Dry building/Dock">旱碼頭</nuxt-link>的速度快20％。</li>
            </ul>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>的速度提高80%</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：快速火戰船對招降的抵抗力更強。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><nuxt-link to="/games/aok">世紀帝國</nuxt-link></em></h3>
            <ul>
              <li>快速火戰船的HP為120。</li>
              <li>快速火戰船有8的遠防並對反船隻攻擊有額外+6護甲。</li>
              <li><nuxt-link to="/civs/Vikings">維京</nuxt-link>:火戰船木材成本便宜20%。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>快速火戰船現在有8的遠防並對反船隻攻擊有額外+7護甲。</li>
              <li>1.0版本<nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>還可減少35%的船隻訓練時間。</li>
              <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
            <ul>
              <li>快速火戰船現在的HP為140。</li>
              <li><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>:引入<nuxt-link to="/techs/Greek_Fire">希臘之火</nuxt-link>。</li>
            </ul>
            <h3><em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em></h3>
            <ul>
              <li>火快速戰船現在有9的遠防並對反船隻攻擊有額外+9護甲。</li>
              <li>引入<nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>。</li>
              <li>4.8版本後快速火戰船會受到<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>的影響。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em></h3>
            <ul>
              <li>快速火戰船有8的遠防。</li>
            </ul>
          </div>
           <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>火戰船是遊戲中唯一沒有整數攻擊範圍的單位。</li>
              <li>火戰船和<nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>是遊戲中唯二攻擊會同時造成近戰和遠程傷害的單位。</li>
              <li>火戰船會對作弊單位中的<nuxt-link to="/units/hero/Saboteur">破壞者</nuxt-link>有額外攻擊加成(從<nuxt-link to="/games/aoc">征服者入侵</nuxt-link>資料片開始)，因為該單位屬於船隻單位。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>火戰船在過去幾年裡得到了改進，以提高其速度，機動性和護甲。君士坦丁堡數百年來由快速火戰船組成的海軍捍衛了數個世紀之久。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle" style="color: #fff">快速火戰船</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/FireShipIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2" style="color: #fff">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><nuxt-link to="/units/Naval_Vessels">船</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">請看介紹</td>
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
              <td class="unit4">36秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2" style="color: #fff">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木</td>
              <td class="unit4">75</td>
            </tr>
            <tr>
              <td class="unit3">金</td>
              <td class="unit4">45</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2" style="color: #fff">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">140</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">3(遠攻)
                <br/>1(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">傷害加成</td>
              <td class="unit4">+4對<nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link> 
                <br/>+3對<nuxt-link to="/armor/Armor_Class_Turtle_Ship">龜甲船</nuxt-link> 
                <br/>+3對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">射速</td>
              <td class="unit4">0.25秒/次</td>
            </tr>
            <tr>
              <td class="unit3">開火間隔</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">攻擊距離</td>
              <td class="unit4">2.49</td>
            </tr>
            <tr>
              <td class="unit3">發射速度</td>
              <td class="unit4">3</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">8</td>
            </tr>
            <tr>
              <td class="unit3">防禦類型</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>(+9)</td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1.43</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">6</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2" style="color: #fff">單位演變</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">從升級</td>
              <td class="unit4">
                <img class="gg" src="~assets/FireShipIcon.jpg" alt=""><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>
              </td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <nuxt-link to="/img/Fireline.png"><img class="imgn hg" src="~assets/Fireline.png" alt=""></nuxt-link> 
                <p><em>火戰船系列(快速火戰船在右邊)。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/Fastfireship.png"><img class="imgn hg" src="~assets/Fastfireship.png" alt=""></nuxt-link> 
                <p><em>一群快速火戰船。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/FFireShipHD.png"><img class="imgn hg" src="~assets/FFireShipHD.png" alt=""></nuxt-link> 
                <p><em>各種快速火戰船(世紀帝國和征服者入侵資料片)。</em>
                </p>
              </div>
              <div class="col-md-12">
                <div class="col-md-4"> <nuxt-link to="/img/FFireShipDLC.png"><img class="imgn hg" src="~assets/FFireShipDLC.png" alt=""></nuxt-link> 
                  <p><em>各種快速火戰船(HD擴充資料片)。</em>
                  </p>
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