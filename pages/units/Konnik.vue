<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>保加利亞騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>保加利亞騎兵</b>是《<nuxt-link to="/games/de"
              >世紀帝國II：決定版</nuxt-link
            >》<nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>的<nuxt-link
              to="/units/Unique_Unit"
              >特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link>和<nuxt-link
              to="/building/Krepost"
              >營壘</nuxt-link
            >中訓練。保加利亞騎兵是一種死亡後會變成<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >繼續作戰的<nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
            >。保加利亞騎兵可以在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為精鋭保加利亞騎兵。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              保加利亞騎兵是相當特別的特殊單位，需要被殺兩次（第一次是<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >狀態，第二次是下馬後的<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >狀態）。這使他們十分耐用，也可以擊敗原來能克制他們的單位。雖然騎兵狀態的保加利亞騎兵對<nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >系和駱駝單位的抵抗力較弱，但下馬後的步兵狀態卻不受克制；反之，克制步兵的單位不會克制騎兵狀態的保加利亞騎兵。因此，對手必須備有能克制兩種狀態的部隊來對付大量的保加利亞騎兵。
            </li>
            <li>
              研發<nuxt-link to="/techs/Stirrups">馬鐙</nuxt-link
              >後，非精銳的保加利亞騎兵攻速會和<nuxt-link to="/units/Knight"
                >騎士</nuxt-link
              >幾乎一様，同時擁有比騎士更高的<nuxt-link to="/elements/Attack"
                >攻擊</nuxt-link
              >，但<nuxt-link to="/armor">遠防</nuxt-link
              >比騎士低。然而，精銳保加利亞騎兵比<nuxt-link to="/units/Cavalier"
                >重裝騎士</nuxt-link
              >好，這使得保加利亞騎兵更優於攻城拔寨，打擊敵軍和吸收傷害。此外，保加利亞騎兵在被殺後的會變成步兵狀態，因此保加利亞騎兵比騎士系更受歡迎。
            </li>
            <li>
              騎兵狀態的保加利亞騎兵在被殺後需要進行3秒的動畫復活，這段時間其他單位無法對其進行干預，因為在技術上來説下馬的保加利亞騎兵是在動畫結束後才產生。
            </li>
            <li>
              下馬的保加利亞騎兵會受到步兵相關科技（<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >升級，<nuxt-link to="/techs/Arson">縱火</nuxt-link>，<nuxt-link
                to="/techs/Squires"
                >護衛</nuxt-link
              >）的影響，並且獲得對<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >+4的攻擊加成。非精銳的下馬保加利亞騎兵比<nuxt-link
                to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >弱，只有攻擊力比長劍兵高。而精銳的下馬保加利亞騎兵可以被視為弱化版的<nuxt-link
                to="/units/Two-Handed_Swordsman"
                >雙手劍兵</nuxt-link
              >，攻擊力比雙手劍兵略高，但攻速較慢。
            </li>
            <li>
              因為保加利亞騎兵可以在<nuxt-link to="/building/Krepost"
                >營壘</nuxt-link
              >訓練，因此，保加利亞玩家會使用保加利亞騎兵來配合「營壘」推。
            </li>
            <li>
              城堡時代的特殊科技馬鐙使保加利亞騎兵攻速+25%，從而使得騎兵狀態的保加利亞騎兵的攻速從2.4（騎兵中最慢的攻速）降低到1.83，與騎士和重裝騎士相同，並且比<nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >（攻速1.93）好。但馬鐙不會影響下馬後的保加利亞騎兵，使得步兵狀態的保加利亞騎兵是除了長槍兵系外攻速最慢的步兵單位。步兵狀態的保加利亞騎兵在步兵系中也十分特殊，與<nuxt-link
                to="/units/Militia"
                >民兵</nuxt-link
              >一樣不會對老鷹部隊有傷害加成。
            </li>
            <li>
              保加利亞騎兵有5的視野，比騎士、重裝騎士和長劍兵好，與遊俠、雙手劍兵和劍兵勇士相同。保加利亞騎兵擁有兩種類型（騎兵和步兵），在跑速上，騎兵狀態的保加利亞騎兵與騎士系相同，而步兵狀態的保加利亞騎兵與民兵系相同。
            </li>
          </ul>
        </div>
        <h3>招降</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              保加利亞騎兵對<nuxt-link to="/units/Monk">僧侶</nuxt-link
              ><nuxt-link to="/elements/Conversion">招降</nuxt-link
              >的抵抗力與<nuxt-link to="/units/Knight">騎士</nuxt-link
              >幾乎一樣差，但保加利亞人也可以研發<nuxt-link to="/techs/Heresy"
                >異端邪說</nuxt-link
              >，因此在面對僧侶時，保加利亞騎兵可能會出現以下三種情況：
            </li>
            <li>
              如果未研發異端邪說，玩家可以自行刪除騎兵狀態的保加利亞騎兵，保加利亞騎兵會變成<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >步兵狀態並中止招降（僧侶必會招降步兵狀態的保加利亞騎兵，因為他們仍然保留其招降能力）。
            </li>
            <li>
              如果未研發異端邪說，玩家也没有自行刪除保加利亞騎兵，保加利亞騎兵會被招降。
            </li>
            <li>
              如果已研發異端邪說，保加利亞騎兵會死亡並變成步兵狀態（仍然是己方），步兵狀態的保加利亞騎兵可以前去殺死僧侶。
            </li>
          </ul>
        </div>
        <h3>反制</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <strong
                ><nuxt-link to="/units/Samurai">日本武士</nuxt-link>:</strong
              >
            </li>
            <p>
              攻速最快的近戰單位，也是唯一能對<nuxt-link to="/units/Unique_Unit"
                >特殊單位</nuxt-link
              >有攻擊加成的單位，而保加利亞騎兵無論任何類型都是特殊單位。
            </p>
            <li>
              <strong
                ><nuxt-link to="/units/War_Elephant">戰象</nuxt-link
                >和<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
                >:</strong
              >
            </li>
            <p>
              基本數據已足以對抗任何類型的保加利亞騎兵，且擁有<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >踐踏傷害。
            </p>
            <li>
              <strong
                ><nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>和<nuxt-link
                  to="/units/Teutonic_Knight"
                  >條頓武士</nuxt-link
                >:</strong
              >
            </li>
            <p>
              近防很高，能在近戰中對保加利亞騎兵構成了極大威脅。
            </p>
            <li>
              <strong
                ><nuxt-link to="/units/Genoese_Crossbowman"
                  >熱那亞弩手</nuxt-link
                >:</strong
              >
            </li>
            <p>
              反<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >的重裝弩兵，因此能對付騎兵狀態的保加利亞騎兵。下馬後的<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >狀態由於移動速度緩慢，<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >較低，因此也會輸給熱那亞弩手。
            </p>
            <li>
              <strong
                ><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link>:</strong
              >
            </li>
            <p>
              能對騎兵造成額外傷害，且具有比下馬後的保加利亞騎兵更好的機動性和射程優勢。
            </p>
            <li>
              <strong
                ><nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link>:</strong
              >
            </li>
            <p>
              能<nuxt-link to="/elements/Regeneration">回血</nuxt-link
              >，也擁有足夠的的血量和近防，且研發<nuxt-link
                to="/techs/Chieftains"
                >酋長</nuxt-link
              >後可以反制騎兵單位。在經濟上能高效地擊敗騎兵狀態的保加利亞騎兵，在基本數據上也優於下馬後的步兵狀態。
            </p>
            <li>
              <strong
                ><nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
                >:</strong
              >
            </li>
            <p>
              能對騎兵單位造成額外傷害，因此騎兵狀態的保加利亞騎兵必須避開它們。在基本數據上，阿拉伯奴隸兵不如步兵狀態的保加利亞騎兵，但如果數量起來的話，他們的射程優勢能打擊任何類型的保加利亞騎兵。
            </p>
            <li>
              <strong><nuxt-link to="/units/Leitis">烈堤司</nuxt-link>:</strong>
            </li>
            <p>
              攻擊能無視任何類型的保加利亞騎兵的裝甲，即便是全滿的保加利亞騎兵，也會吃下烈堤司的全部傷害，加上<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >升級和撿<nuxt-link to="/elements/Relic">遺跡</nuxt-link
              >加攻擊力的文明加成，烈堤司攻擊力會相當高。但如果光看基本數據的話，其實烈堤司和保加利亞騎兵差不多。
            </p>
            <li>
              <strong
                ><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
                >:</strong
              >
            </li>
            <p>
              能在沒有研發<nuxt-link to="/techs/Stirrups">馬鐙</nuxt-link
              >的情況下擊敗保加利亞騎兵，而且研發<nuxt-link
                to="/techs/Logistica"
                >後勤</nuxt-link
              >後的大隊拜占庭聖騎兵也會對保加利亞騎兵構成威脅。然而，<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >的拜占庭聖騎兵攻擊力並不高，且<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >也缺乏<nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
              >，就算能克制下馬後的保加利亞騎兵和攻速比保加利亞騎兵高，對其也不算太大問題。
            </p>
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>、<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >(騎兵狀態)、<nuxt-link to="/units/Villager">村民</nuxt-link
              >、<nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link
              >(騎兵狀態)、<nuxt-link to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >、<nuxt-link to="/units/Monk">僧侶</nuxt-link>(研發<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >後)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >(下馬後)、<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link
              >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >(騎兵狀態)、<nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link
              >、<nuxt-link to="/units/Berserk">狂戰士</nuxt-link>、<nuxt-link
                to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >(騎兵狀態)、<nuxt-link to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >、<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >、<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link
              >(騎兵狀態)、<nuxt-link to="/units/Battle_Elephant"
                >矛象伕</nuxt-link
              >、<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
              >、<nuxt-link to="/units/Scorpion">弩砲</nuxt-link
              >(下馬後)、<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >(下馬後)、<nuxt-link to="/units/Samurai">日本武士</nuxt-link
              >、<nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
              >(下馬後)
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
              /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link
              >(+2)<br />
              <img
                class="gg"
                src="~assets/Arson.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Arson">縱火</nuxt-link>:<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link
              >+2攻擊vs<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >(下馬後)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Stirrups">馬鐙</nuxt-link>(+33%
              攻擊速度，僅限騎兵狀態)
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
              >(+1/+1) <br /><img
                class="gg"
                src="~assets/scale_mail_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
              >(+1/+1)(下馬後) <br />
              <img
                class="gg"
                src="~assets/chain_barding_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Barding_Armor">鏈鎧甲</nuxt-link
              >(+1/+1) <br /><img
                class="gg"
                src="~assets/chain_mail_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鏈甲</nuxt-link
              >(+1/+1)(下馬後) <br />
              <img
                class="gg"
                src="~assets/plate_barding_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Plate_Barding_Armor">鐵鎧甲</nuxt-link
              >(+1/+2)<br /><img
                class="gg"
                src="~assets/plate_mail_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
              >(+1/+2)(下馬後)
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
              /><nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
              >(+10%)<br />
              <img
                class="gg"
                src="~assets/squires.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Squires">護衛技術</nuxt-link
              >(+10%)(下馬後)
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

        <h3>剋騎兵狀態的保加利亞騎兵的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對騎兵狀態的保加利亞騎兵的額外傷害，按照殺傷力排列。
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
                    /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >(<nuxt-link to="/units/Imperial_Camel"
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
                    /><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
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
            以下科技可讓以下單位對騎兵狀態的保加利亞騎兵有額外攻擊力
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
          <h3>剋步兵狀態的保加利亞騎兵的單位與建築</h3>
          <div class="hrn1"></div>
          <div class="n1 bonuses">
            以下單位擁有對步兵狀態的保加利亞騎兵的額外傷害，按造殺傷力排列。
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
                      /><nuxt-link to="/units/Cannon_Galleon"
                        >火砲戰船</nuxt-link
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
                      <img
                        class="gg"
                        src="~assets/SMURI.png"
                        alt=""
                      /><nuxt-link to="/units/Samurai">精銳日本武士</nuxt-link
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
                      <img
                        class="gg"
                        src="~assets/SMURI.png"
                        alt=""
                      /><nuxt-link to="/units/Samurai">日本武士</nuxt-link
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
                      /><nuxt-link to="/units/Cataphract"
                        >拜占庭聖騎兵</nuxt-link
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
                      /><nuxt-link to="/units/Plumed_Archer"
                        >羽毛箭射手</nuxt-link
                      >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                    </li>
                  </ul>
                </div>
              </div>
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
                >能夠提高烈堤司的生產速度
              </li>
              <li>
                <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
                >：<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
                >提升保加利亞騎兵護甲和攻擊的科技研發快50％。
              </li>
              <li>
                <nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發<nuxt-link
                  to="/techs"
                  >科技</nuxt-link
                ><nuxt-link to="/techs/Squires">護衛技術</nuxt-link>和<nuxt-link
                  to="/techs/Arson"
                  >縱火</nuxt-link
                >的時間快20%。
              </li>
              <li>
                <nuxt-link to="/civs/Huns">匈人</nuxt-link>：<nuxt-link
                  to="/techs/Bloodlines"
                  >品種</nuxt-link
                >與<nuxt-link to="/techs/Husbandry">耕種技術</nuxt-link
                >研發快20%。
              </li>
              <li>
                <nuxt-link to="/civs/Berbers">立陶宛</nuxt-link>：<nuxt-link
                  to="/techs/Heresy"
                  >異端邪說</nuxt-link
                >與<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>研發快20%。
              </li>
              <li>
                <nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >：保加利亞騎兵更不容易被<nuxt-link to="/elements/Conversion"
                  >招降</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3>
              <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
            </h3>
            <ul>
              <li>
                起初，下馬後的保加利亞騎兵有的1.9攻速， (精鋭)保加利亞騎兵有110
                (130)HP。
              </li>
              <li>
                (34055更新) 下馬後的保加利亞騎兵有的2.4攻速，
                (精鋭)保加利亞騎兵有100 (120)HP。
              </li>
            </ul>
          </div>
          <div class="n1">
            <h3></h3>
            <ul></ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                保加利亞騎兵的名字(俄語：конник)的意思是騎師。而конник是可以被命名为波雅爾(貴族的意思)(保加利亞語：боляр)，因為保加利亞的波雅爾在歷史上曾受斯拉夫波雅爾的啟發。
              </li>
              <li>
                保加利亞騎兵的設計在某種程度上受到馬達拉騎士浮雕(保加利亞世界遺產)的啟發。
              </li>
              <li>
                2.4攻速的保加利亞騎兵是遊戲中攻速最慢的騎兵單位，也是遊戲中攻速第二慢的步兵單位（僅次於非日本的長槍兵系單位）。
              </li>
              <li>
                保加利亞騎兵是唯一可以在兩種建築物中訓練而又不需要事先研發特殊科技的單位。
              </li>
            </ul>
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Konniks.png" alt=""
                /></gallery>
                <p>
                  <em>保加利亞騎兵</em>
                </p>
              </div>
              <div class="col-md-4">
                <gallery
                  ><img
                    class="imgn hg"
                    src="~assets/Dismountedkonnik.png"
                    alt=""
                /></gallery>
                <p>
                  <em>下馬後的保加利亞騎兵</em>
                </p>
              </div>
            </div>
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
              <div class="unititle" style="color: #fff;">保加利亞騎兵</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <b-tabs no-fade>
                  <b-tab title="騎兵狀態">
                    <img
                      src="~assets/Konnikicon.png"
                      class="img-fluid"
                      alt=""
                    />
                  </b-tab>
                  <b-tab title="步兵狀態">
                    <img
                      src="~assets/Konnikdismountedicon.png"
                      class="img-fluid"
                      alt=""
                    />
                  </b-tab>
                </b-tabs>
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style="background-color:#3c763d;text-align: center;"
            >
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              ><br /><nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >(下馬後)
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>
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
              <img
                class="gg"
                src="~assets/castle.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link><br /><img
                class="gg"
                src="~assets/Kreposticon.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Krepost">營壘</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">19秒</td>
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
            <td class="unit4">70</td>
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
            <td class="unit4">100/110(精銳)<br />45/50(精銳)(下馬後)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">
              12/14(精銳)(近戰)<br />12/13(精銳)(近戰)(下馬後)
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.4</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +4對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >(下馬後)
            </td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">2<br />0(下馬後)</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">1/2(精銳)<br />0/1(精銳)(下馬後)</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link
              >(下馬後)<br />
              <nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.35<br />0.9(下馬後)</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">5<br />7(下馬後)</td>
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
                src="~assets/Leitisicon.png"
                alt=""
              />精銳保加利亞騎兵
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                alt=""
              />1000食物750黃金
            </td>
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
