<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>農田</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <b>農田</b>是一個經濟建設，他提供175<nuxt-link to="/resource/Food"
            >食物</nuxt-link
          >，隨著農業<nuxt-link to="/techs">科技</nuxt-link>提升在<nuxt-link
            to="/techs/age/Imperial_Age"
            >帝王時代</nuxt-link
          >可提供550食物。
        </div>
        <h3>戰術要點</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              每塊農田只由一位<nuxt-link to="/units/Villager">村民</nuxt-link
              >耕種與採集食物。農田不會阻擋友軍或是敵軍的移動路徑，敵方村民也可在滑鼠點擊農田後直接接管農田。農田在<nuxt-link
                to="/building/Mill"
                >磨坊</nuxt-link
              >點擊自動排隊後會自動翻新
            </li>
            <li>
              農田應該散佈在<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >跟<nuxt-link to="/building/Mill">磨坊</nuxt-link
              >的周圍讓村民有最短的工作距離(通常是兩塊田的距離)。村民在農田上的走動通常在農田左側，所以一開始把農田放在<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >和<nuxt-link to="/building/Mill">磨坊</nuxt-link
              >的右邊可以減少村民回程放食物的時間。
            </li>
            <li>
              若在科技(<nuxt-link to="/techs/Horse_Collar">獸耕技術</nuxt-link
              >、<nuxt-link to="/techs/Heavy_Plow">重型耕犁</nuxt-link
              >、<nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link
              >)升級完前農田就被建好，那農田是吃不到加成的，要升級完後再蓋才有完整加成。
            </li>
            <li>
              農田的地基，尚未建設時，要小心被敵人打到，要不然直接60<nuxt-link
                to="/resource/Wood"
                >木頭</nuxt-link
              >化為泡影。
            </li>
          </ul>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">科技升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">農田產量</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/horse_collar.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Horse_Collar">獸耕技術</nuxt-link>+75
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/heavy_plow.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Heavy_Plow">重型耕犁</nuxt-link>+125
              </p>
              <p>
                <img
                  class="gg"
                  src="~assets/crop_rotation.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link>+175
              </p>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">建築速度</td>
            <td class="tta4">
              <p>
                <img
                  class="gg"
                  src="~assets/treadmill_crane.png"
                  width="30"
                  alt=""
                /><nuxt-link to="/techs/Treadmill_Crane">磨坊水車</nuxt-link
                >+20%
              </p>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">農田</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/farm.png" class="img-fluid" alt="" />
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
            <td class="unit4">經濟</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">需要建設</td>
            <td class="unit4">
              <nuxt-link to="/building/Mill">磨坊</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">15秒</td>
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
            <td class="unit4">60</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">3x3</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="unit4">480</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              ><br /><nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">1</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Wun和賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>農田產量表</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            下面列出農田在每個時代的產量。農夫種植的速度比<nuxt-link
              to="/units/Fishing_Ship"
              >漁船</nuxt-link
            >從魚網捕魚的速度稍微快一些，但是一直到帝王時代後期，農夫都還是比較不划算的(漁船自己消耗的木頭也算在內)，但真正的收集速率取決於在路程上(採集者跟採集點的距離)的交通。
          </p>
        </div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td><nuxt-link to="/building">建築物</nuxt-link></td>
            <td>整體食物提供</td>
            <td>
              每個<nuxt-link to="/resource/Wood">木材</nuxt-link>生產的食物
            </td>
          </tr>
          <tr>
            <td class="tta1">農田</td>
            <td class="tta2">175</td>
            <td class="tta3">2.92</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/farm.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Farm">農田</nuxt-link>(研發
              <img
                src="~assets/horse_collar.png"
                width="30"
                alt=""
                class="gg"
              /><nuxt-link to="/techs/Horse_Collar">獸耕技術</nuxt-link>+75)
            </td>
            <td class="tta2">250</td>
            <td class="tta3">4.17</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/farm.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Farm">農田</nuxt-link>(研發
              <img
                src="~assets/heavy_plow.png"
                width="30"
                alt=""
                class="gg"
              /><nuxt-link to="/techs/Heavy_Plow">重型耕犁</nuxt-link>+125)
            </td>
            <td class="tta2">375</td>
            <td class="tta3">6.25</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/farm.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Farm">農田</nuxt-link>(研發
              <img
                src="~assets/crop_rotation.png"
                width="30"
                alt=""
                class="gg"
              /><nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link>+175)
            </td>
            <td class="tta2">550</td>
            <td class="tta3">9.17</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/FishingShipIcon.png"
                width="30"
                alt=""
              /><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>
            </td>
            <td class="tta2">715</td>
            <td class="tta3">7.15</td>
          </tr>
          <tr>
            <td class="tta1">
              <img
                class="gg"
                src="~assets/FishingShipIcon.png"
                width="30"
                alt=""
              /><nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link>+
              <img
                class="gg"
                src="~assets/fish_trap.png"
                width="30"
                alt=""
              /><nuxt-link to="/building/Fish_Trap">漁網</nuxt-link>
            </td>
            <td class="tta2">715</td>
            <td class="tta3">4.09</td>
          </tr>
        </table>

        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>：在<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗</nuxt-link
              >/<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >/<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >，農場擁有+ 10％/ + 20％/ + 30％/ + 40％HP。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：農田的技術在封建/城堡/帝王時代便宜10％/ 15％/ 20％。
            </li>
            <li>
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>：<nuxt-link
                to="/techs/Horse_Collar"
                >獸耕技術</nuxt-link
              >、<nuxt-link to="/techs/Heavy_Plow">重型耕犁</nuxt-link
              >、<nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link>免費。
            </li>
            <li>
              <nuxt-link to="/civs/Japanese">日本</nuxt-link>：磨坊便宜50％。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>：農田不需要磨坊。
            </li>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
              >：農田裡的食物多15％。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：農民工作速度提高15％
            </li>
            <li>
              <nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >：農田建成速度快30%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>：農田便宜33%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link>：農田提供+45食物。
            </li>
            <li>
              <nuxt-link to="/civs/Incas">印加</nuxt-link
              >：農田的團隊建造速度提高100%。
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>
              尚未建造好的農田可以被敵方村民採集，採集後會變成無限農田，但採集速度極慢
            </li>
            <li>尚未開始建造的農田是無敵狀態，即使被攻擊也不會消失</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：農田的食物多20％。
            </li>
            <li>尚未開始建造的農田被敵人打到一下，立即消失</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Mayans">馬雅</nuxt-link>：農田的食物多15％。
            </li>
            <li>尚未建造好農田不能再被敵方村民採集</li>
            <li>
              農田不受擴散攻擊範圍影響，也就是<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >或<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >攻擊目標即使不是農田，但擴散攻擊無法傷害到農田
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >：在4.8版本後，農田不再便宜15％。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
          </h3>
          <ul>
            <li>蓋在紅樹林上的水田，與一般農田無異。</li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              農田可以被<nuxt-link to="/units/Monk">僧侶</nuxt-link>"治療"。
            </li>
          </ul>
        </div>
        <h3>歷史</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <em
              >延伸閱讀：<a href="http://tinyurl.com/y7jwme3m" target="_blank"
                >中古世紀歐洲農業發展</a
              >、<a
                href="http://fishleong666.blogspot.tw/2016/02/blog-post_27.html"
                target="_blank"
                >歐洲中世紀農業革命</a
              ></em
            >
          </p>
          進入中世紀後，農耕技術進一步得到改善，北歐的土地上往往有茂密的森林，土地下則是豐富的冰川，到了中世紀這些土地被人們整理而變成良田。農業技術方面也得到了改善，有重型耕犁與輪作，並引入了<nuxt-link
            to="/civs/Malay"
            >馬來</nuxt-link
          >協助耕田，與重型犁配合可以更有效率的耕田。歐洲北部特別是西北歐最初使用輕犁，到後來才逐漸改為<nuxt-link
            to="/techs/Heavy_Plow"
            >重型耕犁</nuxt-link
          >。『重型耕犁俗稱“薩克森輪犁”，裝有車輪用以控制犁地的深度，犁頭是垂直的。』這種犁不但可以緊蓋種子；還可以疏鬆土壤，使滲進土壤中的水能集中在作物根部，便於吸收。重型耕犁是翻耕極附黏性的土地和森林地的好工具，但購買重型耕犁需要較大的資金，且要較多牲畜來耕作（一般是幾頭牛拉一架重型耕犁）後發明了新式籠頭和馬軛套在馬肩上，改變了將馬軛系在馬脖上的狀況，使馬的拉力增大。然而一般農家均無財力獨家擁有需用多頭耕畜的重型耕犁，『因而常聯合起來組成犁隊實行共耕；因而也多採取共耕制。』共耕制的實行首先遇到的是用犁時間先後的問題，造成爭端不斷，因此共耕制容易延誤農機。
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Farms.jpg" alt=""
              /></gallery>
              <p><em>農田越整齊離磨坊越近效率越高。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Ricefarm.jpg" alt=""
              /></gallery>
              <p><em>當農田蓋在紅樹林上時，會自動變成水田。</em></p>
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
