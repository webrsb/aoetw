<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>弩砲戰船</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>弩砲戰船</b>或稱<b>加利恩帆船</b>，在<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >時可以在<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >中被訓練，特別的是，它升級前射出的是箭，在升級後弩砲戰船射出的反而比較像<nuxt-link
              to="/units/Siege_Weapons"
              >攻城器</nuxt-link
            >弩砲，但卻不同於
            <nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>、<nuxt-link
              to="/units/Scorpion"
              >弩砲</nuxt-link
            >，弩砲戰船只能攻擊一個單位，攻擊沒有穿透效果。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在海戰中，重要的是快速升級到城堡時代、研發弩砲戰船，因為這大大減低了研發戰船的時間(60秒→36秒)，而且因為戰船是海戰中相對比較弱小的攻擊單位，所以非常建議趕快升級成弩砲戰船。
          </p>
          <p>
            弩砲戰船在任何海戰中都扮演要角的地位，在好的操作之下弩砲戰船、<nuxt-link
              to="/units/Galleon"
              >重型弩砲戰船</nuxt-link
            >通常能有效的處理<nuxt-link to="/units/Demolition_Ship"
              >神風船</nuxt-link
            >以及
            <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
            >。除了<nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link
            >、<nuxt-link to="/building/Castle">城堡</nuxt-link
            >、攻城器具以外，他們還可以用來攻擊敵方海岸邊的<nuxt-link
              to="/building"
              >建築</nuxt-link
            >、敵人。在大多數情況下，弩砲戰船是會與<nuxt-link
              to="/units/Fire_Ship"
              >火戰船</nuxt-link
            >配合，一個打近的一個打遠的，並且對
            <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
            >來說弩砲戰船也是一個很好的保護。
          </p>
          <p>
            弩砲戰船最主要是被<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link
            >克制，但在大部分情況下<nuxt-link to="/units/Demolition_Ship"
              >神風船</nuxt-link
            >也嚴重地克制弩砲戰船。
            <nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>、<nuxt-link
              to="/units/Turtle_Ship"
              >龜甲船</nuxt-link
            >是嚴重威脅，像是<nuxt-link to="/units/Trebuchet"
              >巨型投石機</nuxt-link
            >、 <nuxt-link to="/units/Onager">中型投石車</nuxt-link>、<nuxt-link
              to="/units/Bombard_Cannon"
              >火砲</nuxt-link
            >也會對艦隊造成毀滅性打擊。 <br />另外，<nuxt-link to="/units/Monk"
              >僧侶</nuxt-link
            >也是一大威脅，特別是沒有研發<nuxt-link to="/techs/Faith"
              >忠誠信仰</nuxt-link
            >
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
              >和近戰單位。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>、<nuxt-link
                to="/units/Turtle_Ship"
                >龜甲船</nuxt-link
              >、
              <nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>、<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >、<nuxt-link to="/building/Castle">城堡</nuxt-link
              >、在岸邊的<nuxt-link to="/units/Siege_Weapons"
                >攻城器單位</nuxt-link
              >。
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
                src="~assets/Fletching.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1) <br />
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
              /><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1) <br />
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
              /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1) <br />
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
              >(護甲+0/+1) <br />
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
              /><nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link>(+15%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              抗<nuxt-link to="/elements/Conversion">招降</nuxt-link>能力
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Faith.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link> <br />
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
                src="~assets/Shipwright.jpg"
                alt=""
              /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>(+54%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">造價減少</td>
            <td class="tta4">
              <img
                style="margin: 2px;"
                class="gg"
                src="~assets/Shipwright.jpg"
                alt=""
              /><nuxt-link to="/techs/Shipwright">造船匠</nuxt-link>(-20%)
            </td>
          </tr>
        </table>

        <h3>剋弩砲戰船的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對弩砲戰船的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Bombardtowericon.png"
                      alt=""
                    /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
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
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GalleonAoE2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img src="~assets/LongboatIcon.jpg" alt="" /><nuxt-link
                      to="/units/Longboat"
                      >精銳維京大戰船</nuxt-link
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
                    /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
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
                    <nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Imperial_Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >(後者<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarGalley.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>
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
                    /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Dockicon.png"
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
                    /><nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link>
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
        以下技術可讓以下單位對弩砲戰船有額外攻擊力
        <div class="n1">
          <div class="row">
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
                  /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/Watchtowericon.png"
                    alt=""
                  /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
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
                  /><nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link>
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：弩砲戰船訓練速度提高15%。
            </li>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：弩砲戰船移動速度提高10％。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：研究<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50％。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：在<nuxt-link
                to="/los.php"
                >視野</nuxt-link
              >內的動物不會被轉化
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：有利於弩砲戰船<nuxt-link to="/techs">科技</nuxt-link
              >在城堡/帝王便宜15%/20％
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>：研究<nuxt-link
                to="/techs/Careening"
                >傾側維修術</nuxt-link
              >， <nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link>和<nuxt-link
                to="/techs/Shipwright"
                >造船匠</nuxt-link
              >便宜50％，升級到弩砲戰船便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：弩砲戰船訓練的速度在城堡/帝王提高15%/20%，<nuxt-link
                to="/techs/Careening"
                >傾側維修術</nuxt-link
              >和弩砲戰船的研究速度在城堡/帝王提高15%/20％。研究
              <nuxt-link to="/techs/Dry_Dock">旱碼頭</nuxt-link>的速度快20％。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：弩砲戰船訓練減少15%<nuxt-link to="/resource/Gold"
                >黃金</nuxt-link
              >成本，弩砲戰船+10％HP。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >：弩砲戰船<nuxt-link to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >提高25%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：在<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >升級有利於弩砲戰船的科技不消耗黃金。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：弩砲戰船在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >便宜15%/20%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link
              >：弩砲戰船擁有+50%的視野距離。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Chemistry"
                >化學</nuxt-link
              >、<nuxt-link to="/techs/Ballistics">彈道學</nuxt-link
              >的速度提高80%
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：弩砲戰船對招降的抵抗力更強。
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
            <li>戰船訓練時間為36秒。</li>
            <li>
              <nuxt-link to="/techs/Shipwright">造船匠</nuxt-link
              >減少20%<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
              ><nuxt-link to="/resource/Wood">木材</nuxt-link>成本。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >:弩砲戰船成本便宜20%。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>戰船現在訓練時間為60秒。</li>
            <li>
              1.0版本<nuxt-link to="/techs/Shipwright">造船匠</nuxt-link
              >還可減少35%的船隻訓練時間。
            </li>
            <li>引入<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link
              >：弩砲戰船在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代便宜10%/15%/20%
            </li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              弩砲戰船是遊戲中唯四升級後所有<nuxt-link to="/civs"
                >文明</nuxt-link
              >都可使用的單位之一(其他三個分別是<nuxt-link
                to="/units/Man-at-Arms"
                >裝甲步兵</nuxt-link
              >、
              <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >和<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>)。
            </li>
            <li>
              弩砲戰船會對作弊單位中的<nuxt-link to="/units/hero/Saboteur"
                >破壞者</nuxt-link
              >有額外攻擊加成(從<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
              >資料片開始)，因為該單位屬於船隻單位。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <p>
              弩砲戰船是一艘更大更完善的戰鬥艦。它擁有更多的<nuxt-link
                to="/units/Naval_Vessels"
                >海軍</nuxt-link
              >隊員和<nuxt-link to="/units/Archer">弓箭手</nuxt-link
              >。必要時，也可透過將戰鬥塔放置在交易船的船尾和船頭上來變成弩砲戰船。
              這些設置可以在敵船靠近的時候提供弓箭手更好的保護和高度優勢。
            </p>
          </div>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Galleyline.png" alt=""
              /></gallery>
              <p><em>戰船系列(戰船在中間)。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/WarGalley_group.jpg" alt=""
              /></gallery>
              <p><em>一群弩砲戰船。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/WarGalleyHD.jpg" alt=""
              /></gallery>
              <p>
                <em
                  >各種弩砲戰船(世紀帝國和<nuxt-link to="/games/aoc"
                    >征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/WarGalleyDLC.jpg" alt=""
              /></gallery>
              <p><em>各種弩砲戰船(HD擴充資料片)。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                弩砲戰船
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/WarGalley.jpg" width="45" alt="" />
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
            <td class="unit4">所有文明</td>
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
            <td class="unit4">36秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">木</td>
            <td class="unit4">90</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">30</td>
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
            <td class="unit4">135</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">7(遠攻)</td>
          </tr>
          <tr>
            <td class="unit3">傷害加成</td>
            <td class="unit4">
              +9對<nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>
              <br />+7對<nuxt-link to="/armor/Armor_Class_Building"
                >建築</nuxt-link
              >
              <br />+4對<nuxt-link to="/armor/Armor_Class_Ram"
                >衝撞車</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">射速</nuxt-link>
            </td>
            <td class="unit4">3.05秒/次</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Frame_delay">開火間隔</nuxt-link>
            </td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">攻擊距離</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3">準確率</td>
            <td class="unit4">100%</td>
          </tr>
          <tr>
            <td class="unit3">投射物速度</td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">6</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Ship">船</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">1.43</td>
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
            <td class="unit3">從升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/Galley.jpg" alt="" /><nuxt-link
                to="/units/Galley"
                >戰船</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img class="gg" src="~assets/GalleonAoE2.jpg" alt="" /><nuxt-link
                to="/units/Galleon"
                >重型弩砲戰船</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Galleon-research.jpg"
                alt=""
              />400<nuxt-link to="/resource/Food">食物</nuxt-link>315黃金
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">65秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由莊晉瑋協助編輯</div>
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
