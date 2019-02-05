<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>戟兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            戟兵或稱為斧槍兵。<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >時，可以從<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >升級為戟兵。他們專門對付騎兵(
            <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
            >除外)，對騎兵以外所造成的傷害都是微弱的。
          </p>
          <p>
            最便宜的軍事部隊之一。此外，不需要黃金來培訓他們，讓他們成為“
            垃圾單位 ”。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            戟兵在攻擊騎兵部隊非常有用。到了大後期時，是一種非常好用的垃圾單位。
          </p>
          <p>
            除了騎兵之外，他們在與敵方<nuxt-link to="/units/Elite_Skirmisher"
              >戰矛兵</nuxt-link
            >（即使<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
            >對他們造成額外傷害）作戰方面相當不錯，因為他們可以接近
            <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
            >，並利用其最小射程。
          </p>
          <p>
            他們是<nuxt-link to="/building/Siege_Workshop">攻城武器</nuxt-link
            >的完美輔助，因為他們可以保護攻城武器免受敵方近戰騎兵的傷害。雖然它們可能缺乏進攻力量，但它們可以作為炮灰向前進攻。
          </p>
        </div>
        <h3>文明可訓練與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-ok okc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >可訓練</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link> 、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-remove noc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >不可訓練</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
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
              <nuxt-link to="/units/Archer">弓兵</nuxt-link>、<nuxt-link
                to="/units/Scorpion"
                >弩炮</nuxt-link
              >、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>、
              <nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>、<nuxt-link
                to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >和 <nuxt-link to="/units/Slinger">投石手</nuxt-link>。
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
              <img
                class="gg"
                src="~assets/Forging.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Ironcasting.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1)
              <br />
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
              /><nuxt-link to="/techs/Arson">縱火</nuxt-link
              >:步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >
              <br />
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Druzhina">王家侍從</nuxt-link
              >:步兵單位有踐踏傷害，<nuxt-link to="/civs/Slavs"
                >斯拉夫</nuxt-link
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
              /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
              >(+1/+1)
              <br />
              <img
                class="gg"
                src="~assets/Chainmailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
              >(+1/+1)
              <br />
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
            <td class="tta1" style="width:10%">視野</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Tracking.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Tracking">追縱技術</nuxt-link>(+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">招降抵抗</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Faith.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
              <br />
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
              >:兵營工作速率加快2倍，<nuxt-link to="/civs/Goths">哥德</nuxt-link
              >限定。
            </td>
          </tr>
        </table>

        <h3>剋長槍兵的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對長槍兵系的額外傷害，按造傷殺力排列。
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
                    <img class="gg" src="~assets/Slingericon.png" alt="" />
                    <nuxt-link to="/units/Slinger">投石手</nuxt-link>
                    (<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
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
                    <img class="gg" src="~assets/ArcherIcon.jpg" alt="" />
                    <nuxt-link to="/units/Archer">弓兵</nuxt-link>→
                    <img class="gg" src="~assets/CrossbowmanIcon.jpg" alt="" />
                    <nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
                    <img class="gg" src="~assets/ArbalestIcon.jpg" alt="" />
                    <nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/SkirmisherIcon.jpg" alt="" />
                    <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    />
                    <nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >(帝王戰矛兵是<nuxt-link to="/civs/Vietnamese"
                      >越南</nuxt-link
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
                    />
                    <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/HeavyCavArcherIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Heavy_Cavalry_Archer"
                      >重裝馬弓騎兵</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongbowmanIcon.jpg"
                      width="22"
                      alt=""
                    />
                    <nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/LongbowmanIcon.jpg"
                      width="22"
                      alt=""
                    />
                    <nuxt-link to="/units/Longbowman">精銳長弓兵</nuxt-link
                    >(<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/ChuKoNuIcon.jpg" alt="" />
                    <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
                    <img class="gg" src="~assets/ChuKoNuIcon.jpg" alt="" />
                    <nuxt-link to="/units/Chu_Ko_Nu"
                      >精銳連弩兵(<nuxt-link to="/civs/Chinese">中國</nuxt-link
                      >限定)</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/RattanarcherIcon2.png"
                      alt=""
                    />
                    <nuxt-link to="/units/Rattan_Archer">籐甲弓兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/RattanarcherIcon2.png"
                      alt=""
                    />
                    <nuxt-link to="/units/Rattan_Archer">精銳籐甲弓兵</nuxt-link
                    >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Castleicon.png"
                      width="22"
                      alt=""
                    />
                    <nuxt-link to="/building/Castle">城堡</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/Watchtowericon.png" alt="" />
                    <nuxt-link to="/building/Watch_Tower">箭塔系列</nuxt-link>
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
                    />
                    <nuxt-link to="/units/Rattan_Archer">蒙古突騎</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    />
                    <nuxt-link to="/units/Rattan_Archer">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/CamelArcherIcon.jpg" alt="" />
                    <nuxt-link to="/units/Rattan_Archer">駱駝弓騎兵</nuxt-link>→
                    <img class="gg" src="~assets/CamelArcherIcon.jpg" alt="" />
                    <nuxt-link to="/units/Rattan_Archer"
                      >精銳駱駝弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          以下技術研發後對長槍兵有額外攻擊力，以數值排列
          <div class="n1">
            <img class="gg" src="~assets/Unique-tech.jpg" width="22" alt="" />
            <nuxt-link to="/techs/Parthian_Tactics">後勤學</nuxt-link>
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/CataphractIcon.jpg" alt="" />
                <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>→
                <img class="gg" src="~assets/CataphractIcon.jpg" alt="" />
                <nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
                >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
              </li>
            </ul>
            <img
              class="gg"
              src="~assets/Parthian-Tactics.jpg"
              width="22"
              alt=""
            />
            <nuxt-link to="/techs/Parthian_Tactics">帕提亞技術</nuxt-link>
            <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/CavalryArcherIcon.jpg" alt="" />
                <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
                <img class="gg" src="~assets/HeavyCavArcherIcon.jpg" alt="" />
                <nuxt-link to="/units/Heavy_Cavalry_Archer"
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
                />
                <nuxt-link to="/units/Rattan_Archer">蒙古突騎</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/MangudaiIcon.jpg"
                  width="22"
                  alt=""
                />
                <nuxt-link to="/units/Rattan_Archer">精銳蒙古突騎</nuxt-link
                >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ElephantArcherIcon.jpg"
                  width="22"
                  alt=""
                />
                <nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/ElephantArcherIcon.jpg"
                  width="22"
                  alt=""
                />
                <nuxt-link to="/units/Elephant_Archer">精銳象弓騎兵</nuxt-link
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
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：戟兵在帝王時代有
              +3 攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：戟兵便宜25％。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">賽爾特人</nuxt-link
              >：戟兵移動加快15％。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：有利於戟兵的技術在帝王時代便宜 20％。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：戟兵便宜35％而且對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+1。研發
              <nuxt-link to="/techs/Perfusion">灌注士氣</nuxt-link
              >後研發<nuxt-link to="/techs/Tracking">追縱技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、
              <nuxt-link to="/techs/Arson">縱火</nuxt-link>的速度快100%。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link
              >：戟兵攻擊速度快33％。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬札爾</nuxt-link
              >：免費升級<nuxt-link to="/techs/Forging">鍛造</nuxt-link
              >、<nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>和
              <nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>：免費<nuxt-link
                to="/techs/Tracking"
                >追縱技術</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >對戟兵有利的科技升級不須黃金。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：免費<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
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
              >：戟兵訓練快20%。研發<nuxt-link to="/techs/Tracking"
                >追縱技術</nuxt-link
              >、 <nuxt-link to="/techs/Squires">護衛</nuxt-link>、<nuxt-link
                to="/techs/Arson"
                >縱火</nuxt-link
              >科技的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：戟兵更不容易被招降。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              戟兵對<nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
              >與<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
              >有+16攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              戟兵現在對<nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
              >與<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
              >有+17攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>引進<nuxt-link to="/techs/Arson">縱火</nuxt-link>科技。</li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >:一開始能訓練戟兵，但在在4.8版本後從科技樹移除。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>5.7版本後戟兵對駱駝有+26的攻擊。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>和矛兵一樣是最便宜的單位。</li>
            <li>唯一沒有任何裝甲防禦的步兵單位。</li>
            <li>
              上天是公平的，沒有戟兵的文明大多有剋騎馬單位的駱駝，而沒有駱駝的，則是有厲害的重裝長槍兵（如阿茲特克與維京）或是克制馬的特殊兵種（如義大利）。
            </li>
            <li>
              雖然是叫做戟兵，但實際上武器是斧槍(瑞士斧)，只是初始的中文翻譯錯誤而已。
            </li>
            <li>
              戟兵的英文為Hellebarde，這個字有可能是來自德文字Halm（棍）與Barte（斧），其實斧槍與中國的戟並不相同，斧槍是斧與槍的結合，而戟則是戈與矛/槍的結合，所以翻譯成戟兵並不恰當。
            </li>
            <li>
              中國歷史上的戰神呂布，如果以武器來看，放到世紀帝國他只是一名戟兵而已，而且是垃圾單位。
            </li>
            <li>外觀倒是和潛水員有幾分神似。</li>
            <li>
              在征服者入侵1.0版本的時代，戟兵對於帝王時代的房屋有額外的加成，當然這是一個bug。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            斧槍是一種雙手持握的長柄武器，在十四及十五世紀時最為風行。這個字有可能是來自德文字Halm（棍）與Barte（斧），現在德語稱此為Hellebarde。斧槍以大釘將斧刃固定在柄頭，通常有鉤或刺在斧刃的背面，這可以用來鉤住騎兵，
            斧槍通常長1.5至1.8公尺。斧槍與中國的戟並不相同，斧槍是斧與槍的結合，而戟則是戈與矛/槍的結合。
          </p>
          <p>
            斧槍在製造便宜，在戰場上的功能也很多。比槍與長槍更好用（也能用來推回騎兵），斧背上的鉤可以把騎兵拉到地上。
          </p>
          <p>
            此外，斧槍以金屬強化柄前端，可以有效的抵擋如刀劍等武器。一名瑞士農夫使用這個武器一擊殺死了勃根地公爵大膽的查理。
          </p>
          <p>
            斧槍是瑞士陸軍在十四世紀到十五世紀早期時的主要武器。之後，瑞士人增加了長槍來擊退騎士的進攻並席捲敵兵的方陣，而使用斧槍、長劍、匕首來進行近身戰鬥。德國人的國土僕人模仿瑞士人的戰鬥方式使用來長槍輔以斧槍來戰鬥，但隨身武器是選擇短劍。
          </p>
          <p>
            只要長槍兵相互交鋒時，斧槍就會成為當陷入長槍混戰時的有用武器，但是當需要保護慢裝填的鉤銃兵或火繩鳥銃兵避免受騎兵突襲時，斧槍兵的作用就減低了，大約在十六世紀中期，斧槍已經不在一般士兵的武器之中。
          </p>
          <p>
            斧槍曾被做為庭院保鑣的武器長達數個世紀，現在也是梵諦岡的瑞士衛隊的儀式武器。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">戟兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/HalberdierIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">25</td>
          </tr>
          <tr>
            <td class="unit3">肉</td>
            <td class="unit4">35</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">6(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +32 vs<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
              <br />+28 vs<nuxt-link to="/armor/Armor_Class_War_Elephant"
                >戰象類</nuxt-link
              >
              <br />+26 vs<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >
              <br />+17 vs<nuxt-link to="/armor/Armor_Class_Ship"
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
            <td class="unit3">近防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/armor">防禦類型</nuxt-link>
            </td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">
                <nuxt-link to="">單位演變</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/PikemanIcon.jpg" alt="" /><nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠的觀眾協助編輯</div>
      </div>
    </div>
    <div class="col-md-12">
      <h3>圖庫</h3>
      <div class="hrn1"></div>
      <div class="n1">
        <div class="col-md-4">
          <gallery
            ><img class="imgn hg" src="~assets/Spearline.png" alt=""
          /></gallery>
          <p><em>長槍兵系列</em></p>
        </div>
        <div class="col-md-4">
          <gallery
            ><img class="imgn hg" src="~assets/Halberdier.png" alt=""
          /></gallery>
          <p><em>一群戟兵</em></p>
        </div>
        <div class="col-md-4">
          <gallery
            ><img class="imgn hg" src="~assets/162p0005r99962q1q805.jpg" alt=""
          /></gallery>
          <p><em>歷史上的瑞士斧槍兵。</em></p>
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
