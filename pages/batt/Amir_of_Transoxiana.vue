<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>河中地區的埃米爾</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>河中地區的埃米爾</b>是<nuxt-link to="/batt/Tamerlane">帖木兒戰役</nuxt-link>的第一關。本故事將由<nuxt-link to="/units/hero/Tamerlane">帖木兒</nuxt-link>和脫脫迷失汗一起征戰河中地區開始。
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
                1000<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／1000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／800<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／650<nuxt-link to="/resource/Stone">石頭</nuxt-link>
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
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                <nuxt-link to="/civs/Tatars">韃靼人</nuxt-link>（紫色)
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家2
              </td>
              <td class="tc6">脫脫迷失（黃色）<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link></td>
            </tr>

            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家3
              </td>
              <td class="tc6">青帳汗國（藍色）蒙古人</td>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家4
              </td>
              <td colspan="3" class="tc6">白帳汗國（青色）韃靼人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家5
              </td>
              <td class="tc6">
                西察合台汗國（紅色）韃靼人
              </td>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家6
              </td>
              <td class="tc3">
                東察合台汗國（綠色）蒙古人
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家7
              </td>
              <td class="tc6">兀魯斯汗（橙色）蒙古人</td>
            </tr>

            <tr></tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/hero/Tamerlane">帖木兒</nuxt-link>、<nuxt-link to="/units/Villager">村民</nuxt-link>x12、<nuxt-link to="/units/Keshik">怯薛</nuxt-link>x3、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>x10、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link>x10、<nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link>x7、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>x3、<nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link>x1
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>奪取敵對的河中地區汗國手中4件<nuxt-link to="/Relic">聖物</nuxt-link>的3件。</li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>殺死兀魯斯汗(7，橙色)，讓脫脫迷失統治白帳汗國。</li>
              <li>襲擊青帳汗國(3，藍色)的<nuxt-link to="/units/Villager">村民</nuxt-link>，打擊該經濟。</li>
              <li>
                西察合台汗國(5，紅色)對貿易十分依賴。摧毀他們的<nuxt-link to="/building/Market">市集</nuxt-link>，切斷其收入來源。
              </li>
              <li>
                摧毀東察合台汗國(6，綠色)的<nuxt-link to="/building/Mill">磨坊</nuxt-link>和<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>，切斷旗軍隊的糧草。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒只能發展到<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>。但人口上限為200。
              </li>
              <li>
                本劇本內不能建造<nuxt-link to="/building/Dock">碼頭</nuxt-link>或戰艦。但是，或許可以設法占領白帳汗國的船塢，以從鹹海中獲取<nuxt-link to="/resource/Food">食物</nuxt-link>。
              </li>
              <li>
                不要不敢讓帖木兒出戰。如果他倒下了，就將返回他的<nuxt-link to="/building/Castle">城堡</nuxt-link>（如果<nuxt-link to="/building/Castle">城堡</nuxt-link>未被摧毀）休養，待傷勢恢復後重返戰場。
              </li>
              <li>
                廣闊的大草原上資源分散而稀少。在為了獲取資源而擴張的過程中，您或許還會遇到願意加入您的本地戰士。
              </li>
              <li>
                殺死兀魯斯汗後，脫脫迷失就可獲得白帳汗國的控制權，幫助您對付其他敵人。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的軍隊(1，紫色)控制著防守森嚴的撒馬爾罕城。<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link>在早期能夠提供保護，但很快您就需要向北擴張，尋找更多資源。
              </li>
              <li>
                西邊是白帳汗國(4，青色)，他們的領袖兀魯斯汗(7，橙色)住在鹹海附近的一座要塞裡。大隊<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>和<nuxt-link to="/units/Spearman">長槍兵</nuxt-link>在蘇薩里和烏魯圖之周的大草原上馳騁。
              </li>

              <li>
                青帳汗國(3，藍色)的勢力位於西北方。儘管他們一開始是您的對手中最脆弱的，但如果沒有及時應對他們就將訓練出<nuxt-link to="/units/Knight">騎士</nuxt-link>、駱駝騎兵和<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>組成的軍隊。
              </li>
              <li>
                西察合台汗國(5，紅色)的大本營位於北邊的巴爾喀什湖畔。他們的城牆內隱藏著大批馬弓騎兵、駱駝騎兵和長槍兵。
              </li>
              <li>
                東察合台汗國(6，綠色)從一座高大的山中要塞統治著地圖的東邊。一旦發現敵人，可怕的<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>、輕騎兵和重裝長槍兵大軍就會滾滾而來。
              </li>
              <li>
                脫脫迷失汗(2，黃色)是白帳汗國國主之位的爭奪者，在地圖中部的奧克蘇斯河和錫爾河之間有一座營地。他的軍對規模不大，但如果得到足夠支持，也能成為強大的盟友。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              如果選擇標準難度，會自動研發護甲和防禦等<nuxt-link to="/techs">科技</nuxt-link>。先訓練一隊馬弓，然後盡快在青色門口附近蓋一座<nuxt-link to="/building/Castle">城堡</nuxt-link>。<nuxt-link to="/units/Villager">村民</nuxt-link>多派一點人挖石，稍候也要再家裡東北方和脫脫迷失營地淺灘難下也各蓋一座。這段時間四處找一找大地之母的部隊。
            </li>
            <li>
              過了一段時間，脫脫迷失汗和我方結盟，並處發四個支線任務。首先，在白帳汗國門前的城堡蓋好後，先派兵將白帳汗國的軍隊拉到城堡前並將之消滅，然後等馬弓的科技研發完並量產一定程度，隨即和近戰單位一起集團狙殺兀魯斯汗，把他殺死後青色的控制權會轉給黃色脫脫迷失且他會不時出兵幫忙我方，隨後我們可以使用碼頭造<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>捕魚。同時記得派<nuxt-link to="/units/Monk">僧侶</nuxt-link>收<nuxt-link to="/Relic">遺跡</nuxt-link>。
            </li>
            <li>
              隨後將軍隊集中在我方基地東北部，和城堡一起防禦敵人的進攻，注意一下的人的<nuxt-link to="/units/Battering_Ram">衝車</nuxt-link>即可。使用的兵種以草原騎兵（<nuxt-link to="/resource/Gold">黃金</nuxt-link>不夠可以用輕騎兵）搭配馬弓騎兵，軍隊數量累積夠後就去完成支線任務，先去掃蕩綠色東北方的<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>和三座<nuxt-link to="/building/Mill">磨坊</nuxt-link>，這樣綠色的威脅先減一大半；接著直接打爆藍色的青帳汗國，<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link>一定要打掉不然<nuxt-link to="/units/Monk">僧侶</nuxt-link>去收<nuxt-link to="/Relic">遺跡</nuxt-link>時會被攻擊；緊接著直接打爆紅色在城外的兩座市場，完成所有支線任務。
            </li>
            <li>
              最後造幾台<nuxt-link to="/units/Battering_Ram">衝車</nuxt-link>去把綠色的箭塔和城堡打掉，讓僧侶去收遺跡後結束本關。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">河中地區的埃米爾</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              （地圖待補）
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
              <nuxt-link to="/games/de">決定版</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Tamerlane">帖木兒</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link>
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
              帖木兒第一章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4"><nuxt-link to="/batt/Gurkhan_of_Persia">波斯的菊兒汗</nuxt-link></td>
          </tr>
        </table>
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
