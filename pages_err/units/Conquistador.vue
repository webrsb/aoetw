<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>征服者</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>征服者是<a href="/games/aoc">征服者入侵</a>資料片中<a href="/civs/Spanish">西班牙</a>的特殊單位，能夠在
              <a
              href="/techsage/Castle_Age">城堡時代</a>的<a href="/building/Castle">城堡</a>中訓練。是個高裝甲且騎馬的火藥單位。</p>
            <p>征服者可以在<a href="/techsage/Imperial_Age">帝王時代</a>升級為精銳征服者。</div>
           <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>征服者是具有高攻擊力的騎兵，但和<a href="/Cavalry_units/Archer">馬弓騎兵</a>的玩法類似。征服者在機動性和持久性方面比
                <a href="/units/Hand_Cannoneer">火槍兵</a>具有優勢。雖然他們是最短距離的火藥單位，也不像<a href="/Cavalry_units/Archer">馬弓騎兵</a>受益於科技的範圍增加，他們的機動性使他們變得強大而且致命，讓他們非常適合使用打帶跑戰術。在團隊中他們可以製造巨量傷害破壞敵人的陣型。征服者經常搭配
                  <a href="/units/Knight">騎士</a>吸收遠程單位的傷害，而征服者則殺死敵人的<a href="/units/Monk">僧侶</a>。敵軍騎兵對征服者來說是一個巨大的威脅，尤其是
                    <a href="/units/Camel">駱駝騎兵</a>。<a href="/units/Siege_Weapons">攻城武器</a>也是，所以戰鬥時不應該在同一地點停留太久。<a href="/units/Halberdier">戟兵</a>可以傷到征服者，只要他們能追到征服者。<a href="/units/Imperial_Skirmisher">帝王戰矛兵</a>也是有效的，雖然不如對付<a href="/Cavalry_units/Archer">馬弓騎兵</a>那樣有效，而且征服者打他們也很痛。
            </li>
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
              <td class="tta4"><a href="/units/Infantry_Units">步兵</a>、<a href="/units/Battering_Ram">衝撞車</a>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><a href="/units/Kamayuk">槍隊長</a>、<a href="/units/Berserk">狂戰士</a>、<a href="/Genoese_units/Crossbowman">熱那亞弩手</a>、
                <a
                href="/units/Huskarl">哥德衛隊</a>、<a href="/units/Condottiero">傭兵</a>、<a href="/units/Mameluke">奴隸兵</a>、
                  <a
                  href="/units/Camel">駱駝騎兵</a>、<a href="/units/Elite_Skirmisher">戰矛兵</a>、<a href="/units/Eagle_Warrior">鷹勇士</a>、
                    <a
                    href="/units/Mangonel">投石車</a>、<a href="/units/Spearman">重裝長槍兵</a>、<a href="/units/Samurai">日本武士</a>。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生命值</td>
              <td class="tta4">
                <img class="gg" src="~assets/Bloodlines.png" width="30" alt=""><a href="/techs/Bloodlines">品種</a>(+20)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <img class="gg" src="~assets/Paddedarcherarmor.jpg" width="30" alt=""><a href="/techs/Padded_Archer_Armor">弓兵布甲</a>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Leatherarcherarmor.jpg" width="30" alt=""><a href="/techs/Leather_Archer_Armor">弓兵皮甲</a>(+1/+1)
                <br/>
                <img class="gg" src="~assets/Ringarcherarmor.jpg" width="30" alt=""><a href="/techs/Ring_Archer_Armor">弓兵環甲</a>(+1/+2)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Husbandry.jpg" width="30" alt=""><a href="/techs/Husbandry">畜牧培養</a>(+10%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">招降抵抗</td>
              <td class="tta4">
                <img class="gg" src="~assets/Faith.jpg" width="30" alt=""><a href="/techs/Faith">忠誠信仰</a>
                <br/>
                <img class="gg" src="~assets/Heresy.png" width="30" alt=""><a href="/techs/Heresy">異端邪說</a> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生產速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><a href="/techs/Conscription">徵兵制度</a>(+33%)</td>
            </tr>
          </table>
           <h3>剋征服者的單位</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對征服者的額外傷害，按造傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+32攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HalberdierIcon.jpg" alt=""><a href="/units/Halberdier">戟兵</a>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+30攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""> <a href="/units/Cannon_Galleon">火砲戰船</a>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""> <a href="/Elite_units/Cannon_Galleon">精銳火砲戰船</a>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+22攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/PikemanIcon.jpg" alt=""><a href="/units/Pikeman">重裝長槍兵</a>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+18攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt=""><a href="/Heavy_units/Camel">重裝駱駝騎兵</a>→
                      <img class="gg" src="~assets/ImperialCamelIcon.jpg"
                      alt=""> <a href="/Imperial_units/Camel">帝王駱駝騎兵</a>(帝王駱駝騎兵是<a href="/indians.php">印度</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><a href="/units/Spearman">長槍兵</a>
                    </li>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""><a href="/units/Cannon_Galleon">火砲戰船</a>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""> <a href="/Elite_units/Cannon_Galleon">精銳火砲戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+12攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><a href="/units/Mameluke">精銳奴隸兵</a>(<a href="/civs/Saracens">薩拉森</a>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><a href="/units/Kamayuk">精銳槍隊長</a>(<a href="/civs/Incas">印加</a>限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><a href="/units/Samurai">精銳日本武士</a>(<a href="/civs/Japanese">日本</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HuskarlIcon.jpg" alt=""> <a href="/units/Huskarl">精銳哥德衛隊</a>(<a href="/civs/Goths">哥德</a>限定)</li>
                    <li>
                      <img class="gg" style="margin: 2px;" src="~assets/CondottieroNewIcon.jpg"
                      alt=""><a href="/units/Condottiero">傭兵</a>(<a href="/civs/Italians">義大利</a>和同盟限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><a href="/units/Samurai">日本武士</a>(<a href="/civs/Japanese">日本</a>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CamelIcon.jpg" alt=""><a href="/units/Camel">駱駝騎兵</a>
                    </li>
                    <li>
                      <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><a href="/units/Mameluke">奴隸兵</a>(<a href="/civs/Saracens">薩拉森</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><a href="/units/Kamayuk">槍隊長</a>(<a href="/civs/Incas">印加</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><a href="/Genoese_units/Crossbowman">精銳熱那亞弩手</a>(<a href="/civs/Italians">義大利</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HuskarlIcon.jpg" alt=""> <a href="/units/Huskarl">哥德衛隊</a>(<a href="/civs/Goths">哥德</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/GenitourIcon.jpg" alt=""> <a href="/units/Genitour">精銳標槍騎兵</a>(<a href="/civs/Berbers">柏柏</a>和同盟限定)</li>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><a href="/Genoese_units/Crossbowman">熱那亞弩手</a>(<a href="/civs/Italians">義大利</a>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Imperialskirmishericon.png" alt=""> <a href="/units/Imperial_Skirmisher">帝王戰矛兵</a>(<a href="/civs/Vietnamese">越南</a>和同盟限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EliteSkirmisherIcon.jpg" alt=""> <a href="/units/Elite_Skirmisher">戰矛兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/GenitourIcon.jpg" alt=""> <a href="/units/Genitour">標槍騎兵</a>(<a href="/civs/Berbers">柏柏</a>和同盟限定)</li>
                    <li>
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><a href="/Elite_units/Eagle_Warrior">精銳鷹勇士</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SkirmisherIcon.jpg" alt=""> <a href="/units/Skirmisher">矛兵</a>
                    </li>
                    <li>
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><a href="/units/Eagle_Warrior">鷹勇士</a> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>以下技術可讓以下單位對征服者有額外傷害
            <div class="n1">
              <img class="gg" src="~assets/CastleAgeUnique.png" width="22" alt=""> <a href="/techs/Chieftains">酋長</a> 
              <div width="22" style="margin:12px 0px;"><strong>+5攻擊</strong>(<a href="/civs/Vikings">維京</a>限定)</div>
              <ul>
                <li>
                  <img class="gg" src="~assets/MilitiaIcon.jpg" alt=""><a href="/units/Militia">民兵</a>→
                  <img class="gg" src="~assets/ManAtArmsIcon.jpg"
                  width="22" alt=""> <a href="/units/Man-at-Arms">裝甲步兵</a>→
                  <img class="gg" src="~assets/LongswordsManIcon.jpg"
                  alt=""> <a href="/units/Long_Swordsman">長劍兵</a>→
                  <img class="gg" src="~assets/2HandedswordsmanIcon.jpg"
                  alt=""> <a href="/units/Two-Handed_Swordsman">雙手劍兵</a>→
                  <img class="gg" src="~assets/ChampionIcon.jpg"
                  alt=""> <a href="/units/Champion">劍兵勇士</a> 
                </li>
                <li>
                  <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><a href="/units/Spearman">長槍兵</a>→
                  <img class="gg" src="~assets/PikemanIcon.jpg"
                  alt=""> <a href="/units/Pikeman">重裝長槍兵</a> 
                </li>
                <li>
                  <img class="gg" src="~assets/VBRSK.jpg" alt=""><a href="/units/Berserk">狂戰士</a>→
                  <img class="gg" src="~assets/VBRSK.jpg" alt=""> <a href="/units/Berserk">精銳狂戰士</a>(<a href="/civs/Vikings">維京</a>限定)</li>
                <li>
                  <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt=""> <a href="/units/Condottiero">傭兵</a>(如果和<a href="/civs/Italians">義大利</a>同盟的話)</li>
              </ul>
            </div>以下團隊加成可讓以下單位對征服者有額外傷害:
            <div class="n1"><a href="/civs/Persians">波斯</a>在團隊加成裡，給予以下單位+2額外攻擊vs<a href="/units/Archer_Units">弓兵單位</a>。
              <div
              class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/KnightIcon.jpg" alt=""> <a href="/units/Knight">騎士</a>→
                      <img class="gg" src="~assets/CavalierIcon.jpg"
                      alt=""> <a href="/units/Cavalier">騎兵</a>→
                      <img class="gg" src="~assets/PaladinIcon.jpg"
                      alt=""> <a href="/units/Paladin">遊俠</a> 
                  </ul>
                </div>
            </div>
          </div>
        </div>
         <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><a href="/civs/Spanish">西班牙</a>：兵工廠加成征服者的科技不需花費黃金。</li>
          </ul>
        </div>
         <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><a href="/civs/Berbers">柏柏</a>：<a href="/techs/Kasbah">聚居堡壘</a>能夠提高征服者的生產速度還有加速徵兵技術的研究時間(快25%)</li>
            <li><a href="/civs/Huns">匈奴</a>：<a href="/techs/Bloodlines">品種</a>與<a href="/techs/Husbandry">畜牧技術</a>研發快20%。</li>
            <li><a href="/civs/Teutons">條頓</a>：征服者更不容易被招降。</li>
            <li><a href="/civs/Turks">土耳其</a>：征服者訓練速度快20%。</li>
          </ul>
        </div>
         <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>征服新世界的西班牙冒險家們被稱為征服者。這些人是一群貴族的子弟和尋找冒險和戰利品的幸運士兵。大多數是沒有工作的士兵。他們抵達新大陸，在武器上擁有巨大的技術優勢，當地人無法抵抗劍，火槍的攻擊。馬對第一次遇到牠的當地人來說也都讓他們感到特別恐怖。騎乘的人被認為是某種新生物，半人半四腳的野獸。由於歐洲疾病在當地部落間蔓延，並有時與當地部落結盟攻打其他部落，征服者的小軍隊相對輕鬆地征服了兩個偉大的美國文明，阿茲特克人和印加人。</p>
          <p>在侵入新世界的歐洲冒險家隊伍中，那些具有超凡能力和決心的士兵成為了精英征服者。這些人是由於他們優越的武器和嚴峻的決心而克服困難並獲得勝利的人。</p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
              <div class="unititle" style="color: #fff">征服者</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/ConquistadorIcon.jpg" width="45" alt="">
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
            <td class="unit4"><a href="/units/Cavalry_Units">騎兵</a>、<a href="/units/Gunpowder_Unit">火藥單位</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4"><a href="/civs/Spanish">西班牙</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castle-age-reseach.jpg" alt=""><a href="/techsage/Castle_Age">城堡時代</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castleicon.png" width="45" alt=""><a href="/building/Castle">城堡</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">24秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
              <div class="unititle2" style="color: #fff">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">70</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
              <div class="unititle2" style="color: #fff">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">55/70(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">16/18(精銳)(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">對<a href="/armor/Armor_Class_Ram">衝撞車</a>攻擊+4/+6(精銳)
              <br/>對<a href="/armor/Armor_Class_Building">建築物</a>+2</td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.93</td>
          </tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">65%/70%(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">5.5</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">防禦類別</td>
            <td class="unit4"><a href="/armor/Armor_Class_Archer">弓兵</a>
              <br/> <a href="/armor/Armor_Class_Cavalry_Archer">騎兵</a>
              <br/> <a href="/armor/Armor_Class_Gunpowder_Unit">火藥單位</a>
              <br/> <a href="/armor/Armor_Class_Unique_Unit">特殊單位</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.3</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">8/9(精銳)</td>
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
              <img class="gg" src="~assets/ConquistadorIcon.jpg" alt="">精銳征服者</td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">1200食物600黃金</td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">60秒</td>
          </tr>
        </table>
        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
         <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4"> <a href="/img/Conquistadorgroup.png"><img class="imgn hg" src="~assets/Conquistadorgroup.png" alt=""></a> 
              <p><em>一群征服者</em>
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