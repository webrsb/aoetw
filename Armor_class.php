<!DOCTYPE html>
<html lang="zh-tw">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Aoetw</title>
    <style>
      body {            padding-top: 0px;            font-family: "微軟正黑體";            background-color: #f5f5f5;            font-size: 18px;        }
    </style>
  </head>
  
  <body>
    <?php include( "head.php"); ?>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row" style=" margin-top: 50px;">
        <div class="col-md-12">
           <h1>防禦與防禦類型</h1>

          <div class="hrn1"></div>
        </div>
        <div class="col-md-12">
          <div class="n1">
            <p>防禦類型屬於遊戲內隱藏的項目，讓防禦對應不同的攻擊加成。</p>
            <br><strong>這篇條目包含防禦類型與遠防、近防</strong>

          </div>
           <h3>防禦類型</h3>

          <div class="hrn1"></div>
          <div class="n1">
            <p>攻擊加成和防禦類型都不會在遊戲中顯示，雖然科技樹都會寫這個單位對哪些單位有加成，可以造成額外的傷害，但他不會說這個額外傷害是多少，或者這個單位屬於哪個防禦類型。即使大多的單位你用肉眼就可以得知這個單位屬於哪些類型，例如
              <a
              href="Eagle_Warrior.php">鷹勇士</a>你會很直覺的認為他是<a href="Armor_Class_Infantry.php">步兵</a>，但很多情況例外，例如前面說的
                <a
                href="Eagle_Warrior.php">鷹勇士</a>他其實也是<a href="Armor_Class_Eagle_Warrior.php">『鷹勇士』類</a>，他有自己的防禦類型，
                  <a
                  href="Champion.php">劍兵勇士</a>會給他很大的傷害。另一個例子是<a href="Camel.php">駱駝騎兵</a>，他不在<a href="Armor_Class_Cavalry.php">騎兵類</a>，而是在自己的
                    <a
                    href="Armor_Class_Camel.php">駱駝類</a>，面對<a href="Spearman.php">槍兵</a>他受的到傷害更小。</p>
             <h3>功能</h3>

            <p>基本上，計算傷害很簡單就是攻擊減去裝甲。但有防禦類型，就必須累加。</p>
            <p>簡單的說，如果一個單位有多種防禦類型，那麼攻擊他的加成就會增加，例如<a href="War_Elephant.php">戰象</a>有兩個防禦類型，
              <a
              href="Armor_Class_Cavalry.php">騎兵</a>和<a href="Armor_Class_War_Elephant.php">戰象</a>，而<a href="Halberdier.php">戟兵</a>對這兩類都有附加攻擊，分別是32和28，所以一隻
                <a
                href="Halberdier.php">戟兵</a>攻擊<a href="War_Elephant.php">戰象</a>的數字就是基礎攻擊加上32+28＝60，兩個加成都算在裡面。</p>
            <p>每個防禦類型都有一個裝甲值，大多數的單位來看，這個裝甲值都是0，只是說明這個單位在這個防禦類型中，並會受到額外的傷害，但在某些但未中，他並非是0。而是一個數字表示，他可以額外抵抗這類防禦類型的傷害，而如果是負數，則代表會增加更多傷害。例如
              <a
              href="Cataphract.php">聖騎兵</a>的防禦類型是<a href="Armor_Class_Cavalry.php">騎兵</a>，但他的騎兵裝甲值是12，這代表他比其他
                <a
                href="Cavalry_Unit.php">騎兵</a>更不怕反騎兵的攻擊。另一方面，<a href="Ballista_Elephant.php">弩砲象</a>的<a href="Armor_Class_Cavalry.php">騎兵防禦</a>類型裝甲是-2，這表示他會受到更多的反騎兵攻擊加成。當然以上的數字遊戲內都不會告訴你。</p>
          </div>
           <h3>防禦類型列表</h3>

          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-6">單位類：
                <ul>
                  <li><a href="Armor_Class_Infantry.php">步兵</a>

                  </li>
                  <li><a href="Armor_Class_Spearman.php">槍兵</a>

                  </li>
                  <li><a href="Armor_Class_Eagle_Warrior.php">鷹勇士</a>

                  </li>
                  <li><a href="Armor_Class_Archer.php">射手</a>

                  </li>
                  <li><a href="Armor_Class_Cavalry_Archer.php">馬弓騎兵</a>

                  </li>
                  <li><a href="Armor_Class_Cavalry.php">騎兵</a>

                  </li>
                  <li><a href="Armor_Class_Camel.php">駱駝</a>

                  </li>
                  <li><a href="Armor_Class_War_Elephant.php">戰象</a>

                  </li>
                  <li><a href="Armor_Class_Gunpowder_Unit.php">火藥單位</a>

                  </li>
                  <li><a href="Armor_Class_Siege_Weapon.php">攻城武器</a>

                  </li>
                  <li><a href="Armor_Class_Ram.php">衝撞車</a>

                  </li>
                  <li><a href="Armor_Class_Monk.php">僧侶</a>

                  </li>
                  <li><a href="Armor_Class_Ship.php">船</a>

                  </li>
                  <li><a href="Armor_Class_Turtle_Ship.php">龜甲船</a>

                  </li>
                  <li><a href="Armor_Class_Unique_Unit.php">特殊單位</a>

                  </li>
                </ul>
              </div>
              <div class="col-md-6">建築類
                <ul>
                  <li><a href="Armor_class_building.php">建築</a>

                  </li>
                  <li><a href="Armor_class_standard_building.php">標準建築</a>

                  </li>
                  <li><a href="Armor_class_stone_defense.php">石頭建築</a>

                  </li>
                  <li><a href="Armor_class_wall_and_gate.php">牆與門</a>

                  </li>
                  <li><a href="Armor_class_Castle.php">城堡</a>

                  </li>
                </ul>
              </div>
            </div>
             <h3>瑣事</h3>

            <div class="hrn1"></div>
            <div class="n1"><a href="Elephant_Archer.php">象弓騎兵</a>有最多的防禦類型，有五種。</div>
             <h3>遠防</h3>

            <div class="hrn1"></div>
            <div class="n1">下列的單位都是遠程傷害，並造成對方遠防裝甲的影響
              <ul>
                <li>所有<a href="Archery_Range.php">射箭場</a>單位</li>
                <li>所有特殊的射手單位</li>
                <li>
                  <img class="gg" src="img/JanissaryIcon.jpg" alt=""><a href="Janissary.php">土耳其火槍兵</a> 
                </li>
                <li>
                  <img class="gg" src="img/ConquistadorIcon.jpg" alt=""><a href="Conquistador.php">征服者</a> 
                </li>
                <li>
                  <img class="gg" src="img/OrganGunIcon.jpg" alt=""><a href="Organ_Gun.php">手風琴砲</a> 
                </li>
                <li>
                  <img class="gg" src="img/ScorpionIcon.jpg" alt=""><a href="Scorpion.php">弩砲</a> 
                </li>
                <li>
                  <img class="gg" src="img/TrebuchetPackedIcon.jpg" alt=""><a href="Trebuchet.php">投石機</a> 
                </li>
                <li>
                  <img class="gg" src="img/Galley.jpg" alt=""><a href="Galley.php">戰船</a>→
                  <img class="gg" src="img/WarGalley.jpg" width="22"
                  alt=""><a href="War_Galley.php">弩炮戰船</a>→
                  <img class="gg" src="img/GalleonAoE2.jpg"
                  alt=""><a href="Galleon.php">重型弩炮戰船</a> 
                </li>
                <li>
                  <img class="gg" src="img/FireGalleyIcon.jpg" alt=""><a href="Fire_Galley.php">火蒙衝</a>→
                  <img class="gg" src="img/FireShipIcon.jpg"
                  width="22" alt=""><a href="Fire_Ship.php">火戰船</a>→
                  <img class="gg" src="img/FastFireShipIcon.jpg"
                  alt=""><a href="Fast_Fire_Ship.php">快速火戰船</a> 
                </li>
                <li>
                  <img src="img/LongboatIcon.jpg" alt=""><a href="Longboat.php">維京大戰船</a> 
                </li>
                <li>
                  <img src="img/CaravelIcon2.jpg" alt=""><a href="Caravel.php">卡拉維爾戰船</a> 
                </li>
              </ul>
              <li><a href="Fire_Ship.php">火戰船系列</a>造成遠程傷害時也會有近戰傷害。</li>
              <li>所有建築都是造成遠防傷害。</li>
               <h3>具有高遠防的單位</h3>

              <div class="row">
                <div class="col-md-4">步兵
                  <ul>
                    <li>
                      <img class="gg" src="img/HuskarlIcon.jpg" alt=""><a href="Huskarl.php">精銳哥德衛隊</a>（10）</li>
                    <li>
                      <img class="gg" src="img/EliteEagleWarriorIcon.jpg" alt=""><a href="Elite_Eagle_Warrior.php">精銳鷹勇士</a>（8,<a href="Incas.php">印加</a>：10）</li>
                  </ul>弓箭手
                  <ul>
                    <li>
                      <img class="gg" src="img/Rattanarchericon.png" alt=""><a href="Rattan_Archer.php">精銳籐甲弓箭手</a>（10）</li>
                    <li>
                      <img class="gg" src="img/Imperialskirmishericon.png" alt=""><a href="Imperial_Skirmisher.php">帝王戰矛兵</a>（9）</li>
                    <li>
                      <img class="gg" src="img/ElephantArcherIcon.jpg" alt=""><a href="Elephant_Archer.php">精銳象弓騎兵</a>（9）</li>
                    <li>
                      <img class="gg" src="img/WarWagonIcon.jpg" alt=""><a href="War_Wagon.php">精銳馬戰車</a>（8）</li>
                    <li>
                      <img class="gg" src="img/GenitourIcon.jpg" alt=""><a href="Genitour.php">精銳鏢槍騎兵</a>（8）</li>
                    <li>
                      <img class="gg" src="img/EliteSkirmisherIcon.jpg" alt=""><a href="Elite_Skirmisher.php">戰矛兵</a>（8）</li>
                  </ul>
                </div>
                <div class="col-md-4">騎兵
                  <ul>
                    <li>
                      <img class="gg" src="img/TarkanIcon.jpg" alt=""><a href="Tarkan.php">精銳韃靼騎兵</a>（8）</li>
                    <li>
                      <img class="gg" src="img/WarElephantIcon.jpg" width="22" alt=""><a href="War_Elephant.php">精銳戰象</a>（7）</li>
                    <li>
                      <img class="gg" src="img/Elitebattleelephanticon.png" alt=""><a href="Battle_Elephant.php">精銳矛象伕</a>（7,<a href="Burmese.php">緬甸</a>：9）</li>
                    <li>
                      <img class="gg" src="img/Ballistaelephanticon.png" alt=""><a href="Ballista_Elephant.php">精銳弩砲象</a>（7）</li>
                    <li>
                      <img class="gg" src="img/PaladinIcon.jpg" alt=""><a href="Paladin.php">遊俠</a>（7）</li>
                  </ul>攻城武器
                  <ul>
                    <li>
                      <img class="gg" src="img/SiegeRamIcon.jpg" alt=""><a href="Siege_Ram.php">重型衝撞車</a>（195）</li>
                    <li>
                      <img class="gg" src="img/TrebuchetPackedIcon.jpg" alt=""><a href="Trebuchet.php">投石機</a>（移動：8，展開後：150）</li>
                    <li>
                      <img class="gg" src="img/Siegetowericon.png" alt=""><a href="Siege_Tower.php">攻城塔</a>（100）</li>
                  </ul>
                </div>
                <div class="col-md-4">船
                  <ul>
                    <li>
                      <img src="img/CaravelIcon2.jpg" alt=""><a href="Caravel.php">精銳卡拉維爾戰船</a>（10）</li>
                    <li>
                      <img class="gg" src="img/FastFireShipIcon.jpg" alt=""><a href="Fast_Fire_Ship.php">快速火戰船</a>（9）</li>
                    <li>
                      <img src="img/LongboatIcon.jpg" alt=""><a href="Longboat.php">精銳維京大戰船</a>（9）</li>
                    <li>
                      <img class="gg" src="img/GalleonAoE2.jpg" alt=""><a href="Galleon.php">重型弩炮戰船</a>（9）</li>
                    <li>
                      <img src="img/CannonGalleonIcon.jpg" alt=""><a href="Elite_Cannon_Galleon.php">精銳火炮戰船</a>（9）</li>
                    <li>
                      <img class="gg" src="img/TransportShipIcon.jpg" alt=""><a href="Transport_Ship.php">運輸船</a>（9）</li>
                  </ul>
                </div>
              </div>
               <h3>科技</h3>

              <div class="hrn1"></div>
              <div class="n1">下列的科技都可以增加遠防
                 <h3><a href="Archery_Range.php">射箭場</a></h3> 
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
                      <img class="gg" style="margin: 2px;" src="img/Parthian-Tactics.jpg" alt=""><a href="Parthian_Tactics.php">帕提亞戰術</a>

                    </td>
                    <td class="tunitc4">帝王</td>
                    <td class="tunitc5">200F 250G</td>
                    <td class="tunitc6">馬弓騎兵護甲+1/+2，對長槍兵攻擊+4。</td>
                  </tr>
                </table>
                 <h3><a href="Town_Center.php">城鎮中心</a></h3> 
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
                      <img class="gg" style="margin: 2px;" src="img/Loom.jpg" alt=""><a href="Loom.php">織布技術</a>

                    </td>
                    <td class="tunitc4">黑暗</td>
                    <td class="tunitc5">50G</td>
                    <td class="tunitc6">村民+15 HP，護甲+1/+2。</td>
                  </tr>
                </table>
                 <h3><a href="Dock.php">碼頭</a></h3> 
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
                      <img class="gg" style="margin: 2px;" src="img/Careening.jpg" alt=""><a href="Careening.php">傾側維修術</a>

                    </td>
                    <td class="tunitc4">城堡</td>
                    <td class="tunitc5">250F 150G</td>
                    <td class="tunitc6">船隻護甲+1，運輸船可承載單位+5。</td>
                  </tr>
                </table>
                 <h3><a href="University.php">學院</a></h3> 
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
                      <img class="gg" style="margin: 2px;" src="img/Masonry.jpg" alt=""><a href="Masonry.php">磚瓦技術</a>

                    </td>
                    <td class="tunitc4">城堡</td>
                    <td class="tunitc5">150F 175W</td>
                    <td class="tunitc6">建築物+10% HP，建築護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Architecture.jpg" alt=""><a href="Architecture.php">建築學</a>

                    </td>
                    <td class="tunitc4">帝王</td>
                    <td class="tunitc5">300F 200W</td>
                    <td class="tunitc6">建築物+10% HP，建築護甲+1/+1。</td>
                  </tr>
                </table>
                 <h3><a href="Blacksmith.php">兵工廠</a></h3> 
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
                      <img class="gg" style="margin: 2px;" src="img/Paddedarcherarmor.jpg" alt=""><a href="Padded_Archer_Armor.php">弓兵布甲</a>

                    </td>
                    <td class="tunitc4">封建</td>
                    <td class="tunitc5">100F</td>
                    <td class="tunitc6">弓兵和馬騎弓兵護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Leatherarcherarmor.jpg"
                      alt=""><a href="Leather_Archer_Armor.php">弓兵皮甲</a>

                    </td>
                    <td class="tunitc4">城堡</td>
                    <td class="tunitc5">150F 150G</td>
                    <td class="tunitc6">弓兵和馬騎弓兵護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Ringarcherarmor.jpg" alt=""><a href="Ring_Archer_Armor.php">弓兵環甲</a>

                    </td>
                    <td class="tunitc4">帝王</td>
                    <td class="tunitc5">250F 250G</td>
                    <td class="tunitc6">弓兵和馬騎弓兵護甲+1/+2。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Scalebardingarmor.jpg" alt=""><a href="Scale_Barding_Armor.php">騎兵鱗甲</a>

                    </td>
                    <td class="tunitc4">封建</td>
                    <td class="tunitc5">150F</td>
                    <td class="tunitc6">騎兵護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Chainbardingarmor.jpg" alt=""><a href="Chain_Barding_Armor.php">騎兵鎖甲</a>

                    </td>
                    <td class="tunitc4">城堡</td>
                    <td class="tunitc5">250F 150G</td>
                    <td class="tunitc6">騎兵護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Platebardingarmor.jpg" alt=""><a href="Plate_Barding_Armor.php">騎兵板甲</a>

                    </td>
                    <td class="tunitc4">帝王</td>
                    <td class="tunitc5">350F 200G</td>
                    <td class="tunitc6">騎兵護甲+1/+2。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Scalemailarmor.jpg" alt=""><a href="Scale_Mail_Armor.php">步兵鱗甲</a>

                    </td>
                    <td class="tunitc4">封建</td>
                    <td class="tunitc5">100F</td>
                    <td class="tunitc6">步兵護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Chainmailarmor.jpg" alt=""><a href="Chain_Mail_Armor.php">步兵鎖甲</a>

                    </td>
                    <td class="tunitc4">城堡</td>
                    <td class="tunitc5">200F 100G</td>
                    <td class="tunitc6">步兵護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" style="margin: 2px;" src="img/Platemailarmor.jpg" alt=""><a href="Plate_Mail_Armor.php">步兵板甲</a>

                    </td>
                    <td class="tunitc4">帝王</td>
                    <td class="tunitc5">300F 150G</td>
                    <td class="tunitc6">步兵護甲+1/+2。</td>
                  </tr>
                </table>
                 <h3><a href="unitech.php">城堡特殊科技</a></h3> 
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
                      <img class="gg" src="img/CastleAgeUnique.png" style="margin: 2px;" alt=""><a href="Burmese.php">緬甸</a>

                    </td>
                    <td class="tunitc4"><a href="Howdah.php">象轎</a>

                    </td>
                    <td class="tunitc5">200W 300F</td>
                    <td class="tunitc6">矛象伕護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" src="img/CastleAgeUnique.png" style="margin: 2px;" alt=""><a href="Italians.php">義大利</a>

                    </td>
                    <td class="tunitc4"><a href="Pavise.php">巨盾</a>

                    </td>
                    <td class="tunitc5">300F 150G</td>
                    <td class="tunitc6">徒步弓兵護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" src="img/CastleAgeUnique.png" style="margin: 2px;" alt=""><a href="Portuguese.php">葡萄牙</a>

                    </td>
                    <td class="tunitc4"><a href="Carrack.php">克拉克帆船</a>

                    </td>
                    <td class="tunitc5">200W 300G</td>
                    <td class="tunitc6">船隻護甲+1/+1。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" src="img/CastleAgeUnique.png" style="margin: 2px;" alt=""><a href="Slavs.php">斯拉夫</a>

                    </td>
                    <td class="tunitc4"><a href="Orthodoxy.php">東正教</a>

                    </td>
                    <td class="tunitc5">200F 300G</td>
                    <td class="tunitc6">僧侶護甲+3/+3。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" src="img/CastleAgeUnique.png" class="gg" alt=""><a href="Teutons.php">條頓</a>

                    </td>
                    <td class="tunitc4"><a href="Ironclad.php">鋼鐵甲</a>

                    </td>
                    <td class="tunitc5">400W 350G</td>
                    <td class="tunitc6">攻城武器近戰護甲+4。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" src="img/Unique-tech.jpg" style="margin: 2px;" alt=""><a href="Incas.php">印加</a>

                    </td>
                    <td class="tunitc4"><a href="Couriers.php">信使</a>

                    </td>
                    <td class="tunitc5">400F 200G</td>
                    <td class="tunitc6">槍隊長、投石手和鷹勇士的護甲+1/+2。</td>
                  </tr>
                  <tr>
                    <td class="tunitc6">
                      <img class="gg" src="img/Unique-tech.jpg" style="margin: 2px;" alt=""><a href="Spanish.php">西班牙</a>

                    </td>
                    <td class="tunitc4"><a href="Supremacy.php">霸權</a>

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
	<!-- /container -->
	<?php include( "allen.php"); ?>
	<?php include( "footn.php"); ?>
  </body>

</html>