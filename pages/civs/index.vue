<template>
  <div class="container padtop">
    <h1>文明</h1>
    <h3></h3>
    <div class="row">
      <div class="col-md-12">
        <p>
          遊戲中共有42個<b>文明</b>。相關頁面：<nuxt-link to="/civs/bestciv"
            >文明強弱分析</nuxt-link
          >、<nuxt-link to="/civs/aoestats">文明勝率</nuxt-link>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/aok"
                  ><img src="~assets/KingsIcon.png" />帝王世紀</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                西歐
                <ul>
                  <li>
                    <img class="gg" src="~assets/britons.png" /><nuxt-link
                      to="/civs/Britons"
                      >不列顛</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/celts.png" /><nuxt-link
                      to="/civs/Celts"
                      >塞爾特</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/franks.png" /><nuxt-link
                      to="/civs/Franks"
                      >法蘭克</nuxt-link
                    >
                  </li>
                </ul>
                中歐
                <ul>
                  <li>
                    <img class="gg" src="~assets/goths.png" /><nuxt-link
                      to="/civs/Goths"
                      >哥德</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/teutons.png" /><nuxt-link
                      to="/civs/Teutons"
                      >條頓</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/vikings.png" /><nuxt-link
                      to="/civs/Vikings"
                      >維京</nuxt-link
                    >
                  </li>
                </ul>
                中東
                <ul>
                  <li>
                    <img class="gg" src="~assets/byzantines.png" /><nuxt-link
                      to="/civs/Byzantines"
                      >拜占庭</nuxt-link
                    >
                  </li>
                </ul>
                西亞北非
                <ul>
                  <li>
                    <img class="gg" src="~assets/persians.png" /><nuxt-link
                      to="/civs/Persians"
                      >波斯</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/saracens.png" /><nuxt-link
                      to="/civs/Saracens"
                      >薩拉森</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/turks.png" /><nuxt-link
                      to="/civs/Turks"
                      >土耳其</nuxt-link
                    >
                  </li>
                </ul>
                東亞
                <ul>
                  <li>
                    <img class="gg" src="~assets/chinese.png" /><nuxt-link
                      to="/civs/Chinese"
                      >中國</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/japanese.png" /><nuxt-link
                      to="/civs/Japanese"
                      >日本</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/mongols.png" /><nuxt-link
                      to="/civs/Mongols"
                      >蒙古</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/aoc">
                  <img src="~assets/ConquerorsIcon.png" />征服者入侵</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                地中海
                <ul>
                  <li>
                    <img class="gg" src="~assets/spanish.png" />
                    <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
                  </li>
                </ul>
                中歐
                <ul>
                  <li>
                    <img class="gg" src="~assets/huns.png" /><nuxt-link
                      to="/civs/Huns"
                      >匈人</nuxt-link
                    >
                  </li>
                </ul>
                美洲
                <ul>
                  <li>
                    <img class="gg" src="~assets/mayans.png" /><nuxt-link
                      to="/civs/Mayans"
                      >馬雅</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/aztecs.png" /><nuxt-link
                      to="/civs/Aztecs"
                      >阿茲特克</nuxt-link
                    >
                  </li>
                </ul>
                東亞
                <ul>
                  <li>
                    <img class="gg" src="~assets/koreans.png" /><nuxt-link
                      to="/civs/Koreans"
                      >朝鮮</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/aof"
                  ><img src="~assets/ForgottenIcon.png" />失落的帝國</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                東歐
                <ul>
                  <li>
                    <img class="gg" src="~assets/magyars.png" /><nuxt-link
                      to="/civs/Magyars"
                      >馬扎爾</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/slavs.png" /><nuxt-link
                      to="/civs/Slavs"
                      >斯拉夫</nuxt-link
                    >
                  </li>
                </ul>
                南亞
                <ul>
                  <li>
                    <img class="gg" src="~assets/hindustanis.png" /><nuxt-link
                      to="/civs/Hindustanis"
                      >印度斯坦</nuxt-link
                    >
                  </li>
                </ul>
                美洲
                <ul>
                  <li>
                    <img class="gg" src="~assets/incas.png" /><nuxt-link
                      to="/civs/Incas"
                      >印加</nuxt-link
                    >
                  </li>
                </ul>
                地中海
                <ul>
                  <li>
                    <img class="gg" src="~assets/italians.png" /><nuxt-link
                      to="/civs/Italians"
                      >義大利</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/ak"
                  ><img src="~assets/AfricanIcon.png" />非洲王國</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                非洲
                <ul>
                  <li>
                    <img class="gg" src="~assets/malians.png" /><nuxt-link
                      to="/civs/Malians"
                      >馬利</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/ethiopians.png" /><nuxt-link
                      to="/civs/Ethiopians"
                      >衣索比亞</nuxt-link
                    >
                  </li>
                </ul>
                西亞北非
                <ul>
                  <li>
                    <img class="gg" src="~assets/berbers.png" /><nuxt-link
                      to="/civs/Berbers"
                      >柏柏</nuxt-link
                    >
                  </li>
                </ul>
                地中海
                <ul>
                  <li>
                    <img class="gg" src="~assets/portuguese.png" /><nuxt-link
                      to="/civs/Portuguese"
                      >葡萄牙</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/aor"
                  ><img src="~assets/RajaIcon.png" />王者崛起</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                東南亞
                <ul>
                  <li>
                    <img class="gg" src="~assets/malay.png" /><nuxt-link
                      to="/civs/Malay"
                      >馬來</nuxt-link
                    >
                  </li>
                  
                  <li>
                    <img class="gg" src="~assets/burmese.png" /><nuxt-link
                      to="/civs/Burmese"
                      >緬甸</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/khmer.png" /><nuxt-link
                      to="/civs/Khmer"
                      >高棉</nuxt-link
                    >
                  </li>
                 </ul>
                東亞
                <ul>
                  <li>
                    <img class="gg" src="~assets/vietnamese.png" /><nuxt-link
                      to="/civs/Vietnamese"
                      >越南</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/de"
                  ><img src="~assets/Khansicon.png" />最後的可汗</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                東歐
                <ul>
                  <li>
                    <img class="gg" src="~assets/bulgarians.png" /><nuxt-link
                      to="/civs/Bulgarians"
                      >保加利亞</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/lithuanians.png" /><nuxt-link
                      to="/civs/Lithuanians"
                      >立陶宛</nuxt-link
                    >
                  </li>
                </ul>
                中亞
                <ul>
                  <li>
                    <img class="gg" src="~assets/cumans.png" /><nuxt-link
                      to="/civs/Cumans"
                      >庫曼</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/tatars.png" /><nuxt-link
                      to="/civs/Tatars"
                      >韃靼</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/de"
                  ><img src="~assets/Lordsicon.png" />西方霸主</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                西歐
                <ul>
                  <li>
                    <img class="gg" src="~assets/burgundian.png" /><nuxt-link
                      to="/civs/Burgundian"
                      >勃根地</nuxt-link
                    >
                  </li>
                </ul>
                地中海
                <ul>
                  <li>
                    <img class="gg" src="~assets/sicilians.png" /><nuxt-link
                      to="/civs/Sicilians"
                      >西西里</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/de"
                  ><img src="~assets/Dukesicon.png" />公爵崛起</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                東歐
                <ul>
                  <li>
                    <img class="gg" src="~assets/bohemians.png" /><nuxt-link
                      to="/civs/Bohemians"
                      >波希米亞</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/poles.png" /><nuxt-link
                      to="/civs/Poles"
                      >波蘭</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/de"
                  ><img src="~assets/Indiaicon.png" />印度王朝</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                南亞
                <ul>
                  <li>
                    <img class="gg" src="~assets/dravidians.png" /><nuxt-link
                      to="/civs/Dravidians"
                      >達羅毗荼</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/bengalis.png" /><nuxt-link
                      to="/civs/Bengalis"
                      >孟加拉</nuxt-link
                    >
                  </li>
                  <li>
                    <img class="gg" src="~assets/gurjaras.png" /><nuxt-link
                      to="/civs/Gurjaras"
                      >瞿折羅</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-2">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unitc">
              <div class="unititle">
                <nuxt-link to="/games/de"
                  ><img src="~assets/Romesicon.png" />羅馬歸來</nuxt-link
                >
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="unitcontent">
                地中海
                <ul>
                  <li>
                    <img class="gg" src="~assets/roman.png" /><nuxt-link
                      to="/civs/Roman"
                      >羅馬</nuxt-link
                    >
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <hr />
    </div>
  </div>
</template>
<script>
export default {
  head() {
    return {
      title: '文明 - Aoetw'
    }
  },
  components: {}
}
</script>
<style>
.unitcontent ul {
  padding-left: 15px;
}

.unitcontent ul li {
  list-style: none inside;
}
</style>
