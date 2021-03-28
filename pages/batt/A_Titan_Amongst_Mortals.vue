<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>神在人間</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>神在人間</b>是<nuxt-link to="/batt/Tamerlane">帖木兒戰役</nuxt-link>的第六關也是最終關。本關的原型是安卡拉之戰，在給黎凡特地區帶來毀滅之後，<nuxt-link to="/units/hero/Tamerlane">帖木兒</nuxt-link>將與顎圖曼帝國的蘇丹巴耶塞特一世進行決戰。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                2000<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >／2000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／5000<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／500<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
            </tr>
          </table>

          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家1
              </td>
              <td class="tc6" colspan="6">
                <nuxt-link to="/civs/Tatars">韃靼人</nuxt-link>（紫色）
              </td>
            </tr>

            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家5
              </td>
              <td class="tc6">顎圖曼外援部隊（綠色）<nuxt-link to="/civs/Turks">土耳其</nuxt-link></td>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家6
              </td>
              <td class="tc6">土庫曼人（黃色）<nuxt-link to="/civs/Tatars">韃靼</nuxt-link></td>
            </tr>
            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家2
              </td>
              <td class="tc6">蘇丹巴耶塞特一世（青色）土耳其</td>
              <td class="tc6" width="14%">
                <div class="p2"></div>
                玩家3
              </td>
              <td colspan="3" class="tc6">醫院<nuxt-link to="/units/Knight">騎士</nuxt-link>團（紅色）<nuxt-link to="/civs/Teutons">條頓</nuxt-link></td>
            </tr>

            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家4
              </td>
              <td class="tc6">
                顎圖曼帝國（藍色）土耳其
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場：</dt>
            <dd>
              <nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>x15、<nuxt-link to="/units/Heavy_Cavalry_Archer">重裝馬弓騎兵</nuxt-link>x20、<nuxt-link to="/units/Keshik">怯薛</nuxt-link>x20、<nuxt-link to="/units/Villager">村民</nuxt-link>x20
            </dd>
          </dl>
          <h3>任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>第一階段</p>
            <ul>
              <li>準備防守，巴耶塞特將在30分鐘後展開攻擊。</li>
              <li>打敗巴耶塞特的軍隊和外援部隊。</li>
              <li>
                次要任務：襲擊外圍的鄂圖曼營地(4，藍色)，削弱巴耶塞特的軍隊。
              </li>
              <li>
                次要任務：派出一名使者前往東邊的要塞拜訪土庫曼的埃米爾塔赫滕(6，黃色)。<br />→派5名<nuxt-link to="/units/Keshik">精銳怯薛</nuxt-link>前往塔赫滕的大本營，為他訓練士兵。
              </li>
              <li>
                次要任務：在您營地西邊的河對岸與安納托利亞的采邑騎兵指揮官見面。<br />→摧毀<nuxt-link to="/techs/Sipahi">采邑騎兵</nuxt-link>營地西南的兩座顎圖曼補給營地。
              </li>
              <li>
                次要任務：與巴耶塞特營地的瓦拉幾亞外援部隊停戰。<br />→向瓦拉幾亞外援部隊(玩家5)進貢500<nuxt-link to="/resource/Gold">黃金</nuxt-link>，說服他們拋下巴耶塞特逃跑。
              </li>
              <li>次要任務：拜訪巴耶賽地營地南邊的巴爾幹外援部隊的指揮官。</li>
            </ul>
            <p>第二階段</p>
            <ul>
              <li>
                攻陷南邊的顎圖曼山中要塞，逼迫巴耶賽特離開<nuxt-link to="/building/Castle">城堡</nuxt-link>，好俘虜他。
              </li>
              <li>打敗醫院騎士團。</li>
              <li>
                次要任務：摧毀防守斯麥納<nuxt-link to="/building/Harbor">海港</nuxt-link>的城堡和兩座<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link>，阻止抵達港口的補給船。
              </li>
            </ul>
          </div>
          <h3>提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的勢力人口上限為200。
              </li>
              <li>
                您能否迎擊巴耶塞特的進攻，取決於在戰鬥開始前，您如何設法削弱他的軍隊。摧毀敵人外圍營地，爭取外援部隊能夠增加您的勝算。
              </li>
              <li>
                在擊潰巴耶賽特的進攻前，需要不惜代價避開地方權力中心。將注意力集中在劫掠補給營地和說服土耳其外援部隊逃跑上。
              </li>
              <li>
                帖木兒隨行攜帶了大量黃金，但並非用之不竭的。快速建立經濟系統，為軍隊尋找新的收入來源。
              </li>
              <li>
                火器單位威力很大。注意敵人的此類單位，同時妥善利用您自己的單位。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                帖木兒的軍隊(1，紫色)已經抵達鄂圖曼帝國的心臟地區安納托利亞，必須盡快在當地建立基地。
              </li>
              <li>
                帖木兒的主要對手是鄂圖曼蘇丹巴耶賽特(2，青色)，他已經將軍隊移動到中央並紮營。迎戰巴耶塞特時，您會遇到<nuxt-link to="/units/Janissary">土耳其火槍兵</nuxt-link>、<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>和<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>。
              </li>
              <li>
                巴耶塞特的軍隊有數支外援部隊(5，綠色)，其中一些人忠誠度十分可疑。安納托利亞貝里克斯的采邑騎兵軍中有<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>和<nuxt-link to="/units/Heavy_Camel">重裝駱駝騎兵</nuxt-link>黑<nuxt-link to="/civs/Tatars">韃靼人</nuxt-link>手下有<nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link>和<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>，瓦拉幾亞人帶來了<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>和<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>，巴爾幹外援部隊則由<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link>和<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>組成。
              </li>
              <li>
                顎圖曼帝國(4，藍色)控制著數座分佈在地圖各處的小型補給營地，但主要透過南方較遠處的一座危險的山中要塞運作。準備面對鄂圖曼最精銳的軍隊，包括<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link>、土耳其火槍兵、馬弓騎兵、劍兵和火砲。
              </li>
              <li>
                醫院騎士團的騎士(3，紅色)控制著西邊的斯麥那城。這支騎士團中的十字軍騎士有些騎馬，有些步行，並有<nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>、<nuxt-link to="/units/Monk">僧侶</nuxt-link>和強大的<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link>輔助。
              </li>
              <li>
                塔赫滕是土庫曼本地的一名埃米爾，統治著地圖東部的埃爾津詹大本營(6，黃色)。他的立場不明，但手中有一支龐大的<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>部隊。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <p>第一階段</p>
          <ul>
            <li>
              帖木兒帶著大軍和大量的資源開始本關。快速建立起經濟系統，將所有需要蓋的<nuxt-link to="/building">建築</nuxt-link>蓋一蓋，但是<nuxt-link to="/techs">科技</nuxt-link>僅需研發<nuxt-link to="/units/Keshik">精銳怯薛</nuxt-link>、<nuxt-link to="/techs/Timurid_Siegecraft">帖木兒攻城術</nuxt-link>以及重要兵種的升級等，理由後述。一開始有30分鐘的時間準備，30分後就要和中央的<nuxt-link to="/civs/Turks">土耳其人</nuxt-link>進行決戰。此時地圖有標記一些地區，有任務給玩家以及摧毀<nuxt-link to="/building">建築</nuxt-link>可以弱化敵人攻勢、研究<nuxt-link to="/techs">科技</nuxt-link>。
            </li>
            <li>
              拜訪西邊的綠色營地，他會要你清除左方的藍色陣地，清除後他的軍隊會加入；東方黃色的城堡那裡如果帶五隻<nuxt-link to="/units/Keshik">精銳怯薛</nuxt-link>給他，會得到一支<nuxt-link to="/units/Tarkan">答剌罕騎兵</nuxt-link>和<nuxt-link to="/units/Camel_Archer">駱駝弓騎兵</nuxt-link>，且在第二階段開始後他會訓練軍隊參戰；東南方的綠色陣地說如果給他500金，他會帶領他的部隊撤離戰場；至於西南方的綠色陣地不會叛變，只能將之消滅掉。
            </li>
            <li>
              在這過程中，途中藍色的建築也一併掃蕩，破壞<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>可以獲得科技（全部破壞會得到全部的三級攻防、<nuxt-link to="/techs/Chemistry">化學</nuxt-link>和<nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link>），破壞一處兵營幫你研發<nuxt-link to="/units/Halberdier">戟兵</nuxt-link>，破壞<nuxt-link to="/building/Mill">磨坊</nuxt-link>會奪取庫存的<nuxt-link to="/resource/Food">食物</nuxt-link>、破壞軍事設施會減少騎兵和<nuxt-link to="/units/Gunpowder_Unit">火藥</nuxt-link>部隊的訓練速度。
            </li>
            <li>
              如果速度夠快，應該可以在25鐘左右掃蕩完畢，就算還沒掃蕩完成也請先到基地回防，30分鐘後綠色會轉敵對，跟青色一起向我方的基地進攻。擊退他們的攻勢後，中央的營地就會轉移給黃色，巴耶塞特會逃到最南方的城堡，醫院騎士團會開始出兵攻擊我方，進入第二階段。
            </li>
          </ul>
          <p>第二階段</p>
          <ul>
            <li>
              任務目標轉變成擊敗醫院騎士團，以及俘虜巴耶塞特。如果有達成黃色的要求則他會開始出兵協助我方。醫院騎士團有<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link>和城堡等<nuxt-link to="NOLINKS">防禦建築</nuxt-link>，因此必須準備<nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>、巨型投石機搭配精銳怯薛（或是如果您喜歡也可以用<nuxt-link to="/units/Cavalier">重裝騎士</nuxt-link>或<nuxt-link to="/units/Elite_Steppe_Lancer">精銳草原騎兵</nuxt-link>）、重裝馬弓騎兵進攻。有個支線任務是要摧毀防守海軍的<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link>和<nuxt-link to="/building/Castle">城堡</nuxt-link>，基本上影響不大，畢竟完成任務的同時也幾乎是要滅掉他們了。
            </li>
            <li>
              最後是往下方的土耳其基地進攻，一樣有城堡和火砲塔，甚至有<nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link>，可以派馬弓幫忙清。一樣派巨投搭配騎兵隊壓境，清兵時小心敵人的火砲，慢慢地朝敵人基地內部推進。只要把青色的城堡砸到快毀掉後，青色和藍色就會和我方轉同盟。只要達成以上兩個任務，整個戰役就宣告結束。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">神在人間</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              （地圖待補）
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役資訊</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">
              <nuxt-link to="/games/de">決定版</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Tamerlane">帖木兒</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役關卡編號</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">
              帖木兒第六章
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4"><nuxt-link to="/batt/Scourge_of_the_Levant">黎凡特的災禍</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>
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
