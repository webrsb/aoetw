<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>石牆</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>石牆</b>是防禦性<nuxt-link to="/building">建築</nuxt-link
            >，升到<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >後方可建造，與<nuxt-link to="/building/Palisade_Wall"
              >木牆</nuxt-link
            >相比更為堅固，與木牆相同，石牆是遊戲內非常重要的建築。但在遊戲後期<nuxt-link
              to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >的出現讓<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
            >變得容易被摧毀。
          </p>
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              石牆可保護城鎮安全，減緩敵人<nuxt-link to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >，同時讓您警覺到有攻擊並派出反制單位消滅敵方單位。
            </li>
            <li>
              石牆可以幫助玩家獲得一些時間來訓練自己的單位和加強防禦工事。另外，它們還可以為友軍的<nuxt-link
                to="/units/Archer_Units"
                >遠程單位</nuxt-link
              >和<nuxt-link to="/building">建築物</nuxt-link
              >提供防禦，從而可以從牆後攻擊敵方單位，而不會受到來自近戰單位的攻擊。
            </li>
            <li>
              在石牆後設置<nuxt-link to="/units/Archer">弓箭手</nuxt-link
              >和<nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >遠程攻城武器</nuxt-link
              >可有效重點防禦該區域，像<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >這樣快速移動的近戰單位則可以摧毀破壞城牆的敵方<nuxt-link
                to="/units/Siege_Weapons"
                >攻城單位</nuxt-link
              >。
            </li>
            <li>
              石牆的位置可挑選在某些如森林缺口、湖畔、峭壁地形，或是與金礦<nuxt-link
                to="/resource/Stone"
                >石礦</nuxt-link
              >做連結達到防禦作用，石牆也可用於塔攻時保護<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >，保護<nuxt-link to="/units/Villager">村民</nuxt-link
              >採集資源；也可在<nuxt-link to="/building/House">房屋</nuxt-link
              >旁邊圍一排牆強迫敵人走進<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >的射程範圍。設置<nuxt-link to="/building/Gate">城門</nuxt-link
              >則可讓友軍單位穿過城牆，同時阻止敵方單位進入。
            </li>
            <li>
              防止敵方快攻上蓋<nuxt-link to="/building/Gate">城門</nuxt-link
              >比蓋石牆有用，因為城門佔四格而<nuxt-link
                to="/building/Fortified_Wall"
                >垛牆</nuxt-link
              >佔一格，時間上蓋城門的效益更大
            </li>
          </ul>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tta" colspan="2" style="text-align: center;">
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
          <tr>
            <td class="tta" colspan="2" style="text-align: center;">
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
            <td class="tta1" style="width:10%">建造速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >(+20%建造效率)
            </td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：石牆在封建/<nuxt-link to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >多20%/30%/40%的<nuxt-link to="/elements/Hit_points"
                >血量</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：在<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡</nuxt-link
              >/帝王時代，對石牆有加利的技術價格便宜15％/20％。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              >：石牆便宜15%。(實際花費4塊<nuxt-link to="/resource/Stone"
                >石頭</nuxt-link
              >，如果與<nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >同隊伍，則需要2塊石頭)
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link
              >：石牆建築速度快33%。
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：石牆建築速度快30%。
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
              >和升級<nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link
              ><nuxt-link to="/techs">科技</nuxt-link>的團隊速度提高80%。
            </li>
            <li><nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：石牆便宜50%</li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>石牆從封建時代都是1800HP。</li>
            <li>石牆建造時間為8秒。</li>
            <li>
              升級到垛牆需要200<nuxt-link to="/resource/Food">食物</nuxt-link
              >和100石頭。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              升級到垛牆需要200食物和100<nuxt-link to="/resource/Wood"
                >木材</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              石牆在<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王</nuxt-link
              >的HP分別是900/1800/1800。
            </li>
            <li>石牆現在建造時間為10秒。</li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>:引入<nuxt-link
                to="/techs/Great_Wall"
                >長城</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/civs/Koreans">韓國</nuxt-link
              >：石牆建築速度快33%。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            文明在進步茁壯時可能將其防禦設施升級為石牆。一個精心打造的石牆可以抵禦侵略者，因為要破壞它需要花費相當的時間跟毅力。要奪取一個有城牆圍繞的城鎮或城堡可能需要長時間的圍攻或強大的攻城武器。石牆的建造費時費錢，但在守護重要的戰略地點的時候還是十分值得。最著名的中世紀石牆當屬君士坦丁堡的圍牆。這些城牆在一千年間經受了大大小小的攻擊。儘管君士坦丁堡可能是一個更具吸引力的獎品，但這些圍牆還是盡責地抵擋北部和東部的野蠻人入侵。另一個中世紀著名的石牆是<nuxt-link
              to="/civs/Chinese"
              >中國</nuxt-link
            >的萬里<nuxt-link to="/techs/Great_Wall">長城</nuxt-link
            >。長城始建於秦朝，由後面幾代朝代延伸重建而成。但是中國的邊界太長，長城無法充分成為盾牌。然而它確實提供了<nuxt-link
              to="/civs/Mongols"
              >蒙古</nuxt-link
            >襲擊時的警告。最重要的是，它減緩了越過邊界侵略者的攻擊和撤退，給軍隊一個攔截和追擊的機會。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">
                石牆
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Stonewallicon.png" width="45" alt="" />
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
            <td class="unit4">除了哥德與庫曼以外的所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
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
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">石材</td>
            <td class="unit4">5</td>
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
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Feudal-age-reseach.jpg"
                width="22"
                alt=""
              />900 <br />
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="22"
                alt=""
              />1800 <br />
              <img
                class="gg"
                src="~assets/Imperial-age-research.jpg"
                width="22"
                alt=""
              />1800
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">8</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>(+16)
              <br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_stone_defense"
                >石頭建築</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_wall_and_gate"
                >城牆和城門</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">2</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">建築演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Stonewallicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Fortified_Wall">垛牆</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Fortified-wall-research.jpg"
                alt=""
              />200食物100木材
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">50秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面Wun和賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="180"
                src="~assets/Stonewallaokaoc.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p>
                <em
                  >所有文明的石牆(<nuxt-link to="/games/aok">帝王世紀</nuxt-link
                  >和<nuxt-link to="/games/aoc">征服者入侵</nuxt-link
                  >資料片)。</em
                >
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <gallery
              ><img
                class="imgn hg"
                width="200"
                src="~assets/Stonewallhd.jpg"
                alt=""
            /></gallery>
            <div class="lightbox-caption" style="width:220px">
              <p><em>所有文明的石牆(HD擴充資料片)。</em></p>
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
