<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>僧侶裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>僧侶</strong>單位的裝甲。而關於僧侶這個兵種的請參見<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>僧侶裝甲</b
            >是一個防禦裝甲類別，所有在這個系列的兵種都會被剋僧侶裝甲的兵種有額外的傷害。
          </p>
        </div>
        <h3>僧侶單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是僧侶單位
          <ul>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/MonkIcon.png"
                alt=""
              /><nuxt-link to="/units/Monk">僧侶</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/MissionaryIcon.png"
                alt=""
              /><nuxt-link to="/units/Missionary">傳教士</nuxt-link>(<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >限定)
            </li>
          </ul>
        </div>
        <h3>剋僧侶單位的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對僧侶單位的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/HussarIcon.png" alt="" /><nuxt-link
                  to="/units/Hussar"
                  >匈牙利輕騎兵</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/EliteEagleWarriorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Elite_Eagle_Warrior"
                  >精銳鷹勇士</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/LightCavalryIcon.png"
                  alt=""
                /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/EagleScoutIcon.png"
                  alt=""
                /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/EagleWarriorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/ScoutCavalryIcon.png"
                  alt=""
                /><nuxt-link to="/units/Scout_Cavalry">斥候騎兵</nuxt-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alllarmor' })

export default {
  components: {}
}
</script>
<style></style>
