<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>無政府狀態</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            無政府狀態是<nuxt-link to="/civs/Goths">哥德</nuxt-link
            >可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發，研發後玩家可以在<nuxt-link to="/building/Barracks"
              >軍營</nuxt-link
            >生產<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link>。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              由於哥德的各種文明加成與特殊技術，帝王時代在軍營生產哥德衛隊將比城堡快得多，城堡為16秒，而軍營為5.5秒。
            </li>
            <li>
              哥德軍營的高速生產在城堡時代並不明顯，且對於城堡時代來說，450食物與250黃金算是一筆高消費(相當於11個<nuxt-link
                to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >以上)，所以其實可以等到帝王時代，資源有餘裕的時候再行研發。
            </li>
            <li>
              研發這個科技，代表你可以將城堡投入生產<nuxt-link
                to="/units/Trebuchet"
                >投石機</nuxt-link
              >，這比其他依賴城堡生產的特殊單位更有優勢(比方
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>的<nuxt-link
                to="/units/Plumed_Archer"
                >羽毛箭射手</nuxt-link
              >)。
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link
              >：柏柏的特殊技術聚居堡壘可以增加無政府狀態的研發速度(+25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            哥德的部落體係對於一個似乎總是在移動、在這裡作戰並在那裡定居的社會來說效果很好，但在這兩種情況下永遠都不會長久。他們的靈活性意味著他們可以突然出現而沒有任何警告，並且也消失得很快。他們的軍隊從來都不是擁有最好的裝備，因為他們缺乏任何永久性的行業，但是如果有傳言說只要聽到哥德人在行動時，沒有人聽到這個消息後會感到自身現在很安全的。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                無政府狀態
              </div>
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
            <td class="unit4"><nuxt-link to="/civs/Goths">哥德</nuxt-link></td>
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
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">450</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">軍營可以生產哥德衛隊。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
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
