<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>戰役</h1>
        <div class="row">
          <div class="col-md-12">
            <h5><b>遊戲中有5個版本、共24關主戰役劇情。</b></h5>
            <div class="hrn1"></div>
            <div class="toc" :class="{ 'shadow-left': hasLeftShadow }" style="float: left;">
              <p>
                <nuxt-link to="/games/aok">帝王世紀</nuxt-link>戰役<span
                  class="arror"
                  >➠</span
                >
              </p>
              <p>
                <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>戰役<span
                  class="arror"
                  >➠</span
                >
              </p>
              <p>
                <nuxt-link to="/games/aof">失落的帝國</nuxt-link>戰役<span
                  class="arror"
                  >➠</span
                >
              </p>
              <p>
                <nuxt-link to="/games/ak">非洲王國</nuxt-link>戰役<span
                  class="arror"
                  >➠</span
                >
              </p>
              <p>
                <nuxt-link to="/games/aor">王者崛起</nuxt-link>戰役<span
                  class="arror"
                  >➠</span
                >
              </p>
            </div>
            <div class="toc" ref="shadow">
              <p>
                <nuxt-link to="#a1">【威廉華勒斯】</nuxt-link>、<nuxt-link
                  to="#a2"
                  >【聖女貞德】</nuxt-link
                >、 <nuxt-link to="#a3">【沙拉丁】</nuxt-link>、<nuxt-link
                  to="#a4"
                  >【成吉思汗】</nuxt-link
                >、<nuxt-link to="#a5">【巴巴羅薩】</nuxt-link>
              </p>
              <p>
                <nuxt-link to="#a6">【阿提拉】</nuxt-link>、<nuxt-link to="#a7"
                  >【熙德】</nuxt-link
                >、<nuxt-link to="#a8">【蒙特蘇馬】</nuxt-link>、<nuxt-link
                  to="#a9"
                  >【征服者的戰役】</nuxt-link
                >
              </p>
              <p>
                <nuxt-link to="#a10">【阿拉里克】</nuxt-link>、<nuxt-link
                  to="#a11"
                  >【德古拉】</nuxt-link
                >、<nuxt-link to="#a12">【巴里】</nuxt-link>、<nuxt-link
                  to="#a13"
                  >【斯福爾札】</nuxt-link
                >、<nuxt-link to="#a14">【黃金國】</nuxt-link>、<nuxt-link
                  to="#a15"
                  >【布里斯比羅吉】</nuxt-link
                >、<nuxt-link to="#a16">【失落的帝國戰役】</nuxt-link>
              </p>
              <p>
                <nuxt-link to="#a17">【塔里克·伊本·齊亞德】</nuxt-link
                >、<nuxt-link to="#a18">【松迪亞塔】</nuxt-link>、<nuxt-link
                  to="#a19"
                  >【法蘭西斯科·阿爾梅達】</nuxt-link
                >、<nuxt-link to="#a20">【優娣忒】</nuxt-link>
              </p>
              <p>
                <nuxt-link to="#a21">【加查‧馬達】</nuxt-link>、<nuxt-link
                  to="#a22"
                  >【蘇利耶跋摩一世】</nuxt-link
                >、<nuxt-link to="#a23">【勃印曩】</nuxt-link>、<nuxt-link
                  to="#a24"
                  >【黎利】</nuxt-link
                >
              </p>
            </div>
          </div>
        </div>
        <div class="hrn1"></div>

        <h3><strong>帝王世紀戰役</strong></h3>
        <div class="row">
          <div class="col-md-4">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#c12420;">
                  <div class="unititle">
                    <div id="a1">
                      <nuxt-link to="/batt/William_Wallacea"
                        >威廉華勒斯</nuxt-link
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a1.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Marching_and_Fighting"
                      >行軍與戰鬥</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Feeding_the_Army">供養軍隊</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Training_the_Troops"
                      >訓練軍隊</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Research_and_Technology"
                      >研發與科技</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Battle_of_Stirling"
                      >斯特林之役</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Forge_an_Alliance">締結同盟</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Battle_of_Falkirk"
                      >福爾克之役</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#c12420;">
                  <div class="unititle">
                    <div id="a2">
                      <nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a2.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/An_Unlikely_Messiah"
                      >一個不大可能的彌賽亞</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Maid_of_Orleans"
                      >奧爾良的少女</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Cleansing_of_the_Loire"
                      >羅亞爾河大掃蕩</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Rising">叛變</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Siege_of_Paris"
                      >巴黎攻城戰</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_Perfect_Martyr"
                      >完美的烈士</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#c12420;">
                  <div class="unititle">
                    <div id="a3">
                      <nuxt-link to="/batt/Saladina">沙拉丁</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a5.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/An_Arabian_Knight"
                      >阿拉伯騎士</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Lord_of_Arabia">阿拉伯之主</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Horns_of_Hattin"
                      >海丁的號角</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Siege_of_Jerusalem"
                      >耶路撒冷攻城戰</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Jihad">聖戰</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Lion_and_the_Demon"
                      >獅子與惡魔</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#c12420;">
                  <div class="unititle">
                    <div id="a4">
                      <nuxt-link to="/batt/Genghis_Khana">成吉思汗</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a4.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Crucible">嚴酷的考驗</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_Life_of_Revenge"
                      >復仇的人生</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Into_China">進入中國</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Horde_Rides_West"
                      >遊牧民族的西遷</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Promise">承諾</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Pax_Mongolia"
                      >蒙古治下的和平</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#c12420;">
                  <div class="unititle">
                    <div id="a5">
                      <nuxt-link to="/batt/Barbarossa">巴巴羅薩</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a3.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Holy_Roman_Emperor"
                      >神聖羅馬皇帝</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Henry_the_Lion">猛獅亨利</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Pope_and_Antipope"
                      >教皇與僭稱教皇</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Lombard_League"
                      >倫巴聯盟</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Barbarossas_March"
                      >紅鬍子的行軍</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Emperor_Sleeping"
                      >沉睡的皇帝</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />

        <div class="hrn1"></div>

        <h3><strong>征服者入侵戰役</strong></h3>
        <div class="row">
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#2a22a7;">
                  <div class="unititle">
                    <div id="a6">
                      <nuxt-link to="/batt/Attila_the_Huna">阿提拉</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a6.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Scourge_of_God">上帝之鞭</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Great_Ride">偉大的騎士</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Walls_of_Constantinople"
                      >君士坦丁堡的城牆</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_Barbarian_Betrothal"
                      >蠻族的婚約</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Catalaunian_Fields"
                      >卡塔隆尼亞平原</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Fall_of_Rome">羅馬的衰落</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#2a22a7;">
                  <div class="unititle">
                    <div id="a7">
                      <nuxt-link to="/batt/El_Cida">熙德</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a7.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Brother_against_Brother"
                      >兄弟鬩牆</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Enemy_of_my_Enemy"
                      >我敵人的敵人</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Exile_of_the_Cid"
                      >熙德的流亡歲月</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Black_Guards">黑衛隊</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/King_of_Valencia"
                      >瓦倫西亞之主</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Reconquista">勘查</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#2a22a7;">
                  <div class="unititle">
                    <div id="a8">
                      <nuxt-link to="/batt/Montezumaa">蒙特蘇馬</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a8.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Reign_of_Blood">血親統治</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Triple_Alliance"
                      >三國同盟</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Quetzalcoatl">蛇鳥之神</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/La_Noche_Triste">悲傷之夜</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Boiling_Lake">沸騰的湖</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Broken_Spears">斷矛</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#2a22a7;">
                  <div class="unititle">
                    <div id="a9">
                      <nuxt-link to="/batt/Battles_of_the_Conquerors"
                        >征服者的戰役</nuxt-link
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a9.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Tours_732">都爾（732）</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Vindlandsaga_1000"
                      >芬特蘭撒格（1000）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Hastings_1066"
                      >哈斯汀斯（1066）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Manzikert_1071"
                      >曼奇克托（1071）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Agincourt_1415"
                      >亞琴哥特（1415）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Lepanto_1571"
                      >勒班陀（1571）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Kyoto_1582">京都（1582）</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Noryang_Point_1598"
                      >洛陽點（1598）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />

        <div class="hrn1"></div>

        <h3><strong>失落的帝國戰役</strong></h3>
        <div class="row">
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#28a745;">
                  <div class="unititle">
                    <div id="a10">
                      <nuxt-link to="/batt/Alaric">阿拉里克</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a10.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/All_Roads_Lead_to_a_Besieged_City"
                      >條條大路通圍城</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Legionaries_on_the_Horizon"
                      >羅馬軍團隨時殺到</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Emperor_of_the_West"
                      >西域之君</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Sack_of_Rome">洗劫羅馬</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#28a745;">
                  <div class="unititle">
                    <div id="a11">
                      <nuxt-link to="/batt/Draculaa">德古拉</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a11.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Dragon_Spreads_His_Wings"
                      >火龍展翅</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Return_of_the_Dragon"
                      >龍之歸來</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Breath_of_the_Dragon"
                      >龍之喘息</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Moon_Rises">撥雲見月</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Night_Falls">暗夜降臨</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#28a745;">
                  <div class="unititle">
                    <div id="a12">
                      <nuxt-link to="/batt/Baria">巴里</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a12.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Arrival_at_Bari">抵達巴里</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Rebellion_of_Melus"
                      >邁勒斯叛變</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Great_Siege">四面楚歌</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#28a745;">
                  <div class="unititle">
                    <div id="a13">
                      <nuxt-link to="/batt/Sforzaa">斯福爾札</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a13.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/An_End_and_a_Beginning"
                      >始兮終兮</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/O_Fortuna">命運女神</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Hand_of_a_Daughter"
                      >于歸之喜</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Ambrosian_Republic"
                      >安布羅共和國</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_New_Duk_of_Milan"
                      >米蘭新公爵</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#28a745;">
                  <div class="unititle">
                    <div id="a14">
                      <nuxt-link to="/batt/El_Doradoa">黃金國</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a14.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Tales_of_La_Canela"
                      >黃金國的傳說</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Split">分離告別</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Amazones">亞馬遜族</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Cannibals">食人族</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#28a745;">
                  <div class="unititle">
                    <div id="a15">
                      <nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a15.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_Promising_Warrior"
                      >英雄出少年</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Digvijaya"
                      >逐鹿迪格維傑之地</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Elopement">私奔</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Battles_of_Tarain"
                      >塔蘭村之戰</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#28a745;">
                  <div class="unititle">
                    <div id="a16">
                      <nuxt-link to="/batt/Battles_of_the_Forgotten"
                        >失落的帝國戰役</nuxt-link
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a16.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Bukhara_557">布哈拉（557）</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Dos_Pilas_648"
                      >雙柱城（648）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/York_865">約克（865）</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Honfoglalas_895"
                      >征服家園（895）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Langshan_Jiang_919 "
                      >狼山江（919）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Kaesong_936">開城（936）</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Kurikara_1183"
                      >礪波山（1183）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Cyprus_1191"
                      >塞普勒斯（1191）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Bapheus_1302"
                      >巴菲烏斯（1302）</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />

        <div class="hrn1"></div>

        <h3><strong>非洲王國戰役</strong></h3>
        <div class="row">
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#8a6d3b;">
                  <div class="unititle">
                    <div id="a17">
                      <nuxt-link to="/batt/Tariq_ibn_Ziyada"
                        >塔里克·伊本·齊亞德</nuxt-link
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a17.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Battle_of_Guadalete"
                      >瓜達萊特之戰</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Consolidation_and_Subjugation"
                      >攻城拔寨</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Divide_and_Conquer"
                      >縱橫捭闔</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Crossing_the_Pyrenees"
                      >穿越庇里牛斯山脈</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Razzia">突襲</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#8a6d3b;">
                  <div class="unititle">
                    <div id="a18">
                      <nuxt-link to="/batt/Sundjataa">松迪亞塔</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a18.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Hunted">擒獲</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Sting_of_the_Scorpion"
                      >蠍螫</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Djeriba_Gold"
                      >傑爾巴島的黃金</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Blood_on_the_River_Bank"
                      >血濺河灘</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Lions_Den">深入虎穴</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#8a6d3b;">
                  <div class="unititle">
                    <div id="a19">
                      <nuxt-link to="/batt/Francisco_de_Almeidaa"
                        >法蘭西斯科·阿爾梅達</nuxt-link
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a19.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Old_World">舊世界</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Lion_of_Africa">非洲雄獅</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Ruins_of_Empires"
                      >帝國的廢墟</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Estado_da_India">葡屬印度</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_Sons_Blood">兒子的血仇</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#8a6d3b;">
                  <div class="unititle">
                    <div id="a20">
                      <nuxt-link to="/batt/Yodita">優娣忒</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a20.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Path_of_Exile">流亡之路</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Right_Partner">最佳搭檔</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_Fallen-Crown">摔落的皇冠</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Broken_Stelae">毀壞的石碑</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Welcome_Home">重回故里</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />

        <div class="hrn1"></div>

        <h3><strong>王者崛起戰役</strong></h3>
        <div class="row">
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#5f8ebd;">
                  <div class="unititle">
                    <div id="a21">
                      <nuxt-link to="/batt/Gajah_Madaa">加查·馬達</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a21.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Story_of_our_Founders"
                      >開疆闢土</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Unconditional_Loyalty"
                      >班師勤王</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Oath_to_Unify_Nusantara"
                      >誓統南洋</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Serving_the_New_King"
                      >輔佐新君</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Pasunda_Bubat_Tragedy"
                      >風雲變色</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#5f8ebd;">
                  <div class="unititle">
                    <div id="a22">
                      <nuxt-link to="/batt/Suryavarman_I"
                        >蘇利耶跋摩一世</nuxt-link
                      >
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a22.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Usurpation">揭竿而起</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Quelling_the_Rebellion"
                      >席捲入荒</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_Dangerous_Mission"
                      >九死一生</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Challenging_a_Thalassocrac"
                      >滔天巨浪</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Nirvanapada">千古偉業</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#5f8ebd;">
                  <div class="unititle">
                    <div id="a23">
                      <nuxt-link to="/batt/Bayinnaunga">勃印曩</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a23.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Burmese_Tigers"
                      >餓虎撲食</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Mandalay_Cobra"
                      >猛蛇出洞</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Royal_Peacock">百鳥朝鳳</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_White_Elephant"
                      >白象化身</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Old_Tiger">鳳凰涅槃</nuxt-link>
                  </div>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-md-4" style="margin-top: 10px;">
            <table class="table-bordered" width="100%">
              <tr>
                <td class="unit" style="background-color:#5f8ebd;">
                  <div class="unititle">
                    <div id="a24">
                      <nuxt-link to="/batt/Le_Loi">黎利</nuxt-link>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unititle">
                    <img src="~assets/a24.jpg" width="45" alt="" />
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Dai_Viet_Uprising"
                      >大越義軍</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Mountain_Siege"
                      >至靈山魂</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Battle_at_Hanoi"
                      >圍困昇龍</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/Reaching_South">揮師南下</nuxt-link>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/A_Three_Pronged_Attack"
                      >兵分三路</nuxt-link
                    >
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="unitcontent">
                    <nuxt-link to="/batt/The_Final_Fortress"
                      >決戰東都</nuxt-link
                    >
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>

const getScrollPosition = (el = window) => ({
  x: el.pageXOffset !== undefined ? el.pageXOffset : el.scrollLeft,
  y: el.pageYOffset !== undefined ? el.pageYOffset : el.scrollTop
});

export default {
  data () {
    return {
      hasLeftShadow: false
    }
  },
  head() {
    return {
      title: '戰役 - Aoetw'
    }
  },
  mounted () {
    this.setShadow()
    this.$refs.shadow.addEventListener("scroll", this.setShadow)
  },
  beforeDestroy () {
    this.$refs.shadow.removeEventListener("scroll", this.setShadow)
  },
  methods: {
    setShadow () {
      var scrollPos = getScrollPosition(this.$refs.shadow)

      if (scrollPos.x <= 0) {
        this.hasLeftShadow = false
      } else {
        this.hasLeftShadow = true
      }
    }
  },
  layout: '',
  components: {}
}
</script>
<style>
.toc p {
  white-space: nowrap;
}

.toc {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.toc.shadow-left {
  box-shadow: 5px 0 3px -5px #333;
}

.arror {
  float: right;
}
</style>
