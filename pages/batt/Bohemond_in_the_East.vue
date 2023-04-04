<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>東方的博希蒙德</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>東方的博希蒙德</b>是<nuxt-link to="/games/delw"
              >西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batts/The_Hautevilles"
              >歐特維爾家族</nuxt-link
            >的第四關。
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
                500<nuxt-link to="/resource/Wood">木材</nuxt-link>/500<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >/250<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >/250<nuxt-link to="/resource/Stone">石料</nuxt-link>［註］
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">300</td>
            </tr>
          </table>

          註：標準難度下，木材和食物各加1000，黃金和石料各加500<br />
          <br />

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                諾曼人[<nuxt-link to="/civs/Sicilians">西西里人</nuxt-link
                >]（藍色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家2
              </td>
              <td class="tc6">
                安提阿（紫色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6">
                阿梅德‧伊本‧馬爾萬（綠色）<nuxt-link to="/civs/Turks"
                  >土耳其人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家4
              </td>
              <td class="tc6">
                卡布卡的警衛（青色）土耳其人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家5
              </td>
              <td class="tc6">
                塞耳柱騎兵
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p7"></div>
                玩家6
              </td>
              <td class="tc6">
                摩蘇耳民兵（灰色）土耳其人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p8"></div>
                玩家7
              </td>
              <td class="tc6">
                大馬士革軍隊（橙色）土耳其人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家8
              </td>
              <td class="tc6">
                卡布卡的劫掠者（紅色）土耳其人
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              一座大城市、一大匹軍隊、<nuxt-link to="/units/Villager"
                >村民</nuxt-link
              >x30
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                保衛安提阿，直到阿歷克塞‧科穆寧到達。<br />
                →請從以下任務選擇一項：
              </li>
              <ol>
                <li>保衛安提阿，直到卡布卡撤退。</li>
                <li>殺死卡布卡。</li>
              </ol>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>打敗阿梅德‧伊本‧馬爾萬的駐軍。</li>
              <li>
                研究<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link
                >暫時激勵十字軍。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                您的人口上限為300人，可以研究<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >和<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
                >的<nuxt-link to="/techs">科技</nuxt-link
                >，但無法訓練新的<nuxt-link to="/units/Villager">村民</nuxt-link
                >。
              </li>
              <li>
                敵人的進攻是有節奏的。利用戰鬥間的空檔來重建防守、收集資源，並壯大您的軍隊以抵禦下一次的進攻。
              </li>
              <li>
                <nuxt-link to="/building/Monastery">修道院</nuxt-link
                >裡的<nuxt-link to="/Relic">聖物</nuxt-link>是您唯一的<nuxt-link
                  to="/resource/Gold"
                  >黃金</nuxt-link
                >來源。<nuxt-link to="/resource/Stone">石料</nuxt-link
                >可以在城市內的古代廢墟中找到。
              </li>
              <li>
                隨著圍攻的繼續，可用的資源會變得緊缺。使用<nuxt-link
                  to="/building/Market"
                  >市集</nuxt-link
                >來交易您所需要的資源，不過要知道，通貨膨脹在持久的圍攻戰中是必然的結果。
              </li>
              <li>
                攻佔阿梅德‧伊本‧馬爾萬的要塞後，您就可以採集東南山區的資源。
              </li>
              <li>
                研究<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link
                >和尋獲聖槍可以為您的所有單位提供短暫的一次性增益。務必善加利用。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                博希蒙德‧德‧歐特維爾（1，藍色）和十字軍經過漫長的圍攻已經佔領了古城安提阿。他們發現這座城市的物資已經耗盡。
              </li>

              <li>
                對十字軍來說有個壞消息，塞耳柱<nuxt-link to="/civs/Turks"
                  >土耳其</nuxt-link
                >軍閥卡布卡（4，青色）已經率領大軍抵達，意在奪回城市。他兵分多路包圍了城市的<nuxt-link
                  to="/building/Stone_Wall"
                  >城牆</nuxt-link
                >和六處<nuxt-link to="/building/Gate">城門</nuxt-link
                >。他的軍隊將會以混合部隊的型式發動一波又一波的攻勢。儘管實力堅強，但卡布卡在絕對優勢面前顯得猶豫不決，因為過重的傷亡可能會讓麾下本就各懷鬼胎的多元部隊面臨崩潰。因此他會週期性的掣撤退並重組軍隊，為之後的進攻做準備。
              </li>

              <li>
                因為卡布卡在十字軍徹底擊敗駐軍前就已抵達，所以安提安在東邊的要塞仍然由阿梅德‧伊本‧馬爾萬領導的穆斯林駐軍（3，綠色）所控制。這支部隊含有<nuxt-link
                  to="/units/Mameluke"
                  >阿拉伯奴隸兵</nuxt-link
                >、<nuxt-link to="/armor/Armor_Class_Camel">駱駝騎兵</nuxt-link
                >，且有一座<nuxt-link to="/building/Castle">城堡</nuxt-link
                >保護他們。這些駐軍不會離開他們的防守位置，因此威脅不大，但他們阻擋了前往城市後方山區獲得額外資源的路線。
              </li>

              <li>
                最後，傳言由<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                >皇帝阿歷克塞‧科穆寧所率領的一支援軍正在趕來，估計<nuxt-link
                  to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >帝國也在覬覦這座城市。博希蒙德必須在他的老對手抵達之前擊退土耳其人。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              這場是守城戰，和愛德華戰役2一樣，我方村民能造的<nuxt-link
                to="/building"
                >建築</nuxt-link
              >有限。由於城牆科技會自動研發，因此優先研發<nuxt-link
                to="/building"
                >建築</nuxt-link
              ><nuxt-link to="/elements/Hit_points">生命值</nuxt-link
              >和弓箭類的科技，兵力以<nuxt-link to="/units/Archer"
                >弓兵</nuxt-link
              >（黃金不夠就補<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link
              >）和<nuxt-link to="/units/Mangonel">投石車</nuxt-link>為主。
            </li>

            <li>
              敵人有三波攻勢，每一波會給玩家10分鐘準備後，再長達10分鐘的攻勢。用<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >和<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >由內往外打出去，石頭一夠就在敵人常攻來的幾個地方蓋<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >。第二波攻勢開始前可以研發<nuxt-link to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >強化我方軍隊的<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
              >和<nuxt-link to="/elements/Rate_of_Fire">攻擊速度</nuxt-link
              >（效力僅有10分，建議第三波攻擊開始前再延發）。在喘息的空擋，拉幾位村民把損害最嚴重的城牆補一補。
            </li>

            <li>
              東南方綠色的駐軍可打可不打，只要把軍隊打爆後就會投降我方並獲得資源，後方還有一小塊礦區可以去採。利用喘息的空檔去打就可以，打爆後建築也歸我管，但為了減少損失建議還是把城堡和<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >的打掉。
            </li>

            <li>
              除了撐完三波攻擊（60分），也有打爆敵軍首領卡布卡這個選項，而且一開始就可以去做，不用等到任務目標出現。但因為直接通往敵方本營的道路守備森嚴故直直衝向對方的大本營是不智之舉。利用一開始的騎兵再訓練十來隻弓騎，把所有科技升滿後，從西南側出門過橋後到達地圖邊緣就向西走，走到底後再沿著邊緣往北方後就會到達敵方的大本營，派幾支騎兵對付投石車，其他重騎和弓騎直取首領的腦袋，很快就能過關。
            </li>

            <li>
              通關後沒有失去任何<nuxt-link to="/units/hero">英雄</nuxt-link
              >可獲得成就「義大利瓊斯和第一次十字軍東征」，把所有<nuxt-link
                to="/units/hero"
                >英雄</nuxt-link
              >塞到城堡裡不讓他們出戰即可。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">東方的博希蒙德</div>
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
              <nuxt-link to="/batts/The_Hautevilles">歐特維爾家族</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Sicilians">西西里</nuxt-link>
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
              歐特維爾家族第四章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Bohemond_and_the_Emperor"
                >博希蒙德與皇帝</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Wonder_of_the_World">世界奇觀</nuxt-link>
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
