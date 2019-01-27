<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row" style=" margin-top: 50px;">
      <div class="col-md-12">
        <h1 id="UP">食物</h1>

        <div class="hrn1"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>
            食物是玩家必須收集的重要資源之一，玩家必須不斷收集食物，用於創建單位、研究技術、時代進階…等。
          </p>
          <p>透過下列方法可採集食物：</p>
          <ul>
            <li><a href="#A">狩獵</a></li>
            <li><a href="#B">採集漿果叢</a></li>
            <li><a href="#C"> 建立農田</a></li>
            <li><a href="#D">捕魚</a></li>
            <li><a href="#E">設置漁網</a></li>
          </ul>
        </div>

        <h3>世紀帝國2中，有4種與食物採集（或交易）相關的建築</h3>
        <div class="col-md-12" style="">
          狩獵、<a href="Farm.php">農田</a>收集：<a href="Town_Center.php"
            >城鎮中心</a
          >、<a href="Mill.php">磨坊</a
          >（沿海魚群若是由村民採集，也是於城鎮中心或磨坊儲存資源）
        </div>
        <div class="col-md-12" style="">
          魚類收集：<a href="Dock.php">碼頭</a>
        </div>
        <div class="col-md-12" style="">
          資源買賣：<a href="Market.php">市集</a>
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
          <table class="table-bordered" border="1" width="100%">
            <tr>
              <td
                style="border: 1px solid #495057;background: #005f16;color: #ffffff;"
                height="40"
                colspan="7"
                align="center"
                valign="middle"
                class="unit"
              >
                <center>
                  <div id="A"><strong>狩獵</strong></div>
                </center>
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="3%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/sheep.png" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
                border="#495057;"
              >
                <strong>綿羊（Sheep）</strong>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="20%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >玩家經過即可收編操控，可移動至<a href="Town_Center.php"
                    >城鎮中心</a
                  >或<a href="Mill.php">磨坊</a
                  >旁以便村民採集資源。遊戲早期階段可用來偵察，缺點是移動緩慢及被敵人偷走的可能性。</span
                >
              </td>
              <td style="border: 1px solid #495057;" width="3%" rowspan="4">
                <div class="unititle">
                  <center>
                    <img src="img/goat.png" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td style="border: 1px solid #495057;" width="15%">
                <strong>山羊（Goat）</strong>
              </td>
              <td style="border: 1px solid #495057;" width="20%" rowspan="4">
                <span class="unititle"
                  >玩家經過即可收編操控，遊戲早期階段可用來偵察，缺點是移動緩慢及被敵人偷走的可能性。該動物於<a
                    href="ak.php"
                    >非洲王朝</a
                  >版本中新增，主要出沒在非洲地圖。</span
                >
              </td>
            </tr>

            <tr>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                生命：7
              </td>
              <td style="border: 1px solid #495057;" width="15%">生命：7</td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                最大收穫量：100食物
              </td>
              <td style="border: 1px solid #495057;" width="15%">
                最大收穫量：100食物
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                建議獵人數量：4~6位村民
              </td>
              <td style="border: 1px solid #495057;" width="15%">
                建議獵人數量：4~6位村民
              </td>
            </tr>

            <tr>
              <td style="border: 1px solid #495057;" width="3%" rowspan="4">
                <div class="unititle">
                  <center>
                    <img src="img/Turkey.jpg" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td style="border: 1px solid #495057;" width="15%">
                <strong>火雞（Turkey）</strong>
              </td>
              <td style="border: 1px solid #495057;" width="20%" rowspan="4">
                <span class="unititle"
                  >玩家經過即可收編操控，可移動至<a href="Town_Center.php"
                    >城鎮中心</a
                  >或<a href="Mill.php">磨坊</a>旁以便村民採集資源。該動物於<a
                    href="aoc.php"
                    >征服者入侵</a
                  >版本中新增。</span
                >
              </td>
              <td
                style="border: 1px solid #495057;"
                width="3%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/Llama.png" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                <strong>羊駝（Llama）</strong>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="20%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >玩家經過即可收編操控，主要出沒在美洲地圖和叢林隨機地圖。印加文明於遊戲開始時會擁有一隻羊駝，視野比一般綿羊大。</span
                >
              </td>
            </tr>

            <tr>
              <td style="border: 1px solid #495057;">生命：7</td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                生命：7
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" width="15%">
                最大收穫量：100食物
              </td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                最大收穫量：100食物
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" width="15%">
                建議獵人數量：4~6位村民
              </td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                建議獵人數量：4~6位村民
              </td>
            </tr>

            <tr>
              <td
                style="border: 1px solid #495057;"
                width="3%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/cow.png" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                <strong>牛（Cow）</strong>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="20%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >玩家經過即可收編操控，移動速度只有0.65（其他可收編動物為0.7）。該動物於<a
                    href="aof.php"
                    >失落的帝國</a
                  >版本中新增。</span
                >
              </td>
              <td style="border: 1px solid #495057;" width="3%" rowspan="4">
                <div class="unititle">
                  <center>
                    <img
                      src="img/Water_Buffalo.png"
                      alt=""
                      width="45"
                      height="45"
                    />
                  </center>
                </div>
              </td>
              <td style="border: 1px solid #495057;" width="15%">
                <strong>水牛（Water Buffalo）</strong>
              </td>
              <td style="border: 1px solid #495057;" width="20%" rowspan="4">
                <span class="unititle"
                  >玩家經過即可收編操控，主要出沒在東南亞地圖。該動物於<a
                    href="aor.php"
                    >王者崛起</a
                  >版本中新增。</span
                >
              </td>
            </tr>

            <tr>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                生命：14
              </td>
              <td style="border: 1px solid #495057;" width="15%">生命：7</td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                最大收穫量：150食物
              </td>
              <td style="border: 1px solid #495057;" width="15%">
                最大收穫量：150食物
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                建議獵人數量：4~6位村民
              </td>
              <td style="border: 1px solid #495057;" width="15%">
                建議獵人數量：4~6位村民
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" width="3%" rowspan="4">
                <div class="unititle">
                  <center>
                    <img src="img/deer.jpg" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td style="border: 1px solid #495057;" width="15%">
                <strong>鹿（Deer）</strong>
              </td>
              <td style="border: 1px solid #495057;" width="20%" rowspan="4">
                <span class="unititle"
                  >可使用斥侯將鹿趕至<a href="Town_Center.php">城鎮中心</a
                  >或磨坊旁，村民攻擊2次即可殺死，建議兩位村民同時打獵，以避免鹿反向逃跑。</span
                >
              </td>
              <td
                style="border: 1px solid #495057;"
                width="3%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/ostrich.png" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                <strong>鴕鳥（Ostrich）</strong>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="20%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >村民攻擊2次可殺死，建議兩位村民同時打獵，該動物於<a
                    href="ak.php"
                    >非洲王朝</a
                  >版本中新增，主要出沒在非洲地圖。</span
                >
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;">生命：5</td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                生命：5
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" width="15%">
                最大收穫量：140食物
              </td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                最大收穫量：140食物
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" width="15%">
                建議獵人數量：2~4位村民
              </td>
              <td
                style="border: 1px solid #495057;"
                width="15%"
                bgcolor="#E0E0E0"
              >
                建議獵人數量：2~4位村民
              </td>
            </tr>

            <tr>
              <td
                style="border: 1px solid #495057;"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/zebra.png" alt="" width="46" height="45" />
                  </center>
                </div>
              </td>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                <strong>斑馬（Zebra</strong>）
              </td>
              <td
                style="border: 1px solid #495057;"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >村民攻擊2次可殺死，建議兩位村民同時打獵，該動物於<a
                    href="ak.php"
                    >非洲王朝</a
                  >版本中新增，主要出沒在非洲地圖。</span
                >
              </td>
              <td style="border: 1px solid #495057;" rowspan="4">
                <div class="unititle">
                  <center>
                    <img
                      src="img/wild_boar.jpg"
                      alt=""
                      width="45"
                      height="45"
                    />
                  </center>
                </div>
              </td>
              <td style="border: 1px solid #495057;">
                <strong>野豬（Wild Boar或Javelina）</strong>
              </td>
              <td style="border: 1px solid #495057;" rowspan="4">
                <span class="unititle"
                  >受攻擊後會反擊，須由多位村民合力殺死。建議可先使用一位村民（或斥侯）引誘回<a
                    href="Town_Center.php"
                    >城鎮中心</a
                  >或<a href="Mill.php">磨坊</a
                  >，再使用多位村民合力擊殺採食。</span
                >
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                生命：5
              </td>
              <td style="border: 1px solid #495057;">生命：75</td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                最大收穫量：140食物
              </td>
              <td style="border: 1px solid #495057;">最大收穫量：340食物</td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                建議獵人數量：2~4位村民
              </td>
              <td style="border: 1px solid #495057;">
                建議獵人數量：5~10位村民
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;" rowspan="4">
                <div class="unititle">
                  <center>
                    <img src="img/Elephant.png" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td style="border: 1px solid #495057;">
                <strong>大象（Elephant）</strong>
              </td>
              <td style="border: 1px solid #495057;" rowspan="4">
                <span class="unititle"
                  >受攻擊後會反擊，須由多位村民合力殺死。它比野豬提供更多的食物，該動物於<a
                    href="ak.php"
                    >非洲王朝</a
                  >版本中新增，主要出沒在非洲或印度的地圖。</span
                >
              </td>
              <td
                style="border: 1px solid #495057;"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/rhino.png" alt="" width="45" height="45" />
                  </center>
                </div>
              </td>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                <strong>犀牛（Rhino）</strong>
              </td>
              <td
                style="border: 1px solid #495057;"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >受攻擊後會反擊，須由多位村民合力殺死。該動物於<a
                    href="aor.php"
                    >王者崛起</a
                  >版本中新增，主要出沒在東南亞地圖。</span
                >
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;">生命：75</td>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                生命：75
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;">最大收穫量：400食物</td>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                最大收穫量：400食物
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;">
                建議獵人數量：5~10位村民
              </td>
              <td style="border: 1px solid #495057;" bgcolor="#E0E0E0">
                建議獵人數量：5~10位村民
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <a href="#UP"><p align="right">（UP）</p></a>
              </td>
            </tr>
          </table>

          <br />
          <table class="table-bordered" border="1" width="100%">
            <tr>
              <td
                style="border: 1px solid #495057;background: #005f16;color: #ffffff;"
                height="40"
                colspan="7"
                align="center"
                valign="middle"
                class="unit"
              >
                <center>
                  <div id="B"><strong>採集漿果叢</strong></div>
                </center>
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="3%"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/Berry_Bush.png" width="220" alt="" />
                  </center>
                </div>
              </td>
              <td
                width="25%"
                valign="middle"
                bgcolor="#E0E0E0"
                style="border: 1px solid #495057;"
              >
                <strong>漿果灌木叢（Berry Bush）</strong><br />
                最大收穫量：125食物
              </td>
              <td
                style="border: 1px solid #495057;"
                colspan="4"
                bgcolor="#E0E0E0"
              >
                <p class="unititle">
                  一般在<a href="Town_Center.php">城鎮中心</a
                  >附近可以找到。在大多數地圖中，地圖會有數個漿果灌木叢。<br />
                  因採集上速度較慢，剛開始會建議先狩獵動物獲取食物。
                </p>
              </td>
            </tr>
            <tr>
              <td style="border: 1px solid #495057;">
                <div class="unititle">
                  <center>
                    <img src="img/Fruit_Bushes.png" width="220" alt="" />
                  </center>
                </div>
              </td>
              <td
                width="25%"
                valign="middle"
                style="border: 1px solid #495057;"
              >
                <strong>水果灌木叢（Fruit Bushes）<br /> </strong
                >最大收穫量：125食物
              </td>
              <td style="border: 1px solid #495057;" colspan="4">
                <span class="unititle"></span>在<a href="ak.php">非洲王朝</a
                >版本中，新增了水果灌木叢。
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                height="66"
                colspan="6"
                bgcolor="#E0E0E0"
              >
                <ul>
                  文明加成：
                  <li><a href="Aztecs.php">阿茲特克</a>：採集者可攜帶+5食物</li>
                  <li>
                    <a href="Franks.php">法蘭克</a
                    >：採集者的工作速度提高了25%（失落的帝國版本中）
                  </li>
                  <li>
                    <a href="Mayans.php">瑪雅</a
                    >：自然資源存量+15%（征服者入侵版本中+20%）
                  </li>
                </ul>
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <a href="#UP"><p align="right">（UP）</p></a>
              </td>
            </tr>
          </table>

          <br />
          <table class="table-bordered" border="1" width="100%">
            <tr>
              <td
                style="border: 1px solid #495057;background: #005f16;color: #ffffff;"
                height="40"
                colspan="7"
                align="center"
                valign="middle"
                class="unit"
              >
                <center>
                  <div id="C"><strong>建立農田</strong></div>
                </center>
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="3%"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/farmland.png" width="220" alt="" />
                  </center>
                </div>
              </td>
              <td
                width="25%"
                valign="middle"
                bgcolor="#E0E0E0"
                style="border: 1px solid #495057;"
              >
                <strong>農田</strong
                ><strong>（Farmland）<br /> </strong>建置消耗：60木頭<br />
                最初收穫量：175食物
              </td>
              <td
                style="border: 1px solid #495057;"
                colspan="4"
                bgcolor="#E0E0E0"
              >
                <p class="unititle">
                  <br />
                  <a href="Farm.php">農田</a
                  >可以提供穩定的食物，放置位置由玩家決定，所以易於收集且安全。<br />
                  建造後所擁有的食物是固定的，但通過<a href="Mill.php">磨坊</a
                  >研發技術，可以增加農田食物產量。<br />
                </p>
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <a href="#UP"><p align="right">（UP）</p></a>
              </td>
            </tr>
          </table>

          <br />
          <table class="table-bordered" border="1" width="100%">
            <tr>
              <td
                style="border: 1px solid #495057;background: #005f16;color: #ffffff;"
                height="40"
                colspan="7"
                align="center"
                valign="middle"
                class="unit"
              >
                <center>
                  <div id="D"><strong>捕魚</strong></div>
                </center>
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="3%"
                rowspan="2"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/Dock_work.png" width="220" alt="" />
                  </center>
                </div>
              </td>
              <td
                style="border: 1px solid #495057;"
                width="25%"
                bgcolor="#E0E0E0"
              >
                <strong>沿海魚群<br /> </strong>漁獲量：200食物
              </td>
              <td
                style="border: 1px solid #495057;"
                colspan="4"
                rowspan="2"
                bgcolor="#E0E0E0"
              >
                <p class="unititle">
                  <br />
                  村民可以在沿岸捕魚（資源僅能收進城鎮中心及磨坊，無法收進碼頭），<a
                    href="Dock.php"
                    >碼頭</a
                  >所生產之<a href="Fishing_Ship.php">漁船</a
                  >可以在海上捕魚。<br />
                  黑暗時代即可建造<a href="Dock.php">碼頭</a
                  >生產漁船，消耗75木材。<br />
                  在<a href="aof.php">失落的帝國</a>版本中，新增了<a
                    href="Gillnets.php"
                    >流刺網</a
                  >技術，研發後漁船的工作速度提高25%。
                </p>
                <p class="unititle">
                  通常情況下，有捕魚相關優勢加成或缺乏農田輪作的文明，才優先考慮利用漁船進行食物收集。
                </p>
              </td>
            </tr>
            <tr>
              <td
                width="25%"
                bgcolor="#E0E0E0"
                style="border: 1px solid #495057;"
              >
                <strong>非沿海魚群<br /> </strong>漁獲量：225~350食物
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                colspan="6"
                bgcolor="#E0E0E0"
              >
                <ul>
                  <p class="unititle">
                    <br />
                    捕魚方面優勢文明：
                  </p>
                  <li>
                    <a href="Italians.php">義大利</a
                    >：建造漁船僅需64木頭（比其他文明少11木頭）
                  </li>
                  <li>
                    <a href="Indians.php">印度</a
                    >：村民捕魚工作效率+15%、漁獲攜帶量+15
                  </li>
                  <li>
                    <a href="Japanese.php">日本</a
                    >：漁船生命值+100%（遠程裝甲+2），工作速度於黑暗時代+5%、封建時代+10%、城堡時代+15%、帝王時代+20%（互不疊加）
                  </li>
                  <li>
                    <a href="Malay.php">馬來</a
                    >：團隊加分--碼頭視野+100%、漁網成本便宜33%、漁網食物量無限
                  </li>
                </ul>
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <a href="#UP"><p align="right">（UP）</p></a>
              </td>
            </tr>
          </table>

          <br />
          <table class="table-bordered" border="1" width="100%">
            <tr>
              <td
                style="border: 1px solid #495057;background: #005f16;color: #ffffff;"
                height="40"
                colspan="7"
                align="center"
                valign="middle"
                class="unit"
              >
                <center>
                  <div id="E"><strong>設置漁網</strong></div>
                </center>
              </td>
            </tr>
            <tr>
              <td
                style="border: 1px solid #495057;"
                width="3%"
                bgcolor="#E0E0E0"
              >
                <div class="unititle">
                  <center>
                    <img src="img/Fish_Traps_work.png" width="220" alt="" />
                  </center>
                </div>
              </td>
              <td
                width="25%"
                bgcolor="#E0E0E0"
                style="border: 1px solid #495057;"
              >
                <p><strong>漁網（Fish Traps）</strong></p>
                <p>建置消耗：100木頭</p>
                最初收穫量：715食物
              </td>
              <td
                style="border: 1px solid #495057;"
                colspan="4"
                bgcolor="#E0E0E0"
              >
                <p class="unititle">
                  <br />
                  一旦海洋魚類食物耗盡，玩家必須建造一個新的魚類陷阱--<a
                    href="Fish_Trap.php"
                    >漁網</a
                  >，以獲取食物。<br />
                  在<a href="aof.php">失落的帝國</a>版本中，新增了<a
                    href="Gillnets.php"
                    >流刺網</a
                  >技術，研發後漁船的工作速度提高25%。
                </p>
                <ul>
                  <p class="unititle">文明加成：</p>
                  <li>
                    <a href="Japanese.php">日本</a>：更高的<a
                      href="Fishing_Ship.php"
                      >漁船</a
                    >工作速度，使得日本的漁網遠比農田更有效率。
                  </li>
                  <li>
                    <a href="Malay.php">馬來</a>：建置<a href="Fish_Trap.php"
                      >漁網</a
                    >只需消耗67木頭（僅比建立<a href="Farm.php">農田</a
                    >多7木頭），且提供無限的魚類食物，在遊戲後期中是非常不錯的食物來源。
                  </li>
                </ul>
              </td>
            </tr>
            <td colspan="6">
              <a href="#UP"><p align="right">（UP）</p></a>
            </td>
          </table>

          <br />
          <table width="100%" class="table-bordered">
            <tr>
              <td colspan="4" style="border: 1px solid #FFFFFF;">
                <p align="left">
                  部份圖片及遊戲資訊來源：<a
                    href="https://ageofempires.fandom.com/wiki/Food"
                    target="_blank"
                    >Aoe英文wiki</a
                  >
                </p>
              </td>
              <td width="2%" style="border: 1px solid #FFFFFF;">&nbsp;</td>
              <td width="42%" style="border: 1px solid #FFFFFF;">
                <p align="right">（此頁面由小蛇協助編輯）</p>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allre',
  components: {}
}
</script>
<style></style>
