<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>豹勇士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            豹勇士是<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
            >的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。豹勇士是一個配備高護甲和對步兵單位有高攻擊力的單位。豹勇士可以在<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為精銳豹勇士。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              豹勇士在面對步兵時有極高的攻擊加成，讓他們在任何1V1除了與<nuxt-link
                to="/Teutonic_units/Knight"
                >條頓武士</nuxt-link
              >的戰鬥外都能輕鬆獲勝，若是一群豹勇士的話連條頓武士都不是對手。但在對付
              <nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link
              >和<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
              >上則顯得吃力
            </li>
            <li>
              豹勇士搭配<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >是非常好的團戰組合。鷹勇士可以消滅大部分豹勇士的威脅，例如:僧侶、騎兵，對弓兵也有極佳的反制效果。豹勇士對步兵的加成也能保護鷹勇士，兩者可說相輔相成。搭配上
              <nuxt-link to="/units/Monk">僧侶</nuxt-link
              >在城堡時代的阿茲軍隊是令人聞風為之喪膽的。
            </li>
            <li>
              對阿茲玩家來說<nuxt-link to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >是在戰場上比較需要注意的，可以生產<nuxt-link to="/units/Onager"
                >中型投石車</nuxt-link
              >或
              <nuxt-link to="/Siege_units/Onager">重型投石車</nuxt-link
              >作反制。對上<nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
              >阿茲雖然沒有<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >但有高攻擊的
              <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>替代。
            </li>
            <li>
              豹勇士面對<nuxt-link to="/units/Samurai">日本武士</nuxt-link
              >的情況會依遊戲在何種版本進行而有所不同。若是征服者的版本，在對特殊單位有加成以及更快的攻速下，日本武士總是勝利的一方；但若是HD版本，先攻擊的一方獲勝，因為精銳豹勇士對步兵的加成會是+11而不是+10。
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
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >、 <nuxt-link to="/building">建築物</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>、<nuxt-link
                to="/units/Scorpion"
                >弩炮</nuxt-link
              >、<nuxt-link to="/units/Mangonel">投石車</nuxt-link>、
              <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>、<nuxt-link
                to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>、
              <nuxt-link to="/units/Conquistador">征服者</nuxt-link>、<nuxt-link
                to="/units/Janissary"
                >土耳其火槍兵</nuxt-link
              >、<nuxt-link to="/units/Slinger">投石手</nuxt-link>、
              <nuxt-link to="/units/Knight">騎士</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
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
              <img
                class="gg"
                src="~assets/Arson.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Arson">縱火</nuxt-link
              >:步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >
              <br />
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link
              >:步兵攻擊+4，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >限定。
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
            </td>
          </tr>
        </table>

        <h3>剋豹勇士的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對豹勇士的額外傷害，按造傷殺力排列。
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
        以下技術可讓以下單位對豹勇士有額外攻擊力
        <div class="n1">
          <img class="gg" src="~assets/Unique-tech.jpg" width="22" alt="" />
          <nuxt-link to="/techs/Logistica">後勤學</nuxt-link>
          <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CataphractIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/CataphractIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
              >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：豹勇士生產速度快15%。
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
              >能夠提高豹勇士的生產速度還有加速
              <nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link
              >和<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發<nuxt-link
                to="/techs/Tracking"
                >追縱技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、
              <nuxt-link to="/techs/Arson">縱火</nuxt-link>科技的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：豹勇士更不容易被招降。
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
            <li>豹勇士的遠防是0。</li>
            <li>
              精銳豹勇士對<nuxt-link to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >攻擊+10。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>豹勇士現在的遠防是1。</li>
            <li>
              精銳豹勇士對<nuxt-link to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >現在攻擊+11。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            "阿茲特克的另一個戰士階級是豹勇士，他比鷹勇士擁有更多的武裝和裝甲。他們的角色可能是軍隊中向敵人的主體衝鋒的重步兵。他們可能在攻擊輕型部隊的戰鬥中佔據優勢，這些輕型部隊通常攻擊性不足或是比較愚蠢，無法與擁有高裝甲的豹勇士交戰。這些勇士穿著代表豹皮的捷豹頭飾和服裝。美洲虎被選為勇士的圖騰，因為它是中美洲叢林中最兇猛的掠食者。在戰鬥中，他們使用了被稱為馬卡納的黑曜石刀。
            儘管缺乏鋼鐵武器的穿透力，但黑曜石刀能夠經常保持鋒利的刀面。"
          </p>
          <p>
            最優秀的豹勇士會晉升為精英級別。
            些都是具有高超技能的老兵，他們擁有最好的武器，並且是最好的戰士。
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
              <div class="unititle" style="color: #fff">豹勇士</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/JaguarWarriorIcon.jpg" width="45" alt="" />
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
              <nuxt-link to="/civs/Persians">阿茲特克</nuxt-link>
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
            <td class="unit4">17秒</td>
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
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">30</td>
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
            <td class="unit4">50/75(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">10/12(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Infantry">步兵單位</nuxt-link
              >+10/+11(精銳) <br />對<nuxt-link
                to="/armor/Armor_Class_Condottiero"
                >傭兵</nuxt-link
              >+10 <br />對<nuxt-link to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
              >+2 <br />對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築物</nuxt-link
              >+2
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">1/2(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">1</td>
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
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">3/5(精銳)</td>
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
                src="~assets/JaguarWarriorIcon.jpg"
                alt=""
              />精銳豹勇士
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                alt=""
              />1000食物500黃金
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
            <a target="_blank" href="/img/Jaguarwarrior.png"
              ><img class="imgn hg" src="~assets/Jaguarwarrior.png" alt=""
            /></a>
            <p><em>一群豹勇士</em></p>
          </div>
          <div class="col-md-4">
            <a target="_blank" href="/img/Url.jpg"
              ><img class="imgn hg" src="~assets/Url.jpg" alt=""
            /></a>
            <p><em>豹勇士3D圖</em></p>
          </div>
          <div class="col-md-4">
            <a target="_blank" href="/img/Jaguar_Warrior.jpg"
              ><img class="imgn hg" src="~assets/Jaguar_Warrior.jpg" alt=""
            /></a>
            <p><em>豹勇士</em></p>
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
