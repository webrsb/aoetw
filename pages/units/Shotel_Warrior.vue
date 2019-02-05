<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>彎刀勇士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            彎刀勇士是<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
            >的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。彎刀勇士是是個快速、高攻擊、生產速度快但脆弱的單位。彎刀勇士可以在<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為精銳彎刀勇士。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              彎刀勇士善長以高傷害和速度做突襲，並且由於生產速度快，可以僵屍流的方式做基地最後的防守。當<nuxt-link
                to="/techs/Royal_Heirs"
                >皇族血脈</nuxt-link
              >研發後，他們能比哥德步兵訓練得更快。
            </li>
            <li>
              帝王時代的彎刀勇士只需兩擊便可帶走一位村民。它們也能有效的摧毀建築物，但請盡量避開防禦建築。
            </li>
            <li>
              彎刀勇士即使研發精銳後也只給+1遠防和50HP，非常脆弱。任何有基本攻擊力的單位如:<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >、
              <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
              >、一群的弓箭手都能輕易地帶走彎刀勇士。
            </li>
            <li>
              彎刀勇士的高攻速對攻城單位有奇效，當玩家決定在敵對營地壓城堡時，彎刀勇士是非常好的防守城堡單位。因為它們可以很容易地摧毀敵人的<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >，從而保護城堡，因為衝撞車幾乎是城堡時代城堡唯一的威脅。
            </li>
            <li>
              若敵人的營地是用城堡和箭塔來保護，可以將彎刀勇士駐守在<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >中衝向對方陣營。並讓衝撞車充分升級，那麼彎刀勇士就可以幾乎無損地運載到敵方城鎮的中心，進而造成重大傷害。衝撞車也能作為額外的建築破壞者。
            </li>
            <li>
              一般來說，彎刀勇士是相當兩極化的單位，因為他們需要大量的黃金但相當脆弱。彎刀戰士多是用來作為突襲的，衣索比亞應該以彎刀勇士替代騎士做為城堡時代快攻的單位，因為在相同的成本下彎刀勇士的高機動性和攻擊力（研發縱火後）可讓他們比騎士對敵人村莊造成更大損傷。此外，衣索比亞人沒有
              <nuxt-link to="/techs/Bloodlines">血脈</nuxt-link>，<nuxt-link
                to="/techs/Plate_Barding_Armor"
                >騎兵板甲</nuxt-link
              >和<nuxt-link to="/units/Paladin">遊俠</nuxt-link
              >等騎兵的重要升級，使得衣索比亞的騎士遠遠不及於
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>人，<nuxt-link
                to="/civs/Huns"
                >匈奴</nuxt-link
              >人和<nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >人等其他文明的騎士。然而，考慮到衣索比亞經濟實力堅強，時代升級時免費的食物和黃金，免費的長槍兵和戟兵科技，還有更快的弓兵射速，讓它們能使用彎刀或是
              <nuxt-link to="/units/Knight">騎士</nuxt-link
              >快攻以外的快攻選擇(例如:封建/城堡小弓戰術)。
            </li>
            <li>
              彎刀勇士面對<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
              >與<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >毫不遜色，絕對是弓兵國家衣索比亞的一把利刃。
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
              >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>、
              <nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >和<nuxt-link to="/units/Monk">僧侶</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link
              >、<nuxt-link to="/units/Mangonel">投石車</nuxt-link>、
              <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >、重裝騎兵和<nuxt-link to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >。
            </td>
          </tr>
          <tr class="tta">
            <td class="" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <img src="~assets/Forging.jpg" width="30" alt="" /><nuxt-link
                to="/techs/Forging"
                >鍛造</nuxt-link
              >(+1)
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
              <img
                class="gg"
                src="~assets/Arson.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Arson">縱火</nuxt-link
              >:步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Scalemailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
              >(+1/+1)
              <br />
              <img
                class="gg"
                src="~assets/Chainmailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
              >(+1/+1)
              <br />
              <img
                class="gg"
                src="~assets/Platemailarmor.jpg"
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
                src="~assets/Squires.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Squires">護衛</nuxt-link>(+10%)
            </td>
          </tr>

          <tr>
            <td class="tta1" style="width:10%">視野</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Tracking.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Tracking">追縱技術</nuxt-link>(+2)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">招降抵抗</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Faith.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
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
                width="30"
                alt=""
              /><nuxt-link to="/techs/Royal_Heirs">皇族血脈</nuxt-link
              >(彎刀勇士生產速度加快2倍)
            </td>
          </tr>
        </table>

        <h3>剋彎刀勇士的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對彎刀勇士的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-6">
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
                      src="~assets/CataphractIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
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
                      src="~assets/JaguarWarriorIcon.jpg"
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
                      src="~assets/HandCannoneerIcon.jpg"
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
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
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
                      src="~assets/CataphractIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/Plumed_units/Archer"
                      >精銳羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/Plumed_units/Archer">羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        以下技術可讓以下單位對彎刀勇士有額外攻擊力
        <div class="n1">
          <img class="gg" src="~assets/Unique-tech.jpg" width="22" alt="" />
          <nuxt-link to="/techs/Parthian_Tactics">後勤學</nuxt-link>
          <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CataphractIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Cataphract">聖騎兵(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
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
              >能夠提高彎刀勇士的生產速度還有加速
              <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >和<nuxt-link to="/techs/Royal_Heirs">皇族血脈</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發科技<nuxt-link
                to="/techs/Tracking"
                >追縱技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、
              <nuxt-link to="/techs/Arson">縱火</nuxt-link>的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：彎刀勇士更不容易被招降。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>
              一開始彎刀勇士對<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+2(精銳+3)。在4.8版本後被降低為0(精銳降為1)。。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            精銳彎刀勇士的18攻擊力比任何的步兵單位要高。它同時有遊戲中第二高的近戰攻擊力，僅次於精銳<nuxt-link
              to="/War_unitsanimal/Elephant"
              >波斯戰象</nuxt-link
            >。
          </p>
          <p>
            彎刀勇士是遊戲中生產最快的單位，每四秒一隻(研發<nuxt-link
              to="/techs/Royal_Heirs"
              >皇族血脈</nuxt-link
            >後)。
          </p>
          <p>
            彎刀勇士和<nuxt-link to="/units/Karambit_Warrior"
              >爪刀勇士</nuxt-link
            >(遊戲中生產速度第二)是遊戲中唯二持有雙手武器的單位。
          </p>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            Shotel是一種起源於衣所比亞的劍形鐮刀。其獨特的設計讓使用者可以一邊使用盾牌並傷害敵人重要的身體部位。Shotel也被用來勾住和拉下戰馬上的騎士。
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
              <div class="unititle" style="color: #fff">彎刀勇士</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/ShotelIcon.png" width="45" alt="" />
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
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>
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
            <td class="unit4">8秒</td>
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
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
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
            <td class="unit3">血量</td>
            <td class="unit4">40/50(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">16/18(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
              >+2 <br />對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >+1(精銳)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">0/1(精銳)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.2</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">單位演變</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/ShotelIcon.png" alt="" />精銳彎刀勇士
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                alt=""
              />1200食物550黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">45秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <nuxt-link to="/img/Tumblr_nxo1o0aN0R1tnh0y7o9_400.png"
              ><img
                class="imgn hg"
                src="~assets/Tumblr_nxo1o0aN0R1tnh0y7o9_400.png"
                alt=""
            /></nuxt-link>
            <p><em>一群彎刀勇士</em></p>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Pop.jpg"
              ><img class="imgn hg" src="~assets/Pop.jpg" alt=""
            /></nuxt-link>
            <p><em>彎刀勇士正攻擊敵人的城鎮</em></p>
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
