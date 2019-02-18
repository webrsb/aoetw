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
            帝王時代是世界帝國的第四個時代。這個時代開始可以訓練<nuxt-link
              to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
            <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、<nuxt-link
              to="/civs/Incas"
              >印加</nuxt-link
            >和<nuxt-link to="/civs/Mayans">馬雅</nuxt-link
            >之外)，同時也有重裝的
            <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
            >讓玩家更容易進攻對方城鎮。
          </p>
          <p>
            進入帝王時代後每個文明都可以建造各自的世界奇觀，世界奇觀的建造速度每個文明都是一樣的。
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
                src="~assets/Wondericon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >:玩家建造完並守護達200年即可獲得勝利。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Feitoriaicon.png"
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
                src="~assets/Watchtowericon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link
              >:防禦敵人的塔。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Bombardtowericon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >：具有高攻擊力的塔。(需先研發<nuxt-link to="/techs/Chemistry"
                >化學</nuxt-link
              >)
            </li>
            <p>大型箭塔和火砲塔都得先在學院研發相關科技才可建造。</p>
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
                src="~assets/2HandedswordsmanIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
              >：劍兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ChampionIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>：劍兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HalberdierIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>：反騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EliteEagleWarriorIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link
              >：偵查單位，可對付弓箭手。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CondottieroNewIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
              >：反火藥單位。(限<nuxt-link to="/civs/Italians">義大利</nuxt-link
              >和其同盟)
            </li>
          </ul>
          <strong
            ><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link></strong
          >
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/ArbalestIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>：弓兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HeavyCavArcherIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >：騎馬弓兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/GenitourIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
              >：反矛兵的騎馬弓兵單位。(限<nuxt-link to="/civs/Berbers"
                >柏柏</nuxt-link
              >和其同盟)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HandCannoneerIcon.jpg"
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
                src="~assets/HeavyCamelIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link
              >：反騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ImperialCamelIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
              >：反騎兵單位。(限<nuxt-link to="/civs/Indians">印度</nuxt-link>)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CavalierIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Cavalier">騎兵</nuxt-link>：重裝騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/PaladinIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>：重裝騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HussarIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
              >：輕型騎馬偵查單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EliteBattleElephantIcon2.png"
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
                src="~assets/Elite-unique-research.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Unique_Unit">精銳特殊單位</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TrebuchetUnpackedIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >：強力長程攻城單位。
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
                src="~assets/OnagerIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Onager">中型投石車</nuxt-link
              >：範圍散射攻城武器。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/SiegeOnagerIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link
              >：範圍散射攻城武器。(限<nuxt-link to="/civs/Indians"
                >印度</nuxt-link
              >)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CappedRamIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
              >：反建築物攻城單位，對箭矢攻擊幾乎免疫。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/SiegeRamIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link
              >：反建築物攻城單位，對箭矢攻擊幾乎免疫。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HeavyScorpionIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link
              >：範圍攻城武器。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/BombardCannonIcon.jpg"
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
                src="~assets/GalleonAoE2.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link
              >：基本戰船。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/FastFireShipIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link
              >：噴火的戰船。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HeavyDemoShipIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Heavy_Demolition_Ship"
                >重型神風船</nuxt-link
              >：自爆的戰船。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CannonGalleonIcon.jpg"
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
                src="~assets/CannonGalleonIcon.jpg"
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
                src="~assets/LongboatIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Elite_Longboat">精銳維京大戰船</nuxt-link
              >：：會射出多發箭矢的戰船。(限<nuxt-link to="/civs/Vikings"
                >維京</nuxt-link
              >)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TurtleShipIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Elite_Turtle_Ship">精銳龜甲船</nuxt-link
              >：：可發射砲彈的重裝戰船。(限<nuxt-link to="/civs/Koreans"
                >韓國</nuxt-link
              >)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CaravelIcon2.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Elite_Caravel">精銳卡拉維爾戰船</nuxt-link
              >：：可發射穿透攻擊的戰船。(限<nuxt-link to="/civs/Portuguese"
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
                  src="~assets/Croprotation.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Crop_Rotation">輪耕</nuxt-link
                >：農田產量+175。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Twomansaw.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Two-Man_Saw">雙人鋸</nuxt-link
                >：村民伐木速度快10%。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Market">市集</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Guilds.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Guilds">行會制度</nuxt-link
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
                  src="~assets/Architecture.jpg"
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
                  src="~assets/Parthian-Tactics.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link
                >：馬弓騎兵護甲+1/+2，對長槍兵攻擊+4。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Dock">碼頭</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Drydock.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link
                >：船隻航行速度+15%，運輸船可承載單位+10。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Shipwright.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link
                >：船隻造價-20%，單位生產速度+35%。
              </li>
            </ul>
            <strong><nuxt-link to="/building/Castle">城堡</nuxt-link></strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Unique-tech.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/untech">特殊科技</nuxt-link
                >：可研發該文明的特殊科技。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Hoardings.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Hoardings">外架式柵樓</nuxt-link
                >：城堡+20% HP。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Sappers.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Sappers">坑道工兵</nuxt-link
                >：村民對建築物攻擊+15。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Conscription.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
                >：軍營、靶場、馬廄、城堡訓練部隊速度+33%。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Spiestreason.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Spies">間諜</nuxt-link
                >：可看到敵方視野。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Spiestreason.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Spies">叛徒</nuxt-link
                >：在弒君模式下可短暫看見敵對國王位置。小地圖上以X顯示。該科技只在弒君模式有。
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
                  src="~assets/Ringarcherarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link
                >：弓兵和馬弓騎兵護甲+1/+2。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Bracer.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Bracer">護腕</nuxt-link
                >：弓兵、馬弓騎兵、戰船、城堡攻擊+1、範圍+1(箭塔只有攻擊+1)。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Blastfurnace.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
                >：步兵騎兵攻擊+2。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Platemailarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
                >:步兵護甲+1/+2。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Platebardingarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Plate_Barding_Armor">騎兵板甲</nuxt-link
                >：騎兵護甲+1/+2。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/University">學院</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Chemistry.jpg"
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
                >:攻城武器攻擊範圍+1(衝撞車除外)。對建築物攻擊加成+20%(爆炸桶+40%)。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Arrowlits.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link
                >：瞭望箭塔/防禦箭塔/大型箭塔攻擊+1/+2/+3。
              </li>
            </ul>
            <strong
              ><nuxt-link to="/building/Monastery">修道院</nuxt-link></strong
            >
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Illumination.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Illumination">啟發教化</nuxt-link
                >：僧侶招降成功後，恢復信仰的速度快50%。33秒後可再次招降對方(原為62秒)。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Faith.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link
                >：單位對僧侶(傳教士)的招降更具抵抗力。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Blockprinting.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Block_Printing">雕版印刷術</nuxt-link
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
                  >：到帝王時代可獲得100金、100肉。
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
                偉大的國王的興起和他們對帝國的追求，帶來了可以稱為帝國時代的中世紀的最後一部分。
                英國，法國，西班牙和斯堪的納維亞的國家領導人正在用封建制度取代封建制度。
                貿易蓬勃發展，城市規模和實力不斷增長。
                文藝復興正在意大利進行並遍布歐洲。 技術和學習超過了古代世界。
                槍支和其他創新結束了騎士和城堡的軍事統治。
                中世紀的這個末期可能會出現幾個重要事件，包括土耳其奪取君士坦丁堡，發現新大陸，海上與亞洲的貿易聯繫以及馬丁·路德的宗教改革。
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
                <img
                  src="~assets/Imperial-age-research.jpg"
                  width="45"
                  alt=""
                />
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
                src="~assets/Castle-age-reseach.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">所需建築</td>
            <td class="unit4">
              下面任兩項： <br />
              <img
                class="gg"
                src="~assets/Monasteryicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Monastery">修道院</nuxt-link> <br />
              <img
                class="gg"
                src="~assets/Universityicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/University">學院</nuxt-link> <br />
              <img
                class="gg"
                src="~assets/Siegeworkshopicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >
              <br />或是直接蓋一座 <br />
              <img
                class="gg"
                src="~assets/Castleicon.png"
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
                src="~assets/Towncentericon.png"
                width="22"
                alt=""
              />城鎮中心
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
            <td class="unit3">食物</td>
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
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
