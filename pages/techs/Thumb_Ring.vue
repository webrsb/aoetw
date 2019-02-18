<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>拇指環</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            拇指環於<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >在<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >研發。研發後所有弓箭手都能更快的以100%命中靜止目標。另一科技<nuxt-link
              to="/techs/Ballistics"
              >彈道學</nuxt-link
            >則是針對移動目標。
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
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><i class="fas fa-times" style="color: #d9534f;"></i>
                  <span style="margin-left: 2px;">不可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。
            </div>
          </div>
        </div>
        <br />
        <h3>受影響的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>下面列出所有受拇指環影響的單位，(不列顛沒有拇指環)。</p>
        </div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td>弓箭手單位</td>
            <td>增加射擊速度</td>
            <td>準確度提高</td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Archer">弓兵</nuxt-link>、<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >、<nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>
            </td>
            <td class="tta2">+18%</td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link
                to="/units/Elite_Skirmisher"
                >戰矛兵</nuxt-link
              >、
              <nuxt-link to="/units/Imperial_Skirmisher">帝王戰矛兵</nuxt-link>
            </td>
            <td class="tta2">
              <i class="fas fa-times" style="color: #d9534f;"></i>
            </td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >、<nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >
            </td>
            <td class="tta2">+11%</td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Chu_Ko_Nu">連弩兵</nuxt-link>、<nuxt-link
                to="/units/Chu_Ko_Nu"
                >精銳連弩兵</nuxt-link
              >
            </td>
            <td class="tta2">+25%</td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>、<nuxt-link
                to="/units/Mangudai"
                >精銳蒙古突騎</nuxt-link
              >
            </td>
            <td class="tta2">+18%</td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/War_Wagon">馬戰車</nuxt-link>、<nuxt-link
                to="/units/War_Wagon"
                >精銳馬戰車</nuxt-link
              >
            </td>
            <td class="tta2">+11%</td>
            <td class="tta3">
              <i class="fas fa-times" style="color: #d9534f;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Plumed_Archer">羽毛箭射手</nuxt-link
              >、<nuxt-link to="/units/Plumed_Archer">精銳羽毛箭射手</nuxt-link>
            </td>
            <td class="tta2">+18%</td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Slinger">投石手</nuxt-link>
            </td>
            <td class="tta2">
              <i class="fas fa-times" style="color: #d9534f;"></i>
            </td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Ballista_Elephant">弩砲象</nuxt-link
              >、<nuxt-link to="/units/Ballista_Elephant">精銳弩砲象</nuxt-link>
            </td>
            <td class="tta2">+18%</td>
            <td class="tta3">
              <i class="fas fa-times" style="color: #d9534f;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Genoese_Crossbowman">熱那亞弩手</nuxt-link
              >、<nuxt-link to="/units/Genoese_Crossbowman"
                >精銳熱那亞弩手</nuxt-link
              >
            </td>
            <td class="tta2">+18%</td>
            <td class="tta3">
              <i class="fas fa-times" style="color: #d9534f;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Camel_Archer">駱駝弓箭手</nuxt-link
              >、<nuxt-link to="/units/Camel_Archer">精銳駱駝弓箭手</nuxt-link>
            </td>
            <td class="tta2">+18%</td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Genitour">標槍騎兵</nuxt-link>、<nuxt-link
                to="/units/Genitour"
                >精銳標槍騎兵</nuxt-link
              >
            </td>
            <td class="tta2">
              <i class="fas fa-times" style="color: #d9534f;"></i>
            </td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/units/Rattan_Archer">藤甲弓兵</nuxt-link
              >、<nuxt-link to="/units/Rattan_Archer">精銳藤甲弓兵</nuxt-link>
            </td>
            <td class="tta2">+18%</td>
            <td class="tta3">
              <i class="fas fa-check" style="color: green;"></i>
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：科技在城堡/帝王時代各便宜15%/20%。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>：研發快20%。
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
              <nuxt-link to="/civs/Incas">印加</nuxt-link>:科技樹沒有<nuxt-link
                to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              >:科技樹可以研發<nuxt-link to="/techs/Thumb_Ring"
                >拇指環</nuxt-link
              >了。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >"中世紀典型的弓箭手將弓弦拉回至胸前再放開進行射擊，英國長弓兵則有能力拉回到他們的臉頰，增加了射擊的力量和距離，亞洲的弓箭手則製作了拇指環，讓他們能拉到耳朵或耳朵之後，當他們把非常強大的複合弓加入這個改進時，他們的武器能在戰場上有效殲滅敵人。"</em
            >
            <p style="text-align: right;margin-top: 10px;">
              -《世紀帝國II:征服者入侵》手稿。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">拇指環</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Thumb_Ring.png" width="45" alt="" />
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
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研發於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Archery-range-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link>
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
            <td class="unit3">木</td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">300</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">弓箭手射擊速度更快，精確度達到100％</td>
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
