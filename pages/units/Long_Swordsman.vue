<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>長劍兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            長劍兵是一個步兵單位，升到城堡時代可以在<a href="/building/Barracks"
              >軍營</a
            >訓練。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>長劍兵的主要優勢並不在於兵種強度，而在於訓練的成本和快速生產。</p>
          <p>
            長劍士是<a href="/techsage/Castle_Age">城堡時代</a
            >的基本步兵單位。能夠擊敗除了<a href="/units/Knight">騎士</a>和
            <a href="/units/Archer">弓箭手</a
            >外所有的城堡時代單位，長劍兵也對建築物有攻擊加成，但因為行動遲緩、血量也不高，他仍不是一個良好的主力進攻單位，除非對手出了非常多的
            <a href="/units/Eagle_Warrior">鷹勇士</a>
          </p>
          <p>
            早期<a href="/games/aoc">《世紀帝國II:征服者入侵</a
            >》前的版本，長劍兵可說是一個雞肋單位，基本上沒有玩家會去生產，而到了被遺忘的王朝，長劍兵進一步的被強化，在現今
            <a href="/units/Eagle_Warrior"></a
            >鷹勇士縱橫的年代，長劍兵作為一個反老鷹兵種，讓其再度浮上檯面。
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
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">
              <a href="/units/Skirmisher">矛兵</a>、<a
                href="/units/Scout_Cavalry"
                >駱駝</a
              >、 <a href="/units/Eagle_Scout">鷹勇士</a>、<a
                href="/units/Spearman"
                >輕騎兵</a
              >、<a href="/units/Villager">重裝長槍兵</a>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <a href="/units/Archer_Units">弓兵</a>、<a href="/units/Scorpion"
                >弩炮</a
              >、<a href="/units/Cataphract">聖騎兵</a>、
              <a href="/units/Jaguar_Warrior">豹勇士</a>、<a href="/units/Boyar"
                >貴族鐵騎</a
              >、<a href="/units/Conquistador">征服者</a>、
              <a href="/units/Janissary">土耳其火槍兵</a>、<a
                href="/units/Slinger"
                >投石手</a
              >、<a href="/Teutonic_units/Knight">條頓武士</a>。
            </td>
          </tr>
          <tr class="tta">
            <td class="" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <img class="gg" src="~assets/Forging.jpg" width="30" alt="" /><a
                href="/techs/Forging"
                >鍛造</a
              >(+1)
              <br />
              <img
                class="gg"
                src="~assets/Ironcasting.jpg"
                width="30"
                alt=""
              /><a href="/techs/Iron_Casting">鑄造</a>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Blastfurnace.jpg"
                width="30"
                alt=""
              /><a href="/techs/Blast_Furnace">鼓風爐</a>(+2)
              <br />
              <img class="gg" src="~assets/Arson.jpg" width="30" alt="" /><a
                href="/techs/Arson"
                >縱火</a
              >:步兵+2攻擊vs<a href="/Armor_Class_standard_building.php"
                >標準建築</a
              >
              <br />
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><a href="/techs/Garland_Wars">榮冠戰爭</a>:步兵攻擊+4，<a
                href="/civs/Aztecs"
                >阿茲特克</a
              >限定。
              <br />
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><a href="/techs/Druzhina">王家侍從</a>:步兵單位有踐踏傷害，<a
                href="/civs/Slavs"
                >斯拉夫</a
              >限定。
              <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><a href="/techs/Chieftains">酋長</a
              >:步兵對騎兵攻擊+5，對駱駝騎兵攻擊+4，<a href="/civs/Vikings"
                >維京</a
              >限定。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Scalemailarmor.jpg"
                width="30"
                alt=""
              /><a href="/techs/Scale_Mail_Armor">步兵鱗甲</a>(+1/+1)
              <br />
              <img
                class="gg"
                src="~assets/Chainmailarmor.jpg"
                width="30"
                alt=""
              /><a href="/techs/Chain_Mail_Armor">步兵鎖甲</a>(+1/+1)
              <br />
              <img
                class="gg"
                src="~assets/Platemailarmor.jpg"
                width="30"
                alt=""
              /><a href="/techs/Plate_Mail_Armor">步兵板甲</a>(+1/+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img class="gg" src="~assets/Squires.jpg" width="30" alt="" /><a
                href="/techs/Squires"
                >護衛</a
              >(+10%)
            </td>
          </tr>

          <tr>
            <td class="tta1" style="width:10%">視野</td>
            <td class="tta4">
              <img class="gg" src="~assets/Tracking.jpg" width="30" alt="" /><a
                href="/techs/Tracking"
                >追縱技術</a
              >(+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">招降抵抗</td>
            <td class="tta4">
              <img class="gg" src="~assets/Faith.jpg" width="30" alt="" /><a
                href="/techs/Faith"
                >忠誠信仰</a
              >
              <br />
              <img class="gg" src="~assets/Heresy.png" width="30" alt="" /><a
                href="/techs/Heresy"
                >異端邪說</a
              >
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生產速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Conscription.jpg"
                width="30"
                alt=""
              /><a href="/techs/Conscription">徵兵制度</a>(+33%)
              <br />
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><a href="/techs/Perfusion">灌注士氣</a>:兵營工作速率加快2倍，<a
                href="/civs/Goths"
                >哥德</a
              >限定。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生產成本</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><a href="/techs/Perfusion">灌注士氣</a
              >:軍營步兵單位訓練不需花黃金，<a href="/civs/Malay">馬來</a>限定。
            </td>
          </tr>
        </table>

        <h3>剋長劍兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對長劍兵的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><a href="/units/Cannon_Galleon">火砲戰船</a>→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><a href="/Elite_units/Cannon_Galleon">精銳火砲戰船</a>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/CataphractIcon.jpg" alt="" /><a
                      href="/units/Cataphract"
                      >精銳聖騎兵</a
                    >(<a href="/civs/Byzantines">拜占庭</a>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    /><a href="/units/Jaguar_Warrior">精銳豹勇士</a>(<a
                      href="/civs/Aztecs"
                      >阿茲特克</a
                    >限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HandCannoneerIcon.jpg"
                      alt=""
                    /><a href="/units/Hand_Cannoneer">火槍兵</a>
                  </li>
                  <li>
                    <img class="gg" src="~assets/Slingericon.png" alt="" /><a
                      href="/units/Slinger"
                      >投石手</a
                    >(<a href="/civs/Incas">印加</a>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    /><a href="/units/Jaguar_Warrior">豹勇士</a>(<a
                      href="/civs/Aztecs"
                      >阿茲特克</a
                    >限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/CataphractIcon.jpg" alt="" /><a
                      href="/units/Cataphract"
                      >聖騎兵</a
                    >(<a href="/civs/Byzantines">拜占庭</a>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><a href="/Plumed_units/Archer">精銳羽毛箭射手</a>(<a
                      href="/civs/Mayans"
                      >馬雅</a
                    >限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><a href="/Plumed_units/Archer">羽毛箭射手</a>(<a
                      href="/civs/Mayans"
                      >馬雅</a
                    >限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          技術:以下技術會給以下單位對長劍兵有額外攻擊。
          <div class="n1">
            <img class="gg" src="~assets/Unique-tech.jpg" width="22" alt="" />
            <a href="/techs/Parthian_Tactics">後勤學</a>
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/CataphractIcon.jpg" alt="" /><a
                  href="/units/Cataphract"
                  >聖騎兵</a
                >→ <img class="gg" src="~assets/CataphractIcon.jpg" alt="" /><a
                  href="/units/Cataphract"
                  >精銳聖騎兵</a
                >(<a href="/civs/Byzantines">拜占庭</a>限定)
              </li>
            </ul>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <a href="/civs/Aztecs">阿茲特克</a>：長劍兵生產速度提高15％。
            </li>
            <li>
              <a href="/civs/Burmese">緬甸</a>：長劍兵在封建/城堡/帝王時代有
              +1/+2/+3攻擊。
            </li>
            <li><a href="/civs/Celts">賽爾特</a>：長劍兵移動加快15％。</li>
            <li>
              <a href="/civs/Chinese">中國</a
              >：利於長劍兵的技術在封建/城堡/帝王時代便宜10％/15％/20％。
            </li>
            <li>
              <a href="/civs/Goths">哥德</a>：長劍兵便宜35％並對<a
                href="/armor/Armor_Class_Standard_Building"
                >標準建築</a
              >攻擊+1。研發 <a href="/techs/Perfusion">灌注士氣</a>後研發<a
                href="/techs/Tracking"
                >追縱技術</a
              >、<a href="/techs/Squires">護衛</a>、
              <a href="/techs/Arson">縱火</a>和升級雙手劍兵的速度快100%。
            </li>
            <li><a href="/civs/Japanese">日本</a>：長劍兵攻速快33％。</li>
            <li>
              <a href="/civs/Magyars">馬札爾</a>：免費升級<a
                href="/techs/Forging"
                >鍛造</a
              >、<a href="/techs/Iron_Casting">鑄造</a>和
              <a href="/techs/Blast_Furnace">鼓風爐</a>。
            </li>
            <li>
              <a href="/civs/Malians">馬利</a>：長劍兵在城堡/帝王時代有 +2/+3
              遠程護甲。
            </li>
            <li>
              <a href="/civs/Portuguese">葡萄牙</a>：長劍兵黃金成本減少15％。
            </li>
            <li>
              <a href="/civs/Slavs">斯拉夫</a>：免費<a href="/techs/Tracking"
                >追縱技術</a
              >。
            </li>
            <li>
              <a href="/civs/Spanish">西班牙</a>：<a href="/building/Blacksmith"
                >兵工廠</a
              >的科技升級不須黃金。
            </li>
            <li>
              <a href="/civs/Vietnamese">越南</a>：免費<a
                href="/techs/Conscription"
                >徵兵制度</a
              >。
            </li>
            <li>
              <a href="/civs/Vikings">維京</a
              >：長劍兵在城堡/帝王時代加15％/20％的生命值。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <a href="/civs/Berbers">柏柏</a>：<a href="/techs/Kasbah"
                >聚居堡壘</a
              >能夠加速<a href="/techs/Conscription">徵兵制度</a
              >、的研究時間(快25%)。
            </li>
            <li>
              <a href="/civs/Goths">哥德</a>：長劍兵訓練和升級快20%。研發<a
                href="/techs/Tracking"
                >追縱技術</a
              >、 <a href="/techs/Squires">護衛</a>、<a href="/techs/Arson"
                >縱火</a
              >科技的時間快20%。
            </li>
            <li><a href="/civs/Teutons">條頓</a>：長劍兵更不容易被招降。</li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><a href="/games/aok">帝王世紀</a></em>
          </h3>
          <ul>
            <li>長劍兵現在有55HP。</li>
            <li>
              長劍兵擁有+2攻擊VS<a href="/armor/Armor_Class_Standard_Building"
                >標準建築</a
              >。
            </li>
            <li>長劍兵遠防是0。</li>
            <li>
              <a href="/civs/Goths">哥德</a
              >:在城堡/帝王時代，長劍兵成本便宜15%/25%。
            </li>
          </ul>
          <h3>
            <em><a href="/games/aoc">征服者入侵</a></em>
          </h3>
          <ul>
            <li>
              長劍兵擁有+4攻擊VS<a href="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</a
              >。
            </li>
            <li>長劍兵現在擁有1的遠防。</li>
            <li>引入<a href="/techs/Heresy">異端邪說</a>。</li>
            <li>
              <a href="/civs/Goths">哥德</a
              >:1.0c後，哥德長劍兵從城堡時代開始便宜35%。引入<a
                href="/techs/Perfusion"
                >灌注士氣</a
              >
            </li>
          </ul>
          <h3>
            <em><a href="/games/aof">失落的帝國</a></em>
          </h3>
          <ul>
            <li>長劍兵現在有60HP。</li>
            <li>
              長劍兵擁有+3攻擊VS<a href="/armor/Armor_Class_Standard_Building"
                >標準建築</a
              >。
            </li>
            <li>
              長劍兵擁有+6攻擊VS<a href="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</a
              >。
            </li>
          </ul>
          <h3>
            <em><a href="/games/ak">非洲王國</a></em>
          </h3>
          <ul>
            <li>新科技<a href="/techs/Arson">縱火</a>引進。</li>
            <li>
              <a href="/civs/Vikings">維京</a>:4.8版本引進<a
                href="/techs/Chieftains"
                >酋長</a
              >科技，長劍兵對
              <a href="/armor/Armor_Class_Cavalry">騎兵單位</a>有+5攻擊。
            </li>
            <li>
              <a href="/civs/Vikings">維京</a>:在4.8b版本後，<a
                href="/techs/Chieftains"
                >酋長</a
              >讓長劍兵對駱駝有額外+2攻擊。
            </li>
          </ul>
          <h3>
            <em><a href="/games/aor">王者崛起</a></em>
          </h3>
          <ul>
            <li>
              <a href="/civs/Vikings">維京</a>:5.7版本<a
                href="/techs/Chieftains"
                >酋長</a
              >科技現在讓長劍兵對駱駝有額外+4攻擊。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>民兵系兵是遊戲內唯一，三階以上升級的單位。</li>
            <li>
              馬來的民兵系在研發<a href="/Forced Levy.php">強制徵兵</a
              >後不用黃金。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <a href="/img/Militialine.png"
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/Militialine.png"
                  alt=""
              /></a>
              <p><em>民兵系升級列表</em></p>
            </div>
            <div class="col-md-4">
              <a href="/img/Manatarms.png"
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/Longswordsman.png"
                  alt=""
              /></a>
              <p><em>一群長劍兵</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">長劍兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/LongswordsManIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4"><a href="/units/Infantry_Units">步兵</a></td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castle-age-reseach.jpg" alt="" /><a
                href="/techsage/Castle_Age"
                >城堡時代</a
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Barracks-logo.jpg" alt="" /><a
                href="/building/Barracks"
                >軍營</a
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">21秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">肉</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">20</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">9(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +6對<a href="/armor/Armor_Class_Eagle_Warrior">鷹勇士</a>
              <br />+3對<a href="/armor/Armor_Class_Standard_Building"
                >標準建築</a
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4">
              <a href="/armor/Armor_Class_Infantry">步兵</a>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/ManAtArmsIcon.jpg" alt="" /><a
                href="/units/Man-at-Arms"
                >裝甲步兵</a
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/2HandedswordsmanIcon.jpg" alt="" /><a
                href="/units/Two-Handed_Swordsman"
                >雙手劍兵</a
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Tw-handed-swordsman-researc.jpg"
                alt=""
              />300肉100金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">75</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
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
