<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>預熱射擊</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>預熱射擊，舊稱『火箭』可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>在<nuxt-link to="/building/University">學院</nuxt-link>研發，箭塔對船隻的攻擊力+125%，
              <nuxt-link to="/building/Castle">城堡</nuxt-link>和<nuxt-link to="/building/Harbor">海港</nuxt-link>則+4。</p>
          </div>
           <h3>文明可研發與否</h3> 
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-ok okc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">可研發</span></strong></h4>  <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、 <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、 <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
                <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、 <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、 <nuxt-link to="/civs/Chinese">中國</nuxt-link>、 <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
                  <nuxt-link to="/civs/Goths">哥德</nuxt-link>、 <nuxt-link to="/civs/Incas">印加</nuxt-link>、 <nuxt-link to="/civs/Indians">印度</nuxt-link>、 <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
                    <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、 <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、 <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、 <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
                      <nuxt-link to="/civs/Malians">馬利</nuxt-link>、 <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、 <nuxt-link to="/civs/Persians">波斯</nuxt-link>、 <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
                        <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。 <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、 <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
                          <nuxt-link to="/civs/Vikings">維京</nuxt-link>。</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-remove noc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">不可研發</span></strong></h4>  <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、 <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、 <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
                <nuxt-link to="/civs/Japanese">日本</nuxt-link>、 <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、 <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
                  <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、 <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>。</div>
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
              <td class="tta1"><nuxt-link to="/units/Watch_Tower">暸望箭塔</nuxt-link>
              </td>
              <td class="tta2">7</td>
              <td class="tta2">16</td>
              <td class="tta3">+9</td>
            </tr>
            <tr>
              <td class="tta1"><nuxt-link to="/units/Guard_Tower">防禦箭塔</nuxt-link>
              </td>
              <td class="tta2">9</td>
              <td class="tta2">20</td>
              <td class="tta3">+11</td>
            </tr>
            <tr>
              <td class="tta1"><nuxt-link to="/units/Keep">大型箭塔</nuxt-link>
              </td>
              <td class="tta2">10</td>
              <td class="tta2">23</td>
              <td class="tta3">+13</td>
            </tr>
            <tr>
              <td class="tta1"><nuxt-link to="/building/Castle">城堡</nuxt-link>
              </td>
              <td class="tta2">0</td>
              <td class="tta2">4</td>
              <td class="tta3">+4</td>
            </tr>
            <tr>
              <td class="tta1"><nuxt-link to="/building/Harbor"></nuxt-link>海港</td>
              <td class="tta2">9</td>
              <td class="tta2">13</td>
              <td class="tta3">+4</td>
            </tr>
          </table>
           <h3>文明加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Chinese">中國</nuxt-link>：該科技在城堡/帝王時代花費便宜15%/20%。</li>
            </ul>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：該科技研發時間快80%</li>
            </ul>
             <h3>豆知識</h3> 
            <div class="hrn1"></div>
            <div class="n1">
              <p>在工業革命以前，船隻大多是木造的，因此火一直是海戰最大的武器。預熱射擊就是在發射砲彈前，先用一個鍋爐加熱砲彈，以達到類似古代中國火箭的效果。赤壁之戰中，周瑜也問過孔明大江之上，何以破曹，孔明答了『火+箭』。</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle"><nuxt-link to="#">預熱射擊</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/Heatedshot.png" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle2"><nuxt-link to="#">科技介紹</nuxt-link>
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
                <img class="gg" src="~assets/Castle-age-reseach.jpg" class="gg" alt=""><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4">
                <img class="gg" src="~assets/Universityicon.png" class="gg" alt=""><nuxt-link to="/building/Archery_Range">學院</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">30秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle2"><nuxt-link to="#">成本</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">350</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle2"><nuxt-link to="#">影響</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">影響</td>
              <td class="unit4">對船隻的攻擊力箭塔+125%，<nuxt-link to="/building/Castle">城堡</nuxt-link>和<nuxt-link to="/building/Harbor">海港</nuxt-link>則+4。</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"></div>
      </div>
    </div>
    
</template>
<script>
export default {
  layout: 'alltech',
  components: {
  }
}
</script>
<style>
</style>