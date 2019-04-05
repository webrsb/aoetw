<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>大越義軍</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p></p>
          <p>
            <b>大越義軍</b>為<nuxt-link to="/batt/Le_Loi">黎利戰役</nuxt-link
            >的第一關劇情關卡，此關描述<nuxt-link to="/civs/Vietnamese"
              >越南</nuxt-link
            >豪族<nuxt-link to="/units/hero/Le_Loi">黎利</nuxt-link
            >於藍山（今越南清化省境內）自封「平定王」，聚眾反明的經過。
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
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                400<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／200<nuxt-link to="/resource/Food">食物</nuxt-link
                >／200<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／200<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">100</td>
            </tr>
          </table>

          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Vietnamese">越南人</nuxt-link>（黃色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p3">玩家3</div></td>
              <td class="tc6" width="38%">大越百姓（綠色）越南</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p2">玩家4</div></td>
              <td class="tc6" width="38%">鄭家莊（紅色）越南</td>
              <td class="tc6"><div class="p8">玩家5</div></td>
              <td class="tc6">阮家莊（橘色）越南</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6"><div class="p1">玩家2</div></td>
              <td class="tc6">
                明朝軍隊（藍色）<nuxt-link to="/civs/Chinese">中國</nuxt-link>
              </td>
              <td class="tc6"><div class="p6">玩家6</div></td>
              <td class="tc6">
                <nuxt-link to="/civs/Malay">馬來</nuxt-link>海盜（紫色）馬來
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p5">玩家7</div></td>
              <td class="tc6">明朝巡邏隊（水藍）中國</td>
              <td class="tc6"><div class="p1">玩家8</div></td>
              <td class="tc6">明朝軍隊（藍色）中國</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>。 <nuxt-link to="/units/hero">英雄</nuxt-link> - 黎利x1</p>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Scout_Cavalry"
              >斥候騎兵</nuxt-link
            >x1、<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
            >x3、<nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
            >x4、<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
            >x4、<nuxt-link to="/units/Spearman">長槍兵</nuxt-link>x4
          </p>
          <p>
            。 經濟單位 - <nuxt-link to="/units/Villager">村民</nuxt-link>x7。
          </p>
          <p>
            。 大地之母單位 -<nuxt-link to="/units/animal/Water_Buffalo"
              >水牛</nuxt-link
            >x4
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                摧毀地圖上標記的五座村莊裡的明朝<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >，這樣就可以解救那裏的大越村民。
              </li>
              <li>
                鄭家莊和阮家莊是兩個勢力強大的大越家族，他們會支持你的義軍，傾全力抵禦明朝軍隊。不過他們同時也需要你的幫助，若是他們之中有一家落入敵手的話，你也會宣告失敗。
              </li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              由於你現在只有一支以游擊為主的起義軍，你的人口上限為100，也無法升級到<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >。
            </li>
            <li>
              你一開始沒有<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >，所以在安營紮寨之前最好觀察周圍的資源和環境來選擇一個比較好的地點作為大本營。
            </li>
            <li>
              明朝在這片地區住紮了大量<nuxt-link to="/building/Barracks"
                >軍營</nuxt-link
              >，你最好不要去以卵擊石。
            </li>
            <li>
              大越的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
              >藤甲弓兵很擅長對抗明軍的諸葛弩手。
            </li>
            <li>
              當你進入敵佔區的時候要小心謹慎，提防被散佈四處的明軍巡邏隊發現。
            </li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              黎利（黃色）和他的手下佔據了地圖東邊的一個小營地，他們要快速整頓準備對抗強大的明軍。
            </li>
            <li>
              明朝軍隊（藍色）在整個地圖有好幾座強大的防禦工事，他們兵多將廣，會盡全力去剿滅任何膽敢與明廷作對的叛軍。
            </li>
            <li>
              大越百姓（綠色）居住在這裡的許多村莊裡，這些村莊大多被明朝所控制。
            </li>
            <li>
              北邊的大越名門鄭家莊（紅色）受不了明朝的鎮壓，決定起兵反抗。他們手下有藤甲弓兵、<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >和矛象伕，還有他們精銳的鄭家騎兵。
            </li>
            <li>
              阮家莊（橙色）在南邊有一座<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >，他們的部隊以藤甲弓兵、<nuxt-link
                to="/units/Two-Handed_Swordsman"
                >雙手劍兵</nuxt-link
              >、矛象伕和<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >為主。
            </li>
            <li>
              明朝巡邏隊（淺藍）在這片郊野和村莊附近巡邏，他們是你奪下這片地區最大的障礙。
            </li>
            <li>
              馬來海盜（紫色）在海上虎視眈眈，他們會攻擊任何靠近他們的部隊。
            </li>
          </ul>
          <h2>細節</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                黎利（1385-1433）以<nuxt-link to="/units/Champion"
                  >劍兵勇士</nuxt-link
                >形象在劇情中登場。
              </li>
              <li>此關的壓力通常是來自於保衛盟友，而非自身存亡。</li>
              <li>
                隱藏支線與馬來海盜的遺跡有關。
              </li>
              <li>
                在本章節中，石礦資源十分稀有；即便深入敵方佔領區，也只會多找到兩礦。最佳方式是建立貿易路線，確保金流。
              </li>
              <li>
                鄭家莊與阮家莊在遊戲中代表的是越南歷史上清化一帶的兩大士族。其中黎利的兩大助手「鄭可」與「阮廌」便均出自名門。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                大越義軍
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/The_Dai_Viet_Uprising.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                情景信息
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/batt/Le_Loi">黎利</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Vietnamese">越南人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第四章之一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Mountain_Siege">至靈山魂</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由亞諭、裕暉協助編輯。</div>
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
