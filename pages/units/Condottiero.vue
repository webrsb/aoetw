<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>傭兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>傭兵</b>或稱<b>僱傭兵</b>，是<nuxt-link to="/civs/Italians"
              >義大利</nuxt-link
            >的第二種<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >的<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >中訓練。在<nuxt-link to="/games/aof">失落的帝國</nuxt-link
            >資料片中<nuxt-link to="/civs/Italians">義大利</nuxt-link
            >還是要建<nuxt-link to="/building/Castle">城堡</nuxt-link
            >才能生產傭兵。傭兵是個可以共享的特殊單位，任何與義大利同盟的國家都能生產，可說是<nuxt-link
              to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >。與<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>的<nuxt-link
              to="/units/Genitour"
              >標槍騎兵</nuxt-link
            >不同傭兵沒有精銳版本。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              傭兵對<nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                >火藥單位</nuxt-link
              >有極高的攻擊加成，正因為如此，他們能夠打倒與<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >或<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
              >搭配的<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >、<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
              >或是<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>。
            </li>
            <li>
              傭兵移動速度快，有不錯的裝甲和高<nuxt-link
                to="/elements/Hit_points"
                >生命值</nuxt-link
              >。他們生產速度快，也不需要升級。然而，相對較高的<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              >成本，要大量生產不是那麼簡單。<nuxt-link
                to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >在成本比較上及處理火藥單位的效率比傭兵要高得多，而<nuxt-link
                to="/units/Siege_Weapons"
                >攻城單位</nuxt-link
              >的表現也比傭兵好，限制了傭兵的定位只能在應急上使用。
            </li>
            <li>
              傭兵可以暫時作為<nuxt-link to="/units/Champion"
                >劍兵勇士</nuxt-link
              >的替代品。這情況可能發生在玩家還沒升級好<nuxt-link
                to="/units/Champion"
                >劍兵勇士</nuxt-link
              >，或者玩家的<nuxt-link to="/civs">文明</nuxt-link>沒有<nuxt-link
                to="/units/Champion"
                >劍兵勇士</nuxt-link
              >（<nuxt-link to="/civs/Ethiopians">衣索比亞人</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈人</nuxt-link>、<nuxt-link
                to="/civs/Khmer"
                >高棉人</nuxt-link
              >、<nuxt-link to="/civs/Malay">馬來人</nuxt-link>、<nuxt-link
                to="/civs/Mayans"
                >馬雅人</nuxt-link
              >和<nuxt-link to="/civs/Persians">波斯人</nuxt-link
              >）。然而<nuxt-link to="/civs/Malay">馬來</nuxt-link
              >的話，不應該用傭兵取代<nuxt-link to="/units/Two-Handed_Swordsman"
                >雙手劍兵</nuxt-link
              >，而是將傭兵作為馬來軍隊的後盾，利用傭兵的速度對付那些<nuxt-link
                to="/units/Gunpowder_Unit"
                >火藥</nuxt-link
              >和<nuxt-link to="/units/Archer_Units">弓箭手單位</nuxt-link
              >(搭配<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >和<nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link>)。
            </li>
            <li>
              有<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
              >文明在特定情況可考慮使用傭兵，特別是敵人使用許多反<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >的話。例如，<nuxt-link to="/civs/Malians">馬利</nuxt-link
              >的傭兵可以加上<nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link
              >，利用速度突襲敵方陣營;<nuxt-link to="/units/Gbeto"
                >飛刀女獵手</nuxt-link
              >專職輸出，而馬利傭兵的任務則是處理威脅<nuxt-link
                to="/units/Gbeto"
                >飛刀女獵手</nuxt-link
              >的<nuxt-link to="/units/Archer_Units">遠程</nuxt-link>敵方單位。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >的傭兵擁有97生命值，直逼<nuxt-link to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >。其他<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >、<nuxt-link to="/civs/Japanese">日本</nuxt-link>與<nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >則是以高攻擊著稱，<nuxt-link to="/civs/Malians">馬利</nuxt-link
              >傭兵則<nuxt-link to="/armor">遠防</nuxt-link
              >高8，在帝王初期幾乎沒有對手。
            </li>
            <li>
              在HD patch5.7版後傭兵擁有獨特裝甲，只會減少火槍單位的反<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link
              >傷害，不包含其他的反步兵傷害。
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
                to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >、<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
              >、<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >、<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >、<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >、<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link
              >、<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>、<nuxt-link
                to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >、<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>、<nuxt-link
                to="/units/Jaguar_Warriors"
                >豹勇士</nuxt-link
              >、<nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td colspan="2" style="text-align: center;">
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
              /><nuxt-link to="/techs/Arson">縱火</nuxt-link>:+2攻擊vs<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Garland_Wars">榮冠戰爭</nuxt-link
              >(+4，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)<br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Druzhina">王家侍從</nuxt-link
              >(步兵單位有<nuxt-link to="/elements/Area_of_Effect"
                >踐踏傷害</nuxt-link
              >，<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>限定)<br />
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chieftains">酋長</nuxt-link>(對<nuxt-link
                to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >攻擊+5，對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >攻擊+4，<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
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
              >(+1/+2)<br />
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Pavise">巨盾</nuxt-link>(+1/+1，<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >限定)
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
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/tracking.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link>(+2)
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
              <br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Perfusion">井噴</nuxt-link
              >(+100%，<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
            </td>
          </tr>
        </table>

        <h3>剋傭兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對傭兵的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+22攻擊</strong></div>
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
                </ul>
                <div style="margin:12px 0px;"><strong>+21攻擊</strong></div>
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
                <div style="margin:12px 0px;"><strong>+20攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Slingericon.png"
                      alt=""
                    /><nuxt-link to="/units/Slinger">投石手</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+18攻擊</strong></div>
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
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
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
                    <img
                      class="gg"
                      src="~assets/HandCannoneerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
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
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
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
          以下科技會給以下單位對傭兵有額外攻擊。
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
                /><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/CataphractIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cataphract">精銳拜占庭聖騎兵</nuxt-link
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>：傭兵生產快11%。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >：兵工廠傭兵科技升級所需食物-50%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
              >：傭兵攻擊+3。<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：傭兵移動速度快15%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：傭兵<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：傭兵便宜35%並對<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+3。研發<nuxt-link to="/techs/Perfusion">井噴</nuxt-link
              >後研發<nuxt-link to="/techs/Squires">護衛技術</nuxt-link
              >的速度快100%。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>：研發<nuxt-link
                to="/techs/Pavise"
                >巨盾</nuxt-link
              >後傭兵護甲+1/+1。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：傭兵攻速快33%。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：<nuxt-link
                to="/techs/Forging"
                >鍛造技術</nuxt-link
              >、<nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link
              >和<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>免費。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：傭兵+3<nuxt-link
                to="/armor"
                >遠程護甲</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：傭兵<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >花費便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >科技升級不用黃金。
            </li>
            <li>
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link
              >：傭兵高地戰鬥傷害+50%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：傭兵+2近程護甲。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>：<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>：傭兵多20%HP。
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
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>：<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >提升傭兵護甲和攻擊的科技研發快80％。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：傭兵訓練和升級快20%。研發<nuxt-link to="/techs/Squires"
                >護衛技術</nuxt-link
              >、<nuxt-link to="/techs/Arson">縱火</nuxt-link>科技的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>：<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >與<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：傭兵更不容易被招降。
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
            <li>傭兵需要城堡才能訓練。</li>
            <li>傭兵有9的攻擊與1的移動速度。</li>
            <li>訓練時間為11秒。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>傭兵訓練不用先蓋城堡。</li>
            <li>傭兵有新的外觀。</li>
            <li>傭兵現在有10的攻擊與1.2的移動速度。</li>
            <li>在4.8的改版中，傭兵要13秒訓練。</li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >:傭兵受益於文明加成有+3遠防。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:4.8版本引進<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >科技，傭兵對<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵單位</nuxt-link
              >有+5攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:在4.8b版本後，<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >讓傭兵對<nuxt-link to="/armor/Armor_Class_Camel">駱駝</nuxt-link
              >有額外+2攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>5.7改版中，傭兵攻擊降為9，遠防降為0。</li>
            <li>
              5.7版本傭兵有了自己的防禦類別:<nuxt-link
                to="/armor/Armor_Class_Condottiero"
                >傭兵護甲</nuxt-link
              >，可以抵抗火藥單位的+10攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:5.7版本<nuxt-link
                to="/techs/Chieftains"
                >酋長</nuxt-link
              >科技現在讓傭兵對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝</nuxt-link
              >有額外+4攻擊。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              移除<nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link
              >，改為各文明升級封建時代後自動擁有。
            </li>
            <li>
              (35584更新)
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>:傭兵+1近程護甲。
            </li>
            <li>
              (36906更新) 條頓:傭兵增為+2近程護甲。
            </li>
            <li>
              (37650更新)
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >:軍事單位加快訓練速度由15%減為11%。
            </li>
            <li>
              (39284更新) 傭兵攻擊增至10，受特殊科技巨盾的加成。
            </li>
            <li>
              (42848更新)
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>:
              傭兵<nuxt-link to="/resource/Gold">黃金</nuxt-link>花費便宜20%。
            </li>
            <li>
              (42848更新)
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>:
              團隊加分中<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >工作效率從+50%增加成+80%。
            </li>
            <li>
              (42848更新) 保加利亞: 兵工廠科技升級所需食物-50%。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              傭兵是少數四種對<nuxt-link to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >沒有加成的步兵之一，另外三個分別是<nuxt-link to="/units/Kamayuk"
                >槍隊長</nuxt-link
              >、<nuxt-link to="/units/Militia">民兵</nuxt-link>和<nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >自己。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>傭兵和<nuxt-link
                to="/units/Samurai"
                >日本武士</nuxt-link
              >並列<nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link
              >最快的近戰單位，高達1.425。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >傭兵為訓練速度第三快的單位，僅輸給<nuxt-link
                to="/units/Shotel_Warrior"
                >彎刀勇士</nuxt-link
              >與<nuxt-link to="/units/Karambit_Warrior">爪刀勇士</nuxt-link>。
            </li>
            <li>
              傭兵和<nuxt-link to="/units/Imperial_Camel_Rider"
                >帝王駱駝</nuxt-link
              >與<nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >一樣都是特殊部隊，但傭兵會受到<nuxt-link to="/units/Samurai"
                >日本武士</nuxt-link
              >的加成，另外兩個不會。
            </li>
            <li>
              傭兵是唯一沒有精銳版本的五個獨特單位之一，另外是<nuxt-link
                to="/units/Slinger"
              ></nuxt-link
              ><nuxt-link to="/units/Slinger">投石手</nuxt-link>、<nuxt-link
                to="/units/Missionary"
                >傳教士</nuxt-link
              >、<nuxt-link to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >與<nuxt-link to="/units/Imperial_Camel_Rider">帝王駱駝</nuxt-link
              >。
            </li>
            <li>
              另外兩個<nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link
              >的特殊共享單位分別是<nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >的<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
              >與<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>的<nuxt-link
                to="/units/Imperial_Skirmisher"
                >帝王戰矛兵</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="250"
                src="~assets/Condottiero_Group.jpg"
                alt=""
            /></gallery>
            <p><em>一群傭兵</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" width="250" src="~assets/2.png" alt=""
            /></gallery>
            <p><em>一群傭兵(4.4版本後)</em></p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img class="imgn hg" width="250" src="~assets/per.jpg" alt=""
            /></gallery>
            <p>
              <em
                >傭兵對沒有完整升級步兵的文明非常有價值，例如:<nuxt-link
                  to="/civs/Persians"
                  >波斯</nuxt-link
                >。</em
              >
            </p>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="250"
                src="~assets/Genoese_&_Condottiero.jpg"
                alt=""
            /></gallery>
            <p><em>義大利的兩個特殊單位:傭兵(左)和熱那亞努手(右)</em></p>
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
              <div class="unititle" style="color: #fff">傭兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/CondottieroIcon.png"
                  class="img-fluid"
                  alt=""
                />
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
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/imperial_age.png" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/barracks.png" alt="" /><nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">18秒</td>
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
            <td class="unit4">80</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">10(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Gunpowder_Unit"
                >火藥單位</nuxt-link
              >+10 <br />對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >+2
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">1.93</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>(+10)
              <br /><nuxt-link to="/armor/Armor_Class_Condottiero"
                >傭兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
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
            <td class="unit4">6</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
