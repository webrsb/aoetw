<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>馬廄</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <b>馬廄</b>是生產<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
          >與升級騎兵的<nuxt-link to="/building">建築</nuxt-link>。除<nuxt-link
            to="/civs/Aztecs"
            >阿茲特克</nuxt-link
          >，<nuxt-link to="/civs/Incas">印加</nuxt-link>和<nuxt-link
            to="/civs/Mayans"
            >馬雅</nuxt-link
          >之外，所有<nuxt-link to="/civs">文明</nuxt-link
          >都有馬廄，但他們可以透過招降馬廄在<nuxt-link
            to="/techs/age/Castle_Age"
            >城堡時代</nuxt-link
          >生產<nuxt-link to="/units/Xolotl_Warrior">索洛托勇士</nuxt-link>。
        </div>
        <h3>可訓練的單位與技術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Feudal_Age"></nuxt-link>封建時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/ScoutCavalryIcon.png"
                  /><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Bloodlines.png"
                    alt=""
                  /><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Castle_Age"></nuxt-link>城堡時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/LightCavalryIcon.png"
                  /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/KnightIcon.png" /><nuxt-link
                    to="/units/Knight"
                    >騎士</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/CamelIcon.png" /><nuxt-link
                    to="/units/Camel_Rider"
                    >駱駝騎兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Steppelancericon.png"
                  /><nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Xolotlicon.png"
                    alt=""
                  /><nuxt-link to="/units/Xolotl_Warrior">索洛托勇士</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Battleelephanticon.png"
                  /><nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/husbandry.png"
                    alt=""
                  /><nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Imperial_Age"></nuxt-link>帝王時代
              </h4>
              <ul>
                <li>
                  <img class="gg" src="~assets/HussarIcon.png" /><nuxt-link
                    to="/units/Hussar"
                    >匈牙利輕騎兵</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/CavalierIcon.png" /><nuxt-link
                    to="/units/Cavalier"
                    >重裝騎士</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/PaladinIcon.png" /><nuxt-link
                    to="/units/Paladin"
                    >遊俠</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/HeavyCamelIcon.png" /><nuxt-link
                    to="/units/Heavy_Camel_Rider"
                    >重裝駱駝騎兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/ImperialCamelIcon.png"
                  /><nuxt-link to="/units/Imperial_Camel_Rider"
                    >帝王駱駝騎兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Elitesteppelancericon.png"
                  /><nuxt-link to="/units/Elite_Steppe_Lancer"
                    >精銳草原騎兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Battleelephanticon.png"
                  /><nuxt-link to="/units/Elite_Battle_Elephant"
                    >精銳矛象伕</nuxt-link
                  >
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
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
              <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Chivalry"
                >騎士精神</nuxt-link
              >:馬廄工作速率快40%，<nuxt-link to="/civs/Franks"
                >法蘭克</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">其他</td>
            <td class="tta4">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Marauders"
                >掠奪者</nuxt-link
              >:<nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link
              >可在馬廄訓練，<nuxt-link to="/civs/Huns">匈人</nuxt-link>限定
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研發<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：<nuxt-link
                to="/building/Archery_Range"
                >射箭場</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對馬廄有利的<nuxt-link to="/techs">科技</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>：蓋馬廄不用<nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：研發<nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
              >的速度在<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >快10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：馬厩建造速度提高30％。
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
              <nuxt-link to="/civs/Huns">匈人</nuxt-link
              >：馬厩的團隊工作速度提高了20％。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Masonry"
                >磚瓦技術</nuxt-link
              >，<nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >和<nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
              >的速度快80％。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>：馬廄可提供5人口
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：引入<nuxt-link
                to="/techs/Chivalry"
                >騎士精神</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link>：引入<nuxt-link
                to="/techs/Marauders"
                >掠奪者</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              南美文明：引入<nuxt-link to="/units/Xolotl_Warrior"
                >索洛托勇士</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            中世紀的時軍隊對騎馬作戰的重視提高了對馬匹的大量需求，這些馬匹在馬厩裡飼養和訓練。馬匹的用途眾多，包括供長途旅行的馬匹，在兩地快速移動的快馬以及用來沖向敵陣的重型戰馬。<nuxt-link
              to="/units/Scout_Cavalry"
              >斥候騎兵</nuxt-link
            >和<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >部隊則需要有耐力的且跑得快的馬。強大的重型戰馬則需要有足夠力氣能背負全副武裝的士兵衝鋒陷陣。士兵們在馬厩訓練如何在馬背上用矛，騎槍，劍，鎖鏈和錘子的作戰的技巧。在世界的其他地方，駱駝和大象也被飼養來進行戰鬥。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                馬廄
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/stable.png" alt="" />
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
            <td class="unit4">
              除<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >和<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>之外
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">前置建築</td>
            <td class="unit4">
              <nuxt-link to="/building/Barracks">軍營</nuxt-link>
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
            <td class="unit3">可駐守單位</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
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

        <div class="thanks">感謝! 此頁面由Wun和賜齡協助編輯</div>
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
                src="~assets/StableFeudalAgeHD.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
                  >的馬廄(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
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
                src="~assets/StableFeudalAgeDLC.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有封建時代的馬廄(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Stableaok.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                  >的馬廄(帝王世紀和征服者入侵資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Stablehd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡時代的馬廄(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_stable.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >馬廄在封建/城堡時代在一般地圖/下雪地圖的樣子和駐紮單位時的樣子。</em
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
definePageMeta({ layout: 'allbuilding' })

export default {
  components: {}
}
</script>
<style></style>
