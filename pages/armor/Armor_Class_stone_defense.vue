<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>石造防禦裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em>這篇文章是將有關於<strong>石造防禦裝甲</strong>。</em>
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <strong>石造防禦裝甲</strong
            >是一個防禦裝甲類別，所有在這個系列的建築都會被對該裝甲的有攻擊加成的兵種或<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >有額外的傷害。
          </p>
        </div>
        <h3>石造防禦單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是石造防禦單位
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/stone_wall.png"
                alt=""
              /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/stone_wall.png"
                alt=""
              /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/gate.png"
                alt=""
              /><nuxt-link to="/building/Gate">城門</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/tower.png"
                alt=""
              /><nuxt-link to="/building/Watch_Tower">暸望台</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/tower.png"
                alt=""
              /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/tower.png"
                alt=""
              /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/bombard_tower.png"
                alt=""
              /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HarborIcon.png"
                alt=""
              /><nuxt-link to="/building/Harbor">海港</nuxt-link>(<nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >限定)
            </li>
          </ul>
        </div>
        <h3>剋石造防禦單位的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對石造防禦單位的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/BombardCannonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/TarkanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link>→
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/TarkanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Tarkan">精銳答剌罕騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Huns">匈人</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/EliteBattleElephantIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Battle_Elephant"
                      >精銳矛象伕</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/WarElephantIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/War_Elephant">精銳戰象</nuxt-link
                    >(<nuxt-link to="/civs/Persians">波斯</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Battleelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/WarElephantIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/War_Elephant">戰象</nuxt-link
                    >(<nuxt-link to="/civs/Persians">波斯</nuxt-link>限定)
                  </li>
                </ul>

                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/VillagerMaleIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Villager">村民</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/ElephantArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elephant_Archer"
                      >精銳象弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant"
                      >精銳弩砲象</nuxt-link
                    >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/ElephantArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
                    >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下方科技可讓以下單位擁有對建築單位的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <img
                  class="gg"
                  src="~assets/sappers.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Sappers">兵工學</nuxt-link>

                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/VillagerMaleIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Villager">村民</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <img
                  class="gg"
                  src="~assets/unique_tech.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Obsidian_Arrows">黑曜石之箭</nuxt-link
                >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                <ul>
                  <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ArcherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Archer">弓兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CrossbowmanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/ArbalestIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Arbalester">強弩兵</nuxt-link>
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
definePageMeta({ layout: 'alllarmor' })

export default {
  components: {}
}
</script>
<style></style>
