<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>悲痛之夜</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>悲痛之夜</b>是《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》<nuxt-link to="/batt/Montezumaa">蒙提祖馬戰役</nuxt-link
            >的第四個場景。
          </p>
          <p>
            在這種情況下，科爾特斯在特諾奇提特蘭內建立了一個<nuxt-link
              to="/building/Wonder"
              >世界奇觀</nuxt-link
            >，玩家必須在時間結束之前摧毀它才能獲勝。玩家一開始有一個<nuxt-link
              to="/units/Jaguar_Warrior"
              >豹勇士</nuxt-link
            >，並且在路上收集士兵，但重要的是要避免和特拉斯卡拉部隊作戰和搶救被捕的戰士（包括<nuxt-link
              to="/units/Elite_Skirmisher"
              >戰矛兵</nuxt-link
            >，豹勇士和<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
            >）。玩家就必須從被征服的<nuxt-link to="/civs/Aztecs"
              >阿茲特克人</nuxt-link
            >（黃色）中奪取<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
            >，然後駛向湖的另一邊，在那可以找到<nuxt-link to="/units/Monk"
              >僧侶</nuxt-link
            >和資源。注意：玩家沒有一支非常龐大的軍隊，而且他們沒有<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >，所以用僧侶<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >敵人村民是明智的做法。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <ul>
            <li>
              起始時代:
              <img src="~assets/imperial_age.png" class="gg" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </li>
            <li>
              起始資源:<nuxt-link to="/resource/Wood">木頭</nuxt-link
              >:900，<nuxt-link to="/resource/Food">食物</nuxt-link
              >:900，<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >:900，<nuxt-link to="/resource/Stone">石頭</nuxt-link>:600
            </li>
            <li>人口上限:100</li>
            <li>
              開場擁有單位:
              <ul>
                <li>
                  <img
                    src="~assets/JaguarWarriorIcon.png"
                    class="gg"
                    alt=""
                  />豹勇士1個
                </li>
              </ul>
            </li>
            <li>
              大地之母單位:
              <ul>
                <li>
                  <img src="~assets/MonkIcon2.png" class="gg" alt="" />僧侶3個
                </li>
                <li>
                  <img
                    src="~assets/EagleWarriorIcon.png"
                    class="gg"
                    alt=""
                  />鷹勇士22個
                </li>
                <li>
                  <img
                    src="~assets/JaguarWarriorIcon.png"
                    class="gg"
                    alt=""
                  />豹勇士8個
                </li>
                <li>
                  <img
                    src="~assets/PikemanIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>5個
                </li>
                <li>
                  <img
                    src="~assets/EliteSkirmisherIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link
                  >13個
                </li>
                <li>
                  <img
                    src="~assets/OnagerIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>1個
                </li>
                <li>
                  <img
                    src="~assets/TransportShipIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>7個
                </li>
                <li>
                  <img
                    src="~assets/FastFireShipIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Fast_Fire_Ship">重型火戰船</nuxt-link
                  >2個
                </li>
              </ul>
            </li>
          </ul>
          <p>在難度中和難只會有19個鷹勇士和2個僧侶。</p>
          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>（綠色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家2
              </td>
              <td class="tc6">
                科爾特斯(藍色)<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
              </td>
              <td class="tc6">
                <div class="p4"></div>
                玩家3
              </td>
              <td class="tc6">征服阿茲特克(黃色)阿茲特克</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家4
              </td>
              <td class="tc6">特拉斯卡拉(紅色)阿茲特克</td>
            </tr>
          </table>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                破壞<nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
                >的世界奇觀結束他們在特諾奇提特蘭地影響。
              </li>
              <li>
                路上經過會給的任務
                <ul>
                  <li>營救被特拉斯卡拉囚禁的阿茲特克戰士們。</li>
                  <li>度過特斯科科湖，你可能可以安全地蒐集資源。</li>
                  <li>用僧侶招降特諾奇提特蘭的村民來建造新的營地。</li>
                </ul>
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                在你準備進攻以前你必須偷偷包圍西班牙和特拉斯卡拉軍隊。盡可能避免發生正面衝突。
              </li>
              <li>
                用你的鷹勇士在前面偵查，用重裝長槍兵與可能遭遇的<nuxt-link
                  to="/units/Conquistador"
                  >西班牙征服者</nuxt-link
                >作戰。
              </li>
              <li>
                盡管他們曾經屬於你的人民，但還是應該去摧毀特諾奇提特蘭的建築。當西班牙人被驅逐出去以後，這些城市還是可以重建。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                >回報:一支阿茲特克的豹勇士帶領著反抗隊伍。他必須在進入中部的特諾奇提特蘭冒險前在特斯科科湖的沿岸集結軍隊。
              </li>
              <li>
                塔巴斯科在地圖的北邊，他們座落在敵人之間，他們會在特定時間點被敵人擊敗，然後自殺身亡，只會留下一些不能訓練單位的建築物(例如:<nuxt-link
                  to="/building/House"
                  >房屋</nuxt-link
                >、<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
                >、<nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>)。
              </li>
              <li>
                特拉斯卡拉在湖北面沿岸部屬了很多單位，他們有一些僧侶和很多的鷹勇士。
              </li>
              <li>
                西班牙人佔領了特諾奇提特蘭。<nuxt-link to="/units/Conquistador"
                  >西班牙征服者</nuxt-link
                >，<nuxt-link to="/units/Missionary">傳教士</nuxt-link
                >和<nuxt-link to="/units/Mangonel">投石車</nuxt-link
                >對阿茲特克的步兵來說是頭疼的麻煩。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              你從一個戰鬥能力經過提升並代表<nuxt-link
                to="/units/hero/Cuauhtemoc"
                >庫奧赫特莫克</nuxt-link
              >的豹勇士開始，雖然這個豹勇士是否存活也不影響遊戲。科爾特斯一開始馬上在建造一個世界奇觀，在時間耗盡之前你必須摧毀它才能贏得勝利。向南移動可獲得一些士兵，並向北移動再獲得一些士兵和一個僧侶。你會被要求在北部的特拉斯卡拉基地釋放一些囚犯。再向北移動以獲得兩艘運輸船，但附近有特拉斯卡拉士兵。要么殺死他們，要么避免引起他們的注意（小心你的戰矛兵在遠處攻擊他們）並登上運輸船。這座橋由特拉斯卡拉重兵看守。
            </li>
            <li>
              當你穿過湖後，你會遇到兩個科爾特斯的征服者，你可以很容易地用你的重裝長槍兵殺死他們。進一步移動到地圖的西部，你會看到一個美洲虎柵欄（幾個美洲虎被限制在柵欄裡），你會看到一個特拉斯卡拉僧侶在外面。打開你的美洲虎柵欄（刪除任何一堵牆），讓美洲豹殺了僧侶，然後離開。繼續往北走會獲得一個中型投石車，準備迎擊6個特拉斯卡拉的豹勇士，擊敗他們後繼續你的旅程。
            </li>
            <li>
              繼續向北移動並收集部隊，然後到達特拉斯卡拉基地。你不應該浪費時間去摧毀建築物（你應該把你對特拉斯卡拉的立場設置為“中立”避免攻擊任何單位），專注於殺死阻擋你或攻擊你的士兵。當你要釋放你的同胞在特拉斯卡拉基地，你需要摧毀柵欄牆，附近橋上的特拉斯卡拉士兵會攻擊你。
            </li>
            <li>
              一旦你被發現，被征服的阿茲特克人就會有一艘<nuxt-link
                to="/units/War_Galley"
                >弩砲戰船</nuxt-link
              >攻擊你。你可以試著用任何一個士兵把它引到岸邊，用你的中型投石車把它摧毀，或者試著用你的僧侶來招降它（被征服的阿茲特克人有研究<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >，所以它將會沉沒）繼續過橋，直到你到達特諾奇提特蘭，你將在港口獲得兩艘重型火戰船和幾艘運輸船。附近會有兩個西班牙征服者，殺死他們!
            </li>
            <li>
              當系統要求你穿越湖面到地圖的東部並在那裡建立基地時，實際上即使沒有這樣做的情況下也能獲得勝利。有良好的微操作，只要你還有中型投石車，就可以簡單地開始摧毀這個時刻就在你旁邊的世界奇觀，而且還應該在建設中。你只需要摧毀一個屬於被征服的阿茲特克人的門，並開始攻擊這個世界奇觀。殺死正在建造它的村民，用你的中型投石車和步兵來摧毀這個奇觀，同時保護你的投石車。請注意，有兩個被征服的阿茲台克<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >在奇觀後面會攻擊你，而你對奇觀的圍攻也會吸引來自科爾特斯的敵人。
            </li>
            <li>
              如果你選擇穿越湖泊，建立你的基地，請提防上面提到的兩個阿茲特克城堡，以及科爾特斯的海軍。你可能需要透過急轉彎，在東北方的一個小島附近航行，然後轉向顯示的區域來避開它們。卸下你的部隊，繼續前進，你會得到一個<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >和一些僧侶，系統會建議用僧侶招降特諾奇提特蘭的一些村民，並讓他們建立你的基地。
            </li>
            <li>
              一旦你摧毀了這個奇蹟，科爾特斯會立即投降，你和被征服的阿茲台克人會一起宣布獲勝者，儘管狀態是“敵對”。
            </li>
          </ul>
          <h3>決定版變更點</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              人口上限由75改100。
            </li>
          </ul>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              場景開始戰鬥能力提升的豹勇士是在蒙提祖馬戰役系列的旁白庫奧赫特莫克。需要注意的是，儘管這個角色用庫奧赫特莫克的聲音說話，他仍然只被認定為“豹勇士”，即使死亡也沒關係。
            </li>
            <li>
              這個場景是庫奧赫特莫克親自出現在蒙提祖馬戰役遊戲中的唯一一次。
            </li>
            <li>
              當你完成城市中心的建設，你會被告知有關東北部的小島充滿了黃金，是獻給美洲虎神的情報。另外，當完成<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >建設時，科爾特斯會攻擊玩家的基地。
            </li>
            <li>
              開幕動畫以“由特諾奇提特蘭的俘虜庫奧赫特莫克傳給你”開始，而庫奧赫特莫克在<nuxt-link
                to="/batt"
                >戰役</nuxt-link
              >中獨自出發，可以開始戰鬥。為了使動畫的情節準確，開發者該在大地之母的單位中加入提升過戰鬥力的豹勇士，而不是一個普通的單位。或者開場動畫應該簡單地說：“由特諾奇提特蘭的捷豹戰士庫奧赫特莫克傳授給你”。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                悲痛之夜
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/蒙提祖馬四.png" alt="" />
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Montezumaa">蒙提祖馬</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第三章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Quetzalcoatl">羽蛇神</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Boiling_Lake">沸騰之湖</nuxt-link>
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
