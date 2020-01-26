<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>品種</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>品種</b>（亦稱<b>血統</b>）於<nuxt-link
              to="/techs/age/Feudal_Age"
              >封建時代</nuxt-link
            >在<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >研發。研發後所有騎乘單位<nuxt-link to="/elements/Hit_points"
              >血量</nuxt-link
            >+20。
          </p>
          <p>
            品種是相當重要的<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            ><nuxt-link to="/techs">科技</nuxt-link>，研發品種後的<nuxt-link
              to="/units/Scout_Cavalry"
              >斥候騎兵</nuxt-link
            >，將對<nuxt-link to="/units/Villager">村民</nuxt-link>與<nuxt-link
              to="/units/Archer_Units"
              >弓兵</nuxt-link
            >更具殺傷力。
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
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >、<nuxt-link to="/civs/Chinese">中國</nuxt-link>、<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈奴</nuxt-link>、<nuxt-link
                to="/civs/Indians"
                >印度</nuxt-link
              >、<nuxt-link to="/civs/Italians">義大利</nuxt-link>、<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >、<nuxt-link to="/civs/Khmer">高棉</nuxt-link>、<nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >、<nuxt-link to="/civs/Malians">馬利</nuxt-link>、<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >、<nuxt-link to="/civs/Persians">波斯</nuxt-link>、<nuxt-link
                to="/civs/Portuguese"
                >葡萄牙</nuxt-link
              >、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >、<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、<nuxt-link
                to="/civs/Teutons"
                >條頓</nuxt-link
              >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>、<nuxt-link
                to="/civs/Vietnamese"
                >越南</nuxt-link
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
                to="/civs/Britons"
                >不列顛</nuxt-link
              >、<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
                to="/civs/Celts"
                >塞爾特</nuxt-link
              >、<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Koreans">韓國</nuxt-link>、<nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >、<nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、<nuxt-link
                to="/civs/Vikings"
                >維京</nuxt-link
              >。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：科技在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜10%/15%/20%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>：研發品種速度快20%。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：無法研發品種。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：可研發品種。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>：<nuxt-link
                to="/units/Missionary"
                >傳教士</nuxt-link
              >受品種影響。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >"中世紀的勇士們需要不同類型的馬匹進行長時間的移動，偵察，打獵，或讓士兵騎乘。馬匹配種使得不同馬匹的品種逐漸演變，以滿足各式各樣的需求。居住在大草原上的<nuxt-link
                to="/civs"
                >文明</nuxt-link
              >通常擅於馬匹配種，而在中東和亞洲，類似的方法用於繁殖賽跑用的駱駝，或培養耐力好的駱駝作為長途貿易旅行載運貨品及人員使用。"</em
            >
            <p style="text-align: right;margin-top: 10px;">
              -《<nuxt-link to="/games/aoc">世紀帝國II：征服者入侵</nuxt-link
              >》手稿。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">品種</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Bloodlines.png" width="45" alt="" />
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
              <img class="gg" src="~assets/feudal_age.png" alt="" /><nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                width="25px"
                src="~assets/stable.png"
                alt=""
              /><nuxt-link to="/building/Stable">馬廄</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">50秒</td>
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
            <td class="unit4">150</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
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
            <td class="unit4">騎乘單位血量+20</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由yaukmd協助編輯</div>
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
