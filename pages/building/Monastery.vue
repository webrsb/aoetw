<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>修道院</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>修道院</b>是<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >可以蓋的<nuxt-link to="/building">建築</nuxt-link
            >。修道院可訓練<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >和<nuxt-link to="/units/Missionary">傳教士</nuxt-link
            >與強化他們。<nuxt-link to="/elements/Relic">遺跡</nuxt-link
            >可放入修道院生產<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >。該注意的，修道院不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            修道院為<nuxt-link to="/units/Monk">僧侶</nuxt-link>/<nuxt-link
              to="/units/Missionary"
              >傳教士</nuxt-link
            >的生產建築。由於僧侶生產很慢，但又很重要，往往用僧侶當作主力的玩家會建造至少兩座修道院。如果玩家打算在城堡時代使用僧侶快攻，他們必須有至少三個以上的修道院因為僧侶的生產速度真的很慢，移動也慢。而且必須同時研究<nuxt-link
              to="/techs/Sanctity"
              >聖潔虔誠</nuxt-link
            >和<nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link>
            才能使進攻更有效。
          </p>
          <p>
            修道院的一些技術也有助於對付敵方僧侶或部隊（<nuxt-link
              to="/techs/Faith"
              >忠誠信仰</nuxt-link
            >，<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>和<nuxt-link
              to="/techs/Herbal_Medicine"
              >草藥學</nuxt-link
            >），所以即使玩家不使用僧侶也建議蓋修道院。
          </p>
          <p>
            修道院也具有經濟價值。每個修道院可以容納10個<nuxt-link
              to="/elements/Relic"
              >遺跡</nuxt-link
            >，每個遺跡都會持續生產黃金。特別是在單挑的比賽中，遺跡通常是後期當黃金耗盡後獲得黃金的唯一途徑。通常情況下，擁有最多遺跡的玩家贏得長時間的遊戲。
          </p>
          <p>
            在任何具有標準勝利條件的遊戲中，修道院都是至關重要的。如果一個隊伍在他們的修道院裡擁有所有的遺跡(不需在同一個修道院或單一國家)，一個200年的計數器會開始倒數，效果類似於建造世界奇蹟。如果敵方隊伍在計數器到達之前沒有搶走至少一個遺物或讓遺跡暴露於修道院外，那麼這場比賽就會結束。如果隊伍試著以取得所有遺跡做為勝利目標，建議把所有的遺跡都留在同一個修道院裡，並且用防禦性的結構和重裝單位保護，最好是<nuxt-link
              to="/units/Archer_Units"
              >遠程</nuxt-link
            >部隊，重裝<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
            >，大規模地捍衛那個修道院。在任何情況下，防禦工事都應該在最後一個遺物被放入修道院之前建立起來。讓敵隊措手不及並拿下最終勝利。
          </p>
          <p>
            如果選擇了遊戲模式“奪取遺跡”做為勝利條件，那麼每個玩家在開始ˇ戲時都會擁有一座堅不可摧的修道院，並試圖控制唯一的遺跡（遊戲開始時位於地圖正中央）。第一個擁有該遺跡並放入修道院的玩家贏得比賽。
          </p>
          <h3>可訓練的單位與技術</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="n1">
                <h4>
                  <nuxt-link to="/techs/age/Castle_Age"></nuxt-link>城堡時代
                </h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MonkIcon.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/units/Monk">僧侶</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MissionaryIcon.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/units/Missionary">傳教士</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Redemption.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Redemption">信仰救贖</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Atonement.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Atonement">贖罪</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Herbalmedicine.png"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Heresy.png"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Sanctity.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Sanctity">聖潔虔誠</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Fervor.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link>
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
                    <img
                      class="gg"
                      src="~assets/Faith.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Illumination.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Illumination">啟發教化</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Blockprinting.jpg"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Block_Printing"
                      >雕版印刷術</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Theocracy.png"
                      width="30"
                      alt=""
                    /><nuxt-link to="/techs/Theocracy">神權統治</nuxt-link>
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
              <td class="tta4">全部除了僧侶。</td>
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
                  src="~assets/Masonry.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%)
                <br />
                <img
                  class="gg"
                  src="~assets/Architecture.jpg"
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
                  src="~assets/Masonry.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
                >(護甲+1/+1，+3建築護甲) <br />
                <img
                  class="gg"
                  src="~assets/Architecture.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
                >(護甲+1/+1，+3建築護甲)
              </td>
            </tr>
            <tr>
              <td class="tta1"><nuxt-link to="/los.php">視野</nuxt-link></td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Townwatch.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
                <br />
                <img
                  class="gg"
                  src="~assets/Townpatrol.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>(+4)
              </td>
            </tr>
            <tr>
              <td class="tta1">招降抵抗</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Faith.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link> <br />
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
                  src="~assets/Treadmillcrane.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >(+20%建造效率)
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
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                >：在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
                >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
                >，修道院增加20%/30%40%的<nuxt-link to="/elements/Hit_points"
                  >血量</nuxt-link
                >。<nuxt-link to="/techs/Town_Watch"> 城鎮瞭望</nuxt-link>免費。
              </li>
              <li>
                <nuxt-link to="/civs/Chinese">中國</nuxt-link
                >：修道院的技術在<nuxt-link to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/帝王時代分別便宜15%/20%
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link
                >：修道院建築花費便宜15%
              </li>
              <li>
                <nuxt-link to="/civs/Persians">波斯</nuxt-link>：研究<nuxt-link
                  to="/techs/Town_Watch"
                  >城鎮瞭望</nuxt-link
                >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
                ><nuxt-link to="/techs">科技</nuxt-link>時間在封建/<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/帝王時代快10%/15%/20%
              </li>
              <li>
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
                >：修道院建造速度快30%
              </li>
            </ul>
          </div>
          <h3>團隊加分</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
                >：遺跡產生的黃金增加33%
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                  to="/techs/Masonry"
                  >磚瓦技術</nuxt-link
                >、<nuxt-link to="/techs/Architecture">建築學</nuxt-link
                >、<nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >科技的時間加快80%
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
              <li>
                <nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>首次出現。
              </li>
              <li>
                <nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link
                >首次出現。
              </li>
              <li>
                <nuxt-link to="/techs/Theocracy">神權統治</nuxt-link>首次出現。
              </li>
            </ul>
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <gallery
                  ><img
                    class="imgn hg"
                    width="200"
                    src="~assets/Monasteryaokaoc.png"
                    alt=""
                /></gallery>
                <div class="lightbox-caption" style="width:220px">
                  <p>
                    <em
                      >所有<nuxt-link to="/civs">文明</nuxt-link
                      >的修道院(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
                      >和征服者入侵資料片)。</em
                    >
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <gallery
                  ><img
                    class="imgn hg"
                    width="200"
                    src="~assets/Monasteries.png"
                    alt=""
                /></gallery>
                <div class="lightbox-caption" style="width:185px">
                  <p><em>所有文明的修道院(HD擴充資料片)。</em></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <gallery
                  ><img
                    class="imgn hg"
                    width="200"
                    src="~assets/Mud_mosque.jpg"
                    alt=""
                /></gallery>
                <div class="lightbox-caption" style="width:185px">
                  <p><em>真實生活中的非洲修道院:Larabanga清真寺。</em></p>
                </div>
              </div>
              <div class="col-md-6">
                <gallery
                  ><img
                    class="imgn hg"
                    width="200"
                    src="~assets/Konark_sun_temple.jpg"
                    alt=""
                /></gallery>
                <div class="lightbox-caption" style="width:185px">
                  <p>
                    <em
                      >科納克太陽神殿，遊戲中<nuxt-link to="/civs/Indians"
                        >印度</nuxt-link
                      >修道院的參考。</em
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                修道院
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Monasteryicon.png" width="45" alt="" />
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
            <td class="unit4">特殊</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">
              生產僧侶 <br /><nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
              >可生產傳教士
            </td>
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
            <td class="unit4"><p>所有時代:2100</p></td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Garrison">駐軍</nuxt-link>
            </td>
            <td class="unit4">所有時代:10</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />2 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />3
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />9 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
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

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
