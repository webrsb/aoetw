<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>重裝騎士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>重裝騎士</b>是<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >兵種，可訓練於<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >，在帝王時代最優勢的兵種之一，對於<nuxt-link to="/units/Monk"
              >僧侶</nuxt-link
            >、<nuxt-link to="/units/Camel_Rider">駱駝兵種</nuxt-link
            >、<nuxt-link to="/units/Spearman">長槍兵</nuxt-link>種較劣勢。
          </p>
        </div>
        <h3>文明可訓練與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <b
                  ><i class="fas fa-check" style="color: green;"></i>可訓練：</b
                >
              </h4>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈人</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>、
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Viking">維京</nuxt-link>、
              <nuxt-link to="/civs/Burgundians">勃根地</nuxt-link>、<nuxt-link
                to="/civs/Sicilians"
                >西西里</nuxt-link
              >。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <b
                  ><i class="fas fa-times" style="color: #d9534f;"></i
                  >不可訓練：</b
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Indians">印度</nuxt-link>、<nuxt-link
                to="/civs/Mayans"
                >馬雅</nuxt-link
              >、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            重裝騎士在帝王時代比<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >擁有更多的<nuxt-link to="/elements/Hit_points">血量</nuxt-link
            >與<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
            >。在團戰時，可以做為主要的坦與輸出。
          </p>
          <p>
            西方霸主DLC的新增文明中，<nuxt-link to="/civs/Burgundians"
              >勃根地</nuxt-link
            >有可以在城堡時代升級為重裝騎士的優勢且研發馬廄科技花費-50%，和同時代科技點滿的城堡騎士相比，除了有額外多2攻擊力的優勢以外，帝王初期也能立刻以更便宜的成本升級成遊俠；相對地為了平衡使勃根地缺少品種科技。
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
              >、<nuxt-link to="/units/Villager">村民</nuxt-link>、<nuxt-link
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
              >、<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>和<nuxt-link
                to="/units/War_Elephant"
                >戰象</nuxt-link
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
              <br />
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Farimba">驃悍精神</nuxt-link
              >：馬廄單位攻擊+5。<nuxt-link to="/civs/Malians">馬利</nuxt-link
              >限定<br />
              <img
                src="~assets/unique_tech_imperial.png"
                class="gg"
                alt=""
              /><nuxt-link to="/techs/Manipur_Cavalry">曼尼普爾騎兵</nuxt-link
              >:重裝騎士對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >和<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+3。<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>限定
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
            <td class="tta1" style="width:10%">攻擊速度</td>
            <td class="tta4">
              <img class="gg" src="~assets/unique_tech.png" alt="" /><nuxt-link
                to="/techs/Stirrups"
                >馬鐙</nuxt-link
              >：攻擊速度快25%，(<nuxt-link to="/civs/Bulgarians"
                >保加利亞</nuxt-link
              >限定)
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
              <br />
              <img class="gg" src="~assets/unique_tech.png" alt="" /><nuxt-link
                to="/techs/Chivalry"
                >騎士精神</nuxt-link
              >：馬廄工作速率快40%。<nuxt-link to="/civs/Franks"
                >法蘭克</nuxt-link
              >限定
            </td>
          </tr>
        </table>

        <h3>剋重裝騎士的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對重裝騎士的額外傷害，按照殺傷力排列。
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
                      src="~assets/Kamayukicon.png"
                      alt=""
                    /><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
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
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Kamayukicon.png"
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

                <div style="margin:12px 0px;"><strong>+0攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/MilitiaIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Militia">民兵</nuxt-link>→
                    <img
                      class="gg"
                      style="margin: 2px;"
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
                      src="~assets/CondottieroIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link
                    >和同盟限定)
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
                    >(<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定)
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
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior"
                      >精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>科技</h3>
          <div class="hrn1"></div>
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
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >訓練成本便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：只要在一個塞爾特單位的<nuxt-link to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >下，羊群不會被牽走
            </li>

            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對重裝騎士有利的<nuxt-link to="/techs">科技</nuxt-link
              >研發在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代各便宜20%。
            </li>
            <li>
              庫曼:移動速度在城堡/帝王時代增加15%。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >：重裝騎士<nuxt-link to="/elements/Hit_points">血量</nuxt-link
              >多20%，研發<nuxt-link to="/techs/Chivalry">騎士精神</nuxt-link
              >後，<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >的研發速度和升級遊俠的時間都加快40%
            </li>
            <li>
              立陶宛:每個放在修道院的遺跡都會給重裝騎士+1攻擊(最多+4)。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：免費<nuxt-link
                to="/techs/Forging"
                >鍛造技術</nuxt-link
              >、<nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link
              >和<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>科技
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：重裝騎士<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >成本便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >升級科技免黃金
            </li>
            <li>
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link
              >:重裝騎士由高往低攻擊的傷害增加50%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：馬廄單位於帝王時代近戰防禦+1(城堡帝王各+1共+2)。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Burgundians">勃根地</nuxt-link
              >：馬廄科技便宜50，城堡時代即可研發重裝騎士。
            </li>
            <li>
              <nuxt-link to="/civs/Sicilians">西西里</nuxt-link
              >：陸上單位遭受有額外傷害加成的單位攻擊時，其額外傷害-50%。
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
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：重裝騎士+2視野。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈人</nuxt-link
              >：重裝騎士生產效率和升級快20%，<nuxt-link to="/techs/Bloodlines"
                >品種</nuxt-link
              >與<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：重裝騎士對<nuxt-link to="/armor/Armor_Class_Archer"
                >射手類</nuxt-link
              >+2攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
              >:研發忠誠信仰和異端邪說的速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >：兵工廠研發科技的速度快50%。
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
            <li><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>引進。</li>
            <li><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>引進。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：引進<nuxt-link
                to="/techs/Chivalry"
                >騎士精神</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              最初曼尼普爾騎兵給重裝騎士對一般建築額外+6攻擊；5.3改版後攻擊加成延伸為對一般和標準建築都+6攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link
              >：原本可以額外多5攻擊力，更新檔34055後下修為最多額外4攻。
            </li>
            <li>
              (36909更新)
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >：特殊科技馬蹬影響所有騎兵單位，但失去遊俠。
            </li>
            <li>
              (36909更新)
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：馬廄單位於帝王時代近戰防禦+1(城堡帝王各+1共+2)。
            </li>
            <li>
              (44725更新) 引入西方霸主DLC的新增文明<nuxt-link
                to="/civs/Burgundians"
                >勃根地</nuxt-link
              >和<nuxt-link to="/civs/Sicilians">西西里</nuxt-link
              >及其文明特性。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Knightline.png" alt=""
              /></gallery>
              <p>
                <em><nuxt-link to="/units/Knight">騎士</nuxt-link>系。</em>
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/cavaliers.png" alt=""
              /></gallery>
              <p><em>一群重裝騎士。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">重裝騎士</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CavalierIcon.png" alt="" />
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
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/imperial_age.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              ><br />
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >（<nuxt-link to="/civs/Burgundians">勃根地</nuxt-link>限定）
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
            <td class="unit4">120</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">12</td>
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
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.35</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/KnightIcon.png" alt="" /><nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/PaladinIcon.png" alt="" /><nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img class="gg" src="~assets/paladin.png" alt="" />1300食物750黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">170秒</td>
          </tr>
        </table>
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
