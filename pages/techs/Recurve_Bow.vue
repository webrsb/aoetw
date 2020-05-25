<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>反曲弓</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>反曲弓</b>是<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Cavalry_Archer"
              >馬弓騎兵</nuxt-link
            >射程和攻擊各+1。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              有反曲弓加成的<nuxt-link to="/units/Cavalry_Archer"
                >馬弓騎兵</nuxt-link
              >擁有和<nuxt-link to="/units/Arbalest">強弩兵</nuxt-link
              >一樣的射程，讓他們能更好地執行打帶跑。反曲弓可以看做是一種<nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >的升級，但還是優先研發<nuxt-link to="/techs/Fletching"
                >絕世好箭</nuxt-link
              >、<nuxt-link to="/techs/Bodkin_Arrow">羽箭</nuxt-link
              >和<nuxt-link to="/techs/Bracer">強力護腕</nuxt-link
              >因為這三樣不僅有加成所有範圍單位、有加<nuxt-link
                to="/elements/Attack"
                >攻擊力</nuxt-link
              >、最重要是花費比反曲弓便宜。
            </li>
            <li>
              反曲弓讓<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >的馬弓騎兵可以與<nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >和<nuxt-link to="/civs/Mongols">蒙古</nuxt-link
              >的並列遊戲中最佳馬弓騎兵。
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
              >能夠加速反曲弓的研究時間(快25%)。
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
            <li>反曲弓只讓馬弓騎兵射程+1。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>5.5改版後反曲弓會讓馬弓騎兵攻擊和射程都+1。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">反曲弓</div>
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
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
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">600</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">馬弓騎兵射程和攻擊+1。</td>
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
