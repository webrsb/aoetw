<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>哥德衛隊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            哥德衛隊是哥德的特殊單位，能夠在<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的城堡中訓練。哥德衛隊是一個對箭矢有相當高防禦的單位。哥德衛隊可以在
            <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >升級為精銳哥德衛隊。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              哥德衛隊具有優異的攻擊力和速度，但最大的優勢是他們的遠程護甲。當研發了<nuxt-link
                to="/techs/Plate_Mail_Armor"
                >步兵板甲</nuxt-link
              >(遠防+2)後，對箭矢的傷害幾乎免疫，這讓他們成為弓兵殺手。一群哥德衛隊可以最小損傷摧毀一座城堡。哥德衛隊適合用來對付弓箭手，但是他們也是相當全面的單位，可以處理大多數的威脅，因為他們幾乎免疫炮火。他們的弱點包括
              <nuxt-link to="/units/Knight">騎士</nuxt-link
              >，還有速度比他們快的弓箭手(如<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >、<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>、
              <nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
              >和<nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link
              >）。因為他們可以選擇逃跑或是遠距離慢慢消耗哥德衛隊的血量。
            </li>
            <li>
              由於哥德衛隊缺少近戰裝甲，他們打不過<nuxt-link to="/units/Camel"
                >駱駝騎兵</nuxt-link
              >，<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>和
              <nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >，但是他們能夠擊敗<nuxt-link to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >。哥德衛隊非常便宜而且生產迅速，所以哥德玩家仍然可以用壓倒性的數量橫掃戰場。一般應該避免跟有高護甲（
              <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>，<nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >）的近戰單位，或對他們（<nuxt-link to="/units/Jaguar_Warrior"
                >豹勇士</nuxt-link
              >、
              <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>、<nuxt-link
                to="/units/Samurai"
                >日本武士</nuxt-link
              >）有攻擊加成的單位戰鬥。因為它們對哥德衛隊是致命的。
              <nuxt-link to="/units/War_Elephant">戰象</nuxt-link>和<nuxt-link
                to="/units/Battle_Elephant"
                >矛象伕</nuxt-link
              >的高HP，強大的攻擊和濺射傷害可輕易摧毀哥德衛隊，但必須警惕戟兵的出現。遠程單位如
              <nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
              >，<nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link
              >或者<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link
              >對哥德衛隊也是有效的，儘管哥德衛隊對他們也有額外傷害加成。
            </li>
            <li>
              <nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >能有效用範圍傷害對付哥德衛隊，而<nuxt-link to="/units/Scorpion"
                >弩砲</nuxt-link
              >因為是穿甲傷害所以無法在哥德衛隊接近它前造成大量傷害而容易被殲滅。
              <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >可對哥德衛隊造成極大傷害，但需要<nuxt-link
                to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >數量足夠而且有近戰單位保護他們遠離哥德衛隊接近，不然還是會慘死在亂刀下(精銳哥德衛隊只需兩刀就可殺死一個
              <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>)。
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
              <nuxt-link to="/units/Archer">弓兵</nuxt-link>、<nuxt-link
                to="/building"
                >建築物</nuxt-link
              >和<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>、
              <nuxt-link to="/units/Scorpion">弩砲</nuxt-link>、<nuxt-link
                to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >、大部分的近戰單位。
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
              <br />
              <img
                class="gg"
                src="~assets/Arson.jpg"
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
                src="~assets/Scalemailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/Chainmailarmor.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
              >(+1/+1)
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
              /><nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link>(+2)
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
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Perfusion">灌注士氣</nuxt-link
              >:軍營工作速率加快2倍，只限軍營訓練的哥德衛隊
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">其他</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link
              >:軍營可生產哥德衛隊。
            </td>
          </tr>
        </table>

        <h3>剋哥德衛隊的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對哥德衛隊的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="row">
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
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          技術:以下技術會給以下單位對哥德衛隊有額外攻擊。
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
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：哥德衛隊造價便宜35%並對<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+1。
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
              >能夠提高哥德衛隊的生產速度還有加速
              <nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link
              >、<nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link
              >、<nuxt-link to="/techs/Perfusion">灌注士氣</nuxt-link
              >的研究時間(快25%)。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發科技<nuxt-link
                to="/techs/Tracking"
                >追蹤技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、
              <nuxt-link to="/techs/Arson">縱火</nuxt-link>的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：哥德衛隊更不容易被招降。
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
            <li>哥德衛隊(非精銳)的訓練時間為26秒，精銳的訓練時間是16秒。</li>
            <li>哥德衛隊有4的遠程護甲，精銳的遠程護甲是6。</li>
            <li>
              哥德衛隊現在對<nuxt-link to="/armor/Armor_Class_Archer"
                >弓兵</nuxt-link
              >攻擊+3，精銳的+4。
            </li>
            <li>哥德衛隊現的移動速度為0.9。</li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >:哥德衛隊在城堡/帝王時代訓練便宜15%/35%
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>哥德衛隊不論精銳與否現在的訓練時間都是16秒。</li>
            <li>哥德衛隊有6的遠程護甲，精銳的遠程護甲是8。</li>
            <li>
              哥德衛隊現在對<nuxt-link to="/armor/Armor_Class_Archer"
                >弓兵</nuxt-link
              >攻擊+6，精銳的+10。
            </li>
            <li>哥德衛隊現的移動速度為1.05。</li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>:引入<nuxt-link
                to="/techs/Perfusion"
                >灌注士氣</nuxt-link
              >和<nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link
              >。1.0c改版後哥德衛隊現在訓練便宜35%
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>引入<nuxt-link to="/techs/Arson">縱火</nuxt-link>。</li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              哥德衛隊(Huskarls)也被稱為“Housecarls”，普遍存在於十一世紀薩克森和諾爾斯軍閥的隨從之中。
            </li>
            <li>
              “哥德衛隊”這個詞不是一個哥德詞，而實際上是古老的挪威語，並且直譯為“眾議院的人”。
            </li>
            <li>
              在遊戲中，哥德衛隊裝備著一把劍和一個盾牌。但從歷史上看，哈斯卡爾更可能使用斧頭作為他們的主要武器而不是劍。
            </li>
            <li>
              哥德衛隊是唯一一個對弓箭手有攻擊加值的近戰步兵部隊。而弓箭手是步兵部隊的主要弱點，這讓哥德衛隊成為最通用的步兵部隊。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在戰勝西羅馬帝國並把歐洲帶入黑暗時代的日耳曼部落，每個部落領袖們包括哥德人在內留下了一群屬於個人的士兵，稱為哥德衛隊。這些人狂熱地服從他們的首領，以換取在分贓資源時更多的福利。哥德衛隊不斷為戰鬥而訓練，並且沒有其他職責。然而，酋長必須在每次的掠奪行動都成功，否則將被推翻或禪位。隨著黑暗時代演進到封建時代，哥德衛隊被封為領主的封臣。他們仍然是領主或國王的個人戰鬥力量，但他們往往在他們的首領交給他們的土地上負責自己的頁務。這個系統取代了資源掠奪分享的制度。
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
              <div class="unititle" style="color: #fff">哥德衛隊</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/HuskarlIcon.jpg" width="45" alt="" />
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
            <td class="unit4"><nuxt-link to="/civs/Goths">哥德</nuxt-link></td>
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
            <td class="unit4">16秒</td>
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
            <td class="unit4">52</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">26</td>
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
            <td class="unit4">60/70(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">10/12(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >+2/+3(精銳) <br />對<nuxt-link
                to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
              >+2/+3(精銳) <br />對<nuxt-link to="/armor/Armor_Class_Archer"
                >弓兵</nuxt-link
              >+6/+10(精銳)
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
            <td class="unit4">6，8(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
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
            <td class="unit4">1.05</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">3，5(精銳)</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2"><nuxt-link to="">單位演變</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/HuskarlIcon.jpg"
                width="45"
                alt=""
              />精銳哥德衛隊
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
            <td class="unit4">40秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" width="180" src="~assets/Huskarl.png" alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>一群哥德衛隊。</em></p>
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
