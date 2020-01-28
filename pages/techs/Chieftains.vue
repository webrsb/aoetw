<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>酋長</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>酋長</b>是<nuxt-link to="/civs/Vikings">維京</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵類</nuxt-link
            >+5攻擊，對<nuxt-link to="/armor/Armor_Class_Camel"
              >駱駝騎兵類</nuxt-link
            >+4攻擊。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              除了<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >，<nuxt-link to="/units/Berserk">狂戰士</nuxt-link
              >是遊戲中最耐打的<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >。研發酋長讓狂戰士也能對抗<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >；然而使用<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
              >對付騎兵還是更有效益。另外<nuxt-link to="/units/Archer"
                >弓箭手</nuxt-link
              >對狂戰士來說仍舊是個威脅。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速酋長的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>研發酋長需要700食物400黃金。</li>
            <li>
              酋長給<nuxt-link to="/units/Berserk">狂戰士</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵類</nuxt-link
              >攻擊+4。
            </li>
            <li>酋長只會影響狂戰士。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>研發酋長現在需要400食物300黃金。</li>
            <li>
              酋長現在給<nuxt-link to="/units/Berserk">狂戰士</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵類</nuxt-link
              >攻擊+5。
            </li>
            <li>
              4.8改版後酋長會影響所有<nuxt-link to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >。
            </li>
            <li>
              4.8b改版後酋長現在會給所有步兵單位對<nuxt-link
                to="/armor/Armor_Class_Camel"
                >駱駝騎兵類</nuxt-link
              >攻擊+2。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              5.7改版後酋長現在會給所有步兵單位對<nuxt-link
                to="/armor/Armor_Class_Camel"
                >駱駝騎兵類</nuxt-link
              >攻擊+<strong>4</strong>。
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              酋長在《<nuxt-link to="/games/ak">世紀帝國II：非洲王國</nuxt-link
              >》時因為bug而沒有給所有步兵單位對<nuxt-link
                to="/armor/Armor_Class_Camel"
                >駱駝騎兵類</nuxt-link
              >攻擊+2。之後在4.8b改版後修正。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">酋長</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech.png" class="img-fluid" alt="" />
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/castle.png"
                width="45"
                alt=""
              /><nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
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
              步兵對<nuxt-link to="/armor/Armor_Class_Cavalry">騎兵</nuxt-link
              >+5攻擊，對<nuxt-link to="/armor/Armor_Class_Camel"
                >駱駝騎兵</nuxt-link
              >+4攻擊。
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
