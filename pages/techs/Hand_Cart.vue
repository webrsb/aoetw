<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>手推車</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>手推車</b>可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
            >研發。研發後<nuxt-link to="/units/Villager">村民</nuxt-link
            >速度快10%，每趟可攜帶資源量+50%。
          </p>
          <p>
            手推人幾人研發為10大熱門問題之一，根據加拿大高手Chris與中國實況主封心的說法
          </p>
          <p><strong>手推車說村民數100上下研發最好。</strong></p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>：該科技免費。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：研究該科技的時間在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代快15%/20%/。
            </li>
            <li>
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link
              >：研發該科技不消耗木材
            </li>
          </ul>
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
              <div class="unititle2">手推車</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/hand_cart.png" alt="" />
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
            <td class="unit4">城堡時代</td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">城鎮中心</td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img src="~assets/wheelbarrow.png" alt="" class="gg" /><nuxt-link
                to="/techs/Wheelbarrow"
                >輪軸技術</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">55秒</td>
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
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">村民速度快10%，每趟可攜帶資源量+50%。</td>
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
