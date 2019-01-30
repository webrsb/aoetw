<template>
  <div class="container">
    <div class="row" style="margin-top:20px;">
      <div class="col-md-12 keyword_on">
        <table class="table-bordered" width="100%">
          <tbody>
            <tr>
              <td class="unit" colspan="2" style="background-color:#274a7d;">
                <div class="unititle"><nuxt-link to="">世紀帝國文明</nuxt-link></div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3a73c7;">
                <div class="unititle2">
                  <nuxt-link to="/games/aok"
                    ><img
                      src="~assets/KingsIcon.png"
                      style="margin-right:5px"
                    />帝王世紀</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">東亞</td>
              <td class="unit4">
                <nuxt-link to="/civs/Chinese">中國</nuxt-link>。<nuxt-link to="/civs/Japanese">日本</nuxt-link>。<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">中東</td>
              <td class="unit4">
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>。<nuxt-link to="/civs/Persians"
                  >波斯</nuxt-link>。<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>。
                <nuxt-link to="/civs/Turks">土耳其</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">西歐</td>
              <td class="unit4">
                <nuxt-link to="/civs/Britons">不列顛</nuxt-link>。<nuxt-link to="/civs/Celts">賽爾特</nuxt-link>。<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">中歐</td>
              <td class="unit4">
                <nuxt-link to="/civs/Goths">哥德</nuxt-link>。<nuxt-link to="/civs/Teutons">條頓</nuxt-link>。<nuxt-link to="/civs/Vikings"
                  >維京</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3a73c7;">
                <div class="unititle2">
                  <nuxt-link to="/games/aoc"
                    ><img
                      src="~assets/ConquerorsIcon.png"
                      style="margin-right:5px"
                    />征服者入侵</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">東亞</td>
              <td class="unit4"><nuxt-link to="/civs/Koreans">韓國</nuxt-link></td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">西歐</td>
              <td class="unit4"><nuxt-link to="/civs/Spanish">西班牙</nuxt-link></td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">中歐</td>
              <td class="unit4"><nuxt-link to="/civs/Huns">匈奴</nuxt-link></td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">美洲</td>
              <td class="unit4">
                <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>。<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3a73c7;">
                <div class="unititle2">
                  <nuxt-link to="/games/aof"
                    ><img
                      src="~assets/ForgottenIcon.png"
                      style="margin-right:5px"
                    />失落的帝國</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">印度</td>
              <td class="unit4"><nuxt-link to="/civs/Indians">印度</nuxt-link></td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">美洲</td>
              <td class="unit4"><nuxt-link to="/civs/Incas">印加</nuxt-link></td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">地中海</td>
              <td class="unit4"><nuxt-link to="/civs/Italians">義大利</nuxt-link></td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">東歐</td>
              <td class="unit4">
                <nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>。<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3a73c7;">
                <div class="unititle2">
                  <nuxt-link to="/games/ak"
                    ><img
                      src="~assets/AfricanIcon.png"
                      style="margin-right:5px"
                    />非洲王國</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">非洲</td>
              <td class="unit4">
                <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>。<nuxt-link to="/civs/Malians"
                  >馬利</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">中東</td>
              <td class="unit4"><nuxt-link to="/civs/Berbers">柏柏</nuxt-link></td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">地中海</td>
              <td class="unit4"><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link></td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#3a73c7;">
                <div class="unititle2">
                  <nuxt-link to="/games/aor"
                    ><img
                      src="~assets/RajaIcon.png"
                      style="margin-right:5px"
                    />王者崛起</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3" style="width: 15%;">東南亞</td>
              <td class="unit4">
                <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>。<nuxt-link to="/civs/Khmer">高棉</nuxt-link>。<nuxt-link to="/civs/Malay"
                  >馬來</nuxt-link>。 <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<style></style>
