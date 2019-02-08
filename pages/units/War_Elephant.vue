<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>戰象</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            戰象是<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的 <nuxt-link to="/building/Castle">城堡</nuxt-link>中訓練。
          </p>
          <p>
            戰象是一個緩慢但是破壞力強大的單位，兵種分類上屬於騎兵，對<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >享有攻擊加成。且戰象能夠造成踐踏傷害(戰鬥時對周圍單位造成傷害)。
          </p>
          <p>
            同樣的成本下，戰象甚至可以戰勝<nuxt-link to="/units/Paladin"
              >遊俠</nuxt-link
            >。
          </p>
          <p>
            戰象可以在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為精銳戰象。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              戰象非常強悍，但是速度也很慢，遠程作戰單位容易對它們造成更多傷害。
              戰象在遊戲中的分類為騎兵，這使的它們對付<nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >系的時候會受到非常大的傷害，分別受到+30，+47，+60(按升級順序來說)。
            </li>
            <li>
              緩慢的速度使它們容易受到大群的<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >壓制。
            </li>
            <li>
              常規單位中的<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link
              >也能對分類為騎兵的戰象造成加成傷害(+9，+18)
            </li>
            <li>
              縱然遠程單位能夠輕易地遠離戰象，但是與其他部隊配合時，戰象是很好的肉盾。
            </li>
            <li>
              <nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link
              >雖然沒有<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >一樣的超高攻擊加成(+60)
            </li>
            ，但是仍有+28，+32的傷害，且他們能夠隔著牆傷害戰象。
            <li>
              <nuxt-link to="/units/Genoese_Crossbowman">熱那亞弩手</nuxt-link
              >對於戰象有加成傷害(+8，+12)，大量的熱那亞弩手將輕易地摧毀戰象。
            </li>
            <li>
              <nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link
              >對於騎兵有加成傷害(+9，+12)，且高移動速度使他們成為戰象的剋星。
            </li>
            <li>
              <nuxt-link to="/units/Scorpion">弩砲</nuxt-link
              >系對於戰象有攻擊加成(+6，升級後為+8)，且弩砲有穿透傷害，所以碰到大量的弩砲記得要迴避。
            </li>
            <li>
              <nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >系無視防禦且攻擊力極高，並且造成範圍傷害，碰到大量投石車請讓戰象散開。
            </li>
            <li>
              <nuxt-link to="/units/Monk">僧侶</nuxt-link
              >一直都是戰象的剋星，波斯無法研發<nuxt-link to="/techs/Heresy"
                >異端邪說</nuxt-link
              >，且大多數時間戰象集體行動，遭到敵方招降的戰象將對周圍部隊造成踐踏傷害，這就是為甚麼少量的僧侶便能摧毀大量的戰象部隊。
            </li>
            <li>
              由於造成踐踏傷害，進入白刃戰時，請盡量讓戰象被敵方單位包圍形成混戰。
              因為超高的生命值與傷害，使的戰象在面對除了上述少數單位外，大部分都能有很好的效果。但在實戰中，遇到成群的戰象，只有僧侶能有效阻止而已。
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
              <nuxt-link to="/building">建築物</nuxt-link>，<nuxt-link
                to="/units/Skirmisher"
                >矛兵</nuxt-link
              >，大部分近戰單位，
              <nuxt-link to="/units/Bombard_Cannon">火炮</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Spearman">槍兵</nuxt-link>系，<nuxt-link
                to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >，<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>，
              <nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>，<nuxt-link
                to="/units/Monk"
                >僧侶</nuxt-link
              >，<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >
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
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Mahouts">象伕</nuxt-link>(+30%，<nuxt-link
                to="/civs/Persians"
                >波斯</nuxt-link
              >
              限定) <br />
              <img
                class="gg"
                src="~assets/Husbandry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">抵抗招降</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Faith.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>(+33%)
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

        <h3>剋戰象的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對戰象的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+47攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+32攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Kamayuk_Icon.jpg"
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
                      src="~assets/SpearmanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+28攻擊</strong></div>
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
                    />
                    <nuxt-link to="/units/Imperial_Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >(帝王駱駝騎兵是<nuxt-link to="/civs/Indians"
                      >印度</nuxt-link
                    >限定)
                  </li>
                </ul>
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
                    />
                    <nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
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
                    /><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link
                    >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
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
                      src="~assets/HeavyScorpionIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Scorpion">重型弩炮</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ScorpionIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Scorpion">弩炮</nuxt-link>
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
              <div class="col-md-12">
                以下技術可讓以下單位對戰象有額外攻擊力
                <div class="n1">
                  <img
                    class="gg"
                    src="~assets/CastleAgeUnique.png"
                    width="22"
                    alt=""
                  />
                  <nuxt-link to="/techs/Chieftains">酋長</nuxt-link>
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
                      />
                      <nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                      <img
                        class="gg"
                        src="~assets/LongswordsManIcon.jpg"
                        alt=""
                      />
                      <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                      <img
                        class="gg"
                        src="~assets/2HandedswordsmanIcon.jpg"
                        alt=""
                      />
                      <nuxt-link to="/units/Two-Handed_Swordsman"
                        >雙手劍兵</nuxt-link
                      >→
                      <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
                      <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/SpearmanIcon.jpg"
                        alt=""
                      /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                      <img class="gg" src="~assets/PikemanIcon.jpg" alt="" />
                      <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/VBRSK.jpg"
                        alt=""
                      /><nuxt-link to="/units/Berserk">狂戰士</nuxt-link>→
                      <img class="gg" src="~assets/VBRSK.jpg" alt="" />
                      <nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link
                      >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                    </li>
                    <li>
                      <img
                        class="gg"
                        src="~assets/CondottieroNewIcon.jpg"
                        alt=""
                      />
                      <nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                      >(如果和<nuxt-link to="/civs/Italians">義大利</nuxt-link
                      >同盟的話)
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠提高戰象的生產速度還有加快
              <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >和<nuxt-link to="/techs/Mahouts">象伕</nuxt-link
              >的研究時間(+25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>：研發<nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >和<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link
              >的速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：戰象更不容易被招降。
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
            <li>只有精銳戰象可以有踐踏傷害。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>引進<nuxt-link to="/techs/Bloodlines">品種</nuxt-link>。</li>
            <li>引進<nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>戰象和精銳戰象都可以有踐踏傷害。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              升級完成的精銳戰象有620生命值，比一幢<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
              >的<nuxt-link to="/building/House">房屋</nuxt-link
              >擁有更多生命值。
            </li>
            <li>
              最高級的精銳戰象擁有24的攻擊力，是除了攻城武器與火藥單位外最高的。
            </li>
            <li>這頭大象聽得懂人話，不需要象夫！</li>
            <li>
              比上述更神奇，這頭大象還有信仰，還會改宗其他宗教，聽得懂僧侶的教誨。
            </li>
            <li>
              歷史上的波斯帝國，在遊戲戰役的<nuxt-link
                to="/units/hero/Genghis_Khan"
                >成吉思汗</nuxt-link
              >，<nuxt-link to="/batt/Barbarossaa">巴巴羅薩</nuxt-link>，以及
              <nuxt-link to="/units/hero/Saladin">沙拉丁</nuxt-link
              >所處的時代，皆沒有使用戰象部隊。(然而遊戲裡有，請睜隻眼閉隻眼)
            </li>
            <li>
              世紀帝國II內建的歷史頁面介紹到:波斯人從印度人手上取得戰象，然而遊戲內的3D模組似乎是隻非洲象(它們都有一對超大的耳朵！)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            中東最後一個僱用戰象的文明是波斯，他們從印度得到了大象。戰象是對敵軍的有力部隊，特別是對沒有碰過他們的軍隊。他們非常難以殺死，但仍難以控制。
            如果他們能夠被引導到敵方陣型中，敵軍幾乎總是陷於混亂狀態甚至被踐踏而死。
          </p>
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
              <div class="unititle" style="color: #fff">戰象</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/WarElephantIcon.jpg" width="45" alt="" />
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
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>
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
              <img class="gg" src="~assets/Castle-logo.jpg" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">31秒</td>
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
            <td class="unit3">食物</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">75</td>
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
            <td class="unit4">450/600(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">15/20(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/building">建築物</nuxt-link>+7/+10(精銳)
              <br />對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石造防禦建築</nuxt-link
              >+7/+10(精銳)
            </td>
          </tr>
          <tr>
            <td class="unit3">濺涉傷害範圍</td>
            <td class="unit4">0.5</td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">2/3(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">裝甲類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_War_Elephant">戰象</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_Cavalry_Archer">騎兵</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.6</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">4/5(精銳)</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">單位演變</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/WarElephantIcon.jpg"
                alt=""
              />精銳戰象
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                alt=""
              />1600食物1200黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">75秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" src="~assets/Warelephant.png" alt=""
            /></gallery>
            <p><em>一群戰象</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                src="~assets/Screenshot_2017-06-28_at_1.14.06_AM.png"
                alt=""
            /></gallery>
            <p><em>一隻精銳戰象可以輕易地擊敗100個村民</em></p>
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
