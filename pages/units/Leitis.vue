<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>烈堤司</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>烈堤司</b>是《<nuxt-link to="/games/de"
              >世紀帝國II：決定版</nuxt-link
            >》<nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>的<nuxt-link
              to="/units/Unique_Unit"
              >特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。烈堤司是能無視<nuxt-link to="/armor">裝甲</nuxt-link
            >(僅限於對抗單位)的<nuxt-link to="/units/Cavalry_Units"
              >騎兵單位</nuxt-link
            >。烈堤司可以在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為精鋭烈堤司。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              相比<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >的<nuxt-link to="/units/Knight">騎士</nuxt-link
              >，烈堤司擁有更高的攻擊力，更少的黃金成本，更低的<nuxt-link
                to="/armor"
                >近防</nuxt-link
              >和能無視敵方裝甲的能力。
            </li>
            <li>
              除了一開始多150食物外，立陶宛沒有實際的經濟加成比其他文明更快地升到城堡時代。當玩家以城快作為策略在多數情況下，玩家會訓練騎士，而不是烈堤司，直到城堡時代晚期。
            </li>
            <li>
              如果玩家一開始已有<nuxt-link to="/building/Castle">城堡</nuxt-link
              >（例如弑君模式）或建造了城堡，烈堤司通常會在幾個方面下勝過騎士：在城堡時代時，烈堤司能一對一擊敗普通騎士，而在帝王時代時，他們能更便宜和更快地升上精鋭。
            </li>
            <li>
              如果經濟好，而且建造了至少兩個城堡的話，選擇烈堤司會比騎士好，因為無視裝甲的能力，能輕鬆擊敗<nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >等裝甲部隊或<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link
              >。烈堤司的能力還能無視<nuxt-link to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >的近程護甲研發和升級，還有一些文明能提升護甲的<nuxt-link
                to="/techs/untech"
                >特殊科技</nuxt-link
              >。如果對手已研究了這些科技，這將會是浪費資源。
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
              <nuxt-link to="/units/Skirmisher">矛兵系列</nuxt-link
              >、裝甲部隊（尤其是<nuxt-link to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >和<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>）。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>、<nuxt-link
                to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >、<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >、<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >、<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、<nuxt-link
                to="/units/Monk"
                >僧侶</nuxt-link
              >、<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
              >、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>
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
            <td class="tta1" style="width:10%">攻擊力</td>
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
                src="~assets/Chainbardingarmor.jpg"
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
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
            </td>
          </tr>
        </table>

        <h3>剋烈堤司的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對烈堤司的額外傷害，按照殺傷力排列。
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
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
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
            以下科技可讓以下單位對貴族鐵騎有額外攻擊力
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
        </div>
        <h3>文明加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
              >：每駐守一件<nuxt-link to="/elements/Relic">遺跡</nuxt-link
              >，烈堤司攻擊力+1（最高+4）
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
              >能夠提高烈堤司的生產速度
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >提升<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >護甲和騎兵攻擊的科技研發快50％。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link>：<nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >與<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Berbers">立陶宛</nuxt-link>：<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >與<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：烈堤司更不容易被<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <div class="n1">
          <h3></h3>
          <ul></ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              烈堤司的破甲攻擊似乎來自中世紀和文藝復興時期的士兵，他們通過使用狼牙棒、流星鎚、戰鎚、戰鎬、連枷等猛擊敵人的盔甲來破甲。而遊戲中烈堤司能擊敗<nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >和<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link
              >的能力是參考了波蘭立陶宛聯軍擊敗條頓騎士團的格倫瓦德之戰。然而，擁有流星鎚的<nuxt-link
                to="/units/Konnik"
                >保加利亞騎兵</nuxt-link
              >並沒有破甲能力。
            </li>
            <li>
              儘管遊戲中烈堤司的血量和裝甲與重裝<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >相當，但格倫瓦德之戰的立陶宛騎兵實際上是<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >，而波蘭才是以重裝騎兵作戰。
            </li>
            <li>
              全滿的精鋭烈堤司加上擁有四個<nuxt-link to="/elements/Relic"
                >遺跡</nuxt-link
              >，攻擊力高達22，與立陶宛<nuxt-link to="/units/Paladin"
                >遊俠</nuxt-link
              >(擁有四個遺跡)和<nuxt-link to="/units/Shotel_Warrior"
                >精鋭彎刀勇士</nuxt-link
              >並列，是<nuxt-link to="/units/Siege_Weapons"
                >攻城器單位</nuxt-link
              >和<nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link
              >以外第二高攻的單位，僅次於<nuxt-link to="/units/War_Elephant"
                >精鋭戰象</nuxt-link
              >的24攻擊。
            </li>
          </ul>
        </div>

        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em>決定版</em>
          </h3>
          <ul>
            <li>最初因為聖物獲得的攻擊加成最多可達5。</li>
            <li>更新檔34055起將因聖物獲得的攻擊加成下修為最多4攻。</li>
            <li>
              (36906更新)
              ，成本由50食物80黃金更變為70食物50黃金，訓練速度23/20秒上修為20/18秒。
            </li>
          </ul>
        </div>

        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          烈堤司（Leičiai）實際上是拉脫維亞人用來形容立陶宛人的別名。而在立陶宛人眼裏，烈堤司是立陶宛早期大公國中隸屬立陶宛統治者或國家本身的立陶宛士兵社會團體。
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Leitises.png" alt=""
              /></gallery>
              <p>
                <em
                  >《<nuxt-link to="/games/de">世紀帝國II：決定版</nuxt-link
                  >》的烈堤司。</em
                >
              </p>
            </div>
          </div>
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
              <div class="unititle" style="color: #fff">烈堤司</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Leitisicon.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>
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
            <td class="unit4">23/20(精銳)秒</td>
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
            <td class="unit4">70</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">50</td>
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
            <td class="unit3">血量</td>
            <td class="unit4">100/130(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">12/14(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">1.9</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">1/2(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
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
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/Leitisicon.png" alt="" />精銳烈堤司
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                alt=""
              />750食物750黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">45秒</td>
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
