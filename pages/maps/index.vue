<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>地圖</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <p>
          隨機地圖是目前最主要遊戲模式（另一地圖是真實世界）。在該模式中每場遊戲的地形地貌隨機生成都不相同，在地圖的每個腳弱都有不同的景觀和地形。
        </p>
        <h3>地圖列表</h3>
        <div class="hrn1"></div>
        <div class="row n1">
          <div class="col-md-2">
            帝王世紀
            <ul>
              <li><nuxt-link to="/maps/Arabia">阿拉伯</nuxt-link></li>
              <li><nuxt-link to="/maps/Archipelago">群島</nuxt-link></li>
              <li><nuxt-link to="/maps/Baltic">波羅的海</nuxt-link></li>
              <li><nuxt-link to="/maps/Black_Forest">黑森林</nuxt-link></li>
              <li><nuxt-link to="/maps/Coastal">沿海</nuxt-link></li>
              <li><nuxt-link to="/maps/Continental">大陸</nuxt-link></li>
              <li><nuxt-link to="/maps/Fortress">堡壘</nuxt-link></li>
              <li><nuxt-link to="/maps/Gold_Rush">淘金潮</nuxt-link></li>
              <li><nuxt-link to="/maps/Highland">高地</nuxt-link></li>
              <li><nuxt-link to="/maps/Islands">島嶼</nuxt-link></li>
              <li><nuxt-link to="/maps/Mediterranean">地中海</nuxt-link></li>
              <li><nuxt-link to="/maps/Migration">移民</nuxt-link></li>
              <li><nuxt-link to="/maps/Rivers">河流</nuxt-link></li>
              <li><nuxt-link to="/maps/Team_Islands">團隊群島</nuxt-link></li>
            </ul>
          </div>
          <div class="col-md-2">
            征服者入侵
            <ul>
              <li><nuxt-link to="/maps/Arena">圍城</nuxt-link></li>
              <li><nuxt-link to="/maps/Ghost_Lake">鬼湖</nuxt-link></li>
              <li><nuxt-link to="/maps/Mongolia">蒙古高原</nuxt-link></li>
              <li><nuxt-link to="/maps/Nomad">游牧</nuxt-link></li>
              <li><nuxt-link to="/maps/Oasis">綠洲</nuxt-link></li>
              <li><nuxt-link to="/maps/Salt_Marsh">鹽沼地</nuxt-link></li>
              <li><nuxt-link to="/maps/Scandinavia">斯堪地維亞</nuxt-link></li>
              <li><nuxt-link to="/maps/Yucatan">猶加敦</nuxt-link></li>
            </ul>
          </div>
          <div class="col-md-2">
            失落的王朝
            <ul>
              <li><nuxt-link to="/maps/Acropolis">雅典衛城</nuxt-link></li>
              <li><nuxt-link to="/maps/Budapest">布達佩斯</nuxt-link></li>
              <li><nuxt-link to="/maps/Cenotes">岩坑池</nuxt-link></li>
              <li><nuxt-link to="/maps/Land_of_Lakes">百湖之城</nuxt-link></li>
              <li><nuxt-link to="/maps/Golden_Pit">金礦谷</nuxt-link></li>
              <li><nuxt-link to="/maps/Hideout">藏身之處</nuxt-link></li>
              <li><nuxt-link to="/maps/Lombardia">倫巴地</nuxt-link></li>
              <li><nuxt-link to="/maps/Steppe">乾草原</nuxt-link></li>
              <li><nuxt-link to="/maps/Valley">峽谷</nuxt-link></li>
              <li><nuxt-link to="/maps/Megarandom">超級隨機</nuxt-link></li>
              <li><nuxt-link to="/maps/Hamburger">漢堡包</nuxt-link></li>
            </ul>
          </div>
          <div class="col-md-2">
            非洲王國
            <ul>
              <li>
                <nuxt-link to="/maps/Kilimanjaro">吉力馬札羅山</nuxt-link>
              </li>
              <li><nuxt-link to="/maps/Mountain_Pass">雪山地</nuxt-link></li>
              <li><nuxt-link to="/maps/Nile_Delta">尼羅河三角洲</nuxt-link></li>
              <li><nuxt-link to="/maps/Serengeti">塞倫蓋提平原</nuxt-link></li>
              <li><nuxt-link to="/maps/Socotra">索科特拉島</nuxt-link></li>
            </ul>
          </div>
          <div class="col-md-2">
            王者崛起
            <ul>
              <li><nuxt-link to="/maps/Bog_Islands">沼澤</nuxt-link></li>
              <li><nuxt-link to="/maps/Mangrove_Jungle">紅樹林</nuxt-link></li>
              <li>
                <nuxt-link to="/maps/Pacific_Islands">太平洋群島</nuxt-link>
              </li>
              <li><nuxt-link to="/maps/Sandbank">沙洲</nuxt-link></li>
              <li><nuxt-link to="/maps/Water_Nomad">水上游牧</nuxt-link></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  head() {
    return {
      title: 'Aoetw - 地圖'
    }
  },
  layout: '',
  components: {}
}
</script>
<style></style>
