<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>攻城拔寨</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p></p>
          <p>
            <b>攻城拔寨</b>為<nuxt-link to="/batt/Tariq_ibn_Ziyada"
              >塔里克·伊本·齊亞德(戰役)</nuxt-link
            >的第二關劇情關卡，此關描述<nuxt-link
              to="/units/hero/Tariq_ibn_Ziyad"
              >塔里克·伊本·齊亞德</nuxt-link
            >，率領奧米亞哈里發國軍隊在奪取伊比利亞半島南部的科爾多巴城後，位於北方的西哥特王國的中心托萊多城。
          </p>
          <p>
            從這裡，他們必須透過奪取塞維亞、梅里達、塔拉韋拉、瓜達拉哈拉這4個城中的3個來證明自己的統治地位。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                1,000<nuxt-link to="/resource/Wood">木材</nuxt-link
                >，1,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >，1,000<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >，500<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
            </tr>
          </table>

          <p></p>
          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>（黃色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p8">玩家2</div></td>
              <td class="tc6" width="38%">
                科爾多巴（橘色）<nuxt-link to="/civs/Saracens"
                  >薩拉森</nuxt-link
                >
              </td>
              <td class="tc6" width="12%"><div class="p7">玩家3</div></td>
              <td class="tc6" width="38%">
                托雷多（灰色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6"><div class="p3">玩家4</div></td>
              <td class="tc6">
                西哥德守備隊（綠色）<nuxt-link to="/civs/Goths">哥德</nuxt-link>
              </td>
              <td class="tc6"><div class="p1">玩家5</div></td>
              <td class="tc6">
                塞維亞（藍色）<nuxt-link to="/civs/Italians">義大利</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p2">玩家6</div></td>
              <td class="tc6">梅里達（紅色）哥德</td>
              <td class="tc6"><div class="p6">玩家7</div></td>
              <td class="tc6">
                塔拉韋拉（紫色）<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p5">玩家8</div></td>
              <td class="tc6">瓜達拉哈拉（水藍色）哥德</td>
            </tr>
          </table>

          <p></p>
          <h3>開場</h3>
          <li>
            <nuxt-link to="/units/hero">英雄</nuxt-link> -
            塔里克·伊本·齊亞德x1。
          </li>
          <li>
            軍事單位 -
            <nuxt-link to="/units/Camel_Archer">精銳駱駝弓騎兵</nuxt-link
            >x5、<nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
            >x5、<nuxt-link to="/units/Heavy_Cavalry_Archer"
              >重裝馬弓騎兵</nuxt-link
            >x10、<nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link
            >x10、<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
            >（翼騎兵）x10、<nuxt-link to="/units/Cavalier">騎兵</nuxt-link
            >x2、<nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>x2。
          </li>
          <li>
            大地之母單位 -
            <nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>x1。
          </li>
          <p></p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>塔里克·伊本·齊亞德必須活下去。</li>
              <li>打敗西哥德守備軍（綠色）並摧毀所有的塔樓就能奪取托雷多。</li>
              <li>
                攻陷4個敵軍城池之中的至少3個：塞維亞、梅里達、塔拉韋拉、瓜達拉哈拉。
              </li>
            </ol>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>
                  如果想用500黃金購買<nuxt-link to="/techs/Chemistry"
                    >化學</nuxt-link
                  ><nuxt-link to="/techs">科技</nuxt-link
                  >，就點擊選擇貿易<nuxt-link to="/building/Market"
                    >市集</nuxt-link
                  >。
                </li>
                <li>
                  穆薩•伊本•奴薩爾的軍隊會在30分鐘內會到達，協助你攻佔西哥德腹地。
                </li>
                <li>
                  每10分鐘，在科爾多巴的穆薩的工程師都會造好一座巨型投石器。
                </li>
              </ol>
            </div>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                快速攻陷托雷多-西哥的守備軍力量薄弱，但是他們已經派遣信使去鄰鎮尋求幫助了，如果你等太久援軍就來了。
              </li>
              <li>
                山區富含礦產資源。此外，如果你黃金匱乏不足，你還可以同科爾多巴城或者托雷多東邊的交易站進行貿易。
              </li>
              <li>
                同村裡的當地人講話（點擊）-他們或許有可以用的資訊跟你交流。
              </li>
              <li>
                敵軍城鎮正準備建造<nuxt-link to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >以宣告天下他們的霸權，你要阻止他們!
              </li>
              <li>
                塔里克·伊本·齊亞德無法到達<nuxt-link
                  to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >。另外塔里克·伊本·齊亞德的造船者沒有同他一起參加這次遠征，所以無法建造<nuxt-link
                  to="/building/Dock"
                  >碼頭</nuxt-link
                >或者<nuxt-link to="/units/Naval_Vessels">船艦</nuxt-link>。
              </li>
            </ul>
            <h2>斥候</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  塔里克·伊本·齊亞德的軍隊（黃色）的軍隊在托雷多城（灰色）東南部的海角集結。托雷多城在地圖的中心，是西哥德首都。你必須快速攻破托雷多才能在此地建立據點並補給軍隊。
                </li>
                <li>
                  托雷多的西哥德守備軍（綠色）只代表該城市一部分的防禦力量，由<nuxt-link
                    to="/units/Infantry_Units"
                    >步兵</nuxt-link
                  >、<nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link
                  >和一些<nuxt-link to="/units/Scorpion">弩砲</nuxt-link
                  >組成。他們還建立了幾座臨時的塔樓守衛主<nuxt-link
                    to="/building/Gate"
                    >城門</nuxt-link
                  >和太加斯河對面的橋梁。
                </li>
                <li>
                  科爾多巴城和幾個當地民居（橘色）坐落在地圖的東邊。當你的黃金不足的時候他們可以成為重要的交易夥伴。
                </li>
                <li>
                  周圍的四座重兵把守的城鎮是我們主要的威脅:
                  <p>
                    賽維亞（藍色）在遙遠的南方，那裡有<nuxt-link
                      to="/units/Crossbowman"
                      >弩兵</nuxt-link
                    >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
                    >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
                    >和一些<nuxt-link to="/units/Siege_Weapons"
                      >攻城武器</nuxt-link
                    >。
                  </p>
                  <p>
                    梅里達（紅色）坐落於西南邊，城門由<nuxt-link
                      to="/units/Huskarl"
                      >哥德衛隊</nuxt-link
                    >、重裝長槍兵、<nuxt-link to="/units/Long_Swordsman"
                      >長劍兵</nuxt-link
                    >和<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
                    >把守著。
                  </p>
                  <p>
                    塔拉韋拉（紫色）控制著地圖西邊，常備軍隊有<nuxt-link
                      to="/units/Knight"
                      >騎士</nuxt-link
                    >、輕騎兵、<nuxt-link to="/units/Elite_Skirmisher"
                      >戰矛兵</nuxt-link
                    >和攻城武器，他們還會出<nuxt-link to="/units/War_Galley"
                      >弩砲戰船</nuxt-link
                    >（槳帆戰船）從水路騷擾你。
                  </p>
                  <p>
                    瓜達拉哈拉（水藍色）在北部。他們的軍隊由哥德衛隊、長劍兵、戰矛兵和攻城武器組成。一小支軍隊在托雷多東部的山區守衛著礦產。
                  </p>
                </li>
              </ul>
              <h2>細節</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    塞維亞（藍色）、梅里達（紅色）、塔拉韋拉（紫色）這三個敵軍只要打掉<nuxt-link
                      to="/building/Castle"
                      >城堡</nuxt-link
                    >對方就投降了。
                  </li>
                  <li>
                    世界奇觀依序由塞維亞（藍色）→梅里達（紅色）→塔拉韋拉（紫色）→瓜達拉哈拉（水藍色）依序開始建造。
                  </li>
                  <li>
                    每10分鐘，造好1台投石器這是強大的攻城器加上援軍帶來的3台投石器，基本上在援軍到達是就可快速結束這<nuxt-link
                      to="/batt"
                      >戰役</nuxt-link
                    >了。
                  </li>
                  <li>
                    多運用城堡防禦和托雷多留下的<nuxt-link
                      to="/building/Stone_Wall"
                      >城牆</nuxt-link
                    >建構強大的防禦。
                  </li>
                  <li>
                    穆薩•伊本•奴薩爾（穆薩•本•努薩依爾）是征戰伊比利半島的總指揮，塔里克·伊本·齊亞德只是他的副官，之後2人都相繼被招回大馬士革，因此最後面2關戰役都並不是這2人帶領。
                  </li>
                  <li>
                    遊戲地圖內的各大城坐落位子跟現實世界是接近完全相似的。
                  </li>
                  <li>本次戰役只要時間就能通關。</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                攻城拔寨
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Consolidation_and_Subjugation1.jpg" alt="" />
              </div>
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Tariq_ibn_Ziyada"
                >塔里克·伊本·齊亞德</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>第一章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Battle_of_Guadalete"
                >瓜達萊特之戰</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Divide_and_Conquer">縱橫捭闔</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由熊協助編輯。</div>
        <p></p>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的穆薩•伊本•奴薩爾（穆薩•本•努薩依爾）
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a href="https://en.wikipedia.org/wiki/Musa_bin_Nusayr"
                    >穆薩•伊本•奴薩爾（穆薩•本•努薩依爾）（英文版）</a
                  ></b
                ></i
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
