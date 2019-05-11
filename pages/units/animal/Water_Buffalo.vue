<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>水牛</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>水牛</b>在《<nuxt-link to="/games/aor"
            >世紀帝國II：王者崛起</nuxt-link
          >》出現，是可馴化的動物，水牛主要出現在東南亞地圖上。水牛是一種大而笨重的動物，可提供150食物，比<nuxt-link
            to="/units/animal/Goat"
            >山羊</nuxt-link
          >和<nuxt-link to="/units/animal/Sheep">綿羊</nuxt-link
          >多50，跟<nuxt-link to="/units/animal/Cow">乳牛</nuxt-link
          >則平手。但是不像乳牛，水牛只有7HP(乳牛14HP)，這讓牠很容易成為敵方<nuxt-link
            to="/units/Scout_Cavalry"
            >斥候騎兵</nuxt-link
          >的目標一刀砍死。
        </p>
        <h3>文明優勢</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:殺水牛效率快20％
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:額外多取20%的肉量
            </li>
            <li>
              塞爾特：單位<nuxt-link to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >內，無法被偷水牛
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/AOE2WaterBuffalo.png"
                  alt=""
              /></gallery>
              <p><em>世紀帝國II的水牛。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                水牛
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/AOE2IconBuffalo.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>量
            </td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">7</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allanimal',
  components: {}
}
</script>
<style></style>
