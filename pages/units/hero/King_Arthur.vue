<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>亞瑟王</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            亞瑟王，全名亞瑟·潘德拉貢，英格蘭傳說中的國王，大多數有關亞瑟王的事蹟由傳說而來，歷史真實性存有爭議。毫無疑問的，他是最廣為人知的王之一，諸多傳說包括石中劍、圓桌<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >、湖中聖女的故事都是以他的傳說為本。亞瑟王的<nuxt-link
              to="/techs/Chivalry"
              >騎士精神</nuxt-link
            >與不屈服於外侮的毅力深深影響了中世紀的騎士文學，包括近代也有許多文學作品被他影響。
          </p>
        </div>
        <h3>介紹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            亞瑟王是一名<nuxt-link to="/units/Infantry_Units"
              >步兵英雄</nuxt-link
            >，遊戲中以<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
            >的形象出現。作為中世紀鼎鼎大名的騎士王，卻沒有在任何<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >中出場，所以只能在遊戲編輯器裡面找到他。
          </p>
          <ul>
            <li>
              作為<nuxt-link to="/units/hero">英雄</nuxt-link
              >單位，亞瑟王不能被<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >，且會自己回復<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >。
            </li>
            <li>
              亞瑟王被歸類為<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >，所有步兵的加成對他都有效果，比方塞爾特的移動速度加成。
            </li>
            <li>
              雖然是英雄，但是作為步兵單位，亞瑟王也害怕<nuxt-link
                to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >與弩砲。
            </li>
          </ul>
        </div>
        <h3>出場戰役</h3>
        <div class="hrn1"></div>
        <div class="n1"><p>無</p></div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        這裡只討論<nuxt-link to="/civs/Britons">不列顛</nuxt-link
        >(亞瑟王出身於此)
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/building">建築物</nuxt-link>，<nuxt-link
                to="/units/Unique_Unit"
                >特殊單位</nuxt-link
              >，大部分近戰單位。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >、火槍兵和騎士。
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
                <img src="~assets/forging.png" width="30" alt="" /><nuxt-link
                  to="/techs/Forging"
                  >鍛造技術</nuxt-link
                >(+1)
              </p>
              <p>
                <img
                  src="~assets/iron_casting.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Iron_Casting">鑄造技術</nuxt-link>(+1)
              </p>
              <p>
                <img
                  src="~assets/blast_furnace.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>(+2)
              </p>
              <p>
                <img src="~assets/Arson.png" width="30" alt="" /><nuxt-link
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
                  src="~assets/scale_mail_armor.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  src="~assets/chain_mail_armor.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鏈甲</nuxt-link
                >(+1/+1)
              </p>
              <p>
                <img
                  src="~assets/plate_mail_armor.png"
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
                <img src="~assets/squires.png" width="30" alt="" /><nuxt-link
                  to="/techs/Squires"
                  >護衛技術</nuxt-link
                >(+10%)
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="tta4">
              <p>
                <img src="~assets/TrackingDE.png" width="30" alt="" /><nuxt-link
                  to="/techs/Tracking"
                  >追蹤技術</nuxt-link
                >(+2)
              </p>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                亞瑟王
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/ChampionIcon.png" width="80" alt="" />
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
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link><br />英雄
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
            <td class="unit4">270</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">13(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link>+3
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link>
            </td>
            <td class="unit4">2.03</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>

          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵</nuxt-link>(+2)
            </td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">5</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的亞瑟王
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/亚瑟王"
                    target="_blank"
                    >亞瑟王</a
                  ></strong
                ></i
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              遊戲中只有兩個英雄用劍兵勇士為頭像：亞瑟王與<nuxt-link
                to="/units/hero/Siegfried"
                >齊格非</nuxt-link
              >。
            </li>
            <li>亞瑟王可以說是升級版的劍兵勇士，有更高的雙防與生命值</li>
            <li>以亞瑟王的知名度來說，沒有自己的頭像是很奇怪的。</li>
            <li>圓桌騎士裡面，只有高文擁有專屬頭像。</li>
            <li>
              歷史上的亞瑟王應該是以騎兵為軍隊主力，然而遊戲內卻是個劍兵勇士，或許跟他拔出石中劍的傳說有關。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            亞瑟王可能是5世紀末到6世紀初的人物，歷史學家至今仍然在討論他的真實性，以現有資料來說，他最有可能是在羅馬帝國滅亡後，率領<nuxt-link
              to="/civs/Britons"
              >不列顛人</nuxt-link
            >抵抗盎格魯撒克遜人的領袖。
          </p>
          <p>
            亞瑟王的故事流傳在整個西歐，石中劍無疑是最有名的一個。述說亞瑟作為國王的私生子出生，被宮廷魔法師梅林撫養成人。後來先王駕崩，<nuxt-link
              to="/civs/Britons"
              >英國</nuxt-link
            >動盪不安，圓桌騎士求問梅林，梅林告訴騎士誰能拔出石中劍，誰就注定為王。亞瑟當時並不知道石中劍的傳聞，卻無意間拔出了這把無數騎士都無法拔出的神劍。
          </p>
          <p>
            湖中聖女：亞瑟成為王後，在一次違反騎士道的對決中折斷了石中劍，亞瑟抑鬱寡歡，散步到湖邊，突然發現閃閃發光的湖面上出現一隻手臂擎著一柄寶劍緩緩升起，這便是傳說中的湖中妖女賜給亞瑟王的王者之劍，使得亞瑟王又恢復往常的神勇。傳說中，只要劍鞘還在，亞瑟王就不會受傷，然而劍鞘最後被摩根勒菲(亞瑟的姊姊)用計騙去。
          </p>
          <p>
            圓桌：亞瑟王神勇無比，以卡美洛為王都，率領圓桌騎士團征戰歐洲大陸，而圓桌的本意為：所有上了圓桌的騎士無貴賤之分，皆有權共商國事，就連亞瑟王在圓桌上也只是一名騎士。蘇格蘭王為了答謝亞瑟王幫其抵抗愛爾蘭，將女兒桂妮薇爾許配給亞瑟。然而桂妮薇爾愛上了亞瑟的騎士蘭斯洛特，並且多次幽會，給亞瑟帶了個綠帽。東窗事發後，蘭斯洛特被迫出走<nuxt-link
              to="/civs/Franks"
              >法國</nuxt-link
            >，亞瑟率軍追擊。
          </p>
          <p>
            卡姆蘭戰役(劍欄之戰)：537年，亞瑟姪子<nuxt-link
              to="/units/hero/Mordred"
              >莫德雷德</nuxt-link
            >叛變，並占領卡美洛，亞瑟聞訊由法國趕回不列顛，雙方在卡姆蘭決戰，亞瑟殺死莫德雷德，卻也傷重。
          </p>
          <p>
            死亡：亞瑟之死有數種說法，其一是亞瑟要求貝德維爾(唯一生還的圓桌騎士)把王者之劍投入湖中，貝德維爾不忍，兩次欺騙亞瑟並被識破，第三次將劍投入湖中，湖中聖女伸出手來收回聖劍，亞瑟王也安靜地離開人世。其二是亞瑟王在卡姆蘭戰役之後身受重傷，隨後出現三位神秘的婦人把亞瑟王扶上一艘黑色的小船，一同向阿瓦隆(妖精鄉)駛去，從此亞瑟王便永遠地消失在人世間。
          </p>
          <p>
            亞瑟王手底下有許多騎士：在日光之下永不戰敗的高文、為愛情背叛主君的蘭斯洛特、叛逆之子莫德雷德、最後陪伴王的貝德維爾、找到聖杯卻無法取得的<nuxt-link
              to="/units/hero/Tristan"
              >崔斯坦</nuxt-link
            >以及獲得聖杯的加拉哈德。
          </p>
          <p>
            尋找聖杯、摩根勒菲與綠騎士團、梅林與紅龍等等膾炙人口的故事；或是妖精鄉、斷鋼聖劍、魔法師的經典形象這種"概念"皆源自亞瑟王傳說。
          </p>
        </div>
        <h3>其他作品內的亞瑟王形象</h3>
        <div class="hrn1"></div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://zh.moegirl.org/阿尔托莉雅·潘德拉贡"
                  target="_blank"
                  >Fate系列</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img height="124px;" src="~assets/Saber.png" alt="" />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            在Fate/Stay
            Night裡面首次登場，型月第一搖錢樹，作為saber階級現界於第四與第五次聖杯戰爭，Fate/GO裡面更有多達9種變體。
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/石中劍_(電影)"
                  target="_blank"
                  >石中劍</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img
              height="124px;"
              src="~assets/sword_in_the_stone_still.jpg"
              alt=""
            />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            迪士尼製作的石中劍動畫電影，1963年發行，簡單敘述了亞瑟王傳說的故事，是迪士尼經典動畫之一
          </p>
        </div>
        <div class="col-md-4">
          <h3>
            <span class="we"
              ><br /><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/Code_Geass反叛的魯路修"
                  target="_blank"
                  >反叛的魯路修</a
                ></strong
              ></span
            >
          </h3>
          <div class="wimg">
            <img
              height="124px;"
              src="~assets/AV_CodeGeass_Lancelot17.jpg"
              alt=""
            />
          </div>
          <div class="hrn1"></div>
          <br />
          <p>
            雖然跟亞瑟王沒有直接關係，但是本作裡面的機動兵器大量採用了亞瑟王傳說，朱雀的座機為蘭斯洛特、亞妮的座機為莫德雷德等等。
          </p>
          <br />
          <br />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allhero' })

export default {
  components: {}
}
</script>
<style></style>
