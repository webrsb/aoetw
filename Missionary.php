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
           <h1>傳教士</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>傳教士是<a href="aoc.php">征服者入侵</a>中 <a href="Spanish.php">西班牙</a>的第二種特殊單位，可以在
              <a
              href="Monastery.php">修道院</a>進行訓練。但不像 <a href="Monk.php">僧侶</a>，它無法撿<a href="Relic.php">遺跡</a>。</p>
          </div>
          <h3>戰術</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>與僧侶一樣，傳教士能夠治療單位以及招降敵方單位，但是不能拾取<a href="Relic.php">遺跡</a>，且治療速度只有僧侶的一半（每0.8秒1
              HP而不是0.4秒）。它可以移動得相當快，使它幾乎可以從<a href="Knight.php">騎士</a>以外幾乎所有的敵方單位攻擊下逃走。在騎士中搭配幾個傳教士可以在勢均力敵的戰鬥中大大提高獲勝的機會。傳教士也能招降被擊敗的敵人的單位和建築物。他們受到所有修道院科技的影響。然而，儘管他們在移動速度方面比僧侶有優勢，但傳教士招降範圍只有7，遠不敵僧侶的9。</p>
            <p>僧侶和傳教士的成本都一樣，使在他們之間的選擇主要是戰術上的問題。在大多數方面，傳教士的表現通常優於僧侶。但僧侶的進攻能力，無論是醫治友軍，招降敵人或逃避反擊都有更好的表現。傳教士在防守上的表現則差得多，而且治療速度也較慢，所以對於必須在城牆後面反擊的情況，僧侶的表現會更好。</p>
            <p>對於西班牙人來說，西班牙傳教士給西班牙人更多的戰術靈活性，特別是在進攻和後期遊戲<a href="Relic.php">遺跡</a>已被收集完的時候。</p>
          </div>
          <h3>更多數據</h3>
          <div class="hrn1"></div>
          <div class="n1"></div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">劣勢與優勢</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">強勢(容易對抗)</td>
              <td class="tta4">緩慢且沒有射程的單位、可以招降的<a href="bulding.php">建築物</a>、<a href="Knight.php">騎士</a>。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4"><a href="Archer_Units.php">弓兵</a>、<a href="Eagle_Warrior.php">鷹勇士</a>、
                <a
                href="Light_Cavalry.php">輕騎兵</a>、<a href="Camel.php">駱駝騎兵</a>、<a href="Halberdier.php">戟兵</a>、
                  <a
                  href="Genoese_Crossbowman.php">熱那亞弩手</a>、箭塔、<a href="Castle.php">城堡</a>。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生命值</td>
              <td class="tta4">
                <img class="gg" src="img/Sanctity.jpg" alt=""><a href="Sanctity.php">聖潔虔誠</a>(+15)
                <br>
                <img class="gg" src="img/Bloodlines.png" width="30" alt=""><a href="Bloodlines.php">品種</a>(+20)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">範圍</td>
              <td class="tta4">
                <img class="gg" src="img/Blockprinting.jpg" alt=""><a href="Block_Printing.php">雕版印刷術</a>(+3)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <img class="gg" src="img/Fervor.jpg" alt=""><a href="Fervor.php">宗教狂熱</a>(+15%)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">招降</td>
              <td class="tta4">
                <img class="gg" src="img/Redemption.jpg" alt=""><a href="Redemption.php">信仰救贖</a>:僧侶可招降大部分建築物和攻城單位。
                <br>
                <img class="gg" src="img/Atonement.jpg" alt=""><a href="Atonement.php">贖罪</a>:僧侶可招降對方的僧侶。
                <br>
                <img class="gg" src="img/Illumination.jpg" alt=""><a href="Illumination.php">啟發教化</a>:僧侶招降成功後，恢復信仰的速度快50%。33秒後可再次招降對方(原為62秒)。
                <br>
                <img class="gg" src="img/Theocracy.png" alt=""><a href="Theocracy.php">神權統治</a>:一群僧侶招降一個單位成功後，只有一位僧侶需要恢復信仰。
                <br>
                <img src="img/CastleAgeUnique.png" class="gg" alt=""><a href="Inquisition.php">異端審判</a>:僧侶招降速度變快(對單位時間-1，對建築物時間-7)，<a href="Spanish.php">西班牙</a>限定。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">招降抵抗</td>
              <td class="tta4">
                <img class="gg" src="img/Faith.jpg" width="30" alt=""><a href="Faith.php">忠誠信仰</a>
                <br>
                <img class="gg" src="img/Heresy.png" width="30" alt=""><a href="Heresy.php">異端邪說</a> 
              </td>
            </tr>
          </table>
          <h3>剋傳教士的單位與建築</h3> 
          <div class="hrn1"></div>
          <div class="n1">以下單位擁有對傳教士的額外傷害，按照傷殺力排列。
            <div class="n1">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+32攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/HalberdierIcon.jpg" alt=""><a href="Halberdier.php">戟兵</a>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+22攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/PikemanIcon.jpg" alt=""><a href="Pikeman.php">重裝長槍兵</a>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+18攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/HeavyCamelIcon.jpg" alt=""><a href="Heavy_Camel.php">重裝駱駝騎兵</a>→
                      <img class="gg" src="img/ImperialCamelIcon.jpg"
                      alt=""> <a href="Imperial_Camel.php">帝王駱駝騎兵</a>(帝王駱駝騎兵是<a href="indians.php">印度</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/SpearmanIcon.jpg" alt=""><a href="Spearman.php">長槍兵</a>
                    </li>
                    <li>
                      <img class="gg" src="img/CannonGalleonIcon.jpg" alt=""><a href="Cannon_Galleon.php">火砲戰船</a>→
                      <img class="gg" src="img/CannonGalleonIcon.jpg"
                      alt=""> <a href="Elite_Cannon_Galleon.php">精銳火砲戰船</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+14攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/EliteEagleWarriorIcon.jpg" alt=""><a href="Elite_Eagle_Warrior.php">精銳鷹勇士</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+12攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/Saracenmamluk_icon.png" alt=""><a href="Mameluke.php">精銳奴隸兵</a>(<a href="Saracens.php">薩拉森</a>限定)</li>
                    <li>
                      <img class="gg" src="img/Kamayuk_Icon.jpg" alt=""><a href="Kamayuk.php">精銳槍隊長</a>(<a href="Incas.php">印加</a>限定)</li>
                    <li>
                      <img class="gg" src="img/HussarIcon.jpg" alt=""><a href="Hussar.php">匈牙利輕騎兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/SMURI.jpg" alt=""><a href="Samurai.php">精銳日本武士</a>(<a href="Japanese.php">日本</a>限定)</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+11攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/EagleWarriorIcon.jpg" alt=""><a href="Eagle_Warrior.php">鷹勇士</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+10攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/LightCavalryIcon.jpg" alt=""><a href="Light_Cavalry.php">輕騎兵</a> 
                    </li>
                    <li>
                      <img class="gg" src="img/SMURI.jpg" alt=""><a href="Samurai.php">日本武士</a>(<a href="Japanese.php">日本</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/CamelIcon.jpg" alt=""><a href="Camel.php">駱駝騎兵</a>
                    </li>
                    <li>
                      <img class="gg" src="img/Saracenmamluk_icon.png" alt=""><a href="Mameluke.php">奴隸兵</a>(<a href="Saracens.php">薩拉森</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/Kamayuk_Icon.jpg" alt=""><a href="Kamayuk.php">槍隊長</a>(<a href="Incas.php">印加</a>限定)</li>
                    <li>
                      <img class="gg" src="img/EagleScoutIcon.jpg" alt=""><a href="Eagle_Scout.php">鷹斥侯</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/New_Genoese_Crossbowman.png" alt=""><a href="Genoese_Crossbowman.php">精銳熱那亞弩手</a>(<a href="Italians.php">義大利</a>限定)</li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/ScoutCavalryIcon.jpg" alt=""><a href="Scout_Cavalry.php">斥侯騎兵</a> 
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong>
                  </div>
                  <ul>
                    <li>
                      <img class="gg" src="img/New_Genoese_Crossbowman.png" alt=""><a href="Genoese_Crossbowman.php">熱那亞弩手</a>(<a href="Italians.php">義大利</a>限定)</li>
                  </ul>
                </div>
              </div>
            </div>以下技術可給以下單位對傳教士有額外攻擊:
            <div class="n1">
              <img class="gg" src="img/CastleAgeUnique.png" width="22" alt=""> <a href="Chieftains.php">酋長</a> 
              <div width="22" style="margin:12px 0px;"><strong>+5攻擊</strong>(<a href="Vikings.php">維京</a>限定)</div>
              <ul>
                <li>
                  <img class="gg" src="img/MilitiaIcon.jpg" alt=""><a href="Militia.php">民兵</a>→
                  <img class="gg" src="img/ManAtArmsIcon.jpg"
                  width="22" alt=""> <a href="Man-at-Arms.php">裝甲步兵</a>→
                  <img class="gg" src="img/LongswordsManIcon.jpg"
                  alt=""> <a href="Long_Swordsman.php">長劍兵</a>→
                  <img class="gg" src="img/2HandedswordsmanIcon.jpg"
                  alt=""> <a href="Two-Handed_Swordsman.php">雙手劍兵</a>→
                  <img class="gg" src="img/ChampionIcon.jpg"
                  alt=""> <a href="Champion.php">劍兵勇士</a> 
                </li>
                <li>
                  <img class="gg" src="img/SpearmanIcon.jpg" alt=""><a href="Spearman.php">長槍兵</a>→
                  <img class="gg" src="img/PikemanIcon.jpg"
                  alt=""> <a href="Pikeman.php">重裝長槍兵</a> 
                </li>
                <li>
                  <img class="gg" src="img/VBRSK.jpg" alt=""><a href="Berserk.php">狂戰士</a>→
                  <img class="gg" src="img/VBRSK.jpg" alt=""> <a href="Berserk.php">精銳狂戰士</a>(<a href="Vikings.php">維京</a>限定)</li>
                <li>
                  <img class="gg" src="img/CondottieroNewIcon.jpg" alt=""> <a href="Condottiero.php">傭兵</a>(如果和<a href="Italians.php">義大利</a>同盟的話)</li>
              </ul>
            </div>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><a href="Byzantines.php">拜占庭</a>：傳教士治療速度提高50％。</li>
              <li><a href="Teutons.php">條頓</a>：傳教士對敵方的招降更有抵抗力。</li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><a href="aoc.php">征服者入侵</a></em></h3>
            <ul>
              <li>訓練傳教士需要先建造城堡。</li>
            </ul>
            <h3><em><a href="aof.php">失落的帝國</a></em></h3>
            <ul>
              <li>傳教士現在會受到<a href="Bloodlines.php">品種</a>和<a href="Fervor.php">宗教狂熱加成影響。</a>。</li>
            </ul>
            <h3><em><a href="ak.php">非洲王朝</a></em></h3>
            <ul>
              <li>訓練傳教士不再需要先建造城堡。</li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>傳教士是唯一在修道院訓練的特殊單位，同時也讓修道院成為唯一可訓練一種特殊單位的建築物。</li>
              <li>傳教士是少數幾個單位同時沒有近防和遠防。其他的有<a href="Slinger.php">投石手</a>、<a href="Condottiero.php">傭兵</a>、
                <a
                href="Imperial_Camel.php">帝王駱駝騎兵</a>和<a href="Imperial_Skirmisher.php">帝王戰矛兵</a>。</li>
              <li>傳教士是少數幾個特殊單位沒有精銳升級的。其他的有<a href="Slinger.php">投石手</a>、<a href="Condottiero.php">傭兵</a>、
                <a
                href="Imperial_Camel.php">帝王駱駝騎兵</a>和<a href="Imperial_Skirmisher.php">帝王戰矛兵</a>
              </li>
              <li>與僧侶不同的是，傳教士的名字在歷史上是正確的，因為傳教士的定義是“一個宗教使團派出的人，特別是被派去在外國宣傳基督教的人”，傳教士在遊戲中的的主要目的就是招降敵方單位(向他們傳教，阿門)。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>隨著歐洲人漸漸明白哥倫布已經打開了通向兩大洲的大門，他們醒悟到將潛在巨大的本地人口轉變為基督教的可能性，西班牙人，葡萄牙人和其他歐洲國家紛紛派遣傳教士進入新大陸。要成為一個傳教士需要有信心，有強健的體魄和極大的熱情，他們經常被要求投身於具有截然不同文化和信仰的人們的曠野中，許多傳教士在這些環境中感到了絕望，折磨和死亡。因為許多當地人拒絕他們的傳教，或者將他們視為疾病和戰爭的帶原者。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle"><a href="">傳教士</a>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="img/MissionaryIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">單位介紹</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4"><a href="Monk.php">僧侶</a>、 <a href="Cavalry_Units.php">騎兵</a>、 醫護人員</td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4"><a href="Spanish.php">西班牙</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="img/Castle-age-reseach.jpg" alt=""><a href="Castle_Age.php">城堡時代</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" src="img/Monasteryicon.png" alt=""><a href="Monastery.php">修道院</a>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">51秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">成本</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><a href="">數據</a>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">30</td>
            </tr>
            <tr>
              <td class="unit3">招降後恢復時間</td>
              <td class="unit4">62秒</td>
            </tr>
            <tr>
              <td class="unit4">招降範圍</td>
              <td class="unit4">對一般單位:7
                <br>對<a href="bulding.php">建築物</a>、<a href="Battering_Ram.php">衝撞車</a>、
                <a
                href="Trebuchet.php">巨型投石機</a>:0</tr>
            <tr>
              <td class="unit4">治療範圍</td>
              <td class="unit4">4</td>
            </tr>
            <tr>
              <td class="unit3"><a href="">近防</a>
              </td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">防禦類別</td>
              <td class="unit4"> <a href="Armor_Class:_Cavalry_Archer.php">騎兵</a>
                <br> <a href="Armor_Class_Monk.php">僧侶</a>
                <br> <a href="Armor_Class_Unique_Unit.php">特殊單位</a>
              </td>
            </tr>
            <tr>
              <td class="unit3"><a href="">跑速</a>
              </td>
              <td class="unit4">1.1</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">9</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
        <div class="col-md-12">
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <a href="img/Missionary.png"><img class="imgn" class="hg" src="img/Missionary.png" alt=""></a> 
                <p><em>一群傳教士</em>
                </p>
              </div>
              <div class="col-md-4"> <a href="img/Missionary1.png"><img class="imgn" class="hg" src="img/Missionary1.png" alt=""></a> 
                <p><em>傳教士美術畫</em>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /container -->
        <?php include( "allunit.php"); ?>
        <?php include( "footn.php"); ?>
  </body>

</html>