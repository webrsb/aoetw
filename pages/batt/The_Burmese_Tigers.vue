<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>餓虎撲食</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>餓虎撲食</b>為<nuxt-link to="/batt/Bayinnaunga"
              >勃印曩戰役</nuxt-link
            >的第一關劇情關卡，此關描述<nuxt-link to="/civs/Burmese"
              >緬甸</nuxt-link
            >東籲王朝君主<nuxt-link to="/units/hero/Tabinshwehti"
              >德彬瑞蒂</nuxt-link
            >，主動進攻雄踞下緬甸的白古王朝。
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
                1,010<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／1,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／800<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／600<nuxt-link to="/resource/Stone">石礦</nuxt-link>
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
              <td class="tc6"><div class="p3"></div>玩家1</td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Burmese">緬甸人</nuxt-link>（綠色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%"><div class="p5"></div>玩家5</td>
              <td class="tc6" width="38%">
                <nuxt-link to="/civs/Portuguese">葡萄牙人</nuxt-link
                >（水藍）<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6"><div class="p1"></div>玩家2</td>
              <td class="tc6">
                卑謬國（藍色）<nuxt-link to="/civs/Indians">印度</nuxt-link>
              </td>
              <td class="tc6" width="12%"><div class="p2"></div>玩家3</td>
              <td class="tc6" width="38%">
                白古國（紅色）<nuxt-link to="/civs/Khmer">高棉</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4"></div>玩家4</td>
              <td class="tc6">
                撣族人（黃色）<nuxt-link to="/civs/Chinese">中國</nuxt-link>
              </td>
              <td class="tc6"><div class="p2"></div>玩家6</td>
              <td class="tc6">白古國（紅色）高棉</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            。<nuxt-link to="/units/hero">英雄</nuxt-link> -<nuxt-link
              to="/units/hero/Bayinnaung"
              >勃印曩</nuxt-link
            >x1、<nuxt-link to="/units/hero/Tabinshwehti"
              >德彬瑞蒂國王</nuxt-link
            >x1、卑謬總督x1
          </p>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Battle_Elephant"
              >矛象伕</nuxt-link
            >x5、<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link>x5
          </p>
          <p>
            。 經濟單位&nbsp;-&nbsp;<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >x4。
          </p>
          <p>。 大地之母單位 -</p>
          <p>
            東吁勇士x12、飛鏢騎兵x7、<nuxt-link to="/units/Monk">僧侶</nuxt-link
            >x2、<nuxt-link to="/units/Onager">中型投石車</nuxt-link
            >x1、<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>x1
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>殺死白古國王多迦耶畢（形象為東南亞國王）。</li>
              <li>攻下卑謬國的紀念碑。</li>
            </ol>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>在五分鐘內殺死多迦耶畢。</li>
              </ol>
            </div>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>你的人口上限為100。</li>
              <li>英雄犧牲並不會立即影響勝敗。</li>
              <li>
                經過升級『<nuxt-link to="/techs/Howdah">象轎</nuxt-link
                >』的矛象伕基本上與<nuxt-link to="/units/Battering_Ram"
                  >衝撞車</nuxt-link
                >無異。
              </li>
              <li>
                葡萄牙人與你相遇後，就會立刻討要貢品。可以先存好數百黃金以備使用；或是避免往西與其照面。
              </li>
            </ul>
            <h2>斥候</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  白古國王多迦耶畢（紅色）正在躲避東吁王國的入侵。他現在還指望他南邊的<nuxt-link
                    to="/building/Castle"
                    >城堡</nuxt-link
                  >能夠成為他最後的棲身之所。若是這些城堡也被摧毀了，那他就會逃偉卑謬國。
                </li>
                <li>
                  卑謬國（藍色）有<nuxt-link to="/units/Elephant_Archer"
                    >象弓騎兵</nuxt-link
                  >與火銃手防禦，不易攻破。想要打敗他們，必須摧毀他們的紀念碑。
                </li>
                <li>
                  撣族人（黃色）的<nuxt-link to="/units/Archer_Units"
                    >弓兵</nuxt-link
                  >與<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
                  >會對東吁的大本營造成威脅。
                </li>
                <li>
                  葡萄牙人（水藍）和你相遇後會向你討要貢品。他們態度的敵友取決於你的決定。
                </li>
              </ul>
              <h2>細節</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ul>
                  <li>
                    葡萄牙人就和所有<nuxt-link to="/batt">戰役</nuxt-link
                    >裡愛錢的劇情AI一樣，當你繳不出錢就不要對他們翻臉感到意外。
                  </li>
                  <li>
                    勃印曩（1516-1581）作為德彬瑞蒂國王的手下大將。在本章節的形象是騎乘近戰單位，以<nuxt-link
                      to="/units/Elite_Battle_Elephant"
                      >精銳矛象伕</nuxt-link
                    >的形象登場。
                  </li>
                  <li>
                    德彬瑞蒂國王（1527-1551）在我國明代典籍中被稱作「莽瑞體」，為東籲王朝君主，果斷對於白古用兵，更廣泛招募葡萄牙雇傭軍作戰。直到遇刺前，都在進行對白古王國的戰爭。在本章節的形象是象弓騎兵。
                  </li>
                  <li>卑謬總督（？-？）在本章節以東亞僧侶的形象登場。</li>
                  <li>
                    卑謬位於緬甸西南邊，在16世紀中擁有治權。是白古王朝的重要盟友。在遊戲中以印度代表之。
                  </li>
                  <li>
                    白古，在我國典籍內也被稱為「勃固」。是由孟族建立的治權，16世紀時一度稱霸下緬甸地區。在遊戲中以高棉代表之。
                  </li>
                  <li>
                    撣族，即緬地人民對我國傣族的訛稱。生活於雲南至緬北一帶。在遊戲中以中國代表之。
                  </li>
                  <li>
                    本關卡原文名稱為＂The Burmese
                    Tigers＂。字面上應為：緬甸之虎。因為緬軍在德彬瑞蒂大王的指揮下開始一系列的擴張，是以翻譯組取其勇猛之意將之譯為餓虎撲食。
                  </li>
                </ul>
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
                餓虎撲食
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/(map)Bayinnaung_1.The_Burmese_Tigers.jpg"
                  alt=""
                />
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
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Bayinnaunga">勃印曩</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Burmese">緬甸人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第三章之一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Mandalay_Cobra">猛蛇出洞</nuxt-link>
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
