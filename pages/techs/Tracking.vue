<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>追縱技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            追縱技術於<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >在<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >研發。研發後所有的
            <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>視野+2。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>讓所有步兵具有+2視野，卻只要50食物，非常的實用，建議研發。</li>
            <li>
              打裝甲步兵快攻的玩家一定要研發，+2視野攸關著你能不能抓到對方落單的村民，且能及早迴避敵人的裝甲步兵。
            </li>
          </ul>
        </div>
        <h3>受影響的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>下面列出所有受追蹤技術影響的單位。</p>
        </div>
        <table class="table-bordered " width="100%">
          <tr class="tta">
            <td>步兵單位</td>
            <td>原本視野</td>
            <td>加成後視野</td>
            <td>可觀測面積加成百分比</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/MilitiaIcon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/ManAtArmsIcon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/LongswordsManIcon.jpg" /><nuxt-link
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
                src="~assets/2HandedswordsmanIcon.jpg"
              /><nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>
            </td>
            <td class="tta2">5</td>
            <td class="tta3">7</td>
            <td class="tta4">+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/ChampionIcon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/SpearmanIcon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/PikemanIcon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/HalberdierIcon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/EagleScoutIcon.jpg" /><nuxt-link
                to="/units/Eagle_Scout"
                >鷹斥侯</nuxt-link
              >
            </td>
            <td class="tta2">6</td>
            <td class="tta3">8</td>
            <td class="tta4">+77%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/EagleWarriorIcon.jpg" /><nuxt-link
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
                src="~assets/EliteEagleWarriorIcon.jpg"
              /><nuxt-link to="/Elite_units/Eagle_Warrior"
                >精銳鷹勇士</nuxt-link
              >
            </td>
            <td class="tta2">6</td>
            <td class="tta3">8</td>
            <td class="tta4">+77%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/WBRSK.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/TAXEM.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/HuskarlIcon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/SMURI.jpg" /><nuxt-link
                to="/units/Samurai"
                >日本武士(精銳</nuxt-link
              >
            </td>
            <td class="tta2">4，5</td>
            <td class="tta3">6，7</td>
            <td class="tta4">+125%，+177%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/Crusade_avatar.png" /><nuxt-link
                to="/Teutonic_units/Knight"
                >條頓武士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，5</td>
            <td class="tta3">5，7</td>
            <td class="tta4">+177%，+96%</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/VBRSK.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/JaguarWarriorIcon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/Kamayuk_Icon.jpg" /><nuxt-link
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
              <img class="gg" src="~assets/CondottieroNewIcon.jpg" /><nuxt-link
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
                to="/units/Karambit_Warrior"
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
                to="/units/Shotel_Warrior"
                >爪刀勇士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">3，3</td>
            <td class="tta3">5，5</td>
            <td class="tta4">+177%，+177%</td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：科技在封建/城堡/帝王時代各便宜10%/15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：<nuxt-link
                to="/techs/Perfusion"
                >灌注士氣</nuxt-link
              >讓追蹤技術研發快100%
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>：追蹤技術免費。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：研發追蹤技術速度快20%。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>追蹤技術需要花費75肉。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>追蹤技術需要花費50肉。</li>
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
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle"><nuxt-link to="#">追蹤技術</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Tracking.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2">
                <nuxt-link to="#">科技介紹</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">全部文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Barracks-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Barracks">軍營</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">35秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">50</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#31b0d5;">
              <div class="unititle2"><nuxt-link to="#">影響</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">所有步兵視野+2</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'alltech',
  components: {}
}
</script>
<style></style>
