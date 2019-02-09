<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>板屋船</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            板屋船是<nuxt-link to="/civs/Koreans">韓國</nuxt-link
            >的特殊科技，可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在
            <nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。研發後龜甲船移動快15%。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              龜甲船最大的問題就是速度。在<nuxt-link to="/games/aof"
                >失落的帝國</nuxt-link
              >資料片中，板屋船的引進可以修補這個問題。雖然<nuxt-link
                to="/units/Galleon"
                >重型弩炮戰船</nuxt-link
              >還是可以對龜甲船作打帶跑，但是這需要更多的微操作而且不具效益。由於缺乏
              <nuxt-link to="/techs/Heresy">異端邪說</nuxt-link
              >，在海岸邊轟炸的龜甲船很容易就被<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >召走，板屋船可讓龜甲船看到僧侶時快速遠離岸邊減少部隊損失。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速板屋船的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>板屋船的成本為400肉400木。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>板屋船的成本為300肉300木。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            板屋船（韓語：판옥선）是16世紀後期韓國朝鮮王朝使用的主要艦艇類型的槳式和帆式推進船。第一艘船是在1555年建造的。它是一艘由堅固的松木製成的船，並且在1592年開始的臨津戰爭期間在對上數量上領先的日本海軍中發揮了重要作用並取得勝利。海軍中將Yi
            Sunshin（1545-98）率領的朝鮮海軍在戰爭期間將板屋船與龜甲船一起使用，並獲得巨大成功。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">板屋船</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/CastleAgeUnique.png" width="45" alt="" />
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
            <td class="unit3">文明</td>
            <td class="unit4">
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>
            </td>
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
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
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
            <td class="unit3">木材</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">龜甲船移動快15%。</td>
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
