<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>步兵鱗甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>步兵鱗甲</b>可於<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >在<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
            >研發，可讓<nuxt-link to="/armor/Armor_Class_Infantry"
              >步兵護甲</nuxt-link
            >+1/+1。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>：<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >也獲得+1/+1護甲
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"步兵鱗甲是由圓形金屬鱗片層疊而成，如重疊覆蓋的葉子。這特別能保護士兵免受箭矢和武器的威脅。步兵鱗片可以將衝擊力道轉移，鱗片層會吸收大部分的衝擊力道。鱗甲比皮革更能保護士兵。"</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">步兵鱗甲</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/scale_mail_armor.png" width="45" alt="" />
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
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/feudal_age.png"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/blacksmith.png"
                alt=""
              /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Chainmailarmor.jpg"
                alt=""
              /><nuxt-link to="/techs/Chain_Mail_Armor">步兵鎖甲</nuxt-link>
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
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Infantry">步兵護甲</nuxt-link
              >+1/+1。
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
