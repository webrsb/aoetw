<template>
  <div class="container padtop">
    <h1>建築</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          下面將列出遊戲中所有<nuxt-link to="/units/Villager">村民</nuxt-link
          >可建造建築，依照時代來分
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3>
          <img
            src="~assets/dark_age.png"
            style="bottom: 3px; position: relative;"
            width="30"
            alt=""
          /><nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
        </h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            <nuxt-link to="/building/Town_Center"
              ><img
                class="gg"
                width="25px"
                src="~assets/town_center.png"
                alt=""
              />城鎮中心</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/House"
              ><img
                class="gg"
                width="25px"
                src="~assets/house.png"
                alt=""
              />房屋</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Mill"
              ><img
                class="gg"
                width="25px"
                src="~assets/mill.png"
                alt=""
              />磨坊</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Farm"
              ><img
                class="gg"
                width="25px"
                src="~assets/farm.png"
                alt=""
              />農田</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Lumber_Camp"
              ><img
                class="gg"
                width="25px"
                src="~assets/lumber_camp.png"
                alt=""
              />伐木場</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Mining_Camp"
              ><img
                class="gg"
                width="25px"
                src="~assets/mining_camp.png"
                alt=""
              />採礦營地</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Dock"
              ><img
                class="gg"
                width="25px"
                src="~assets/dock.png"
                alt=""
              />碼頭</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Barracks"
              ><img
                class="gg"
                width="25px"
                src="~assets/barracks.png"
                alt=""
              />軍營</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Palisade_Wall"
              ><img
                class="gg"
                width="25px"
                src="~assets/palisade.png"
                alt=""
              />木牆</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Palisade_Gate"
              ><img
                class="gg"
                width="25px"
                src="~assets/palisade_gate.png"
                alt=""
              />木門</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Outpost"
              ><img
                class="gg"
                width="25px"
                src="~assets/outpost.png"
                alt=""
              />哨站</nuxt-link
            >
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>
          <nuxt-link to="/techs/age/Feudal_Age"
            ><img
              src="~assets/feudal_age.png"
              style="bottom: 3px; position: relative;"
              width="30"
              alt=""
            />封建時代</nuxt-link
          >
        </h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/market.png"
              alt=""
            /><nuxt-link to="/building/Market">市集</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/blacksmith.png"
              alt=""
            /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/fish_trap.png"
              alt=""
            /><nuxt-link to="/building/Fish_Trap">漁網</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/archery_range.png"
              alt=""
            /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/stable.png"
              alt=""
            /><nuxt-link to="/building/Stable">馬廄</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/stone_wall.png"
              alt=""
            /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/gate.png"
              alt=""
            /><nuxt-link to="/building/Gate">城門</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/tower.png"
              alt=""
            /><nuxt-link to="/building/Watch_Tower">暸望台</nuxt-link>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>
          <nuxt-link to="/techs/age/Castle_Age"
            ><img
              src="~assets/castle_age.png"
              style="bottom: 3px; position: relative;"
              width="30"
              alt=""
            />城堡時代</nuxt-link
          >
        </h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/town_center.png"
              alt=""
            /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/monastery.png"
              alt=""
            /><nuxt-link to="/building/Monastery">修道院</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/university.png"
              alt=""
            /><nuxt-link to="/building/University">學院</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/siege_workshop.png"
              alt=""
            /><nuxt-link to="/building/Siege_Workshop">攻城器製造所</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/castle.png"
              alt=""
            /><nuxt-link to="/building/Castle">城堡</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/stone_wall.png"
              alt=""
            /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/tower.png"
              alt=""
            /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/dock.png"
              alt=""
            /><nuxt-link to="/building/Harbor">海港</nuxt-link>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>
          <nuxt-link to="/techs/age/Imperial_Age"
            ><img
              src="~assets/imperial_age.png"
              style="bottom: 3px; position: relative;"
              width="30"
              alt=""
            />帝王時代</nuxt-link
          >
        </h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/tower.png"
              alt=""
            /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/wonder.png"
              alt=""
            /><nuxt-link to="/building/Wonder">世界奇觀</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/bombard_tower.png"
              alt=""
            /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/feitoria.png"
              alt=""
            /><nuxt-link to="/building/Feitoriaicon_Feitoria"
              >港灣大商站</nuxt-link
            >
          </li>
        </ul>
      </div>
    </div>
    <hr />
  </div>
</template>
<script>
export default {
  head() {
    return {
      title: '建築 - Aoetw'
    }
  },
  layout: '',
  components: {}
}
</script>
<style></style>
