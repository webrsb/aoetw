<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>斷矛</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>斷矛</b>是《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》<nuxt-link to="/batt/Montezumaa">蒙特蘇馬戰役</nuxt-link
            >的第六個場景。該<nuxt-link to="/batt">戰役</nuxt-link
            >玩家的敵人科爾特斯和特拉斯卡拉再度來犯，玩家必須守護特諾奇提特蘭。這次科爾特斯有兩個勢力，一個陸軍一個海軍。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <ul>
            <li>
              起始時代：
              <img src="~assets/imperial_age.png" class="gg" alt="" /><nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >
            </li>
            <li>
              起始資源：2,000<nuxt-link to="/resource/Wood">木頭</nuxt-link
              >／500<nuxt-link to="/resource/Food">食物</nuxt-link
              >／500<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >／600<nuxt-link to="/resource/Stone">石頭</nuxt-link>
            </li>
            <li>人口上限：75</li>
            <li>
              開場擁有單位：
              <ul>
                <li>
                  <img
                    src="~assets/VillagerMaleIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Villager">村民</nuxt-link>14個
                </li>
                <li>
                  <img
                    src="~assets/EagleWarriorIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>12個
                </li>
                <li>
                  <img
                    src="~assets/JaguarWarriorIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>8個
                </li>
                <li>
                  <img
                    src="~assets/MonkIcon2.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Monk">僧侶</nuxt-link>2個
                </li>
              </ul>
            </li>
            <li>
              大地之母單位：
              <ul>
                <li>
                  <img
                    src="~assets/TurtleShipIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Turtle_Ship">精銳龜甲船</nuxt-link>3個
                </li>
              </ul>
            </li>
          </ul>
          <h3>AI</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #ea6153;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>（綠色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#2980b9;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家2
              </td>
              <td class="tc6">特拉斯卡拉（紅色）阿茲特克</td>
              <td class="tc6">
                <div class="p1"></div>
                玩家3
              </td>
              <td class="tc6">
                科爾特斯海軍（藍色）<nuxt-link to="/civs/Spanish"
                  >西班牙</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p6"></div>
                玩家4
              </td>
              <td class="tc6" colspan="3">科爾特斯陸軍（紫色）西班牙</td>
            </tr>
          </table>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                擊敗<nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
                >的海軍陸軍和特拉斯卡拉。
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                特諾奇提特蘭是巨大的城市，有各種不同形式的<nuxt-link
                  to="/building"
                  >建築</nuxt-link
                >，所以應該很容易訓練和升級單位。
              </li>
              <li>
                從西班牙和特拉斯卡拉的路上進攻下保護通往城市的橋梁。還要訓練船艦來抵抗西班牙戰船和<nuxt-link
                  to="/units/Transport_Ship"
                  >運輸船</nuxt-link
                >。記住！西班牙的<nuxt-link to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >是非常致命的。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                >回報：阿茲特克（綠色）重新接管了特諾奇提特蘭這個巨大的城市，但是敵人從各個方向接近。
              </li>
              <li>
                特拉斯卡拉（紅色）在西面的堤岸，會以鷹勇士攻擊玩家，也會用運輸船在特諾奇提特蘭西邊登陸。他們的城市防守薄弱，可以早點進攻他們。
              </li>
              <li>
                西班牙海軍在特諾奇提特蘭的南面。西班牙有很多火砲戰船在湖中巡邏，還有<nuxt-link
                  to="/building/Bombard_Tower"
                  >火砲塔</nuxt-link
                >防守堤岸，但還是有可能找到防守薄弱的登陸點。
              </li>
              <li>
                西班牙陸軍在特諾奇提特蘭西北面。他們建造了<nuxt-link
                  to="/building/Gate"
                  >城門</nuxt-link
                >和<nuxt-link to="/building/Castle">城堡</nuxt-link
                >來保護自己。玩家會遇到<nuxt-link to="/units/Knight"
                  >騎士</nuxt-link
                >、<nuxt-link to="/units/Conquistador">西班牙征服者</nuxt-link
                >、<nuxt-link to="/units/Missionary">傳教士</nuxt-link
                >和<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
                >的聯合攻擊。如果陸地進攻不成功的話，他們可能會使用登陸戰。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              本戰役玩家必須保衛特諾奇提特蘭，這座城市非常大，有許多<nuxt-link
                to="/building"
                >建築物</nuxt-link
              >。在北方的海域，玩家可以得到三隻由眾神賜予的精銳龜甲船。特諾奇特蘭的南方橋樑被摧毀，以減緩科爾特斯海軍的進攻。玩家可以安全地從北方小島上的金礦中獲得黃金，因為在島上沒有美洲虎。
            </li>
            <li>
              一開始，玩家需要加強對科爾特斯和特拉斯卡拉地面攻擊的防禦，同時建造<nuxt-link
                to="/units/Fire_Ship"
                >火戰船</nuxt-link
              >抵禦科爾特斯海軍。為了防禦科爾特斯軍隊，玩家需要在北方建立額外的<nuxt-link
                to="/building/Watch_Tower"
                >箭塔</nuxt-link
              >（最初只有一座），並在那裡駐防步兵以摧毀<nuxt-link
                to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >和<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >。防禦特拉斯卡拉，玩家應該在西部建造大門和箭塔。玩家也應盡快升級火戰船和其他相關單位。
            </li>
            <li>
              玩家可以很容易地擊敗科爾特斯軍隊的<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >，只要在他們的大門前安置一個<nuxt-link to="/units/Trebuchet"
                >巨型投石機</nuxt-link
              >就可以摧毀它了。而特拉斯卡拉的防禦在遊戲剛開始時還很薄弱，也需要時間才能建立一個實際的軍隊，可以的話就早點進攻。一旦城鎮中心被摧毀，科爾特斯陸軍就會投降。
            </li>
            <li>
              在特諾奇提特蘭以西的島嶼（通過三座橋樑相連），特拉斯卡拉有兩個<nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >和兩個<nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link
              >在那裡開採黃金，玩家可以輕鬆地將它們奪取下來並開始挖金。穿過該島以北的橋，玩家還可以在科爾特斯基地西面找到金礦。
            </li>
            <li>
              科爾特斯海軍會時常以火砲戰船，<nuxt-link to="/units/Galleon"
                >重型弩砲戰船</nuxt-link
              >、<nuxt-link to="/units/Fast_Fire_Ship">重型火戰船</nuxt-link
              >攻擊你，還會用運輸船帶<nuxt-link to="/units/Siege_Ram"
                >重型衝撞車</nuxt-link
              >、巨型投石機和征服者渡海而來。他們的基地被火砲塔圍繞，不過基地的西面和東面都有漏洞，玩家可以輕鬆地用投石機摧毀火砲塔。但是玩家必須小心，不要讓載有單位的運輸船被塔擊沉。同樣的破壞城鎮中心他們就會投降。如果玩家此時已經擊敗了科爾特斯陸軍和特拉斯卡拉，為了找到科爾特斯海軍的城鎮中心，玩家可以考慮研究是否有大量的黃金研發<nuxt-link
                to="/techs/Spies"
                >間諜</nuxt-link
              >技術，研究的成本會比之前便宜得多是因為大量的敵人村民被消滅了。
            </li>
          </ul>
          <h3>細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              儘管玩家以<nuxt-link to="/civs/Aztecs">阿茲特克人</nuxt-link
              >的身分贏得了戰役，但實際上特諾奇提特蘭包圍戰是西班牙人和特拉斯卡拉人的勝利，也導致了阿茲特克帝國的垮台，當時的皇帝<nuxt-link
                to="/units/hero/Cuauhtemoc"
                >庫奧赫特莫克</nuxt-link
              >在幾年後就被殺害。
            </li>
            <li>
              這個戰役使用跟"悲傷之夜"同樣的地圖，呈現了特諾奇提特蘭和周圍的雨林
            </li>
            <li>
              儘管使用了相同地圖，所有玩家的開始位子都交換過。同樣的特諾奇提特蘭周圍的樹木位置也有變更過。
            </li>
            <li>
              在這個戰役中科爾特斯海軍訓練的單位跟第四戰役的幾乎相同：重型弩砲戰船、重型火戰船、<nuxt-link
                to="/units/Elite_Cannon_Galleon"
                >精銳火砲戰船</nuxt-link
              >、<nuxt-link to="/units/Halberdier">戟兵</nuxt-link
              >、精銳征服者和傳教士。唯一不同是在這最後戰役中，他們選擇訓練重型衝撞車而不是投石車。
            </li>
            <li>
              玩家的<nuxt-link to="/building/Wonder">世界奇觀</nuxt-link
              >取代了在第四戰役中科爾特斯的奇觀，並擁有“被征服的阿茲特克人”的大部分建築物。但是玩家不需要守護這個世界奇觀。
            </li>
            <li>
              本戰役中特拉斯卡拉在第四戰役開場時的單獨的豹勇士出現的相同位置建立了他們的基地。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                斷矛
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/蒙特蘇馬六.png" alt="" />
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Montezumaa">蒙特蘇馬</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">玩家顏色</td>
            <td class="unit4">
              <div class="p3"></div>
              綠色
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第三章之六
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Boiling_Lake">沸騰的湖</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由賜齡、裕暉協助編輯。</div>

        <div class="row">
          <div class="col-md-12">
            <div class="wiki" style="margin-top: 5px;">
              <div style="float: left;">
                <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
              </div>
              <div style="margin-left: 60px;">
                維基百科上的特諾奇提特蘭
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        target="_blank"
                        href="https://zh.wikipedia.org/wiki/%E7%89%B9%E8%AB%BE%E5%A5%87%E6%8F%90%E7%89%B9%E8%98%AD"
                        >特諾奇提特蘭</a
                      ></b
                    ></i
                  >
                </div>
              </div>
            </div>
          </div>
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
