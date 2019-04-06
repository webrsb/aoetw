<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>進入中國</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <h3><em>遊牧民族的車痕將朝著世紀上最強的中國進軍！</em></h3>
          <p>
            （遊戲中<nuxt-link to="/batt/Genghis_Khana"
              >成吉思汗(戰役)</nuxt-link
            >第三關的劇情段落）
          </p>
          <p>
            <b>進入中國</b>為成吉思汗(戰役)的第三關劇情關卡，此關描述<nuxt-link
              to="/civs/Mongols"
              >蒙古</nuxt-link
            >帝國於蒙金戰爭（1211年~1234年金朝滅亡），蒙夏戰爭（1205~1227）這2大戰役為主軸，這是世界史上著名的君主制小國崛起、以少勝多的戰爭。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                1,000<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >，800<nuxt-link to="/resource/Food">食物</nuxt-link
                >，800<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >，1,200<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
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
              <td class="tc6"><div class="p8">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Mongols">蒙古人</nuxt-link>（橘色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p2">玩家2</div></td>
              <td class="tc6" width="38%">突厥（紅色）中國</td>
              <td class="tc6" width="12%"><div class="p3">玩家3</div></td>
              <td class="tc6" width="38%">西夏（綠色）中國</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4">玩家4</div></td>
              <td class="tc6">金（黃色）中國</td>
              <td class="tc6"><div class="p5">玩家5</div></td>
              <td class="tc6">宋（藍綠色）中國</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p1">玩家6</div></td>
              <td class="tc6">工程師（藍色）中國</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              4位<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、6位<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>。
            </dd>
            <dt>大地之母單位：</dt>
            <dd>
              6位<nuxt-link to="/units/Villager">村民</nuxt-link>、6台<nuxt-link
                to="/units/Bombard_Cannon"
                >火砲</nuxt-link
              >、1台<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
              >、1台<nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
              >、1艘<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>。
            </dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>征服西夏、突厥、金和宋。</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              如果沒有<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >，長城會給你帶來極大的煩惱。幸運的話你可以拿下在長城東北的一些<nuxt-link
                to="/units/Siege_Weapons"
                >攻城單位</nuxt-link
              >。你的臨時陣地可以暫時作為掩護，但你仍須盡快深入中國尋找資源。
            </li>
            <li>
              中國的民族會把他們彼此間的岐見先放在一旁，以對抗共同的敵人。所以，你一定要立刻向這四個民族同時發動攻勢，最少先戰勝其中之一以取得優勢。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                萬里長城的箭塔會在遊戲的第一秒自動升級為<nuxt-link
                  to="/building/Keep"
                  >大型箭塔</nuxt-link
                >，這與關卡難度無關。
              </li>
              <li>
                擁有<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
                >的資料片（或者HD版本），會讓事情變得很容易：在<nuxt-link
                  to="/techs/age/Castle_Age"
                  >城堡時代</nuxt-link
                >你就能生產一堆<nuxt-link to="/units/Petard">爆炸桶</nuxt-link
                >，然後把他們送到金國的領土上。
              </li>
              <li>
                然後，你可以用其中一些搞定<nuxt-link to="/building/Stone_Wall"
                  >城牆</nuxt-link
                >、再用其他的摧毀奇觀。如此一來，防止金國的勝利，讓你得以專注在其他中國敵人上、也讓你的軍力更加壯盛，最後再來對付金國。這個奇觀被摧毀後，金國在剩下的遊戲時間裡不會再蓋一個。
              </li>
              <li>
                金國會動用超過30個村民建造奇觀，所以建成速度不僅會比<nuxt-link
                  to="/civs/Huns"
                  >匈奴</nuxt-link
                >戰役第六關其他敵人蓋的奇觀來得快、也會比<nuxt-link
                  to="/civs/Aztecs"
                  >阿茲特克</nuxt-link
                >戰役中更快，是劇情之中最快的。
              </li>
              <li>
                雖然你只需要擊敗金、宋、西夏與突厥，但只要工程師仍然存在，關卡就不會結束。
              </li>
              <li>
                這關的宋，指的是南宋。在當時是軍事上相對「弱勢」的王朝、被鄰國持續圍攻。不過，直到<nuxt-link
                  to="/units/hero/Genghis_Khan"
                  >成吉思汗</nuxt-link
                >過世50年後，他的孫子忽必烈才攻滅南宋、統治中國。（金國也是成吉思汗死後才被蒙古人攻滅）
              </li>
              <li>
                金，在中文中意指黃金，也許這是遊戲設計者使用黃色代表金國的原因。金是由女真人所建立的王朝，在當時是宋朝最大的外患，甚至超過了蒙古人，他們的後裔又以滿洲人為人所知，後來征服了中國（明朝）也就是四百年後的清朝。
              </li>
              <li>
                西夏人是一個由党項人建立的較小王國，位在當時中國的西北方，在軍事上也對宋朝形成威脅。党項人就是當時活躍於中國西北方的遊牧民族。（這裡所說的中國指的是南宋，不過值得注意的是此時的金國也佔據所謂的中原地帶，所以真正代表中國的政權仍有待商榷）
              </li>
              <li>
                党項人與西夏應是同樣的政治實體，而不是分開的。事實上成吉思汗聯合宋攻打金國。
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
                進入中國
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Into_china.png" alt="" />
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Genghis_Khana">成吉思汗</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Mongols">蒙古人</nuxt-link>
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第四章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Life_of_Revenge">復仇的人生</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Horde_Rides_West"
                >遊牧民族的西遷</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、竺叡協助編輯。</div>

        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上蒙古入侵中國戰役
            <div style="margin-left: 10px;">
              <em
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E8%92%99%E9%87%91%E6%88%B0%E7%88%AD"
                    target="_blank"
                    >蒙金戰爭</a
                  ></strong
                ></em
              >、<em
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E8%92%99%E5%8F%A4%E6%BB%85%E8%A5%BF%E5%A4%8F%E4%B9%8B%E6%88%B0"
                    target="_blank"
                    >蒙古滅西夏之戰</a
                  ></strong
                ></em
              >
            </div>
          </div>
        </div>
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
