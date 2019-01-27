<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container padtop">
    <!-- Example row of columns -->
    <h1>單位</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>若是依照類型分類請詳見：</p>
        <ul>
          <li><a href="/units/Infantry_Units">步兵單位</a></li>
          <li><a href="/units/Archer_Units">遠距離單位</a></li>
          <li><a href="/units/Cavalry_Units">騎兵單位</a></li>
          <li><a href="/units/Naval_Vessels">海軍單位</a></li>
          <li><a href="/units/Siege_Weapons">攻城器單位</a></li>
          <li><a href="/units/Unique_Unit">特殊單位</a></li>
          <li><a href="/units/Gunpowder_Unit">火藥單位</a></li>
        </ul>
      </div>
      <div class="col-md-12" style="">
        英雄單位請見此：<a href="/units/hero">英雄列表</a>
      </div>
      <div class="col-md-12" style="">
        野生動物請見此：<a href="/units/wide">動物列表</a>
      </div>
      <div class="col-md-12" style="">
        地圖編輯器類請見此：<a href="/units/map">地圖編輯器單位列表</a>
      </div>
      <div class="col-md-12" style="margin-top: 10px;">
        <h3>若是依照建築分，則有9種可以訓練單位的建築</h3>
      </div>
    </div>
    <div class="row" style="margin-top:20px;">
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle">
                <a href="/building/Town_Center">城鎮中心</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Towncentericon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/VillagerMaleIcon.jpg" alt="" />
                <a href="/units/Villager">村民</a>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle"><a href="/building/Barracks">軍營</a></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Barracks-logo.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/MilitiaIcon.jpg" alt="" />
                <a href="/units/Militia">民兵</a>→
                <img
                  class="gg"
                  src="~assets/ManAtArmsIcon.jpg"
                  width="22"
                  alt=""
                />
                <a href="/units/Man-at-Arms">裝甲步兵</a>→
                <img class="gg" src="~assets/LongswordsManIcon.jpg" alt="" />
                <a href="/units/Long_Swordsman">長劍兵</a>→
                <img class="gg" src="~assets/2HandedswordsmanIcon.jpg" alt="" />
                <a href="/units/Two-Handed_Swordsman">雙手劍兵</a>→
                <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
                <a href="/units/Champion">劍兵勇士</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/SpearmanIcon.jpg" alt="" />
                <a href="/units/Spearman">長槍兵</a>→
                <img class="gg" src="~assets/PikemanIcon.jpg" alt="" />
                <a href="/units/Pikeman">重裝長槍兵</a>→
                <img class="gg" src="~assets/HalberdierIcon.jpg" alt="" />
                <a href="/units/Halberdier">戟兵</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/EagleScoutIcon.jpg" alt="" />
                <a href="/units/Eagle_Scout">鷹斥侯</a>→
                <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt="" />
                <a href="/units/Eagle_Warrior">鷹勇士</a>→
                <img
                  class="gg"
                  src="~assets/EliteEagleWarriorIcon.jpg"
                  alt=""
                />
                <a href="/Elite_units/Eagle_Warrior">精銳鷹勇士</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt="" />
                <a href="/units/Condottiero">傭兵</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" />
                <a href="/units/Huskarl">哥德衛隊</a> (<a href="/civs/Goths"
                  >哥德</a
                >研發<a href="/techs/Anarchy">無政府狀態</a>後)
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle">
                <a href="/building/Archery_Range">射箭場</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Acheryrangeicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/ArcherIcon.jpg" alt="" />
                <a href="/units/Archer">弓兵</a>→
                <img class="gg" src="~assets/CrossbowmanIcon.jpg" alt="" />
                <a href="/units/Crossbowman">弩兵</a>→
                <img class="gg" src="~assets/ArbalestIcon.jpg" alt="" />
                <a href="/units/Arbalest">強弩兵</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/SkirmisherIcon.jpg" alt="" />
                <a href="/units/Skirmisher">戰矛兵</a>→
                <img class="gg" src="~assets/EliteSkirmisherIcon.jpg" alt="" />
                <a href="/units/Elite_Skirmisher">精銳戰矛兵</a>→
                <img
                  class="gg"
                  src="~assets/Imperialskirmishericon.png"
                  alt=""
                />
                <a href="/units/Imperial_Skirmisher">帝王戰矛兵</a> (<a
                  href="/civs/Vietnamese"
                  >越南</a
                >及其同盟限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CavalryArcherIcon.jpg" alt="" />
                <a href="/Cavalry_units/Archer">馬弓騎兵</a>→
                <img class="gg" src="~assets/HeavyCavArcherIcon.jpg" alt="" />
                <a href="/Heavy_Cavalry_units/Archer">重裝馬弓騎兵</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/HandCannoneerIcon.jpg" alt="" />
                <a href="/units/Hand_Cannoneer">火槍兵</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/Slingericon.png" alt="" />
                <a href="/units/Slinger">投石手</a> (<a href="#">印加</a>限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
                <a href="/units/Genitour">標槍騎兵</a>→
                <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
                <a href="/units/Genitour">精銳標槍騎兵</a> (<a
                  href="/civs/Berbers"
                  >柏柏</a
                >及其同盟限定)
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle"><a href="/building/Stable">馬廄</a></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Stableicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/ScoutCavalryIcon.jpg" alt="" />
                <a href="/units/Scout_Cavalry">斥侯</a>→
                <img class="gg" src="~assets/LightCavalryIcon.jpg" alt="" />
                <a href="/units/Light_Cavalry">輕騎兵</a>→
                <img class="gg" src="~assets/HussarIcon.jpg" alt="" />
                <a href="/Hustree/sar">匈牙利輕騎兵</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/KnightIcon.jpg" alt="" />
                <a href="/units/Knight">騎士</a>→
                <img class="gg" src="~assets/CavalierIcon.jpg" alt="" />
                <a href="/units/Cavalier">騎兵</a>→
                <img class="gg" src="~assets/PaladinIcon.jpg" alt="" />
                <a href="/units/Paladin">遊俠</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CamelIcon.jpg" alt="" />
                <a href="/units/Camel">駱駝騎兵</a>→
                <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt="" />
                <a href="/Heavy_units/Camel">重裝駱駝騎兵</a>→
                <img class="gg" src="~assets/ImperialCamelIcon.jpg" alt="" />
                <a href="/Imperial_units/Camel">帝王駱駝騎兵</a>(<a
                  href="/civs/Indians"
                  >印度</a
                >限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/Battleelephanticon.png" alt="" />
                <a href="/units/Battle_Elephant">矛象伕</a>→
                <img
                  class="gg"
                  src="~assets/Elitebattleelephanticon.png"
                  alt=""
                />
                <a href="/Elite_units/Battle_Elephant">精銳矛象伕</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TarkanIcon.jpg" alt="" />
                <a href="/units/Tarkan">韃靼騎兵</a> (<a href="/civs/Huns"
                  >匈奴</a
                >研發<a href="/techs/Marauders">掠奪者</a>後)
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle">
                <a href="/building/Siege_Workshop">攻城器製造所</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Siegeworkshopicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/BatteringRamIcon.jpg" alt="" />
                <a href="/units/Battering_Ram">輕型衝撞車</a>→
                <img class="gg" src="~assets/CappedRamIcon.jpg" alt="" />
                <a href="/units/Capped_Ram">裝甲衝撞車</a>→
                <img class="gg" src="~assets/SiegeRamIcon.jpg" alt="" />
                <a href="/units/Siege_Ram">重型衝撞車</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/MangonelIcon.jpg" alt="" />
                <a href="/units/Mangonel">投石車</a>→
                <img class="gg" src="~assets/OnagerIcon.jpg" alt="" />
                <a href="/units/Onager">中型投石車</a>→
                <img class="gg" src="~assets/SiegeOnagerIcon.jpg" alt="" />
                <a href="/Siege_units/Onager">重型投石車</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/ScorpionIcon.jpg" alt="" />
                <a href="/units/Scorpion">弩砲</a>→
                <img class="gg" src="~assets/HeavyScorpionIcon.jpg" alt="" />
                <a href="/units/Heavy_Scorpion">重裝弩砲</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/BombardCannonIcon.jpg" alt="" />
                <a href="/units/Bombard_Cannon">火砲</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/Siegetowericon.png" alt="" />
                <a href="/units/Siege_Tower">攻城塔</a>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle">
                <a href="/building/Monastery">修道院</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Monasteryicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/MonkIcon.jpg" alt="" />
                <a href="/units/Monk">僧侶</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/MissionaryIcon.jpg" alt="" />
                <a href="/units/Missionary">傳教士</a>(<a href="/civs/Spanish"
                  >西班牙</a
                >限定)
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle"><a href="/building/Market">市集</a></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Marketicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TradeCartIcon.jpg" alt="" />
                <a href="/units/Trade_Cart">貿易車隊</a>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle"><a href="/building/Castle">城堡</a></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Castleicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="btn-group">
                <button
                  type="button"
                  class="btn btn-success"
                  onclick="uunit_click()"
                >
                  <img
                    class="gg"
                    src="~assets/Elite-unique-research.jpg"
                    alt=""
                  />
                  特 殊 單 位
                </button>
                <button
                  type="button"
                  class="btn btn-success dropdown-toggle dropdown-toggle-split"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu multi-column columns-3">
                  <div class="row">
                    <div class="col-sm-3">
                      <ul class="multi-column-dropdown">
                        <a class="dropdown-item" href="/games/aok">帝王世紀</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/units/Longbowman"
                          >長弓兵</a
                        >
                        <a class="dropdown-item" href="/units/Cataphract"
                          >聖騎兵</a
                        >
                        <a class="dropdown-item" href="/units/Woad_Raider"
                          >菘藍武士</a
                        >
                        <a class="dropdown-item" href="/units/Chu_Ko_Nu"
                          >連弩兵</a
                        >
                        <a class="dropdown-item" href="/units/Throwing_Axeman"
                          >擲斧兵</a
                        >
                        <a class="dropdown-item" href="/units/Samurai"
                          >日本武士</a
                        >
                        <a class="dropdown-item" href="/units/Mangudai"
                          >蒙古突騎</a
                        >
                        <a
                          class="dropdown-item"
                          href="/War_unitsanimal/Elephant"
                          >波斯戰象</a
                        >
                        <a class="dropdown-item" href="/units/Mameluke"
                          >奴隸兵</a
                        >
                        <a class="dropdown-item" href="/Teutonic_units/Knight"
                          >條頓武士</a
                        >
                        <a class="dropdown-item" href="/units/Janissary"
                          >土耳其火槍兵</a
                        >
                        <a class="dropdown-item" href="/units/Huskarl"
                          >哥德衛隊</a
                        >
                        <a class="dropdown-item" href="/units/Longboat"
                          >維京大戰船</a
                        >
                        <a class="dropdown-item" href="/units/Berserk"
                          >狂戰士</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/games/aoc"
                          >征服者入侵</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/units/Jaguar_Warrior"
                          >豹勇士</a
                        >
                        <a class="dropdown-item" href="/units/War_Wagon"
                          >馬戰車</a
                        >
                        <a class="dropdown-item" href="/Plumed_units/Archer"
                          >羽毛箭射手</a
                        >
                        <a class="dropdown-item" href="/units/Conquistador"
                          >征服者</a
                        >
                        <a class="dropdown-item" href="/units/Turtle_Ship"
                          >龜甲船</a
                        >
                        <a class="dropdown-item" href="/units/Missionary"
                          >傳教士</a
                        >
                        <a class="dropdown-item" href="/units/Tarkan"
                          >韃靼騎兵</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/games/aof"
                          >失落的帝國</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/units/Kamayuk"
                          >槍隊長</a
                        >
                        <a class="dropdown-item" href="/units/Slinger"
                          >投石手</a
                        >
                        <a class="dropdown-item" href="/Elephant_units/Archer"
                          >象弓騎兵</a
                        >
                        <a class="dropdown-item" href="/Imperial_units/Camel"
                          >帝王駱駝騎兵</a
                        >
                        <a
                          class="dropdown-item"
                          href="/Genoese_units/Crossbowman"
                          >熱那亞弩手</a
                        >
                        <a class="dropdown-item" href="/units/Condottiero"
                          >僱傭兵</a
                        >
                        <a class="dropdown-item" href="/units/Magyar_Huszar"
                          >馬札爾驃騎兵</a
                        >
                        <a class="dropdown-item" href="/units/Boyar"
                          >貴族鐵騎</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/games/ak">非洲王朝</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/Camel_units/Archer"
                          >駱駝弓騎兵</a
                        >
                        <a class="dropdown-item" href="/units/Genitour"
                          >標槍騎兵</a
                        >
                        <a class="dropdown-item" href="/units/Shotel_Warrior"
                          >彎刀勇士</a
                        >
                        <a class="dropdown-item" href="/units/Gbeto"
                          >飛刀女獵手</a
                        >
                        <a class="dropdown-item" href="/units/Organ_Gun"
                          >手風琴砲</a
                        >
                        <a class="dropdown-item" href="/units/Caravel"
                          >卡拉維爾戰船</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/games/aor">王者崛起</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/units/Arambai"
                          >飛鏢騎兵</a
                        >
                        <a
                          class="dropdown-item"
                          href="/Ballista_unitsanimal/Elephant"
                          >弩砲象</a
                        >
                        <a class="dropdown-item" href="/units/Karambit_Warrior"
                          >爪刀勇士</a
                        >
                        <a class="dropdown-item" href="/Rattan_units/Archer"
                          >藤甲弓兵</a
                        >
                        <a
                          class="dropdown-item"
                          href="/units/Imperial_Skirmisher"
                          >帝王戰茅兵</a
                        >
                      </ul>
                    </div>
                  </div>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/PetardIcon.jpg" alt="" />
                <a href="/units/Petard">破壞者</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TrebuchetPackedIcon.jpg" alt="" />
                <a href="/units/Trebuchet">投石機</a>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" style=" background-color:#636c72;">
              <div class="unititle"><a href="/building/Dock">碼頭</a></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unititle">
                <img src="~assets/Dockicon.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/FishingShipIcon.jpg" alt="" />
                <a href="/units/Fishing_Ship">漁船</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TransportShipIcon.jpg" alt="" />
                <a href="/units/Transport_Ship">運輸船</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TradeCogIcon.jpg" alt="" />
                <a href="/units/Trade_Cog">貿易商旅</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/Galley.jpg" alt="" />
                <a href="/units/Galley">戰船</a>→
                <img class="gg" src="~assets/WarGalley.jpg" alt="" />
                <a href="/War_units/Galley">弩砲戰船</a>→
                <img class="gg" src="~assets/GalleonAoE2.jpg" alt="" />
                <a href="/units/Galleon">重裝弩砲戰船</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/FireGalleyIcon.jpg" alt="" />
                <a href="/units/Fire_Galley">火蒙衝</a>→
                <img class="gg" src="~assets/FireShipIcon.jpg" alt="" />
                <a href="/units/Fire_Ship">火戰船</a>→
                <img class="gg" src="~assets/FastFireShipIcon.jpg" alt="" />
                <a href="/units/Fast_Fire_Ship">快速火戰船</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/DemoRaftIcon.jpg" alt="" />
                <a href="/units/Demolition_Raft">自爆伐</a>→
                <img class="gg" src="~assets/DemoShipIcon.jpg" alt="" />
                <a href="/units/Demolition_Ship">神風船</a>→
                <img class="gg" src="~assets/HeavyDemoShipIcon.jpg" alt="" />
                <a href="/Heavy_units/Demolition_Ship">重型神風船</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt="" />
                <a href="/units/Cannon_Galleon">火砲戰船</a>→
                <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt="" />
                <a href="/Elite_units/Cannon_Galleon">精銳火砲戰船</a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/LongboatIcon.jpg" alt="" />
                <a href="/units/Longboat">維京大戰船</a>→
                <img class="gg" src="~assets/LongboatIcon.jpg" alt="" />
                <a href="/units/Elite_Longboat">精銳維京大戰船</a>(<a
                  href="/Vikings.pgp"
                  >維京</a
                >限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TurtleShipIcon.jpg" alt="" />
                <a href="/units/Turtle_Ship">龜甲船</a>→
                <img class="gg" src="~assets/TurtleShipIcon.jpg" alt="" />
                <a href="/Elite_units/Turtle_Ship">精銳龜甲船</a>(<a
                  href="/civs/Koreans"
                  >韓國</a
                >限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" />
                <a href="/units/Caravel">卡拉維爾戰船</a>→
                <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" />
                <a href="/Elite_units/Caravel">精銳卡拉維爾戰船</a>(<a
                  href="/civs/Portuguese"
                  >葡萄牙</a
                >限定)
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <hr />
  </div>
</template>
<script>
export default {
  layout: 'footn',
  components: {}
}
</script>
<style></style>
