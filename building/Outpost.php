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
          <h1>哨站</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>哨站是屬於世紀帝國II中的箭塔。不過不像箭塔能攻擊敵人，它主要的目的是警告玩家敵人的來襲動向。</p>
          </div>
          <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>哨站對於在遊戲初期堅看重要區域的安全性是非常有用的。他們也常用來監視重要的資源區域，以敵方偷偷擴張領地。 隨著遊戲的進展，他們變得不太常見，因為輕騎兵能更好的取代它們的工作。
                此外，他們需要花費石頭，那還不如花在城堡，城牆和箭塔上更有價值。通常玩家會使用房屋和採集點(伐木場或採礦營地，木牆也可)來代替哨站探索地圖跟擴張視野。</li>
              <li>完全升級的哨站有20的視野範圍。只有箭塔和城堡有超越它們的視野範圍。</li>
            </ul>
          </div>
          <h3>更多數據</h3>
          <div class="hrn1"></div>
          <div class="n1"></div>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tta1" colspan="2" style="text-align: center;">
                <div class="unititle">劣勢與優勢</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">強勢(容易對抗)</td>
              <td class="tta4">無</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">全部單位。</td>
            </tr>
            <tr>
              <td class="tta1" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:20%">生命值</td>
              <td class="tta4">
                <img class="gg" src="img/Masonry.jpg" width="30" alt=""><a href="Masonry.php">磚瓦技術</a>(+10%)
                <br>
                <img class="gg" src="img/Architecture.jpg" width="30" alt=""><a href="Architecture.php">建築學</a>(+10%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:20%">護甲</td>
              <td class="tta4">
                <img class="gg" src="img/Masonry.jpg" width="30" alt=""><a href="Masonry.php">磚瓦技術</a>(護甲+1/+1，+3建築護甲)
                <br>
                <img class="gg" src="img/Architecture.jpg" width="30" alt=""><a href="Architecture.php">建築學</a>(護甲+1/+1，+3建築護甲)</td>
            </tr>
            <tr>
              <td class="tta1">視野</td>
              <td class="tta4">
                <img class="gg" src="img/Townwatch.jpg" width="30" alt=""><a href="Town_Watch.php">城鎮瞭望</a>(+4)
                <br>
                <img class="gg" src="img/Townpatrol.jpg" width="30" alt=""><a href="Town_Patrol.php">城鎮巡邏</a>(+4)</td>
            </tr>
            <tr>
              <td class="tta1">招降抵抗</td>
              <td class="tta4">
                <img class="gg" src="img/Faith.jpg" width="30" alt=""><a href="Faith.php">忠誠信仰</a>
                <br>
                <img class="gg" src="img/Heresy.png" width="30" alt=""><a href="Heresy.php">異端邪說</a> 
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">建造速率</td>
              <td class="tta4">
                <img class="gg" src="img/Treadmillcrane.jpg" width="30" alt=""><a href="Treadmill_Crane.php">踏輪起重機</a>(+20%建造效率)</td>
            </tr>
          </table>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Burmese.php">緬甸</a>：研發<a href="Faith.php">忠誠信仰</a>的花費便宜50%。</li>
              <li><a href="Byzantines.php">拜占庭</a>：哨站在黑暗/封建/城堡/帝王時代增加10%/20%/30%/40% HP</li>
              <li><a href="Chinese.php">中國</a>：對哨站有利的科技在封建/城堡/帝王時代各便宜10%/15%/20%。</li>
              <li><a href="Incas.php">印加</a>：哨站石頭花費-15%。</li>
              <li><a href="Koreans.php">韓國</a>：哨站建造速度快33%。</li>
              <li><a href="Malians.php">馬利</a>：哨站木頭花費-15%。</li>
              <li><a href="Persians.php">波斯</a>：城鎮瞭望和城鎮巡邏在封建/城堡/帝王時代研發快10%/15%/20%。</li>
              <li><a href="Spanish.php">西班牙</a>：哨站建造速度快30%。</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Ethiopians.php">衣索比亞</a>：哨站+3視野。</li>
              <li><a href="Malians.php">馬利</a>：同盟學院研究<a href="Masonry.php">磚瓦技術</a>、<a href="Architecture.php">建築學</a>和
                <a
                href="Treadmill_Crane.php">踏輪起重機</a>的速度快80%。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><a href="aok.php">帝王世紀</a></em></h3> 
            <ul>
              <li>哨站花費25木材和25石頭。</li>
            </ul>
            <h3><em><a href="aoc.php">征服者入侵</a></em></h3> 
            <ul>
              <li>哨站花費25木材和10石頭。</li>
              <li>引入<a href="Heresy.php">異端邪說</a>。</li>
            </ul>
            <h3><em><a href="aof.php">失落的帝國</a></em></h3>
            <ul>
              <li>哨站花費25木材和5石頭。</li>
              <li><a href="Koreans.php">韓國</a>:哨站建造速度快33%</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>公元500年世界上的人口比今天的世界還少得多，而且有很多空曠和荒涼的土地。為了密切關注邊界，地方領主建立了哨站，可以提前預警攻擊並回報定居者和貿易馬車的移動情況。
              隨著土地人口變得越來越稠密，哨站逐漸被邊界上的城堡和城鎮所取代。。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle"><a href="">哨站</a>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="img/Outposticon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">概要</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4">箭塔</td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">所有文明</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4"><a href="Dark_Age.php">黑暗時代</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">使用</td>
              <td class="unit4">獲得附近視野</td>
            </tr>
            <tr>
              <td class="unit3">建築時間</td>
              <td class="unit4">15秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">成本</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木材</td>
              <td class="unit4">25</td>
            </tr>
            <tr>
              <td class="unit3">石材</td>
              <td class="unit4">5</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">數據</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">尺寸</td>
              <td class="unit4">1x1</td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">500</td>
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
              <td class="unit3">防禦類型</td>
              <td class="unit4"><a href="img/Armor_class_building.php">建築</a>
                <br> <a href="img/Armor_class_standard_building.php">標準建築</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">
                <img src="img/Dark-age-logo-small.jpg" width="22" alt="">6
                <br>
                <img src="img/Feudal-age-reseach.jpg" width="22" alt="">8
                <br>
                <img src="img/Castle-age-reseach.jpg" width="22" alt="">10
                <br>
                <img src="img/Imperial-age-research.jpg" width="22" alt="">12</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
           <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4"> <a href="img/Outpostlosdarkage.png"><img class="imgn" class="hg" width="180" src="img/Outpostlosdarkage.png" alt=""></a> 
              <div
              class="lightbox-caption" style="width:220px" ;>
                <p><em>黑暗時代哨站的視野範圍。</em>
                </p>
            </div>
          </div>
          <div class="col-md-4"> <a href="img/Outpostlosfu.png"><img class="imgn" class="hg" width="180" src="img/Outpostlosfu.png" alt=""></a> 
            <div
            class="lightbox-caption" style="width:220px" ;>
              <p><em>帝王時代哨站的視野範圍(有研發<a href="Town_Patrol.php">城鎮巡邏</a>)。</em>
              </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
    </div>
    <!-- /container -->
    <?php include( "allbuilding.php"); ?>
    <?php include( "foot.php"); ?>
  </body>

</html>