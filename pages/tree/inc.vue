<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>印加-科技樹</h1>
        <div class="hrn1"></div>
      </div>
      <tree />
      <div class="hrn1"></div>
      <div class="n1">
        <table class="table">
          <tr>
            <td class="trm" colspan="6" style="border-top: none;">
              <a href="/building/Barracks"
                ><img class="ng" src="~assets/Barracks-logo.jpg" alt=""
              /></a>
              <div id="軍營"><a href="/building/Barracks">軍營</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm dr">
              <a href="/techsage/Dark_Age">黑暗時代</a>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/MilitiaIcon.jpg" alt="" />
              <div><a href="/units/Militia">民兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t19 trm">
              <img
                class="gg"
                src="~assets/ManAtArmsIcon.jpg"
                width="22"
                alt=""
              />
              <div><a href="/units/Man-at-Arms">裝甲步兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm ">
              <img class="gg" src="~assets/SpearmanIcon.jpg" alt="" />
              <div><a href="/units/Spearman">長槍兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm ">
              <img class="gg" src="~assets/EagleScoutIcon.jpg" alt="" />
              <div><a href="/units/Eagle_Scout">鷹斥侯</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Tracking.jpg" alt="" />
              <div><a href="/techs/Tracking">追縱技術</a></div>
            </td>
            <td class="t19 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/LongswordsManIcon.jpg" alt="" />
              <div><a href="/units/Long_Swordsman">長劍兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/PikemanIcon.jpg" alt="" />
              <div><a href="/units/Pikeman">重裝長槍兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <!--<i class="fas fa-times"></i>-->
            <td class="t19 trm ">
              <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt="" />
              <div><a href="/units/Eagle_Warrior">鷹勇士</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Squires.jpg" alt="" />
              <div><a href="/techs/Squires">護衛</a></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Arson.jpg" alt="" />
              <div><a href="/techs/Arson">縱火</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/2HandedswordsmanIcon.jpg" alt="" />
              <div><a href="/units/Two-Handed_Swordsman">雙手劍兵</a></div>
              <i class="fas fa-arrow-down"></i>
              <br />
              <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
              <div><a href="/units/Champion">劍兵勇士</a></div>
            </td>
            <td class="t19 trm ">
              <img class="gg" src="~assets/HalberdierIcon.jpg" alt="" />
              <div><a href="/units/Halberdier">戟兵</a></div>
            </td>
            <td class="t19 trm ">
              <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt="" />
              <div><a href="/units/Eagle_Warrior">精銳鷹勇士</a></div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt="" />
              <div><a href="/units/Condottiero">傭兵</a></div>
            </td>
            <td class="t19 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="7">
              <a href="/building/Archery_Range"
                ><img class="ng" src="~assets/Acheryrangeicon.png" alt=""
              /></a>
              <div>
                <a id="射箭場" href="/building/Archery_Range">射箭場</a>
              </div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/ArcherIcon.jpg" />
              <div><a href="/units/Archer">弓兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/SkirmisherIcon.jpg" />
              <div><a href="/units/Skirmisher">矛兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/CrossbowmanIcon.jpg" /><a
                href="/units/Crossbowman"
              >
                <div>弩兵</div></a
              ><i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/EliteSkirmisherIcon.jpg" /><a
                href="/units/Elite_Skirmisher"
                ><div>戰矛兵</div></a
              ><i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/CavalryArcherIcon.jpg" /><a
                href="/Cavalry_units/Archer"
                ><div>馬弓騎兵</div></a
              ><i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm ">
              <img class="gg" src="~assets/Slingericon.png" /><a
                href="/units/Slinger"
                ><div>投石手</div></a
              >
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/GenitourIcon.jpg" /><a
                href="/units/Genitour"
                ><div>標槍騎兵</div></a
              >
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/Thumb_Ring.png" /><a
                href="/techs/Thumb_Ring"
                ><div>拇指環</div></a
              >
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/ArbalestIcon.jpg" /><a
                href="/units/Arbalest"
                ><div>強弩兵</div></a
              >
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/Imperialskirmishericon.png" /><a
                href="/units/Imperial_Skirmisher"
                ><div>帝王戰矛兵</div></a
              >
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/HeavyCavArcherIcon.jpg" /><a
                href="/Heavy_Cavalry_units/Archer"
                ><div>重裝馬弓騎兵</div></a
              >
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/HandCannoneerIcon.jpg" /><a
                href="/units/Hand_Cannoneer"
                ><div>火槍兵</div></a
              >
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/GenitourIcon.jpg" /><a
                href="/units/Genitour"
                ><div>精銳標槍騎兵</div></a
              >
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/Parthian-Tactics.jpg" /><a
                href="/techs/Parthian_Tactics"
                ><div>帕提亞戰術</div></a
              >
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm not" style="border-top: none;" colspan="6">
              <a href="/building/Stable"
                ><img class="ng" src="~assets/Stableicon.png" alt=""
              /></a>
              <div><a id="馬廄" href="/building/Stable">馬廄</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/ScoutCavalryIcon.jpg" />
              <div><a href="/units/Scout_Cavalry">斥候</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Bloodlines.png" alt="" />
              <div><a href="/techs/Bloodlines">品種</a></div>
            </td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/LightCavalryIcon.jpg" />
              <div><a href="/units/Light_Cavalry">輕騎兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/KnightIcon.jpg" />
              <div><a href="/units/Knight">騎士</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/CamelIcon.jpg" />
              <div><a href="/units/Camel">駱駝騎兵</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Battleelephanticon.png" />
              <div><a href="/units/Battle_Elephant">矛象伕</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Husbandry.jpg" alt="" />
              <div><a href="/techs/Husbandry">畜牧培育</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
            <td class="t19 trm  not">
              <img class="gg" src="~assets/HussarIcon.jpg" />
              <div><a href="/Hustree/sar">匈牙利輕騎兵</a></div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/CavalierIcon.jpg" />
              <div><a href="/units/Cavalier">騎兵</a></div>
              <i class="fas fa-arrow-down"></i>
              <br />
              <img class="gg not" src="~assets/PaladinIcon.jpg" />
              <div><a href="/units/Paladin" class="not">遊俠</a></div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/HeavyCamelIcon.jpg" />
              <div><a href="/Heavy_units/Camel">重裝駱駝騎兵</a></div>
              <i class="fas fa-arrow-down"></i>
              <br />
              <img class="gg not" src="~assets/ImperialCamelIcon.jpg" />
              <div>
                <a href="/Imperial_units/Camel" class="not">帝王駱駝騎兵</a>
              </div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Battleelephanticon.png" />
              <div><a href="/Elite_units/Battle_Elephant">精銳矛象伕</a></div>
            </td>
            <td class="t19 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="5">
              <a href="/building/Siege_Workshop"
                ><img class="ng" src="~assets/Siegeworkshopicon.png" alt=""
              /></a>
              <div id="攻城器製造所">
                <a href="/building/Siege_Workshop">攻城器製造所</a>
              </div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/BatteringRamIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Battering_Ram">衝撞車</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/MangonelIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Mangonel">輕型投石車</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/ScorpionIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Scorpion">弩砲</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/Siegetowericon.png"
                width="30"
                alt=""
              />
              <div><a href="/units/Siege_Tower">攻城塔</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/CappedRamIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Capped_Ram">裝甲衝撞車</a></div>
              <i class="fas fa-arrow-down"></i>
              <br />
              <img
                class="gg"
                src="~assets/SiegeRamIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Siege_Ram">重型衝撞車</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/OnagerIcon.jpg" width="30" alt="" />
              <div><a href="/units/Onager">中型投石車</a></div>
              <i class="fas fa-arrow-down"></i>
              <br />
              <img
                class="gg not"
                src="~assets/SiegeOnagerIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/Siege_units/Onager" class="">重型投石車</a></div>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/HeavyScorpionIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Heavy_Scorpion">重型弩砲</a></div>
            </td>
            <td class="t23 trm not">
              <img
                class="gg"
                src="~assets/BombardCannonIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Bombard_Cannon">火砲</a></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="8">
              <a href="/building/Castle"
                ><img class="ng" src="~assets/Castleicon.png" alt=""
              /></a>
              <div id="城堡"><a href="/building/Castle">城堡</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t13 trm">
              <img class="gg" src="~assets/Kamayukicon.png" width="30" alt="" />
              <div><a href="/units/Kamayuk">槍隊長</a></div>
            </td>
            <td class="t13 trm">
              <img class="gg" src="~assets/PetardIcon.jpg" width="30" alt="" />
              <div><a href="/units/Petard">爆炸桶</a></div>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              />
              <div><a href="/techs/Andean_Sling">安地斯彈弓</a></div>
            </td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
            <td class="t13 trm">
              <img class="gg" src="~assets/Kamayukicon.png" width="30" alt="" />
              <div><a href="/units/Kamayuk">精銳槍隊長</a></div>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/TrebuchetPackedIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Trebuchet">巨型投石機</a></div>
            </td>
            <td class="t13 trm">
              <img class="gg" src="~assets/Unique-tech.jpg" width="30" alt="" />
              <div><a href="/techs/Couriers">信使</a></div>
            </td>
            <td class="t13 trm ">
              <img class="gg" src="~assets/Hoardings.jpg" width="30" alt="" />
              <div><a href="/techs/Hoardings">外架式柵樓</a></div>
            </td>
            <td class="t13 trm">
              <img class="gg" src="~assets/Sappers.jpg" width="30" alt="" />
              <div><a href="/techs/Sappers">坑道工兵</a></div>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/Conscription.jpg"
                width="30"
                alt=""
              />
              <div><a href="/techs/Conscription">徵兵制度</a></div>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/Spiestreason.jpg"
                width="30"
                alt=""
              />
              <div><a href="/techs/Spies">間諜</a></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <a href="/building/Town_Center"
                ><img class="ng" src="~assets/Towncentericon.png" alt=""
              /></a>
              <div><a href="/building/Town_Center">城鎮中心</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm dr">
              <a href="/techsage/Dark_Age">黑暗時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/VillagerMaleIcon.jpg" alt="" />
              <div><a href="/units/Villager">村民</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Feudal-age-reseach.jpg" alt="" />
              <div><a href="/techsage/Feudal_Age">封建時代</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Loom.jpg" alt="" />
              <div><a href="/techs/Loom">織布技術</a></div>
            </td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Townwatch.jpg" alt="" />
              <div><a href="/techs/Town_Watch">城鎮瞭望</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Castle-age-reseach.jpg" alt="" />
              <div><a href="/techsage/Castle_Age">城堡時代</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Wheelbarrow.jpg" alt="" />
              <div><a href="/techs/Wheelbarrow">獨輪推車</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Townpatrol.jpg" alt="" />
              <div><a href="/techs/Town_Patrol">城鎮巡邏</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Imperial-age-research.jpg" alt="" />
              <div><a href="/techsage/Imperial_Age">帝王時代</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Handcart.jpg" alt="" />
              <div><a href="/Hand_Cart.php">手推車</a></div>
            </td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <a href="/building/Mill"
                ><img class="ng" src="~assets/Millicon.png" alt=""
              /></a>
              <div><a href="/building/Mill">磨坊</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm dr">
              <a href="/techsage/Dark_Age">黑暗時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Farmicon.png" alt="" />
              <div><a href="/building/Farm">農田</a></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Horsecollar.jpg" alt="" />
              <div><a href="/techs/Horse_Collar">馬軛</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Heavyplow.jpg" alt="" />
              <div><a href="/techs/Heavy_Plow">重犁</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Croprotation.jpg" alt="" />
              <div><a href="/techs/Crop_Rotation">輪耕</a></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <a href="/building/Mill"
                ><img class="ng" src="~assets/Lumbercampicon.png" alt=""
              /></a>
              <div><a href="/building/Lumber_Camp">伐木場</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Doublebitaxe.jpg" alt="" />
              <div><a href="/techs/Double-Bit_Axe">雙刃斧</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Bowsaw.jpg" alt="" />
              <div><a href="/techs/Bow_Saw">弓鋸</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
            <td class="t23 trm not">
              <img class="gg" src="~assets/Twomansaw.jpg" alt="" />
              <div><a href="/techs/Two-Man_Saw">雙人鋸</a></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <a href="/building/Mining_Camp"
                ><img class="ng" src="~assets/Miningcampicon.png" alt=""
              /></a>
              <div><a href="/building/Mining_Camp">採礦營地</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Goldmining.jpg" alt="" />
              <div><a href="/techs/Gold_Mining">採金技術</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Stonemining.jpg" alt="" />
              <div><a href="/techs/Stone_Mining">採石技術</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Goldshaftmining.jpg" alt="" />
              <div><a href="/techs/Gold_Shaft_Mining">礦井採金</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Stone_Shaft_Mining.jpg" alt="" />
              <div><a href="/techs/Stone_Shaft_Mining">礦井採石</a></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="10" style="border-top: none;">
              <a href="/building/Dock"
                ><img class="ng" src="~assets/Dockicon.png" alt=""
              /></a>
              <div id="碼頭"><a href="/building/Dock">碼頭</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm dr">
              <a href="/techsage/Dark_Age">黑暗時代</a>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/FishingShipIcon.jpg" />
              <div><a href="/units/Fishing_Ship">漁船</a></div>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/TransportShipIcon.jpg" />
              <div><a href="/units/Transport_Ship">運輸船</a></div>
            </td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/FireGalleyIcon.jpg" />
              <div><a href="/units/Fire_Galley">火蒙衝</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/DemoRaftIcon.jpg" />
              <div><a href="/units/Demolition_Raft">自爆筏</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/Galley.jpg" />
              <div><a href="/units/Galley">戰船</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/TradeCogIcon.jpg" />
              <div><a href="/units/Trade_Cog">貿易商旅</a></div>
            </td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm">
              <img class="gg" src="~assets/Fishtrapicon.png" />
              <div><a href="/building/Fish_Trap">漁網</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <a href="/techsage/Castle_Age">城堡時代</a>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/FireShipIcon.jpg" />
              <div><a href="/units/Fire_Ship">火戰船</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/DemoShipIcon.jpg" />
              <div><a href="/units/Demolition_Ship">神風船</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/WarGalley.jpg" />
              <div><a href="/War_units/Galley">弩炮戰船</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/LongboatIcon.jpg" />
              <div><a href="/units/Longboat">維京大戰船</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/TurtleShipIcon.jpg" />
              <div><a href="/units/Turtle_Ship">龜甲船</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/CaravelIcon2.jpg" />
              <div><a href="/units/Caravel">卡拉維爾戰船</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Gillnetsicon.jpg"
                alt=""
              />
              <div><a href="/techs/Gillnets">流刺網</a></div>
            </td>
            <td class="t10 trm">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Careening.jpg"
                alt=""
              />
              <div><a href="/techs/Careening">傾側維修術</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <a href="/techsage/Imperial_Age">帝王時代</a>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/FastFireShipIcon.jpg" />
              <div><a href="/units/Fast_Fire_Ship">快速火戰船</a></div>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/HeavyDemoShipIcon.jpg" />
              <div><a href="/Heavy_units/Demolition_Ship">重型神風船</a></div>
            </td>
            <td class="t10 trm ">
              <img class="gg" src="~assets/GalleonAoE2.jpg" />
              <div><a href="/units/Galleon">重型弩炮戰船</a></div>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/LongboatIcon.jpg" />
              <div><a href="/units/Longboat">精銳維京大戰船</a></div>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/TurtleShipIcon.jpg" />
              <div><a href="/units/Turtle_Ship">精銳龜甲船</a></div>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/CaravelIcon2.jpg" />
              <div><a href="/units/Caravel">精銳卡拉維爾戰船</a></div>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/CannonGalleonIcon.jpg" />
              <div><a href="/units/Cannon_Galleon">火炮戰船</a></div>
              <i class="fas fa-arrow-down"></i>
              <br />
              <img class="gg not" src="~assets/CannonGalleonIcon.jpg" />
              <div>
                <a href="/Elite_units/Cannon_Galleon" class="not"
                  >精銳火炮戰船</a
                >
              </div>
            </td>
            <td class="t10 trm">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Drydock.jpg"
                alt=""
              />
              <div><a href="/Dry_building/Dock">旱碼頭</a></div>
            </td>
            <td class="t10 trm">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Shipwright.jpg"
                alt=""
              />
              <div><a href="/techs/Shipwright">造船匠</a></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="6" style="border-top: none;">
              <a href="/building/Blacksmith"
                ><img class="ng" src="~assets/Blacksmithicon.png" alt=""
              /></a>
              <div id="兵工廠"><a href="/building/Blacksmith">兵工廠</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Paddedarcherarmor.jpg" alt="" />
              <div><a href="/techs/Padded_Archer_Armor">弓兵布甲</a></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Fletching.jpg" alt="" />
              <div><a href="/techs/Fletching">箭羽</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Forging.jpg" alt="" />
              <div><a href="/techs/Forging">鍛造</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Scalebardingarmor.jpg" alt="" />
              <div><a href="/techs/Scale_Barding_Armor">騎兵鱗甲</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Scalemailarmor.jpg" alt="" />
              <div><a href="/techs/Scale_Mail_Armor">步兵鱗甲</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <div><a href="/techsage/Castle_Age">城堡時代</a></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Leatherarcherarmor.jpg" alt="" />
              <div><a href="/techs/Leather_Archer_Armor">弓兵皮甲</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Bodkinarrow.jpg" alt="" />
              <div><a href="/techs/Bodkin_Arrow">錐狀箭頭</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Ironcasting.jpg" alt="" />
              <div><a href="/techs/Iron_Casting">鑄造</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Chainbardingarmor.jpg" alt="" />
              <div><a href="/techs/Chain_Barding_Armor">騎兵鎖甲</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Chainmailarmor.jpg" alt="" />
              <div><a href="/techs/Chain_Mail_Armor">步兵鎖甲</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <div><a href="/techsage/Imperial_Age">帝王時代</a></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Ringarcherarmor.jpg" alt="" />
              <div><a href="/techs/Ring_Archer_Armor">弓兵環甲</a></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Bracer.jpg" alt="" />
              <div><a href="/techs/Bracer">護腕</a></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Blastfurnace.jpg" alt="" />
              <div><a href="/techs/Blast_Furnace">鐵風爐</a></div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Platebardingarmor.jpg" alt="" />
              <div><a href="/techs/Plate_Barding_Armor">騎兵板甲</a></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Platemailarmor.jpg" alt="" />
              <div><a href="/techs/Plate_Mail_Armor">步兵板甲</a></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <a href="/building/Market"
                ><img class="ng" src="~assets/Marketicon.png" alt=""
              /></a>
              <div id="市集"><a href="/building/Market">市集</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm fe">
              <a href="/techsage/Feudal_Age">封建時代</a>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Cartography.jpg" />
              <div><a href="/techs/Cartography">製圖學</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/TradeCartIcon.jpg" />
              <div><a href="/units/Trade_Cart">貿易車隊</a></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <div><a href="/techsage/Castle_Age">城堡時代</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/CaravanII.png" />
              <div><a href="/techs/Caravan">大商隊</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Coinage.jpg" />
              <div><a href="/techs/Coinage">鑄幣術</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <div><a href="/techsage/Imperial_Age">帝王時代</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Guilds.jpg" />
              <div><a href="/techs/Guilds">行會制度</a></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Banking.jpg" />
              <div><a href="/techs/Banking">銀行制度</a></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="9" style="border-top: none;">
              <a href="/building/Monastery"
                ><img class="ng" src="~assets/Monasteryicon.png" alt=""
              /></a>
              <div id="修道院"><a href="/building/Monastery">修道院</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <div><a href="/techsage/Castle_Age">城堡時代</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/MonkIcon2.jpg" width="30" alt="" />
              <div><a href="/units/Monk">僧侶</a></div>
            </td>
            <td class="t11 trm not">
              <img
                class="gg"
                src="~assets/MissionaryIcon.jpg"
                width="30"
                alt=""
              />
              <div><a href="/units/Missionary">傳教士</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Redemption.jpg" width="30" alt="" />
              <div><a href="/techs/Redemption">信仰救贖</a></div>
            </td>
            <td class="t11 trm not">
              <img class="gg" src="~assets/Atonement.jpg" width="30" alt="" />
              <div><a href="/techs/Atonement">贖罪</a></div>
            </td>
            <td class="t11 trm">
              <img
                class="gg"
                src="~assets/Herbalmedicine.png"
                width="30"
                alt=""
              />
              <div><a href="/techs/Herbal_Medicine">草藥學</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Heresy.png" width="30" alt="" />
              <div><a href="/techs/Heresy">異端邪說</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Sanctity.jpg" width="30" alt="" />
              <div><a href="/techs/Sanctity">聖潔虔誠</a></div>
            </td>
            <td class="t11 trm not">
              <img class="gg" src="~assets/Fervor.jpg" width="30" alt="" />
              <div><a href="/techs/Fervor">宗教狂熱</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <div><a href="/techsage/Imperial_Age">帝王時代</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Faith.jpg" width="30" alt="" />
              <div><a href="/techs/Faith">忠誠信仰</a></div>
            </td>
            <td class="t11 trm">
              <img
                class="gg"
                src="~assets/Illumination.jpg"
                width="30"
                alt=""
              />
              <div><a href="/techs/Illumination not">啟發教化</a></div>
            </td>
            <td class="t11 trm">
              <img
                class="gg"
                src="~assets/Blockprinting.jpg"
                width="30"
                alt=""
              />
              <div><a href="/techs/Block_Printing">雕版印刷術</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Theocracy.png" width="30" alt="" />
              <div><a href="/techs/Theocracy">神權統治</a></div>
            </td>
            <td class="t11 trm"></td>
            <td class="t11 trm"></td>
            <td class="t11 trm"></td>
            <td class="t11 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="9" style="border-top: none;">
              <a href="/building/University"
                ><img class="ng" src="~assets/Universityicon.png" alt=""
              /></a>
              <div id="學院"><a href="/building/University">學院</a></div>
            </td>
          </tr>
          <tr>
            <td style=" vertical-align: middle; " class="t5 trm ca">
              <div><a href="/techsage/Castle_Age">城堡時代</a></div>
            </td>
            <td class="t11 trm ">
              <img class="gg" src="~assets/Masonry.jpg" alt="" />
              <div><a href="/techs/Masonry">磚瓦技術</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t11 trm">
              <img
                class="gg"
                src="~assets/Fortified-wall-research.jpg"
                alt=""
              />
              <div><a href="/building/Fortified_Wall">垛牆</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Ballistics.jpg" alt="" />
              <div><a href="/techs/Ballistics">彈道學</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Guard-tower-research.jpg" alt="" />
              <div><a href="/units/Guard_Tower">防禦箭塔</a></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Heatedshot.png" alt="" />
              <div><a href="/techs/Heated_Shot">預熱射擊</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Murderholes.jpg" alt="" />
              <div><a href="/techs/Murder_Holes">垛孔</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Treadmillcrane.jpg" alt="" />
              <div><a href="/techs/Treadmill_Crane">滑輪起重機</a></div>
            </td>
            <td class="t11 trm"></td>
          </tr>

          <tr>
            <td style=" vertical-align: middle; " class="t5 trm im">
              <div><a href="/techsage/Imperial_Age">帝王時代</a></div>
            </td>
            <td class="t11 trm not">
              <img class="gg" src="~assets/Architecture.jpg" alt="" />
              <div><a href="/techs/Architecture">建築學</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Chemistry.jpg" alt="" />
              <div><a href="/techs/Chemistry">化學</a></div>
              <i class="fas fa-arrow-down"></i>
              <br />
              <img
                class="gg not"
                src="~assets/Bombard-tower-research.jpg"
                alt=""
              />
              <div>
                <a href="/building/Bombard_Tower" class="not">火砲塔</a>
              </div>
            </td>
            <td class="t11 trm ">
              <img class="gg" src="~assets/Siegeengineers.jpg" alt="" />
              <div><a href="/techs/Siege_Engineers">攻城工程師</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Keep-research.jpg" alt="" />
              <div><a href="/units/Keep">大型箭塔</a></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Arrowlits.jpg" alt="" />
              <div><a href="/techs/Arrowslits">箭狹槽</a></div>
            </td>
            <td class="t11 trm"></td>
            <td class="t11 trm"></td>
            <td class="t11 trm"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
import tree from '~/components/alltree'
export default {
  layout: 'tree',
  components: {
    tree
  }
}
</script>
<style></style>
