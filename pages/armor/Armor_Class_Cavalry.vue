<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>騎兵系</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於騎兵系裝甲的。而關於騎兵這個兵種的請參見<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵單位</nuxt-link
            >或<nuxt-link to="/units/Cavalier">騎兵</nuxt-link>。</em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            騎兵系是一個防禦裝甲類別，所有在這個系列的兵種都會被剋騎兵系的兵種有額外的傷害。
          </p>
        </div>
        <h3>騎兵系單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是騎兵系單位
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/CavalryArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Cavalry_units/Archer">馬弓騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/HeavyCavArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Heavy_Cavalry_units/Archer"
                >精銳馬弓騎兵</nuxt-link
              >
            </li>
            <li>
              <img class="gg" src="~assets/GenitourIcon.jpg" alt="" /><nuxt-link
                to="/units/Genitour"
                >標槍騎兵</nuxt-link
              >→
              <img class="gg" src="~assets/GenitourIcon.jpg" alt="" /><nuxt-link
                to="/units/Genitour"
                >精銳標槍騎兵</nuxt-link
              >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ScoutCavalryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Scout_Cavalry">斥侯</nuxt-link>→
              <img
                class="gg"
                src="~assets/LightCavalryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>→
              <img class="gg" src="~assets/HussarIcon.jpg" alt="" /><nuxt-link
                to="/Hustree/sar"
                >匈牙利清騎兵</nuxt-link
              >
            </li>
            <li>
              <img class="gg" src="~assets/KnightIcon.jpg" alt="" /><nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >→
              <img class="gg" src="~assets/CavalierIcon.jpg" alt="" /><nuxt-link
                to="/units/Cavalier"
                >騎兵</nuxt-link
              >→
              <img class="gg" src="~assets/PaladinIcon.jpg" alt="" /><nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Battleelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Battle_Elephant">矛象伕</nuxt-link>→
              <img
                class="gg"
                src="~assets/Battleelephanticon.png"
                alt=""
              /><nuxt-link to="/units/Battle_Elephant">精銳矛象伕</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CataphractIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Cataphract">聖騎兵</nuxt-link>(12)→
              <img
                class="gg"
                src="~assets/CataphractIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Cataphract">精銳聖騎兵</nuxt-link
              >(16)(<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/MangudaiIcon.jpg"
                width="22"
                alt=""
              />
              <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>→
              <img
                class="gg"
                src="~assets/MangudaiIcon.jpg"
                width="22"
                alt=""
              />
              <nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
              >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/WarElephantIcon.jpg"
                width="22"
                alt=""
              />
              <nuxt-link to="/War_unitsanimal/Elephant">戰象</nuxt-link>→
              <img
                class="gg"
                src="~assets/WarElephantIcon.jpg"
                width="22"
                alt=""
              />
              <nuxt-link to="/War_unitsanimal/Elephant">精銳戰象</nuxt-link
              >(<nuxt-link to="/civs/Persians">波斯</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link>(11)→
              <img
                class="gg"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              /><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link
              >(11)(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/TarkanIcon.jpg" alt="" /><nuxt-link
                to="/units/Tarkan"
                >韃靼騎兵</nuxt-link
              >→
              <img class="gg" src="~assets/TarkanIcon.jpg" alt="" /><nuxt-link
                to="/units/Tarkan"
                >精銳韃靼騎兵</nuxt-link
              >(<nuxt-link to="/civs/Huns">匈奴</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/WarWagonIcon.jpg" alt="" /><nuxt-link
                to="/units/War_Wagon"
                >馬戰車</nuxt-link
              >→
              <img class="gg" src="~assets/WarWagonIcon.jpg" alt="" /><nuxt-link
                to="/units/War_Wagon"
                >精銳馬戰車</nuxt-link
              >(<nuxt-link to="/civs/Koreans">韓國</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ConquistadorIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Conquistador">征服者</nuxt-link>→
              <img
                class="gg"
                src="~assets/ConquistadorIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Conquistador">精銳征服者</nuxt-link
              >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/MissionaryIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Missionary">傳教士</nuxt-link>(<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/ElephantArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Elephant_units/Archer">象弓騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/ElephantArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/Elephant_units/Archer">精銳象弓騎兵</nuxt-link
              >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Magyar_Huszar_icon.jpg"
                width="22"
                alt=""
              />
              <nuxt-link to="/units/Magyar_Huszar">馬札爾驃騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/Magyar_Huszar_icon.jpg"
                width="22"
                alt=""
              />
              <nuxt-link to="/units/Magyar_Huszar">精銳馬札爾驃騎兵</nuxt-link
              >(<nuxt-link to="/civs/Magyars">馬札爾</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/New_Boyar.png" alt="" /><nuxt-link
                to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >→ <img class="gg" src="~assets/New_Boyar.png" alt="" /><nuxt-link
                to="/units/Boyar"
                >精銳貴族鐵騎</nuxt-link
              >(<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/Arambaiicon.png" alt="" /><nuxt-link
                to="/units/Arambai"
                >飛鏢騎兵</nuxt-link
              >→
              <img class="gg" src="~assets/Arambaiicon.png" alt="" /><nuxt-link
                to="/units/Arambai"
                >精銳飛鏢騎兵</nuxt-link
              >(<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/Ballista_unitsanimal/Elephant">弩炮象</nuxt-link
              >(-2)→
              <img
                class="gg"
                src="~assets/Ballistaelephanticon.png"
                alt=""
              /><nuxt-link to="/Ballista_unitsanimal/Elephant"
                >精銳弩炮象</nuxt-link
              >(-2)(<nuxt-link to="/civs/Khmer">高棉</nuxt-link>限定)
            </li>
          </ul>
        </div>
        <h3>剋騎兵系的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對騎兵系的額外傷害，按照傷殺力排列。這裡也列出攻擊加成0的單位是因為矛象伕的騎兵護甲是-2的關係，0-(-2)=2大於0還是會有攻擊加成。
          <div class="n1">
            <div class="col-md-12">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+32攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HalberdierIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Halberdier">戟兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+22攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PikemanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+18攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HeavyCamelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/Heavy_units/Camel">重裝駱駝騎兵</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/ImperialCamelIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/Imperial_units/Camel"
                      >帝王駱駝騎兵</nuxt-link
                    >(帝王駱駝騎兵是<nuxt-link to="/civs/Indians"
                      >印度</nuxt-link
                    >限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SpearmanIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>
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
                    />
                    <nuxt-link to="/Elite_units/Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Saracenmamluk_icon.png"
                      alt=""
                    /><nuxt-link to="/units/Mameluke">精銳奴隸兵</nuxt-link
                    >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Kamayuk_Icon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Kamayuk">精銳槍隊長</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+9攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CamelIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Saracenmamluk_icon.png"
                      alt=""
                    /><nuxt-link to="/units/Mameluke">奴隸兵</nuxt-link
                    >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Kamayuk_Icon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Kamayuk">槍隊長</nuxt-link
                    >(<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+7攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><nuxt-link to="/Genoese_units/Crossbowman"
                      >精銳熱那亞弩手</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/New_Genoese_Crossbowman.png"
                      alt=""
                    /><nuxt-link to="/Genoese_units/Crossbowman"
                      >熱那亞弩手</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteEagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/Elite_units/Eagle_Warrior"
                      >精銳鷹勇士</nuxt-link
                    >
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.jpg"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+0攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/MilitiaIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Militia">民兵</nuxt-link>→
                    <img
                      class="gg"
                      style="margin: 2px;"
                      src="~assets/ManAtArmsIcon.jpg"
                      width="22"
                      alt=""
                    />
                    <nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/LongswordsManIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Long_Swordsman">長劍兵</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/2HandedswordsmanIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Two-Handed_Swordsman"
                      >雙手劍兵</nuxt-link
                    >→
                    <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
                    <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
                  </li>
                  <li>
                    <img class="gg" src="~assets/EagleScoutIcon.jpg" alt="" />
                    <nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CondottieroNewIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                    >(<nuxt-link to="/civs/Italians">義大利</nuxt-link
                    >和同盟限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/ChuKoNuIcon.jpg" alt="" />
                    <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
                    <img class="gg" src="~assets/ChuKoNuIcon.jpg" alt="" />
                    <nuxt-link to="/units/Chu_Ko_Nu">精銳連弩兵</nuxt-link
                    >(<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定)
                  </li>
                  <li>
                    <img class="gg" src="~assets/VBRSK.jpg" alt="" />
                    <nuxt-link to="/units/Berserk">狂戰士</nuxt-link>→
                    <img class="gg" src="~assets/VBRSK.jpg" alt="" />
                    <nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link
                    >(<nuxt-link to="/civs/Vikings">維京</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/JaguarWarriorIcon.jpg"
                      alt=""
                    />
                    <nuxt-link to="/units/Jaguar_Warrior">精銳豹勇士</nuxt-link
                    >(<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>技術</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <img
              class="gg"
              src="~assets/CastleAgeUnique.png"
              width="22"
              alt=""
            />
            <nuxt-link to="/techs/Chieftains">酋長</nuxt-link>
            <div width="22" style="margin:12px 0px;">
              <strong>+5攻擊</strong>(<nuxt-link to="/civs/Vikings"
                >維京</nuxt-link
              >限定)
            </div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/MilitiaIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Militia">民兵</nuxt-link>→
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
                <nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
                >→
                <img class="gg" src="~assets/ChampionIcon.jpg" alt="" />
                <nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/SpearmanIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>→
                <img class="gg" src="~assets/PikemanIcon.jpg" alt="" />
                <nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>
              </li>
              <li>
                <img class="gg" src="~assets/VBRSK.jpg" alt="" /><nuxt-link
                  to="/units/Berserk"
                  >狂戰士</nuxt-link
                >→ <img class="gg" src="~assets/VBRSK.jpg" alt="" />
                <nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link>(<nuxt-link
                  to="/civs/Vikings"
                  >維京</nuxt-link
                >限定)
              </li>
              <li>
                <img class="gg" src="~assets/CondottieroNewIcon.jpg" alt="" />
                <nuxt-link to="/units/Condottiero">傭兵</nuxt-link
                >(如果和<nuxt-link to="/civs/Italians">義大利</nuxt-link
                >同盟的話)
              </li>
            </ul>
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
