<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>傾側維修術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            傾側維修術於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >研發。研發後船隻遠程裝甲+1，運輸船運輸量+5(總共可載10個單位)。
            <nuxt-link to="/Dry_building/Dock">旱碼頭</nuxt-link
            >是更進一步的科技。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：傾側維修術在城堡/帝王時代成本便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >：傾側維修術便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：傾側維修術在城堡/帝王時代研究速度快15%/20%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            隨著時間的推移，藤壺和海藻會附著在木質船體的下面。這些“乘客”在會放慢船速，降低航行效率。定期對有年齡的船舶進行檢查，以清除這些障礙物並重新封閉船底。傾側維修術需要將船拖到沙灘上，在岸上拖拉以刮除這些附著物並讓底部暴露出來。船員們在淺水中進行刮除和重新密封新瀝青的接縫。通常傾側維修會跟漲退潮配合以幫助漂浮船體，船隻通常需要進行兩次傾側維修因為兩側都得進行清潔。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle">
                <nuxt-link to="#">傾側維修術</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Careening.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="#">科技介紹</nuxt-link>
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
              <img class="gg" src="~assets/Dockicon.png" alt="" /><nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">可升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/Drydock.jpg" alt="" /><nuxt-link
                to="/Dry_building/Dock"
                >旱碼頭</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">船隻遠程裝甲+1，運輸船運輸量+5。</td>
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
  components: {}
}
</script>
<style></style>
