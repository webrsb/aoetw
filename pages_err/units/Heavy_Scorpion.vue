<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
          <h1>重裝弩砲</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>重裝弩砲可訓練於攻城武器製造所，他發射大型箭矢，可對敵人造成貫穿，但只有目標單位會受到全部的傷害，其他單位只會受到一半的傷害。不像投石車，弩砲不會傷害友方單位，所以在近距離的肉搏戰相當好用。</p>
          </div>
          <h3>戰術</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>重裝弩砲對步兵，弓箭手和僧侶等速度慢的單位非常有效，因為速度慢的單位容易被弩砲貫穿攻擊。但弩砲對於快速的步兵，如<nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link>、
              <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>表現並不是很好，因為可以快速縮短距離，並貼身攻擊。而哥德衛隊擁有高遠防，可以抵抗弩砲的攻擊。像大多數的<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>一樣，弩砲必須派其他單位在旁邊保護，因為弩砲速度慢容易遭受攻擊。弩砲最常與
                <nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link>搭配攻擊，可以相輔相成。這個組合在<nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>與
                  <nuxt-link to="/civs/Khmer">高棉</nuxt-link>特別強大。</p>
            <p>如果使用得當，弩砲可以非常有威脅性，一個中等規模的弩砲可以瞬間秒殺整個<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>與
              <nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link>的軍隊，甚至可以抵抗<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>的攻擊，但弩砲很怕遠程單位，如<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>或是
                <nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>。當然如果對自己的控兵有信心，用<nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link>也可以。當然<nuxt-link to="/units/Mangonel">投石車</nuxt-link>與
                  <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>永遠是弩砲的殺手。</p>
          </div>
           <h3>文明可訓練與否</h3> 
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-ok okc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">可訓練</span></strong></h4>  <nuxt-link to="/civs/Chinese">中國</nuxt-link>、 <nuxt-link to="/civs/Malay">馬來</nuxt-link>、 <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
                <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、 <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、 <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
                  <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、 <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、 <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
                    <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、 <nuxt-link to="/civs/Goths">哥德</nuxt-link>、 <nuxt-link to="/civs/Incas">印加</nuxt-link>、 <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
                      <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、 <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、 <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、 <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
                        <nuxt-link to="/civs/Persians">波斯</nuxt-link>、 <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、 <nuxt-link to="/civs/Vikings">維京</nuxt-link>。</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-remove noc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">不可研發</span></strong></h4>  <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、 <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、 <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
                <nuxt-link to="/civs/Indians">印度</nuxt-link>、 <nuxt-link to="/civs/Italians">義大利</nuxt-link>、 <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
                  <nuxt-link to="/civs/Malians">馬利</nuxt-link>、 <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、 <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
                    <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、 <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。</div>
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
              <td class="tta4"><nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link>、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、移動緩慢的單位。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">近戰<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>、<nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link>、
                <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>、<nuxt-link to="/units/Mangonel">投石車</nuxt-link>、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>、
                  <nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link>、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、遠距離單位。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生命值</td>
              <td class="tta4">
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Furor_Celtica">賽爾特狂暴</nuxt-link>(+40%，<nuxt-link to="/civs/Celts">賽爾特</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <img class="gg" src="~assets/Siegeengineers.jpg" alt=""><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>:對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link>攻擊加成+20%。
                <br/>
                <img class="gg" src="~assets/Chemistry.jpg" width="30" alt=""><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
                <br/>
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Rocketry">火箭術</nuxt-link>(+4)
                <br/>
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Torsion_Engines">扭力彈射器</nuxt-link>：攻城器製造所的單位傷害範圍增加。<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>限定
                <br/>
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Double_Crossbow">雙弩箭</nuxt-link>:額外增加一個投射物。<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">範圍</td>
              <td class="tta4">
                <img class="gg" src="~assets/Siegeengineers.jpg" alt=""><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>:對建築物攻擊加成+20%。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <img src="~assets/CastleAgeUnique.png" class="gg" alt=""><nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link>(+4/+0，<nuxt-link to="/civs/Teutons">條頓</nuxt-link>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img src="~assets/Unique-tech.jpg" class="gg" alt=""><nuxt-link to="/techs/Drill">演習</nuxt-link>(+50%，<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">招降抵抗</td>
              <td class="tta4">
                <img class="gg" src="~assets/Faith.jpg" alt=""><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                <br/>
                <img class="gg" src="~assets/Heresy.png" width="30" alt=""><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link> 
              </td>
            </tr>
          </table>
          <h3>剋弩炮的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對弩炮的額外傷害，按造傷殺力排列。
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
                      <img class="gg" src="~assets/PetardIcon.jpg" alt=""><nuxt-link to="/units/Petard">爆炸桶</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+50攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/CappedRamIcon.jpg" width="22" alt=""><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+40攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/BatteringRamIcon.jpg" alt=""><nuxt-link to="/units/Battering_Ram">輕形衝撞車</nuxt-link> 
                    </li>
                    <li>
                      <img src="~assets/CannonGalleonIcon.jpg" alt=""><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                      <img src="~assets/CannonGalleonIcon.jpg"
                      alt=""><nuxt-link to="/units/Elite_Cannon_Galleon">精銳火砲戰船</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+20攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/BombardCannonIcon.jpg" alt=""><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link> 
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+12攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/MangonelIcon.jpg" alt=""><nuxt-link to="/units/Mangonel">輕形投石車</nuxt-link>→
                      <img class="gg" src="~assets/OnagerIcon.jpg"
                      alt=""><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                      <img class="gg" src="~assets/SiegeOnagerIcon.jpg"
                      alt=""><nuxt-link to="/Siege_units/Onager">重型投石車</nuxt-link> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/Magyar_Huszar_icon.jpg" width="22" alt=""><nuxt-link to="/units/Magyar_Huszar">精銳馬札爾驃騎兵</nuxt-link>(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt=""><nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/MangudaiIcon.jpg" width="22" alt=""><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link>(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)</li>
                    <li>
                      <img class="gg" src="~assets/Magyar_Huszar_icon.jpg" width="22" alt=""><nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link>(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="~assets/EagleScoutIcon.jpg" alt=""><nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link>→
                      <img class="gg" src="~assets/EagleWarriorIcon.jpg"
                      alt=""><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link> 
                    </li>
                    <li>
                      <img class="gg" src="~assets/MangudaiIcon.jpg" width="22" alt=""><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：重型弩炮生產快15%。</li>
              <li><nuxt-link to="/civs/Celts">賽爾特</nuxt-link>：重型弩炮攻擊速度快25%。</li>
              <li><nuxt-link to="/civs/Chinese">中國</nuxt-link>：對重型弩炮有加成的科技在帝王時代便宜20%。</li>
              <li><nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>：重型弩炮成本便宜：15%。</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Celts">賽爾特</nuxt-link>：重型弩炮訓練速度快20%。</li>
              <li><nuxt-link to="/civs/Koreans">高棉</nuxt-link>：重型弩炮+1射程。</li>
              <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link to="/techs/Chemistry">化學</nuxt-link>和<nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>的速度快80%。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：重型弩炮對僧侶的招降有較好的抗性。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
            <ul>
              <li>重型弩砲有5的射程。</li>
              <li>重型弩砲有0的<nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
              </li>
              <li>重型弩砲的<nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>為0</li>
              <li>重型弩砲受<nuxt-link to="/techs/Fletching">箭羽</nuxt-link>、<nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>和
                <nuxt-link to="/techs/Bracer">護腕</nuxt-link>加成影響。所以總共可以+3射程和攻擊。</li>
              <li><nuxt-link to="/techs/Chemistry">化學</nuxt-link>給予重型弩砲+2攻擊。</li>
              <li><nuxt-link to="/civs/Britons">不列顛</nuxt-link>:不能使用重型弩炮。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>重型弩砲射程為7。</li>
              <li>重型弩砲有7的<nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>。</li>
              <li>重型弩砲不再有<nuxt-link to="/techs/Fletching">箭羽</nuxt-link>、<nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>和
                <nuxt-link to="/techs/Bracer">護腕</nuxt-link>加成影響。</li>
              <li><nuxt-link to="/techs/Chemistry">化學</nuxt-link>給予+1的攻擊。</li>
              <li>引進<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
              <li><nuxt-link to="/civs/Celts">賽爾特</nuxt-link>:<nuxt-link to="/techs/Furor_Celtica">賽爾特狂暴</nuxt-link>給予弩炮多50%的HP。、</li>
              <li><nuxt-link to="/civs/Chinese">中國</nuxt-link>:引進<nuxt-link to="/techs/Rocketry">火箭術</nuxt-link>。</li>
              <li><nuxt-link to="/civs/Mongols">蒙古</nuxt-link>:引進<nuxt-link to="/techs/Drill">演習</nuxt-link>科技。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
            <ul>
              <li><nuxt-link to="/civs/Celts">賽爾特</nuxt-link>:<nuxt-link to="/techs/Furor_Celtica">賽爾特狂暴</nuxt-link>給予弩炮多40%的HP。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：引進<nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link>
              </li>
              <li><nuxt-link to="/civs/Britons">不列顛</nuxt-link>:可以使用重型弩炮了。</li>
            </ul>
            <h3><em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em></h3>
            <ul>
              <li>增加弩砲的砲彈大小</li>
            </ul>
            <h3>趣事</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>以前征服者入侵的中文版本，把弩砲直接翻譯成蠍子。</li>
                <li>弩砲是遊戲中唯一只有一次升級的攻城單位。</li>
                <li>弩砲有0的近戰攻擊，所以攻擊近戰防禦-3的<nuxt-link to="/units/Battering_Ram">衝車</nuxt-link>是可以的，有意思的是弩砲對衝車還有加成。</li>
              </ul>
            </div>
            <h3>圖庫</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-4"> <nuxt-link to="/img/Heavyscorpion.png"><img class="imgn hg" src="~assets/Heavyscorpion.png" alt=""></nuxt-link> 
                  <p><em>一群重型弩砲</em>
                  </p>
                </div>
                <div class="col-md-4"> <nuxt-link to="/img/Scorpionline.png"><img class="imgn hg" src="~assets/Scorpionline.png" alt=""></nuxt-link> 
                  <p><em>弩砲與重型弩砲</em>
                  </p>
                </div>
              </div>
            </div>
            <h3>歷史</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <div class="col-md-12">
                <p>投射機（Ballista）或稱扭力弩砲，是以絞繩的扭力（而非「弓身」的彈力）來發射物體的大型冷兵器砲。此器與弩、牀弩依靠弓身的彈力來發射物體的運作模式不同。投射機最早可追溯至古希臘時代。古羅馬軍隊使用的投射機有分大型與小型，小型的投射器又稱作蠍砲（Scorpius）。另外也有單兵使用的手持投射機（扭力弩）。</p>
                <p>床弩又稱床子弩、牀弩、牀子弩（Arcuballista），在中國最早出現於戰國時代，是把弩大型化或有多個弩翼（弓身），裝在發射台或車輛上的一種大型的特殊弩。床弩的主要使用目的是攻城或海戰。據《武經總要》記載宋朝軍隊中共有六種床弩。典型的中國床子弩使用絞車拉動弓弦，操作士兵達7名，根據宋人記載的最高射程約合現在的1500米。根據史料記載，遼軍將領蕭撻凜便是被400多米外宋軍陣地的兩米巨箭射殺，最終雙方簽訂著名的「澶淵之盟」</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">重裝弩砲</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/HeavyScorpionIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">請看介紹</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="~assets/Imperial-age-research.jpg" width="30" alt=""><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" width="25px" src="~assets/Siegeworkshopicon.png" alt=""><nuxt-link to="/building/Siege_Workshop">攻城武器製造所</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">30秒</td>
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
              <td class="unit4">75</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3"><nuxt-link to="/elements/Attack">攻擊</nuxt-link>
              </td>
              <td class="unit4">16(遠程)0(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <td class="unit4">+8 vs<nuxt-link to="/armor/Armor_Class_War_Elephant">戰象</nuxt-link>
                <br/>+4 vs<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
                <br/>+2 vs<nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3"><nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
              </td>
              <td class="unit4">3.6</td>
            </tr>
            <tr>
              <td class="unit3">開火間隔</td>
              <td class="unit4">7</td>
            </tr>
            <tr>
              <td class="unit3">射程</td>
              <td class="unit4">7</td>
            </tr>
            <tr>
              <td class="unit3">最小射程</td>
              <td class="unit4">2</td>
            </tr>
            <tr>
              <td class="unit3">命中率</td>
              <td class="unit4">100%</td>
            </tr>
            <tr>
              <td class="unit3">炮彈速度</td>
              <td class="unit4">6</td>
            </tr>
            <tr>
              <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link>
              </td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">7</td>
            </tr>
            <tr>
              <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link>
              </td>
              <td class="unit4"><nuxt-link to="/armor/Armor_Class_Siege_Weapon">攻城武器</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">速度</td>
              <td class="unit4">0.65</td>
            </tr>
            <tr>
              <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link>
              </td>
              <td class="unit4">9</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">單位演變</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">從升級</td>
              <td class="unit4">
                <img class="gg" src="~assets/ScorpionIcon.jpg" alt=""> <nuxt-link to="/units/Scorpion">弩砲</nuxt-link>
              </td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由眠協助編輯</div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
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