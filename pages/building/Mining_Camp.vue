<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>採礦營地</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>採礦營地</b>的最佳<nuxt-link to="/building">建築</nuxt-link
            >地點是在<nuxt-link to="/resource/Stone">石礦</nuxt-link
            >或金礦周遭，這樣<nuxt-link to="/units/Villager">村民</nuxt-link
            >就可以以最佳的效率將資源收集到營地，如果有三名以上的村民在收集資源，那會建議離資源區一格距離。
          </p>
          <p>
            在<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
            >就可以建造採礦營地，但除非有特別的戰術，ex:黑快、<nuxt-link
              to="/ar/armstower"
              >裝甲塔</nuxt-link
            >、<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >海、塔攻..之類，否則不建議在黑暗時代建造採礦營地，雖然採礦營地也是<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >的建築之一同時也只需要100木材；但比起<nuxt-link to="/building/Mill"
              >磨坊</nuxt-link
            >和<nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link
            >，在前期有限的資源及人力下，採礦營地絕對不是首選。
          </p>
        </div>
        <h3>可訓練的單位與技術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-6">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Feudal_Age"></nuxt-link>封建時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/gold_mining.png"
                    alt=""
                  /><nuxt-link to="/techs/Gold_Mining">採金技術</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/stone_mining.png"
                    alt=""
                  /><nuxt-link to="/techs/Stone_Mining">採石技術</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Castle_Age"></nuxt-link>城堡時代
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/gold_shaft_mining.png"
                    alt=""
                  /><nuxt-link to="/techs/Gold_Shaft_Mining"
                    >採金裝置</nuxt-link
                  >
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/stone_shaft_mining.png"
                    alt=""
                  /><nuxt-link to="/techs/Stone_Shaft_Mining"
                    >採石裝置</nuxt-link
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
            <td class="tta1" style="width:10%">建造速度</td>
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
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：採礦營地在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多10%/20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。<nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>免費
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對採礦營地有利的<nuxt-link to="/techs">科技</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link
              >：採礦營地的建築成本-50%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：採礦營地的建築成本-15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：採礦營地建築速度快30%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Masonry"
                >磚瓦技術</nuxt-link
              >，<nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >和<nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
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
            <li>採礦營地的生命值在每個時代都是900HP。</li>
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
              採礦營地的HP在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >的HP分別為600/800/1000/1000。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            中世紀的採礦十分興盛，特別是鐵，鹽，銅，錫，金，煤和銀的開採。火藥的發明大大增加了對硫磺和硝酸鹽的需求。到了公元500年，地表礦脈已經非常罕見，所以人們必須進入地下找尋新的來源。提高採礦效率和安全性促成許多重要技術的改進和發明。早期將礦車拉出礦坑的電車就是未來鐵路的前身。需要更強大的礦井泵來排出水並推動新鮮空氣後來成為了蒸汽機發明的契機。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                採礦營地
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/mining_camp.png" alt="" />
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
            <td class="unit4">經濟</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">2x2</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              <img class="gg" src="~assets/dark_age.png" width="30" alt="" />600
              <br />
              <img
                class="gg"
                src="~assets/feudal_age.png"
                width="30"
                alt=""
              />800 <br />
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              />1000 <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />1000
            </td>
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

        <div class="thanks">感謝! 此頁面由小蝦和賜齡協助編輯</div>
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
                src="~assets/Miningcampaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有文明的採礦營地(<nuxt-link to="/games/aok"
                    >帝王世紀</nuxt-link
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
                src="~assets/Mining_camp_hd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有文明的採礦營地(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_mining_camp.png"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >各文明(依<nuxt-link to="/maps/Continental">大陸</nuxt-link
                  >分)的採礦營地和在一般地圖/下雪地圖的樣子。</em
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
