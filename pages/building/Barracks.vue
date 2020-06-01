<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>軍營</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <b>軍營</b>是第一個軍事<nuxt-link to="/building">建築</nuxt-link
          >，可以在<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
          >被建造。同時也是<nuxt-link to="/building/Stable">馬廄</nuxt-link
          >和<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
          >的前置<nuxt-link to="/building">建築物</nuxt-link>(<nuxt-link
            to="/civs/Khmer"
            >高棉</nuxt-link
          >除外)。
        </div>
        <h3>可訓練的單位與技術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-3">
            <div class="n1">
              <h4><nuxt-link to="/techs/age/Dark_Age"></nuxt-link>黑暗時代</h4>
              <li>
                <img
                  class="gg"
                  src="~assets/MilitiaIcon.png"
                  alt=""
                /><nuxt-link to="/units/Militia">民兵</nuxt-link>
              </li>
            </div>
          </div>
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Feudal_Age"></nuxt-link>封建時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/ManAtArmsIcon.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/SpearmanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/tracking.png" alt="" /><nuxt-link
                    to="/techs/Tracking"
                    >追蹤技術</nuxt-link
                  >(於封建時代自動擁有)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/EagleScoutIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link
                  >(南美<nuxt-link to="/civs">文明</nuxt-link>限定)
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Castle_Age"></nuxt-link>城堡時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/LongswordsManIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/PikemanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/EagleWarriorIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
                  >(南美文明限定)
                </li>
                <li>
                  <img class="gg" src="~assets/squires.png" alt="" /><nuxt-link
                    to="/techs/Squires"
                    >護衛技術</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/Arson.png" alt="" /><nuxt-link
                    to="/techs/Arson"
                    >縱火</nuxt-link
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Imperial_Age"></nuxt-link>帝王時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/2HandedswordsmanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Two-Handed_Swordsman"
                    >雙手劍兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/ChampionIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/HalberdierIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/EliteEagleWarriorIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Elite_Eagle_Warrior"
                    >精銳鷹勇士</nuxt-link
                  >(南美文明限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/CondottieroIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                  >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>和同盟限定)
                </li>
              </ul>
            </div>
          </div>
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
            <td class="tta4">無</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">全部</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/masonry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%) <br />
              <img
                class="gg"
                src="~assets/architecture.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">護甲</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/masonry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
              >(護甲+1/+1，+3建築護甲) <br />
              <img
                class="gg"
                src="~assets/architecture.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >(護甲+1/+1，+3建築護甲)
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/tower_watch.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
              <br />
              <img
                class="gg"
                src="~assets/town_patrol.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>(+4)
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/faith.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link><br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">建造速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/treadmill_crane.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
              >(+20%建造效率)
            </td>
          </tr>
          <tr>
            <td class="tta1">工作效率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/conscription.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link
              >(+33%，限單位) <br />
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                style="margin: 2px;"
                alt=""
              /><nuxt-link to="/techs/Perfusion">井噴</nuxt-link
              >(+100%，<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">其他</td>
            <td class="tta4">
              <img
                src="~assets/unique_tech.png"
                class="gg"
                style="margin: 2px;"
                alt=""
              /><nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link
              >:軍營可以訓練<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
              >，<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：軍營訓練速度快10%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對軍營有利的<nuxt-link to="/techs">科技</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：軍營在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代多10%/20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：軍營便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：建築速度快30%。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：免費<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：軍營工作速度快20% 。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >：帝王時代軍營可生產<nuxt-link to="/units/Condottiero"
                >傭兵</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>：軍營可提供5人口
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>引入<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>。</li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>:引入<nuxt-link
                to="/techs/Anarchy"
                >無政府狀態</nuxt-link
              >和<nuxt-link to="/techs/Perfusion">井噴</nuxt-link>。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              引入<nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link
              >(南美文明限定)，可在<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >訓練。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              引入<nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link
              >現在可在<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
              >訓練。
            </li>
            <li>引入<nuxt-link to="/techs/Arson">縱火</nuxt-link>。</li>
          </ul>
          <h3>
            <em>決定版</em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >(37650更新)：軍事單位加快訓練速度由15%減為10%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            士兵在軍營裡鑽探和製造武器。在中世紀後期，軍營被併入城堡系統中。它也成為專業士兵居住的地方，幫助防禦城堡或維持周圍鄉村的秩序。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                軍營
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/barracks.png" class="img-fluid" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">軍事</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">被需要</td>
            <td class="unit4">
              <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
              ><br /><nuxt-link to="/building/Stable">馬廄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">50秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">175</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">3x3</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/dark_age.png"
                width="30"
                alt=""
              />1200<br />
              <img
                class="gg"
                src="~assets/feudal_age.png"
                width="30"
                alt=""
              />1500 <br />
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              />1800 <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />2100
            </td>
          </tr>
          <tr>
            <td class="unit3">駐紮單位</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
              <img class="gg" src="~assets/dark_age.png" width="30" alt="" />0
              <br />
              <img class="gg" src="~assets/feudal_age.png" width="30" alt="" />1
              <br />
              <img class="gg" src="~assets/castle_age.png" width="30" alt="" />2
              <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />3
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">
              <img class="gg" src="~assets/dark_age.png" width="30" alt="" />7
              <br />
              <img class="gg" src="~assets/feudal_age.png" width="30" alt="" />8
              <br />
              <img class="gg" src="~assets/castle_age.png" width="30" alt="" />9
              <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />10
            </td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡和[ ]協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/BarracksDarkAge.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有黑暗時代的軍營。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/BarracksFeudalAgeHD.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
                  >的軍營(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
                  >和<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Barracks_hd_feudal.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有封建時代的軍營(HD擴充資料片)。</em></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Barracksaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                  >的軍營(帝王世紀和征服者入侵資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Barracks_hd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡時代的軍營(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_barracks.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >軍營在封建/城堡時代在一般地圖/下雪地圖的樣子和駐紮單位時的樣子。</em
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbuilding',
  components: {}
}
</script>
<style></style>
