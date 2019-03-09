<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>瞭望箭塔</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>瞭望箭塔</b>於可於<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >建造。瞭望箭塔可有效擔負起早期的防禦工作。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            瞭望箭塔是防禦基地的重要部分之一。瞭望箭塔可以提供玩家城鎮對早期攻擊的保護。瞭望箭塔應放置在狹窄處或敵方不易進攻的位置(如懸崖或森林後面)，或是在塔的附近直接用牆圍住(封建時代沒有
            <nuxt-link to="/techs/Murder_Holes">垛孔</nuxt-link
            >)防止近戰單位接近並摧毀瞭望箭塔。
          </p>
          <p>
            瞭望箭塔也可用在進攻方面，例如著名的塔攻。在敵人的城鎮附近找尋資源目標，並在敵人無法發現的<nuxt-link
              to="/los.php"
              >視野</nuxt-link
            >內建造<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >阻止敵人收集資源。執行這個戰術玩家需要在<nuxt-link
              to="/techs/age/Dark_Age"
              >黑暗時代</nuxt-link
            >先採集<nuxt-link to="/resource/Stone">石礦</nuxt-link
            >，並在上黑暗時代前派<nuxt-link to="/units/Villager">村民</nuxt-link
            >(至少五名)前往敵方城鎮附近，也可搭配
            <nuxt-link to="/units/Militia">民兵</nuxt-link
            >(通常三到四個)和<nuxt-link to="/units/Scout_Cavalry"
              >斥候騎兵</nuxt-link
            >，一上封建就在偵查好的敵人資源附近馬上蓋塔，用
            <nuxt-link to="/units/Militia">民兵</nuxt-link>跟<nuxt-link
              to="/units/Scout_Cavalry"
              >斥候</nuxt-link
            >阻擋前來攻擊村民的敵人，建好一個後在前一個塔的射程範圍內再蓋一個，一直往敵方城鎮前進直到敵人資源枯盡投降，也可蓋
            <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >和<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
            >訓練<nuxt-link to="/units/Archer">弓兵</nuxt-link
            >增加火力還有升級<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
            >跟射程範圍。可在瞭望箭塔的附近建造
            <nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>或<nuxt-link
              to="/building/Palisade_Wall"
              >木牆</nuxt-link
            >消除塔的最小射程範圍。
          </p>
          <p>
            駐紮<nuxt-link to="/units/Archer">弓箭手</nuxt-link>和<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >可增加瞭望箭塔的箭矢數量，同時增加傷害。最多可以有五名（
            <nuxt-link to="/civs/Teutons">條頓人</nuxt-link
            >可十名）的徒步單位（<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >和<nuxt-link to="/units/Archer">弓箭手</nuxt-link>，儘管<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >不會增加火力）可以駐守在一座塔。駐紮的單位可以慢慢恢復<nuxt-link
              to="/elements/Hit_points"
              >生命值</nuxt-link
            >。
          </p>
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
            <td class="tta1">強勢(容易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link>，<nuxt-link
                to="/units/Archer_Units"
                >弓兵系</nuxt-link
              >，較弱的近戰單位。
            </td>
          </tr>
          <tr>
            <td class="tta1">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >，<nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>，
              <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>，<nuxt-link
                to="/units/War_Elephant"
                >戰象</nuxt-link
              >，<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>。
            </td>
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
              <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Great_Wall">長城</nuxt-link>:+30%
              HP，<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定
            </td>
          </tr>
          <tr>
            <td class="tta1">攻擊力</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Fletching.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Bodkinarrow.jpg"
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
                src="~assets/Chemistry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1) <br />
              <img class="gg" src="~assets/Arrowlits.jpg" alt="" /><nuxt-link
                to="/techs/Arrowslits"
                >箭狹槽</nuxt-link
              >(+1) <br />
              <img
                class="gg"
                src="~assets/Heatedshot.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heated_Shot">預熱射擊</nuxt-link
              >(+4，僅對<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
              >) <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Yeomen">義勇騎兵</nuxt-link
              >:徒步<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >射程+1，箭塔攻擊+2，<nuxt-link to="/civs/Britons"
                >不列顛</nuxt-link
              >限定 <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Yasama">射箭孔</nuxt-link
              >:箭塔可發射額外兩支箭，<nuxt-link to="/civs/Japanese"
                >日本</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1">範圍</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Fletching.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Bodkinarrow.jpg"
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
                src="~assets/Murderholes.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Murder_Holes">垛孔</nuxt-link
              >:消除最小射程
            </td>
          </tr>
          <tr>
            <td class="tta1">開火速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Stronghold">堡壘</nuxt-link
              >(+25%，<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1">準確度</td>
            <td class="tta4">
              <img class="gg" src="~assets/Ballistics.jpg" alt="" /><nuxt-link
                to="/techs/Ballistics"
                >彈道學</nuxt-link
              >:較易擊中移動目標
            </td>
          </tr>
          <tr>
            <td class="tta1">護甲</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Masonry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
              >(+1/+1，+3建築護甲) <br />
              <img
                class="gg"
                src="~assets/Architecture.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >(+1/+1，+3建築護甲)
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
            <td class="tta1">
              抗<nuxt-link to="/elements/Conversion">招降</nuxt-link>能力
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
            <td class="tta1">建造速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >(+20%)
            </td>
          </tr>
          <tr>
            <td class="tta1">其他</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Herbalmedicine.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link
              >:駐紮單位治療速度加快 <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Crenellations">垛口</nuxt-link
              >:駐紮步兵可增加箭數
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
              >和<nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link
              >的花費便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：箭塔在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >增加10%/20%/30%/40% HP
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對箭塔有利的科技在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>：箭塔<nuxt-link
                to="/resource/Stone"
                >石頭</nuxt-link
              >花費-15%。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link
              >：箭塔建造速度更快(75s其他<nuxt-link to="/civs">文明</nuxt-link>
              80s)。箭塔科技升級免費
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：箭塔<nuxt-link
                to="/resource/Wood"
                >木頭</nuxt-link
              >花費-15%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：<nuxt-link
                to="/techs/Town_Watch"
                >城鎮瞭望</nuxt-link
              >和<nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代研發快10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：瞭望箭塔建造速度快30%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：駐紮單位提升到10人，<nuxt-link to="/techs/Murder_Holes"
                >垛孔</nuxt-link
              >科技免費。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >：瞭望箭塔+3視野。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：同盟<nuxt-link
                to="/building/University"
                >學院</nuxt-link
              >研究科技速度快80%。
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
            <li>
              升級到<nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
              >需要100<nuxt-link to="/resource/Food">食物</nuxt-link>和250石材。
            </li>
            <li>
              <nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
              >對<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>攻擊+7因為
              <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link
              >的護甲分類是<nuxt-link to="/armor/Armor_Class_Ship"
                >船艦護甲</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
              >的第二支箭矢的攻擊是1。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              升級到<nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
              >需要100食物和250<nuxt-link to="/resource/Wood">木材</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link
              >攻擊+2。
            </li>
            <li>
              引入<nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link>。
            </li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:引入<nuxt-link
                to="/techs/Yeomen"
                >義勇騎兵</nuxt-link
              >。只能在<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >研發
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>:引入<nuxt-link
                to="/techs/Crenellations"
                >垛口</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:引入<nuxt-link
                to="/techs/Yeomen"
                >義勇騎兵</nuxt-link
              >。可在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >研發
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>:引入<nuxt-link
                to="/techs/Stronghold"
                >堡壘</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>:引入<nuxt-link
                to="/techs/Yasama"
                >射箭孔</nuxt-link
              >，可讓箭塔可發射額外三支箭。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>:<nuxt-link
                to="/building/Watch_Tower"
                >瞭望箭塔</nuxt-link
              >建造速度快33%。
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
              >分類中移除，所以箭塔對他們的攻擊加成也移除，現在箭塔對他們的攻擊是+1。
            </li>
            <li>
              4.8版後<nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link
              >的第二支箭攻擊是2。
            </li>
            <li>
              引入<nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link
              >，在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >可研發並給<nuxt-link to="/building/Watch_Tower"
                >瞭望箭塔</nuxt-link
              >攻擊+2。在4.8版
              <nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link
              >移到帝王時代並給箭塔攻擊+1。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link
              >:在4.8版後<nuxt-link to="/techs/Yasama">射箭孔</nuxt-link
              >讓箭塔可發射額外<strong>兩支箭</strong>。
            </li>
            <li>
              在<nuxt-link to="/news/ver5-8">5.8版</nuxt-link>後，<nuxt-link
                to="/civs/Koreans"
                >韓國</nuxt-link
              >蓋塔時間60s → 75s (其他文明 80s)
            </li>
            <li>
              在<nuxt-link to="/news/ver5-8">5.8版</nuxt-link>後，箭塔花費25W
              125S → 50W 125S
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            一些最早的強化<nuxt-link to="/armor/Armor_Class_stone_defense"
              >石頭建築</nuxt-link
            >是簡單的箭塔。從塔上領主可以對很大範圍進行觀察。這個石頭結構使得它間不可慛除非被一大群部隊攻擊。領主還可以撤回到塔樓內，把他的動物放在底部，二樓放存糧和寶藏，住在上面的樓層，並在塔的頂端戰鬥。諾曼人因在諾曼第和英格蘭的土地上建造石製箭塔以提供軍事和政治控制而聞名。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                瞭望箭塔
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Watchtowericon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">箭塔</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建造時間</td>
            <td class="unit4">80秒</td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">攻擊視野內的敵人</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木材</td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit3">石頭</td>
            <td class="unit4">125</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">1x1</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">1020</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/Garrison">駐軍</nuxt-link></td>
            <td class="unit4">所有時代:5</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">5(可穿甲)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link>+7
              <br />對<nuxt-link to="/armor/Armor_Class_Spearman"
                >長槍兵</nuxt-link
              >+2 <br />對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝單位</nuxt-link
              >+1
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
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">1</td>
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
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br />
              <nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">建築演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Watchtowericon.png"
                alt=""
              /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Guard-tower-research.jpg"
                alt=""
              />100食物250木材
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">30秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
                src="~assets/Watchtoweraokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有的瞭望箭塔(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
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
                src="~assets/Watchtowerhd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有的瞭望箭塔(HD擴充資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Spritesheet_towers.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:185px">
              <p>
                <em
                  >各種箭塔在一般地圖/下雪地圖的樣子和駐紮單位時的樣子(包括瞭望箭塔/防禦箭塔/<nuxt-link
                    to="/building/Keep"
                    >大型箭塔</nuxt-link
                  >/<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
                  >/<nuxt-link to="/building/Outpost">哨站</nuxt-link
                  >/海上箭塔/詛咒之塔等)。</em
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
  layout: 'allunit',
  components: {}
}
</script>
<style></style>
