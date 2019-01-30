<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>聖騎兵</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">聖騎兵或稱甲冑騎兵，是<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>的特殊單位。對<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>有大量加成傷害的騎兵單位。聖騎兵能夠在
            <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>升級成精銳聖騎兵。</div>
           <h3>戰術</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>由於<nuxt-link to="/techs/Logistica">後勤學</nuxt-link>的踐踏傷害、對步兵有大量加成傷害以及騎兵加成抵免，讓聖騎兵成為弱點最少的單位。</li>
              <li>騎兵加成抵免能夠降低對騎兵加成的傷害，例如<nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>+18對騎兵加成傷害攻擊擁有(+12/+16(精銳)</li>
              <li>騎兵加成抵免的聖騎兵，只剩下微乎其微的加成優勢。連擁有+32對騎兵加成傷害的<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>也抵免一半的加成傷害。</li>
              <li>後帝王時期的聖騎兵攻擊力僅有14，攻擊力甚至低於馬利的<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>，但是+18對
                <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>加成以及大量<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>加成抵免使聖騎兵整體戰鬥能力非常優秀。此外踐踏傷害與高攻速讓聖騎兵能夠與
                  <nuxt-link to="/units/Paladin">遊俠</nuxt-link>、<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>等重騎兵的混戰中製造大量的傷害，但最好避免這種優勢較小的戰鬥，讓聖騎兵與步兵戰鬥發揮更大的優勢。</li>
              <li>聖騎兵非常優秀，但造價昂貴且生產不易，一般來說不常看到。</li>
            </ul>
          </div>
           <h3>反制</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><strong><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>:</strong>
              </li>
              <p>雖然戟兵打聖騎兵乍聽之下很不切實際，但他仍是對抗聖騎兵的適當選擇，因為戟兵是便宜又可以大量生產的，雖然聖騎兵對各種<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>都有誇張的傷害加成，並且很容易在一對一中獲勝。一名戟兵只能承受聖騎兵的三刀攻擊，而缺乏
                <nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link>的<nuxt-link to="/civs/Goths">哥德</nuxt-link>戟兵只能承受兩刀。</p>
              <p>對騎兵有加成傷害的<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>則對聖騎兵表現不佳，每次攻擊只有7點的傷害，一對一戰鬥中完全被秒殺，即使在大規模的對陣中，槍隊長可以利用其1的射程優勢，也沒有機會。</p>
            </ul>
            <ul>
              <li><strong>重騎兵:</strong>
              </li>
              <p>如果有足夠的食物和黃金，重騎兵可能是反制聖騎兵最好的策略之一。就算有<nuxt-link to="/techs/Logistica">踐踏</nuxt-link>傷害，
                <nuxt-link to="/units/Paladin">遊俠</nuxt-link>仍可以輕騎解決聖騎兵，就算是大規模作戰也一樣，而全面升級的騎兵(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
                  <nuxt-link to="/civs/Chinese">中國</nuxt-link>或是<nuxt-link to="/civs/Turks">土耳其</nuxt-link>)也能在一對一的戰鬥中獲勝，但由於踐踏傷害，大規模戰鬥就會輸。</p>
              <p>當然其他特殊的重騎兵，<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>、<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>或是
                <nuxt-link to="/War_unitsanimal/Elephant">波斯戰象</nuxt-link>就不用說了。</p>
            </ul>
            <ul>
              <li><strong><nuxt-link to="/units/Archer_Units">遠程單位</nuxt-link>:</strong>
              </li>
              <p>除了駱駝之外，聖騎兵是遠防最弱的騎兵單位。所以用常理判斷，聖騎兵相當害怕弓箭手。</p>
              <p><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>、<nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>與
                <nuxt-link to="/Heavy_Cavalry_units/Archer">重裝馬弓騎兵</nuxt-link>或是其他的特殊射手單位，通常都可以解決聖騎兵，即使最弱的<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>對聖騎兵都有2的傷害。</p>
              <p>然後聖騎兵憑著高血量與攻擊力仍然可以威脅小規模的遠程單位，所以最好要聚集40人以上或是有騎兵、戟兵保護。</p>
            </ul>
            <ul>
              <li><strong><nuxt-link to="/units/Monk">僧侶</nuxt-link>:</strong>
              </li>
              <p>由於聖騎兵的成本相當高，所以很有可能成為敵方僧侶的首要目標。</p>
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
              <td class="tta4"><nuxt-link to="/units/Skirmisher">矛兵系列</nuxt-link>、
                <nuxt-link to="/units/Infantry_Units">步兵系列</nuxt-link>、<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/War_unitsanimal/Elephant">戰象</nuxt-link>、大量<nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link>、
                <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>、<nuxt-link to="/units/Knight">騎士</nuxt-link>
              </td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Forging.jpg" width="30" alt=""><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Ironcasting.jpg" width="30" alt=""><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Unique-tech.jpg" width="30" alt=""><nuxt-link to="/techs/Logistica">後勤學</nuxt-link>:拜占庭聖騎兵有踐踏傷害，對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>攻擊+6，
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定</td>
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
                <img class="gg" src="~assets/Faith.jpg" width="30" alt=""><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                <br/>
                <img class="gg" src="~assets/Heresy.png" width="30" alt=""><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生產速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)</td>
            </tr>
          </table>
           <h3>剋聖騎兵的單位與建築</h3> 
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對聖騎兵的額外傷害，按照傷殺力排列。
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
                      alt=""> <nuxt-link to="/units/Elite_Cannon_Galleon">精銳火砲戰船</nuxt-link> 
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
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link> 
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
              </div>以下技術可讓以下單位對聖騎兵有額外攻擊力
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
           <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠提高聖騎兵的生產速度和加速
                <nuxt-link to="/techs/Logistica">後勤學</nuxt-link>及<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>的研發時間(快25%)</li>
              <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>：<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>與<nuxt-link to="/techs/Husbandry">畜牧技術</nuxt-link>研發快20%。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：聖騎兵更不容易被招降。</li>
            </ul>
          </div>
           <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
            <ul>
              <li>訓練時間為23秒。</li>
              <li>攻擊速度為2.03。</li>
            </ul>
             <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>訓練時間為20秒。</li>
              <li>攻擊速度增加為1.83(精銳為1.73)。</li>
              <li>聖騎兵獲得+12(精銳+16)的<nuxt-link to="/armor/Armor_Class_Cavalry">反騎兵加成防禦</nuxt-link>。</li>
              <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
              </li>
              <li>拜占庭引入：<nuxt-link to="/techs/Logistica">後勤學。</nuxt-link>
              </li>
            </ul>
          </div>
           <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>與其他特殊單位相比，聖騎兵幾乎沒有弱點。</li>
              <li>貴族鐵騎外型似乎與聖騎兵相當雷同。</li>
              <li>精銳聖騎兵的攻擊速度為1.73，是攻擊速度最快的騎兵。</li>
            </ul>
          </div>
           <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>鐵甲騎兵為許多帝國與民族當成精銳騎兵或突襲戰力，最初用於突破步兵陣列的衝鋒。他們據信出現在上古到中古許多西方歷史學家的編年著作中，通常與歐洲封建時期的騎士與聖騎士相提並論，此乃與東羅馬帝國接觸的結果。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;text-align: center;">
                <div class="unititle" style="color: #fff">聖騎兵</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/CataphractIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4"><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
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
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">20秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">70</td>
            </tr>
            <tr>
              <td class="unit3">金</td>
              <td class="unit4">75</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2" style="color: #fff;">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">110/150(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">9/12(精銳)(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <td class="unit4">+9/+12(精銳)對<nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
                <br/>+9/+10(精銳)對<nuxt-link to="/armor/Armor_Class_Condottiero">傭兵</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">攻速</td>
              <td class="unit4">1.83/1.73(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">2</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">1</td>
            </tr>
            <tr>
              <td class="unit3">防禦類型</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Cavalry_Archer">騎兵</nuxt-link>(+12, +16(精銳))
                <br/><nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1.35</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">4/5(精銳)</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3c763d;;">
                <div class="unititle2" style="color: #fff;">單位演變</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img class="gg" src="~assets/CataphractIcon.jpg" alt="">精銳聖騎兵</td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">1600食物800黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">50秒</td>
            </tr>
          </table>
          <div class="wiki" style="margin-top: 5px;">
            <div style="float: left;">
              <img src="~assets/Wikipedia-logo.png" width="50" height="46">
            </div>
            <div style="margin-left: 60px;">維基百科上的聖騎兵
              <div style="margin-left: 10px;"><i><strong><a href="http://tinyurl.com/y7abrovp">全覆裝甲騎兵</a></strong></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
           <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <nuxt-link to="/img/Cataphract.png"><img class="imgn hg" src="~assets/Cataphract.png" alt=""></nuxt-link> 
                <p><em>一群聖騎兵</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/C51d9bbe1ec59e44cc75f7b6c14bd091_400x400.png"><img class="imgn hg" src="~assets/C51d9bbe1ec59e44cc75f7b6c14bd091_400x400.png" alt=""></nuxt-link> 
                <p><em>聖騎兵模組</em>
                </p>
              </div>
              <div class="col-md-4"> <nuxt-link to="/img/Ancient_sasanid_cataphract_uther_oxford_2003_06_21.jpg"><img class="imgn hg" src="~assets/Ancient_sasanid_cataphract_uther_oxford_2003_06_21.jpg" alt=""></nuxt-link> 
                <p><em>現實生活中的聖騎兵。</em>
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