<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>征服家園（895）</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>征服家園</b
            >為歷史戰役中的其中一個關卡，原本於失落的帝國推出，決定版戰役則完全重製。此關描述匈牙利民族於公元900年左右向西遷移的情況。
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
                封建時代
              </td>
              <td class="tc1" width="15%">起始資源:</td>
              <td class="tc2">
                食物200木材100黃金100
              </td>
              <td class="tc1" width="15%">人口上限:</td>
              <td class="tc2" width="5%">100（游牧）/150（定居）</td>
            </tr>
          </table>
        </div>
        <h3>AI</h3>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tc4" colspan="4" style="background: #2980b9;">
              玩家本身
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p5"></div>
              玩家1
            </td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>（青色）
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background: #ea6153;">敵對</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p2"></div>
              玩家2
            </td>
            <td class="tc6" width="35%">
              東法蘭克王國（紅色）條頓
            </td>
            <td class="tc6">
              <div class="p4"></div>
              玩家4
            </td>
            <td class="tc6" width="35%">
              大摩拉維亞公國（黃色）斯拉夫
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p8"></div>
              玩家5
            </td>
            <td class="tc6" width="35%">
              阿瓦爾（匈人）橘色
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#27ae60;">同盟</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p3"></div>
              玩家3
            </td>
            <td class="tc6">
              保加利亞（綠色）保加利亞
            </td>
            <td class="tc6">
              <div class="p1"></div>
              玩家6
            </td>
            <td class="tc6">
              拜占庭人（藍色）拜占庭人
            </td>
          </tr>
        </table>

        <h3>開場</h3>
        <li>
          <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>X5，<nuxt-link
            to="/units/Cavalry_Archer"
            >馬弓騎兵</nuxt-link
          >X6，村民X2，<nuxt-link to="/units/animal/Sheep">綿羊</nuxt-link>X2。
        </li>
        <h2>任務</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <P>主要任務</P>
          <ul>
            <li>
              打敗3個主要勢力（<nuxt-link to="/civs/Bulgarians"
                >保加利亞</nuxt-link
              >、大摩拉維亞公國和東<nuxt-link to="/civs/Franks"
                >法蘭克</nuxt-link
              >王國）中的2個。
            </li>
          </ul>
          <P>次要任務</P>
          <ul>
            <li>
              建造<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >後，您將失去遊牧的優勢。
            </li>
            <li>
              您必須先打敗阿瓦爾部落（不一定要擁有城鎮中心），才能升級至城堡時代。
            </li>
            <li>游牧時，把綿羊帶入羊圈即可生產食物。</li>
            <li>游牧時，您可以掃蕩建築，略奪更多資源。</li>
            <li>游牧時，您可以摧毀城鎮中心，俘虜村民。</li>
            <li>您必須先打敗另一個勢力並建造城鎮中心，才能升級到帝王時代。</li>
            <li>
              與保加利亞人開戰，獲取拜占庭人資助的2000黃金，您可以從掃蕩的每座<nuxt-link
                to="/building/Krepost"
                >營壘</nuxt-link
              >和<nuxt-link to="/building/Castle">城堡</nuxt-link
              >中劫掠500黃金。
            </li>
          </ul>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >游牧時的人口上限為100人，定居時則為150人。由於他們是游牧民族，因此還有其他機制（僅限於本劇本），例如城堡時代的研究必須在阿瓦爾人被擊敗後才會出現。而帝王時代的研究還需要再擊敗另一個主要勢力，大摩拉維亞公國、東法蘭克王國或保加利亞後才會出現。
            </li>
            <li>
              馬扎爾透過摧毀敵人建築和運送捕獲的動物後到圍欄來獲得資源。他們也會在破壞敵人城鎮中心時俘虜敵人村民。
            </li>
            <li>
              仔細選擇建立城鎮中心的時機。您將失去游牧生活時的優勢，而向定居生活的轉化近程又比較緩慢。然而，在整局遊戲中保持游牧生活的難度更大。
            </li>
            <li>
              在您四處劫掠時，敵人也不會無所事事，因此要時刻讓他們提心吊膽，不時騷擾他們的經濟建設，以達到壓制的目的。
            </li>
            <li>
              保加利亞是一個很適合劫掠的對象，因此可以考慮公開和其敵對並入侵其領土。注意不要同時樹立太多敵人。
            </li>
          </ul>
        </div>
        <h2>斥侯</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              馬扎爾人(1，青色)離開了乾草原上的家園，遷往東歐的喀爾巴阡盆地，並在那裡富饒的草原上定居了。他們的擴張全部依賴於放牧牲畜和劫略，沒了這些，他們只能學歐洲人建造城鎮中心、<nuxt-link
                to="/building/House"
                >居住房舍</nuxt-link
              >、城堡和<nuxt-link to="/building/Farm">農田</nuxt-link>。
            </li>
            <li>
              阿瓦爾人(5，澄色)住在馬扎爾人的旁邊。他們曾經是一個強大的游牧民族，現在卻變得分散虛弱。建議對他們的營地進行掃蕩，累積更多實力。他們的軍隊包含<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >、<nuxt-link to="/units/Scout_Cavalry">斥侯騎兵</nuxt-link
              >和<nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link>。
            </li>
            <li>
              北邊的大摩拉維亞公國(4，黃色)已經統治波希米亞及其周邊數個世紀之久，但他們也在內外衝突的影響下不復強大。他們有幾座城堡，但都可以輕易攻破。摩拉維亞人會訓練劍兵和<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >，這些都不是我們高機動力的對手。
            </li>
            <li>
              東法蘭克王國(2，紅色)位於西方，是這一帶的最強勢力之一。他們曾經是加羅林帝國的一部份，在分裂過後仍然實力不減，那些堅固的防禦工事背後有一支強大的軍隊，守護著他們的領土。他們的兵種包括<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >、<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >、重裝騎兵、<nuxt-link to="/units/Teutonic_Knight"
                >條頓武士</nuxt-link
              >和<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>。
            </li>
          </ul>
        </div>

        <h2>攻略</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              一開始村民只有五位，但是可以先蓋<nuxt-link to="/building/Dock"
                >碼頭</nuxt-link
              >造漁船捕魚，期間把羊找一找、研發防禦科技和<nuxt-link
                to="/techs/Bloodlines"
                >品種</nuxt-link
              >等。建議先配一個村民採石頭把家稍微圍一下，其他村民先採木頭等木材到<nuxt-link
                to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >夠後再分配給黃金。
            </li>
            <LI
              >雖然是封建時代開場，但已經升級至輕騎兵，也能訓練馬弓騎兵。第一個目標建議是大摩拉維亞王國，由於該國開場也是封建時代較好應付。利用魚群和羊圈的食物生產<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >投入戰場，避開城堡沿著ㄈ字形依序掃蕩三座城鎮中心和所有村民就會投降，盡可能不要浪費時間去打其他的建築，因為其他兩國（特別是東法蘭克）也在發展。之後再順勢掃蕩阿瓦爾人就會升級至城堡時代（若尚未建造城鎮中心）。別忘記把因為摧毀城鎮中心獲得的村民送去採集資源。
            </LI>
            <LI
              >隨後便是東法蘭克王國或保加利亞二選一。如果要打東法蘭克王國就是一對一；如果要打保加利亞則是先找到<nuxt-link
                to="/civs/Byzantines"
                >拜占庭人</nuxt-link
              >，一旦向保加利亞宣戰的那一刻就會從拜占庭人那裡獲得2000黃金，但是要面對兩國的夾擊。
            </LI>
            <li>
              此時可以考慮起一座城鎮中心並升至帝王時代後即可發動進攻。如果要維持游牧狀態則速度要夠快，因為游牧狀態不能升帝王時代，再加上東法蘭克隨著科技發展加上種族加成，7近防的重裝騎士/遊俠完全不是城堡時代騎士能應付的對象。此時建議選擇攻打保加利亞可以從拜占庭那邊拿到2000黃金，用這些黃金生產大量的<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >和<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
              >進攻（先摧毀城鎮中心，再摧毀城堡和營壘），家裡圍好後蓋幾座塔、留幾隻騎兵防禦東法蘭克的攻擊。
            </li>
            <li>
              當然，第一個目標也可以直接打保加利亞，透過拜占庭以及摧毀營壘取得的黃金可以多專注將村民在其他資源方面。但也別忘記見留一隻軍隊以及建造防禦工事防禦西邊兩國的攻勢。
            </li>
          </ul>
          <P>其他事項</P>
          <ul>
            <li>
              游牧時，人口上限直接設定為最高的100，但是不能建造居住房舍、農田、<nuxt-link
                to="/building/University"
                >學院</nuxt-link
              >和城堡。直到建立了城鎮中心才解禁，但人口上限會自動縮減到城鎮中心和蒙古包提供的總人口數，必須蓋房屋等才能像往常一樣提升上限，最大到150。
            </li>
            <li>
              一旦建立城鎮中心後仍尚未打敗阿瓦爾人時，當打敗阿瓦爾人後必須自行升級至城堡時代。
            </li>
          </ul>
        </div>
        <h2>決定版變更點</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              將整個戰役重製，在這之前是多階段的劇情發展任務，決定版簡化為本戰役特有的游牧機制（但是建造城鎮中心後隨即失去）並打敗兩個主要敵人即可勝利。
            </li>
          </ul>
        </div>
        <h2>歷史(來源取自維基百科)</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              羅馬帝國時期，匈牙利是潘諾尼亞行省，羅馬帝國滅亡後，各民族陸續遷移到這裡。首先到來的是匈人，在<nuxt-link
                to="/units/hero/Attila_the_Hun"
                >阿提拉</nuxt-link
              >的領導下，他們建立了強大的匈人帝國。匈牙利這個名字可能來源於此，
            </li>
            <li>但也有很多學者認為應該來自屬於突厥的歐諾古爾（Onogur）人。</li>
            <li>
              在匈人帝國解體後日耳曼部落統治了這裡將近100年，接踵而來的是阿瓦爾人，在他們近200年的統治下，斯拉夫民族開始滲入。摩拉維亞人、保加爾人、波蘭人和克羅埃西亞人都曾經企圖推翻阿瓦爾人，但直到查理曼才成功的將其擊敗。
            </li>
            <li>
              查理曼死後，東<nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >王國逐步衰落，形勢對斯拉夫人的崛起有利，大摩拉維亞領袖斯瓦托普魯克雄心勃勃地企圖建立大摩拉維亞公國，但是東方遊牧民族馬扎爾人的到來結束了這一地區的紛爭。
            </li>
            <li>
              阿爾帕德王朝:當時馬扎爾人遊牧部落從烏拉山西麓和伏爾加河灣一帶向西遷徙，公元896年在多瑙河盆地潘諾尼亞平原定居下來。傳說當時7個馬扎爾人部落與3個可薩人部落組合成一個聯盟，之後匈牙利王國逐漸成形。第一個朝代是阿爾帕德大公所建立的阿爾帕德王朝。1000年，匈牙利大公伊什特萬一世在匈牙利推行天主教，並獲天主教教宗加冕成為匈牙利第一位國王。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                征服家園
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                Honfoglalás DE 895.png
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              歷史戰役
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
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
              歷史戰役
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/York_865">約克（865）</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Langshan_Jiang_919">狼山江（919）</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由裕暉，HARRY協助編輯</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的匈牙利民族歷史
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E5%8C%88%E7%89%99%E5%88%A9%E5%8E%86%E5%8F%B2?fbclid=IwAR3KQ0ZS4YM1OH94Rj97DrrhOer3J09yF8ri2ScjKeYZgHJNJHsBwZSUS5s"
                    target="_blank"
                    >匈牙利歷史</a
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
