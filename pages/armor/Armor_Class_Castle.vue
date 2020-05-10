<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>城堡</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>城堡</strong>的裝甲。而關於城堡請參見<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>城堡裝甲</b>是一個<nuxt-link to="/armor">防禦裝甲</nuxt-link
            >類別，所有在這個系列的<nuxt-link to="/building">建築</nuxt-link
            >都會被對該裝甲的有攻擊加成的兵種或<nuxt-link to="/techs"
              >科技</nuxt-link
            >有額外的傷害。
          </p>
        </div>
        <h3>城堡</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <img width="25px" src="~assets/castle.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </li>
            <li>
              <img width="25px" src="~assets/castle.png" alt="" /><nuxt-link
                to="/building/Fortress"
                >要塞</nuxt-link
              >
            </li>
            <li>
              <img width="25px" src="~assets/Kreposticon.png" alt="" /><nuxt-link
                to="/building/Krepost"
                >營壘</nuxt-link
              >
            </li>
          </ul>
        </div>
        <h3>剋城堡的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對城堡的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+100攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/PetardIcon.png" alt="" /><nuxt-link
                  to="/units/Petard"
                  >炸藥桶</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/TarkanIcon.png" alt="" /><nuxt-link
                  to="/units/Tarkan"
                  >答剌罕騎兵</nuxt-link
                >→
                <img class="gg" src="~assets/TarkanIcon.png" alt="" /><nuxt-link
                  to="/units/Tarkan"
                  >精銳答剌罕騎兵</nuxt-link
                >(<nuxt-link to="/civs/Huns">匈人</nuxt-link>限定)
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
