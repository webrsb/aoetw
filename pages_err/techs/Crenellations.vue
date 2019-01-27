<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>垛口</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>垛口是<nuxt-link to="/civs/Teutons">條頓</nuxt-link>的特殊科技，可於<nuxt-link to="/techsage/Imperial_Age">帝王時代</nuxt-link>在
              <nuxt-link to="/building/Castle">城堡</nuxt-link>研發。研發後城堡攻擊範圍+3，步兵駐紮可放箭。</p>
          </div>
           <h3>戰術要點</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>一般來說只有<nuxt-link to="/units/Archer_Units">射手型</nuxt-link>單位和<nuxt-link to="/units/Villager">村民</nuxt-link>可以讓箭塔、
                <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>和城堡多射額外的箭，而步兵則不會。垛口可讓步兵駐紮這些建築物時也能提供額外箭矢，但火炮塔並不受垛口影響，因為只有駐紮<nuxt-link to="/units/Gunpowder_Unit">火藥單位</nuxt-link>才能增加它的開火數。</li>
              <li>如果玩家的軍隊正在撤退，並且在敵方基地附近有防禦的城堡和塔樓，這樣就可以躲起來治療軍隊，同時也增強了建築物的防禦能力。</li>
              <li>另一方面研發垛口後的條頓城堡，成為唯一不怕火砲攻擊的城堡(土耳其火砲例外)。</li>
            </ul>
          </div>
           <h3>團隊加成</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li><nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link to="/techs/Kasbah">聚居堡壘</nuxt-link>能夠加速垛口的研究時間(快25%)。</li>
            </ul>
          </div>
           <h3>歷史</h3> 
          <div class="hrn1"></div>
          <div class="n1">垛孔已經有幾千年的歷史了，最少的例子是埃及的布恩要塞，已經可以在古老的壁畫中發現。之後希臘的邁錫尼文化也可以一窺究竟，而中國的長城也有。</div>
           <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4"> <nuxt-link to="/img/Battlement_(PSF).jpg"><img class="imgn hg" src="~assets/Battlement_(PSF).jpg" alt=""></nuxt-link> 
                <p><em>一個中古世紀的垛口，請注意圖中十字孔即為<nuxt-link to="/techs/Arrowslits">箭狹槽</nuxt-link></em>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle"><nuxt-link to="#">垛口</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/Unique-tech.jpg" width="45" alt="">
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
              <td class="unit4"><nuxt-link to="/civs/Teutons">條頓</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">時代</td>
              <td class="unit4">
                <img class="gg" src="~assets/Imperial-age-research.jpg" alt=""><nuxt-link to="/techsage/Imperial_Age">帝王時代</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">研發於</td>
              <td class="unit4">
                <img class="gg" src="~assets/Castleicon.png" alt=""><nuxt-link to="/building/Castle">城堡</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="unit3">研發時間</td>
              <td class="unit4">60秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle2"><nuxt-link to="#">成本</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">食物</td>
              <td class="unit4">600</td>
            </tr>
            <tr>
              <td class="unit3">石材</td>
              <td class="unit4">400</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle2"><nuxt-link to="#">影響</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">影響</td>
              <td class="unit4">城堡攻擊範圍+3，步兵駐紮可放箭。</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
          <div class="wiki" style="margin-top: 5px;">
            <div style="float: left;">
              <img src="~assets/Wikipedia-logo.png" width="50" height="46">
            </div>
            <div style="margin-left: 60px;">英文維基百科上的垛口
              <div style="margin-left: 10px;"><i><b><a href="https://en.wikipedia.org/wiki/Battlement">Battlement</a></b></i>
              </div>
            </div>
          </div>
        </div>
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