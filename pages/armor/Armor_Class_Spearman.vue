<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>槍兵類</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>槍兵類裝甲</strong>的。而關於槍兵這個兵種的請參見<nuxt-link
              to="/units/Spearman"
              >長槍兵</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <strong>槍兵類裝甲</strong>是一個<nuxt-link to="/armor"
              >防禦裝甲</nuxt-link
            >類別，所有在這個系列的兵種都會被剋槍兵類的兵種有額外的傷害。
          </p>
        </div>
        <h3>槍兵類單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是槍兵類單位
          <ul>
            <li>
              <img class="gg" src="~assets/SpearmanIcon.jpg" alt="" /><nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >→
              <img class="gg" src="~assets/PikemanIcon.jpg" alt="" /><nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/HalberdierIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
            </li>
          </ul>
        </div>
        <h3>剋槍兵類的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對槍兵類的額外傷害，按造殺傷力排列。一般來說，大多數的<nuxt-link
            to="/armor/Armor_Class_Archer"
            >射手單位</nuxt-link
          >都有加成。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/ArcherIcon.jpg" alt="" /><nuxt-link
                  to="/units/Archer"
                  >弓兵</nuxt-link
                >→
                <img
                  class="gg"
                  src="~assets/CrossbowmanIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/ArbalestIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/SkirmisherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/EliteSkirmisherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/Imperialskirmishericon.png"
                  alt=""
                /><nuxt-link to="/units/Imperial_Skirmisher"
                  >帝王戰矛兵</nuxt-link
                >(<nuxt-link to="/units/Imperial_Skirmisher"
                  >帝王戰矛兵</nuxt-link
                >是<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                >及其同盟限定)
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/CavalryArcherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/HeavyCavArcherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                  >重裝馬弓騎兵</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/LongbowmanIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/LongbowmanIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Longbowman">精銳長弓兵</nuxt-link
                >(<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ChuKoNuIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/ChuKoNuIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Chu_Ko_Nu"
                  ><nuxt-link to="/units/Chu_Ko_Nu">精銳連弩兵</nuxt-link
                  >(<nuxt-link to="/civs/Chinese">中國</nuxt-link
                  >限定)</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/PlumedArcherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/PlumedArcherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Plumed_Archer"
                  ><nuxt-link to="/units/Plumed_Archer"
                    >精銳羽毛箭射手</nuxt-link
                  >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link
                  >限定)</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/RattanarcherIcon2.png"
                  alt=""
                /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/RattanarcherIcon2.png"
                  alt=""
                /><nuxt-link to="/units/Rattan_Archer">精銳藤甲弓兵</nuxt-link
                >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Castleicon.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/building/Castle">城堡</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Watchtowericon.png"
                  alt=""
                /><nuxt-link to="/building/Watch_Tower">箭塔系列</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
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
                  src="~assets/Slingericon.png"
                  alt=""
                /><nuxt-link to="/units/Slinger">投石手</nuxt-link> (<nuxt-link
                  to="/civs/Incas"
                  >印加</nuxt-link
                >限定)
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/MangudaiIcon.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>→
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
                  src="~assets/CamelArcherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>→
                <img
                  class="gg"
                  src="~assets/CamelArcherIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Camel_Archer">精銳駱駝弓騎兵</nuxt-link
                >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
              </li>
            </ul>
            <h3>技術</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <img
                class="gg"
                src="~assets/Parthian-Tactics.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Parthian_Tactics">帕提亞戰術</nuxt-link>
              <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/CavalryArcherIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/HeavyCavArcherIcon.jpg"
                    alt=""
                  /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                    >重裝馬弓騎兵</nuxt-link
                  >
                </li>
              </ul>
              <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
              <ul>
                <li>
                  <img
                    class="gg"
                    src="~assets/MangudaiIcon.jpg"
                    width="22"
                    alt=""
                  /><nuxt-link to="/unit/units/Mangudai">蒙古突騎</nuxt-link>→
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
                    src="~assets/ElephantArcherIcon.jpg"
                    width="22"
                    alt=""
                  /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>→
                  <img
                    class="gg"
                    src="~assets/ElephantArcherIcon.jpg"
                    width="22"
                    alt=""
                  /><nuxt-link to="/units/Elephant_Archer"
                    >精銳象弓騎兵</nuxt-link
                  >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
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
