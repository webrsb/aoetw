<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>木牆</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>木牆</b
            >，或稱<b>木柵欄</b>。在世紀帝國II是一種防禦建設，雖然廉價但相當脆弱，常用於早期防禦上。木牆可以說是世紀帝國II相當重要的<nuxt-link
              to="/building"
              >建築</nuxt-link
            >，木牆不只可以防禦，還可以進攻，如在<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >下蓋木牆可以形成免費的<nuxt-link to="/techs/Murder_Holes"
              >垛孔</nuxt-link
            >與安全的保護，也可以圍對方資源等。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="n1">
              <li>
                巧妙地使用木牆可以爭取幾秒鐘的時間來防止敵人的進攻。由於<nuxt-link
                  to="/civs/Goths"
                  >哥德人</nuxt-link
                >沒有<nuxt-link to="/building/Stone_Wall">石牆</nuxt-link
                >，在某些情況下木牆就作為廉價的替代品。其他<nuxt-link to="/civs"
                  >文明</nuxt-link
                >的玩家如果缺乏<nuxt-link to="/resource/Stone">石頭</nuxt-link
                >並且需要迅速阻擋對手的攻勢時，木牆是非常好的<nuxt-link
                  to="/building/Stone_Wall"
                  >城牆</nuxt-link
                >替代品。
              </li>
              <li>
                木牆在初期能有效阻擋對手進攻，但若玩家選擇打保守，那後期還是要用城牆/<nuxt-link
                  to="/building/Fortified_Wall"
                  >垛牆</nuxt-link
                >取代木牆做防守。
              </li>
              <li>
                當對手主要使用近戰單位或軍隊主要由<nuxt-link
                  to="/units/Archer_Units"
                  >遠程單位</nuxt-link
                >組成時，木牆也可以有很大的幫助。一些木牆可以阻擋和分散敵人砲火，在戰鬥中爭取決定性的數秒。
              </li>
              <li>
                木牆絕對是遊戲最偉大的建築之一，他在初期的防禦與拖延對手的進攻相當重要，如果一位玩家懂得圍牆，那實力將上升不少。木牆相當的便宜，且建築時間也短。如果常看高手的對戰紀錄，那將會發現圍牆的奧妙之處，頂尖玩家們將圍牆蓋得出神入化。
              </li>
              <li>
                木牆的作用非常多，除了最主要的功能阻止敵人進攻外，還可以圍住對方的資源，塔攻時把木牆蓋在箭塔下，阻止對方<nuxt-link
                  to="/units/Villager"
                  >村民</nuxt-link
                >來拆塔，形成一個人工的垛牆。
              </li>
            </div>
          </div>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">無</td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              除了<nuxt-link to="/units/Monk">僧侶</nuxt-link>外的全部單位。
            </td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/CastleAgeUnique.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Great_Wall">長城</nuxt-link>:+30%
              HP，<nuxt-link to="/civs/Chinese">中國</nuxt-link>限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">工作速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >(+20%工作效率)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：木牆在<nuxt-link to="/techs/age/Dark_Age">黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多10%/20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對木牆有利的技術在<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代價格便宜15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：木牆建築速度快33%
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：木牆建築速度快30%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Treadmill_Crane"
                >滑輪起重機</nuxt-link
              >的速度提高80%。
            </li>
            <li><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：木牆便宜50%</li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>木牆需要5秒建築時間。</li>
            <li>木牆有2的<nuxt-link to="/armor">遠程護甲</nuxt-link>。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>木牆現在有5的遠程護甲。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>木牆需要5秒建築時間。</li>
            <li>
              引入<nuxt-link to="/building/Palisade_Gate">木門</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>:引入<nuxt-link
                to="/techs/Great_Wall"
                >長城</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>:木牆建造速度快33%
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在<nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link
            >，野蠻人部落因為被東方的其他部落驅趕而流離失所，輾轉在歐洲遷徙尋找土地定居。同時有很多的不法之徒四處搜刮掠奪村莊。在這些動蕩的時期，防禦性的預防措施是必要的。村莊用柵欄-用<nuxt-link
              to="/resource/Wood"
              >木頭</nuxt-link
            >建造的牆壁築起防禦設施。雖然可以建造石牆，但是<nuxt-link
              to="/resource/Wood"
              >木材</nuxt-link
            >多且易於使用，並且可以提供一小段建造石牆需要的時間。在
            晚上村民們將所有的牲畜，貨物和工具放在柵欄內好保護它們。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                木牆
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Palisadewallicon.png" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">防禦</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">功能</td>
            <td class="unit4">抵禦敵方單位，延緩敵方進攻</td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">6秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">1x1</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">250</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_wall_and_gate"
                >牆與門</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">2</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Wun和賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Palisadegold.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>木牆可以在遊戲早期守護重要的資源。</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbuilding',
  components: {}
}
</script>
<style></style>
