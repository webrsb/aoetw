<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>護衛技術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>護衛技術</b>於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Barracks">軍營</nuxt-link
            >研發。研發後所有的<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >移動速度+10%。
          </p>
        </div>
        <h3>文明可研發與否</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><i class="fas fa-check" style="color: green;"></i
                  ><span style="margin-left: 2px;">可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Berbers"
                >柏柏</nuxt-link
              >、<nuxt-link to="/civs/Britons">不列顛</nuxt-link>、<nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >、<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >、<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈人</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Indians">印度</nuxt-link>、<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >、<nuxt-link to="/civs/Japanese">日本</nuxt-link>、<nuxt-link
                to="/civs/Koreans"
                >朝鮮</nuxt-link
              >、<nuxt-link to="/civs/Malay">馬來</nuxt-link>、<nuxt-link
                to="/civs/Malians"
                >馬利</nuxt-link
              >、<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >、<nuxt-link to="/civs/Persians">波斯</nuxt-link>、<nuxt-link
                to="/civs/Saracens"
                >薩拉森</nuxt-link
              >、<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >、<nuxt-link to="/civs/Teutons">條頓</nuxt-link>、<nuxt-link
                to="/civs/Turks"
                >土耳其</nuxt-link
              >、<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、<nuxt-link
                to="/civs/Vikings"
                >維京</nuxt-link
              >。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><i class="fas fa-times" style="color: #d9534f;"></i
                  ><span style="margin-left: 2px;">不可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >。
            </div>
          </div>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              讓所有<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >具有+10移動速度，卻只要100<nuxt-link to="/resource/Food"
                >食物</nuxt-link
              >，非常的實用，建議研發。
            </li>
            <li>
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >的步兵最怕<nuxt-link to="/units/Archer_Units">弓箭手</nuxt-link
              >，雖然大部分時間步兵不會直接面對<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >，但是這個<nuxt-link to="/techs">科技</nuxt-link
              >大大減少了步兵面對<nuxt-link to="/units/Crossbowman"
                >弩兵</nuxt-link
              >的死亡率，也增加了追擊敵方<nuxt-link to="/units/Villager"
                >村民</nuxt-link
              >的效率。
            </li>
            <li>
              儘管<nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >無法研發護衛技術，他們的步兵仍然是遊戲中最快的，因為塞爾特的<nuxt-link
                to="/civs"
                >文明</nuxt-link
              >加成提高了15%步兵移動速度
            </li>
          </ul>
        </div>
        <h3>受影響的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            下面列出所有受護衛技術影響的單位。
          </p>
        </div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td><nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link></td>
            <td>原本速度(格/秒)</td>
            <td>加成後速度(格/秒)</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/MilitiaIcon.png" /><nuxt-link
                to="/units/Militia"
                >民兵</nuxt-link
              >
            </td>
            <td class="tta2">0.9</td>
            <td class="tta3">0.99</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/ManAtArmsIcon.png" /><nuxt-link
                to="/units/Man-at-Arms"
                >裝甲步兵</nuxt-link
              >
            </td>
            <td class="tta2">0.9</td>
            <td class="tta3">0.99</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/LongswordsManIcon.png" /><nuxt-link
                to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >
            </td>
            <td class="tta2">0.9</td>
            <td class="tta3">0.99</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/2HandedswordsmanIcon.png"
              /><nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link>
            </td>
            <td class="tta2">0.9</td>
            <td class="tta3">0.99</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/ChampionIcon.png" /><nuxt-link
                to="/units/Champion"
                >劍兵勇士</nuxt-link
              >
            </td>
            <td class="tta2">0.9</td>
            <td class="tta3">0.99</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/SpearmanIcon.png" /><nuxt-link
                to="/units/Spearman"
                >長槍兵</nuxt-link
              >
            </td>
            <td class="tta2">1</td>
            <td class="tta3">1.1</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/PikemanIcon.png" /><nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >
            </td>
            <td class="tta2">1</td>
            <td class="tta3">1.1</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/HalberdierIcon.png" /><nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >
            </td>
            <td class="tta2">1</td>
            <td class="tta3">1.1</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/EagleScoutIcon.png" /><nuxt-link
                to="/units/Eagle_Scout"
                >鷹斥候</nuxt-link
              >
            </td>
            <td class="tta2">1.1</td>
            <td class="tta3">1.21</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/EagleWarriorIcon.png" /><nuxt-link
                to="/units/Eagle_Warrior"
                >鷹勇士</nuxt-link
              >
            </td>
            <td class="tta2">1.2</td>
            <td class="tta3">1.32</td>
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
            <td class="tta2">1.3</td>
            <td class="tta3">1.43</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/TAXEM.png" /><nuxt-link
                to="/units/Throwing_Axeman"
                >擲斧兵(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1，1</td>
            <td class="tta3">1.1，1.1</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/HuskarlIcon.png" /><nuxt-link
                to="/units/Huskarl"
                >哥德衛隊(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1.05，1.05</td>
            <td class="tta3">1.155，1.155</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/SMURI.png" /><nuxt-link
                to="/units/Samurai"
                >日本武士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1，1</td>
            <td class="tta3">1.1，1.1</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/Crusade_avatar.png" /><nuxt-link
                to="/units/Teutonic_Knight"
                >條頓武士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">0.7，0.7</td>
            <td class="tta3">0.77，0.77</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/VBRSK.png" /><nuxt-link
                to="/units/Berserk"
                >狂戰士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1.05，1.05</td>
            <td class="tta3">1.155，1.155</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/JaguarWarriorIcon.png" /><nuxt-link
                to="/units/Jaguar_Warrior"
                >豹勇士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1，1</td>
            <td class="tta3">1.1，1.1</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/Kamayuk_Icon.png" /><nuxt-link
                to="/units/Kamayuk"
                >槍隊長(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1，1</td>
            <td class="tta3">1.1，1.1</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/CondottieroIcon.png" /><nuxt-link
                to="/units/Condottiero"
                >傭兵</nuxt-link
              >
            </td>
            <td class="tta2">1.2</td>
            <td class="tta3">1.32</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/ShotelIcon.png" /><nuxt-link
                to="/units/Shotel_Warrior"
                >彎刀勇士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1.2，1.2</td>
            <td class="tta3">1.32，1.32</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/GbetoIcon.png" /><nuxt-link
                to="/units/Gbeto"
                >飛刀女獵手(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1.25，1.25</td>
            <td class="tta3">1.375，1.375</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/Karambitwarrioricon.png" /><nuxt-link
                to="/units/Karambit_Warrior"
                >爪刀勇士(精銳)</nuxt-link
              >
            </td>
            <td class="tta2">1.2，1.2</td>
            <td class="tta3">1.32，1.32</td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：科技在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>：<nuxt-link
                to="/techs/Perfusion"
                >井噴</nuxt-link
              >讓護衛技術研發快100%
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link
              >：研發護衛技術速度快20%。
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
            <li>護衛技術需要花費200食物。</li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >：不能研發護衛技術。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>護衛技術需要花費100食物。</li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link
              >：可以研發護衛技術了。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在成為<nuxt-link to="/units/Knight">騎士</nuxt-link
            >之前，年輕人會作為衛兵進行長期的學徒訓練。衛兵會被分配給一名騎士並參加武器和社交盛宴的訓練。作為回報，他們照顧騎士的裝備和馬匹，幫騎士打扮，陪伴騎士上陣作戰並守護著他們。所有的騎士小時候都是衛兵，但並非所有的衛兵都能成為騎士。沒有貴族出身，經濟支持或上級領主的支持的衛兵可能不成為騎士而試著過自己的生活。衛兵會與騎士並肩作戰，儘管他們的武器和盔甲配備較低階。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">護衛技術</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/squires.png" alt="" />
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
            <td class="unit3">文明</td>
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/barracks.png" alt="" /><nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">40秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">所有步兵移動速度+10%</td>
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
