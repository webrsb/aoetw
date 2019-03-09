<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鐵野豬</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鐵野豬</b>在世紀帝國2中是一個特殊的單位。他比<nuxt-link
              to="/units/animal/Wild_Boar"
              >野豬</nuxt-link
            >更加強壯，任何人攻擊他都會是一個艱難的挑戰。他擁有350的<nuxt-link
              to="/elements/Hit_points"
              >生命值</nuxt-link
            >，而且具有強大的<nuxt-link to="/elements/Attack">攻擊力</nuxt-link
            >。由於他不像一般野豬一樣可以提供肉，所以<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >或其他士兵是無法攻擊她的(他們只會站著被鐵野豬殺死）。
          </p>
          <p>
            牠出現在<nuxt-link to="/batt">戰役</nuxt-link>《<nuxt-link
              to="/batt/Attila_the_Huna"
              >阿提拉</nuxt-link
            >：<nuxt-link to="/batt/Scourge_of_God">上帝之鞭</nuxt-link
            >》及《<nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link
            >：<nuxt-link to="/batt/A_Promising_Warrior">英雄出少年</nuxt-link
            >》中。在上帝之鞭的戰役中，他被他的兄弟貝里達邀請去獵殺鐵野豬。在英雄出少年的戰役中，如果玩家選擇去打獵，將會在獵場附近的一條河流中遇到他。
          </p>
        </div>
        <h3>登場戰役</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong>《阿提拉：上帝之鞭》</strong>
          <ul>
            <p>
              由於貝里達將會在殺掉鐵野豬後背叛玩家，所以最好讓貝里達獨自獵殺鐵野豬。以下有幾種狀況。一般請況下，貝里達將會被鐵野豬殺死，這讓阿提拉在貝里達躲過伏擊時可以輕易地殺死他。接下來還有以下幾種做法
            </p>
            <li>在開始獵捕鐵野豬之前背叛貝里達。</li>
            <li>
              離開貝里達控制的<nuxt-link to="/civs/Huns">匈奴</nuxt-link
              >營地，可是這樣將會失去一些阿提拉的追隨者。
            </li>
            <li>
              殺死鐵野豬，然後跑回營地，這樣玩家可以控制所有貝里達的單位。
            </li>
          </ul>
          <strong> 《布里斯比羅吉：英雄出少年》</strong>
          <p>
            當玩家在跨越河流(接近瀑布的地方)時，會遇到鐵野豬。鐵野豬會攻擊玩家，這時玩家不應該上前企圖殺死他，而是應該後退引誘牠進入河中。牠將被淹死在瀑布裡，然後玩家將可以安全地度過河流。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                鐵野豬
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Iron-boar-icon-aoe2.jpg" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">肉量</td>
            <td class="unit4">700</td>
          </tr>
          <tr>
            <td class="unit3">生命值</td>
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">12</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由進銘協助編輯</div>
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
