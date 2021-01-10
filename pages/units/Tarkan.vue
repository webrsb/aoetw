<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>答剌罕騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>答剌罕騎兵</b>是<nuxt-link to="/civs/Huns">匈人</nuxt-link
            >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練，當研發<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            ><nuxt-link to="/techs/Marauders">掠奪者</nuxt-link
            >後則可以在<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >中生產。在世紀帝國II中翻成「韃靼騎兵」，是善於攻擊<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >的近戰<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >。答剌罕騎兵可在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為精銳答剌罕騎兵
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              在戰鬥中答剌罕騎兵被歸類為中等<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >，答剌罕騎兵的專長是摧毀建築物和打擊<nuxt-link
                to="/units/Archer_Units"
                >遠距離單位</nuxt-link
              >。答剌罕騎兵的高<nuxt-link to="/armor">遠程護甲</nuxt-link
              >和<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
              >可有效對付遠距離單位、<nuxt-link to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >，和建築物。
            </li>
            <li>
              答剌罕騎兵非常適合打帶跑戰術。他們能輕易摧毀對方的建築物而且有能力處理前來的<nuxt-link
                to="/units/Archer_Units"
                >弓箭手</nuxt-link
              >。答剌罕騎兵同時作為防禦單位能不費吹灰之力處理來犯的<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >。
            </li>
            <li>
              答剌罕騎兵不善於和對方部隊接戰，尤其是像<nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >、<nuxt-link to="/units/Paladin">遊俠</nuxt-link>、<nuxt-link
                to="/units/Jaguar_Warrior"
                >豹勇士</nuxt-link
              >等重型單位。而他們緩慢的攻擊動作（揮動火把）也讓他們在攻速上大大不如其他單位。由於<nuxt-link
                to="/civs/Huns"
                >匈人</nuxt-link
              >有<nuxt-link to="/units/Paladin">遊俠</nuxt-link
              >，所以最好以<nuxt-link to="/units/Paladin">遊俠</nuxt-link
              >當作戰場主力。而答剌罕騎兵則搭配<nuxt-link to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >使用才能發揮最大效益。
            </li>
            <li>
              答剌罕騎兵現在研發特殊科技<nuxt-link to="/techs/Marauders"
                >掠奪者</nuxt-link
              >後則可以在<nuxt-link to="/building/Stable">馬廄</nuxt-link
              >中生產，實用度大為提升。
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
                to="/units/Siege_Weapons"
                >攻城器單位</nuxt-link
              >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、<nuxt-link to="/building">建築物</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >、重裝<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >、<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >、<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >、<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td colspan="2" style="text-align: center;">
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
              /><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>(+20) <br />
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
          <tr>
            <td class="tta1" style="width:10%">其他</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Marauders">掠奪者</nuxt-link>:<nuxt-link
                to="/building/Stable"
                >馬廄</nuxt-link
              >可生產答剌罕騎兵。
            </td>
          </tr>
        </table>

        <h3>剋答剌罕騎兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對答剌罕騎兵的額外傷害，按照殺傷力排列。
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
            以下科技可讓以下單位對答剌罕騎兵有額外攻擊力
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
                <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                  to="/techs/Kasbah"
                  >聚居堡壘</nuxt-link
                >能夠加速<nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link
                >、<nuxt-link to="/techs/Marauders">掠奪者</nuxt-link
                >的研究時間，以及在城堡裡訓練答剌罕騎兵的速度(都快25%)。
              </li>
              <li>
                <nuxt-link to="/civs/Huns">匈人</nuxt-link>：在<nuxt-link
                  to="/building/Stable"
                  >馬廄</nuxt-link
                >裡訓練的答剌罕騎兵訓練時間快20%，<nuxt-link
                  to="/techs/Bloodlines"
                  >品種</nuxt-link
                >與<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
                >研發快20%。
              </li>
              <li>
                <nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >：答剌罕騎兵對<nuxt-link to="/units/Monk">僧侶</nuxt-link
                >抵抗力更強。
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
              <li>答剌罕騎兵(非精銳)有90HP和7的攻擊。</li>
              <li>
                答剌罕騎兵有2的<nuxt-link to="/armor">遠防</nuxt-link
                >，精銳則是3。
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
            </h3>
            <ul>
              <li>答剌罕騎兵(非精銳)有100HP和8的攻擊。</li>
              <li>
                新增<nuxt-link to="/techs">科技</nuxt-link
                ><nuxt-link to="/techs/Marauders">掠奪者</nuxt-link
                >，需要500<nuxt-link to="/resource/Food">食物</nuxt-link
                >200<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
            </h3>
            <ul>
              <li>
                <nuxt-link to="/techs/Marauders">掠奪者</nuxt-link
                >現在花費300<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >與200黃金。
              </li>
              <li>4.8版本後答剌罕騎兵的遠防升級到3，精銳則是4。</li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link
                >2.13，是全遊戲中攻速最慢的近戰騎兵。
              </li>
            </ul>
          </div>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            "馬鐙的使用讓匈人在3世紀揮軍西向時比其他軍隊更具有技術優勢，馬鐙可以有效穩定<nuxt-link
              to="/civs/Huns"
              >匈人</nuxt-link
            >騎兵的重心並用長矛沖向目標，歷史上除了少數例外情況（特別是亞歷山大的騎兵），很少有騎兵能如此擅用長矛。數千名野蠻騎兵的出現並且如此有效地使用長矛在戰爭結束時迫使軍隊發展產生戲劇性的變化，羅馬軍團不得不更多地專注在騎兵上以支援他們的軍團，並最終僱傭野蠻人騎兵作為僱傭兵，匈牙利<nuxt-link
              to="/units/hero"
              >英雄</nuxt-link
            >和後來的<nuxt-link to="/civs/Mongols">蒙古</nuxt-link
            >軍隊被稱為答剌罕騎兵。"
          </p>
          <p>
            最好的匈人<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >是精銳答剌罕騎兵。他們騎術了得，攻擊出奇不易，並在戰況不好時可以迅速撤出精銳答剌罕騎兵的機動性使他們成為毀滅性的突襲者，但他們的輕騎兵身份使他們在近距離戰鬥中對重裝甲的騎兵處於劣勢。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Tarkan.png" alt=""
              /></gallery>
              <p><em>一群答剌罕騎兵。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/A_Tarkan.png" alt=""
              /></gallery>
              <p><em>答剌罕騎兵模組。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                答剌罕騎兵
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/TarkanIcon.png" class="img-fluid" alt="" />
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/civs/Huns">匈人</nuxt-link></td>
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
              /><nuxt-link to="/building/Castle">城堡</nuxt-link><br />
              <img class="gg" src="~assets/Stable-logo.jpg" alt="" /><nuxt-link
                to="/building/Stable"
                >馬廄</nuxt-link
              >(<nuxt-link to="/techs/Marauders">掠奪者</nuxt-link>研發後)
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">14秒</td>
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
            <td class="unit4">60</td>
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
            <td class="unit4">100/150(精銳)。</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">8/11(精銳)(近戰)。</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +12對<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >
              <br />+10對<nuxt-link to="/armor/Armor_Class_Castle"
                >城堡</nuxt-link
              >
              <br />+8/+10(精銳)對<nuxt-link to="/armor/Armor_Class_Building"
                >建築類</nuxt-link
              >
              <br />+8/+10(精銳)對<nuxt-link
                to="/armor/Armor_Class_wall_and_gate"
                >城牆和城門</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">攻速</td>
            <td class="unit4">2.13</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">3/4(精銳)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">裝甲類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
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
            <td class="unit4">5/7(精銳)。</td>
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
                src="~assets/TarkanIcon.png"
                alt=""
              />精銳答剌罕騎兵
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                alt=""
              />1000食物500黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">45秒</td>
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
