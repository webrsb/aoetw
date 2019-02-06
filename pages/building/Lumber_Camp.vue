<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>伐木場</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            伐木場顧名思義，最佳的建築位置絕對是在森林旁，這樣才可以使村民在最佳效率狀況下收集木材，而這距離建議是一個格子和三名以上的村民伐木，當你發現村民開始需要走點距離時就可以準備蓋出下一個離森林更近的伐木場。
          </p>
          <p>
            在黑暗時代時，木材和食物可以說是在這時最重要的，而大多數玩家會將城鎮中心周遭的3-4棵樹木砍掉，之後就必須建立起第一座伐木場。在進入<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >的前置建築伐木場就是其中之一，而它只需100的木材，所以伐木場與磨坊通常是進入封建時代最經濟又實惠的方式。
          </p>
        </div>
        <h3>可研發的技術</h3>
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
                    src="~assets/Doublebitaxe.jpg"
                    alt=""
                  /><nuxt-link to="/techs/Double-Bit_Axe">雙刃斧</nuxt-link>
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
                  <img class="gg" src="~assets/Bowsaw.jpg" alt="" /><nuxt-link
                    to="/techs/Bow_Saw"
                    >弓鋸</nuxt-link
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
                  <img
                    class="gg"
                    src="~assets/Twomansaw.jpg"
                    alt=""
                  /><nuxt-link to="/techs/Two-Man_Saw">雙人鋸</nuxt-link>
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
            <td class="tta4">全部。</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">生命值</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Masonry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%) <br />
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
            <td class="tta1">視野</td>
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
            <td class="tta1" style="width:10%">建造速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">踏輪起重機</nuxt-link
              >(+20%建造效率)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：伐木場在黑暗/封建/城堡/帝王時代多10%/20%/30%/40%的血量。
              <nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>免費
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對伐木場有利的科技在封建/城堡/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link
              >：伐木場的建築成本-50%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：伐木場的建築成本-15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：伐木場建築速度快30%。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Masonry"
                >磚瓦技術</nuxt-link
              >，<nuxt-link to="/techs/Architecture">建築學</nuxt-link>和
              <nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >的速度快80％。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>伐木場的生命值在每個時代都是900HP。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              伐木場的HP在黑暗/封建/城堡/帝王的HP分別為600/800/1000/1000。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            黑暗時代的歐洲大森林是一個重要的自然資源，樹木在伐木場被做成木材使用，人們用木材作為建材和用來取暖。早期的伐木場是高度勞動密集型的。工人將一根木頭立在垂直於地面的坑內。
            有一個人在地上，一個在坑里，一根長長的鐵鋸被用來將木頭鋸成木板。
            在中世紀時人類開始利用水或動物驅動鐵鋸，提高了木板的生產效率。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle"><nuxt-link to="">伐木場</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Lumbercampicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">概要</nuxt-link></div>
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
            <td class="unit4">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">35秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">數據</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">2x2</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Dark-age-logo-small.jpg"
                width="30"
                alt=""
              />600 <br />
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />800 <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />1000 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />1000
            </td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Dark-age-logo-small.jpg"
                width="30"
                alt=""
              />0 <br />
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />1 <br />
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
            <td class="unit3">遠防</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Dark-age-logo-small.jpg"
                width="30"
                alt=""
              />7 <br />
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />8 <br />
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
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由小蝦和賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Lumbercampaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有文明的伐木場(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Lumbercamps_hd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有文明的伐木場(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Lumbercamp.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>伐木場如果距離採集點太遠就應該重蓋一座以維持效率。</em></p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_lumber_camp.png"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em>各文明(依大陸分)的伐木場和在一般地圖/下雪地圖的樣子。</em>
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
