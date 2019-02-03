<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>騎兵</h1>
        <div class="hrn1"></div>
        <div class="spw">
          <em
            ><img
              src="~assets/Attila_the_Hun.png"
              width="50px;"
              alt=""
              style="margin-right:20px;"
            />阿提拉：不要搞錯了！：此頁面和<nuxt-link to="/units/Cavalry_Units"
              >騎兵類單位</nuxt-link
            >與<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵防禦</nuxt-link
            >。不同喔！</em
          >
        </div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            騎兵是帝王時代兵種，可訓練於馬廄，在帝王時代最優勢的兵種之一，對於僧侶、駱駝兵種、長槍兵種較劣勢。
          </p>
        </div>
        <h3>文明可訓練與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-ok okc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >可訓練</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-remove noc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >不可訓練</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          騎兵在帝王時代比城堡時代擁有更多的血量與攻擊力。在團戰時，可以做為主要的坦與輸出。
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
              >、<nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link>、
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>、<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >、<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>、
              <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>、<nuxt-link
                to="/Genoese_units/Crossbowman"
                >熱那亞弩手</nuxt-link
              >、<nuxt-link to="/Teutonic_units/Knight">條頓武士</nuxt-link>、
              <nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>、<nuxt-link
                to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>和<nuxt-link
                to="/War_unitsanimal/Elephant"
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
              /><nuxt-link to="/techs/Forging">鍛造</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Ironcasting.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Blastfurnace.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
              <br />
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Farimba"
                >驃悍精神</nuxt-link
              >：馬廄單位攻擊+5。<nuxt-link to="/civs/Malians">馬利</nuxt-link
              >限定
              <br />
              <img src="~assets/Unique-tech.jpg" class="gg" alt="" /><nuxt-link
                to="/techs/Manipur_Cavalry"
                >曼尼普爾騎兵</nuxt-link
              >:騎兵對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >和
              <nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+3。<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>限定
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
              >(+1/+1)
              <br />
              <img
                class="gg"
                src="~assets/Chainbardingarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Barding_Armor">騎兵鎖甲</nuxt-link
              >(+1/+1)
              <br />
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
            <td class="tta1" style="width:10%">招降抵抗</td>
            <td class="tta4">
              <img class="gg" src="~assets/Faith.jpg" alt="" /><nuxt-link
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
                src="~assets/Conscription.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)
              <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                alt=""
              /><nuxt-link to="/techs/Chivalry">騎士精神</nuxt-link
              >：馬廄工作速率快40%。<nuxt-link to="/civs/Franks"
                >法蘭克</nuxt-link
              >限定
            </td>
          </tr>
        </table>

        <h3>剋騎兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對騎兵的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
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
                    /><nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/Imperial_units/Camel"
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
                    />
                    <nuxt-link to="/units/Elite_Cannon_Galleon"
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
                    /><nuxt-link to="/Genoese_units/Crossbowman"
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
                    /><nuxt-link to="/Genoese_units/Crossbowman"
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
          </div>
          以下技術可讓以下單位對騎兵有額外攻擊力
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
                <img class="gg" src="~assets/LongswordsManIcon.jpg" alt="" />
                <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                <img class="gg" src="~assets/2HandedswordsmanIcon.jpg" alt="" />
                <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
                >→ <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
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
                <img class="gg" src="~assets/VBRSK.jpg" alt="" /><nuxt-link
                  to="/units/Berserk"
                  >狂戰士</nuxt-link
                >→ <img class="gg" src="~assets/VBRSK.jpg" alt="" />
                <nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link>(<nuxt-link
                  to="/civs/Vikings"
                  >維京</nuxt-link
                >限定)
              </li>
              <li>
                <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt="" />
                <nuxt-link to="/units/Condottiero">傭兵</nuxt-link
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
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：騎兵在帝王時代便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link
              >：只要在一個賽爾特單位的視野下，羊群不會被牽走
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對騎兵有利的科技研發在帝王時代各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >：騎兵血量多20%，研發<nuxt-link to="/techs/Chivalry"
                >騎士精神</nuxt-link
              >後，
              <nuxt-link to="/techs/Husbandry">畜牧技術</nuxt-link
              >的研發速度和升級<nuxt-link to="/units/Paladin">遊俠</nuxt-link
              >的時間都加快40%
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：免費<nuxt-link
                to="/techs/Forging"
                >鍛造</nuxt-link
              >、<nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>和
              <nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>科技
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：騎兵黃金成本便宜15%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：兵工廠升級科技免黃金
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：<nuxt-link
                to="/techs/Conscription"
                >徵兵制度</nuxt-link
              >免費。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：騎兵+2視野。
            </li>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link
              >：騎兵生產效率和升級快20%，<nuxt-link to="/techs/Bloodlines"
                >品種</nuxt-link
              >與
              <nuxt-link to="/techs/Husbandry">畜牧技術</nuxt-link>研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>：騎兵對<nuxt-link
                to="/armor/Armor_Class_Archer"
                >射手類</nuxt-link
              >+2攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：騎兵對僧侶抵抗力更強。
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
            <li><nuxt-link to="/techs/Bloodlines"></nuxt-link>血統引進。</li>
            <li><nuxt-link to="/techs/Heresy"></nuxt-link>異端邪說引進。</li>
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
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">騎兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CavalierIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
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
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
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
            <td class="unit4">1.83</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/KnightIcon.jpg" alt="" /><nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/PaladinIcon.jpg" alt="" /><nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Paladin-research.jpg"
                alt=""
              />1300食物750黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">170秒</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="col-md-12">
      <h3>圖庫</h3>
      <div class="hrn1"></div>
      <div class="n1">
        <div class="col-md-12">
          <div class="col-md-4">
            <nuxt-link to="/img/Knightline.png"
              ><img class="imgn hg" src="~assets/Knightline.png" alt=""
            /></nuxt-link>
            <p><em>騎士系。</em></p>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Cavalier.png"
              ><img class="imgn hg" src="~assets/Cavalier.png" alt=""
            /></nuxt-link>
            <p><em>一群騎兵。</em></p>
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
