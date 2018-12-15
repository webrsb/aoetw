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
          <h1>血量</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-12">
          <div class="n1">
            <p>血量(或簡稱HP)，是遊戲內相當重要的數據。</p>
          </div>
          <h3>概要</h3>
          <div class="hrn1"></div>
          <div class="n1">HP是衡量一個物體在被夷為平地之前可以承受多大程度的傷害。如果HP達到0，單位（建築物）立即死亡（崩潰）。各種裝甲保護免受一些損壞，從而延長單位或建築物的壽命。另外，還有很多技術可以提高各種單位和結構的HP。HP是衡量一個單位被消滅前可以承受多大的傷害，如果HP到達0，那麼單位會立即死亡，建築物立刻崩壞。而一些裝甲防禦可以保護血量不受那麼多的傷害，而延長單位或是建築物的壽命。另外還有很多科技可以提高各種單位的防禦或是HP。</div>
          <h3>恢復生命值</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><strong>治療:</strong>
              </li>僧侶可以治療受傷的單位，直到他們HP全滿，但通常治療的不快。
              <li><strong>再生:</strong>
              </li>駐守在建築物內的單位也可以自動恢復生命值，在城堡內的單位可以比其他建築物更快的恢復HP。研究草藥治療後會更快。
              <li><strong>修復:</strong>
              </li>建築物、攻城武器和船不能被僧侶治療，但可以通過村民的修復來回復HP。不過修復是需要耗費資源的，不過修復的價格只要初始的一半。如果一座建築受到嚴重的破壞，那們所有駐紮的單位將會被驅逐出去。但只要修好，便可以重新進入建築內。</ul>
          </div>
        </div>
      </div>
      <!-- /container -->
      <?php include( "allen.php"); ?>
      <?php include( "foot.php"); ?>
  </body>

</html>