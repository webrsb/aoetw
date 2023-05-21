<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>阿拉伯奴隸兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="ien">
          <em
            ><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>的<nuxt-link
              to="/units/Unique_Unit"
              >特殊單位</nuxt-link
            >，騎著駱駝的<nuxt-link to="/units/Archer_Units"
              >遠距離單位</nuxt-link
            >，對付敵人的<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            >非常厲害。</em
          >
          <p style="text-align: left;margin-top: 10px;">-遊戲的描述</p>
        </div>
        <div class="n1">
          <b>阿拉伯奴隸兵</b>又稱為<b>馬穆魯克</b>。是<nuxt-link
            to="/civs/Saracens"
            >薩拉森</nuxt-link
          >的特殊單位。對<nuxt-link to="/armor/Armor_Class_Cavalry"
            >騎兵</nuxt-link
          >有加成傷害的短距離(近戰傷害)<nuxt-link to="/armor/Armor_Class_Camel"
            >駱駝單位</nuxt-link
          >。阿拉伯奴隸兵能夠在<nuxt-link to="/techs/age/Imperial_Age"
            >帝王時代</nuxt-link
          >升級成精銳阿拉伯奴隸兵。
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            阿拉伯奴隸兵與<nuxt-link to="/civs/Franks">法蘭克</nuxt-link
            ><nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
            >相似，擁有短距離的近戰傷害單位。由於較高的機動性與對<nuxt-link
              to="/armor/Armor_Class_Cavalry"
              >騎兵</nuxt-link
            >加成傷害，阿拉伯奴隸兵能完全壓制<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >(<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
            >除外)與<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >。排除昂貴的價格外，阿拉伯奴隸兵是眾人認可最優秀的單位。
          </p>
          <p>
            <nuxt-link to="/civs/Indians">印度</nuxt-link>的<nuxt-link
              to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >使阿拉伯奴隸兵攻擊<nuxt-link to="/building">建築物</nuxt-link
            >額外+4，讓阿拉伯奴隸兵不止能對抗敵對的騎兵單位，也大大地提高拆除<nuxt-link
              to="/building"
              >建築</nuxt-link
            >的效率，讓阿拉伯奴隸兵更具侵略性。阿拉伯奴隸兵非常適合搭配<nuxt-link
              to="/units/Camel_Rider"
              >駱駝騎兵</nuxt-link
            >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >與<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>。
          </p>
          <p>
            阿拉伯奴隸兵擁有<nuxt-link to="/armor/Armor_Class_Camel"
              >駱駝裝甲</nuxt-link
            >與特殊防禦類型<nuxt-link to="/armor/Armor_Class_Camel"
              >奴隸兵裝甲</nuxt-link
            >，因此無法像<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
            >的<nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
            >抵抗<nuxt-link to="/units/Spearman">長槍兵</nuxt-link>與<nuxt-link
              to="/units/Camel_Rider"
              >駱駝騎兵</nuxt-link
            >的攻擊。阿拉伯奴隸兵也有<nuxt-link to="/armor/Armor_Class_Archer"
              >射手</nuxt-link
            >的防禦類型，必須提防<nuxt-link to="/units/Huskarl"
              >哥德衛隊</nuxt-link
            >與<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
            >的攻擊，不過阿拉伯奴隸兵屬於近戰傷害，還是能給予<nuxt-link
              to="/units/Huskarl"
              >哥德衛隊</nuxt-link
            >與<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>大量的傷害。
          </p>
          <p>
            除此之外，駱駝騎兵也可以克制阿拉伯奴隸兵，因為阿拉伯奴隸兵不會對駱駝騎兵造成額外傷害。但駱駝騎兵卻可以對阿拉伯奴隸兵的駱駝護甲造成額外傷害，<nuxt-link
              to="/units/Heavy_Camel_Rider"
              >重裝駱駝騎兵</nuxt-link
            >和<nuxt-link to="/units/Imperial_Camel_Rider"
              >帝王駱駝騎兵</nuxt-link
            >會對阿拉伯奴隸兵+7傷害。
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
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >、徒步<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>、<nuxt-link
                to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >、<nuxt-link to="/units/Berserk">狂戰士</nuxt-link>、<nuxt-link
                to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >、<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >、<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link>
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
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Zealotry">狂熱</nuxt-link>(+30，<nuxt-link
                to="/civs/Saracens"
                >薩拉森</nuxt-link
              >
              限定)
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
                src="~assets/chain_barding_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Barding_Armor">鏈鎧甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/plate_barding_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link
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
              /><nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              抵抗<nuxt-link to="/elements/Conversion">招降</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/faith.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>(+33%) <br />
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
            </td>
          </tr>
        </table>

        <h3>剋阿拉伯奴隸兵的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對阿拉伯奴隸兵的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+37攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+29攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+19攻擊</strong></div>
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
                      src="~assets/Elite_cannon_galleonicon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+16攻擊</strong></div>
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
                      src="~assets/HeavyCamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Camel_Rider"
                      >重裝駱駝騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Camel_Rider"
                      >帝王駱駝騎兵</nuxt-link
                    >(<nuxt-link to="/units/Imperial_Camel_Rider"
                      >帝王駱駝騎兵</nuxt-link
                    >是<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Kamayuk_Icon.png"
                      alt=""
                    /><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Kamayuk_Icon.png"
                      alt=""
                    /><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                    >和同盟限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/SkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
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
                      src="~assets/town_center.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Watch_Tower"
                      >瞭望箭塔</nuxt-link
                    >→
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Guard_Tower"
                      >防禦箭塔</nuxt-link
                    >→
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Keep"
                      >大型箭塔</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/bombard_tower.png"
                      alt=""
                    /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-12">
                以下科技可讓以下單位對阿拉伯奴隸兵有額外攻擊力
                <div class="n1">
                  <img
                    class="gg"
                    src="~assets/unique_tech.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/techs/Chieftains">酋長</nuxt-link
                  >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  <div width="22" style="margin:12px 0px;">
                    <strong>+4攻擊</strong>(對<nuxt-link
                      to="/armor/Armor_Class_Camel"
                      >駱駝騎兵類</nuxt-link
                    >)
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
                      /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
                      >→
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
                      <img
                        class="gg"
                        src="~assets/VBRSK.png"
                        alt=""
                      /><nuxt-link to="/units/Berserk">狂戰士</nuxt-link>→
                      <img
                        class="gg"
                        src="~assets/VBRSK.png"
                        alt=""
                      /><nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link
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
              <div class="col-md-12">
                以下團隊加分可讓以下單位對阿拉伯奴隸兵有額外攻擊力
                <div class="n1">
                  <nuxt-link to="/civs/Persians">波斯</nuxt-link
                  >在團隊加分裡，給予以下單位+2額外攻擊vs<nuxt-link
                    to="/units/Archer_Units"
                    >射手單位</nuxt-link
                  >。
                  <div class="row">
                    <div class="col-md-6">
                      <div style="margin:12px 0px;">
                        <strong>+2攻擊</strong>
                      </div>
                      <ul>
                        <li>
                          <img
                            class="gg"
                            src="~assets/KnightIcon.png"
                            alt=""
                          /><nuxt-link to="/units/Knight">騎士</nuxt-link>→
                          <img
                            class="gg"
                            src="~assets/CavalierIcon.png"
                            alt=""
                          /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
                          >→
                          <img
                            class="gg"
                            src="~assets/PaladinIcon.png"
                            alt=""
                          /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠提高阿拉伯奴隸兵的生產速度還有加快<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >和<nuxt-link to="/techs/Zealotry">狂熱</nuxt-link
              >的研究時間(+25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >科技研發速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link>：研發<nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >和<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >的速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Indians">印度</nuxt-link
              >：阿拉伯奴隸兵對<nuxt-link to="/building">建築物</nuxt-link
              >攻擊力+4。
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
              >：研發忠誠信仰和異端邪說的速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：阿拉伯奴隸兵更不容易被招降。
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
            <li>阿拉伯奴隸兵的移動速度是1.41。</li>
            <li>非精銳阿拉伯奴隸兵的攻擊力為7。</li>
            <li>
              阿拉伯奴隸兵的<nuxt-link to="/elements/Frame_delay"
                >開火間隔</nuxt-link
              >為0。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>阿拉伯奴隸兵的移動速度是1.4。</li>
            <li>
              阿拉伯奴隸兵對反<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >攻擊會承受額外11點傷害。另外他們也增加新的防禦類型:<nuxt-link
                to="/units/Naval_Vessels"
                >船</nuxt-link
              >，所以他們也會受到反<nuxt-link to="/armor/Armor_Class_Ship"
                >船艦</nuxt-link
              >攻擊的額外傷害。
            </li>
            <li>引進<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>。</li>
            <li>引進<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>引進<nuxt-link to="/techs/Zealotry">狂熱</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>非精銳阿拉伯奴隸兵現在的攻擊力為8。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              阿拉伯奴隸兵從<nuxt-link to="/armor/Armor_Class_Ship"
                >船艦</nuxt-link
              >護甲移除，新增<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝護甲</nuxt-link
              >。
            </li>
            <li>4.8版本後精銳阿拉伯奴隸兵的開火間隔為5。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              5.8版後，騎兵護甲被移除，擁有特殊防禦類型<nuxt-link
                to="/armor/Armor_Class_Camel"
                >奴隸兵裝甲</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >對有奴隸兵防禦護甲的單位的攻擊降低五點(16→11)。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>阿拉伯奴隸兵有全遊戲最便宜的精銳升級，總計1100資源。</li>
            <li>歷史上的阿拉伯奴隸兵應該是騎馬，而不是駱駝。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            部分原因是伊斯蘭教早期的信徒不會互相爭鬥，這些阿拉伯奴隸兵是各個阿拉伯領導人作為戰士訓練的奴隸。奴隸戰士不須遵守這個互相爭鬥的禁令。阿拉伯奴隸兵訓練有素，動力十足。來自埃及的阿拉伯奴隸兵軍隊在敘利亞罕見地擊敗了<nuxt-link
              to="/civs/Mongols"
              >蒙古人</nuxt-link
            >，將這些野蠻人騎兵從尼羅河和北非驅除出境。阿拉伯奴隸兵順勢揭竿起來反對他們的阿拉伯統治者並解放了自己。當拿破崙在十八世紀入侵埃及時，他在金字塔之戰中擊敗了一支阿拉伯奴隸兵軍隊。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Saracenmamluk.png" alt=""
            /></gallery>
            <p><em>阿拉伯奴隸兵</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Mameluke.png" alt=""
            /></gallery>
            <p><em>一群阿拉伯奴隸兵</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Mameluke_history.jpg" alt=""
            /></gallery>
            <p>
              <em
                >歷史上的阿拉伯奴隸兵，注意他是騎著馬而非像遊戲中騎著駱駝。</em
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle" style="color: #fff">阿拉伯奴隸兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Saracenmamluk_icon.png"
                  alt=""
                />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff">單位介紹</div>
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
            <td class="unit4">
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
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
              <img class="gg" src="~assets/Castle-logo.jpg" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">23秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">55</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">85</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">65/80(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">8/10(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +9/+12(精銳)對<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              ><br />+1(精銳)對<nuxt-link to="/armor/Armor_Class_Mameluke"
                >奴隸兵</nuxt-link
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
            <td class="unit3">開火間隔</td>
            <td class="unit4">24/12(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0/1(精銳)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Mameluke"
                >奴隸兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.4</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2" style="color: #fff">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              />精銳阿拉伯奴隸兵
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                alt=""
              />600<nuxt-link to="/resource/Food">食物</nuxt-link>500<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              >
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
definePageMeta({ layout: 'allunit' })

export default {
  components: {}
}
</script>
<style></style>
