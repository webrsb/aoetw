<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>血統統治</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>血統統治</b>(舊譯：血親統治)，是<nuxt-link to="/batt/Montezumaa"
              >蒙提祖馬戰役</nuxt-link
            >的第一個場景。
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
              >:200，<nuxt-link to="/resource/Food">食物</nuxt-link
              >:200，<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >:200，<nuxt-link to="/resource/Stone">石頭</nuxt-link>:200
            </li>
            <li>人口上限:75</li>
            <li>
              開場擁有單位:
              <ul>
                <li>
                  <img
                    src="~assets/VillagerMaleIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Villager">村民</nuxt-link>3個
                </li>
                <li>
                  <img
                    src="~assets/EagleWarriorIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>3個
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
              <td class="tc6">特拉堤克人（紅色）阿茲特克</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家3
              </td>
              <td class="tc6">索奇米科爾人（紫色）馬雅</td>
            </tr>
            <td class="tc6">
              <div class="p8"></div>
              玩家4
            </td>
            <td class="tc6">
              帝帕那卡（橙色）<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
            </td>
          </table>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                佔領四個羽蛇神的神殿(<nuxt-link to="/building/Monastery"
                  >修道院</nuxt-link
                >)。
              </li>
              <li>
                將四個<nuxt-link to="/elements/Relic">遺跡</nuxt-link
                >分別放在四個神殿中。
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>你必須保護羽蛇神的神廟，建造新的修道院不能取悅祂。</li>
              <li>
                你的敵人試圖在神靈面前摧毀神廟使你困窘，所以在你沒有足夠的把握保護神廟之前不要去佔領它們。
              </li>
              <li>
                阿茲特克的<nuxt-link to="/units/Monk">僧侶</nuxt-link
                >在升級後是非常厲害的，當你占領一個神廟(修道院)並且升級到<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >後，你就可以開始訓練僧侶。
              </li>
              <li>阿茲特克目前只能升級到城堡時代。</li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                >回報:蒙提祖馬的部隊(綠色)一開始在封建時代並只有幾個士兵，它們必須保護好蒙提祖馬的<nuxt-link
                  to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >免於早期敵人的攻擊。
              </li>
              <li>
                你的敵人有三個:特拉裡科(紅色)位於西南部，他的軍隊由鷹勇士和<nuxt-link
                  to="/units/Man-at-Arms"
                  >裝甲步兵</nuxt-link
                >組成比較容易對付。
              </li>
              <li>
                帝帕那卡(橙色)居住在你的東北部，除非你有<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >否則他的<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
                >對你來說是個大問題。他們的軍隊由<nuxt-link to="/units/Archer"
                  >弓兵</nuxt-link
                >/<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
                >和鷹勇士組成。如果遊戲難度是中等的話還會有<nuxt-link
                  to="/units/Plumed_Archer"
                  >羽毛箭射手</nuxt-link
                >。
              </li>
              <li>
                索奇米科爾人(紫色)是最危險的敵人。他們住在遙遠的西北部，它們訓練弓/弩兵、裝甲步兵/<nuxt-link
                  to="/units/Long_Swordsman"
                  >長劍兵</nuxt-link
                >和<nuxt-link to="/units/Scoepion">弩砲</nuxt-link
                >。除非有大量的鷹勇士否則先不要試圖進攻他們的城鎮。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              你從地圖的東部開始。在<nuxt-link to="/batt">戰役</nuxt-link
              >開始的時候旁白會告訴你即將有一些美洲豹來襲，所以讓你的部隊準備攻擊美洲豹。一旦美洲豹來了，敲響警鐘將你的村民駐紮在城鎮中心。除了軍隊之外，你也可以用城鎮中心和<nuxt-link
                to="/building/Watch_Tower"
                >瞭望箭塔</nuxt-link
              >攻擊美洲豹，但是你必須手動指定建築物攻擊美洲豹。
            </li>
            <li>
              最近的兩座修道院是：你的基地的西北部（在你的基地與帝帕那卡之間）和另一個在你的基地的西南部（在你的基地與特拉裡科之間）。帝帕那卡和索奇米科爾人之間還有一個修道院，還有一個位於地圖西部的修道院。在取得神廟之前最好先建立起一定量的軍隊，因為你將不得不捍衛它們。
            </li>
            <li>
              一旦你佔領了兩個最近的神廟，你應該通過在他們周圍駐紮軍事單位或者建造箭塔和城牆來保護他們。對於北方的修道院，你需要處理帝帕那卡，因為他們可能在修道院附近建立一個<nuxt-link
                to="/building/Archery_Range"
                >射箭場</nuxt-link
              >。儘管他們有一個大門和一些圍牆，但實際上他們可以從他們的西部（與索奇米科爾人之間）偷偷溜進去，這裡沒有圍牆擋住，但是你必須留意在湖中間的兩座箭塔。一旦你取得了這個神廟，帝帕那卡會指責你玷污“他們的修道院”，並派遣一支鷹勇士對付你。你應該已經有一支準備對付帝帕那卡的軍隊。
            </li>
            <li>
              取得西部神廟將需要應付特拉裡科（沿途有兩座箭塔）和索奇米科爾人（擁有一座<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >以及諸如弩砲和弓箭手等若干軍事單位）的防禦。您必須至少將索奇米科爾人部隊趕離河岸讓你可以建立一個<nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >。你可能需要帶上一些村民，並用你的士兵保護它們。用碼頭訓練一艘<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >，將你的部隊運送到河對岸。這個神廟有許多美洲虎守衛著，但如果不被挑釁，他們只會襲擊村民和<nuxt-link
                to="/units/Jaguar_Warrior"
                >豹勇士</nuxt-link
              >。你也可以用修道院訓練一個僧侶帶回遺跡就好。注意擊敗所有敵人不會獲得勝利。玩家仍然需要將遺跡放入神廟中來完成這個任務。
            </li>
            <li>
              如果你在東邊的基地附近建立了一個市場，並且你想和任何一個敵對市場進行交易，最好的交易市場就是特拉裡科，因為和帝帕那卡交易需要從他們的西部走一條很長的路線（由於東部的大門被封鎖），但是由於距離的原因使得貿易得到的黃金變少，而試圖與索奇米科爾人進行交易將導致您的<nuxt-link
                to="/units/Trade_Cart"
                >貿易車隊</nuxt-link
              >被攻擊。為了和特拉裡科交易，你應該在摧毀他們東邊的箭塔，打敗他們的軍隊，保護你貿易車隊的安全。
            </li>
          </ul>
          <h3>豆知識</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              儘管帝帕那卡和索奇米科爾人在遊戲中是<nuxt-link to="/civs/Mayans"
                >馬雅人</nuxt-link
              >，但事實上他們並不是。他們和玩家以及特拉裡科都是納瓦人或說阿茲特克語/納瓦特爾語的人。
            </li>
            <li>
              這是蒙提祖馬系列中特拉斯卡拉人和<nuxt-link to="/civs/Spanish"
                >西班牙人</nuxt-link
              >根本沒出現的唯一場景
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                血統統治
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Montezuma/Reign_of_Blood_map.png" alt="" />
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第三章之一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Triple_Alliance">三城同盟</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡，裕暉協助編輯</div>
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
