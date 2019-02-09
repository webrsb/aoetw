<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>化學</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            化學可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/University">學院</nuxt-link
            >研發。研發後可生產
            <nuxt-link to="/units/Gunpowder_Unit"></nuxt-link
            >火藥單位（除了<nuxt-link to="/civs/Huns">匈奴</nuxt-link
            >、<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
            <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>與<nuxt-link
              to="/civs/Incas"
              >印加</nuxt-link
            >外）。<nuxt-link to="/units/Siege_Weapons"></nuxt-link
            >攻城武器、弓箭手和防禦建築(如
            <nuxt-link to="/building/Castle">城堡</nuxt-link>、箭塔、<nuxt-link
              to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >)+1攻擊。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：該科技在帝王時代花費便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>：該科技免費。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：該科技研發時間快80%
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>化學不影響城堡和城鎮中心。</li>
            <li>化學給弩炮+2攻擊。</li>
            <li>化學會影響所有射出的箭。</li>
            <li>化學會減緩投石車的投射物速率20%，砲彈會飛比較慢。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>化學現在給弩炮+1攻擊。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>化學現在會影響城堡和城鎮中心。</li>
            <li>化學只會影響射出的第一支箭。</li>
            <li>化學現在不會減緩投石車的投射物速率了。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            化學在中世紀的發展還非常有限，而且當時幾乎完全致力於尋找將基本金屬轉化為金的方法。這項研究被稱為煉金術，研究者被稱為煉金術士。煉金術士偶而會發現有用的化學物質。這些試驗最重要的結果是歐洲人學會煉製火藥，這是中國人早在幾個世紀之前就發明的。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">化學</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Chemistry.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Universityicon.png"
                alt=""
              /><nuxt-link to="/building/Archery_Range">學院</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">100秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              研發後可生產火藥單位。攻城武器、弓箭手和防禦建築(如城堡、建塔、城鎮中心)+1攻擊。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
