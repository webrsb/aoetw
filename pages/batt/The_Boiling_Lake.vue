<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>沸騰之湖</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>沸騰之湖</b>是《<nuxt-link to="/games/aoc"
              >世紀帝國II：征服者入侵</nuxt-link
            >》<nuxt-link to="/batt/Montezumaa">蒙提祖馬戰役</nuxt-link
            >的第五個場景。該<nuxt-link to="/batt">戰役</nuxt-link
            >重現了奧通巴之戰。
          </p>
          <p>
            在該戰役中，蒙提祖馬現在已經死了。<nuxt-link
              to="/units/hero/Cuauhtemoc"
              >庫奧赫特莫克</nuxt-link
            >現在是<nuxt-link to="/civs/Aztecs">阿茲特克人</nuxt-link
            >的皇帝。庫奧赫特莫克必須確保<nuxt-link to="/civs/Spanish"
              >西班牙人</nuxt-link
            >再也不會涉足特諾奇提特蘭。為了獲勝，玩家必須擊敗特拉斯卡拉和科爾特斯。
          </p>
          <p>
            玩家一開始有一個有<nuxt-link to="/building/Town_Center"
              >城鎮中心</nuxt-link
            >和<nuxt-link to="/units/Villager">村民</nuxt-link
            >的島，另一個島則包含軍事<nuxt-link to="/building">建築</nuxt-link
            >。玩家可以捕獲的<nuxt-link to="/units/Trade_Cart"
              >貿易車隊</nuxt-link
            >移動到他們的軍事島上換取大砲，並抓住馬匹來獲得<nuxt-link
              to="/units/Xolotl_Warrior"
              >索洛托勇士</nuxt-link
            >，這些都是阿茲特克人平常不能使用的東西。
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
              起始資源：500<nuxt-link to="/resource/Wood">木頭</nuxt-link
              >／1000<nuxt-link to="/resource/Food">食物</nuxt-link
              >／1000<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >／400<nuxt-link to="/resource/Stone">石頭</nuxt-link>
            </li>
            <li>人口上限：150</li>
            <li>
              開場擁有單位：
              <ul>
                <li>
                  <img
                    src="~assets/VillagerMaleIcon.png"
                    class="gg"
                    alt=""
                  />村民4個
                </li>
                <li>
                  <img
                    src="~assets/EagleWarriorIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>15個
                </li>
                <li>
                  <img
                    src="~assets/JaguarWarriorIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Jaguar_Warrior">豹勇士</nuxt-link>11個
                </li>
                <li>
                  <img
                    src="~assets/ArbalestIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Arbalest">強弩兵</nuxt-link>10個
                </li>
                <li>
                  <img
                    src="~assets/WarGalley.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/War_Galley">弩砲戰船</nuxt-link>4個
                </li>
                <li>
                  <img
                    src="~assets/FireShipIcon.png"
                    class="gg"
                    alt=""
                  /><nuxt-link to="/units/Fire_Ship">火戰船</nuxt-link>2個
                </li>
              </ul>
            </li>
            <li>
              大地之母單位：
              <ul>
                <li>
                  <img
                    src="~assets/TradeCartIcon.png"
                    class="gg"
                    alt=""
                  />貿易車隊9個
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
              <td class="tc6" width="38%">特拉斯卡拉（紅色）阿茲特克</td>
              <td class="tc6">
                <div class="p1"></div>
                玩家3
              </td>
              <td class="tc6" width="38%">
                科爾特斯（藍色）<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>
              </td>
            </tr>
          </table>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>擊敗西班牙人和特拉斯卡拉。</li>
              <li>
                選擇性任務：
                <ul>
                  <li>
                    將奪得的貿易車隊和馬匹帶到火把處會讓你得到新的單位。馬會變索洛托勇士，貿易車隊會變成<nuxt-link
                      to="/units/Bombard_Cannon"
                      >火砲</nuxt-link
                    >。
                  </li>
                </ul>
              </li>
            </ol>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                遠離特諾提奇提特蘭讓你的資源補給中斷了，你必須尋找新的黃金和石頭資源。
              </li>
              <li>
                西班牙的<nuxt-link to="/units/Cannon_Galleon"
                  >火砲戰船</nuxt-link
                >是很致命的。不要在特斯科科湖輸掉你的<nuxt-link
                  to="/units/Naval_Vessels"
                  >海軍</nuxt-link
                >或冒險在沿岸砲擊。
              </li>
              <li>
                特拉斯卡拉豹勇士可以輕易對付阿茲特克的<nuxt-link
                  to="/units/Infantry_Units"
                  >步兵</nuxt-link
                >。遺憾的是阿茲特克不能訓練<nuxt-link to="/units/Cavalry_Units"
                  >騎兵</nuxt-link
                >反制。
              </li>
            </ul>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                >回報：阿茲特克（綠色）開始在特斯科科湖的中央島上追擊逃竄的西班牙人（藍色）和特拉斯卡拉（紅色）。
              </li>
              <li>
                西班牙人在湖的北部有一個聯合堡壘，需要相當數量的單位才能攻克。
              </li>
              <li>
                更多的資源可能分布在湖的東西兩側，但是如果你沒有足夠數量的海軍護航，西班牙人可能用他們的軍艦擊敗你。
              </li>
            </ul>
          </div>
          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              玩家在東南部的兩個島嶼上開始，左邊是一個有海軍和村民的島嶼，右邊是一個軍事島嶼，外面是你的部隊正追擊科爾特斯的軍隊。由於這兩個島嶼既沒有金礦也沒有<nuxt-link
                to="/resource/Stone"
                >石礦</nuxt-link
              >，玩家可能需要在軍事島上快速建立一個市場，把在村民島上搜集的食物和<nuxt-link
                to="/resource/Wood"
                >木材</nuxt-link
              >換取黃金。玩家應該讓他們的火戰船準備好抵禦科爾特斯的海軍，特別是<nuxt-link
                to="/elements/Rate_of_Fire"
                >射速</nuxt-link
              >特別快的西班牙火砲戰船。
            </li>
            <li>
              在地圖西部的湖面上有金礦和石礦，玩家在那裡擁有三座守衛塔。玩家應該盡快在那裡採礦，同時準備防禦敵人。
            </li>
            <li>
              玩家可以在湖上收集馬匹和貿易車隊，分別可以在火把處換到精銳答剌罕騎兵和火砲。請注意，新世界<nuxt-link
                to="/civs"
                >文明</nuxt-link
              >通常無法訓練騎兵和<nuxt-link to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >。將一匹馬或交易車放入<nuxt-link to="/building/Castle"
                >城堡</nuxt-link
              >外的六個火把內的空間，就可以換得以上單位。地圖的西部和東北部的西班牙馬圈內有馬匹，東部則有兩個貿易車隊，還有一個貿易車隊在西邊的一個廢棄的西班牙驛站附近，另外幾個在科爾特斯的基地裡。
            </li>
          </ul>
          <h3>決定版變更點</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              原本帶馬可以換成精銳<nuxt-link to="/units/Tarkan"
                >答剌罕騎兵</nuxt-link
              >，決定版改成索洛托勇士，科技全滿的數值為HP140、攻擊18、近防5、遠防6。
            </li>
          </ul>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              事實上，奧通巴之戰被認為是西班牙和特拉斯卡拉聯盟的勝利，因為他們擊敗了在數量上優勢的阿茲特克人，阿茲特克人沒有準備好跟騎馬的西班牙軍隊作戰的策略，另一個原因是他們的領導人馬特拉欽卡特被殺西班牙人殺害。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                沸騰之湖
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/蒙提祖馬五.png" alt="" />
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
              <nuxt-link to="/batt/Montezumaa">蒙提祖馬</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第三章之五
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/La_Noche_Triste">悲痛之夜</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Broken_Spears">折戟沉沙</nuxt-link>
            </td>
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
                維基百科上的奧通巴戰役
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        href="https://www.itsfun.com.tw/%E5%A5%A7%E5%9C%96%E5%B7%B4%E6%88%B0%E5%BD%B9/wiki-7606157-2066827"
                        target="_blank"
                        >奧通巴戰役</a
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
