<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>山羊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>山羊</b>在《<nuxt-link to="/games/ak"
            >世紀帝國II：非洲王國</nuxt-link
          >》出現，是可馴化的動物，山羊主要替代羊出現在非洲地圖上。
        </p>
        <p>
          初期的山羊很重要，因為還不能種田，隨著遊戲後期種田效率提昇，山羊也不那麼重要了。
        </p>
        <p>
          山羊也會被拿來探地圖，雖然視線不高，且存在被偷走的風險，但是在<nuxt-link
            to="/maps/Islands"
            >島嶼</nuxt-link
          >或是<nuxt-link to="/maps/Arena">圍城</nuxt-link
          >這種封閉的地圖上，那麼將非常安全。
        </p>
        <p>
          塞爾特人對於山羊的控制有獨特的優勢，就是只要在塞爾特單位的<nuxt-link
            to="/elements/Line_of_Sight"
            >視野</nuxt-link
          >內，山羊就無法被其他玩家控制。
        </p>
        <p>
          每隻山羊總共有100的<nuxt-link to="/resource/Food">食物</nuxt-link>。
        </p>
        <h3>文明優勢</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:殺山羊效率快20％
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:額外多取20%的肉量
            </li>
            <li>塞爾特：單位視野內，無法被偷山羊</li>
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
                  src="~assets/Aoe2_goat.png"
                  alt=""
              /></gallery>
              <p><em>世紀帝國II的山羊。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                山羊
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Aoe2_goat_icon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物量</td>
            <td class="unit4">100</td>
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
