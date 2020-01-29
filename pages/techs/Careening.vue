<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>航海技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>航海技術</b>(2013版稱<b>傾側維修術</b>)於<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >研發。研發後<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link
            ><nuxt-link to="/armor">遠程護甲</nuxt-link>+1，<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >運輸量+5(總共可載10個單位)。<nuxt-link to="/techs/Dry_Dock"
              >船塢</nuxt-link
            >是更進一步的<nuxt-link to="/techs">科技</nuxt-link>。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：航海技術在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >成本便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >：航海技術便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：航海技術在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代研究速度快15%/20%。
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
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">航海技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/careening.png" class="img-fluid" alt="" />
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
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/dock.png" alt="" /><nuxt-link
                to="/building/Dock"
                >碼頭</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">可升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/dry_dock.png" alt="" /><nuxt-link
                to="/techs/Dry_Dock"
                >船塢</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">船隻遠程護甲+1，運輸船運輸量+5。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
