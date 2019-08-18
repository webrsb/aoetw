<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>源氏</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            源氏，本名源賴朝，幼時稱鬼武者，1147年四月八日出生於<nuxt-link
              to="/civs/Japanese"
              >日本</nuxt-link
            >尾張國，14歲被放逐到伊豆，後接到討伐平家的命令，崛起成為一方勢力，在鎌倉拓展實權。源平合戰爆發後，作為源氏代表與平家作戰並取勝，建立幕府。因殺害功臣，在<nuxt-link
              to="/civs/Japanese"
              >日本人</nuxt-link
            >眼裡是反派。1199年身亡，享年52歲。對日本歷史影響重大，開創了幕府制度，架空天皇權力，可以說是開啟日本中世紀時代的人。
          </p>
        </div>
        <h3>介紹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            源氏是一位<nuxt-link to="/units/Infantry_Units">步兵英雄</nuxt-link
            >，在<nuxt-link to="/batt/Kurikara_1183">礪波山（1183）</nuxt-link
            >中做為援軍登場。形象跟<nuxt-link to="/units/hero/Nobunaga"
              >織田信長</nuxt-link
            >一樣是一名<nuxt-link to="/units/Samurai">日本武士</nuxt-link
            >，他擁有自己的特殊頭像，而且完全能夠擊敗正常的日本武士。
          </p>
          <ul>
            <li>
              源氏在所有出現的<nuxt-link to="/batt">戰役</nuxt-link
              >中必須生還，否則遊戲會失敗。
            </li>
            <li>
              作為<nuxt-link to="/units/hero">英雄</nuxt-link
              >單位，源氏不能被<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >，且會自己回復<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >，當然，在地圖編輯器裡面可以找到他。
            </li>
            <li>
              源氏歸類為<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >，所有步兵的加成對她都有效果，包括日本的步兵<nuxt-link
                to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >加成。
            </li>
            <li>
              雖然是英雄，但是作為<nuxt-link to="/armor/Armor_Class_Infantry"
                >步兵單位</nuxt-link
              >，害怕<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>。
            </li>
          </ul>
        </div>
        <h3>出場戰役</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td>戰役名稱</td>
              <td>可否使用</td>
              <td>所屬陣營與顏色</td>
            </tr>
            <tr>
              <td class="tta1">礪波山（1183）</td>
              <td class="tta2">
                <span
                  style="color: green;"
                  class="glyphicon glyphicon-ok okc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                <div class="p1" style="height: 23px"></div>
                玩家
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                源氏
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Minamotoicon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="">步兵<br />英雄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">統計</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">8(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Unique_Unit"
                >特殊單位</nuxt-link
              >+5<br />對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >+2
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">2.03</td>
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
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link
              ><br />特殊單位
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的源氏
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/源赖朝"
                    target="_blank"
                    >源氏</a
                  ></strong
                ></i
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
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
            <td class="tta4">建築物，特殊單位，大部分近戰單位。</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >、火槍兵和<nuxt-link to="/units/Knight">騎士</nuxt-link>。
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
              <p>
                <img src="~assets/Forging.jpg" width="30" alt="" /><nuxt-link
                  to="/techs/Forging"
                  >鍛造</nuxt-link
                >(+1)
              </p>
              <p>
                <img
                  src="~assets/Ironcasting.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Iron_Casting">鑄造</nuxt-link>(+1)
              </p>
              <p>
                <img
                  src="~assets/Blastfurnace.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
              </p>
              <p>
                <img src="~assets/Arson.jpg" width="30" alt="" /><nuxt-link
                  to="/techs/Arson"
                  >縱火</nuxt-link
                >(步兵+2攻擊vs<nuxt-link to="/armor/Armor_Class_Building"
                  >建築</nuxt-link
                >)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <p>
                <img
                  src="~assets/Scalemailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  src="~assets/Chainmailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  src="~assets/Platemailarmor.jpg"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Plate_Mail_Armor">步兵板甲</nuxt-link
                >(+1/+2)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <p>
                <img src="~assets/Squires.jpg" width="30" alt="" /><nuxt-link
                  to="/techs/Squires"
                  >護衛</nuxt-link
                >(+10%)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">視野</td>
            <td class="tta4">
              <p>
                <img src="~assets/Tracking.jpg" width="30" alt="" /><nuxt-link
                  to="/techs/Tracking"
                  >追蹤技術</nuxt-link
                >(+2)
              </p>
            </td>
          </tr>
        </table>

        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>源氏是一名日本武士，死亡的動畫是切腹自盡。</li>
            <li>
              源賴朝在歷史上一直都不是上戰場正面硬肛的類型，從他的數值可見一斑。
            </li>
            <li>
              許多武士英雄都是從他編輯而來，像是礪波山（1183）的幾位平家將軍。
            </li>
            <li>
              一個是開創中世紀，一個是結束中世紀，源氏不像織田信長，他的攻擊速度只是正常的日本武士。
            </li>
            <li>
              日本許多戲劇、電影、文學作品與遊戲等等，都偏向把源氏描述成無恥的渾蛋，主要原因是因為他殺了幫他打天下的最大功臣：源義經。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            源家跟平家的爭端從源賴朝父親源義朝就已經開始了。1159年，源義朝因為其在朝廷官位不如平清盛，憤而起兵造反卻失敗，導致源賴朝被牽連流放至伊豆半島、平家徹底掌控朝廷，史稱平治之亂。但是義朝在東國建立的源氏勢力卻是後來賴朝崛起的根本。
          </p>
          <p>
            1180年對源賴朝是非常忙碌的一年，4月接到以仁王討伐平家的指令，但是以仁王自己先戰死。8月於伊豆舉兵討伐山木兼隆，過幾天卻在石橋山之戰被平家大敗逃往安房國，9月多就召集了大量的軍隊，並在10月的富士川之戰中逼退平家。11月後由於源義經的加入，如虎添翼，大敗常陸國佐竹秀義。
          </p>
          <p>
            1181年平家首領平清盛去世，平家開始不穩，源賴朝趁這個機會，在1182年發動礪波山之戰，與堂弟木曾義仲擊敗平家，義仲更於隔年進入京都，但是卻跟賴朝反目成仇。
          </p>
          <p>
            1183年，賴朝討伐其叔父源義廣，並於隔年在宇治川之戰中討伐木曾義仲，並且擊敗了想要漁翁得利的平家反抗勢力。1185年，於屋島之戰與壇之浦之戰消滅平家，安德天皇跳海而死。
          </p>
          <p>
            之後的源賴朝致力於清掃源家勢力，源家各勢力因為在源平合戰中消耗過大而一一被擊破，其最大功臣，末弟源義經也被殺死。
          </p>
          <p>1189年，源賴朝清除奧州的藤原家勢力，統一全國。</p>
          <p>1192年出任征夷大將軍，創立鎌倉幕府，開創日本中世紀。</p>
          <p>1199年身亡，死因有多種說法，享年52歲。</p>
          <p>
            綜觀其一生，我們會發現他大多數時間在對付同為源氏的族人，而不是對付平家。
          </p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allhero',
  components: {}
}
</script>
<style></style>
