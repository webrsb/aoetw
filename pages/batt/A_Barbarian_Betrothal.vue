<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>蠻族的婚約</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>蠻族的婚約</b>為<nuxt-link to="/batt/Attila_the_Huna"
              >阿提拉戰役</nuxt-link
            >的第四關劇情關卡。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代:</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源:</td>
              <td class="tc2">
                800<nuxt-link to="/resource/Wood">木頭</nuxt-link
                >，200<nuxt-link to="/resource/Food">食物</nuxt-link
                >200<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >，500<nuxt-link to="/resource/Stone">石頭</nuxt-link>
              </td>
              <td class="tc1" width="15%">人口上限:</td>
              <td class="tc2" width="5%">150</td>
            </tr>
          </table>

          <h3>AI</h3>
          <!--<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6"><div class="p4">玩家1：</div></td>
              <td class="tc6" colspan="3">
                玩家1：<nuxt-link to="/civs/Huns">匈奴人</nuxt-link>（黃色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>

            <tr>
              <td class="tc6"><div class="p6">玩家2：</div></td>
              <td class="tc6">
                勃根地（紫色）<nuxt-link to="/civs/Franks">法蘭克</nuxt-link>
              </td>
              <td class="tc6"><div class="p2">玩家3：</div></td>
              <td class="tc6">梅茲（紅色）法蘭克</td>
            </tr>
            <tr>
              <td class="tc6"><div class="p5">玩家4：</div></td>
              <td class="tc6">奧爾良（水藍色）法蘭克</td>
              <td class="tc6"><div class="p1">玩家5：</div></td>
              <td class="tc6">
                西羅馬帝國（藍色）<nuxt-link to="/civs/Byzantines"
                  >拜占庭</nuxt-link
                >
              </td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位:</dt>
            <dd>
              6位<nuxt-link to="/units/Villager">村民</nuxt-link>、3位<nuxt-link
                to="/units/Scout_Cavalry"
                >斥候</nuxt-link
              >。
            </dd>
            <dt>大地之母單位:</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>打敗勃根第。</li>
              <li>打敗梅茲，奧爾良。</li>
              <li>打敗羅馬軍隊。</li>
            </ol>
          </div>
        </div>
        <h2>次要目標</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              如果你能夠讓勃根第相信你是守信的話，他們會希望能加入你的陣營，首先他們希望能得到
              500 單位黃金的貢金。
            </li>
            <li>
              如果你能在 10
              分鐘，於勃根第的城鎮勢力範圍之內，建造出一座<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >的話，他們就會加入你的陣營。
            </li>
          </ul>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              你的武力在一開始是分散的。先找一個理想的地方作為能避開野狼的陣地。在嚴冬裡，雖然採集果實的地方是難以有收獲，但有一些饑餓的鹿還是可以找到的。
            </li>
            <li>
              雖然你無法跟法蘭西人的<nuxt-link to="/techs">科技</nuxt-link
              >競爭，但你有強大的部隊。讓龐大的隊伍往高盧的城市出發吧！
            </li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              在入侵高盧之後，匈奴人開始分散開來。他們必須重新集合，以避免在接近南方的勃根第
              (紫色)、往北方的梅茲 (紅色) 或在西北方的大城市奧爾良 (青色)
              時就瓦解。勃根第訓練<nuxt-link to="/units/Archer">弓兵</nuxt-link
              >、<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
              >和步兵，不過並沒有良好的防禦，所以在第一波的攻勢中很容易就會被攻陷。
            </li>
            <li>
              由於勃根第人很容易被威嚇，所以在勸喻之後就會加入匈利奴人的陣營之中。梅茲以<nuxt-link
                to="/units/Knight"
                >騎士</nuxt-link
              >和<nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
              >來彌補勃根第的弱點。他們的城堡很接近奧爾良，而得到一些防衛。
            </li>
            <li>
              奧爾良是一座築有<nuxt-link to="/building/Stone_Wall"
                >城牆</nuxt-link
              >的城市，並有<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >和城堡作防禦。他們的軍隊包括了<nuxt-link to="/units/Spearman"
                >長槍兵</nuxt-link
              >、騎士和<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >，對匈奴人來說是一大威脅。
            </li>
            <li>
              斥候也報告，西羅馬帝國派出阿哀契烏斯的軍隊去支援高盧。雖然羅馬人在這個地區沒有城鎮，但他們的軍團和<nuxt-link
                to="/units/Cataphract"
                >拜占庭聖騎兵</nuxt-link
              >，能夠隨時迎擊敵人。
            </li>
          </ul>
          <h2>芝麻小事</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/units/hero/Attila_the_Hun">阿提拉</nuxt-link
                >必須擊敗三個對手勃艮第（紫色），奧爾良（青色）和梅茲（紅色）。可以通過摧毀他們的市中心來威脅勃艮第與你結成聯盟，向他們進貢500黃金，並在10分鐘內建造一座城堡給他們。或者可以不摧毀他們的市中心，等著就好，他們會提出同樣的條件。
              </li>
              <li>
                一旦奧爾良的<nuxt-link to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >被摧毀，西羅馬帝國（藍色）將會進攻。他們的軍隊在地圖左側產生，在他們來到以前，戰略性地建造城牆，箭塔和城堡，會有效削弱他們的力量，因為他們沒有<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >。
              </li>
              <li>
                另外，如果玩家在擊敗勃艮第，奧爾良和梅斯之前殺死位於地圖頂部森林後面的西羅馬帝國的佔位單位（一名<nuxt-link
                  to="/units/Samurai"
                  >日本武士</nuxt-link
                >），西羅馬帝國將被打敗，他們的軍隊仍然會生成，但是因為他們事先已經被“打敗”了，所以你只需要在那些軍隊對你造成重大傷亡前，擊敗最後的<nuxt-link
                  to="/civs/Franks"
                  >法蘭克人</nuxt-link
                >城鎮。
              </li>
              <li>
                注意：如果<nuxt-link to="/batt">戰役</nuxt-link
                >在看似擊敗西羅馬軍隊後還沒有完成，就去尋找可能已經逃到城鎮外，在地圖上亂跑的西羅馬流亡單位你需要找到這樣的單位，殺死他們，以徹底擊敗西羅馬軍隊。在大多數情況下，流亡單位可能是一個精英<nuxt-link
                  to="/units/Cataphract"
                  >聖騎兵</nuxt-link
                >，只能用斥候或馬弓追殺，因為他傾向於逃跑而不是反擊。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                蠻族的婚約
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Attila.4.jpg" alt="" />
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
            <td class="unit4">阿提拉</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">匈奴人</td>
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
              <nuxt-link to="/games/aoc">征服者入侵</nuxt-link>第一章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Walls_of_Constantinople"
                >君士坦丁堡的城牆</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Catalaunian_Fields"
                >卡塔隆尼亞平原</nuxt-link
              >
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由裕暉，竺叡，Dennis協助編輯</div>
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
