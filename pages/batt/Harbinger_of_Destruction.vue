<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>毀滅的先兆</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>毀滅的先兆</b>是<nuxt-link to="/batt/Tamerlane">帖木兒戰役</nuxt-link>的第三關。由於脫脫迷失背叛，<nuxt-link to="/units/hero/Tamerlane">帖木兒</nuxt-link>揮軍進入金帳汗國，他即將面對的是脫脫迷失的抵抗和歐洲的寒冬。
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
                無
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">150</td>
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
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家2
              </td>
              <td class="tc6">金帳汗國（黃色）韃靼人</td>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家3
              </td>
              <td colspan="3" class="tc6">加保加人（青色）<nuxt-link to="/civs/Bulgarians">保加利亞人</nuxt-link></td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家4
              </td>
              <td class="tc6">梁贊（灰色）<nuxt-link to="/civs/Slavs">斯拉夫人</nuxt-link></td>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家5
              </td>
              <td colspan="3" class="tc6">沙來（紅色）<nuxt-link to="/civs/Mongols">蒙古人</nuxt-link></td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家6
              </td>
              <td class="tc6">阿斯特拉罕（橙色）<nuxt-link to="/civs/Cumans">庫曼人</nuxt-link></td>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家7
              </td>
              <td colspan="3" class="tc6">亞速（綠色）斯拉夫人</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家8
              </td>
              <td class="tc6">義大利商人（青色）<nuxt-link to="/civs/Italians">義大利人</nuxt-link></td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>x9、<nuxt-link to="/units/Keshik">怯薛</nuxt-link>x23、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link>x10、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>x19、<nuxt-link to="/units/Villager">村民</nuxt-link>x12
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>打敗封鎖結冰淺灘的敵軍。</li>
              <li>摧毀3座脫脫迷失權利中心(沙來、阿斯特拉罕和亞速)中的2座。</li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>消滅梁贊(4，灰色)的駐軍，占領該城。</li>
              <li>摧毀敵人的倉庫(貿易工坊)，奪取那裡存放的<nuxt-link to="/resource/Food">食物</nuxt-link>。</li>
              <li>
                摧毀亞速附近為脫脫迷失的軍隊提供補給的義大利商人殖民地(8，藍色)。
              </li>
              <li>
                派出多名信使與加保加人(3，青色)和金帳汗國(2，黃色)的兩個酋長講和。
              </li>
              <li>
                為東邊的帖木兒‧忽格魯特營地送上2架<nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>，供他攻擊阿斯特拉罕用。
              </li>
              <li>
                向加保加人(3，青色)進貢1000<nuxt-link to="/resource/Wood">木材</nuxt-link>，讓他們為您提供軍糧和騎手。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的勢力只能發展到<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>，人口上限為150人。利用韃靼騎兵的掃蕩能力進行補償。
              </li>
              <li>
                本在俄羅斯的凜冽寒冬中，不可能耕作<nuxt-link to="/building/Farm">農田</nuxt-link>、建造<nuxt-link to="/building/Dock">碼頭</nuxt-link>或是造船。設法以其他方式為軍隊補給。
              </li>
              <li>
                梁贊的攻城工程師天下聞名。或許您的士兵能在那裡發現進階<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>的設計圖。
              </li>
              <li>
                您的敵人需要依靠分散在地圖各處的補給庫進行補給。摧毀這些補給庫後，您就可以將其中的糧草據為己有。
              </li>
              <li>
                另一支帖木兒的軍隊正穿越高加索地區前來支援。利用援兵到來的時機進行反擊。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的騎兵(1，紫色)已在冰冷刺骨的孔杜爾恰河東岸集結完畢。他們對面是脫脫迷失手下的<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>、加保加人騎兵和俄國<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>。
              </li>
              <li>
                西北方是依附於脫脫迷失的俄羅斯城市梁贊(4，灰色)。城中軍隊主要是輕騎兵和<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>，由本地的<nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>率領。
              </li>
              <li>
                阿斯特拉罕城(6，橙色)位於東南方，伏爾加河匯入裏海的位置。其軍隊起初由<nuxt-link to="/units/Keshik">怯薛</nuxt-link>和<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>組成，但最終還是將加入<nuxt-link to="/units/Kipchak">欽察</nuxt-link>騎兵和劍兵。
              </li>
              <li>
                脫脫迷失的首都沙來位於地圖中殃。沙來的軍隊由<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>和輕騎兵組成，還有可能加入<nuxt-link to="/armor/Armor_Class_Siege_Weapon">攻城武器</nuxt-link>。
              </li>
              <li>
                西南方是頓河匯入黑海的入海口，亞速城(7，綠色)就在那裡。亞速的守城部隊包括貴族鐵騎和劍兵，但為了對抗帖木兒騎兵，也會加入重裝長槍兵。
              </li>
              <li>
                亞速的河對岸是威尼斯和熱那亞商人的殖民地(8，藍色)，為敵人提供補給。摧毀這個殖民地將對他們造成沉重的打擊。
              </li>
              <li>
                金帳汗國(2，黃色)和加保加人(3，青色)的營地分佈在地圖的西部、北部和東部。儘管一開始效忠於脫脫迷失，但在合適的情況下，可以說服他們反過來與他們對抗。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              標準難度下，部隊的第二階攻防<nuxt-link to="/techs">科技</nuxt-link>已升級完畢。開場會和金帳汗國的軍隊進行一場會戰，先讓<nuxt-link to="/units/Villager">村民</nuxt-link>後撤遠離戰火，後方兩翼的<nuxt-link to="/units/Keshik">怯薛</nuxt-link>隊不要出戰，因為兩翼各還有一支弓騎兵隊包抄，要用那兩隊怯薛隊來迎擊。會戰完畢後，我方取得1000<nuxt-link to="/resource/Wood">木材</nuxt-link>、2000<nuxt-link to="/resource/Food">食物</nuxt-link>、1000<nuxt-link to="/resource/Gold">黃金</nuxt-link>、500<nuxt-link to="/resource/Stone">石料</nuxt-link>。
            </li>
            <li>
              快速起一座<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>和數座<nuxt-link to="/building/House">房屋</nuxt-link>，四個村民挖石其他都去挖木材，新生的村民也派去挖木材，隨後改挖金，最後生產食物。要注意的是這關不能種田以及蓋<nuxt-link to="/building/Dock">碼頭</nuxt-link>，只能靠打獵、捕魚，剩下就是摧毀敵人的貿易站以及靠同盟進貢。石頭一夠就先在西邊快速蓋一座<nuxt-link to="/building/Castle">城堡</nuxt-link>，有空在南方也起一座，等等三城就會來進攻。
            </li>
            <li>
              會戰後，青色和黃色和玩家結盟，我們要派人去他們的三個營地。西側的營地會無條件幫忙進攻，東側要我們給他們兩個<nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>，給完就會出擊；北方的青色則是要我們給他們1000木材，之後他們就會定期向我們提供1000食物和5位<nuxt-link to="/units/Konnik">保加利亞騎兵</nuxt-link>。
            </li>
            <li>
              過了遊戲時間20分鐘，下方會有一支由騎兵隊和包括兩台<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>的攻城武器所組成的援軍。準備好了就派騎兵隊、<nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>配合這支軍隊發起進攻。第一個目標是紅色的沙來，進攻前先在沙來城前蓋一座城堡掩護等下的攻擊行動，由於<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>在電腦的微操下相當煩人，因此最少每波攻擊都盡可能要打掉一座城堡。第二個目標是橙色的阿斯特拉罕，遊戲時間30分鐘他會開始蓋<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link>，先毀掉世界奇觀，再毀掉兩座城堡，最後騎兵隊掃過去就能過關。
            </li>
            <li>
              雖然還有個支線任務是打掉藍色的義大利商人基地可以斷敵人補給並可以獲得不少資源，我方同時獲得鐵鎧甲，但是因為隔了一個沙來城，那座的基地也有城堡、<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>防守，還有<nuxt-link to="/units/Genoese_Crossbowman">熱那亞弩手</nuxt-link>剋制我方的騎兵隊，用下方的援軍也不見得能穩穩拿下，加上有世界奇觀的倒數壓力，還不如專心攻城實際點。
            </li>
            <li>
              在困難難度下，敵人的攻勢會變得更猛烈，甚至同盟還有可能合兵支援被攻擊的城鎮。下方的援軍部隊基本只能盡力打掉紅色下方的城堡就功成身退了。如果受不了敵人的蒙古突騎，則出兵打沙來時建議再造個20~30隻<nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>專心殺蒙古突騎。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">毀滅的先兆</div>
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
              韃靼
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
              帖木兒第三章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4"><nuxt-link to="/batt/Gurkhan_of_Persia">波斯的菊兒汗</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4"><nuxt-link to="/batt/Sultan_of_Hindustan">印度斯坦的蘇丹</nuxt-link></td>
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
