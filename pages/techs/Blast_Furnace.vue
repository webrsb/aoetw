<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鼓風爐</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>鼓風爐</b>可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
            >研發，可讓<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >、<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>攻擊+2。
          </p>
        </div>
        <h3>文明可研發與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><i class="fas fa-check" style="color: green;"></i
                  ><span style="margin-left: 2px;">可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Berbers"
                >柏柏</nuxt-link
              >、<nuxt-link to="/civs/Britons">不列顛</nuxt-link>、<nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >、<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >、<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈奴</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Indians">印度</nuxt-link>、<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >、<nuxt-link to="/civs/Japanese">日本</nuxt-link>、<nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >、<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >、<nuxt-link to="/civs/Persians">波斯</nuxt-link>、<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >、<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、<nuxt-link
                to="/civs/Teutons"
                >條頓</nuxt-link
              >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>、<nuxt-link
                to="/civs/Vikings"
                >維京</nuxt-link
              >。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><i class="fas fa-times" style="color: #d9534f;"></i
                  ><span style="margin-left: 2px;">不可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
                to="/civs/Koreans"
                >韓國</nuxt-link
              >、<nuxt-link to="/civs/Malians">馬利</nuxt-link>、<nuxt-link
                to="/civs/Vietnamese"
                >越南</nuxt-link
              >。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜20%。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link>：同樣使<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >獲得+2攻擊。
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
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <nuxt-link to="/civs/Saracens">薩拉森人</nuxt-link
            >和後來的<nuxt-link to="/civs/Japanese">日本人</nuxt-link
            >通過一遍又一遍地折疊鐵和敲擊它的過程製造了第一批優質鋼。此大量重複的過程消除了金屬中非常高百分比的雜質並形成鋼。薩拉森人和日本人以他們劍的鋒利和力量而聞名。創新者學會瞭如何通過鼓風爐加速煉鋼的過程。當鐵礦石被熔煉時，通過將氧氣吹入爐內，混合物的溫度升高讓更多的雜質被燒掉。最後的結果就是鋼鐵，這是一種有用的武器材料，因為它可以讓武器更尖銳並且不會像鐵一樣容易斷裂。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">鼓風爐</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/blast_furnace.png" width="45" alt="" />
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
            <td class="unit4">請看分類</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img class="gg" src="~assets/iron_casting.png" alt="" /><nuxt-link
                to="/techs/Iron_Casting"
                >鑄造</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">100秒</td>
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
            <td class="unit4">275</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">225</td>
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
              >攻擊+2。
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
