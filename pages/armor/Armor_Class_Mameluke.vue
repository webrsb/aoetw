<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>奴隸兵裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>奴隸兵</strong>單位的裝甲。而關於奴隸兵這個兵種的請參見<nuxt-link
              to="/units/Mameluke"
              >奴隸兵</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>奴隸兵裝甲</b
            >是一個於《世紀帝國:王者崛起》引進的防禦裝甲類別，所有在這個系列的兵種都會被剋奴隸兵裝甲的兵種有額外的傷害。
          </p>
        </div>
        <h3>奴隸兵單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是奴隸兵單位
          <ul>
            <li>
                    <img
                      class="gg"
                      src="~assets/Saracenmamluk_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/Saracenmamluk_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link
                    >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
                  </li>
          </ul>
        </div>
        <h3>剋奴隸兵單位的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對奴隸兵單位的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
            <ul>
              <li>
                <img
                class="gg"
                src="~assets/HalberdierIcon.png"
                alt=""
              /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>(決定版前是+16攻擊)
              </li>
              <li>
                <img class="gg" src="~assets/PikemanIcon.png" alt="" /><nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
            <ul>
              <li>
                <img
                class="gg"
                src="~assets/HeavyCamelIcon.png"
                alt=""
              /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/ImperialCamelIcon.png"
                alt=""
              /><nuxt-link to="/units/Imperial_Camel">帝王駱駝騎兵</nuxt-link
              >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/SpearmanIcon.png" alt="" /><nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link>
              </li>
              <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Elite_cannon_galleonicon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link>
                  </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
            <ul>
              <li>
                <img
                      class="gg"
                      src="~assets/Saracenmamluk_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link>
              </li>
              <li>
                <img class="gg" src="~assets/Kamayuk_Icon.png" alt="" /><nuxt-link
                to="/units/Kamayuk"
                >精銳槍隊長</nuxt-link>
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
