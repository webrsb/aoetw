<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>建築裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於建築裝甲的。而關於建築種類請參見<nuxt-link
              to="/building"
              >建築頁</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            建築裝甲是一個防禦裝甲類別，所有在這個系列的建築都會被對建築裝甲的有攻擊加成的兵種或科技有額外的傷害。
          </p>
        </div>
        <h3>建築單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是建築單位
          <div class="n1">
            <div class="col-md-3">
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Houseicon.png"
                    alt=""
                  /><nuxt-link to="/building/House">房屋</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Towncentericon.png"
                    alt=""
                  /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/Millicon.png" alt="" /><nuxt-link
                    to="/building/Mill"
                    >磨坊</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/Farmicon.png" alt="" /><nuxt-link
                    to="/building/Farm"
                    >農田</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Lumbercampicon.png"
                    alt=""
                  /><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Miningcampicon.png"
                    alt=""
                  /><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Marketicon.png"
                    alt=""
                  /><nuxt-link to="/building/Market">市集</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Blacksmithicon.png"
                    alt=""
                  /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Monasteryicon.png"
                    alt=""
                  /><nuxt-link to="/building/Monastery">修道院</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Universityicon.png"
                    alt=""
                  /><nuxt-link to="/building/University">學院</nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul>
                <li>
                  <img class="gg" src="~assets/Dockicon.png" alt="" /><nuxt-link
                    to="/building/Dock"
                    >碼頭</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Barracks-logo.jpg"
                    alt=""
                  /><nuxt-link to="/building/Barracks">軍營</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Archery-range-logo.jpg"
                    alt=""
                  /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Stableicon.png"
                    alt=""
                  /><nuxt-link to="/building/Stable">馬廄</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Siegeworkshopicon.png"
                    alt=""
                  /><nuxt-link to="/building/Siege_Workshop"
                    >攻城武器製造所</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Castleicon.png"
                    alt=""
                  /><nuxt-link to="/building/Castle">城堡</nuxt-link>(8)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Palisadewallicon.png"
                    alt=""
                  /><nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Palisadegateicon.png"
                    alt=""
                  /><nuxt-link to="/Palisade_building/Gate">木門</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Stonewallicon.png"
                    alt=""
                  /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>(16)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Stonewallicon.png"
                    alt=""
                  /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
                  >(24)
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul>
                <li>
                  <img class="gg" src="~assets/Gateicon.png" alt="" /><nuxt-link
                    to="/building/Gateicon_Gate"
                    >城門</nuxt-link
                  >(20)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Outposticon.png"
                    alt=""
                  /><nuxt-link to="/building/Outpost">哨站</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    alt=""
                  /><nuxt-link to="/building/Watch_Tower">暸望箭塔</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    alt=""
                  /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    alt=""
                  /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Bombardtowericon.png"
                    alt=""
                  /><nuxt-link to="/building/Bombard_Tower">火炮塔</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Wondericon.png"
                    alt=""
                  /><nuxt-link to="/building/Wonder">世界奇觀</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Feitoriaicon.png"
                    alt=""
                  /><nuxt-link to="/building/Feitoriaicon_Feitoria"
                    >港灣大商站</nuxt-link
                  >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                </li>
                <li>
                  <img class="gg" src="~assets/Dockicon.png" alt="" /><nuxt-link
                    to="/building/Harbor"
                    >巨港</nuxt-link
                  >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h3>剋建築單位的單位與建築</h3>
    <div class="hrn1"></div>
    <div class="n1">
      以下單位擁有對建築單位的額外傷害，按照傷殺力排列。
      <div class="n1">
        <div class="col-md-12">
          <div class="col-md-4">
            <div style="margin:12px 0px;"><strong>+500攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/PetardIcon.jpg" alt="" /><nuxt-link
                  to="/units/Petard"
                  >爆炸桶</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+280攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/HeavyDemoShipIcon.jpg"
                  alt=""
                /><nuxt-link to="/Heavy_units/Demolition_Ship"
                  >重型神風船</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+275攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CannonGalleonIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Elite_Cannon_Galleon"
                  >精銳火炮戰船</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+250攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/TrebuchetUnpackedIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+220攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/DemoShipIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+200攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/SiegeRamIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/BombardCannonIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CannonGalleonIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Cannon_Galleon">火炮戰船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+180攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/DemoRaftIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+150攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CappedRamIcon.jpg"
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
                  src="~assets/BatteringRamIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Battering_Ram">輕形衝撞車</nuxt-link>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/SiegeOnagerIcon.jpg"
                  alt=""
                /><nuxt-link to="/Siege_units/Onager">重型投石車</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+45攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/OnagerIcon.jpg" alt="" /><nuxt-link
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
                  src="~assets/MangonelIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Mangonel">輕形投石車</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Battleelephanticon.png"
                  alt=""
                /><nuxt-link to="/units/Battle_Elephant">精銳矛象伕</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/WarElephantIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/War_unitsanimal/Elephant"
                  >精銳波斯戰象</nuxt-link
                >(<nuxt-link to="/civs/Persians">波斯</nuxt-link>限定)
              </li>
              <li>
                <img class="gg" src="~assets/TarkanIcon.jpg" alt="" /><nuxt-link
                  to="/units/Tarkan"
                  >精銳韃靼騎兵</nuxt-link
                >(<nuxt-link to="/civs/Huns">匈奴</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CaravelIcon2.jpg"
                  alt=""
                /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
                >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/TarkanIcon.jpg" alt="" /><nuxt-link
                  to="/units/Tarkan"
                  >韃靼騎兵</nuxt-link
                >(<nuxt-link to="/civs/Huns">匈奴</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/GalleonAoE2.jpg"
                  alt=""
                /><nuxt-link to="/units/Galleon">重型弩炮戰船</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/LongboatIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link
                >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CaravelIcon2.jpg"
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
                  src="~assets/WarElephantIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/War_unitsanimal/Elephant">波斯戰象</nuxt-link
                >(<nuxt-link to="/civs/Persians">波斯</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/WarGalley.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/War_units/Galley">弩炮戰船</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/LongboatIcon.jpg"
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
                <img class="gg" src="~assets/Galley.jpg" alt="" /><nuxt-link
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
                  src="~assets/HeavyScorpionIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Heavy_Scorpion">重型弩炮</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Ballistaelephanticon.png"
                  alt=""
                /><nuxt-link to="/Ballista_unitsanimal/Elephant"
                  >精銳弩炮象</nuxt-link
                >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/VillagerMaleIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Villager">村民</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/FastFireShipIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/ScorpionIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Scorpion">弩炮</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ConquistadorIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Conquistador">精銳征服者</nuxt-link
                >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Ballistaelephanticon.png"
                  alt=""
                /><nuxt-link to="/Ballista_unitsanimal/Elephant"
                  >弩炮象</nuxt-link
                >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/FireShipIcon.jpg"
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
                  src="~assets/FireGalleyIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <h3>技術</h3>
      <div class="hrn1"></div>
      <div class="n1">
        下方技術可讓以下單位擁有對建築單位的額外傷害，按照傷殺力排列。
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <p>
                <img
                  class="gg"
                  src="~assets/Siegeengineers.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Siege_Engineers"> 攻城工程師</nuxt-link>
              </p>
              <div style="margin:12px 0px;"><strong>+200攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/PetardIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Petard">爆炸桶</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/TrebuchetUnpackedIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/SiegeRamIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/BombardCannonIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+30攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/CappedRamIcon.jpg"
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
                    src="~assets/BatteringRamIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Battering_Ram">輕形衝撞車</nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <p>
                <img
                  class="gg"
                  src="~assets/Siegeengineers.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Siege_Engineers"> 攻城工程師</nuxt-link>
              </p>
              <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/SiegeOnagerIcon.jpg"
                    alt=""
                  /><nuxt-link to="/Siege_units/Onager">重型投石車</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/OnagerIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/MangonelIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Mangonel">輕形投石車</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/HeavyScorpionIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Heavy_Scorpion">重型弩炮</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Ballistaelephanticon.png"
                    alt=""
                  /><nuxt-link to="/Ballista_unitsanimal/Elephant"
                    >精銳弩炮象</nuxt-link
                  >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <p>
                <img src="~assets/Sappers.jpg" width="22" alt="" /><nuxt-link
                  to="/techs/Sappers"
                  >坑道工兵</nuxt-link
                >
              </p>
              <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/VillagerMaleIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Villager">村民</nuxt-link>
                </li>
              </ul>
              <p>
                <img
                  class="gg"
                  src="~assets/Unique-tech.jpg"
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
                    src="~assets/ScoutCavalryIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Scout_Cavalry">斥侯</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/LightCavalryIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/HussarIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/KnightIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Knight">騎士</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/CavalierIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Cavalier">騎兵</nuxt-link>
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
                  /><nuxt-link to="/units/Battle_Elephant"
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
        下方技術可給所有建築物增加對建築單位有額外傷害的護甲。
        <div style="margin:12px 0px;"><strong>+3額外護甲</strong></div>
        <ul>
          <li>
            <img
              class="gg"
              src="~assets/Masonry.jpg"
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
              src="~assets/Architecture.jpg"
              width="22"
              alt=""
            /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>
          </li>
        </ul>
      </div>
      <h3>團隊加成</h3>
      <div class="hrn1"></div>
      <div class="n1">
        印度與他們的同盟可讓以下單位對建築物有額外傷害。
        <div class="n1">
          <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
          <ul>
            <li>
              <img class="gg" src="~assets/CamelIcon.jpg" alt="" /><nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/HeavyCamelIcon.jpg"
                alt=""
              /><nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/ImperialCamelIcon.jpg"
                alt=""
              /><nuxt-link to="/Imperial units/Camel">帝王駱駝騎兵</nuxt-link
              >(帝王駱駝騎兵是<nuxt-link to="/civs/Indians">印度</nuxt-link
              >限定)
            </li>
          </ul>
          <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CamelArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Camel_units/Archer">駱駝弓騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/CamelArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Camel_units/Archer">精銳駱駝弓騎兵</nuxt-link
              >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link
              >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
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
