<template>
  <div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-md-12">
        <h1>私奔</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>私奔</b>為<nuxt-link to="/batt/Battles_of_the_Forgotten"
              >失落的帝國戰役</nuxt-link
            >中<nuxt-link to="/units/hero/Prithviraj">布里斯比羅吉</nuxt-link
            >劇情<nuxt-link to="/batt">戰役</nuxt-link>的第三關。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">
                5<nuxt-link to="/resource/Gold">黃金</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">1/0</td>
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
              <td class="tc6">
                <div class="p8"></div>
                玩家1
              </td>
              <td class="tc6" colspan="4">
                主角（橘色）<nuxt-link to="/civs/Indians">印度</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p6"></div>
                玩家2
              </td>
              <td class="tc6" width="35%">曲女城（紫色）印度</td>
              <td class="tc6">
                <div class="p4"></div>
                玩家3
              </td>
              <td class="tc6">德里城（黃色）印度</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p3"></div>
                玩家4
              </td>
              <td class="tc6" width="35%">印度村莊（綠色）印度</td>
              <td class="tc6" width="15%">
                <div class="p1"></div>
                玩家5
              </td>
              <td class="tc6" width="35%">布里斯比羅吉（藍色）印度</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p2"></div>
                玩家6
              </td>
              <td class="tc6">賈伊金德王（紅色）印度</td>
              <td class="tc6">
                <div class="p7"></div>
                玩家7
              </td>
              <td class="tc6">土匪（灰色）印度</td>
            </tr>
          </table>

          <h3>開場：</h3>
          <p>布里斯比羅吉</p>
          <h3>大地之母單位：</h3>
          <p>無</p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <p>布里斯比羅吉必須活著</p>
            <ol>
              <li>
                布里斯比羅吉必須接近<nuxt-link to="/units/hero/Sanyogita"
                  >姍優姬妲</nuxt-link
                >，才能帶她私奔。在赤衛隊身後溜過去是不會被發現的。
              </li>
              <li>
                帶布里斯比羅吉和姍優姬妲到<nuxt-link to="/building/Market"
                  >市集</nuxt-link
                >那，盜一架馬車備用。
              </li>
              <li>
                逃離城池，前往布里斯比羅吉的手下那，載著姍優姬妲的馬車不能被摧毀。
              </li>
              <li>
                讓布里斯比羅吉和馬車都逃往德里城（黃）的<nuxt-link
                  to="/building/Castle"
                  >城堡</nuxt-link
                >。
              </li>
              <li>
                摧毀賈伊金德王（紅）的兩座城堡，擊退他們圍剿德里城的進攻！
              </li>
            </ol>
          </div>
        </div>
        <h2>次要任務</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              摧毀賈伊金德王（紅）所有的火焰塔，奪回德里城（黃）外的金礦。
            </li>
            <li>
              從曲女城（紫）的聖廟那奪到5個聖物，並把它們供奉到德里城內的黃色<nuxt-link
                to="/building/Monastery"
                >修道院</nuxt-link
              >。
            </li>
            <li>建造好新的引水渠，以便引活水進德里城（黃）。</li>
            <li>
              幫助<nuxt-link to="/units/Villager">村民</nuxt-link
              >修一座塔，以便抵禦入侵的<nuxt-link to="/units/Naval_Vessels"
                >船艦</nuxt-link
              >。
            </li>
            <li>把難民運輸到他們的新家園去。</li>
            <li>
              存300黃金，然後點擊綠色的<nuxt-link to="/building/Stable"
                >馬廄</nuxt-link
              >，升級<nuxt-link to="/units/Imperial_Camel"
                >帝王駱駝騎兵</nuxt-link
              >。
            </li>
            <li>
              給伐木工兩匹<nuxt-link to="/units/Camel">駱駝</nuxt-link
              >（駱駝騎兵），他會回報你一些<nuxt-link to="/resource/Wood"
                >木材</nuxt-link
              >。
            </li>
            <li>把小木屋外的野狼都殺死。</li>
            <li>
              押送<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link
              >去德里城的黃色市集那。
            </li>
          </ul>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>小心紅色的警戒哨，偷偷潛入（走明亮的路）。</li>
              <li>
                你可以從背後偷襲衛兵，這相當於用致命的一刀抹過他們的脖子。
              </li>
              <li>
                避開皇家護衛，你無法從背後偷襲他們。
              </li>
              <li>注意尋找果樹，必要的時候它們能療傷。</li>
              <li>當你逃離這座城池的時候，留下一些人馬幫你斷後。</li>
              <li>有傳言說德里城（黃）和曲女城（紫）之間有土匪（灰）出沒。</li>
              <li>
                派<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
                >去德里城四周，那些印度村莊（綠）看看，他們或許能幫你。
              </li>
              <li>
                德里城的市集已經關閉了，你得找到它的交易夥伴來重新開啟它。
              </li>
            </ol>
          </div>
        </div>
        <h2>斥候回報</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>布里斯比羅吉 （橘）在南邊徒步等待時機。</li>
            <li>
              他的首都德里城（黃）在北邊，周圍郊外有一些友好的印度村莊（綠）
            </li>
            <li>
              曲女城（紫）在南邊，賈伊金德王的軍隊（紅）在中央地區，在這些地區之間有土匪（灰）出沒。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                私奔
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <center><img src="~assets/Prithviraj 3.jpg" alt="" /></center>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Indians">印度人</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第六章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Digvijaya">逐鹿迪格維傑之地</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Battles_of_Tarain">塔蘭村之戰</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由小蛇，竺叡協助編輯。</div>
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
