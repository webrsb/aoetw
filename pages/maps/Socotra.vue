<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>索科特拉島</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>索科特拉島</b
            >位於葉門南邊和非洲之角的東部。島嶼非常小，完全被懸崖所環繞，而<nuxt-link
              to="/civs/Indians"
              >印度</nuxt-link
            >洋則在這些懸崖之外。玩家開局有3間<nuxt-link to="/building/House"
              >房屋</nuxt-link
            >，13個<nuxt-link to="/units/Villager">村民</nuxt-link
            >和一個<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
            >。這張地圖因為玩家彼此非常接近(只有稀疏的樹線)，而且資源稀少，戰鬥會很早就展開並且決定勝負。島上除了一些大象、<nuxt-link
              to="/units/animal/Zebra"
              >斑馬</nuxt-link
            >和<nuxt-link to="/units/animal/Ostrich">鴕鳥</nuxt-link
            >，還有一些特有的索科特拉植物群龍血樹。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Fight.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>在索科特拉島上玩家非常靠近，隨時會發生戰鬥。</em>
            </p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Town_Center.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em
                >一開局資源都在城鎮旁，玩家要盡快利用這些資源組織軍隊擊敗敵人。巨石外的海洋則完全沒有資源。</em
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Socotra.png" width="300" alt="" />
        <h4>兩人的索科特拉島地圖</h4>
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
