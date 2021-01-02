<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>索洛托勇士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>索洛托勇士</b>是《<nuxt-link to="/games/de"
              >世紀帝國II：決定版</nuxt-link
            >》中，於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >可以在被<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >的<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >訓練的南美<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >，具有與<nuxt-link to="/units/Knight">騎士</nuxt-link
            >相同的基本數據。
          </p>
          <p>
            索洛托勇士出現在蒙提祖馬戰役第五關"沸騰之湖"，在決定版前是<nuxt-link
              to="/units/Tarkan"
              >精銳答剌罕騎兵</nuxt-link
            >
          </p>
          <p>
            僅適用於<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
            >和<nuxt-link to="/civs/Incas">印加</nuxt-link
            >，因為他們可以使用<nuxt-link to="/techs/Redemption"
              >神聖思想</nuxt-link
            >來招降敵方的建築物。而<nuxt-link to="/civs/Mayans">瑪雅</nuxt-link
            >則可以從編輯器中放置的馬廄來訓練索洛托勇士。
          </p>
          <p>
            <b><i class="fas fa-check" style="color: green;"></i>可訓練文明：</b
            ><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
              to="/civs/Incas"
              >印加</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            擁有和<nuxt-link to="/units/Knight">騎士</nuxt-link
            >一樣的基本數據和成本，因此有「原裝騎士」之稱，能憑藉其高<nuxt-link
              to="/elements/Attack"
              >攻擊力</nuxt-link
            >，<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
            >和<nuxt-link to="/armor">防禦力</nuxt-link
            >進行攻擊和迂回，也做為遠程單位和攻城單位的肉盾。
          </p>
          <p>
            與騎士系一様，索洛托勇士難以抵抗<nuxt-link to="/units/Halberdier"
              >戟兵</nuxt-link
            >和<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
            >，也容易受到<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >的<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >，而且會被大規模的<nuxt-link to="/units/Archer">弓兵</nuxt-link
            >壓制。
          </p>
          <p>
            與<nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
            >不同，索洛托勇士不能像騎士升級，也缺乏兵工廠科技升級、<nuxt-link
              to="/techs/Bloodlines"
              >品種</nuxt-link
            >和<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
            >等科技，使索洛托勇士在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >晚期和<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >比騎士系的表現較差。
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>、<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >、 <nuxt-link to="/units/Villager">村民</nuxt-link>、<nuxt-link
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
              >、<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >、<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link>、<nuxt-link
                to="/units/Monk"
                >僧侶</nuxt-link
              >和<nuxt-link to="/units/War_Elephant">戰象</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
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
              /><nuxt-link to="/techs/Iron_Casting">鑄鐵技術</nuxt-link>(+1)
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
        </table>

        <h3>剋索洛托勇士的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對索洛托勇士的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Flaming_camel_icon.png"
                      alt=""
                    /><nuxt-link to="/units/Flaming_Camel">火焰駱駝</nuxt-link>
                  </li>
                </ul>
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
                    /><nuxt-link to="/units/Heavy_Camel_Rider">重裝駱駝騎兵</nuxt-link
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
          以下科技可讓以下單位對索洛托勇士有額外攻擊力
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
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >:兵工廠科技研發速度快50%
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
              >:研發忠誠信仰和異端邪說的速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >:索洛托勇士更能抵抗招降。
            </li>
          </ul>
        </div>
        <h3>團隊/文明加成影響</h3>
        <div class="hrn1"></div>
        <div class="n1">
          在正常情況下(<nuxt-link to="/building/Stable">馬廄</nuxt-link
          >是用<nuxt-link to="/units/Monk">僧侶</nuxt-link
          ><nuxt-link to="/elements/Conversion">招降</nuxt-link
          >的，而不是通過編輯器放置，或是有馬廄開局的超級隨機遊戲)，會有以下科技/團隊加分影響此單位：
          <ul>
            <li>
              <nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link
              >：對索洛托勇士無效。但是如果對手研發了徵兵技術，再將馬廄招降的話，索洛托勇士的訓練速度就會快33%。
            </li>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >的文明加成：雖然有軍事單位(騎士不算)訓練快17.6%的文明加成，但索洛托勇士除外。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >的團隊加分：索洛托勇士視野不會+2。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link
              >的團隊加分不會讓索洛托勇士生產效率快20%。但是招降對象是匈奴或牠們同盟的馬廄的話，索洛托勇士的訓練速度仍然快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >的團隊加分：索洛托勇士對於弓箭手的傷害不會+2。
            </li>
          </ul>
          如果馬廄是通過編輯器放置，或是有馬廄開局的超級隨機遊戲，會有以下一些科技/團隊加分影響此單位：
          <ul>
            <li>
              <nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link
              >：索洛托勇士訓練速度快33%。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link
              >的團隊加分：索洛托勇士生產效率快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >的團隊加分：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link
              >能夠加速徵兵技術的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <div class="n1"></div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              Xolotl是<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >神話中的雷電與死亡的狗神，是羽蛇神的雙胞胎兄弟。
            </li>
            <li>
              索洛托勇士可能是受到《世紀帝國III：群酋爭霸》啟發而來的，特別是蘇族人明近戰騎兵犬戰士（šuŋkawakaŋ）。
            </li>
            <li>
              歷史上，有時美洲原住民會藉用外來詞來表示“騎馬的人”，例如西班牙語cauallero代表“騎馬的人>騎士>紳士”。
            </li>
            <li>
              許多美洲原住民學會了騎馬就用它們來與歐洲人作戰。最早在歷史擁有騎兵隊的記錄是<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >皇帝曼科·印卡·尤潘基（Manco Inca
              Yupanqui），他是一位了解歐洲習俗和科技的皇帝，曾打擊敗3000名擁有火器、馬匹和囚犯的<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >軍隊。
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
                  src="~assets/In-game_Xolotl_Warrior.jpg"
                  alt=""
              /></gallery>
              <p>
                <em>一群索洛托勇士。</em>
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Xolotl.jpg" alt=""
              /></gallery>
              <p>
                <em>索洛托勇士和一般騎士。</em>
              </p>
            </div>

            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Manco_Inca.jpg" alt=""
              /></gallery>
              <p>
                <em>印加騎兵。</em>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">索洛托勇士</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Xolotlicon.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/Aztecs">阿茲特克</nuxt-link><br /><nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >
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
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">10(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">1.8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
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
            <td class="unit4">1.35</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">4</td>
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
