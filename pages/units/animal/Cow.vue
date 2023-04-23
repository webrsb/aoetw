<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>乳牛</h1>
        <div class="hrn1"></div>
      </div>
      <div class="n1"></div>
      <div class="col-md-8">
        <p>
          <b>乳牛</b>在《<nuxt-link to="/games/aof"
            >世紀帝國II：失落的帝國</nuxt-link
          >》中是可馴化的動物，一隻有150的肉，跟<nuxt-link
            to="/units/animal/Water_Buffalo"
            >水牛</nuxt-link
          >很類似(在《<nuxt-link to="/games/ak"
            >世紀帝國II：非洲王國》</nuxt-link
          >資料片出現)。乳牛有14HP比其他五種可馴養動物的7HP多一些，這讓那些<nuxt-link
            to="/techs/age/Dark_Age"
            >黑暗時代</nuxt-link
          >想用<nuxt-link to="/units/Scout_Cavalry">斥候騎兵</nuxt-link
          >跟<nuxt-link to="/units/Militia">民兵</nuxt-link
          >殺死敵方乳牛的玩家不能輕易達到目的。乳牛主要出現在歐洲地圖上。
        </p>
        <h3>文明優勢</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>:殺乳牛效率快20％
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>:額外多取20%的肉量
            </li>
            <li>
              塞爾特：單位<nuxt-link to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >內，無法被偷乳牛
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="200"
                  src="~assets/Shepherd.png"
                  alt=""
              /></gallery>
              <p>
                <em
                  ><nuxt-link to="/units/Villager">村民</nuxt-link
                  >正在把乳牛趕回<nuxt-link to="/building/Town_Center"
                    >城鎮中心</nuxt-link
                  >。</em
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#b086b5;">
              <div class="unititle2">
                乳牛
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Iconcow.png" width="80" alt="" />
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
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">14</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allanimal' })

export default {
  components: {}
}
</script>
<style></style>
