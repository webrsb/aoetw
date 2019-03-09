<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>羅亞爾河大掃蕩</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>羅亞爾河大掃蕩</b>是在貞德<nuxt-link to="/batt">戰役</nuxt-link
            >第三個劇情關卡，羅亞爾河戰役是百年戰爭中一場由<nuxt-link
              to="/units/hero/Joan_of_Arc_Champion"
              >聖女貞德</nuxt-link
            >發動，完全掃蕩羅亞爾河流域英軍和勃艮第軍的戰役。
          </p>
        </div>
        <h2>遊戲者</h2>
        <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tc4" colspan="4" style="background: #2980b9;">
              玩家本身
            </td>
          </tr>
          <tr>
            <td class="tc6"><div class="p1">玩家1</div></td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Franks">法蘭克人</nuxt-link>（藍色）
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
          </tr>
          <tr></tr>
          <tr>
            <td class="tc6"><div class="p6" width="12%">玩家2</div></td>
            <td class="tc6" width="38%">
              勃根地（紫色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
            </td>
            <td class="tc6"><div class="p2" width="12%">玩家3</div></td>
            <td class="tc6" width="38%">
              <nuxt-link to="/civs/Britons">英國</nuxt-link>（紅色）<nuxt-link
                to="/civs/Britons"
                >不列顛</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="tc6"><div class="p8">玩家4</div></td>
            <td class="tc6">霍士道夫的軍隊（橘色）敵對</td>
          </tr>
        </table>

        <h2>戰役說明</h2>
        <div class="hrn1"></div>
        <div class="row">
          <div class="col-md-4">
            <h3>開場設定</h3>
            <ul>
              <li>
                <strong>起始時代：</strong>
                <img class="gg" src="~assets/Feudal-age-reseach.jpg" alt="" />
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </li>
              <li>
                <strong>起始資源：</strong>500<nuxt-link to="/resource/Food"
                  >食物</nuxt-link
                >，700<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >，50<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >，150<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </li>
              <li><strong>人口上限：</strong>75</li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3>起始單位</h3>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Joanofarcicon.png"
                  alt=""
                /><nuxt-link to="/units/hero/Joan_of_Arc_Champion"
                  >聖女貞德</nuxt-link
                >
              </li>
              <li>
                <img class="gg" src="~assets/Lahire.png" alt="" /><nuxt-link
                  to="/units/hero/La_Hire"
                  >拉海爾</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/ScoutCavalryIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>
              </li>
              <li>
                <img class="gg" src="~assets/KnightIcon.jpg" alt="" /><nuxt-link
                  to="/units/Knight"
                  >騎士</nuxt-link
                >*4
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/PikemanIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>*4
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/CrossbowmanIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>*12
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/VillagerMaleIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Villager">村民</nuxt-link>*4
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3>大地之母</h3>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/TransportShipIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link>*2
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/DemoShipIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link>*2
              </li>
            </ul>
          </div>
        </div>
        <h3>主要任務</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ol>
            <li>
              最少要破壞三座英國人的<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >。貞德必須活著。
            </li>
          </ol>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                羅亞爾河大掃蕩
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Joan3map.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">情景信息</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                戰役關卡編號
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第二章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Maid_of_Orleans">奧爾良的少女</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Rising">叛變</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、亞諭協助編輯。</div>
        <p></p>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的羅亞爾河大掃蕩
            <div style="margin-left: 10px;">
              <i
                ><strong
                  ><a href="http://tinyurl.com/ycbrmndr"
                    >羅亞爾河戰役</a
                  ></strong
                ></i
              >
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h3>任務提示</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              在攻擊英國人的城堡之前，要先肯定你有足夠的<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >。
            </li>
            <li>在越過河流以及往東的地方，應該會有足夠的資源供你建造城鎮。</li>
          </ul>
        </div>
        <h3>細節</h3>
        <div class="hrn1"></div>
        <ul>
          <li>
            就算霍士道夫的軍隊基地被玩家打敗了，約翰·霍士道夫爵士和幾名<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >部隊仍然會在玩家摧毀第一座英國城堡後突襲玩家。
          </li>
          <li>
            儘管約翰·霍士道夫在這種情況下可以被殺害，但史實上他逃脫了帕提戰役（羅亞爾河戰役的最高潮）。
          </li>
          <li>
            與<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
            ><nuxt-link to="/batt/Montezumaa">蒙特蘇馬戰役</nuxt-link
            >的<nuxt-link to="/batt/The_Triple_Alliance">三國同盟</nuxt-link
            >關卡和<nuxt-link to="/civs/Huns">匈奴</nuxt-link
            ><nuxt-link to="/batt/Attila_the_Huna">阿提拉戰役</nuxt-link
            >的<nuxt-link to="/batt/A_Barbarian_Betrothal">蠻族的婚約</nuxt-link
            >關卡一樣有增援部隊，情況不同的是，在摧毀第一座英國城堡之前，提早摧毀霍士道夫的基地並剷除他們的所有部隊，也不能阻止霍士道夫的增援部隊前來。
          </li>
          <li>在整場遊戲期間，霍士道夫會一直在嘲諷玩家（即使他被擊敗）。</li>
        </ul>
        <h2>概述</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              場景開始時玩家在地圖西北側，往西北走一些會得到兩艘<nuxt-link
                to="/units/Transport_Ship"
                >運輸船</nuxt-link
              >和兩艘<nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link
              >，用運輸船運送部隊過河，上岸後往西走一小段會找到五隻羊，玩家可以選擇帶上牠們或不要理牠們。接下來往東邊走會遇到一條河，經過河流淺灘處後繼續往東走，然後再往北修正一點再走一段路到達地圖的最東側，用<nuxt-link
                to="/units/Scout_Cavalry"
                >斥候</nuxt-link
              >先探勘地圖是不錯的選擇，如果看到不列顛的<nuxt-link
                to="/building/Stone_Wall"
                >城牆</nuxt-link
              >記得先離遠點，你還無法處理他們。
            </li>
            <p></p>
            <div class="row">
              <div class="col-md-6">
                <gallery
                  ><img
                    position="centered"
                    class="imgn hg"
                    width="500"
                    src="~assets/Joan_of_Arc2_5.jpg"
                    alt=""
                /></gallery>
                <p><em>讓軍隊用運輸船渡河。</em></p>
              </div>
              <div class="col-md-6">
                <gallery
                  ><img
                    position="centered"
                    class="imgn hg"
                    width="500"
                    src="~assets/Joan_of_Arc2_4.jpg"
                    alt=""
                /></gallery>
                <p><em>越過淺灘朝霍士道夫前進。</em></p>
              </div>
            </div>
            <li>
              地圖最東側是霍士道夫的基地，用你的<nuxt-link
                to="/units/Crossbowman"
                >弩兵</nuxt-link
              >屠殺<nuxt-link to="/units/Villager">村民</nuxt-link
              >，但記得讓軍隊遠離<nuxt-link to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >，等村民出來在殺光他們，然後破壞城鎮中心。只要村民死光城鎮中心陷落霍士道夫就會投降，在這邊建立你的強大經濟體。
            </li>
            <li>
              先建造城鎮中心跟數棟房子，城鎮中心盡量離資源如木頭或是金礦近一點，玩家的南方有大量尚未使用的石頭和金礦，專注升級到<nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >和<nuxt-link to="/batt/Training_the_Troops">訓練軍隊</nuxt-link
              >，剩下的敵人都只能到城堡時代而且不會訓練<nuxt-link
                to="/units/Battering_Ram"
                >輕型衝撞車</nuxt-link
              >，玩家只需要用城堡守護基地就好。
            </li>
            <p></p>
            <div class="row">
              <div class="col-md-6">
                <gallery
                  ><img class="imgn hg" src="~assets/Joan_of_Arc2_7.jpg" alt=""
                /></gallery>
                <p><em>摧毀霍士道夫的城鎮中心。</em></p>
              </div>
              <div class="col-md-6">
                <gallery
                  ><img class="imgn hg" src="~assets/Joan_of_Arc2_8.jpg" alt=""
                /></gallery>
                <p><em>霍士道夫突然出現在基地內！</em></p>
              </div>
            </div>
            <li>
              東北方的城堡比較難進攻，玩家應盡量選擇另外三座城堡。當你要進攻<nuxt-link
                to="/civs/Britons"
                >不列顛人</nuxt-link
              >的城堡時，記得在不列顛人的城牆邊建造你自己的城堡，還有<nuxt-link
                to="/units//building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >以及<nuxt-link to="/building/Stable">馬廄</nuxt-link
              >，生產<nuxt-link to="/units/Knight">騎士</nuxt-link
              >和輕型衝撞車並升級他們，用<nuxt-link to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >或是<nuxt-link to="/units/Petard">爆炸桶</nuxt-link
              >在牆上鑿出個洞，用騎士對付<nuxt-link to="/units/Longbowman"
                >長弓兵</nuxt-link
              >，衝撞車攻擊城堡。剩下的兩座城堡重複此動作。當第一座城堡陷落時會有一些騎兵和<nuxt-link
                to="/units/Capped_Ram"
                >裝甲衝撞車</nuxt-link
              >攻擊你的基地。留下5名騎士保衛應該足以對付他們了。如果玩家使用其他策略而沒有提早殲滅霍士道夫的城鎮，霍士道夫會在第一座城堡陷落時隨著12名騎兵和6台裝甲衝撞車朝玩家而來。一旦三座城堡陷落後就獲勝了。
            </li>
            <p></p>
            <div class="row">
              <div class="col-md-6">
                <gallery
                  ><img class="imgn hg" src="~assets/Joan_of_Arc2_3.jpg" alt=""
                /></gallery>
                <p><em>對最後一座城堡做總攻擊。</em></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <gallery
                  ><img class="imgn hg" src="~assets/Joan_of_Arc2_2.jpg" alt=""
                /></gallery>
                <p><em>勝利！</em></p>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
