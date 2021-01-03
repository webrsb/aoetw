<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>阿茲特克-科技樹</h1>
        <div class="hrn1"></div>
      </div>
      <tree />
      <div class="hrn1"></div>
      <div class="n1">
        <table class="table">
          <tr>
            <td class="trm" colspan="6" style="border-top: none;">
              <nuxt-link to="/building/Barracks"
                ><img class="oh" src="~assets/barracks.png" alt=""
              /></nuxt-link>
              <div id="軍營">
                <nuxt-link to="/building/Barracks">軍營</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm dr">
              <img class="ef" src="~assets/dark_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/MilitiaIcon.png" alt="" />
              <div><nuxt-link to="/units/Militia">民兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/ManAtArmsIcon.png" alt="" />
              <div><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link></div>
              <i class="fas fa-arrow-down:center"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/SpearmanIcon.png" alt="" />
              <div><nuxt-link to="/units/Spearman">長槍兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/EagleScoutIcon.png" alt="" />
              <div><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/Suplliesicon.png" alt="" />
              <div><nuxt-link to="/techs/Supplies">供給</nuxt-link></div>
            </td>
            <td class="t19 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/LongswordsManIcon.png" alt="" />
              <div>
                <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/PikemanIcon.png" alt="" />
              <div><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <!--<i class="fas fa-times"></i>-->
            <td class="t19 trm">
              <img class="ef" src="~assets/EagleWarriorIcon.png" alt="" />
              <div><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/squires.png" alt="" />
              <div><nuxt-link to="/techs/Squires">護衛技術</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/Arson.png" alt="" />
              <div><nuxt-link to="/techs/Arson">縱火</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/2HandedswordsmanIcon.png" alt="" />
              <div>
                <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i><br />
              <img class="ef" src="~assets/ChampionIcon.png" alt="" />
              <div><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link></div>
            </td>
            <td class="t19 trm not">
              <img class="ef" src="~assets/HalberdierIcon.png" alt="" />
              <div><nuxt-link to="/units/Halberdier">戟兵</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/EliteEagleWarriorIcon.png" alt="" />
              <div>
                <nuxt-link to="/units/Elite_Eagle_Warrior"
                  >精銳鷹勇士</nuxt-link
                >
              </div>
            </td>
            <td class="t19 trm not">
              <img class="ef" src="~assets/CondottieroIcon.png" alt="" />
              <div><nuxt-link to="/units/Condottiero">傭兵</nuxt-link></div>
            </td>
            <td class="t19 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="7">
              <nuxt-link to="/building/Archery_Range"
                ><img class="oh" src="~assets/archery_range.png" alt=""
              /></nuxt-link>
              <div>
                <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/ArcherIcon.png" />
              <div><nuxt-link to="/units/Archer">弓兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="ef" src="~assets/SkirmisherIcon.png" />
              <div><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
            <td class="t15 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t15 trm">
              <img class="ef" src="~assets/CrossbowmanIcon.png" /><nuxt-link
                to="/units/Crossbowman"
              >
                <div>
                  <nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>
                </div></nuxt-link
              >
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="ef" src="~assets/EliteSkirmisherIcon.png" /><nuxt-link
                to="/units/Elite_Skirmisher"
              >
                <div>
                  <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                </div></nuxt-link
              >
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm not">
              <img class="ef" src="~assets/CavalryArcherIcon.png" /><nuxt-link
                to="/units/Cavalry_Archer"
              >
                <div>
                  <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>
                </div></nuxt-link
              >
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm not">
              <img class="ef" src="~assets/Slingericon.png" /><nuxt-link
                to="/units/Slinger"
              >
                <div>
                  <nuxt-link to="/units/Slinger">投石手</nuxt-link>
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm not">
              <img class="ef" src="~assets/GenitourIcon.png" /><nuxt-link
                to="/units/Genitour"
              >
                <div>
                  <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>
                </div></nuxt-link
              >
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm not">
              <img class="ef" src="~assets/Thumb_Ring.png" /><nuxt-link
                to="/techs/Thumb_Ring"
              >
                <div>
                  <nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>
                </div></nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t15 trm">
              <img class="ef" src="~assets/ArbalestIcon.png" /><nuxt-link
                to="/units/Arbalester"
              >
                <div>
                  <nuxt-link to="/units/Arbalester">強弩兵</nuxt-link>
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm not">
              <img
                class="ef"
                src="~assets/Imperialskirmishericon.png"
              /><nuxt-link to="/units/Imperial_Skirmisher">
                <div>
                  <nuxt-link to="/units/Imperial_Skirmisher"
                    >帝王戰矛兵</nuxt-link
                  >
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm not">
              <img class="ef" src="~assets/HeavyCavArcherIcon.png" /><nuxt-link
                to="/units/Heavy_Cavalry_Archer"
              >
                <div>
                  <nuxt-link to="/units/Heavy_Cavalry_Archer"
                    >重裝馬弓騎兵</nuxt-link
                  >
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm not">
              <img class="ef" src="~assets/HandCannoneerIcon.png" /><nuxt-link
                to="/units/Hand_Cannoneer"
              >
                <div>
                  <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm not">
              <img class="ef" src="~assets/GenitourIcon.png" /><nuxt-link
                to="/units/Genitour"
              >
                <div>
                  <nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link>
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm not">
              <img class="ef" src="~assets/parthian_tactics.png" /><nuxt-link
                to="/techs/Parthian_Tactics"
              >
                <div>
                  <nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link>
                </div></nuxt-link
              >
            </td>
          </tr>
        </table>

        <table class="table not" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="6">
              <nuxt-link to="/building/Stable"
                ><img class="oh" src="~assets/stable.png" alt=""
              /></nuxt-link>
              <div id="馬廄">
                <nuxt-link to="/building/Stable">馬廄</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/ScoutCavalryIcon.png" />
              <div><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/Bloodlines.png" alt="" />
              <div><nuxt-link to="/techs/Bloodlines">品種</nuxt-link></div>
            </td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/LightCavalryIcon.png" />
              <div><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/KnightIcon.png" />
              <div><nuxt-link to="/units/Knight">騎士</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/CamelIcon.png" />
              <div><nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/Battleelephanticon.png" />
              <div>
                <nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img width="85" height="85" src="~assets/Steppelancericon.png" />
              <div>
                <nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/husbandry.png" alt="" />
              <div><nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/HussarIcon.png" />
              <div><nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/CavalierIcon.png" />
              <div><nuxt-link to="/units/Cavalier">騎兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i><br />
              <img class="ef" src="~assets/PaladinIcon.png" />
              <div><nuxt-link to="/units/Paladin">遊俠</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/HeavyCamelIcon.png" />
              <div>
                <nuxt-link to="/units/Heavy_Camel_Rider">重裝駱駝騎兵</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i><br />
              <img class="ef" src="~assets/ImperialCamelIcon.png" />
              <div>
                <nuxt-link to="/units/Imperial_Camel_Rider">帝王駱駝騎兵</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/EliteBattleElephantIcon.png" />
              <div>
                <nuxt-link to="/units/Elite_Battle_Elephant"
                  >精銳矛象伕</nuxt-link
                >
              </div>
            </td>
            <td class="t19 trm">
              <img
                width="85"
                height="85"
                src="~assets/Elitesteppelancericon.png"
              />
              <div>
                <nuxt-link to="/units/Elite_Steppe_Lancer"
                  >精銳草原騎兵</nuxt-link
                >
              </div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="5">
              <nuxt-link to="/building/Siege_Workshop"
                ><img class="oh" src="~assets/siege_workshop.png" alt=""
              /></nuxt-link>
              <div id="攻城器製造所">
                <nuxt-link to="/building/Siege_Workshop"
                  >攻城器製造所</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/BatteringRamIcon.png" alt="" />
              <div><nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/MangonelIcon.png" alt="" />
              <div><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/ScorpionIcon.png" alt="" />
              <div><nuxt-link to="/units/Scorpion">弩砲</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/Siegetowericon.png" alt="" />
              <div><nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/CappedRamIcon.png" alt="" />
              <div>
                <nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i><br />
              <img class="ef" src="~assets/SiegeRamIcon.png" alt="" />
              <div><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/OnagerIcon.png" alt="" />
              <div><nuxt-link to="/units/Onager">中型投石車</nuxt-link></div>
              <i class="fas fa-arrow-down"></i><br />

              <img class="ef" src="~assets/SiegeOnagerIcon.png" alt="" />
              <div>
                <nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
              </div>
            </td>
            <td class="t23 trm not">
              <img class="ef" src="~assets/HeavyScorpionIcon.png" alt="" />
              <div>
                <nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
              </div>
            </td>
            <td class="t23 trm not">
              <img class="ef" src="~assets/BombardCannonIcon.png" alt="" />
              <div><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="8">
              <nuxt-link to="/building/Castle"
                ><img class="oh" src="~assets/castle.png" alt=""
              /></nuxt-link>
              <div id="城堡">
                <nuxt-link to="/building/Castle">城堡</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/JaguarWarriorIcon.png" alt="" />
              <div>
                <nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/PetardIcon.png" alt="" />
              <div><nuxt-link to="/units/Petard">炸藥桶</nuxt-link></div>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/unique_tech.png" alt="" />
              <div><nuxt-link to="/techs/Atlatl">擲矛器</nuxt-link></div>
            </td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/JaguarWarriorIcon.png" alt="" />
              <div>
                <nuxt-link to="/units/Jaguar_Warrior">精銳豹勇士</nuxt-link>
              </div>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/TrebuchetPackedIcon.png" alt="" />
              <div><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link></div>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/unique_tech_imperial.png" alt="" />
              <div>
                <nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link>
              </div>
            </td>
            <td class="t13 trm not">
              <img class="ef" src="~assets/hoardings.png" alt="" />
              <div><nuxt-link to="/techs/Hoardings">圍牆</nuxt-link></div>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/sappers.png" alt="" />
              <div><nuxt-link to="/techs/Sappers">兵工學</nuxt-link></div>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/conscription.png" alt="" />
              <div>
                <nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>
              </div>
            </td>
            <td class="t13 trm">
              <img class="ef" src="~assets/spies_treason.png" alt="" />
              <div><nuxt-link to="/techs/Spies">間諜</nuxt-link></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <nuxt-link to="/building/Town_Center"
                ><img class="oh" src="~assets/town_center.png" alt=""
              /></nuxt-link>
              <div>
                <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm dr">
              <img class="ef" src="~assets/dark_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/VillagerMaleIcon.png" alt="" />
              <div><nuxt-link to="/units/Villager">村民</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/loom.png" alt="" />
              <div><nuxt-link to="/techs/Loom">織布技術</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/tower_watch.png" alt="" />
              <div><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/wheelbarrow.png" alt="" />
              <div><nuxt-link to="/techs/Wheelbarrow">輪軸技術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/town_patrol.png" alt="" />
              <div><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/hand_cart.png" alt="" />
              <div><nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <nuxt-link to="/building/Mill"
                ><img class="oh" src="~assets/mill.png" alt=""
              /></nuxt-link>
              <div><nuxt-link to="/building/Mill">磨坊</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm dr">
              <img class="ef" src="~assets/dark_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/farm.png" alt="" />
              <div><nuxt-link to="/building/Farm">農田</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/horse_collar.png" alt="" />
              <div>
                <nuxt-link to="/techs/Horse_Collar">獸耕技術</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/heavy_plow.png" alt="" />
              <div><nuxt-link to="/techs/Heavy_Plow">重型耕犁</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/crop_rotation.png" alt="" />
              <div>
                <nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link>
              </div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <nuxt-link to="/building/Lumber_Camp"
                ><img class="oh" src="~assets/lumber_camp.png" alt=""
              /></nuxt-link>
              <div>
                <nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/double-bit_axe.png" alt="" />
              <div>
                <nuxt-link to="/techs/Double-Bit_Axe">雙面斧</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/bow_saw.png" alt="" />
              <div><nuxt-link to="/techs/Bow_Saw">弓形鋸</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm not">
              <img class="ef" src="~assets/two-man_saw.png" alt="" />
              <div><nuxt-link to="/techs/Two-Man_Saw">雙人鋸</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <nuxt-link to="/building/Mining_Camp"
                ><img class="oh" src="~assets/mining_camp.png" alt=""
              /></nuxt-link>
              <div>
                <nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/gold_mining.png" alt="" />
              <div><nuxt-link to="/techs/Gold_Mining">採金技術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/stone_mining.png" alt="" />
              <div>
                <nuxt-link to="/techs/Stone_Mining">採石技術</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/gold_shaft_mining.png" alt="" />
              <div>
                <nuxt-link to="/techs/Gold_Shaft_Mining">採金裝置</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/stone_shaft_mining.png" alt="" />
              <div>
                <nuxt-link to="/techs/Stone_Shaft_Mining">採石裝置</nuxt-link>
              </div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="10" style="border-top: none;">
              <nuxt-link to="/building/Dock"
                ><img class="ef" src="~assets/dock.png" alt=""
              /></nuxt-link>
              <div id="碼頭">
                <nuxt-link to="/building/Dock">碼頭</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm dr">
              <img class="ef" src="~assets/dark_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
              </div>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/FishingShipIcon.png" />
              <div><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link></div>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/TransportShipIcon.png" />
              <div>
                <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>
              </div>
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
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/FireGalleyIcon.png" />
              <div><nuxt-link to="/units/Fire_Galley">火艨艟</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/DemoRaftIcon.png" />
              <div>
                <nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/Galley.png" />
              <div><nuxt-link to="/units/Galley">戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/TradeCogIcon.png" />
              <div><nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link></div>
            </td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm">
              <img class="ef" src="~assets/fish_trap.png" />
              <div><nuxt-link to="/building/Fish_Trap">漁網</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/FireShipIcon.png" />
              <div><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/DemoShipIcon.png" />
              <div>
                <nuxt-link to="/units/Demolition_Ship">爆破船</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/WarGalley.png" />
              <div><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/LongboatIcon.png" />
              <div><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/TurtleShipIcon.png" />
              <div><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/CaravelIcon.png" />
              <div><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img
                class="ef"
                style="margin: 2px;"
                src="~assets/gillnets.png"
                alt=""
              />
              <div><nuxt-link to="/techs/Gillnets">流刺網</nuxt-link></div>
            </td>
            <td class="t10 trm">
              <img
                class="ef"
                style="margin: 2px;"
                src="~assets/careening.png"
                alt=""
              />
              <div><nuxt-link to="/techs/Careening">航海技術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t10 trm">
              <img class="ef" src="~assets/FastFireShipIcon.png" />
              <div>
                <nuxt-link to="/units/Fast_Fire_Ship">重型火戰船</nuxt-link>
              </div>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/HeavyDemoShipIcon.png" />
              <div>
                <nuxt-link to="/units/Heavy_Demolition_Ship"
                  >重型爆破船</nuxt-link
                >
              </div>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/GalleonAoE2.png" />
              <div><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link></div>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/LongboatIcon.png" />
              <div>
                <nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link>
              </div>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/TurtleShipIcon.png" />
              <div>
                <nuxt-link to="/units/Turtle_Ship">精銳龜甲船</nuxt-link>
              </div>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/CaravelIcon.png" />
              <div>
                <nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link>
              </div>
            </td>
            <td class="t10 trm not">
              <img class="ef" src="~assets/CannonGalleonIcon.png" />
              <div>
                <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i><br />
              <img class="ef" src="~assets/EliteCannonGalleonicon.png" />
              <div>
                <nuxt-link to="/units/Elite_Cannon_Galleon"
                  >精銳火砲戰船</nuxt-link
                >
              </div>
            </td>
            <td class="t10 trm">
              <img
                class="ef"
                style="margin: 2px;"
                src="~assets/dry_dock.png"
                alt=""
              />
              <div><nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link></div>
            </td>
            <td class="t10 trm">
              <img
                class="ef"
                style="margin: 2px;"
                src="~assets/shipwright.png"
                alt=""
              />
              <div><nuxt-link to="/techs/Shipwright">造船員</nuxt-link></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="6" style="border-top: none;">
              <nuxt-link to="/building/Blacksmith"
                ><img class="oh" src="~assets/blacksmith.png" alt=""
              /></nuxt-link>
              <div id="兵工廠">
                <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/padded_archer_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Padded_Archer_Armor">弓兵護甲</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/fletching.png" alt="" />
              <div><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/forging.png" alt="" />
              <div><nuxt-link to="/techs/Forging">鍛造技術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="ef" src="~assets/scale_barding_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Scale_Barding_Armor">鱗鎧甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/scale_mail_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/leather_archer_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/bodkin_arrow.png" alt="" />
              <div><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/iron_casting.png" alt="" />
              <div>
                <nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="ef" src="~assets/chain_barding_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Chain_Barding_Armor">鏈鎧甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/chain_mail_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Chain_Mail_Armor">步兵鏈甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm not">
              <img class="ef" src="~assets/ring_archer_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/Bracer.png" alt="" />
              <div><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/blast_furnace.png" alt="" />
              <div><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link></div>
            </td>
            <td class="t19 trm not">
              <img class="ef" src="~assets/scale_barding_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="ef" src="~assets/plate_mail_armor.png" alt="" />
              <div>
                <nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link>
              </div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <nuxt-link to="/building/Market"
                ><img class="oh" src="~assets/market.png" alt=""
              /></nuxt-link>
              <div id="市集">
                <nuxt-link to="/building/Market">市集</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <img class="ef" src="~assets/feudal_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/cartography.png" />
              <div><nuxt-link to="/techs/Cartography">製圖學</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/TradeCartIcon.png" />
              <div><nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/caravan.png" />
              <div><nuxt-link to="/techs/Caravan">商隊</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/coinage.png" />
              <div><nuxt-link to="/techs/Coinage">鑄幣術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm not">
              <img class="ef" src="~assets/guilds.png" />
              <div><nuxt-link to="/techs/Guilds">公會制度</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="ef" src="~assets/banking.png" />
              <div><nuxt-link to="/techs/Banking">銀行制度</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="9" style="border-top: none;">
              <nuxt-link to="/building/Monastery"
                ><img class="oh" src="~assets/monastery.png" alt=""
              /></nuxt-link>
              <div id="修道院">
                <nuxt-link to="/building/Monastery">修道院</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/MonkIcon.png" alt="" />
              <div><nuxt-link to="/units/Monk">僧侶</nuxt-link></div>
            </td>
            <td class="t11 trm not">
              <img class="ef" src="~assets/MissionaryIcon.png" alt="" />
              <div><nuxt-link to="/units/Missionary">傳教士</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/redemption.png" alt="" />
              <div><nuxt-link to="/techs/Redemption">神聖思想</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/atonement.png" alt="" />
              <div><nuxt-link to="/techs/Atonement">救贖思想</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/Herbalmedicine.png" alt="" />
              <div>
                <nuxt-link to="/techs/Herbal_Medicine">草藥治療</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/Heresy.png" alt="" />
              <div><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/sanctity.png" alt="" />
              <div><nuxt-link to="/techs/Sanctity">聖潔虔誠</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/fervor.png" alt="" />
              <div><nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/faith.png" alt="" />
              <div><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/illumination.png" alt="" />
              <div>
                <nuxt-link to="/techs/Illumination">啟示思想</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/block_printing.png" alt="" />
              <div>
                <nuxt-link to="/techs/Block_Printing">印刷技術</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/Theocracy.png" alt="" />
              <div><nuxt-link to="/techs/Theocracy">神權統治</nuxt-link></div>
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
              <nuxt-link to="/building/University"
                ><img class="oh" src="~assets/university.png" alt=""
              /></nuxt-link>
              <div id="學院">
                <nuxt-link to="/building/University">學院</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <img class="ef" src="~assets/castle_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t11 trm not">
              <img class="ef" src="~assets/masonry.png" alt="" />
              <div><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/fortified_wall.png" alt="" />
              <div>
                <nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/ballistics.png" alt="" />
              <div><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/guard_tower.png" alt="" />
              <div>
                <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/heated_shot.png" alt="" />
              <div><nuxt-link to="/techs/Heated_Shot">火箭</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/murder_holes.png" alt="" />
              <div><nuxt-link to="/techs/Murder_Holes">近射孔</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/treadmill_crane.png" alt="" />
              <div>
                <nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link>
              </div>
            </td>
            <td class="t11 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <img class="ef" src="~assets/imperial_age.png" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t11 trm not">
              <img class="ef" src="~assets/architecture.png" alt="" />
              <div><nuxt-link to="/techs/Architecture">建築學</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/chemistry.png" alt="" />
              <div><nuxt-link to="/techs/Chemistry">化學</nuxt-link></div>
              <i class="fas fa-arrow-down"></i><br />
              <div class="not">
                <img class="ef" src="~assets/bombard_tower.png" alt="" />
                <div>
                  <nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
                </div>
              </div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/siege_engineers.png" alt="" />
              <div>
                <nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>
              </div>
            </td>
            <td class="t11 trm not">
              <img class="ef" src="~assets/keep.png" alt="" />
              <div><nuxt-link to="/building/Keep">大型箭塔</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="ef" src="~assets/arrowslits.png" alt="" />
              <div><nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link></div>
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
  components: { tree }
}
</script>
<style></style>
