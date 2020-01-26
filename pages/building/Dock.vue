<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>碼頭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            用於建造和研發<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
            >，並且藉由<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >在海上取得<nuxt-link to="/resource/Food">食物</nuxt-link
            >，並與其他<nuxt-link to="/civs">文明</nuxt-link>的<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >進行交易。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              碼頭是經濟和海戰的發展重點，因為碼頭能生產各種船隻，同時也是<nuxt-link
                to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >、<nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >的基地。依據地圖的種類來<nuxt-link to="/building">建築</nuxt-link
              >、發展。
            </li>
            <li>
              當像是在<nuxt-link to="/maps/Archipelago">群島</nuxt-link
              >的地圖中，碼頭就是一定要的，因為大部分的交戰都是在海上發生。建議在<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
              >至少建造一個（最好是兩個）碼頭，以便通過生產漁船來提高經濟效益。
            </li>
            <li>
              在<nuxt-link to="/maps/Coastal">沿海</nuxt-link>、<nuxt-link
                to="/maps/Baltic"
                >波羅的海</nuxt-link
              >、<nuxt-link to="/maps/Continental">大陸</nuxt-link
              >那類型的地圖上，雖然有一部分的水體，但是文明之間並沒有被水體隔開，在許多的情況下碼頭的影響力有限，但還是對經濟有一定的幫助，但<nuxt-link
                to="/units/Naval_Vessels"
                >海軍</nuxt-link
              >就只能用來支援陸上部隊、清除敵方沿海建築物，對遊戲勝敗影響較小。
            </li>
            <li>
              在<nuxt-link to="/maps/Rivers">河流</nuxt-link>、<nuxt-link
                to="/maps/Highland"
                >高地</nuxt-link
              >或其他以<nuxt-link to="/maps/Rivers">河流</nuxt-link
              >或湖泊為特徵的地圖，碼頭可以成為防禦性結構的一部分，因為河流和湖泊能提供地面部隊防護。在這種狀況下，使用海俊部隊能夠更有效的讓防禦性建築靠近水邊，在這種地圖上的淺灘是陸地部隊可以穿過河流的唯一窄點。
            </li>
            <li>
              通常在碼頭附近蓋<nuxt-link to="/building/Watch_Tower"
                >暸望箭塔</nuxt-link
              >和<nuxt-link to="/building/Castle">城堡</nuxt-link
              >是很有幫助的，因為這些建築能有效的保護碼頭避免敵船的攻擊，還可以將碼頭放在海灣中，因為這會使敵方海軍難以攻擊碼頭。也可以為碼頭提供很好的保護。
            </li>
          </ul>
          <h3>交易</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              <nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >被用來在兩個文明（同盟、中立、敵人都可以）碼頭之之間交易產生<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              >，在兩個碼頭中間形成貿易路線。空的<nuxt-link
                to="/units/Trade_Cog"
                >貿易商旅</nuxt-link
              >移動到另一個文明的碼頭，並帶著黃金返航。在群島地圖上的團隊遊戲，貿易商旅的路線就非常重要。
            </p>
          </div>
          <h3>可訓練的單位與技術</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-3">
              <div class="n1">
                <h4>黑暗時代</h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FishingShipIcon.png"
                    /><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TransportShipIcon.png"
                    /><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="n1">
                <h4>封建時代</h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FireGalleyIcon.png"
                    /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/TradeCogIcon.png" /><nuxt-link
                      to="/units/Trade_Cog"
                      >貿易商旅</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/DemoRaftIcon.png" /><nuxt-link
                      to="/units/Demolition_Raft"
                      >自爆筏</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/Galley.png" /><nuxt-link
                      to="/units/Galley"
                      >戰船</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="n1">
                <h4>城堡時代</h4>
                <ul>
                  <li>
                    <img class="gg" src="~assets/FireShipIcon.png" /><nuxt-link
                      to="/units/Fire_Ship"
                      >火戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/DemoShipIcon.png" /><nuxt-link
                      to="/units/Demolition_Ship"
                      >神風船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/WarGalley.png" /><nuxt-link
                      to="/units/War_Galley"
                      >弩砲戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/LongboatIcon.png" /><nuxt-link
                      to="/units/Longboat"
                      >維京大戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TurtleShipIcon.png"
                    /><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/CaravelIcon.png" /><nuxt-link
                      to="/units/Caravel"
                      >卡拉維爾戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/careening.png"
                      alt=""
                    /><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/gillnets.png"
                      alt=""
                    /><nuxt-link to="/techs/Gillnets">流刺網</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="n1">
                <h4>帝王時代</h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FastFireShipIcon.png"
                    /><nuxt-link to="/units/Fast_Fire_Ship"
                      >快速火戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyDemoShipIcon.png"
                    /><nuxt-link to="/units/Heavy_Demolition_Ship"
                      >重型神風船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/GalleonAoE2.png" /><nuxt-link
                      to="/units/Galleon"
                      >重型弩砲戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/LongboatIcon.png" /><nuxt-link
                      to="/units/Longboat"
                      >精銳維京大戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TurtleShipIcon.png"
                    /><nuxt-link to="/units/Turtle_Ship">精銳龜甲船</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/CaravelIcon.png" /><nuxt-link
                      to="/units/Caravel"
                      >精銳卡拉維爾戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/dry_dock.png"
                      alt=""
                    /><nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/shipwright.png"
                      alt=""
                    /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>
                  </li>
                </ul>
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
              <td class="tta4">無</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">全部</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:20%">
                <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
              </td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/masonry.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%)
                <br />
                <img
                  class="gg"
                  src="~assets/architecture.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>(+10%)
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:20%">護甲</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/masonry.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
                >(護甲+1/+1，+3建築護甲) <br />
                <img
                  class="gg"
                  src="~assets/architecture.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
                >(護甲+1/+1，+3建築護甲)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
              </td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/tower_watch.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
                <br />
                <img
                  class="gg"
                  src="~assets/town_patrol.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>(+4)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
              </td>
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
              <td class="tta1" style="width:10%">建造速度</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/treadmill_crane.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >(+20%建造效率)
              </td>
            </tr>
            <tr>
              <td class="tta1">工作效率</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/shipwright.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link
                >:船隻<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >花費-20%，單位生產速度+35%
              </td>
            </tr>
            <tr>
              <td class="tta1">其他</td>
              <td class="tta4">
                碼頭可升級成<nuxt-link to="/building/Harbor">海港</nuxt-link
                >(需要<nuxt-link to="/techs/Thalassocracy">海上霸主</nuxt-link
                >，<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
              </td>
            </tr>
          </table>

          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研究<nuxt-link
                  to="/techs/Faith"
                  >忠誠信仰</nuxt-link
                >便宜50%
              </li>
              <li>
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                >：在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
                >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
                >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
                >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
                >，碼頭擁有 +10%/+20%/+30%/+40% HP。<nuxt-link
                  to="/techs/Town_Watch"
                  >城鎮瞭望</nuxt-link
                >免費
              </li>
              <li>
                <nuxt-link to="/civs/Chinese">中國</nuxt-link
                >：對碼頭有益的技術在封建/<nuxt-link to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/帝王時代 便宜 10%/15%/20%。
              </li>
              <li>
                <nuxt-link to="/civs/Italians">義大利</nuxt-link
                >：研發<nuxt-link to="/techs/Shipwright">造船匠</nuxt-link
                >便宜50%。
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link>：碼頭便宜15%。
              </li>
              <li>
                <nuxt-link to="/civs/Persians">波斯</nuxt-link
                >：碼頭有兩倍的HP，在封建/<nuxt-link to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/帝王時代，訓練速度提高 10%/15%/20%。研發<nuxt-link
                  to="/techs/Town_Watch"
                  >城鎮瞭望</nuxt-link
                >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
                >速度在封建/<nuxt-link to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/帝王時代提高10%/15%/20%。
              </li>
              <li>
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
                >：碼頭建造速度提高30%。
              </li>
            </ul>
          </div>
          <h3>團隊加分</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Malay">馬來</nuxt-link
                >：隊伍中的碼頭增加100%的視野。
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                  to="/techs/Masonry"
                  >磚瓦技術</nuxt-link
                >、<nuxt-link to="/techs/Architecture">建築學</nuxt-link
                >和<nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >速度快80%
              </li>
              <li>
                <nuxt-link to="/civs/Vikings">維京</nuxt-link>：碼頭便宜15%。
              </li>
            </ul>
          </div>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>
              有<nuxt-link to="/civs/Vikings">維京</nuxt-link>做盟友:<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >便宜25%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >生產多10%黃金。
            </li>
            <li>引入<nuxt-link to="/techs/Gillnets">流刺網</nuxt-link>。</li>
            <li>
              有<nuxt-link to="/civs/Vikings">維京</nuxt-link>做盟友:<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >便宜15%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >生產多30%黃金。
            </li>
            <li>引入<nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>。</li>
            <li>
              引入<nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            深水商船的出現讓人們建造可以讓這些船舶停泊和卸載的碼頭。這種新設計的船舶不能輕易靠岸卸貨因為可能會擱淺。與碼頭相關的是造船的造船廠。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                碼頭
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/dock.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">經濟、軍事</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">35秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">訓練和升級船隻</td>
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
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">3x3</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">所有時代:1800</td>
          </tr>
          <tr>
            <td class="unit3">駐紮單位</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
              <img class="gg" src="~assets/dark_age.png" width="30" alt="" />0
              <br />
              <img class="gg" src="~assets/feudal_age.png" width="30" alt="" />1
              <br />
              <img class="gg" src="~assets/castle_age.png" width="30" alt="" />2
              <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />3
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">
              <img class="gg" src="~assets/dark_age.png" width="30" alt="" />7
              <br />
              <img class="gg" src="~assets/feudal_age.png" width="30" alt="" />8
              <br />
              <img class="gg" src="~assets/castle_age.png" width="30" alt="" />9
              <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />10
            </td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由晉瑋和賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/DockDarkAge.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有黑暗時代的碼頭。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/DockFeudalAgeHD.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
                  >的碼頭(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
                  >和<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/DockFeudalAgeDLC.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有封建時代的碼頭(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Dockaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                  >的碼頭(帝王世紀和征服者入侵資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Dockexpansions.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡時代的碼頭(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_dock.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >碼頭在封建/城堡時代在一般地圖/下雪地圖的樣子和駐紮單位時的樣子。</em
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbuilding',
  components: {}
}
</script>
<style></style>
