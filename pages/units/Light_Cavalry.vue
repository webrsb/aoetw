<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>輕騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>輕騎兵</b>是<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >兵種，可訓練於<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >，對<nuxt-link to="/units/Monk">僧侶</nuxt-link>、<nuxt-link
              to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >有額外的加成。
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
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、<nuxt-link
                to="/civs/Britons"
                >不列顛</nuxt-link
              >、<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >、<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >、<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈人</nuxt-link>、<nuxt-link
                to="/civs/Indians"
                >印度</nuxt-link
              >、<nuxt-link to="/civs/Italians">義大利</nuxt-link>、<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >、<nuxt-link to="/civs/Khmer">高棉</nuxt-link>、<nuxt-link
                to="/civs/Koreans"
                >朝鮮</nuxt-link
              >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >、<nuxt-link to="/civs/Malians">馬利</nuxt-link>、<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >、<nuxt-link to="/civs/Persians">波斯</nuxt-link>、<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >、<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、<nuxt-link
                to="/civs/Turks"
                >土耳其</nuxt-link
              >、<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、<nuxt-link
                to="/civs/Vikings"
                >維京</nuxt-link
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
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、<nuxt-link
                to="/civs/Teutons"
                >條頓</nuxt-link
              >。
            </div>
          </div>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
          >的輕騎兵是較弱勢的兵種，但若能利用其速度與兵種相剋，利用突襲的戰術也可以給予對手致命的打擊。尤其對方打出<nuxt-link
            to="/units/Monk"
            >僧侶</nuxt-link
          >爆時，請毫不猶豫的研發輕騎兵<nuxt-link to="/techs">科技</nuxt-link>。
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
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
                to="/units/Villager"
                >村民</nuxt-link
              >，<nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link
              >、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>
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
                src="~assets/ScoutCavalryIcon.png"
                alt=""
              /><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>→
              <img
                class="gg"
                src="~assets/LightCavalryIcon.png"
                alt=""
              />輕騎兵→
              <img class="gg" src="~assets/HussarIcon.png" alt="" /><nuxt-link
                to="/units/Hussar"
                >匈牙利輕騎兵</nuxt-link
              >
              <br />
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
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Farimba">驃悍精神</nuxt-link>：<nuxt-link
                to="/building/Stable"
                >馬廄</nuxt-link
              >單位攻擊+5。<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定
              <br />
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Manipur_Cavalry">曼尼普爾騎兵</nuxt-link
              >:<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              >和<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+3。<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>限定
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
              /><nuxt-link to="/techs/Scale_Barding_Armor">鱗鎧甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/Chainbardingarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Barding_Armor">鏈鎧甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/scale_barding_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link
              >(+1/+2)
              <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Silk_Armor"
                >絲護甲</nuxt-link
              >：<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link
              >和<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              ><nuxt-link to="/armor">遠程護甲</nuxt-link>+1。<nuxt-link
                to="/civs/Tatars"
                >韃靼</nuxt-link
              >限定
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
              /><nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Rate_of_Fire">攻速</nuxt-link>
            </td>
            <td class="tta4">
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Stirrups"
                >馬鐙</nuxt-link
              >：<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >和<nuxt-link to="/units/Konnik">保加利亞騎兵</nuxt-link
              >攻速+25%。<nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img src="~assets/faith.png" width="30" alt="" /><nuxt-link
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
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
              <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Chivalry"
                >騎士精神</nuxt-link
              >：馬廄工作速率快40%。<nuxt-link to="/civs/Franks"
                >法蘭克</nuxt-link
              >限定
              <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Steppe_Husbandry"
                >大草原耕種技術</nuxt-link
              >：<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link
              >和<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >訓練速度+50%。<nuxt-link to="/civs/Cumans">庫曼</nuxt-link>限定
            </td>
          </tr>
        </table>

        <h3>剋輕騎兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對輕騎兵的額外傷害，按照殺傷力排列。
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
                    /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link
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
                      src="~assets/Saracenmamluk_icon.png"
                      alt=""
                    /><nuxt-link to="/units/Mameluke"
                      >精銳阿拉伯奴隸兵</nuxt-link
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
                    /><nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
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
          以下科技可讓以下單位對<nuxt-link to="/units/Scout_Cavalry"
            >輕騎兵</nuxt-link
          >有額外攻擊力
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
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜15/20%。(4.8版本前是都20%)
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：只要在一個塞爾特單位的<nuxt-link to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >下，羊群不會被牽走
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：科技研發在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：輕騎兵<nuxt-link
                to="/elements/Hit_points"
                >血量</nuxt-link
              >多20%，研發<nuxt-link to="/techs/Chivalry">騎士精神</nuxt-link
              >後<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >研發速度快40%
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：免費<nuxt-link
                to="/techs/Forging"
                >鍛造技術</nuxt-link
              >、<nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link
              >、<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
              >科技，輕騎兵生產便宜15%
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >升級科技免<nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：輕騎兵免費升級。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >免費。
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
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link
              >：輕騎兵生產效率和升級快20%，<nuxt-link to="/techs/Bloodlines"
                >品種</nuxt-link
              >與<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>：輕騎兵+2視野。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：輕騎兵對僧侶抵抗力更強。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              一旦到了<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
              >，斥候獲得+0.35的速度，變成最快的單位，甚至比後來升級的輕騎兵或<nuxt-link
                to="/units/Hussar"
                >匈牙利輕騎兵</nuxt-link
              >更快。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            輕騎兵是騎馬的輕裝部隊，與穿著沉重鎧甲（有時包括馬）重騎兵相對，輕騎兵的主要任務基本上是偵查、掩護、散兵、突襲，並且他們裝備矛、劍、弓和之後出現的手槍。
          </p>
          <p>
            古希臘和古羅馬，較少運用輕騎兵，儘管羅馬輔助部隊經常騎馬，但是中亞遊牧民族卻經常使用輕騎兵。而<nuxt-link
              to="/civs/Huns"
              >匈人</nuxt-link
            >、突厥、<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link
            >和<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
            >人都很擅長輕騎兵和弓騎兵。
          </p>
          <p>
            隨著歐洲封建制度及<nuxt-link to="/units/Knight">騎士</nuxt-link
            >的沒落，在歐洲大陸中，輕騎兵成為重要的作戰部隊。許多輕騎兵都裝備了火器以替代老式的弓箭。歐洲人使用輕騎兵的例子還包括斯抓迪亞特、哈伯勒、驃騎兵、哥薩克、及一些龍騎兵。
          </p>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>輕騎兵獲得對僧侶+10的額外攻擊。</li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>引入<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>:引入<nuxt-link
                to="/techs/Chivalry"
                >騎士精神</nuxt-link
              >，馬廄工作速率快40%。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>:輕騎兵便宜10%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >:最初從城堡時代便宜20%，4.8版本後，變成城堡/帝王各便宜15/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >:輕騎兵也能受到<nuxt-link to="/civs">文明</nuxt-link>加成+20%HP。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >:在5.5版後輕騎兵現在便宜15%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >：引入<nuxt-link to="/techs/Stirrups">馬鐙</nuxt-link
              >輕騎兵攻速+25%。
            </li>
            <li>
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>：引入<nuxt-link
                to="/techs/Steppe_Husbandry"
                >大草原耕種技術</nuxt-link
              >輕騎兵訓練速度+50%。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Scoutcavalryline.png" alt=""
              /></gallery>
              <p><em>斥候系。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Lightcavalry.png" alt=""
              /></gallery>
              <p><em>一群輕騎兵。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">輕騎兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/LightCavalryIcon.png"
                  class="img-fluid"
                  alt=""
                />
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
            <td class="unit3">文明</td>
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                width="25px"
                src="~assets/stable.png"
                alt=""
              /><nuxt-link to="/building/Stable">馬廄</nuxt-link>
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
            <td class="unit4">80</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">7(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +10對<nuxt-link to="/armor/Armor_Class_Monk">僧侶類</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">裝甲類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.5</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/castle_age.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>:8
              <br />
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代:</nuxt-link>10
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/ScoutCavalryIcon.png"
                alt=""
              /><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/HussarIcon.png" alt="" /><nuxt-link
                to="/units/Hussar"
                >匈牙利輕騎兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img class="gg" src="~assets/hussar.png" alt="" />500食物600黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">50秒</td>
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
