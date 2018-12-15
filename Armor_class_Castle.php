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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Custom styles for this template -->
    <style>
      body {      padding-top: 0px;      font-family: "微軟正黑體";      background-color: #f5f5f5;      font-size: 18px;    }
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
           <h1>城堡</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-12">
          <div class="spw"><em>這篇文章是將有關於城堡的裝甲。而關於城堡請參見<a href="Castle.php">城堡</a></em>

          </div>
        </div>
        <div class="col-md-12">
          <div class="n1">
            <p>城堡裝甲是一個防禦裝甲類別，所有在這個系列的建築都會被對該裝甲的有攻擊加成的兵種或科技有額外的傷害。</p>
          </div>
           <h3>城堡</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <img width="25px" src="img/Castleicon.png" alt=""><a href="Castle.php">城堡</a>

              </li>
            </ul>
          </div>
           <h3>剋城堡的單位與建築</h3> 
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對城堡的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div style="margin:12px 0px;"><strong>+100攻擊</strong>

              </div>
              <ul>
                <li>
                  <img class="gg" src="img/PetardIcon.jpg" alt=""><a href="Petard.php">爆炸桶</a>

                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+10攻擊</strong>

              </div>
              <ul>
                <li>
                  <img class="gg" src="img/TarkanIcon.jpg" alt=""><a href="Tarkan.php">韃靼騎兵</a>→
                  <img class="gg" src="img/TarkanIcon.jpg"
                  alt=""><a href="Tarkan.php">精銳韃靼騎兵</a>(<a href="Huns.php">匈奴</a>限定)</li>
              </ul>
            </div>
            <!-- /container -->
            <?php include( "alllarmor.php"); ?>
            <?php include( "footn.php"); ?>
            <!-- Bootstrap core JavaScript==================================================-
            ->            <!-- Placed at the end of the document so the pages load faster -->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>