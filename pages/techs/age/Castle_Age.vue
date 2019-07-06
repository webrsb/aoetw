<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城堡時代</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>城堡時代</b
            >是遊戲內第三個時代，來到城堡時代後，能夠生產強大的<nuxt-link
              to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>、<nuxt-link
              to="/units/Unique_Unit"
              >特殊單位</nuxt-link
            >與建造<nuxt-link to="/building/Castle">城堡</nuxt-link
            >，更強大的軍事兵種的搭配，劇烈的戰鬥將不可避免，而各<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >不同的特性也將發揮出來，展現自己獨特的打法與策略。
          </p>
          <p>
            在台灣與香港，很長一段時間玩家沉迷於城堡才能開始進攻的打法，叫做城堡開打。
          </p>
        </div>
        <h3>可建造建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong>經濟<nuxt-link to="/building">建築</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Monasteryicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Monastery">修道院</nuxt-link
              >:生產<nuxt-link to="/units/Monk">僧侶</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Universityicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/University">學院</nuxt-link
              >：研究更強大的<nuxt-link to="/techs">科技</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Towncentericon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >：生產更多的<nuxt-link to="/units/Villager">村民</nuxt-link>
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
              /><nuxt-link to="/building/Castle">城堡</nuxt-link
              >:強大的防禦建築與生產<nuxt-link to="/units/Unique_Unit"
                >特殊單位</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Siegeworkshopicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Siege_Workshop">攻城器製造所</nuxt-link
              >：生產<nuxt-link to="/units/Siege_Weapons$">攻城武器</nuxt-link>
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
              /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
              >:防禦敵人的塔
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Stonewallicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
              >：更厚實的<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Dockicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Harbor">海港</nuxt-link
              >：更強大可攻擊的港口（限<nuxt-link to="/civs/Malay"
                >馬來</nuxt-link
              >）
            </li>
            <h4>
              1.<nuxt-link to="/building/Harbor">海港</nuxt-link
              >也是軍事和民生建築，需先研發<nuxt-link to="/techs/Thalassocracy"
                >海上霸主</nuxt-link
              >。
            </h4>
          </ul>
        </div>
        <h3>可生產單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong
            ><nuxt-link to="/building/Monastery">修道院</nuxt-link></strong
          >
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/MonkIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Monk">僧侶</nuxt-link
              >：用於治療部隊，<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >敵人與收集<nuxt-link to="/elements/Relic">遺跡</nuxt-link>。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/MissionaryIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Missionary">傳教士</nuxt-link
              >：用於治療部隊，招降敵人。(<nuxt-link to="/civs/Spanish"
                >西班牙</nuxt-link
              >限定）
            </li>
          </ul>
          <strong><nuxt-link to="/building/Barracks">軍營</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/LongswordsManIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>：劍兵。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/PikemanIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >：反<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EagleWarriorIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >：偵查部隊，對<nuxt-link to="/armor/Armor_Class_Archer/"
                >弓箭手</nuxt-link
              >、<nuxt-link to="/armor/Armor_Class_Monk">僧侶</nuxt-link
              >特別厲害。
            </li>
          </ul>
          <strong
            ><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link></strong
          >
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CrossbowmanIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >：遠距離部隊。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EliteSkirmisherIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
              >：反弓箭手。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CavalryArcherIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >：移動迅速的<nuxt-link to="/units/Archer_Units"
                >遠距離單位</nuxt-link
              >。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Slinger_Icon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Slinger">投石手</nuxt-link>：反<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >（<nuxt-link to="/civs/Incas">印加</nuxt-link>限定）
            </li>
            <li>
              <img
                class="gg"
                src="~assets/GenitourIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
              >：反弓箭手。（<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >和同盟限定）
            </li>
          </ul>
          <strong><nuxt-link to="/building/Stable">馬廄</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CamelIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>：反騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/KnightIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Knight">騎士</nuxt-link>：重騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/LightCavalryIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >：快速的偵查單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Battleelephanticon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
              >：重騎兵單位。
            </li>
          </ul>
          <strong><nuxt-link to="/building/Castle">城堡</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
              >：每個文明都有一種<nuxt-link to="/units/Unique_Unit$"
                >特殊單位</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/PetardIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Petard">爆炸桶</nuxt-link
              >：自殺性的<nuxt-link to="/units/Siege_Weapons"
                >攻城單位</nuxt-link
              >。
            </li>
          </ul>
          <strong
            ><nuxt-link to="/building/Siege_Workshop"
              >攻城器製造所</nuxt-link
            ></strong
          >
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/BatteringRamIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
              >：對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >有強大的殺傷力。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/MangonelIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
              >：可有效打擊對方<nuxt-link to="/units/Archer_Units"
                >遠程</nuxt-link
              >部隊。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ScorpionIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Scorpion">弩砲</nuxt-link
              >：可大規模擊殺<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Siegetowericon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link
              >：可以送步兵越過城牆。
            </li>
          </ul>
          <strong><nuxt-link to="/building/Dock">碼頭</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/WarGalley.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
              >：普通遠程<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link>。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/FireShipIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
              >：反戰船單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/DemoShipIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link
              >：反<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
              >的自殺單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/LongboatIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link
              >：可發射多發箭矢。(<nuxt-link to="/civs/Vikings">維京</nuxt-link
              >限定）
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TurtleShipIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link
              >：發射大砲的重甲船。（<nuxt-link to="/civs/Koreans"
                >韓國</nuxt-link
              >限定）
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CaravelIcon2.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link
              >：可貫穿敵人。（<nuxt-link to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >限定）
            </li>
          </ul>
          <h3>可研發科技</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <strong
              ><nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              ></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Townpatrol.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
                >：增加建築<nuxt-link to="/elements/Line_of_Sight"
                  >視野</nuxt-link
                >。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Handcart.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link
                >：<nuxt-link to="/units/Villager">村民</nuxt-link>更有效率。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Mill">磨坊</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Heavyplow.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Heavy_Plow">重犁</nuxt-link>：<nuxt-link
                  to="/units/Villager"
                  >農夫</nuxt-link
                >攜帶量增加，<nuxt-link to="/building/Farm">農田</nuxt-link
                >更多產量。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/BowSaw.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Bow_Saw">弓鋸</nuxt-link
                >：更有效率的伐木。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Mining_Camp"
                >採礦營地</nuxt-link
              ></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Goldshaftmining.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Gold_Shaft_Mining">礦井採金</nuxt-link
                >：更有效率的採金。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Stone_Shaft_Mining.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Stone_Shaft_Mining">礦井採石</nuxt-link
                >：更有效率的採石。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Market">市集</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Banking.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Banking">銀行制度</nuxt-link
                >：進貢不用手續費。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CaravanII.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Caravan">大商隊</nuxt-link
                >：更快的貿易速度。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Dock">碼頭</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Gillnetsicon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Gillnets">流刺網</nuxt-link
                >：提高<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
                >的捕魚效率。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Careening.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link
                >:增加<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
                >的護甲和<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
                >的運載量。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/University">學院</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Masonry.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
                >：提高建築物防禦與<nuxt-link to="/elements/Hit_points"
                  >生命值</nuxt-link
                >。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Ballistics.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
                >：提高弓箭手的準確度。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Heatedshot.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Heated_Shot">預熱射擊</nuxt-link
                >：增加城堡和<nuxt-link to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >對船隻的攻擊。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Murderholes.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Murder_Holes">垛孔</nuxt-link
                >：移除城堡和箭塔的最小射程限制。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Treadmillcrane.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >：<nuxt-link to="/units/Villager">村民</nuxt-link
                >建築速度加快。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Barracks">軍營</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Squires.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Squires">護衛技術</nuxt-link
                >：步兵擁有更快的移動速度。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Arson.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Arson">縱火</nuxt-link
                >：步兵對建築攻擊增加。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Archery_Range"
                >射箭場</nuxt-link
              ></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Thumb_Ring.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link
                >：弓箭手有更快的射擊速度和命中率。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Stable">馬廄</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Husbandry.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Husbandry"></nuxt-link
                ><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link
                >：增加<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
                >移動速度。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Ironcasting.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link
                >：增加步兵和騎兵的近戰攻擊。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Chainmailarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
                >：增加步兵防禦。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Bodkinarrow.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link
                >：弓箭手增加攻擊與射程。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Leatherarcherarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Leather_Archer_Armor"
                  >弓兵皮甲</nuxt-link
                >：增加弓箭手防禦。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Chainbardingarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Chain_Barding_Armor">騎兵鎖甲</nuxt-link
                >：增加<nuxt-link to="/armor/Armor_Class_Cavalry"
                  >騎兵防禦</nuxt-link
                >。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Castle">城堡</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CastleAgeUnique.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/untech">特殊科技</nuxt-link
                >：各文明城堡時代獨特的科技。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Monastery">修道院</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Redemption.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Redemption">信仰救贖</nuxt-link
                >：可以招降建築與<nuxt-link to="/units/Siege_Weapons"
                  >攻城器</nuxt-link
                >。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Fervor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link
                >：僧侶移動變快。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Sanctity.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Sanctity">聖潔虔誠</nuxt-link
                >：增加僧侶生命值。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Atonement.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Atonement">贖罪</nuxt-link
                >：可以招降對方僧侶。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Heresy.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link
                >：被招降的單位立即死亡。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Herbalmedicine.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link
                >：駐紮的軍隊回復加快。
              </li>
            </ul>
            <h3>文明加成</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
                  >：到城堡時代可獲得100黃金、100食物。
                </li>
                <li>
                  <nuxt-link to="/civs/Italians">義大利</nuxt-link
                  >：研發城堡時代成本減少15％。
                </li>
                <li>
                  <nuxt-link to="/civs/Khmer">高棉</nuxt-link
                  >：升級城堡時代不需要前置建築。
                </li>
                <li>
                  <nuxt-link to="/civs/Malay">馬來</nuxt-link
                  >：研究城堡時代速度快80。
                </li>
                <li>
                  <nuxt-link to="/civs/Persians">波斯</nuxt-link
                  >：研究城堡時代速度快10％。
                </li>
              </ul>
            </div>
            <h3>歷史</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <p>
                城堡時代，從公元第九世紀開始，地方上的豪強就開始以城堡佔據歐洲各個地區。這些早期的城堡設計和建造大、多簡單，但卻慢慢發展為堅固的石材建築。它們多屬於國王或國王的臣屬，但大部分是地方上的貴族為了維護自己的利益而建造。雖然這些貴族辯稱是受到蠻族的威脅才建造城堡，但事實上他們用它來確立對地方的控制。這種情況經常發生，因為歐洲地區沒有戰略性的防衛地形，而當時又沒有一個強大的中央集權政府。
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
              style="background-color:#5b2167f0;text-align: center;"
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
              style="background-color:#5b2167f0;text-align: center;"
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
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
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
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">所需建築</td>
            <td class="unit4">
              下面任兩項：<br />
              <img
                class="gg"
                src="~assets/Acheryrangeicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link><br />
              <img
                class="gg"
                src="~assets/Stableicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Stable">馬廄</nuxt-link><br />
              <img
                class="gg"
                src="~assets/Marketicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Market">市集</nuxt-link><br />
              <img
                class="gg"
                src="~assets/Blacksmithicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
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
              /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
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
              style="background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">研究成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">800</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Civcastle.jpg" alt=""
              /></gallery>
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
