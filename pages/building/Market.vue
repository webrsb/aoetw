<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>市集</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>市集</b>是<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >的經濟<nuxt-link to="/building">建築</nuxt-link
            >，需要蓋完<nuxt-link to="/building/Mill">磨坊</nuxt-link
            >才能建造。主要功能為使用<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >購買資源，以及販賣資源換取黃金或生產<nuxt-link
              to="/units/Trade_Cart"
              >貿易車隊</nuxt-link
            >與其他玩家(不管是同盟、中立甚至是敵對)進行貿易，並產生黃金，以貿易車隊來說距離越遠所產生的黃金數量就越多。
          </p>
          <p>
            當然，市集也有許多團隊取向的<nuxt-link to="/techs">科技</nuxt-link
            >可以研發，而這些功能使它不管在單人或是團隊遊戲都相當重要。
          </p>
          <p>
            而<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
            >的市集是相當強悍的，交易成本只需要5%。厲害的玩家可藉由市集來調整資源，以達到出兵最大化的優勢。
          </p>
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
                  <img class="gg" src="~assets/TradeCartIcon.jpg" /><nuxt-link
                    to="/units/Trade_Cart"
                    >貿易車隊</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/Cartography.jpg" /><nuxt-link
                    to="/techs/Cartography"
                    >製圖學</nuxt-link
                  >
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
                  <img class="gg" src="~assets/CaravanII.png" /><nuxt-link
                    to="/techs/Caravan"
                    >大商隊</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/Coinage.jpg" /><nuxt-link
                    to="/techs/Coinage"
                    >鑄幣術</nuxt-link
                  >
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
                  <img class="gg" src="~assets/Banking.jpg" /><nuxt-link
                    to="/techs/Banking"
                    >銀行制度</nuxt-link
                  >
                </li>
                <li>
                  <img class="gg" src="~assets/Guilds.jpg" /><nuxt-link
                    to="/techs/Guilds"
                    >行會制度</nuxt-link
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
            <td class="tta1">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
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
          <tr>
            <td class="tta1">其他</td>
            <td class="tta4">
              <img class="gg" src="~assets/Guilds.jpg" /><nuxt-link
                to="/techs/Guilds"
                >行會制度</nuxt-link
              >:在市場交易課稅減至15%
            </td>
          </tr>
        </table>

        <h3>資源交易</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            交易也是相當重要的一部份，因為玩家可以籍此交換資源來平衡經濟。有助於升級時代或克服特定資源暫時短缺的問題。
          </p>
          <p>
            市集中，每樣商品的價格在所有玩家間是一致的，而每次可賣出或買進的數量為100單位。每樣商品(<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >、<nuxt-link to="/resource/Wood">木材</nuxt-link>、<nuxt-link
              to="/resource/Stone"
              >石頭</nuxt-link
            >)擁有一個「公平市價」(此為隱藏數據)的交易價格，但玩家們不能以此「公平市價」當作價格交易，因為它有30%的商品交易費用。在遊戲剛開始時，「公平市價」對於食物和木材為100，但由於交易費的關係，玩家實際看到的比率是70/130(賣出價/買進價)。然而，石頭開始的「公平市價」為130，它導致一開始的比率為91/169。遊戲中每交易100單位商品會增加或減少2單位「公平市價」模擬供給及需求。商品最小及最大的「公平市價」分別為20及9999。也就是說，要以最少的<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >買進商品，玩家要在遊戲開始時，賣出4000單位的食物/木材(獲得1708黃金)或5500單位的石頭(獲得2926黃金)。研發<nuxt-link
              to="/techs/Guilds"
              >行會制度</nuxt-link
            >可減少商品交易費的一半(15%)，但只能在<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >研發且不是所有<nuxt-link to="/civs">文明</nuxt-link
            >都有此<nuxt-link to="/techs">科技</nuxt-link>。
          </p>
          <p>
            <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
            >有不錯的交易加成，因為它建造市集可以減少75單位的木材，並且它的商品交易費只有5%。代表著它能夠在<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >不久之後超越其它文明來達成僧侶爆。
          </p>
        </div>
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
              >，市集增加20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。<nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>免費。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對市集有利的科技在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >：蓋市集前不需要先蓋<nuxt-link to="/building/Mill"
                >磨坊</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：市集便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：市集貿易成本只需要5%，並在建造市集時<nuxt-link
                to="/resource/Wood"
                >木材</nuxt-link
              >花費-43%(約莫是75木材)。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：市集建築速度快30%。
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
              >和<nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
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
            <li>市集在每個時代都是2100HP。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>引入<nuxt-link to="/techs/Caravan">大商隊</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              市集在<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >的HP分別是1800/2100/2100。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >市集的木材花費-43%(約莫是75木材)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            隨著黑暗時代的結束和經濟的復甦，商品和工藝品的交換日漸增加。各種規模的城鎮為農民和商人空出一片空間當擺攤銷售商品的市場。每週會有一天或幾天是指定的市場日，這些天會是工作日的社交亮點。市場也是思想交流，娛樂（吟遊詩人，雜技演員，音樂家）和新聞傳播的場所。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                市集
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Marketicon.png" width="45" alt="" />
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
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
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
            <td class="unit4">60秒</td>
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
            <td class="unit4">4x4</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="30"
                alt=""
              />1800 <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="30"
                alt=""
              />2100 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              />2100
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
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
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">
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
                src="~assets/MarketFeudalAgeHD.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有封建時代的市集(<nuxt-link to="/games/aok"
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
                src="~assets/MarketFeudalAgeDLC.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有封建時代的市集(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Marketaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                  >的市集(帝王世紀和征服者入侵資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" width="200" src="~assets/Market.jpg" alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有城堡時代的市集(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/MarketImperialAgeHD.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有帝王時代的市集(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/MarketImperialAgeDLC.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p><em>所有帝王時代的市集(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_market.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >市集在封建/<nuxt-link to="/techs/age/Castle_Age"
                    >城堡</nuxt-link
                  >/帝王時代在一般地圖/下雪地圖的樣子(<nuxt-link
                    to="/building/Feitoriaicon_Feitoria"
                    >港灣大商站</nuxt-link
                  >是最後一個)。</em
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
