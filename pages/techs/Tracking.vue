<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>追蹤技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>追蹤技術</b>於<nuxt-link to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >自動擁有。所有的<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            ><nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>+2。
          </p>
          <p>
            此科技原先在<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >中研發，在《<nuxt-link to="/games/de">世紀帝國II：決定版</nuxt-link
            >》中移除了追蹤技術，改為所有文明只要升級到封建時代就會自動擁有該技術效果。
          </p>
        </div>
        <h3>受影響的單位</h3>
        <div class="hrn1"></div>
        <div class="n1"><p>下面列出所有受追蹤技術影響的單位。</p></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td><nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link></td>
            <td>原本視野</td>
            <td>加成後視野</td>
            <td>可觀測面積加成百分比</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/MilitiaIcon.png" /><nuxt-link
                to="/units/Militia"
                >民兵</nuxt-link
              >
            </td>
            <td class="tta2">4</td>
            <td class="tta3">6</td>
            <td class="tta4">+125%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/ManAtArmsIcon.png" /><nuxt-link
                to="/units/Man-at-Arms"
                >裝甲步兵</nuxt-link
              >
            </td>
            <td class="tta2">4</td>
            <td class="tta3">6</td>
            <td class="tta4">+125%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/LongswordsManIcon.png" /><nuxt-link
                to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >
            </td>
            <td class="tta2">4</td>
            <td class="tta3">6</td>
            <td class="tta4">+125%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/2HandedswordsmanIcon.png"
              /><nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>
            </td>
            <td class="tta2">5</td>
            <td class="tta3">7</td>
            <td class="tta4">+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/ChampionIcon.png" /><nuxt-link
                to="/units/Champion"
                >劍兵勇士</nuxt-link
              >
            </td>
            <td class="tta2">5</td>
            <td class="tta3">7</td>
            <td class="tta4">+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/SpearmanIcon.png" /><nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >
            </td>
            <td class="tta2">4</td>
            <td class="tta3">6</td>
            <td class="tta4">+125%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/PikemanIcon.png" /><nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >
            </td>
            <td class="tta2">4</td>
            <td class="tta3">6</td>
            <td class="tta4">+125%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/HalberdierIcon.png" /><nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >
            </td>
            <td class="tta2">4</td>
            <td class="tta3">6</td>
            <td class="tta4">+125%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/EagleScoutIcon.png" /><nuxt-link
                to="/units/Eagle_Scout"
                >鷹斥候</nuxt-link
              >
            </td>
            <td class="tta2">6</td>
            <td class="tta3">8</td>
            <td class="tta4">+77%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/EagleWarriorIcon.png" /><nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >
            </td>
            <td class="tta2">6</td>
            <td class="tta3">8</td>
            <td class="tta4">+77%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/EliteEagleWarriorIcon.png"
              /><nuxt-link to="/units/Elite_Eagle_Warrior"
                >精銳鷹勇士</nuxt-link
              >
            </td>
            <td class="tta2">6</td>
            <td class="tta3">8</td>
            <td class="tta4">+77%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/WBRSK.png" /><nuxt-link
                to="/units/Woad_Raider"
                >菘藍武士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，5</td>
            <td class="tta3">5，7</td>
            <td class="tta4">+177%，+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/TAXEM.png" /><nuxt-link
                to="/units/Throwing_Axeman"
                >擲斧兵(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">5，6</td>
            <td class="tta3">7，8</td>
            <td class="tta4">+96%，+77%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/HuskarlIcon.png" /><nuxt-link
                to="/units/Huskarl"
                >哥德衛隊(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，5</td>
            <td class="tta3">5，7</td>
            <td class="tta4">+177%，+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/SMURI.png" /><nuxt-link
                to="/units/Samurai"
                >日本武士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">4，5</td>
            <td class="tta3">6，7</td>
            <td class="tta4">+125%，+177%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/Crusade_avatar.png" /><nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，5</td>
            <td class="tta3">5，7</td>
            <td class="tta4">+177%，+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/VBRSK.png" /><nuxt-link
                to="/units/Berserk"
                >狂戰士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，5</td>
            <td class="tta3">5，7</td>
            <td class="tta4">+177%，+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/JaguarWarriorIcon.png" /><nuxt-link
                to="/units/Jaguar_Warrior"
                >豹勇士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，5</td>
            <td class="tta3">5，7</td>
            <td class="tta4">+177%，+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/Kamayuk_Icon.png" /><nuxt-link
                to="/units/Kamayuk"
                >槍隊長(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">4，5</td>
            <td class="tta3">6，7</td>
            <td class="tta4">+125%，+177%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/CondottieroIcon.png" /><nuxt-link
                to="/units/Condottiero"
                >傭兵</nuxt-link
              >
            </td>
            <td class="tta2">6</td>
            <td class="tta3">8</td>
            <td class="tta4">+77%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/ShotelIcon.png" /><nuxt-link
                to="/units/Shotel_Warrior"
                >彎刀勇士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，3</td>
            <td class="tta3">5，5</td>
            <td class="tta4">+177%，+177%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/GbetoIcon.png" /><nuxt-link
                to="/units/Gbeto"
                >飛刀女獵手(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">6，7</td>
            <td class="tta3">8，9</td>
            <td class="tta4">+77%，+65%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/Karambitwarrioricon.png" /><nuxt-link
                to="/units/Karambit_Warrior"
                >爪刀勇士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，3</td>
            <td class="tta3">5，5</td>
            <td class="tta4">+177%，+177%</td>
          </tr>
        </table>

        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>追蹤技術需要花費75食物。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>追蹤技術需要花費50食物。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>移除追蹤技術，改為各文明升級封建時代後自動擁有。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            隨著黑暗時代的消逝和野蠻人部族成為訓練有素的軍隊，軍事技術有了新的改善。新的軍隊為選舉和演習做好了充分的準備。這些改進的另一個好處是不容易出現意外和伏擊。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">追蹤技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/TrackingDE.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="/techs">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">全部文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td colspan="2" class="unit3">
              無。升級封建時代後自動擁有
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">所有步兵視野+2</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'alltech' })

export default {
  components: {}
}
</script>
<style></style>
