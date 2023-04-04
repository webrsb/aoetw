<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>輪軸技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>輪軸技術</b>(2013版稱<b>獨輪推車</b>)可於<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >在<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >研發。研發後<nuxt-link to="/units/Villager">村民</nuxt-link
            >移動速度快10%，每趟可攜帶資源量+25%(從10增加為13，所以實際是30%)。
          </p>
          <p>
            輪軸技術通常是研發一級木與一級田之後才會研發，他將為每個村民增加7～13％的工作效率，但需要175<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >50<nuxt-link to="/resource/Wood">木頭</nuxt-link
            >與75秒的研究時間。當你有大約35個村民的時候最好研究這個技術，如果你不愛算村民數，那麼你在遊戲中，如果保持村民不間斷，大概是17～19分鐘時研發最好。還有一點，你有很多<nuxt-link
              to="/units/Villager"
              >農夫</nuxt-link
            >時，可以更早研發，相反的，你在海圖靠捕魚或是很少農夫種田，那麼你可以晚點研發。
          </p>
          <p>
            當然如果打一般封快，上<nuxt-link to="/techs/age/Castle_Age"
              >城堡</nuxt-link
            >前會先研發，這是高手間的習慣。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >時代花費便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：研究該科技的時間在<nuxt-link to="/techs/age/Feudal_Age"
                >封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >時代快10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>：該科技免費。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：研發該科技不消耗木材。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            當大多數人在農業社區工作時，簡單的<nuxt-link to="/techs/Hand_Cart"
              >手推車</nuxt-link
            >或單輪手推車是一項重大發明。中世紀早期的工業很少。經濟主要靠種植農作物，放牧，收集和建設。獨輪車提供了重要的生產力改進。
          </p>
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
              <div class="unititle2">輪軸技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/wheelbarrow.png" class="img-fluid" alt="" />
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
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/town_center.png" alt="" /><nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">可升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/hand_cart.png" alt="" /><nuxt-link
                to="/techs/Hand_Cart"
                >手推車</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">75秒</td>
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
            <td class="unit4">175</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">村民移動速度快10%，每趟可攜帶資源量+25%。</td>
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
