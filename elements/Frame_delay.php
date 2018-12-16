<!DOCTYPE html>
<html lang="zh-tw">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Aoetw</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
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
          <h1>開火間隔</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-12">
          <div class="spw"><em><img src="img/Archersoftheeyesicon.png" width="50px;" alt="" style="margin-right:20px;">注意~不要與<a href="Rate_of_Fire.php">射速</a>搞混了。</em>
          </div>
          <div class="n1">
            <div class="col-md-8">
              <p>開火間隔是遊戲內的一個隱藏數據，他決定了遠距離單位攻擊新的目標之前，所需要的準備時間，與射速相同，數值越低，單位在攻擊新目標的首射越快。</p>
              <p>與射速不同的是，開火間隔僅適用於第一次攻擊目標的那一發，只要射第二發就是第二次射擊的開始。</p>
              <p>大多數的近戰單位開火間隔都是0，這表示他們可以立刻攻擊新的目標。然後，遠程單位（通常是馬弓騎兵）通常都會有開火間隔，這是為了防止遠程單位使用拉打戰術，讓近戰單位可以有效的對付遠程單位。</p>
              <p>開火間隔遊戲中不顯示，並且不能在遊戲中以任何方式升級。</p>
            </div>
            <div class="col-md-4">
              <div class="col-md-12" style="text-align: center;">
                <img src="img/Cav_archer_frame_delay.png" alt="">
              </div>
              <div class="col-md-12" style="margin-top: 5px;">當馬弓騎兵實施拉打的時候，他必須轉身並有一個準備動作，就是開火間隔。</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /container -->
    <?php include( "allen.php"); ?>
    <?php include( "foot.php"); ?>
  </body>

</html>