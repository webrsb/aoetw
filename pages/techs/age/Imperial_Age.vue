<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>帝王時代</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>帝王時代</b
            >是世界帝國的第四個時代。這個時代開始可以訓練<nuxt-link
              to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
              to="/civs/Huns"
              >匈人</nuxt-link
            >、<nuxt-link to="/civs/Incas">印加</nuxt-link>和<nuxt-link
              to="/civs/Mayans"
              >馬雅</nuxt-link
            >之外)，同時也有重裝的<nuxt-link to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >讓玩家更容易進攻對方城鎮。
          </p>
          <p>
            進入帝王時代後每個<nuxt-link to="/civs">文明</nuxt-link
            >都可以建造各自的<nuxt-link to="/building/Wonder"
              >世界奇觀</nuxt-link
            >，世界奇觀的建造速度每個文明都是一樣的。
          </p>
        </div>
        <h3>可建造建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong>經濟建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/wonder.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >:玩家建造完並守護達200年即可獲得勝利。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/feitoria.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Feitoriaicon_Feitoria"
                >港灣大商站</nuxt-link
              >:給予免費資源。(限<nuxt-link to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >)
            </li>
          </ul>
          <strong>防禦建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/tower.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link
              >:防禦敵人的塔。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/bombard_tower.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >：具有高<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
              >的塔。(需先研發<nuxt-link to="/techs/Chemistry">化學</nuxt-link>)
            </li>
            <p>
              <nuxt-link to="/building/Keep">大型箭塔</nuxt-link>和<nuxt-link
                to="/building/Bombard_Tower"
                >火砲塔</nuxt-link
              >都得先在<nuxt-link to="/building/University">學院</nuxt-link
              >研發相關<nuxt-link to="/techs">科技</nuxt-link>才可建造。
            </p>
          </ul>
        </div>
        <h3>可生產單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h4>軍事單位</h4>
          <strong><nuxt-link to="/building/Barracks">軍營</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/2HandedswordsmanIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
              >：劍兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ChampionIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>：劍兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HalberdierIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>：反<nuxt-link
                to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EliteEagleWarriorIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link
              >：偵查單位，可對付<nuxt-link to="/units/Archer">弓箭手</nuxt-link
              >。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CondottieroIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
              >：反<nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                >火藥單位</nuxt-link
              >。(限<nuxt-link to="/civs/Italians">義大利</nuxt-link>和其同盟)
            </li>
          </ul>
          <strong
            ><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link></strong
          >
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/ArbalestIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>：<nuxt-link
                to="/units/Archer_Units"
                >弓兵單位</nuxt-link
              >。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HeavyCavArcherIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >：騎馬弓兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/GenitourIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
              >：反<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >的騎馬弓兵單位。(限<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >和其同盟)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HandCannoneerIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >：輕型火藥單位。(需先研發<nuxt-link to="/techs/Chemistry"
                >化學</nuxt-link
              >)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Imperialskirmishericon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
              >：反弓兵單位。(限<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >和其同盟)
            </li>
          </ul>
          <strong><nuxt-link to="/building/Stable">馬廄</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/HeavyCamelIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link
              >：反騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ImperialCamelIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
              >：反騎兵單位。(限<nuxt-link to="/civs/Indians">印度</nuxt-link>)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CavalierIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
              >：重裝騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/PaladinIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>：重裝騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HussarIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
              >：輕型騎馬偵查單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EliteBattleElephantIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Elite_Battle_Elephant"
                >精銳矛象伕</nuxt-link
              >：重裝騎兵單位。
            </li>
          </ul>
          <strong><nuxt-link to="/building/Castle">城堡</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Unique_Unit">精銳特殊單位</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TrebuchetUnpackedIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >：強力長程<nuxt-link to="/units/Siege_Weapons"
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
                src="~assets/OnagerIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Onager">中型投石車</nuxt-link
              >：範圍散射<nuxt-link to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/SiegeOnagerIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link
              >：範圍散射攻城武器。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CappedRamIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
              >：反<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >攻城單位，對箭矢攻擊幾乎免疫。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/SiegeRamIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link
              >：反建築物攻城單位，對箭矢攻擊幾乎免疫。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HeavyScorpionIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link
              >：範圍攻城武器。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/BombardCannonIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
              >：遠距離攻城武器。(需先研發<nuxt-link to="/techs/Chemistry"
                >化學</nuxt-link
              >)
            </li>
          </ul>
          <strong><nuxt-link to="/building/Dock">碼頭</nuxt-link></strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/GalleonAoE2.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link
              >：基本戰船。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/FastFireShipIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Fast_Fire_Ship">重型火戰船</nuxt-link
              >：噴火的戰船。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HeavyDemoShipIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Heavy_Demolition_Ship"
                >重型爆破船</nuxt-link
              >：自爆的戰船。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CannonGalleonIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
              >：遠距離攻擊戰船。(需先研發<nuxt-link to="/techs/Chemistry"
                >化學</nuxt-link
              >)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CannonGalleonIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >：遠距離攻擊戰船。(需先研發<nuxt-link to="/techs/Chemistry"
                >化學</nuxt-link
              >)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/LongboatIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link
              >：會射出多發箭矢的戰船。(限<nuxt-link to="/civs/Vikings"
                >維京</nuxt-link
              >)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TurtleShipIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Turtle_Ship">精銳龜甲船</nuxt-link
              >：可發射砲彈的重裝戰船。(限<nuxt-link to="/civs/Koreans"
                >朝鮮</nuxt-link
              >)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CaravelIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
              >：可發射穿透攻擊的戰船。(限<nuxt-link to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >)
            </li>
          </ul>
          <h3>可研發科技</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h4>經濟科技</h4>
            <strong><nuxt-link to="/building/Mill">磨坊</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/crop_rotation.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link
                >：<nuxt-link to="/building/Farm">農田</nuxt-link>產量+175。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/two-man_saw.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Two-Man_Saw">雙人鋸</nuxt-link
                >：<nuxt-link to="/units/Villager">村民</nuxt-link
                >伐木速度快10%。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Market">市集</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/guilds.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Guilds">公會制度</nuxt-link
                >：減少交易費用至15%。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/University">學院</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/architecture.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
                >：建築物+10% HP，建築護甲+1/+1，+3建築護甲。
              </li>
            </ul>
            <h4>軍事科技</h4>
            <strong
              ><nuxt-link to="/building/Archery_Range"
                >射箭場</nuxt-link
              ></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/parthian_tactics.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link
                >：<nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                  >馬弓騎兵護甲</nuxt-link
                >+1/+2，對<nuxt-link to="/armor/Armor_Class_Spearman"
                  >長槍兵</nuxt-link
                >攻擊+4。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Dock">碼頭</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/dry_dock.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>：<nuxt-link
                  to="/units/Naval_Vessels"
                  >船隻</nuxt-link
                >航行速度+15%，<nuxt-link to="/units/Transport_Ship"
                  >運輸船</nuxt-link
                >可承載單位+10。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/shipwright.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Shipwright">造船員</nuxt-link
                >：船隻造價-20%，單位生產速度+35%。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Castle">城堡</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/untech">特殊科技</nuxt-link
                >：可研發該文明的<nuxt-link to="/techs/untech"
                  >特殊科技</nuxt-link
                >。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/hoardings.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Hoardings">圍牆</nuxt-link>：<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >+20% HP。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/sappers.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Sappers">兵工學</nuxt-link
                >：村民對建築物攻擊+15。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/conscription.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link
                >：<nuxt-link to="/building/Barracks">軍營</nuxt-link
                >、靶場、<nuxt-link to="/building/Stable">馬廄</nuxt-link
                >、城堡訓練部隊速度+33%。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/spies_treason.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Spies">間諜</nuxt-link
                >：可看到敵方<nuxt-link to="/elements/Line_of_Sight"
                  >視野</nuxt-link
                >。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/spies_treason.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Spies">叛徒</nuxt-link
                >：在弒君模式下可短暫看見敵對<nuxt-link to="/units/edmap/King"
                  >國王</nuxt-link
                >位置。小地圖上以X顯示。該科技只在弒君模式有。
              </li>
              <h4>1.並不是所有的特殊科技都是屬於軍事科技。</h4>
            </ul>
            <strong
              ><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/ring_archer_armor.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link
                >：<nuxt-link to="/units/Archer">弓兵</nuxt-link
                >和馬弓騎兵護甲+1/+2。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Bracer.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link
                >：弓兵、<nuxt-link to="/units/Cavalry_Archer"
                  >馬弓騎兵</nuxt-link
                >、戰船、城堡攻擊+1、範圍+1(<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >只有攻擊+1)。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/blast_furnace.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
                >：<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
                >、<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>攻擊+2。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/plate_mail_armor.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
                >:步兵護甲+1/+2。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/scale_barding_armor.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link
                >：<nuxt-link to="/armor/Armor_Class_Cavalry"
                  >騎兵護甲</nuxt-link
                >+1/+2。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/University">學院</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/chemistry.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Chemistry">化學</nuxt-link
                >：開火單位(包括攻城單位)攻擊+1。研發後可生產火藥單位。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Siegeengineers.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
                >:攻城武器攻擊範圍+1(<nuxt-link to="/units/Battering_Ram"
                  >衝撞車</nuxt-link
                >除外)。對<nuxt-link to="/armor/Armor_Class_Building"
                  >建築物</nuxt-link
                >攻擊加成+20%(<nuxt-link to="/units/Petard">炸藥桶</nuxt-link
                >+40%)。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/arrowslits.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link
                >：<nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
                >/<nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
                >/大型箭塔攻擊+1/+2/+3。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Monastery">修道院</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/illumination.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Illumination">啟示思想</nuxt-link
                >：<nuxt-link to="/units/Monk">僧侶</nuxt-link
                ><nuxt-link to="/elements/Conversion">招降</nuxt-link
                >成功後，恢復信仰的速度快50%。33秒後可再次招降對方(原為62秒)。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/faith.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link
                >：單位對僧侶(<nuxt-link to="/units/Missionary"
                  >傳教士</nuxt-link
                >)的招降更具抵抗力。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/block_printing.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Block_Printing">印刷技術</nuxt-link
                >：僧侶(傳教士)的招降範圍+3。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Theocracy.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Theocracy">神權統治</nuxt-link
                >:一群僧侶招降一個單位成功後，只有一位僧侶需要恢復信仰。
              </li>
            </ul>
            <h3>文明加成</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                  >：演進帝王時代的花費便宜33%。
                </li>
                <li>
                  <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
                  >：到帝王時代可獲得100黃金、100食物。
                </li>
                <li>
                  <nuxt-link to="/civs/Italians">義大利</nuxt-link
                  >：演進帝王時代的花費便宜15%。
                </li>
                <li>
                  <nuxt-link to="/civs/Khmer">高棉</nuxt-link
                  >：不須建造特定建築即可演進帝王時代。
                </li>
                <li>
                  <nuxt-link to="/civs/Malay">馬來</nuxt-link
                  >：演進到帝王時代的時間快80%。
                </li>
                <li>
                  <nuxt-link to="/civs/Persians">波斯</nuxt-link
                  >：演進到帝王時代的時間快15%。
                </li>
              </ul>
            </div>
            <h3>歷史</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <p>
                偉大的國王的興起和他們對帝國的追求，帶來了可以稱為帝國時代的中世紀的最後一部分。<nuxt-link
                  to="/civs/Britons"
                  >英國</nuxt-link
                >，<nuxt-link to="/civs/Franks">法國</nuxt-link>，<nuxt-link
                  to="/civs/Spanish"
                  >西班牙</nuxt-link
                >和斯堪的納維亞的國家領導人正在用封建制度取代封建制度。貿易蓬勃發展，城市規模和實力不斷增長。文藝復興正在意大利進行並遍布歐洲。技術和學習超過了古代世界。槍支和其他創新結束了<nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >和城堡的軍事統治。中世紀的這個末期可能會出現幾個重要事件，包括<nuxt-link
                  to="/civs/Turks"
                  >土耳其</nuxt-link
                >奪取君士坦丁堡，發現新大陸，海上與亞洲的貿易聯繫以及馬丁·路德的宗教改革。
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
              <div class="unititle" style="color: #fff">帝王時代</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/imperial_age.png" class="img-fluid" alt="" />
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
                src="~assets/castle_age.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">所需建築</td>
            <td class="unit4">
              下面任兩項：<br />
              <img
                class="gg"
                src="~assets/monastery.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Monastery">修道院</nuxt-link><br />
              <img
                class="gg"
                src="~assets/university.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/University">學院</nuxt-link><br />
              <img
                class="gg"
                src="~assets/siege_workshop.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >
              <br />或是直接蓋一座<br />
              <img
                class="gg"
                src="~assets/castle.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研究於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/town_center.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研究時間</td>
            <td class="unit4">190秒</td>
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
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">800</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Civimpage.jpg" alt=""
              /></gallery>
              <p><em>文明在帝王時代的樣子。</em></p>
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
