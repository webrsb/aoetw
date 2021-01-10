<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>運輸船</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>運輸船</b>可以在<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >中訓練。它可以運送任何單位，但也不能攻擊其他單位。運輸船使陸地單位可以在水面上移動，對於進行偷襲非常有效。
            <br />它<nuxt-link to="/elements/Hit_points">血量</nuxt-link
            >偏低，但它擁有較高的<nuxt-link to="/units/Archer_Units"
              >遠程</nuxt-link
            >防禦。但如果它沉沒了，你所有的<nuxt-link to="/elements/Garrison"
              >駐軍</nuxt-link
            >都會死亡。因此，最好用<nuxt-link to="/units/Galley">戰船</nuxt-link
            >或者是<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
            >等軍用<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
            >來保護運輸工具。
          </p>
          <p>
            一開始運輸船的載運量只有5，研發<nuxt-link to="/techs/Careening"
              >航海技術</nuxt-link
            >和<nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link
            >後會分別增加到10和20的載運量。<nuxt-link to="/civs/Saracens"
              >薩拉森</nuxt-link
            >人則可以擁有額外的+5載運量(最多25)
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            從<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
            >開始，運輸船就可以在水上進行偷襲、偵查。也可以利用運輸船來欺騙敵人；玩家可以用幾個便宜的單位駐防在運輸船內，並讓對手來追擊他們。引開敵人的主力，趁機發動攻擊。
          </p>
          <p>
            運輸船在大型水域地圖中是不可或缺的，因為沒有其他方法可以讓陸上單位在島嶼間通行。
          </p>
          <p>
            如果裝有駐軍的運輸船被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >，其中的駐軍並不會被招降，玩家必須要摧毀運輸船才可以殺死敵方單位。另一個涉及運輸船的策略是利用這個戰術，把敵人的駐軍留在裡面，因為敵人無法使用，所以導致敵人會卡人口並無人可用。
          </p>
          <p>
            值得一提的是，搬有<nuxt-link to="/elements/Relic">遺跡</nuxt-link
            >的<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >要是在運輸船中，而船被摧毀時，<nuxt-link to="/elements/Relic"
              >遺跡</nuxt-link
            >則會回到原本<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >上船的地方。
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
            <td class="tta4">無</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">任何東西</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">工作速率</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/gillnets.png"
                alt=""
              /><nuxt-link to="/techs/Gillnets">流刺網</nuxt-link>(+25%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">護甲</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/careening.png"
                alt=""
              /><nuxt-link to="/techs/Careening">航海技術</nuxt-link>(護甲+0/+1)
              <br />
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
                style="margin: 2px;"
                class="gg"
                src="~assets/dry_dock.png"
                alt=""
              /><nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>(+15%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">抗招降能力</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/faith.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link><br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="30"
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
              /><nuxt-link to="/techs/Shipwright">造船員</nuxt-link>(+54%)
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
              /><nuxt-link to="/techs/Shipwright">造船員</nuxt-link>(-20%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">運輸量</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/careening.png"
                alt=""
              /><nuxt-link to="/techs/Careening">航海技術</nuxt-link>(+5)
              <br />
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/dry_dock.png"
                alt=""
              /><nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>(+10)
            </td>
          </tr>
        </table>

        <h3>剋運輸船的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對運輸船的額外傷害，按照殺傷力排列。
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
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link
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
                    /><nuxt-link to="/units/Heavy_Camel_Rider"
                      >重裝駱駝騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Camel_Rider"
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
                      src="~assets/HarborIcon.png"
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
                    /><nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link>
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
                      >重型火戰船</nuxt-link
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
                    /><nuxt-link to="/units/Fire_Galley">火艨艟</nuxt-link>→
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
        以下科技可讓以下單位對運輸船有額外<nuxt-link to="/elements/Attack"
          >攻擊力</nuxt-link
        >
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <img src="~assets/heated_shot.png" width="22" alt="" /><nuxt-link
                to="/techs/Heated_Shot"
                >火箭</nuxt-link
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
                    src="~assets/HarborIcon.png"
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
              >：運輸船移動速度提高10％。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研究<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50％。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：在<nuxt-link
                to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >內的動物不會被轉化
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：有利於運輸船的<nuxt-link to="/techs">科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link>便宜
              15/20％
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>：研究<nuxt-link
                to="/techs/Careening"
                >航海技術</nuxt-link
              >，<nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>和<nuxt-link
                to="/techs/Shipwright"
                >造船員</nuxt-link
              >便宜50％。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：運輸船訓練的速度在<nuxt-link to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >提高10%/15%/20%，<nuxt-link to="/techs/Careening"
                >航海技術</nuxt-link
              >的研究速度在城堡/帝王提高15%/20％。研究<nuxt-link
                to="/techs/Dry_Dock"
                >船塢</nuxt-link
              >的時間快20％。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>：運輸船有+
              10％HP。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：運輸船HP+100%和+5運輸量
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>：運輸船在<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >便宜10%/10%/15%/20%
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：隊伍中的運輸船對招降的抵抗力更強。
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
              運輸船在<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
              >就可以訓練。
            </li>
            <li>
              <nuxt-link to="/techs/Shipwright">造船員</nuxt-link
              >減少20%船隻<nuxt-link to="/resource/Wood">木材</nuxt-link>成本。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:運輸船成本便宜20%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              1.0版本<nuxt-link to="/techs/Shipwright">造船員</nuxt-link
              >還可減少35%的船隻訓練時間。
            </li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              運輸船在<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
              >就可以訓練。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>：運輸船在<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代便宜10%/10%/15%/20%
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              運輸船現在可以裝載能被馴化的動物(<nuxt-link
                to="/units/animal/Sheep"
                >綿羊</nuxt-link
              >、<nuxt-link to="/units/animal/Turkey">火雞</nuxt-link
              >、<nuxt-link to="/units/animal/Llama">草尼馬</nuxt-link
              >、<nuxt-link to="/units/animal/Cow">乳牛</nuxt-link>、<nuxt-link
                to="/units/animal/Goat"
                >山羊</nuxt-link
              >和<nuxt-link to="/units/animal/Water_Buffalo">水牛</nuxt-link>)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <p>
              當軍隊要渡海時，所有類型的貿易船都會被徵用。這些船通常被改裝成運輸工具，以更好地運送部隊，馬匹，牲畜，<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >和物資。英格蘭在中世紀曾多次遭到侵略，其中包括早期的薩克森人/黃麻人入侵，<nuxt-link
                to="/civs/Vikings"
                >挪威</nuxt-link
              >入侵（丹麥人暫時統治了英格蘭的大部分地區），以及後來西元1066的諾曼人入侵。諾曼人還入侵過西西里島和意大利南部。許多十字軍東征涉及從<nuxt-link
                to="/civs/Franks"
                >法國</nuxt-link
              >到聖地的海上運輸。百年戰爭期間，<nuxt-link to="/civs/Britons"
                >英國</nuxt-link
              >人也曾用運輸船多次帶兵進入法國。
            </p>
          </div>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Transportship.jpg" alt=""
              /></gallery>
              <p><em>一群運輸船。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/TransportShipHD.jpg" alt=""
              /></gallery>
              <p>
                <em
                  >各種運輸船(世紀帝國II和<nuxt-link to="/games/aoc"
                    >征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/TransportShipDLC.jpg" alt=""
              /></gallery>
              <p><em>各種運輸船(HD擴充資料片)。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">運輸船</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/TransportShipIcon.png"
                  class="img-fluid"
                  alt=""
                />
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
              <nuxt-link to="/units/Naval_Vessels">船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/dark_age.png" alt="" /><nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
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
            <td class="unit4">125</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.45</td>
          </tr>
          <tr>
            <td class="unit3">駐軍</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由莊晉瑋協助編輯</div>
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
