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
        <h3><nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link></h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            <nuxt-link to="/building/Town_Center"
              ><img
                class="gg"
                width="25px"
                src="~assets/Towncentericon.png"
                alt=""
              />城鎮中心</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/House"
              ><img
                class="gg"
                width="25px"
                src="~assets/Houseicon.png"
                alt=""
              />房屋</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Mill"
              ><img
                class="gg"
                width="25px"
                src="~assets/Millicon.png"
                alt=""
              />磨坊</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Farm"
              ><img
                class="gg"
                width="25px"
                src="~assets/Farmicon.png"
                alt=""
              />農田</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Lumber_Camp"
              ><img
                class="gg"
                width="25px"
                src="~assets/Lumbercampicon.png"
                alt=""
              />伐木場</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Mining_Camp"
              ><img
                class="gg"
                width="25px"
                src="~assets/Miningcampicon.png"
                alt=""
              />採礦營地</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Dock"
              ><img
                class="gg"
                width="25px"
                src="~assets/Dockicon.png"
                alt=""
              />碼頭</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Barracks"
              ><img
                class="gg"
                width="25px"
                src="~assets/Barracks-logo.jpg"
                alt=""
              />軍營</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Palisade_Wall"
              ><img
                class="gg"
                width="25px"
                src="~assets/Palisadewallicon.png"
                alt=""
              />木牆</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Palisade_Gate"
              ><img
                class="gg"
                width="25px"
                src="~assets/Palisadegateicon.png"
                alt=""
              />木門</nuxt-link
            >
          </li>
          <li>
            <nuxt-link to="/building/Outpost"
              ><img
                class="gg"
                width="25px"
                src="~assets/Outposticon.png"
                alt=""
              />哨站</nuxt-link
            >
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link></h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Marketicon.png"
              alt=""
            /><nuxt-link to="/building/Market">市集</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Blacksmithicon.png"
              alt=""
            /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Fishtrapicon.png"
              alt=""
            /><nuxt-link to="/building/Fish_Trap">漁網</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Archery-range-logo.jpg"
              alt=""
            /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Stableicon.png"
              alt=""
            /><nuxt-link to="/building/Stable">馬廄</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Stonewallicon.png"
              alt=""
            /><nuxt-link to="/building/Stone_Wall">石牆</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Gateicon.png"
              alt=""
            /><nuxt-link to="/building/Gate">城門</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Watchtowericon.png"
              alt=""
            /><nuxt-link to="/building/Watch_Tower">暸望箭塔</nuxt-link>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link></h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Towncentericon.png"
              alt=""
            /><nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Monasteryicon.png"
              alt=""
            /><nuxt-link to="/building/Monastery">修道院</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Universityicon.png"
              alt=""
            /><nuxt-link to="/building/University">學院</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Siegeworkshopicon.png"
              alt=""
            /><nuxt-link to="/building/Siege_Workshop">攻城器製造所</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Castleicon.png"
              alt=""
            /><nuxt-link to="/building/Castle">城堡</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Stonewallicon.png"
              alt=""
            /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Watchtowericon.png"
              alt=""
            /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Dockicon.png"
              alt=""
            /><nuxt-link to="/building/Harbor">海港</nuxt-link>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link></h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Watchtowericon.png"
              alt=""
            /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Wondericon.png"
              alt=""
            /><nuxt-link to="/building/Wonder">世界奇觀</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Bombardtowericon.png"
              alt=""
            /><nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>
          </li>
          <li>
            <img
              class="gg"
              width="25px"
              src="~assets/Feitoriaicon.png"
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
