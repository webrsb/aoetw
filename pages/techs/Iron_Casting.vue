<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鑄造技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鑄造技術</b>可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
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
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >時代花費便宜15%/20%。
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
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：研發該科技不需要<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>：兵工廠科技研發速度加快50%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            “將鐵水澆鑄到模具中以形成複雜的形狀的技術被稱為鑄造，這對於製造鐵鍛工具和武器非常有用，這些工具和武器通常不易通過<nuxt-link
              to="/techs/Forging"
              >鍛造技術</nuxt-link
            >加速製造過程。在鑄造這項技術到達歐洲之前的幾個世紀，中國已經發現了這種技術。當製造商試圖找出如何製造大砲時，鑄造大型金屬物體的能力變得尤為重要。“
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">鑄造技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/iron_casting.png" class="img-fluid" alt="" />
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
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/blacksmith.png" alt="" /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img class="gg" src="~assets/forging.png" alt="" /><nuxt-link
                to="/techs/Forging"
                >鍛造技術</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/blast_furnace.png"
                alt=""
              /><nuxt-link to="/techs/Blast_Furnace">鼓風爐</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">75秒</td>
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
            <td class="unit4">220</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">120</td>
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
