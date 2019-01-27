<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城堡時代</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            城堡時代是遊戲內第三個時代，來到城堡時代後，能夠生產強大的<a
              href="/units/Siege_Weapons"
              >攻城武器</a
            >、<a href="/units/Monk">僧侶</a>、
            <a href="/units/Unique_Unit">特殊單位</a>與建造<a
              href="/building/Castle"
              >城堡</a
            >，更強大的軍事兵種的搭配，劇烈的戰鬥將不可避免，而各文明不同的特性也將發揮出來，展現自己獨特的打法與策略。
          </p>
          <p>
            在台灣與香港，很長一段時間玩家沉迷於城堡才能開始進攻的打法，叫做城堡開打。
          </p>
        </div>
        <h3>可建造建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong>民用建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Monasteryicon.png"
                width="22"
                alt=""
              /><a href="/building/Monastery">修道院</a>:生產<a
                href="/units/Monk"
                >僧侶</a
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Universityicon.png"
                width="22"
                alt=""
              /><a href="/building/University">學院</a>：研究更強大的科技
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Towncentericon.png"
                width="22"
                alt=""
              /><a href="/building/Town_Center">城鎮中心</a>：生產更多的<a
                href="/units/Villager"
                >村民</a
              >
            </li>
          </ul>
          <strong>軍事建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Castleicon.png"
                width="22"
                alt=""
              /><a href="/building/Castle">城堡</a>:強大的防禦建築與生產<a
                href="/units/Unique_Unit"
                >特殊兵種</a
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Siegeworkshopicon.png"
                width="22"
                alt=""
              /><a href="/building/Siege_Workshop">攻城武器製造所</a
              >：生產攻城武器
            </li>
          </ul>
          <strong>防禦建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Watchtowericon.png"
                width="22"
                alt=""
              /><a href="/units/Watch_Tower">防禦箭塔</a>:防禦敵人的塔
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Stonewallicon.png"
                width="22"
                alt=""
              /><a href="/building/Fortified_Wall">垛牆</a>：更厚實的城牆
            </li>
            <li>
              <img class="gg" src="~assets/Dockicon.png" width="22" alt="" /><a
                href="/building/Harbor"
                >巨港</a
              >：更強大可攻擊的港口（限<a href="/civs/Malay">馬來</a>）
            </li>
            <h4>
              1.<a href="/building/Harbor">巨港</a
              >也是軍事和民生建築，需先研發<a href="/techs/Thalassocracy"
                >海上霸主</a
              >。
            </h4>
          </ul>
        </div>
        <h3>可生產單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong><a href="/building/Monastery">修道院</a></strong>
          <ul>
            <li>
              <img class="gg" src="~assets/MonkIcon.jpg" width="22" alt="" /><a
                href="/units/Monk"
                >僧侶</a
              >：用於治療部隊，招降敵人與收集遺跡。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/MissionaryIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Missionary">傳教士</a
              >：用於治療部隊，招降敵人。(<a href="/civs/Spanish">西班牙</a
              >限定）
            </li>
          </ul>
          <strong><a href="/building/Barracks">軍營</a></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/LongswordsManIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Long_Swordsman">長劍兵</a>：劍兵。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/PikemanIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Pikeman">重裝長槍兵</a>：反騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EagleWarriorIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Eagle_Warrior">鷹勇士</a
              >：偵查部隊，對弓箭手、僧侶特別厲害。
            </li>
          </ul>
          <strong><a href="/building/Archery_Range">射箭場</a></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CrossbowmanIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Crossbowman">弩兵</a>：遠距離部隊。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EliteSkirmisherIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Elite_Skirmisher">戰矛兵</a>：反弓箭手。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CavalryArcherIcon.jpg"
                width="22"
                alt=""
              /><a href="/Cavalry_units/Archer">馬弓騎兵</a
              >：移動迅速的遠距離單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Slinger_Icon.jpg"
                width="22"
                alt=""
              /><a href="/units/Slinger">投石手</a>：反步兵單位（<a
                href="/civs/Incas"
                >印加</a
              >限定）
            </li>
            <li>
              <img
                class="gg"
                src="~assets/GenitourIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Genitour">標槍騎兵</a>：反弓箭手。（<a
                href="/civs/Berbers"
                >柏柏</a
              >和同盟限定）
            </li>
          </ul>
          <strong><a href="/building/Stable">馬廄</a></strong>
          <ul>
            <li>
              <img class="gg" src="~assets/CamelIcon.jpg" width="22" alt="" /><a
                href="/units/Camel"
                >駱駝騎兵</a
              >：反騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/KnightIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Knight">騎士</a>：重騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/LightCavalryIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Light_Cavalry">輕騎兵</a>：快速的偵查單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Battleelephanticon.png"
                width="22"
                alt=""
              /><a href="/units/Battle_Elephant">矛象伕</a>：重騎兵單位。
            </li>
          </ul>
          <strong><a href="/building/Castle">城堡</a></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                width="22"
                alt=""
              /><a href="/units/Unique_Unit">特殊單位</a
              >：每個文明都有一種特殊單位
            </li>
            <li>
              <img
                class="gg"
                src="~assets/PetardIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Petard">爆炸桶</a>：自殺性的攻城單位。
            </li>
          </ul>
          <strong><a href="/building/Siege_Workshop">攻城武器製造所</a></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/BatteringRamIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Battering_Ram">輕型衝重車</a
              >：對建築物有強大的殺傷力。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/MangonelIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Mangonel">輕型投石車</a
              >：可有效打擊對方遠程部隊。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ScorpionIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Scorpion">弩砲</a>：可大規模擊殺步兵。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Siegetowericon.png"
                width="22"
                alt=""
              /><a href="/units/Siege_Tower">攻城塔</a>：可以送步兵越過城牆。
            </li>
          </ul>
          <strong><a href="/building/Dock">碼頭</a></strong>
          <ul>
            <li>
              <img class="gg" src="~assets/WarGalley.jpg" width="22" alt="" /><a
                href="/War_units/Galley"
                >弩砲戰船</a
              >：普通遠程戰船。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/FireShipIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Fire_Ship">火戰船</a>：反戰船單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/DemoShipIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Demolition_Ship">神風船</a
              >：反火戰船的自殺單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/LongboatIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Longboat">維京大戰船</a>：可發射多發箭矢。(<a
                href="/civs/Vikings"
                >維京</a
              >限定）
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TurtleShipIcon.jpg"
                width="22"
                alt=""
              /><a href="/units/Turtle_Ship">龜甲船</a>：發射大砲的重甲船。（<a
                href="/civs/Koreans"
                >韓國</a
              >限定）
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CaravelIcon2.jpg"
                width="22"
                alt=""
              /><a href="/units/Caravel">卡拉維爾戰船</a>：可貫穿敵人。（<a
                href="/civs/Portuguese"
                >葡萄牙</a
              >限定）
            </li>
          </ul>
          <h3>可研發科技</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <strong><a href="/building/Town_Center">城鎮中心</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Townpatrol.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Town_Patrol">城鎮巡邏</a>：增加建築視野。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Handcart.jpg"
                  width="22"
                  alt=""
                /><a href="/Hand_Cart.php">手推車</a>：<a href="/units/Villager"
                  >村民</a
                >更有效率。
              </li>
            </ul>
            <strong><a href="/building/Mill">磨坊</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Heavyplow.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Heavy_Plow">重犁</a
                >：農夫攜帶量增加，農田更多產量。
              </li>
            </ul>
            <strong><a href="/building/Lumber_Camp">伐木場</a></strong>
            <ul>
              <li>
                <img class="gg" src="~assets/BowSaw.png" width="22" alt="" /><a
                  href="/techs/Bow_Saw"
                  >弓鋸</a
                >：更有效率的伐木。
              </li>
            </ul>
            <strong><a href="/building/Mining_Camp">採礦營地</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Goldshaftmining.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Gold_Shaft_Mining">礦井採金</a
                >：更有效率的採金。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Stone_Shaft_Mining.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Stone_Shaft_Mining">礦井採石</a
                >：更有效率的採石。
              </li>
            </ul>
            <strong><a href="/building/Market">市集</a></strong>
            <ul>
              <li>
                <img class="gg" src="~assets/Banking.jpg" width="22" alt="" /><a
                  href="/techs/Banking"
                  >銀行制度</a
                >：進貢不用手續費。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CaravanII.png"
                  width="22"
                  alt=""
                /><a href="/techs/Caravan">大商隊</a>：更快的貿易速度。
              </li>
            </ul>
            <strong><a href="/building/Dock">碼頭</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Gillnetsicon.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Gillnets">流刺網</a>：提高漁船的捕魚效率。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Careening.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Careening">傾側維修術</a
                >:增加船隻的護甲和運輸船的運載量。
              </li>
            </ul>
            <strong><a href="/building/University">學院</a></strong>
            <ul>
              <li>
                <img class="gg" src="~assets/Masonry.jpg" width="22" alt="" /><a
                  href="/techs/Masonry"
                  >磚瓦技術</a
                >：提高建築物防禦與生命值。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Ballistics.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Ballistics">彈道學</a>：提高弓箭手的準確度。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Heatedshot.png"
                  width="22"
                  alt=""
                /><a href="/techs/Heated_Shot">預熱射擊</a
                >：增加城堡和箭塔對船隻的攻擊。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Murderholes.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Murder_Holes">垛孔</a
                >：移除城堡和箭塔的最小射程限制。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Treadmillcrane.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Treadmill_Crane">踏輪起重機</a
                >：村民建築速度加快。
              </li>
            </ul>
            <strong><a href="/building/Barracks">軍營</a></strong>
            <ul>
              <li>
                <img class="gg" src="~assets/Squires.jpg" width="22" alt="" /><a
                  href="/techs/Squires"
                  >護衛技術</a
                >：步兵擁有更快的移動速度。
              </li>
              <li>
                <img class="gg" src="~assets/Arson.jpg" width="22" alt="" /><a
                  href="/techs/Arson"
                  >縱火</a
                >：步兵對建築攻擊增加。
              </li>
            </ul>
            <strong><a href="/building/Archery_Range">射箭場</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Thumb_Ring.png"
                  width="22"
                  alt=""
                /><a href="/techs/Thumb_Ring">拇指環</a
                >：弓箭手有更快的射擊速度和命中率。
              </li>
            </ul>
            <strong><a href="/building/Stable">馬廄</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Husbandry.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Husbandry"></a>畜牧培育：增加騎兵移動速度。
              </li>
            </ul>
            <strong><a href="/building/Blacksmith">兵工廠</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Ironcasting.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Iron_Casting">鑄造</a
                >：增加步兵和騎兵的近戰攻擊。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Chainmailarmor.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Chain_Mail_Armor">步兵鎖甲</a>：增加步兵防禦。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Bodkinarrow.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Bodkin_Arrow">錐狀箭頭</a
                >：弓箭手增加攻擊與射程。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Leatherarcherarmor.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Leather_Archer_Armor">弓兵皮甲</a
                >：增加弓箭手防禦。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Chainbardingarmor.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Chain_Barding_Armor">騎兵鎖甲</a
                >：增加騎兵防禦。
              </li>
            </ul>
            <strong><a href="/building/Castle">城堡</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CastleAgeUnique.png"
                  width="22"
                  alt=""
                /><a href="/techs/untech">特殊科技</a
                >：各文明城堡時代獨特的科技。
              </li>
            </ul>
            <strong><a href="/building/Monastery">修道院</a></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Redemption.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Redemption">信仰救贖</a
                >：可以招降建築與攻城器。
              </li>
              <li>
                <img class="gg" src="~assets/Fervor.jpg" width="22" alt="" /><a
                  href="/techs/Fervor"
                  >宗教狂熱</a
                >：僧侶移動變快。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Sanctity.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Sanctity">聖潔虔誠</a>：增加僧侶生命值。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Atonement.jpg"
                  width="22"
                  alt=""
                /><a href="/techs/Atonement">贖罪</a>：可以招降對方僧侶。
              </li>
              <li>
                <img class="gg" src="~assets/Heresy.png" width="22" alt="" /><a
                  href="/techs/Heresy"
                  >異端邪說</a
                >：被招降的單位立即死亡。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Herbalmedicine.png"
                  width="22"
                  alt=""
                /><a href="/techs/Herbal_Medicine">草藥學</a
                >：駐紮的軍隊回復加快。
              </li>
            </ul>
            <h3>文明加成</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  <a href="/civs/Ethiopians">衣索比亞</a
                  >：到城堡時代可獲得100金、100肉。
                </li>
                <li>
                  <a href="/civs/Italians">義大利</a
                  >：研發城堡時代成本減少15％。
                </li>
                <li>
                  <a href="/civs/Khmer">高棉</a>：升級城堡時代不需要前置建築。
                </li>
                <li><a href="/civs/Malay">馬來</a>：研究城堡時代速度快80。</li>
                <li>
                  <a href="/civs/Persians">波斯</a>：研究城堡時代速度快10％。
                </li>
              </ul>
            </div>
            <h3>歷史</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <p>
                城堡時代，從公元第九世紀開始，地方上的豪強就開始以城堡佔據歐洲各個地區。這些早期的城堡設計和建造大、多簡單，但卻慢慢發展為堅固的石材建築。它們多屬於國王或國王的臣屬，但大部份是地方上的貴族為了維護自己的利益而建造。雖然這些貴族辯稱是受到蠻族的威脅才建造城堡，但事實上他們用它來確立對地方的控制。這種情況經常發生，因為歐洲地區沒有戰略性的防衛地形，而當時又沒有一個強大的中央集權政府。
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td
              class="unit"
              colspan="2"
              style=" background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle" style="color: #fff">城堡時代</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Castle-age-reseach.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style=" background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">時代介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">上一個</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="22"
                alt=""
              /><a href="/techsage/Feudal_Age">封建時代</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一個</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="22"
                alt=""
              /><a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">所需建築</td>
            <td class="unit4">
              下面任兩項：
              <br />
              <img
                class="gg"
                src="~assets/Acheryrangeicon.png"
                width="22"
                alt=""
              /><a href="/building/Archery_Range">射箭場</a>
              <br />
              <img
                class="gg"
                src="~assets/Stableicon.png"
                width="22"
                alt=""
              /><a href="/building/Stable">馬廄</a>
              <br />
              <img
                class="gg"
                src="~assets/Marketicon.png"
                width="22"
                alt=""
              /><a href="/building/Market">市集</a>
              <br />
              <img
                class="gg"
                src="~assets/Blacksmithicon.png"
                width="22"
                alt=""
              /><a href="/building/Blacksmith">兵工廠</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">研究於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Towncentericon.png"
                width="22"
                alt=""
              /><a href="/building/Town_Center">城鎮中心</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">研究時間</td>
            <td class="unit4">160秒</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style=" background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">研究成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">800</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">200</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <a href="/img/Civcastle.png"
                ><img class="imgn hg" src="~assets/Civcastle.png" alt=""
              /></a>
              <p><em>文明在城堡時代的樣子。</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allage',
  components: {}
}
</script>
<style></style>
