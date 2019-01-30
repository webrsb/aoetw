<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>磚瓦技術</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>磚瓦技術可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>在<nuxt-link to="/building/University">學院</nuxt-link>研發，研發後所有建築(除了
              <nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>和<nuxt-link to="/building/Gateicon_Gate">城門</nuxt-link>外)都獲得+10% HP、+1近防、+1遠防和+3建築護甲。此科技讓建築更佳堅固及更能抵擋
                <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>和<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>的攻擊，<nuxt-link to="/techs/Architecture">建築學</nuxt-link>是它的進階科技。</p>
            <p>建築護甲無法對所有對建築有額外加成的攻擊做減傷計算，它只能對<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link>、
              <nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link>、<nuxt-link to="/units/Villager">村民</nuxt-link>、<nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>、
                <nuxt-link to="/War_unitsanimal/Elephant">戰象</nuxt-link>和<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>的攻擊有減傷效果；步兵和弓兵則沒有減傷效果</p>
          </div>
           <h3>文明可研發與否</h3> 
          <div class="hrn1"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-ok okc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">可研發</span></strong></h4>  <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、 <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、 <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
                <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、 <nuxt-link to="/civs/Chinese">中國</nuxt-link>、 <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
                  <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、 <nuxt-link to="/civs/Goths">哥德</nuxt-link>、 <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、 <nuxt-link to="/civs/Incas">印加</nuxt-link>、
                    <nuxt-link to="/civs/Indians">印度</nuxt-link>、 <nuxt-link to="/civs/Italians">義大利</nuxt-link>、 <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
                      <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、 <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、 <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、 <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
                        <nuxt-link to="/civs/Malians">馬利</nuxt-link>、 <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、 <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、 <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
                          <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、 <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、 <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
                            <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、 <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。 <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、 <nuxt-link to="/civs/Vikings">維京</nuxt-link>。</div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="n1">
                 <h4><strong><span class="glyphicon glyphicon-remove noc" aria-hidden="true"></span><span class="" style="margin-left: 2px;">不可研發</span></strong></h4>  <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、 <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、 <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。</div>
            </div>
          </div>
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
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3><em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em></h3>
            <ul>
              <li>成本為175木/150石。</li>
            </ul>
            <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li>成本改為150肉/175木。</li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>砌體結構是磚材與石材結構的合稱，相對木結構而言強度更高，耐久性更好，故多用來建造重要的宗教、軍事、政治建築。中國早期的砌體結構的代表建築有萬里長城。</p>
            <p>中國磚石作為建築材料使用可以上推至漢朝，漢以下各朝代一直沿用，乃至於現在。最具體的代表建築是卷拱形墓室、磚石佛塔、磚城牆、石橋、長城。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style="background-color:#31b0d5;">
                <div class="unititle"><nuxt-link to="">磚瓦技術</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/Masonry.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#31b0d5;">
                <div class="unititle2"><nuxt-link to="">科技介紹</nuxt-link>
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
              <td class="unit3">次一升級</td>
              <td class="unit4">
                <img class="gg" src="~assets/Architecture.jpg" alt=""><nuxt-link to="/techs/Architecture">建築學</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">50秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#31b0d5;">
                <div class="unititle2">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木材</td>
              <td class="unit4">175</td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">150</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style="background-color:#31b0d5;">
                <div class="unititle2">影響</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">影響</td>
              <td class="unit4">研發後所有建築(除了<nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>和<nuxt-link to="/building/Gateicon_Gate">城門</nuxt-link>外)都獲得+10%
                HP、+1近防、+1遠防和+3建築護甲。</td>
            </tr>
          </table>
        </div>
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