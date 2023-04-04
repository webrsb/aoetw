<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>沙洲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>沙洲</b>具有兩棲地形，其中陸地單位和<nuxt-link
              to="/units/Naval_Vessels"
              >海軍單位</nuxt-link
            >都可加入戰場。玩家將從他們自己的沙洲開始，或者在團隊比賽中與隊友分享。每個沙洲沒有固定的形狀，而且有長而狹窄的峽灣向外延伸。沙洲被寬闊的河道及紅樹林群隔開，必須把部隊送到沙洲上然經由<nuxt-link
              to="/units/Transport_Ship"
              >運輸船</nuxt-link
            >才能到達敵人的島嶼。沿著沙洲邊緣有淺灘，陸地單位可以穿過這些淺灘，而更深的水域只有海上單位能通過。
          </p>
          <p>
            玩家城鎮附近有<nuxt-link to="/units/animal/Water_Buffalo"
              >水牛</nuxt-link
            >可以採集，打獵則有鹿和<nuxt-link to="/units/animal/Rhinoceros"
              >犀牛</nuxt-link
            >，但要小心老虎的出現。海上資源相對其他海圖較少，但仍可善加利用。好消息是金礦和<nuxt-link
              to="/resource/Stone"
              >石礦</nuxt-link
            >離城鎮非常近，中間的紅樹林區也有許多珍貴的礦產等著玩家去發掘。
          </p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Mangrove.jpg"
                alt=""
            /></gallery>
            <p class="text-center">
              <em>中間的紅樹林區有金礦和石礦可開採。</em>
            </p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Channels.jpg"
                alt=""
            /></gallery>
            <p class="text-center"><em>城鎮旁的峽灣。</em></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Sandbank.png" width="300" alt="" />
        <h4>兩人的沙洲地圖</h4>
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
