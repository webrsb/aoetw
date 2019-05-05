<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1 id="UP">食物</h1>
        <div class="hrn1"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>
            <b>食物</b
            >是玩家必須收集的重要資源之一，玩家必須不斷收集食物，用於創建單位、研究技術、時代進階…等。
          </p>
          <p>透過下列方法可採集食物：</p>
          <ul>
            <li><nuxt-link to="#A">狩獵</nuxt-link></li>
            <li><nuxt-link to="#B">採集漿果叢</nuxt-link></li>
            <li><nuxt-link to="#C"> 建立農田</nuxt-link></li>
            <li><nuxt-link to="#D">捕魚</nuxt-link></li>
            <li><nuxt-link to="#E">設置漁網</nuxt-link></li>
          </ul>
        </div>
        <h3>世紀帝國2中，有4種與食物採集（或交易）相關的建築</h3>
        <div class="col-md-12">
          狩獵、<nuxt-link to="/building/Farm">農田</nuxt-link>收集：<nuxt-link
            to="/building/Town_Center"
            >城鎮中心</nuxt-link
          >、<nuxt-link to="/building/Mill">磨坊</nuxt-link
          >（沿海魚群若是由<nuxt-link to="/units/Villager">村民</nuxt-link
          >採集，也是於<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
          >或<nuxt-link to="/building/Mill">磨坊</nuxt-link>儲存資源）
        </div>
        <div class="col-md-12">
          <nuxt-link to="/units/animal/fish">魚類</nuxt-link>收集：<nuxt-link
            to="/building/Dock"
            >碼頭</nuxt-link
          >
        </div>
        <div class="col-md-12">
          資源買賣：<nuxt-link to="/building/Market">市集</nuxt-link>
        </div>
      </div>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
          <table class="table-bordered" border="1">
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
                <strong
                  ><nuxt-link to="/units/animal/Sheep">綿羊</nuxt-link
                  >（Sheep）</strong
                >
              </td>
              <td
                style="border: 1px solid #495057;"
                width="20%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >玩家經過即可收編操控，可移動至<nuxt-link
                    to="/building/Town_Center"
                    >城鎮中心</nuxt-link
                  >或<nuxt-link to="/building/Mill">磨坊</nuxt-link
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
                <strong
                  ><nuxt-link to="/units/animal/Goat">山羊</nuxt-link
                  >（Goat）</strong
                >
              </td>
              <td style="border: 1px solid #495057;" width="20%" rowspan="4">
                <span class="unititle"
                  >玩家經過即可收編操控，遊戲早期階段可用來偵察，缺點是移動緩慢及被敵人偷走的可能性。該動物於<nuxt-link
                    to="/games/ak"
                    >非洲王國</nuxt-link
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
                <strong
                  ><nuxt-link to="/units/animal/Turkey">火雞</nuxt-link
                  >（Turkey）</strong
                >
              </td>
              <td style="border: 1px solid #495057;" width="20%" rowspan="4">
                <span class="unititle"
                  >玩家經過即可收編操控，可移動至<nuxt-link
                    to="/building/Town_Center"
                    >城鎮中心</nuxt-link
                  >或<nuxt-link to="/building/Mill">磨坊</nuxt-link
                  >旁以便村民採集資源。該動物於<nuxt-link to="/games/aoc"
                    >征服者入侵</nuxt-link
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
                  >玩家經過即可收編操控，主要出沒在美洲地圖和叢林隨機地圖。<nuxt-link
                    to="/civs/Incas"
                    >印加</nuxt-link
                  ><nuxt-link to="/civs">文明</nuxt-link
                  >於遊戲開始時會擁有一隻羊駝，<nuxt-link to="/los.php"
                    >視野</nuxt-link
                  >比一般綿羊大。</span
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
                  >玩家經過即可收編操控，移動速度只有0.65（其他可收編動物為0.7）。該動物於<nuxt-link
                    to="/games/aof"
                    >失落的帝國</nuxt-link
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
                <strong
                  ><nuxt-link to="/units/animal/Water_Buffalo">水牛</nuxt-link
                  >（Water Buffalo）</strong
                >
              </td>
              <td style="border: 1px solid #495057;" width="20%" rowspan="4">
                <span class="unititle"
                  >玩家經過即可收編操控，主要出沒在東南亞地圖。該動物於<nuxt-link
                    to="/games/aor"
                    >王者崛起</nuxt-link
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
                  >可使用<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                  >將鹿趕至<nuxt-link to="/building/Town_Center"
                    >城鎮中心</nuxt-link
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
                <strong
                  ><nuxt-link to="/units/animal/Ostrich">鴕鳥</nuxt-link
                  >（Ostrich）</strong
                >
              </td>
              <td
                style="border: 1px solid #495057;"
                width="20%"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >村民攻擊2次可殺死，建議兩位村民同時打獵，該動物於<nuxt-link
                    to="/games/ak"
                    >非洲王國</nuxt-link
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
                <strong
                  ><nuxt-link to="/units/animal/Zebra">斑馬</nuxt-link
                  >（Zebra</strong
                >）
              </td>
              <td
                style="border: 1px solid #495057;"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >村民攻擊2次可殺死，建議兩位村民同時打獵，該動物於<nuxt-link
                    to="/games/ak"
                    >非洲王國</nuxt-link
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
                <strong
                  ><nuxt-link to="/units/animal/Wild_Boar">野豬</nuxt-link
                  >（Wild Boar或Javelina）</strong
                >
              </td>
              <td style="border: 1px solid #495057;" rowspan="4">
                <span class="unititle"
                  >受攻擊後會反擊，須由多位村民合力殺死。建議可先使用一位村民（或斥候）引誘回<nuxt-link
                    to="/building/Town_Center"
                    >城鎮中心</nuxt-link
                  >或<nuxt-link to="/building/Mill">磨坊</nuxt-link
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
                  >受攻擊後會反擊，須由多位村民合力殺死。它比野豬提供更多的食物，該動物於<nuxt-link
                    to="/games/ak"
                    >非洲王國</nuxt-link
                  >版本中新增，主要出沒在非洲或<nuxt-link to="/civs/Indians"
                    >印度</nuxt-link
                  >的地圖。</span
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
                <strong
                  ><nuxt-link to="/units/animal/Rhinoceros">犀牛</nuxt-link
                  >（Rhino）</strong
                >
              </td>
              <td
                style="border: 1px solid #495057;"
                rowspan="4"
                bgcolor="#E0E0E0"
              >
                <span class="unititle"
                  >受攻擊後會反擊，須由多位村民合力殺死。該動物於<nuxt-link
                    to="/games/aor"
                    >王者崛起</nuxt-link
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
                <nuxt-link to="#UP"><p align="right">（UP）</p></nuxt-link>
              </td>
            </tr>
          </table>

          <br />
          <table class="table-bordered" border="1">
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
                  一般在<nuxt-link to="/building/Town_Center"
                    >城鎮中心</nuxt-link
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
                <span class="unititle"></span>在<nuxt-link to="/games/ak"
                  >非洲王國</nuxt-link
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
                  <li>
                    <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
                    >：採集者可攜帶+5食物
                  </li>
                  <li>
                    <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
                    >：採集者的工作速度提高了25%（<nuxt-link to="/games/aof"
                      >失落的帝國</nuxt-link
                    >版本中）
                  </li>
                  <li>
                    <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
                    >：自然資源存量+15%（<nuxt-link to="/games/aoc"
                      >征服者入侵</nuxt-link
                    >版本中+20%）
                  </li>
                </ul>
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <nuxt-link to="#UP"><p align="right">（UP）</p></nuxt-link>
              </td>
            </tr>
          </table>

          <br />
          <table class="table-bordered" border="1">
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
                  <div id="C">
                    <strong
                      >建立<nuxt-link to="/building/Farm"
                        >農田</nuxt-link
                      ></strong
                    >
                  </div>
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
                ><strong>（Farmland）<br /> </strong>建置消耗：60<nuxt-link
                  to="/resource/Wood"
                  >木頭</nuxt-link
                ><br />
                最初收穫量：175食物
              </td>
              <td
                style="border: 1px solid #495057;"
                colspan="4"
                bgcolor="#E0E0E0"
              >
                <p class="unititle">
                  <br />
                  <nuxt-link to="/building/Farm">農田</nuxt-link
                  >可以提供穩定的食物，放置位置由玩家決定，所以易於收集且安全。<br />
                  建造後所擁有的食物是固定的，但通過<nuxt-link
                    to="/building/Mill"
                    >磨坊</nuxt-link
                  >研發技術，可以增加農田食物產量。<br />
                </p>
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <nuxt-link to="#UP"><p align="right">（UP）</p></nuxt-link>
              </td>
            </tr>
          </table>

          <br />
          <table class="table-bordered" border="1">
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
                  村民可以在沿岸捕魚（資源僅能收進城鎮中心及磨坊，無法收進<nuxt-link
                    to="/building/Dock"
                    >碼頭</nuxt-link
                  >），<nuxt-link to="/building/Dock">碼頭</nuxt-link
                  >所生產之<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
                  >可以在海上捕魚。<br />
                  <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
                  >即可建造<nuxt-link to="/building/Dock">碼頭</nuxt-link
                  >生產<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
                  >，消耗75<nuxt-link to="/resource/Wood">木材</nuxt-link
                  >。<br />
                  在<nuxt-link to="/games/aof">失落的帝國</nuxt-link
                  >版本中，新增了<nuxt-link to="/techs/Gillnets"
                    >流刺網</nuxt-link
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
                    <nuxt-link to="/civs/Italians">義大利</nuxt-link
                    >：建造漁船僅需64木材（比其他文明少11木材）
                  </li>
                  <li>
                    <nuxt-link to="/civs/Indians">印度</nuxt-link
                    >：村民捕魚工作效率+15%、漁獲攜帶量+15
                  </li>
                  <li>
                    <nuxt-link to="/civs/Japanese">日本</nuxt-link
                    >：漁船<nuxt-link to="/elements/Hit_points"
                      >生命值</nuxt-link
                    >+100%（<nuxt-link to="/armor">遠程護甲</nuxt-link
                    >+2），工作速度於黑暗時代+5%、<nuxt-link
                      to="/techs/age/Feudal_Age"
                      >封建時代</nuxt-link
                    >+10%、<nuxt-link to="/techs/age/Castle_Age"
                      >城堡時代</nuxt-link
                    >+15%、<nuxt-link to="/techs/age/Imperial_Age"
                      >帝王時代</nuxt-link
                    >+20%（互不疊加）
                  </li>
                  <li>
                    <nuxt-link to="/civs/Malay">馬來</nuxt-link>：<nuxt-link
                      to="/elements/Team_Bonus"
                      >團隊加分</nuxt-link
                    >--碼頭視野+100%、<nuxt-link to="/building/Fish_Trap"
                      >漁網</nuxt-link
                    >成本便宜33%、漁網食物量無限
                  </li>
                </ul>
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <nuxt-link to="#UP"><p align="right">（UP）</p></nuxt-link>
              </td>
            </tr>
          </table>

          <br />
          <table class="table-bordered" border="1">
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
                <p>建置消耗：100木材</p>
                最初收穫量：715食物
              </td>
              <td
                style="border: 1px solid #495057;"
                colspan="4"
                bgcolor="#E0E0E0"
              >
                <p class="unititle">
                  <br />
                  一旦海洋魚類食物耗盡，玩家必須建造一個新的魚類陷阱--<nuxt-link
                    to="/building/Fish_Trap"
                    >漁網</nuxt-link
                  >，以獲取食物。<br />
                  在<nuxt-link to="/games/aof">失落的帝國</nuxt-link
                  >版本中，新增了<nuxt-link to="/techs/Gillnets"
                    >流刺網</nuxt-link
                  >技術，研發後漁船的工作速度提高25%。
                </p>
                <ul>
                  <p class="unititle">文明加成：</p>
                  <li>
                    <nuxt-link to="/civs/Japanese">日本</nuxt-link
                    >：更高的<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
                    >工作速度，使得<nuxt-link to="/civs/Japanese"
                      >日本</nuxt-link
                    >的漁網遠比農田更有效率。
                  </li>
                  <li>
                    <nuxt-link to="/civs/Malay">馬來</nuxt-link>：建置<nuxt-link
                      to="/building/Fish_Trap"
                      >漁網</nuxt-link
                    >只需消耗67木材（僅比建立<nuxt-link to="/building/Farm"
                      >農田</nuxt-link
                    >多7木材），且提供無限的魚類食物，在遊戲後期中是非常不錯的食物來源。
                  </li>
                </ul>
              </td>
            </tr>
            <td colspan="6">
              <nuxt-link to="#UP"><p align="right">（UP）</p></nuxt-link>
            </td>
          </table>

          <br />
          <table class="table-bordered">
            <tr>
              <td colspan="4" style="border: 1px solid #FFFFFF;">
                <p align="left">
                  部分圖片及遊戲資訊來源：<a
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
