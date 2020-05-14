<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鍛造技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鍛造技術</b>可於<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >在<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
            >研發，可讓<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >、<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>攻擊+1。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在封建/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>：同樣使<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >獲得+1攻擊。
            </li>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>：該科技免費。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >：兵工廠科技研發速度加快50%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            鍛造技術俗稱打鐵，是將金屬加熱後，利用衝擊或擠壓之方式，使金屬成形的方法。古代許多之武器及工具都是金屬材料透過鍛造技術而製成。一般我們所熟知的手工鍛造技術，是屬於熱鍛，是鐵匠將金屬材料固定於砧座上，以平錘敲擊，使金屬鍛造技術成形，多用於修理及維護工作。
          </p>
          <p>
            鍛造技術可分為熱鍛及冷鍛。差別在於再結晶溫度，熱鍛須將金屬加熱至再結晶溫度以上，冷鍛則需加熱至再結晶溫度以下。
          </p>
          <p>
            鐵製工具和武器是通過鍛造技術從鐵棒製作而成的。鐵棒在熔爐裡加熱直到他們是紅熱的。透過敲擊將它們塑型。鐵匠將熱鐵棒固定在砧座上並打成所需的形狀。在專業鐵匠手中，透過不斷加熱，敲打和冷卻的過程創造了很多高質量的工具和鋒利，堅固的武器。在鐵匠鋪工作的人被稱為鐵匠，因為他們工作會使用黑鐵，在一天的工作後也會變得非常骯髒。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">鍛造技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/forging.png" class="img-fluid" alt="" />
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
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/blacksmith.png" alt="" /><nuxt-link
                to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/iron_casting.png" alt="" /><nuxt-link
                to="/techs/Iron_Casting"
                >鑄造技術</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
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
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>、<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >攻擊+1。
            </td>
          </tr>
        </table>

        <div class="thanks">
          感謝! 此頁面由賜齡協助編輯,歷史部分由Crownw提供
        </div>
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
