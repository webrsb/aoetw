<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>熱那亞弩手</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>熱那亞弩手</b>是《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》資料片中<nuxt-link to="/civs/Italians">義大利</nuxt-link
            >的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
            >，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link
            >中訓練。是個對<nuxt-link to="/armor/Armor_Class_Cavalry"
              >騎兵</nuxt-link
            >有攻擊加成的<nuxt-link to="/armor/Armor_Class_Archer"
              >弓兵</nuxt-link
            >。
          </p>
          <p>
            熱那亞弩手可以在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為<nuxt-link to="/units/Genoese_Crossbowman"
              >精銳熱那亞弩手</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              熱那亞弩手是一個能對付騎兵的<nuxt-link to="/units/Archer_Units"
                >弓箭手</nuxt-link
              >。即使是強大的大象單位（如<nuxt-link to="/units/War_Elephant"
                >戰象</nuxt-link
              >和<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
              >）在面對大量熱那亞弩手的時候也毫無招架之力，不過在面對<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              ><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
              >時他們對弓箭手的防禦加成會讓熱那亞弩手略為感到頭痛。
            </li>
            <li>
              熱那亞弩手是一個全面的單位，它能對付大多數弓箭手害怕的<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >以及<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >。有一定數量後也可對付一些較弱的<nuxt-link
                to="/units/Archer_Units"
                >弓兵單位</nuxt-link
              >，不過<nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
              >和<nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
              >還是能贏過他們的。騎兵部隊仍然可以在一對一的戰鬥中擊敗熱那亞弩手。<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >對熱那亞弩手仍舊是個威脅，不過他們有足夠的HP可以扛一下傷害。<nuxt-link
                to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >、<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
              >、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
              >以及<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >都是熱那亞弩手需要特別注意的。他們可以與<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >廉價的<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >配合讓敵人變成砲灰。
            </li>
            <li>
              熱那亞弩手對各種艦船也有攻擊加成。事實上，兩名精銳熱那亞弩手就能擊沉一艘完全升級的<nuxt-link
                to="/units/Galleon"
                >重型弩砲戰船</nuxt-link
              >，而擊沉同一艘船則需要十名<nuxt-link to="/units/Arbalester"
                >強弩兵</nuxt-link
              >，這使得熱那亞弩手能夠很好地防禦沿海襲擊。
            </li>
            <li>
              與大多數單位相反，熱那亞弩手在升級時獲得更快的攻擊速率。開火速率從3.05秒/次提升到2.03秒/次，基本上使精銳熱那亞弩手的<nuxt-link
                to="/elements/Rate_of_Fire"
                >射速</nuxt-link
              >快兩倍。所以盡快升級精銳是玩家要考慮的事情，因為會大大增加他們的傷害輸出。
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
              <nuxt-link to="/units/Cavalry_Units">騎兵單位</nuxt-link
              >、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >、<nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵單位</nuxt-link
              >、<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>、<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >、<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>、<nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >、<nuxt-link to="/units/Samurai">日本武士</nuxt-link>。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
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
                src="~assets/fletching.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/bodkin_arrow.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/chemistry.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊範圍</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/fletching.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">絕世好箭</nuxt-link>(+1) <br />
              <img
                class="gg"
                src="~assets/bodkin_arrow.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">強力護腕</nuxt-link>(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">開火速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Thumb_Ring.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>(+18%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/ballistics.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >:對移動目標命中率上升
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/padded_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵護甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/leather_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link
              >(+1/+1) <br />
              <img
                class="gg"
                src="~assets/ring_archer_armor.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ring_Archer_Armor">弓兵鏈甲</nuxt-link
              >(+1/+2) <br />
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
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/faith.png"
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
                src="~assets/conscription.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Conscription">徵兵技術</nuxt-link>(+33%)
            </td>
          </tr>
        </table>

        <h3>剋熱那亞弩手的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對熱那亞弩手的額外傷害，按造殺傷力排列。
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
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                    >和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          以下<nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link
          >可讓以下單位對熱那亞弩手有額外攻擊力
          <div class="n1">
            <nuxt-link to="/civs/Persians">波斯</nuxt-link
            >在團隊加分裡，給予以下單位+2額外攻擊vs<nuxt-link
              to="/units/Archer_Units"
              >射手單位</nuxt-link
            >。
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/KnightIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Knight">騎士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CavalierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/PaladinIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>
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
              >能夠提高熱那亞弩手的生產速度還有加速<nuxt-link
                to="/techs/Conscription"
                >徵兵技術</nuxt-link
              >、<nuxt-link to="/techs/Pavise">巨盾</nuxt-link>的研究時間(快25%)
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >：熱那亞弩手<nuxt-link to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >+2。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >和<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：熱那亞弩手對<nuxt-link
                to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >攻擊+1。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：熱那亞弩手更不容易被招降。
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
            <li>熱那亞弩手訓練需50木材50黃金。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              熱那亞弩手對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝單位</nuxt-link
              >攻擊+5。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>熱那亞弩手訓練需45木材45黃金。</li>
            <li>
              5.7改版後熱那亞弩手現在對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝單位</nuxt-link
              >攻擊+6。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link
              >非精銳降為2.03(與精銳相同)
            </li>
            <li>
              (39284更新)
              熱那亞弩手訓練時間從22秒減至18秒，精銳熱那亞弩手訓練時間從19秒減至14秒。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <li>
            在《<nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >》的mod版本中，熱那亞弩手使用修改過的<nuxt-link
              to="/units/Hand_Cannoneer"
              >火槍兵</nuxt-link
            >模組。然而，在零售版中，他們獲得了新的模組:攜帶著盾牌的弩手。
          </li>
          <li>
            熱那亞弩手的盾牌外觀與<nuxt-link to="/techs/Pavise">巨盾</nuxt-link
            >很相似，巨盾是中世紀歐洲弓箭手使用的一種高凸形盾牌，作為一種移動掩護物，可以在沒有射擊的情況下躲在後面，儘管單位似乎永遠不會在蹲下時與敵人交戰，因此在面對<nuxt-link
              to="/units/Archer_Units"
              >遠程</nuxt-link
            >對手時這個盾牌有點沒用。同樣在現實中，這個巨盾比弓手高很多，而在遊戲中卻要短得多。但是，他們在移動時確實在背上攜帶了這種巨盾，這跟歷史是相符的。
          </li>
          <li>
            熱那亞弩手是少數對<nuxt-link to="/armor/Armor_Class_Cavalry_Archer"
              >馬弓騎兵</nuxt-link
            >有攻擊加成的弓兵單位，其他則有<nuxt-link
              to="/units/Elite_Skirmisher"
              >戰矛兵</nuxt-link
            >、<nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
            >、<nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
            >和<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>。
          </li>
          <li>
            熱那亞弩手對<nuxt-link to="/armor/Armor_Class_Cavalry"
              >騎兵</nuxt-link
            >的加成傷害可能是指教皇在1096年禁止武器的禁令。禁令的頒布是因為一名經過多年軍事訓練的<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >可輕易地被一個幾乎沒有受過訓練或使用過弩的農民殺死。結果，弩被認為是對統治精英的威脅，讓他們遊說羅馬天主教會禁止這些武器。
          </li>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Genoesecrossbowman.png"
                  alt=""
              /></gallery>
              <p><em>一群熱那亞弩手。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Genoese_Crossbowmen.jpg"
                  alt=""
              /></gallery>
              <p>
                <em
                  >一群戰鬥中的熱那亞弩手，請注意他們移動時背上會背著巨盾。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Genoese.png" alt=""
              /></gallery>
              <p><em>Mod版(左)和零售版(右)的熱那亞弩手。</em></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Genoese_Crossbowman_real_life.jpg"
                  alt=""
              /></gallery>
              <p>
                <em
                  >真實世界的熱那亞弩手(左邊的是<nuxt-link to="/techs/Pavise"
                    >巨盾</nuxt-link
                  >)。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  src="~assets/Genoese_&_Condottiero_(1).jpg"
                  alt=""
              /></gallery>
              <p>
                <em
                  >義大利的特殊單位:<nuxt-link to="/units/Condottiero"
                    >傭兵</nuxt-link
                  >(左)和熱那亞弩手(右)。</em
                >
              </p>
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
              <div class="unititle" style="color: #fff">熱那亞弩手</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/New_Genoese_Crossbowman.png"
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
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>
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
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">18/14(精銳)秒</td>
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
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">45</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">45</td>
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
            <td class="unit4">45/50(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">6(遠程)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              >攻擊+5/+7(精銳) <br />對<nuxt-link
                to="/armor/Armor_Class_War_Elephant"
                >戰象</nuxt-link
              >+5/+7(精銳) <br />對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >+4/+6(精銳) <br />對<nuxt-link to="/armor/Armor_Class_Ship"
                >船隻</nuxt-link
              >+4/+5(精銳)
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">命中率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">防禦類別</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Archer">弓兵</nuxt-link>
              <br /><nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.96</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">8</td>
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
                src="~assets/New_Genoese_Crossbowman.png"
                alt=""
              />精銳熱那亞弩手
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/elit_unique_unit.png"
                alt=""
              />900<nuxt-link to="/resource/Food">食物</nuxt-link>750黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">60秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
