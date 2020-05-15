<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>大草原耕種技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>大草原耕種技術</b>是<nuxt-link to="/civs/Cumans">庫曼</nuxt-link>的特殊科技，於《世紀帝國II:決定版》引進。可於城堡時代的城堡中研發，研發後斥侯系、草原騎兵和馬弓騎兵訓練速度快50%。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              大草原耕種技術具有類似法蘭克特殊科技騎士精神和哥德灌注士氣的效果。讓斥侯系、草原騎兵和馬弓騎兵訓練速度快50%。
              如果玩家想組建一支快速，具成本效益的軍隊，那麼這項技術將非常有用，特別是因為其成本以及在城堡/帝國時代所有庫曼騎兵的移動速度都快了10％/ 15％。
              但是，大草原耕種技術不會影響欽察或標槍騎兵。
            </li>
            <li>
              在帝王時代，使用徵兵制度可以進一步提高訓練速度。如果玩家擁有不列顛或匈奴盟友的話，則可以使他們的射箭場和馬廄的工作速度分別提高20％。
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
              >能夠加速大草原耕種技術的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              最初大草原耕種技術不會影響草原騎兵而且訓練速度是400％（儘管科技樹錯誤顯示為80％）。36202更新後大草原耕種技術現在可以影響草原騎兵，
              並且其效果降低到50％
            </li>
          </ul>
        </div>

      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">大草原耕種技術</div>
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
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>
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
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
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
            <td class="unit4">斥侯系、草原騎兵和馬弓騎兵訓練速度快50%。</td>
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
