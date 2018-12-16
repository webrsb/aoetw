<template>
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