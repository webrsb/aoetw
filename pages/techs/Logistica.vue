<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>後勤</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>後勤</b>是<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Cataphract"
              >拜占庭聖騎兵</nuxt-link
            >有0.5格的<nuxt-link to="/elements/Area_of_Effect"
              >踐踏傷害</nuxt-link
            >(額外+5攻擊)，對<nuxt-link to="/armor/Armor_Class_Infantry"
              >步兵</nuxt-link
            >攻擊+6。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              有後勤的<nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
              >更能屠殺<nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
              >，踐踏傷害則能有效對付一群<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              >或是近戰單位。然而<nuxt-link to="/units/Halberdier"
                >戟兵</nuxt-link
              >對<nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
              >仍舊是個威脅，應盡量避免與一大群的<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >正面交鋒。
            </li>
            <li>
              後勤並沒有加成在有拜占庭聖騎兵外表的<nuxt-link to="/units/hero"
                >英雄</nuxt-link
              >身上，如:<nuxt-link to="/units/hero/Attila_the_Hun"
                >阿提拉</nuxt-link
              >和<nuxt-link to="/units/hero/Belisarius">貝里薩留</nuxt-link>。
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
              >能夠加速後勤的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
            ><nuxt-link to="/civs">文明</nuxt-link
            >在羅馬的歷史超過一千年，主要是因為他們使用較小的精英軍隊對付較少裝備或訓練較差的敵人。充滿動力的部隊，訓練有素的軍官，強大的軍事傳統和完善的軍事後勤相結合，創造戰鬥力與其規模不成比例的菁英軍隊。他們的軍隊的骨幹是他們的聖騎兵，他們可以在遠處用箭矢與敵人對抗，或者在衝鋒時踐踏他們。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">後勤</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/unique_tech_imperial.png"
                  class="img-fluid"
                  alt=""
                />
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
            <td class="unit4">
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/imperial_age.png" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
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
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">600</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              拜占庭聖騎兵有踐踏傷害，對<nuxt-link
                to="/armor/Armor_Class_Infantry"
                >步兵</nuxt-link
              >攻擊+6。
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
