<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>圍城</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <h3>說明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            玩家在<b>圍城</b>中都會有個被圍牆圍住的城鎮，地圖中間是開放區域，有許多資源，整個地圖被樹環繞，唯一能進攻的路徑就是中間的開闊區域。敵方門外的重要資源(金或<nuxt-link
              to="/resource/Stone"
              >石頭</nuxt-link
            >)永遠是玩家阻止對方發育經濟的第一目標。地圖上有些小型半封閉區域可能會有額外資源(金礦和<nuxt-link
              to="/resource/Stone"
              >石礦</nuxt-link
            >)供玩家利用。通常圍城適合城快或帝快策略，<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >前的快攻會因為<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
            >阻擋不是那麼容易成功。不過塔攻還是可以使用的。
          </p>
          <h3>優勢文明</h3>
          <p>
            <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
            <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
            <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
            <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
            <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="~assets/Rm_arena.gif" width="300" alt="" />
        <h4>一個標準圍城地圖</h4>
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
