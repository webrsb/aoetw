<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>擲矛器</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            擲矛器是阿茲特克的特殊科技，可於<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link>研發。研發後
            <nuxt-link to="/units/Skirmisher">矛兵系列</nuxt-link>和<nuxt-link
              to="/units/Genitour"
              >標槍騎兵</nuxt-link
            >的攻擊和攻擊範圍+1。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              擲矛器對阿茲來說十分有用，因為用<nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >對抗弓兵需要花費大量黃金。矛兵不需要黃金，而且擲矛器研發後阿茲矛兵的射程範圍可以超越弓兵的射程範圍。擲矛器可以有效地填補阿茲仍缺乏
              <nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>和<nuxt-link
                to="/techs/Ring_Archer_Armor"
                >弓兵環甲</nuxt-link
              >的缺陷。且身為南美國家相當害怕火槍兵，有了強大的矛兵將有效阻止
              <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>的威脅。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速擲矛器的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            擲矛器是一個經典的Nahuatl詞語，字義為投擲器，基本上是一端帶有尖角的棍子。這種裝置被用來伸展士兵的手臂，從而以更大的動力投擲矛或飛鏢。阿茲特克戰士廣泛使用了擲矛器並且有效射程超過100米。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="">擲矛器</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CastleAgeUnique.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">科技介紹</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">矛兵系列和標槍騎兵的攻擊和攻擊範圍+1。</td>
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
