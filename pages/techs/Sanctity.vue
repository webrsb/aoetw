<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>聖潔虔誠</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            聖潔虔誠可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Monastery">修道院</nuxt-link> 研發，可讓
            <nuxt-link to="/units/Monk">僧侶</nuxt-link>和<nuxt-link
              to="/units/Missionary"
              >傳教士</nuxt-link
            >提升15 HP
          </p>
          <p>
            雖然遊戲內的解釋是增加50% HP，但實際上只增加15HP，<nuxt-link
              to="/civs/Aztecs"
              >阿茲特克</nuxt-link
            >和<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
            >文明對僧侶和傳教士的加成也不影響
          </p>
          <p>
            此科技相當關鍵，他可以多讓僧侶多挨投石車一發，往往在這間隔，僧侶就可以把投石車招降。
          </p>
        </div>
        <h3>文明可研發與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-ok okc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >文明可研發</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-remove noc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >文明不可研發</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：研發該科技給與僧侶+5HP。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：科技便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：科技在城堡/帝王時代各便宜15%/20%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            實現聖潔就是要達到聖潔的生活和品格。中世紀偉大宗教的聖人通過服從神聖的文本，他們的貧窮誓言和對所有生物的尊重來爭取神聖。通過聖潔，他們啟發了其他宗教或那些不那麼忠誠的人來遵守聖潔虔誠。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">聖潔虔誠</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Sanctity.jpg" width="45" alt="" />
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
            <td class="unit4">請看左方分類</td>
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
              <img
                class="gg"
                src="~assets/Monasteryicon.png"
                alt=""
              /><nuxt-link to="/building/Monastery">修道院</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">60秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">120</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">讓僧侶和傳教士提升15 HP</td>
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
