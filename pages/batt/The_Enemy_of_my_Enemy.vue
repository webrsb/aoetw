<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>我敵人的敵人</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>我敵人的敵人</b>是<nuxt-link to="/batt/El_Cida"
              >席德戰役</nuxt-link
            >的第二個場景。
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
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                800<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／200<nuxt-link to="/resource/Food">食物</nuxt-link
                >／300<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／200<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">75</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #ffd700;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="11%">
                <div class="p4"></div>
                玩家2
              </td>
              <td class="tc6" width="39%">
                托雷多（黃色）<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>
              </td>
              <td class="tc6" width="12%">
                <div class="p5"></div>
                玩家3
              </td>
              <td class="tc6" width="39%">蒙達米特（藍綠）薩拉森</td>
            </tr>
            <tr>
              <td class="tc6" width="11%">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6" width="38%">
                回教長老<nuxt-link to="/units/hero/Imam">伊滿</nuxt-link
                >（紫色）薩拉森
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p8"></div>
                玩家5
              </td>
              <td class="tc6">西班牙的叛亂軍（橘色）西班牙</td>
              <td class="tc6">
                <div class="p3"></div>
                玩家6
              </td>
              <td class="tc6">摩爾人的反叛軍（綠色）薩拉森</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link
              >x10、<nuxt-link to="/units/Knight">騎士</nuxt-link
              >x10、<nuxt-link to="/units/Archer">弓箭手</nuxt-link
              >x8、<nuxt-link to="/units/Villager">村民</nuxt-link
              >x4、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >x3、<nuxt-link to="/units/hero">英雄</nuxt-link>：<nuxt-link
                to="/units/hero/El_Cid"
                >席德</nuxt-link
              >。
            </dd>
            <dt>大地之母單位：</dt>
            <dd><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>x1</dd>
          </dl>
          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>席德必須活著。</li>
              <li>找到停止托爾多叛亂的方法。</li>
              <li>
                席德必須與回教長老伊滿會面，因為他知道如何結束在托雷多的動亂。
              </li>
              <li>
                從叛亂的領袖們手裡，找回這4件聖器，並把衪們送回到回教長老伊滿手上。
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                如果你不能製造<nuxt-link to="/units/Trebuchet"
                  >巨型投石機</nuxt-link
                >，駐守的<nuxt-link to="/units/Battering_Ram"
                  >輕型衝撞車</nuxt-link
                >就成為你最佳的<nuxt-link to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >。
              </li>
              <li>
                尋找居住在湖邊的聖人，並幫忙找回4個<nuxt-link
                  to="/elements/Relic"
                  >遺跡</nuxt-link
                >。
              </li>
              <li>
                席德不能進入<nuxt-link to="/techs/age/Imperial_Age"
                  >帝王時代</nuxt-link
                >。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                席德（紅色）一開始有一隻小規模部隊，你可以用它來建造你的基地。
              </li>
              <li>
                你應該要很快就建立出一個陣地，然後立刻去搜索資源。席德要在托雷多
                (黃色)
                這個無助的城市裡，對抗西班牙的叛亂軍（橘色）和摩爾人的叛軍（綠色）。
              </li>
              <li>
                這時附近的其他摩爾人，蒙達米特（青色）和回教長老伊滿（紫色），他是一個聖者。只要有一邊不信任，就不曉得下一步怎麼走。<nuxt-link
                  to="/civs/Spanish"
                  >西班牙人</nuxt-link
                >的叛亂軍隊是由<nuxt-link to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >、騎士和輕型衝撞車組成。
              </li>
              <li>
                摩爾人的叛軍會使用<nuxt-link to="/units/Archer_Units"
                  >弓兵</nuxt-link
                >、<nuxt-link to="/units/Camel_Rider">駱駝騎兵</nuxt-link
                >和<nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link
                >，無論是那一方的軍隊，都會有<nuxt-link to="/units/Monk"
                  >僧侶</nuxt-link
                >。托雷多擁有堅固的<nuxt-link to="/building/Stone_Wall"
                  >城牆</nuxt-link
                >，所以要肯定你有帶備攻城武器。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              此關卡不用擔心在標準難度上消耗太多的防守資源，主要的敵人主要是騎士（西班牙叛軍）和駱駝（摩爾人）。他們通常在一個單位巡邏。
            </li>
            <li>
              首先使用其中一個騎士巡邏到岸邊東部（橋前），有10多隻羊，不要把<nuxt-link
                to="/units/animal/Sheep"
                >綿羊</nuxt-link
              >帶到蒙達米特（青色）的市場，因為他會接管綿羊。
            </li>
            <li>
              金礦的主要來源有兩個：一個位於西岸，一個位於沿途的東部地，當玩家的單位到達該地區較高的海岸將會有一艘運輸船，建議玩家去釣魚。因為相同數量的<nuxt-link
                to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >比農場消耗的資源更少。
            </li>
            <li>
              利用運輸船載送席德去找伊滿在最北端的島嶼此時他會告訴你只要你帶來4個遺跡，他將有辦法結束這場叛亂。
            </li>
            <li>
              4個遺跡分別在 兩個<nuxt-link to="/building/Monastery"
                >修道院</nuxt-link
              >各1，一個僧侶手拿遺跡卡在<nuxt-link to="/building/Palisade_Wall"
                >木牆</nuxt-link
              >內，最後一個在左下方<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >後方。
            </li>
            <li>
              當你準備入侵時，使用<nuxt-link to="/units/Siege_Weapons"
                >攻城器</nuxt-link
              >具（無法使用巨型投石機）和騎士摧毀防禦性<nuxt-link to="/building"
                >建築</nuxt-link
              >和軍事建築，再用少部分騎士作為掩護讓僧侶可以拿到城內的三個遺跡（城堡後方除外），拿完三個後可以派遣4名僧侶
              + 席德去到城堡附近，其中3名僧侶幫席德補血，另一隻進去裡面拿。
            </li>
            <li>
              拿到後 將所有的僧侶還有席德到河道邊搭船到伊滿那即可完成任務破關。
            </li>
          </ul>
          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              不用太擔心對方軍隊的數量和戰力，但對方會出攻城器具，如有威脅需要提前打掉。
            </li>
            <li>
              在進入敵營時，可以針對<nuxt-link to="/building/Barracks"
                >軍營</nuxt-link
              >、馬場、弓箭場進行破壞阻斷敵軍生產軍隊，或者派遣大量騎士駐守在軍營附近，就近消滅。
            </li>
            <li>
              拿到運輸船後，可以讓他到河道彎道下方（敵軍<nuxt-link
                to="/building/Mill"
                >磨坊</nuxt-link
              >附近）等待，以方便接應拿完城堡後的僧侶。
            </li>
            <li>
              如果使用3名僧侶補席德坦城堡傷害，須注意席德<nuxt-link
                to="/elements/Hit_points"
                >血量</nuxt-link
              >，可以利用巡邏讓席德可以損血狀況緩和。
            </li>
            <li>
              因為資源有限，大部分黃金掌握在敵軍手上，所以建議有策略性地拿取遺跡，不建議派大軍前往（大軍隊形成會有點慢）。
            </li>
            <li>
              如果想節省僧侶的製造黃金，可以生產一隻僧侶，之後提升修道院<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >，利用一隻僧侶去<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              >敵軍僧侶。
            </li>
          </ul>
          <h3>快速破關</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              <a
                href="https://www.youtube.com/watch?v=3Wl48txTsXk"
                target="_blank"
                >此影片是快速通關打法，可以根據個人遊戲體驗斟酌使用。</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                我敵人的敵人
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/El_Cid/The_Enemy_of_my_Enemy_map.png" alt="" /></div>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/batt">戰役</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/batt/El_Cida">席德</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第二章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Brother_against_Brother">手足相殘</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Exile_of_the_Cid"
                >席德的流放</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由Wun、裕暉協助編輯。</div>
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
