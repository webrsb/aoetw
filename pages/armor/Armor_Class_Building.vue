<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>建築裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>建築裝甲</strong>的。而關於建築種類請參見<nuxt-link
              to="/building"
              >建築頁</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>建築裝甲</b>是一個<nuxt-link to="/armor">防禦裝甲</nuxt-link
            >類別，所有在這個系列的建築都會被對建築裝甲的有攻擊加成的兵種或<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >有額外的傷害。
          </p>
        </div>
        <h3>建築單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是建築單位
          <div class="row">
            <div class="col-md-3">
              <ul>
                <li>
                  <img class="gg" src="~assets/house.png" alt="" /><nuxt-link
                    to="/building/House"
                    >房屋</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/town_center.png"
                    alt=""
                  /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/mill.png" alt="" /><nuxt-link
                    to="/building/Mill"
                    >磨坊</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/farm.png" alt="" /><nuxt-link
                    to="/building/Farm"
                    >農田</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/lumber_camp.png"
                    alt=""
                  /><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/mining_camp.png"
                    alt=""
                  /><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/market.png" alt="" /><nuxt-link
                    to="/building/Market"
                    >市集</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/blacksmith.png"
                    alt=""
                  /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/monastery.png"
                    alt=""
                  /><nuxt-link to="/building/Monastery">修道院</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/university.png"
                    alt=""
                  /><nuxt-link to="/building/University">學院</nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul>
                <li>
                  <img class="gg" src="~assets/dock.png" alt="" /><nuxt-link
                    to="/building/Dock"
                    >碼頭</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/barracks.png" alt="" /><nuxt-link
                    to="/building/Barracks"
                    >軍營</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/archery_range.png"
                    alt=""
                  /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/stable.png" alt="" /><nuxt-link
                    to="/building/Stable"
                    >馬廄</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/siege_workshop.png"
                    alt=""
                  /><nuxt-link to="/building/Siege_Workshop"
                    >攻城器製造所</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/castle.png" alt="" /><nuxt-link
                    to="/building/Castle"
                    >城堡</nuxt-link
                  >(8)
                </li>
                <li>
                  <img class="gg" src="~assets/palisade.png" alt="" /><nuxt-link
                    to="/building/Palisade_Wall"
                    >木牆</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/palisade_gate.png"
                    alt=""
                  /><nuxt-link to="/building/Palisade_Gate">木門</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/stone_wall.png"
                    alt=""
                  /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>(16)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/stone_wall.png"
                    alt=""
                  /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
                  >(24)
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul>
                <li>
                  <img class="gg" src="~assets/gate.png" alt="" /><nuxt-link
                    to="/building/Gate"
                    >城門</nuxt-link
                  >(20)
                </li>
                <li>
                  <img class="gg" src="~assets/outpost.png" alt="" /><nuxt-link
                    to="/building/Outpost"
                    >哨站</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Watch_Tower"
                    >暸望台</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Guard_Tower"
                    >防禦箭塔</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Keep"
                    >大型箭塔</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/bombard_tower.png"
                    alt=""
                  /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/wonder.png" alt="" /><nuxt-link
                    to="/building/Wonder"
                    >世界奇觀</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/feitoria.png" alt="" /><nuxt-link
                    to="/building/Feitoriaicon_Feitoria"
                    >港灣大商站</nuxt-link
                  >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/HarborIcon.png"
                    alt=""
                  /><nuxt-link to="/building/Harbor">海港</nuxt-link>(<nuxt-link
                    to="/civs/Malay"
                    >馬來</nuxt-link
                  >限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Kreposticon.png"
                    alt=""
                  /><nuxt-link to="/building/Krepost">營壘</nuxt-link
                  >(<nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Kreposticon.png"
                    alt=""
                  /><nuxt-link to="/building/Krepost">營壘</nuxt-link
                  >(<nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>限定)
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h3>剋建築單位的單位與建築</h3>
    <div class="hrn1"></div>
    <div class="n1 bonuses">
      以下單位擁有對建築單位的額外傷害，按照殺傷力排列。
      <div class="n1">
        <div class="row">
          <div class="col-md-4">
            <div style="margin:12px 0px;"><strong>+500攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/PetardIcon.png" alt="" /><nuxt-link
                  to="/units/Petard"
                  >炸藥桶</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+280攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/HeavyDemoShipIcon.png"
                  alt=""
                /><nuxt-link to="/units/Heavy_Demolition_Ship"
                  >重型爆破船</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+275攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CannonGalleonIcon.png"
                  alt=""
                /><nuxt-link to="/units/Elite_Cannon_Galleon"
                  >精銳火砲戰船</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+250攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/TrebuchetUnpackedIcon.png"
                  alt=""
                /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+220攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/DemoShipIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Demolition_Ship">爆破船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+200攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/SiegeRamIcon.png"
                  alt=""
                /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/BombardCannonIcon.png"
                  alt=""
                /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CannonGalleonIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+180攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/DemoRaftIcon.png"
                  alt=""
                /><nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+150攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CappedRamIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+125攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/BatteringRamIcon.png"
                  alt=""
                /><nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/SiegeOnagerIcon.png"
                  alt=""
                /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+45攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/OnagerIcon.png" alt="" /><nuxt-link
                  to="/units/Onager"
                  >中型投石車</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+35攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/MangonelIcon.png"
                  alt=""
                /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Battleelephanticon.png"
                  alt=""
                /><nuxt-link to="/units/Elite_Battle_Elephant"
                  >精銳矛象伕</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/WarElephantIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/War_Elephant">精銳戰象</nuxt-link
                >(<nuxt-link to="/civs/Persians">波斯</nuxt-link>限定)
              </li>
              <li>
                <img class="gg" src="~assets/TarkanIcon.png" alt="" /><nuxt-link
                  to="/units/Tarkan"
                  >精銳答剌罕騎兵</nuxt-link
                >(<nuxt-link to="/civs/Huns">匈人</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CaravelIcon.png"
                  alt=""
                /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
                >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/TarkanIcon.png" alt="" /><nuxt-link
                  to="/units/Tarkan"
                  >答剌罕騎兵</nuxt-link
                >(<nuxt-link to="/civs/Huns">匈人</nuxt-link>限定)
              </li>
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
              <li>
                <img
                  class="gg"
                  src="~assets/CaravelIcon.png"
                  alt=""
                /><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link
                >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Battleelephanticon.png"
                  alt=""
                /><nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/WarElephantIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/War_Elephant">戰象</nuxt-link
                >(<nuxt-link to="/civs/Persians">波斯</nuxt-link>限定)
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
            </ul>
          </div>
          <div class="col-md-4">
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/Galley.png" alt="" /><nuxt-link
                  to="/units/Galley"
                  >戰船</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/HeavyScorpionIcon.png"
                  alt=""
                /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Ballistaelephanticon.png"
                  alt=""
                /><nuxt-link to="/units/Ballista_Elephant">精銳弩砲象</nuxt-link
                >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/VillagerMaleIcon.png"
                  alt=""
                /><nuxt-link to="/units/Villager">村民</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/FastFireShipIcon.png"
                  alt=""
                /><nuxt-link to="/units/Fast_Fire_Ship">重型火戰船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/ScorpionIcon.png"
                  alt=""
                /><nuxt-link to="/units/Scorpion">弩砲</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ConquistadorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Conquistador">精銳征服者</nuxt-link
                >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Ballistaelephanticon.png"
                  alt=""
                /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
                >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/FireShipIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/FireGalleyIcon.png"
                  alt=""
                /><nuxt-link to="/units/Fire_Galley">火艨艟</nuxt-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <h3>科技</h3>
      <div class="hrn1"></div>
      <div class="n1">
        下方科技可讓以下單位擁有對建築單位的額外傷害，按照殺傷力排列。
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <p>
                <img
                  class="gg"
                  src="~assets/siege_engineers.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Siege_Engineers"> 攻城工程師</nuxt-link>
              </p>
              <div style="margin:12px 0px;"><strong>+200攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/PetardIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Petard">炸藥桶</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/TrebuchetUnpackedIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/SiegeRamIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/BombardCannonIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Flaming_camel_icon.png"
                    alt=""
                  /><nuxt-link to="/units/Flaming_Camel">火焰駱駝</nuxt-link>
                  (<nuxt-link to="/civs/Tatars">韃靼</nuxt-link>限定)
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+30攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/CappedRamIcon.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+25攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/BatteringRamIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <p>
                <img
                  class="gg"
                  src="~assets/siege_engineers.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Siege_Engineers"> 攻城工程師</nuxt-link>
              </p>

              <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/SiegeOnagerIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/OnagerIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/MangonelIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/HeavyScorpionIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
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
            </div>
            <div class="col-md-4">
              <p>
                <img src="~assets/sappers.png" width="22" alt="" /><nuxt-link
                  to="/techs/Sappers"
                  >兵工學</nuxt-link
                >
              </p>
              <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/VillagerMaleIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Villager">村民</nuxt-link>
                </li>
              </ul>
              <p>
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Manipur_Cavalry">
                  曼尼普爾騎兵</nuxt-link
                >(<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>限定)
              </p>
              <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/ScoutCavalryIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/LightCavalryIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/HussarIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/KnightIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Knight">騎士</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/CavalierIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Battleelephanticon.png"
                    alt=""
                  /><nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/Battleelephanticon.png"
                    alt=""
                  /><nuxt-link to="/units/Elite_Battle_Elephant"
                    >精銳矛象伕</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Arambaiicon.png"
                    alt=""
                  /><nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/Arambaiicon.png"
                    alt=""
                  /><nuxt-link to="/units/Arambai">精銳飛鏢騎兵</nuxt-link
                  >(<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>限定)
                </li>
              </ul>
            </div>
          </div>
        </div>
        下方技術可給所有<nuxt-link to="/building">建築物</nuxt-link
        >增加對建築單位有額外傷害的護甲。
        <div style="margin:12px 0px;"><strong>+3額外護甲</strong></div>
        <ul>
          <li>
            <img
              class="gg"
              src="~assets/masonry.png"
              width="22"
              alt=""
            /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>
          </li>
        </ul>
        <div style="margin:12px 0px;"><strong>+3額外護甲</strong></div>
        <ul>
          <li>
            <img
              class="gg"
              src="~assets/architecture.png"
              width="22"
              alt=""
            /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>
          </li>
        </ul>
      </div>
      <h3>團隊加分</h3>
      <div class="hrn1"></div>
      <div class="n1">
        <nuxt-link to="/civs/Indians">印度</nuxt-link
        >與他們的同盟可讓以下單位對建築物有額外傷害。
        <div class="n1">
          <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
          <ul>
            <li>
              <img class="gg" src="~assets/CamelIcon.png" alt="" /><nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/HeavyCamelIcon.png"
                alt=""
              /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/ImperialCamelIcon.png"
                alt=""
              /><nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
              >(<nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
              >是<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
            </li>
          </ul>
          <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CamelArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/CamelArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Camel_Archer">精銳駱駝弓騎兵</nuxt-link
              >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">精銳阿拉伯奴隸兵</nuxt-link
              >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Flaming_camel_icon.png"
                alt=""
              /><nuxt-link to="/units/Flaming_Camel">火焰駱駝</nuxt-link>
              (<nuxt-link to="/civs/Tatars">韃靼</nuxt-link>限定)
            </li>
          </ul>
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
