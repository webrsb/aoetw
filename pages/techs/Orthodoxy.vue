<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>東正教</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>東正教</b>是<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
            >的<nuxt-link to="/techs/untech">特殊科技</nuxt-link
            >，可於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後<nuxt-link to="/units/Monk">僧侶</nuxt-link>護甲+3/+3。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫人</nuxt-link
              >幾乎有所有的<nuxt-link to="/building/Monastery">修道院</nuxt-link
              >技術，只缺乏<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link
              >和<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>，<nuxt-link
                to="/units/Monk"
                >僧侶</nuxt-link
              >水平在中等之上。隨著東正教的研發斯拉夫人在遊戲中有最好和最耐用的僧侶之一，因為有裝甲的保護，可讓僧侶支援前線和承受敵人的攻擊一小段時間。這很重要，因為<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >軍隊的三個核心部隊都是近戰部隊（<nuxt-link to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >、<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
              >和<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >），在很多情況下需要僧侶的支持才能在戰鬥中更加持久。諷刺的是，斯拉夫軍隊對僧侶的<nuxt-link
                to="/elements/Conversion"
                >招降</nuxt-link
              >抵抗能力很弱，儘管如此，有東正教加成的僧侶在進攻支持上是非常有價值的。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速東正教的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            東正教是由希臘東正教教會維護的基督教形式，並由此向這些國家傳播福音。基督教於9世紀由希臘<nuxt-link
              to="/units/Missionary"
              >傳教士</nuxt-link
            >首次引入東斯拉夫國家基輔羅斯。最終，基督教在其988年的弗拉基米爾王子受洗後成為基輔羅斯的正式國教。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">東正教</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/unique_tech.png" class="img-fluid" alt="" />
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
            <td class="unit4">
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>
            </td>
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
              <img class="gg" src="~assets/castle.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
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
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">僧侶護甲+3/+3。</td>
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
