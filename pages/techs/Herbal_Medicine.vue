<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>草藥治療</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>草藥治療</b
            >(2013版稱<b>草藥學</b>)於《世紀帝國:征服者入侵》首次登場，在<nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >於<nuxt-link to="/building/Monastery">修道院</nuxt-link
            >研發後可讓駐紮單位的自癒速度提升500%。<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >中每分鐘回36HP，<nuxt-link to="/building/Castle">城堡</nuxt-link
            >則是每分鐘回72HP。
            玩家駐紮在同盟的城堡時必須該同盟的城堡有研發草藥治療才能讓建築物中的玩家軍隊加速自癒速度，而非關玩家是否有研發草藥治療。
          </p>
          <p>
            草藥治療可顯著提升防禦部隊的機動性，讓受傷單位駐紮到城堡或箭塔中治療，同時給與火力掩護，治療完後又可重新再出戰
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>。
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
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：研發該<nuxt-link to="/techs">科技</nuxt-link>給與<nuxt-link
                to="/units/Monk"
                >僧侶</nuxt-link
              >+5HP。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：科技便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：科技在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：免費獲得草藥治療。
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
            <li>草藥治療增加受傷部隊在建築物中300%自癒速度。</li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：沒有草藥治療。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>草藥治療增加受傷部隊在建築物中500%自癒速度。</li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：免費獲得草藥治療當作文明加成。
            </li>
          </ul>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              “雖然古典社會推動解剖學和生理學的研究，但在18世紀和19世紀的科學和工業革命之前，醫學是建立在實踐知識基礎之上的一種不精確的科學，
              首先是藉由口頭傳統和書面記錄傳遞經驗上累積的治療方法和程序。治療的主要媒介是草藥，通過實驗發現了具有療效的草藥化合物的應用，
              在中世紀的城鎮或村莊中草藥專家的出現對居民是一種福音。”
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">草藥治療</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Herbalmedicine.png"
                  alt=""
                />
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
            <td class="unit4">請看左方分類</td>
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
              <img class="gg" src="~assets/monastery.png" alt="" /><nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">35秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">350</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              可讓駐紮在<nuxt-link to="/building">建築物</nuxt-link
              >內的單位回復力提升至6倍
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
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
