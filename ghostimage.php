<!doctype html>
<html lang="zh-tw">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>第一屆世紀帝國盜圖大賽</title>
    <style type="text/css">
    h3{
      font-weight: bold;
    }
    </style>
  </head>
  <body>
    
  <div class="container">
    <div class="d-flex justify-content-center">
      <h1>第一屆世紀帝國盜圖P圖大賽</h1>
    </div>
    <div class="d-flex justify-content-center">
      <div class="card" style="width: 70%;">
        <img id="card_picurl" class="card-img-top" src="https://imgur.com/qT99Yl7.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 id="card_title" class="card-title font-weight-bold">今日開服 | 開局你要選哪根塔？</h5>
          <p id="card_text" class="card-text">刺激、快速、60秒一場 | 簡單又好玩的守塔遊戲。</p>
          <a href="#" class="btn btn-primary">開始玩</a>
        </div>
      </div>
    </div>
  <div class="mb-12">
<p><a href="ghostimageWr.php" style=" text-align: center; font-size: 50px; ">得獎名單</a></p>
  </div>

    <div class="mb-12">
      <h3>大賽規章</h3>
      <p>免洗手遊盜圖猖狂(如上圖，明明世紀帝國無關，卻硬要用世紀帝國的圖)，要盜一起盜，歡迎大家盜盜盜</p>
      <ol>
        <li>使用我們的<a href="test_game.php">貼心小工具</a>製作，或是你自己用小畫家還是photoshop製作P圖都可以</li>
        <li>格式可以參考上圖，或直接使用貼心小工具，基本上格式不限，跟世紀帝國有關即可</li>
        <li>寄給我(noob@aoetw.com)或是<a href="https://www.facebook.com/cheapAOE/">私訊粉絲團</a></li>
      </ol>
      <h3>獎品</h3>
      <p>獎品一律使用Line禮品發送</p>
      <p>得獎原則Cheap本人覺得有創意即可</p>
      <ul>
        <li>鐵野豬獎(一名):<a href="http://www.lifefun.com.tw/cured-meat/">楊家臘肉</a>一份(竺叡贊助)</li>
        <li>遊俠獎(兩名):肯德基套餐一份</li>
        <li>大三贊獎(三名):摩斯早餐一份</li>
        <li>宗教狂熱獎(五名):貼圖一份</li>
      </ul>
              <p>想冠名獎項，請<a href="https://www.facebook.com/cheapAOE/">私訊粉絲團</a>或聯絡我(noob@aoetw.com)，例如提供貼圖一份，新增<span style="font-weight: bold;">巨屌獎</span>，我會把投稿名單給你，由你決定誰是巨屌</p>
      <h3>投稿時間</h3>
      <p>現在到11/22日23:59為止</p>
      <P>每人不限次數投稿，你可以使用哥德人海戰術也沒關係</P>
      <h3>公布獎項</h3>
      <p>11月25日公布於本網頁</p>
      <h3>參賽提示</h3>
      <ol>
<li>電影同名手游或是最近的時事梗</li>
<li>遊戲名字牽扯到三國、水滸、群英、貂蟬、西遊、神鬼等等的</li>
<li>遊戲簡介提到正版授權、正版、官方正版、官方版等等的</li>
<li>遊戲介紹的截圖放世紀帝國，就是沒實際遊戲截圖的</li>
<li>過氣明星代言的</li>
<li>vip制，首充雙倍，隔幾天開新區，首次充值60元就有極品xxx送</li>
<li>滿屏幕的充值禮包提醒</li>
<li>中國山寨動漫手遊</li>
      
    </ol>

    </div>



    <!-- <button onclick="add()" type="button" class="btn btn-primary">新增</button> -->
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
