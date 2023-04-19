<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>火艨艟</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>火艨艟</b>在<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >時可以在<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >中被訓練，當把<nuxt-link to="/units/Galley">戰船</nuxt-link
            >升級成<nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
            >的時候，火艨艟也會自動升級成<nuxt-link to="/units/Fire_Ship"
              >火戰船</nuxt-link
            >。
          </p>
          <p>
            火艨艟、<nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link
            >都是在《<nuxt-link to="/games/ak">世紀帝國II：非洲王國</nuxt-link
            >》資料片的時候一起推出的，使封建時代海戰才有更多的可看性，而不是只能看到一堆<nuxt-link
              to="/units/Naval_Vessels"
              >戰船</nuxt-link
            >的海戰。
          </p>
          <p>
            而<nuxt-link to="/civs/Vikings">維京</nuxt-link>成了全<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >中唯一不能出火艨艟的國家，這也使得在<nuxt-link to="/games/aoc"
              >征服者入侵</nuxt-link
            >時代的海戰強國，搖身一變成海戰初期弱勢文明，在<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >遇到敵方的火艨艟時，將顯得相當無助。
          </p>
          <p>
            <strong>不可生產文明：</strong
            ><nuxt-link to="/civs/Vikings">維京</nuxt-link>
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            因為火艨艟有著很高的攻速，所以在前期能夠對<nuxt-link
              to="/units/Fishing_Ship"
              >漁船</nuxt-link
            >、碼頭造成嚴重的威脅，所以在早期的比賽中使用火艨艟能夠很有效騷擾對方的海上單位。
          </p>
          <p>
            當火艨艟與戰船一對一的時候，火艨艟能夠輕鬆地打贏<nuxt-link
              to="/units/Galley"
              >戰船</nuxt-link
            >。但是，如果是在大規模的交戰中，由於因為戰船的高射程，反而是戰船有著較大的優勢。
          </p>
          <p>
            火艨艟也很容易受到<nuxt-link to="/units/Demolition_Raft"
              >自爆筏</nuxt-link
            >的威脅，因為火艨艟的射程很近，所以無法在爆炸前打沉<nuxt-link
              to="/units/Demolition_Raft"
              >自爆筏</nuxt-link
            >。如果一艘<nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link
            >能夠打沉兩艘以上的火艨艟就是非常划算了！
          </p>
          <p>
            值得一提的是，<nuxt-link to="/units/Demolition_Raft"
              >自爆筏</nuxt-link
            >沒辦法一擊必殺火艨艟，需要搭配其他<nuxt-link
              to="/units/Naval_Vessels"
              >船隻</nuxt-link
            >來解決殘血的火艨艟。
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
              <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
              >、<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
              >、在岸邊的<nuxt-link to="/building">建築物</nuxt-link
              >和近戰單位、<nuxt-link to="/units/Galley">戰船</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link
              >、<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >、在岸邊的範圍單位。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">射程</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  style="margin: 2px;"
                  width="22"
                  src="~assets/unique_tech.png"
                  alt=""
                /><nuxt-link to="/techs/Greek_Fire">希臘之火</nuxt-link
                >(+1，<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">護甲</td>
            <td class="tta4">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/careening.png"
                alt=""
              /><nuxt-link to="/techs/Careening">航海技術</nuxt-link>(護甲+0/+1)
              <br />
              <img
                class="gg"
                src="~assets/unique_tech.png"
                style="margin: 2px;"
                alt=""
              /><nuxt-link to="/techs/Carrack">克拉克帆船</nuxt-link
              >(護甲+1/+1，<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >限定)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/dry_dock.png"
                alt=""
              /><nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>(+15%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              抗<nuxt-link to="/elements/Conversion">招降</nuxt-link>能力
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/faith.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link><br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">訓練速度</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/shipwright.png"
                alt=""
              /><nuxt-link to="/techs/Shipwright">造船員</nuxt-link>(+54%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">造價減少</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/shipwright.png"
                alt=""
              /><nuxt-link to="/techs/Shipwright">造船員</nuxt-link>(-20%)
            </td>
          </tr>
        </table>

        <h3>剋火艨艟的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對火艨艟的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/bombard_tower.png"
                      alt=""
                    /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+17攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+16攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GalleonAoE2.png"
                      alt=""
                    /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Keep"
                      >大型箭塔</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
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
                    >(後者<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarGalley.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Guard_Tower"
                      >防禦箭塔</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HarborIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/building/Harbor">海港</nuxt-link
                    >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Galley.png" alt="" /><nuxt-link
                      to="/units/Galley"
                      >戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant"
                      >精銳弩砲象</nuxt-link
                    >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                      to="/building/Watch_Tower"
                      >瞭望箭塔</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
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
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><nuxt-link to="/units/Genoese_Crossbowman"
                      >精銳熱那亞弩手</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/FastFireShipIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Fast_Fire_Ship"
                      >重型火戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FireGalleyIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Fire_Galley">火艨艟</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/FireShipIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
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
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
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
          </div>
        </div>
        以下科技可讓以下單位對火艨艟有額外<nuxt-link to="/elements/Attack"
          >攻擊力</nuxt-link
        >
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <img src="~assets/heated_shot.png" width="22" alt="" /><nuxt-link
                to="/techs/Heated_Shot"
                >火箭</nuxt-link
              >
              <div style="margin:12px 0px;"><strong>+13攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Keep"
                    >大型箭塔</nuxt-link
                  >
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Guard_Tower"
                    >防禦箭塔</nuxt-link
                  >
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
              <ul>
                <li>
                  <img class="gg" src="~assets/tower.png" alt="" /><nuxt-link
                    to="/building/Watch_Tower"
                    >瞭望箭塔</nuxt-link
                  >
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/castle.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/building/Castle">城堡</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/HarborIcon.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/building/Harbor">海港</nuxt-link>(<nuxt-link
                    to="/civs/Malay"
                    >馬來</nuxt-link
                  >限定)
                </li>
              </ul>
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：火艨艟訓練速度提高15%。
            </li>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：火艨艟移動速度提高10％。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研究<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50％。
            </li>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：火艨艟開火速率快25%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：在<nuxt-link
                to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >內的動物不會被轉化
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：有利於火艨艟<nuxt-link to="/techs">科技</nuxt-link>在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >便宜15%/20％
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>：研究<nuxt-link
                to="/techs/Careening"
                >航海技術</nuxt-link
              >，<nuxt-link to="/techs/Dry_Dock">船塢</nuxt-link>和<nuxt-link
                to="/techs/Shipwright"
                >造船員</nuxt-link
              >便宜50％，升級到<nuxt-link to="/units/War_Galley"
                >弩砲戰船</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：火艨艟在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >訓練的速度提高10/15/20%<nuxt-link to="/techs/Careening"
                >航海技術</nuxt-link
              >和升級到<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
              >的研發速度在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代提高15%/20％。研究<nuxt-link to="/techs/Dry_Dock"
                >船塢</nuxt-link
              >的速度快20％。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：火艨艟訓練減少15%<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >成本，火艨艟+10％HP。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Ballistics"
                >彈道學</nuxt-link
              >的速度提高80%
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：火艨艟對招降的抵抗力更強。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>火艨艟有5的<nuxt-link to="/armor">遠防</nuxt-link>。</li>
            <li>火艨艟有100的HP。</li>
            <li>
              4.8版本後火艨艟有95的HP，並且會受到<nuxt-link
                to="/techs/Ballistics"
                >彈道學</nuxt-link
              >的影響。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>火艨艟有4的遠防。</li>
            <li>5.4版本後火艨艟再次有100的HP。</li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Fireline.png" alt=""
              /></gallery>
              <p>
                <em
                  ><nuxt-link to="/units/Fire_Ship">火戰船系列</nuxt-link
                  >(火艨艟在最左邊)。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Firegalley_(1).jpg" alt=""
              /></gallery>
              <p><em>一群火艨艟。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Firegalley.jpg" alt=""
              /></gallery>
              <p>
                <em
                  >各種火艨艟(世紀帝國II和<nuxt-link to="/games/aoc"
                    >征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">火艨艟</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/FireGalleyIcon.png"
                  class="img-fluid"
                  alt=""
                />
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
              <nuxt-link to="/units/Naval_Vessels">船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              除了<nuxt-link to="/civs/Vikings">維京</nuxt-link>以外的所有文明
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img class="gg" src="~assets/dock.png" alt="" /><nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">60秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">75</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">45</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">1(遠攻) <br />0(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">傷害加成</td>
            <td class="unit4">
              +3對<nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link
              ><br />+1對<nuxt-link to="/armor/Armor_Class_Turtle_Ship"
                >龜甲船</nuxt-link
              >
              <br />+1對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">0.25秒/次</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">射程</td>
            <td class="unit4">2.49</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>(+6)
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.3</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/FireShipIcon.png" alt="" /><nuxt-link
                to="/units/Fire_Ship"
                >火戰船</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/war_galley.png"
                alt=""
              />230<nuxt-link to="/resource/Food">食物</nuxt-link> 100黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">50秒</td>
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
