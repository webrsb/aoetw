<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>弩砲象</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>弩砲象<nuxt-link to="/civs/Khmer">高棉</nuxt-link>的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>的
              <nuxt-link to="/building/Castle">城堡</nuxt-link>中訓練。弩砲象這是一種混合型單位是由騎兵加攻城武器混合型單位，攻擊模式類似<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>，弩砲象是可以砸掉樹木的。</p>
          </div>
           <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>弩砲象跟<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>的<nuxt-link to="/units/Organ_Gun">手風琴砲</nuxt-link>，同樣是特殊單位屬攻城武器單位。跟大部分攻城武器的優勢和劣勢一樣擁有範圍射程對大量單位效果好，但注意的是他可以用
                <nuxt-link to="/units/Monk">僧侶</nuxt-link>進行補血。</li>
              <li>弩砲象是目前在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>唯一可以砍樹的軍事單位，因此在樹很多的地圖上擁有一定戰術上優勢(例:黑森林)。</li>
              <li>弩砲象整體戰力都比<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>來的強大，移動速度比較高、血較多、沒有攻擊最小範圍、近戰時擁有踐踏傷害、裝甲也比較高因此
                <nuxt-link to="/civs/Khmer">高棉</nuxt-link>這弩砲文明裡可量產情況下弩砲象是比較好的選擇。</li>
              <li>弩砲象的裝甲是少數擁有多裝甲(<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>、<nuxt-link to="/armor/Armor_Class_War_Elephant">戰象</nuxt-link>、
                <nuxt-link to="/armor/Armor_Class_Siege_Weapon">攻城武器</nuxt-link>、<nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>)又負的裝甲值(騎兵(-2)、戰象(-2)、攻城武器(-2)，因此很多單位都可剋制弩砲象。</li>
              <li>弩砲象在很多情況下都是屬於攻城支援單位，主要是他們血多且擁有移動速度，量多時弩砲象是具有非強常大的戰鬥力的又因為<nuxt-link to="/civs/Khmer">高棉</nuxt-link>得帝王時代特殊科技
                <nuxt-link to="/techs/Double_Crossbow">雙弩箭</nuxt-link>使得弩砲象更具破壞力。</li>
              <li>弩砲象少量時優勢幾乎跟<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>差不多，但在量大時弩砲象就是很強大，弩砲象最大問題就在量產這問題上跟大部分城堡兵問題一樣。</li>
              <li>高棉這文明沒有<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>、<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>，因此僧侶對弩砲象傷害力也是不錯的</li>
              <li>死鬥時，弩砲象非常好用，因為量多，但是非常懼怕<nuxt-link to="/units/Mangonel">投石車</nuxt-link>。（因為對方投石車也會跟你一樣多）</li>
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
              <td class="tta4"><nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link>、
                <nuxt-link to="/building/bulding">建築物</nuxt-link>、海岸邊的<nuxt-link to="/building/Dock">船艦</nuxt-link>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>、
                <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>、<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>、
                  <nuxt-link to="/units/Mangonel">投石車</nuxt-link>、<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>、<nuxt-link to="/units/Scorpion">弩炮</nuxt-link>、
                    <nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link>、<nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link>和<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生命值</td>
              <td class="tta4">
                <img class="gg" src="~assets/Bloodlines.png" width="30" alt=""><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>(+20)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Siegeengineers.jpg" width="30" alt=""><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>:對建築物攻擊+20%
                <br/>
                <img class="gg" src="~assets/Chemistry.jpg" width="30" alt=""><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
                <br/>
                <img class="gg" src="~assets/Unique-tech.jpg" width="30" alt=""><nuxt-link to="/techs/Double_Crossbow">雙弩箭</nuxt-link>:可發射雙弩</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊距離</td>
              <td class="tta4">
                <img class="gg" src="~assets/Siegeengineers.jpg" width="30" alt=""><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>(+1)</td>
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
              <td class="tta1" style="width:10%">移動速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Husbandry.jpg" width="30" alt=""><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>(+10%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生產速度</td>
              <td class="tta4">
                <img class="gg" src="~assets/Conscription.jpg" width="30" alt=""><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)</td>
            </tr>
          </table>
           <h3>剋弩炮象的單位</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對弩炮象的額外傷害，按造傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+65攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SiegeRamIcon.jpg" alt=""><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+60攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HalberdierIcon.jpg" alt=""><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                    </li>
                    <li>
                      <img class="gg" src="~assets/PetardIcon.jpg" alt=""><nuxt-link to="/units/Petard">爆炸桶</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+55攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt=""><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                      <img class="gg" src="~assets/CannonGalleonIcon.jpg"
                      alt=""> <nuxt-link to="/Elite_units/Cannon_Galleon">精銳火砲戰船</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+50攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CappedRamIcon.jpg" width="22" alt=""><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+47攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/PikemanIcon.jpg" alt=""><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+40攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/BatteringRamIcon.jpg" alt=""><nuxt-link to="/units/Battering_Ram">輕形衝撞車</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+32攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+30攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/SpearmanIcon.jpg" alt=""><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+28攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt=""><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+20攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/BombardCannonIcon.jpg" alt=""><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link> 
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
                  <div style="margin:12px 0px;"><strong>+14攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><nuxt-link to="/Genoese_units/Crossbowman">精銳熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+12攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link>(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">精銳日本武士</nuxt-link>(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/MangonelIcon.jpg" alt=""><nuxt-link to="/units/Mangonel">輕形投石車</nuxt-link>→
                      <img class="gg" src="~assets/OnagerIcon.jpg"
                      alt=""><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                      <img class="gg" src="~assets/SiegeOnagerIcon.jpg"
                      alt=""><nuxt-link to="/Siege_units/Onager">重型投石車</nuxt-link> 
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/New_Genoese_Crossbowman.png" alt=""><nuxt-link to="/Genoese_units/Crossbowman">熱那亞弩手</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/SMURI.jpg" alt=""><nuxt-link to="/units/Samurai">日本武士</nuxt-link>(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CamelIcon.jpg" alt=""><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
                    </li>
                    <li>
                      <img class="gg" src="~assets/Saracenmamluk_icon.png" alt=""><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><nuxt-link to="/Elite_units/Eagle_Warrior">精銳鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/HeavyScorpionIcon.jpg" alt=""><nuxt-link to="/Heavyunits/Scorpion">重型弩炮</nuxt-link>
                    </li>
                    <li>
                      <img class="gg" src="~assets/Magyar_Huszar_icon.jpg" width="22" alt=""><nuxt-link to="/units/Magyar_Huszar">精銳馬札爾驃騎兵</nuxt-link>(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/MangudaiIcon.jpg" width="22" alt=""><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link>(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Magyar_Huszar_icon.jpg" width="22" alt=""><nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link>(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EagleScoutIcon.jpg" alt=""><nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/MangudaiIcon.jpg" width="22" alt=""><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+0攻擊</strong>
                  </div>
                  <p><strong>(這裡寫出0攻擊是因為弩炮象在騎兵護甲時的裝甲是-2，所以計算後0-(-2)=2仍舊有傷害計算。)</strong>
                  </p>
                  <ul>
                    <li>
                      <img class="gg" style="margin: 2px;" src="~assets/MilitiaIcon.jpg" alt=""> <nuxt-link to="/units/Militia">民兵</nuxt-link>→
                      <img class="gg" style="margin: 2px;" src="~assets/ManAtArmsIcon.jpg"
                      width="22" alt=""> <nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                      <img class="gg" src="~assets/LongswordsManIcon.jpg"
                      alt=""> <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                      <img class="gg" src="~assets/2HandedswordsmanIcon.jpg"
                      alt=""> <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>→
                      <img class="gg" src="~assets/ChampionIcon.jpg"
                      alt=""> <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                    </li>
                    <li>
                      <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt=""> <nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(<nuxt-link to="/civs/Italians">義大利</nuxt-link>和同盟限定)</li>
                    <li>
                      <img class="gg" src="~assets/ChuKoNuIcon.jpg" alt=""> <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
                      <img class="gg" src="~assets/ChuKoNuIcon.jpg"
                      alt=""> <nuxt-link to="/units/Chu_Ko_Nu">精銳連弩兵</nuxt-link>(<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/VBRSK.jpg" alt=""> <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>→
                      <img class="gg" src="~assets/VBRSK.jpg" alt=""> <nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link>(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/JaguarWarriorIcon.jpg" alt=""> <nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>→
                      <img class="gg" src="~assets/JaguarWarriorIcon.jpg"
                      alt=""> <nuxt-link to="/units/Jaguar_Warrior">精銳豹勇士</nuxt-link>(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12">以下技術可讓以下單位對弩炮象有額外攻擊力
                <div class="n1"></div>
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
          </div>
           <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠提高弩炮象的生產速度還有加速
                <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>和<nuxt-link to="/techs/Double_Crossbow">雙弩箭</nuxt-link>的研究時間(快25%)</li>
              <li><nuxt-link to="/civs/Teutons">匈奴</nuxt-link>：研發<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>和
                <nuxt-link to="/techs/Bloodlines">品種</nuxt-link>速度快20%。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：弩炮象更不容易被招降。</li>
            </ul>
          </div>
           <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>弩炮象屬於騎兵單位又屬於攻城單位，讓弩炮象成為遊戲中唯一可以被僧侶治療而不用被村民修復的攻城武器。</li>
              <li>弩炮象是遊戲中唯一城堡時代就能砸倒樹木的單位。</li>
              <li>弩炮象是遊戲中開火速率最慢的騎兵單位(2.5)。</li>
              <li>非精銳弩炮象對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>應該有攻擊+2的加成但是因為bug而沒有實際加成。</li>
            </ul>
          </div>
           <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>大象是高棉最重要的軍事動物之一。歷史紀錄裡蘇里亞爾曼二世（1113-1150）有不下20萬隻大象的力量。從十二世紀到十三世紀初，幾個倖存的浮雕也表明，至少在歷史上，高棉族國王和印度族國王為他們的戰象裝備了如同投石機那般巨大的床弩。</p>
          </div>
           <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>由於該單位是騎兵單位和攻城單位的獨特組合，因此弩砲象是遊戲中唯一可以由僧侶治療而不必由村民修復的攻城武器。</li>
              <li>弩砲象是城堡時代唯一能夠砍伐樹木的軍事單位。</li>
              <li>射速2.5，弩砲象是在遊戲中最慢的攻擊騎兵。</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle" style="color: #fff">弩砲象</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/Ballistaelephanticon.png" width="45" alt="">
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
                <br/> <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4"><nuxt-link to="/civs/Khmer">高棉</nuxt-link>
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
                <img class="gg" src="~assets/Castle-logo.jpg" alt=""><nuxt-link to="/building/Castle">城堡</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">25秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">80</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">250/290(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">8/9(精銳)(遠戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>+8
                <br/> <nuxt-link to="/armor/Armor_Class_stone_defense">石頭建築</nuxt-link>+3/+4(精銳)
                <br/> <nuxt-link to="/armor/Armor_Class_standard_building">標準建築</nuxt-link>+3，+4(精銳)
                <br/> <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>+2/+4(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊範圍</td>
              <td class="unit4">0.1</td>
            </tr>
            <tr>
              <td class="unit3">攻擊速度</td>
              <td class="unit4">2.5</td>
            </tr>
            <tr>
              <td class="unit3">開火間隔</td>
              <td class="unit4">4</td>
            </tr>
            <tr>
              <td class="unit3">射程</td>
              <td class="unit4">5</td>
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
              <td class="unit4">3</td>
            </tr>
            <tr>
              <td class="unit3">裝甲類型</td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>(-2)
                <br/> <nuxt-link to="/armor/Armor_Class_War_Elephant">戰象</nuxt-link>(-2)
                <br/> <nuxt-link to="/armor/Armor_Class_Siege_Weapon">攻城武器</nuxt-link>(-2)
                <br/> <nuxt-link to="/armor/Armor_Class_Unique_Unit">特殊單位</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">0.8</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">7</td>
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
                <img class="gg" src="~assets/Ballistaelephanticon.png" alt="">精銳弩砲象</td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">
                <img class="gg" src="~assets/Elite-unique-research.jpg" alt="">1000食物500黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">70秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由熊協助編輯</div>
        </div>
        <div class="col-md-12">
           <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4"> <nuxt-link to="/img/Ballista_Elephant_group.jpg"><img class="imgn hg" src="~assets/Ballista_Elephant_group.jpg" alt=""></nuxt-link> 
              <p><em>一群弩炮象。</em>
              </p>
            </div>
            <div class="col-md-4"> <nuxt-link to="/img/Ballista_destroying_trees.jpg"><img class="imgn hg" src="~assets/Ballista_destroying_trees.jpg" alt=""></nuxt-link> 
              <p><em>弩炮象的攻擊可以砸倒樹木。</em>
              </p>
            </div>
            <div class="col-md-4"> <nuxt-link to="/img/Balistaelehealed.jpg"><img class="imgn hg" src="~assets/Balistaelehealed.jpg" alt=""></nuxt-link> 
              <p><em>弩炮象雖然屬於攻城單位，但可以被僧侶治療。</em>
              </p>
            </div>
            <div class="col-md-12">
              <div class="col-md-4"> <nuxt-link to="/img/Khmer-vietnamese_battle.png"><img class="imgn hg" src="~assets/Khmer-vietnamese_battle.png" alt=""></nuxt-link> 
                <p><em>弩炮象正防止高棉人的基地被<nuxt-link to="/Rattan_units/Archer">藤甲弓兵</nuxt-link>騷擾。</em>
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