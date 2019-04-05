<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>坑道工兵</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>坑道工兵</b>可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >的<nuxt-link to="/building/Castle">城堡</nuxt-link
            >研發。可讓<nuxt-link to="/units/Villager">村民</nuxt-link
            >對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
            >和<nuxt-link to="/armor/Armor_Class_stone_defense"
              >石頭建築</nuxt-link
            ><nuxt-link to="/elements/Attack">攻擊力</nuxt-link
            >+15，讓村民能輕易摧毀敵對<nuxt-link to="/building">建築</nuxt-link
            >。不過很多玩家覺得坑道工兵不須研發因為村民應該主要是收集資源和蓋建築。不過對於被敵人圍住的資源，或者要摧毀位於玩家資源附近的敵方<nuxt-link
              to="/building/Mining_Camp"
              >採礦營地</nuxt-link
            >或<nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link
            >時，坑道工兵可以派上用場。
            坑道工兵也可以用來摧毀玩家村民旁邊的敵方<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >。
          </p>
          <p>有坑道工兵加成的村民只需一下就可把樹砍倒。</p>
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
                to="/civs/Britons"
                >不列顛</nuxt-link
              >、<nuxt-link to="/civs/Celts">塞爾特</nuxt-link>、<nuxt-link
                to="/civs/Chinese"
                >中國</nuxt-link
              >、<nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
              >、<nuxt-link to="/civs/Goths">哥德</nuxt-link>、<nuxt-link
                to="/civs/Huns"
                >匈奴</nuxt-link
              >、<nuxt-link to="/civs/Incas">印加</nuxt-link>、<nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >、<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、<nuxt-link
                to="/civs/Malay"
                >馬來</nuxt-link
              >、<nuxt-link to="/civs/Malians">馬利</nuxt-link>、<nuxt-link
                to="/civs/Mayans"
                >馬雅</nuxt-link
              >、<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、<nuxt-link
                to="/civs/Persians"
                >波斯</nuxt-link
              >、<nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、<nuxt-link
                to="/civs/Slavs"
                >斯拉夫</nuxt-link
              >、<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、<nuxt-link
                to="/civs/Teutons"
                >條頓</nuxt-link
              >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>、<nuxt-link
                to="/civs/Vietnamese"
                >越南</nuxt-link
              >、<nuxt-link to="/civs/Vikings">維京</nuxt-link>。
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
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、<nuxt-link
                to="/civs/Burmese"
                >緬甸</nuxt-link
              >、<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、<nuxt-link
                to="/civs/Franks"
                >法蘭克</nuxt-link
              >、<nuxt-link to="/civs/Indians">印度</nuxt-link>、<nuxt-link
                to="/civs/Italians"
                >義大利</nuxt-link
              >、<nuxt-link to="/civs/Japanese">日本</nuxt-link>、<nuxt-link
                to="/civs/Koreans"
                >韓國</nuxt-link
              >、<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：坑道工兵<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >便宜20%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>：<nuxt-link
                to="/techs/Kasbah"
                >聚居堡壘</nuxt-link
              >能夠加速坑道工兵的研究時間(快25%)。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >"專門攻擊防禦工事的技術人員被稱為工兵，他們挖掘戰壕靠近<nuxt-link
                to="/building/Stone_Wall"
                >城牆</nuxt-link
              >並埋下炸藥，之後破壞城牆！沒有工兵隊伍的軍隊在試圖攻擊<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >或堡壘時會受到嚴重的損失。許多工兵都是出價最高的僱傭軍。"</em
            >
            <p>
              工兵本質上是用來破壞敵人防禦結構的工程師。第一次世界大戰中的工兵們試圖在戰壕和無人地帶之下進行挖掘。在傳統意義上，工兵不再存在，今日則將導彈指揮官和工程師稱為工兵。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                坑道工兵
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Sappers.jpg" width="45" alt="" />
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
            <td class="unit4">請看分類</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/Castleicon.png" alt="" /><nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">10</td>
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
            <td class="unit4">400</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              村民對<nuxt-link to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >和<nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >攻擊力+15。村民只需一下就可把樹砍倒。
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
