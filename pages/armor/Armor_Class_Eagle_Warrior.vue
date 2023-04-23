<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>鷹勇士系</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>鷹勇士系裝甲</strong>的。而關於鷹勇士這個兵種的請參見<nuxt-link
              to="/units/Eagle_Warrior"
              >鷹勇士</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>鷹勇士系</b>是一個<nuxt-link to="/armor">防禦裝甲</nuxt-link
            >類別，所有在這個系列的兵種都會被剋鷹勇士系的兵種有額外的傷害。
          </p>
        </div>
        <h3>系單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是鷹勇士系單位
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
              /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>→
              <img
                class="gg"
                src="~assets/EliteEagleWarriorIcon.png"
                alt=""
              /><nuxt-link to="/units/Elite_Eagle_Warrior"
                >精銳鷹勇士</nuxt-link
              >
            </li>
          </ul>
        </div>
        <h3>剋鷹勇士的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對鷹勇士系的額外傷害，按造殺傷力排列。一般來說，大多數的<nuxt-link
            to="/armor/Armor_Class_Infantry"
            >步兵單位</nuxt-link
          >都有加成。
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/2HandedswordsmanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Two-Handed_Swordsman"
                      >雙手劍兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ChampionIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/LongswordsManIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Crusade_avatar.png"
                      alt=""
                    /><nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Crusade_avatar.png"
                      alt=""
                    /><nuxt-link to="/units/Teutonic_Knight"
                      >精銳條頓武士</nuxt-link
                    >(<nuxt-link to="/civs/Teutons">條頓</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/WBRSK.png" alt="" /><nuxt-link
                      to="/units/Woad_Raider"
                      >精銳菘藍武士</nuxt-link
                    >(<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >精銳日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                      to="/units/Berserk"
                      >精銳狂戰士</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ManAtArmsIcon.png"
                      alt=""
                      width="22"
                    /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/WBRSK.png" alt="" /><nuxt-link
                      to="/units/Woad_Raider"
                      >菘藍武士</nuxt-link
                    >(<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/SMURI.png" alt="" /><nuxt-link
                      to="/units/Samurai"
                      >日本武士</nuxt-link
                    >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/VBRSK.png" alt="" /><nuxt-link
                      to="/units/Berserk"
                      >狂戰士</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/TAXEM.png" alt="" /><nuxt-link
                      to="/units/Throwing_Axeman"
                      >精銳擲斧兵</nuxt-link
                    >(<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Karambitwarrioricon.png"
                      alt=""
                    /><nuxt-link to="/units/Karambit_Warrior"
                      >爪刀勇士</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Karambitwarrioricon.png"
                      alt=""
                    /><nuxt-link to="/units/Karambit_Warrior"
                      >精銳爪刀勇士</nuxt-link
                    >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/ShotelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ShotelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Shotel_Warrior"
                      >精銳彎刀勇士</nuxt-link
                    >(<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>限定)
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
                    /><nuxt-link to="/units/Jaguar_Warrior"
                      >精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SpearmanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/TAXEM.png" alt="" /><nuxt-link
                      to="/units/Throwing_Axeman"
                      >擲斧兵</nuxt-link
                    >(<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GbetoIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/GbetoIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Gbeto">精銳飛刀女獵手</nuxt-link
                    >(<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定)
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
