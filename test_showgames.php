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
    <div id="mother"></div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
  if (!String.prototype.format) {
    String.prototype.format = function() {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function(match, number) { 
        return typeof args[number] != 'undefined'
            ? args[number]
            : match
        ;
        });
    };
  }
  $(function() {
    var appstr = 
    '<div class="d-flex justify-content-center mt-3"> \
      <div class="card" style="width: 70%;"> \
        <img id="card_picurl" class="card-img-top" src="{0}" alt="Card image cap"> \
        <div class="card-body"> \
          <h5 id="card_title" class="card-title font-weight-bold">{1}</h5> \
          <p id="card_text" class="card-text">{2}</p> \
          <a href="#" class="btn btn-primary">開始玩</a> \
        </div> \
      </div> \
    </div>';
    $.post( "test_listgame.php", {})
    .done(function( data ) {
        data = JSON.parse(data);
        $.each( data, function( key, v ) {
            console.log( v );
            $( "#mother" ).append( appstr.format(v.picurl, v.title, v.text) );
        });
        
    });
    
  });
  </script>
  </body>
</html>
