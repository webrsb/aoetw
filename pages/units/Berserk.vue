<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>狂戰士</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            狂戰士是<nuxt-link to="/civs/Vikings">維京</nuxt-link
            >的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。狂戰士是一個配備高護甲和高攻擊力的單位，而且他們還能自我療傷，在征服者入侵的版本中狂戰士的實用度非常低，在後面的版本修正後（增加速度與對騎兵的加成），實用度大大增加。狂戰士可以在
            <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >升級為精銳狂戰士。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              在陸地地圖上，維京人必須在狂戰士和劍兵勇士之間做出選擇。由於兩個單位的升級成本都很高，因此同時生產兩種單位是不切實際的。狂戰士比民兵系有優勢的點在於它們的再生能力，出色的裝甲，攻擊力和速度。在缺點方面，他們多花費5的食物和金幣，而且難以在短時間內大量生產。
            </li>
            <li>
              狂戰士城堡時代的統計數據遠不如<nuxt-link
                to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >（按成本計算）。他們唯一的優勢在於他們的再生能力和速度。因此，他們可以有效地執行游擊戰。儘管科技
              <nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >給了他們一個對抗<nuxt-link to="/units/Knight">騎士</nuxt-link
              >的機會，但是這個相當不值得，應該使用<nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >對付騎士來的好。
            </li>
            <li>
              狂戰士在數據上的統計比<nuxt-link to="/units/Champion"
                >劍兵勇士</nuxt-link
              >優秀許多。當所有科技研發後，狂戰士多了+1攻擊、+1護甲，+
              0.15速度和以5個食物5個黃金為代價換到的再生能力。劍兵勇士只多了+9
              HP，總的來說，狂戰士還是出兵的優先選擇。劍兵勇士的唯一優勢就是對
              <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >的加成。總共獲得+8攻擊，精銳狂戰士只有+3。
            </li>
            <li>
              狂戰士雖比一般的步兵單位要強，而且能追上徒步的弓兵單位，但在會戰中還是不要讓他們面對一整群的遠程單位。<nuxt-link
                to="/units/Slinger"
                >投石手</nuxt-link
              >和
              <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >會狠狠地打你臉。整群的<nuxt-link to="/units/Scorpion"
                >弩砲</nuxt-link
              >也是非常可怕。拜占庭聖騎兵、<nuxt-link to="/units/Jaguar_Warrior"
                >豹勇士</nuxt-link
              >、
              <nuxt-link to="/units/Samurai">日本武士</nuxt-link>、<nuxt-link
                to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >、<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >這些對狂戰士有攻擊加乘的也要盡量避免正面碰撞。
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
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >、<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>、
              <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >、<nuxt-link to="/building">建築物</nuxt-link>和<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>、<nuxt-link
                to="/units/Jaguar_Warrior"
                >豹勇士</nuxt-link
              >、 <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>、<nuxt-link
                to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >、<nuxt-link to="/units/Conquistador">征服者</nuxt-link>、
              <nuxt-link to="/units/Slinger">投石手</nuxt-link>、<nuxt-link
                to="/units/Plumed_Archer"
                >羽毛箭射手</nuxt-link
              >、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>和
              <nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link>。
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
              <br />
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >:步兵對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              >攻擊+5，對
              <nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link
              >攻擊+4，<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定。
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
              >(+1/+1) <br />
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
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link> <br />
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
          <tr>
            <td class="tta1" style="width:10%">其他</td>
            <td class="tta4">
              <nuxt-link to="/techs/Berserkergang">狂戰士幫</nuxt-link
              >:狂戰士回血速度提升(每分鐘回20 HP變每分鐘回40 HP)，
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>限定。
            </td>
          </tr>
        </table>

        <h3>剋狂戰士的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對狂戰士的額外傷害，按造傷殺力排列。
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
        </div>
        以下技術可讓以下單位對狂戰士有額外攻擊力
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
              /><nuxt-link to="/units/Cataphract">聖騎兵(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：狂戰士在城堡/帝王時代+15%/20% HP。
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
              >能夠提高狂戰士的生產速度還有加速強化狂戰士的科技研究時間(
              <nuxt-link to="/techs/Chieftains">酋長</nuxt-link>、<nuxt-link
                to="/techs/Berserkergang"
                >狂戰士幫</nuxt-link
              >和<nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>)。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：研發<nuxt-link
                to="/techs/Tracking"
                >追蹤技術</nuxt-link
              >、<nuxt-link to="/techs/Squires">護衛</nuxt-link>、
              <nuxt-link to="/techs/Arson">縱火</nuxt-link>科技的時間快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：狂戰士更不容易被招降。
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
            <li>狂戰士的HP是48(精銳是60)。</li>
            <li>狂戰士的訓練時間需要16秒。</li>
            <li>狂戰士的移動速度是0.9。</li>
            <li>狂戰士的遠防為0。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>狂戰士的移動速度是0.9。</li>
            <li>狂戰士的遠防為0。</li>
            <li>引進<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:引進<nuxt-link
                to="/techs/Berserkergang"
                >狂戰士幫</nuxt-link
              >，成本為500肉850金。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>狂戰士的HP是54(精銳是62)。</li>
            <li>狂戰士的訓練時間需要14秒。</li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:<nuxt-link
                to="/techs/Berserkergang"
                >狂戰士幫</nuxt-link
              >現在需要850肉400金。引進
              <nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >，成本為700肉400金並給狂戰士對<nuxt-link
                to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >攻擊+4。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>引進<nuxt-link to="/techs/Arson">縱火</nuxt-link>。</li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:<nuxt-link
                to="/techs/Chieftains"
                >酋長</nuxt-link
              >現在成本為400肉300金並給狂戰士對
              <nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              >攻擊+5。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:4.8版本後<nuxt-link
                to="/techs/Chieftains"
                >酋長</nuxt-link
              >給狂戰士對
              <nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link
              >攻擊+2。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>:5.7版本後<nuxt-link
                to="/techs/Chieftains"
                >酋長</nuxt-link
              >給狂戰士對
              <nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link
              >攻擊+4。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              儘管維京戰士從來不戴角盔，但是在遊戲中狂戰士被描繪成帶角盔的戰士，很可能是因為那是最能辨認民族的標誌之一。角盔只在某些宗教儀式中被維京人使用。
            </li>
            <li>
              狂戰士是第一個被賦予再生能力的單位。之後，其他單位加入了他們，比如英雄和柏柏的駱駝部隊。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            第八世紀末，斯堪的納維亞的海盜襲擊者突然出現在北歐，在接下來的150年裡他們突襲並掠奪了沿海社區，讓查理曼大帝在統一北歐時做的文明復甦措施大部分被他們造成的混亂所破壞，維京人以戰術上的強大海軍軍事力量和兇猛而聞名，目擊者稱維京人的戰士偶爾會以幾乎不人道的熱情進行“狂熱”攻擊，無視所有危險，這種行為令人感到恐懼。在廣泛的迷信時期，能夠與戰鬥慾望發瘋的能力是一個強大的屬性。
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
              <div class="unititle" style="color: #fff">狂戰士</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/VBRSK.jpg" width="45" alt="" />
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
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>
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
            <td class="unit4">14秒</td>
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
            <td class="unit4">65</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">25</td>
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
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>:61
              <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >:64/75(精銳)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">9/14(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築物</nuxt-link
              >+2/+3(精銳) <br />對<nuxt-link
                to="/armor/Armor_Class_Eagle_Warrior"
                >鷹勇士</nuxt-link
              >+2/+3(精銳)
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">0/2(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">1</td>
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
            <td class="unit4">3/5(精銳)</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2"><nuxt-link to="">單位演變</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/VBRSK.jpg" alt="" />精銳狂戰士
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                alt=""
              />1300食物550黃金
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
            <gallery
              ><img class="imgn hg" src="~assets/Berserk.png" alt=""
            /></gallery>
            <p><em>一群狂戰士</em></p>
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
