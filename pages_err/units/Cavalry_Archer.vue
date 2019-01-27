<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>馬弓騎兵</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>馬弓騎兵訓練於城堡時代的<nuxt-link to="/Archery_Range">射箭場</nuxt-link>，他有非常快的速度與遠程的攻擊，使他成為一名出色的騷擾者，是非常有效對付步兵單位的兵種。但因為他是騎馬的遠程單位，因此懼怕
              <nuxt-link to="/units/Skirmisher">戰矛兵</nuxt-link>與<nuxt-link to="/units/Spearman">槍兵</nuxt-link>。而 <nuxt-link to="/Camel_units/Archer">駱駝射手</nuxt-link>更是馬弓騎兵的超級天敵</p>
            <p>除了<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link to="/civs/Incas">印加</nuxt-link>與<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>外，所以文明都可以使用。</p>
          </div>
           <h3>戰術</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>馬弓騎兵是遊戲中最好的騷擾者之一。但玩家必須做出適當操作，與敵人保持最佳距離。且馬弓騎兵並不便宜，如果要使用大量的馬弓，必須要有強大的經濟。馬弓對付大部分的步兵與慢速移動的單位非常有效果。</p>
            <p> <nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>、 <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、 <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>與<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>是絕佳的使用馬弓騎兵的國家。雖然其他文明也可以使用，但都不如這些國家。蒙古有非常出色的攻擊速度，匈奴有非常便宜的造價，可以把省下來的資源用於別的兵種，如騎兵。馬札爾、土耳其與薩拉森人則是在帝王時期可以展現出強大的威力。馬札爾通過
                <nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link>技術，可以使射程與攻擊額外+1，土耳其人通過 <nuxt-link to="/techs/Sipahi">采邑騎士</nuxt-link>血量+20、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>人則是對建築物攻擊+4。</p>
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
              <td class="tta4">緩慢且沒有射程的單位。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>、<nuxt-link to="/Genoese_units/Crossbowman">熱那亞弩手</nuxt-link>、
                <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>、<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、
                  <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>、<nuxt-link to="/units/Onager">中型投石車</nuxt-link>、
                    <nuxt-link to="/units/Scorpion">弩炮</nuxt-link>、。</td>
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
                <img src="~assets/CastleAgeUnique.png" class="gg" alt=""><nuxt-link to="/techs/Sipahi">采邑騎兵</nuxt-link>(+20，<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定 )</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Fletching.jpg" width="30" alt=""><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Bodkinarrow.jpg" width="30" alt=""><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Bracer.jpg" width="30" alt=""><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Chemistry.jpg" width="30" alt=""><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Parthian-Tactics.jpg" alt=""><nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>:對<nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link>攻擊+4
                <br/>
                <img class="gg" src="~assets/Unique-tech.jpg" width="30" alt=""><nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link>(+1)， 5.5版後的<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊範圍</td>
              <td class="tta4">
                <img class="gg" src="~assets/Fletching.jpg" width="30" alt=""><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Bodkinarrow.jpg" width="30" alt=""><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Bracer.jpg" width="30" alt=""><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Unique-tech.jpg" width="30" alt=""><nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link>(+1，<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)</td>
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
                <img class="gg" src="~assets/Thumb_Ring.png" width="30" alt=""><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>:命中率提升到100%</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <img class="gg" src="~assets/Paddedarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Leatherarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Ringarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link>(+1/+2)
                <br/>
                <img class="gg" src="~assets/Parthian-Tactics.jpg" alt=""><nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>(+1/+2)</td>
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
           <h3>剋馬弓騎兵系的單位與建築</h3> 
          <div class="hrn1"></div>以下單位擁有對馬弓騎兵系的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+32攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HalberdierIcon.jpg" alt=""><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+30攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""> <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                    <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                    alt=""> <nuxt-link to="/Elite_units/Cannon_Galleon">精銳火砲戰船</nuxt-link> 
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
                    <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""> <nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>→
                    <img class="gg" src="~assets/ImperialCamelIcon.jpg"
                    alt=""> <nuxt-link to="/Imperial_units/Camel">帝王駱駝騎兵</nuxt-link>(帝王駱駝騎兵是<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)</li>
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
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HuskarlIcon.jpg" alt=""> <nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link>(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)</li>
                </ul>
                <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/CamelIcon.jpg" alt=""><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link> 
                  </li>
                  <li>
                    <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)</li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                  <li>
                    <img class="gg" src="~assets/Imperialskirmishericon.png" alt=""> <nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link>(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>和同盟限定)</li>
                </ul>
                <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""> <nuxt-link to="/Genoese_units/Crossbowman">精銳熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                  <li>
                    <img class="gg" src="~assets/GenitourIcon.jpg" alt=""> <nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)</li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HuskarlIcon.jpg" alt=""> <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)</li>
                  <li>
                    <img class="gg" style="margin: 2px;" src="~assets/CamelArcherIcon.jpg" alt=""> <nuxt-link to="/Camel_units/Archer">精銳駱駝弓騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)</li>
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
                    <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg " alt=""> <nuxt-link to="/Elite_units/Eagle_Warrior">精銳鷹勇士</nuxt-link> 
                  </li>
                  <li>
                    <img class="gg" style="margin: 2px;" src="~assets/CamelArcherIcon.jpg" alt=""> <nuxt-link to="/Camel_units/Archer">駱駝弓騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)</li>
                  <li>
                    <img class="gg" src="~assets/GenitourIcon.jpg" alt=""> <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)</li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link> 
                  </li>
                  <li>
                    <img class="gg" src="~assets/SkirmisherIcon.jpg" alt=""> <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link> 
                  </li>
                </ul>
              </div>
            </div>以下技術研發後對長槍兵有額外攻擊力，以數值排列:
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
              </ul>團隊加成:<nuxt-link to="/civs/Persians">波斯</nuxt-link>在團隊加成裡，給予以下單位+2額外攻擊vs<nuxt-link to="/units/Archer_Units">射手單位</nuxt-link>:
              <div
              style="margin:12px 0px;"><strong>+2攻擊</strong>
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
         <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>便宜50%。</li>
            <li><nuxt-link to="/civs/Chinese">中國</nuxt-link>：對馬弓騎兵有利的科技在城堡/帝王時代便宜15%/20%。</li>
            <li><nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：多20%的血量。</li>
            <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>：造價在城堡/帝王時代便宜10%/20%。
              <li><nuxt-link to="/civs/Mongols">蒙古</nuxt-link>：射速快25%。</li>
              <li><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>:馬弓騎兵黃金成本減少15%。</li>
              <li><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>：對<nuxt-link to="/armor/Armor_Class_Standard_Building">標準建築</nuxt-link>攻擊+4</li>
              <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：兵工廠科技升級不用黃金</li>
              <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>：<nuxt-link to="/techs/Chemistry">化學</nuxt-link>免費。</li>
              <li><nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：血量在城堡/帝王時代增加15%/20%。免費<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>。</li>
          </ul>
        </div>
         <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>的研究時間(快25%)。</li>
            <li><nuxt-link to="/civs/Britons">不列顛</nuxt-link>：馬弓騎兵生產快20%。研發<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>和
              <nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>的速度快20%。</li>
            <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>：<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>與<nuxt-link to="/techs/Husbandry">畜牧技術</nuxt-link>研發快20%。</li>
            <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link to="/techs/Chemistry">化學</nuxt-link>和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>快80%。</li>
            <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：馬弓騎兵對僧侶抵抗力更強。</li>
          </ul>
        </div>
         <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
           <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
          <ul>
            <li>成本為40木材70黃金。</li>
            <li>移動速度為1.43，射程3。</li>
          </ul>
           <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
          <ul>
            <li>移動速度為1.4，射程為4。</li>
            <li>對<nuxt-link to="/units/Spearman">長槍兵</nuxt-link>攻擊+2。</li>
            <li>引入<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>。</li>
            <li>引入<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>。</li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>引入<nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>
            </li>
            <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>:馬弓騎兵於城堡/帝王時代便宜25%/30％。。</li>
          </ul>
           <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
          <ul>
            <li>成本減為40木材65黃金。</li>
            <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>:馬弓騎兵於城堡/帝王時代便宜15%/25％。</li>
            <li><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>:特殊科技<nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link>給予馬弓騎兵+1射程。</li>
            <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link>:引進特殊科技<nuxt-link to="/techs/Sipahi">采邑騎兵</nuxt-link>P。</li>
          </ul>
           <h3><em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em></h3>
          <ul>
            <li>馬弓騎兵成本再次減到40木材60黃金。</li>
            <li><nuxt-link to="/civs/Franks">法蘭克</nuxt-link>:馬弓騎兵多20％的HP。</li>
            <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>:現在馬弓騎兵於城堡/帝王時代便宜10%/20％。</li>
          </ul>
           <h3><em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em></h3>
          <ul>
            <li><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>:5.5版本後特殊科技<nuxt-link to="/techs/Recurve_Bow">反曲弓</nuxt-link>給予馬弓騎兵+1射程和+1攻擊。</li>
          </ul>
        </div>
         <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>“馬弓騎兵起源於遠古時代的亞洲大平原，並在整個中世紀的這個地區成為大部分軍隊的主力，征服了亞洲大部分地區，中東以及歐洲大部分地區的蒙古軍隊
            最主要的就是馬弓騎兵，當時他們是火力和速度的獨特組合，他們幾乎可以跨越幾乎任何一種地形，出乎意料地伏擊敵人，並在必要時在重騎兵或步兵部隊作出反應之前撤出。蒙古人特別擅長打帶跑和伏擊戰術，避免一對一戰鬥的同時也打得敵人完全失去信心，馬弓騎兵在開闊的地面上擁有非常大的操縱空間。但是對於要塞攻城和需要一對一的戰鬥則毫無應對策略。“</p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle"><nuxt-link to="">馬弓騎兵</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CavalryArcherIcon.jpg" width="45" alt="">
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
            <td class="unit4"><nuxt-link to="/units/Archer_Units">射手</nuxt-link>、 <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">請看介紹</td>
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
              <img class="gg" src="~assets/Archery-range-logo.jpg" alt=""><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">34秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">40</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">6(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">+2對<nuxt-link to="/armor/Armor_Class_Spearman">槍兵類</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">射速</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">50%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4"><nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
              <br/> <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
              <br/> <nuxt-link to="/armor/Armor_Class_Cavalry_Archer">馬弓騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速
            </td>
            <td class="unit4">1.4</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/HeavyCavArcherIcon.jpg" alt=""><nuxt-link to="/Heavy_Cavalry_units/Archer">重裝馬弓騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img class="gg" src="~assets/Heavy-cavalry-archer-resear.jpg" alt="">900食物500黃金</td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">50秒</td>
          </tr>
        </table>
        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
      <div class="col-md-12">
         <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4"> <nuxt-link to="/img/Cavarcherline.png"><img class="imgn hg" src="~assets/Cavarcherline.png" alt=""></nuxt-link> 
            <p><em>馬弓騎兵系</em>
            </p>
          </div>
          <div class="col-md-4"> <nuxt-link to="/img/Cavalryarcher.png"><img class="imgn hg" src="~assets/Cavalryarcher.png" alt=""></nuxt-link> 
            <p><em>一群馬弓騎兵</em>
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