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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/assets/css/docs.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/jquery.jOrgChart.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link href="css/prettify.css" type="text/css" rel="stylesheet" />
  
    <script type="text/javascript" src="js/prettify.js"></script>
    
    <!-- jQuery includes -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
    
    <script src="js/jquery.jOrgChart.js"></script>

    <script>
    jQuery(document).ready(function() {
        $("#org").jOrgChart({
            chartElement : '#chart',
            dragAndDrop  : true
        });
    });
    </script>


    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <style>
        body {
            padding-top: 0px;
            font-family: "微軟正黑體";
            background-color: #f5f5f5;
            font-size: 18px;
        }
        .flg{
          width: 25px;margin: 0px 5px;"
        }
        .not{
          opacity: 0.3;
        }
        .allciv{

        }
        .gg{
          width: 45px;
        }
        .trm{
          font-size: 22px;
        }
#banner ul li {
  float: left;
  list-style-type: none;

}
#banner a::after {
  content: " · ";
  font-weight: bold;
  color: #373a3c;
}
.treetd{
    width: 10%;
    background: #ccc;
    font-weight: bold;
    border: 1px solid;
    text-align: right;
    padding: 5px;
}
.ult li{
  margin-left: 20px;
}
 @media only screen 
}
}
and (max-width: 480px), (min-device-width: 480px) 
and (max-device-width: 480px)  {
        .gg{
          width: 22px;
        }
        .trm{
          font-size: 16px;
        }
}
}

    </style>



<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("#list").hide();
  });
  $("#show").click(function(){
    $("#list").show();
  });
});
</script>

</head>

<body onload="prettyPrint();" style=" font-family: "微軟正黑體";">
<?php include("head.php"); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
  

    <div class="container">
        <!-- Example row of columns -->

<div class="row" style=" margin-top: 50px;">
  <div class="col-md-12">
<h1>拜占庭-科技樹</h1>
<div class="hrn1"></div>
</div>


  <?php include("tree.php"); ?>

<div class="hrn1"></div>
<div class="n1">

    <table class="table">
        <tr>
            <td class="trm" colspan="6" style="border-top: none;">
                <a href="Barracks.php"><img class="ng" src="img/Barracks-logo.jpg" alt=""></a>
                <div id="軍營"><a href="Barracks.php">軍營</a></div>
            </td>
        </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm dr"><a href="Dark_Age.php">黑暗時代</a></td>
            <td class="t19 trm"><img class="gg" src="img/MilitiaIcon.jpg" alt="">
                <div><a href="Militia.php">民兵</a></div>
                <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
        </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>

          <td class="t19 trm"><img class="gg"  src="img/ManAtArmsIcon.jpg" width="22" alt="">
            <div><a href="Man-at-Arms.php">裝甲步兵</a></div>
        <i class="fas fa-arrow-down"></i>
    </td>

          <td class="t19 trm "><img class="gg" src="img/SpearmanIcon.jpg" alt="">
            <div><a href="Spearman.php">長槍兵</a></div>
        <i class="fas fa-arrow-down"></i></td>
           <td class="t19 trm not"><img class="gg" src="img/EagleScoutIcon.jpg" alt="">
            <div><a href="Eagle_Scout.php">鷹斥侯</a></div>
        <i class="fas fa-arrow-down"></i></td>  
          <td class="t19 trm"><img class="gg"  src="img/Tracking.jpg" alt="">
            <div><a href="Tracking.php">追縱技術</a></div></td>
            <td class="t19 trm"></td>
         
        </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>
           <td class="t19 trm"><img class="gg" src="img/LongswordsManIcon.jpg" alt="">
            <div><a href="Long_Swordsman.php">長劍兵</a></div>
        <i class="fas fa-arrow-down"></i></td>
           <td class="t19 trm"><img class="gg" src="img/PikemanIcon.jpg" alt="">
            <div><a href="Pikeman.php">重裝長槍兵</a></div>
              <i class="fas fa-arrow-down"></i></td>
              <!--<i class="fas fa-times"></i>-->

           <td class="t19 trm not"><img class="gg"  src="img/EagleWarriorIcon.jpg" alt="">
            <div><a href="Eagle_Warrior.php">鷹勇士</a></div>
        <i class="fas fa-arrow-down"></i></td>
           <td class="t19 trm"><img class="gg"  src="img/Squires.jpg" alt="">
            <div><a href="Squires.php">護衛</a></div></td>
           <td class="t19 trm"><img class="gg"  src="img/Arson.jpg" alt="">
            <div><a href="Arson.php">縱火</a></div></td>
        </tr>
        <tr>
        <td style=" vertical-align: middle; " class="t5 trm im"><a href="Imperial_Age.php">帝王時代</a></td>
          <td class="t19 trm"><img class="gg" src="img/2HandedswordsmanIcon.jpg" alt=""><div><a href="Two-Handed_Swordsman.php">雙手劍兵</a></div>
            <i class="fas fa-arrow-down"></i>
            <br>
         <img class="gg" src="img/ChampionIcon.jpg" alt=""><div><a href="Champion.php">劍兵勇士</a></div></td>
          <td class="t19 trm"><img class="gg" src="img/HalberdierIcon.jpg" alt=""><div><a href="Halberdier.php">戟兵</a></div></td>
　　　　    <td class="t19 trm not"><img class="gg"  src="img/EliteEagleWarriorIcon.jpg" alt=""><div><a href="Eagle_Warrior.php">精銳鷹勇士</a></div></td>
　　　　　  <td class="t19 trm not"> <img class="gg"   src="img/CondottieroNewIcon.jpg" alt=""><div><a href="Condottiero.php">傭兵</a></div></td>      
<td class="t19 trm"></td>  
        </tr>
    </table>


        <table class="table" style="margin-top:50px;">
        <tr>
            <td class="trm" style="border-top: none;" colspan="7">
                <a href="Archery_Range.php"><img class="ng" src="img/Acheryrangeicon.png" alt=""></a>
                <div><a id="射箭場" href="Archery_Range.php">射箭場</a></div>
            </td>
        </tr>

        <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>
            <td class="t19 trm"><img class="gg" src="img/ArcherIcon.jpg">
                <div><a href="Archer.php">弓兵</a></div>
                <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm"><img class="gg" src="img/SkirmisherIcon.jpg"><div><a href="Skirmisher.php">矛兵</a></div>
                <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
        </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>
          <td class="t15 trm"><img class="gg" src="img/CrossbowmanIcon.jpg"><a href="Crossbowman.php">
            <div>弩兵</div></a><i class="fas fa-arrow-down"></i></td>
          <td class="t15 trm"><img class="gg" src="img/EliteSkirmisherIcon.jpg"><a href="Elite_Skirmisher.php"><div>戰矛兵</div></a><i class="fas fa-arrow-down"></i> </td>
          <td class="t15 trm"><img class="gg" src="img/CavalryArcherIcon.jpg"><a href="Cavalry_Archer.php"><div>馬弓騎兵</div></a><i class="fas fa-arrow-down"></i> </td>
          <td class="t15 trm not"><img class="gg" src="img/Slingericon.png"><a href="Slinger.php"><div>投石手</div></a></td>
          <td class="t15 trm not"><img class="gg" src="img/GenitourIcon.jpg"><a href="Genitour.php"><div>標槍騎兵</div></a> <i class="fas fa-arrow-down"></i></td>
          <td class="t15 trm"><img class="gg" src="img/Thumb_Ring.png"><a href="Thumb_Ring.php"><div>拇指環</div></a></td>
        </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm im"><a href="Imperial_Age.php">帝王時代</a></td>
          <td class="t15 trm"><img class="gg" src="img/ArbalestIcon.jpg"><a href="Arbalest.php"><div>強弩兵</div></a></td>
          <td class="t15 trm not"><img class="gg" src="img/Imperialskirmishericon.png"><a href="Imperial_Skirmisher.php"><div>帝王戰矛兵</div></a></td>
          <td class="t15 trm"><img class="gg" src="img/HeavyCavArcherIcon.jpg"><a href="Heavy_Cavalry_Archer.php"><div>重裝馬弓騎兵</div></a></td>
          <td class="t15 trm"><img class="gg" src="img/HandCannoneerIcon.jpg"><a href="Hand_Cannoneer.php"><div>火槍兵</div></a></td>
          <td class="t15 trm not"><img class="gg" src="img/GenitourIcon.jpg"><a href="Genitour.php"><div>精銳標槍騎兵</div></a></td>
          <td class="t15 trm not"><img class="gg" src="img/Parthian-Tactics.jpg"><a href="Parthian_Tactics.php"><div>帕提亞戰術</div></a></td>
        </tr>
    </table>


        <table class="table"  style="margin-top:50px;">
        <tr>
            <td class="trm" style="border-top: none;" colspan="6">
                <a href="Stable.php"><img class="ng" src="img/Stableicon.png" alt=""></a>
                <div><a id="馬廄" href="Stable.php">馬廄</a></div>
            </td>
        </tr>

        <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>
            <td class="t19 trm"><img class="gg" src="img/ScoutCavalryIcon.jpg">
                        <div><a href="Scout_Cavalry.php">斥候</a></div>
                        <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not"><img class="gg" src="img/Bloodlines.png" alt=""><div><a href="Bloodlines.php">品種</a></div></td>
           <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>


        </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>
          <td class="t19 trm"><img class="gg" src="img/LightCavalryIcon.jpg"><div><a href="Light_Cavalry.php">輕騎兵</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm"><img class="gg" src="img/KnightIcon.jpg"><div><a href="Knight.php">騎士</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm"><img class="gg" src="img/CamelIcon.jpg"><div><a href="Camel.php">駱駝騎兵</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm not"><img class="gg" src="img/Battleelephanticon.png"><div><a href="Battle_Elephant.php">矛象伕</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm"><img class="gg" src="img/Husbandry.jpg" alt=""><div><a href="Husbandry.php">畜牧培育</a></div></td>
        </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><a href="Imperial_Age.php">帝王時代</a></td>
          <td class="t19 trm"><img class="gg" src="img/HussarIcon.jpg"><div><a href="Hussar.php">匈牙利輕騎兵</a></div></td>
          <td class="t19 trm"><img class="gg" src="img/CavalierIcon.jpg"><div><a href="Cavalier.php">騎兵</a></div>
            <i class="fas fa-arrow-down"></i><br><img class="gg" src="img/PaladinIcon.jpg"><div><a href="Paladin.php" class="">遊俠</a></div></td>
          <td class="t19 trm"><img class="gg" src="img/HeavyCamelIcon.jpg"><div><a href="Heavy_Camel.php">重裝駱駝騎兵</a></div><i class="fas fa-arrow-down"></i><br><img class="gg not" src="img/ImperialCamelIcon.jpg"><div><a href="Imperial_Camel.php" class="not">帝王駱駝騎兵</a></div></td>
          <td class="t19 trm not"><img class="gg" src="img/Battleelephanticon.png"><div><a href="Elite_Battle_Elephant.php">精銳矛象伕</a></div></td>
          <td class="t19 trm"></td>
        </tr>
    </table>


         <table class="table" style="margin-top:50px;">
        <tr>
            <td class="trm" style="border-top: none;" colspan="5">
                <a href="Siege_Workshop.php"><img class="ng" src="img/Siegeworkshopicon.png" alt=""></a>
                <div id="攻城器製造所"><a href="Siege_Workshop.php">攻城器製造所</a></div>
            </td>
        </tr>

        <tr>
          <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>
 
           <td class="t23 trm"><img class="gg" src="img/BatteringRamIcon.jpg" width="30" alt=""><div><a href="Battering_Ram.php">衝撞車</a></div><i class="fas fa-arrow-down"></i>
          </td>
          <td class="t23 trm"><img class="gg" src="img/MangonelIcon.jpg" width="30" alt=""><div><a href="Mangonel.php">輕型投石車</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t23 trm"><img class="gg" src="img/ScorpionIcon.jpg" width="30" alt=""><div><a href="Scorpion.php">弩砲</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t23 trm"><img class="gg" src="img/Siegetowericon.png" width="30" alt=""><div><a href="Siege_Tower.php">攻城塔</a></div></td>    
 </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><a href="Imperial_Age.php">帝王時代</a></td>
           <td class="t23 trm"><img class="gg" src="img/CappedRamIcon.jpg" width="30" alt=""><div><a href="Capped_Ram.php">裝甲衝撞車</a></div><i class="fas fa-arrow-down"></i><br><img class="gg" src="img/SiegeRamIcon.jpg" width="30" alt=""><div><a href="Siege_Ram.php">重型衝撞車</a></div></td>
          <td class="t23 trm"><img class="gg" src="img/OnagerIcon.jpg" width="30" alt=""><div><a href="Onager.php">中型投石車</a></div><i class="fas fa-arrow-down"></i><br>
            <img class="gg not" src="img/SiegeOnagerIcon.jpg" width="30" alt=""><div><a href="Siege Onager.php" class="">重型投石車</a></div></td>
          <td class="t23 trm not"><img class="gg" src="img/HeavyScorpionIcon.jpg" width="30" alt=""><div><a href="Heavy_Scorpion.php">重型弩砲</a></div></td>    
          <td class="t23 trm"><img class="gg" src="img/BombardCannonIcon.jpg" width="30" alt=""><div><a href="Bombard_Cannon.php">火砲</a></div></td>     
        </tr>
    </table>


         <table class="table" style="margin-top:50px;">
        <tr>
            <td class="trm" style="border-top: none;" colspan="8">
                <a href="Castle.php"><img class="ng" src="img/Castleicon.png" alt=""></a>
                <div id="城堡"><a href="Castle.php">城堡</a></div>
            </td>
        </tr>

        <tr>
          <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>

         <td class="t13 trm">
          <img class="gg" src="img/CataphractIcon.jpg" width="30" alt=""><div><a href="Cataphract.php">聖騎兵</a></div>
          </td>
          <td class="t13 trm">
            <img class="gg" src="img/PetardIcon.jpg" width="30" alt=""><div><a href="Petard.php">爆炸桶</a></div>
          </td>
          <td class="t13 trm"><img class="gg" src="img/CastleAgeUnique.png" width="30" alt=""><div><a href="Greek_Fire.php">希臘之火</a></div></td>
          <td class="t13 trm"></td>
          <td class="t13 trm"></td>
          <td class="t13 trm"></td>
          <td class="t13 trm"></td>
          <td class="t13 trm"></td>


          
 
 </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><a href="Imperial_Age.php">帝王時代</a></td>
          <td class="t13 trm">
          <img class="gg" src="img/CataphractIcon.jpg" width="30" alt=""><div><a href="Cataphract.php">精銳聖騎兵</a></div>
          </td>
          <td class="t13 trm"><img class="gg" src="img/TrebuchetPackedIcon.jpg" width="30" alt=""><div><a href="Trebuchet.php">巨型投石機</a></div></td>
          <td class="t13 trm"><img class="gg" src="img/Unique-tech.jpg" width="30" alt=""><div><a href="Logistica.php">後勤學</a></div></td>
          <td class="t13 trm"><img class="gg" src="img/Hoardings.jpg" width="30" alt=""><div><a href="Hoardings.php">外架式柵樓</a></div></td>
          <td class="t13 trm not"><img class="gg" src="img/Sappers.jpg" width="30" alt=""><div><a href="Sappers.php">坑道工兵</a></div></td>
          <td class="t13 trm"><img class="gg" src="img/Conscription.jpg" width="30" alt=""><div><a href="Conscription.php">徵兵制度</a></div></td>
          <td class="t13 trm"><img class="gg" src="img/Spiestreason.jpg" width="30" alt=""><div><a href="Spies.php">間諜</a></div></td>
   
        </tr>
    </table>

 <table class="table" style="margin-top:50px;">
        <tr>
            <td class="trm" colspan="5" style="border-top: none;">
                <a href="Town_Center.php"><img class="ng" src="img/Towncentericon.png" alt=""></a>
                <div><a href="Town_Center.php">城鎮中心</a></div>
            </td>
        </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm dr"><a href="Dark_Age.php">黑暗時代</a></td>
     <td class="t23 trm"><img class="gg" src="img/VillagerMaleIcon.jpg" alt=""><div><a href="Villager.php">村民</a></div></td>

         <td class="t23 trm"><img class="gg" src="img/Feudal-age-reseach.jpg" alt=""><div><a href="Feudal_Age.php">封建時代</a></div>
                <i class="fas fa-arrow-down"></i>
            </td>
         <td class="t23 trm"><img class="gg" src="img/Loom.jpg" alt=""><div><a href="Loom.php">織布技術</a></div></td>
         <td class="t23 trm"></td>   
        </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>

           <td class="t23 trm"><img class="gg" src="img/Townwatch.jpg" alt=""><div><a href="Town_Watch.php">城鎮瞭望</a></div>  <i class="fas fa-arrow-down"></i></td>
           <td class="t23 trm"><img class="gg" src="img/Castle-age-reseach.jpg" alt=""><div><a href="Castle_Age.php">城堡時代</a></div>  <i class="fas fa-arrow-down"></i></td>
           <td class="t23 trm"><img class="gg" src="img/Wheelbarrow.jpg" alt=""><div><a href="Wheelbarrow.php">獨輪推車</a></div>  <i class="fas fa-arrow-down"></i></td>
           <td class="t23 trm"></td> 
         
        </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>
      
           <td class="t23 trm"><img class="gg" src="img/Townpatrol.jpg" alt=""><div><a href="Town_Patrol.php">城鎮巡邏</a></div></td>
           <td class="t23 trm"><img class="gg" src="img/Imperial-age-research.jpg" alt=""><div><a href="Imperial_Age.php">帝王時代</a></div></td>
           <td class="t23 trm"><img class="gg" src="img/Handcart.jpg" alt=""><div><a href="Hand_Cart.php">手推車</a></div></td>    
           <td class="t23 trm"></td> 
        </tr>

    </table>


       <table class="table" style="margin-top:50px;">
         <tr>
            <td class="trm" colspan="5" style="border-top: none;">
                <a href="Mill.php"><img class="ng" src="img/Millicon.png" alt=""></a>
                <div><a href="Mill.php">磨坊</a></div>
            </td>
        </tr>
 <tr>
     <td style=" vertical-align: middle; " class="t5 trm dr"><a href="Dark_Age.php">黑暗時代</a></td>
     <td class="t23 trm"><img class="gg" src="img/Farmicon.png" alt=""><div><a href="Farm.php">農田</a></div></td>
     <td class="t23 trm"></td>
     <td class="t23 trm"></td>
     <td class="t23 trm"></td> 
  </tr>
   <tr>
    <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>           
        
        <td class="t23 trm"><img class="gg" src="img/Horsecollar.jpg" alt=""><div><a href="Horse_Collar.php">馬軛</a></div><i class="fas fa-arrow-down"></i></td>
        <td class="t23 trm"></td>
        <td class="t23 trm"></td> 
        <td class="t23 trm"></td>
     </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>

         <td class="t23 trm"><img class="gg" src="img/Heavyplow.jpg" alt=""><div><a href="Heavy_Plow.php">重犁</a></div><i class="fas fa-arrow-down"></i></td>
         <td class="t23 trm"></td>
         <td class="t23 trm"></td> 
         <td class="t23 trm"></td>
        </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><a href="Imperial_Age.php">帝王時代</a></td>

            <td class="t23 trm"><img class="gg" src="img/Croprotation.jpg" alt=""><div><a href="Crop_Rotation.php">輪耕</a></div></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td> 
            <td class="t23 trm"></td>
        </tr>
    </table>




      <table class="table" style="margin-top:50px;">
         <tr>
            <td class="trm" colspan="5" style="border-top: none;">
                <a href="Mill.php"><img class="ng" src="img/Lumbercampicon.png" alt=""></a>
                <div><a href="Mill.php">伐木場</a></div>
            </td>
        </tr>

   <tr>
    <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>           
  
        <td class="t23 trm"><img class="gg" src="img/Doublebitaxe.jpg" alt=""><div><a href="Double-Bit_Axe.php">雙刃斧</a></div><i class="fas fa-arrow-down"></i></td>
        <td class="t23 trm"></td>
         <td class="t23 trm"></td>
         <td class="t23 trm"></td> 
     </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>
         
         <td class="t23 trm"><img class="gg" src="img/Bowsaw.jpg" alt=""><div><a href="Bow_Saw.php">弓鋸</a></div><i class="fas fa-arrow-down"></i></td>
         <td class="t23 trm"></td>
         <td class="t23 trm"></td>
         <td class="t23 trm"></td> 
        </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><a href="Imperial_Age.php">帝王時代</a></td>
           
            <td class="t23 trm"><img class="gg" src="img/Twomansaw.jpg" alt=""><div><a href="Two-Man_Saw.php">雙人鋸</a></div></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td> 
        </tr>
    </table>

           <table class="table" style="margin-top:50px;">
         <tr>
            <td class="trm" colspan="5" style="border-top: none;">
                <a href="Mining_Camp.php"><img class="ng" src="img/Miningcampicon.png" alt=""></a>
                <div><a href="Mining_Camp.php">採礦營地</a></div>
            </td>
        </tr>

   <tr>
    <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>           
  
        <td class="t23 trm"><img class="gg" src="img/Goldmining.jpg" alt=""><div><a href="Gold Mining.php">採金技術</a></div><i class="fas fa-arrow-down"></i></td>
        <td class="t23 trm"><img class="gg" src="img/Stonemining.jpg" alt=""><div><a href="Stone_Mining.php">採石技術</a></div><i class="fas fa-arrow-down"></i></td>
         <td class="t23 trm"></td>
         <td class="t23 trm"></td> 
     </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>
         
         <td class="t23 trm"><img class="gg" src="img/Goldshaftmining.jpg" alt=""><div><a href="Gold_Shaft_Mining.php">礦井採金</a></div></td>
         <td class="t23 trm"><img class="gg" src="img/Stone_Shaft_Mining.jpg" alt=""><div><a href="Stone_Shaft_Mining.phpp">礦井採石</a></div></td>
         <td class="t23 trm"></td>
         <td class="t23 trm"></td> 
        </tr>

    </table>


   <table class="table" style="margin-top:50px;">
         <tr>
            <td class="trm" colspan="10" style="border-top: none;">
                <a href="Dock.php"><img class="ng" src="img/Dockicon.png" alt=""></a>
                <div id="碼頭"><a href="Dock.php">碼頭</a></div>
            </td>
        </tr>
 <tr>
     <td style=" vertical-align: middle; " class="t5 trm dr"><a href="Dark_Age.php">黑暗時代</a></td>
          <td class="t10 trm"><img class="gg" src="img/FishingShipIcon.jpg"><div><a href="Fishing_Ship.php">漁船</a></div></td>
          <td class="t10 trm"><img class="gg" src="img/TransportShipIcon.jpg"><div><a href="Transport_Ship.php">運輸船</a></div></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
  </tr>
   <tr>
    <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>           
        
        <td class="t10 trm"><img class="gg" src="img/FireGalleyIcon.jpg"><div><a href="Fire_Galley.php">火蒙衝</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t10 trm"><img class="gg" src="img/DemoRaftIcon.jpg"><div><a href="Demolition_Raft.php">自爆筏</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t10 trm"><img class="gg" src="img/Galley.jpg"><div><a href="Galley.php">戰船</a></div><i class="fas fa-arrow-down"></i></td>
           <td class="t10 trm"><img class="gg" src="img/TradeCogIcon.jpg"><div><a href="Trade_Cog.php">貿易商旅</a></div></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"></td>
          <td class="t10 trm"><img class="gg" src="img/Fishtrapicon.png"><div><a href="Fish_Trap.php">漁網</a></div></td>
         
     </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm ca"><a href="Castle_Age.php">城堡時代</a></td>

         <td class="t10 trm"><img class="gg" src="img/FireShipIcon.jpg"><div><a href="Fire_Ship.php">火戰船</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t10 trm"><img class="gg" src="img/DemoShipIcon.jpg"><div><a href="Demolition_Ship.php">神風船</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t10 trm"><img class="gg" src="img/WarGalley.jpg"><div><a href="War_Galley.php">弩炮戰船</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t10 trm not"><img class="gg" src="img/LongboatIcon.jpg"><div><a href="LongBoat.php">維京大戰船</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t10 trm not"><img class="gg" src="img/TurtleShipIcon.jpg"><div><a href="Turtle_Ship.php">龜甲船</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t10 trm not"><img class="gg" src="img/CaravelIcon2.jpg"><div><a href="Caravel.php">卡拉維爾戰船</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t10 trm"><img class="gg" style="margin: 2px;" src="img/Gillnetsicon.jpg" alt=""><div><a href="Gillnets.php">流刺網</a></div></td> 
          <td class="t10 trm"><img class="gg" style="margin: 2px;" src="img/Careening.jpg" alt=""><div><a href="Careening.php">傾側維修術</a></div><i class="fas fa-arrow-down"></i></td>

          <td class="t10 trm"></td>
          <td class="t10 trm"></td> 
        </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><a href="Imperial_Age.php">帝王時代</a></td>

            <td class="t10 trm"><img class="gg" src="img/FastFireShipIcon.jpg"><div><a href="Fast_Fire_Ship.php">快速火戰船</a></div></td>
            <td class="t10 trm"><img class="gg" src="img/HeavyDemoShipIcon.jpg"><div><a href="Heavy_Demolition_Ship.php">重型神風船</a></div></td>
            <td class="t10 trm"><img class="gg" src="img/GalleonAoE2.jpg"><div><a href="Galleon.php">重型弩炮戰船</a></div></td>
          


          <td class="t10 trm not"><img class="gg" src="img/LongboatIcon.jpg"><div><a href="LongBoat.php">精銳維京大戰船</a></div></td>
          <td class="t10 trm not"><img class="gg" src="img/TurtleShipIcon.jpg"><div><a href="Turtle_Ship.php">精銳龜甲船</a></div></td>
          <td class="t10 trm not"><img class="gg" src="img/CaravelIcon2.jpg"><div><a href="Caravel.php">精銳卡拉維爾戰船</a></div></td>
          <td class="t10 trm"><img class="gg" src="img/CannonGalleonIcon.jpg"><div><a href="Cannon_Galleon.php">火炮戰船</a></div><i class="fas fa-arrow-down"></i><br><img class="gg" src="img/CannonGalleonIcon.jpg"><div><a href="Elite_Cannon_Galleon.php" class="">精銳火炮戰船</a></div></td>
           <td class="t10 trm"><img class="gg" style="margin: 2px;" src="img/Drydock.jpg" alt=""><div><a href="Dry_Dock.php">旱碼頭</a></div></td>

         
          <td class="t10 trm"><img class="gg" style="margin: 2px;" src="img/Shipwright.jpg" alt=""><div><a href="Shipwright.php">造船匠</a></div></td>
        </tr>
    </table>


          <table class="table" style="margin-top:50px;">
         <tr>
            <td class="trm" colspan="6" style="border-top: none;">
                <a href="Blacksmith.php"><img class="ng" src="img/Blacksmithicon.png" alt=""></a>
                <div id="兵工廠"><a href="Blacksmith.php">兵工廠</a></div>
            </td>
        </tr>
   <tr>
    <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>           
        
       
          <td class="t19 trm"><img class="gg" src="img/Paddedarcherarmor.jpg" alt=""><div><a href="Padded_Archer_Armor.php">弓兵布甲</a></div></td>
          <td class="t19 trm"><img class="gg" src="img/Fletching.jpg" alt=""><div><a href="Fletching.php">箭羽</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm"><img class="gg" src="img/Forging.jpg" alt=""><div><a href="Forging.php">鍛造</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm "><img class="gg" src="img/Scalebardingarmor.jpg" alt=""><div><a href="Scale_Barding_Armor.php">騎兵鱗甲</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm"><img class="gg" src="img/Scalemailarmor.jpg" alt=""><div><a href="Scale Mail Armor.php">步兵鱗甲</a></div><i class="fas fa-arrow-down"></i></td>
     </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca"><div><a href="Castle_Age.php">城堡時代</a></div></td>

          <td class="t19 trm"><img class="gg" src="img/Leatherarcherarmor.jpg" alt=""><div><a href="Leather_Archer_Armor.php">弓兵皮甲</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm"><img class="gg" src="img/Bodkinarrow.jpg" alt=""><div><a href="Bodkin_Arrow.php">錐狀箭頭</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm"><img class="gg" src="img/Ironcasting.jpg" alt=""><div><a href="Iron_Casting.php">鑄造</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm "><img class="gg" src="img/Chainbardingarmor.jpg" alt=""><div><a href="Chain_Barding_Armor.php">騎兵鎖甲</a></div><i class="fas fa-arrow-down"></i></td>
          <td class="t19 trm"><img class="gg" src="img/Chainmailarmor.jpg" alt=""><div><a href="Chain Mail Armor.php">步兵鎖甲</a></div><i class="fas fa-arrow-down"></i></td>
        </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><div><a href="Imperial_Age.php">帝王時代</a></div></td>
          <td class="t19 trm"><img class="gg" src="img/Ringarcherarmor.jpg" alt=""><div><a href="Ring_Archer_Armor.php">弓兵環甲</a></div></td>
          <td class="t19 trm"><img class="gg" src="img/Bracer.jpg" alt=""><div><a href="Bracer.php">護腕</a></div></td>
          <td class="t19 trm not"><img class="gg" src="img/Blastfurnace.jpg" alt=""><div><a href="Blast_Furnace.php">鐵風爐</a></div></td>
          <td class="t19 trm"><img class="gg" src="img/Platebardingarmor.jpg" alt=""><div><a href="Plate_Barding_Armor.php">騎兵板甲</a></div></td>
          <td class="t19 trm"><img class="gg" src="img/Platemailarmor.jpg" alt=""><div><a href="Plate Mail Armor.php">步兵板甲</a></div></td>
        </tr>
    </table>

            <table class="table" style="margin-top:50px;">
                 <tr>
            <td class="trm" colspan="5" style="border-top: none;">
                <a href="Market.php"><img class="ng" src="img/Marketicon.png" alt=""></a>
                <div id="市集"><a href="Market.php">市集</a></div>
            </td>
        </tr>
   <tr>
    <td style=" vertical-align: middle; " class="t5 trm fe"><a href="Feudal_Age.php">封建時代</a></td>           
        
       
         <td class="t23 trm"><img class="gg" src="img/Cartography.jpg"><div><a href="Cartographyavailable.php">製圖學</a></div><i class="fas fa-arrow-down"></i></td>
         <td class="t23 trm"><img class="gg" src="img/TradeCartIcon.jpg"><div><a href="Tradecartavailable.php">貿易車隊</a></div></td>  
        <td class="t23 trm"></td>
          <td class="t23 trm"></td> 
     </tr>
        <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca"><div><a href="Castle_Age.php">城堡時代</a></div></td>

         <td class="t23 trm"><img class="gg" src="img/CaravanII.png"><div><a href="Caravanavailable.php">大商隊</a></div></td>
         <td class="t23 trm"><img class="gg" src="img/Coinage.jpg"><div><a href="Coinageavailable.php">鑄幣術</a></div><i class="fas fa-arrow-down"></i></td>
         <td class="t23 trm"></td> 
         <td class="t23 trm"></td>
        </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><div><a href="Imperial_Age.php">帝王時代</a></div></td>

            <td class="t23 trm"><img class="gg" src="img/Guilds.jpg"><div><a href="Guildsavailable.php">行會制度</a></div></td>
            <td class="t23 trm"><img class="gg" src="img/Banking.jpg"><div><a href="Bankingavailable.php">銀行制度</a></div></td>
            <td class="t23 trm"></td> 
            <td class="t23 trm"></td>
        </tr>
    </table>



        <table class="table" style="margin-top:50px;">
                 <tr>
            <td class="trm" colspan="9" style="border-top: none;">
                <a href="Monastery.php"><img class="ng" src="img/Monasteryicon.png" alt=""></a>
                <div id="修道院"><a href="Monastery.php">修道院</a></div>
            </td>
        </tr>

        <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca"><div><a href="Castle_Age.php">城堡時代</a></div></td>

         <td class="t11 trm"><img class="gg" src="img/MonkIcon.jpg" width="30" alt=""><div><a href="Monk.php">僧侶</a></div></td>
         <td class="t11 trm not"><img class="gg" src="img/MissionaryIcon.jpg" width="30" alt=""><div><a href="Missionary.php">傳教士</a></div></td>
         <td class="t11 trm"><img class="gg" src="img/Redemption.jpg" width="30" alt=""><div><a href="Redemption.php">信仰救贖</a></div></td> 
         <td class="t11 trm"><img class="gg" src="img/Atonement.jpg" width="30" alt=""><div><a href="Atonement.php">贖罪</a></div></td>
         <td class="t11 trm not"><img class="gg" src="img/Herbalmedicine.png" width="30" alt=""><div><a href="Herbal_Medicine.php">草藥學</a></div></td>
         <td class="t11 trm"><img class="gg" src="img/Heresy.png" width="30" alt=""><div><a href="Heresy.php">異端邪說</a></div></td>
         <td class="t11 trm"><img class="gg" src="img/Sanctity.jpg" width="30" alt=""><div><a href="Sanctity.php">聖潔虔誠</a></div></td>
         <td class="t11 trm"><img class="gg" src="img/Fervor.jpg" width="30" alt=""><div><a href="Fervor.php">宗教狂熱</a></div></td>
        </tr>
        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><div><a href="Imperial_Age.php">帝王時代</a></div></td>

            <td class="t11 trm"><img class="gg" src="img/Faith.jpg" width="30" alt=""><div><a href="Faith.php">忠誠信仰</a></div></td>
           <td class="t11 trm"><img class="gg" src="img/Illumination.jpg" width="30" alt=""><div><a href="Illumination.php">啟發教化</a></div></td>
            <td class="t11 trm"><img class="gg" src="img/Blockprinting.jpg" width="30" alt=""><div><a href="Block_Printing.php">雕版印刷術</a></div></td> 
            <td class="t11 trm"><img class="gg" src="img/Theocracy.png" width="30" alt=""><div><a href="Theocracy.php">神權統治</a></div></td>
            <td class="t11 trm"></td>
            <td class="t11 trm"></td>
            <td class="t11 trm"></td>
            <td class="t11 trm"></td>
        </tr>
    </table>


    <table class="table" style="margin-top:50px;">
                 <tr>
            <td class="trm" colspan="9" style="border-top: none;">
                <a href="University.php"><img class="ng" src="img/Universityicon.png" alt=""></a>
                <div id="學院"><a href="University.php">學院</a></div>
            </td>
        </tr>

        <tr>
         <td style=" vertical-align: middle; " class="t5 trm ca"><div><a href="Castle_Age.php">城堡時代</a></div></td>
         <td class="t11 trm  not"><img class="gg" src="img/Masonry.jpg" alt=""><div><a href="Masonry.php">磚瓦技術</a></div><i class="fas fa-arrow-down"></i></td>
         <td class="t11 trm"><img class="gg" src="img/Fortified-wall-research.jpg" alt=""><div><a href="Fortified Wall.php">垛牆</a></div></td>
         <td class="t11 trm"><img class="gg" src="img/Ballistics.jpg" alt=""><div><a href="Ballistics.php">彈道學</a></div></td>
         <td class="t11 trm"><img class="gg" src="img/Guard-tower-research.jpg" alt=""><div><a href="Guard Tower.php">防禦箭塔</a></div><i class="fas fa-arrow-down"></i></td>
         <td class="t11 trm not"><img class="gg" src="img/Heatedshot.png" alt=""><div><a href="Heated Shot.php">預熱射擊</a></div></td>
         <td class="t11 trm"><img class="gg" src="img/Murderholes.jpg" alt=""><div><a href="Murder Holes.php">垛孔</a></div></td>
        <td class="t11 trm not"><img class="gg" src="img/Treadmillcrane.jpg" alt=""><div><a href="Treadmill Crane.php">滑輪起重機</a></div></td>
         <td class="t11 trm"></td>

        <tr>
          <td style=" vertical-align: middle; " class="t5 trm im"><div><a href="Imperial_Age.php">帝王時代</a></div></td>
        <td class="t11 trm not"><img class="gg" src="img/Architecture.jpg" alt=""><div><a href="Architecture.php">建築學</a></div></td>
        <td class="t11 trm"><img class="gg" src="img/Chemistry.jpg" alt=""><div><a href="Chemistry.php">化學</a></div><i class="fas fa-arrow-down"></i><br><img class="gg" src="img/Bombard-tower-research.jpg" alt=""><div><a href="Bombard_Tower.php" class="not">火砲塔</a></div></td>
        <td class="t11 trm not"><img class="gg" src="img/Siegeengineers.jpg" alt=""><div><a href="Siege_Engineers.php">攻城工程師</a></div></td>
        <td class="t11 trm"> <img class="gg" src="img/Keep-research.jpg" alt=""><div><a href="Keep.php">大型箭塔</a></div></td>
        <td class="t11 trm"><img class="gg" src="img/Arrowlits.jpg" alt=""><div><a href="Arrowslits.php">箭狹槽</a></div></td>
        <td class="t11 trm"></td>
        <td class="t11 trm"></td>
        <td class="t11 trm"></td>
        </tr>
    </table>

</div>
  </div>
</div>


    </div>
    <!-- /container -->





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>