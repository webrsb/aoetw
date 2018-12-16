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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery.jOrgChart.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link href="css/prettify.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/prettify.js"></script>
    <!-- jQuery includes -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
    <script src="js/jquery.jOrgChart.js"></script>
    <script>
      jQuery(document).ready(function() {        $("#org").jOrgChart({            chartElement : '#chart',            dragAndDrop  : true        });    });
    </script>
    <!-- Custom styles for this template -->
    <style>
      body {            padding-top: 0px;            font-family: "微軟正黑體";            background-color: #f5f5f5;            font-size: 18px;        }        .flg{          width: 25px;margin: 0px 5px;"        }        .not{          opacity: 0.3;        }        .allciv{        }        .gg{          width: 45px;        }        .trm{          font-size: 22px;        }#banner ul li {  float: left;  list-style-type: none;}#banner a::after {  content: " · ";  font-weight: bold;      color: #373a3c;}.treetd{    width: 10%;    background: #ccc;    font-weight: bold;    border: 1px solid;    text-align: right;    padding: 5px;} @media only screen and (max-width: 480px), (min-device-width: 480px) and (max-device-width: 480px)  {        .gg{          width: 22px;        }        .trm{          font-size: 16px;        }}}
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script>
      $(document).ready(function(){  $("#hide").click(function(){    $("#list").hide();  });  $("#show").click(function(){    $("#list").show();  });});
    </script>
  </head>
  <div class="col-md-12">
    <div class="des col-md-3">
      <div style=" font-size: 22px; font-weight: bold; text-align: center;">目錄</div>
    </div>
    <div class="des col-md-9">
      <div style=" font-size: 22px; font-weight: bold; text-align: center; ">各文明科技樹
        <div style="text-align: right;">
          <button id="hide" class="btn btn-danger btn-sm">隱藏</button>
          <button id="show" class="btn btn-success btn-sm">展開</button>
        </div>
      </div>
    </div>
    <div id="list">
      <div class="des col-md-3">
        <ul class="ult">
          <li><a href="#軍營">軍營</a>
          </li>
          <li><a href="#射箭場">射箭場</a>
          </li>
          <li><a href="#馬廄">馬廄</a>
          </li>
          <li><a href="#攻城器製造所">攻城器製造所</a>
          </li>
          <li><a href="#城堡">城堡</a>
          </li>
          <li><a href="#碼頭">碼頭</a>
          </li>
          <li><a href="#兵工廠">兵工廠</a>
          </li>
          <li><a href="#市集">市集</a>
          </li>
          <li><a href="#修道院">修道院</a>
          </li>
          <li><a href="#學院">學院</a>
          </li>
        </ul>
      </div>
      <div class="des col-md-9">
        <div>
          <table class="table-bordered allciv" width="100%" style="margin:0px 0px 20px 0px;">
            <tr>
              <td class="unit3 treetd">亞洲</td>
              <td class="unit4">
                <div id="banner"> <a href="chi.php">中國</a>  <a href="jap.php">日本</a>  <a href="mon.php">蒙古</a> 
                  <a
                  href="kor.php">韓國</a> <a href="ind.php">印度</a>  <a href="byz.php">拜占庭</a>  <a href="pre.php">波斯</a> 
                    <a
                    href="ber.php">柏柏</a> <a href="sar.php">薩拉森</a>  <a href="tur.php">土耳其</a>  <a href="bur.php">緬甸</a> 
                      <a
                      href="khm.php">高棉</a> <a href="mal.php">馬來</a>  <a href="vie.php">越南</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3 treetd">歐洲</td>
              <td class="unit4">
                <div id="banner">
                  <div id="banner"> <a href="bri.php">不列顛</a>  <a href="cel.php">賽爾特</a>  <a href="fra.php"> 法蘭克</a> 
                    <a
                    href="spa.php">西班牙</a> <a href="got.php">哥德</a>  <a href="teu.php">條頓</a>  <a href="vik.php">維京</a> 
                      <a
                      href="hun.php">匈奴</a> <a href="ita.php">義大利</a>  <a href="mag.php">馬札爾</a>  <a href="sla.php">斯拉夫</a> 
                        <a
                        href="por.php">葡萄牙</a>
                  </div>
              </td>
            </tr>
            <tr>
              <td class="unit3 treetd">美洲
                <br>非洲</td>
              <td class="unit4">
                <div id="banner"> <a href="azt.php">阿茲特克</a>  <a href="may.php">馬雅</a>  <a href="inc.php">印加</a> 
                  <a
                  href="eth.php">衣索比亞</a> <a href="mai.php">馬利</a> 
                </div>
              </td>
            </tr>
          </table>
          </div>
        </div>
      </div>
    </div>