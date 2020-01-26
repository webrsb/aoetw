<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城鎮中心</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>城鎮中心</b>
            是一個在世紀帝國II到達<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >後能建造的建築，玩家間俗稱為<b>TC</b>。它能訓練<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >、加速村民採集資源的速率、還是資源收集站，同時也支援5個人口上限。在世紀帝國II中可說是最重要的<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >也不為過。
          </p>
          <p>
            在隨機地圖中每個玩家在開始時都有一座城鎮中心。只有演進到<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >才能建造額外的城鎮中心，若在城堡時代前城鎮中心就被破壞那遊戲幾乎就結束了。在特定地圖中(例如<nuxt-link
              to="/maps/Nomad"
              >游牧</nuxt-link
            >地圖)城堡時代前玩家可自由選擇蓋城鎮中心的位置，若不喜歡可毀掉之後在新地點重蓋一個新的。
          </p>
          <p>
            城鎮中心作為庇護所可駐紮高達15個單位，村民在城鎮中心周圍工作十分安全，敵方來襲時只要敲響警戒鐘讓村民躲入城鎮中心放箭，直到敵人被消滅或退去後再次敲鐘返回工作崗位即可。<nuxt-link
              to="/units/Archer_Units"
              >弓兵</nuxt-link
            >也可進入城鎮中心增加城鎮中心的<nuxt-link to="/elements/Attack"
              >攻擊力</nuxt-link
            >與放箭數。
          </p>
          <p>
            小技巧:若要讓村民回到城鎮中心時可選擇不要敲警戒鐘，而是圈選後手動駐紮在城鎮中心，這樣可以讓靠近城鎮中心的村民達到瞬間移動的效果。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              城鎮中心是遊戲中最重要的建築物之一，它是每個玩家的核心，也是生產每個玩家發展帝國骨幹所需村民的唯一途徑。
            </li>
            <li>
              一旦城堡時代到來，建立更多的城鎮中心是至關重要的，因為它允許玩家增加村民的數量和撐起整個經濟。城鎮中心應盡量建造在資源旁邊(有兩種以上資源就可考慮蓋城鎮中心)。在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >和帝王時代失去城鎮中心往往會阻礙玩家的經濟，所以他們往往是攻擊的目標。
            </li>
            <li>
              現在的meta中有兩種策略，一種是單TC強軍事，另一種是龜家裡爆TC。單TC強軍事......；龜家裡爆TC則是藉由穩固經濟在後期贏過對手，通常國際禮儀來說會蓋3TC，但每場狀況不同會在2~4之間徘徊。
            </li>
            <li>
              修復城鎮中心不花費任何<nuxt-link to="/resource/Stone"
                >石頭</nuxt-link
              >，但需要花費兩倍的<nuxt-link to="/resource/Wood">木頭</nuxt-link
              >。因此，修復幾乎被毀壞的城鎮中心(花費550<nuxt-link
                to="/resource/Wood"
                >木材</nuxt-link
              >)跟用275木材和100石頭建立一個新的。顯然後者才是明智之舉。
            </li>
          </ul>
          <h3>可訓練的單位與技術</h3>
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="n1">
                <h4>
                  <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
                </h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/VillagerMaleIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Villager">村民</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/feudal_age.png"
                      alt=""
                    /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/Loom.jpg" alt="" /><nuxt-link
                      to="/techs/Loom"
                      >織布技術</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="n1">
                <h4>
                  <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
                </h4>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/tower_watch.png"
                      alt=""
                    /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/castle_age.png"
                      alt=""
                    /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/wheelbarrow.png"
                      alt=""
                    /><nuxt-link to="/techs/Wheelbarrow">獨輪推車</nuxt-link>
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
                      src="~assets/town_patrol.png"
                      alt=""
                    /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/imperial_age.png"
                      alt=""
                    /><nuxt-link to="/techs/age/Imperial_Age"
                      >帝王時代</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/hand_cart.png"
                      alt=""
                    /><nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link>
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
              <td class="tta4">射程較近的範圍單位(在駐紮的時候)</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">
                射程較遠的範圍單位、<nuxt-link to="/units/Tarkan"
                  >韃靼騎兵</nuxt-link
                >、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                >、<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
                >和<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link>。
              </td>
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
                /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%)
                <br />
                <img
                  class="gg"
                  src="~assets/architecture.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>(+10%)
              </td>
            </tr>
            <tr>
              <td class="tta1">攻擊</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/fletching.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1) <br />
                <img
                  class="gg"
                  src="~assets/bodkin_arrow.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
                <br />
                <img
                  class="gg"
                  src="~assets/Bracer.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1) <br />
                <img
                  class="gg"
                  src="~assets/chemistry.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1) <br />
                <img
                  class="gg"
                  src="~assets/unique_tech.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Tigui">部落領袖</nuxt-link
                >:城鎮中心不須駐守就可放箭，<nuxt-link to="/civs/Malians"
                  >馬利</nuxt-link
                >限定
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:20%">命中率</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Ballistics.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
                >:對移動目標命中率上升
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
              <td class="tta1" style="width:10%">工作速率</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/treadmill_crane.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >(+20%工作效率)
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">其它</td>
              <td class="tta4">
                <img
                  class="gg"
                  src="~assets/Herbalmedicine.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link
                >:增加駐守單位回血速度<br />
                <img
                  class="gg"
                  src="~assets/unique_tech_imperial.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Crenellations">垛口</nuxt-link
                >:<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
                >駐守也可放箭，<nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >限定
              </td>
            </tr>
          </table>

          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Britons">不列顛</nuxt-link
                >：城鎮中心的木頭花費-50%
              </li>
              <li>
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                >：在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
                >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
                >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
                >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
                >，城鎮中心增加10%/20%/30%40%的<nuxt-link
                  to="/elements/Hit_points"
                  >血量</nuxt-link
                >。<nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link
                ><nuxt-link to="/techs">科技</nuxt-link>免費。
              </li>
              <li>
                <nuxt-link to="/civs/Chinese">中國</nuxt-link
                >：任何技術(除了時代演進外)在封建/<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/帝王時代分別便宜10%/15%/20%。城鎮中心可支援10人口且視野+5。
              </li>
              <li>
                <nuxt-link to="/civs/Incas">印加</nuxt-link
                >：城鎮中心石頭造價便宜15%
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link
                >：城鎮中心木材造價便宜15%
              </li>
              <li>
                <nuxt-link to="/civs/Persians">波斯</nuxt-link
                >：城鎮中心生命值+100% HP，在封建/<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡</nuxt-link
                >/帝王時代的工作效率分別加快10%/15%/20%。
              </li>
              <li>
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
                >：城鎮中心的建造速度快30%。
              </li>
              <li>
                <nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >：城鎮中心可駐紮25個單位。
              </li>
            </ul>
          </div>
          <h3>團隊加分</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link>：團隊<nuxt-link
                  to="/building/University"
                  >學院</nuxt-link
                >科技研發速度快80%
              </li>
            </ul>
          </div>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >:城鎮中心+2攻擊跟+5射程。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >:城鎮中心+2攻擊跟+5視野。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              城鎮中心的攻擊可受<nuxt-link to="/techs/Chemistry">化學</nuxt-link
              >加成。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >:城鎮中心視野+5(從<nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >移除)
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >:城鎮中心可以駐守25單位；+2攻擊跟+5視野被移除。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>從<nuxt-link
                to="/armor/Armor_Class_Ship"
                >船艦護甲</nuxt-link
              >分類移除，所以<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >對他們的攻擊加乘沒有了，現在<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >對他們攻擊+1。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            所有的鄉鎮都有一個行政中心，是政府權力和領導的所在地。在<nuxt-link
              to="/techs/age/Dark_Age"
              >黑暗時代</nuxt-link
            >，這可能是當地領導人的居所。後來它可能是市政廳或當地主人的莊園。城鎮中心往往是儲存重要物資的地方，特別是<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >生產過剩的時候可以存起來備用。城鎮中心被破壞通常意味著基礎設施的損壞。如果不能恢復，這個鎮或村就不能再運作。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/TCDarkAge.jpg"
                  alt=""
              /></gallery>
              <p><em>黑暗時代的城鎮中心。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/TCFeudalAgeHD.jpg"
                  alt=""
              /></gallery>
              <p>
                <em
                  >所有<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
                  >的城鎮中心(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
                  >和<nuxt-link to="/games/aoc">征服者入侵</nuxt-link>)。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/TCFeudalAgeDLC.jpg"
                  alt=""
              /></gallery>
              <p><em>所有封建時代的城鎮中心(HD 擴充版)。</em></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/Towncenteraokaoc.jpg"
                  alt=""
              /></gallery>
              <p><em>所有城堡時代的城鎮中心(帝王世紀和征服者入侵)。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/Towncenteraoe2expansions.png"
                  alt=""
              /></gallery>
              <p><em>所有城堡時代的城鎮中心(HD 擴充版)。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/TCImperialAgeHD.jpg"
                  alt=""
              /></gallery>
              <p><em>所有帝王時代的城鎮中心(帝王世紀和征服者入侵)。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/TCImperialAgeDLC.jpg"
                  alt=""
              /></gallery>
              <p><em>所有帝王時代的城鎮中心(HD 擴充版)。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                城鎮中心
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/town_center.png" width="45" alt="" />
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
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">150秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">生產和強化村民<br />收集資源<br />時代演進</td>
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
            <td class="unit4">275</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Stone">石頭</nuxt-link>
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
            <td class="unit4">4x4</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">所有時代:2400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Garrison">駐軍</nuxt-link>
            </td>
            <td class="unit4">所有時代:15</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">5(可穿甲)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +5對<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
              ><br />+5對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >
              <br />+1對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">箭矢速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/dark_age.png"
                width="30"
                alt=""
              />3 <br />
              <img
                class="gg"
                src="~assets/feudal_age.png"
                width="30"
                alt=""
              />4 <br />
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              />5 <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />6
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/dark_age.png"
                width="30"
                alt=""
              />5 <br />
              <img
                class="gg"
                src="~assets/feudal_age.png"
                width="30"
                alt=""
              />6 <br />
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              />7 <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              />8
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">8</td>
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
