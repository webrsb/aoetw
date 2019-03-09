<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>大陸</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <b>大陸</b
            >地區主要是由大片陸地組成，周圍環繞著水域。有時候河流會將雙方隊伍分開，地圖中間則有一個孤立的島嶼。在大陸上<nuxt-link
              to="/resource/Wood"
              >木頭</nuxt-link
            >並不像其他地圖那樣多，通常是一小叢一小叢分開。<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >會比其他地圖更豐富，而<nuxt-link to="/resource/Stone"
              >石頭</nuxt-link
            >和<nuxt-link to="/resource/Food">食物</nuxt-link
            >則趨於平均。快攻在大陸上因為需要<nuxt-link
              to="/units/Naval_Vessels"
              >海軍</nuxt-link
            >運送所以不是那麼容易成功。水在大陸上不像其他海圖佔有很大比例，但<nuxt-link
              to="/resource/Wood"
              >木材</nuxt-link
            >有限意味著玩家應該將<nuxt-link to="/building/Farm">農田</nuxt-link
            >和<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >的食物比例分配成一半一半。擁有一支優秀的海軍部隊是需要的，但不是必要的。重點應放在沿岸防禦上防止敵方偷渡。<nuxt-link
              to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >、<nuxt-link to="/building/Outpost">哨站</nuxt-link>、<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >對防禦沿岸都非常有效。
          </p>
          <h3>優勢文明</h3>
          <p>
            <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、
            <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
            <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
            <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
          </p>
          <h3>劣勢文明</h3>
          <p>
            <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
            <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
            <nuxt-link to="/civs/Incas">印加</nuxt-link>。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Continental.jpg" width="300" alt="" />
        <h4>一個標準大陸地圖</h4>
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
