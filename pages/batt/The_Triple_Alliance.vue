<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>三城同盟</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>三城同盟</b>是《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》<nuxt-link to="/batt/Montezumaa">蒙提祖馬戰役</nuxt-link
            >的第二個場景。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <ul>
            <li>
              起始時代:
              <img src="~assets/feudal_age.png" class="gg" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >
            </li>
            <li>
              起始資源:<nuxt-link to="/resource/Wood">木頭</nuxt-link
              >:2000，<nuxt-link to="/resource/Food">食物</nuxt-link
              >:1000，<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >:1000，<nuxt-link to="/resource/Stone">石頭</nuxt-link>:500
            </li>
            <li>人口上限:100</li>
            <li>
              開場擁有單位:
              <ul>
                <li>
                  <img
                    src="~assets/EagleWarriorIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>4個
                </li>
              </ul>
            </li>
            <li>大地之母單位:無</li>
          </ul>
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
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6">特拉斯卡拉(紅色) 阿茲特克</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">同盟</td>
            </tr>
            <tr>
                            <td class="tc6">
                <div class="p4"></div>
                玩家3
              </td>
              <td class="tc6">特拉科潘（黃色）阿茲特克</td>
              <td class="tc6">
                <div class="p6"></div>
                玩家4
              </td>
              <td class="tc6">
                特斯科科（紫色）<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
              </td>

            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #999999;">中立</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家5
              </td>
              <td class="tc6">
                科爾特斯（藍色）<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
              </td>
            </tr>
          </table>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                到特斯科科的<nuxt-link to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >傳達戰爭動員令。
              </li>
              <li>到特拉科潘的城鎮中心傳達戰爭動員令。</li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>利用你的鷹勇士找到阿茲特克城鎮中心的位置。</li>
              <li>
                注意在溪流和河流的特拉斯卡拉<nuxt-link to="/units/War_Galley"
                  >弩砲戰船</nuxt-link
                >。
              </li>
              <li>
                阿茲特克有兩種強力<nuxt-link to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >:<nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
                >，可以輕易抵禦其他的步兵；還有鷹勇士，善於對<nuxt-link
                  to="/units/Archer_Units"
                  >弓兵</nuxt-link
                >、<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
                >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>。
              </li>
              <li>
                阿茲特克目前只能升級到<nuxt-link to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                >回報:蒙提祖馬的部隊(綠色)一開始只有少量的鷹勇士，我們必須拜訪三城同盟中的另外兩個成員，特拉科潘(黃色)和特斯科科(紫色)。
              </li>
              <li>
                特拉科潘在地圖西南方，在隱藏的神廟旁，他們訓練劍兵和鷹勇士，而特斯科科則在東北方，會訓練<nuxt-link
                  to="/units/Plumed_Archer"
                  >羽毛箭射手</nuxt-link
                >和<nuxt-link to="/units/Mangonel">投石車</nuxt-link>。
              </li>
              <li>
                所有的單位都被用來進攻位於河流北面的特拉斯卡拉(紅色)，特拉斯卡拉以<nuxt-link
                  to="/units/Archer"
                  >弓箭手</nuxt-link
                >、步兵和瘋狂的巫師而聞名。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              玩家一開始有4個鷹勇士要到他們馬雅和阿茲特克盟友，特拉科潘（黃色）和特斯科科（紫色）傳遞開戰協定。之後，玩家將接收一些<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >，並摧毀特拉斯卡拉人（紅色）的四個城鎮中心。之後盟友就會背叛成為敵人，玩家必須打敗他們才能贏得勝利。可以預先把石頭全部在同盟家蓋城堡。
            </li>
            <li>
              如果玩家將10個豹勇士帶到地圖中央隱藏的<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >（在由特拉斯卡拉<nuxt-link to="/building/Gate">城門</nuxt-link
              >，牆壁，<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >以及美洲豹和<nuxt-link to="/units/hero/Ornlu_the_Wolf"
                >灰狼歐魯</nuxt-link
              >守衛的地方），玩家將獲得雨中的祝福（豹勇士將獲得400<nuxt-link
                to="/elements/Hit_points"
                >生命值</nuxt-link
              >）。可以的話盡可能多帶，因為他們都會得到+400
              HP。但是進攻時要注意敵人的僧侶的感化。
            </li>
            <li>
              最後敵人<nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
              >到達（藍色科爾特斯），並宣佈如果沒有找到所有<nuxt-link
                to="/civs/Aztecs"
                >阿茲特克人</nuxt-link
              >黃金，他們將不會返回西班牙。為了證明這一點，他們把所有的<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >都弄沉了。
            </li>
            <li>
              科爾特斯(藍色)在本<nuxt-link to="/batt">戰役</nuxt-link
              >中不會出現，只會在地圖的東方有一頭狼代表他們陣營。當所有敵人都被擊敗時科爾特斯就會乘著船從北方出現，而阿茲特克人則誤以為他是羽蛇神。然後玩家跟科爾特斯會一同獲得勝利儘管不是同盟。
            </li>

          </ul>
                    <h3>決定版變更點</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              人口上限由75改為100。
            </li>
          </ul>
          <h3>細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              (bug)中間的神廟任務玩家將需要攜帶10名“精銳”豹勇士，不過玩家只能演進到城堡時代。
            </li>
            <li>
              當玩家向盟友特斯科科和特拉科潘要求一同作戰時他們似乎不喜歡或是不情願地遵守玩家的命令。這是他們未來背叛的最大暗示。
            </li>
            <li>
              在特拉科潘旁河流旁有艘運載玩家村民的運輸船最初是屬於特拉斯卡拉，直到玩家拜訪了兩個盟友，運輸船的所有權才會切換給玩家。
            </li>
            <li>
              儘管把特斯科科在遊戲中的<nuxt-link to="/civs">文明</nuxt-link
              >是<nuxt-link to="/civs/Mayans">馬雅人</nuxt-link
              >，但事實上並非如此。三國聯盟的所有成員都是納瓦州的城邦（altepetl）說納瓦特爾語，也被稱為“阿茲特克語”。
            </li>
            <li>
              當科爾特斯宣布他是以西班牙費迪南德的名義來佔領這塊土地的時候，它實際上是在西班牙查理一世統治時期發生的。
            </li>
            <li>
              玩家可以通過將同盟的外交設置為敵人來背叛他們的盟友，這會使他們變成敵人，當然也會失去他們的<nuxt-link
                to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >。
            </li>
            <li>
              科爾特斯只會在過場動畫中正常顯示。然而，如果地圖角落裡的狼被殺死，或者建造了足夠多的<nuxt-link
                to="/units/Naval_Vessels"
                >船隻</nuxt-link
              >和箭塔，那麼當過場動畫開始，並且把科爾特斯的外交狀態設置成敵人的時候，你會讓科爾特斯的船隻沉沒而無法進行下一個戰役。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                三城同盟
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/蒙提祖馬二.png" alt="" />
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
            <td class="unit3">文明</td>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第三章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Reign_of_Blood">血統統治</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Quetzalcoatl">羽蛇神</nuxt-link>
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
