<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>礦井採金</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>礦井採金</b>是<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            ><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
            >的<nuxt-link to="/techs">科技</nuxt-link>，研發後可使<nuxt-link
              to="/units/Villager"
              >村民</nuxt-link
            >收集金礦的速度增快15%。
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
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >、<nuxt-link to="/civs/Chinese">中國</nuxt-link>、<nuxt-link
                to="/civs/Ethiopians"
                >衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈奴</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Indians">印度</nuxt-link>、<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >、<nuxt-link to="/civs/Koreans">韓國</nuxt-link>、<nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >、<nuxt-link to="/civs/Malay">馬來</nuxt-link>、<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >、<nuxt-link to="/civs/Persians">波斯</nuxt-link>、<nuxt-link
                to="/civs/Saracens"
                >薩拉森</nuxt-link
              >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>、<nuxt-link
                to="/civs/Vikings"
                >維京</nuxt-link
              ><nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Britons"
                >不列顛</nuxt-link
              >、<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、<nuxt-link
                to="/civs/Celts"
                >塞爾特</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >、<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>。
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
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >、<nuxt-link to="/civs/Malians">馬利</nuxt-link>、<nuxt-link
                to="/civs/Mayans"
                >馬雅</nuxt-link
              >、<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >、<nuxt-link to="/civs/Teutons">條頓</nuxt-link>、<nuxt-link
                to="/civs/Vietnamese"
                >越南</nuxt-link
              >。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>:科技在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜15%/20%。
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
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>:<nuxt-link
                to="/tree/vie"
                >科技樹</nuxt-link
              >沒有礦井採金。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link
              >:科技樹有礦井採金了。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>:礦井採金免費。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >:在5.7版本後沒有免費的礦井採金了。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"當地表附近的<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >和白銀來源枯竭時，礦工們開發了深入地下的技術。這涉及到建設升降機以降低人員攜帶礦石量。礦坑需要幫浦把水拉起來並送入空氣。而且它需要新的隧道技術來支撐礦坑和豎井以防止塌陷。一些有豐富蘊藏量的銀礦在東歐被發現。"</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">礦井採金</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/gold_shaft_mining.png" width="45" alt="" />
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
            <td class="unit4">請看介紹</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/castle_age.png"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/mining_camp.png"
                alt=""
              /><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img class="gg" src="~assets/gold_mining.png" alt="" /><nuxt-link
                to="/techs/Gold_Mining"
                >採金技術</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">75秒</td>
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
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">使村民收集金礦速度增加15%。</td>
          </tr>
        </table>
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
