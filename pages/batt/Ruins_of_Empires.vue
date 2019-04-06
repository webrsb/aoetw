<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>帝國的廢墟</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>帝國的廢墟</b>為<nuxt-link to="/games/ak">非洲王國戰役</nuxt-link
            >中《<nuxt-link to="/batt/Francisco_de_Almeidaa"
              >法蘭西斯科·阿爾梅達</nuxt-link
            >》劇情<nuxt-link to="/batt">戰役</nuxt-link>中的第三關。
          </p>
          <p>
            <b>法蘭西斯科．德．阿爾梅達</b>被年輕國王瑪努爾任命為<nuxt-link
              to="/civs/Indians"
              >印度</nuxt-link
            >總督，這件事讓整個<nuxt-link to="/civs/Portuguese"
              >葡萄牙</nuxt-link
            >宮廷極為震撼，法蘭西斯科是先王胡安的愛將，而新加冕的國王則是胡安的堂弟。
          </p>
          <p>
            <b>法蘭西斯科</b
            >與他的兒子<b>洛倫索</b>聚集了一批船員航行到印度，沿途經歷了海盜、暴風雨、瘟疫。在繞過非洲好望角後，終於他們第一次到達斯瓦希里海岸，有三座堅固堡壘守衛的富饒水上貿易要道。
          </p>
          <p>
            長期航行疲憊不堪的他們，希望能和當地基爾瓦統治者做些貿易並借落腳的地方，但篡位的統治者拒絕了。法蘭西斯科找到了一位名叫<b>穆罕默德伊本盧肯艾丁</b>的流亡基爾瓦王子，他擁有一支反叛軍隊，伺機想奪回他的王位。
          </p>
          <p>
            為了報復現任統治者的不友善，<b>洛倫索</b>決定協助這位流亡的非洲王子，並想出一條妙計，奪下斯瓦希里海岸的財富。
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
                0<nuxt-link to="/resource/Wood">木頭</nuxt-link>，0<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >，0<nuxt-link to="/resource/Gold">黃金</nuxt-link>，0<nuxt-link
                  to="/resource/Stone"
                  >石頭</nuxt-link
                >
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">19/15</td>
            </tr>
          </table>

          <br />
          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家1：
              </td>
              <td class="tc6" colspan="4">主角（藍色）葡萄牙</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p2"></div>
                玩家2：
              </td>
              <td class="tc6" width="35%">
                基爾瓦人（紅色）<nuxt-link to="/civs/Ethiopians"
                  >衣索比亞</nuxt-link
                >
              </td>
              <td class="tc6" width="15%">
                <div class="p4"></div>
                玩家3：
              </td>
              <td class="tc6" width="35%">
                蒙巴薩人（黃色）<nuxt-link to="/civs/Malians">馬利</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p5"></div>
                玩家4：
              </td>
              <td class="tc6" width="35%">
                桑給巴爾人（水藍色）<nuxt-link to="/civs/Saracens"
                  >薩拉森</nuxt-link
                >
              </td>
              <td class="tc6" width="15%">
                <div class="p3"></div>
                玩家5：
              </td>
              <td class="tc6" width="35%">斯瓦西里村莊（綠色）馬利</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p8"></div>
                玩家6：
              </td>
              <td class="tc6" width="35%">班圖人（橘色）衣索比亞</td>
              <td class="tc6" width="15%">
                <div class="p8"></div>
                玩家7：
              </td>
              <td class="tc6" width="35%">班圖人（橘色）衣索比亞</td>
            </tr>
          </table>

          <br />
          <h3>開場：</h3>
          <p>
            洛倫索阿爾梅達、穆罕默德伊本盧肯艾丁、<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >*2、<nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link
            >*3、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
            >*2、<nuxt-link to="/units/Arbalest">強弩兵</nuxt-link
            >*3、雙手劍士*6、<nuxt-link to="/units/Monk">僧侶</nuxt-link>*1
          </p>
          <h3>大地之母單位：</h3>
          <p>
            <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>*3、長<nuxt-link
              to="/units/Halberdier"
              >戟兵</nuxt-link
            >*2、火槍兵*1、<nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link
            >*1、卡拉維爾戰船*6、運輸船*2
          </p>
          <br />
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <p>從以下選擇一項：</p>
            <p>A選項</p>
            <ul>
              <li>帶穆罕默德伊本盧肯艾丁到斯瓦西里城鎮（綠）。</li>
              <li>穆罕默德伊本盧肯艾丁必須活下去。</li>
            </ul>
            <p>B選項</p>
            <ul>
              <li>帶他去基爾瓦受刑（紅旗幟處）。</li>
              <li>在外交和談的偽裝下，帶一支軍隊潛入基爾瓦。</li>
            </ul>
          </div>
          <br />
          <h2>劇情共通主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                摧毀基爾瓦（紅）<nuxt-link to="/building/Castle">城堡</nuxt-link
                >。
              </li>
              <li>
                摧毀蒙巴薩（黃）<nuxt-link to="/building/Wonder"
                  >世界奇觀</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <br />
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>擊沉桑給巴爾的槳帆戰船並摧毀他們的火焰塔。</li>
              <li>將班圖從斯瓦西里貿易站裡清除。</li>
              <li>找到姆塔帕的金礦。</li>
              <li>攻擊桑給巴爾的貿易商船並奪取他的貨物。</li>
              <li>摧毀班圖草原營地。</li>
            </ul>
          </div>
          <br />
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                你的人口上限是125，初始為城堡時代，此關卡可升至<nuxt-link
                  to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >。
              </li>
              <li>
                葡萄牙的船難者和沉船可以在這片海域找到。重新打撈集結他們可以幫我們擴充軍力。
              </li>
              <li>
                選擇與<b>穆罕默德伊本盧肯艾丁</b>一邊或背叛他，會對戰局的走向有重大影響：與他同一陣營會使得你聚集一大支反叛軍，並在大陸有一席之地；和他劃清界限的話會使得打敗基爾瓦更容易，但是會招來桑給巴爾和穆罕默德反叛軍的憤怒。
              </li>
              <li>
                摧毀班圖在草原上的<nuxt-link to="/building/Barracks"
                  >軍營</nuxt-link
                >大帳會停止他們的侵略。
              </li>
              <li>
                黃金在這片地區十分稀有，但是你可以通過貿易，或者尋找姆塔帕金礦來獲得，而掠奪並擊沉桑給巴爾的貿易商船也能給你帶來黃金戰利品，你可以改變外交，隨意攻打桑給巴爾。
              </li>
              <li>
                姆塔帕金礦在穿過濃密的猴麵包樹的西方。帶著伐木工去獲得黃金。
              </li>
            </ol>
          </div>
        </div>
        <br />
        <h2>斥候回報</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              暴風雨讓<b>法蘭西斯科．德．阿爾梅達</b>和他的兒子<b>洛倫索</b>在航行中迷失了方向，與其餘艦隊失散了。毀壞的<nuxt-link
                to="/units/Naval_Vessels"
                >船艦</nuxt-link
              >到達了松果島，這是斯瓦西里海岸的眾多島嶼中的一個。
            </li>
            <li>
              基爾瓦（紅）是松果附近的斯瓦西里<nuxt-link to="/techs/Sultans"
                >蘇丹</nuxt-link
              >領土。它由<b>埃米爾伊布拉罕</b>統治，他以前是牧師，最近謀殺了蘇丹王並篡奪了王位。結果，基爾瓦的內戰一觸即發，並失去了蒙巴薩城的控制。基爾瓦軍隊包括<nuxt-link
                to="/units/Man-at-Arms"
                >裝甲步兵</nuxt-link
              >、<nuxt-link to="/units/Archer">弓箭手</nuxt-link>、<nuxt-link
                to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >和<nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link>。
            </li>
            <li>
              一位名叫<b>穆罕默德伊本盧肯艾丁</b>的流亡的基爾瓦王子想要奪回王位。我們可以抓他作為人質獻給基爾瓦示好，也可以把他帶到斯瓦西里標有旗幟的城鎮（綠），讓他在那裡培訓一支忠誠於葡萄牙的軍隊。
            </li>
            <li>
              斯瓦西裡城鎮為敵對的強大酋長所佔據，他帶領了一群班圖勇士（橘）守衛著那裡。班圖稱霸了內陸的貿易站，並穿過稀樹草原發起對沿海的攻擊。摧毀他們的草原營帳將會結束他們的侵略。
            </li>
            <li>
              蒙巴薩人（黃）是基爾瓦北邊戒備森嚴的島城。蒙巴薩有一支強勁的<nuxt-link
                to="/units/Naval_Vessels"
                >海軍</nuxt-link
              >和由裝甲步兵、<nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link
              >、<nuxt-link to="/units/Cavalier">騎兵</nuxt-link
              >和僧侶組成的軍隊。
            </li>
            <li>
              桑給巴爾（水藍）位於斯瓦西里海岸的兩座富產黃金的島上，被阿拉伯蘇丹統治。雖然桑給巴爾的艦隊強大，但它的軍隊規模小使得它面對侵略不堪一擊。如果島的蘇丹王挑釁你，那麼摧毀槳帆戰船和他們的防禦攻勢將讓他對你敬畏三分，但全部征服此島卻可讓<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙人</nuxt-link
              >能開採島上的資源。
            </li>
            <li>
              最後，非洲人口口相傳著一個故事，據說穿過茂密的猴麵包樹之林，前方便是遍地黃金的姆塔帕國。
            </li>
          </ul>
          <h2>玩家攻略</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                建議攻打順序：班圖（橘）→轉為敵對的基爾瓦（紅）→轉為敵對的蒙巴薩（黃）。
              </li>
              <li>
                關卡開始將所有兵力放上運輸船，在海洋及小島上探索出所有的大地之母單位。
              </li>
              <li>
                進攻班圖人（橘）佔領的小島，用卡拉維爾戰船繞島打掉多數兵力後，再派我方兵力以及穆罕默德登島解決剩餘兵力以及踩藍色旗幟，這時基爾瓦（紅）會由同盟轉為敵對。
              </li>
              <li>
                小島的左方本島上也有班圖（橘）的勢力，用卡拉維爾戰船打掉外圍的巡邏兵力，我方便可於安全處登陸，並尋找地圖中心附近有三個藍色旗幟。
              </li>
              <li>
                對付沿途的班圖兵力，建議由<b>洛倫索</b>探路並吸引敵軍至回我軍處，敵軍的<nuxt-link
                  to="/building/Watch_Tower"
                  >瞭望箭塔</nuxt-link
                >用<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>擊毀。
              </li>
              <li>
                只要<b>穆罕默德</b>踩上藍色旗幟，即可獲得斯瓦希里（綠）的資源、兵力或<nuxt-link
                  to="/building"
                  >建築物</nuxt-link
                >。
              </li>
              <li>
                往北走，地圖中上方和地圖左上方各有班圖人的瞭望箭塔及兵力守著斯瓦希里（綠）的<nuxt-link
                  to="/building/Market"
                  >市集</nuxt-link
                >和<nuxt-link to="/elements/Relic">遺跡</nuxt-link
                >，同樣利用<nuxt-link to="/units/hero">英雄</nuxt-link
                >單位吸引敵軍到我方軍隊即可順利解決，再用火砲擊毀班圖（橘）的瞭望箭塔。
              </li>
              <li>
                基爾瓦的城堡可於城外用火砲摧毀，但務必用現有兵力掩護好。城堡摧毀後，基爾瓦會進貢資源、且<nuxt-link
                  to="/building"
                  >建築</nuxt-link
                >皆轉為我方擁有（所以進攻紅色僅摧毀城堡即可），此時，蒙巴薩（黃）將由同盟轉為敵對。
              </li>
              <li>
                玩家可以蒐集地圖上已探索到的遺跡，強化經濟升至帝王時代，以對抗蒙巴薩（黃）的陸地單位（海上戰船可不用理會）。
              </li>
              <li>
                除掉蒙巴薩（黃）入口處的城堡，即可輕易摧毀本島勢力，並用<nuxt-link
                  to="/units/Archer_Units"
                  >遠距離單位</nuxt-link
                >清除港口的敵軍<nuxt-link to="/units/Naval_Vessels"
                  >船隻</nuxt-link
                >，在港口處利用火砲或<nuxt-link to="/units/Trebuchet"
                  >投石機</nuxt-link
                >摧毀右方島上蒙巴薩（黃）的世界奇觀。
              </li>
              <li>
                只要完成劇情兩項主要任務，班圖人（橘）和桑給巴爾人（水藍）也會顯示擊敗，完成通關。
              </li>
              <li>
                快速通關法：帶<b>穆罕默德</b>踩過四個藍色旗幟（小島上1個、本島中心3個）→
                <nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
                >外利用火砲摧毀基爾瓦（紅）的城堡→搬運遺跡、發展經濟及研發<nuxt-link
                  to="/techs"
                  >科技</nuxt-link
                >（建議升至帝王時代）→避開班圖人（橘）直接前往蒙巴薩（黃）摧毀其入口處城堡及<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >→用遠距離單位清除港口的黃色船隻→岸邊用火砲或投石機摧毀右方島上的蒙巴薩（黃）世界奇觀。
              </li>
            </ol>
          </div>
          <h2>細節</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                從歷史上來看，<b>阿爾梅達</b>將<b>穆罕默德伊本盧肯艾丁</b>輔佐上位基爾瓦王座，以作為葡萄牙的附庸國。因此，讓這位流亡王子生存下來會更精確。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                帝國的廢墟
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <center>
                  <img src="~assets/Ruins_of_Empires.png" alt="" />
                </center>
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
              <nuxt-link to="/batt/Francisco_de_Almeidaa"
                >法蘭西斯科·阿爾梅達</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Portuguese">葡萄牙人</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役關卡編號</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>第三章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Lion_of_Africa">非洲雄獅</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Estado_da_India">葡屬印度</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由小蛇、裕暉協助編輯。</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的<i
              ><b
                ><a href="http://t.cn/EqFPNxP" target="_blank"
                  >法蘭西斯科．德．阿爾梅達</a
                ></b
              ></i
            >
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
