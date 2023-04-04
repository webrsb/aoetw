<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>重型耕犁</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>重型耕犁</b>(2013版稱<b>重犁</b>)可於<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >的<nuxt-link to="/building/Mill">磨坊</nuxt-link
            >研發。可讓<nuxt-link to="/building/Farm">農田</nuxt-link
            >產量增加125<nuxt-link to="/resource/Food">食物</nuxt-link
            >(總共375食物)，<nuxt-link to="/units/Villager">村民</nuxt-link
            >食物攜帶量+1。<nuxt-link to="/techs/Crop_Rotation"
              >輪耕制度</nuxt-link
            >是更進一步的<nuxt-link to="/techs">科技</nuxt-link>。
          </p>
          <p>
            已耕種的農田即便重型耕犁研發完直到再次播種前都會維持原產量250食物，若是正在建造的農田則會吃到完整加成變375食物。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該科技在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：該科技免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：研發該科技不消耗木材
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"繼實施胸前領後，歐洲農業的下一個重要創新就是重型耕犁。這是一種以巨大的<nuxt-link
              to="/resource/Wood"
              >木頭</nuxt-link
            >和金屬製成的犁，這些犁可以深深挖進在上一次冰河時代之後沉積在歐洲平原上的茂密密實的土壤中。這些地區的高大草原完全打消以前任何的耕種嘗試。強大的犁車前面由強大的馬力拉著，挖開了這些土壤，開闢了大量的土地。其生產力非常高，並大大增加了糧食產量，也因此人口也跟著增加。"</em
          >
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>
              (35584更新) 研發經濟科技不消耗木材
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">重型耕犁</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/heavy_plow.png" class="img-fluid" alt="" />
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
              <img class="gg" src="~assets/Mill-icon.jpg" alt="" /><nuxt-link
                to="/building/Mill"
                >磨坊</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/horse_collar.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Horse_Collar">獸耕技術</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/crop_rotation.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">125</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">125</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">農田產量增加125食物，村民食物攜帶量+1。</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alltech' })

export default {
  components: {}
}
</script>
<style></style>
