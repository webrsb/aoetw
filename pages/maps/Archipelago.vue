<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>群島</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>群島</b>由一系列被大海環繞的<nuxt-link to="/maps/Islands"
              >島嶼</nuxt-link
            >組成。因為這些島嶼比常規陸地小，大多數資源都是有限的，所以垃圾兵戰爭（<nuxt-link
              to="/units/Elite_Skirmisher"
              >戰矛兵</nuxt-link
            >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>、<nuxt-link
              to="/units/Light_Cavalry"
              >輕騎兵</nuxt-link
            >）在遊戲後期就很常見。有些玩家在遊戲開始時讀獨自占據一座島，其他玩家則共享一個島嶼的<nuxt-link
              to="/resource/Wood"
              >木頭</nuxt-link
            >，黃金，<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >，漿果和鹿。玩家能夠利用早期的快攻殲滅另一個島上的敵方玩家並利用新佔領島嶼上的資源增加資源儲備量。水域控制在群島很重要。因為玩家的大部分<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >供應來自海上，另一個原因是地圖上有四個額外的小島。兩個上面沒有東西，但另外兩個含有大量的<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >，<nuxt-link to="/resource/Wood">木材</nuxt-link
            >，食物和石頭。找到並占領這些島嶼可讓玩家獲得比對手更多的資源，讓帝國更加強盛進而贏得勝利。擁有<nuxt-link
              to="/units/Naval_Vessels"
              >海軍</nuxt-link
            >優勢的<nuxt-link to="/civs">文明</nuxt-link
            >在這張地圖上有很大的操作空間。
          </p>
          <h3>優勢文明</h3>
          <p>
            <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
              to="/civs/Incas"
              >印加</nuxt-link
            >、<nuxt-link to="/civs/Italians">義大利</nuxt-link>、<nuxt-link
              to="/civs/Japanese"
              >日本</nuxt-link
            >、<nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>、<nuxt-link
              to="/civs/Malay"
              >馬來</nuxt-link
            >、<nuxt-link to="/civs/Persians">波斯</nuxt-link>、<nuxt-link
              to="/civs/Portuguese"
              >葡萄牙</nuxt-link
            >、<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、<nuxt-link
              to="/civs/Teutons"
              >條頓</nuxt-link
            >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>、<nuxt-link
              to="/civs/Vikings"
              >維京</nuxt-link
            >。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Imgres-1424918802.jpg" width="300" alt="" />
        <h4>一個標準群島地圖</h4>
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
