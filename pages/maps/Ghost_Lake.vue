<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鬼湖</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>鬼湖</b>可說是結冰版的<nuxt-link to="/maps/Mediterranean"
              >地中海</nuxt-link
            >，中間結冰區域沒有資源也無法蓋<nuxt-link to="/building"
              >建築物</nuxt-link
            >。地圖上的漿果、鹿比一般地圖少，只有<nuxt-link to="/resource/Gold"
              >黃金</nuxt-link
            >跟<nuxt-link to="/resource/Stone">石礦</nuxt-link
            >還有"狼"稍多一點，<nuxt-link to="/resource/Wood">木頭</nuxt-link
            >則是一小叢一小叢散落地圖上。玩家可以利用樹叢作為天然屏障圍家，但若基地靠近結冰區則很難圍好。因為資源不多所以中期強盛<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >(如<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
              to="/civs/Japanese"
              >日本</nuxt-link
            >、<nuxt-link to="/civs/Koreans">朝鮮</nuxt-link
            >。)會比晚期文明(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
            >)來的好用。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Ghostlake.gif" width="300" alt="" />
        <h4>鬼湖地圖，中間白色區域甚麼都沒有。</h4>
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
