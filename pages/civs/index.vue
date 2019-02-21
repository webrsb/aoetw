<template>
  <div class="container padtop">
    <h1>文明</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12"><p>遊戲中共有31個文明</p></div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/aok"
                  ><img src="~assets/KingsIcon.png" />帝王世紀</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                西歐
                <ul>
                  <li><nuxt-link to="/civs/Britons">不列顛</nuxt-link></li>
                  <li><nuxt-link to="/civs/Celts">塞爾特</nuxt-link></li>
                  <li><nuxt-link to="/civs/Franks">法蘭克</nuxt-link></li>
                </ul>
                中歐
                <ul>
                  <li><nuxt-link to="/civs/Goths">哥德</nuxt-link></li>
                  <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link></li>
                  <li><nuxt-link to="/civs/Vikings">維京</nuxt-link></li>
                </ul>
                中東
                <ul>
                  <li><nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link></li>
                  <li><nuxt-link to="/civs/Persians">波斯</nuxt-link></li>
                  <li><nuxt-link to="/civs/Saracens">薩拉森</nuxt-link></li>
                  <li><nuxt-link to="/civs/Turks">土耳其</nuxt-link></li>
                </ul>
                東亞
                <ul>
                  <li><nuxt-link to="/civs/Chinese">中國</nuxt-link></li>
                  <li><nuxt-link to="/civs/Japanese">日本</nuxt-link></li>
                  <li><nuxt-link to="/civs/Mongols">蒙古</nuxt-link></li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/aoc">
                  <img src="~assets/ConquerorsIcon.png" />征服者入侵</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                西歐
                <ul>
                  <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link></li>
                </ul>
                中歐
                <ul>
                  <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link></li>
                </ul>
                美洲
                <ul>
                  <li><nuxt-link to="/civs/Mayans">馬雅</nuxt-link></li>
                  <li><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link></li>
                </ul>
                東亞
                <ul>
                  <li><nuxt-link to="/civs/Koreans">韓國</nuxt-link></li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/aof"
                  ><img
                    src="~assets/ForgottenIcon.png"
                  />世紀帝國II：失落的帝國</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                東歐
                <ul>
                  <li><nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link></li>
                  <li><nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link></li>
                </ul>
                印度
                <ul>
                  <li><nuxt-link to="/civs/Indians">印度</nuxt-link></li>
                </ul>
                美洲
                <ul>
                  <li><nuxt-link to="/civs/Incas">印加</nuxt-link></li>
                </ul>
                地中海
                <ul>
                  <li><nuxt-link to="/civs/Italians">義大利</nuxt-link></li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/ak"
                  ><img src="~assets/AfricanIcon.png" />非洲王國</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                非洲
                <ul>
                  <li><nuxt-link to="/civs/Malians">馬利</nuxt-link></li>
                  <li><nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link></li>
                </ul>
                中東
                <ul>
                  <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link></li>
                </ul>
                地中海
                <ul>
                  <li><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link></li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/aor"
                  ><img src="~assets/RajaIcon.png" />王者崛起</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                東南亞
                <ul>
                  <li><nuxt-link to="/civs/Malay">馬來</nuxt-link></li>
                  <li><nuxt-link to="/civs/Vietnamese">越南</nuxt-link></li>
                  <li><nuxt-link to="/civs/Burmese">緬甸</nuxt-link></li>
                  <li><nuxt-link to="/civs/Khmer">高棉</nuxt-link></li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <hr />
    </div>
  </div>
</template>
<script>
export default {
  head() {
    return {
      title: '文明 - Aoetw'
    }
  },
  components: {}
}
</script>
<style></style>
