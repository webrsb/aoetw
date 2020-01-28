<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>重裝長槍兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >時，可以從<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >升級為<b>重裝長槍兵</b>。他們專門對付<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >(<nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
            >除外)，對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
            >以外所造成的傷害都是微弱的。
          </p>
          <p>
            最便宜的軍事部隊之一。此外，不需要<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >來培訓他們，讓他們成為“ 垃圾單位 ”。
          </p>
          <p>
            除了<nuxt-link to="/civs/Turks">土耳其</nuxt-link
            >之外，所有的<nuxt-link to="/civs">文明</nuxt-link
            >都可以使用重裝長槍兵。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>長槍兵在攻擊騎兵部隊非常有用。不過只有少量時，就顯得相當薄弱。</p>
          <p>
            長槍兵非常怕<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
            >外，也相當懼怕<nuxt-link to="/units/Elite_Skirmisher"
              >戰矛兵</nuxt-link
            >，因為兩者除了是<nuxt-link to="/units/Archer_Units"
              >遠程單位</nuxt-link
            >外，還額外有+3對<nuxt-link to="/armor/Armor_Class_Spearman"
              >長槍兵</nuxt-link
            >的攻擊加成。
          </p>
          <p>
            他們是<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
            >的完美輔助，因為他們可以保護<nuxt-link to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >免受敵方近戰騎兵的傷害。雖然它們可能缺乏進攻力量，但它們可以作為炮灰鋪路讓部隊向前進攻。
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
              <nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
              >、<nuxt-link to="/units/Archer">弓兵</nuxt-link>、<nuxt-link
                to="/units/Scorpion"
                >弩砲</nuxt-link
              >、<nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
              >、<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >、<nuxt-link to="/units/Slinger">投石手</nuxt-link>。
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
              /><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/iron_casting.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1) <br />
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
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/plate_mail_armor.png"
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
                src="~assets/squires.png"
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
              /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)
              <br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
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
                    /><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
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
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
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
                      src="~assets/CataphractIcon.png"
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
                      src="~assets/PlumedArcherIcon.png"
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
                      src="~assets/ArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Archer">弓兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CrossbowmanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/ArbalestIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.png"
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
                      src="~assets/PlumedArcherIcon.png"
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
                      src="~assets/CavalryArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/HeavyCavArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                      >重裝馬弓騎兵</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongbowmanIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/LongbowmanIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Longbowman">精銳長弓兵</nuxt-link
                    >(<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ChuKoNuIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/ChuKoNuIcon.png"
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
                      src="~assets/castle.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/building/Castle">城堡</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Watch_Tower"
                      >箭塔系列</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CamelArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CamelArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Camel_Archer"
                      >精銳駱駝弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          以下科技研發後對長槍兵有額外攻擊力，以數值排列
          <div class="n1">
            <img
              class="gg"
              src="~assets/unique_tech_imperial.png"
              width="22"
              alt=""
            /><nuxt-link to="/techs/Logistica">後勤學</nuxt-link>
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CataphractIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/CataphractIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
                >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
              </li>
            </ul>
            <img
              class="gg"
              src="~assets/parthian_tactics.png"
              width="22"
              alt=""
            /><nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>
            <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CavalryArcherIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/HeavyCavArcherIcon.png"
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
                  src="~assets/MangudaiIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/MangudaiIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ElephantArcherIcon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/ElephantArcherIcon.png"
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
              >：重裝長槍兵生產速度提高15％。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
              >：重裝長槍兵在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>有
              +2/+3 攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：重裝長槍兵便宜25％。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特人</nuxt-link
              >：重裝長槍兵移動加快15％。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：有利於重裝長槍兵的技術在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代便宜 15％/ 20％。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：重裝長槍兵便宜35％而且對<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+1。研發<nuxt-link to="/techs/Perfusion">灌注士氣</nuxt-link
              >後研發<nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、<nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >和升級<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >的速度快100%。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link
              >：重裝長槍兵<nuxt-link to="/elements/Rate_of_Fire"
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
              >：重裝長槍兵在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代有 +2/+3 <nuxt-link to="/armor">遠程護甲</nuxt-link>。
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
              >升級不須黃金。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：免費<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：重裝長槍兵在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代擁有15％/20％的<nuxt-link to="/elements/Hit_points"
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
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：重裝長槍兵訓練和升級快20%。研發<nuxt-link to="/techs/Tracking"
                >追蹤技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、<nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >科技的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：重裝長槍兵更不容易被招降。
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
              >:重裝長槍兵在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代便宜15%/25%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              重裝長槍兵對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >與<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
              >有+11攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >:1.0c版後重裝長槍兵在任何時代都便宜35%。引入<nuxt-link
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
              重裝長槍兵現在對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >與<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
              >有+16攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>引進<nuxt-link to="/techs/Arson">縱火</nuxt-link>科技。</li>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >:免費升級戟兵。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:4.8版本引進<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >科技，重裝長槍兵對<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >有+5攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:在4.8b版本後，<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >讓重裝長槍兵對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >有額外+2攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              5.7版本後重裝長槍兵對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >有+18的攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >:5.7版本後免費戟兵升級被移除。
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
            <li>
              雖然是叫做重裝長槍兵，但實際上武器是長柄刀，也就是類似關公拿的刀。
            </li>
            <li>
              即使他是<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >的單位，但如果沒有升級防禦攻擊，是打不過有織布的<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >的。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            "長槍兵對騎兵的成功導致了他們使用的裝備和戰術的創新，重裝長槍兵是城鎮和社區在他們沒有足夠的資源來訓練大量的重型騎兵時的新選擇，重裝長槍兵很便宜而且訓練很快，其中一個重要的變化是延長了武器桿身，當長矛長到6到8英尺時，長柄長桿長達18英尺長，武器越長意味著士兵可以更好的跟敵人保持距離同時攻擊他們，長槍兵與弩手或<nuxt-link
              to="/units/Hand_Cannoneer"
              >火槍兵</nuxt-link
            >可以組成一個有用的聯合部隊，重裝長槍兵阻止騎兵越過群體，而<nuxt-link
              to="/units/Archer_Units"
              >遠程</nuxt-link
            >部隊在射程範圍內造成敵人傷亡，所以這種組合在戰場上擁有主導地位。隨著中世紀之後槍械的改進，重裝長槍兵變得不再那麼必要了，刺刀讓火槍兵在遇到騎兵時也有一搏的餘地。"
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Spearline.png" alt=""
            /></gallery>
            <p><em>重裝長槍兵類列</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Pikemans.png" alt=""
            /></gallery>
            <p><em>一群重裝長槍兵</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Pikeman_history.jpg" alt=""
            /></gallery>
            <p><em>真實的重裝長槍兵畫像</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">重裝長槍兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/PikemanIcon.png" class="img-fluid" alt="" />
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
            <td class="unit3">文明</td>
            <td class="unit4">
              除了<nuxt-link to="/civs/Turks">土耳其</nuxt-link>之外的所有文明
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
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
            <td class="unit4">55</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">4(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +25 vs<nuxt-link to="/armor/Armor_Class_War_Elephant"
                >戰象類</nuxt-link
              >
              <br />+22 vs<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >
              <br />+18 vs<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >
              <br />+16 vs<nuxt-link to="/armor/Armor_Class_Ship"
                >船隻</nuxt-link
              >
              <br />+1 vs<nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
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
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/SpearmanIcon.png" alt="" /><nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/HalberdierIcon.png"
                alt=""
              /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/halberdier.png"
                alt=""
              />300食物600黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">50s</td>
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
