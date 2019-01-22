
<!DOCTYPE html>
<html lang="zh-tw">  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Aoetw</title>
    <style>
      body {            padding-top: 0px;            font-family: "微軟正黑體";            background-color: #f5f5f5;            font-size: 18px;        }
    </style>
  </head><body>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="css/style.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
  </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="/js/key-search.js"></script>
<style>
    body {            font-family: "微軟正黑體";        }
  </style>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="border-radius: 0px;margin-bottom: 0px;text-align: center; ">
  <div class="container">
    <div class="row">
      <div class="col-12" style="margin:0px auto;">	<a class="navbar-brand" href="index.php" style="margin: 0 auto;">Aoetw</a> 
      </div>
      <div class="col-12" style="margin:0px auto;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="civ.php">文明</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="units.php">單位</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="tech.php">科技</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="bulding.php">建築</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="Armor_class.php">護甲分類</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="batt.php">戰役</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="starbatt.php">戰術技巧</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="qa.html">常見問題</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="talk.php">討論區</a> 
            </li>
            <li class="nav-item"> <a class="nav-link" href="http://aoetw.com/save">記錄檔區</a> 
            </li>
            <li>
            <li class="nav-item"> <a class="nav-link" href="vie.php">科技樹</a> 
            </li>
            <li>
            <li class="nav-item"> <a class="nav-link" href="map.php">地圖</a> 
            </li>
            <div class="nav-item">
            <input id="tags" style="padding-bottom: 5px;height: calc(2.25rem + 2px); font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; border: 1px solid #ced4da; border-radius: .25rem;">
            <button id="tags_btn" class="btn btn-primary">搜尋</button>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">      <div class="row" style="margin-top:30px;">
        <div class="col-md-12">
        <h1>駐軍（Garrison）</h1>
        <div class="hrn1"></div>
        </div>
        <div class="col-md-12">
        <div class="n1">
        <p>駐軍部隊可以安全地免受敵方部隊騷擾，在世紀帝國II中，駐軍部隊會慢慢恢復HP。但如果建築物受到一定程度的破壞，就無法在其內部駐紮單位，且所有駐守的單位都會自動從該建築物中撤出。</p>
          <h4>如何駐軍：</h4>
          <p>選取想要駐守的單位後，按住<strong>Alt鍵+右鍵單擊</strong>建築物，即可將單位駐紮在建築物中。或是選取單位後，按下<strong>熱鍵G+左鍵單擊</strong>建築物（右鍵單擊也可）。 </p>
          <h4>如何撤軍：</h4>
          <p>選取已駐軍該建築物後，點選<strong>熱鍵Z</strong>即可。</p>
        </div>
          <div class="hrn1"></div>
          <div class="n1">
          <h4>玩家可以駐守的建築物：</h4>
<ul>
           <li><a href="heros.php">城鎮中心</a>：最多15位村民或徒步弓步兵（唯獨<a href="Teutons.php">條頓</a>文明該駐紮單位+10） </li>
           <li><a href="Berserk.php">軍營</a>：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）</li>
           <li><a href="Berserk.php">碼頭</a>：10艘該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）</li>
           <li><a href="Archery_Range.php">射箭場</a>：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）</li>
           <li><a href="Monastery.php">修道院</a>：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）</li>
           <li><a href="Stable.php">馬廄</a>：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）</li>
           <li><a href="Siege_Workshop.php">攻城武器製造所</a>：10位該建築生產單位（設置聚集點在該建築才可駐軍，撤離後無法進駐）</li>
           <li><a href="Watch_Tower.php">瞭望箭塔</a>：最多5位村民或徒步弓步兵</li>
           <li><a href="Guard_Tower.php">防禦箭塔</a>：最多5位村民或徒步弓步兵</li>
           <li><a href="Keep.php">大型箭塔</a>：最多5位村民或徒步弓步兵</li>
           <li><a href="Castle.php">城堡</a>：最多20位單位（<a href="Trebuchet.php">投石機</a>及<a href="Portuguese.php">葡萄牙</a>城堡特殊單位<a href="Organ_Gun.php">手風琴砲</a>撤離後無法再進駐）</li>
           <li><a href="House.php">房屋</a>：最多5位村民（僅限<a href="Khmer.php">高棉</a>文明）</li>
          </ul>          <h4>玩家可以駐守的軍事單位：</h4>
          <ul>
           <li><a href="Transport_Ship.php">運輸船</a>：初始最多運輸5個單位（<a href="Saracens.php">薩拉森</a>文明可運輸單位+5） </li>
           <li><a href="Berserk.php">輕型衝撞車</a>：最多4位村民或徒步弓步兵（進駐可提升移動速度及攻擊力）</li>
           <li><a href="Capped_Ram.php">裝甲衝撞車</a>：最多5位村民或徒步弓步兵（進駐可提升移動速度及攻擊力）</li>
           <li><a href="Siege_Ram.php">重型衝撞車</a>：最多6位村民或徒步弓步兵（進駐可提升移動速度及攻擊力）</li>
           <li><a href="Siege_Tower.php">攻城塔</a>：最多10位村民或徒步弓步兵（軍事建築物聚集點設在攻城塔→可自動進駐）</li>          
            </ul>             <h4>可提升箭量之駐守建築物及軍事單位：</h4>
          <ul>
           <li><a href="heros.php">城鎮中心</a>：村民、徒步弓兵、火槍兵</li>
           <li><a href="Watch_Tower.php">瞭望箭塔</a>：村民、徒步弓兵、火槍兵（村民進駐4~5位可+4箭量）</li>
           <li><a href="Guard_Tower.php">防禦箭塔</a>：村民、徒步弓兵、火槍兵（村民進駐提升箭量約比瞭望箭塔少1~2）</li>
           <li><a href="Keep.php">大型箭塔</a>：村民、徒步弓兵、火槍兵（村民進駐提升箭量約比瞭望箭塔少2）</li>
           <li><a href="Castle.php">城堡</a>：村民、徒步弓兵、騎馬弓手、陸地<a href="Gunpowder_Unit.php">火藥單位</a>（<a href="Organ_Gun.php">手風琴砲</a>除外）</li>
           <p>『駐軍<a href="Skirmisher.php">矛兵</a>、<a href="Chu_Ko_Nu.php">中國連弩兵</a>也會提升箭量，但增加不多。』<br>
            『<a href="Crossbowman.php">弩兵</a>、<a href="Arbalest.php">強弩兵</a>、<a href="Arbalest.php">火槍兵</a>（或<a href="Janissary.php">土耳其火槍兵</a>）駐軍任一箭塔提升箭量不會改變（固定+4）。』<br>
            『軍事單位升級、或是研發<a href="Chemistry.php">化學</a>……等，<a href="Castle.php">城堡</a>駐軍增加箭數會稍微多些。』</p>
          </ul>
            <p>駐軍時單位不會受到敵方攻擊而損血，但如果建築物被破壞或嚴重損壞（剩餘HP≤20%），它們會自動從建築物中撤離。此外，受損單位進駐建築物內部後會慢慢恢復HP，箭塔每秒治療0.1的生命值，而<a href="Castle.php">城堡</a>治療速度則是每秒治療0.2的生命值，研發<a href="Herbal_Medicine.php">草藥學</a>技術後可更進一步提高<a href="Regeneration.php">回血</a>率。
          <p>駐軍村民、徒步弓兵、騎馬弓手、陸地火藥單位……等，可增加塔、城鎮中心、城堡等射箭量輸出（<a href="heros.php">城鎮中心</a>及箭塔無法駐軍騎馬弓手或騎馬<a href="Gunpowder_Unit.php">火藥單位</a>），不同文明會有些許差異，單位升級或研發<a href="Chemistry.php">化學</a>也會有所影響。有駐守的建築物頂部會有旗幟標誌，其他像是有放置遺跡的修道院也會有旗幟標示。</p>
          </div>
        </div>
          <div class="n1">		  <div class="row">
		  <div style="border: 1px solid #495057;background: #009999;color: #FFFFFF; " height="40" colspan="7" align="center" class="unit col-sm-12 text-center">
			<strong>遊戲內駐軍畫面</strong>
		  </div>
           <div style="border: 1px solid #495057;" class="col-sm-3" bgcolor="#FFFFFF">
		    <div class="unititle"><img src="img/Garrison_test01.png" width="100%"></div>
			<div class="col-sm-12 text-center">駐軍 - 熱鍵G</div>
		   </div>
		   <div style="border: 1px solid #495057;" class="col-sm-3" bgcolor="#FFFFFF">
			<div class="unititle"><img src="img/Garrison_test02.png" width="100%"></div>
			<div class="col-sm-12 text-center">設置聚集點在該建築物</div>
		   </div>
		   <div style="border: 1px solid #495057;" class="col-sm-3" bgcolor="#FFFFFF">
            <div class="unititle"><img src="img/Garrison_test03.png" width="100%"></div>
			<div class="col-sm-12 text-center">已駐軍建築物</div>
		   </div>
		   <div style="border: 1px solid #495057;" class="col-sm-3" bgcolor="#FFFFFF">
            <div class="unititle"><img src="img/Garrison_test04.png" width="100%"></div>
			<div class="col-sm-12 text-center">撤軍 - 熱鍵Z</div>
		   </div>
          </div>
<div class="n1">
      <div class="col-md-12">
              <div class="col-md-4">               </div>
      </div>
          </div>
        </div>
      </div>      <div class="container">
  <div class="row" style=" margin-top:20px">
    <div class="col-md-12"></div>
  </div>
</div>      <footer class="bs-docs-footer">
  <div class="container">
    <p>Designed and built with all the love in the world by <a href="https://www.youtube.com/user/netss7/videos"
      target="_blank">@cheap</a>
    </p>
  </div>
</footer>
<script src="js/Keywords.js"></script>  </body>
</html>