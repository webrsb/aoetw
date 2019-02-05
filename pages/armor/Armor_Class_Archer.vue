<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>射手系</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於射手系裝甲的。而關於遠距離這個單位請參見<nuxt-link
              to="/units/Archer_Units"
              >遠距離單位</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            射手系是一個防禦裝甲類別，所有在這個系列的兵種都會被剋射手系的兵種有額外的傷害。
          </p>
        </div>
        <h3>射手系單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是射手系單位
          <ul>
            <li>
              <img class="gg" src="~assets/ArcherIcon.jpg" alt="" />
              <nuxt-link to="/units/Archer">弓兵</nuxt-link>→
              <img class="gg" src="~assets/CrossbowmanIcon.jpg" alt="" />
              <nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
              <img class="gg" src="~assets/ArbalestIcon.jpg" alt="" />
              <nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/SkirmisherIcon.jpg" alt="" />
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>→
              <img class="gg" src="~assets/EliteSkirmisherIcon.jpg" alt="" />
              <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>→
              <img class="gg" src="~assets/Imperialskirmishericon.png" alt="" />
              <nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link>
              (<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>及其同盟限定)
            </li>
            <li>
              <img class="gg" src="~assets/CavalryArcherIcon.jpg" alt="" />
              <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
              <img class="gg" src="~assets/HeavyCavArcherIcon.jpg" alt="" />
              <nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >
            </li>
            <li>
              <img class="gg" src="~assets/HandCannoneerIcon.jpg" alt="" />
              <nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/Slinger_Icon.jpg" alt="" />
              <nuxt-link to="/units/Slinger">投石手</nuxt-link> (<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >限定)
            </li>
            <li>
              <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
              <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/GenitourIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>
              (<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>及其同盟限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                width="22"
                src="~assets/LongbowmanIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                width="22"
                src="~assets/LongbowmanIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Longbowman">長弓兵</nuxt-link
              >(<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                width="22"
                src="~assets/MangudaiIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                width="22"
                src="~assets/MangudaiIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
              >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ChuKoNuIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ChuKoNuIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link
              >(<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              />精銳<nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link
              >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/JanissaryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/JanissaryIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >(<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/WarWagonIcon.jpg"
                alt=""
              /><nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/WarWagonIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link
              >(<nuxt-link to="/civs/Koreans">韓國</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/PlumedArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/PlumedArcherIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
              >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ConquistadorIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Conquistador">征服者</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ConquistadorIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Conquistador">征服者</nuxt-link
              >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ElephantArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>(-2)→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ElephantArcherIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link
              >(-2)(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/New_Genoese_Crossbowman.png"
                alt=""
              /><nuxt-link to="/units/Genoese_Crossbowman">熱那亞弩手</nuxt-link
              >→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/New_Genoese_Crossbowman.png"
                alt=""
              />精銳<nuxt-link to="/units/Genoese_Crossbowman"
                >熱那亞弩手</nuxt-link
              >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/CamelArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/CamelArcherIcon.jpg"
                alt=""
              />精銳<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
              >(<nuxt-link to="/civs/Incas">柏柏</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Arambaiicon.png"
                alt=""
              /><nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Arambaiicon.png"
                alt=""
              />精銳<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link
              >(<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/RattanarcherIcon2.png"
                alt=""
              /><nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/RattanarcherIcon2.png"
                alt=""
              />精銳<nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
              >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>剋射手系的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對射手系的額外傷害，按造傷殺力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" />
                    <nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/HuskarlIcon.jpg" alt="" />
                    <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
                    <nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    />
                    <nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                    >和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/GenitourIcon.jpg" alt="" />
                    <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/SkirmisherIcon.jpg" alt="" />
                    <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+0攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/KnightIcon.jpg" alt="" />
                    <nuxt-link to="/units/Knight">騎士</nuxt-link>→
                    <img class="gg" src="~assets/CavalierIcon.jpg" alt="" />
                    <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                    <img class="gg" src="~assets/PaladinIcon.jpg" alt="" />
                    <nuxt-link to="/units/Paladin">遊俠</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/CataphractIcon.jpg" alt="" />
                    <nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>→
                    <img class="gg" src="~assets/CataphractIcon.jpg" alt="" />
                    <nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/TarkanIcon.jpg" alt="" />
                    <nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>→
                    <img class="gg" src="~assets/TarkanIcon.jpg" alt="" />
                    <nuxt-link to="/units/Tarkan">精銳韃靼騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Huns">匈奴</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/New_Boyar.png" alt="" />
                    <nuxt-link to="/units/Boyar">貴族鐵騎</nuxt-link>→
                    <img class="gg" src="~assets/New_Boyar.png" alt="" />
                    <nuxt-link to="/units/Boyar">精銳貴族鐵騎</nuxt-link
                    >(<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/GbetoIcon.png" alt="" />
                    <nuxt-link to="/units/Gbeto">飛刀女獵手</nuxt-link>→
                    <img class="gg" src="~assets/GbetoIcon.png" alt="" />
                    <nuxt-link to="/units/Gbeto">精銳飛刀女獵手</nuxt-link
                    >(<nuxt-link to="/civs/Malians">馬利</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>團隊加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <nuxt-link to="/civs/Persians">波斯</nuxt-link
            >在團隊加成裡，給予以下單位+2額外攻擊vs<nuxt-link
              to="/units/Archer_Units"
              >射手單位</nuxt-link
            >。
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img class="gg" src="~assets/KnightIcon.jpg" alt="" />
                    <nuxt-link to="/units/Knight">騎士</nuxt-link>→
                    <img class="gg" src="~assets/CavalierIcon.jpg" alt="" />
                    <nuxt-link to="/units/Cavalier">騎兵</nuxt-link>→
                    <img class="gg" src="~assets/PaladinIcon.jpg" alt="" />
                    <nuxt-link to="/units/Paladin">遊俠</nuxt-link>
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
