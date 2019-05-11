<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>長槍兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>長槍兵</b>是<nuxt-link to="/units/Infantry_Units"
              >步兵單位</nuxt-link
            >，在<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >可以從<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >生產。華人圈喜歡稱長槍兵為「XX(音同叉叉)」、斗笠、搓搓。
          </p>
          <p>
            初期是防禦敵人<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
            >的優秀兵種。
          </p>
          <p>
            長槍兵是專門克制騎馬的單位(<nuxt-link to="/units/Cataphract"
              >聖騎兵</nuxt-link
            >例外);長槍兵被<nuxt-link to="/units/Scorpion">弩砲</nuxt-link
            >、<nuxt-link to="/units/Archer">弓箭手</nuxt-link>、<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >克制。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            長槍兵便宜、容易集結，使他們能夠壓倒敵方的<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >。它們對防止早期的<nuxt-link to="/units/Scout_Cavalry"
              >斥候</nuxt-link
            >是很有效，但是對於<nuxt-link to="/units/Knight">騎士</nuxt-link
            >或<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >來說，他們應該升級為更有效的<nuxt-link to="/units/Pikeman"
              >重裝長槍兵</nuxt-link
            >。這是防禦騎馬單位的首選。
          </p>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle2">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
              >、<nuxt-link to="/units/Archer">弓兵</nuxt-link>。
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
                src="~assets/Forging.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Ironcasting.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Blastfurnace.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
              <br />
              <img
                class="gg"
                src="~assets/Arson.jpg"
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
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link
              >:步兵攻擊+4，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >限定。 <br />
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Druzhina">王家侍從</nuxt-link>:<nuxt-link
                to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >有<nuxt-link to="/elements/Area_of_Effect">踐踏傷害</nuxt-link
              >，<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>限定。 <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
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
                src="~assets/Scalemailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/Chainmailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/Platemailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
              >(+1/+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Squires.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Squires">護衛</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Tracking.jpg"
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
            <td class="tta1" style="width:10%">生產速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Conscription.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)
              <br />
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Perfusion">灌注士氣</nuxt-link
              >:軍營工作速率加快2倍，<nuxt-link to="/civs/Goths">哥德</nuxt-link
              >限定。
            </td>
          </tr>
        </table>

        <h3>剋長槍兵的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對長<nuxt-link to="/armor/Armor_Class_Spearman"
            >槍兵類</nuxt-link
          >的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
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
                      src="~assets/CataphractIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior"
                      >精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HandCannoneerIcon.jpg"
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
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CataphractIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Plumed_Archer"
                      >精銳羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Archer">弓兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CrossbowmanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/ArbalestIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SkirmisherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >(<nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >是<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                    >及其同盟限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CavalryArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/HeavyCavArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                      >重裝馬弓騎兵</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongbowmanIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/LongbowmanIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Longbowman">精銳長弓兵</nuxt-link
                    >(<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ChuKoNuIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/ChuKoNuIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Chu_Ko_Nu"
                      ><nuxt-link to="/units/Chu_Ko_Nu">精銳連弩兵</nuxt-link
                      >(<nuxt-link to="/civs/Chinese">中國</nuxt-link
                      >限定)</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/RattanarcherIcon2.png"
                      alt=""
                    /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/RattanarcherIcon2.png"
                      alt=""
                    /><nuxt-link to="/units/Rattan_Archer"
                      >精銳藤甲弓兵</nuxt-link
                    >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Castleicon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/building/Castle">城堡</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Watchtowericon.png"
                      alt=""
                    /><nuxt-link to="/building/Watch_Tower">箭塔系列</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CamelArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CamelArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Camel_Archer"
                      >精銳駱駝弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          以下技術研發後對長槍兵有額外攻擊力，以數值排列
          <div class="n1">
            <img
              class="gg"
              src="~assets/Unique-tech.jpg"
              width="22"
              alt=""
            /><nuxt-link to="/techs/Logistica">後勤學</nuxt-link>
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CataphractIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/CataphractIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
                >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
              </li>
            </ul>
            <img
              class="gg"
              src="~assets/Parthian-Tactics.jpg"
              width="22"
              alt=""
            /><nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>
            <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CavalryArcherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/HeavyCavArcherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                  >重裝馬弓騎兵</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/MangudaiIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/MangudaiIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ElephantArcherIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/ElephantArcherIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Elephant_Archer">精銳象弓騎兵</nuxt-link
                >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
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
              >：長槍兵生產速度提高15％。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
              >：長槍兵在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>有
              +1/+2/+3 攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：長槍兵便宜25％。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特人</nuxt-link
              >：長槍兵移動加快15％。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：有利於長槍兵的技術在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代便宜10％/ 15％/ 20％。
            </li>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >:免費升級<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：長槍兵便宜35％而且對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+1。研發<nuxt-link to="/techs/Perfusion">灌注士氣</nuxt-link
              >後研發<nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、<nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >和升級重裝長槍兵的速度快100%。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：長槍兵<nuxt-link
                to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >快33％。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >：免費升級<nuxt-link to="/techs/Forging">鍛造</nuxt-link
              >、<nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link
              >和<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：長槍兵在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代有 +1/+2/+3<nuxt-link to="/armor">遠程護甲</nuxt-link>。
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
              >對長槍兵有利的<nuxt-link to="/techs">科技</nuxt-link
              >升級不須<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：免費<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：長槍兵在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代擁有10％/15％/20％的<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >。
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
              >能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >、的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：長槍兵訓練和升級快20%。研發<nuxt-link to="/techs/Tracking"
                >追蹤技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、<nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >科技的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：長槍兵更不容易被招降。
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
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >:長槍兵在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代便宜10%/15%/25%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              長槍兵對<nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
              >與<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
              >有+7攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >:1.0c版後長槍兵在任何時代都便宜35%。引入<nuxt-link
                to="/techs/Perfusion"
                >灌注士氣</nuxt-link
              >
            </li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              長槍兵現在對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >與<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
              >有+9攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>引進<nuxt-link to="/techs/Arson">縱火</nuxt-link>科技。</li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:4.8版本引進<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >科技，長槍兵對<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >有+5攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:在4.8b版本後，<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >讓長槍兵對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >有額外+2攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              5.7版本後長槍兵對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >有+12的攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:5.7版本後，<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
              >+4攻擊，而不是+2。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              和<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >一樣是最便宜的單位。
            </li>
            <li>唯一沒有任何裝甲防禦的步兵單位。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >"中世紀軍隊的中型步兵通常是穿半盔甲的長矛兵，通常是只有頭盔和上半身盔甲，隨著中世紀的進步，長槍兵的定位變得更加重要，軍隊學會了使用大量長槍兵作為
              對付重騎兵的策略，因為馬即便面對長槍組成的牆也不會停止前進。一群長槍兵通常會使用古希臘方陣，可以在選定的方向上延伸幾個攻擊點對付敵人。長槍兵在戰鬥上的CP值很高，因為所需的裝備和訓練都十分簡單便宜。長槍兵最初是防禦取向的部隊，但是最好的長槍兵，比如
              瑞士人，蘇格蘭人和佛蘭芒人學會用長槍兵進行攻擊策略。"</em
            >
            <p style="text-align: right;margin-top: 10px;">-世紀帝國II手稿。</p>
          </div>
          <li>
            槍或稱鎗，是一種桿端有尖刃的長柄武器，是相當早出現的武器之一，曾經長期在戰場上使用，有「百兵之王」之稱。現代的<nuxt-link
              to="/civs/Chinese"
              >中國</nuxt-link
            >武術中也有槍術
          </li>
          <li>
            長柄兵器進入戰場，除了車兵與騎兵使用之外，在步兵使用亦廣，是接續在盾牌步兵後面，利用盾牌與盾牌之間的空隙進行突刺。
          </li>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Spearline.png" alt=""
            /></gallery>
            <p><em>長槍兵類列</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Spearman.png" alt=""
            /></gallery>
            <p><em>一群長槍兵</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">長槍兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/SpearmanIcon.jpg" width="45" alt="" />
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
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Barracks-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Barracks">軍營</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">22秒</td>
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
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">35</td>
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
            <td class="unit4">3(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +15 vs<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br />+15 vs<nuxt-link to="/armor/Armor_Class_War_Elephant"
                >戰象類</nuxt-link
              >
              <br />+12 vs<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >
              <br />+9 vs<nuxt-link to="/armor/Armor_Class_Ship"
                >船隻</nuxt-link
              >
              <br />+1 vs<nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
                >鷹斥候</nuxt-link
              >
              <br />+1 vs<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">3.05</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Spearman"
                >長槍兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1</td>
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
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/PikemanIcon.jpg" alt="" /><nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Pikeman-research.jpg"
                alt=""
              />215食物90黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">45s</td>
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
