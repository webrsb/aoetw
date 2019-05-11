<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>貴族鐵騎</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>貴族鐵騎</b>是<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
            >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。貴族鐵騎是擁有極高<nuxt-link to="/armor">近防</nuxt-link
            >裝甲而且<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
            >高的重裝<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >。貴族鐵騎可以在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為<nuxt-link to="/units/Boyar">精銳貴族鐵騎</nuxt-link>。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              貴族鐵騎擁有遊戲中<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵類</nuxt-link
              >最強大的近防裝甲，不過<nuxt-link to="/armor">遠防</nuxt-link
              >和<nuxt-link to="/elements/Hit_points">血量</nuxt-link
              >相對的比<nuxt-link to="/units/Paladin">遊俠</nuxt-link
              >(聖<nuxt-link to="/units/Knight">騎士</nuxt-link
              >)還來的低，使<nuxt-link to="/units/Archer_Units">遠程</nuxt-link
              >作戰單位容易對它們造成更多傷害。
            </li>
            <li>
              貴族鐵騎在遊戲設定上是為了彌補沒有遊俠的<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >但跟遊俠有所區別。
            </li>
            <li>
              <nuxt-link to="/units/Monk">僧侶</nuxt-link
              >對貴族鐵騎一定的破壞力，因斯拉夫沒有<nuxt-link to="/techs/Heresy"
                >異端邪說</nuxt-link
              >和<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link
              >，這也間接的說明了<nuxt-link to="/civs/Slavs">斯拉夫人</nuxt-link
              >蠻懼怕<nuxt-link to="/units/Monk">僧侶</nuxt-link
              ><nuxt-link to="/civs">文明</nuxt-link>。
            </li>
            <li>
              貴族鐵騎雖然是特殊單位卻沒特殊裝甲，裝甲分類是屬於<nuxt-link
                to="/armor/Armor_Class_Cavalry"
                >騎兵裝甲</nuxt-link
              >，因此<nuxt-link to="/armor/Armor_Class_Camel">駱駝系</nuxt-link
              >或<nuxt-link to="/armor/Armor_Class_Spearman">槍兵類</nuxt-link
              >對貴族鐵騎有一定的破壞力。(代表近防雖高跟<nuxt-link
                to="/units/Spearman"
                >槍兵</nuxt-link
              >或者駱駝對打時高近防優勢沒很明顯)。
            </li>
            <li>
              貴族鐵騎因為需要<nuxt-link to="/building/Castle">城堡</nuxt-link
              >才能量產，因此得要配合著其他單位。
            </li>
            <li>
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >時貴族鐵騎比同時代其他騎士還來的強大，但因為需要城堡且昂貴因此很難量產但可以配合僧侶達到續戰力。
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
              >、大部分近戰單位。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>、<nuxt-link
                to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >、<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >、<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>、<nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>、<nuxt-link
                to="/units/War_Elephant"
                >戰象</nuxt-link
              >、<nuxt-link to="/units/Samurai">日本武士</nuxt-link
              >、防禦建築、<nuxt-link to="/units/Archer_Units"
                >弓兵單位</nuxt-link
              >
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
                src="~assets/Forging.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Ironcasting.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/Blastfurnace.jpg"
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
                src="~assets/Scalebardingarmor.jpg"
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
                src="~assets/Platebardingarmor.jpg"
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
                src="~assets/Husbandry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>(+10%)
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
            </td>
          </tr>
        </table>

        <h3>剋貴族鐵騎的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對貴族鐵騎的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+32攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+22攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+18攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyCamelIcon.jpg"
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
                      src="~assets/SpearmanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                  </li>
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
                  <li>
                    <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
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
                      src="~assets/CamelIcon.jpg"
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
                      src="~assets/EliteEagleWarriorIcon.jpg"
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
                      src="~assets/EagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
            以下技術可讓以下單位對貴族鐵騎有額外攻擊力
            <div class="n1">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
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
                    src="~assets/MilitiaIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Militia">民兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/ManAtArmsIcon.jpg"
                    width="22"
                    alt=""
                  /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/LongswordsManIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/2HandedswordsmanIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Two-Handed_Swordsman"
                    >雙手劍兵</nuxt-link
                  >→
                  <img
                    class="gg"
                    src="~assets/ChampionIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/SpearmanIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/PikemanIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                </li>
                <li>
                  <img class="gg" src="~assets/VBRSK.jpg" alt="" /><nuxt-link
                    to="/units/Berserk"
                    >狂戰士</nuxt-link
                  >→ <img class="gg" src="~assets/VBRSK.jpg" alt="" /><nuxt-link
                    to="/units/Berserk"
                    >精銳狂戰士</nuxt-link
                  >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/CondottieroNewIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                  >(如果和<nuxt-link to="/civs/Italians">義大利</nuxt-link
                  >同盟的話)
                </li>
              </ul>
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
              >能夠提高貴族鐵騎的生產速度
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>：<nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >與<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link
              >研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：貴族鐵騎更不容易被<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>貴族鐵騎移動速度為1.35。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>4.8版後貴族鐵騎移動速度增加為1.4。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              貴族鐵騎是用<nuxt-link to="/units/hero">英雄</nuxt-link
              ><nuxt-link to="/units/hero/Joan_of_Arc_Champion"
                >聖女貞德</nuxt-link
              >的模組修改的。
            </li>
            <li>
              貴族鐵騎在遊戲稱有馬的<nuxt-link to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >。
            </li>
            <li>少數沒有任何加成的單位(因為已經夠強了)。</li>
            <li>
              貴族鐵騎揮舞著一個叫做<a
                href="http://tinyurl.com/yayhsj93"
                target="_blank"
                >bardiche</a
              >的武器，這武器使用於15世紀的俄羅斯。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          波<nuxt-link to="/units/hero/Jarl">雅爾</nuxt-link
          >英文寫作boyar或bolyar,是<nuxt-link to="/techs/age/Feudal_Age"
            >封建時代</nuxt-link
          >保加利亞帝國、莫斯科大公國、基輔羅斯、
          瓦拉幾亞和摩爾多瓦的一個僅次於大公的貴族頭銜。由10-17世紀，在保加利亞、俄國和羅馬尼亞演變為表示僅次於沙皇的親王王子，加在姓氏前面是「采邑貴族」，在芬蘭寫作
          Pajari 以顯示和「食邑貴族」的區別。
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/AOF36_Boyar.jpg" alt=""
              /></gallery>
              <p>
                <em
                  >3.6版《<nuxt-link to="/games/aof"
                    >世紀帝國II：失落的帝國</nuxt-link
                  >》的貴族鐵騎。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/AOE2HDTF_Boyars_Ingame.jpg"
                  alt=""
              /></gallery>
              <p><em>3.5版前的貴族鐵騎。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/AOF22_Boyar_Joan.jpg" alt=""
              /></gallery>
              <p>
                <em
                  >《<nuxt-link to="/games/aoc"
                    >世紀帝國II：征服者入侵</nuxt-link
                  >》時的聖女貞德(中間)其實是用貴族鐵騎的模組。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Cataphract1.jpg" alt=""
              /></gallery>
              <p>
                <em
                  >在<nuxt-link to="/games/aok">帝王世紀</nuxt-link
                  >測試服的<nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
                  >是用貴族鐵騎的模組。</em
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
              <div class="unititle" style="color: #fff">貴族鐵騎</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/New_Boyar.png" width="45" alt="" />
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
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castleicon.png"
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
            <td class="unit4">50</td>
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
            <td class="unit4">1.93</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">4/6(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">1/2(精銳)</td>
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
              <img class="gg" src="~assets/New_Boyar.png" alt="" />精銳貴族鐵騎
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                alt=""
              />1000食物600黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">60秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由熊協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的貴族鐵騎
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a href="http://tinyurl.com/ybpqjkuk" target="_blank"
                    >波雅爾</a
                  ></b
                ></i
              >
            </div>
          </div>
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
