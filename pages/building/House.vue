<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>房屋</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>房屋</b>是遊戲內最重要的<nuxt-link to="/building">建築</nuxt-link
            >之一。它提供5的居住人口讓玩家訓練<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >和軍隊使用，不過被摧毀時玩家也會失去5的人口上限(<nuxt-link
              to="/civs/Mongols"
              >蒙古</nuxt-link
            >研發<nuxt-link to="/techs/Nomads">游牧</nuxt-link
            >後房屋毀壞人口上限也不會掉)。
          </p>
          <p>
            除了<nuxt-link to="/civs/Huns">匈人</nuxt-link>之外的所有<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >都可以建造房屋，<nuxt-link to="/civs/Huns">匈人</nuxt-link
            >遊戲一開始就是最高人口上限，不過<nuxt-link to="/resource/Wood"
              >木材</nuxt-link
            >會少100。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <li>
                除了<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
                >之外，房子是遊戲中最便宜的<nuxt-link to="/building"
                  >建築物</nuxt-link
                >。其功能是增加人口容量。在<nuxt-link to="/techs/age/Dark_Age"
                  >黑暗時代</nuxt-link
                >，房子是玩家應該建造的第一座建築（除非他們扮演的是<nuxt-link
                  to="/civs/Huns"
                  >匈人</nuxt-link
                >或<nuxt-link to="/civs/Chinese">中國人</nuxt-link
                >）。事實上，除了建立新的村民和收集<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >之外，建造房屋應該是首先要做的事情。在推進至<nuxt-link
                  to="/techs/age/Feudal_Age"
                  >封建時代</nuxt-link
                >之前，建議至少建造四座房屋。
              </li>
              <li>
                由於房屋價格便宜，而且建造速度快，所以在許多情況下，這些房屋被用來替代城牆作為防禦工事，尤其是在遊戲的早期階段。
              </li>
              <li>
                <nuxt-link to="/civs/Khmer">高棉</nuxt-link
                >讓玩家可以在防守時使用房屋作為防禦性建築，因為他們可以讓五名村民駐守在房屋內（不過不像在<nuxt-link
                  to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >，<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
                >或<nuxt-link to="/building/Castle">城堡</nuxt-link
                >中進駐，駐守在房屋內的村民不能射箭）。這有助於<nuxt-link
                  to="/civs/Khmer"
                  >高棉</nuxt-link
                >玩家減少村民損失，所以建議在繁忙的工作地點旁邊建造房屋。而且，如果他們想用房屋替代牆壁，他們可以透過駐守房子在把村民放出來移動到玩家的城鎮裡。
              </li>
              <li>
                房屋通常以成群的形式建成，以節省建築物和資源開采的空間。這樣可以優化單位在鎮上的路線，但是這也使得他們特別容易受到<nuxt-link
                  to="/units/Mangonel"
                  >投石車</nuxt-link
                >等<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
                >的破壞。
              </li>
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
            <td class="tta1" style="width:10%">其它</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Nomads">游牧</nuxt-link
              >:房屋被毀壞人口容納量也不會下降
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
              >：房屋在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多10%/20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：在封建/<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代，對房屋有加成的<nuxt-link to="/techs">科技</nuxt-link
              >價格便宜10%/15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link
              >：不須建造房屋但遊戲開始時少100木材%
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              >：房屋提供10的居住人口%
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>：房屋可駐守5名村民。
            </li>
            <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：房屋便宜15%</li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：房屋建築速度快30%。
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
            <li>房屋花費30木材。</li>
            <li>房屋的生命值在每個時代都是900HP。</li>
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
            <li>房屋現在花費25木材。</li>
            <li>
              房屋的HP在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >的HP分別為550/750/900/900。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>：<nuxt-link
                to="/techs/Nomads"
                >游牧</nuxt-link
              >研發後房屋被毀壞人口容納量也不會下降。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/HouseDarkAge.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
                  >的房屋。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/HouseFedualAgeHD.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
                  >的房屋(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
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
                src="~assets/HouseFeudalAgeDLC.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有封建時代的房屋(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Houseaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                  >的房屋(帝王世紀和征服者入侵資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" width="200" src="~assets/Househd.jpg" alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡時代的房屋(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_house.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有遊戲中的房屋類型。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                房屋
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/house.png" alt="" />
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
            <td class="unit4">平民建築</td>
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
            <td class="unit3">功能</td>
            <td class="unit4">提供人口容量</td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">25秒</td>
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
            <td class="unit4">25</td>
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
              <img class="gg" src="~assets/dark_age.png" width="30" alt="" />550
              <br />
              <img
                class="gg"
                src="~assets/feudal_age.png"
                width="30"
                alt=""
              />750 <br />
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              />900 <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />900
            </td>
          </tr>
          <tr>
            <td class="unit3">近戰護甲</td>
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
            <td class="unit3"><nuxt-link to="/armor">遠程護甲</nuxt-link></td>
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
            <td class="unit4">1</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
