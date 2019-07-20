<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>京都（1582）</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>京都（1582）</b>是<nuxt-link to="/batt/Battles_of_the_Conquerors"
              >征服者的戰役</nuxt-link
            >之一，描述1582年<nuxt-link to="/civs/Japanese">日本</nuxt-link
            >的本能寺之變與其後的<nuxt-link to="/civs/Chinese">中國</nuxt-link
            >大返還(山崎之戰)。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代:</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源:</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木材</nuxt-link>2000，<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >800，<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >800，<nuxt-link to="/resource/Stone">石頭</nuxt-link>200
              </td>
              <td class="tc1" width="15%">人口上限:</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>玩家1
              </td>
              <td class="tc6" colspan="4">日本（青綠色）</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p4"></div>玩家4
              </td>
              <td class="tc6" width="35%">
                <nuxt-link to="/units/hero/Nobunaga">織田信長</nuxt-link
                >（黃色）日本
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>玩家2
              </td>
              <td class="tc6">大阪（紅色）日本</td>
              <td class="tc6">
                <div class="p3"></div>玩家3
              </td>
              <td class="tc6">京都（綠色）日本</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>玩家5
              </td>
              <td class="tc6">兵庫（藍色）日本</td>
            </tr>
          </table>

          <div class="col-md-12">
            <br />
            <dl class="dl-horizontal">
              <dt>開場：</dt>
              <dd>
                <nuxt-link to="/units/Samurai">日本武士</nuxt-link>x4(<nuxt-link
                  to="/elements/Hit_points"
                  >生命值</nuxt-link
                >低下)，<nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>x2。
              </dd>
              <dt>大地之母單位：</dt>
              <dd>
                <nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>x4。
              </dd>
            </dl>
          </div>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                你的陛下，織田信長，在京都被圍困。你必須去解救他，恢復他的地位。
              </li>
              <li>建立一個對抗京都的基地。</li>
              <li>
                摧毀京都的三座<nuxt-link to="/building/Castle">城堡</nuxt-link
                >作為他們謀害織田信長陛下的報復。
              </li>
            </ol>
          </div>
          <h3>次要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>無。</li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                京都的武士和織田信長陛下在一起，他們不會自己逃走，因為他們試圖保護織田信長。
              </li>
              <li>
                打敗大阪的駐軍並在此建立自己的城鎮，不要隨便摧毀建築，否則當你攻陷大阪還得重建許多建築。
              </li>
              <li>儘管直接襲擊京都可以成功，但偷襲可以減小人員傷亡。</li>
              <li>
                京都叛亂的<nuxt-link to="/units/Monk">僧侶</nuxt-link
                >正在搜索聖物，不能讓他們成功。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                羽柴秀吉的部隊(青綠色)在織田信常陛下的<nuxt-link
                  to="/units/Transport_Ship"
                  >運輸船</nuxt-link
                >上，當你進入大阪，你需要迅速壓制抵抗，並建立一個基地。
              </li>
              <li>
                有三個敵人。大阪(紅色)有<nuxt-link to="/building/Stone_Wall"
                  >城牆</nuxt-link
                >和城堡，但是部隊很少。
              </li>
              <li>
                兵庫城(藍色)相對只是一個小村莊，早期進攻就可以擊敗他，如果忽視他們的存在，他們最終將用步兵、弓兵和日本武士進攻。
              </li>
              <li>
                京都(綠色)是你最危險的敵人，城市防禦良好，還有大量的<nuxt-link
                  to="/units/Elite_Skirmisher"
                  >戰矛兵</nuxt-link
                >、<nuxt-link to="/units/Knight">騎士</nuxt-link
                >和日本武士保護城堡，如果給他們機會，他們還會建造<nuxt-link
                  to="/units/Naval_Vessels"
                  >海軍</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              雖然遊戲讓你保護信長，但信長不死遊戲無法進行，盡你所能地多殺死幾個敵人吧。
            </li>
            <li>
              進入大阪的時候不要摧毀城市，只要把<nuxt-link to="/building/Gate"
                >城門</nuxt-link
              >打破，靠近<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >就好。
            </li>
            <li>大阪城內的四座火砲非常珍貴，不要浪費了他們。</li>
            <li>
              大阪城內的建築除了城堡都可以<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >過來。
            </li>
            <li>
              趁早打擊兵庫城，其國境內有很好的資源，越早進攻可以拿到越多，而且早期的兵庫城只要幾個步兵保護火砲，用火砲就可以完全拆除。
            </li>
            <li>所有的橋都是斷的，你必須建立海軍。</li>
            <li>
              地圖東邊有個冰岸，從那裏進攻就可以不必招惹到京都的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >。
            </li>
            <li>
              京都的士兵大多數都可以用<nuxt-link to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >克制，火槍兵搭配大阪城內的四台火砲拆建築，並且派幾個<nuxt-link
                to="/units/Cavalier"
                >騎兵</nuxt-link
              >摧毀敵人的<nuxt-link to="/units/Scorpion">弩砲</nuxt-link>。
            </li>
            <li>
              人口上限只有75，要好好控制人口，如果怕軍隊運送不夠快，可以在東方的登陸點建立基地。
            </li>
            <li>
              善用你的<nuxt-link to="/units/Trebuchet">投石機</nuxt-link
              >，火砲被毀了之後他們是最有效的。
            </li>
            <li>
              大量投石機加上<nuxt-link to="/units/Heavy_Scorpion"
                >重型弩砲</nuxt-link
              >可以輕鬆的贏下戰鬥。
            </li>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>除了織田信長之外，遊戲裡面沒有出現任何歷史人物。</li>
            <li>
              遊戲開始的時，所有織田信長的單位生命值是滿的，開始後幾秒會變成一半以下。
            </li>
            <li>
              遊戲開始時的城堡有特殊名字，叫做"織田信長在京都的城堡"，估計是指本能寺。
            </li>
            <li>
              你可以自己殺掉織田信長，劇情不會有變，但是你的四個日本武士有更高機會生還，殺死了信長之後就走到角落躲起來，敵軍常常會放過你。
            </li>
            <li>
              幾乎沒有辦法拯救織田信長，但是有時候京都會忘記攻擊織田信長，而遊戲也就這麼卡關了(信長不死無法進行)。
            </li>
            <li>織田信長的死亡動畫其實是切腹。</li>
            <li>
              沒有靠近大阪的城牆的話，不會觸發信長的<nuxt-link
                to="/units/Petard"
                >爆破者</nuxt-link
              >爆破城牆的劇情。
            </li>
            <li>
              大阪在你進攻的時候有很大機會蓋一個<nuxt-link
                to="/building/University"
                >學院</nuxt-link
              >，若你等他完成再靠近大阪的城鎮中心，學院會變成你的。
            </li>
            <li>很奇怪，大阪城被奪取的時候，只有半個大阪城變色了。</li>
            <li>兵庫城被擊敗的時候豐臣秀吉會說話。</li>
            <li>
              簡單模式的電腦不會用<nuxt-link to="/elements/Relic"
                >遺跡</nuxt-link
              >勝利。
            </li>
            <li>
              電腦絕對不會去搜索東邊的地圖，因為那裏是作者讓玩家可以用來偷襲的地方。
            </li>
            <li>
              遊戲中的京都會使用遺跡勝利，這是為了促使玩家加速進攻，以符合中國大返還非常迅速的史實。
            </li>
            <li>敵人可以用遺跡勝利，玩家也可以。</li>
            <li>本關無法建造奇觀。</li>
          </ul>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              這場<nuxt-link to="/batt">戰役</nuxt-link
              >描寫由本能寺之變(織田信長之死)到羽柴秀吉擊敗明智光秀為止的事蹟，日本史稱中國大返還以及山崎之戰。
            </li>
            <li>
              遊戲內的地圖跟當時的戰場一點都不相似，估計是為了讓玩家可以發揮日本的海軍優勢。
            </li>
            <li>
              京都是當時天皇的居城，但是當時的天皇沒有實權，而武士集團的首領被稱為征夷大將軍，後來也被各地大名架空，有名無實。
            </li>
            <li>信長當時的所在位置並不是城堡，而是一個叫做本能寺的佛寺。</li>
            <li>
              本能寺之變發生時京都仍在信長掌控之下，明智光秀欺騙了士兵，大部分叛變的士兵(遊戲內是京都)並不知道自己攻擊的是信長。
            </li>
            <li>
              當時在信長身邊護衛的武士並不是羽柴秀吉的手下，是他的侍童森蘭丸與其弟弟，還有黑人武士彌助。
            </li>
            <li>信長不是戰死的，而是下落不明(沒有人找到屍體)。</li>
            <li>歷史上除了彌助，跟信長同在本能寺的武士全部戰死。</li>
            <li>
              背叛信長的人名叫明智光秀，當時正受命要支援羽柴秀吉(後來的豐臣秀吉)。
            </li>
            <li>
              秀吉知道信長已死的消息便立刻跟其交戰對象：毛利家議和，並用最快速度趕回京都。
            </li>
            <li>
              歷史上羽柴秀吉只花了七天時間就率領大軍橫跨194公里回到京都，而這個時間只會少不會多，在當時為天下第一的速度。
            </li>
            <li>
              真正的中國大返還並沒有進佔大阪，而整個兵庫縣(當時叫但馬國)是屬於羽柴秀吉的，根本不需要如遊戲內去出兵征服。
            </li>
            <li>
              中國大返還期間並沒有發生戰鬥，當時的羽柴軍是日夜進軍，而羽柴秀吉本人則用盡各種辦法拉攏敵軍將領，弄得明智光秀眾叛親離。
            </li>
            <li>
              到了山崎之戰開戰前，羽柴方數量足足有40000人，而明智方只有17000人。
            </li>
            <li>
              遊戲之所以要讓玩家用偷襲的，是因為當時羽柴秀吉手下的池田恆興偷襲明智軍成功，造成明智光秀退敗的緣故。
            </li>
            <li>
              歷史上的明智光秀在敗退後死於荒郊野外，被狩獵落難武士的農民殺死(當時殺死敵將並帶回人頭有重賞)。
            </li>
            <li>而羽柴秀吉後來改名豐臣秀吉，進而統一日本。</li>
            <li>
              豐臣秀吉後來進攻朝朝鮮，也就是遊戲內的<nuxt-link
                to="/batt/Noryang_Point_1598"
                >洛陽點（1598）</nuxt-link
              >戰役。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                京都（1582）
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/Kyoto.jpg" alt="" /></div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Battles_of_the_Conquerors"
                >征服者的戰役</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第四章之七
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Lepanto_1571">勒班陀（1571）</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Noryang_Point_1598"
                >洛陽點（1598）</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的京都戰役
            <div style="margin-left: 10px;">
              <em
                ><strong
                  ><a href="http://tinyurl.com/ybt66856" target="_blank"
                    >山崎之戰</a
                  ></strong
                ></em
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
