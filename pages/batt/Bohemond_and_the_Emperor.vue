<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>博希蒙德與皇帝</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>博希蒙德與皇帝</b>的到來是<nuxt-link to="/games/delw"
              >西方霸主</nuxt-link
            >DLC新增的<nuxt-link to="/batt">戰役</nuxt-link>中，<nuxt-link
              to="/batts/The_Hautevilles"
              >歐特維爾家族</nuxt-link
            >的第三關。
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
                無
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
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
                <div class="p1"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                諾曼人［<nuxt-link to="/civs/Sicilians">西西里人</nuxt-link
                >］（藍色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p8"></div>
                玩家6
              </td>
              <td class="tc6">
                佩切涅格人（橙色）<nuxt-link to="/civs/Cumans"
                  >庫曼人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p7"></div>
                玩家7
              </td>
              <td class="tc6">茜克爾蓋妲（灰色）諾曼人/西西里人</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家2
              </td>
              <td class="tc6">
                阿歷克塞‧科穆寧（紫色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭人</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6">
                尼基弗魯斯‧梅里森諾（綠色）拜占庭人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">
                格雷戈里奧斯‧帕克利亞諾斯（黃色）拜占庭人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家5
              </td>
              <td class="tc6">
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                ><nuxt-link to="/elements/Garrison">駐軍</nuxt-link
                >（紅色）拜占庭人
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家8
              </td>
              <td class="tc6">
                塞爾柱<nuxt-link to="/civs/Turks">土耳其人</nuxt-link
                >（青色）<nuxt-link to="/civs/Turks">土耳其人</nuxt-link>
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              博希蒙德、<nuxt-link to="/units/Knight">騎士</nuxt-link
              >x8、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>x8
            </dd>
          </dl>

          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>打敗3名將軍。</li>
            </ul>
            <p>次要任務</p>
            <ul>
              <li>使用博希蒙德戰鬥，獲得諾曼戰團的援助。</li>
              <li>找到鮑格米勒教牧師。</li>
              <li>
                摧毀北部的<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
                >，解放佩切涅格人。
              </li>
              <li>在東部找到羅塞爾‧德‧拜約勒的殘餘軍隊。</li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                茜克爾蓋妲拒絕幫助您，迫使您只能依靠自己的扈從。因此，您的人口上限僅為75人，且無法建造<nuxt-link
                  to="/building/Stone_Wall"
                  >城牆</nuxt-link
                >、<nuxt-link to="/building/Castle">城堡</nuxt-link
                >、戰艦。不過您的<nuxt-link to="/units/Transport_Ship"
                  >運輸船</nuxt-link
                >獲得<nuxt-link to="/los">視野</nuxt-link>提升。
              </li>
              <li>
                不要和<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                >軍隊正面衝突，一開始他們的回復速度非常快。摧毀他們的軍事<nuxt-link
                  to="/building"
                  >建築</nuxt-link
                >是降低他們回復速度的唯一方法。
              </li>
              <li>
                查看您的任務以了解每個將領麾下部隊的戰鬥力（回復率）。當數值降為零時，他們將無法進行回復，從而變得脆弱
              </li>
              <li>
                拜占庭人會積極尋找您的部隊求戰。您可以利用他們的這種侵略性，使用疑兵轉移其注意力，藉使進攻真正的目標。
              </li>
              <li>
                掠奪敵方建築以提振您的經濟。<nuxt-link
                  to="/building/Lumber_Camp"
                  >伐木場</nuxt-link
                >提供<nuxt-link to="/resource/Wood">木材</nuxt-link>，<nuxt-link
                  to="/building/Mill"
                  >磨坊</nuxt-link
                >提供<nuxt-link to="/resource/Food">食物</nuxt-link>，<nuxt-link
                  to="/building/Market"
                  >市集</nuxt-link
                >和<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
                >則提供<nuxt-link to="/resource/Gold">黃金</nuxt-link>。
              </li>
              <li>使用博希蒙德作戰。他愈是戰鬥，就會有愈多的諾曼人加入他。</li>
              <li>
                探索地圖搜尋盟友。鮑格米勒教徒可以讓您在自己的城堡中購買<nuxt-link
                  to="/techs/Spies"
                  >間諜</nuxt-link
                >服務。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                博希蒙德‧德‧歐特維爾（1，藍色）開局處於義大利東南海岸。他侵略拜占庭帝國的準備工作遭到了他的繼母，也就是倫巴底戰士公主茜克爾蓋妲（7，灰色）的阻撓。他只能依靠自己的威名來吸引諾曼騎士加入其陣營。
              </li>

              <li>
                三支拜占庭軍隊與博希蒙德敵對，分別由阿歷克塞‧科穆寧皇帝（2，紫色）和他的兩位將軍尼基弗魯斯‧梅里森諾（3，綠色）和格雷戈里奧斯‧帕克利亞諾斯（4，黃色）所率領。拜占庭軍隊中含有軍團兵和<nuxt-link
                  to="/units/Cataphract"
                  >拜占庭聖騎兵</nuxt-link
                >。阿歷克塞‧科穆寧皇帝的部隊中還包含英格蘭瓦良格衛隊（<nuxt-link
                  to="/units/Berserk"
                  >狂戰士</nuxt-link
                >），這些戰士自1066年哈斯汀斯戰敗以來，就一直在尋求向諾曼人復仇的機會。拜占庭軍隊補給快速（快速回復），是非常難纏的對手。
              </li>

              <li>
                博希蒙德可以透過摧毀他們的軍事建築來降低這些軍隊的回復率，這些建築由拜占庭駐軍（5，紅色）駐守。
              </li>

              <li>
                與拜占庭敵對的當地派系可以幫助博希蒙德，其中包括<nuxt-link
                  to="/civs/Bulgarians"
                  >保加利亞人</nuxt-link
                >和一個異教派鮑格米勒。許多拜占庭士兵都暗中成為了鮑格米勒派的教眾，他們可能會願意幫助博希盟德而從事間諜活動。
              </li>

              <li>
                北部邊境的拜占庭人抵禦著<nuxt-link to="/techs/Nomads"
                  >游牧</nuxt-link
                >民族佩切涅格人（6，橙色）的進攻。摧毀這些防禦將會釋放出這些成群的<nuxt-link
                  to="/units/Tarkan"
                  >答剌罕騎兵</nuxt-link
                >、<nuxt-link to="/units/Steppe_Lancer">草原騎兵</nuxt-link
                >、<nuxt-link to="/units/Kipchak">欽察</nuxt-link
                >，讓他們進攻拜占庭人。
              </li>

              <li>
                最後，幾年前諾曼冒險家羅塞爾‧德‧拜約勒曾率領一支軍隊向東進發。這支軍隊可能依然存活，或許位在敵對勢力塞爾柱土耳其人（8，青色）的東邊。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              這一關有點特別，要擊敗綠色、紫色和黃色的軍隊，但他們的軍隊都內建自動回復（任務有說回復力是多少，每個難度下不同），要將軍事建築打掉才能減少回復力，而打掉經濟建築則會有資源進帳。由於敵人不會主動打來，所以可以放心發展。黃金如果花完了，各個離島上都有，也可以在地圖上找到幾個<nuxt-link
                to="/Relic"
                >聖物</nuxt-link
              >，甚至能和東北方的紫色<nuxt-link to="/building/Dock"
                >碼頭</nuxt-link
              >貿易。
            </li>

            <li>
              兵種上採取全<nuxt-link to="/armor/Armor_Class_Cavalry"
                >騎兵</nuxt-link
              >和羅馬兵構成，用<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >討不到便宜。由於敵人會隨時來救被打的地方，初期沒有互爆的本錢，所以打爆軍事建築減少回復力後就跑，逃進運輸船內敵人就不會追擊。可以搭配聲東擊西之計，先派誘餌隊騷擾把敵軍引來，然後主力部隊去打爆軍事建築降低敵人的回復力。等到敵人回復力降低了就可以先打一波看能打掉幾個敵人就先打，打不完就等兵力補充完畢後再出擊。此外有個小限制就是城堡內無法<nuxt-link
                to="/elements/Garrison"
                >駐軍</nuxt-link
              >，所以有殘存的軍隊要靠<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >或牧師來治療。
            </li>

            <li>
              積極讓<nuxt-link to="/units/hero">英雄</nuxt-link
              >出戰，就會有諾曼騎士陸陸續續加入我方。要是<nuxt-link
                to="/units/hero"
                >英雄</nuxt-link
              >不小心死了，過一段時間會在家裡復活。
            </li>

            <li>
              地圖上也可以找到些<nuxt-link to="/units/Konnik"
                >保加利亞騎兵</nuxt-link
              >和牧師加入自己的部隊，找到牧師可以在城堡裡研發本關特有的間諜技術，花1000金可查看三支部隊的所在地5分鐘，5分鐘後要再查看就要再花1000金。
            </li>

            <li>
              此外還有兩個支線任務：打掉北方紅防線的箭塔，橘色的庫曼人幫你打一波，可以配合他們的軍事行動；東方則有一支<nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >部隊會加入陣營，但接觸前要先清掉擋路的塞爾柱土爾其人。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                劇情中後母會炫耀女兒瑪蒂爾達嫁給的貝倫格爾伯爵，就是席德戰役裡的敵人。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">博希蒙德與皇帝</div>
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
              歐特維爾家族第三章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Roger_in_Sicily">西西里的羅傑</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Bohemond_in_the_East"
                >東方的博希蒙德</nuxt-link
              >
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
