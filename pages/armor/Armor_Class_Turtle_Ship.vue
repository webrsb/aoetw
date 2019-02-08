<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>龜甲船裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於龜甲船裝甲的。而關於龜甲船請參見<nuxt-link
              to="/units/Turtle_Ship"
              >龜甲船</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            龜甲船裝甲是一個防禦裝甲類別，所有在這個系列的兵種都會被剋龜甲船裝甲的兵種有額外的傷害。
          </p>
        </div>
        <h3>龜甲船單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是龜甲船單位
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/TurtleShipIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Turtle_Ship">龜甲船→</nuxt-link>
              <img
                class="gg"
                src="~assets/TurtleShipIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Turtle_Ship">精銳龜甲船</nuxt-link
              >(1)(<nuxt-link to="/civs/Koreans">韓國</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>剋龜甲船單位的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對龜甲船單位的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/FastFireShipIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/FireShipIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/FireGalleyIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>
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
