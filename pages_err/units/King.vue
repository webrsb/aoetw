<template>
    <!-- Main jumbotron for a primary marketing message or call to action
    -->
    <div class="container">
      <!-- Example row of columns -->
      <div class="row padtop">
        <div class="col-md-12">
           <h1>國王</h1> 
          <div class="hrn1"></div>
        </div>
        <div class="col-md-8">
          <div class="n1">
            <p>國王是世紀帝國二的特殊單位。本身是無用的單位，無法攻擊任何事物，或對經濟做出貢獻， 但在遊戲早期可以用於偵察地圖。國王只出現在戰役和弒君模式中，也可於地圖編輯器中使用
              。是不可訓練之單位。 。</p>
            <p>訊息中圖像上方縮寫的翻譯</p>
            <p>EU:歐洲</p>
            <p>NA：美國</p>
            <p>ME：中東</p>
            <p>EA：東亞</p>
            <p>AF：非洲</p>
            <p>SA：東南亞</p>
          </div>
           <h3>概覽</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>國王隊擁有中等生命值（75），但沒有攻擊或盔甲。在弒君遊戲中，失去國王的玩家立即失 去了遊戲。因此，自己的國王必須不惜一切代價得到保護和保持血量，敵國的位置應始終是自
              己侵略的中心。國王的行動非常迅速，從一開始就有很高的視線，並且不會被野生動物襲擊。 這使得他們非常適合在早期比賽中偵察城鎮的外圍，由於城鎮中心和城堡會射箭，在
              敵人的領土內偵察得太深是危險的。每個玩家在進行一場弒君遊戲時都會先從一座城堡開始 ，一旦周圍環境偵察完畢，建議駐軍國王在裡面。在比賽后期，他應該永遠留在牆壁後面，並進
              入一個安全的城堡。像英雄一樣，國王不能被招降，但他們不像英雄，不會重生生命值。</p>
            <p>國王在他們的文明語言中有自己獨特的聲音片段。</p>
            <p>自非洲王朝以來，國王現在有不同的模組，使其可以識別他們的起源。</p>
          </div>
           <h3>英雄</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <p>有幾個國王英雄。</p>
            <p>賈雅內加拉。</p>
            <p>阿方索國王。</p>
            <p>桑丘國王。</p>
            <p>沙阿。</p>
          </div>
           <h3>圖庫</h3> 
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <div class="unititle">
                <img src="~assets/AllKing.png" width="250" alt="">
                <p>國王們</ul>
            </div>
            <div class="hrn1"></div>
            <div class="n1"></div>
          </div>
          <div class="col-md-4">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                  <div class="unititle"><nuxt-link to="">國王</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <div class="unititle">
                    <img src="~assets/KingA.png" width="45" alt="">
                  </div>
                  <div class="unititle">
                    <img src="~assets/KingB.png" width="45" alt="">
                  </div>
                  <div class="unititle">
                    <img src="~assets/KingC.png" width="45" alt="">
                  </div>
                  <div class="unititle">
                    <img src="~assets/KingD.png" width="45" alt="">
                  </div>
                  <div class="unititle">
                    <img src="~assets/KingE.png" width="45" alt="">
                  </div>
                  <div class="unititle">
                    <img src="~assets/Kingsoutheastasian.png" width="45" alt="">
                  </div>
                </td>
              </tr>
              <tr>
                <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                  <div class="unititle2">單位介紹</div>
                </td>
              </tr>
              <tr>
                <td class="unit3">類型</td>
                <td class="unit4"><nuxt-link to="/units/Gunpowder_Unit">平民</nuxt-link></td>
              </tr>
              <tr>
                <td class="unit3">資料片</td>
                <td class="unit4">世紀帝國二</td>
              </tr>
              <tr>
                <td class="unit" colspan="2" style=" background-color:#3c763d;;">
                  <div class="unititle2">數據</div>
                </td>
              </tr>
              <tr>
                <td class="unit3"><nuxt-link to="/elements/Hit_points">血量</nuxt-link></td>
                <td class="unit4">75</td>
              </tr>
              <tr>
                <td class="unit3">近防</td>
                <td class="unit4">0</td>
              </tr>
              <tr>
                <td class="unit3">遠防</td>
                <td class="unit4">0</td>
              </tr>
              <tr>
                <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
                <td class="unit4">無</nuxt-link>、</tr>
              <tr>
                <td class="unit3"><nuxt-link to="">跑速</td>
                <td class="unit4">1.32</td>
              </tr>
              <tr>
                <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
                <td class="unit4">6</td>
              </tr>
              <tr>
            </table>
            <div class="thanks"></div>
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