<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>流刺網</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>流刺網</b>於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Dock">碼頭</nuxt-link>
            研發。研發後<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >工作速度+25%。這讓<nuxt-link to="/units/Fishing_Ship"
              >漁船</nuxt-link
            >捕魚和從<nuxt-link to="/building/Fish_Trap">漁網</nuxt-link
            >收集<nuxt-link to="/resource/Food">食物</nuxt-link
            >速度加快，建造<nuxt-link to="/building/Fish_Trap">漁網</nuxt-link
            >的速度也加快。
          </p>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：流刺網在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>：流刺網便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Persians">波斯</nuxt-link
              >：流刺網在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/帝王時代研究速度快15%/20%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            漂移刺網和定位網已廣泛適用於世界各地的文化。刺網技術的由來在許多國家和文化中都有記錄。<nuxt-link
              to="/civs/Japanese"
              >日本</nuxt-link
            >記錄了3000多年來追踪漁業開採，包括刺網的歷史。許多紀錄都跟江戶時代（1603-1868）有關。設得蘭群島的漁業由北歐海盜時代定居在此的<nuxt-link
              to="/civs/Vikings"
              >挪威</nuxt-link
            >人開始，與挪威漁業再文化和技術上有很多相似之處，包括鯡魚<nuxt-link
              to="/building/Fish_Trap"
              >漁網</nuxt-link
            >。許多在19世紀下半葉來到哥倫比亞河三文魚大漁場捕魚的挪威移民漁民也是這樣做的，因為他們在挪威北部羅弗敦群島周圍水域的鱈魚圈中有刺網捕魚的經驗。瑞典漁民也使用刺網作為季節性輪次的一部分。威爾士和<nuxt-link
              to="/civs/Britons"
              >英國</nuxt-link
            >漁民在威爾士和英格蘭的河流中使用手工製作的刺網捕捉大西洋鮭魚也有幾個世紀的歷史。這些僅僅是世界各地刺網漁業歷史的一些例子。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">流刺網</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/gillnets.png" alt="" />
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
            <td class="unit3">研發時間</td>
            <td class="unit4">45秒</td>
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
            <td class="unit4">150</td>
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
            <td class="unit4">漁船工作速度+25%。</td>
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
