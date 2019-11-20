<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>柏柏-科技樹</h1>
        <div class="hrn1"></div>
      </div>
      <tree />
      <div class="hrn1"></div>
      <div class="n1">
        <table class="table">
          <tr>
            <td class="trm" colspan="6" style="border-top: none;">
              <nuxt-link to="/building/Barracks"
                ><img class="ng" src="~assets/Barracks-logo.jpg" alt=""
              /></nuxt-link>
              <div id="軍營">
                <nuxt-link to="/building/Barracks">軍營</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm dr">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/MilitiaIcon.jpg" alt="" />
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
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img
                class="gg"
                src="~assets/ManAtArmsIcon.jpg"
                width="22"
                alt=""
              />
              <div><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/SpearmanIcon.jpg" alt="" />
              <div><nuxt-link to="/units/Spearman">長槍兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/EagleScoutIcon.jpg" alt="" />
              <div><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Suplliesicon.png" alt="" />
              <div><nuxt-link to="/techs/Supplies">供給</nuxt-link></div>
            </td>
            <td class="t19 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/LongswordsManIcon.jpg" alt="" />
              <div>
                <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/PikemanIcon.jpg" alt="" />
              <div><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <!--<i class="fas fa-times"></i>-->
            <td class="t19 trm not">
              <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt="" />
              <div><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Squires.jpg" alt="" />
              <div><nuxt-link to="/techs/Squires">護衛</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Arson.jpg" alt="" />
              <div><nuxt-link to="/techs/Arson">縱火</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/2HandedswordsmanIcon.jpg" alt="" />
              <div>
                <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i><br />
              <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
              <div><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link></div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/HalberdierIcon.jpg" alt="" />
              <div><nuxt-link to="/units/Halberdier">戟兵</nuxt-link></div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt="" />
              <div>
                <nuxt-link to="/units/Elite_Eagle_Warrior"
                  >精銳鷹勇士</nuxt-link
                >
              </div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt="" />
              <div><nuxt-link to="/units/Condottiero">傭兵</nuxt-link></div>
            </td>
            <td class="t19 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="7">
              <nuxt-link to="/building/Archery_Range"
                ><img class="ng" src="~assets/Acheryrangeicon.png" alt=""
              /></nuxt-link>
              <div>
                <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/ArcherIcon.jpg" />
              <div><nuxt-link to="/units/Archer">弓兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/SkirmisherIcon.jpg" />
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
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/CrossbowmanIcon.jpg" /><nuxt-link
                to="/units/Crossbowman"
              >
                <div>
                  <nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>
                </div></nuxt-link
              ><i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/EliteSkirmisherIcon.jpg" /><nuxt-link
                to="/units/Elite_Skirmisher"
                ><div>
                  <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                </div></nuxt-link
              ><i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/CavalryArcherIcon.jpg" /><nuxt-link
                to="/units/Cavalry_Archer"
                ><div>
                  <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>
                </div></nuxt-link
              ><i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/Slingericon.png" /><nuxt-link
                to="/units/Slinger"
                ><div>
                  <nuxt-link to="/units/Slinger">投石手</nuxt-link>
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/GenitourIcon.jpg" /><nuxt-link
                to="/units/Genitour"
                ><div>
                  <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>
                </div></nuxt-link
              >
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/Thumb_Ring.png" /><nuxt-link
                to="/techs/Thumb_Ring"
                ><div>
                  <nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>
                </div></nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/ArbalestIcon.jpg" /><nuxt-link
                to="/units/Arbalest"
                ><div>
                  <nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm not">
              <img
                class="gg"
                src="~assets/Imperialskirmishericon.png"
              /><nuxt-link to="/units/Imperial_Skirmisher"
                ><div>
                  <nuxt-link to="/units/Imperial_Skirmisher"
                    >帝王戰矛兵</nuxt-link
                  >
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/HeavyCavArcherIcon.jpg" /><nuxt-link
                to="/units/Heavy_Cavalry_Archer"
                ><div>
                  <nuxt-link to="/units/Heavy_Cavalry_Archer"
                    >重裝馬弓騎兵</nuxt-link
                  >
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/HandCannoneerIcon.jpg" /><nuxt-link
                to="/units/Hand_Cannoneer"
                ><div>
                  <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm">
              <img class="gg" src="~assets/GenitourIcon.jpg" /><nuxt-link
                to="/units/Genitour"
                ><div>
                  <nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link>
                </div></nuxt-link
              >
            </td>
            <td class="t15 trm not">
              <img class="gg" src="~assets/Parthian-Tactics.jpg" /><nuxt-link
                to="/techs/Parthian_Tactics"
                ><div>
                  <nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>
                </div></nuxt-link
              >
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="6">
              <nuxt-link to="/building/Stable"
                ><img class="ng" src="~assets/Stableicon.png" alt=""
              /></nuxt-link>
              <div><nuxt-link to="/building/Stable">馬廄</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/ScoutCavalryIcon.jpg" />
              <div><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Bloodlines.png" alt="" />
              <div><nuxt-link to="/techs/Bloodlines">品種</nuxt-link></div>
            </td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
            <td class="t19 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/LightCavalryIcon.jpg" />
              <div><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/KnightIcon.jpg" />
              <div><nuxt-link to="/units/Knight">騎士</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/CamelIcon.jpg" />
              <div><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Battleelephanticon.png" />
              <div>
                <nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Husbandry.jpg" alt="" />
              <div><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/HussarIcon.jpg" />
              <div><nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/CavalierIcon.jpg" />
              <div><nuxt-link to="/units/Cavalier">騎兵</nuxt-link></div>
              <i class="fas fa-arrow-down"></i><br /><img
                class="gg not"
                src="~assets/PaladinIcon.jpg"
              />
              <div><nuxt-link to="/units/Paladin">遊俠</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/HeavyCamelIcon.jpg" />
              <div>
                <nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i><br /><img
                class="gg not"
                src="~assets/ImperialCamelIcon.jpg"
              />
              <div>
                <nuxt-link to="/units/Imperial_Camel" class="not"
                  >帝王駱駝騎兵</nuxt-link
                >
              </div>
            </td>
            <td class="t19 trm not">
              <img class="gg" src="~assets/Battleelephanticon.png" />
              <div>
                <nuxt-link to="/units/Elite_Battle_Elephant"
                  >精銳矛象伕</nuxt-link
                >
              </div>
            </td>
            <td class="t19 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="5">
              <nuxt-link to="/building/Siege_Workshop"
                ><img class="ng" src="~assets/Siegeworkshopicon.png" alt=""
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
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/BatteringRamIcon.jpg"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/MangonelIcon.jpg"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/ScorpionIcon.jpg"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/units/Scorpion">弩砲</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/Siegetowericon.png"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/CappedRamIcon.jpg"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i><br /><img
                class="gg not"
                src="~assets/SiegeRamIcon.jpg"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/OnagerIcon.jpg" width="30" alt="" />
              <div><nuxt-link to="/units/Onager">中型投石車</nuxt-link></div>
              <i class="fas fa-arrow-down"></i><br />
              <img
                class="gg not"
                src="~assets/SiegeOnagerIcon.jpg"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/HeavyScorpionIcon.jpg"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img
                class="gg"
                src="~assets/BombardCannonIcon.jpg"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" style="border-top: none;" colspan="8">
              <nuxt-link to="/building/Castle"
                ><img class="ng" src="~assets/Castleicon.png" alt=""
              /></nuxt-link>
              <div id="城堡">
                <nuxt-link to="/building/Castle">城堡</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/CamelArcherIcon.jpg"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>
              </div>
            </td>
            <td class="t13 trm">
              <img class="gg" src="~assets/PetardIcon.jpg" width="30" alt="" />
              <div><nuxt-link to="/units/Petard">爆炸桶</nuxt-link></div>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link></div>
            </td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
            <td class="t13 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/CamelArcherIcon.jpg"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/units/Camel_Archer">精銳駱駝弓騎兵</nuxt-link>
              </div>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/TrebuchetPackedIcon.jpg"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link></div>
            </td>
            <td class="t13 trm">
              <img class="gg" src="~assets/Unique-tech.jpg" width="30" alt="" />
              <div>
                <nuxt-link to="/techs/Maghrabi_Camels">馬格拉比駱駝</nuxt-link>
              </div>
            </td>
            <td class="t13 trm">
              <img class="gg" src="~assets/Hoardings.jpg" width="30" alt="" />
              <div><nuxt-link to="/techs/Hoardings">外架式柵樓</nuxt-link></div>
            </td>
            <td class="t13 trm not">
              <img class="gg" src="~assets/Sappers.jpg" width="30" alt="" />
              <div><nuxt-link to="/techs/Sappers">坑道工兵</nuxt-link></div>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/Conscription.jpg"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>
              </div>
            </td>
            <td class="t13 trm">
              <img
                class="gg"
                src="~assets/Spiestreason.jpg"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/techs/Spies">間諜</nuxt-link></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <nuxt-link to="/building/Town_Center"
                ><img class="ng" src="~assets/Towncentericon.png" alt=""
              /></nuxt-link>
              <div>
                <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm dr">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/VillagerMaleIcon.jpg" alt="" />
              <div><nuxt-link to="/units/Villager">村民</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Feudal-age-reseach.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Loom.jpg" alt="" />
              <div><nuxt-link to="/techs/Loom">織布技術</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Townwatch.jpg" alt="" />
              <div><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Castle-age-reseach.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Wheelbarrow.jpg" alt="" />
              <div><nuxt-link to="/techs/Wheelbarrow">獨輪推車</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Townpatrol.jpg" alt="" />
              <div><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Imperial-age-research.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Handcart.jpg" alt="" />
              <div><nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <nuxt-link to="/building/Mill"
                ><img class="ng" src="~assets/Millicon.png" alt=""
              /></nuxt-link>
              <div><nuxt-link to="/building/Mill">磨坊</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm dr">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Farmicon.png" alt="" />
              <div><nuxt-link to="/building/Farm">農田</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Horsecollar.jpg" alt="" />
              <div><nuxt-link to="/techs/Horse_Collar">馬軛</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Heavyplow.jpg" alt="" />
              <div><nuxt-link to="/techs/Heavy_Plow">重犁</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Croprotation.jpg" alt="" />
              <div><nuxt-link to="/techs/Crop_Rotation">輪耕</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="5" style="border-top: none;">
              <nuxt-link to="/building/Mill"
                ><img class="ng" src="~assets/Lumbercampicon.png" alt=""
              /></nuxt-link>
              <div>
                <nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Doublebitaxe.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Double-Bit_Axe">雙刃斧</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Bowsaw.jpg" alt="" />
              <div><nuxt-link to="/techs/Bow_Saw">弓鋸</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="t23 trm not">
              <img class="gg" src="~assets/Twomansaw.jpg" alt="" />
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
                ><img class="ng" src="~assets/Miningcampicon.png" alt=""
              /></nuxt-link>
              <div>
                <nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Goldmining.jpg" alt="" />
              <div><nuxt-link to="/techs/Gold_Mining">採金技術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Stonemining.jpg" alt="" />
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
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Goldshaftmining.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Gold_Shaft_Mining">礦井採金</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Stone_Shaft_Mining.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Stone_Shaft_Mining">礦井採石</nuxt-link>
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
                ><img class="ng" src="~assets/Dockicon.png" alt=""
              /></nuxt-link>
              <div id="碼頭">
                <nuxt-link to="/building/Dock">碼頭</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm dr">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/FishingShipIcon.jpg" />
              <div><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link></div>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/TransportShipIcon.jpg" />
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
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/FireGalleyIcon.jpg" />
              <div><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/DemoRaftIcon.jpg" />
              <div>
                <nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/Galley.jpg" />
              <div><nuxt-link to="/units/Galley">戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/TradeCogIcon.jpg" />
              <div><nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link></div>
            </td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
            <td class="t10 trm">
              <img class="gg" src="~assets/Fishtrapicon.png" />
              <div><nuxt-link to="/building/Fish_Trap">漁網</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/FireShipIcon.jpg" />
              <div><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/DemoShipIcon.jpg" />
              <div>
                <nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/WarGalley.jpg" />
              <div><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/LongboatIcon.jpg" />
              <div><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/TurtleShipIcon.jpg" />
              <div><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/CaravelIcon2.jpg" />
              <div><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Gillnetsicon.jpg"
                alt=""
              />
              <div><nuxt-link to="/techs/Gillnets">流刺網</nuxt-link></div>
            </td>
            <td class="t10 trm">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Careening.jpg"
                alt=""
              />
              <div><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t10 trm"></td>
            <td class="t10 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/FastFireShipIcon.jpg" />
              <div>
                <nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>
              </div>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/HeavyDemoShipIcon.jpg" />
              <div>
                <nuxt-link to="/units/Heavy_Demolition_Ship"
                  >重型神風船</nuxt-link
                >
              </div>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/GalleonAoE2.jpg" />
              <div><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link></div>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/LongboatIcon.jpg" />
              <div>
                <nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link>
              </div>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/TurtleShipIcon.jpg" />
              <div>
                <nuxt-link to="/units/Turtle_Ship">精銳龜甲船</nuxt-link>
              </div>
            </td>
            <td class="t10 trm not">
              <img class="gg" src="~assets/CaravelIcon2.jpg" />
              <div>
                <nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link>
              </div>
            </td>
            <td class="t10 trm">
              <img class="gg" src="~assets/CannonGalleonIcon.jpg" />
              <div>
                <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i><br /><img
                class="gg"
                src="~assets/CannonGalleonIcon.jpg"
              />
              <div>
                <nuxt-link to="/units/Elite_Cannon_Galleon" class="not"
                  >精銳火砲戰船</nuxt-link
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
              <div><nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link></div>
            </td>
            <td class="t10 trm not">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Shipwright.jpg"
                alt=""
              />
              <div><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link></div>
            </td>
          </tr>
        </table>

        <table class="table" style="margin-top:50px;">
          <tr>
            <td class="trm" colspan="6" style="border-top: none;">
              <nuxt-link to="/building/Blacksmith"
                ><img class="ng" src="~assets/Blacksmithicon.png" alt=""
              /></nuxt-link>
              <div id="兵工廠">
                <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Paddedarcherarmor.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Fletching.jpg" alt="" />
              <div><nuxt-link to="/techs/Fletching">箭羽</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Forging.jpg" alt="" />
              <div><nuxt-link to="/techs/Forging">鍛造</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Scalebardingarmor.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Scale_Barding_Armor">騎兵鱗甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Scalemailarmor.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Leatherarcherarmor.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Bodkinarrow.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Ironcasting.jpg" alt="" />
              <div><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Chainbardingarmor.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Chain_Barding_Armor">騎兵鎖甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Chainmailarmor.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Ringarcherarmor.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Bracer.jpg" alt="" />
              <div><nuxt-link to="/techs/Bracer">護腕</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Blastfurnace.jpg" alt="" />
              <div><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link></div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Platebardingarmor.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Plate_Barding_Armor">騎兵板甲</nuxt-link>
              </div>
            </td>
            <td class="t19 trm">
              <img class="gg" src="~assets/Platemailarmor.jpg" alt="" />
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
                ><img class="ng" src="~assets/Marketicon.png" alt=""
              /></nuxt-link>
              <div id="市集">
                <nuxt-link to="/building/Market">市集</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm fe">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Cartography.jpg" />
              <div><nuxt-link to="/techs/Cartography">製圖學</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/TradeCartIcon.jpg" />
              <div><nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link></div>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/CaravanII.png" />
              <div><nuxt-link to="/techs/Caravan">大商隊</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Coinage.jpg" />
              <div><nuxt-link to="/techs/Coinage">鑄幣術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t23 trm"></td>
            <td class="t23 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Guilds.jpg" />
              <div><nuxt-link to="/techs/Guilds">行會制度</nuxt-link></div>
            </td>
            <td class="t23 trm">
              <img class="gg" src="~assets/Banking.jpg" />
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
                ><img class="ng" src="~assets/Monasteryicon.png" alt=""
              /></nuxt-link>
              <div id="修道院">
                <nuxt-link to="/building/Monastery">修道院</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/MonkIcon.jpg" width="30" alt="" />
              <div><nuxt-link to="/units/Monk">僧侶</nuxt-link></div>
            </td>
            <td class="t11 trm not">
              <img
                class="gg"
                src="~assets/MissionaryIcon.jpg"
                width="30"
                alt=""
              />
              <div><nuxt-link to="/units/Missionary">傳教士</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Redemption.jpg" width="30" alt="" />
              <div><nuxt-link to="/techs/Redemption">信仰救贖</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Atonement.jpg" width="30" alt="" />
              <div><nuxt-link to="/techs/Atonement">贖罪</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img
                class="gg"
                src="~assets/Herbalmedicine.png"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Heresy.png" width="30" alt="" />
              <div><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link></div>
            </td>
            <td class="t11 trm not">
              <img class="gg" src="~assets/Sanctity.jpg" width="30" alt="" />
              <div><nuxt-link to="/techs/Sanctity">聖潔虔誠</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Fervor.jpg" width="30" alt="" />
              <div><nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Faith.jpg" width="30" alt="" />
              <div><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img
                class="gg"
                src="~assets/Illumination.jpg"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/techs/Illumination">啟發教化</nuxt-link>
              </div>
            </td>
            <td class="t11 trm not">
              <img
                class="gg"
                src="~assets/Blockprinting.jpg"
                width="30"
                alt=""
              />
              <div>
                <nuxt-link to="/techs/Block_Printing">雕版印刷術</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Theocracy.png" width="30" alt="" />
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
                ><img class="ng" src="~assets/Universityicon.png" alt=""
              /></nuxt-link>
              <div id="學院">
                <nuxt-link to="/building/University">學院</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm ca">
              <div>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Masonry.jpg" alt="" />
              <div><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link></div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t11 trm">
              <img
                class="gg"
                src="~assets/Fortified-wall-research.jpg"
                alt=""
              />
              <div>
                <nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
              </div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Ballistics.jpg" alt="" />
              <div><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Guard-tower-research.jpg" alt="" />
              <div>
                <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
              </div>
              <i class="fas fa-arrow-down"></i>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Heatedshot.png" alt="" />
              <div><nuxt-link to="/techs/Heated_Shot">預熱射擊</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Murderholes.jpg" alt="" />
              <div><nuxt-link to="/techs/Murder_Holes">垛孔</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Treadmillcrane.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link>
              </div>
            </td>
            <td class="t11 trm"></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;" class="t5 trm im">
              <div>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </div>
            </td>
            <td class="t11 trm not">
              <img class="gg" src="~assets/Architecture.jpg" alt="" />
              <div><nuxt-link to="/techs/Architecture">建築學</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Chemistry.jpg" alt="" />
              <div><nuxt-link to="/techs/Chemistry">化學</nuxt-link></div>
              <i class="fas fa-arrow-down"></i><br /><img
                class="gg not"
                src="~assets/Bombard-tower-research.jpg"
                alt=""
              />
              <div>
                <nuxt-link to="/building/Bombard_Tower" class="not"
                  >火砲塔</nuxt-link
                >
              </div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Siegeengineers.jpg" alt="" />
              <div>
                <nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>
              </div>
            </td>
            <td class="t11 trm not">
              <img class="gg" src="~assets/Keep-research.jpg" alt="" />
              <div><nuxt-link to="/building/Keep">大型箭塔</nuxt-link></div>
            </td>
            <td class="t11 trm">
              <img class="gg" src="~assets/Arrowlits.jpg" alt="" />
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
