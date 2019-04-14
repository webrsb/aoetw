<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>血量</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p><b>血量</b>(或簡稱<b>HP</b>)，是遊戲內相當重要的數據。</p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          血量是衡量一個物體在被夷為平地或死亡之前可以承受多大程度的傷害。如果血量達到0，單位（<nuxt-link
            to="/building"
            >建築物</nuxt-link
          >）立即死亡（崩潰）。各種裝甲保護免受一些損壞，從而延長單位或建築物的壽命。另外，還有很多技術可以提高各種單位和結構的血量。
        </div>
        <h3>恢復生命值</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li><strong>治療:</strong></li>
            <nuxt-link to="/units/Monk">僧侶</nuxt-link
            >可以治療受傷的單位，直到他們血量全滿，但通常治療的不快。
            <li><strong>再生:</strong></li>
            駐守在建築物內的單位也可以自動恢復<nuxt-link
              to="/elements/Hit_points"
              >生命值</nuxt-link
            >，在<nuxt-link to="/building/Castle">城堡</nuxt-link
            >內的單位可以比其他建築物更快的恢復血量。研究草藥治療後會更快。
            <li><strong>修復:</strong></li>
            建築物、<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
            >和船不能被僧侶治療，但可以通過<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >的修復來回復血量。不過修復是需要耗費資源的，不過修復的價格只要初始的一半。如果一座<nuxt-link
              to="/building"
              >建築</nuxt-link
            >受到嚴重的破壞，那們所有駐紮的單位將會被驅逐出去。但只要修好，便可以重新進入建築內。
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allen',
  components: {}
}
</script>
<style></style>
