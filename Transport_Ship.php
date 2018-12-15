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
           <h1>運輸船</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>運輸船可以在<a href="Dock.php">碼頭</a>中訓練。它可以運送任何單位，但也不能攻擊其他單位。運輸船使陸地單位可以在水面上移動，對於進行偷襲非常有效。
              <br>它血量偏低，但它擁有較高的遠程防禦。但如果它沉沒了，你所有的駐軍都會死亡。因此，最好用<a href="Galley.php">戰船</a>或者是
              <a
              href="Fire_Ship.php">火戰船</a>等軍用船隻來保護運輸工具。</p>
            <p>一開始運輸船的載運量只有5，研發<a href="Careening.php">傾側維修術</a>和<a href="Dry_Dock.php">旱碼頭</a>後會分別增加到10和20的載運量。
              <a
              href="Saracens.php">薩拉森</a>人則可以擁有額外的+5載運量(最多25)</p>
          </div>
           <h3>戰術</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>從<a href="Dark_Age.php">黑暗時代</a>開始，運輸船就可以在水上進行偷襲、偵查。也可以利用運輸船來欺騙敵人；玩家可以用幾個便宜的單位駐防在運輸船內，並讓對手來追擊他們。引開敵人的主力，趁機發動攻擊。</p>
            <p>運輸船在大型水域地圖中是不可或缺的，因為沒有其他方法可以讓陸上單位在島嶼間通行。</p>
            <p>如果裝有駐軍的運輸船被招降，其中的駐軍並不會被招降，玩家必須要摧毀運輸船才可以殺死敵方單位。另一個涉及運輸船的策略是利用這個戰術，把敵人的駐軍留在裡面，因為敵人無法使用，所以導致敵人會卡人口並無人可用。</p>
            <p>值得一提的是，搬有 <a href="Relic.php">遺跡</a>的 <a href="Monk.php">僧侶</a>要是在運輸船中，而船被摧毀時，遺跡則會回到原本僧侶上船的地方。</p>
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
              <td class="tta4">無。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">任何東西。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">工作速率</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="img/Gillnetsicon.jpg" alt=""><a href="Gillnets.php">流刺網</a>(+25%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">護甲</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="img/Careening.jpg" alt=""><a href="Careening.php">傾側維修術</a>(護甲+0/+1)
                <br>
                <img class="gg" src="img/CastleAgeUnique.png" style="margin: 2px;" alt=""><a href="Carrack.php">克拉克帆船</a>(護甲+1/+1，<a href="Portuguese.php">葡萄牙</a>限定)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="img/Drydock.jpg" alt=""><a href="Dry_Dock.php">旱碼頭</a>(+15%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">抗招降能力</td>
              <td class="tta4">
                <img class="gg" src="img/Faith.jpg" width="30" alt=""><a href="Faith.php">忠誠信仰</a>
                <br>
                <img class="gg" src="img/Heresy.png" width="30" alt=""><a href="Heresy.php">異端邪說</a> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">訓練速度</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="img/Shipwright.jpg" alt=""><a href="Shipwright.php">造船匠</a>(+54%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">造價減少</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="img/Shipwright.jpg" alt=""><a href="Shipwright.php">造船匠</a>(-20%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">運輸量</td>
              <td class="tta4">
                <img style="margin: 2px;" class="gg" src="img/Careening.jpg" alt=""><a href="Careening.php">傾側維修術</a>(+5)
                <br>
                <img style="margin: 2px;" class="gg" src="img/Drydock.jpg" alt=""><a href="Dry_Dock.php">旱碼頭</a>(+10)</td>
            </tr>
          </table>
          <h3>剋運輸船的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對運輸船的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+40攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/Bombardtowericon.png" alt=""><a href="Bombard_Tower.php">火炮塔</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/BombardCannonIcon.jpg" alt=""><a href="Bombard_Cannon.php">火砲</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+17攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/HalberdierIcon.jpg" alt=""><a href="Halberdier.php">戟兵</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+16攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/PikemanIcon.jpg" alt=""><a href="Pikeman.php">重裝長槍兵</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/GalleonAoE2.jpg" alt=""><a href="Galleon.php">重型弩炮戰船</a> 
                    </li>
                    <li>
                      <img src="img/LongboatIcon.jpg" alt=""><a href="Longboat.php">精銳維京大戰船</a>(<a href="Vikings.php">維京</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Keep.php">大型箭塔</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/SpearmanIcon.jpg" alt=""><a href="Spearman.php">長槍兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/HeavyCamelIcon.jpg" alt=""> <a href="Heavy_Camel.php">重裝駱駝騎兵</a>→
                      <img class="gg" src="img/ImperialCamelIcon.jpg"
                      alt=""> <a href="Imperial Camel.php">帝王駱駝騎兵</a>(後者<a href="Indians.php">印度</a>限定)</li>
                    <li>
                      <img class="gg" src="img/WarGalley.jpg" width="22" alt=""><a href="War_Galley.php">弩炮戰船</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/LongboatIcon.jpg" alt=""><a href="Longboat.php">維京大戰船</a>(<a href="Vikings.php">維京</a>限定)</li>
                    <li>
                      <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Guard_Tower.php">防禦箭塔</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/Dockicon.png" width="22" alt=""><a href="Dock.php">海港</a>(<a href="Malay.php">馬來</a>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/Galley.jpg" alt=""><a href="Galley.php">戰船</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/Ballistaelephanticon.png" alt=""><a href="Ballista_Elephant.php">弩炮象</a>→
                      <img class="gg" src="img/Ballistaelephanticon.png"
                      alt=""><a href="Ballista_Elephant.php">精銳弩炮象</a>(<a href="Khmer.php">高棉</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/CaravelIcon2.jpg" alt=""><a href="Caravel.php">精銳卡拉維爾戰船</a>(<a href="Portuguese.php">葡萄牙</a>限定)</li>
                    <li>
                      <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Watch_Tower.php">瞭望箭塔</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/CaravelIcon2.jpg" alt=""><a href="Caravel.php">卡拉維爾戰船</a>(<a href="Portuguese.php">葡萄牙</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/CamelIcon.jpg" alt=""><a href="Camel.php">駱駝騎兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/New_Genoese_Crossbowman.png" alt=""><a href="Genoese_Crossbowman.php">精銳熱那亞弩手</a>(<a href="Italians.php">義大利</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/New_Genoese_Crossbowman.png" alt=""><a href="Genoese_Crossbowman.php">熱那亞弩手</a>(<a href="Italians.php">義大利</a>限定)</li>
                    <li>
                      <img class="gg" src="img/FastFireShipIcon.jpg" alt=""><a href="Fast_Fire_Ship.php">快速火戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/FireGalleyIcon.jpg" alt=""><a href="Fire_Galley.php">火蒙衝</a>→
                      <img class="gg" src="img/FireShipIcon.jpg"
                      width="22" alt=""><a href="Fire_Ship.php">火戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+2攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/EliteEagleWarriorIcon.jpg" alt=""><a href="Elite_Eagle_Warrior.php">精銳鷹勇士</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+1攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/EagleWarriorIcon.jpg" alt=""><a href="Eagle_Warrior.php">鷹勇士</a> 
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>以下技術可讓以下單位對運輸船有額外攻擊力
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <img src="img/Heatedshot.png" width="22" alt=""><a href="Heated_Shot.php">預熱射擊</a> 
                <div style="margin:12px 0px;"><strong>+13攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Keep.php">大型箭塔</a> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Guard_Tower.php">防禦箭塔</a> 
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="img/Watchtowericon.png" alt=""><a href="Watch_Tower.php">瞭望箭塔</a> 
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong>
                </div>
                <ul>
                  <li>
                    <img class="gg" src="img/Castleicon.png" width="22" alt=""><a href="Castle.php">城堡</a> 
                  </li>
                  <li>
                    <img class="gg" src="img/Dockicon.png" width="22" alt=""><a href="Harbor.php">海港</a>(<a href="Malay.php">馬來</a>限定)</li>
                </ul>
              </div>
            </div>
          </div>
           <h3>文明加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Berbers.php">柏柏</a>：運輸船移動速度提高10％。</li>
              <li><a href="Byzantines.php">緬甸</a>：研究<a href="Faith.php">忠誠信仰</a>便宜50％。</li>
              <li><a href="Celts.php">賽爾特</a>：在視野內的動物不會被轉化</li>
              <li><a href="Chinese.php">中國</a>：有利於運輸船的科技在城堡/帝王 便宜 15/20％</li>
              <li><a href="Italians.php">義大利</a>：研究<a href="Careening.php">傾側維修術</a>，
                <a
                href="Dry Dock.php">旱碼頭</a>和<a href="Shipwright.php">造船匠</a>便宜50％。</li>
              <li><a href="Persians.php">波斯</a>：運輸船訓練的速度在封建/城堡/帝王提高10%/15%/20%，<a href="Careening.php">傾側維修術</a>的研究速度在城堡/帝王提高15%/20％。研究
                <a
                href="Dry Dock.php">旱碼頭</a>的時間快20％。</li>
              <li><a href="Portuguese.php">葡萄牙</a>：運輸船有+ 10％HP。</li>
              <li><a href="Saracens.php">薩拉森</a>：運輸船HP+100%和+5運輸量</li>
              <li><a href="Vikings.php">維京</a>：運輸船在黑暗/封建/城堡/帝王時代便宜10%/10%/15%/20%</li>
            </ul>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Teutons.php">條頓</a>：隊伍中的運輸船對招降的抵抗力更強。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><a href="aok.php">世紀帝國</a></em></h3>
            <ul>
              <li>運輸船在<a href="Feudal_Age.php">封建時代</a>就可以訓練。</li>
              <li><a href="Shipwright.php">造船匠</a>減少20%船隻木材成本。</li>
              <li><a href="Vikings.php">維京</a>:運輸船成本便宜20%。</li>
            </ul>
            <h3><em><a href="aoc.php">征服者入侵</a></em></h3>
            <ul>
              <li>1.0版本<a href="Shipwright.php">造船匠</a>還可減少35%的船隻訓練時間。</li>
              <li>引入<a href="Heresy.php">異端邪說</a>。</li>
            </ul>
            <h3><em><a href="aof.php">失落的帝國</a></em></h3>
            <ul>
              <li>運輸船在<a href="Dark_Age.php">黑暗時代</a>就可以訓練。</li>
              <li><a href="Vikings.php">維京</a>：運輸船在黑暗/封建/城堡/帝王時代便宜10%/10%/15%/20%</li>
            </ul>
            <h3><em><a href="ak.php">非洲王朝</a></em></h3>
            <ul>
              <li>運輸船現在可以裝載能被馴化的動物(<a href="Sheep.php">綿羊</a>、<a href="Turkey.php">火雞</a>、
                <a
                href="Llama.php">草尼馬</a>、<a href="Cow.php">乳牛</a>、<a href="Goat.php">山羊</a>和<a href="Water_Buffalo.php">水牛</a>)。</li>
            </ul>
          </div>
          <h3>歷史</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <div class="ien">
              <p>當軍隊要渡海時，所有類型的貿易船都會被徵用。這些船通常被改裝成運輸工具，以更好地運送部隊，馬匹，牲畜，攻城武器和物資。英格蘭在中世紀曾多次遭到侵略，其中包括早期的薩克森人/黃麻人入侵，挪威入侵（丹麥人暫時統治了英格蘭的大部分地區），以及後來西元1066的諾曼人入侵.諾曼人還入侵過西西里島和意大利南部。許多十字軍東征涉及從法國到聖地的海上運輸。百年戰爭期間，英國人也曾用運輸船多次帶兵進入法國。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">運輸船</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="img/TransportShipIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><a href="Naval_Vessels.php">船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">所有文明</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="img/Dark-age-logo-small.jpg" alt=""><a href="Dark_Age.php">黑暗時代</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" src="img/Dockicon.png" alt=""><a href="Dock.php">碼頭</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">46秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">成本/div></td>
            </tr>
            <tr>
              <td class="unit3">木</td>
              <td class="unit4">125</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">4</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">8</td>
            </tr>
            <tr>
              <td class="unit3">防禦類型</td>
              <td class="unit4"><a href="Armor_Class_Ship.php">船</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">1.45</td>
            </tr>
            <tr>
              <td class="unit3">駐軍</td>
              <td class="unit4">5</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">5</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由莊晉瑋協助編輯</div>
          </div>
          <div class="col-md-12">
            <h3>圖庫</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-4"> <a href="img/Transportship.png"><img class="imgn" class="hg" src="img/Transportship.png" alt=""></a> 
                  <p><em>一群運輸船。</em>
                  </p>
                </div>
                <div class="col-md-4"> <a href="img/TransportShipHD.png"><img class="imgn" class="hg" src="img/TransportShipHD.png" alt=""></a> 
                  <p><em>各種運輸船(世紀帝國和征服者入侵資料片)。</em>
                  </p>
                </div>
                <div class="col-md-4"> <a href="img/TransportShipDLC.png"><img class="imgn" class="hg" src="img/TransportShipDLC.png" alt=""></a> 
                  <p><em>各種運輸船(HD擴充資料片)。</em>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /container -->
        <?php include( "allunit.php"); ?>
        <?php include( "footn.php"); ?>
  </body>

</html>