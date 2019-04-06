<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>騎兵鎖甲</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>騎兵鎖甲</b>可於<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >在<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
            >研發，可讓<nuxt-link to="/armor/Armor_Class_Cavalry"
              >騎兵護甲</nuxt-link
            >+1/+1。
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
                to="/civs/Britons"
                >不列顛</nuxt-link
              >、<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >、<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >、<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >、<nuxt-link to="/civs/Huns">匈奴</nuxt-link>、<nuxt-link
                to="/civs/Indians"
                >印度</nuxt-link
              >、<nuxt-link to="/civs/Italians">義大利</nuxt-link>、<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >、<nuxt-link to="/civs/Khmer">高棉</nuxt-link>、<nuxt-link
                to="/civs/Koreans"
                >韓國</nuxt-link
              >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
                to="/civs/Malians"
                >馬利</nuxt-link
              >、<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、<nuxt-link
                to="/civs/Persians"
                >波斯</nuxt-link
              >、<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、<nuxt-link
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
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Incas"
                >印加</nuxt-link
              >、<nuxt-link to="/civs/Malay">馬來</nuxt-link>、<nuxt-link
                to="/civs/Mayans"
                >馬雅</nuxt-link
              >。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >花費便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：研發該科技不需要<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em
            >"連接金屬鏈製成的盔甲是金屬鱗甲的改進版本。它有更好的一致性，並在受到損害時仍舊對士兵有良好保護。造受撞擊後鱗片可能會鬆動，但鎖甲基本會保持不變。
            由於鏈條比金屬鱗片更小更輕，讓鎖甲穿起來更加靈活且舒適。"</em
          >
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">騎兵鎖甲</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Chainbardingarmor.jpg" width="45" alt="" />
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
            <td class="unit4">請看分類</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級所需科技</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Scalebardingarmor.jpg"
                alt=""
              /><nuxt-link to="/techs/Scale_Barding_Armor">騎兵鱗甲</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">次一升級</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Platebardingarmor.jpg"
                alt=""
              /><nuxt-link to="/techs/Plate_Barding_Armor">騎兵板甲</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">60秒</td>
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
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
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
            <td class="unit4">騎兵護甲+1/+1。</td>
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
