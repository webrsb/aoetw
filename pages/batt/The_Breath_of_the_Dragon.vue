<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>龍之喘息</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>龍之喘息</b>是《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》<nuxt-link to="/batt/Draculaa">德古拉戰役</nuxt-link
            >的第三個<nuxt-link to="/batt">戰役</nuxt-link>，弗拉德•<nuxt-link
              to="/batt/Draculaa"
              >德古拉</nuxt-link
            >率領他的軍隊反對<nuxt-link to="/units/hero/Osman">奧斯曼</nuxt-link
            >帝國，首先在森林之間的一個狹窄的通道中伏擊奧斯曼軍隊。然後弗拉德把自己偽裝成一個貿易商，進入奧斯曼控制的朱爾朱鎮並佔領這個鎮。
          </p>
          <p>
            最後鎮壓剩下的五個鄉鎮，破壞他們的<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >，<nuxt-link to="/building/Castle">城堡</nuxt-link
            >和達斯特的清真寺（<nuxt-link to="/building/Wonder"
              >世界奇觀</nuxt-link
            >）。雖然達斯特是五個奧斯曼城鎮的主力軍，但是他們必須依靠其他四個的資源，玩家要征服他們破壞物資。歐索瓦供應<nuxt-link
              to="/resource/Wood"
              >木材</nuxt-link
            >；拉霍瓦供應<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >；諾沃賽洛供應<nuxt-link to="/resource/Food">食物</nuxt-link
            >；歐布魯西薩提供<nuxt-link to="/resource/Stone">石頭</nuxt-link>。
          </p>
        </div>
        <h3>AI</h3>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tc4" colspan="4" style="background: #2980b9;">
              玩家本身
            </td>
          </tr>
          <tr>
            <td class="tc6"><div class="p2">玩家1</div></td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>（紅色）
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
          </tr>
          <tr>
            <td class="tc6"><div class="p1" width="12%">玩家2</div></td>
            <td class="tc6" width="38%">
              瓦拉幾亞人（藍色）<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">
              同盟變敵對再變同盟在變敵對
            </td>
          </tr>
          <tr>
            <td class="tc6"><div class="p6" width="12%">玩家3</div></td>
            <td class="tc6" width="38%">奧斯曼帝國（紫色）土耳其</td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
          </tr>
          <tr>
            <td class="tc6"><div class="p7">玩家4</div></td>
            <td class="tc6">達斯特（灰色）土耳其</td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#2980b9;">
              敵對變同盟
            </td>
          </tr>
          <tr>
            <td class="tc6"><div class="p8" width="12%">玩家5</div></td>
            <td class="tc6" width="38%">諾沃賽洛（橙色）斯拉夫</td>
            <td class="tc6"><div class="p3" width="12%">玩家6</div></td>
            <td class="tc6" width="38%">歐布魯西薩（綠色）斯拉夫</td>
          </tr>
          <tr>
            <td class="tc6"><div class="p4">玩家7</div></td>
            <td class="tc6">
              歐索瓦（黃色）<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
            </td>
            <td class="tc6"><div class="p5">玩家8</div></td>
            <td class="tc6">拉霍瓦（淡藍色）斯拉夫</td>
          </tr>
        </table>

        <h3>主線故事和策略</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ol>
            <li>
              弗拉德•德古拉率領他的軍隊在地圖西北部的道路上，討論他們打擊奧斯曼軍隊的計劃。玩家約有8個<nuxt-link
                to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >、4個<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >、12個<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
              >、6個<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >、4個<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >、10個北歐盾劍兵和6個<nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >。火槍兵建議讓他們在路徑東側的森林中埋伏，以便敵人不知道是什麼打擊了他們，而匈牙利輕騎兵則建議在路徑的西邊埋伏，並準備從背後進行攻擊。請注意，奧斯曼帝國軍隊將在120秒內到達，如果玩家有任何單位站在路徑的中間，伏擊將會失敗，傷亡將會更大。奧斯曼帝國的軍隊將會有兩架<nuxt-link
                to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >在最後方，雖然容易被擊殺，但對站在一起的我方單位是巨大威脅。玩家將所有<nuxt-link
                to="/units/Archer_Units"
                >遠程單位</nuxt-link
              >放在東面，而所有近戰單位放在西面。
            </li>
            <li>
              在經過與奧斯曼帝國軍隊的戰鬥之後，德古拉將要在地圖中間取下由奧斯曼控制的朱爾朱（Giurgiu）。玩家將沿著小路向東南方向行進，並看到一個<nuxt-link
                to="/units/Trade_Cart"
                >貿易車隊</nuxt-link
              >，玩家抓住它後德古拉會把自己偽裝成一個貿易商（表面上是<nuxt-link
                to="/units/edmap/King"
                >國王</nuxt-link
              >），而在貿易車裡將會有兩個重裝長槍兵和兩個火槍兵。玩家將德古拉和貿易車隊帶入朱爾朱城。德古拉剩下的部隊將被留下，等待德古拉的信號。
            </li>
            <li>
              進入朱爾朱後，交易車會變成藏在裡面的四名士兵。玩家的目的是要奪取城堡，玩家必須試著把四個單位中的任何一個放到每個<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >中。然而，玩家必須盡量不要讓四名士兵聚在一起，在市中心右邊的角落那裡有一名土耳其士兵，他們會起疑。如果是德古拉本人靠近有奧斯曼帝國<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >的那座斷橋，騎士也會懷疑，說出這位“交易者”看起來很熟悉的語音。每當任何奧斯曼守衛提出對玩家的懷疑，該單位必須盡快離開視線，否則在15秒後奧斯曼人將會攻擊玩家。使用國王來奪取除了離城堡最近的塔和橋兩邊的塔之外的所有塔。讓一個<nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >駐紮在城堡附近，把另外兩名部隊放在<nuxt-link
                to="/building/Bombard_Tower"
                >火砲塔</nuxt-link
              >和城堡附近的塔裡。確定奪取所有的塔之後用剩餘的一位奪取旗幟旁的塔。這樣就引出<nuxt-link
                to="/units/Janissary"
                >土耳其火槍兵</nuxt-link
              >，讓玩家有足夠的時間使用長槍兵（其實任何單位都可）來奪取城堡。
            </li>
            <li>
              當玩家奪取城堡時，信號將被發送到德古拉的軍隊，他們將沖向朱爾朱，玩家必須擊敗奧斯曼守衛才能奪取整個久爾久。玩家應該用<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >和火砲塔首先摧毀兩台<nuxt-link to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >，因為它們對城堡和箭塔是一個很大的威脅，玩家必須保持這座城堡屹立不搖直到比賽結束。用遠程單位和<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >對付其他敵人單位。
            </li>
            <li>
              一旦奪取朱爾朱，玩家將準備征服剩下的五個奧斯曼城鎮。讓你的部隊駐紮在城堡<nuxt-link
                to="/elements/Regeneration"
                >回血</nuxt-link
              >，玩家應該征服四個小城鎮破壞敵人的物資。他們會向玩家求和，並給予資源。現在馬上在斷掉的橋和兩座建塔中間圍至少兩座牆，在<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >訓練<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
              >幫忙守護，另外城堡西邊也需要圍牆，這樣可以減緩黃色進攻的節奏。現在開始壯大你的經濟體並晉升到<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >。先訓練<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >、長槍兵和<nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link
              >，上城堡時代馬上將他們升級，之後馬上往綠色進攻，歐布魯西薩只有<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >、長槍兵跟戰船，你應該可以輕鬆擊敗他，用衝撞車撞毀城堡後他就會投降並給你資源。
            </li>
            <li>
              黃色在你上城堡時代前會有一隊以騎士、<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >和馬扎爾鏢驥兵的軍隊來犯，用長槍兵矛兵步兵應對，記得在<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >升級他們。如果有衝撞車用德古拉或是剩下的<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >處理。等你處理完綠色之後就換他們了。用<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >治療完東征部隊後馬上讓他們攻擊黃色，破壞他們的城鎮中心跟城堡他們就會投降。你也可以先用輕騎兵和德古拉到西北方他們的<nuxt-link
                to="/building/Lumber_Camp"
                >伐木場</nuxt-link
              >偷襲<nuxt-link to="/units/Villager">村民</nuxt-link
              >削弱他們的力量。
            </li>
            <li>
              南邊三國會不停的騷擾你，達斯特（灰色）會訓練火砲、土耳其火槍兵跟匈牙利輕騎兵；拉霍瓦會訓練<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >；諾沃賽洛則訓練輕騎兵和<nuxt-link to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >，這三國也都會訓練<nuxt-link to="/units/Naval_Vessels"
                >海軍</nuxt-link
              >，其實最簡單獲得勝利的方式就是建立強大的海軍，升級到<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >研發<nuxt-link to="/techs/Chemistry">化學</nuxt-link
              >，在碼頭訓練<nuxt-link to="/units/Cannon_Galleon"
                >火砲戰船</nuxt-link
              >然後用<nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link
              >護航，拉霍瓦跟諾沃賽洛的城鎮中心，達斯特的城堡和世界奇觀（之後會蓋）都在射程範圍內，轟炸完成後派遣你的軍隊掃掉達斯特的城鎮中心贏得勝利。
            </li>
          </ol>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                龍之喘息
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Draculaa3.png" alt="" />
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
              <nuxt-link to="/batt/Draculaa">德古拉</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">玩家顏色</td>
            <td class="unit4"><font color="red">紅色</font></td>
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
            <td class="unit4">失落的帝國戰役第二章第三</td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Return_of_the_Dragon"
                >龍之歸來</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Moon_Rises">撥雲見月</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由賜齡、裕暉協助編輯。</div>
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
