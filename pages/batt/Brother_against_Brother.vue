<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>兄弟鬩牆</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>兄弟鬩牆</b>是<nuxt-link to="/batt/El_Cida">熙德戰役</nuxt-link
            >的第一個場景。
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
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源:</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木頭</nuxt-link>:300，<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >:200，<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >:200，<nuxt-link to="/resource/Stone">石頭</nuxt-link>:300
              </td>
              <td class="tc1" width="15%">人口上限:</td>
              <td class="tc2" width="5%">100</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家1：
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #ffd700;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p4"></div>
                玩家2：
              </td>
              <td class="tc6" width="35%">
                <nuxt-link to="/units/hero/King_Sancho">桑喬國王</nuxt-link>
              </td>
              <td class="tc6" width="15%">
                <div class="p1"></div>
                玩家4：
              </td>
              <td class="tc6" width="35%">
                <nuxt-link to="/units/hero/King_Alfonso">阿方索國王</nuxt-link
                >（藍色）西班牙
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家6：
              </td>
              <td class="tc6">農奴（黃色）西班牙</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家3：
              </td>
              <td class="tc6">
                桑喬國王的<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
                >（黃色）西班牙
              </td>
              <td class="tc6">
                <div class="p1"></div>
                玩家5：
              </td>
              <td class="tc6">阿方索國王的軍隊（藍色）西班牙</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/hero">英雄</nuxt-link>:<nuxt-link
                to="/units/hero/El_Cid"
                >熙德</nuxt-link
              >。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              6位<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
              >，3位<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >，6位<nuxt-link to="/units/Monk">憎侶</nuxt-link>。
            </dd>
          </dl>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>熙德必須活著。</li>
              <li>
                接管卡斯蒂利亞軍隊，俘虜桑喬國王雄心勃勃的兄弟阿方索國王。阿方索的<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >位於西北方向，橫跨河流。
              </li>
              <li>熙德本人必須把被俘的阿方索國王帶到桑喬國王的比賽場地。</li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>卡斯提爾的居民都祈求神賜福於熙德當他們見到他和他的軍隊。</li>
              <li>
                卡斯提爾大部分的石頭已經被開採用於修建城堡，幾乎所有留在該地區的石頭都在阿方索國王的領土上。
              </li>
              <li>
                熙德不能進入<nuxt-link to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                熙德(紅色)一開始只有一人，只有得到桑喬國王的認可才能統帥軍隊。
              </li>
              <li>桑喬的屬下(黃色)忠於桑喬並對熙德友好，可提供幫助。</li>
              <li>
                阿方索國王(藍色)是你的敵人。他一座防禦堅固的城市。你初始的部隊也許能破壞他的城市，你需要訓練一些增援部隊，尤其是<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >，來摧毀城堡
                ，北部的高帕吉拉和南部的卡斯提爾的邊界有豐富資源和空間。
              </li>
              <li>
                阿方索訓練騎士和<nuxt-link to="/units/Pikeman"
                  >重裝長槍兵</nuxt-link
                >，你也要訓練自己的重裝長槍兵來保護自己的騎兵。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              你開始只控制熙德，以他的冠軍形式，並且必須戰勝雙手劍士。之後，在城堡旁可以獲得馬匹，返回決鬥場擊敗<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >。很快，你會收到來自桑喬國王的資源，<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >和一支軍隊。
            </li>
            <li>
              大部分的土地都已經定居，不然就是太崎嶇不平，不能讓你建立一個基地。最好的位置在阿方索國王基地外的地圖中心。當熙德過河的時候，農奴們會轉變成你的隊伍（幾個村民，農場，房子，一個工廠和一個<nuxt-link
                to="/building/Lumber_Camp"
                >伐木場</nuxt-link
              >）。在靠近懸崖北邊建立一個鎮中心，讓村民方便採集食物和木材。你可以在派三個村民到南方去獵鹿。在集中資源建造<nuxt-link
                to="/building/Mill"
                >磨坊</nuxt-link
              >，<nuxt-link to="/building/House">房屋</nuxt-link
              >，馬厩和<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >的同時，繼續創造村民。你的目標盡快到達<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >，你也可以建立一個<nuxt-link to="/building/Market"
                >市場</nuxt-link
              >來平衡你的資源。
            </li>
            <li>
              當你在建立你的經濟時，派一個騎兵部隊去南部區域偵察。你可以在那裡找到一些軍隊單位加入你。同時，送熙德到地圖的西邊角找<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >。把裡面的遺跡藏起來，然後把<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >們帶回你的基地。你可以使用<nuxt-link to="/units/Conquistador"
                >征服者</nuxt-link
              >掩護，以便僧侶可以安全地走過去。
            </li>
            <li>
              保持你的軍隊在附近戒備，因為阿方索國王發出小小的攻擊。一旦僧侶到達，用他們來治療你的受傷部隊。
            </li>
            <li>
              當你到達城堡時代，在阿方索大門下面建造一個城堡。門外有石頭，但如果受到騷擾，可以使用市場。在收集資源時，城堡首先瞄準重裝長槍兵、僧侶，因為他們是最危險的。只要有可能，就用城堡來摧毀城門和箭塔。建造一個圍城工場，盡可能多生產騎士和征服者。如果你還剩下任何步兵，讓他們也前往前線作戰。
            </li>
            <li>
              當你準備入侵時，使用<nuxt-link to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >和騎士摧毀防禦性建築和軍事建築，並使用征服者來瞄准敵方單位。一旦拆下城堡，阿方索國王就會變成你的控制權。讓他遠離戰鬥，因為如果他死了，你會輸。一旦他安全了，就把他和熙德送到你開始的地圖的東邊角落。
            </li>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              如果熙德試圖從比賽中跑出（離開比賽地區太遠），桑喬國王會說熙德是一個懦夫，改變對敵人的外交立場和攻擊他。在這種情況下，由於不能再建立一個基地，所以這種情況不能以正常方式獲得勝利。
            </li>
            <li>
              儘管玩家可以在西邊佔領修道院，但玩家將無法訓練僧侶，直到桑喬國王的比賽獲勝。
            </li>
            <li>
              電腦很笨，不會出<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >。
            </li>
            <li>
              熙德可能會完成比賽而不會取得馬匹。贏得比賽之後，熙德必須生存”的目標不會再出現，直到玩家取回馬。如果
              熙德死在這種情況下，玩家不會被打敗。
            </li>
            <li>
              如果遊戲運行時間足夠長，有可能（雖然不是很好的辦法）沿著營地後面的水邊進入阿方索國王的基地。這是由於他的村民過度砍木頭。
            </li>
            <li>
              如果玩家的士兵長時間站在農奴的<nuxt-link to="/building/Farm"
                >農田</nuxt-link
              >上，會有三個警告告訴你離開。如果士兵繼續存在，農奴會宣布你是敵人。（但是他們不會去攻擊。）熙德本人必須親自到農奴那裡去，他們會為他們“苛刻的話”道歉並加入你們。
            </li>
          </ul>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              羅德里戈·迪亞茲·德·維瓦爾生於比瓦爾地區的貴族家庭。羅德里戈由於英勇善戰，贏得摩爾人的尊敬，稱他為El
              Cid（Al-Sayyid，阿拉伯語對男子的尊稱），中文翻譯為：「
              熙德」。卡斯提爾國王阿方索六世因熙德對摩爾人作戰功勳卓著，將自己的堂妹西蒙娜許配他為妻。
            </li>
            <li>
              1080年，
              熙德因未經阿方索國王的同意，擅自對摩爾人治下的托萊多城發起進攻，引起阿方索六世強烈不滿，於次年受流放國外的處分。熙德被迫率領一部分親友和追隨者離開卡斯提爾，投奔薩拉戈薩的摩爾埃米爾軍中效力，並成為埃米爾麾下一員大將。熙德後來叛離了摩爾實力重新效忠卡斯提爾，由於他驍勇、慷慨大方、寬宏大量，伊比利亞半島各地許多的勇士慕名前來投奔，熙德的勢力迅速壯大，並不斷地與摩爾人作戰，屢戰屢勝。
            </li>
            <li>
              1094年，熙德攻下了瓦倫西亞及其周圍地區，成為這一地區實際上的統治者。1099年，熙德在瓦倫西亞被摩爾人圍城時因饑荒或瘟疫逝世，他的妻子西蒙娜攜其遺體回到卡斯提爾。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                兄弟鬩牆
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/EIC 1.jpg" alt="" /></div>
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
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">熙德</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
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
              <nuxt-link to="/batt/Battles_of_the_Conquerors"
                >征服者戰役</nuxt-link
              >第二章第一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Enemy_of_my_Enemy"
                >我敵人的敵人</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Wun，裕暉協助編輯</div>
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
