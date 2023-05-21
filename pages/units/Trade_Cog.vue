<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>貿易商旅</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>貿易商旅</b>是一種無法攻擊的<nuxt-link to="/units/Naval_Vessels"
              >船艦</nuxt-link
            >，在<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >的時候可以從<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >中被訓練。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            貿易商旅被用來在兩個<nuxt-link to="/civs">文明</nuxt-link
            >（同盟、中立、敵人都可以）碼頭之之間交易產生<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >，在兩個碼頭中間形成貿易路線。貿易其實並不影響兩個文明之間的資源交換，空的貿易商旅移動另一個文明的碼頭，並帶著黃金返航。獲得的黃金數量取決於兩個碼頭間的距離，距離越遠產黃金就越多。
          </p>
          <p>
            重要的是，兩個碼頭之間的距離至少要5格以上才能夠產生一個黃金。值得一提的是，如果是大型地圖最遠的距離，一次可以產生的最大黃金量是513。
          </p>
          <p>
            由於大部分地圖上的金礦數量是有限的，交易是遊戲晚期極為重要黃金來源。因此貿易路線是攻擊的主要目標，應該要加強防守。在大後期決戰中，往往決定勝負的關鍵都在於<nuxt-link
              to="/units/Trade_Cart"
              >貿易車隊</nuxt-link
            >有無安全的運行。
          </p>
        </div>
        <h3>與貿易車隊比較</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            貿易商旅較貿易車隊的移動速度更快（1.32：1），並且貿易商旅可以從<nuxt-link
              to="/techs/Careening"
              >航海技術</nuxt-link
            >、<nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>、<nuxt-link
              to="/techs/Shipwright"
              >造船員</nuxt-link
            >獲得提升（但這不會提高黃金的收益，因為貿易商旅會降低每次所獲得的黃金收益，但相對的會提升船的運行速度）。
            <br />然而，相同距離的碼頭所產生的黃金比市場少了約25%，因此每個貿易車隊與貿易商旅的黃金獲得速度差不多。但是，由於貿易商旅通常都沿著海岸線行走，更容易發生遭遇敵人，所以通常大部分人還是會選擇使用貿易車隊。
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
            <td class="tta1" style="width:10%">黃金收集速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech.png"
                style="margin: 2px;"
                alt=""
              /><nuxt-link to="/techs/Sultans">蘇丹</nuxt-link>(+10%，<nuxt-link
                to="/civs/Indians"
                >印度</nuxt-link
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
                class="gg"
                style="margin: 2px;"
                src="~assets/dry_dock.png"
                alt=""
              /><nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>(+15%) <br />
              <img
                class="gg"
                style="margin: 2px;"
                img
                width="22"
                src="~assets/caravan.png"
                alt=""
              /><nuxt-link to="/techs/Caravan">商隊</nuxt-link>(+50%)
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
              <br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                style="margin: 2px;"
                alt=""
              /><nuxt-link to="/techs/Silk_Road">絲綢之路</nuxt-link
              >(-50%，<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
            </td>
          </tr>
        </table>

        <h3>剋貿易商旅的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對貿易商旅的額外傷害，按照殺傷力排列。
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
        以下科技可讓以下單位對貿易商旅有額外<nuxt-link to="/elements/Attack"
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
              >：貿易商旅的移動速度提高10％。
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
              >：有利於貿易商旅的<nuxt-link to="/techs">科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >便宜15/20％
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
              >：貿易商旅訓練的速度在<nuxt-link to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >提高10/15/20%，<nuxt-link to="/techs/Careening"
                >航海技術</nuxt-link
              >的研究速度在城堡/帝王提高15/20％。研究<nuxt-link
                to="/techs/Dry_Dock"
                >船塢</nuxt-link
              >的速度快20％。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：貿易商旅訓練減少15%黃金，貿易商旅+10％HP。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：貿易商旅可以產生多25%的黃金
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：隊伍中的貿易商旅對招降的抵抗力更強。
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
              <nuxt-link to="/techs/Shipwright">造船員</nuxt-link
              >減少20%<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
              ><nuxt-link to="/resource/Wood">木材</nuxt-link>成本。
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
            <li>引入<nuxt-link to="/techs/Caravan">商隊</nuxt-link>。</li>
            <li>
              團隊有<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >人時貿易商旅多產生33%黃金。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>貿易商旅多產生10%黃金。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>貿易商旅現在多產生30%黃金。</li>
            <li>貿易商旅的碰撞半徑減小，減少在貿易路徑上的碰撞機率。</li>
            <li>
              4.8版本後團隊有<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >人時貿易商旅多產生25%黃金。
            </li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >的貿易商旅當研發<nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link
              >和<nuxt-link to="/techs/Caravan">商隊</nuxt-link
              >會是遊戲中最快的單位，移動速度達2.0547！
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            “歐洲北部沿海地區的貿易需求導致了新型船舶的發展，這些新型船舶具有寬梁，深拉，方帆，船尾舵和大貨艙。這種新設計的船被稱為貿易商旅，他們主宰了中世紀從波羅的海到西地中海的海上貿易。由於這些船不能輕易地在海灘上拖曳，港口要求碼頭要擴建到水深足以讓貿易商旅可以停留的水域，遠東的貿易商旅相當於<nuxt-link
              to="/civs/Chinese"
              >中國</nuxt-link
            >的戎克船，一艘西方在幾個世紀內仍無法超越的更先進的船。“
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Tradecog.jpg" alt=""
              /></gallery>
              <p><em>一群貿易商旅。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/TradeCogHD.png" alt=""
              /></gallery>
              <p>
                <em
                  >各種貿易商旅(世紀帝國II和<nuxt-link to="/games/aoc"
                    >征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/TradeCogDLC.png" alt=""
              /></gallery>
              <p><em>各種貿易商旅(HD擴充資料片)。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                貿易商旅
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/TradeCogIcon.png" alt="" />
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
              經濟、<nuxt-link to="/units/Naval_Vessels">船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
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
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">50</td>
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
            <td class="unit4">80</td>
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
              <nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.32</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由莊晉瑋協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的戎克船
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E6%88%8E%E5%85%8B%E8%88%B9"
                    target="_blank"
                    >戎克船</a
                  ></b
                ></i
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allunit' })

export default {
  components: {}
}
</script>
<style></style>
