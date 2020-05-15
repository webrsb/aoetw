<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>輕型投石車</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>輕型投石車</b>是一個<nuxt-link
              to="/armor/Armor_Class_Siege_Weapon"
              >遠程攻城武器</nuxt-link
            >
            ，當玩家升級到了<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >後，便可以在<nuxt-link to="/units//building/Siege_Workshop"
              >攻城器製造所</nuxt-link
            >進行訓練。 主要拿來對付成群的敵人，他的高攻擊與<nuxt-link
              to="/elements/Area_of_Effect"
              >擴散傷害</nuxt-link
            >是所有<nuxt-link to="/units/Archer_Units">遠距離單位</nuxt-link
            >的惡夢。而弱點有低<nuxt-link to="/elements/Rate_of_Fire"
              >射速</nuxt-link
            >與最小範圍。研發<nuxt-link to="/techs/Chemistry">化學</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >後，攻擊時會噴賤出高溫的成群熱火球(類似超級瑪莉吃火時吐出的火花)，也是少數可以預判對手走位，攻擊指定範圍的單位。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
            >初期，<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
            >是一個非常昂貴的單位，行走速度非常的緩慢，但優異的<nuxt-link
              to="/elements/Area_of_Effect"
              >擴散傷害</nuxt-link
            >，是步弓單位的天敵，關鍵時刻的一擲，可能瞬間逆轉局勢。
          </p>
          <p>
            事實上，<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
            >的傷害並沒有對<nuxt-link to="/building/Archery_Range"
              >射箭場</nuxt-link
            >單位有額外的加成效果，但因為該單位特殊的<nuxt-link
              to="/elements/Area_of_Effect"
              >擴散效果</nuxt-link
            >，每次都會擲出的<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >，除了會造成中心位置40的傷害外，只要在傷害半徑內，都會受到額外的火球疊加傷害，也因為這樣的特質，被喻為成群弓手的剋星一點都不為過。不過優秀的玩家通常會利用其厲害的控兵技巧來躲避<nuxt-link
              to="/units/Mangonel"
              >投石車</nuxt-link
            >的攻擊，進而射爆投石車。
          </p>
          <p>
            <nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
            >的射程到達7，恰好可以投擲到<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >(起始放箭距離為6)，所以將<nuxt-link to="/units/Mangonel"
              >輕型投石車</nuxt-link
            >拿來拆除<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >也是個不錯的選擇，但<nuxt-link to="/elements/Hit_points"
              >生命值</nuxt-link
            >過低，移動速度慢，加上有最小的射程限制，很容易被敵方機動性高的兵種反制，使用上非常吃判斷力，被成群的敵軍包圍時，大概就沒有什麼生存的機會了。
          </p>
          <p>
            與<nuxt-link to="/units/Monk">僧侶</nuxt-link>或<nuxt-link
              to="/units/Spearman"
              >槍兵</nuxt-link
            >的配合是一個絕佳組合，因為可以相輔相成。而僧投(<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >+投石車)戰術更是經典中的經典。
          </p>
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
            <td class="tta4">
              <nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >、<nuxt-link to="/units/Villager">村民</nuxt-link>、<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >、<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>、<nuxt-link
                to="/units/Battering_Ram"
                >輕型衝撞車</nuxt-link
              >、<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >、群聚的單位。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              近戰<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
              >、<nuxt-link to="/units/Magyar_Huszar">馬扎爾驃騎兵</nuxt-link
              >、<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
              >、<nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link
              >、<nuxt-link to="/units/Condottiero">傭兵</nuxt-link>、<nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >。
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
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Furor_Celtica">塞爾特狂熱</nuxt-link
              >(+40%，<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Attack">攻擊力</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/siege_engineers.png"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >:對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >攻擊加成+20%。<br />
              <img
                class="gg"
                src="~assets/chemistry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1) <br />
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Torsion_Engines">扭力彈射器</nuxt-link
              >：攻城器製造所的單位傷害範圍增加。<nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">射程</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/siege_engineers.png"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >:攻城武器射程+1(<nuxt-link to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >除外)<br />
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Shinkichon">投擲器</nuxt-link
              >(+1，<nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Ironclad"
                >鋼鐵甲</nuxt-link
              >(+4/+0，<nuxt-link to="/civs/Teutons">條頓</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Drill">鑿岩機</nuxt-link>(+50%，<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img class="gg" src="~assets/faith.png" alt="" /><nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >
              <br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
            </td>
          </tr>
        </table>

        <h3>剋輕型投石車的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
          >的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+65攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SiegeRamIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PetardIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Petard">炸藥桶</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CappedRamIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BatteringRamIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Battering_Ram"
                      >輕型衝撞車</nuxt-link
                    >
                  </li>
                  <li>
                    <img src="~assets/CannonGalleonIcon.png" alt="" /><nuxt-link
                      to="/units/Cannon_Galleon"
                      >火砲戰船</nuxt-link
                    >→
                    <img src="~assets/CannonGalleonIcon.png" alt="" /><nuxt-link
                      to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+20攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangonelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OnagerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/SiegeOnagerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >精銳馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteEagleWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Eagle_Warrior"
                      >精銳鷹勇士</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleScoutIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：輕型投石車生產速度快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：科技在<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：<nuxt-link
                to="/units/Siege_Weapons"
                >攻城器單位</nuxt-link
              ><nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link
              >快25%(<nuxt-link to="/tree/vie">科技樹</nuxt-link>寫20%是錯的!)
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：輕型投石車<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >成本減少15%。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：輕型投石車訓練成本減少15%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：輕型投石車訓練和升級速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link
              >：投石車最小射程移除。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >的速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：輕型投石車對僧侶的招降有較好的抗性。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>移動速度為0.5。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>輕型投石車現在移動速度增加到0.6。</li>
            <li>
              輕型投石車對<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >有+12的攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>:引進<nuxt-link
                to="/techs/Drill"
                >鑿岩機</nuxt-link
              >科技。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>:<nuxt-link
                to="/techs/Shinkichon"
                >投擲器</nuxt-link
              >：給予投石車+2的射程，到了1.0c版效果減少為1。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>的<nuxt-link
                to="/elements/Team_Bonus"
                >團隊加分</nuxt-link
              >讓投石車有+1射程。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：<nuxt-link
                to="/techs/Furor_Celtica"
                >塞爾特狂熱</nuxt-link
              >給予投石車+40%的HP。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：<nuxt-link
                to="/techs/Ironclad"
                >鋼鐵甲</nuxt-link
              >引入。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link
              >的團隊加分改為最小範圍-2，而不是射程+1。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              在<nuxt-link to="/games/aof">失落的帝國</nuxt-link
              >之前，投石車研發<nuxt-link to="/techs/Chemistry">化學</nuxt-link
              >會變弱，投擲速度從3.5降低到2.9。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/units/Trebuchet">投石機</nuxt-link
            >或稱拋石機、「回回炮」,砲或炮，是遠古時代與中古時代出現的攻城武器，可把石彈、巨石或爆裂物投到敵方的<nuxt-link
              to="/building/Stone_Wall"
              >城牆</nuxt-link
            >、城內或者兵陣內而造成破壞。
          </p>
          <p>
            漢語的「砲」便是古漢語動詞「拋」的名詞形式，這種通過聲調改變詞性的手段被稱為四聲別義。「砲」原指投石機與其彈，唐後也指由投石機發射的燃燒物，宋後也指由投石機發射的縱火物與爆裂物，明後也指大型管身火器。宋代之前「砲」與「炮」不同義，「炮」只有「燒烤」的意思，宋代之後「炮」逐漸有「砲」的意思。就連「<nuxt-link
              to="/units/Bombard_Cannon"
              >火砲</nuxt-link
            >」一詞最初也是指發射燃燒物或爆裂物投石機與其砲彈，明後才也指大型管身火器。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Mangonel.png" alt=""
              /></gallery>
              <p><em>輕型投石車</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Mangonelline.png" alt=""
              /></gallery>
              <p><em>投石車系</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Mangonneau.png" alt=""
              /></gallery>
              <p><em>畫家素描下現實世界的投石車</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">輕型投石車</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/MangonelIcon.png" class="img-fluid" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Siege-workshop-logo.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">46秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">160</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">135</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">40(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +35 vs<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              ><br />+12 vs<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">擴散範圍</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3">最小距離</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">射速</td>
            <td class="unit4">3.5</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.6</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">9</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/OnagerIcon.png" alt="" /><nuxt-link
                to="/units/Onager"
                >中型投石車</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img class="gg" src="~assets/onager.png" alt="" />800<nuxt-link
                to="/resource/Food"
                >食物</nuxt-link
              >500黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">75秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由JuneRain六月雨協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allunit',
  components: {}
}
</script>
<style></style>
