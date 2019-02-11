<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>帕提亞戰術</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            帕提亞戰術(舊稱安息人戰術)在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >於<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >研發，他給予了
            <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
            >類近防+1/遠防+2，額外+2或+4攻擊對<nuxt-link to="/units/Spearman"
              >長槍兵</nuxt-link
            >。
          </p>
          <p>
            <nuxt-link to="/civs/Persians">波斯人</nuxt-link
            >以及安息人(帕提亞為音譯)大部分均善於騎射，以致弓騎兵長年為安息帝國軍中干城，戰力剽悍的安息騎兵亦譽滿天下。當年安息弓騎兵作戰時廣泛採用一種戰術：於戰場上佯作（或實際）撤退，引誘敵人（通常為騎兵）追趕，然後當敵人追至近身時，突然轉身向身後敵人發箭。由於距離較近，不須高超射術即可重創敵方，所以此戰術後來得以逐漸在弓騎兵作戰中普及。
          </p>
        </div>
        <h3>可研發文明</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-ok okc"
                    aria-hidden="true"
                  ></span
                  ><span style="margin-left: 2px;">可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>。
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <h4>
                <strong
                  ><span
                    class="glyphicon glyphicon-remove noc"
                    aria-hidden="true"
                  ></span
                  ><span style="margin-left: 2px;">不可研發</span></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>、
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
            </div>
          </div>
        </div>
        <h3>受影響的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>下面列出所有受帕提亞戰術影響的單位，(柏柏沒有帕提亞戰術)。</p>
        </div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td>弓箭手單位</td>
            <td>近防/遠防增加</td>
            <td>
              對<nuxt-link to="/units/Spearman">長槍兵</nuxt-link>攻擊加成
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/CavalryArcherIcon.jpg" alt="" />
              <nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>→
              <img class="gg" src="~assets/HeavyCavArcherIcon.jpg" alt="" />
              <nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >
            </td>
            <td class="tta2">+1/+2</td>
            <td class="tta3">+4</td>
          </tr>
          <tr>
            <td class="tta1">
              <img class="gg" src="~assets/MangudaiIcon.jpg" alt="" /><nuxt-link
                to="/units/Mangudai"
                >蒙古突騎</nuxt-link
              >→
              <img class="gg" src="~assets/MangudaiIcon.jpg" alt="" /><nuxt-link
                to="/units/Mangudai"
                >精銳蒙古突騎</nuxt-link
              >
            </td>
            <td class="tta2">+1/+2</td>
            <td class="tta3">+2</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/ElephantArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Elephant_Archer">象弓騎兵</nuxt-link>→
              <img
                class="gg"
                src="~assets/ElephantArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Elephant_Archer">精銳象弓騎兵</nuxt-link>
            </td>
            <td class="tta2">+1/+2</td>
            <td class="tta3">+2</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/CamelArcherIcon.jpg"
                alt=""
              /><nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>→
              <img class="gg" src="~assets/CamelArcherIcon.jpg" alt="" />
              <nuxt-link to="/units/Camel_Archer">精銳駱駝弓騎兵</nuxt-link>
            </td>
            <td class="tta2">+1/+2</td>
            <td class="tta3">+2</td>
          </tr>
          <p>
            <strong>注意</strong>:<nuxt-link to="/units/Genitour"
              >標槍騎兵</nuxt-link
            >和<nuxt-link to="/units/Arambai">飛鏢騎兵</nuxt-link
            >雖然是騎馬的弓箭手，但他們不受帕提亞戰術的影響。
          </p>
        </table>

        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>：研發快20%。
            </li>
          </ul>
        </div>
        <h3>瑣事</h3>
        <div class="hrn1"></div>
        <div class="n1">只有十個文明有此技術，因此此技術是全遊戲最稀少的</div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="ien">
            <em
              >"現在是現代伊朗一部分的帕提亞馬弓騎兵以其在無論是真實的還是假裝的撤退時向追擊者射箭的能力而聞名。能夠在撤退時向敵人開槍會讓敵人感到非常惱怒，特別是追擊者速度太慢以致無法縮小距離時。雖然帕提亞人是一個古老的民族，但他們的戰術後來都被使用馬弓騎兵駔為主力的文明所採用，名字依然附在動作上，“parthian
              shot”一詞意味著在退出討論時做出的任何評論。"</em
            >
            <p style="text-align: right;margin-top: 10px;">-世紀帝國II手稿。</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">
                帕提亞戰術
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Parthian-Tactics.jpg" width="45" alt="" />
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
                src="~assets/Imperial-age-research.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
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
            <td class="unit4">65秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">肉</td>
            <td class="unit4">200</td>
          </tr>
          <tr>
            <td class="unit3">金</td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#31b0d5;">
              <div class="unititle2">影響</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">影響</td>
            <td class="unit4">馬弓騎兵近防遠防+1/+2，對槍兵攻擊+2或+4</td>
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
