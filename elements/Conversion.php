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
           <h1>招降</h1>

          <div class="hrn1"></div>
        </div>
        <div class="col-md-12">
          <div class="n1">招降可轉換對方單位的控制權，需要使用僧侶或傳教士，非常耗費控制力但效果強大。</div>
           <h3>概要</h3>

          <div class="hrn1"></div>
          <div class="n1">
            <p>招降敵方的單位需要信仰，招降成功後信仰就會歸零，並重新緩慢的回復，如果信仰不足是不能招降的。</p>
            <p>一般來說只有普通單位可以被招降，英雄、建築物與僧侶不能被招降，但一些文明可以透過研發<a href="Redemption.php">信仰救贖</a>或是
              <a
              href="Sanctity.php">聖潔虔誠</a>來改善。</p>
            <p>透過招降，可以獲得自己文明沒有的單位，例如南美文明可以有騎兵或火砲。招降也可以突破人口最大限制。</p>
            </p>
          </div>
           <h3>策略</h3>

          <div class="hrn1"></div>
          <div class="n1">
            <p>西班牙透過研發<a href="Inquisition.php">異端審判</a>可以更快的招降敵人，而條頓與他的朋友則是更難被招降。</p>
            <p>修道院有幾項科技可以提高招降的機會</p>
            <ul>
              <li>
                <img class="gg" src="img/Redemption.jpg" alt=""><a href="Redemption.php">信仰救贖</a>:僧侶可招降大部分建築物和攻城單位。</li>
              <li>
                <img class="gg" src="img/Atonement.jpg" alt=""><a href="Atonement.php">贖罪</a>:僧侶可招降對方的僧侶。</li>
              <li>
                <img class="gg" src="img/Fervor.jpg" alt=""><a href="Fervor.php">宗教狂熱</a>:僧侶移動速度+15%。</li>
              <li>
                <img class="gg" src="img/Illumination.jpg" alt=""><a href="Illumination.php">啟發教化</a>:僧侶招降成功後，恢復信仰的速度快50%。33秒後可再次招降對方(原為62秒)</li>
              <li>
                <img class="gg" src="img/Blockprinting.jpg" alt=""><a href="Block_Printing.php">雕版印刷術</a>:僧侶(傳教士)的招降範圍+3。</li>
              <li>
                <img class="gg" src="img/Theocracy.png" alt=""><a href="Theocracy.php">神權統治</a>:一群僧侶招降一個單位成功後，只有一位僧侶需要恢復信仰。</li>
            </ul>
          </div>
           <h3>招降原理</h3>

          <div class="hrn1"></div>
          <div class="n1">
            <p>僧侶在招降時有所謂的招降間隔（僧侶搖一下手等於一個間隔），稱為（CI），一個CI大概等於遊戲內的1秒。一旦僧侶開始招降時就是第一個CI的開始，而1～3的CI是沒有招降能力的，只能說是熱身，到了第4個CI之後，每一個CI僧侶有28％的機率招降成功，所以僧侶保證在第10個CI會成功招降。建築物則是從第15個CI開始，並保證在25CI時招降成功。</p>
            <ul>
              <li>換句話說僧侶需要4～10個CI來招降一個單位，需要15～25個CI來招降一棟建築物。</li>
              <li>西班牙的特殊科技<a href="Inquisition.php">異端審判</a>減少一個最小CI，也就是說第三下即有法力。</li>
            </ul>
             <h3>抗招降</h3>

            <div class="hrn1"></div>
            <div class="n1">
              <p>所有單位一開始是level 0，除了斥侯跟鷹勇士起始是level 8。建築物起始是level 3。從level 2開始，每個CI會有(28/n)%的機率招降成功，n是level值。單位不一定要到最大CI值才會被招降。從起始的最大CI開始，招降機率從0.28/n到10/n。level
                10以下的單位都能被招降，但有忠誠信仰的斥侯跟鷹勇被招降的機率很低。如果他們還跟條頓同盟，他們不只有很高的機率達到最大CI，而且在被招降前隨機存活1-2個CI。</p>單位
              <ul>
                <li>
                  <img class="gg" src="img/EagleScoutIcon.jpg" alt=""> <a href="Eagle_Scout.php">鷹斥侯→</a> 
                  <img class="gg" src="img/EagleWarriorIcon.jpg"
                  alt=""> <a href="Eagle_Warrior.php">鷹勇士→</a> 
                  <img class="gg" src="img/EliteEagleWarriorIcon.jpg"
                  alt=""> <a href="Elite_Eagle_Warrior.php">精銳鷹勇士</a>

                </li>
                <li>
                  <img class="gg" src="img/ScoutCavalryIcon.jpg" alt=""> <a href="Scout_Cavalry.php">斥侯→</a> 
                  <img class="gg" src="img/LightCavalryIcon.jpg"
                  alt=""> <a href="Light_Cavalry.php">輕騎兵→</a> 
                  <img class="gg" src="img/HussarIcon.jpg"
                  alt=""> <a href="Hussar.php">匈牙利輕騎兵</a>

                </li>
              </ul>科技
              <ul>
                <li>
                  <img class="gg" src="img/Faith.jpg" alt=""><a href="Faith.php">忠誠信仰</a>：增加2~4個CI，跟增加兩個level，也就是說需要6～10個CI才有法力。</li>
              </ul>團隊加分
              <ul>
                <li>條頓的同盟加分增加了1~2個CI，跟增加3個level。</li>
              </ul>
            </div>
            <table class="table table-bordered table-hover">
              <tr class="success">
                <th>動作次數</th>
                <th>遊戲秒數</th>
                <th>一僧招降成功率</th>
                <th>二僧同時招降成功率</th>
                <th>三僧同時招降成功率</th>
              </tr>
              <tr>
                <td>1</td>
                <td>1.40</td>
                <td>0%</td>
                <td>0%</td>
                <td>0%</td>
              </tr>
              <tr>
                <td>2</td>
                <td>2.62</td>
                <td>0%</td>
                <td>0%</td>
                <td>0%</td>
              </tr>
              <tr>
                <td>3</td>
                <td>3.84</td>
                <td>0%</td>
                <td>0%</td>
                <td>0%</td>
              </tr>
              <tr>
                <td>4</td>
                <td>5.06</td>
                <td>26.9%</td>
                <td>48.7%</td>
                <td>63.3%</td>
              </tr>
              <tr>
                <td>5</td>
                <td>6.28</td>
                <td>48.1%</td>
                <td>73.7%</td>
                <td>86.5%</td>
              </tr>
              <tr>
                <td>6</td>
                <td>7.50</td>
                <td>63.1%</td>
                <td>86.5%</td>
                <td>95.1%</td>
              </tr>
              <tr>
                <td>7</td>
                <td>8.72</td>
                <td>74.2%</td>
                <td>93.1%</td>
                <td>98.2%</td>
              </tr>
              <tr>
                <td>8</td>
                <td>9.94</td>
                <td>81.4%</td>
                <td>96.5%</td>
                <td>99.3%</td>
              </tr>
              <tr>
                <td>9</td>
                <td>11.16</td>
                <td>86.1%</td>
                <td>98.2%</td>
                <td>99.8%</td>
              </tr>
              <tr>
                <td>10</td>
                <td>12.38</td>
                <td>90.8%</td>
                <td>99.1%</td>
                <td>99.9%</td>
              </tr>
            </table>
          </div>
          <div class="thanks">此頁面由眠編輯，並感謝Ethan Lee協助</div>
        </div>
        <!-- /container -->
        <?php include( "allen.php"); ?>
        <?php include( "foot.php"); ?>
  </body>

</html>