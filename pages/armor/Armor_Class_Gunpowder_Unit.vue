<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>火藥系</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>火藥系裝甲</strong>的。而關於火藥單位這個兵種的資料請參見<nuxt-link
              to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>火藥系</b>是一個<nuxt-link to="/armor">防禦裝甲</nuxt-link
            >類別，所有在這個系列的兵種都會被剋火藥系的兵種有額外的傷害。
          </p>
        </div>
        <h3>火藥系單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是火藥系單位
          <ul>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/HandCannoneerIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Bombardtowericon.png"
                alt=""
              /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/JanissaryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/JanissaryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Janissary">精銳土耳其火槍兵</nuxt-link
              >(<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ConquistadorIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Conquistador">征服者</nuxt-link>→
              <img
                class="gg"
                src="~assets/ConquistadorIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Conquistador">精銳征服者</nuxt-link
              >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/OrganGunIcon.jpg" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >風琴砲</nuxt-link
              >→
              <img class="gg" src="~assets/OrganGunIcon.jpg" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >精銳風琴砲</nuxt-link
              >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CannonGalleonIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
              <img
                class="gg"
                src="~assets/CannonGalleonIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TurtleShipIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Turtle_Ship">龜甲船</nuxt-link>→
              <img
                class="gg"
                src="~assets/TurtleShipIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Turtle_Ship">精銳龜甲船</nuxt-link
              >(<nuxt-link to="/civs/Koreans">韓國</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Bombardtowericon.png"
                alt=""
              /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
            </li>
          </ul>
        </div>
        <h3>剋火藥系的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對火藥系的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/CondottieroNewIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(<nuxt-link
                  to="/civs/Italians"
                  >義大利</nuxt-link
                >和同盟限定)
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
