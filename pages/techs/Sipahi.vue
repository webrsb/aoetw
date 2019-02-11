<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>采邑騎兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            采邑騎兵是<nuxt-link to="/civs/Turks">土耳其</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Cavalry_Archer"
              >馬弓騎兵</nuxt-link
            >和<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>+20 HP。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              土耳其有優秀的馬弓騎兵，采邑騎兵更進一步地提高馬弓騎兵的生命，讓他們在戰鬥中有更多空間發揮。土耳其人如果可以與<nuxt-link
                to="/civs/Berbers"
                >柏柏人</nuxt-link
              >同盟，那麼就可以在射箭場訓練標槍騎兵，這樣研發采邑騎兵的戰略價值將大大增加。
            </li>
            <li>
              有采邑騎兵的土耳其馬弓騎兵生命值可達100，可說他們是遊戲中最好的馬弓騎兵之一(可與之匹敵的:<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >馬弓騎兵開火速度+20%；
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >馬弓騎兵+1攻擊和+1射程範圍)。
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
              >能夠加速采邑騎兵的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>豆知識</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            Sipahi是指幾乎所有主流的奧斯曼帝國騎兵將它們與非正規軍區分開來的術語。升級對於土耳其遠程部隊而言很可能代表了他們獲得更好的保護（Sipahis通常會穿著鏈甲）。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">采邑騎兵</div>
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
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>
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
            <td class="unit4">60秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">馬弓騎兵和標槍騎兵+20 HP。</td>
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
