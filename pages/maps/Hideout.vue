<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>藏身之處</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>藏身之地</b>是一個類似<nuxt-link to="/maps/Arena">圍城</nuxt-link
            >的隨機地圖。玩家的城鎮是被<nuxt-link to="/building/Palisade_Wall"
              >木牆</nuxt-link
            >而不是<nuxt-link to="/building/Stone_Wall">石牆</nuxt-link
            >圍繞。資源位於地圖的外部，大部分<nuxt-link to="/resource/Wood"
              >木材</nuxt-link
            >位於地圖的中心，分隔玩家。與圍城不同，玩家不能安坐在<nuxt-link
              to="/building/Stone_Wall"
              >城牆</nuxt-link
            >內直到<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >，因為木牆<nuxt-link to="/elements/Hit_points">血量</nuxt-link
            >極少很難防住早期攻擊!建議玩家在他們的起始牆上再加一層木/石牆，以防止<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >的快攻。放置<nuxt-link to="/building/House">房屋</nuxt-link
            >或兩層牆可以拖到晉升城堡時代獲得更強大單位。玩家應該盡可能獲得地圖控制權，防止敵人在外收集資源。藏身之地可以像在圍城上一樣使用城塊或帝快打法，但是由於對手可能會騷擾玩家，因此玩家要做好基地防禦再升級。玩家應該專注於快速升上<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡</nuxt-link
            >或<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >，盡可能增加自己實力，同時防止對手蓬勃發展。在遊戲的後期階段，當<nuxt-link
              to="/resource/Wood"
              >木頭</nuxt-link
            >逐漸被砍完時，建議沿林線建造城堡或<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >，以防止對手收集木材，就像在<nuxt-link
              to="/maps/Hamburger"
            ></nuxt-link
            ><nuxt-link to="/maps/Hamburger">漢堡包</nuxt-link
            >地圖一樣。<nuxt-link to="/units/Onager">中型投石車</nuxt-link
            >也可以穿過樹木，到敵人後方"送禮物(殺光<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >)"。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img
          src="~assets/Screen_Shot_2017-12-18_at_12.26.59_PM.png"
          width="300"
          alt=""
        />
        <h4>兩人遊玩的藏身之處地圖</h4>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allmap',
  components: {}
}
</script>
<style></style>
