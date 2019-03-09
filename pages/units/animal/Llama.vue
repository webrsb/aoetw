<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>羊駝</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>羊駝</b>在<nuxt-link to="/games/aof"
            >《世紀帝國 II HD: 失落的帝國》</nuxt-link
          >中是可馴化的動物，一隻有100的肉。羊駝會出現在包括<nuxt-link
            to="/maps/Acropolis"
            >雅典衛城</nuxt-link
          >，<nuxt-link to="/maps/Cenotes">岩坑池</nuxt-link>，<nuxt-link
            to="/maps/Yucatan"
            >猶加敦</nuxt-link
          >等在內的地圖上。
        </p>
        <p>
          <nuxt-link to="/civs/Incas">印加</nuxt-link>一開始因為<nuxt-link
            to="/civs"
            >文明</nuxt-link
          >加成會有一隻羊駝。
        </p>
        <h3>文明優勢</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>印加:開局就有一隻羊駝</li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:額外多獵取20%的肉量
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="hg" width="200" src="~assets/LlamaII.png" alt=""
              /></gallery>
              <p><em>世紀帝國 II的羊駝。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                羊駝
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/LlamaII_icon.png" width="80" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2" style="color: #fff;">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>量
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">7</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allanimal',
  components: {}
}
</script>
<style></style>
