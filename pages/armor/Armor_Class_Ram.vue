<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>衝撞車裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em>這篇文章是將有關於<strong>衝撞車裝甲</strong>的。</em>
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <strong>衝撞車裝甲</strong>是一個<nuxt-link to="/armor"
              >防禦裝甲</nuxt-link
            >類別，所有在這個系列的兵種都會被剋衝撞車的兵種有額外的傷害。
          </p>
        </div>
        <h3>衝撞車單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是衝撞車單位
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/BatteringRamIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>→
              <img
                class="gg"
                src="~assets/CappedRamIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>(1)→
              <img class="gg" src="~assets/SiegeRamIcon.jpg" alt="" /><nuxt-link
                to="/units/Siege_Ram"
                >重型衝撞車</nuxt-link
              >(2)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TrebuchetPackedIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Siegetowericon.png"
                alt=""
              /><nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>
            </li>
          </ul>
        </div>
        <h3>剋衝撞車單位的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對衝撞車單位的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ConquistadorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Conquistador">精銳征服者</nuxt-link
                    >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ConquistadorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Conquistador">征服者</nuxt-link
                    >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
                  </li>
                  <li>
                    <img src="~assets/WarGalley.jpg" alt="" /><nuxt-link
                      to="/units/War_Galley"
                      >弩砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/GalleonAoE2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Longboat">精銳維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CaravelIcon2.jpg"
                      alt=""
                    /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Slinger_Icon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Slinger">投石手</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/Galley.jpg" alt="" /><nuxt-link
                      to="/units/Galley"
                      >戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JanissaryIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Janissary"
                      >精銳土耳其火槍兵</nuxt-link
                    >(<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HandCannoneerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyScorpionIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JanissaryIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
                    >(<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >精銳馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ScorpionIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Scorpion">弩砲</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/OrganGunIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Organ_Gun">風琴砲</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OrganGunIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Organ_Gun">精銳風琴砲</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>技術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <img
            class="gg"
            src="~assets/CastleAgeUnique.png"
            width="22"
            alt=""
          /><nuxt-link to="/techs/Boiling_Oil">沸油</nuxt-link>(<nuxt-link
            to="/civs/Persians"
            >波斯</nuxt-link
          >限定)
          <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
          <ul>
            <li>
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </li>
          </ul>
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
