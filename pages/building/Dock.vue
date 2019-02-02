<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>碼頭</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            用於建造和研發船隻，並且藉由漁船在海上取得食物，並與其他文明的碼頭進行交易。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              碼頭是經濟和海戰的發展重點，因為碼頭能生產各種船隻，同時也是<nuxt-link
                to="/units/Fire_Ship"
                >漁船</nuxt-link
              >、<nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >的基地。依據地圖的種類來建築、發展。
            </li>
            <li>
              當像是在群島的地圖中，碼頭就是一定要的，因為大部分的交戰都是在海上發生。建議在黑暗時代至少建造一個（最好是兩個）碼頭，以便通過生產漁船來提高經濟效益。
            </li>
            <li>
              在<nuxt-link to="/maps/Coastal">沿海</nuxt-link>、<nuxt-link
                to="/maps/Baltic"
                >波羅的海</nuxt-link
              >、<nuxt-link to="/maps/Continental">大陸</nuxt-link
              >那類型的地圖上，雖然有一部分的水體，但是文明之間並沒有被水體隔開，在許多的情況下碼頭的影響力有限，但還是對經濟有一定的幫助，但海軍就只能用來支援陸上部隊、清除敵方沿海建築物，對遊戲勝敗影響較小。
            </li>
            <li>
              在<nuxt-link to="/Rivers">河流</nuxt-link>、<nuxt-link
                to="/maps/Highland"
                >高地</nuxt-link
              >或其他以河流或湖泊為特徵的地圖，碼頭可以成為防禦性結構的一部分，因為河流和湖泊能提供地面部隊防護。在這種狀況下，使用海俊部隊能夠更有效的讓防禦性建築靠近水邊，在這種地圖上的淺灘是陸地部隊可以穿過河流的唯一窄點。
            </li>
            <li>
              通常在碼頭附近蓋暸望箭塔和城堡是很有幫助的，因為這些建築能有效的保護碼頭避免敵船的攻擊，還可以將碼頭放在海灣中，因為這會使敵方海軍難以攻擊碼頭。也可以為碼頭提供很好的保護。
            </li>
          </ul>
          <h3>交易</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              貿易商旅被用來在兩個文明（同盟、中立、敵人都可以）碼頭之之間交易產生黃金，在兩個碼頭中間形成貿易路線。空的<nuxt-link
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
                      src="~assets/FishingShipIcon.jpg"
                    /><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TransportShipIcon.jpg"
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
                      src="~assets/FireGalleyIcon.jpg"
                    /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/TradeCogIcon.jpg" /><nuxt-link
                      to="/units/Trade_Cog"
                      >貿易商旅</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/DemoRaftIcon.jpg" /><nuxt-link
                      to="/units/Demolition_Raft"
                      >自爆筏</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/Galley.jpg" /><nuxt-link
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
                    <img class="gg" src="~assets/FireShipIcon.jpg" /><nuxt-link
                      to="/units/Fire_Ship"
                      >火戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/DemoShipIcon.jpg" /><nuxt-link
                      to="/units/Demolition_Ship"
                      >神風船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/WarGalley.jpg" /><nuxt-link
                      to="/War_units/Galley"
                      >弩炮戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/LongboatIcon.jpg" /><nuxt-link
                      to="/units/Longboat"
                      >維京大戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TurtleShipIcon.jpg"
                    /><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/CaravelIcon2.jpg" /><nuxt-link
                      to="/units/Caravel"
                      >卡拉維爾戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Careening.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Gillnetsicon.jpg"
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
                      src="~assets/FastFireShipIcon.jpg"
                    /><nuxt-link to="/units/Fast_Fire_Ship"
                      >快速火戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                    /><nuxt-link to="/units/Cannon_Galleon">火炮戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火炮戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyDemoShipIcon.jpg"
                    /><nuxt-link to="/Heavy_units/Demolition_Ship"
                      >重型神風船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/GalleonAoE2.jpg" /><nuxt-link
                      to="/units/Galleon"
                      >重型弩炮戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/LongboatIcon.jpg" /><nuxt-link
                      to="/units/Longboat"
                      >精銳維京大戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TurtleShipIcon.jpg"
                    /><nuxt-link to="/units/Turtle_Ship">精銳龜甲船</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/CaravelIcon2.jpg" /><nuxt-link
                      to="/units/Caravel"
                      >精銳卡拉維爾戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Drydock.jpg"
                      alt=""
                    /><nuxt-link to="/Dry_building/Dock">旱碼頭</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Shipwright.jpg"
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
              <td class="tta4">全部。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:20%">生命值</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Masonry.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%)
                <br />
                <img
                  class="gg"
                  src="~assets/Architecture.jpg"
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
                  src="~assets/Masonry.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
                >(護甲+1/+1，+3建築護甲)
                <br />
                <img
                  class="gg"
                  src="~assets/Architecture.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
                >(護甲+1/+1，+3建築護甲)
              </td>
            </tr>
            <tr>
              <td class="tta1">視野</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Townwatch.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
                <br />
                <img
                  class="gg"
                  src="~assets/Townpatrol.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>(+4)
              </td>
            </tr>
            <tr>
              <td class="tta1">招降抵抗</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Faith.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                <br />
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
                  src="~assets/Treadmillcrane.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Treadmill_Crane">踏輪起重機</nuxt-link
                >(+20%建造效率)
              </td>
            </tr>
            <tr>
              <td class="tta1">工作效率</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Shipwright.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link
                >:船隻木頭花費-20%，單位生產速度+35%
              </td>
            </tr>
            <tr>
              <td class="tta1">其他</td>
              <td class="tta4">
                碼頭可升級成<nuxt-link to="/building/Harbor">巨港</nuxt-link
                >(需要<nuxt-link to="/techs/Thalassocracy">海上霸主</nuxt-link
                >， <nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
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
                >：在黑暗/封建/城堡/帝王時代，碼頭擁有 +10%/+20%/+30%/+40%
                HP。<nuxt-link to="/techs/Town_Watch">城鎮暸望</nuxt-link>免費
              </li>
              <li>
                <nuxt-link to="/civs/Chinese">中國</nuxt-link
                >：對碼頭有益的技術在封建/城堡/帝王時代 便宜 10%/15%/20%。
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
                >：碼頭有兩倍的HP，在封建/城堡/帝王時代，訓練速度提高
                10%/15%/20%。研發
                <nuxt-link to="/techs/Town_Watch">城鎮暸望</nuxt-link
                >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
                >速度在封建/城堡/帝王時代提高10%/15%/20%。
              </li>
              <li>
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
                >：碼頭建造速度提高30%。
              </li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Malay">馬來</nuxt-link
                >：隊伍中的碼頭增加100%的視野。
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                  to="/civs/Vikings"
                  >磚瓦技術</nuxt-link
                >、<nuxt-link to="/civs/Vikings">建築學</nuxt-link>和
                <nuxt-link to="/civs/Vikings">踏輪起重機</nuxt-link>速度快80%
              </li>
              <li>
                <nuxt-link to="/civs/Vikings">維京</nuxt-link>：碼頭便宜15%`.
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
            <em><nuxt-link to="/games/aok">非洲王朝</nuxt-link></em>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle">
                <nuxt-link to="/building/Dock">碼頭</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Dockicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">概要</nuxt-link></div>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木材</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">數據</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">3x3</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">所有時代:1800</td>
          </tr>
          <tr>
            <td class="unit3">駐紮單位</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Dark-age-logo-small.jpg"
                width="30"
                alt=""
              />0
              <br />
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />1
              <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />2
              <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />3
            </td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Dark-age-logo-small.jpg"
                width="30"
                alt=""
              />7
              <br />
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />8
              <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />9
              <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />10
            </td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_standard_building"
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
        <div class="n1">
          <div class="col-md-4">
            <nuxt-link to="/img/DockDarkAge.png"
              ><img
                class="imgn hg"
                width="180"
                src="~assets/DockDarkAge.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有黑暗時代的碼頭。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/DockFeudalAgeHD.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/DockFeudalAgeHD.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有封建時代的碼頭(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/DockFeudalAgeDLC.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/DockFeudalAgeDLC.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有封建時代的碼頭(HD擴充資料片)。</em></p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            <nuxt-link to="/img/Dockaokaoc.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Dockaokaoc.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有城堡時代的碼頭(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Dockexpansions.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Dockexpansions.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡時代的碼頭(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Spritesheet_dock.png"
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_dock.png"
                alt=""
            /></nuxt-link>
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
    <div class="row">
      <div class="col-md-12"></div>
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
