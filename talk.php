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
      body {            padding-top: 0px;            font-family: "微軟正黑體";            background-color: #f5f5f5;            font-size: 18px;        }        .flg{          width: 25px;margin: 0px 5px;"        }
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
          <h1>Aoetw討論區</h1>
          <div class="hrn1"></div>
          <p>
            <ul>
              <li>任何問題或是網頁有錯誤都歡迎在這邊討論</li>
            </ul>
          </p>
        </div>
        <div class="col-md-12">
          <iframe id="forum_embed" src="javascript:void(0)" scrolling="no" frameborder="0"
          width="900" height="700"></iframe>
          <script type="text/javascript">
            document.getElementById('forum_embed').src =     'https://groups.google.com/forum/embed/?place=forum/aoetw'     + '&showsearch=true&showpopout=true&showtabs=false'     + '&parenturl=' + encodeURIComponent(window.location.href);
          </script>
        </div>
      </div>
    </div>
    <!-- /container -->
    <?php include( "footn.php"); ?>
  </body>

</html>