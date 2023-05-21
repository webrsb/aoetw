<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>王國分裂</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>王國分裂</b>是<nuxt-link to="/games/delw">西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batt/The_Grand_Dukes_of_the_West"
              >大公爵</nuxt-link
            >的第一關。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="28%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                <nuxt-link to="/resource/Wood">木材</nuxt-link>250/<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >300/<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >250/<nuxt-link to="/resource/Stone">石料</nuxt-link>125
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
                <nuxt-link to="/civs/Burgundians">勃根地人</nuxt-link>（紫色)
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家5
              </td>
              <td colspan="3" class="tc6">
                巴伐利亞公爵（黃色）<nuxt-link to="/civs/Teutons"
                  >條頓人</nuxt-link
                >
              </td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              中立
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家3
              </td>
              <td class="tc6">
                村莊（灰色）<nuxt-link to="/civs/Franks">法蘭克人</nuxt-link>
              </td>
            </tr>
            <td col class="tc4" colspan="4" style="background:#ea6153;">
              敵對
            </td>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家2
              </td>
              <td class="tc6">烈日（青色）法蘭克人</td>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家4
              </td>
              <td colspan="3" class="tc6">叛軍補給營地（綠色）法蘭克人</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              無畏的約翰、<nuxt-link to="/units/Knight">騎士</nuxt-link
              >x7、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >x12、<nuxt-link to="/units/Scout_Cavalry">斥侯騎兵</nuxt-link
              >x1、<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
              >x1、<nuxt-link to="/units/Villager">村民</nuxt-link>x13
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                摧毀列日城3座<nuxt-link to="/building/Castle">城堡</nuxt-link
                >中的2座，以佔領這座城市。
              </li>
              <li>
                使列日的<nuxt-link to="/units/Villager">平民</nuxt-link
                >人口降至15人或更低。
              </li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>
                劫掠附近村裝的<nuxt-link to="/building/Market">市集</nuxt-link
                >、<nuxt-link to="/building/Mill">磨坊</nuxt-link
                >和貿易工坊，獲得額外的資源。
              </li>
              <li>摧毀叛軍的火藥庫。</li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                勃根地人的人口上限為150人，無法升級至<nuxt-link
                  to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >。
              </li>
              <li>
                附近有六個支持叛軍的村莊（3，灰色），您可以掠奪他們的貿易工坊、<nuxt-link
                  to="/building/Mill"
                  >磨坊</nuxt-link
                >和<nuxt-link to="/building/Market">市集</nuxt-link
                >來獲得額外資源。
              </li>
              <li>
                您可以與盟友貿易來獲得額外的黃金收入，但需要確保敵人不會破壞您的貿易路線。
              </li>
              <li>
                無畏的約翰從佛萊明的城市招募了一些攻城工程師，他們的專業技能能協助勃根地人製造<nuxt-link
                  to="/units/Capped_Ram"
                  >裝甲衝撞車</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                無畏的約翰和他的軍隊（1，紫色）在西邊集結完畢，還帶著一些能協助搭建營地的村民。
              </li>
              <li>
                列日城（2，青色）為於東南方。由<nuxt-link to="/units/Skirmisher"
                  >矛兵</nuxt-link
                >、<nuxt-link to="/armor/Armor_Class_Spearman">長槍兵</nuxt-link
                >組成的叛軍將會強硬地防守城鎮。只要城市的補給營地（4，綠色）安然無恙，列日城還會使用<nuxt-link
                  to="/armor/Armor_Class_Gunpowder_Unit"
                  >火藥單位</nuxt-link
                >和<nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link>。
              </li>

              <li>
                您的盟友巴伐利亞公爵（5，黃色）的營地設在北邊。他渴望奪回列日，會派出重裝<nuxt-link
                  to="/armor/Armor_Class_Cavalry"
                  >騎兵</nuxt-link
                >加入戰鬥。
              </li>
              <li>
                六個附近的村莊（3，灰色）為列日的叛軍提供補給，但這些村莊的防備薄弱，很容易被掠奪。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              首先稍微整頓一下經濟後，快速造出一座<nuxt-link
                to="/building/Stable"
                >馬廄</nuxt-link
              >，並利用<nuxt-link to="/civs/Burgundians">勃根地</nuxt-link
              >可以在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >升級成<nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link
              >的特性先行升級，就可以利用現有的軍隊掠奪灰色的村莊，並隨時補充騎士加入戰局。家裡也要留一些預備隊防止列日城的攻擊，建議家裡圍一下之後就在<nuxt-link
                to="/resource/Stone"
                >石礦</nuxt-link
              >區蓋一座城堡防守。
            </li>

            <li>
              當探查到綠色的火藥補給營地時，有任務提示說只要摧毀火藥庫（貿易工坊）就能斷絕列日城的火藥補給來源，讓列日城不會出火器兵種。
            </li>

            <li>
              過了一段時間，任務目標由摧毀兩座城堡轉變為使敵人村民低於15人。基本影響不大，利用騎兵團、<nuxt-link
                to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >配合裝甲衝撞車（本關提示說可以用）把列日城攻破後，就是快樂的屠城時間了。
            </li>

            <li>
              不製造<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >破關可以獲得成就「無輪」，用炸藥桶代替裝甲衝撞車即可。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">王國分裂</div>
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
              西方霸主
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Grand_Dukes_of_the_West">大公爵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              勃根地
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
              勃根地第一章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Wolf_and_the_Lion">狼與獅</nuxt-link>
            </td>
          </tr>
        </table>
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
