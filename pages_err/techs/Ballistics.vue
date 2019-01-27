<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>彈道學</h1>
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>彈道學可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>在<nuxt-link to="/building/University">學院</nuxt-link>研發。可讓弓箭手、船隻、
              <nuxt-link to="/building/Castle">城堡</nuxt-link>、箭塔(包含<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>)和<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>對移動目標的準確率大幅上升。</p>
            <p>在沒有彈道學的情況下，所有遠距離單位對於平行移動的目標，命中率都是不佳的，所以可以利用這個特點進行巧妙的控兵躲避敵方的箭矢，一旦研發彈道學後，即使你在怎麼移動仍無法躲過敵人的箭矢。因此不管如何這個科技都是相當重要的。比起另一個遠距離部隊重要的科技拇指環來說，更推薦優先研發彈道學。尤其是命中率只有50%的馬弓騎兵。</p>
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
              <li><nuxt-link to="/civs/Malians">馬利</nuxt-link>：彈道學研發時間快80%</li>
            </ul>
          </div>
           <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
             <h3><em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em></h3>
            <ul>
              <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>:火炮戰船受彈道學影響。</li>
            </ul>
             <h3><em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em></h3>
            <ul>
              <li><nuxt-link to="/civs/Spanish">西班牙</nuxt-link>:即使沒有研發彈道學火炮戰船的攻擊自身有彈道學。</li>
            </ul>
          </div>
           <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>隨著中世紀的發展，導彈武器變得越來越重要，最終導致火器和大砲的發展。在這些創新武器之前，有長弓，弩弓和各種投擲石塊，矛和箭的攻城武器。人類研究了這些導彈在飛行中如何行進並努力提高砲彈的速度和準確性。這就是彈道學，研究飛行中的投射物運動。這一經歷使得之後的整個世代都在做武器，裝甲，圍牆，攻擊和防御之間的軍備競賽。。</p>
          </div>
        </div>
        <div class="col-md-4">
          <table class="table-bordered" width="100%">
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle"><nuxt-link to="#">彈道學</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div class="unititle">
                  <img src="~assets/Ballistics.jpg" width="45" alt="">
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
              <td class="unit4">所有文明</td>
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
              <td class="unit4">60秒</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle2"><nuxt-link to="#">成本</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">木材</td>
              <td class="unit4">300</td>
            </tr>
            <tr>
              <td class="unit3">黃金</td>
              <td class="unit4">175</td>
            </tr>
            <tr>
              <td class="unit" colspan="2" style=" background-color:#31b0d5;">
                <div class="unititle2"><nuxt-link to="#">影響</nuxt-link>
                </div>
              </td>
            </tr>
            <tr>
              <td class="unit3">影響</td>
              <td class="unit4">可讓弓箭手、船隻、<nuxt-link to="/building/Castle">城堡</nuxt-link>、箭塔(包含<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>)和
                <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>對移動目標的準確率大幅上升。</td>
            </tr>
          </table>
          <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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