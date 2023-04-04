<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>傳教士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>傳教士</b>是<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
            >中<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
            >的第二種<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，可以在<nuxt-link to="/building/Monastery">修道院</nuxt-link
            >進行訓練。但不像<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >，它無法撿<nuxt-link to="/elements/Relic">遺跡</nuxt-link>。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            與<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >一樣，傳教士能夠治療單位以及<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >敵方單位，但是不能拾取<nuxt-link to="/elements/Relic"
              >遺跡</nuxt-link
            >，且治療速度只有僧侶的一半（每0.8秒1
            HP而不是0.4秒）。它可以移動得相當快，使它幾乎可以從<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >以外幾乎所有的敵方單位攻擊下逃走。在<nuxt-link to="/units/Knight"
              >騎士</nuxt-link
            >中搭配幾個傳教士可以在勢均力敵的戰鬥中大大提高獲勝的機會。傳教士也能招降被擊敗的敵人的單位和<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >。他們受到所有<nuxt-link to="/building/Monastery">修道院</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link
            >的影響。然而，儘管他們在移動速度方面比僧侶有優勢，但傳教士招降範圍只有7，遠不敵僧侶的9。
          </p>
          <p>
            僧侶和傳教士的成本都一樣，使在他們之間的選擇主要是戰術上的問題。在大多數方面，傳教士的表現通常優於僧侶。但僧侶的進攻能力，無論是醫治友軍，招降敵人或逃避反擊都有更好的表現。傳教士在防守上的表現則差得多，而且治療速度也較慢，所以對於必須在<nuxt-link
              to="/building/Stone_Wall"
              >城牆</nuxt-link
            >後面反擊的情況，僧侶的表現會更好。
          </p>
          <p>
            對於<nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
            >來說，<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
            >傳教士給西班牙人更多的戰術靈活性，特別是在進攻和後期遊戲<nuxt-link
              to="/elements/Relic"
              >遺跡</nuxt-link
            >已被收集完的時候。
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
              緩慢且沒有射程的單位、可以招降的<nuxt-link to="/building"
                >建築物</nuxt-link
              >、<nuxt-link to="/units/Knight">騎士</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>、<nuxt-link
                to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >、<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >、<nuxt-link to="/building/Castle">城堡</nuxt-link>。
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
              <img class="gg" src="~assets/sanctity.png" alt="" /><nuxt-link
                to="/techs/Sanctity"
                >聖潔虔誠</nuxt-link
              >(+15) <br />
              <img
                class="gg"
                src="~assets/Bloodlines.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>(+20)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">射程</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/block_printing.png"
                alt=""
              /><nuxt-link to="/techs/Block_Printing">印刷技術</nuxt-link>(+3)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img class="gg" src="~assets/fervor.png" alt="" /><nuxt-link
                to="/techs/Fervor"
                >宗教狂熱</nuxt-link
              >(+15%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">招降</td>
            <td class="tta4">
              <img class="gg" src="~assets/redemption.png" alt="" /><nuxt-link
                to="/techs/Redemption"
                >神聖思想</nuxt-link
              >:僧侶可招降大部分建築物和<nuxt-link to="/units/Siege_Weapons"
                >攻城單位</nuxt-link
              >。<br />
              <img class="gg" src="~assets/atonement.png" alt="" /><nuxt-link
                to="/techs/Atonement"
                >救贖思想</nuxt-link
              >:僧侶可招降對方的僧侶。<br />
              <img class="gg" src="~assets/illumination.png" alt="" /><nuxt-link
                to="/techs/Illumination"
                >啟示思想</nuxt-link
              >:僧侶招降成功後，恢復信仰的速度快50%。33秒後可再次招降對方(原為62秒)。
              <br />
              <img class="gg" src="~assets/Theocracy.png" alt="" /><nuxt-link
                to="/techs/Theocracy"
                >神權統治</nuxt-link
              >:一群僧侶招降一個單位成功後，只有一位僧侶需要恢復信仰。<br />
              <img src="~assets/unique_tech.png" class="gg" alt="" /><nuxt-link
                to="/techs/Inquisition"
                >異端審判</nuxt-link
              >:僧侶招降速度變快(對單位時間-1，對建築物時間-7)，<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >限定。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">招降抵抗</td>
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
        </table>

        <h3>剋傳教士的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對傳教士的額外傷害，按照殺傷力排列。
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
                <div style="margin:12px 0px;"><strong>+14攻擊</strong></div>
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/HussarIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LightCavalryIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleScoutIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>
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
                      src="~assets/ScoutCavalryIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Scout_Cavalry">斥候騎兵</nuxt-link>
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
              </div>
            </div>
          </div>
          以下科技可給以下單位對傳教士有額外攻擊:
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
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：傳教士治療速度提高50％。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：傳教士對敵方的招降更有抵抗力。
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
              訓練傳教士需要先建造<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              傳教士現在會受到<nuxt-link to="/techs/Bloodlines">品種</nuxt-link
              >和<nuxt-link to="/techs/Fervor">宗教狂熱加成影響。</nuxt-link>。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>訓練傳教士不再需要先建造城堡。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              傳教士的治療速度和僧侶一樣。
            </li>
            <li>
              傳教士會受到<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >的影響。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              傳教士是唯一在修道院訓練的特殊單位，同時也讓修道院成為唯一可訓練一種特殊單位的建築物。
            </li>
            <li>
              傳教士是少數幾個單位同時沒有<nuxt-link to="/armor">近防</nuxt-link
              >和<nuxt-link to="/armor">遠防</nuxt-link>。其他的有<nuxt-link
                to="/units/Slinger"
                >投石手</nuxt-link
              >、<nuxt-link to="/units/Condottiero">傭兵</nuxt-link>、<nuxt-link
                to="/units/Imperial_Camel_Rider"
                >帝王駱駝騎兵</nuxt-link
              >和<nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >。
            </li>
            <li>
              傳教士是少數幾個特殊單位沒有精銳升級的。其他的有<nuxt-link
                to="/units/Slinger"
                >投石手</nuxt-link
              >、<nuxt-link to="/units/Condottiero">傭兵</nuxt-link>、<nuxt-link
                to="/units/Imperial_Camel_Rider"
                >帝王駱駝騎兵</nuxt-link
              >和<nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >
            </li>
            <li>
              與僧侶不同的是，傳教士的名字在歷史上是正確的，因為傳教士的定義是“一個宗教使團派出的人，特別是被派去在外國宣傳基督教的人”，傳教士在遊戲中的主要目的就是招降敵方單位(向他們傳教，阿門)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            隨著歐洲人漸漸明白哥倫布已經打開了通向兩大洲的大門，他們醒悟到將潛在巨大的本地人口轉變為基督教的可能性，西班牙人，<nuxt-link
              to="/civs/Portuguese"
              >葡萄牙人</nuxt-link
            >和其他歐洲國家紛紛派遣傳教士進入新大陸。要成為一個傳教士需要有信心，有強健的體魄和極大的熱情，他們經常被要求投身於具有截然不同文化和信仰的人們的曠野中，許多傳教士在這些環境中感到了絕望，折磨和死亡。因為許多當地人拒絕他們的傳教，或者將他們視為疾病和戰爭的帶原者。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Missionary.png" alt=""
              /></gallery>
              <p><em>一群傳教士</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Missionary1.jpg" alt=""
              /></gallery>
              <p><em>傳教士美術畫</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                傳教士
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/MissionaryIcon.png"
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
              <nuxt-link to="/units/Monk">僧侶</nuxt-link>、<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >、 醫護人員
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
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
              <img class="gg" src="~assets/monastery.png" alt="" /><nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">51秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">100</td>
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
            <td class="unit4">30</td>
          </tr>
          <tr>
            <td class="unit3">招降後恢復時間</td>
            <td class="unit4">62秒</td>
          </tr>
          <tr>
            <td class="unit3">招降範圍</td>
            <td class="unit4">
              7 vs 一般單位<br />
              0 vs
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              >、<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
              >與<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit4">治療範圍</td>
            <td class="unit4">4</td>
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
            <td class="unit3">防禦類別</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Monk">僧侶</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.1</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">9</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
