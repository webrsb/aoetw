<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>班師勤王</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>班師勤王</b>為<nuxt-link to="/batt/Gajah_Mada"
              >加查·馬達</nuxt-link
            >第二關劇情關卡，此關描述1321年政變中，加查·馬達率<nuxt-link
              to="/building/Barracks"
              >軍營</nuxt-link
            >救主君查雅納迦拉的經過。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                800<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／950<nuxt-link to="/resource/Food">食物</nuxt-link
                >／750<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／550<nuxt-link to="/resource/Stone">石礦</nuxt-link>
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
                <div class="p2"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Malay">馬來人</nuxt-link>（紅色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家3
              </td>
              <td class="tc6">
                賈亞納迦拉國王（黃色）<nuxt-link to="/civs/Malay"
                  >馬來</nuxt-link
                >
              </td>
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6">阿爾雅‧塔達宰相（紫色）馬來</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家2
              </td>
              <td class="tc6" width="38%">拉克利安‧古狄（藍色）馬來</td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家4
              </td>
              <td class="tc6">特魯烏蘭城（橘色）馬來</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6">叛軍（淺藍）馬來</td>
            </tr>
          </table>

          <h3>開場</h3>
          <p>
            。
            <nuxt-link to="/units/hero">英雄</nuxt-link
            >單位&nbsp;-&nbsp;加查‧馬達
          </p>

          <p>
            。 軍事單位 -<nuxt-link to="/units/Shotel_Warrior"
              >彎刀勇士</nuxt-link
            >x6、<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
            >x6、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>x2
          </p>
          <p>
            。 經濟單位&nbsp;-&nbsp;<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >x6
          </p>
          <p>
            。 大地之母單位 -<nuxt-link to="/units/Battle_Elephant"
              >矛象伕</nuxt-link
            >x3、<nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link>x8。
          </p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>賈亞納拉加國王一定要活著</li>
              <li>找到賈亞納拉加國王</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              即使加查·馬達犧牲也不會導致這場<nuxt-link to="/batt"
                >戰役</nuxt-link
              >失敗。
            </li>
            <li>你的人口上限為150。</li>
            <li>
              國王還是有許多追隨者流落在各地，你仔細找找便可以召集到他忠誠的舊部們。
            </li>
            <li>
              賈亞納拉加國王時間不多了，你得快點班師清君側，不然叛軍可能會先一步將他處決。
            </li>
          </ul>
          <h2>斥候</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                加查·馬達的軍隊 (紅色)
                已經趕到了皇城東北角，你得依靠百姓在此安營紮寨，伺機攻打皇城。
              </li>
              <li>在你營區北邊有阿爾雅‧塔達宰相的軍隊，他在等候你一起攻城。</li>
              <li>
                賈亞納迦拉國王
                (黃色)被叛軍圍困在皇城裡，儘管禁衛軍都是精銳，但無法抵擋太久。
              </li>
              <li>
                特魯烏蘭城 (橘色)
                已經被叛軍佔領了。他們布置了重兵來防止我們勤王。他們的部隊有<nuxt-link
                  to="/units/Arbalester"
                  >強弩兵</nuxt-link
                >、<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
                >、大象、<nuxt-link to="/units/Onager">中型投石車</nuxt-link
                >與戟兵。逆賊拉克利安‧古狄率軍闖入王城想要逼宮，手下有劍兵勇士、彎刀勇士、輕騎兵、弩兵聽其調遣。
              </li>
              <li>
                皇城外有其他叛軍
                (淺藍)鎮守南門，他們想圍截任何往南突圍的兵馬。有<nuxt-link
                  to="/units/Elite_Skirmisher"
                  >戰矛兵</nuxt-link
                >、劍士、輕騎兵、<nuxt-link to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >、<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>以及大象
              </li>
            </ul>
            <h2>細節</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>各地散布著零星資源儲存點可供運用。</li>
                <li>
                  在遊戲章節起始點有一間寺廟模樣的<nuxt-link to="/building"
                    >建築</nuxt-link
                  >，那便是爪哇古蹟「榕樹門」，同時也是滿者伯夷國都的入口。
                </li>
                <li>
                  加查·馬達(1290-1364)&nbsp;-&nbsp;以獨特的近戰<nuxt-link
                    to="/units/Infantry_Units"
                    >步兵</nuxt-link
                  >形象登場。
                </li>
                <li>
                  賈亞納迦拉國王(1295-1328) -
                  羅登‧韋查耶之子。於1309年登基，在1328年遭到御醫毒殺。在本章以東南亞國王形象登場。
                </li>
                <li>
                  阿爾雅‧塔達(?-?)&nbsp;-&nbsp;滿者伯夷宰相，在本章以東亞<nuxt-link
                    to="/units/Monk"
                    >僧侶</nuxt-link
                  >的形象登場。
                </li>
                <li>
                  拉克利安‧古狄(?-?) -
                  滿者伯夷軍政大臣，於1321年發動政變弒君謀逆。但失敗，遭到加查·馬達的平定。
                </li>
                <li>特魯烏蘭城&nbsp;-&nbsp;13世紀滿者伯夷王都。</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                班師勤王
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Gajah Mada 2.jpg" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/civs/Malay">馬來人</nuxt-link>
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
              <nuxt-link to="/games/aor">王者崛起</nuxt-link>第一章之二
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Story_of_our_Founders"
                >開疆闢土</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Oath_to_Unify_Nusantara"
                >誓統南洋</nuxt-link
              >
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
