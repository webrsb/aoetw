<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>叛變</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>叛變</b>為<nuxt-link to="/batt/Joan_of_Arc"
              >聖女貞德戰役</nuxt-link
            >的第四關關卡，<nuxt-link to="/batt">戰役</nuxt-link
            >描述法軍解放3座英軍控制的城市，並讓法國王子加冕成為<nuxt-link
              to="/civs/Franks"
              >法國</nuxt-link
            >國王（查理七世）。
          </p>
        </div>
        <h2>遊戲者</h2>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tc4" colspan="4" style="background: #2980b9;">
              玩家本身
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p1"></div>
              玩家1
            </td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Franks">法蘭克人</nuxt-link>（藍色）
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
          </tr>

          <tr>
            <td class="tc6">
              <div class="p2"></div>
              玩家2
            </td>
            <td class="tc6">
              <nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >的皇家禁衛軍（紅色）不列顛
            </td>
            <td class="tc6">
              <div class="p3"></div>
              玩家3
            </td>
            <td class="tc6">沙朗（綠色）不列顛</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p4"></div>
              玩家4
            </td>
            <td class="tc6">理姆斯（黃色）不列顛</td>
            <td class="tc6">
              <div class="p8"></div>
              玩家5
            </td>
            <td class="tc6">特洛伊斯（橘色）不列顛</td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                叛變
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Joan4map.png" alt="" />
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
              <nuxt-link to="/games/aok">帝王世紀</nuxt-link>第二章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Cleansing_of_the_Loire"
                >掃蕩羅亞爾</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Siege_of_Paris">巴黎攻城戰</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、亞諭協助編輯</div>
      </div>
    </div>
    <h2>戰役說明</h2>
    <div class="hrn1"></div>
    <div class="row">
      <div class="col-md-4">
        <h3>開場設定</h3>
        <ul>
          <li>
            <strong>起始時代：</strong>
            <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
              to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >
          </li>
          <li>
            <strong>起始資源：</strong>200<nuxt-link to="/resource/Wood"
              >木頭</nuxt-link
            >／200<nuxt-link to="/resource/Food">食物</nuxt-link>／50<nuxt-link
              to="/resource/Gold"
              >黃金</nuxt-link
            >／150<nuxt-link to="/resource/Stone">石頭</nuxt-link>
          </li>
          <li><strong>人口上限：</strong>75</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>起始單位</h3>
        <ul>
          <li>
            <img class="gg" src="~assets/Joanofarcicon.png" alt="" /><nuxt-link
              to="/units/hero/Joan_of_Arc_Champion"
              >聖女貞德</nuxt-link
            >
          </li>
          <li>
            <img
              class="gg"
              src="~assets/ScoutCavalryIcon.png"
              alt=""
            /><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>*2
          </li>
          <li>
            <img class="gg" src="~assets/KnightIcon.png" alt="" /><nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >*6
          </li>
          <li>
            <img class="gg" src="~assets/ManAtArmsIcon.png" alt="" /><nuxt-link
              to="/units/Man-at-Arms"
              >裝甲步兵</nuxt-link
            >*4
          </li>
          <li>
            <img
              class="gg"
              src="~assets/CrossbowmanIcon.png"
              alt=""
            /><nuxt-link to="/units/Crossbowman">弩兵</nuxt-link>*4
          </li>
          <li>
            <img class="gg" src="~assets/MonkIcon.png" alt="" /><nuxt-link
              to="/units/Monk"
              >僧侶</nuxt-link
            >*2
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>大地之母</h3>
        <ul>
          <li>
            <img
              class="gg"
              src="~assets/VillagerMaleIcon.png"
              alt=""
            /><nuxt-link to="/units/Villager">村民</nuxt-link>*6
          </li>
        </ul>
      </div>
    </div>
    <h2>主要任務</h2>
    <div class="hrn1"></div>
    <div class="n1">
      <ol>
        <li>西進以支援法國城鎮。要小心注意沿途的兩旁，貞德必須活著。</li>
        <li>
          破壞特洛伊斯的<nuxt-link to="/building/Town_Center"
            >城鎮中心</nuxt-link
          >。
        </li>
        <li>破壞沙朗的城鎮中心。</li>
        <li>破壞理姆斯的城鎮中心。</li>
      </ol>
    </div>
    <h2>任務提示</h2>
    <div class="hrn1"></div>
    <div class="n1">
      <ul>
        <li>
          取得河流的控制權或許是個不錯的策略，不過可別浪費太多寶貴的資源在<nuxt-link
            to="/units/Naval_Vessels"
            >船艦</nuxt-link
          >的製造上。
        </li>
        <li>
          沙朗是被<nuxt-link to="/civs/Britons">英國</nuxt-link
          >佔據的三個村莊中最近且最有價值的一個。
        </li>
        <li>
          如果能夠儘早以此樹立榜樣，長期來說，將能增加我方的籌碼。切記你的目標是在讓英國軍隊撤退，而非夷平城市。
        </li>
        <li>可將淺灘分別區隔，以減緩敵人的進攻。</li>
      </ul>
      <h2>芝麻小事</h2>
      <div class="hrn1"></div>
      <div class="n1">
        <ul>
          <li>
            此關是勃艮第和英國軍隊唯一沒有出現在關卡的場景。但是，在這種情況下，三座城市仍然是由英軍控制。
          </li>
          <li>
            在進入<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >之後，玩家可以建造一座<nuxt-link to="/building/Wonder"
              >世界奇觀</nuxt-link
            >。但是，這不會導致勝利。
          </li>
          <li>
            這是“<nuxt-link to="/batt/Joan_of_Arc">聖女貞德</nuxt-link
            >”戰役中唯一除了貞德以外沒有其他<nuxt-link to="/units/hero"
              >英雄</nuxt-link
            >的場景。
          </li>
          <li>該關或許翻譯為“起義”會更好</li>
        </ul>
      </div>
      <h2>概述</h2>
      <div class="hrn1"></div>
      <div class="n1">
        <ul>
          <li>
            你一開始有一些軍隊，當你往西前進時會遇到不列顛皇家禁衛軍，有9個<nuxt-link
              to="/units/Man-at-Arms"
              >裝甲步兵</nuxt-link
            >跟6個<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
            >，玩家可以直接解決他們，你也可以選擇往下走會遇到一個<nuxt-link
              to="/building/Guard_Tower"
              >防禦箭塔</nuxt-link
            >，不過你可以從林間的小道穿過去就不會被<nuxt-link
              to="/building/Watch_Tower"
              >箭塔</nuxt-link
            >射到，之後一路往西取得你的<nuxt-link to="/units/Villager"
              >村民</nuxt-link
            >並開始發展經濟體。這裡要注意的是如果選擇先躲過不列顛皇家禁衛軍，之後他們還是會進攻玩家城鎮，不過只要搖響警戒鐘讓城鎮中心處理就好。
          </li>
          <li>
            發展經濟體的時候你可以帶著原有的軍隊往沙朗前進，沙朗有座沒有防禦建築的城鎮在地圖西邊過河流穿越處的地方。他們有<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >、弩砲還有弩兵，如果時間足夠的話也會訓練<nuxt-link
              to="/units/Cannon_Galleon"
              >火砲戰船</nuxt-link
            >。先對付他們的騎士，記得用<nuxt-link to="/units/Monk"
              >僧侶</nuxt-link
            >幫忙<nuxt-link to="/elements/Conversion">招降</nuxt-link
            >1~2隻騎士，之後直接解決弩砲跟弩兵，弩兵可以用貞德對付，然後開始打城鎮中心，可以用拉兵躲避(左右閃避)城鎮中心的箭還有僧侶治療被打的目標來增加其他軍隊攻擊的時間，只要城鎮中心陷落沙朗就會投降，玩家也能開採尚未使用的黃金和石材。
          </li>
        </ul>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/s4.jpg"
                alt=""
            /></gallery>
            <p>
              <em
                >走小道（<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                >所在處）可以暫時躲過不列顛禁衛軍。</em
              >
            </p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Joan4chalon.jpg"
                alt=""
            /></gallery>
            <p><em>沙朗的城鎮中心陷落。</em></p>
          </div>
        </div>
        <li>
          下一個目標是特洛伊斯。特洛伊斯在地圖東邊。在河流穿越處有他們的<nuxt-link
            to="/building/Stone_Wall"
            >城牆</nuxt-link
          >，不過另外一側則完全沒有防備。它們會訓練<nuxt-link
            to="/units/Pikeman"
            >重裝長槍兵</nuxt-link
          >和騎士，也會訓練<nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link
          >。玩家持續發展經濟(村民數建議到50左右，不要高於50)並在原沙朗的位置建造軍事<nuxt-link
            to="/building"
            >建築物</nuxt-link
          >(<nuxt-link to="/building/Stable">馬廄</nuxt-link>、<nuxt-link
            to="/building/Monastery"
            >修道院</nuxt-link
          >、<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>和<nuxt-link
            to="/units//building/Siege_Workshop"
            >攻城器製造所</nuxt-link
          >)還有第二個城鎮中心，如果有488石頭可以蓋一座<nuxt-link
            to="/building/Castle"
            >城堡</nuxt-link
          >做防禦，將貞德留在原本的基地內，開始訓練以騎士為主力的部隊，3~5台的<nuxt-link
            to="/units/Battering_Ram"
            >衝撞車</nuxt-link
          >，並在兵工廠跟馬廄升級他們，就可以攻打特洛伊斯了，也可以升級到帝王時代升級<nuxt-link
            to="/units/Paladin"
            >遊俠</nuxt-link
          >、<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
          >和<nuxt-link to="/units/Trebuchet">巨型投石機</nuxt-link
          >。可以直接派一些村民到特洛伊斯的<nuxt-link to="/building/Market"
            >市集</nuxt-link
          >旁邊蓋城堡提供軍隊在攻擊時的火力掩護，記得也在前線蓋馬廄跟攻城器製造所，城鎮中心陷落後特洛伊斯也會投降。
        </li>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img class="imgn hg" src="~assets/Joan4forwardbase.jpg" alt=""
            /></gallery>
            <p><em>建造軍事建築物和防禦基地。</em></p>
          </div>
          <div class="col-md-6">
            <gallery
              ><img class="imgn hg" src="~assets/Joan4troyes.jpg" alt=""
            /></gallery>
            <p><em>特洛伊斯的城鎮中心陷落。</em></p>
          </div>
        </div>
        <li>
          現在你要面對最危險的敵人理姆斯，理姆斯在地圖北邊深處有座防禦要塞，他們在這場戰役中是可怕的對手。他們會以<nuxt-link
            to="/units/Longbowman"
            >長弓兵</nuxt-link
          >、<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
          >、騎士、<nuxt-link to="/units/Mangonel">投石車</nuxt-link
          >和巨型投石機對付玩家，不過你不去打他們就不會出來。理姆斯有<nuxt-link
            to="/building/Fortified_Wall"
            >垛牆</nuxt-link
          >、<nuxt-link to="/building/Keep">大型箭塔</nuxt-link
          >和城堡防衛基地，而且時間拉長城堡會增加到3~4座擋在城鎮中心前面，還有軍隊防禦著基地。玩家在攻擊理姆斯時會承受非常嚴重的損傷，用巨型投石機跟衝撞車攻破<nuxt-link
            to="/building/Gate"
            >城門</nuxt-link
          >，用遊俠對付其他部隊，然後用所有軍隊集中攻擊城鎮中心來獲得最後勝利。
        </li>
        <div class="row">
          <div class="col-md-6">
            <gallery
              ><img
                position="centered"
                class="imgn hg"
                width="500"
                src="~assets/Joan4rheims.jpg"
                alt=""
            /></gallery>
            <p><em>為了勝利攻破城牆破壞城鎮中心！</em></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style></style>
