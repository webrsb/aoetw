<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>磨坊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            磨坊是<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
            >的經濟建築之一，<nuxt-link to="/units/Villager">村民</nuxt-link
            >可以將"任何"食物搜集至此。當然這裡也有關於
            <nuxt-link to="/building/Farm">農田</nuxt-link
            >的科技可以升級或是備用的農田排序。
          </p>
          <p>
            在<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
            >有許多重要的經濟建築，而磨坊就是其中之一，不管在遊戲的什麼時期它的位置都不可取代，因為它是
            <nuxt-link to="/units/Villager">村民</nuxt-link
            >放置食物的地方，所以將它建在<nuxt-link to="/Berry_Bush.php"
              >果樹叢</nuxt-link
            >、<nuxt-link to="/units/animal/Deer">鹿群</nuxt-link
            >此種食物來源的旁邊是最好的，而像是
            <nuxt-link to="/units/animal/Wild_Boar">野豬</nuxt-link
            >這種可以驅趕或引誘至城鎮中心的的動物就沒有必要再為了牠們而去建造。而實際上在高手對戰中，也很少為了鹿群而去蓋磨坊，他們多數是用驅趕的。
          </p>
          <p>
            在進入<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >前會需要兩種<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
            >的建築，而磨坊的重要性使得它必定是玩家的優先所選，它甚至還是
            <nuxt-link to="/building/Market">市集</nuxt-link>、<nuxt-link
              to="/building/Farm"
              >農田</nuxt-link
            >的前置建築。
          </p>
          <p>
            磨坊有一項很實用的功能:備用農田，這可以大量減少玩家的時間和控制力，它的成本和建造農田是一樣的，這可以使得你的農民不會在農田荒廢後站在原地發呆，當然，如果你手頭上的木材很吃緊你也可以將備用農田取消去取得木材。
          </p>
          <p><strong>磨坊的蓋法</strong></p>
          <p>
            在高手對戰中，時常看見果樹叢的磨坊有兩種蓋法，一種是空一格蓋，緊貼著果樹叢蓋，其原因是緊貼著蓋採集效率雖高，但面對對方黑暗<nuxt-link
              to="/units/Militia"
              >民兵</nuxt-link
            >快攻比較不好圍，而空一格的蓋法將輕輕鬆鬆擋住民兵的快攻。
          </p>
          <p><img width="400px;" src="~assets/millf.png" alt="" /></p>
        </div>
        <h3>可訓練的單位與技術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Horsecollar.jpg"
                    alt=""
                  /><nuxt-link to="/techs/Horse_Collar">馬軛</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Heavyplow.jpg"
                    alt=""
                  /><nuxt-link to="/techs/Heavy_Plow">重犁</nuxt-link>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="n1">
              <h4>
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </h4>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Croprotation.jpg"
                    alt=""
                  /><nuxt-link to="/techs/Crop_Rotation">輪耕</nuxt-link>
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
              >：磨坊黑暗/封建/城堡/帝王時代多10%/20%/30%/40%的血量。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：在封建/城堡/帝王時代，對磨坊有加成的科技價格便宜10%/15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：<nuxt-link
                to="/techs/Horse_Collar"
                >馬軛</nuxt-link
              >、<nuxt-link to="/techs/Heavy_Plow">重犁</nuxt-link>、
              <nuxt-link to="/techs/Crop_Rotation">輪耕</nuxt-link
              >科技全部免費。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：磨坊造價-50%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：磨坊造價-15%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：研發<nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
              >的速度在封建/城堡/帝王快10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：磨坊建築速度快30。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                to="/techs/Masonry"
                >磚瓦技術</nuxt-link
              >、<nuxt-link to="/techs/Architecture">建築學</nuxt-link>和
              <nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >速度快80%。
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
            <li>磨坊在每個時代都是1000HP。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/building/Farm">農田</nuxt-link>可以使用排隊系統。
            </li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link></li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>磨坊在黑暗/封建/城堡/帝王時代的HP分別為600/800/1000/1000。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              道地美洲磨坊是一個以風帆和輪子構造為特色的風車，然而，在歷史上他們其實沒有輪軸技術，所以是不正確的。
            </li>
            <li>
              非洲磨坊不是風車或水磨坊，而且是黑暗時代以後唯一保留以驢子驅動磨粉機器的磨坊。
            </li>
            <li>
              有三種驅動類型的磨坊：風車（最常見），水磨（亞洲和東南亞文明使用）和動物（黑暗時代所有人共享，但在黑暗時代之後只有非洲文明使用）。
            </li>
            <li>印度磨坊是模仿現實中在伊朗的Nashtifan風車。</li>
            <li>
              磨坊是三個（海港算進去的話是四個）有動畫的建築之一;
              另外兩個是碼頭和東南亞的馬廄。漁網不包括在內。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            磨坊是中世紀早期的企業之一。從古代傳下來，這項技術大大加快了將小麥和其他穀物研磨成麵粉的過程。磨坊使用水，風和動物轉動石磨。糧食被轉換成麵粉而磨坊所有者保留一部分的麵粉作為佣金。磨坊可能由當地的領主，修道院或當地的企業家擁有。磨坊的利潤導致了衝突和競爭，每個人必須起身維護社區糧食的權利。磨坊主人可以很富有。
            隨著中世紀的發展，他們一部分成為中產階級的商人和工匠。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                磨坊
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Millicon.png" width="45" alt="" />
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
            <td class="unit3">需要建設</td>
            <td class="unit4">
              <nuxt-link to="/building/Mill">磨坊</nuxt-link>
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
            <td class="unit3">木</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
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
              />100
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
              <nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由小蝦、賜齡、眠協助編輯</div>
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
                src="~assets/MillDarkAge.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有黑暗時代的磨坊。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/MillFeudalAgeHD.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有封建時代的磨坊(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/MillFeudalAgeDLC.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有封建時代的磨坊(HD擴充資料片)。</em></p>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Millaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有城堡時代的磨坊(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Mills_hd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡時代的磨坊(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Nashtifan_windmills.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>伊朗Nashtifan風車磨坊，這是印度磨坊建築的模板。</em></p>
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
