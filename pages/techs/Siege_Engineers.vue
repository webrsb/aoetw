<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>攻城工程師</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>攻城工程師</b>可於<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >在<nuxt-link to="/building/University">學院</nuxt-link
            >研發。研發後所有<nuxt-link to="/units/Siege_Weapons"
              >攻城單位</nuxt-link
            >(包括<nuxt-link to="/units/Ballista_Elephant">精銳弩砲象</nuxt-link
            >)對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
            >傷害+20%(<nuxt-link to="/units/Petard">炸藥桶</nuxt-link
            >+200攻擊；<nuxt-link to="/units/Flaming_Camel">火焰駱駝</nuxt-link
            >+40攻擊)，射程+1(除了<nuxt-link to="/units/Battering_Ram"
              >衝撞車</nuxt-link
            >)。
          </p>
          <ul>
            <li>
              最遠射程<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >:<nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>(<nuxt-link
                to="/techs/Shinkichon"
                >神機箭</nuxt-link
              >:投石車射程+1；有攻城工程師)。
            </li>
            <li>
              最遠射程弩炮:<nuxt-link to="/civs/Khmer">高棉</nuxt-link
              >與其同盟(團隊加成:弩炮射程+1；有攻城工程師)。
            </li>
            <li>
              最遠射程巨型投石機:<nuxt-link to="/civs/Tatars">韃靼</nuxt-link
              >(<nuxt-link to="/techs/Timurid_Siegecraft"
                >帖木兒攻城術</nuxt-link
              >:巨型投石機射程+2；有攻城工程師)。
            </li>
            <li>
              最遠射程火炮戰船:<nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >(<nuxt-link to="/techs/Arquebus">火繩槍</nuxt-link>:<nuxt-link
                to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >射程+2)。
            </li>
          </ul>
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
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">朝鮮</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Viking">維京</nuxt-link>。
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
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈人</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：該<nuxt-link
                to="/techs"
                >科技</nuxt-link
              >研發時間快80%
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >:不能研發工程攻城師。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link
              >:5.5改版後可以研發攻城攻城師。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            專攻設計，建造和操作攻城武器的人被稱為攻城工程師。這些武器是在那個世紀的新東西，而且操作複雜。用一個石頭從遠處擊中一個狹窄的石牆是一個困難的問題。不過有經驗的工程師可以幫助解決這個問題。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">攻城工程師</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/siege_engineers.png"
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
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">請看分類</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/imperial_age.png" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img class="gg" src="~assets/university.png" alt="" /><nuxt-link
                to="/building/University"
                >學院</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">研發時間</td>
            <td class="unit4">45秒</td>
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
            <td class="unit4">600</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
            <td class="unit4">500</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">
              研發後所有<nuxt-link to="/units/Siege_Weapons">攻城單位</nuxt-link
              >對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >傷害+20%(<nuxt-link to="/units/Petard">炸藥桶</nuxt-link
              >+200攻擊)，射程+1(除了衝撞車)。
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
