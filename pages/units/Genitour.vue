<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>標槍騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>標槍騎兵</b>是<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
            >的第二個<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >可以在<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >訓練，本質上就是一個騎馬的<nuxt-link to="/units/Skirmisher"
              >矛兵</nuxt-link
            >
            ，因為不用<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >，被認為是垃圾兵種之一。
          </p>
          <p>
            <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >可以升級為<nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
            >。
          </p>
          <p>
            標槍騎兵是一個共享的特殊單位，任何與<nuxt-link to="/civs/Berbers"
              >柏柏</nuxt-link
            >同盟的玩家都可以使用。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            對於任何<nuxt-link to="/units/Archer">弓箭手</nuxt-link
            >來說，標槍騎兵都是非常恐怖的存在。由於他有比較高的<nuxt-link
              to="/elements/Hit_points"
              >血量</nuxt-link
            >，標槍騎兵與所有的<nuxt-link to="/units/Archer_Units"
              >射手單位</nuxt-link
            >對戰中都能獲勝。也可以利用速度來攻擊走得比較慢的單位，如:<nuxt-link
              to="/units/Spearman"
              >槍兵</nuxt-link
            >。而應該避免對上<nuxt-link to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >與<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>。
          </p>
        </div>
        <h3>與矛兵的比較</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            雖然功能上與<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
            >差不多，但還是與矛兵有一些不同。他的速度更快且更多血量，特別是有<nuxt-link
              to="/techs/Bloodlines"
              >品種</nuxt-link
            >的<nuxt-link to="/civs">文明</nuxt-link
            >。且攻擊更高一點，另一方面他需要更久的訓練時間與更高的成本，且更怕<nuxt-link
              to="/units/Camel"
              >駱駝</nuxt-link
            >與<nuxt-link to="/units/Spearman">長槍兵</nuxt-link>等反<nuxt-link
              to="/armor/Armor_Class_Cavalry"
              >騎兵單位</nuxt-link
            >的克制。他對槍兵也沒有攻擊加成，但相對於矛兵，他可以用拉打的戰術。
          </p>
          <p>
            對於<nuxt-link to="/civs/Turks">土耳其人</nuxt-link>來說，<nuxt-link
              to="/civs/Berbers"
              >柏柏</nuxt-link
            >是他喜愛的同盟之一，因為<nuxt-link to="/civs/Turks"
              >土耳其</nuxt-link
            >沒有<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
            >，並且憑著土耳其的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            ><nuxt-link to="/techs/Sipahi">采邑騎兵</nuxt-link
            >，可以讓標槍騎兵血量高達95。
          </p>
          <p>
            簡單的來說，有<nuxt-link to="/techs/Bloodlines">品種</nuxt-link
            >的國家就用標槍騎兵，沒<nuxt-link to="/techs/Bloodlines"
              >品種</nuxt-link
            >的國家就用矛兵
          </p>
          <ul>
            <li>
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >的<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
              >對上標槍騎兵較為優勢，但<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >的標槍騎兵配上<nuxt-link to="/techs/Bloodlines">品種</nuxt-link
              >則可以打贏戰矛兵
            </li>
            <li>
              長<nuxt-link to="/armor/Armor_Class_Spearman">槍兵類</nuxt-link
              >、<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              ><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>、<nuxt-link
                to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >打標槍騎兵有加成
            </li>
            <li>
              <nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link> vs.
              標槍騎兵 +6，標槍騎兵 vs.<nuxt-link to="/units/Camel_Archer"
                >駱駝弓騎兵</nuxt-link
              >(<nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >系) +5，與駱駝弓騎兵對打會輸
            </li>
            <li>
              <nuxt-link to="/techs/Parthian_Tactics">安息人戰術</nuxt-link
              >不套用標槍騎兵
            </li>
            <li>
              標槍騎兵的移動速度比<nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >還慢
            </li>
            <li>
              後帝王時代的標槍騎兵訓練時間 18.8秒，<nuxt-link
                to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >
              16.6秒
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link
              >標槍騎兵因為防禦低，即使<nuxt-link to="/elements/Rate_of_Fire"
                >射速</nuxt-link
              >快仍輸一般標槍騎兵
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >矛兵便宜不適用標槍騎兵
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              ><nuxt-link to="/techs/Andean_Sling">安地斯彈弓</nuxt-link
              >適用於標槍騎兵
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              ><nuxt-link to="/techs/Sipahi">采邑騎兵</nuxt-link>適用於標槍騎兵
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>馬弓騎兵
              vs.<nuxt-link to="/building">建築</nuxt-link>+4 適用於標槍騎兵
            </li>
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
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >、<nuxt-link to="/units/Siege_Weapons">攻城單位</nuxt-link
              >、<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
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
              /><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>(+20) <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Sipahi"
                >采邑騎兵</nuxt-link
              >(+20，<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定 )
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Attack">攻擊力</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/fletching.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/bodkin_arrow.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/chemistry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1) <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Atlatl"
                >擲矛器</nuxt-link
              >(+1，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊範圍</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/fletching.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/bodkin_arrow.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1) <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Atlatl"
                >擲矛器</nuxt-link
              >(+1，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
              <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Andean_Sling"
                >安地斯彈弓</nuxt-link
              >:<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>和<nuxt-link
                to="/units/Slinger"
                >投石手</nuxt-link
              >取消最小射程。<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/ballistics.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >:對移動目標命中率上升<br />
              <img
                class="gg"
                src="~assets/Thumb_Ring.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link
              >:命中率提升到100%
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/padded_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵護甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/leather_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/ring_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link
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
            </td>
          </tr>
        </table>

        <h3>剋標槍騎兵系的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對標槍騎兵系的額外傷害，按照殺傷力排列。
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
              <div style="margin:12px 0px;"><strong>+30攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/CannonGalleonIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/CannonGalleonIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Elite_Cannon_Galleon"
                    >精銳火砲戰船</nuxt-link
                  >
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
                  /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link>→
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
              <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/SpearmanIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Saracenmamluk_icon.png"
                    alt=""
                  /><nuxt-link to="/units/Mameluke">精銳阿拉伯奴隸兵</nuxt-link
                  >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Kamayuk_Icon.png"
                    alt=""
                  /><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link
                  >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                </li>
                <li>
                  <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                    to="/units/Samurai"
                    >精銳日本武士</nuxt-link
                  >
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
                  >
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
                  /><nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
                  >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Kamayuk_Icon.png"
                    alt=""
                  /><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>(<nuxt-link
                    to="/civs/Incas"
                    >印加</nuxt-link
                  >限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Imperialskirmishericon.png"
                    alt=""
                  /><nuxt-link to="/units/Imperial_Skirmisher"
                    >帝王戰矛兵</nuxt-link
                  >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>和同盟限定)
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
              <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
              <ul>
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
                    style="margin: 2px;"
                    src="~assets/CamelArcherIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Camel_Archer"
                    >精銳駱駝弓騎兵</nuxt-link
                  >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/EliteSkirmisherIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
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
                <li>
                  <img
                    class="gg"
                    src="~assets/GenitourIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
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
                <li>
                  <img
                    class="gg"
                    src="~assets/GenitourIcon.png"
                    alt=""
                  /><nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                  >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
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
            </div>
          </div>
          以下科技研發後對<nuxt-link to="/armor/Armor_Class_Spearman"
            >長槍兵</nuxt-link
          >有額外攻擊力，以數值排列:
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
            <nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link>:<nuxt-link
              to="/civs/Persians"
              >波斯</nuxt-link
            >在團隊加分裡，給予以下單位+2額外攻擊vs<nuxt-link
              to="/units/Archer_Units"
              >射手單位</nuxt-link
            >:
            <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/KnightIcon.png" alt="" /><nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >→
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
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：生產快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對標槍騎兵有利的<nuxt-link to="/techs">科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：多20%的血量。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link
              >：標槍騎兵的血量在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代各便宜10%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link
              >：標槍騎兵發射速度快25%。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：標槍騎兵<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >攻擊+3。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：升級<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >科技不用黃金。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：標槍騎兵的血量在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代各增加15%/20%的血量。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >：標槍騎兵生產快20%。研發<nuxt-link to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >的速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link>：<nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >與<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：標槍騎兵對<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >抵抗力更強。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              遠程防禦為3/4(精銳)
            </li>
            <li>
              最初非精銳的標槍騎兵有4的攻擊與3的射程，4.8版後為3的攻擊與4的射程。
            </li>
            <li>
              最初<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >的文明加成快15％的軍事單位生產速度，標槍騎兵並不適用，4.8版後標槍騎兵也適用了。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              (35584更新) 非精銳的遠程防禦增加為4
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link
              >發行前，標槍騎兵原本設定為<nuxt-link to="/civs/Spanish"
                >西班牙</nuxt-link
              >的特殊單位，大致與現在的標槍騎兵相同，但後來因為不知名的原因被<nuxt-link
                to="/units/Conquistador"
                >西班牙征服者</nuxt-link
              >取代。然後在地圖編輯器中，依然可以發現一個單位以<nuxt-link
                to="/units/Militia"
                >民兵</nuxt-link
              >的外表登場，卻是馬弓騎兵的頭像，但是攻擊卻是擲矛，這個單位叫做<nuxt-link
                to="/units/edmap/Genitour"
                >馬勇士</nuxt-link
              >。
            </li>
            <li>
              標槍騎兵的英文為Genitour，源自於西班牙語中的“Jinete”，意思是<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >的意思，Jinetes在歷史上是一種快速移動的矛兵，雖然給予柏柏這單位是有點奇怪的。
            </li>
            <li>
              標槍騎兵是唯三不用花錢的特殊單位之一，另外兩個是<nuxt-link
                to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >與<nuxt-link to="/units/Magyar_Huszar">馬扎爾驃騎兵</nuxt-link>。
            </li>
            <li>
              標槍騎兵是少數不用花費黃金可以升級精銳的單位之一，另外是<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >與<nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link>。
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
                  src="~assets/Tumblr_nxo1o0aN0R1tnh0y7o7_400.png"
                  alt=""
              /></gallery>
              <p><em>一群標槍騎兵。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/0.jpg" alt=""
              /></gallery>
              <p><em>雖然南美文明不能生產騎兵，但卻可以生產標槍騎兵。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">標槍騎兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/GenitourIcon.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/units/Archer_Units">射手</nuxt-link>、<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
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
                src="~assets/archery_range.png"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">25秒</td>
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
            <td class="unit4">50</td>
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
            <td class="unit3">血量</td>
            <td class="unit4">50、55(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              3、4(精銳)(<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +4、+5(精銳)對<nuxt-link
                to="/armor/Armor_Class_Archer"
              ></nuxt-link
              >弓箭手<br />+2(精銳)對<nuxt-link
                to="/armor/Armor_Class_Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">3.05</td>
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
            <td class="unit3">最小射程</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">90%</td>
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
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">射手</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >(+1) <br /><nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
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
            <td class="unit4">5、6(精銳)</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/GenitourIcon.png" alt="" /><nuxt-link
                to="/units/Genitour"
                >精銳標槍騎兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                alt=""
              />50食物400木
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">60秒</td>
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
