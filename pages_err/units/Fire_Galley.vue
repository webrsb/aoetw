<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>火蒙衝</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>火蒙衝在封建時代時可以在碼頭中被訓練，當把<nuxt-link to="/units/Galley">戰船</nuxt-link>升級成<nuxt-link to="/War_units/Galley">弩砲戰船</nuxt-link>的時候，火蒙衝也會自動升級成
              <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>。</p>
            <p>火蒙衝、<nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>都是在<nuxt-link to="/games/ak">非洲王國</nuxt-link>資料片的時候一起推出的，使封建時代海戰才有更多的可看性，而不是只能看到一堆戰船的海戰。</p>
            <p>而<nuxt-link to="/civs/Vikings">維京</nuxt-link>成了全文明中唯一不能出火蒙衝的國家，這也使得在<nuxt-link to="/games/aoc">征服者入侵</nuxt-link>時代的海戰強國，搖身一變成海戰初期弱勢文明，在
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>遇到敵方的火蒙衝時，將顯得相當無助。</p>
            <p><strong>不可生產文明：</strong>維京</p>
          </div>
           <h3>戰術</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>因為火蒙衝有著很高的攻速，所以在前期能夠對<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>、碼頭造成嚴重的威脅，所以在早期的比賽中使用火蒙衝能夠很有效騷擾對方的海上單位。</p>
            <p>當火蒙衝與戰船一對一的時候，火蒙衝能夠輕鬆地打贏<nuxt-link to="/units/Galley">戰船</nuxt-link>。但是，如果是在大規模的交戰中，由於因為戰船的高射程，反而是戰船有著較大的優勢。</p>
            <p>火蒙衝也很容易受到<nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>的威脅，因為火蒙衝的攻擊距離很近，所以無法在爆炸前打沉
              <nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>。如果一艘<nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>能夠打沉兩艘以上的火蒙衝就是非常划算了！</p>
            <p>值得一提的是，<nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>沒辦法一擊必殺火蒙衝，需要搭配其他船隻來解決殘血的火蒙衝。</p>
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
                <nuxt-link to="/units/Galley">戰船</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>、箭塔、在岸邊的範圍單位。</td>
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
                  alt=""><nuxt-link to="/techs/Greek_Fire">希臘之火</nuxt-link>(+1，<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)</p>
              </td>
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
          <h3>剋火蒙衝的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對火蒙衝的額外傷害，按照傷殺力排列。
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
          </div>以下技術可讓以下單位對火蒙衝有額外攻擊力
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
              <li><nuxt-link to="/civs/Berbers">阿茲特克</nuxt-link>：火蒙衝訓練速度提高15%。</li>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：火蒙衝移動速度提高10％。</li>
              <li><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研究<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>便宜50％。</li>
              <li><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：火蒙衝開火速率快25%。</li>
              <li><nuxt-link to="/civs/Celts">賽爾特</nuxt-link>：在視野內的動物不會被轉化</li>
              <li><nuxt-link to="/civs/Chinese">中國</nuxt-link>：有利於火蒙衝科技在城堡/帝王便宜15%/20％</li>
              <li><nuxt-link to="/civs/Italians">義大利</nuxt-link>：研究<nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>，
                <nuxt-link to="/Dry building/Dock">旱碼頭</nuxt-link>和<nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>便宜50％，升級到弩砲戰船便宜50%。</li>
              <li><nuxt-link to="/civs/Persians">波斯</nuxt-link>：火蒙衝在封建/城堡/帝王時代訓練的速度提高10/15/20% <nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>和升級到
                <nuxt-link to="/units/Fire_Galley">火戰船</nuxt-link>的研發速度在城堡/帝王時代提高15%/20％。研究<nuxt-link to="/Dry building/Dock">旱碼頭</nuxt-link>的速度快20％。</li>
              <li><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>：火蒙衝訓練減少15%黃金成本，火蒙衝+10％HP。</li>
            </ul>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>的速度提高80%</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：火蒙衝對招降的抵抗力更強。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em></h3>
            <ul>
              <li>火蒙衝有5的遠防。</li>
              <li>火蒙衝有100的HP。</li>
              <li>4.8版本後火蒙衝有95的HP，並且會受到<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>的影響。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em></h3>
            <ul>
              <li>火蒙衝有4的遠防。</li>
              <li>5.4版本後火蒙衝再次有100的HP。</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">火蒙衝</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/FireGalleyIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><nuxt-link to="/units/Naval_Vessels">船</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">除了<nuxt-link to="/civs/Vikings">維京</nuxt-link>以外的所有文明</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="~assets/Feudal-age-reseach.jpg" alt=""><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
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
              <td class="unit4">60秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">成本</div>
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
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">1(遠攻)
                <br/>0(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">傷害加成</td>
              <td class="unit4">+3對<nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link> 
                <br/>+1對<nuxt-link to="/armor/Armor_Class_Turtle_Ship">龜甲船</nuxt-link> 
                <br/>+1對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
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
              <td class="unit3">投射物速度</td>
              <td class="unit4">3</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">4</td>
            </tr>
            <tr>
              <td class="unit3">防禦類型</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>(+6)</td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1.3</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">5</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="">單位演變</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img class="gg" src="~assets/FireShipIcon.jpg" alt=""><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/War-galley-research.jpg" alt="">230食物 100黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">50秒</td>
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
                <p><em>火戰船系列(火蒙衝在最左邊)。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/Firegalley (1).png"><img class="imgn hg" src="~assets/Firegalley (1).png" alt=""></nuxt-link> 
                <p><em>一群火蒙衝。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/Firegalley.png"><img class="imgn hg" src="~assets/Firegalley.png" alt=""></nuxt-link> 
                <p><em>各種火蒙衝(世紀帝國和征服者入侵資料片)。</em>
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