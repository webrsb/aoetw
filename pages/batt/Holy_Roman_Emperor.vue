<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>羅馬皇帝</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>羅馬皇帝</b> 舊譯<b>神聖羅馬皇帝</b>為<nuxt-link
              to="/batt/Barbarossa"
              >巴巴羅薩戰役</nuxt-link
            >的第一關劇情關卡，為巴巴羅薩統一德國境內諸侯的<nuxt-link to="/batt"
              >戰役</nuxt-link
            >。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>遊戲者</h3>
          <ul>
            <li>
              <div class="p2"></div>
              <strong
                >遊戲者（<nuxt-link to="/civs/Teutons">條頓人</nuxt-link
                >）</strong
              >：遊戲者本身，將從地圖中央開始。
            </li>
          </ul>
          <h3>同盟</h3>
          <ul>
            <li>
              <div class="p7"></div>
              <strong
                >庫曼人（<nuxt-link to="/civs/Cumans">庫曼</nuxt-link>）</strong
              >：他們在地圖東邊，擁有軍隊，但沒有城鎮和<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >。庫曼軍隊由三台<nuxt-link to="/units/Siege_Onager"
                >重型投石車</nuxt-link
              >、七名<nuxt-link to="/units/Kipchak">精銳欽察</nuxt-link
              >和三名<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >組成。只要給他們200黃金作為貢品他們就會加入玩家麾下。
            </li>
          </ul>
          <h3>敵人</h3>
          <ul>
            <li>
              <div class="p1"></div>
              <strong
                >奧地利（<nuxt-link to="/civs/Goths">哥德</nuxt-link>）</strong
              >：奧地利位於東南部，它是地圖上較弱的派系之一，但它們的遺跡由<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >保護著。它也靠近波西米亞和巴伐利亞這些強大的城鎮，主要使用<nuxt-link
                to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >和<nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>。
            </li>
          </ul>
          <ul>
            <li>
              <div class="p3"></div>
              <strong>巴伐利亞（條頓）</strong
              >：南部的巴伐利亞州是地圖上較強的城鎮之一。主要在戰鬥中使用<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >和<nuxt-link to="/units/Scorpion">弩砲</nuxt-link
              >。他們的城鎮被<nuxt-link to="/building/Stone_Wall"
                >石牆</nuxt-link
              >圍繞著。
            </li>
          </ul>
          <ul>
            <li>
              <div class="p4"></div>
              <strong>薩克森（條頓）</strong
              >：在北方有一個圍牆的城鎮。不過他們的牆壁沿著河流東南方向有一個洞，可以讓玩家做偷襲。他們主要在戰鬥中使用<nuxt-link
                to="/units/Archer"
                >弓箭手</nuxt-link
              >和<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link>。
            </li>
          </ul>
          <ul>
            <li>
              <div class="p8"></div>
              <strong>洛林（條頓）</strong
              >：洛林位於西北部。他們的軍隊主要是<nuxt-link to="/units/Spearman"
                >長槍兵</nuxt-link
              >和騎士以及一些<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >組成。
            </li>
          </ul>
          <ul>
            <li>
              <div class="p5"></div>
              <strong
                >波希米亞（<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
                >）</strong
              >：波希米亞人起初相當薄弱，只有東部的一個小鎮。儘管如此，隨著遊戲的進展，它們會迅速成長並成為一個強大的陣營。
            </li>
          </ul>
          <ul>
            <li>
              <div class="p6"></div>
              <strong
                >勃根地（<nuxt-link to="/civs/Franks">法蘭克</nuxt-link
                >/勃根地）</strong
              >：勃艮第是地圖上較弱的對手之一，他們對玩家不構成威脅但他們的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >分散在他們的村莊四周。他們的位置在玩家城鎮的西南方，他們主要使用<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >和<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >以及少數騎士。建議首先奪取勃艮第的<nuxt-link to="/elements/Relic"
                >遺跡</nuxt-link
              >。它們也是地圖上唯一的西歐<nuxt-link to="/civs">文明</nuxt-link
              >。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                羅馬皇帝
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/BRA 1.jpg" alt="" /></div>
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Barbarossa">巴巴羅薩</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Teutons">條頓人</nuxt-link>
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第五章之一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Henry_the_Lion">猛獅亨利</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、竺叡協助編輯。</div>
      </div>
    </div>
    <h2>戰役說明</h2>
    <div class="hrn1"></div>
    <div class="row">
      <div class="col-md-4">
        <h3>開場設定</h3>
        <ul>
          <li>
            <strong>起始時代：</strong>
            <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >
          </li>
          <li>
            <strong>起始資源：</strong>200<nuxt-link to="/resource/Wood"
              >木頭</nuxt-link
            >／200<nuxt-link to="/resource/Food">食物</nuxt-link>／500<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >，500<nuxt-link to="/resource/Stone">石頭</nuxt-link>
          </li>
          <li><strong>人口上限：</strong>125</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>起始單位</h3>
        <ul>
          <li>
            <img
              class="gg"
              src="~assets/VillagerMaleIcon.png"
              alt=""
            /><nuxt-link to="/units/Villager">村民</nuxt-link> 6
          </li>
          <li>
            <img
              class="gg"
              src="~assets/LightCavalryIcon.png"
              alt=""
            /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link> 1
          </li>
          <li>
            <img class="gg" src="~assets/KnightIcon.png" alt="" /><nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >
            3
          </li>
          <li>
            <img class="gg" src="~assets/ManAtArmsIcon.png" alt="" /><nuxt-link
              to="/units/Man-at-Arms"
              >裝甲步兵</nuxt-link
            >
            3
          </li>
          <li>
            <img class="gg" src="~assets/MangonelIcon.png" alt="" /><nuxt-link
              to="/units/Mangonel"
              >輕型投石車</nuxt-link
            >
            1
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>大地之母</h3>
        <ul>
          <li>無</li>
        </ul>
      </div>
    </div>
    <h2>主要任務</h2>
    <div class="hrn1"></div>
    <div class="n1">
      <ol>
        <li>自德國的領地內奪取四個遺跡。</li>
      </ol>
    </div>
    <h2>任務提示</h2>
    <div class="hrn1"></div>
    <div class="n1">
      <ul>
        <li>
          由於帝國正面臨著許多的敵人，因此最好能在他們真正威脅到帝國存亡之前先解決掉其中一、兩個。
        </li>
        <li>
          切記，只有<nuxt-link to="/units/Monk">僧侶</nuxt-link
          >可以運送遺跡。記得要隨時有僧侶可供運送你找到的遺跡。
        </li>
        <li>
          你可以從敵軍<nuxt-link to="/building/Monastery">修道院</nuxt-link
          >上方是否標有旗子，判斷是否有遺跡在內。要奪回存放於敵軍修道院中的遺跡的唯一方法，就是將該修道院摧毀。
        </li>
      </ul>
      <h2>芝麻小事</h2>
      <div class="hrn1"></div>
      <div class="n1">
        <ul>
          <li>
            玩家一開始會擁有一隻免費的<nuxt-link to="/units/Light_Cavalry"
              >輕騎兵</nuxt-link
            >，這是條頓人所無法訓練的。
          </li>
          <li>巴巴羅薩其實是洛林公爵。</li>
          <li>
            雖然洛林出現在地圖北邊，但其實洛林是在德國（日耳曼）境內的南邊而且就在巴伐利亞西邊、勃艮第東邊。決定版將該國更名成洛林。
          </li>
        </ul>
      </div>
      <h3>更新日誌</h3>
      <div class="hrn1"></div>
      <div class="n1">
        <h3>
          <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
        </h3>
        <ul>
          <li>
            人口上限由75改為125，波希米亞改成斯拉夫人，舊版斯瓦比亞更名洛林，蒙古人改為庫曼人，連帶地蒙古突騎改為精銳欽察。
          </li>
          <li>
            成就「條頓狂暴」：以全滅敵人的方式過關（庫曼勢力需存活）。
          </li>
          <li>
            更新#44725：如果有下載西方霸主的DLC，勃根地的文明會轉變成正確的勃根地人。
          </li>
        </ul>
      </div>
      <h2>攻略</h2>
      <div class="hrn1"></div>
      <div class="n1">
        <ul>
          <li>
            一開始盡快派村民到四個河流淺灘處圍牆，然後在西邊、北邊和東邊的牆後各蓋一座塔駐守各兩個弓兵，輕型投石車放在北邊的牆後幫忙防守。之後開始打羊跟豬發展經濟，記得在東北邊的金礦<nuxt-link
              to="/resource/Stone"
              >石礦</nuxt-link
            >區再蓋一個<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >，升級<nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
            >後就專注升級到<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >。敵人會不時派軍隊騷擾你，駐紮弓兵或是<nuxt-link
              to="/units/Hand_Cannoneer"
              >火槍兵</nuxt-link
            >的箭塔是對付他們的最好選擇。
          </li>
          <li>每個國家的遺跡數如下所示：</li>
          <ul>
            <li>
              薩克森0；勃艮地1；洛林1；波希米亞1；奧地利2；巴伐利亞1。
            </li>
          </ul>
          <li>
            以下攻略以最簡單取得四個遺跡為考量：勃艮地、洛林、波希米亞跟奧地利是主要目標，這些城鎮沒有圍牆比較容易進攻。最初的目標請放在勃艮地，這座城鎮只有弓兵、矛兵跟一名僧侶保護，還有幾座箭塔，在<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >建造兩座<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >用騎士摧毀看到的所有建築，再派輕型衝撞車摧毀城鎮中心勃艮地就會投降，你城鎮內的黃金很快就會用完，開採他們的黃金並升級所有單位。第二目標是洛林，這個城鎮完全沒有防禦工事只有許多長槍兵，如果用騎士的話你會經歷不小的損失，不過還是可以擊敗他們。如果這個時候你已經是帝王時代就用火槍兵對付他們。
          </li>
          <li>
            現在你手上有兩個遺跡了，下一個請直接選擇奧地利因為他們有兩個遺跡，他們有長劍兵、輕型衝撞車跟城堡保護城鎮，不過這在你的大軍眼中彷彿沒有穿衣服一樣，用<nuxt-link
              to="/units/Cavalier"
              >重裝騎士</nuxt-link
            >/<nuxt-link to="/units/Paladin">遊俠</nuxt-link>加上<nuxt-link
              to="/units/Trebuchet"
              >巨型投石機</nuxt-link
            >/<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
            >或是衝撞車摧毀看到的所有建築和單位，並讓僧侶把遺跡搬回修道院獲得勝利。
          </li>
          <li>
            巴伐利亞有圍牆、<nuxt-link to="/building/Guard_Tower"
              >防禦箭塔</nuxt-link
            >和城堡保護，他們也會訓練弩砲、騎士抵禦攻擊，是比較不好進攻的城鎮，不過玩家若想挑戰自己也可試試。波希米亞則會訓練弩兵和騎士，城鎮內有一個城堡，不過你也可以輕易摧毀他們奪取遺跡。
          </li>
          <li>
            地圖右下的庫曼人如果你給他們兩百黃金就可以獲得七隻精銳欽察、三隻馬弓騎兵和三台重型投石車，不過你不用他們幫助也可以贏得遊戲。
          </li>
          <li>
            <strong
              >注意！此關如果要拿到成就，則不能動到庫曼人，因為成就是靠觸發跳出來的，所以如果含庫曼滅掉就會瞬間勝利，造成成就來不及觸發。</strong
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
