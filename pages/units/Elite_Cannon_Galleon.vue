<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>精銳火砲戰船</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>精銳火砲戰船</b>在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >的<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >可以訓練。要訓練精銳火砲戰船得先升級精銳火砲戰船<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >。升級後射程更遠，攻擊更高，擅長摧毀陸上<nuxt-link to="/building"
              >建築</nuxt-link
            >，但對<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
            >的反應能力較弱。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            精銳火砲戰船的射程遠比<nuxt-link to="/building/Castle"
              >城堡</nuxt-link
            >和<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
            >遠，而且對<nuxt-link to="/armor/Armor_Class_Building"
              >建築物</nuxt-link
            >有額外傷害加成，可說是"海上的<nuxt-link to="/units/Bombard_Cannon"
              >火砲</nuxt-link
            >"(速度比火砲稍快)。精銳火砲戰船有不錯的傷害，但是緩慢的開火速率，砲彈飛行時間長，有最小射程限制等缺點讓他們對船隻的攻擊幾乎沒有抵抗能力，尤其是<nuxt-link
              to="/units/Fire_Ship"
              >火戰船</nuxt-link
            >。
          </p>
          <p>
            當<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
            >在執行岸邊轟炸城堡和<nuxt-link to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >時，火砲戰船身邊應該要有<nuxt-link to="/units/War_Galley"
              >弩砲戰船</nuxt-link
            >和<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>做護衛保護。
          </p>
          <p>
            一般來說，精銳火砲戰船主要用來清理敵方海岸線的建築物，偶爾騷擾範圍內的地面單位。他們不應該用來對付敵方的船隻，而且如果海上威脅沒有完全消失的話，他們很容易就會被消滅。
          </p>
          <p>
            <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
            >的精銳火砲戰船比其他<nuxt-link to="/civs">文明</nuxt-link
            >的<nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link
            >要快(每秒飛行7格而不是每秒飛行1.39格)，而且有<nuxt-link
              to="/techs/Ballistics"
              >彈道學</nuxt-link
            >加成可以更容易擊中移動目標。
          </p>
        </div>
        <h3>文明可訓練與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <b
                  ><i class="fas fa-check" style="color: green;"></i>可訓練：</b
                >
              </h4>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、<nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >、<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
                to="/civs/Indians"
                >印度</nuxt-link
              >、<nuxt-link to="/civs/Italians">義大利</nuxt-link>、<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >、<nuxt-link to="/civs/Khmer">高棉</nuxt-link>、<nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >、<nuxt-link to="/civs/Persians">波斯</nuxt-link>、<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>、<nuxt-link
                to="/civs/Vietnamese"
                >越南</nuxt-link
              >、<nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <b
                  ><i class="fas fa-times" style="color: #d9534f;"></i
                  >不可訓練：</b
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Britons"
                >不列顛</nuxt-link
              >、<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >、<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈奴</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Koreans">韓國</nuxt-link>、<nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >、<nuxt-link to="/civs/Malians">馬利</nuxt-link>、<nuxt-link
                to="/civs/Mayans"
                >馬雅</nuxt-link
              >、<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >、<nuxt-link to="/civs/Teutons">條頓</nuxt-link>。
            </div>
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
            <td class="tta4"><nuxt-link to="/building">建築物</nuxt-link>。</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Naval_Vessels">船</nuxt-link>、<nuxt-link
                to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">射程</td>
            <td class="tta4">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/unique_tech_imperial.png"
                alt=""
              /><nuxt-link to="/techs/Artillery">砲兵</nuxt-link>(+2，<nuxt-link
                to="/civs/Turks"
                >土耳其</nuxt-link
              >限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/unique_tech_imperial.png"
                alt=""
              /><nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>(<nuxt-link
                to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >對移動目標命中率提升，<nuxt-link to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">護甲</td>
            <td class="tta4">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/careening.png"
                alt=""
              /><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link
              >(護甲+0/+1) <br />
              <img
                class="gg"
                src="~assets/unique_tech.png"
                style="margin: 2px;"
                alt=""
              /><nuxt-link to="/techs/Carrack">克拉克帆船</nuxt-link
              >(護甲+1/+1，<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/dry_dock.png"
                alt=""
              /><nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link>(+15%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              抗<nuxt-link to="/elements/Conversion">招降</nuxt-link>能力
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/faith.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link><br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">訓練速度</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/shipwright.png"
                alt=""
              /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>(+54%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">造價減少</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/shipwright.png"
                alt=""
              /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>(-20%)
            </td>
          </tr>
        </table>

        <h3>剋精銳火砲戰船的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對精銳火砲戰船的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/bombard_tower.png"
                      alt=""
                    /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+17攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+16攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GalleonAoE2.png"
                      alt=""
                    /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img src="~assets/LongboatIcon.png" alt="" /><nuxt-link
                      to="/units/Longboat"
                      >精銳維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Keep"
                      >大型箭塔</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/CondottieroIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link
                    >和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SpearmanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyCamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >(後者<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarGalley.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Guard_Tower"
                      >防禦箭塔</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/dock.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/building/Harbor">海港</nuxt-link
                    >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Galley.png" alt="" /><nuxt-link
                      to="/units/Galley"
                      >戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant"
                      >精銳弩砲象</nuxt-link
                    >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Watch_Tower"
                      >瞭望箭塔</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><nuxt-link to="/units/Genoese_Crossbowman"
                      >精銳熱那亞弩手</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><nuxt-link to="/units/Genoese_Crossbowman"
                      >熱那亞弩手</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FastFireShipIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Fast_Fire_Ship"
                      >快速火戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FireGalleyIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/FireShipIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
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
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        以下科技可讓以下單位對精銳火砲戰船有額外<nuxt-link to="/elements/Attack"
          >攻擊力</nuxt-link
        >
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <img src="~assets/heated_shot.png" width="22" alt="" /><nuxt-link
                to="/techs/Heated_Shot"
                >預熱射擊</nuxt-link
              >
              <div style="margin:12px 0px;"><strong>+13攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Keep"
                    >大型箭塔</nuxt-link
                  >
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Guard_Tower"
                    >防禦箭塔</nuxt-link
                  >
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Watch_Tower"
                    >瞭望箭塔</nuxt-link
                  >
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/castle.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/building/Castle">城堡</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/dock.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/building/Harbor">海港</nuxt-link>(<nuxt-link
                    to="/civs/Malay"
                    >馬來</nuxt-link
                  >限定)
                </li>
              </ul>
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：精銳火砲戰船移動速度快10%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >花費便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >：訓練精銳火砲戰船成本便宜20%。研究<nuxt-link
                to="/techs/Careening"
                >傾側維修術</nuxt-link
              >，<nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link>和<nuxt-link
                to="/techs/Shipwright"
                >造船匠</nuxt-link
              >便宜50％。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：精銳火砲戰船訓練的速度在帝王提高20%。研究<nuxt-link
                to="/techs/Careening"
                >傾側維修術</nuxt-link
              >、<nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link
              >的速度快20％。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：訓練精銳火砲戰船的花費減少15%<nuxt-link to="/resource/Gold"
                >黃金</nuxt-link
              >，精銳火砲戰船HP+10％。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：精銳火砲戰船自身有彈道學加成而且射速更快。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：精銳火砲戰船HP+25%。升級精銳火砲戰船話費-50%。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：精銳火砲戰船訓練的費用在帝王減少20%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >：精銳火砲戰船訓練速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：精銳火砲戰船對招降的抵抗力更強。
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
            <li>
              <nuxt-link to="/techs/Shipwright">造船匠</nuxt-link
              >減少20%船隻<nuxt-link to="/resource/Wood">木材</nuxt-link>成本。
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >:不能訓練精銳火砲戰船。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >:精銳火砲戰船有150HP，然後因為bug讓精銳火砲戰船沒有吃到火藥單位HP+50%的文明加成。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              1.0版本<nuxt-link to="/techs/Shipwright">造船匠</nuxt-link
              >還可減少35%的船隻訓練時間。
            </li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >:精銳火砲戰船受彈道學加成而且砲彈速度更快。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>:引進<nuxt-link
                to="/techs/Artillery"
                >砲兵</nuxt-link
              >，精銳火砲戰船現在HP+25%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >:精銳火砲戰船便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link
              >:精銳火砲戰船從<nuxt-link to="/tree/vie">科技樹</nuxt-link>移除。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >:精銳火砲戰船自身有彈道學(不須研發彈道學)而砲彈速度變為7格/秒(~3.6倍快)。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >:4.8版本後精銳火砲戰船現在便宜20%。
            </li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              如果在場景編輯器中一個不在後帝王時代的玩家創建了一艘精銳火砲戰船，它將能夠執行跟隨另一個單位或保護另一個單位的行動，如果在遊戲中訓練時它將不能執行以上動作。
            </li>
            <li>
              精銳火砲戰船是<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
              >船艦中基礎射程最遠的(15)，也是全單位射程距離第二遠的僅次於<nuxt-link
                to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >。<nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >的精銳火砲戰船因為<nuxt-link to="/techs/untech"
                >特殊科技</nuxt-link
              ><nuxt-link to="/techs/Artillery">砲兵</nuxt-link
              >的關係可以獲得+2射程，讓他們的精銳火砲戰船跟有研發<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >的<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >並列射程最遠單位。
            </li>
            <li>
              火砲戰船和精銳火砲戰船共用一個頭像。他們也是唯一非<nuxt-link
                to="/units/Unique_Unit"
                >特殊單位</nuxt-link
              >這麼做的。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            大砲在十四世紀首次被裝在船上。這些大砲被安裝在船尾或船頭可以朝前面或後面的敵人發射。小型武器被安裝在軌道上，用於對付敵方船員。第一艘為戰鬥裝載大砲而建造的船出現在1406年。在船上有效地安裝大量大砲需要很多年才能解決。它需要新的設計來彌補船側的槍支的重量。解決方案的設計必須讓槍支能夠安全地射擊和重新裝填。粉末的儲存和取用也需要安全程序。真正能上戰場的火砲戰船直到中世紀晚期才出現。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Cannongalleon.jpg" alt=""
              /></gallery>
              <p><em>一群精銳火砲戰船。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/CGHD.jpg" alt=""
              /></gallery>
              <p>
                <em
                  >各種精銳火砲戰船(世紀帝國II和<nuxt-link to="/games/aoc"
                    >征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/CGDLC.jpg" alt=""
              /></gallery>
              <p><em>各種精銳火砲戰船(HD擴充資料片)。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                精銳火砲戰船
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CannonGalleonIcon.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
              >、<nuxt-link to="/units/Naval_Vessels">船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">請看分類</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/imperial_age.png" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/dock.png" alt="" /><nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
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
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">150</td>
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
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">45(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">傷害加成</td>
            <td class="unit4">
              +275對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              ><br />+40對<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
              <br />+15對<nuxt-link to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link
              >
              <br />+15對<nuxt-link to="/armor/Armor_Class_Archer"
                >弓兵</nuxt-link
              >
              <br />+15對<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">射速</td>
            <td class="unit4">10秒/次</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">15</td>
          </tr>
          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3">準確率</td>
            <td class="unit4">50%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">1.95</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                >火藥單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.1</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">17</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/CannonGalleonIcon.png"
                alt=""
              /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
