<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>裝甲步兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>裝甲步兵</b>，到<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >就可以在<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >裡進行訓練。他們對<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >的大多數單位擁有強大的優勢，使他們成為破壞對手經濟的有效單位。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            裝甲步兵，在封建時代對地人的打擊和干擾方面非常好用。由於速度較慢，對<nuxt-link
              to="/units/Archer"
              >弓箭手</nuxt-link
            >尤其弱。可以訓練一些<nuxt-link to="/units/Skirmisher"
              >矛兵</nuxt-link
            >來對付弓箭手。而著名的<nuxt-link to="/ar/armstower"
              >裝甲塔戰術</nuxt-link
            >更是讓新手聞風喪膽。裝甲步兵是打得贏<nuxt-link
              to="/units/Scout_Cavalry"
              >斥候</nuxt-link
            >的。
          </p>
          <p>
            一搬來說，<nuxt-link to="/civs/Japanese">日本</nuxt-link
            >、<nuxt-link to="/civs/Celts">塞爾特人</nuxt-link>、<nuxt-link
              to="/civs/Aztecs"
              >阿茲特克</nuxt-link
            >與<nuxt-link to="/civs/Goths">哥德</nuxt-link
            >非常適合生產裝甲步兵來進行封建初期的關鍵打擊。
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
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link
                to="/units/Scout_Cavalry"
                >斥候</nuxt-link
              >、<nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link
              >、<nuxt-link to="/units/Spearman">槍兵</nuxt-link>、<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link
                to="/units/Scorpion"
                >弩砲</nuxt-link
              >。
            </td>
          </tr>
          <tr class="tta">
            <td colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Attack">攻擊力</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/forging.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Forging">鍛造技術</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/iron_casting.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/blast_furnace.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
              <br />
              <img
                class="gg"
                src="~assets/Arson.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Arson">縱火</nuxt-link>:<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link
              >+2攻擊vs<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link
              >:步兵攻擊+4，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >限定。<br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Druzhina">王家侍從</nuxt-link>:<nuxt-link
                to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >有<nuxt-link to="/elements/Area_of_Effect">踐踏傷害</nuxt-link
              >，<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>限定。<br />
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >:步兵對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              >攻擊+5，對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >攻擊+4，<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/scale_mail_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/Chainmailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鏈甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/plate_mail_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
              >(+1/+2)<br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Druzhina">協議</nuxt-link
              >:步兵近戰防禦+5，<nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>限定。<br /> 
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/squires.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Squires">護衛技術</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/tracking.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link>(+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
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
            <td class="tta1" style="width:10%">生產速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/conscription.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
              <br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Perfusion">井噴</nuxt-link>:<nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >工作速率加快2倍，<nuxt-link to="/civs/Goths">哥德</nuxt-link
              >限定。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生產成本</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Forced_Levy">強制徵兵</nuxt-link
              >:軍營步兵單位訓練不需花<nuxt-link to="/resource/Gold"
                >黃金</nuxt-link
              >，<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定。
            </td>
          </tr>
        </table>

        <h3>剋裝甲步兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對裝甲步兵的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CataphractIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cataphract"
                      >精銳拜占庭聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior"
                      >精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HandCannoneerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Slingericon.png"
                      alt=""
                    /><nuxt-link to="/units/Slinger">投石手</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CataphractIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Plumed_Archer"
                      >精銳羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          以下科技會給以下單位對裝甲步兵有額外攻擊。
          <div class="n1">
            <img
              class="gg"
              src="~assets/unique_tech_imperial.png"
              width="22"
              alt=""
            /><nuxt-link to="/techs/Logistica">後勤</nuxt-link>
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CataphractIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/CataphractIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cataphract">精銳拜占庭聖騎兵</nuxt-link
                >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
              </li>
            </ul>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：裝甲步兵生產速度提高15％。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >：裝甲步兵近戰防禦+5。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
              >：裝甲步兵在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>有
              +1/+2/+3攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：裝甲步兵移動加快15％。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：利於裝甲步兵的技術在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代便宜10％/15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：裝甲步兵在封建/城堡/帝王時代，減免為25%/30%/35%，對<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+1/+2/+3。研發<nuxt-link to="/techs/Perfusion"
                >井噴</nuxt-link
              >後研發<nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛技術</nuxt-link>、<nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >和升級<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >的速度快100%。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link
              >：裝甲步兵攻速快33％。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >：免費升級<nuxt-link to="/techs/Forging">鍛造技術</nuxt-link
              >、<nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link
              >和<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：裝甲步兵在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代有 +1/+2/+3<nuxt-link to="/armor">遠程護甲</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：裝甲步兵黃金成本減少15％。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>：免費<nuxt-link
                to="/techs/Tracking"
                >追蹤技術</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >的<nuxt-link to="/techs">科技</nuxt-link>升級不須黃金。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：免費<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：裝甲步兵在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代加10％/15％/20％的<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：裝甲步兵從城堡時代開始，近戰防禦+1。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速<nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link
              >、的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：裝甲步兵訓練和升級快20%。研發<nuxt-link to="/techs/Tracking"
                >追蹤技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛技術</nuxt-link>、<nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >科技的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：裝甲步兵更不容易被招降。
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
              裝甲步兵對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >+1攻擊。
            </li>
            <li>裝甲步兵<nuxt-link to="/armor">遠防</nuxt-link>是0。</li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>:在封建/<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代，裝甲步兵成本便宜10%/15%/25%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>裝甲步兵現在擁有1的遠防。</li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>:1.0c後，<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >裝甲步兵從封建時代開始便宜35%。引入<nuxt-link
                to="/techs/Perfusion"
                >井噴</nuxt-link
              >
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              裝甲步兵擁有+2攻擊VS<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>新科技<nuxt-link to="/techs/Arson">縱火</nuxt-link>引進。</li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:4.8版本引進<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >科技，裝甲步兵對<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >有+5攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:在4.8b版本後，<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >讓裝甲步兵對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >有額外+2攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:5.7版本<nuxt-link
                to="/techs/Chieftains"
                >酋長</nuxt-link
              >科技現在讓裝甲步兵對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >有額外+4攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>:引入<nuxt-link to="/techs/Bagains">協議</nuxt-link>，裝甲步兵近戰防禦+5
            </li>
            <li>
            <nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              (35584更新)：裝甲步兵從城堡時代開始，近戰防禦+1。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >(36202更新)：在封建/城堡/帝王時代，裝甲步兵減免改為25%/30%/35%，且對<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+1/+2/+3。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/units/Militia">民兵系</nuxt-link
              >兵是遊戲內唯一，三階以上升級的單位。
            </li>
            <li>
              裝甲步兵的英文Man-at-Arms，其實名稱並不正確，因為Man-at-Arms是中古時代的重型騎兵。
            </li>
            <li>
              <nuxt-link to="/civs/Malay">馬來</nuxt-link
              >的民兵系再研發<nuxt-link to="/techs/Forced_Levy"
                >強制徵兵</nuxt-link
              >後不用黃金。
            </li>
            <li>
              <nuxt-link to="/units/Militia">民兵</nuxt-link
              >是遊戲中少數四個沒有任何攻擊加成的單位。（另外三個是<nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >、<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>與<nuxt-link
                to="/units/Turtle_Ship"
                >龜甲船</nuxt-link
              >）。
            </li>
          </ul>
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
                  src="~assets/Militialine.png"
                  alt=""
              /></gallery>
              <p><em>民兵系升級列表</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/Manatarms.png"
                  alt=""
              /></gallery>
              <p><em>一群裝甲步兵</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">裝甲步兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/ManAtArmsIcon.png" class="img-fluid" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/barracks.png" alt="" /><nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">21秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">20</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">45</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">6(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +2對<nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
              >
              <br />+2對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/MilitiaIcon.png" alt="" /><nuxt-link
                to="/units/Militia"
                >民兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/LongswordsManIcon.png"
                alt=""
              /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/long_swordsman.png"
                alt=""
              />200食物65黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">45</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠的觀眾協助編輯</div>
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
