<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
          <h1>馬戰車</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>馬戰車是韓國的特殊單位，能夠在<nuxt-link to="/techsage/Castle_Age">城堡時代</nuxt-link>的<nuxt-link to="/building/Castle">城堡</nuxt-link>中訓練。是個有高遠程裝甲和高生命值的馬騎弓兵。他的攻擊方式像
              <nuxt-link to="/units/Scorpion">弩炮</nuxt-link>，但不像弩炮有爆炸傷害。</p>
            <p>馬戰車可以在<nuxt-link to="/techsage/Imperial_Age">帝王時代</nuxt-link>升級為精銳馬戰車。</div>
          <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>馬戰車是遊戲中最強大的遠程單位之一，因為它們擁有高HP，高遠程裝甲和所有弓箭手中最高的攻擊力。這使得它們既可以提供火力支援，也可以作為破壞主力，甚至同時執行兩種角色。作為遠程支援，馬戰車可以放置在
                <nuxt-link to="/units/Halberdier">戟兵</nuxt-link>這樣的近身單位之後保護他們。他們可以對付敵人的弓箭手和<nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link>，不過
                  <nuxt-link to="/Camel_units/Archer">駱駝弓騎兵</nuxt-link>和<nuxt-link to="/Genoese_units/Crossbowman">熱那亞弩手</nuxt-link>是例外。</li>
              <li>馬戰車可以與僧侶和其他遠程單位搭配，如<nuxt-link to="/units/Mangonel">投石車</nuxt-link>。與近戰單位相比，馬戰車最大的優勢就是它的遠程攻擊，不會追擊敵人時破壞自己陣型。馬戰車不應該用來對付
                <nuxt-link to="/units/Halberdier">戟兵</nuxt-link>和<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>。<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>對馬戰車有攻擊加成，但是除非數量大於馬戰車，不然馬戰車還是會贏。
                  <nuxt-link to="/units/Paladin">遊俠</nuxt-link>，<nuxt-link to="/War_unitsanimal/Elephant">戰象</nuxt-link>，<nuxt-link to="/Ballista_unitsanimal/Elephant">矛象伕</nuxt-link>，
                    <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>和<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>(有高遠程護甲)、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>和
                      <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>(有攻擊加成)都可以戰勝馬戰車。韓國人可以用<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>對付上述單位。投石車也是個麻煩，韓國人可以用
                        <nuxt-link to="/units/Bombard_Cannon">火炮</nuxt-link>或他們的<nuxt-link to="/Siege_units/Onager">重型投石車</nuxt-link>對付他們。最後，由於缺乏<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>，馬戰車很容易被敵方僧侶招降。</li>
              <li>馬戰車的移動速度快，對建築物有攻擊加值，可以集中火力迅速殺死一個目標，並對箭矢有防禦加成，相當適合作為突襲單位。他們在防守上能站在城牆後面，用遠距離攻擊安全地殲滅敵方部隊。在一些窄路徑的地圖（如黑森林）中，戰車可以用他們的大尺寸來堵塞路徑，防止敵人到達某個點;給玩家足夠的時間來加強這個地方的防守。和其他射手單位一樣，馬戰車也可以駐守城堡裡面增加攻擊傷害、射箭的數量。一座駐紮滿馬戰車的城堡甚至可以在一擊殺死一個哥德衛隊。</li>
              <li>儘管是馬騎弓兵，但由於馬戰車的體積龐大，速度相對較慢，開火間隔較長，所以執行打帶跑戰術的效果並不理想。</li>
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
              <td class="tta4"><nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>、<nuxt-link to="/units/Spearman">長槍兵</nuxt-link>、<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>、
                <nuxt-link to="/Genoese_units/Crossbowman">熱那亞弩手</nuxt-link>、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>、
                  <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>、
                    <nuxt-link to="/units/Mangonel">投石車</nuxt-link>、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>、<nuxt-link to="/units/Monk">僧侶</nuxt-link>。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
              <tr>
                <td class="tta1" style="width:10%">攻擊力</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Fletching.jpg" width="30" alt=""><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)
                  <br/>
                  <img class="gg" src="~assets/Bodkinarrow.jpg" width="30" alt=""><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
                  <br/>
                  <img class="gg" src="~assets/Bracer.jpg" width="30" alt=""><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)
                  <br/>
                  <img class="gg" src="~assets/Chemistry.jpg" width="30" alt=""><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)</td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">攻擊範圍</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Fletching.jpg" width="30" alt=""><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)
                  <br/>
                  <img class="gg" src="~assets/Bodkinarrow.jpg" width="30" alt=""><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
                  <br/>
                  <img class="gg" src="~assets/Bracer.jpg" width="30" alt=""><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)</td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">開火速度</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Thumb_Ring.png" width="30" alt=""><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>(+11%)</td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">命中率</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Ballistics.jpg" width="30" alt=""><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>:對移動目標命中率上升
                  <br/>
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">防禦</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Paddedarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link>(+1/+1)
                  <br/>
                  <img class="gg" src="~assets/Leatherarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link>(+1/+1)
                  <br/>
                  <img class="gg" src="~assets/Ringarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link>(+1/+2)</td>
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
                </td>
              </tr>
              <tr>
                <td class="tta1" style="width:10%">生產速度</td>
                <td class="tta4">
                  <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)</td>
              </tr>
          </table>
          <h3>剋馬戰車的單位</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對馬戰車的額外傷害，按造傷殺力排列。
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
                  <div style="margin:12px 0px;"><strong>+30攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""> <nuxt-link to="/Elite_units/Cannon_Galleon">精銳火砲戰船</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+18攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""><nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>→
                      <img class="gg" src="~assets/ImperialCamelIcon.jpg"
                      alt=""> <nuxt-link to="/Imperial_units/Camel">帝王駱駝騎兵</nuxt-link>(帝王駱駝騎兵是<nuxt-link to="/indians.php">印度</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
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
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">精銳日本武士</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HuskarlIcon.jpg" alt=""> <nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link>(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">日本武士</nuxt-link> 
                    </li>
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
                      <img class="gg" src="~assets/Imperialskirmishericon.png" alt=""> <nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link> (<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>及同盟限定)</li>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/GenitourIcon.jpg" alt=""> <nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HuskarlIcon.jpg" alt=""> <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" style="margin: 2px;" src="~assets/CamelArcherIcon.jpg" alt=""><nuxt-link to="/Camel_units/Archer">精銳駱駝弓騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/EliteSkirmisherIcon.jpg" alt=""> <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link> 
                    </li>
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
                    <li>
                      <img class="gg" src="~assets/GenitourIcon.jpg" alt=""> <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)</li>
                    <li>
                      <img class="gg" style="margin: 2px;" src="~assets/CamelArcherIcon.jpg" alt=""><nuxt-link to="/Camel_units/Archer">駱駝弓騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SkirmisherIcon.jpg" alt=""> <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                    </li>
                    <li>
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12">以下技術可讓以下單位對馬戰車有額外攻擊力
                <div class="n1">
                  <img class="gg" src="~assets/CastleAgeUnique.png" width="22" alt=""> <nuxt-link to="/techs/Chieftains">酋長</nuxt-link> 
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
              <div class="col-md-12">以下團隊加成可讓以下單位對馬戰車有額外攻擊力
                <div class="n1"><nuxt-link to="/civs/Persians">波斯</nuxt-link>在團隊加成裡，給予以下單位+2額外攻擊vs<nuxt-link to="/units/Archer_Units">射手單位</nuxt-link>。
                  <div
                  class="row">
                    <div class="col-md-6">
                      <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                      </div>
                      <ul>
                        <li>
                          <img class="gg" src="~assets/KnightIcon.jpg" alt=""> <nuxt-link to="/units/Knight">騎士</nuxt-link>→
                          <img class="gg" src="~assets/CavalierIcon.jpg"
                          alt=""> <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                          <img class="gg" src="~assets/PaladinIcon.jpg"
                          alt=""> <nuxt-link to="/units/Paladin">遊俠</nuxt-link> 
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠提高馬戰車的生產速度還有加速
              <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>的研究時間(快25%)</li>
            <li><nuxt-link to="/civs/Teutons">不列顛</nuxt-link>：研究<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>速度快20%。</li>
            <li><nuxt-link to="/civs/Teutons">匈奴</nuxt-link>：研發<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>速度快20%。</li>
            <li><nuxt-link to="/civs/Teutons">馬利</nuxt-link>：研究<nuxt-link to="/techs/Chemistry">化學</nuxt-link>和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>速度快80%。</li>
            <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：馬戰車更不容易被招降。</li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
          <ul>
            <li>馬戰車成本為80木60金。</li>
            <li>馬戰車訓練時間為25秒。</li>
            <li>1.0c版本後馬戰車成本為1200木60金。</li>
          </ul>
          <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
          <ul>
            <li>馬戰車現在成本為110木60金。</li>
            <li>馬戰車現在訓練時間為21秒。</li>
          </ul>
          <h3><em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em></h3>
          <ul>
            <li>新增<nuxt-link to="/armor/Armor_Class_Cavalry_Archer">馬弓騎兵護甲</nuxt-link>。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>韓國的高麗王國常常受到各方的攻擊 - 中國，蒙古人等北方的野蠻文明和海盜 為了生存，他們需要強大的軍隊。我們從很少的記錄中可以看出高麗是創新的戰士，也許是第一個在某種類型的戰鬥和戰車中使用火箭的人。這些戰車可以安排在開闊地區的臨時防禦工事中，提供一個可移動但實質性的防禦位置，以抵禦想登上城牆的敵人。於是誕生了馬戰車，這是一輛經典的戰車，帶有刀片和移動堡壘，弓箭手可以用這些堡壘進行火力掩護。</p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
              <div class="unititle" style="color: #fff">馬戰車</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/WarWagonIcon.jpg" width="45" alt="">
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
            <td class="unit4"><nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、 <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
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
              <img class="gg" src="~assets/Castle-age-reseach.jpg" alt=""><nuxt-link to="/techsage/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castle-logo.jpg" alt=""><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">21秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
              <div class="unititle2" style="color: #fff">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木材</td>
            <td class="unit4">110</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
              <div class="unititle2" style="color: #fff">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">150，200(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">9(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">對<nuxt-link to="/armor/Armor_Class_stone_defense">石造防禦建築</nuxt-link>攻擊+5</td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.5</td>
          </tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">4/5(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">3/4(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">防禦類別</td>
            <td class="unit4"><nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
              <br/> <nuxt-link to="/armor/Armor_Class_Cavalry_Archer">馬弓騎兵</nuxt-link>
              <br/> <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
              <br/> <nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.2</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">7/8(精銳)</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="#">單位演變</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/WarWagonIcon.jpg" alt="">精銳馬戰車</td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">1000食物800黃金</td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">75秒</td>
          </tr>
        </table>
        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4"> <nuxt-link to="/img/Castle_besieged.jpg"><img class="imgn hg" src="~assets/Castle_besieged.jpg" alt=""></nuxt-link> 
            <p><em>馬戰車因為有高遠程護甲，所以在大量馬戰車圍攻城堡時是十分有效且不怕城堡的攻擊。</em>
            </p>
          </div>
          <div class="col-md-4"> <nuxt-link to="/img/Aoe2_-_war_wagon_group.jpg"><img class="imgn hg" src="~assets/Aoe2_-_war_wagon_group.jpg" alt=""></nuxt-link> 
            <p><em>一群馬戰車</em>
            </p>
          </div>
          <div class="col-md-4"> <nuxt-link to="/img/E_korea1.jpg"><img class="imgn hg" src="~assets/E_korea1.jpg" alt=""></nuxt-link> 
            <p><em>馬戰車模組。</em>
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