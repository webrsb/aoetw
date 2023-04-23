<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>射手系</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-12">
        <div class="spw">
          <em
            >這篇文章是將有關於<strong>射手系裝甲</strong>。而關於遠距離這個單位請參見<nuxt-link
              to="/units/Archer_Units"
              >遠距離單位</nuxt-link
            ></em
          >
        </div>
      </div>
      <div class="col-md-12">
        <div class="n1">
          <p>
            <b>射手系</b>是一個<nuxt-link to="/armor">防禦裝甲</nuxt-link
            >類別，所有在這個系列的兵種都會被剋射手系的兵種有額外的傷害。
          </p>
        </div>
        <h3>射手系單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          下列的單位都是射手系單位
          <ul>
            <li>
              <img class="gg" src="~assets/ArcherIcon.png" alt="" /><nuxt-link
                to="/units/Archer"
                >弓兵</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/CrossbowmanIcon.png"
                alt=""
              /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>→
              <img class="gg" src="~assets/ArbalestIcon.png" alt="" /><nuxt-link
                to="/units/Arbalester"
                >強弩兵</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/SkirmisherIcon.png"
                alt=""
              /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/EliteSkirmisherIcon.png"
                alt=""
              /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/Imperialskirmishericon.png"
                alt=""
              /><nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link
              >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>及其同盟限定)
            </li>
            <li>
              <img
                class="gg"
                src="~assets/CavalryArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/HeavyCavArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >
            </li>
            <li>
              <img
                class="gg"
                src="~assets/HandCannoneerIcon.png"
                alt=""
              /><nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link>
            </li>
            <li>
              <img class="gg" src="~assets/Slinger_Icon.png" alt="" /><nuxt-link
                to="/units/Slinger"
                >投石手</nuxt-link
              >
              (<nuxt-link to="/civs/Incas">印加</nuxt-link>限定)
            </li>
            <li>
              <img class="gg" src="~assets/GenitourIcon.png" alt="" /><nuxt-link
                to="/units/Genitour"
                >標槍騎兵</nuxt-link
              >→
              <img
                class="gg"
                src="~assets/GenitourIcon.png"
                alt=""
              />精銳<nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
              >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>及其同盟限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                width="22"
                src="~assets/LongbowmanIcon.png"
                alt=""
              /><nuxt-link to="/units/Longbowman">長弓兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                width="22"
                src="~assets/LongbowmanIcon.png"
                alt=""
              />精銳<nuxt-link to="/units/Longbowman">長弓兵</nuxt-link
              >(<nuxt-link to="/civs/Britons">不列顛</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                width="22"
                src="~assets/MangudaiIcon.png"
                alt=""
              /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                width="22"
                src="~assets/MangudaiIcon.png"
                alt=""
              />精銳<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
              >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ChuKoNuIcon.png"
                alt=""
              /><nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ChuKoNuIcon.png"
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
              /><nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/Saracenmamluk_icon.png"
                alt=""
              />精銳<nuxt-link to="/units/Mameluke">阿拉伯奴隸兵</nuxt-link
              >(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/JanissaryIcon.png"
                alt=""
              /><nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/JanissaryIcon.png"
                alt=""
              />精銳<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link
              >(<nuxt-link to="/civs/Turks">土耳其</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/WarWagonIcon.png"
                alt=""
              /><nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/WarWagonIcon.png"
                alt=""
              />精銳<nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link
              >(<nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/PlumedArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/PlumedArcherIcon.png"
                alt=""
              />精銳<nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
              >(<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ConquistadorIcon.png"
                alt=""
              /><nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ConquistadorIcon.png"
                alt=""
              /><nuxt-link to="/units/Conquistador">精銳征服者</nuxt-link
              >(<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>限定)
            </li>
            <li>
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ElephantArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/ElephantArcherIcon.png"
                alt=""
              />精銳<nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link
              >(<nuxt-link to="/civs/Indians">印度</nuxt-link>限定)
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
                src="~assets/CamelArcherIcon.png"
                alt=""
              /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>→
              <img
                class="gg"
                style="margin: 2px;"
                src="~assets/CamelArcherIcon.png"
                alt=""
              />精銳<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link
              >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>限定)
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
            <li>
              <img class="gg" src="~assets/Kipchakicon.png" alt="" /><nuxt-link
                to="/units/Kipchak"
                >欽察</nuxt-link
              >→
              <img class="gg" src="~assets/Kipchakicon.png" alt="" /><nuxt-link
                to="/units/Kipchak"
                >精銳欽察</nuxt-link
              >(<nuxt-link to="/civs/Cumans">庫曼</nuxt-link
              >及其當庫曼研發<nuxt-link to="/civs/Cuman_Mercenaries"
                >庫曼傭兵</nuxt-link
              >後同盟限定)
            </li>
          </ul>
        </div>
        <h3>剋射手系的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對射手系的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+15攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Elite_cannon_galleonicon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">精銳哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/HuskarlIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
                    >(<nuxt-link to="/civs/Goths">哥德</nuxt-link>限定)
                  </li>
                </ul>

                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">精銳標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Imperialskirmishericon.png"
                      alt=""
                    /><nuxt-link to="/units/Imperial_Skirmisher"
                      >帝王戰矛兵</nuxt-link
                    >(<nuxt-link to="/civs/Vietnamese">越南</nuxt-link
                    >和同盟限定)
                  </li>
                </ul>
              </div>
              <div class="col-md-4">
                <div style="margin:12px 0px;"><strong>+4攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteSkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Skirmisher">戰矛兵</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/GenitourIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>和同盟限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SkirmisherIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>團隊加分</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <nuxt-link to="/civs/Persians">波斯</nuxt-link>在<nuxt-link
              to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >裡，給予以下單位+2額外攻擊vs<nuxt-link to="/units/Archer_Units"
              >射手單位</nuxt-link
            >。
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+2攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/KnightIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Knight">騎士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/CavalierIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/PaladinIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Paladin">遊俠</nuxt-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3>
              <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
            </h3>
            <ul>
              <li>
                5.8改版前象弓騎兵的射手護甲是"-2"，所以當時攻擊加成+0的騎士系、拜占庭聖騎兵，答剌罕騎兵、貴族鐵騎和飛刀女獵手對象弓騎兵的攻擊是
                0-(-2)=2。5.8改版移除之後上述單位不再對象弓騎兵有額外攻擊加成。
              </li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                奴隸兵是唯一有射手護甲的遠程(傷害是近戰)騎兵單位。
              </li>
            </ul>
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
