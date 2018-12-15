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
          <h1>採礦營地</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>採礦營地的最佳建築地點是在石礦或金礦周遭，這樣村民就可以以最佳的效率將資源收集到營地，如果有三名以上的村民在收集資源，那會建議離資源區一格距離。</p>
            <p>在黑暗時代就可以建造採礦營地，但除非有特別的戰術，ex:黑快、裝甲塔、僧侶海、塔攻..之類，否則不建議在黑暗時代建造採礦營地，雖然採礦營地也是封建時代的建築之一同時也只需要100木；但比起
              <a
              href="Mill.php">磨坊</a>和<a href="Lumber_Camp.php">伐木場</a>，在前期有限的資源及人力下，採礦營地絕對不是首選。</p>
          </div>
          <h3>可訓練的單位與技術</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="n1">
                 <h4><a href="Feudal_Age.phpp"></a>封建時代</h4> 
                <ul>
                  <li>
                    <img class="gg" src="img/Goldmining.jpg" alt=""><a href="Gold Mining.php">採金技術</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Stonemining.jpg" alt=""><a href="Stone_Mining.php">採石技術</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="n1">
                 <h4><a href="Castle_Age.php"></a>城堡時代</h4> 
                <ul>
                  <li>
                    <img class="gg" src="img/Goldshaftmining.jpg" alt=""><a href="Gold_Shaft_Mining.php">礦井採金</a>
                  </li>
                  <li>
                    <img class="gg" src="img/Stone_Shaft_Mining.jpg" alt=""><a href="Stone_Shaft_Mining.phpp">礦井採石</a>
                  </li>
                </ul>
              </div>
            </div>
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
              <td class="tta4">無</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">全部。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
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
              <td class="tta1" style="width:10%">建造速度</td>
              <td class="tta4">
                <img class="gg" src="img/Treadmillcrane.jpg" width="30" alt=""><a href="Treadmill_Crane.php">踏輪起重機</a>(+20%建造效率)</td>
            </tr>
          </table>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Byzantines.php">拜占庭</a>：採礦營地在黑暗/封建/城堡/帝王時代多10%/20%/30%/40%的血量。
                <a
                href="Town_Watch.php">城鎮瞭望</a>免費</li>
              <li><a href="Chinese.php">中國</a>：對採礦營地有利的科技在封建/城堡/帝王時代各便宜10%/15%/20%。</li>
              <li><a href="Japanese.php">日本</a>：採礦營地的建築成本-50%。</li>
              <li><a href="Malians.php">馬利</a>：採礦營地的建築成本-15%。</li>
              <li><a href="Spanish.php">西班牙</a>：採礦營地建築速度快30%。</li>
            </ul>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Malians.php">馬利</a>：研究<a href="Masonry.php">磚瓦技術</a>，<a href="Architecture.php">建築學</a>和
                <a
                href="Treadmill_Crane.php">滑輪起重機</a>的速度快80％。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><a href="aok.php">帝王世紀</a></em></h3> 
            <ul>
              <li>採礦營地的生命值在每個時代都是900HP。</li>
            </ul>
            <h3><em><a href="aoc.php">征服者入侵</a></em></h3> 
            <ul>
              <li>引入<a href="Heresy.php">異端邪說</a>。</li>
            </ul>
            <h3><em><a href="aof.php">失落的帝國</a></em></h3>
            <ul>
              <li>採礦營地的HP在黑暗/封建/城堡/帝王的HP分別為600/800/1000/1000。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>中世紀的採礦十分興盛，特別是鐵，鹽，銅，錫，金，煤和銀的開採。火藥的發明大大增加了對硫磺和硝酸鹽的需求。到了公元500年，地表礦脈已經非常罕見，所以人們必須進入地下找尋新的來源。提高採礦效率和安全性促成許多重要技術的改進和發明。早期將礦車拉出礦坑的電車就是未來鐵路的前身。需要更強大的礦井泵來排出水並推動新鮮空氣後來成為了蒸汽機發明的契機。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle"><a href="Mining_Camp.php">採礦營地</a>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="img/Miningcampicon.png" width="45" alt="">
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
              <td class="unit4">經濟</td>
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
              <td class="unit3">建築時間</td>
              <td class="unit4">35秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">成本</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">數據</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">尺寸</td>
              <td class="unit4">2x2</td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">
                <img class="gg" src="img/Dark-age-logo-small.jpg" width="30" alt="">600
                <br>
                <img class="gg" src="img/Feudal-age-reseach.jpg" width="30" alt="">800
                <br>
                <img class="gg" src="img/Castle-age-reseach.jpg" width="30" alt="">1000
                <br>
                <img class="gg" src="img/Imperial-age-research.jpg" width="30" alt="">1000</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">
                <img class="gg" src="img/Dark-age-logo-small.jpg" width="30" alt="">0
                <br>
                <img class="gg" src="img/Feudal-age-reseach.jpg" width="30" alt="">1
                <br>
                <img class="gg" src="img/Castle-age-reseach.jpg" width="30" alt="">2
                <br>
                <img class="gg" src="img/Imperial-age-research.jpg" width="30" alt="">3</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">
                <img class="gg" src="img/Dark-age-logo-small.jpg" width="30" alt="">7
                <br>
                <img class="gg" src="img/Feudal-age-reseach.jpg" width="30" alt="">8
                <br>
                <img class="gg" src="img/Castle-age-reseach.jpg" width="30" alt="">9
                <br>
                <img class="gg" src="img/Imperial-age-research.jpg" width="30" alt="">10</td>
            </tr>
            <tr>
              <td class="unit3">護甲分類</td>
              <td class="unit4"><a href="img/Armor_class_building.php">建築</a>
                <br> <a href="img/Armor_class_standard_building.php">標準建築</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">6</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由小蝦和賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
           <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4"> <a href="img/Miningcampaokaoc.png"><img class="imgn" class="hg" width="180" src="img/Miningcampaokaoc.png" alt=""></a> 
              <div
              class="lightbox-caption" style="width:220px" ;>
                <p><em>所有文明的採礦營地(帝王世紀和征服者入侵資料片)。</em>
                </p>
            </div>
          </div>
          <div class="col-md-4"> <a href="img/Mining_camp_hd.png"><img class="imgn" class="hg" width="200" src="img/Mining_camp_hd.png" alt=""></a> 
            <div
            class="lightbox-caption" style="width:220px" ;>
              <p><em>所有文明的採礦營地(HD擴充資料片)。</em>
              </p>
          </div>
        </div>
        <div class="col-md-4"> <a href="img/Spritesheet_mining_camp.png"><img class="imgn" class="hg" width="200" src="img/Spritesheet_mining_camp.png" alt=""></a> 
          <div
          class="lightbox-caption" style="width:220px" ;>
            <p><em>各文明(依大陸分)的採礦營地和在一般地圖/下雪地圖的樣子。</em>
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
    <?php include( "footn.php"); ?>
  </body>

</html>