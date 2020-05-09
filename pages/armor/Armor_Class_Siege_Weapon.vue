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
            >這篇文章是將有關於<strong>攻城單位裝甲</strong>的。而關於攻城單位這個兵種的請參見<nuxt-link
              to="/units/Siege_Weapons"
              >攻城單位</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <strong>攻城單位裝甲</strong>是一個<nuxt-link to="/armor"
              >防禦裝甲</nuxt-link
            >類別，所有在這個系列的兵種都會被剋攻城裝甲的兵種有額外的傷害。
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
                src="~assets/BatteringRamIcon.png"
                alt=""
              /><nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link>→
              <img
                class="gg"
                src="~assets/CappedRamIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>→
              <img class="gg" src="~assets/SiegeRamIcon.png" alt="" /><nuxt-link
                to="/units/Siege_Ram"
                >重型衝撞車</nuxt-link
              >
            </li>
            <li>
              <img class="gg" src="~assets/MangonelIcon.png" alt="" /><nuxt-link
                to="/units/Mangonel"
                >輕型投石車</nuxt-link
              >→
              <img class="gg" src="~assets/OnagerIcon.png" alt="" /><nuxt-link
                to="/units/Onager"
                >中型投石車</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/SiegeOnagerIcon.png"
                alt=""
              /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/ScorpionIcon.png" alt="" /><nuxt-link
                to="/units/Scorpion"
                >弩砲</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/HeavyScorpionIcon.png"
                alt=""
              /><nuxt-link to="/units/Heavy_Scorpion">重型弩砲</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/BombardCannonIcon.png"
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
                src="~assets/TrebuchetUnpackedIcon.png"
                alt=""
              /><nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/OrganGunIcon.png" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >風琴砲</nuxt-link
              >→
              <img class="gg" src="~assets/OrganGunIcon.png" alt="" /><nuxt-link
                to="/units/Organ_Gun"
                >精銳風琴砲</nuxt-link
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
        <div class="n1 bonuses">
          以下單位擁有對攻城單位的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+65攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SiegeRamIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PetardIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Petard">炸藥桶</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CappedRamIcon.png"
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
                      src="~assets/BatteringRamIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Battering_Ram"
                      >輕型衝撞車</nuxt-link
                    >
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
                      src="~assets/CannonGalleonIcon.png"
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
                      src="~assets/BombardCannonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangonelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OnagerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/SiegeOnagerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >精銳馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
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
                      src="~assets/MangudaiIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
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
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.png"
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
