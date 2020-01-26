<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>船艦裝甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<stong>船艦裝甲</stong>的。而關於船隻兵種請參見<nuxt-link
              to="/units/Naval_Vessels"
              >海軍單位</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <stong>船艦裝甲</stong>是一個<nuxt-link to="/armor"
              >防禦裝甲</nuxt-link
            >類別，所有在這個系列的兵種都會被剋船艦裝甲的兵種有額外的傷害。
          </p>
        </div>
        <h3>海軍單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是<nuxt-link to="/units/Naval_Vessels"
            >海軍單位</nuxt-link
          >
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/FishingShipIcon.png"
                alt=""
              /><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/TransportShipIcon.png"
                alt=""
              /><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/TradeCogIcon.png" alt="" /><nuxt-link
                to="/units/Trade_Cog"
                >貿易商旅</nuxt-link
              >
            </li>
            <li>
              <img class="gg" src="~assets/Galley.png" alt="" /><nuxt-link
                to="/units/Galley"
                >戰船</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/WarGalley.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>→
              <img class="gg" src="~assets/GalleonAoE2.png" alt="" /><nuxt-link
                to="/units/Galleon"
                >重型弩砲戰船</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/FireGalleyIcon.png"
                alt=""
              /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>(6)→
              <img
                class="gg"
                src="~assets/FireShipIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>(6)→
              <img
                class="gg"
                src="~assets/FastFireShipIcon.png"
                alt=""
              /><nuxt-link to="/units/Fast_Fire_Ship">快速火戰船</nuxt-link>(9)
            </li>
            <li>
              <img class="gg" src="~assets/DemoRaftIcon.png" alt="" /><nuxt-link
                to="/units/Demolition_Raft"
                >自爆筏</nuxt-link
              >(1)→
              <img
                class="gg"
                src="~assets/DemoShipIcon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>(3)→
              <img
                class="gg"
                src="~assets/HeavyDemoShipIcon.png"
                alt=""
              /><nuxt-link to="/units/Heavy_Demolition_Ship"
                >重型神風船</nuxt-link
              >5()
            </li>
            <li>
              <img src="~assets/CannonGalleonIcon.png" alt="" /><nuxt-link
                to="/units/Cannon_Galleon"
                >火砲戰船</nuxt-link
              >→ <img src="~assets/CannonGalleonIcon.png" alt="" /><nuxt-link
                to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >
            </li>
            <li>
              <img src="~assets/LongboatIcon.png" alt="" /><nuxt-link
                to="/units/Longboat"
                >維京大戰船</nuxt-link
              >→ <img src="~assets/LongboatIcon.png" alt="" /><nuxt-link
                to="/units/Longboat"
                >精銳維京大戰船</nuxt-link
              >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
            </li>
            <li>
              <img src="~assets/TurtleShipIcon.png" alt="" /><nuxt-link
                to="/units/Turtle_Ship"
                >龜甲船</nuxt-link
              >(8)→ <img src="~assets/TurtleShipIcon.png" alt="" /><nuxt-link
                to="/units/Turtle_Ship"
                >精銳龜甲船</nuxt-link
              >(11)(<nuxt-link to="/civs/Koreans">韓國</nuxt-link>限定)
            </li>
            <li>
              <img src="~assets/CaravelIcon.png" alt="" /><nuxt-link
                to="/units/Caravel"
                >卡拉維爾戰船</nuxt-link
              >→ <img src="~assets/CaravelIcon.png" alt="" /><nuxt-link
                to="/units/Caravel"
                >精銳卡拉維爾戰船</nuxt-link
              >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>剋船艦單位的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對船艦單位的額外傷害，按照殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
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
                      src="~assets/BombardCannonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+17攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+16攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GalleonAoE2.png"
                      alt=""
                    /><nuxt-link to="/units/Galleon">重型弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img src="~assets/LongboatIcon.png" alt="" /><nuxt-link
                      to="/units/Longboat"
                      >精銳維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/tower.png"
                      alt=""
                    /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SpearmanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyCamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >(後者<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/WarGalley.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongboatIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Longboat">維京大戰船</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
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
                      src="~assets/dock.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/building/Harbor">海港</nuxt-link
                    >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/Galley.png" alt="" /><nuxt-link
                      to="/units/Galley"
                      >戰船</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Ballistaelephanticon.png"
                      alt=""
                    /><nuxt-link to="/units/Ballista_Elephant"
                      >精銳弩砲象</nuxt-link
                    >(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Caravel">精銳卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/tower.png"
                      alt=""
                    /><nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CaravelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Caravel">卡拉維爾戰船</nuxt-link
                    >(<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CamelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><nuxt-link to="/units/Genoese_Crossbowman"
                      >精銳熱那亞弩手</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><nuxt-link to="/units/Genoese_Crossbowman"
                      >熱那亞弩手</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FastFireShipIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Fast_Fire_Ship"
                      >快速火戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/FireGalleyIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/FireShipIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
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
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>科技</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <img src="~assets/heated_shot.png" width="22" alt="" /><nuxt-link
                to="/techs/Heated_Shot"
                >預熱射擊</nuxt-link
              >
              <div style="margin:12px 0px;"><strong>+13攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/tower.png"
                    alt=""
                  /><nuxt-link to="/building/Keep">大型箭塔</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/tower.png"
                    alt=""
                  /><nuxt-link to="/building/Guard_Tower">防禦箭塔</nuxt-link>
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/tower.png"
                    alt=""
                  /><nuxt-link to="/building/Watch_Tower">瞭望箭塔</nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/castle.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/building/Castle">城堡</nuxt-link>
                </li>
                <li>
                  <img
                    class="gg"
                    src="~assets/dock.png"
                    width="22"
                    alt=""
                  /><nuxt-link to="/building/Harbor">海港</nuxt-link>(<nuxt-link
                    to="/civs/Malay"
                    >馬來</nuxt-link
                  >限定)
                </li>
              </ul>
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
