<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>圍困昇龍</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>圍困昇龍</b>為<nuxt-link to="/batt/Le_Loi">黎利戰役</nuxt-link
            >的第三關劇情關卡，此關描述<nuxt-link to="/civs/Vietnamese"
              >越南</nuxt-link
            ><nuxt-link to="/units/hero/Le_Loi">黎利</nuxt-link
            >對明軍在越南的根據地「昇龍（今河內市）」的襲擊。
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
                800<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／800<nuxt-link to="/resource/Food">食物</nuxt-link
                >／300<nuxt-link to="/resource/Gold">黃金</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
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
              <td class="tc6"><div class="p4">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Vietnamese">越南人</nuxt-link>（黃色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p3">玩家3</div></td>
              <td class="tc6">當地百姓（綠色）越南</td>
              <td class="tc6"><div class="p8">玩家4</div></td>
              <td class="tc6">
                叛明部隊（橘色）<nuxt-link to="/civs/Chinese">中國</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6"><div class="p1">玩家2</div></td>
              <td class="tc6">明軍（藍色）中國</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            。<nuxt-link to="/units/hero">英雄</nuxt-link>&nbsp;-&nbsp;黎利x1
          </p>
          <p>
            。 軍事單位 -<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >x7、<nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
            >x10、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >x1、帝王擲矛手x17
          </p>
          <p>大地之母單位：輕騎兵X2、帝王擲矛手x4</p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>黎利必須存活。</li>
              <li>
                攻佔昇龍城（摧毀一座<nuxt-link to="/building/Castle"
                  >城堡</nuxt-link
                >與大學）。
              </li>
              <li>奪回糧倉。</li>
            </ol>
          </div>
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <ul>
            <li>找到棄明投越部隊的營地。</li>
            <li>找到龜仙人。</li>
            <li>解救明朝監獄裡的大越百姓。</li>
            <li>找到山泊義軍。</li>
            <li>把龜仙人帶去龜湖。</li>
          </ul>
        </div>

        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>明軍在昇龍城外勢力並不強大，你只會遭遇零星抵抗。</li>
            <li>
              珍惜一兵一卒，因為能增援你的兵力並不多。善用兵種相剋可以獲得較大戰果。
            </li>
            <li>叢林密布，小心埋伏。</li>
            <li>
              起義軍可以升級進入<nuxt-link to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >。
            </li>
            <li>
              摧毀主要的敵營<nuxt-link to="/building">建築</nuxt-link
              >能夠從中劫掠資源。
            </li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              黎利的軍隊一開始出現在地圖南邊，他打算把死守昇龍城的明軍一舉消滅在城內，但在那之前他想先解救一些被明軍奴役的大越百姓（綠色）。
            </li>
            <li>
              明軍（藍色）佔據了昇龍城（即交州府）和周邊的地區，但是他們的主力都佈置在城內，所以城外的守備比較空虛。
            </li>
            <li>
              有一些士兵從明軍大營裡叛逃了出來，躲在茂密的森林裡。如果他們覺得黎利勢眾（大於30人），他們可能會投奔與你，和你一起攻打昇龍。
            </li>
          </ul>
          <h2>細節</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>本關沒有內政與經濟問題，將注意力專注在行軍作戰上。</li>
              <li>
                叛明部隊可以稍稍提供戰力補充，但仍應該注意節省自己的軍力。
              </li>
              <li>
                雖然叛明部隊的<nuxt-link to="/civs">文明</nuxt-link
                >是「中國」，但仍有機會從中取得<nuxt-link
                  to="/units/Ballista_Elephant"
                  >弩砲象</nuxt-link
                >或<nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link>。
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
                圍困昇龍
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/(map)Le_Loi - 3.The_Battle_at_Hanoi.jpg"
                  alt=""
                />
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
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4"><nuxt-link to="/batt/Le_Loi">黎利</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第四章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Mountain_Siege">至靈山魂</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Reaching_South">揮師南下</nuxt-link>
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
