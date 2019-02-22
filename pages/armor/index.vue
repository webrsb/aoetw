<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>防禦與防禦類型</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p><strong>防禦類型</strong>屬於遊戲內隱藏的項目，讓防禦對應不同的攻擊加成。</p>
          <br /><strong>這篇條目包含防禦類型與遠防、近防</strong>
        </div>
        <h3>防禦類型</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            攻擊加成和防禦類型都不會在遊戲中顯示，雖然科技樹都會寫這個單位對哪些單位有加成，可以造成額外的傷害，但他不會說這個額外傷害是多少，或者這個單位屬於哪個防禦類型。即使大多的單位你用肉眼就可以得知這個單位屬於哪些類型，例如
            <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
            >你會很直覺的認為他是<nuxt-link to="/armor/Armor_Class_Infantry"
              >步兵</nuxt-link
            >，但很多情況例外，例如前面說的
            <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
            >他其實也是<nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
              >『鷹勇士』類</nuxt-link
            >，他有自己的防禦類型，
            <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
            >會給他很大的傷害。另一個例子是<nuxt-link to="/units/Camel"
              >駱駝騎兵</nuxt-link
            >，他不在<nuxt-link to="/armor/Armor_Class_Cavalry"
              >騎兵類</nuxt-link
            >，而是在自己的
            <nuxt-link to="/armor/Armor_Class_Camel">駱駝類</nuxt-link
            >，面對<nuxt-link to="/units/Spearman">槍兵</nuxt-link
            >他受的到傷害更小。
          </p>
          <h3>功能</h3>
          <p>
            基本上，計算傷害很簡單就是攻擊減去裝甲。但有防禦類型，就必須累加。
          </p>
          <p>
            簡單的說，如果一個單位有多種防禦類型，那麼攻擊他的加成就會增加，例如<nuxt-link
              to="/units/War_Elephant"
              >戰象</nuxt-link
            >有兩個防禦類型，
            <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
            >和<nuxt-link to="/armor/Armor_Class_War_Elephant">戰象</nuxt-link
            >，而<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
            >對這兩類都有附加攻擊，分別是32和28，所以一隻
            <nuxt-link to="/units/Halberdier">戟兵</nuxt-link>攻擊<nuxt-link
              to="/units/War_Elephant"
              >戰象</nuxt-link
            >的數字就是基礎攻擊加上32+28＝60，兩個加成都算在裡面。
          </p>
          <p>
            每個防禦類型都有一個裝甲值，大多數的單位來看，這個裝甲值都是0，只是說明這個單位在這個防禦類型中，並會受到額外的傷害，但在某些但未中，他並非是0。而是一個數字表示，他可以額外抵抗這類防禦類型的傷害，而如果是負數，則代表會增加更多傷害。例如
            <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
            >的防禦類型是<nuxt-link to="/armor/Armor_Class_Cavalry"
              >騎兵</nuxt-link
            >，但他的騎兵裝甲值是12，這代表他比其他
            <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            >更不怕反騎兵的攻擊。另一方面，<nuxt-link
              to="/units/Ballista_Elephant"
              >弩砲象</nuxt-link
            >的<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵防禦</nuxt-link
            >類型裝甲是-2，這表示他會受到更多的反騎兵攻擊加成。當然以上的數字遊戲內都不會告訴你。
          </p>
        </div>
        <h3>防禦類型列表</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-6">
              單位類：
              <ul>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Spearman">槍兵</nuxt-link>
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
                    >鷹勇士</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                    >馬弓騎兵</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link>
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_War_Elephant"
                    >戰象</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                    >火藥單位</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                    >攻城武器</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Monk">僧侶</nuxt-link>
                </li>
                <li><nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link></li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Turtle_Ship"
                    >龜甲船</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Unique_Unit"
                    >特殊單位</nuxt-link
                  >
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              建築類
              <ul>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Standard_Building"
                    >標準建築</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_stone_defense"
                    >石頭建築</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_wall_and_gate"
                    >牆與門</nuxt-link
                  >
                </li>
                <li>
                  <nuxt-link to="/armor/Armor_Class_Castle">城堡</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <h3>瑣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link
            >有最多的防禦類型，有五種。
          </div>
          <h3>遠防</h3>
          <div class="hrn1"></div>
          <div class="n1">
            下列的單位都是遠程傷害，並造成對方遠防裝甲的影響
            <ul>
              <li>
                所有<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
                >單位
              </li>
              <li>所有特殊的射手單位</li>
              <li>
                <img
                  class="gg"
                  src="~assets/JanissaryIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ConquistadorIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Conquistador">征服者</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/OrganGunIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ScorpionIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Scorpion">弩砲</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/TrebuchetPackedIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Trebuchet">投石機</nuxt-link>
              </li>
              <li>
                <img class="gg" src="~assets/Galley.jpg" alt="" /><nuxt-link
                  to="/units/Galley"
                  >戰船</nuxt-link
                >→
                <img
                  class="gg"
                  src="~assets/WarGalley.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/GalleonAoE2.jpg"
                  alt=""
                /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/FireGalleyIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/FireShipIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/FastFireShipIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>
              </li>
              <li>
                <img class="gg" src="~assets/LongboatIcon.jpg" alt="" /><nuxt-link
                  to="/units/Longboat"
                  >維京大戰船</nuxt-link
                >
              </li>
              <li>
                <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" /><nuxt-link
                  to="/units/Caravel"
                  >卡拉維爾戰船</nuxt-link
                >
              </li>
            </ul>
            <li>
              <nuxt-link to="/units/Fire_Ship">火戰船系列</nuxt-link
              >造成遠程傷害時也會有近戰傷害。
            </li>
            <li>所有建築都是造成遠防傷害。</li>
            <h3>具有高遠防的單位</h3>
            <div class="row">
              <div class="col-md-4">
                步兵
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >（10）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteEagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Eagle_Warrior"
                      >精銳鷹勇士</nuxt-link
                    >（8,<nuxt-link to="/civs/Incas">印加</nuxt-link>：10）
                  </li>
                </ul>
                弓箭手
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/RattanarcherIcon2.png"
                      alt=""
                    /><nuxt-link to="/units/Rattan_Archer"
                      >精銳藤甲弓兵</nuxt-link
                    >（10）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >（9）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ElephantArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elephant_Archer"
                      >精銳象弓騎兵</nuxt-link
                    >（9）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarWagonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/War_Wagon">精銳馬戰車</nuxt-link
                    >（8）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Genitour">精銳鏢槍騎兵</nuxt-link
                    >（8）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
                    >（8）
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                騎兵
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TarkanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Tarkan">精銳韃靼騎兵</nuxt-link
                    >（8）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarElephantIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/War_Elephant">精銳戰象</nuxt-link
                    >（7）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteBattleElephantIcon2.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Battle_Elephant"
                      >精銳矛象伕</nuxt-link
                    >（7,<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：9）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant"
                      >精銳弩砲象</nuxt-link
                    >（7）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PaladinIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>（7）
                  </li>
                </ul>
                攻城武器
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SiegeRamIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link
                    >（195）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TrebuchetPackedIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Trebuchet">投石機</nuxt-link
                    >（移動：8，展開後：150）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Siegetowericon.png"
                      alt=""
                    /><nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link
                    >（100）
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                船
                <ul>
                  <li>
                    <img class="gg" src="~assets/CaravelIcon2.jpg" alt="" /><nuxt-link
                      to="/units/Elite_Caravel"
                      >精銳卡拉維爾戰船</nuxt-link
                    >（10）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FastFireShipIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Fast_Fire_Ship"
                      >快速火戰船</nuxt-link
                    >（9）
                  </li>
                  <li>
                    <img class="gg" src="~assets/LongboatIcon.jpg" alt="" /><nuxt-link
                      to="/units/Elite_Longboat"
                      >精銳維京大戰船</nuxt-link
                    >（9）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GalleonAoE2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link
                    >（9）
                  </li>
                  <li>
                    <img class="gg" src="~assets/CannonGalleonIcon.jpg" alt="" /><nuxt-link
                      to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >（9）
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/TransportShipIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
                    >（9）
                  </li>
                </ul>
              </div>
            </div>
            <h3>科技</h3>
            <div class="hrn1"></div>
            <div class="n1">
              下列的科技都可以增加遠防
              <h3>
                <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
              </h3>
              <div class="hrn1"></div>
              <table class="table-bordered" width="100%">
                <tr>
                  <td class="tunitcc" style="width: 15%;">科技</td>
                  <td class="tunitcc" style="width: 10%;">時代</td>
                  <td class="tunitcc" style="width: 15%;">成本</td>
                  <td class="tunitcc">影響</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Parthian-Tactics.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Parthian_Tactics"
                      >帕提亞戰術</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">帝王</td>
                  <td class="tunitc5">200F 250G</td>
                  <td class="tunitc6">馬弓騎兵護甲+1/+2，對長槍兵攻擊+4。</td>
                </tr>
              </table>

              <h3>
                <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
              </h3>
              <div class="hrn1"></div>
              <table class="table-bordered" width="100%">
                <tr>
                  <td class="tunitcc" style="width: 15%;">科技</td>
                  <td class="tunitcc" style="width: 10%;">時代</td>
                  <td class="tunitcc" style="width: 15%;">成本</td>
                  <td class="tunitcc">影響</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Loom.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Loom">織布技術</nuxt-link>
                  </td>
                  <td class="tunitc4">黑暗</td>
                  <td class="tunitc5">50G</td>
                  <td class="tunitc6">村民+15 HP，護甲+1/+2。</td>
                </tr>
              </table>

              <h3><nuxt-link to="/building/Dock">碼頭</nuxt-link></h3>
              <div class="hrn1"></div>
              <table class="table-bordered" width="100%">
                <tr>
                  <td class="tunitcc" style="width: 15%;">科技</td>
                  <td class="tunitcc" style="width: 10%;">時代</td>
                  <td class="tunitcc" style="width: 15%;">成本</td>
                  <td class="tunitcc">影響</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Careening.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link>
                  </td>
                  <td class="tunitc4">城堡</td>
                  <td class="tunitc5">250F 150G</td>
                  <td class="tunitc6">船隻護甲+1，運輸船可承載單位+5。</td>
                </tr>
              </table>

              <h3><nuxt-link to="/building/University">學院</nuxt-link></h3>
              <div class="hrn1"></div>
              <table class="table-bordered" width="100%">
                <tr>
                  <td class="tunitcc" style="width: 15%;">科技</td>
                  <td class="tunitcc" style="width: 10%;">時代</td>
                  <td class="tunitcc" style="width: 15%;">成本</td>
                  <td class="tunitcc">影響</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Masonry.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>
                  </td>
                  <td class="tunitc4">城堡</td>
                  <td class="tunitc5">150F 175W</td>
                  <td class="tunitc6">建築物+10% HP，建築護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Architecture.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>
                  </td>
                  <td class="tunitc4">帝王</td>
                  <td class="tunitc5">300F 200W</td>
                  <td class="tunitc6">建築物+10% HP，建築護甲+1/+1。</td>
                </tr>
              </table>

              <h3><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link></h3>
              <div class="hrn1"></div>
              <table class="table-bordered" width="100%">
                <tr>
                  <td class="tunitcc" style="width: 15%;">科技</td>
                  <td class="tunitcc" style="width: 10%;">時代</td>
                  <td class="tunitcc" style="width: 15%;">成本</td>
                  <td class="tunitcc">影響</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Paddedarcherarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Padded_Archer_Armor"
                      >弓兵布甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">封建</td>
                  <td class="tunitc5">100F</td>
                  <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Leatherarcherarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Leather_Archer_Armor"
                      >弓兵皮甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">城堡</td>
                  <td class="tunitc5">150F 150G</td>
                  <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Ringarcherarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Ring_Archer_Armor"
                      >弓兵環甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">帝王</td>
                  <td class="tunitc5">250F 250G</td>
                  <td class="tunitc6">弓兵和馬弓騎兵護甲+1/+2。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Scalebardingarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Scale_Barding_Armor"
                      >騎兵鱗甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">封建</td>
                  <td class="tunitc5">150F</td>
                  <td class="tunitc6">騎兵護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Chainbardingarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Chain_Barding_Armor"
                      >騎兵鎖甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">城堡</td>
                  <td class="tunitc5">250F 150G</td>
                  <td class="tunitc6">騎兵護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Platebardingarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Plate_Barding_Armor"
                      >騎兵板甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">帝王</td>
                  <td class="tunitc5">350F 200G</td>
                  <td class="tunitc6">騎兵護甲+1/+2。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Scalemailarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Scale_Mail_Armor"
                      >步兵鱗甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">封建</td>
                  <td class="tunitc5">100F</td>
                  <td class="tunitc6">步兵護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Chainmailarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Chain_Mail_Armor"
                      >步兵鎖甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">城堡</td>
                  <td class="tunitc5">200F 100G</td>
                  <td class="tunitc6">步兵護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Platemailarmor.jpg"
                      alt=""
                    /><nuxt-link to="/techs/Plate_Mail_Armor"
                      >步兵板甲</nuxt-link
                    >
                  </td>
                  <td class="tunitc4">帝王</td>
                  <td class="tunitc5">300F 150G</td>
                  <td class="tunitc6">步兵護甲+1/+2。</td>
                </tr>
              </table>

              <h3><nuxt-link to="/techs/untech">城堡特殊科技</nuxt-link></h3>
              <div class="hrn1"></div>
              <table class="table-bordered table-striped" width="100%">
                <tr>
                  <td class="tunitcc" style="width: 15%;">文明</td>
                  <td class="tunitcc" style="width: 10%;">特殊科技</td>
                  <td class="tunitcc" style="width: 15%;">花費</td>
                  <td class="tunitcc">影響</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      src="~assets/CastleAgeUnique.png"
                      style="margin: 2px;"
                      alt=""
                    /><nuxt-link to="/civs/Burmese">緬甸</nuxt-link>
                  </td>
                  <td class="tunitc4">
                    <nuxt-link to="/techs/Howdah">象轎</nuxt-link>
                  </td>
                  <td class="tunitc5">200W 300F</td>
                  <td class="tunitc6">矛象伕護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      src="~assets/CastleAgeUnique.png"
                      style="margin: 2px;"
                      alt=""
                    /><nuxt-link to="/civs/Italians">義大利</nuxt-link>
                  </td>
                  <td class="tunitc4">
                    <nuxt-link to="/techs/Pavise">巨盾</nuxt-link>
                  </td>
                  <td class="tunitc5">300F 150G</td>
                  <td class="tunitc6">徒步遠程護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      src="~assets/CastleAgeUnique.png"
                      style="margin: 2px;"
                      alt=""
                    /><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
                  </td>
                  <td class="tunitc4">
                    <nuxt-link to="/techs/Carrack">克拉克帆船</nuxt-link>
                  </td>
                  <td class="tunitc5">200W 300G</td>
                  <td class="tunitc6">船隻護甲+1/+1。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      src="~assets/CastleAgeUnique.png"
                      style="margin: 2px;"
                      alt=""
                    /><nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
                  </td>
                  <td class="tunitc4">
                    <nuxt-link to="/techs/Orthodoxy">東正教</nuxt-link>
                  </td>
                  <td class="tunitc5">200F 300G</td>
                  <td class="tunitc6">僧侶護甲+3/+3。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      src="~assets/CastleAgeUnique.png"
                      alt=""
                    /><nuxt-link to="/civs/Teutons">條頓</nuxt-link>
                  </td>
                  <td class="tunitc4">
                    <nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link>
                  </td>
                  <td class="tunitc5">400W 350G</td>
                  <td class="tunitc6">攻城武器近戰護甲+4。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      src="~assets/Unique-tech.jpg"
                      style="margin: 2px;"
                      alt=""
                    /><nuxt-link to="/civs/Incas">印加</nuxt-link>
                  </td>
                  <td class="tunitc4">
                    <nuxt-link to="/techs/Couriers">信使</nuxt-link>
                  </td>
                  <td class="tunitc5">400F 200G</td>
                  <td class="tunitc6">槍隊長、投石手和鷹勇士的護甲+1/+2。</td>
                </tr>
                <tr>
                  <td class="tunitc6">
                    <img
                      class="gg"
                      src="~assets/Unique-tech.jpg"
                      style="margin: 2px;"
                      alt=""
                    /><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
                  </td>
                  <td class="tunitc4">
                    <nuxt-link to="/techs/Supremacy">霸權</nuxt-link>
                  </td>
                  <td class="tunitc5">400F 250G</td>
                  <td class="tunitc6">村民攻擊+6，護甲+2/+2，HP+40。</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  head() {
    return {
      title: 'Aoetw - 護甲'
    }
  },
  layout: '',
  components: {}
}
</script>
<style></style>
