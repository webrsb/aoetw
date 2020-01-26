<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>火雞</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>火雞</b
          >在世紀帝國II的美洲地圖上會取代羊出現在城鎮周圍。火雞是一種常見的<nuxt-link
            to="/resource/Food"
            >食物</nuxt-link
          >來源，在遊戲初期是很重要的。火雞一開始都是中立的，只要有任何玩家的單位接近，牠就會變成該單位能控制的單位，反之如果你的火雞被敵人靠近，而附近又沒有你的單位時，那麼火雞的控制權將會落入該玩家手下。
        </p>
        <p>
          初期的火雞很重要，因為還不能種田，隨著遊戲後期種田效率提昇，火雞也不那麼重要了。
        </p>
        <p>
          火雞也會被拿來探地圖，雖然視線不高，且存在被偷走的風險，但是在<nuxt-link
            to="/maps/Islands"
            >島嶼</nuxt-link
          >或是<nuxt-link to="/maps/Arena">圍城</nuxt-link
          >這種封閉的地圖上，那麼將非常安全。
        </p>
        <p>
          塞爾特人對於火雞的控制有獨特的優勢，就是只要在塞爾特單位的<nuxt-link
            to="/elements/Line_of_Sight"
            >視野</nuxt-link
          >內，火雞就無法被其他玩家控制。
        </p>
        <p>每隻火雞總共有100的食物。</p>
        <h3>文明優勢</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:殺火雞效率快20％
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:額外多取20%的肉量
            </li>
            <li>塞爾特：單位視野內，無法被偷火雞</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                火雞
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Turkey-icon-aoe2.png" width="80" alt="" />
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
