<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
          <h1>馬札爾驃騎兵</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>馬札爾驃騎兵是<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>的
              <nuxt-link to="/building/Castle">城堡</nuxt-link>中訓練。馬札爾驃騎兵是輕型快速的騎兵部隊對<nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link>有加成傷害。</p>
            <p>馬札爾驃騎兵雖貴為城堡兵但是在城堡時代時研發<nuxt-link to="/techs/Mercenaries">雇傭兵</nuxt-link>後即不需要黃金因此被稱為是垃圾兵，值得一提馬札爾驃騎兵跟騎士是差不多威力的。馬札爾驃騎兵可以在
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>升級為精銳馬札爾驃騎兵。</p>
          </div>
          <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>馬札爾驃騎兵不需要黃金(需研發<nuxt-link to="/techs/Mercenaries">雇傭兵</nuxt-link>)整體相對其他城堡兵便宜，所以在<nuxt-link to="/building/Castle">城堡</nuxt-link>多時量產上不是問題，移動和攻擊速度又快又有對攻城器單位加成，因此在對攻城器單位上是很理想的兵種，另外馬札爾驃騎兵整體又跟
                <nuxt-link to="/units/Knight">騎士</nuxt-link>差不多，且訓練快速因此在<nuxt-link to="/building/Castle">城堡</nuxt-link>多時<nuxt-link to="/Hustree/sar">翼騎兵</nuxt-link>(匈牙利輕騎兵)變的很多餘。</li>
              <li>馬札爾驃騎兵搭配馬扎爾馬弓騎兵是一大強力組合，馬札爾驃騎兵只需要肉(需研發<nuxt-link to="/techs/Mercenaries">雇傭兵</nuxt-link>)
                <nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link>需要黃金/木材，因此在資源使用上無衝突，<nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link>又怕攻城器單位而馬札爾驃騎兵又對攻城器單位有加成傷害，再者
                  <nuxt-link to="/units/Spearman">槍兵</nuxt-link>系本身又懼怕遠距離攻擊，因此這種配兵在馬扎爾裡屬於上選。</li>
              <li>馬札爾驃騎兵雖然在近戰上幾乎能不打贏任何單位，但是在考慮到成本上馬札爾驃騎兵還是相對有成本優勢。</li>
              <li>馬札爾驃騎兵幾本上在<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>文明裡近乎完全取代了<nuxt-link to="/Hustree/sar">翼騎兵</nuxt-link>(匈牙利輕騎兵)，但是對
                <nuxt-link to="/units/Monk">僧侶</nuxt-link>上還是用<nuxt-link to="/Hustree/sar">翼騎兵</nuxt-link>(匈牙利輕騎兵)來得比較好，因為<nuxt-link to="/Hustree/sar">翼騎兵</nuxt-link>(匈牙利輕騎兵)對
                  <nuxt-link to="/units/Monk">僧侶</nuxt-link>有強大的優勢(抗性/傷害加成)。</li>
            </ul>
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
              <td class="tta4"><nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link>、<nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>、<nuxt-link to="/units/Spearman">重裝長槍兵</nuxt-link>、<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>、
                <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>、<nuxt-link to="/Genoese_units/Crossbowman">熱那亞弩手</nuxt-link>、<nuxt-link to="/Teutonic_units/Knight">條頓武士</nuxt-link>、
                  <nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>、<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>、
                    <nuxt-link to="/units/Samurai">日本武士</nuxt-link>
              </td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生命值</td>
              <td class="tta4">
                <img class="gg" src="~assets/Bloodlines.png" width="30" alt=""><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>(+20)
                <br/>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Forging.jpg" width="30" alt=""><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Ironcasting.jpg" width="30" alt=""><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Blastfurnace.jpg" width="30" alt=""><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <img class="gg" src="~assets/Scalebardingarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Scale_Barding_Armor">騎兵鱗甲</nuxt-link>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Chainbardingarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Chain_Barding_Armor">騎兵鎖甲</nuxt-link>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Platebardingarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Plate_Barding_Armor">騎兵板甲</nuxt-link>(+1/+2)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Husbandry.jpg" width="30" alt=""><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>(+10%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">招降抵抗</td>
              <td class="tta4">
                <img class="gg" src="~assets/Heresy.png" width="30" alt=""><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生產速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">成本減免</td>
              <td class="tta4">
                <img class="gg" src="~assets/CastleAgeUnique.png" width="30" alt=""><nuxt-link to="/techs/Mercenaries">雇傭兵</nuxt-link>(訓練馬札爾驃騎兵不需要黃金)</td>
            </tr>
          </table>
          <h3>剋馬札爾驃騎兵的單位與建築</h3> 
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對馬札爾驃騎兵的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+32攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HalberdierIcon.jpg" alt=""><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+22攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/PikemanIcon.jpg" alt=""><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+18攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""><nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>→
                      <img class="gg" src="~assets/ImperialCamelIcon.jpg"
                      alt=""> <nuxt-link to="/Imperial_units/Camel">帝王駱駝騎兵</nuxt-link>(帝王駱駝騎兵是<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                    </li>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""> <nuxt-link to="/Elite_units/Cannon_Galleon">精銳火砲戰船</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+12攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link>(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">精銳日本武士</nuxt-link>(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">日本武士</nuxt-link>(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CamelIcon.jpg" alt=""><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
                    </li>
                    <li>
                      <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><nuxt-link to="/Genoese_units/Crossbowman">精銳熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><nuxt-link to="/Genoese_units/Crossbowman">熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><nuxt-link to="/Elite_units/Eagle_Warrior">精銳鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                </div>
              </div>以下技術可讓以下單位對馬札爾驃騎兵有額外攻擊力
              <div class="n1">
                <img class="gg" src="~assets/CastleAgeUnique.png" width="22" alt=""><nuxt-link to="/techs/Chieftains">酋長</nuxt-link> 
                <div width="22" style="margin:12px 0px;"><strong>+5攻擊</strong>(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)</div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/MilitiaIcon.jpg" alt=""><nuxt-link to="/units/Militia">民兵</nuxt-link>→
                    <img class="gg" src="~assets/ManAtArmsIcon.jpg"
                    width="22" alt=""> <nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                    <img class="gg" src="~assets/LongswordsManIcon.jpg"
                    alt=""> <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                    <img class="gg" src="~assets/2HandedswordsmanIcon.jpg"
                    alt=""> <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>→
                    <img class="gg" src="~assets/ChampionIcon.jpg"
                    alt=""> <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link> 
                  </li>
                  <li>
                    <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                    <img class="gg" src="~assets/PikemanIcon.jpg"
                    alt=""> <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link> 
                  </li>
                  <li>
                    <img class="gg" src="~assets/VBRSK.jpg" alt=""><nuxt-link to="/units/Berserk">狂戰士</nuxt-link>→
                    <img class="gg" src="~assets/VBRSK.jpg" alt=""> <nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link>(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)</li>
                  <li>
                    <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt=""> <nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(如果和<nuxt-link to="/civs/Italians">義大利</nuxt-link>同盟的話)</li>
                </ul>
              </div>
            </div>
          </div>
           <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/techs/Forging">鍛造</nuxt-link>、<nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>/<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>免費</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>、
                <nuxt-link to="/techs/Mercenaries">雇傭兵</nuxt-link>的研究時間，以及在城堡裡訓練馬札爾驃騎兵的速度(都快25%)。</li>
              <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>：<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>與<nuxt-link to="/techs/Husbandry">畜牧技術</nuxt-link>研發快20%。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：馬札爾驃騎兵對僧侶抵抗力更強。</li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>馬札爾驃騎兵也被稱為蒙古突騎近戰型。</li>
              <li>馬札爾驃騎兵因為功能上和生產成本跟肉馬一樣被稱為進階版肉馬。</li>
              <li>翼騎兵舊稱匈牙利輕騎兵馬扎爾城堡兵研發科技後也只需要80肉也比翼騎兵強名副其實的匈牙利輕騎兵。</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle" style="color: #fff">馬札爾驃騎兵</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/Magyar_Huszar_icon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4"><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
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
                <img class="gg" src="~assets/Castleicon.png" width="45" alt=""><nuxt-link to="/building/Castle">城堡</nuxt-link> 
                <tr>
                  <td class="unit3">訓練時間</td>
                  <td class="unit4">16秒</td>
                </tr>
                <tr>
                  <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                    <div class="unititle2" style="color: #fff">成本</div>
                  </td>
                </tr>
                <tr>
                  <td class="unit3">食物</td>
                  <td class="unit4">80</td>
                </tr>
                <tr>
                  <td class="unit3">黃金</td>
                  <td class="unit4">10</td>
                </tr>
                <tr>
                  <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                    <div class="unititle2" style="color: #fff">數據</div>
                  </td>
                </tr>
                <tr>
                  <td class="unit3">血量</td>
                  <td class="unit4">70/85(精銳)</td>
                </tr>
                <tr>
                  <td class="unit3">攻擊</td>
                  <td class="unit4">9/10(精銳)(近戰)</td>
                </tr>
                <tr>
                  <td class="unit3">攻擊加成</td>
                  <td class="unit4">對<nuxt-link to="/armor/Armor_Class_Siege_Weapon">攻城器單位</nuxt-link>+5/+8(精銳)
                    <br/>對<nuxt-link to="/armor/Armor_Class_Ram">衝撞車系</nuxt-link>+1/+2(精銳)</td>
                </tr>
                <tr>
                  <td class="unit3">攻擊速度</td>
                  <td class="unit4">1.83</td>
                </tr>
<tr><td class="unit3">近防</td>
                <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">2</td>
            </tr>
            <tr>
              <td class="unit3">裝甲類型</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Cavalry_Archer">騎兵</nuxt-link>
                <br/><nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1.5</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">5/6(精銳)</td>
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
                <img class="gg" src="~assets/Magyar_Huszar_icon.jpg" alt="">精銳馬札爾驃騎兵</td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">800食物600黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">60秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由熊協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <nuxt-link to="/img/AoF_Magyar_Huszar_All_Angles.jpg"><img class="imgn hg" src="~assets/AoF_Magyar_Huszar_All_Angles.jpg" alt=""></nuxt-link> 
                <p><em>一群馬札爾驃騎兵。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/A.png"><img class="imgn hg" src="~assets/A.png" alt=""></nuxt-link> 
                <p><em>4.4版的馬札爾驃騎兵。</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/Maygar_Huszar_Old.png"><img class="imgn hg" src="~assets/Maygar_Huszar_Old.png" alt=""></nuxt-link> 
                <p><em>2.2版前的馬札爾驃騎兵。</em>
                </p>
              </div>
              <div class="col-md-12">
                <div class="col-md-4"> <nuxt-link to="/img/Magyar_Huszar_Concept_Art.jpg"><img class="imgn hg" src="~assets/Magyar_Huszar_Concept_Art.jpg" alt=""></nuxt-link> 
                  <p><em>真實世界的馬札爾驃騎兵的畫。</em>
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