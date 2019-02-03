<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>維京大戰船</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            維京大戰船是<nuxt-link to="/civs/Vikings">維京</nuxt-link
            >的第二個特殊單位，在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的
            <nuxt-link to="/building/Dock">碼頭</nuxt-link
            >可以訓練。它是一艘會射出多重箭矢的戰船。
          </p>
          <p>
            維京大戰船可在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >升級為精銳維京大戰船。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            維京大戰船與<nuxt-link to="/units/Chu_Ko_Nu">中國連弩兵</nuxt-link
            >一樣會在一次攻擊中射出多重箭矢，而且只有第一發箭能有弓兵科技的加成而且是完整傷害，其他箭都只有1的遠程傷害。維京大戰船無論精銳與否每次攻擊都是射四支箭。與
            <nuxt-link to="/units/Chu_Ko_Nu">中國連弩兵</nuxt-link
            >不同的維京大戰船是在同一時間發射所有箭，而不是快速連續發射。由於世界帝國II中護甲和傷害的計算後面的三發箭矢會對單位造成額外+3傷害。維京大戰船可以戰勝
            <nuxt-link to="/War_units/Galley">弩炮戰船</nuxt-link
            >，精銳維京大戰船可以戰勝<nuxt-link to="/units/Galleon"
              >重型弩砲戰船</nuxt-link
            >(險勝)。維京大戰船建造速度比大多數的戰艦快，而複數數量的維京大戰船可以有效對付敵方艦隊。
          </p>
          <p>
            維京大戰船很怕岸邊的<nuxt-link to="/units/Mangonel"
              >投石車</nuxt-link
            >和<nuxt-link to="/units/Bombard_Cannon">火炮</nuxt-link
            >，所以他們最好保持距離或是用速度閃過攻擊。
            <nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link
            >的高護甲對維京大戰船也是個麻煩，但如果有細微的操作而且龜甲船的數量不多，維京大戰船還是能應付他們。<nuxt-link
              to="/units/Fire_Ship"
              >火戰船</nuxt-link
            >是反制維京大戰船的首選。
          </p>
          <p>
            複數數量的維京大戰船非常適合岸邊轟炸，用箭雨把敵方插成蜂窩。維京大戰船也適合護衛如運輸船和火炮戰船完成他們的任務。由於維京人缺乏<nuxt-link
              to="/units/Fire_Ship"
              >火戰船</nuxt-link
            >，他們的海軍應該圍繞在維京大戰船上，因為維京大戰船訓練速度快、移動快、搭配其他船艦，就可有效應付海上的任何情況。
          </p>
        </div>
        <h3>與重型弩炮戰船的比較</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>維京大戰船移動得比重型弩炮戰船快。</li>
            <li>
              維京大戰船開火速率比重型弩炮戰船慢，不過單次攻擊的投射物比較多。
            </li>
            <li>
              範圍、攻擊、視野跟護甲兩者都一樣，不過重型弩炮戰船比維京大戰船多5HP。
            </li>
            <li>
              精銳維京大戰船的造價比重型弩炮戰船貴，即便是非精銳維京大戰船也比不上。另外升級精銳維京大戰船的成本也比升級成重型弩炮戰船貴。
            </li>
            <li>
              精銳維京大戰船跟重型弩炮戰船單挑時精銳維京大戰船會以些微差距獲勝。
            </li>
            <li>
              維京大戰船在破壞建築跟攻擊陸上單位的命中率上比重型弩炮戰船好。
            </li>
            <li>
              整體來說精銳維京大戰船比重型弩炮戰船表現更加(特別是速度)，不過考慮到訓練成本時他們的價值其實大致相同。
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
              <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
              >、<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>、
              <nuxt-link to="/building">建築物</nuxt-link
              >、在岸邊和淺灘的陸地單位、<nuxt-link to="/units/Cannon_Galleon"
                >火炮戰船</nuxt-link
              >、<nuxt-link to="/units/Galleon">重型弩炮戰船</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>、<nuxt-link
                to="/units/Turtle_Ship"
                >龜甲船</nuxt-link
              >、<nuxt-link to="/units/Samurai">日本武士</nuxt-link
              >(在淺灘處)；箭塔、
              <nuxt-link to="/building/Castle">城堡</nuxt-link
              >、在岸邊的遠距攻城單位。
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
                src="~assets/Fletching.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bodkinarrow.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Chemistry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">射程</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Fletching.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bodkinarrow.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)
              <br />
              <img
                class="gg"
                src="~assets/Bracer.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">命中率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Ballistics.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >:較易擊中移動目標
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">護甲</td>
            <td class="tta4">
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Careening.jpg"
                alt=""
              /><nuxt-link to="/techs/Careening">傾側維修術</nuxt-link
              >(護甲+0/+1)
              <br />
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
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
                src="~assets/Drydock.jpg"
                alt=""
              /><nuxt-link to="/Dry_building/Dock">旱碼頭</nuxt-link>(+15%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">抗招降能力</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Faith.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
              <br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
            </td>
          </tr>
        </table>

        <h3>剋維京大戰船的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對維京大戰船的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Bombardtowericon.png"
                      alt=""
                    /><nuxt-link to="/building/Bombard_Tower">火炮塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+17攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+16攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
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
                      src="~assets/GalleonAoE2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Galleon">重型弩炮戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Watchtowericon.png"
                      alt=""
                    /><nuxt-link to="/units/Keep">大型箭塔</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SpearmanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/HeavyCamelIcon.jpg" alt="" />
                    <nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/Imperial units/Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >(後者<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarGalley.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/War_units/Galley">弩炮戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Watchtowericon.png"
                      alt=""
                    /><nuxt-link to="/units/Guard_Tower">防禦箭塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Dockicon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/building/Dock">海港</nuxt-link>(<nuxt-link
                      to="/civs/Malay"
                      >馬來</nuxt-link
                    >限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Galley.jpg" alt="" /><nuxt-link
                      to="/units/Galley"
                      >戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/Ballista_unitsanimal/Elephant"
                      >弩炮象</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/Ballista_unitsanimal/Elephant"
                      >精銳弩炮象</nuxt-link
                    >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Watchtowericon.png"
                      alt=""
                    /><nuxt-link to="/units/Watch_Tower">瞭望箭塔</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon2.jpg"
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
                      src="~assets/CamelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
                  </li>
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
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/FastFireShipIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Fast_Fire_Ship"
                      >快速火戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FireGalleyIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/FireShipIcon.jpg"
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
                      src="~assets/EliteEagleWarriorIcon.jpg"
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
                      src="~assets/EagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        以下技術可讓以下單位對維京大戰船有額外攻擊力
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <img src="~assets/Heatedshot.png" width="22" alt="" /><nuxt-link
                to="/techs/Heated_Shot"
                >預熱射擊</nuxt-link
              >
              <div style="margin:12px 0px;"><strong>+13攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    alt=""
                  /><nuxt-link to="/units/Keep">大型箭塔</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    alt=""
                  /><nuxt-link to="/units/Guard_Tower">防禦箭塔</nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    alt=""
                  /><nuxt-link to="/units/Watch_Tower">瞭望箭塔</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Castleicon.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/building/Castle">城堡</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/Dockicon.png"
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
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：維京大戰船訓練的費用在城堡/帝王減少15%/20%。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >、<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >的速度提高80%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：維京大戰船對招降的抵抗力更強。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">世紀帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>維京大戰船訓練時間為36秒，成本為100木50金。</li>
            <li>訓練維京大戰船需要先建造城堡。</li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:維京大戰船成本便宜20%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>維京大戰船現在訓練時間為25秒。</li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:維京大戰船現在在城堡/帝王成本分別便宜15%/20%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>維京大戰船現在的成本為90木50金。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>訓練維京大戰船不再需要先建造城堡。</li>
            <li>維京大戰船現在的成本為100木50金。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <p>
              9至11世紀的維京海盜特別恐怖，因為他們可能沿著海岸甚至上游的任何地方發動攻擊，他們有這種能力得益於他們的維京大戰船，這些船很長，窄，吃水很淺，但令人驚訝地是非常適合航行，他們用槳和一個方形帆作為推進力，維京大戰船可以進入很淺的水域並靠岸，只有高懸崖峭壁或岩石的海岸對當時的船員來說才是安全的。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle">
                <nuxt-link to="">維京大戰船</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/LongboatIcon.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">單位介紹</nuxt-link></div>
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
              <img class="gg" src="~assets/Dockicon.png" alt="" /><nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">25秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
            <td class="unit4">84木42金</td>
          </tr>
          <tr>
            <td class="unit3">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
            <td class="unit4">80木40金</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">數據</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">130/160(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">7/8(精銳)(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">傷害加成</td>
            <td class="unit4">
              +9/+11(精銳)對<nuxt-link to="/armor/Armor_Class_Ship"
                >船</nuxt-link
              >
              <br />+7/+8(精銳)對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >
              <br />+4對<nuxt-link to="/armor/Armor_Class_Ram"
                >衝撞車</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">射速</td>
            <td class="unit4">3.34秒/次</td>
          </tr>
          <tr>
            <td class="unit3">開火間隔</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">攻擊距離</td>
            <td class="unit4">6/7(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">準確率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">發射速度</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">6/8(精銳)</td>
          </tr>
          <tr>
            <td class="unit3">防禦類型</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link> <br />
              <nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.54</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">8/9(精銳)</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;;">
              <div class="unititle2" style="color: #fff">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/LongboatIcon.jpg"
                alt=""
              />精銳維京大戰船
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Elite-unique-research.jpg"
                alt=""
              />750食物 475黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">60秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <nuxt-link to="/img/Longboat.png"
                ><img class="imgn hg" src="~assets/Longboat.png" alt=""
              /></nuxt-link>
              <p><em>一群維京大戰船。</em></p>
            </div>
            <div class="col-md-4">
              <nuxt-link to="/img/915016_20030824_screen013.jpg"
                ><img
                  class="imgn hg"
                  src="~assets/915016_20030824_screen013.jpg"
                  alt=""
              /></nuxt-link>
              <p><em>維京大戰船。</em></p>
            </div>
            <div class="col-md-4">
              <nuxt-link to="/img/Vikings_Longboat.jpg"
                ><img class="imgn hg" src="~assets/Vikings_Longboat.jpg" alt=""
              /></nuxt-link>
              <p><em>維京大戰船的畫。</em></p>
            </div>
            <div class="col-md-12">
              <div class="col-md-4">
                <nuxt-link to="/img/The_long_boat_Wallpaper_rrpb2.jpg"
                  ><img
                    class="imgn hg"
                    src="~assets/The_long_boat_Wallpaper_rrpb2.jpg"
                    alt=""
                /></nuxt-link>
                <p><em>維京大戰船的畫。</em></p>
              </div>
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
