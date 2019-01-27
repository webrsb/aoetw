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
          <li><nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link></li>
          <li><nuxt-link to="/units/Archer_Units">遠距離單位</nuxt-link></li>
          <li><nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link></li>
          <li><nuxt-link to="/units/Naval_Vessels">海軍單位</nuxt-link></li>
          <li><nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link></li>
          <li><nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link></li>
          <li><nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link></li>
        </ul>
      </div>
      <div class="col-md-12" style="">
        英雄單位請見此：<nuxt-link to="/units/hero">英雄列表</nuxt-link>
      </div>
      <div class="col-md-12" style="">
        野生動物請見此：<nuxt-link to="/units/wide">動物列表</nuxt-link>
      </div>
      <div class="col-md-12" style="">
        地圖編輯器類請見此：<nuxt-link to="/units/map"
          >地圖編輯器單位列表</nuxt-link
        >
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
                <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
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
                <nuxt-link to="/units/Villager">村民</nuxt-link>
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
                <nuxt-link to="/building/Barracks">軍營</nuxt-link>
              </div>
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
                <nuxt-link to="/units/Militia">民兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/ManAtArmsIcon.jpg"
                  width="22"
                  alt=""
                />
                <nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                <img class="gg" src="~assets/LongswordsManIcon.jpg" alt="" />
                <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                <img class="gg" src="~assets/2HandedswordsmanIcon.jpg" alt="" />
                <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
                >→
                <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
                <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/SpearmanIcon.jpg" alt="" />
                <nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                <img class="gg" src="~assets/PikemanIcon.jpg" alt="" />
                <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>→
                <img class="gg" src="~assets/HalberdierIcon.jpg" alt="" />
                <nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/EagleScoutIcon.jpg" alt="" />
                <nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link>→
                <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt="" />
                <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/EliteEagleWarriorIcon.jpg"
                  alt=""
                />
                <nuxt-link to="/Elite_units/Eagle_Warrior"
                  >精銳鷹勇士</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt="" />
                <nuxt-link to="/units/Condottiero">傭兵</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" />
                <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link> (<nuxt-link
                  to="/civs/Goths"
                  >哥德</nuxt-link
                >研發<nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link>後)
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
                <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
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
                <nuxt-link to="/units/Archer">弓兵</nuxt-link>→
                <img class="gg" src="~assets/CrossbowmanIcon.jpg" alt="" />
                <nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
                <img class="gg" src="~assets/ArbalestIcon.jpg" alt="" />
                <nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/SkirmisherIcon.jpg" alt="" />
                <nuxt-link to="/units/Skirmisher">戰矛兵</nuxt-link>→
                <img class="gg" src="~assets/EliteSkirmisherIcon.jpg" alt="" />
                <nuxt-link to="/units/Elite_Skirmisher">精銳戰矛兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/Imperialskirmishericon.png"
                  alt=""
                />
                <nuxt-link to="/units/Imperial_Skirmisher"
                  >帝王戰矛兵</nuxt-link
                >
                (<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>及其同盟限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CavalryArcherIcon.jpg" alt="" />
                <nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link>→
                <img class="gg" src="~assets/HeavyCavArcherIcon.jpg" alt="" />
                <nuxt-link to="/Heavy_Cavalry_units/Archer"
                  >重裝馬弓騎兵</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/HandCannoneerIcon.jpg" alt="" />
                <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/Slingericon.png" alt="" />
                <nuxt-link to="/units/Slinger">投石手</nuxt-link> (<nuxt-link
                  to="#"
                  >印加</nuxt-link
                >限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
                <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>→
                <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
                <nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link>
                (<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>及其同盟限定)
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
              <div class="unititle">
                <nuxt-link to="/building/Stable">馬廄</nuxt-link>
              </div>
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
                <nuxt-link to="/units/Scout_Cavalry">斥侯</nuxt-link>→
                <img class="gg" src="~assets/LightCavalryIcon.jpg" alt="" />
                <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>→
                <img class="gg" src="~assets/HussarIcon.jpg" alt="" />
                <nuxt-link to="/Hustree/sar">匈牙利輕騎兵</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/KnightIcon.jpg" alt="" />
                <nuxt-link to="/units/Knight">騎士</nuxt-link>→
                <img class="gg" src="~assets/CavalierIcon.jpg" alt="" />
                <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                <img class="gg" src="~assets/PaladinIcon.jpg" alt="" />
                <nuxt-link to="/units/Paladin">遊俠</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CamelIcon.jpg" alt="" />
                <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>→
                <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt="" />
                <nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>→
                <img class="gg" src="~assets/ImperialCamelIcon.jpg" alt="" />
                <nuxt-link to="/Imperial_units/Camel">帝王駱駝騎兵</nuxt-link
                >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/Battleelephanticon.png" alt="" />
                <nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/Elitebattleelephanticon.png"
                  alt=""
                />
                <nuxt-link to="/Elite_units/Battle_Elephant"
                  >精銳矛象伕</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TarkanIcon.jpg" alt="" />
                <nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link> (<nuxt-link
                  to="/civs/Huns"
                  >匈奴</nuxt-link
                >研發<nuxt-link to="/techs/Marauders">掠奪者</nuxt-link>後)
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
                <nuxt-link to="/building/Siege_Workshop"
                  >攻城器製造所</nuxt-link
                >
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
                <nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>→
                <img class="gg" src="~assets/CappedRamIcon.jpg" alt="" />
                <nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>→
                <img class="gg" src="~assets/SiegeRamIcon.jpg" alt="" />
                <nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/MangonelIcon.jpg" alt="" />
                <nuxt-link to="/units/Mangonel">投石車</nuxt-link>→
                <img class="gg" src="~assets/OnagerIcon.jpg" alt="" />
                <nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                <img class="gg" src="~assets/SiegeOnagerIcon.jpg" alt="" />
                <nuxt-link to="/Siege_units/Onager">重型投石車</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/ScorpionIcon.jpg" alt="" />
                <nuxt-link to="/units/Scorpion">弩砲</nuxt-link>→
                <img class="gg" src="~assets/HeavyScorpionIcon.jpg" alt="" />
                <nuxt-link to="/units/Heavy_Scorpion">重裝弩砲</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/BombardCannonIcon.jpg" alt="" />
                <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/Siegetowericon.png" alt="" />
                <nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>
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
                <nuxt-link to="/building/Monastery">修道院</nuxt-link>
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
                <nuxt-link to="/units/Monk">僧侶</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/MissionaryIcon.jpg" alt="" />
                <nuxt-link to="/units/Missionary">傳教士</nuxt-link>(<nuxt-link
                  to="/civs/Spanish"
                  >西班牙</nuxt-link
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
              <div class="unititle">
                <nuxt-link to="/building/Market">市集</nuxt-link>
              </div>
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
                <nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>
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
                <nuxt-link to="/building/Castle">城堡</nuxt-link>
              </div>
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
                        <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>
                        <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>
                        <nuxt-link to="/units/Woad_Raider">菘藍武士</nuxt-link>
                        <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>
                        <nuxt-link to="/units/Throwing_Axeman"
                          >擲斧兵</nuxt-link
                        >
                        <nuxt-link to="/units/Samurai">日本武士</nuxt-link>
                        <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>
                        <nuxt-link to="/War_unitsanimal/Elephant"
                          >波斯戰象</nuxt-link
                        >
                        <nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>
                        <nuxt-link to="/Teutonic_units/Knight"
                          >條頓武士</nuxt-link
                        >
                        <nuxt-link to="/units/Janissary"
                          >土耳其火槍兵</nuxt-link
                        >
                        <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>
                        <nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>
                        <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>
                        <nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link>
                        <nuxt-link to="/Plumed_units/Archer"
                          >羽毛箭射手</nuxt-link
                        >
                        <nuxt-link to="/units/Conquistador">征服者</nuxt-link>
                        <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>
                        <nuxt-link to="/units/Missionary">傳教士</nuxt-link>
                        <nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>
                        <nuxt-link to="/units/Slinger">投石手</nuxt-link>
                        <nuxt-link to="/Elephant_units/Archer"
                          >象弓騎兵</nuxt-link
                        >
                        <nuxt-link to="/Imperial_units/Camel"
                          >帝王駱駝騎兵</nuxt-link
                        >
                        <nuxt-link to="/Genoese_units/Crossbowman"
                          >熱那亞弩手</nuxt-link
                        >
                        <nuxt-link to="/units/Condottiero">僱傭兵</nuxt-link>
                        <nuxt-link to="/units/Magyar_Huszar"
                          >馬札爾驃騎兵</nuxt-link
                        >
                        <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/games/ak">非洲王朝</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/Camel_units/Archer"
                          >駱駝弓騎兵</nuxt-link
                        >
                        <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>
                        <nuxt-link to="/units/Shotel_Warrior"
                          >彎刀勇士</nuxt-link
                        >
                        <nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link>
                        <nuxt-link to="/units/Organ_Gun">手風琴砲</nuxt-link>
                        <nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/games/aor">王者崛起</nuxt-link>
                        <div class="dropdown-divider"></div>
                        <nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link>
                        <nuxt-link to="/Ballista_unitsanimal/Elephant"
                          >弩砲象</nuxt-link
                        >
                        <nuxt-link to="/units/Karambit_Warrior"
                          >爪刀勇士</nuxt-link
                        >
                        <nuxt-link to="/Rattan_units/Archer"
                          >藤甲弓兵</nuxt-link
                        >
                        <nuxt-link to="/units/Imperial_Skirmisher"
                          >帝王戰茅兵</nuxt-link
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
                <nuxt-link to="/units/Petard">破壞者</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TrebuchetPackedIcon.jpg" alt="" />
                <nuxt-link to="/units/Trebuchet">投石機</nuxt-link>
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
                <nuxt-link to="/building/Dock">碼頭</nuxt-link>
              </div>
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
                <nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TransportShipIcon.jpg" alt="" />
                <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TradeCogIcon.jpg" alt="" />
                <nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/Galley.jpg" alt="" />
                <nuxt-link to="/units/Galley">戰船</nuxt-link>→
                <img class="gg" src="~assets/WarGalley.jpg" alt="" />
                <nuxt-link to="/War_units/Galley">弩砲戰船</nuxt-link>→
                <img class="gg" src="~assets/GalleonAoE2.jpg" alt="" />
                <nuxt-link to="/units/Galleon">重裝弩砲戰船</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/FireGalleyIcon.jpg" alt="" />
                <nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>→
                <img class="gg" src="~assets/FireShipIcon.jpg" alt="" />
                <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>→
                <img class="gg" src="~assets/FastFireShipIcon.jpg" alt="" />
                <nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/DemoRaftIcon.jpg" alt="" />
                <nuxt-link to="/units/Demolition_Raft">自爆伐</nuxt-link>→
                <img class="gg" src="~assets/DemoShipIcon.jpg" alt="" />
                <nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>→
                <img class="gg" src="~assets/HeavyDemoShipIcon.jpg" alt="" />
                <nuxt-link to="/Heavy_units/Demolition_Ship"
                  >重型神風船</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt="" />
                <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt="" />
                <nuxt-link to="/Elite_units/Cannon_Galleon"
                  >精銳火砲戰船</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/LongboatIcon.jpg" alt="" />
                <nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>→
                <img class="gg" src="~assets/LongboatIcon.jpg" alt="" />
                <nuxt-link to="/units/Elite_Longboat">精銳維京大戰船</nuxt-link
                >(<nuxt-link to="/Vikings.pgp">維京</nuxt-link>限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/TurtleShipIcon.jpg" alt="" />
                <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>→
                <img class="gg" src="~assets/TurtleShipIcon.jpg" alt="" />
                <nuxt-link to="/Elite_units/Turtle_Ship">精銳龜甲船</nuxt-link
                >(<nuxt-link to="/civs/Koreans">韓國</nuxt-link>限定)
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" />
                <nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>→
                <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" />
                <nuxt-link to="/Elite_units/Caravel">精銳卡拉維爾戰船</nuxt-link
                >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
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
