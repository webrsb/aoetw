<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>垛牆</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            垛牆是防禦性建築，升到<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >後在<nuxt-link to="/building/University">學院</nuxt-link
            >研究垛牆方可建造，是一個很好的防禦建築。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              垛牆可保護城鎮安全，減緩敵人攻擊速度，同時讓您警覺到有攻擊並派出反制單位消滅敵方單位。
            </li>
            <li>
              垛牆可以幫助玩家獲得一些時間來訓練自己的單位和加強防禦工事。另外，它們還可以為友軍的遠程單位和建築物提供防禦，從而可以從牆後攻擊敵方單位，而不會受到來自近戰單位的攻擊。
            </li>
            <li>
              如果玩家通過“
              <nuxt-link to="/building/Wonder">世界奇觀</nuxt-link>”或“
              遺跡”尋求勝利，則垛牆將成為防禦的重要元素，因為它們將有助於阻止敵隊攻擊世界奇觀或擁有遺跡的修道院進而獲得最終勝利。在垛牆後設置弓箭手和遠程攻城武器可有效重點防禦該區域，像騎兵這樣快速移動的近戰單位則可以摧毀破壞城牆的敵方攻城單位。
            </li>
            <li>
              垛牆的位置可挑選在某些如森林缺口、湖畔、峭壁地形，或是與金礦石礦做連結達到防禦作用，垛牆也可用於塔攻時保護箭塔，保護村民採集資源；也可在
              <nuxt-link to="/building/House">房屋</nuxt-link
              >旁邊圍一排牆強迫敵人走進城鎮中心的射程範圍。設置<nuxt-link
                to="/building/Gateicon_Gate"
                >城門</nuxt-link
              >則可讓友軍單位穿過城牆，同時阻止敵方單位進入。
            </li>
            <li>
              防止敵方快攻上蓋城門比蓋垛牆有用，因為城門佔四格而垛牆佔一格，時間上蓋城門的效益更大，不過城門蠻貴的。
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
                  ><span
                    class="glyphicon glyphicon-ok okc"
                    aria-hidden="true"
                  ></span
                  ><span class="" style="margin-left: 2px;"
                    >可研發</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、
              <nuxt-link to="/civs/Berbers">柏柏</nuxt-link>、
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link>、
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>、
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>、
              <nuxt-link to="/civs/Celts">賽爾特</nuxt-link>、
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>、
              <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link>、
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、
              <nuxt-link to="/civs/Incas">印加</nuxt-link>、
              <nuxt-link to="/civs/Indians">印度</nuxt-link>、
              <nuxt-link to="/civs/Italians">義大利</nuxt-link>、
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>、
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>、
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>、
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>、
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>、
              <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>、
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>、
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>、
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>、
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link>、
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>。
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>、
              <nuxt-link to="/civs/Vietnamese">越南</nuxt-link>、
              <nuxt-link to="/civs/Vikings">維京</nuxt-link>。
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
                  ><span class="" style="margin-left: 2px;"
                    >不可研發</span
                  ></strong
                >
              </h4>
              <nuxt-link to="/civs/Goths">哥德</nuxt-link>、
              <nuxt-link to="/civs/Huns">匈奴</nuxt-link>、
              <nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>、
              <nuxt-link to="/civs/Malay">馬來</nuxt-link>、
              <nuxt-link to="/civs/Persians">波斯</nuxt-link>。
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
            <td class="tta4">除了僧侶外的全部單位。</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">生命值</td>
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
            <td class="tta1" style="width:10%">建造速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">踏輪起重機</nuxt-link
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
              >：垛牆城堡/帝王時代多30%/40%的血量。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：在城堡/帝王時代，對垛牆有利的技術價格便宜15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              >：垛牆便宜15%。(實際花費4塊石頭，如果與馬雅同隊伍，則需要2塊石頭)
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：垛牆建築速度快33%
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：垛牆建築速度快30%。
            </li>
          </ul>
        </div>
        <h3>團隊加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                to="/techs/Treadmill_Crane"
                >踏輪起重機</nuxt-link
              >團隊速度提高80%。
            </li>
            <li><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：垛牆便宜50%</li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>垛牆建造時間需要8秒。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>垛牆建造時間現在需要10秒。</li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>:引入<nuxt-link
                to="/techs/Great_Wall"
                >長城</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link>：垛牆建築速度快33%
              。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            垛牆是通過在石牆上建立戰鬥位置，這樣防守者可以更有效地防止攻擊，垛牆會保護他們的安全同時允許防守者向牆外的敵人射擊。君士坦丁堡外面的三座垛牆搭配著數百座箭塔，有著堅不可摧的防禦力，這一切直到火砲出現都將改觀。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle"><nuxt-link to="">垛牆</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/Fortified-wall-research.jpg"
                  width="45"
                  alt=""
                />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">概要</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">防禦</td>
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
                src="~assets/Castle-age-reseach.jpg"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">使用</td>
            <td class="unit4">抵禦敵方單位，延緩敵方進攻</td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">10秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">成本</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">石材</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#3c763d;;">
              <div class="unititle2"><nuxt-link to="">數據</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">1x1</td>
          </tr>
          <tr>
            <td class="unit3">血量</td>
            <td class="unit4">3000</td>
          </tr>
          <tr>
            <td class="unit3">近防</td>
            <td class="unit4">12</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">12</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>(+24)
              <br />
              <nuxt-link to="/armor/Armor_Class_standard_building"
                >標準建築</nuxt-link
              >
              <br />
              <nuxt-link to="/armor/Armor_Class_stone_defense"
                >石造建築</nuxt-link
              >
              <br />
              <nuxt-link to="/armor/Armor_Class_wall_and_gate"
                >牆與門</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit3">需求科技</td>
            <td class="unit4">垛牆:200食物100木材</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面Wun和賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-4">
            <nuxt-link to="/img/Fortifiedwallaokaoc.png"
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Fortifiedwallaokaoc.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有文明的垛牆(帝王世紀和征服者入侵資料片)。</em></p>
            </div>
          </div>
          <div class="col-md-4">
            <nuxt-link to="/img/Fortifiedwallhd.png"
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Fortifiedwallhd.png"
                alt=""
            /></nuxt-link>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有文明的垛牆(HD資料片)。</em></p>
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
