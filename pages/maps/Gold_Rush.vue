<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>淘金潮</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="ien">
          <em>沙漠中間有一大堆的黃金，但也埋伏著許多飢渴的狼。</em>
          <p style="text-align: left;margin-top: 10px;">-地圖的描述</p>
        </div>
        <p>
          <b>淘金潮</b>是遊戲內的一張地圖，以<nuxt-link to="/resource/Gold"
            >黃金</nuxt-link
          >非常集中而聞名。
        </p>
        <h3>概說</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在淘金潮中，玩家分布在地圖的邊緣，只有少量的黃金，而地圖的正中間有相當多的黃金，但是黃金周圍有著非常多的狼。所以與其他地圖策略不同的是，你必須早點控制地圖的中央區域，才能持續確保黃金的來源，並且阻止對方採集中間的黃金。而控制黃金區域的辦法，不外乎建造<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >與<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
            >這類型的防禦建設。
          </p>
          <h3>優勢文明</h3>
          <div class="hrn1"></div>
          <p>
            初期擁有優勢的<nuxt-link to="/civs">文明</nuxt-link
            >將相當吃香，請見<nuxt-link to="/civs/bestciv">文明優勢</nuxt-link>
          </p>
          <p>而馬紮爾可以一擊殺狼的特性，在淘金潮或許也可以發揮的不錯。</p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Gold_Rush.jpg" width="300" alt="" />
        <h4>一個兩人的淘金潮地圖</h4>
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
