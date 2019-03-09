<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>諾丁漢治安官</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <strong>諾丁漢治安官</strong>是《世紀帝國 II HD:
            <nuxt-link to="/games/aok">帝王世紀</nuxt-link>》中的一名<nuxt-link
              to="/units/Infantry_Units"
              >步兵英雄</nuxt-link
            >，只可以在<nuxt-link to="/batt">戰役</nuxt-link
            >編輯器中找到。諾丁漢治安官是基於<nuxt-link to="/civs/Britons"
              >英國</nuxt-link
            >傳奇<nuxt-link to="/units/hero/Robin_Hood">羅賓漢</nuxt-link
            >故事中的人物，他的工作是抓住羅賓漢和其他不法分子。這是為了確保通過舍伍德森林的貿易路線的安全，並禁止他們偷獵國王的鹿。諾丁漢治安官的外觀是<nuxt-link
              to="/units/Long_Swordsman"
              >長劍兵</nuxt-link
            >，會受<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link>和其他加成的影響
            。由於他屬於<nuxt-link to="/units/hero">英雄</nuxt-link
            >單位，因此不能被<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >且會<nuxt-link to="/elements/Regeneration">回血</nuxt-link
            >(在<nuxt-link to="/units/Conquistador">征服者</nuxt-link
            >資料片後)。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle" style="color: #fff;">諾丁漢治安官</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Sheriffofnottinghamicon.png"
                  width="80"
                  alt=""
                />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link> <br />英雄
            </td>
          </tr>
          <tr>
            <td class="unit3">出場</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">數值</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">90</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">9(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              對<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>+2
            </td>
          </tr>
          <tr>
            <td class="unit3">開火速率</td>
            <td class="unit4">2.03</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">0.9</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">4</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allhero',
  components: {}
}
</script>
<style></style>
