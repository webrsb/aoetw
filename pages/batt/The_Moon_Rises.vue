<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>撥雲見月</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b><nuxt-link to="/batt/The_Moon_Rises">撥雲見月</nuxt-link></b
            >是《<nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >》中<nuxt-link to="/batt/Draculaa">德古拉戰役</nuxt-link
            >的第四關<nuxt-link to="/batt">戰役</nuxt-link>。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                3000／<nuxt-link to="/resource/Wood">木頭</nuxt-link>6000
                <nuxt-link to="/resource/Food">食物</nuxt-link>／3000
                <nuxt-link to="/resource/Gold">黃金</nuxt-link>／300
                <nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">145</td>
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
                <div class="p2"></div>
                玩家1：
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>（紅色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p7"></div>
                玩家2：
              </td>
              <td class="tc6" width="35%">
                瓦拉幾亞（灰色）<nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              </td>
              <td class="tc6" width="15%">
                <div class="p7"></div>
                玩家3：
              </td>
              <td class="tc6" width="35%">
                瓦拉幾亞（灰色）<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p7"></div>
                玩家4：
              </td>
              <td class="tc6" width="35%">
                瓦拉幾亞（灰色）<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
              </td>
              <td class="tc6" width="15%">
                <div class="p6"></div>
                玩家6：
              </td>
              <td class="tc6" width="35%">
                奧斯曼軍營（紫色）<nuxt-link to="/civs/Turks">土耳其</nuxt-link>
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">中立</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家8：
              </td>
              <td class="tc6">鄉村（黃色）斯拉夫</td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家5：
              </td>
              <td class="tc6">奧斯曼先鋒部隊（紫色）土耳其</td>
              <td class="tc6">
                <div class="p6"></div>
                玩家7：
              </td>
              <td class="tc6">奧斯曼軍隊（紫色）土耳其</td>
            </tr>
          </table>

          <h3>開場</h3>
          <li>
            伊斯特萬城堡陣營:伊斯特萬，1位<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >，5位<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
            >，5位<nuxt-link to="/units/Arbalest">勁弩兵</nuxt-link
            >，5位<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
          </li>
          <li>
            雅各布城堡陣營:雅各布，1位村民，5位弩兵，5位勁弩兵，5位火槍兵，1台<nuxt-link
              to="/units/Onager"
              >中型投石車</nuxt-link
            >
          </li>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/units/hero/Vlad_Dracula"
                  >佛列德-德古拉</nuxt-link
                >必須活下去。
              </li>
              <li>伊斯特萬必須活下去。</li>
              <li>雅各布必須活下來。</li>
            </ul>
            <ol>
              <li>
                取五百<nuxt-link to="/civs/Turks">土耳其人</nuxt-link
                >首級，震懾敵軍！
              </li>
              <li>
                突襲村莊，掠奪燒毀一切！並且，剿滅你見到的所有奧斯曼軍隊。
              </li>
              <li>拖住敵人進攻15分鐘。</li>
              <li>伯恩納里城堡不能被攻陷。</li>
              <li>走山路去東南方與瓦拉幾亞軍隊會面。</li>
              <li>整裝待發將土耳其軍營夷為平地！</li>
              <li>
                德古拉必須逃往匈牙利！伯恩納里城堡的下水道通向一個山川，德古拉在那裡有只早就就緒的小船。讓德古拉躲進城堡從下水道逃跑！
              </li>
            </ol>
          </div>

          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                注意：在某些特定的場景下地圖的一部分或者全部可能無法進入。目標只限於當前可以進入的區域。
              </li>
              <li>
                場景的第一部分是一個描述德古拉對第一次奧斯曼入侵的回應的片段。你只需要坐著欣賞就行
              </li>
              <li>
                每個堡壘有一些強勢和弱勢以及生產不同的軍隊，所以使用相應的防禦策略並提防敵人的<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >！
              </li>
              <li>
                德古拉的燒焦土地戰役要求整個鄉村都被夷為平地（摧毀除<nuxt-link
                  to="/building/House"
                  >房屋</nuxt-link
                >以外的所有<nuxt-link to="/building">建築</nuxt-link
                >或者按指示操作）以及打敗奧斯曼先鋒部隊。
              </li>
              <li>
                對奧斯曼軍營的夜襲是極具勇氣的但也註定要失敗的。一旦你損失了大部分軍隊你會接到新的目標。
              </li>
              <li>弗列德‧德古拉和他的瓦拉幾亞王國可以晉級到帝王時代。</li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                德古拉在首都塔格韋斯特開始了征途，他打算率領兩萬兩千大軍（灰色）到多瑙河埋伏附近的奧斯曼軍隊。
              </li>
              <li>
                奧斯曼（紫色）是最危險的敵人。他們進入瓦拉幾亞的先鋒部隊包括蘇丹禁衛隊，<nuxt-link
                  to="/units/Archer_Units"
                  >弓箭手</nuxt-link
                >，重騎兵，攻城武器和<nuxt-link to="/units/Pikeman"
                  >重裝長槍兵</nuxt-link
                >，並且他們還會在前線建立軍營。
              </li>
              <li>
                德古拉的瓦拉幾亞王國（灰色）控制著地圖上大多數的小城鎮和堡壘，不惜一切代價也要保護它們。
              </li>
              <li>
                奧斯曼先鋒軍（紫色）是一個主要的威脅，並且有一些分佈在地圖上的單位遲早要對付。
              </li>
              <li>
                鄉村（黃色）幾乎沒有威脅，因為只有一小撮人保護他們的建築。但如果被土耳其人佔領了，他們可以給大奧斯曼軍隊提供供給。
              </li>
              <li>
                在地圖的遠北處是伯恩納里城堡，那是德古拉的城堡（注：現為羅馬尼亞著名景點，懸崖上的吸血鬼城堡）。這是背水一戰的最佳地點。
              </li>
            </ul>
          </div>

          <h3>攻略</h3>
          <div class="hrn1"></div>

          <ul>
            <li>
              情景開始時有一些“過場動畫”顯示德古拉和盟友擊敗撤退的土耳其人。最終，玩家可以控制兩個獨立的城堡，由各自的指揮官守衛。目標是獲得500擊殺數，但土耳其人（橙色）將無情地攻擊玩家的堡壘。
            </li>
            <li>
              每座城堡都有一個村民。玩家需要他修理<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >跟城堡，所以他應該得到很好的保護。玩家開局有很多弓箭手，這些弓箭手應該駐紮在前方防禦塔中。此外，每個城堡都有一個兵營，玩家應該訓練一些長槍手用於對抗土耳其<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >。中央城堡有一個<nuxt-link to="/building/Monastery"
                >修道院</nuxt-link
              >，而東部城堡有一個<nuxt-link to="/building/Stable"
                >馬廄</nuxt-link
              >，所以玩家可以建造<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >和<nuxt-link to="/units/Knight">騎士</nuxt-link>。
            </li>
            <li>
              東部城堡比較危險，因為它經常會受到<nuxt-link to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >的攻擊。玩家應該使用他們的<nuxt-link to="/units/hero"
                >英雄</nuxt-link
              >和一些<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link
              >或騎士摧毀他們。中央城堡的主要威脅是<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >和<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >，但它們只能到達塔的範圍，因此玩家可以在需要時摧毀它們並修復箭塔。
            </li>
            <li>
              在某些情況下，土耳其人將停止攻擊。這將允許玩家建立一支突擊部隊。東部城堡的兩側是西部的奧斯曼帝國營地（由箭塔守衛），以及南部的一個完整堡壘，所以玩家可能不得不進攻以獲得500次擊殺。中央城堡北面有一個奧斯曼營地，所以如果沒有敵方軍隊攻來，玩家應該派出長槍手和弓箭手去攻擊敵人。騎兵應該留在兩座城堡內預防土耳其攻城武器來犯。
            </li>
            <li>
              一旦玩家獲得500次擊殺，他們將獲得德古拉和騎兵部隊的控制權。下一個目標是摧毀黃色的所有<nuxt-link
                to="/building"
                >建築物</nuxt-link
              >; 他們在西邊有一個守衛良好的村莊（當心<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >），北邊的一個漁村，以及藍色村莊西部和東部的<nuxt-link
                to="/building/Mill"
                >磨坊</nuxt-link
              >和礦區。許多玩家在這裡遇到麻煩，認為他們已經破壞所有建築物但沒有觸發接下來的劇情。繼續探索地圖的整個西側，黃色可能有流浪村民。紫色（在早期的“過場動畫”中大部分被摧毀）也有部隊守衛著北方的漁村。在繼續之前，玩家應該注意在摧毀黃色建築物時給與的資源，因為這些將很快就會派上用場。如果你在前一階段有任何僧侶在拉斯諾夫城堡活著，你可以隨時在那裡治愈你的部隊。
            </li>
            <li>
              一旦德古拉滿意地掠奪村莊後，玩家就可以控制遠方北部的伯恩那里城堡。土耳其人（橙色）將無情地進攻，玩家應該提防他們的火炮和<nuxt-link
                to="/units/Trebuchet"
                >投石機</nuxt-link
              >。玩家應該使用<nuxt-link to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >，弩兵或<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
              >來攔截敵軍，用<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >訓練騎士或騎士隊摧毀攻城武器。德古拉應該在城堡的東部以策安全。
            </li>
            <li>
              存活的關鍵是將騎兵（包括德古拉）在圍攻開始時迅速出城摧毀火炮和巨型投石機;然後快速沖回大門內，並將其鎖定。敵人不會補上這些的單位，從而消除了最大的威脅。然後玩家應該將戰矛兵放滿中間的塔，並將其餘的軍隊作為誘餌。Paramount
              既能守衛大門，也能保護火槍兵，同時保持後者在一定距攻擊近戰單位。最好的方法是將它們放在塔後面並用守衛模式。繼續訓練戰矛兵和長槍兵作誘餌。不要停止生產騎士單位。長槍兵主要是廉價誘餌，而戰矛兵則反擊弩兵和<nuxt-link
                to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >。投石車會成為完全駐滿兵的中間塔的目標，而衝撞車會是火槍兵和噴火塔的目標。玩家應該經常保存，並記錄時間，<b
                >因為<nuxt-link to="/building/Gate">城門</nuxt-link
                >必須在時間用完之前解鎖並且所有權轉移到瓦拉幾亞手上，不然這場戰役不會獲勝!</b
              >
            </li>
            <li>
              15分鐘後，玩家的部隊變回灰色，這時玩家只能控制德古拉。他應該沿著南部的山路與一支大型騎兵部隊聯繫，然後往西走攻擊橘色陣營。德古拉本打算這是一次突擊，但這一切都是徒勞的。德古拉應該保持安全並直接將他送回伯恩那里城堡（這就是為什麼大門必須在圍城結束時解鎖，否則德古拉無法回到城堡），注意<nuxt-link
                to="/building/Guard_Tower"
                >防禦箭塔</nuxt-link
              >的<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
              >，同時觀看騎兵軍隊慢慢屠殺一切。
            </li>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li></li>
          </ul>
          <h3>芝麻小事</h3>
          <div class="hrn1"></div>
          <ul>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">撥雲見月</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/DU4.jpg" alt="" /></div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役資訊</div>
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
              <nuxt-link to="/batt/Draculaa">德古拉戰役</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第二章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Breath_of_the_Dragon"
                >龍之喘息</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Night_Falls">暗夜降臨</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、賜齡協助編輯。</div>
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
