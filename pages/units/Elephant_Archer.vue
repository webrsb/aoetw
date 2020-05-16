<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>象弓騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>象弓騎兵</b>是資料片中<nuxt-link to="/civs/Indians"
              >印度</nuxt-link
            >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。是個速度慢但有重裝甲和高<nuxt-link
              to="/elements/Hit_points"
              >生命值</nuxt-link
            >的騎象<nuxt-link to="/units/Archer_Units">射手</nuxt-link>。
          </p>
          <p>
            象弓騎兵可以在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為<nuxt-link to="/units/Elephant_Archer"
              >精銳象弓騎兵</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              象弓騎兵具有很高的HP和<nuxt-link to="/armor">遠程護甲</nuxt-link
              >，造成的傷害和<nuxt-link to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >一樣多，但開火速度較低，也像所有的大象一樣移動速度慢，但比戰像還要快。
            </li>
            <li>
              象弓騎兵擁有比任何其他<nuxt-link to="/units/Archer"
                >弓箭手</nuxt-link
              >更多的HP，包括<nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link
              >。他們融合了<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
              >的耐打和馬弓騎兵的射程及<nuxt-link to="/elements/Attack"
                >攻擊力</nuxt-link
              >。極高的HP和遠程護甲使讓象弓騎兵像一座移動的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >，而且也能對付<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >和<nuxt-link to="/building">建築物</nuxt-link
              >，還可以被<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >治療。不過他們非常怕<nuxt-link to="/units/Spearman"
                >長槍兵</nuxt-link
              >和僧侶(印度缺乏<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link
              >)，不過他們還是能用遠距離對付這兩個單位。
            </li>
            <li>
              象弓騎兵是一個高度情境化且很少使用的單位。這主要有三個原因：
            </li>
            <p>他們成本高難以量產，然而弓箭手要一定數量傷害才夠。</p>
            <p>
              速度慢讓他們沒法逃離<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >或<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
              >的追擊，一旦讓<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >追上他們就只能任憑宰割。
            </p>
            <p>
              象弓騎兵在裝甲分類上有五個分類，這讓他們的對手可以輕易地根據自己的<nuxt-link
                to="/civs"
                >文明</nuxt-link
              >和遊戲策略選擇有效對付象弓騎兵的單位。
            </p>
          </ul>
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
            <td class="tta4">緩慢的近距離單位、弓兵、建築物。</td>
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
              >、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link
                to="/units/Mameluke"
                >阿拉伯奴隸兵</nuxt-link
              >、<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link
              >、戰矛兵、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>、僧侶。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生命值</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/Bloodlines.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>(+20)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/fletching.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/bodkin_arrow.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>(+1)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/Bracer.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/chemistry.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/parthian_tactics.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link
                >(+2對<nuxt-link to="/armor/Armor_Class_Spearman"
                  >長槍兵</nuxt-link
                >)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊範圍</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/fletching.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/bodkin_arrow.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>(+1)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/Bracer.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">開火速度</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/Thumb_Ring.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>(+18%)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/ballistics.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
                >(對移動目標命中率上升)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/padded_archer_armor.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵護甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/leather_archer_armor.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Leather_Archer_Armor"
                  >弓兵皮甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/ring_archer_armor.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link
                >(+1/+2)
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/parthian_tactics.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link
                >(+1/+2)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/husbandry.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link>(+10%)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/faith.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生產速度</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/conscription.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
              </p>
            </td>
          </tr>
        </table>

        <h3>剋象弓騎兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對象弓騎兵的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+47攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+32攻擊</strong></div>
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
                <div style="margin:12px 0px;"><strong>+30攻擊</strong></div>
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
                      src="~assets/Elite_cannon_galleonicon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+28攻擊</strong></div>
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
                      src="~assets/ImperialCamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >(<nuxt-link to="/units/Imperial_Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >是<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+14攻擊</strong></div>
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
              </div>
              <div class="col-md-6">
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
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
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
                    >(<nuxt-link to="/civs/Goth">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
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
                    /><nuxt-link to="/units/Mameluke"
                      >精銳阿拉伯奴隸兵</nuxt-link
                    >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyScorpionIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
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
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ScorpionIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Scorpion">弩砲</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
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
                      style="margin: 2px;"
                      src="~assets/CamelArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Camel_Archer"
                      >精銳駱駝弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
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
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/CamelArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/SkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
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
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/CamelArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+0攻擊</strong></div>
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
                      src="~assets/EagleScoutIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>
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
                    /><nuxt-link to="/units/Chu_Ko_Nu">精銳連弩兵</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior"
                      >精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                      to="/units/Berserk"
                      >狂戰士</nuxt-link
                    >→
                    <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
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
              <div class="col-md-12">
                以下科技可讓以下單位對象弓騎兵有額外攻擊力
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
              以下<nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link
              >可讓以下單位對象弓騎兵有額外攻擊力
              <div class="n1">
                <nuxt-link to="/civs/Persians">波斯</nuxt-link
                >在團隊加分裡，給予以下單位+2額外攻擊vs<nuxt-link
                  to="/units/Archer_Units"
                  >射手單位</nuxt-link
                >。
                <div class="row">
                  <div class="col-md-12">
                    <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
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
                        /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link>→
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
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠提高象弓騎兵的生產速度還有加速<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >的研究時間(快25%)
            </li>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>：研究<nuxt-link
                to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >和<nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link
              >速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link>：研究<nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >和<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：象弓騎兵更不容易被招降。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/news/ver-5.8">5.8版</nuxt-link
              >後，象弓騎兵對弓兵<nuxt-link to="/armor">防禦類型</nuxt-link> -2
              → 0，對反弓兵防禦類型0 → -2
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle" style="color: #fff">象弓騎兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/ElephantArcherIcon.png"
                  class="img-fluid"
                  alt=""
                />
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>；<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Indians">印度</nuxt-link>
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
              <img
                class="gg"
                src="~assets/castle.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">25秒</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">80</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">280，330(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              6/7(精銳)(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_class_stone_defense"
                >石頭建築</nuxt-link
              >+3/+4(精銳) <br />對<nuxt-link to="/armor/Armor_Class_Building"
                >一般建築</nuxt-link
              >+3/+4(精銳)
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.5</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">4</td>
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
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3">防禦類別</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">弓兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >(-2) <br /><nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_War_Elephant"
                >戰象</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.8</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/ElephantArcherIcon.png"
                alt=""
              />精銳象弓騎兵
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">1000食物800黃金</td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">60秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
