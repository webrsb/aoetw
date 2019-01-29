<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>步兵系</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於步兵系裝甲的。而關於步兵這個兵種的請參見<nuxt-link
              to="/units/Infantry_Units"
              >步兵單位</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            步兵系是一個防禦裝甲類別，所有在這個系列的兵種都會被剋步兵系的兵種有額外的傷害。
          </p>
        </div>
        <h3>步兵系單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是步兵系單位
          <ul>
            <li>
              <img class="gg" src="~assets/MilitiaIcon.jpg" alt="" />
              <nuxt-link to="/units/Militia">民兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/ManAtArmsIcon.jpg"
                width="22"
                alt=""
              />
              <nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
              <img class="gg" src="~assets/LongswordsManIcon.jpg" alt="" />
              <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
              <img class="gg" src="~assets/2HandedswordsmanIcon.jpg" alt="" />
              <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>→
              <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
              <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/SpearmanIcon.jpg" alt="" />
              <nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
              <img class="gg" src="~assets/PikemanIcon.jpg" alt="" />
              <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>→
              <img class="gg" src="~assets/HalberdierIcon.jpg" alt="" />
              <nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/EagleScoutIcon.jpg" alt="" />
              <nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link>→
              <img class="gg" src="~assets/EagleWarriorIcon.jpg" alt="" />
              <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>→
              <img class="gg" src="~assets/EliteEagleWarriorIcon.jpg" alt="" />
              <nuxt-link to="/units/Elite_Eagle_Warrior">精銳鷹勇士</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CondottieroNewIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Condottiero">傭兵</nuxt-link>(<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >和同盟限定)
            </li>
            <li>
              <img class="gg" src="~assets/WBRSK.jpg" alt="" /><nuxt-link
                to="/units/Woad_Raider"
                >菘藍武士(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/TAXEM.jpg" alt="" /><nuxt-link
                to="/units/Throwing_Axeman"
                >擲斧兵(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" /><nuxt-link
                to="/units/Huskarl"
                >哥德衛隊(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/SMURI.jpg" alt="" /><nuxt-link
                to="/units/Samurai"
                >日本武士(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Japanese">日本</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Crusade_avatar.png"
                alt=""
              /><nuxt-link to="/Teutonic_units/Knight">條頓武士(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Teutons">條頓</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/VBRSK.jpg" alt="" /><nuxt-link
                to="/units/Berserk"
                >狂戰士(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/JaguarWarriorIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Jaguar_Warrior">豹勇士(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/Kamayuk_Icon.jpg" alt="" /><nuxt-link
                to="/units/Kamayuk"
                >槍隊長(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/GbetoIcon.png" alt="" /><nuxt-link
                to="/units/Gbeto"
                >飛刀女獵手(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/ShotelIcon.png" alt="" /><nuxt-link
                to="/units/Shotel_Warrior"
                >彎刀勇士(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Karambitwarrioricon.png"
                alt=""
              /><nuxt-link to="/units/Karambit_Warrior"
                >爪刀勇士(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Malay">馬來</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>剋步兵系的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對步兵系的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
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
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CataphractIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+11攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior"
                      >精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
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
                    /><nuxt-link to="/units/Slinger">投石手</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CataphractIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/Plumed_units/Archer"
                      >精銳羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+1攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PlumedArcherIcon.jpg"
                      alt=""
                    /><nuxt-link to="/Plumed_units/Archer">羽毛箭射手</nuxt-link
                    >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>技術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <img class="gg" src="~assets/Unique-tech.jpg" width="22" alt="" />
          <nuxt-link to="/techs/Parthian_Tactics">後勤學</nuxt-link>
          <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CataphractIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Cataphract">聖騎兵(精銳)</nuxt-link
              >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
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
