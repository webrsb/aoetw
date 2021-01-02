<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>重回故里</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>重回故里</b>是《<nuxt-link to="/games/ak"
              >世紀帝國II：非洲王國</nuxt-link
            >》<nuxt-link to="/batt/Yodita">優娣忒戰役</nuxt-link
            >的第五個場景，也是本章的最後一關。<nuxt-link to="/batt"
              >戰役</nuxt-link
            >中阿克蘇姆市區城內繁亂，玩家須在完成創建35單位的軍隊後慢慢發展前進，藉由摧毀極大汗的主要軍事建築為此關後段重點。
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
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源:</td>
              <td class="tc2">
                1000<nuxt-link to="/resource/Wood">木材</nuxt-link
                >，1200<nuxt-link to="/resource/Food">食物</nuxt-link
                >，500<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >，500<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限:</td>
              <td class="tc2" width="5%">200</td>
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
              <div class="p3"></div>
              玩家1
            </td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>（綠色）
            </td>
          </tr>

          <tr>
            <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
          </tr>
          <tr>
            <td class="tc6" width="15%">
              <div class="p7"></div>
              玩家2
            </td>
            <td class="tc6" width="35%">阿克蘇姆（灰色）衣索比亞</td>
            <td class="tc6" width="15%">
              <div class="p1"></div>
              玩家3
            </td>
            <td class="tc6" width="35%">反叛軍（藍色）衣索比亞</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p4"></div>
              玩家4
            </td>
            <td class="tc6">阿克蘇姆（黃色）衣索比亞</td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="tc6">
              <div class="p2"></div>
              玩家5
            </td>
            <td class="tc6">極大汗（紅色）衣索比亞</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p6"></div>
              玩家6
            </td>
            <td class="tc6">極大汗的追隨者（紫色）衣索比亞</td>
          </tr>
        </table>

        <h3>開場</h3>
        <li>
          將軍X1，<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
          >X10，<nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
          >X6，<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>X7，<nuxt-link
            to="/units/Heavy_Camel_Rider"
            >重裝駱駝騎兵</nuxt-link
          >X6，<nuxt-link to="/units/Villager">村民</nuxt-link>X4
        </li>

        <h2>主要任務</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ol>
            <li>建造一支可觀的軍隊，至少有35個軍事單位。</li>
            <li>摧毀錫安廟。</li>
            <li>摧毀極大汗的貿易。</li>
            <li>摧毀宮殿。</li>
            <li>攻佔阿克蘇姆城。</li>
            <li>
              摧毀極大汗的<nuxt-link to="/building/Castle">城堡</nuxt-link>。
            </li>
            <li>殺死極大汗。</li>
          </ol>
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>摧毀城裡的所有塔樓。</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>在阿克蘇姆城內爭戰十分困難，你需要適應狹窄的小路。</li>
            <li>
              四處都是敵軍，這座城市沒有一個地方是安全的，確保每個缺口都用圍牆加固。
            </li>
            <li>
              你由城堡時代開始，可以升級為<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >。除了<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
              >和<nuxt-link to="/units/Monk">僧侶</nuxt-link>其它<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >都可以使用。
            </li>
            <li>最好速戰速決，你可以考慮使用精銳的攻城炸藥兵。</li>
            <li>
              有幾條通往城裡的路，有時能繞道避開一些危險的區域還是很重要的。
            </li>
          </ul>

          <h2>斥候</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                我們（綠色）的任務是為了女王<nuxt-link to="/units/hero/Yodit"
                  >優娣忒</nuxt-link
                >奪取城池。要想成功，我們就必須要速戰速決，我們等待得越久敵人就會變得越強大。
              </li>
              <li>
                在這場戰鬥中沒有你的盟軍，但如果我們攻佔<nuxt-link
                  to="/building/Market"
                  >市集</nuxt-link
                >，我們就可以和南方的反叛軍（藍色）。
              </li>
              <li>這片地區的敵人有:</li>
              <ul>
                <li>
                  極大汗（紅色）被趕到一個角落，這是他的最後一站了。軍隊散落在整個城市裡，到處都可能有埋伏。狹窄的街道和小路可能是致命的陷阱。
                </li>
                <li>
                  效忠於極大汗的追隨者（紫色）在郊外巡邏，但他們對你威脅不大。
                </li>
              </ul>
            </ul>

            <h2>攻略</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <p>
                玩家必須在阿克蘇姆城內逐一破壞障礙物前進，由於障礙物<nuxt-link
                  to="/elements/Hit_points"
                  >血量</nuxt-link
                >非常高，需要劇情安排的特殊爆破工兵來擊破會比較快，在消滅城前的極大汗先鋒部隊後，任務此時要求軍隊須滿35單位，只要一滿35單位，劇情就會一段時間安排特殊爆破工兵前來支援擊破對方建築或障礙物，此時村民可在阿克蘇姆城外發展經濟與基地慢慢累積實力後，步步推進消滅極大和軍事建築與障礙。
              </p>
              此關劇情分成幾個階段:
              <ol>
                <li>進入阿克蘇姆城並建立基地</li>
                <ul>
                  <li>
                    玩家一開始便獲得將軍X1，長劍兵X10，彎刀勇士X6，弩兵X7，重裝駱駝騎兵X6的部隊，在阿克蘇姆城外會遇上零星反抗，對方由<nuxt-link
                      to="/units/Light_Cavalry"
                      >輕騎兵</nuxt-link
                    >，<nuxt-link to="/units/Knight">騎士</nuxt-link
                    >，輕裝的<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
                    >，<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
                    >，長劍兵，<nuxt-link to="/units/Pikeman"
                      >重裝長槍兵</nuxt-link
                    >組成的部隊迎擊，玩家可用慢慢誘敵的方式逐一擊破以節省保留兵力。
                  </li>
                </ul>
                <li>建立你的城鎮</li>
                <ul>
                  <li>
                    在城內或城外建立基地對劇情沒有任何關係，玩家可依喜好來發展，城外天然資源眾多易發展，城內街道擁擠只是和軍事建築與防禦建築，同盟阿克蘇姆城的所有平民建築血量都破萬，玩家也無須想利用<nuxt-link
                      to="/units/Mangonel"
                      >投石車</nuxt-link
                    >破壞同盟建築來浪費時間。
                  </li>
                  <li>
                    可建立自己<nuxt-link to="/building/Stone_Wall"
                      >城牆</nuxt-link
                    >的以保護您的起始區域。在您的基地南部的鄉村有一個狹窄處，您可以在那裡建造一座城堡。在你的起始區域建立另一個基地。研發升級，收集資源，進入帝王時代，當你準備好時，生產滿35個軍事單位。彎刀勇士，<nuxt-link
                      to="/building/Archery_Range"
                      >射箭場</nuxt-link
                    >單位和攻城武器都是不錯的選擇。
                  </li>
                </ul>
                <li>奪取阿克蘇姆城</li>
                <ul>
                  <li>
                    一旦你建立了你的軍隊，目標將是摧毀城市中的指定<nuxt-link
                      to="/building"
                      >建築物</nuxt-link
                    >，包括錫安廟(<nuxt-link to="/building/Monastery"
                      >修道院</nuxt-link
                    >)，市集（當你接近它時會轉換為你的）和市中心的城堡，一旦市中心的城堡摧毀，巨型投石機援軍將會前來(請注意此關我方城堡設定為無法生產巨型投石機)，此時前進時遇上的所有<nuxt-link
                      to="/building/Watch_Tower"
                      >箭塔</nuxt-link
                    >都是次要目標，也可不必全都摧毀，但為了方便部隊前進建議還是全數摧毀這些箭塔，每個城鎮街道區域都有互聯的道路，道路上有些有極大汗的伏兵，有些則是會加入我方軍隊的當地反叛軍，這些部隊包含了<nuxt-link
                      to="/units/Camel_Archer"
                      >駱駝弓騎兵</nuxt-link
                    >，<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
                    >等一些輕裝<nuxt-link to="/units/Infantry_Units"
                      >步兵</nuxt-link
                    >，只要逐步前進摧毀極大汗的軍事建築就可慢慢削弱他們的力量，除了反叛軍支援的戰象，玩家也可生產火炮與其他攻城武器快速消除敵方軍事建築。
                  </li>
                </ul>
                <li>摧毀極大汗的宮殿與勝利</li>
                <ul>
                  <li>
                    阿克蘇姆城的南部是極大汗的宮殿(城堡)。當你佔領這座城市時，玩家應該擁有一支擁有大量攻城武器的強大軍隊，比如巨型投石機（遊戲中的援軍）或<nuxt-link
                      to="/units/Siege_Ram"
                      >重型衝撞車</nuxt-link
                    >/<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
                    >，極大汗宮殿(城堡)旁有許多軍事建築，他會訓練輕騎兵，步兵和<nuxt-link
                      to="/units/Archer_Units"
                      >遠程</nuxt-link
                    >部隊的混合部隊保護著城堡。一旦玩家攻破宮殿(城堡)就能贏得此關勝利。
                  </li>
                  <li>
                    總之，在觸發主要戰鬥和主要目標之前穩固你的基地，以及城市街道被劃分的方式利用不同的軍隊系統前進以便保持陣行，玩家應該不會遇上太多困難能夠贏得此關勝利，雖然需要時間和傷亡才能在所有狹窄的城市街道上進行戰鬥，就像其他的城市場景戰一樣(例如<nuxt-link
                      to="/batt/Joan_of_Arc"
                      >聖女貞德戰役</nuxt-link
                    >第5關<nuxt-link to="/batt/The_Siege_of_Paris"
                      >圍攻巴黎</nuxt-link
                    >，<nuxt-link to="/batt/Saladina">薩拉丁戰役</nuxt-link
                    ><nuxt-link to="/batt/The_Siege_of_Jerusalem"
                      >兵臨聖城</nuxt-link
                    >等案例)在擊敗極大汗之前，玩家可能會有一定程度的傷亡。
                  </li>
                </ul>
              </ol>

              <h2>其他此關戰役的雜項說明</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    在你的起始基地的西南方有一個同盟市場，就在極大汗的<nuxt-link
                      to="/building/Stable"
                      >馬廄</nuxt-link
                    >旁一開始它被的圍籬圍繞著。一旦你在市區內解放市場，那個市場周圍的牆就會消失，你可以通過它進行交易以獲得額外的黃金。
                  </li>
                  <li>
                    當玩家達到35個軍事單位時，劇情將會開始支援精銳攻城兵(此<nuxt-link
                      to="/units/hero/Saboteur"
                      >破壞者</nuxt-link
                    >攻擊為25+10萬)
                    接著玩家必須要摧毀的修道院（錫安神廟），它位於你的起始區市區的東邊，旁邊有一個<nuxt-link
                      to="/Relic"
                      >遺跡</nuxt-link
                    >。摧毀修道院的瞬間，玩家在遊戲中會得到一位僧侶，起始點與精銳攻城兵來的方向相同，這這關劇情中玩家不能生產僧侶（雖然你可以建造一個修道院），所以小心不要失去這位唯一的僧侶。當金礦耗盡之時，將遺跡帶到你的修道院並獲得另一個黃金來源。
                  </li>
                  <li>
                    在此關劇情中，玩家無法於城堡建造巨型投石機。玩家可以在摧毀市中心的城堡後獲得（或者完成次要目標摧毀所有敵方的箭塔），這將對玩家後期必須摧毀兩座城堡時派上用場。
                  </li>
                  <li>
                    城外有許多野生食物（漿果，<nuxt-link
                      to="/units/animal/Zebra"
                      >斑馬</nuxt-link
                    >大象），樹林與些許金礦。石礦比較有限，但可以透過市集交易買取。注意一些敵軍的零星軍事單位，所以在你收集資源的地方附近有幾個<nuxt-link
                      to="/units/Cavalry_Units"
                      >騎兵</nuxt-link
                    >或者駱駝等機動性優良的單位待命可能會較好。這應該足以保護讓玩家村民的安全。如果您發現資源還是不夠的話，玩家可以前往阿克蘇姆城外的北部和東部，在那裡可以找到額外的樹林，<nuxt-link
                      to="/units/animal/Goat"
                      >山羊</nuxt-link
                    >，漿果和金礦。
                  </li>
                  <li>
                    都市戰鬥是一場大屠殺，此時部隊的聯合戰術就能活用於此。在玩家進入每個區域之前使用圍攻來軟化對手戰力，步兵支援拆除對方軍事建築，騎兵上前擊殺敵軍的弓兵部隊，我方弓兵則掩護步兵前進，這時可以利用較大的陣地來蓋城堡保護我方部隊駐紮療傷，這時衣索比亞城堡的<nuxt-link
                      to="/techs/untech"
                      >特殊科技</nuxt-link
                    ><nuxt-link to="/techs/Royal_Heirs">皇族血脈</nuxt-link
                    >研發完可讓他們更快速地聚集突襲部隊。
                  </li>
                  <li>
                    最後特別介紹此關的神祕牧師與<nuxt-link
                      to="/units/Furious_the_Monkey_Boy"
                      >狂猴</nuxt-link
                    >
                    - 玩家可在摧毀極大汗市中心的城堡東邊的<nuxt-link
                      to="/building/University"
                      >學院</nuxt-link
                    >內街道遇上他們，牧師的玩家顏色是灰色玩家阿克蘇姆（雖然外交是同盟實際上是“敵對”的BUG），如果玩家直接與他們會合，雖然劇情牧師會說:“我會替優娣忒戰鬥“玩家此時會得到狂猴但是牧師此時會開始<nuxt-link
                      to="/elements/Conversion"
                      >招降</nuxt-link
                    >玩家單位，玩家此時大可不必更改外交與其他任何動作，劇情就會把牧師歸順給玩家，但有時還是會有玩家得到狂猴但是牧師卻沒有歸順我方部隊的情況發生，在<nuxt-link
                      to="/games/ak"
                      >非洲王國</nuxt-link
                    >DLC剛發佈4.4版時玩家如果在這裡遇上神祕牧師與狂猴遊戲則是會整個強制退離。官方於後面的版本才修正。
                  </li>
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
              <div class="unititle2">重回故里</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Yodit_5.png" alt="" />
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
              <nuxt-link to="/batt/Yodita">優娣忒</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">玩家顏色</td>
            <td class="unit4">
              <div class="p3"></div>
              綠色
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>第四章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Broken_Stelae">毀壞的石碑</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              N/A
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡，裕暉協助編輯</div>
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
