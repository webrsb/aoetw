<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>阿拉伯</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <p>
          <b>阿拉伯</b
          >是世紀帝國II內最著名也是最受歡迎的一張地圖，現今的比賽幾乎都是以阿拉伯為主。
        </p>
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            阿拉伯是一個著名的開放地圖，資源分佈比起其他地圖來的稀少，易攻難守。<nuxt-link
              to="/resource/Wood"
              >木頭</nuxt-link
            >通常很少，所以早期只要有效的封住對方<nuxt-link to="/resource/Wood"
              >木材</nuxt-link
            >，就可以在前期取得非常好的優勢，因此<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >等相關戰術非常的流行。
          </p>
          <p>
            資源方面，請牢記一定是8羊2豬3或4條鹿，3塊<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >與2塊<nuxt-link to="/resource/Stone">石頭</nuxt-link>。
          </p>
          <h3>優勢文明</h3>
          <p>請見<nuxt-link to="/civs/bestciv">文明優勢</nuxt-link></p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Imgres-0.jpg" width="300" alt="" />
        <h4>一個標準阿拉伯地圖</h4>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allmap' })

export default {
  components: {}
}
</script>
<style></style>
