<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>攻城塔</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>攻城塔</b>是一種<nuxt-link to="/units/Siege_Weapons"
              >攻城武器單位</nuxt-link
            >，他引進自《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》，一開始他只能在某些<nuxt-link to="/batt">戰役</nuxt-link
            >或是地圖編輯器中使用，但是《<nuxt-link to="/games/ak"
              >世紀帝國II：非洲王國</nuxt-link
            >》推出後，他便可以在<nuxt-link to="/building/Siege_Workshop"
              >攻城器製造所</nuxt-link
            >訓練。它本身並不能攻擊，只能把友軍單位神不知鬼不覺的運送到 牆內。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>失落的帝國</h3>
          <p>
            攻城塔有很高的<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
            >與<nuxt-link to="/armor">遠防</nuxt-link
            >，可以向附近的敵人射箭來防禦，然而用它來防禦仍然不夠，甚至比<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >還遭，倒是比較像是可以運兵的<nuxt-link to="/units/Battering_Ram"
              >衝撞車</nuxt-link
            >。
          </p>
          <h3>非洲王國</h3>
          <p>
            非洲王國的攻城塔不再有<nuxt-link to="/elements/Attack"
              >攻擊力</nuxt-link
            >，變成純粹的運兵裝置，且可以把軍隊從牆的這邊運送到另一邊，當敵人的基地有非常強大的防守，而無法突破時，攻城塔便十分有用，可以廣泛運用於<nuxt-link
              to="/maps/Arena"
              >圍城</nuxt-link
            >或是<nuxt-link to="/maps/Black_Forest">黑森林</nuxt-link
            >這種封閉地圖。
          </p>
          <p>
            另外裝滿10名<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >或是<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>的<nuxt-link
              to="/ar/armstower"
              >裝甲塔</nuxt-link
            >速度為1.3，比沒有<nuxt-link to="/techs/Squires">護衛技術</nuxt-link
            >的<nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link
            >還快，這使得它成為一種有效的運輸單位。
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
            <td class="tta4">沒有。</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              近戰單位、<nuxt-link to="/units/Magyar_Huszar"
                >馬扎爾驃騎兵</nuxt-link
              >、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>。
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
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Furor_Celtica"
                >塞爾特狂暴</nuxt-link
              >(+40%，<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Chemistry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">範圍</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Siegeengineers.jpg"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >:對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >攻擊加成+20%。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Ballistics.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >:對移動目標命中率上升(只影響《世紀帝國II：失落的帝國》的攻城塔)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                src="~assets/CastleAgeUnique.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link
              >(+4/+0，<nuxt-link to="/civs/Teutons">條頓</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Drill"
                >演習</nuxt-link
              >(+50%，<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img class="gg" src="~assets/Faith.jpg" alt="" /><nuxt-link
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

        <h3>剋攻城塔的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對攻城塔的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+65攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SiegeRamIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PetardIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Petard">爆炸桶</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CappedRamIcon.jpg"
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
                      src="~assets/BatteringRamIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Battering_Ram"
                      >輕型衝撞車</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+20攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangonelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OnagerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/SiegeOnagerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >精銳馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ConquistadorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Conquistador">精銳征服者</nuxt-link
                    >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteEagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Eagle_Warrior"
                      >精銳鷹勇士</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ConquistadorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Conquistador">征服者</nuxt-link
                    >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarGalley.jpg"
                      alt=""
                    /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/GalleonAoE2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CaravelIcon2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleScoutIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Slinger_Icon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Slinger">投石手</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/Galley.jpg" alt="" /><nuxt-link
                      to="/units/Galley"
                      >戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JanissaryIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Janissary"
                      >精銳土耳其火槍兵</nuxt-link
                    >(<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HandCannoneerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyScorpionIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JanissaryIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
                    >(<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >精銳馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ScorpionIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Scorpion">弩砲</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/OrganGunIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OrganGunIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Organ_Gun">精銳風琴砲</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              技術:以下技術會給以下單位對攻城塔有額外攻擊
              <div class="n1">
                <img
                  class="gg"
                  src="~assets/CastleAgeUnique.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Boiling_Oil">沸油</nuxt-link>(<nuxt-link
                  to="/civs/Persians"
                  >波斯</nuxt-link
                >限定)
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Castleicon.png"
                      alt=""
                    /><nuxt-link to="/building/Castle">城堡</nuxt-link>
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
              >：攻城塔生產快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：<nuxt-link
                to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >快25%。
            </li>
            (只影響《世紀帝國II：失落的帝國》的攻城塔，其他資料片的不會)
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：利於攻城塔的技術在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >便宜10％/15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：攻城塔<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >成本減少15%。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：攻城塔成本便宜15%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：攻城塔訓練速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                to="/techs/Ballistics"
                >彈道學</nuxt-link
              >，<nuxt-link to="/techs/Chemistry">化學</nuxt-link>和<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >的速度快80%。
            </li>
            <strong
              >(這些<nuxt-link to="/techs">科技</nuxt-link
              >只影響《世紀帝國II：失落的帝國》的攻城塔，其他資料片的不會)</strong
            >
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：攻城塔對<nuxt-link
                to="/elements/Conversion"
                >僧侶的招降</nuxt-link
              >有較好的抗性。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>攻城塔成本為300W/160G。</li>
            <li>
              攻城塔有6的射程(最小射程1)6的攻擊(對<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >+6)，<nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link
              >為4，命中率為90％。
            </li>
            <li>移動速度0.6。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              攻城塔不能攻擊，但可以運送部隊穿越<nuxt-link
                to="/building/Stone_Wall"
                >城牆</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
              >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >對攻城塔有+5的傷害。
            </li>
            <li>攻城塔現在移動速度為0.8。</li>
            <li>4.8版本後，訓練成本為200W160G。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>攻城塔是唯一一個無法攻擊的單位。</li>
            <li>
              地圖編輯器還是把攻城塔列為<nuxt-link to="/games/aoc"
                >征服者入侵</nuxt-link
              >的單位，LOGO也是。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link
              >的攻城塔塞滿步兵速度是1.7，是路上最快的單位之一，速度甚至超越了有<nuxt-link
                to="/techs/Husbandry"
                >畜牧培育</nuxt-link
              >的<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>。
            </li>
            <li>
              AOE
              HD論壇曾經為了攻城塔要不要給它攻擊而有過激烈的討論。有人覺得沒有攻擊的攻城塔是一個沒用的單位。
            </li>
            <li>
              5名<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >駐守在衝撞車內的速度是0.75，而<nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >速度為0.7，但研發<nuxt-link to="/techs/Squires"
                >護衛技術</nuxt-link
              >後，條頓武士速度為0.77，並沒有比較快。但如果裝在攻城塔內，速度就來到了1.3，可以更有效率的運用條頓武士。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <p>
              攻城塔是用來穿越敵人的城牆，外觀經常覆蓋著動物的毛皮，讓它有防火性，為了進一步防禦，通常會在攻城塔上或內部開火。
            </p>
            <p>
              是古戰場上常用的大型<nuxt-link to="/units/Siege_Weapons"
                >攻城器</nuxt-link
              >械，一般由結實的木料組合而成，高4米到8米甚至10米以上。四方柱型，下有車輪，可以推動。攻城時士兵站在頂部，以弓箭等<nuxt-link
                to="/units/Archer_Units"
                >遠程</nuxt-link
              >武器對守城士兵造成傷害和威脅。從某種程度上說是雲梯的攻擊加強。是弓箭部隊常用的攻城工具。除常規對守城士兵造成強力的殺傷外，並可以通過火箭削弱對方士氣，居高臨下射箭攻擊，消滅對方兵力，進而減弱守城方的抵抗力量。
            </p>
          </div>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Siegetower.jpg" alt=""
              /></gallery>
              <p><em>一群攻城塔</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Siege_Tower_attacking.png"
                  alt=""
              /></gallery>
              <p>
                <em>《世紀帝國II：失落的帝國》的攻城塔是可以射箭攻擊的</em>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">攻城塔</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Siegetowericon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
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
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                width="25px"
                src="~assets/Siegeworkshopicon.png"
                alt=""
              /><nuxt-link to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">36秒</td>
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
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">160</td>
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
            <td class="unit4">220</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">-2</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Garrison">駐軍</nuxt-link>
            </td>
            <td class="unit4">10</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">速度</nuxt-link>
            </td>
            <td class="unit4">0.8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
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
