<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>駱駝騎兵</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>駱駝騎兵是城堡時代兵種，可訓練於馬廄，對於騎兵較有優勢。</p>
          </div>
           <h3>文明可訓練與否</h3> 
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-ok okc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">可訓練</span></strong></h4>  <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、 <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、 <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
                <nuxt-link to="/civs/Chinese">中國</nuxt-link>、 <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、 <nuxt-link to="/civs/Indians">印度</nuxt-link>、
                  <nuxt-link to="/civs/Malians">馬利</nuxt-link>、 <nuxt-link to="/civs/Persians">波斯</nuxt-link>、 <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
                    <nuxt-link to="/civs/Turks">土耳其</nuxt-link>。</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-remove noc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">不可訓練</span></strong></h4>  <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、 <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、 <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
                <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、 <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、 <nuxt-link to="/civs/Goths">哥德</nuxt-link>、 <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
                  <nuxt-link to="/civs/Incas">印加</nuxt-link>、 <nuxt-link to="/civs/Italians">義大利</nuxt-link>、 <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
                    <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、 <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、 <nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>、 <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
                      <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、 <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、 <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
                        <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、 <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、 <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
                          <nuxt-link to="/civs/Vikings">維京</nuxt-link>。</div>
            </div>
          </div>
           <h3>戰術</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>在城堡時代騎兵為主力的兵種時，出駱駝騎兵則可以與之抗衡，相較於長槍兵只能在家裡防守，駱駝騎兵的跑速比騎士快則可以追擊騎士，但對於步兵與弓兵類型的兵種則相對弱勢，此外也相當怕僧侶。</p>
            <p>如果對手只出騎士，該國又沒有駱駝，駱駝將會給予對手極大的壓力。另外駱駝搭配僧侶也非常適合打擊令人聞風色變的西班牙征服者與緬甸飛鏢騎兵。值得一提的是，駱駝跑得比大多的馬還要快，這代表對方騎士無法在你家橫行。</p>
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
              <td class="tta4"><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link>、
                <nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link>、<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、
                <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>和<nuxt-link to="">防禦建築</nuxt-link>。</td>
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
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Zealotry">狂熱舉動</nuxt-link>(+30，<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Forging.jpg" width="30" alt=""><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Ironcasting.jpg" width="30" alt=""><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Blastfurnace.jpg" width="30" alt=""><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
                <br/>
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Farimba">驃悍精神</nuxt-link>：馬廄單位攻擊+5。<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定</td>
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
                <img class="gg" src="~assets/Faith.jpg" alt=""><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                <br/>
                <img class="gg" src="~assets/Heresy.png" width="30" alt=""><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生產速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)
                <br/>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">其他</td>
              <td class="tta4">
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Maghrabi_Camels">馬格拉比駱駝</nuxt-link>:駱駝部隊獲得回血能力(每分鐘回15 HP)，<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定</td>
            </tr>
          </table>
           <h3>剋駱駝騎兵的單位與建築</h3> 
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對駱駝騎兵的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+26攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HalberdierIcon.jpg" alt=""><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+18攻擊</strong>
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
                      <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""><nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>→
                      <img class="gg" src="~assets/ImperialCamelIcon.jpg"
                      alt=""> <nuxt-link to="/Imperial_units/Camel">帝王駱駝騎兵</nuxt-link>(帝王駱駝騎兵是<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><nuxt-link to="/Genoese_units/Crossbowman">精銳熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CamelIcon.jpg" alt=""><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><nuxt-link to="/Genoese_units/Crossbowman">熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><nuxt-link to="/Elite_units/Eagle_Warrior">精銳鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+1攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Town-center-logo.jpg" alt=""><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/Watchtowericon.png" alt=""><nuxt-link to="/units/Watch_Tower">瞭望箭塔</nuxt-link>→
                      <img class="gg" src="~assets/Watchtowericon.png"
                      alt=""><nuxt-link to="/units/Guard_Tower">防禦箭塔</nuxt-link>→
                      <img class="gg" src="~assets/Watchtowericon.png"
                      alt=""> <nuxt-link to="/units/Keep">大型箭塔</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/Bombardtowericon.png" alt=""><nuxt-link to="/building/Bombard_Tower">火炮塔</nuxt-link> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>以下技術可讓以下單位對駱駝騎兵有額外攻擊力
            <div class="n1">
              <img class="gg" src="~assets/CastleAgeUnique.png" width="22" alt=""> <nuxt-link to="/techs/Chieftains">酋長</nuxt-link> 
              <div width="22" style="margin:12px 0px;"><strong>+4攻擊</strong>(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)</div>
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
              </ul>
            </div>
          </div>
           <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：駱駝騎兵在城堡/帝王時代便宜15%/20%。</li>
              <li><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：駱駝騎兵便宜25%。</li>
              <li><nuxt-link to="/civs/Chinese">中國</nuxt-link>：對駱駝騎兵有利的科技在城堡/帝王時代各便宜15%/20%。</li>
              <li><nuxt-link to="/civs/Indians">印度</nuxt-link>：駱駝騎兵+1/+1防禦。</li>
            </ul>
          </div>
           <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>的研究時間(快25%)。</li>
              <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>：駱駝騎兵生產和升級效率快20%，<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>與
                <nuxt-link to="/techs/Husbandry">畜牧技術</nuxt-link>研發快20%。</li>
              <li><nuxt-link to="/civs/Indians">印度</nuxt-link>：駱駝騎兵對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>+6攻擊。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：駱駝騎兵對僧侶抵抗力更強。</li>
            </ul>
          </div>
           <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
            <ul>
              <li>駱駝有5的攻擊。</li>
              <li>駱駝對騎兵+10攻擊。</li>
              <li>訓練時間為29秒。</li>
              <li>移動速度為1.4。</li>
              <li>駱駝的防禦類型有包括<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵護甲</nuxt-link>，所以會受到反騎兵的傷害。</li>
              <li>升級到重裝駱駝需要125秒。</li>
              <li></li>
            </ul>
             <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>駱駝訓練時間減為22秒。</li>
              <li>移動速度增加到1.45。</li>
              <li>駱駝的防禦類型轉到與<nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>相同。</li>
              <li><nuxt-link to="/techs/Bloodlines"></nuxt-link>血統引進。</li>
              <li><nuxt-link to="/techs/Heresy"></nuxt-link>異端邪說引進。</li>
              <li><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>:引入<nuxt-link to="/techs/Zealotry">狂熱舉動</nuxt-link>。</li>
            </ul>
             <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
            <ul>
              <li>駱駝攻擊增加為6。</li>
              <li>對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>有+9攻擊。</li>
              <li>升級到重裝駱駝需要105秒。</li>
            </ul>
             <h3><em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em></h3>
            <ul>
              <li>駱駝不再受到<nuxt-link to="/armor/Armor_Class_Ship">船艦護甲</nuxt-link>的影響，他們正式有自己的防禦類型：<nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link>護甲。但駱駝仍然對船隻有+5的攻擊。反騎兵攻擊仍然不影響駱駝。</li>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>:駱駝騎兵從城堡時代便宜20％，在4.8更新後變成城堡/帝王各便宜15%/20％。</li>
            </ul>
          </div>
           <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>駱駝是少數幾個符合史實的單位，從古至今，駱駝被地中海和印度地區的軍隊使用，雖然目前還不清楚中國和蒙古是否用駱駝作戰，但肯定的是他們會拿來運送物資。</li>
              <li>遊戲中的駱駝騎兵是單峰駱駝，而現實中;中國與蒙古原產的是雙峰駱駝，速度極為緩慢，並不適合作戰。</li>
              <li>中國和蒙古是遊戲中，除了非洲與中東國家外，唯二有駱駝的文明。</li>
              <li>駱駝是唯二生產會有自己音效的軍事單位，另一個是投石機。</li>
              <li>駱駝與重裝駱駝騎兵音效相同。</li>
              <li>駱駝是唯一沒有任何防禦的騎兵單位。</li>
            </ul>
          </div>
           <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1"><strong>駱駝為何剋馬？：</strong>
            <p>世紀帝國中的設定，駱駝打馬單位是有加成的，其實是有原因的。中國有句俗語：瘦死的駱駝比馬大，駱駝天生體積比馬還要大，馬看到龐然大物會害怕是正常。其次是駱駝身上有反芻動物特有的味道，馬一聞到那味道便不受控制。</p>
            <img
            class="imgn" src="~assets/camelhorse.jpg" alt="">
              <p>駱駝的確比馬大很多</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle"><nuxt-link to="">駱駝騎兵</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/CamelIcon.jpg" width="45" alt="">
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
              <td class="unit4"><nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
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
                <img class="gg" class="gg" src="~assets/Stable-logo.jpg" alt=""><nuxt-link to="/building/Stable">馬廄</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">22秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">55</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">60</td>
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
              <td class="unit4">6(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <div class="unititle2">數據</div>
              <td class="unit4">+9對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵類</nuxt-link>
                <br/>+5對<nuxt-link to="/armor/Armor_Class_Camel">駱駝類</nuxt-link>
                <br/>+5對<nuxt-link to="/armor/Armor_Class_Ship">船類</nuxt-link>
              </td>
            </tr>
            <tr>
              <tr>
                <td class="unit3">攻速</td>
                <td class="unit4">2.03</td>
              </tr>
              <tr>
                <td class="unit3">近防
                </td>
                <td class="unit4">0</td>
              </tr>
              <tr>
                <td class="unit3">遠防</td>
                <td class="unit4">0</td>
              </tr>
              <tr>
                <td class="unit3">防禦類型</td>
                <td class="unit4"><nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="unit3">跑速
                </td>
                <td class="unit4">1.45</td>
              </tr>
              <tr>
                <td class="unit3">視野</td>
                <td class="unit4">4</td>
              </tr>
              <tr>
                <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                  <div class="unititle2">單位演變</div>
                </td>
              </tr>
              <tr>
                <td class="unit3">升級到</td>
                <td class="unit4">
                  <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""><nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>
                </td>
              </tr>
              <tr>
                <td class="unit3">升級成本</td>
                <td class="unit4">
                  <img class="gg" src="~assets/Heavy-camel-research.jpg" alt="">325食物365黃金</td>
              </tr>
              <tr>
                <td class="unit3">升級時間</td>
                <td class="unit4">105秒</td>
              </tr>
          </table>
        </div>
      </div>
      <div class="col-md-12">
         <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4"> <nuxt-link to="/img/Camelline.png"><img class="imgn hg" src="~assets/Camelline.png" alt=""></nuxt-link> 
              <p><em>駱駝系。</em>
              </p>
            </div>
            <div class="col-md-4"> <nuxt-link to="/img/Camel.png"><img class="imgn hg" src="~assets/Camel.png" alt=""></nuxt-link> 
              <p><em>一群駱駝騎兵。</em>
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