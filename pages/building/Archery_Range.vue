<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>射箭場</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <b>射箭場</b>是生產<nuxt-link to="/units/Archer">弓箭手</nuxt-link
          >與其他遠距部隊的<nuxt-link to="/building">建築</nuxt-link>。
        </div>

        <h3>可訓練的單位與技術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-3">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Feudal_Age"></nuxt-link>封建時代
              </h4>
              <ul>
                <li>
                  <img class="gg" src="~assets/ArcherIcon.png" /><nuxt-link
                    to="/units/Archer"
                    >弓兵</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/SkirmisherIcon.png" /><nuxt-link
                    to="/units/Skirmisher"
                    >矛兵</nuxt-link
                  >
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
                  <img class="gg" src="~assets/CrossbowmanIcon.png" /><nuxt-link
                    to="/units/Crossbowman"
                    >弩兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/EliteSkirmisherIcon.png"
                  /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/CavalryArcherIcon.png"
                  /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/Slingericon.png" /><nuxt-link
                    to="/units/Slinger"
                    >投石手</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/GenitourIcon.png" /><nuxt-link
                    to="/units/Genitour"
                    >標槍騎兵</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/Thumb_Ring.png" /><nuxt-link
                    to="/techs/Thumb_Ring"
                    >拇指環</nuxt-link
                  >
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
                  <img class="gg" src="~assets/ArbalestIcon.png" /><nuxt-link
                    to="/units/Arbalest"
                    >強弩兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Imperialskirmishericon.png"
                  /><nuxt-link to="/units/Imperial_Skirmisher"
                    >帝王戰矛兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/HeavyCavArcherIcon.png"
                  /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                    >重裝馬弓騎兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/HandCannoneerIcon.png"
                  /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/GenitourIcon.png" /><nuxt-link
                    to="/units/Genitour"
                    >精銳標槍騎兵</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/parthian_tactics.png"
                  /><nuxt-link to="/techs/Parthian_Tactics"
                    >帕提亞戰術</nuxt-link
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
            <td class="tta1" style="width:30%">強勢（容易對抗）</td>
            <td class="tta4">無</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢（不易對抗）</td>
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
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>（+10%）
              <br />
              <img
                class="gg"
                src="~assets/architecture.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>（+10%）
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
              >（護甲+1／+1，+3建築護甲）<br />
              <img
                class="gg"
                src="~assets/architecture.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >（護甲+1／+1，+3建築護甲）
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
              /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>（+4）
              <br />
              <img
                class="gg"
                src="~assets/town_patrol.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>（+4）
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
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >（+20%建造效率）
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
              /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>（+33%）
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >快生產快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研發<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：射箭場在<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >，<nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>免費。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對射箭場有利的<nuxt-link to="/techs">科技</nuxt-link
              >在封建/城堡/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >：蓋射箭場不用<nuxt-link to="/building/Barracks">軍營</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：射箭場便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >：弩兵在封建／城堡／帝王時代各便宜10%／20%／30%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：建築速度快30%。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：免費<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：同盟和自己能在城堡／帝王生產<nuxt-link to="/units/Genitour"
                >標槍騎兵</nuxt-link
              >和<nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>：訓練速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：射箭場可提供5人口。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：同盟和自己在<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >能生產<nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >。
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
            <li>引入<nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>。</li>
            <li>
              引入<nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link
              >。
            </li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在世界大部分地區，弓箭這類的導彈武器人類從遠古時代到中世紀一直在使用。北歐是個例外，因為該地區茂密的森林使弓的範圍優勢無效。斧頭，標槍和刀子等投擲武器在那裡更受歡迎。隨著森林被清除，弓的使用更加普及。英格蘭尤其青睞弓箭手，每個城鎮都有射箭場進行弓箭訓練。每週也會舉行比賽以鼓勵眾人練習這項技術。英格蘭可以輕鬆地從龐大的弓箭手中招募數千名<nuxt-link
              to="/units/Longbowman"
              >精銳長弓兵</nuxt-link
            >來到<nuxt-link to="/civs/Franks">法國</nuxt-link
            >參加作戰。隨著弩弓和早期火器的投入使用，人們會在經過改裝的射箭場上練習使用這些武器。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                射箭場
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Acheryrangeicon.png" class="img-fluid" alt="" />
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">需要建設</td>
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

        <div class="thanks">感謝！此頁面由眠和賜齡協助編輯。</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/ARFeudalAgeDLC.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
                  >的射箭場（<nuxt-link to="/games/aok">帝王世紀</nuxt-link
                  >和<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
                  >資料片）。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/ARFeudalAgeHD.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有封建時代的射箭場（HD擴充資料片）。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Archeryrangeaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                  >的射箭場（帝王世紀和征服者入侵資料片）。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Archery_ranges_hd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡時代的射箭場（HD擴充資料片）。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_archery_range.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >射箭場在封建／城堡時代在一般地圖／下雪地圖的樣子和駐紮單位時的樣子。</em
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
