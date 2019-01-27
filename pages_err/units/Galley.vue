<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>戰船</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>戰船在<a href="/techsage/Feudal_Age">封建時代</a>的時候可以從<a href="/building/Dock">碼頭</a>中被訓練。戰船是小型快速船艦，主要用於偵查和攻擊其他弱小單位（漁船）。</p>
          </div>
           <h3>戰術</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>雖然戰船是一個相對弱小的海上單位，但是它如果數量夠多也能對敵人造成一定的傷害。當數量夠多的時候，他們能夠輕易地消滅敵人的漁船和其他弱小單位。</p>
            <br/>
            <p>戰船在封建時代也是運輸船護航的主力，能夠提供防守、分散式火力。但他們最主要還是拿來保護己方漁船、攻擊敵方漁船。生產戰船也並非是沒用的，當你升級科技之後，它就會晉升到更強大的弩砲戰船</p>
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
              <td class="tta4"><a href="/units/Transport_Ship">運輸船</a>、<a href="/units/Fishing_Ship">漁船</a>、在岸邊的建築物和近戰單位。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><a href="/units/Fire_Galley">火戰船</a>、箭塔、<a href="/building/Castle">城堡</a>、在岸邊的範圍單位。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle2">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Fletching.jpg" width="30" alt=""><a href="/techs/Fletching">箭羽</a>(+1)
                <br/>
                <img class="gg" src="~assets/Bodkinarrow.jpg" width="30" alt=""><a href="/techs/Bodkin_Arrow">錐狀箭頭</a>(+1)
                <br/>
                <img class="gg" src="~assets/Bracer.jpg" width="30" alt=""><a href="/techs/Bracer">護腕</a>(+1)
                <br/>
                <img class="gg" src="~assets/Chemistry.jpg" width="30" alt=""><a href="/techs/Chemistry">化學</a>(+1)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">射程</td>
              <td class="tta4">
                <img class="gg" src="~assets/Fletching.jpg" width="30" alt=""><a href="/techs/Fletching">箭羽</a>(+1)
                <br/>
                <img class="gg" src="~assets/Bodkinarrow.jpg" width="30" alt=""><a href="/techs/Bodkin_Arrow">錐狀箭頭</a>(+1)
                <br/>
                <img class="gg" src="~assets/Bracer.jpg" width="30" alt=""><a href="/techs/Bracer">護腕</a>(+1)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">命中率</td>
              <td class="tta4">
                <img class="gg" src="~assets/Ballistics.jpg" width="30" alt=""><a href="/techs/Ballistics">彈道學</a>:較易擊中移動目標</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">護甲</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Careening.jpg" alt=""><a href="/techs/Careening">傾側維修術</a>(護甲+0/+1)
                <br/>
                <img class="gg" src="~assets/CastleAgeUnique.png" style="margin: 2px;" alt=""><a href="/techs/Carrack">克拉克帆船</a>(護甲+1/+1，<a href="/civs/Portuguese">葡萄牙</a>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" style="margin: 2px;" src="~assets/Drydock.jpg" alt=""><a href="/Dry_building/Dock">旱碼頭</a>(+15%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">抗招降能力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Faith.jpg" width="22" alt=""><a href="/techs/Faith">忠誠信仰</a>
                <br/>
                <img class="gg" src="~assets/Heresy.png" width="22" alt=""><a href="/techs/Heresy">異端邪說</a> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">訓練速度</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="~assets/Shipwright.jpg" alt=""><a href="/techs/Shipwright">造船匠</a>(+54%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">造價減少</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="~assets/Shipwright.jpg" alt=""><a href="/techs/Shipwright">造船匠</a>(-20%)</td>
            </tr>
          </table>
          <h3>剋戰船的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對戰船的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+40攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Bombardtowericon.png" alt=""><a href="/building/Bombard_Tower">火炮塔</a> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/BombardCannonIcon.jpg" alt=""><a href="/units/Bombard_Cannon">火砲</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+17攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HalberdierIcon.jpg" alt=""><a href="/units/Halberdier">戟兵</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+16攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/PikemanIcon.jpg" alt=""><a href="/units/Pikeman">重裝長槍兵</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/GalleonAoE2.jpg" alt=""><a href="/units/Galleon">重型弩炮戰船</a> 
                    </li>
                    <li>
                      <img src="~assets/LongboatIcon.jpg" alt=""><a href="/units/Longboat">精銳維京大戰船</a>(<a href="/civs/Vikings">維京</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><a href="/units/Keep">大型箭塔</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><a href="/units/Spearman">長槍兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""> <a href="/Heavy_units/Camel">重裝駱駝騎兵</a>→
                      <img class="gg" src="~assets/ImperialCamelIcon.jpg"
                      alt=""> <a href="/Imperial units/Camel">帝王駱駝騎兵</a>(後者<a href="/civs/Indians">印度</a>限定)</li>
                    <li>
                      <img class="gg" src="~assets/WarGalley.jpg" width="22" alt=""><a href="/War_units/Galley">弩炮戰船</a> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/LongboatIcon.jpg" alt=""><a href="/units/Longboat">維京大戰船</a>(<a href="/civs/Vikings">維京</a>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><a href="/units/Guard_Tower">防禦箭塔</a> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/Dockicon.png" width="22" alt=""><a href="/building/Dock">海港</a>(<a href="/civs/Malay">馬來</a>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Galley.jpg" alt=""><a href="/units/Galley">戰船</a> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/Ballistaelephanticon.png" alt=""><a href="/Ballista_unitsanimal/Elephant">弩炮象</a>→
                      <img class="gg" src="~assets/Ballistaelephanticon.png"
                      alt=""><a href="/Ballista_unitsanimal/Elephant">精銳弩炮象</a>(<a href="/civs/Khmer">高棉</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CaravelIcon2.jpg" alt=""><a href="/units/Caravel">精銳卡拉維爾戰船</a>(<a href="/civs/Portuguese">葡萄牙</a>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><a href="/units/Watch_Tower">瞭望箭塔</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CaravelIcon2.jpg" alt=""><a href="/units/Caravel">卡拉維爾戰船</a>(<a href="/civs/Portuguese">葡萄牙</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CamelIcon.jpg" alt=""><a href="/units/Camel">駱駝騎兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><a href="/Genoese_units/Crossbowman">精銳熱那亞弩手</a>(<a href="/civs/Italians">義大利</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><a href="/Genoese_units/Crossbowman">熱那亞弩手</a>(<a href="/civs/Italians">義大利</a>限定)</li>
                    <li>
                      <img class="gg" src="~assets/FastFireShipIcon.jpg" alt=""><a href="/units/Fast_Fire_Ship">快速火戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/FireGalleyIcon.jpg" alt=""><a href="/units/Fire_Galley">火蒙衝</a>→
                      <img class="gg" src="~assets/FireShipIcon.jpg"
                      width="22" alt=""><a href="/units/Fire_Ship">火戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><a href="/Elite_units/Eagle_Warrior">精銳鷹勇士</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+1攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><a href="/units/Eagle_Warrior">鷹勇士</a> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>以下技術可讓以下單位對戰船有額外攻擊力
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <img src="~assets/Heatedshot.png" width="22" alt=""><a href="/techs/Heated_Shot">預熱射擊</a> 
                <div style="margin:12px 0px;"><strong>+13攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><a href="/units/Keep">大型箭塔</a> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><a href="/units/Guard_Tower">防禦箭塔</a> 
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt=""><a href="/units/Watch_Tower">瞭望箭塔</a> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Castleicon.png" width="22" alt=""><a href="/building/Castle">城堡</a> 
                  </li>
                  <li>
                    <img class="gg" src="~assets/Dockicon.png" width="22" alt=""><a href="/building/Harbor">海港</a>(<a href="/civs/Malay">馬來</a>限定)</li>
                </ul>
              </div>
            </div>
          </div>
           <h3>文明加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="/civs/Berbers">阿茲特克</a>：戰船訓練速度提高15%。</li>
              <li><a href="/civs/Berbers">柏柏</a>：戰船移動速度提高10％。</li>
              <li><a href="/civs/Byzantines">緬甸</a>：研究<a href="/techs/Faith">忠誠信仰</a>便宜50％。</li>
              <li><a href="/civs/Celts">賽爾特</a>：在視野內的動物不會被轉化</li>
              <li><a href="/civs/Chinese">中國</a>：有利於戰船科技在封建/城堡/帝王便宜10%/15%/20％</li>
              <li><a href="/civs/Italians">義大利</a>：研究<a href="/techs/Careening">傾側維修術</a>，
                <a
                href="/Dry building/Dock">旱碼頭</a>和<a href="/techs/Shipwright">造船匠</a>便宜50％，升級到弩砲戰船便宜50%。</li>
              <li><a href="/civs/Persians">波斯</a>：戰船訓練的速度在封建/城堡/帝王提高10%/15%/20%，<a href="/techs/Careening">傾側維修術</a>和弩砲戰船的研究速度在城堡/帝王提高15%/20％。研究
                <a
                href="/Dry building/Dock">旱碼頭</a>的速度快20％。</li>
              <li><a href="/civs/Portuguese">葡萄牙</a>：戰船訓練減少15%黃金成本，戰船+10％HP。</li>
              <li><a href="/civs/Saracens">薩拉森</a>：戰船攻擊速度提高25%。</li>
              <li><a href="/civs/Spanish">西班牙</a>：在兵工廠升級有利於船隻的科技不消耗黃金。</li>
              <li><a href="/civs/Turks">土耳其</a>：<a href="/techs/Chemistry">化學</a>免費。</li>
              <li><a href="/civs/Vikings">維京</a>：戰船在封建/城堡/帝王時代便宜15%/15%/20%。</li>
            </ul>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="/civs/Japanese">日本</a>：戰船擁有+50%的視野距離。</li>
              <li><a href="/civs/Malians">馬利</a>：研究<a href="/techs/Chemistry">化學</a>、<a href="/techs/Ballistics">彈道學</a>的速度提高80%</li>
              <li><a href="/civs/Teutons">條頓</a>：戰船對招降的抵抗力更強。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><a href="/games/aok">世紀帝國</a></em></h3>
            <ul>
              <li>戰船訓練時間為36秒。</li>
              <li><a href="/techs/Shipwright">造船匠</a>減少20%船隻木材成本。</li>
              <li><a href="/civs/Vikings">維京</a>:戰船成本便宜20%。</li>
            </ul>
            <h3><em><a href="/games/aoc">征服者入侵</a></em></h3>
            <ul>
              <li>戰船現在訓練時間為60秒。</li>
              <li>1.0版本<a href="/techs/Shipwright">造船匠</a>還可減少35%的船隻訓練時間。</li>
              <li>引入<a href="/techs/Heresy">異端邪說</a>。</li>
            </ul>
            <h3><em><a href="/games/aof">失落的帝國</a></em></h3>
            <ul>
              <li><a href="/civs/Vikings">維京</a>：戰船在封建/城堡/帝王時代便宜10%/15%/20%</li>
            </ul>
            <h3><em><a href="/games/ak">非洲王朝</a></em></h3>
            <ul>
              <li><a href="/civs/Vikings">維京</a>：戰船現在在封建/城堡/帝王時代便宜15%/15%/20%</li>
            </ul>
          </div>
           <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>戰船、<a href="/units/Fire_Galley">火蒙衝</a>、<a href="/units/Demolition_Raft">自爆筏</a>是遊戲中唯一共享升級科技的單位。</li>
              <li>在<a href="/games/aof">失落的帝國</a>資料片之前戰船是封建時代唯一的海軍戰艦。</li>
              <li>戰船會對作弊單位中的<a href="/units/hero/Saboteur">破壞者</a>有額外攻擊加成(從<a href="/games/aoc">征服者入侵</a>資料片開始)，因為該單位屬於船隻單位。</li>
            </ul>
          </div>
          <h3>歷史</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <div class="ien"><em>"在黑暗時代，大部分戰艦在歐洲消失了，因為除了拜占庭人之外沒有其他文明擁有維持任何海軍所需的財富和組織。幾個世紀過後，幾艘小型戰艦再次出現在西地中海。 這些主要是用於偵察和追捕騷擾海上貿易的海盜的槳式機動船。西方最好的軍艦是由拜占庭人建造和維護的，造船自古以來一直是拜占庭人他們的傳統。“"</em>
              <p
              style="text-align: right;margin-top: 10px;">-世紀帝國II手稿。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle"><a href="#">戰船</a>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/Galley.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="#">單位介紹</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><a href="/units/Naval_Vessels">船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">所有文明</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="~assets/Feudal-age-reseach.jpg" alt=""><a href="/techsage/Feudal_Age">封建時代</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" src="~assets/Dockicon.png" alt=""><a href="/building/Dock">碼頭</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">60秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="#">成本</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木</td>
              <td class="unit4">90</td>
            </tr>
            <tr>
              <td class="unit3">金</td>
              <td class="unit4">30</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="#">數據</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">120</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">6(遠攻)</td>
            </tr>
            <tr>
              <td class="unit3">傷害加成</td>
              <td class="unit4">+8對<a href="/armor/Armor_Class_Ship">船</a>
                <br/>+6對<a href="/armor/Armor_Class_Building">建築</a>
                <br/>+3對<a href="/armor/Armor_Class_Ram">衝撞車</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">射速</td>
              <td class="unit4">3.05秒/次</td>
            </tr>
            <tr>
              <td class="unit3">開火間隔</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">攻擊距離</td>
              <td class="unit4">5</td>
            </tr>
            <tr>
              <td class="unit3">準確率</td>
              <td class="unit4">100%</td>
            </tr>
            <tr>
              <td class="unit3">投射物速度</td>
              <td class="unit4">6</td>
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
              <td class="unit4"><a href="/armor/Armor_Class_Ship">船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1.43</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">7</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="#">單位演變</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img class="gg" src="~assets/WarGalley.jpg" alt=""><a href="/War_units/Galley">弩砲戰船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/War-galley-research.jpg" alt="">230食物100黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">50秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由莊晉瑋協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <a href="/img/Galleyline.png"><img class="imgn hg" src="~assets/Galleyline.png" alt=""></a> 
                <p><em>戰船系列(戰船在最左邊的)。</em>
                </p>
              </div>
              <div class="col-md-4"> <a href="/img/Galleyaoeii.png"><img class="imgn hg" src="~assets/Galleyaoeii.png" alt=""></a> 
                <p><em>一群戰船。</em>
                </p>
              </div>
              <div class="col-md-4"> <a href="/img/GalleyHD.png"><img class="imgn hg" src="~assets/GalleyHD.png" alt=""></a> 
                <p><em>各種戰船(世紀帝國和征服者入侵資料片)。</em>
                </p>
              </div>
              <div class="col-md-12">
                <div class="col-md-4"> <a href="/img/GalleyDLC.png"><img class="imgn hg" src="~assets/GalleyDLC.png" alt=""></a> 
                  <p><em>各種戰船(HD擴充資料片)。</em>
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