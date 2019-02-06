<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>攻城單位</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於攻城單位裝甲的。而關於攻城單位這個兵種的請參見<nuxt-link
              to="/units/Siege_Weapons"
              >攻城單位</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            攻城單位裝甲是一個防禦裝甲類別，所有在這個系列的兵種都會被剋攻城裝甲的兵種有額外的傷害。
          </p>
        </div>
        <h3>攻城單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是攻城單位
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/BatteringRamIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Battering_Ram">輕形衝撞車</nuxt-link>→
              <img
                class="gg"
                src="~assets/CappedRamIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>→
              <img class="gg" src="~assets/SiegeRamIcon.jpg" alt="" /><nuxt-link
                to="/units/Siege_Ram"
                >重型衝撞車</nuxt-link
              >
            </li>
            <li>
              <img class="gg" src="~assets/MangonelIcon.jpg" alt="" /><nuxt-link
                to="/units/Mangonel"
                >輕形投石車</nuxt-link
              >→
              <img class="gg" src="~assets/OnagerIcon.jpg" alt="" /><nuxt-link
                to="/units/Onager"
                >中型投石車</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/SiegeOnagerIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/ScorpionIcon.jpg" alt="" /><nuxt-link
                to="/units/Scorpion"
                >弩炮</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/HeavyScorpionIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Heavy_Scorpion">重型弩炮</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/BombardCannonIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Siegetowericon.png"
                alt=""
              /><nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TrebuchetUnpackedIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/OrganGunIcon.jpg" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >風琴炮</nuxt-link
              >→
              <img class="gg" src="~assets/OrganGunIcon.jpg" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >精銳風琴炮</nuxt-link
              >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link>(-2)→
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Ballista_Elephant">精銳弩砲象</nuxt-link
              >(-2)(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>剋攻城單位的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對攻城單位的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+65攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SiegeRamIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PetardIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Petard">爆炸桶</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CappedRamIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BatteringRamIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Battering_Ram"
                      >輕形衝撞車</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+20攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangonelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Mangonel">輕形投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OnagerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/SiegeOnagerIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >精銳馬札爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteEagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Elite_Eagle_Warrior"
                      >精銳鷹勇士</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >馬札爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleScoutIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.jpg"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
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
