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
          <h1>村民</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>村民訓練於<a href="Dark_Age.php">黑暗時代</a>的<a href="Town_Center">城鎮中心</a>，村民作為唯一能夠建築與收集資源的單位，是所有文明的核心單位，男女性別隨機出現</p>
            <p>所有文明開始時都有三位村民，除了<a href="Chinese.php">中國人</a>和<a href=".php">瑪雅人</a>(初始時分別擁有六個與四個村民)雖然他們在戰鬥中作用不大，且會在遭到攻擊時停止一切作業，但他們能夠修復受損的攻城武器，或於前線建造軍事建築物來加強軍隊。</p>
            <p><a href="Spanish.php">西班牙</a>的特殊科技<a href="Supremacy.php">霸權</a>，能夠讓村民具有戰鬥力。</div>
          <h3>任務與單位名稱</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>當村民接到不同的任務時，會有不同的單位名稱</p>
            </li>
            <li>村民 - 攻擊敵方單位或建築物或野生動物</li>
            <li>建築工 - 建造建築物</li>
            <li>農夫 - 從農田收集食物</li>
            <li>漁夫 - 從魚類收集食物</li>
            <li>漿果收集員 - 從灌木叢收集食物</li>
            <li>伐木工 - 從樹收集木材</li>
            <li>礦工 - 從金礦或石礦收集黃金或石頭</li>
            <li>牧羊人 - 召集綿羊至城鎮中心或是磨坊旁，殺死綿羊收集食物</li>
            <li>獵人 - 攻擊並從野生動物中收集食物</li>
            <li>修理工 - 修復建築物</div>
          <h3>收集資源效率</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              <p>村民收集資源的速率有所不同，以下列出所有收集速率(降冪)</p>
          </div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td>村民類型</td>
              <td>資源</td>
              <td>收集效率</td>
            </tr>
			<tr>
              <td class="ttb1">賽爾特伐木工</td>
              <td class="ttb2">木材</td>
              <td class="ttb3">0.449</td>
            </tr>
            <tr>
              <td class="tta1">伐木工</td>
              <td class="tta2">木材</td>
              <td class="tta3">0.39</td>
            </tr>
			<tr>
              <td class="ttb1">土耳其礦工</td>
              <td class="ttb2">黃金</td>
              <td class="ttb3">0.455</td>
            </tr>
			<tr>
              <td class="tta1">礦工</td>
              <td class="tta2">黃金</td>
              <td class="tta3">0.379</td>
            </tr>
			<tr>
              <td class="ttb1">韓國礦工</td>
              <td class="ttb2">石頭</td>
              <td class="ttb3">0.431</td>
            </tr>
            <tr>
              <td class="tta1">礦工</td>
              <td class="tta2">石頭</td>
              <td class="tta3">0.359</td>
            </tr>
			<tr>
              <td class="ttb1">蒙古獵人</td>
              <td class="ttb2">食物</td>
              <td class="ttb3">0.612</td>
            </tr>
			<tr>
              <td class="ttb1">印度漁夫</td>
              <td class="ttb2">食物</td>
              <td class="ttb3">0.490</td>
            </tr>
            <tr>
              <td class="tta1">漁夫</td>
              <td class="tta2">食物</td>
              <td class="tta3">0.426</td>
            </tr>
			<tr>
              <td class="ttb1">不列顛牧羊人</td>
              <td class="ttb2">食物</td>
              <td class="ttb3">0.413</td>
            </tr>
            <tr>
              <td class="tta1">獵人</td>
              <td class="tta2">食物</td>
              <td class="tta3">0.408</td>
            </tr>
			<tr>
              <td class="ttb1">法蘭克漿果收集員</td>
              <td class="ttb2">食物</td>
              <td class="ttb3">0.388</td>
            </tr>
			
			<tr>
              <td class="ttb1">斯拉夫農民</td>
              <td class="ttb2">食物</td>
              <td class="ttb3">0.367</td>
            </tr>
            <tr>
              <td class="tta1">牧羊人</td>
              <td class="tta2">食物</td>
              <td class="tta3">0.330</td>
            </tr>
            <tr>
              <td class="tta1">農民</td>
              <td class="tta2">食物</td>
              <td class="tta3">0.319</td>
            </tr>
            <tr>
              <td class="tta1">漿果收集員</td>
              <td class="tta2">食物</td>
              <td class="tta3">0.310</td>
            </tr>
			
          </table>
          <p>請注意，農田的實際收集率將由於需要在農田四處走動而降低。步行時間是村民在技術上來說屬於閒置，並不收集資源的時間。考慮步行時間在內，農夫的平均收集率約是0.3003食物/秒（研發科技
            <a
            href="Wheelbarrow.php">獨輪推車</a>將增加13.6%的效率，約為0.34）。同時考慮到農夫需要額外的步行時間才能到達農田的聚集點（和背面），他們的淨糧食產量實際上更低(可參考測試一)。</p>
          <p>測試一：無獨輪、以TC旁最佳蓋法一圈8田為方法，村從TC放出來第一格田自己走到定點，48秒後回TC放肉(走回TC的時間不在48S內)共採肉94，速率0.24</p>
          <p>註1：獨輪推車對於伐木、採礦增加的效率約只有3%，遠低於農夫的效果</p>
          <p>註2：相較近場村民捕魚的0.426，漁船近海捕魚為0.280，漁船深海捕魚為0.487，漁船魚簍為0.206</p>
          	<h3>建築物</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-3">
              <div class="n1">
                 <h4><a href="Dark_Age.php"></a>黑暗時代</h4> 
                <ul>
                  <li>
                    <img class="gg" src="img/Houseicon.png" width="30" alt=""><a href="House.php">房屋</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Millicon.png" width="30" alt=""><a href="Mill.php">磨坊</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Farmicon.png" width="30" alt=""><a href="Farm.php  Farm.phpp">農田</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Miningcampicon.png" width="30" alt=""><a href="Mining_Camp.php">採礦營地</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Lumbercampicon.png" width="30" alt=""><a href="Lumber_Camp.php">伐木場</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Dockicon.png" width="30" alt=""><a href="Dock.php">碼頭</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Barracks-logo.jpg" width="30" alt=""><a href="Barracks.phpp">軍營</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Outposticon.png" width="30" alt=""><a href="Outpost.php">哨站</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Palisadewallicon.png" width="30" alt=""><a href="Palisade_Wall.php">木牆</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Palisadegateicon.png" width="30" alt=""><a href="Palisade_Gate.php">木門</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="n1">
                 <h4><a href="Feudal_Age.php"></a>封建時代</h4> 
                <ul>
                  <li>
                    <img class="gg" src="img/Acheryrangeicon.png" width="30" alt=""><a href="Archery_Range.php">射箭場</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Stableicon.png" width="30" alt=""><a href="Stable.php">馬廄</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Blacksmithicon.png" width="30" alt=""><a href="Blacksmith.php">兵工廠</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Marketicon.png" width="30" alt=""><a href="Market.php">市場</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" width="30" alt=""><a href="Watch_Tower.php">瞭望箭塔</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Stonewallicon.png" width="30" alt=""><a href="Stone_Wall.php">石牆</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Gateicon.png" width="30" alt=""><a href="Gateicon_Gate.php">城門</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="n1">
                 <h4><a href="Castle_Age.php"></a>城堡時代</h4> 
                <ul>
                  <li>
                    <img class="gg" src="img/Castleicon.png" width="30" alt=""><a href="Castle.php">城堡</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Siegeworkshopicon.png" width="30" alt=""><a href="Siege_Workshop.php">攻城武器製造所</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" width="30" alt=""><a href="Guard_Tower.php">防禦箭塔</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Stonewallicon.png" width="30" alt=""><a href="Fortified_Wall.php">垛牆</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Monasteryicon.png" width="30" alt=""><a href="Monastery.php">修道院</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Universityicon.png" width="30" alt=""><a href="University.php">學院</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Towncentericon.png" width="30" alt=""><a href="Town_Center.php">城鎮中心</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Dockicon.png" width="30" alt=""><a href="Harbor.php">海港</a>(馬來限定)</li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="n1">
                 <h4><a href="Imperial_Age.php"></a>帝王時代</h4> 
                <ul>
                  <li>
                    <img class="gg" src="img/Wondericon.png" width="30" alt=""><a href="Wonder.php">世界奇觀</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" width="30" alt=""><a href="Keep.php">大型箭塔</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Bombardtowericon.png" width="30" alt=""><a href="Bombard_Tower.php">火炮塔</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Feitoriaicon.png" width="30" alt=""><a href="Feitoriaicon_Feitoria.php">港灣大商站</a>(葡萄牙限定)</li>
                </ul>
              </div>
            </div>
          </div>
          <p>更多村民可以更快地建造建築物。如果t是一個村民建造一個建築物所需的時間，n是村民使用的數量，那麼建築時間將是3t/(n+2)。這意味著第一位村民的建築速度是其他額外村民的三倍。所以，若要建造多個建築物，讓村民分散建築更有效率，除非要快速建造一座關鍵建築（如
            <a
            href="Castle.php">城堡</a>或<a href="Town_Center.php">城鎮中心</a>）。</p>
          <h3>修復</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>村民可以修理建築物，攻城武器和船隻。這樣做可以節省資源。但是修復建築物可能會比建造一個新建築慢得多。村民可以從兩格遠的地方修理單位 - 這主要是為了修復船隻，也可以修理一個完全被圍牆包圍的建築，例如
              <a
              href="Watch_Tower.php">箭塔</a>。</p>
            <ul>
              <p>
                <li>成本</li>
              </p>
              <p>將一幢建築物由生命值1修復至生命值滿需要建築成本的一半。部分維修將花費適當的費用（因此只修理一半的HP成本為原始建築成本的25％）。
                <p>在維修過程中，費用會從資源庫存中扣除，而不是在開始時支付。如果一個玩家在維修期間耗盡資源，村民將停止維修並保持閒置狀態，直到他們被重新分配工作。
                  <p>折扣也適用，例如法蘭克玩家將只支付244石頭以完全修復城堡，升級建築物生命值的升級不會影響維修成本。</p>
            </ul>
            <ul>
              <p>
                <li>速度</li>
              </p>
              <p>對於建築物來說，第一個村民將會每分鐘修復750點生命值，而任何額外的村民將會增加375點/分鐘（只有一半的速度）。無論建築類型，升級或原始生命值如何，這都是一樣的。
                <li><a href="Treadmill Crane.php">滑輪起重機</a>
                </li>不影響修理速度。
                <p>在大多數情況下，新建築的建築速度要快於修復工程，儘管成本較高（例如更換損壞的牆體部分），但建造新建築的速度可能會更快。
                  <p>攻城武器和船艦的修理速度是建築物速度的25％，所以第一個村民是187.5 HP /分鐘，任何額外的村民將加上93.75 HP /分鐘。</p>
            </ul>
          </div>
          <h3>更多數據</h3>
          <div class="hrn1"></div>
          <div class="n1"></div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">劣勢與優勢</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">強勢(容易對抗)</td>
              <td class="tta4">大多數<a href="bulding.php">建築物</a>，<a href="Skirmisher.php">矛兵</a>，<a href="Battering_Ram.php">衝撞車</a>系，
                <a
                href="Spearman.php">長槍兵</a>，<a href="Trebuchet.php">投石機</a>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">幾乎所有單位</td>
            </tr>
            <tr class="tta">
              <td class="tta4" colspan="2" style="text-align: center;">
                <div class="unititle2"><a href="">升級</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攜帶能力</td>
              <td class="tta4">
                <p>
                  <img class="gg" src="img/Wheelbarrow.jpg" width="30" alt=""><a href="Wheelbarrow.php">獨輪推車</a>(+3)</p>
                <p>
                  <img class="gg" src="img/Handcart.jpg" width="30" alt=""><a href="Hand_Cart.php">手推車</a>(+7)</p>
                <p>
                  <img class="gg" src="img/Heavyplow.jpg" width="30" alt=""><a href="Heavy_Plow.php">重犁</a>(+1)(食物限定)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">收集速度</td>
              <td class="tta4">
                <li>木材:</li>
                <p>
                  <img class="gg" src="img/Doublebitaxe.jpg" width="30" alt=""><a href="Double-Bit_Axe.php">雙刃斧</a>(+20%)</p>
                <p>
                  <img class="gg" src="img/Bowsaw.jpg" width="30" alt=""><a href="Bow_Saw.php">弓鋸</a>(+20%)</p>
                <p>
                  <img class="gg" src="img/Twomansaw.jpg" width="30" alt=""><a href="Two-Man_Saw.php">雙人鋸</a>(+10%)</p>
                <li>石頭:</li>
                <p>
                  <img class="gg" src="img/Stonemining.jpg" width="30" alt=""><a href="Stone_Mining.php">採石技術</a>(+15%)</p>
                <p>
                  <img class="gg" src="img/Stone_Shaft_Mining.jpg" width="30" alt=""><a href="Stone_Shaft_Mining.php">礦井採石</a>(+15%)</p>
                <li>黃金:</li>
                <p>
                  <img class="gg" src="img/Goldmining.jpg" width="30" alt=""><a href="Gold Mining.php">採金技術</a>(+15%)</p>
                <p>
                  <img class="gg" src="img/Goldshaftmining.jpg" width="30" alt=""><a href="Gold_Shaft_Mining.php">礦井採金</a>(+15%)</p>
                <p>
                  <img class="gg" src="img/CastleAgeUnique.png" width="30" alt=""><a href="Sultans.php">蘇丹</a>(+10%，<a href="Indians.php">印度</a>限定)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生命值</td>
              <td class="tta4">
                <p>
                  <img class="gg" src="img/Loom.jpg" width="30" alt=""><a href="Loom.php">織布技術</a>(+15)</p>
                <p>
                  <img class="gg" src="img/Unique-tech.jpg" width="30" alt=""><a href="Supremacy.php">霸權</a>(+40，<a href="Spanish.php">西班牙</a>限定)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <p>
                  <img class="gg" src="img/Sappers.jpg" width="30" alt=""><a href="Sappers.php">坑道工兵</a>(攻擊建築物和防禦工事造成的傷害+15)</p>
                <p>
                  <img class="gg" src="img/Forging.jpg" width="30" alt=""><a href="Forging.php">鍛造</a>(+1，<a href="Incas.php">印加</a>限定)</p>
                <p>
                  <img class="gg" src="img/Ironcasting.jpg" width="30" alt=""><a href="Iron_Casting.php">鑄造</a>(+1，<a href="Incas.php">印加</a>限定)</p>
                <p>
                  <img class="gg" src="img/Blastfurnace.jpg" width="30" alt=""><a href="Blast_Furnace.php">鼓風爐</a>(+1，<a href="Incas.php">印加</a>限定)</p>
                <p>
                  <img class="gg" src="img/Unique-tech.jpg" width="30" alt=""><a href="Supremacy.php">霸權</a>(+6，<a href="Spanish.php">西班牙</a>限定)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <p>
                  <img class="gg" src="img/Loom.jpg" width="30" alt=""><a href="Loom.php">織布技術</a>(+1/+2)</p>
                <p>
                  <img class="gg" src="img/Scalemailarmor.jpg" width="30" alt=""><a href="Scale Mail Armor.php">步兵鱗甲</a>(+1/+1，<a href="Incas.php">印加</a>限定)</p>
                <p>
                  <img class="gg" src="img/Chainmailarmor.jpg" width="30" alt=""><a href="Chain Mail Armor.php">步兵鎖甲</a>(+1/+1，<a href="Incas.php">印加</a>限定)</p>
                <p>
                  <img class="gg" src="img/Platemailarmor.jpg" width="30" alt=""><a href="Plate Mail Armor.php">步兵板甲</a>(+1/+2，<a href="Incas.php">印加</a>限定)</p>
                <p>
                  <img class="gg" src="img/Unique-tech.jpg" width="30" alt=""><a href="Supremacy.php">霸權</a>(+2/+2，<a href="Spanish.php">西班牙</a>限定)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <p>
                  <img class="gg" src="img/Wheelbarrow.jpg" width="30" alt=""><a href="Wheelbarrow.php">獨輪推車</a>(+10%)</p>
                <p>
                  <img class="gg" src="img/Handcart.jpg" width="30" alt=""><a href="Hand_Cart.php">手推車</a>(+10%)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">招降抵抗</td>
              <td class="tta4">
                <p>
                  <img class="gg" src="img/Faith.jpg" width="30" alt=""><a href="Faith.php">忠誠信仰</a>
                </p>
                <p>
                  <img class="gg" src="img/Heresy.png" width="30" alt=""><a href="Heresy.php">異端邪說</a>
                </p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">其他</td>
              <td class="tta4">
                <img class="gg" src="img/Treadmillcrane.jpg" width="30" alt=""><a href="Treadmill Crane.php">滑輪起重機</a>(建築速度加快30%)</td>
            </tr>
          </table>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Aztecs.php">阿茲特克</a>：村民攜帶+5。</li>
              <li><a href="Berbers.php">柏柏爾</a>：村民移動速度提高了10％。</li>
              <li><a href="Britons.php">不列顛</a>：牧羊人工作速度提高了25％。</li>
              <li><a href="Celts.php">賽爾特</a>：伐木工工作速度提高15％。即使其他玩家的單位在旁邊，村民也可以取得其他玩家的牲畜。</li>
              <li><a href="Chinese.php">中國</a>：開始有6村民，但少200食物和50木材。。</li>
              <li><a href="Franks.php">法蘭克</a>：漿果收集員工作速度提高了25％。</li>
              <li><a href="Goths.php">哥德</a>：獵人攻擊野豬和野生大象時+5傷害，可多攜帶15食物。</li>
              <li><a href="Indians.php">印度</a>：在黑暗/封建/城堡/帝王時代，村民便宜5％/ 10％/ 15％/ 20％。漁夫收集速度提高15％，且可多攜帶15食物。。</li>
              <li><a href="Khmer.php">高棉</a>：村民可以駐守在房屋內。。</li>
              <li><a href="Koreans.php">韓國</a>：村民視線+3。礦工收集石頭快20％。建築速度快25％ 。</li>
              <li><a href="Magyars.php">馬札爾</a>：村民一擊殺死猛獸。</li>
              <li><a href="Mayans.php">瑪雅</a>：開始多1村民，但是少50食物。自然資源可收集時間延長15%。</li>
              <li><a href="Mongols.php">蒙古</a>：獵人收集速度提高50％。</li>
              <li><a href="Persians.php">波斯</a>：在封建/城堡/帝王時代，村民的創造速度提高了10％/ 15％/ 20％。</li>
              <li><a href="Slavs.php">斯拉夫</a>：農夫收集速度提高15%。</li>
              <li><a href="Spanish.php">西班牙</a>：建築速度提高30%</li>
              <li><a href="Turks.php">土耳其</a>：礦工收集黃金速度提高20%。</li>
              <li><a href="Vikings.php">維京</a>：免費獨輪推車與手推車。</li>
              <li><a href="Incas.php">印加</a>：村民攻擊與防禦隨著兵工廠升級。</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Britons.php">印加</a>：農田建造速度加快50%。</li>
              <li><a href="Malians.php">條頓</a>：村民更不容易被招降。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><a href="aoe.php">帝王世紀</a></em></h3>
            <ul>
              <li>村民對箭塔、牆與城堡有+3的攻擊。</li>
              <li>土耳其的村民挖金速度快15％。</li>
            </ul>
            <h3><em><a href="aoc.php">征服者入侵</a></em></h3>
            <ul>
              <li>村民對箭塔、牆與城堡有+6的攻擊。</li>
              <li>韓國村民最初有+2視野，1.0c後變成+3視野。</li>
              <li>馬雅人有20％的資源額外採集量。</li>
            </ul>
            <h3><em><a href="aof.php">失落的帝國</a></em></h3>
            <ul>
              <li>村民現在可以駐進衝撞車。</li>
              <li>馬雅村民有15％的額外資源採集量。</li>
              <li>韓國村民蓋箭塔與城堡快25％。</li>
            </ul>
            <h3><em><a href="ak.php">非洲王國</a></em></h3>
            <ul>
              <li>土耳其村民採金快20。</li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>村民是遊戲中唯一有分男女的單位。</li>
              <li>村民是遊戲中三個有多種3D模組的單位之一，村民有兩個3D模組(男與女)，另兩個是<a href="Monk.php">僧侶</a>(正常與撿拾遺跡)和
                <a
                href="Trade_Cart.php">貿易車隊</a>(正常與有貨物)。</li>
              <li>男性和女性村民在戰鬥與收集時使用不同的武器。男村民使用匕首而女村民使用刀。</li>
              <li>女性村民是遊戲中僅有的兩個常規女性單位之一，另一個是飛刀女獵手。</li>
              <li>村民只有25個基本生命值，是所有單位中最低的。</li>
            </ul>
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <a href="img/Villagerfemale.png"><img class="imgn" class="hg" src="img/Villagerfemale.png" alt=""></a> 
                <p><em>女村民</em>
                </p>
              </div>
              <div class="col-md-4"> <a href="img/Villagermale.png"><img class="imgn" class="hg" src="img/Villagermale.png" alt=""></a> 
                <p><em>男村民</em>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle" style="color: #fff;">村民</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="img/VillagerMaleIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff;">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><a href="">村民</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">全部</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4"><a href="Imperial_Age.php">黑暗時代</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4"><a href="Town_Center.php">城鎮中心</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">25秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff;">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">50</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff;">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">25</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">3(近戰)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <td class="unit4">對石造防禦建築+6
                <p>對建築+3</p>
              </td>
            </tr>
            <tr>
              <td class="unit3">攻擊速度</td>
              <td class="unit4">2.03</td>
            </tr>
            <tr>
              <td class="unit3">射程</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">0.8</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">4</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"></div>
      </div>
    </div>
    <!-- /container -->
    <?php include( "allunit.php"); ?>
    <?php include( "foot.php"); ?>
  </body>

</html>