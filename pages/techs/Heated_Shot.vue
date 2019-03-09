<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>預熱射擊</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>預熱射擊</b>，舊稱『火箭』可於<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/University">學院</nuxt-link
            >研發，<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >對<nuxt-link to="/armor/Armor_Class_Ship">船隻</nuxt-link
            >的<nuxt-link to="/elements/Attack">攻擊力</nuxt-link>+125%，
            <nuxt-link to="/building/Castle">城堡</nuxt-link>和<nuxt-link
              to="/building/Harbor"
              >海港</nuxt-link
            >則+4。
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
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
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>對船隻增加的傷害</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>下面列出所有受預熱射擊影響，攻擊船隻增加的幅度。</p>
        </div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td>建築</td>
            <td>增加前額外攻擊</td>
            <td>增加後攻擊</td>
            <td>增加</td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/building/Watch_Tower">暸望箭塔</nuxt-link>
            </td>
            <td class="tta2">7</td>
            <td class="tta2">16</td>
            <td class="tta3">+9</td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
            </td>
            <td class="tta2">9</td>
            <td class="tta2">20</td>
            <td class="tta3">+11</td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
            </td>
            <td class="tta2">10</td>
            <td class="tta2">23</td>
            <td class="tta3">+13</td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/building/Castle">城堡</nuxt-link>
            </td>
            <td class="tta2">0</td>
            <td class="tta2">4</td>
            <td class="tta3">+4</td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/building/Harbor">海港</nuxt-link>
            </td>
            <td class="tta2">9</td>
            <td class="tta2">13</td>
            <td class="tta3">+4</td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜15%/20%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：該科技研發時間快80%
            </li>
          </ul>
          <h3>豆知識</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              在工業革命以前，船隻大多是木造的，因此火一直是海戰最大的武器。預熱射擊就是在發射砲彈前，先用一個鍋爐加熱砲彈，以達到類似古代<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >火箭的效果。赤壁之戰中，周瑜也問過孔明大江之上，何以破曹，孔明答了『火+箭』。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">預熱射擊</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Heatedshot.png" width="45" alt="" />
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
                src="~assets/Universityicon.png"
                alt=""
              /><nuxt-link to="/building/University">學院</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">30秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              對船隻的攻擊力箭塔+125%，<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >和<nuxt-link to="/building/Harbor">海港</nuxt-link>則+4。
            </td>
          </tr>
        </table>
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
