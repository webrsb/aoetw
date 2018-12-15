<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>第一屆世紀帝國盜圖大賽</title>
  </head>
  <body>
    
  <div class="container">
    <div class="d-flex justify-content-center">
      <h1>第一屆世紀帝國盜圖大賽</h1>
    </div>
    <div class="d-flex justify-content-center">
      <div class="card" style="width: 70%;">
        <img id="card_picurl" class="card-img-top" src="https://imgur.com/qT99Yl7.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 id="card_title" class="card-title font-weight-bold">今日開服 | 開局你要選哪根塔？</h5>
          <p id="card_text" class="card-text">刺激、快速、60秒一場 | 簡單又好玩的守塔遊戲。</p>
          <a id="card_play" href="#" class="btn btn-primary">開始玩</a>
        </div>
      </div>
    </div>
    <div class="input-group mb-3 mt-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon3">標題</span>
      </div>
      <input id="title" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
        value="今日開服 | 開局你要選哪根塔？">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon3">描述文字</span>
      </div>
      <input id="text" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
        value="刺激、快速、60秒一場 | 簡單又好玩的守塔遊戲。">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon3">圖片網址</span>
      </div>
      <input id="picurl" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
        value="https://imgur.com/qT99Yl7.jpg">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon3">圖片網址</span>
      </div>
      <input id="play" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
        value="開始玩">
    </div>
    <!-- <button onclick="add()" type="button" class="btn btn-primary">新增</button> -->
    <div class="mb-12">
      <h3>使用方法</h3>
      <ol>
        <li>使用<a href="https://imgur.com/">imgur</a>上傳你截好的圖，把網址丟進欄位3</li>
        <li>輸入你的1.標題與2.敘述文字</li>
        <li>完成後截圖寄給我(noob@aoetw.com)或是<a href="https://www.facebook.com/cheapAOE/">私訊粉絲團</a></li>
      </ol>
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
  $(function() {
    $("input").keyup(function() {
        $("#card_title").text($("#title").val());
        $("#card_text").text($("#text").val());
        $("#card_picurl").attr("src",$("#picurl").val());
        $("#card_play").text($("#play").val());
    });
  });
  function add() {
    $.post( "test_sqlite.php", { title: $("#title").val(), text: $("#text").val(), picurl: $("#picurl").val() })
        .done(function( data ) {
            console.log("Data Loaded: " + data);
        });
    console.log($("#title").val());
    console.log($("#text").val());
    console.log($("#picurl").val());
  }
  </script>
  </body>
</html>
