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
          <h1>漁網</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>漁網是<a href="Feudal_Age.php">封建時代</a>的經濟建築之一，在建成<a href="Dock.php">港口</a>後就可以使用。漁網提供715食物，只有
              <a
              href="Fishing_Ship.php">漁船</a>能夠建築和採集它。</p>
            <h3>技巧</h3> 
            <p>漁網同時只能被一艄<a href="Fishing_Ship.php">漁船</a>採集。漁網非常脆弱而且並不會阻擋友方或敵方的單位；即使是敵方的
              <a
              href="Fishing_Ship.php">漁船</a>，簡單的對漁網點右鍵也可以採集。</p>
            <p>與<a href="Farm.php">農田</a>不同，你不能在<a href="Dock.php">港口</a>累積備用漁網。</p>
            <p>漁網應該盡可能地擺在<a href="Dock.php">港口</a>旁邊，這樣就能縮短<a href="Fishing_Ship.php">漁船</a>的移動距離，進而最大化生產力。
              <a
              href="Fishing_Ship.php">漁船</a>會自己移動到漁網的左側來工作，因此把漁網建在<a href="Dock.php">港口</a>的右側會更進一步的縮短<a href="Fishing_Ship.php">漁船</a>的移動時間。</p>
            <p>漁網和<a href="Farm.php">農田</a>的生產力大致相當，但是漁網的成本較為低廉。儘管如此，漁網是最不常被使用的建築之一。在少數情況下，例如在島上的玩家已經沒有多餘的空間，周圍也沒有魚，但仍然需要在後帝王時期收集食物時，漁網才可能被考慮。除此之外，相比
              <a
              href="Villager.php">農夫</a>，玩家更難以保護<a href="Fishing_Ship.php">漁船</a>。<a href="Villager.php">農夫</a>可以躲進城鎮中心或是用牆來保護，但是
                <a
                href="Fishing_Ship.php">漁船</a>會輕易地被擊沉。</p>
            <p>然而，有兩個文明的漁網還是很有用的：</p>
            <ul>
              <li><a href="Japanese.php">日本</a>：更高的<a href="Fishing_Ship.php">漁船</a>工作速度，使得日本的漁網遠比
                <a
                href="Farm.php">農田</a>更有效率。</li>
              <li><a href="Malay.php">馬來</a>：漁網只消耗67木頭 (只比<a href="Farm.php">農田</a>多7) 而且提供無限的食物。這使得理論上的漁網效率(食物/木頭比)是無限，因此在後期遊戲中是非常不錯的選擇。</li>
            </ul>
          </div>
           <h3>農田產量表</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>農夫種植的速度比漁船從魚網捕魚的速度稍微快一些，但是一直到帝王時代後期，農夫都還是比較不划算的，(漁船自己消耗的木頭也算在內)。但他們倆實際收集資源的速度也要看農田與磨坊和漁網與碼頭之間距離不同而定。</p>
          </div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td>建築物</td>
              <td>整體食物提供</td>
              <td>每個木材生產的食物</td>
            </tr>
            <tr>
              <td class="tta1">農田</td>
              <td class="tta2">175</td>
              <td class="tta3">2.92</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="img/Farmicon.png" width="30" alt=""><a href="Farm.php">農田</a>(研發
                <img class="gg" src="img/Horsecollar.jpg"
                width="30" alt=""><a href="Horsecollar.php">馬軛</a>+75)</td>
              <td class="tta2">250</td>
              <td class="tta3">4.17</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="img/Farmicon.png" width="30" alt=""><a href="Farm.php">農田</a>(研發
                <img class="gg" src="img/Heavyplow.jpg" width="30"
                alt=""><a href="Heavyplow.php">重犁</a>+125)</td>
              <td class="tta2">375</td>
              <td class="tta3">6.25</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="img/Farmicon.png" width="30" alt=""><a href="Farm.php">農田</a>(研發
                <img class="gg" src="img/Croprotation.jpg"
                width="30" alt=""><a href="Croprotation.php">輪耕</a>+175)</td>
              <td class="tta2">550</td>
              <td class="tta3">9.17</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="img/FishingShipIcon.jpg" width="30" alt=""><a href="Fishing_Ship.php">漁船</a>
              </td>
              <td class="tta2">715</td>
              <td class="tta3">7.15</td>
            </tr>
            <tr>
              <td class="tta1">
                <img class="gg" src="img/FishingShipIcon.jpg" width="30" alt=""><a href="Fishing_Ship.php">漁船</a>+
                <img class="gg" src="img/Fishtrapicon.png"
                width="30" alt=""><a href="Fish_Trap.php">漁網</a>
              </td>
              <td class="tta2">715</td>
              <td class="tta3">4.09</td>
            </tr>
          </table>
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Byzantines.php">拜占庭</a>：在封建/城堡/帝王時代，<a href="Fishing_Ship.php">漁船</a>有+20%/30%/40%的血量加成。</li>
              <li><a href="Chinese.php">中國</a>：研究<a href="Gillnets.php">流刺網</a>在城堡/帝王時代減少15%/20%的成本。</li>
              <li><a href="Italians.php">義大利</a>：研究<a href="Gillnets.php">流刺網</a>減少50%的成本。</li>
              <li><a href="Japanese.php">日本</a>：在黑暗/封建/城堡/帝王時代，<a href="Fishing_Ship.php">漁船</a>的建造和採集漁網的速度加快5%/10%/15%/20%。</li>
              <li><a href="Khmer.php">高棉</a>：不需要港口就可以建造漁網。</li>
              <li><a href="Malay.php">馬來</a>：漁網減少33%成本而且提供無限食物。</li>
              <li><a href="Persians.php">波斯</a>：研究<a href="Gillnets.php">流刺網</a>在城堡/帝王時代減少15%/20%的成本。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><a href="aok.php">帝王世紀</a></em></h3> 
            <ul>
              <li>漁網建造時間需要15秒。</li>
            </ul>
            <h3><em><a href="aoc.php">征服者入侵</a></em></h3> 
            <ul>
              <li>漁網建造時間需要53秒。</li>
            </ul>
            <h3><em><a href="aof.php">失落的帝國</a></em></h3>
            <ul>
              <li>引入<a href="Gillnets.php">流刺網</a>。</li>
            </ul>
            <h3><em><a href="ak.php">非洲王朝</a></em></h3>
            <ul>
              <li>漁網現在建造時間需要40秒。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>風乾的魚和鹹魚是中世紀非常有價值的商品，因為它們是可以長期保存和攜帶的蛋白質來源。冰島和挪威的鱈魚是一個特別寶貴的資源。捕魚技術的改進包括用魚網捕撈沿岸魚類和洄遊型魚類。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle"><a href="">漁網</a>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="img/Fishtrapicon.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">概要</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4">經濟</td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">所有文明</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4"><a href="Feudal_Age.php">封建時代</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">需要建設</td>
              <td class="unit4"><a href="Dock.php">港口</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">建築時間</td>
              <td class="unit4">40秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">成本</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">數據</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">尺寸</td>
              <td class="unit4">1x1</td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">50</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">1</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由企鵝和賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
           <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-4"> <a href="img/Fishtraps.png"><img class="imgn" class="hg" width="180" src="img/Fishtraps.png" alt=""></a> 
              <div
              class="lightbox-caption" style="width:220px" ;>
                <p><em>漁網應該盡可能地蓋靠近碼頭。</em>
                </p>
            </div>
          </div>
          <div class="col-md-4"> <a href="img/Spritesheet_fish_trap.png"><img class="imgn" class="hg" width="200" src="img/Spritesheet_fish_trap.png" alt=""></a> 
            <div
            class="lightbox-caption" style="width:185px" ;>
              <p><em>漁網的各種樣子(建造中/損壞/閒置動畫)。</em>
              </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
    </div>
    <!-- /container -->
    <?php include( "allbuilding.php"); ?>
    <?php include( "foot.php"); ?>
  </body>

</html>