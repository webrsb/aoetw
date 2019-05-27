<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城牆和城門</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em>這篇文章是將有關於<strong>城牆和城門</strong>的裝甲。</em>
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <strong>城牆和城門</strong
            >是一個防禦裝甲類別，所有在這個系列的<nuxt-link to="/building"
              >建築</nuxt-link
            >都會被對該裝甲的有攻擊加成的兵種或<nuxt-link to="/techs"
              >科技</nuxt-link
            >有額外的傷害。
          </p>
        </div>
        <h3>城牆和城門單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是城牆和城門單位
          <ul>
            <li>
              <img
                class="gg"
                width="25px"
                src="~assets/Palisadewallicon.png"
                alt=""
              /><nuxt-link to="/building/Palisade_Wall">木牆</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                width="25px"
                src="~assets/Stonewallicon.png"
                alt=""
              /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                width="25px"
                src="~assets/Stonewallicon.png"
                alt=""
              /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                width="25px"
                src="~assets/Palisadegateicon.png"
                alt=""
              /><nuxt-link to="/building/Palisade_Gate">木門</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                width="25px"
                src="~assets/Gateicon.png"
                alt=""
              /><nuxt-link to="/building/Gate">城門</nuxt-link>
            </li>
          </ul>
        </div>
        <h3>剋城牆和城門單位的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對<nuxt-link to="/armor/Armor_Class_wall_and_gate"
            >城牆和城門</nuxt-link
          >單位的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+900攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/PetardIcon.jpg" alt="" /><nuxt-link
                  to="/units/Petard"
                  >爆炸桶</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/TarkanIcon.jpg" alt="" /><nuxt-link
                  to="/units/Tarkan"
                  >精銳韃靼騎兵</nuxt-link
                >(<nuxt-link to="/civs/Huns">匈奴</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/TarkanIcon.jpg" alt="" /><nuxt-link
                  to="/units/Tarkan"
                  >韃靼騎兵</nuxt-link
                >(<nuxt-link to="/civs/Huns">匈奴</nuxt-link>限定)
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alllarmor',
  components: {}
}
</script>
<style></style>
