<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>風雲變色</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>風雲變色</b>為<nuxt-link to="/batt/Gajah_Mada"
              >加查·馬達戰役</nuxt-link
            >的第五關劇情關卡，此關描述<nuxt-link to="/units/hero/Gajah_Mada"
              >加查·馬達</nuxt-link
            >在布巴特之戰中運籌帷幄的經過。
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
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                500
                <nuxt-link to="/resource/Wood">木材</nuxt-link>／400<nuxt-link
                  to="/resource/Food"
                  >食物</nuxt-link
                >／
                <p>
                  450
                  <nuxt-link to="/resource/Gold">黃金</nuxt-link>／125<nuxt-link
                    to="/resource/Stone"
                    >石礦</nuxt-link
                  >
                </p>
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">125</td>
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
              <td class="tc6"><div class="p2"></div>玩家1</td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Malay">馬來人</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p3"></div>玩家2</td>
              <td class="tc6">
                滿者伯夷軍隊（綠色）<nuxt-link to="/civs/Malay">馬來</nuxt-link>
              </td>
              <td class="tc6"><div class="p4"></div>玩家4</td>
              <td class="tc6">特魯烏蘭城（黃色）馬來</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p6"></div>玩家6</td>
              <td class="tc6">爪哇村莊（紫色）馬來</td>
              <td class="tc6"><div class="p7"></div>玩家7</td>
              <td class="tc6">
                <nuxt-link to="/civs/Indians">印度</nuxt-link>商人（灰色）印度
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6"><div class="p1"></div>玩家2</td>
              <td class="tc6">巽他王國（藍色）馬來</td>
              <td class="tc6"><div class="p5"></div>玩家5</td>
              <td class="tc6">
                爪哇流寇（淺藍）<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>
              </td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            。<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位&nbsp;-&nbsp;加查·馬達
          </p>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Two-Handed_Swordsman"
              >雙手劍兵</nuxt-link
            >x8、<nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
            >x8、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
            >x8、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >x1、<nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link
            >x2、<nuxt-link to="/units/Onager">中型投石車</nuxt-link>x2
          </p>
          <p>
            。
            <nuxt-link to="/units/Naval_Vessels">海軍單位</nuxt-link>
            -<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
            >x1、<nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
            >x6、<nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>x4
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <li>殺死皇城中的巽他王子。</li>
            <li>
              建造並保衛一座<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >。
            </li>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>找到一座村莊替你補給糧草。</li>
                <li>佔領皇城邊的軍事陣地。</li>
              </ol>
            </div>
            <h2>任務提示</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  即使你的英雄犧牲了，也不會導致<nuxt-link to="/batt"
                    >戰役</nuxt-link
                  >失敗。（按：加查·馬達你真不重要）
                </li>
                <li>滿者伯夷的人口上限為125。</li>
                <li>
                  在國都附近有印度商人，你若支付300黃金便能夠獲得三隻<nuxt-link
                    to="/units/War_Elephant"
                    >戰象</nuxt-link
                  >。
                </li>
                <li>
                  這一帶流寇橫行，你也可以在進攻巽他王國之前先把流寇給剿滅。如果你能夠搗毀匪巢，就無法讓他們橫行霸道了。
                </li>
                <li>
                  巽他王國會利用特魯烏蘭城訓練各種部隊，若是能夠派遣士兵搶奪那些軍事陣地便可以取得那些<nuxt-link
                    to="/building"
                    >建築</nuxt-link
                  >的控制權。
                </li>
                <li>
                  加查·馬達不准我們使用<nuxt-link to="/units/Siege_Weapons"
                    >攻城武器</nuxt-link
                  >襲擊皇城，但大象可以是個良好的替代武器。
                </li>
              </ul>
              <h2>斥候</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    加查·馬達
                    (紅色)正坐落於皇城南邊，這座起始小島資源匱乏、沒有戰略縱深，無法承受敵軍的強襲。
                  </li>
                  <li>
                    特魯烏蘭城 (黃色)
                    是滿者伯夷的首都，黑奄‧沃克王的皇宮在東邊。皇城有重兵防禦，戒備森嚴，但不和我們為敵。
                  </li>
                  <li>
                    巽他王國
                    (藍色)是為了一場聯姻而來到特魯烏蘭城的。但現在他們發現自己遭到背叛，打算在皇城裡召集兵馬和我們一決高下。如果我們想要勸他們投降，就必須闖入皇城剿滅他們的軍隊。
                  </li>
                  <li>
                    皇城外的西邊和北邊有一些滿者伯夷村莊 (紫色)，和營地
                    (綠色)。如果我們能趕過去的話就能把他們召集起來。
                  </li>
                  <li>
                    由於加查·馬達都把心思放在籌備和親上，沒有時間平定盜寇，導致流寇橫行。而且巽他王國已經收買了這些流寇，所以他們可能會對我們格外敵視，甚至主動進攻。
                  </li>
                </ul>
                <h2>細節</h2>
                <div class="hrn1"></div>
                <div class="n1">
                  <ul>
                    <li>
                      布巴特之戰起源於加查·馬達的一次併吞計畫，藉由和親將巽他王國併入滿者伯夷。但由於加查·馬達玩弄話術，導致巽他王國驚覺上當（巽他王國認為此次婚姻應該是平行對等的聯姻）而表現出不滿。加查·馬達藉此靠著武力企圖襲殺巽他國王、巽他公主為此悲憤自盡。是一場殘酷的政治謀劃。
                    </li>
                    <li>本關無法建造攻城武器。</li>
                    <li>
                      新君哈亞烏魯克在事變後十分震怒，遂將加查·馬達流放。雖然後來又將他恢復原職。
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                風雲變色
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Gajah Mada 5.jpg" alt="" />
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Gajah_Mada">加查·馬達</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">馬來人</td>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第一章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Serving_the_New_King">輔佐新君</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由亞諭、裕暉協助編輯</div>
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
