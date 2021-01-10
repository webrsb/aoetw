<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>草原騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>草原騎兵</b>是《<nuxt-link to="/games/de"
              >世紀帝國II：決定版</nuxt-link
            >》中，於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >可以訓練的<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >，可訓練於<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >。屬於一種輕騎兵，帶著長矛能夠遠距離攻擊，但只有1的射程。
          </p>
          <p>
            <b><i class="fas fa-check" style="color: green;"></i>可訓練文明：</b
            ><nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、<nuxt-link
              to="/civs/Cumans"
              >庫曼</nuxt-link
            >、<nuxt-link to="/civs/Tatars">韃靼</nuxt-link>。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            草原騎兵適合團體和隘口上作戰，因為他們有1的射程可以攻擊到同伴身後的敵人，就像<nuxt-link
              to="/civs/Incas"
              >印加</nuxt-link
            >的<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>一樣。
          </p>
          <p>
            草原騎兵的攻擊範圍可讓他們打到城牆後的敵人，所以用於城牆上的進攻防守都十分好用，對來犯的<nuxt-link
              to="/units/Battering_Ram"
              >衝撞車</nuxt-link
            >也能有效且安全的摧毀它們。
          </p>
          <p>
            草原騎兵可以被視為中型騎兵，因為他們的基本屬性和成本都位於<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >和<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>之間。
          </p>
          <p>
            草原騎兵雖在一對一中擊敗不了騎士，但在同等資源的情況下，一群草原騎兵有可能相同數量的騎士，因為他們的<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >成本更便宜，還可以攻擊到同伴身後的敵人。
          </p>
          <p>
            草原騎兵能與庫曼、蒙古、韃靼的<nuxt-link to="/units/Cavalry_Archer"
              >馬弓騎兵</nuxt-link
            >/<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>/<nuxt-link
              to="/units/Mangudai"
              >蒙古突騎</nuxt-link
            >/<nuxt-link to="/units/Kipchaks">欽察</nuxt-link
            >組成不錯的軍隊，因為這三個文明在輕騎兵和馬弓騎兵上都有文明和科技加成。
          </p>
          <p>
            對抗草原騎兵最好是使用駱駝部隊（尤其是<nuxt-link
              to="/units/Mameluke"
              >阿拉伯奴隸兵</nuxt-link
            >和<nuxt-link to="/units/Imperial_Camel_Rider"
              >帝王駱駝騎兵</nuxt-link
            >），<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>和<nuxt-link
              to="/units/Genoese_Crossbowman"
              >熱那亞弩手</nuxt-link
            >。另外，大量的<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
            >和擁有<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
            >科技的<nuxt-link to="/civs/Vikings">維京</nuxt-link
            ><nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >也能對草原騎兵構成威脅。與其他騎兵單位相比，草原騎兵的低遠防使其更容易受到<nuxt-link
              to="/units/Archer_Units"
              >遠距離單位</nuxt-link
            >和防禦建築的傷害。
          </p>
          <ul>
            <li><nuxt-link to="/civs/Mongols">蒙古</nuxt-link></li>
            蒙古的草原騎兵擁有額外30%的<nuxt-link to="/elements/Hit_points"
              >血量</nuxt-link
            >，因此可以在一定程度上彌補了低防的缺點。
          </ul>
          <ul>
            <li><nuxt-link to="/civs/Cumans">庫曼</nuxt-link></li>
            庫曼的草原騎兵移動速度在<nuxt-link to="/techs/age/Castle_Age"
              >城堡</nuxt-link
            >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >快10％/ 15％，但由於庫曼本身缺乏<nuxt-link to="/techs/Husbandry"
              >耕種技術</nuxt-link
            >，在帝王時代只能有效提高5％。但這也算是增強了草原騎兵的突襲能力。
            且還受益於<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            ><nuxt-link to="/techs/Steppe_Husbandry">大草原耕種技術</nuxt-link
            >，讓他們在城堡時代就可以大量生產草原騎兵。
          </ul>
          <ul>
            <li><nuxt-link to="/civs/Tatars">韃靼</nuxt-link></li>
            韃靼的草原騎兵擁有對低地單位傷害+50%的文明加成，加上本身的射程，這使他們在有大量高海拔的地圖上處於優勢，甚至比騎士好用。且還受益於特殊科技<nuxt-link
              to="/techs/Silk_Armor"
              >絲護甲</nuxt-link
            >，使他們更能抵禦攻擊。
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
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >、<nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link
              >、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              重<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >、<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >、駱駝部隊
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
              >(+1/+2) <br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Silk_Armor"
                >絲護甲</nuxt-link
              >(+1/+1，<nuxt-link to="/civs/Tatars">韃靼</nuxt-link>限定)
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
            <td class="tta1" style="width:10%">招降抵抗</td>
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
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
              <br /><img
                src="~assets/unique_tech.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Steppe_Husbandry"
                >大草原耕種技術</nuxt-link
              >(+50%，<nuxt-link to="/civs/Cumans">庫曼</nuxt-link>限定)
            </td>
          </tr>
        </table>

        <h3>剋草原騎兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對草原騎兵的額外傷害，按照殺傷力排列。
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
                      src="~assets/Elite_cannon_galleonicon.png"
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
                      src="~assets/Kamayuk_Icon.png"
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
                    /><nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link>
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
                      src="~assets/Kamayuk_Icon.png"
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
            >草原騎兵</nuxt-link
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
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link
              >：草原騎兵速度在<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >提升10％/ 15％。
            </li>
            <li>
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>：草原騎兵<nuxt-link
                to="/elements/Hit_points"
                >血量</nuxt-link
              >+30%。
            </li>
            <li>
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link
              >：草原騎兵在高地戰鬥傷害+50%。
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
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >提升草原騎兵護甲和攻擊的科技研發快80％。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link
              >：草原騎兵生產效率和升級快20%，<nuxt-link to="/techs/Bloodlines"
                >品種</nuxt-link
              >與<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>：<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >與<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：草原騎兵對僧侶抵抗力更強。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              起初，草原騎兵成本為70F/30G，攻擊力10，攻速1.9，移動速度1.5。
            </li>
            <li>
              (34055更新)
              草原騎兵成本改為70F/45G，攻擊力改為8，攻速改為2.3，移動速度改為1.45。
            </li>
            <li>(34055更新) 堆疊尺寸增加一倍。</li>
            <li>
              (35584更新)
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>可以訓練草原騎兵。
            </li>
            <li>(36202更新) 草原騎兵攻擊力改為9。</li>
            <li>
              (36202更新) 草原騎兵受益於<nuxt-link to="/techs/Steppe_Husbandry"
                >大草原耕種技術</nuxt-link
              >。
            </li>
            <li>
              (36202更新) 草原騎兵受益於<nuxt-link to="/techs/Silk_Armor"
                >絲護甲</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              在34055更新前，草原騎兵攻擊力高，堆疊尺寸小（在非常小的空間內堆疊大量的草原騎兵，對對手造成高傷害，但自己受到的傷害卻很小），移動速度與<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >相同，使用<nuxt-link to="/civs/Cumans">庫曼</nuxt-link
              >的話甚至擁有<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >和10％的速度文明加成（反<nuxt-link to="/units/Cavalry_Units"
                >騎兵單位</nuxt-link
              >起不到作用），使得草原騎兵異常強大。導致許多玩家只要在排名對戰中遇到對手使用庫曼時便退出遊戲，在非排名對戰中室主也會直接踢使用庫曼甚至<nuxt-link
                to="/civs/Tatars"
                >韃靼</nuxt-link
              >的玩家。更新後雖然仍然可以將草原騎兵堆疊在非常小的的空間中，但需要大量的微操和一些特定的指令，例如在非常小的的區域中巡邏。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Steppelancers.jpg" alt=""
              /></gallery>
              <p><em>一群草原騎兵。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Artistic_Crimean-Tatar_lancer.jpg"
                  alt=""
              /></gallery>
              <p><em>畫家筆下16世紀的韃靼騎士。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">草原騎兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Steppelancericon.png"
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
            <td class="unit4">
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link><br /><nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >
              <br /><nuxt-link to="/civs/Tatars">韃靼</nuxt-link>
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
              <img class="gg" src="~assets/Stable-logo.jpg" alt="" /><nuxt-link
                to="/building/Stable"
                >馬廄</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">24秒</td>
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
            <td class="unit4">70</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">45</td>
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
            <td class="unit4">9(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">2.3</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">1</td>
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
            <td class="unit3"><nuxt-link to="/armor">裝甲類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.45</td>
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
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elitesteppelancericon.png"
                alt=""
              /><nuxt-link to="/units/Elite_Steppe_Lancer"
                >精銳草原騎兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/EliteSteppeLancerUpgDE.png"
                alt=""
              />900食物550黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">55秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由singsing612協助編輯</div>
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
