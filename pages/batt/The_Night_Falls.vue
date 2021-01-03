<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>暗夜降臨</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b><nuxt-link to="/batt/The_Night_Falls">暗夜降臨</nuxt-link></b
            >是《<nuxt-link to="/games/aof">世紀帝國II：失落的帝國</nuxt-link
            >》中<nuxt-link to="/batt/Draculaa">德古拉戰役</nuxt-link
            >的最後一關<nuxt-link to="/batt">戰役</nuxt-link>。
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
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木頭</nuxt-link>3000／
                <nuxt-link to="/resource/Food">食物</nuxt-link>3000／
                <nuxt-link to="/resource/Gold">黃金</nuxt-link>3000／
                <nuxt-link to="/resource/Stone">石頭</nuxt-link>500
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
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
              <td class="tc6" colspan="3">馬札爾（紅色）</td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p3"></div>
                玩家2
              </td>
              <td class="tc6" width="35%">
                匈牙利（綠色）馬札爾
              </td>
              <td class="tc6" width="15%">
                <div class="p7"></div>
                玩家3
              </td>
              <td class="tc6" width="35%">
                沙巴茨（灰色）<nuxt-link to="/civs/Turks">土耳其</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p4"></div>
                玩家7
              </td>
              <td class="tc6" width="35%">瓦拉幾亞（黃色）斯拉夫</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">中立</td>
            </tr>
            <td class="tc6" width="15%">
              <div class="p8"></div>
              玩家8
            </td>
            <td class="tc6" width="35%">
              僱傭兵（橙色）<nuxt-link to="/civs/Italians">義大利</nuxt-link>
            </td>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6">
                鄂圖曼軍隊（藍色）土耳其
              </td>
              <td class="tc6">
                <div class="p6"></div>
                玩家5
              </td>
              <td class="tc6">
                鄂圖曼帝國（紫色）土耳其
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家6
              </td>
              <td class="tc6">
                巴薩拉布‧萊歐塔（青色）<nuxt-link to="/civs/Slavs"
                  >斯拉夫</nuxt-link
                >
              </td>
            </tr>
          </table>

          <h3>開場</h3>
          <li>
            1位<nuxt-link to="/units/Monk">僧侶</nuxt-link>，1位<nuxt-link
              to="/units/Light_Cavalry"
              >輕騎兵</nuxt-link
            >，5位<nuxt-link to="/units/Knight">騎士</nuxt-link
            >，5位馬札爾標騎，5位<nuxt-link to="/units/Heavy_Cavalry_Archer"
              >重裝馬弓騎兵</nuxt-link
            >，2台<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
          </li>
          <li>
            11位<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
            >，7位<nuxt-link to="/units/Spearman">戟兵</nuxt-link
            >，10位<nuxt-link to="/units/Arbalester">強弩兵</nuxt-link
            >，10位<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
            >，2台<nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>。
          </li>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>贏得與鄂圖曼軍隊的會戰。</li>
              <li>殺死鄂圖曼駐軍，為匈牙利征服沙巴茨。</li>
              <li>前往附近的瓦拉幾亞城鎮來統治他們。</li>
              <li>打敗巴薩拉布‧萊歐塔。</li>
              <li>打敗鄂圖曼帝國。</li>
            </ul>
          </div>
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>摧毀每個顎圖曼軍營的箭塔來佔領軍營。</li>
              <li>向瓦拉幾亞進貢1000食物，讓工匠為您建造火砲。</li>
              <li>
                若要用60黃金僱用傭兵，請按一下義大利軍營。若要用50黃金僱用熱那亞弩手，請按一下義大利射箭場。
              </li>
            </ul>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                佛拉德‧德古拉的人口上限為200人。作為匈牙利的附庸，他的科技樹還是馬扎爾。
              </li>
              <li>奪取鄂圖曼軍隊的營地，大大削弱它。</li>
              <li>多瑙河不僅可以用於捕魚，還可以進行海軍攻擊並控制過境點。</li>
              <li>
                火砲非常強大。德古拉最初不能建造任何東西，但有一位當地工匠可以…
              </li>
              <li>
                義大利傭兵和熱那亞弩手對於擊敗精銳的敵軍非常有效。如果可以，多生產一些吧。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                佛拉德(1，紅色)最初在多瑙河上指揮一個匈牙利陣營和一支小部隊。
              </li>
              <li>
                鄂圖曼軍隊(4，藍色)從多瑙河以南的幾個營地發起進攻，造成早期威脅。他們將訓練矛兵、騎士、長槍兵和攻城單位。
              </li>
              <li>
                匈牙利(2，綠色)是您最強大的盟友。如果他們能夠征服基地，將為您提供重裝騎兵和攻城單位。
              </li>
              <li>
                沙巴茨(3，灰色(有價值的土耳其要塞位於地圖的中心，由象徵部隊守衛。
              </li>
              <li>西北部的小鎮瓦拉幾亞(7，黃色)希望能幫助德古拉重拾寶座。</li>
              <li>
                傀儡政府巴薩拉布‧萊歐塔(6，青色)控制著特爾哥維什泰西北部的一些城市和要塞。他的軍隊是由貴族鐵騎領導的長槍兵和矛兵組成。
              </li>
              <li>
                到目前為止，最大的威脅是來自鄂圖曼帝國(5，紫色)，這個帝國在特爾哥維實泰根深柢固。它的軍隊包括土耳其火槍兵、匈牙利輕騎兵、攻城單位和僧侶。
              </li>
              <li>
                一群義大利傭兵(8，橙色)據傳已抵達瓦拉幾亞。也許他們會幫助您…
              </li>
            </ul>
          </div>

          <h3>攻略</h3>
          <div class="hrn1"></div>

          <ul>
            <li>
              玩家從匈牙利的西部大本營開始。當前的目標是沿著地圖的西南走廊掃除鄂圖曼軍隊（青色）。他們沿河有四個小基地，最後一個是海邊港口。利用一開始的資源訓練軍隊投入戰場，並研發其相關科技。玩家有一名僧侶可以用來治療受傷的部隊，特別是開局給的<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >部隊，他們是不容易被替換的。
            </li>
            <li>
              由於敵人也會訓練軍隊，因此進攻速度要快。只要將四個營地的塔打掉，營地的控制權就會轉給玩家。再來任務目標是打敗灰色的鄂圖曼軍隊。一旦打敗後，德古拉被告知搬到黃色的城鎮中心，玩家將獲得永久基地，剩餘的的資源會消失並重新得到一批新的資源，開場的營地和灰色的會讓給匈牙利（綠色），這將使綠色成為未來戰鬥中加強大的盟友。
            </li>
            <li>
              開始發展後，在兩座橋口後面各蓋一座城堡防守並派弓兵進駐，同時看到攻城武器就要衝出去打。之後有可選擇的任務，一是給黃色1000食物，每隔10分鐘就會造一台火砲；二是義大利僱傭兵（橙色，在玩家的東北部）提供熱那亞弩手和傭兵（分別點擊射箭場和軍營）。建議在購買義大利僱傭兵之前先達到最高人口限制（200），以便擁有更大的突擊力量。只要同時有各10隻火砲、傭兵和熱納亞弩手就可獲得成就「戰火連綿」。要完成成就就必須等待火砲造滿10台。
            </li>
            <li>
              準備好了以後就用遊俠、重裝馬騎弓兵、精銳馬扎爾驃騎等搭配義大利的傭兵、熱那亞弩手和火砲及巨型投石機等，陸續將兩個敵人滅掉即過關。
            </li>
          </ul>
          <h3>決定版變更點</h3>
          <div class="hrn1"></div>

          <ul>
            <li>移除德古拉，開局給的80000資源只剩3000但初期比較好打。</li>
            <li>
              先前不能升到帝王時代，只能靠完成次要任務升級軍隊，決定版可以升帝王。
            </li>
            <li>
              新增成就「戰火連綿」：集結 10 個傭兵、10 個熱那亞弩手和 10
              個火砲。。
            </li>
            <li>工匠任務之前是造巨型投石機，決定版改成造火砲。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">暗夜降臨</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/D5.jpg" alt="" width="100%" />
              </div>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第二章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Moon_Rises">撥雲見月</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
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
