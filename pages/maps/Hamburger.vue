<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>漢堡包</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在<b>漢堡包</b>上玩家一開始在中間島上被一排樹木隔開。島上有幾個巨大的金礦和<nuxt-link
              to="/resource/Stone"
              >石礦</nuxt-link
            >。島外有一條護城河，裡面有豐富的<nuxt-link to="/units/animal/fish"
              >魚類</nuxt-link
            >資源。地圖的外緣是沒有任何<nuxt-link to="/resource/Food"
              >食物</nuxt-link
            >來源的土地，但會有許多由金，<nuxt-link to="/resource/Stone"
              >石頭</nuxt-link
            >和<nuxt-link to="/resource/Wood">木頭</nuxt-link
            >組成的小塊區域。<nuxt-link to="/elements/Relic">遺跡</nuxt-link
            >也散落在外圍。玩家必須盡快往外發展經濟，並在被敵人困住之前離開主島。
          </p>
          <p>
            早期的遊戲最好專注花在收集主島上的可用資源。起始島只有一條木線，因此建議快速入<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >建造<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >阻止對手採集<nuxt-link to="/resource/Wood">木材</nuxt-link
            >，迫使他們要麼度過護城河往外發展，要麼交易他們的資源。玩家應發展水上經濟並建造戰艦騷擾對手的捕魚經濟，並阻止他們將<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >運送到護城河外擴張地盤。在這張地圖有免費箭塔升級的<nuxt-link
              to="/civs/Koreans"
              >朝鮮人</nuxt-link
            >，有便宜箭塔的<nuxt-link to="/civs/Incas">印加人</nuxt-link
            >，擁有額外箭塔視線的<nuxt-link to="/civs/Ethiopians"
              >衣索比亞人</nuxt-link
            >，時代演進快速的<nuxt-link to="/civs/Malay">馬來人</nuxt-link
            >，以及<nuxt-link to="/civs/Japanese">日本人</nuxt-link
            >更強大的<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >和更便宜的經濟<nuxt-link to="/building">建築</nuxt-link
            >都是不錯的<nuxt-link to="/civs">文明</nuxt-link>。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Wood_line.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>中間的樹林是雙方玩家最初的防線。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Resources.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>地圖外圍會有由金，石頭和木頭組成的小塊區域等玩家去發掘。</em>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Hamburger.png" width="300" alt="" />
        <h4>兩人的漢堡包地圖</h4>
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
