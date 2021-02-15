<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>薩金特衛兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>薩金特衛兵</b>是<nuxt-link to="/civs/Sicilians">西西里</nuxt-link
            >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >的<nuxt-link to="/building/Donjon">城樓</nuxt-link>和<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >中訓練。薩金特衛兵是個可以建造城樓的單位。薩金特衛兵可以在<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為<nuxt-link to="/units/Shotel_Warrior"
              >精銳薩金特衛兵</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              薩金特衛兵是一個超級特殊的<nuxt-link to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >，他們能建造<nuxt-link to="/building/Donjon">城樓</nuxt-link
              >，並且可以在<nuxt-link to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >的城樓中訓練。封建時代的薩金特衛兵與<nuxt-link
                to="/units/Man-at-Arms"
                >裝甲步兵</nuxt-link
              >相比，他們擁有相同<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >，<nuxt-link to="/armor">近防</nuxt-link
              >和遠防比裝甲步兵高，但<nuxt-link to="/elements/Attack"
                >攻擊力</nuxt-link
              >和視野低。不過，薩金特衛兵成本更高，並且需要花費200<nuxt-link
                to="/resource/Stone"
                >石頭</nuxt-link
              >和75<nuxt-link to="/resource/Wood">木材</nuxt-link>建造城樓訓練。
            </li>
            <li>
              薩金特衛兵能建造城樓的能力衍生出類似<nuxt-link to="/ar/towerrush"
                >塔攻</nuxt-link
              >的打法-城樓攻，這打法的配置和策略大致與塔攻相似。另外薩金特衛兵建造城樓的時間和<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >一樣，因此村民在蓋完第一座城樓時就可以返回基地採集資源，而且城樓可以<nuxt-link
                to="/elements/Garrison"
                >駐守</nuxt-link
              >10個單位，可以配合<nuxt-link to="/units/Archer">弓兵</nuxt-link
              >增加城樓箭數，再通過城樓訓練薩金特衛兵繼續建造城樓。
            </li>
            <li>
              一旦到達<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >，薩金特衛兵會獲得+15血量（總計60），+3攻擊力（總計8），+2遠防和+1近防（總計3/3護甲），與<nuxt-link
                to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >相比，城堡時代的薩金特衛兵更能抵禦弓箭和近戰攻擊，加上西西里有減少額外攻擊的文明加成，使薩金特衛兵能應對不同類型的單位。城堡時代後，除非缺乏石頭建造城樓或城堡，薩金特衛兵基本上是首選步兵。另外，<nuxt-link
                to="/units/Militia"
                >民兵</nuxt-link
              >系仍然是對抗<nuxt-link to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >的更好選擇，在某些情況下還是有可能出動長劍兵。<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >後，精銳薩金特衛兵仍然比<nuxt-link to="/units/Champion"
                >劍兵勇士</nuxt-link
              >好。其裝甲是高遠防<nuxt-link to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >和高近防<nuxt-link to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >的融合中間體。
            </li>
            <li>
              西西里特殊科技<nuxt-link to="/techs/First_Crusade"
                >第一次十字軍東征</nuxt-link
              >可以使所有<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >（最多5座）一次性生產7個薩金特衛兵。即使已經達到人口上限仍然可以研發，可以在緊急情況下研發，從而快速增加軍隊數量突襲對手。
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
              <nuxt-link to="/units/Villager">村民</nuxt-link>、<nuxt-link
                to="/units/Skirmisher"
                >矛兵</nuxt-link
              >、<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>、<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >和<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Scorpion">弩砲</nuxt-link>、<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >、<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
              >、<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >、<nuxt-link to="/units/Slinger">投石手</nuxt-link>、<nuxt-link
                to="/units/Cataphract"
                >拜占庭聖騎兵</nuxt-link
              >、<nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
              >、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>、<nuxt-link
                to="/units/Leitis"
                >烈堤司</nuxt-link
              >、<nuxt-link to="/units/Paladin">遊俠</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <img src="~assets/forging.png" width="30" alt="" /><nuxt-link
                to="/techs/Forging"
                >鍛造技術</nuxt-link
              >(+1) <br />
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
              <br />
              <img
                class="gg"
                src="~assets/Arson.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Arson">縱火</nuxt-link
              >:步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/scale_mail_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/chain_mail_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鏈甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/plate_mail_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
              >(+1/+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/squires.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Squires">護衛技術</nuxt-link>(+10%)
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

        <h3>剋薩金特衛兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對薩金特衛兵的額外傷害，按造殺傷力排列。(由於西西里減免額外傷害33%的文明加成，實際上造成的傷害皆偏低)
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
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
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CataphractIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cataphract"
                      >精銳拜占庭聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
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
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior"
                      >精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HandCannoneerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Slingericon.png"
                      alt=""
                    /><nuxt-link to="/units/Slinger">投石手</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
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
                      src="~assets/CataphractIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Plumed_Archer"
                      >精銳羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        以下科技可讓以下單位對薩金特衛兵有額外攻擊力
        <div class="n1">
          <img
            class="gg"
            src="~assets/unique_tech_imperial.png"
            width="22"
            alt=""
          /><nuxt-link to="/techs/Logistica">後勤</nuxt-link>
          <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CataphractIcon.png"
                alt=""
              /><nuxt-link to="/units/Cataphract">拜占庭聖騎兵(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>文明加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Sicilians">西西里</nuxt-link
              >：對薩金特衛兵額外傷害-33%。
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
              >能夠提高薩金特衛兵的生產速度還有加速<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >和<nuxt-link to="/techs/First_Crusade"
                >第一次十字軍東征</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >提升薩金特衛兵護甲和怯薛攻擊的科技研發快80％。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發<nuxt-link
                to="/techs/Squires"
                >護衛技術</nuxt-link
              >、<nuxt-link to="/techs/Arson">縱火</nuxt-link>的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Berbers">立陶宛</nuxt-link>：<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >與<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：薩金特衛兵更不容易被招降。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/delw">西方霸主</nuxt-link></em>
          </h3>
          <ul>
            <li>一開始獨特科技「第一次十字軍東征」研發完後可在每個城鎮中心（最多五個）出現10名薩金特衛兵。</li>
            <li>45185更新：研發完「第一次十字軍東征」後，出現的薩金特衛兵數量減為7個。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            薩金特衛兵是唯一可以在封建時代訓練的特殊單位。
          </p>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                src="~assets/serjeants.png"
                alt=""
            /></gallery>
            <p><em>一群薩金特衛兵</em></p>
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
              <div class="unititle" style="color: #fff">薩金特衛兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Aoe2-icon-serjeant.png" class="img-fluid" alt="" />
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Sicilians">西西里</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
              >
                封建時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castle-logo.jpg" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              ><br /><img
                class="gg"
                src="~assets/Kreposticon.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Donjon">城樓</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">20秒(城堡時代-8)</td>
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
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">35</td>
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
            <td class="unit4">45(城堡時代+15)/75(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">5(城堡時代+3)/11(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
              >+2/+3(精銳) <br />對<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >+2/+3(精銳)
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1(城堡時代+2)/4(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">2(城堡時代+1)/4(精銳)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">3(+2)/5(+2)(精銳)</td>
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
                src="~assets/Aoe2-icon-serjeant.png"
                alt=""
              />精銳薩金特衛兵
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                alt=""
              />1100食物800黃金
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
