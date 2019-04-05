<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>世紀帝國II：帝王世紀</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>世紀帝國II：帝王世紀</b
            >，（縮寫：<b>AOE2</b>、<b>AoK</b>）是一款由全效工作室開發、微軟於1999年發行的即時戰略遊戲。
          </p>
          <p>
            遊戲背景設置於中世紀，玩家能夠從13種不同的<nuxt-link to="/civs"
              >文明</nuxt-link
            >當中選出其中1種進行遊戲，這些文明包括<nuxt-link to="/civs/Britons"
              >不列顛</nuxt-link
            >、<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
            >、塞爾特、哥特、<nuxt-link to="/civs/Teutons">條頓</nuxt-link
            >、<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>、<nuxt-link
              to="/civs/Mongols"
              >蒙古</nuxt-link
            >、<nuxt-link to="/civs/Chinese">中國</nuxt-link>、<nuxt-link
              to="/civs/Japanese"
              >日本</nuxt-link
            >、<nuxt-link to="/civs/Persians">波斯</nuxt-link>、<nuxt-link
              to="/civs/Saracens"
              >薩拉森</nuxt-link
            >、<nuxt-link to="/civs/Turks">土耳其</nuxt-link>和<nuxt-link
              to="/civs/Vikings"
              >維京</nuxt-link
            >。玩家經過收集資源，利用資源來修建自己的城鎮，建立軍隊，然後試圖消滅敵人。遊戲設置5個基於真實歷史的<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >模式，玩家必須按照遊戲指示完成特定的目標。單人模式則分為3種，此外遊戲支援在區域網路、網際網路上進行多人遊戲。
          </p>
          <p>
            2013年4月10日，遊戲公司與Steam合作推出《世紀帝國II》高畫質版（HD
            Edition）版本，以《世紀帝國II：<nuxt-link to="/games/aoc"
              >征服者入侵</nuxt-link
            >》為基礎，該版本主要針對遊戲效能與畫面的強化（改變懸崖圖案、<nuxt-link
              to="/building/Farm"
              >農田</nuxt-link
            >加入瑞穗、視窗左上角資源圖片變更、<nuxt-link to="/units/Mangonel"
              >投石車</nuxt-link
            >不再能摧毀樹木等），及連線功能、社群支援與人工智慧水平的增強，並支援Steamwork的成就、雲端存檔與Workshop。唯有系統少有改變，例如最大人口數提升與部分<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >研發耗時調整。
          </p>
        </div>
        <h3>遊戲</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            遊戲的基本主題是採集資源、建立城鎮、訓練軍隊、對敵方發動戰爭直至分出勝負。隨著遊戲的進展，玩家一般需要經歷四個不同的「時代」：<nuxt-link
              to="/techs/age/Dark_Age"
              >黑暗時代</nuxt-link
            >、<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
            >、<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >和<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >，這四個時代在歷史上的時間跨度約為1000年。
          </p>
          <p>
            玩家每升級到另一個時代，就能生產新的單位、建造新的<nuxt-link
              to="/building"
              >建築</nuxt-link
            >以及研究新的科技。
          </p>
          <p>
            在這個遊戲中，<nuxt-link to="/units/Villager">村民</nuxt-link
            >是最基礎的單位，主要負責採集資源、修造建築。資源可以被用來建造建築、訓練軍事單位、研究科技等。例如，玩家可以在<nuxt-link
              to="/building/Blacksmith"
              >兵工廠</nuxt-link
            >研究<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >相關的科技，以提高步兵的裝甲防禦力。遊戲涉及四種不同的資源：<nuxt-link
              to="/resource/Food"
              >食物</nuxt-link
            >、<nuxt-link to="/resource/Wood">木材</nuxt-link>、<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >和<nuxt-link to="/resource/Stone">石頭</nuxt-link
            >。食物可以透過打獵、採集果實、牧羊、種田、打漁獲得；木材透過伐木獲得；黃金可以透過開採金礦、貿易或收集聖物獲得；石頭則僅能透過開採<nuxt-link
              to="/resource/Stone"
              >石礦</nuxt-link
            >獲得。村民可以將採集之資源放進<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >、<nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link
            >或<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
            >，其資源就被存入「國庫」，並顯示在螢幕上方的資源清單中。透過研發相關科技，村民的能力可以多次升級，使資源的攜帶量及採集效率得到提升。玩家可以修建一個市場用來進行貿易，前面提到的四種資源都能賣出以獲得黃金，或用黃金買入某種資源。某種資源的賣出、買入價格將隨著供求關係而改變。商業貿易除了上面的資源買賣，市場、<nuxt-link
              to="/building/Dock"
              >碼頭</nuxt-link
            >還可以分別生產<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
            >和商船，往返於己方和其他玩家的市場，可以產生黃金。
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2">
                世紀帝國II：帝王世紀
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/AgeofEmpireII.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">遊戲介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">開發商</td>
            <td class="unit4">全效工作室</td>
          </tr>
          <tr>
            <td class="unit3">發行</td>
            <td class="unit4">微軟（Windows版本、Mac版本）</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">發行日期</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">PC版本</td>
            <td class="unit4">1999年9月30日</td>
          </tr>
          <tr>
            <td class="unit3">Steam HD</td>
            <td class="unit4">2013年4月9日</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#d01022;">
              <div class="unititle2" style="color: #fff;">資料片</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">擴充</td>
            <td class="unit4">
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link><br /><nuxt-link
                to="/games/aof"
                >失落的帝國</nuxt-link
              ><br /><nuxt-link to="/games/ak">非洲王國</nuxt-link
              ><br /><nuxt-link to="/games/aor">王者崛起</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由眠協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>文明</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <em>主要文章: <nuxt-link to="/civs">文明</nuxt-link></em>
          </p>
          <p>
            在遊戲中，玩家可以選擇13個文明的其中1種，這13個文明分別是：不列顛、拜占庭、塞爾特、中國、法蘭克、<nuxt-link
              to="/civs/Goths"
              >哥德</nuxt-link
            >、日本、蒙古、波斯、撒拉森、條頓、土耳其和維京。每種文明都有自己的優勢和缺點，能夠使用的兵種和技術也不同，並具有各自的<nuxt-link
              to="/units/Unique_Unit"
              >特殊單位</nuxt-link
            >。此外，如果與同盟並肩作戰，每種文明還能設定有聯盟的優勢，使盟友在某些方面受益。[11]為了增加遊戲的多樣性，玩家在操作不同文明的士兵時，將會聽到不同語言的角色配音。
          </p>
          <p>
            在遊戲中，這13個文明的建築藝術風格分為西歐、中歐、中東、東亞4種。
          </p>
        </div>
        <h3>單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <em>主要文章: <nuxt-link to="/units">單位</nuxt-link></em>
          </p>
          <p>
            每個玩家能夠製造的單位只能小於某個特定的數目（這個數目在遊戲中稱為人口上限），上限最大能達到200，但實際能夠達到的數目與當前的住房、<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >、城鎮中心提供的人口數皆有關。人口最大上限可在進入遊戲之前進行設置，預設為75，最大為200。遊戲引入關於單位管理的兩個新特性：首先是「閒置村民」按鈕，用滑鼠點擊它時，系統會自動定位並選中當前沒有被分配任務的村民；另一個是城鎮中心的警鈴，玩家在需要時可以點擊它，村民會暫停手中的工作，駐紮在附近的城鎮中心、城堡、<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >以躲避敵人的直接攻擊。如果<nuxt-link to="/units/Archer_Units"
              >弓箭手</nuxt-link
            >一類的軍事單位駐紮在上述建築中，可以增加建築的<nuxt-link
              to="/elements/Attack"
              >攻擊力</nuxt-link
            >。
          </p>
          <p>
            軍事單位分為5種：步兵、弓箭手、<nuxt-link to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >、<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
            >和船。某些兵種在面對特定兵種時，會有額外的攻擊補償。例如，通常一般步兵在攻擊騎兵時會處於劣勢，然而<nuxt-link
              to="/units/Spearman"
              >長槍兵</nuxt-link
            >攻擊騎兵時，則有超出攻擊力所示的傷害；攻城武器在面對騎兵時不堪一擊，在攻擊建築時則具有相當大的附加攻擊力。不同兵種之間具有類似剪刀、石頭、布的相生相剋關係，因此玩家需要合理地搭配兵種。遊戲的每種文明皆具有1類獨特單位，例如中國的連弩、不列顛的<nuxt-link
              to="/units/Longbowman"
              >長弓兵</nuxt-link
            >，但維京是個例外，它有2類獨特單位，分別是<nuxt-link
              to="/units/Berserk"
              >狂戰士</nuxt-link
            >和<nuxt-link to="/units/Longboat">維京大戰船</nuxt-link
            >(需要建造城堡才能生產)。這些獨特單位往往比一般的戰鬥單位更強大，但同樣具有相生和相剋關係。除了上述單位，遊戲中還有一類比較特殊的軍事單位：<nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >。僧侶可以將敵方的人員、建築<nuxt-link to="/elements/Conversion"
              >招降</nuxt-link
            >（部分文明的僧侶不能招降建築），只有城鎮中心、<nuxt-link
              to="/building/Monastery"
              >修道院</nuxt-link
            >、<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
            >、農田、<nuxt-link to="/building/Fish_Trap">漁網</nuxt-link
            >(可以讓村民或<nuxt-link to="/units/Fishing_Ship">漁船</nuxt-link
            >耕種敵人放棄的農田和漁網)、<nuxt-link to="/building/Stone_Wall"
              >城牆</nuxt-link
            >、<nuxt-link to="/building/Gate">城門</nuxt-link
            >、城堡無法被招降，同時可以治癒在戰鬥中<nuxt-link
              to="/elements/Hit_points"
              >生命值</nuxt-link
            >降低的本方單位；此外，還能透過聖物收集到修道院中而產生黃金。收集齊5個聖物也是贏得遊戲的一種方式（根據玩家進入遊戲前的設置決定）。
          </p>
        </div>
        <h3>戰役</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <em>主要文章: <nuxt-link to="/batt">戰役</nuxt-link></em>
          </p>
          <p>
            帝王世紀中共有5個劇情戰役，全都是歷史上著名的人與事物，例如貞德率領<nuxt-link
              to="/civs/Franks"
              >法國</nuxt-link
            >人與<nuxt-link to="/civs/Britons">英國</nuxt-link
            >人戰鬥，又或是跟著<nuxt-link to="/units/hero/Genghis_Khan"
              >成吉思汗</nuxt-link
            >入侵歐亞大陸。總計有：<nuxt-link to="/batt/William_Wallacea"
              >威廉華勒斯</nuxt-link
            >、<nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link
            >、<nuxt-link to="/batt/Saladina">沙拉丁</nuxt-link
            >、成吉思汗、<nuxt-link to="/batt/Barbarossa">巴巴羅薩</nuxt-link
            >，其中威廉華勒斯為教學戰役。
          </p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'foot',
  components: {}
}
</script>
<style></style>
