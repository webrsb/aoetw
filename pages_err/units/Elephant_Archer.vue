<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>象弓騎兵</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>象弓騎兵是資料片中印度的特殊單位，能夠在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>的<nuxt-link to="/building/Castle">城堡</nuxt-link>中訓練。是個速度慢但有重裝甲和高生命值的騎象射手。</p>
            <p>象弓騎兵可以在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>升級為精銳象弓騎兵。</div>
           <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>象弓騎兵具有很高的HP和遠程裝甲，造成的傷害和馬騎弓兵一樣多，但開火速度較低，也像所有的大象一樣移動速度慢，但比戰像還要快。</li>
              <li>象弓騎兵擁有比任何其他弓箭手更多的HP，包括馬戰車。他們融合了戰象的耐打和馬騎弓兵的射程及攻擊力。極高的HP和遠程裝甲使讓象弓騎兵像一座移動的箭塔，而且也能對付弓兵和建築物，還可以被僧侶治療。不過他們非常怕長槍兵和僧侶(印度缺乏異端邪說)，不過他們還是能用遠距離對付這兩個單位。</li>
              <li>象弓騎兵是一個高度情境化且很少使用的單位。這主要有三個原因：</li>
              <p>他們成本高難以量產，然而弓箭手要一定數量傷害才夠。</p>
              <p>速度慢讓他們沒法逃離步兵或戰矛兵的追擊，一旦讓戟兵追上他們就只能任憑宰割。</p>
              <p>象弓騎兵在裝甲分類上有五個分類，這讓他們的對手可以輕易地根據自己的文明和遊戲策略選擇有效對付象弓騎兵的單位。</p>
            </ul>
          </div>
           <h3>更多數據</h3>
          <div class="hrn1"></div>
          <div class="n1"></div>
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle">劣勢與優勢</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">強勢(容易對抗)</td>
              <td class="tta4">緩慢的近距離單位、弓兵、建築物。</td>
            </tr>
            <tr>
              <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
              <td class="tta4">重裝長槍兵、槍隊長、、狂戰士、熱那亞弩手、哥德衛隊、奴隸兵、駱駝騎兵、戰矛兵、鷹勇士、日本武士、僧侶。</td>
            </tr>
            <tr class="tta">
              <td class="unit" colspan="2" style="text-align: center;">
                <div class="unititle2">升級</div>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生命值</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Bloodlines.png" width="30" alt=""><nuxt-link to="/techs/Bloodlines">品種</nuxt-link>(+20)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊力</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Fletching.jpg" width="30" alt=""><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)</p>
                <p>
                  <img src="~assets/Bodkinarrow.jpg" width="30" alt=""><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)</p>
                <p>
                  <img src="~assets/Bracer.jpg" width="30" alt=""><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)</p>
                <p>
                  <img src="~assets/Chemistry.jpg" width="30" alt=""><nuxt-link to="/techs/Chemistry">化學</nuxt-link>(+1)</p>
                <p>
                  <img src="~assets/Parthian-Tactics.jpg" width="30" alt=""><nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>(+2對長槍兵)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">攻擊範圍</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Fletching.jpg" width="30" alt=""><nuxt-link to="/techs/Fletching">箭羽</nuxt-link>(+1)</p>
                <p>
                  <img src="~assets/Bodkinarrow.jpg" width="30" alt=""><nuxt-link to="/techs/Bodkin_Arrow">錐狀箭頭</nuxt-link>(+1)</p>
                <p>
                  <img src="~assets/Bracer.jpg" width="30" alt=""><nuxt-link to="/techs/Bracer">護腕</nuxt-link>(+1)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">開火速度</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Thumb_Ring.png" width="30" alt=""><nuxt-link to="/techs/Thumb_Ring">拇指環</nuxt-link>(+18%)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">命中率</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Ballistics.jpg" width="30" alt=""><nuxt-link to="/techs/Ballistics">彈道學</nuxt-link>(對移動目標命中率上升)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">防禦</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Paddedarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link>(+1/+1)</p>
                <p>
                  <img src="~assets/Leatherarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Leather_Archer_Armor">弓兵皮甲</nuxt-link>(+1/+1)</p>
                <p>
                  <img src="~assets/Ringarcherarmor.jpg" width="30" alt=""><nuxt-link to="/techs/Ring_Archer_Armor">弓兵環甲</nuxt-link>(+1/+2)</p>
                <p>
                  <img src="~assets/Parthian-Tactics.jpg" width="30" alt=""><nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>(+1/+2)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">速度</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Husbandry.jpg" width="30" alt=""><nuxt-link to="/techs/Husbandry">畜牧培育</nuxt-link>(+10%)</p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">招降抵抗</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Faith.jpg" width="30" alt=""><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>
                </p>
              </td>
            </tr>
            <tr>
              <td class="tta1" style="width:10%">生產速度</td>
              <td class="tta4">
                <p>
                  <img src="~assets/Conscription.jpg" width="30" alt=""><nuxt-link to="/techs/Conscription">徵兵制度</nuxt-link>(+33%)</p>
              </td>
            </tr>
          </table>
           <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠提高象弓騎兵的生產速度還有加速徵兵技術的研究時間(快25%)</li>
              <li><nuxt-link to="/civs/Britons">不列顛</nuxt-link>：研究拇指環和帕提亞戰術速度快20%。</li>
              <li><nuxt-link to="/civs/Huns">匈奴</nuxt-link>：研究品種和畜牧培育速度快80%。</li>
              <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究化學和彈道學速度快80%。</li>
              <li><nuxt-link to="/civs/Teutons">條頓</nuxt-link>：象弓騎兵更不容易被招降。</li>
            </ul>
          </div>
           <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em></h3>
            <ul>
              <li><nuxt-link to="/ver-5.8">5.8版</nuxt-link>後，象弓騎兵對弓兵防禦類型 -2 → 0，對反弓兵防禦類型0 → -2</li>
            </ul>
          </div>
           <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p></p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle" style="color: #fff">象弓騎兵</div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/ElephantArcherIcon.jpg" width="45" alt="">
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">單位介紹</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">類型</td>
              <td class="unit4">弓兵；騎兵</td>
            </tr>
            <tr>
              <td class="unit3">文明</td>
              <td class="unit4">印度</td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4"><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練於</td>
              <td class="unit4"><nuxt-link to="/building/Castle">城堡</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">訓練時間</td>
              <td class="unit4">25秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">成本</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">100</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">80</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;text-align: center;">
                <div class="unititle2" style="color: #fff">數據</div>
              </td>
            </tr>
            <tr>
              <td class="unit3">血量</td>
              <td class="unit4">280，330(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊</td>
              <td class="unit4">6/7(精銳)(遠程)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊加成</td>
              <td class="unit4">對石造建築+3/+4(精銳)
                <br/>對一般建築+3/+4(精銳)</td>
            </tr>
            <tr>
              <td class="unit3">攻擊速度</td>
              <td class="unit4">2.5</td>
            </tr>
            <tr>
              <td class="unit3">開火間隔</td>
              <td class="unit4">4</td>
            </tr>
            <tr>
              <td class="unit3">射程</td>
              <td class="unit4">4</td>
            </tr>
            <tr>
              <td class="unit3">命中率</td>
              <td class="unit4">100%</td>
            </tr>
            <tr>
              <td class="unit3">發射速度</td>
              <td class="unit4">7</td>
            </tr>
            <tr>
              <td class="unit3">近防</td>
              <td class="unit4">0</td>
            </tr>
            <tr>
              <td class="unit3">遠防</td>
              <td class="unit4">3</td>
            </tr>
            <tr>
              <td class="unit3">防禦類別</td>
              <td class="unit4">弓兵
                <br/>馬騎弓兵(精銳)
                <br/>騎兵
                <br/>戰象
                <br/>特殊單位</td>
            </tr>
            <tr>
              <td class="unit3">跑速</td>
              <td class="unit4">0.8</td>
            </tr>
            <tr>
              <td class="unit3">視野</td>
              <td class="unit4">7</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                <div class="unititle2"><nuxt-link to="">單位演變</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">升級到</td>
              <td class="unit4">
                <img src="~assets/ElephantArcherIcon.jpg" alt="">精銳象弓騎兵</td>
            </tr>
            <tr>
              <td class="unit3">升級成本</td>
              <td class="unit4">1000食物800黃金</td>
            </tr>
            <tr>
              <td class="unit3">升級時間</td>
              <td class="unit4">60秒</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
        </div>
      </div>
    </div>
    
</template>
<script>
export default {
  layout: 'allunit',
  components: {
  }
}
</script>
<style>
</style>