<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>太平洋群島</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>太平洋群島</b>具有兩棲地形，其中陸地單位和<nuxt-link
              to="/units/Naval_Vessels"
              >海軍單位</nuxt-link
            >都可加入戰場。玩家將從他們自己的沙洲開始，或者在團隊比賽中與隊友分享。太平洋群島四周都有淺灘可供陸上或海上單位通行。<nuxt-link
              to="/units/Demolition_Ship"
              >爆破船</nuxt-link
            >在某些淺灘處使用得當的話可以對敵方造成巨量傷害。太平洋群島可說是巨大版的<nuxt-link
              to="/maps/Bog_Islands"
              >沼澤</nuxt-link
            >，不同的是陸地面積更多淺灘更少，敵人可以從某些狹窄的地方偷渡到你的島上。太平洋群島上的資源也比其他地圖相對來的少。
          </p>
          <p>
            玩家城鎮附近有<nuxt-link to="/units/animal/Water_Buffalo"
              >水牛</nuxt-link
            >可以採集，打獵則有鹿和<nuxt-link to="/units/animal/Rhinoceros"
              >犀牛</nuxt-link
            >，但要小心老虎的出現。<nuxt-link to="/resource/Wood"
              >木頭</nuxt-link
            >數量十分稀少，而且要小心在採集時受到海上敵方<nuxt-link
              to="/units/Naval_Vessels"
              >船艦</nuxt-link
            >的騷擾。金礦和<nuxt-link to="/resource/Stone">石礦</nuxt-link
            >同樣有易遭敵人騷擾的問題。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Pacific_Islands_Mangroves.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>淺灘處有紅樹林可以砍伐。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Narrow_channel.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>這些狹窄的河道是偷渡的好地方。</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Pacific_Islands.png" width="300" alt="" />
        <h4>兩人的太平洋群島地圖</h4>
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
