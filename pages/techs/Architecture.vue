<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>建築學</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>建築學</b>可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在<nuxt-link to="/building/University">學院</nuxt-link
            >研發。研發後所有<nuxt-link to="/building"></nuxt-link
            ><nuxt-link to="/building">建築</nuxt-link>(除了<nuxt-link
              to="/building/Stone_Wall"
              >石牆</nuxt-link
            >和<nuxt-link to="/building/Gate">城門</nuxt-link>外)都獲得+10%
            HP、+1<nuxt-link to="/armor">近防</nuxt-link>、+1<nuxt-link
              to="/armor"
              >遠防</nuxt-link
            >和+3建築護甲。
          </p>
          <p>
            建築護甲無法對所有對建築有額外加成的攻擊做減傷計算，它只能對<nuxt-link
              to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >、<nuxt-link to="/units/Naval_Vessels">船隻</nuxt-link>、<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >、<nuxt-link to="/units/Tarkan">韃靼騎兵</nuxt-link>、<nuxt-link
              to="/units/War_Elephant"
              >戰象</nuxt-link
            >和<nuxt-link to="/units/Camel">駱駝騎兵</nuxt-link
            >的攻擊有減傷效果；<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >則沒有減傷效果。
          </p>
          <p>
            若同時擁有建築學和<nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
            >的<nuxt-link to="/civs">文明</nuxt-link
            ><nuxt-link to="/building">建築物</nuxt-link>會得到總共+20%
            HP、+2近防、+2遠防和+6建築護甲。雖然<nuxt-link to="/civs/Byzantines"
              >拜占庭</nuxt-link
            >沒有以上兩種<nuxt-link to="/techs">科技</nuxt-link
            >，但他們的文明利益讓他們的建築物是遊戲中血最多但卻不是最堅固的。
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
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、<nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >、<nuxt-link to="/civs/Chinese">中國</nuxt-link>、<nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >、<nuxt-link to="/civs/Italians">義大利</nuxt-link>、<nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >、<nuxt-link to="/civs/Koreans">韓國</nuxt-link>、<nuxt-link
                to="/civs/Malians"
                >馬利</nuxt-link
              >、<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、<nuxt-link
                to="/civs/Persians"
                >波斯</nuxt-link
              >、<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>、<nuxt-link
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Berbers"
                >柏柏</nuxt-link
              >、<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
                to="/civs/Celts"
                >塞爾特</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈奴</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Indians">印度</nuxt-link>、<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >、<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、<nuxt-link
                to="/civs/Saracens"
                >薩拉森</nuxt-link
              >、<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、<nuxt-link
                to="/civs/Teutons"
                >條頓</nuxt-link
              >、<nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該科技在<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >花費便宜20%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：該科技研發時間快80%
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
            <li>成本為200木材/300石頭。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>1.0C版後，成本為300食物/200木材。</li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          建築，通常指的是對那些為人類活動提供空間的、或者說擁有內部空間的構造物進行規劃、設計、施工而後使用的行為過程的全體或一部分。「建築」除了可指具體的構造物外，也著重在指創造建造物的行為（過程、技術）等。通常在表示具體建造物時，稱之為「建築物」，但在漢語中兩者常被混同使用。建築經常被人們認為是一種文化的符號，也被當成是一種藝術作品。歷史上許多重要的文明都有其獨特的代表性建築成就。
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">建築學</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/architecture.png" width="45" alt="" />
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
              <img
                class="gg"
                src="~assets/imperial_age.png"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/university.png"
                alt=""
              /><nuxt-link to="/building/University">學院</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">前置升級</td>
            <td class="unit4">
              <img class="gg" src="~assets/masonry.png" alt="" /><nuxt-link
                to="/techs/Masonry"
                >磚瓦技術</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">70秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              研發後所有建築(除了石牆和城門外)都獲得+10%
              HP、+1近防、+1遠防和+3建築護甲。
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
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
