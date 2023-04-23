<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>布達佩斯</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            大多數地圖中的玩家都是從一個<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >開始，有時候根本沒有城鎮中心，在<b>布達佩斯</b>，玩家開局就有兩個城鎮中心，彼此相距不遠。這意味著需要在新的城鎮中心投入更少的資源，並且可以產出更多的<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >來收集資源。有城鎮中心或村民優勢的<nuxt-link to="/civs"
              >文明</nuxt-link
            >可以在這張地圖上茁壯成長，例如<nuxt-link to="/civs/Persians"
              >波斯人</nuxt-link
            >和<nuxt-link to="/civs/Indians">印度人</nuxt-link
            >。其他表現出色的文明例如<nuxt-link to="/civs/Malay"
              >馬來人</nuxt-link
            >，他們可以在湖泊上養魚捕魚，還有<nuxt-link to="/civs/Vikings"
              >維京人</nuxt-link
            >更便宜的<nuxt-link to="/building/Dock">碼頭</nuxt-link
            >和免費的獨輪車和<nuxt-link to="/techs/Hand_Cart">手推車</nuxt-link
            >，都可以更快的發展經濟。一些開局有額外單位的文明，如<nuxt-link
              to="/civs/Mayans"
              >馬雅人</nuxt-link
            >，<nuxt-link to="/civs/Chinese">中國人</nuxt-link>和<nuxt-link
              to="/civs/Incas"
              >印加人</nuxt-link
            >（前兩個開始有更多的村民，最後一個有<nuxt-link
              to="/units/animal/Llama"
              >草尼馬</nuxt-link
            >一隻，另外<nuxt-link to="/civs/Chinese">中國</nuxt-link
            >的城鎮中心可容納10人口）也是開局獲得兩倍的初始單位。
          </p>
          <p>
            在湖上發展<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
            >固然不錯，但是也不要過於發展，要注意湖跟湖之間並無相連，作為防守可以訓練些許海軍就好。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Budapest_Preview.jpg" width="300" alt="" />
        <h4>標準布達佩斯地圖</h4>
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
