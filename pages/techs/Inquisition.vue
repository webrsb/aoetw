<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>異端審判</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            異端審判是<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後僧侶招降速度更快。對單位的招降時間會減1秒，對<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >則減7秒。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              西班牙人有很好的僧侶，也能研發修道院中幾乎所有科技。異端審判可以幾乎抵銷<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >的效果，讓西班牙的僧侶和傳教士能更快的招降敵方軍隊(除了
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
              >、<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
              >和<nuxt-link to="/civs/Teutons">條頓人</nuxt-link>的單位以外)。
            </li>
            <li>
              隨著帝王時代<nuxt-link to="/techs/Theocracy">神權統治</nuxt-link
              >的研發，多個僧侶或傳教士一起招降敵對一個單位後只有一位需要休息恢復。這能快速地招降敵方村民和建築，干擾敵方經濟和軍隊訓練。忠誠信仰也能應對對方僧侶的反招降動作。傳教士甚至可以放風箏的招降敵方單位，因此如果沒有足夠的數量來迅速壓制傳教士，那麼很容易部隊會被消磨殆盡或集體被招走。試圖在進攻中使用僧侶的玩家應該記住，這需要良好的微觀操作，因為僧侶除非受到攻擊或直接下令，否則不會招降敵方單位。
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
              >能夠加速異端審判的研究時間(快25%)。
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
            <li>異端審判的成本為400肉400金。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>異端審判現在的成本更改為100肉300金。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="">異端審判</nuxt-link></div>
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
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
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
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">僧侶招降速度更快。</td>
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
