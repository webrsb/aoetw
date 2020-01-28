<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>遊俠</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>遊俠</b>，新譯名為<b>聖騎士</b>。遊俠是<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >兵種，可訓練於<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >，在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >最強勢的兵種之一，對於<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >、<nuxt-link to="/units/Camel">駱駝兵種</nuxt-link>、<nuxt-link
              to="/units/Spearman"
              >長槍兵種</nuxt-link
            >較劣勢。
          </p>
        </div>
        <h3>文明可訓練與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <b
                  ><i class="fas fa-check" style="color: green;"></i>可訓練：</b
                >
              </h4>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
                to="/civs/Franks"
                >法蘭克</nuxt-link
              >、<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
                to="/civs/Huns"
                >匈奴</nuxt-link
              >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
                to="/civs/Persians"
                >波斯</nuxt-link
              >、<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、<nuxt-link
                to="/civs/Teutons"
                >條頓</nuxt-link
              >。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <b
                  ><i class="fas fa-times" style="color: #d9534f;"></i
                  >不可訓練：</b
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Berbers"
                >柏柏</nuxt-link
              >、<nuxt-link to="/civs/Britons">不列顛</nuxt-link>、<nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >、<nuxt-link to="/civs/Chinese">中國</nuxt-link>、<nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Goths">哥德</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Indians">印度</nuxt-link>、<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >、<nuxt-link to="/civs/Japanese">日本</nuxt-link>、<nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >、<nuxt-link to="/civs/Koreans">韓國</nuxt-link>、<nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >、<nuxt-link to="/civs/Malians">馬利</nuxt-link>、<nuxt-link
                to="/civs/Mayans"
                >馬雅</nuxt-link
              >、<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>、<nuxt-link
                to="/civs/Vietnamese"
                >越南</nuxt-link
              >、<nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          遊俠一直以來都是世紀帝國II的象徵之一，也算是全遊戲最好使用的兵種，其攻擊、防禦與<nuxt-link
            to="/elements/Hit_points"
            >血量</nuxt-link
          >、速度都是頂尖。一隊40隻遊俠可無視任何阻礙，消滅任何準備不足的單位或是<nuxt-link
            to="/building"
            >建築</nuxt-link
          >。<nuxt-link to="/civs/Franks">法蘭克</nuxt-link
          >遊俠比一般遊俠多12HP，是全遊戲最強大的遊俠。而<nuxt-link
            to="/civs/Byzantines"
            >拜占庭</nuxt-link
          >與塞爾特遊俠則是重看不重用。
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>、<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >、<nuxt-link to="/units/Villager">村民</nuxt-link>、<nuxt-link
                to="/units/Siege_Weapons"
                >攻城器單位</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>、<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >、<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>、<nuxt-link
                to="/units/Berserk"
                >狂戰士</nuxt-link
              >、<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >、<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >、<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>、<nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>和<nuxt-link
                to="/units/War_Elephant"
                >戰象</nuxt-link
              >。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Bloodlines.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>(+20)
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
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/scale_barding_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Scale_Barding_Armor">騎兵鱗甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/Chainbardingarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Barding_Armor">騎兵鎖甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/scale_barding_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Plate_Barding_Armor">騎兵板甲</nuxt-link
              >(+1/+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/husbandry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img class="gg" src="~assets/faith.png" alt="" /><nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >
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
                src="~assets/conscription.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)
              <br />
              <img class="gg" src="~assets/unique_tech.png" alt="" /><nuxt-link
                to="/techs/Chivalry"
                >騎士精神</nuxt-link
              >：<nuxt-link to="/building/Stable">馬廄</nuxt-link
              >工作速率快40%。<nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >限定
            </td>
          </tr>
        </table>

        <div class="col-md-12">
          <h3>剋遊俠的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1 bonuses">
            以下單位擁有對遊俠的額外傷害，按照殺傷力排列。
            <div class="n1">
              <div class="row">
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+32攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/HalberdierIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+22攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/PikemanIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+18攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/HeavyCamelIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Heavy_Camel"
                        >重裝駱駝騎兵</nuxt-link
                      >→
                      <img
                        class="gg"
                        src="~assets/ImperialCamelIcon.jpg"
                        alt=""
                      /><nuxt-link to="/units/Imperial_Camel"
                        >帝王駱駝騎兵</nuxt-link
                      >(<nuxt-link to="/units/Imperial_Camel"
                        >帝王駱駝騎兵</nuxt-link
                      >是<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/SpearmanIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/CannonGalleonIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Cannon_Galleon"
                        >火砲戰船</nuxt-link
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
                        src="~assets/Saracenmamluk_icon.png"
                        alt=""
                      /><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link
                      >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/Kamayuk_Icon.jpg"
                        alt=""
                      /><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link
                      >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/CamelIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/Saracenmamluk_icon.png"
                        alt=""
                      /><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link
                      >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/Kamayuk_Icon.jpg"
                        alt=""
                      /><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link
                      >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/New_Genoese_Crossbowman.png"
                        alt=""
                      /><nuxt-link to="/units/Genoese_Crossbowman"
                        >精銳熱那亞弩手</nuxt-link
                      >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/New_Genoese_Crossbowman.png"
                        alt=""
                      /><nuxt-link to="/units/Genoese_Crossbowman"
                        >熱那亞弩手</nuxt-link
                      >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/EliteEagleWarriorIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Elite_Eagle_Warrior"
                        >精銳鷹勇士</nuxt-link
                      >
                    </li>
                  </ul>
                  <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                  <ul>
                    <li>
                      <img
                        class="gg"
                        src="~assets/EagleWarriorIcon.png"
                        alt=""
                      /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            以下科技可讓以下單位對遊俠有額外攻擊力
            <div class="n1">
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Chieftains">酋長</nuxt-link>
              <div width="22" style="margin:12px 0px;">
                <strong>+5攻擊</strong>(<nuxt-link to="/civs/Vikings"
                  >維京</nuxt-link
                >限定)
              </div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/MilitiaIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Militia">民兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/ManAtArmsIcon.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/LongswordsManIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/2HandedswordsmanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Two-Handed_Swordsman"
                    >雙手劍兵</nuxt-link
                  >→
                  <img
                    class="gg"
                    src="~assets/ChampionIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/SpearmanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/PikemanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                    to="/units/Berserk"
                    >狂戰士</nuxt-link
                  >→ <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                    to="/units/Berserk"
                    >精銳狂戰士</nuxt-link
                  >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/CondottieroIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                  >(如果和<nuxt-link to="/civs/Italians">義大利</nuxt-link
                  >同盟的話)
                </li>
              </ul>
            </div>
            <h3>文明加成</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
                  >：只要在一個塞爾特單位的視野下，羊群不會被牽走
                </li>
                <li>
                  <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
                  >：遊俠血量多20%，研發<nuxt-link to="/techs/Chivalry"
                    >騎士精神</nuxt-link
                  >後，<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link
                  >的研發速度都加快40%
                </li>
                <li>
                  <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
                  >：免費<nuxt-link to="/techs/Forging">鍛造</nuxt-link
                  >、<nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link
                  >和<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
                  ><nuxt-link to="/techs">科技</nuxt-link>
                </li>
                <li>
                  <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                    to="/building/Blacksmith"
                    >兵工廠</nuxt-link
                  >升級科技免黃金
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
                  >能夠加速<nuxt-link to="/techs/Conscription"
                    >徵兵制度</nuxt-link
                  >的研究時間(快25%)。
                </li>
                <li>
                  <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：遊俠+2視野。
                </li>
                <li>
                  <nuxt-link to="/civs/Huns">匈奴</nuxt-link
                  >：遊俠生產效率快20%，<nuxt-link to="/techs/Bloodlines"
                    >品種</nuxt-link
                  >與<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link
                  >研發快20%。
                </li>
                <li>
                  <nuxt-link to="/civs/Persians">波斯</nuxt-link
                  >：遊俠對<nuxt-link to="/armor/Armor_Class_Archer"
                    >射手類</nuxt-link
                  >+2攻擊。
                </li>
                <li>
                  <nuxt-link to="/civs/Teutons">條頓</nuxt-link
                  >：遊俠對<nuxt-link to="/units/Monk">僧侶</nuxt-link
                  >抵抗力更強。
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
                  <nuxt-link to="/techs/Bloodlines">品種</nuxt-link>引進。
                </li>
                <li>
                  <nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>引進。
                </li>
              </ul>
              <h3>
                <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
              </h3>
              <ul>
                <li>
                  <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
                  >：引進<nuxt-link to="/techs/Chivalry">騎士精神</nuxt-link>。
                </li>
              </ul>
            </div>
            <h3>趣事</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  遊俠升級成本1300食物、750黃金是遊戲中第四貴的，只輸<nuxt-link
                    to="/units/War_Elephant"
                    >戰象</nuxt-link
                  >、<nuxt-link to="/units/Mangonel">投石車</nuxt-link
                  >和<nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
                  >。然而，如果你考慮到升級遊俠前你還得升級成騎兵，那麼成本就是1600食物和1050黃金，則只有投石車與戰象更高。
                </li>
                <li>為了平衡，遊俠的攻速(1.93)比騎兵(1.83)還慢。</li>
                <li>
                  騎士系列是遊戲中;僅有的四種對任何東西都沒加成的單位，另外三種是<nuxt-link
                    to="/units/Militia"
                    >民兵</nuxt-link
                  >、<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link
                  >和<nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>。
                </li>
                <li>
                  <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
                  >擁有最強的遊俠，因為多了12hp，而塞爾特人擁有最弱的遊俠，因為缺乏<nuxt-link
                    to="/techs/Bloodlines"
                    >品種</nuxt-link
                  >與<nuxt-link to="/techs/Plate_Barding_Armor"
                    >騎兵板甲</nuxt-link
                  >。緊跟在後的是拜占庭遊俠，缺乏品種與<nuxt-link
                    to="/techs/Blast_Furnace"
                    >鼓風爐</nuxt-link
                  >。而<nuxt-link to="/civs/Teutons">條頓</nuxt-link
                  >缺法<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link
                  >。其他四個文明則有全滿的遊俠。
                </li>
                <li>
                  隨著<nuxt-link to="/games/ak">非洲王國</nuxt-link
                  >的推出，遊俠是最稀有的單位，只有八個文明擁有，之前是<nuxt-link
                    to="/units/Siege_Onager"
                    >重型投石車</nuxt-link
                  >。(<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
                  >與<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
                  >為地區性<nuxt-link to="/units/Unique_Unit"
                    >特殊單位</nuxt-link
                  >。)
                </li>
                <li>所有遊俠文明皆是歐洲或中東風格。</li>
                <li>
                  <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>是<nuxt-link
                    to="/games/aof"
                    >失落的帝國</nuxt-link
                  >後唯一的遊俠文明。
                </li>
              </ul>
            </div>
            <h3>歷史</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <p>
                聖騎士（Paladin）或稱「聖武士」，在歐洲歷史上是指公元800年前後跟隨查理曼東征西討的十二位勇士。查理曼故事在基督教的正史裡廣為流傳，其中夾雜了很多有關神話魔法、愛情等的故事，查理曼的禁衛部隊和近身侍臣都是受封的騎士。他們首先出現在早期的武功歌，例如《羅蘭之歌》，代表基督徒勇士對抗撒拉森人部落，之後聖騎士成為古代傳奇文學的主流歌頌對象，並參考諸多史實戰役加以改編，彰顯勇敢與犧牲精神的騎士文學蔚為風潮、歷久不衰。
              </p>
              <p>
                隨著現代奇幻文學的興起，聖騎士演變為信奉神祇，為了光明與正義而戰的戰士，身穿雕紋華麗的全身重鎧，除了武藝外同時重視信仰面的修行。西方文學裡的聖騎士可說是牧師與戰士的結合，能使用神聖魔法，多半使用不見血的鈍器做為武器；東方版本的聖騎士同樣信仰光明與神聖，但武器則多為劍或長槍，形象較接近中世紀騎士
              </p>
              <p>
                最早出現的聖騎士不是查理曼的同僚，而是他的僕人羅蘭。羅蘭在歷史上確有其人，曾出現在查理曼傳記人艾因哈德的筆下，關於他的其他故事就不得而知了。在十二世紀末，聖騎士依據圓桌會議的形式向國王匯報；對他們最早的傳奇描繪是斐埃拉布拉，時間約為1170左右。十二勇士的名字根據傳奇的不同而不同，有時人數會超過十二人。所有查理曼的聖騎士故事都有羅蘭和奧利佛的故事；其他常常出現的人物包括杜平大主教、丹麥的奧吉爾、波爾多的霍恩、斐埃拉布拉、蒙托邦的雷諾、和岡隆。
              </p>
            </div>
            <h3>圖庫</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <div class="row">
                <div class="col-md-4">
                  <gallery
                    ><img class="imgn hg" src="~assets/Knightline.png" alt=""
                  /></gallery>
                  <p><em>騎士系。</em></p>
                </div>
                <div class="col-md-4">
                  <gallery
                    ><img class="imgn hg" src="~assets/Paladins.png" alt=""
                  /></gallery>
                  <p><em>一群遊俠。</em></p>
                </div>
                <div class="col-md-4">
                  <gallery
                    ><img class="imgn hg" src="~assets/Aok_paladin.gif" alt=""
                  /></gallery>
                  <p><em>遊俠模型。</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">遊俠</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/PaladinIcon.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Stable-logo.jpg" alt="" /><nuxt-link
                to="/building/Stable"
                >馬廄</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">30秒</td>
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
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">160</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">14(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">1.93</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>

          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.35</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/CavalierIcon.png" alt="" /><nuxt-link
                to="/units/Cavalier"
                >騎兵</nuxt-link
              >
            </td>
          </tr>
        </table>
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
