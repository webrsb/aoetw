<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鉤子和鱈魚之戰</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鉤子和鱈魚之戰</b>是<nuxt-link to="/games/delw"
              >西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batt/Tamerlane"
              >大公爵</nuxt-link
            >的第五關。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木材</nuxt-link>900/<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >450/<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >325/<nuxt-link to="/resource/Stone">石料</nuxt-link>275
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
                <nuxt-link to="/civs/Burgundians">勃根地人</nuxt-link>（紫色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家5
              </td>
              <td class="tc6">
                鱈魚派（藍色）<nuxt-link to="/civs/Franks">法蘭克人</nuxt-link>
              </td>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家6
              </td>
              <td class="tc6">荷蘭村莊（灰色）法蘭克人</td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家2
              </td>
              <td class="tc6">埃諾的賈桂琳（綠色）勃根地人</td>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家3
              </td>
              <td colspan="3" class="tc6">
                英格蘭人（紅色）<nuxt-link to="/civs/Britons"
                  >不列顛人</nuxt-link
                >
              </td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">鉤子派（藍色）法蘭克人</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              好人菲利普、<nuxt-link to="/units/Knight">騎士</nuxt-link
              >x2、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >x4、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >x4、<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >x5、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >x1、<nuxt-link to="/units/Villager">村民</nuxt-link
              >x7、<nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
              >x6、<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>x3
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                摧毀賈桂琳在萊頓、烏特勒支和鹿特丹的<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >，迫使她投降。
              </li>
              <li>
                您在布勞沃斯港的<nuxt-link to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >不能被敵人摧毀。
              </li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>將鉤子派逐出荷蘭村莊，讓您的盟友鱈魚派接管。</li>
              <li>
                摧毀鉤子派的<nuxt-link to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >，使荷蘭漁民可以再次出海。
              </li>
              <li>
                摧毀3座在英格蘭海岸上的敵方<nuxt-link to="/building/Lumber_Camp"
                  >伐木場</nuxt-link
                >（貿易工坊），迫使他們退兵。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>好人菲利普的人口上限為200人。</li>
              <li>
                亨弗萊受到政治上的阻礙，但仍能設法為他的妻子賈桂琳輸送英格蘭士兵和資源。此外，他仍然指揮著一支英格蘭<nuxt-link
                  to="/units/Naval_Vessels"
                  >海軍</nuxt-link
                >前往澤蘭侵略<nuxt-link to="/civs/Burgundians"
                  >勃根地人</nuxt-link
                >的土地。您需要組建一支艦隊來擊退英格蘭入侵者。
              </li>
              <li>
                海洋裡有豐富的<nuxt-link to="/resource/Food">食物</nuxt-link
                >。因此強烈建議您建造<nuxt-link to="/units/Fishing_Ship"
                  >漁船</nuxt-link
                >。
              </li>
              <li>
                鉤子派是一個支持賈桂琳的下層貴族聯盟，而鱈魚派則是一個同情勃根地人的本地居民組織。幫助鱈魚派壯大成為荷蘭最強大的力量，讓他們成為您的可靠盟友。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                好人菲利普（1，紫色）已經在富裕的沿海城鎮布勞沃斯港建立了基地，準備與賈桂琳以及她的英格來盟友決一死戰。
              </li>
              <li>
                貴族組成的聯盟鉤子派（4，黃色）與自我認同高漲的本地居民組織鱈魚派（5，藍色）之間的衝突正在荷蘭惡化。鉤子派支持賈桂琳，而鱈魚派則與勃根地人結為了盟友。
              </li>

              <li>
                賈桂琳（2，綠色）已經控制了烏特勒支、萊頓和鹿特丹。她主要會訓練重裝<nuxt-link
                  to="/units/Cavalry_Units"
                  >騎兵</nuxt-link
                >、製造<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
                >，並組建一支戰爭艦隊。如果攻打賈桂琳的城鎮，她會額外部署<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >部隊來防衛。
              </li>
              <li>
                英格蘭人（3，紅色）有一支強大的軍隊，其中主要包含<nuxt-link
                  to="/units/Longbowman"
                  >長弓兵</nuxt-link
                >和大量的<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
                >。勃根地人想要完全擊敗英格蘭人似乎沒有太大的機會，但重創他們還是有可能的。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              這關要海陸同時作戰，海上儘早做出幾艘<nuxt-link
                to="/units/Fast_Fire_Ship"
                >重型火戰船</nuxt-link
              >防守，陸上則先去挖石，並在敵人常進攻的地方蓋<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >，以東北方為主，多多益善，同時要擺軍隊防守防<nuxt-link
                to="/units/Battering_Ram"
                >衝車</nuxt-link
              >和巨投。過一段時間，我們的盟友鱈魚派要求我們占領敵方鉤子派的村莊，同時<nuxt-link
                to="/units/Scout_Cavalry"
                >斥侯</nuxt-link
              >也會探查到<nuxt-link to="/civs/Britons">英國</nuxt-link
              >的木材場。如果找到西邊的灰色村莊，他會要我們摧毀鉤子派的海箭塔，達成後每隔一段時間就會進貢食物。
            </li>
            <li>
              至於幫鱈魚派搶村莊，一開始就先把除了<nuxt-link
                to="/armor/Armor_Class_Spearman"
                >長槍兵</nuxt-link
              >輔以少量<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >配合城堡防守。
            </li>
            <li>
              <nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
              >方面有一定的火戰船就可以先摧毀海箭塔，灰色就會進貢我們食物；貿易工廠都在海岸線<nuxt-link
                to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >的射程內，利用火戰船掩護精銳火砲戰船將之一一摧毀，英國就會和我方改同盟；海軍還可以順手毀掉一座沿岸的綠色城堡（城堡毀壞後該城鎮就由我方接管）。最後將綠色的城堡都毀掉後就過關。如果是直接把英格蘭打敗，會有成就「第二次黑斯廷斯戰役」，想完成這個成就就要運兵登陸並建設前線基地推進，然後要注意在擊敗的訊息出來前不能把貿易工廠都摧毀。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">鉤子和鱈魚之戰</div>
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
              <nuxt-link to="/games/delw">西方霸主</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Tamerlane">大公爵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Burgundians">勃根地</nuxt-link>
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
              勃根地第五章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Unholy_Marriage">罪惡的婚姻</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Maid_Falls">聖女隕落</nuxt-link>
            </td>
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
