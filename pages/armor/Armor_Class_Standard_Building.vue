<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>標準建築裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>標準建築裝甲</strong>的。而關於建築種類請參見<nuxt-link
              to="/building"
              >建築頁</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <strong>標準建築裝甲</strong
            >裝甲是一個防禦裝甲類別，所有在這個系列的建築<strong
              >(不包括<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >)</strong
            >都會被對建築裝甲的有攻擊加成的兵種或<nuxt-link to="/techs"
              >科技</nuxt-link
            >有額外的傷害。
          </p>
        </div>
        <h3>標準建築單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是標準建築單位
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <ul>
                  <li>
                    <nuxt-link to="/building/House"
                      ><img
                        width="25px"
                        src="~assets/house.png"
                        alt=""
                      />房屋</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/town_center.png"
                      alt=""
                    /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/mill.png"
                      alt=""
                    /><nuxt-link to="/building/Mill">磨坊</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/farm.png"
                      alt=""
                    /><nuxt-link to="/building/Farm">農田</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/lumber_camp.png"
                      alt=""
                    /><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/mining_camp.png"
                      alt=""
                    /><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/market.png"
                      alt=""
                    /><nuxt-link to="/building/Market">市集</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/blacksmith.png"
                      alt=""
                    /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/monastery.png"
                      alt=""
                    /><nuxt-link to="/building/Monastery">修道院</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/university.png"
                      alt=""
                    /><nuxt-link to="/building/University">學院</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul>
                  <li>
                    <img
                      width="25px"
                      src="~assets/dock.png"
                      alt=""
                    /><nuxt-link to="/building/Dock">碼頭</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/barracks.png"
                      alt=""
                    /><nuxt-link to="/building/Barracks">軍營</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/archery_range.png"
                      alt=""
                    /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/stable.png"
                      alt=""
                    /><nuxt-link to="/building/Stable">馬廄</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/siege_workshop.png"
                      alt=""
                    /><nuxt-link to="/building/Siege_Workshop"
                      >攻城器製造所</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/castle.png"
                      alt=""
                    /><nuxt-link to="/building/Castle">城堡</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/palisade.png"
                      alt=""
                    /><nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/palisade_gate.png"
                      alt=""
                    /><nuxt-link to="/building/Palisade_Gate">木門</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/stone_wall.png"
                      alt=""
                    /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/stone_wall.png"
                      alt=""
                    /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <ul>
                  <li>
                    <img
                      width="25px"
                      src="~assets/gate.png"
                      alt=""
                    /><nuxt-link to="/building/Gate">城門</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/outpost.png"
                      alt=""
                    /><nuxt-link to="/building/Outpost">哨站</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/tower.png"
                      alt=""
                    /><nuxt-link to="/building/Watch_Tower">暸望箭塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/tower.png"
                      alt=""
                    /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/tower.png"
                      alt=""
                    /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/bombard_tower.png"
                      alt=""
                    /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/feitoria.png"
                      alt=""
                    /><nuxt-link to="/building/Feitoriaicon_Feitoria"
                      >港灣大商站</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      width="25px"
                      src="~assets/dock.png"
                      alt=""
                    /><nuxt-link to="/building/Harbor">海港</nuxt-link
                    >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>剋標準建築單位的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對標準建築單位的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarWagonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/WarWagonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/War_Wagon">精銳馬戰車</nuxt-link
                    >(<nuxt-link to="/civs/Koreans">韓國</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/2HandedswordsmanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Two-Handed_Swordsman"
                      >雙手劍兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ChampionIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Crusade_avatar.png"
                      alt=""
                    /><nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Crusade_avatar.png"
                      alt=""
                    /><nuxt-link to="/units/Teutonic_Knight"
                      >精銳條頓武士</nuxt-link
                    >(<nuxt-link to="/civs/Teutons">條頓</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ElephantArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elephant_Archer"
                      >精銳象弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant"
                      >精銳弩砲象</nuxt-link
                    >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongswordsManIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/WBRSK.png" alt="" /><nuxt-link
                      to="/units/Woad_Raider"
                      >精銳菘藍武士</nuxt-link
                    >(<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                      to="/units/Berserk"
                      >精銳狂戰士</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ElephantArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
                    >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ManAtArmsIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CondottieroIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link
                    >和同盟限定
                  </li>
                  <li>
                    <img class="gg" src="~assets/WBRSK.png" alt="" /><nuxt-link
                      to="/units/Woad_Raider"
                      >菘藍武士</nuxt-link
                    >(<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/TAXEM.png" alt="" /><nuxt-link
                      to="/units/Throwing_Axeman"
                      >精銳擲斧兵</nuxt-link
                    >(<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                      to="/units/Berserk"
                      >狂戰士</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior"
                      >精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SpearmanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/TAXEM.png" alt="" /><nuxt-link
                      to="/units/Throwing_Axeman"
                      >擲斧兵</nuxt-link
                    >(<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ShotelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Shotel_Warrior"
                      >精銳彎刀勇士</nuxt-link
                    >(<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Karambitwarrioricon.png"
                      alt=""
                    /><nuxt-link to="/units/Karambit_Warrior"
                      >精銳爪刀勇士</nuxt-link
                    >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下方科技可讓以下單位擁有對標準建築單位的額外傷害，按照殺傷力排列。
          <div class="n1">
            <p>
              <img class="gg" src="~assets/Arson.png" alt="" /><nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >
            </p>
            <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/MilitiaIcon.png"
                  alt=""
                /><nuxt-link to="/units/Militia">民兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/ManAtArmsIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/LongswordsManIcon.png"
                  alt=""
                /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/2HandedswordsmanIcon.png"
                  alt=""
                /><nuxt-link to="/units/Two-Handed_Swordsman"
                  >雙手劍兵</nuxt-link
                >→
                <img
                  class="gg"
                  src="~assets/ChampionIcon.png"
                  alt=""
                /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/SpearmanIcon.png"
                  alt=""
                /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/PikemanIcon.png"
                  alt=""
                /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/HalberdierIcon.png"
                  alt=""
                /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/EagleScoutIcon.png"
                  alt=""
                /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/EagleWarriorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/EliteEagleWarriorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Elite_Eagle_Warrior"
                  >精銳鷹勇士</nuxt-link
                >
              </li>
              <li>
                <img class="gg" src="~assets/WBRSK.png" alt="" /><nuxt-link
                  to="/units/Woad_Raider"
                  >菘藍武士</nuxt-link
                >→ <img class="gg" src="~assets/WBRSK.png" alt="" /><nuxt-link
                  to="/units/Woad_Raider"
                  >精銳菘藍武士</nuxt-link
                >(<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
              </li>
              <li>
                <img class="gg" src="~assets/TAXEM.png" alt="" /><nuxt-link
                  to="/units/Throwing_Axeman"
                  >擲斧兵</nuxt-link
                >→ <img class="gg" src="~assets/TAXEM.png" alt="" /><nuxt-link
                  to="/units/Throwing_Axeman"
                  >精銳擲斧兵</nuxt-link
                >(<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/HuskarlIcon.png"
                  alt=""
                /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/HuskarlIcon.png"
                  alt=""
                /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
              </li>
              <li>
                <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                  to="/units/Samurai"
                  >日本武士</nuxt-link
                >→ <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                  to="/units/Samurai"
                  >精銳日本武士</nuxt-link
                >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Crusade_avatar.png"
                  alt=""
                /><nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/Crusade_avatar.png"
                  alt=""
                /><nuxt-link to="/units/Teutonic_Knight">精銳條頓武士</nuxt-link
                >(<nuxt-link to="/civs/Teutons">條頓</nuxt-link>限定)
              </li>
              <li>
                <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                  to="/units/Berserk"
                  >狂戰士</nuxt-link
                >→ <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                  to="/units/Berserk"
                  >精銳狂戰士</nuxt-link
                >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/JaguarWarriorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/JaguarWarriorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Jaguar_Warrior">精銳豹勇士</nuxt-link
                >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Kamayuk_Icon.jpg"
                  alt=""
                /><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/Kamayuk_Icon.jpg"
                  alt=""
                /><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link
                >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CondottieroIcon.png"
                  alt=""
                /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(<nuxt-link
                  to="/civs/Italians"
                  >義大利</nuxt-link
                >和同盟限定)
              </li>
              <li>
                <img class="gg" src="~assets/ShotelIcon.png" alt="" /><nuxt-link
                  to="/units/Shotel_Warrior"
                  >彎刀勇士</nuxt-link
                >→
                <img class="gg" src="~assets/ShotelIcon.png" alt="" /><nuxt-link
                  to="/units/Shotel_Warrior"
                  >精銳彎刀勇士</nuxt-link
                >(<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>限定)
              </li>
              <li>
                <img class="gg" src="~assets/GbetoIcon.png" alt="" /><nuxt-link
                  to="/units/Gbeto"
                  >飛刀女獵手</nuxt-link
                >→
                <img class="gg" src="~assets/GbetoIcon.png" alt="" /><nuxt-link
                  to="/units/Gbeto"
                  >精銳飛刀女獵手</nuxt-link
                >(<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Karambitwarrioricon.png"
                  alt=""
                /><nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/Karambitwarrioricon.png"
                  alt=""
                /><nuxt-link to="/units/Karambit_Warrior"
                  >精銳爪刀勇士</nuxt-link
                >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
              </li>
            </ul>
            <p>
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Obsidian_Arrows">黑曜石之箭</nuxt-link
              >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
            </p>
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/ArcherIcon.png" alt="" /><nuxt-link
                  to="/units/Archer"
                  >弓兵</nuxt-link
                >→
                <img
                  class="gg"
                  src="~assets/CrossbowmanIcon.png"
                  alt=""
                /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/ArbalestIcon.png"
                  alt=""
                /><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
              </li>
            </ul>
          </div>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <nuxt-link to="/civs/Goths">哥德</nuxt-link>可讓以下單位對<nuxt-link
              to="/armor/Armor_Class_standard_building"
              >標準建築物</nuxt-link
            >有額外傷害。
            <div class="n1">
              <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/MilitiaIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Militia">民兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/ManAtArmsIcon.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/LongswordsManIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/2HandedswordsmanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Two-Handed_Swordsman"
                    >雙手劍兵</nuxt-link
                  >→
                  <img
                    class="gg"
                    src="~assets/ChampionIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/SpearmanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/PikemanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/HalberdierIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/HuskarlIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/HuskarlIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Huskarl">哥德衛隊(精銳)</nuxt-link
                  >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/CondottieroIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                  >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>和同盟限定)
                </li>
              </ul>
            </div>
            <div class="n1">
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >可讓以下單位對標準建築物有額外傷害。
              <div class="n1">
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CavalryArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/HeavyCavArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                      >重裝馬弓騎兵</nuxt-link
                    >
                  </li>
                </ul>
              </div>
              <h3>團隊加分</h3>
              <div class="hrn1"></div>
              <div class="n1">
                <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
                >可讓以下單位對標準建築物有額外傷害。
                <div class="n1">
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/ArcherIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Archer">弓兵</nuxt-link>→
                      <img
                        class="gg"
                        src="~assets/CrossbowmanIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
                      <img
                        class="gg"
                        src="~assets/ArbalestIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/SkirmisherIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Elite_Skirmisher"
                        >戰矛兵</nuxt-link
                      >→
                      <img
                        class="gg"
                        src="~assets/EliteSkirmisherIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Elite_Skirmisher"
                        >精銳戰矛兵</nuxt-link
                      >→
                      <img
                        class="gg"
                        src="~assets/Imperialskirmishericon.png"
                        alt=""
                      /><nuxt-link to="/units/Imperial_Skirmisher"
                        >帝王戰矛兵</nuxt-link
                      >
                      (<nuxt-link to="/units/Imperial_Skirmisher"
                        >帝王戰矛兵</nuxt-link
                      >是<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                      >及其同盟限定)
                    </li>
                    <li>
                      <img
                        class="gg"
                        width="22"
                        src="~assets/LongbowmanIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link
                      ><img
                        class="gg"
                        width="22"
                        src="~assets/LongbowmanIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Longbowman">精銳長弓兵</nuxt-link
                      >(<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定)
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/ChuKoNuIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
                      <img
                        class="gg"
                        src="~assets/ChuKoNuIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Chu_Ko_Nu">精銳連弩兵</nuxt-link
                      >(<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定)
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/PlumedArcherIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Plumed_Archer"
                        >羽毛箭射手</nuxt-link
                      >→
                      <img
                        class="gg"
                        src="~assets/PlumedArcherIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Plumed_Archer"
                        >精銳羽毛箭射手</nuxt-link
                      >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/New_Genoese_Crossbowman.png"
                        alt=""
                      /><nuxt-link to="/units/Genoese_Crossbowman"
                        >熱那亞弩手</nuxt-link
                      >→
                      <img
                        class="gg"
                        src="~assets/New_Genoese_Crossbowman.png"
                        alt=""
                      /><nuxt-link to="/units/Genoese_Crossbowman"
                        >精銳熱那亞弩手</nuxt-link
                      >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/RattanarcherIcon2.png"
                        alt=""
                      /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
                      >→
                      <img
                        class="gg"
                        src="~assets/RattanarcherIcon2.png"
                        alt=""
                      /><nuxt-link to="/units/Rattan_Archer"
                        >精銳藤甲弓兵</nuxt-link
                      >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>限定)
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alllarmor',
  components: {}
}
</script>
<style></style>
