<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>傭兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>傭兵護甲</strong>。而關於傭兵這個兵種的請參見<nuxt-link
              to="/units/Condottiero"
              >傭兵</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>傭兵護甲</b>是一個在5.7版《<nuxt-link to="/games/aor"
              >世紀帝國II：王者崛起</nuxt-link
            >》新增的<nuxt-link to="/armor">防禦裝甲</nuxt-link
            >類別，所有在這個系列的兵種都會被剋該護甲的兵種有額外的傷害。
          </p>
          <p>
            傭兵的定位是反<nuxt-link to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            >，所以一開始有10的<nuxt-link to="/armor/Armor_Class_Infantry"
              >步兵裝甲</nuxt-link
            >去抵消<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
            >對<nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
            >+10的攻擊加成，可是這樣也讓傭兵對其它反步兵單位例如<nuxt-link
              to="/units/Cataphract"
              >拜占庭聖騎兵</nuxt-link
            >有減傷效果，因此在5.7版特地新增傭兵護甲這個分類，強調傭兵反火藥單位的特性同時其它對<nuxt-link
              to="/armor/Armor_Class_Infantry"
              >步兵</nuxt-link
            >有加成的單位對傭兵也有一樣的攻擊加成
          </p>
        </div>
        <h3>傭兵</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CondottieroIcon.png"
                alt=""
              /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >和同盟限定)
            </li>
          </ul>
        </div>
        <h3>剋傭兵系的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對傭兵系的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CataphractIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cataphract">精銳拜占庭聖騎兵</nuxt-link
                >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Slinger_Icon.png"
                  alt=""
                /><nuxt-link to="/units/Slinger">投石手</nuxt-link> (<nuxt-link
                  to="/civs/Incas"
                  >印加</nuxt-link
                >限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/JaguarWarriorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/JaguarWarriorIcon.png"
                  alt=""
                /><nuxt-link to="/units/Jaguar_Warrior">精銳豹勇士</nuxt-link
                >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CataphractIcon.png"
                  alt=""
                /><nuxt-link to="/units/Cataphract">拜占庭聖騎兵</nuxt-link
                >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/PlumedArcherIcon.png"
                  alt=""
                /><nuxt-link to="/units/Plumed_Archer">精銳羽毛箭射手</nuxt-link
                >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/PlumedArcherIcon.png"
                  alt=""
                /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
                >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
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
