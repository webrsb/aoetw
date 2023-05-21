<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>血濺河灘</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>血濺河灘</b>為<nuxt-link to="/batt/Sundjataa"
              >松迪亞塔戰役</nuxt-link
            >的第四關劇情關卡，此關描述<nuxt-link to="/units/hero/Sundjata"
              >松迪亞塔</nuxt-link
            >跟<nuxt-link to="/units/hero/Sumanguru">蘇曼古魯</nuxt-link
            >決戰根據後面的劇情對話推測這可能是1235年在基里納<nuxt-link
              to="/batt"
              >戰役</nuxt-link
            >，<nuxt-link to="/civs/Malians">馬利</nuxt-link
            >帝國非常重要的戰役之一。
          </p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="14%">
                <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                700<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／750<nuxt-link to="/resource/Food">食物</nuxt-link
                >／700<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／500<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">125</td>
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
                <div class="p6"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">馬利（紫色）</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p8"></div>
                玩家5
              </td>
              <td class="tc6" colspan="3">馬利貿易站（灰色）馬利</td>
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
                蘇曼古魯（紅色）<nuxt-link to="/civs/Ethiopians"
                  >衣索比亞</nuxt-link
                >
              </td>
              <td class="tc6" width="12%">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6" width="38%">
                美瑪（綠色）<nuxt-link to="/civs/Berbers">柏柏</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家4
              </td>
              <td class="tc6">法克裡（黃色）馬利</td>
            </tr>
          </table>

          <h3>開場</h3>
          <li>
            軍事單位 -<nuxt-link to="/units/Scout_Cavalry">斥候騎兵</nuxt-link
            >x1。
          </li>
          <li>
            經濟單位&nbsp;-&nbsp;<nuxt-link to="/units/Villager">村民</nuxt-link
            >x6。
          </li>
          <li>大地之母&nbsp;-&nbsp;美瑪公主x1。</li>

          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>打敗蘇曼古魯。</li>
            </ol>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>馬利貿易站（灰色）</li>
                <ul>
                  <li>
                    可選的：摧毀沿河的五座索索<nuxt-link
                      to="/building/Watch_Tower"
                      >箭塔</nuxt-link
                    >，這樣你就可以進口木材。
                  </li>
                  <ul>
                    <li>
                      保護貿易商船和貿易<nuxt-link to="/building/Market"
                        >市集</nuxt-link
                      >，以保證能繼續輸送木材。
                    </li>
                  </ul>
                  <li>
                    可選的：付給馬利貿易站（灰色）2,500食物，他們就會增加兩倍木材運送量。
                  </li>
                </ul>
                <li>美瑪（綠色）</li>
                <ul>
                  <li>
                    美瑪也準備要加入戰爭了，但是國王要求先救出他的女兒。救出她並把她帶去美瑪<nuxt-link
                      to="/building/Castle"
                      >城堡</nuxt-link
                    >（變成中立）。
                  </li>
                </ul>
                <li>法克裡（黃色）</li>
                <ul>
                  <li>
                    只要你能說服他們你是靠得住的，法克裡就會願意加入你們。首先他們想要1,000黃金的進貢（變成中立）。只要你在十分鐘內在他們城鎮的旗幟區域建造一座城堡，法克裡就會加入你們（變成同盟）。
                  </li>
                </ul>
              </ol>
            </div>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                美瑪和法可裡可能願意跟你結盟，但是你得先做一些事情滿足他們的請求。你在答應他們的時候要確定你能做到，不然會讓他們很失望的。
              </li>
              <li>時刻提防突襲。</li>
              <li>保護貿易站，如果你的敵人摧毀了它，你的任務將會更難。</li>
            </ul>
            <h2>斥候</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>馬利在東部沙漠邊建造了一個小營地。</li>
                <li>
                  北邊的美瑪（綠色）是蘇曼古魯的諸侯，但是只要機會合適可能會背叛它。他們訓練<nuxt-link
                    to="/units/Knight"
                    >騎士</nuxt-link
                  >、劍兵和<nuxt-link to="/units/Siege_Weapons"
                    >攻城武器</nuxt-link
                  >。
                </li>
                <li>
                  和美瑪類似，南邊的法克裡（黃色）也不滿於索索的霸權，他們也想尋機揭竿起義。他們有一支由<nuxt-link
                    to="/units/Crossbowman"
                    >弩兵</nuxt-link
                  >、騎士和<nuxt-link to="/units/Trebuchet">投石機</nuxt-link
                  >組成的軍隊。
                </li>
                <li>
                  在河對岸西邊就是索索人（紅色）。索索人擁有堅固的防禦工事和強大的<nuxt-link
                    to="/units/Camel_Rider"
                    >駱駝騎兵</nuxt-link
                  >、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link
                  >、<nuxt-link to="/units/Shotel_Warrior">彎刀勇士</nuxt-link
                  >和攻城武器兵組成的軍隊。
                </li>
              </ul>
              <h2>攻略</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ol>
                  <li>
                    城堡依然重要，一開始<nuxt-link to="/units/Light_Cavalry"
                      >輕騎兵</nuxt-link
                    >探索周圍環境。把六隻村民拉到營地北方，找到石礦點蓋<nuxt-link
                      to="/building/Town_Center"
                      >城鎮中心</nuxt-link
                    >，這樣可以在自己不小心玩輸的時候有路可退，也可以快速爆村民。
                  </li>
                  <li>
                    建議放棄原本的營地，因為周圍都是淺灘，不好蓋，很容易被攻陷。直接找到營地東方有一攤金礦、石礦、動物的地方，蓋一座城堡與城鎮中心，把那裏當作主營地。
                  </li>
                  <li>
                    蓋好城堡之後蓋一堆功能性的<nuxt-link to="/building"
                      >建築物</nuxt-link
                    >擋路，然後專心爆經濟、點科技。
                  </li>
                  <li>
                    綠色會先提出結盟，然後黃色才會提出結盟。建議這兩個結盟任務都要做，黃色甚至會在你沒注意到的時候幫你完成推掉五座箭塔的任務。如果都不結盟的話，他們兩國的<nuxt-link
                      to="/units/Battering_Ram"
                      >衝撞車</nuxt-link
                    >會亂到你受不了。
                  </li>
                  <li>
                    注意黃色要你給他1,000黃金之後會立刻要你在十分鐘內去他們城內蓋城堡，如果你的石礦還不夠，千萬不能先給錢。
                  </li>
                  <li>
                    綠色要你去把他們西方一座紅色堡壘裡面關著的公主救出來，只要把那個堡壘裡面所有的軍事建築以及箭塔拆掉，就會獲得公主的控制權，此時綠色會先暫停對你的攻擊，但是公主必須平安送回綠色的城堡，否則綠色會翻臉。
                  </li>
                  <li>
                    錢跟石礦夠了就先跟黃色結盟，綠色則等帝王後有好用的<nuxt-link
                      to="/units/Bombard_Cannon"
                      >火砲</nuxt-link
                    >，再配合馬弓、<nuxt-link to="/units/Gbeto"
                      >飛刀女獵手</nuxt-link
                    >、<nuxt-link to="/units/Monk">僧侶</nuxt-link
                    >去推。救公主的時候要經過綠色城堡，以及一些軍事設施，不要懷疑，就是要先推掉。城堡推掉之後記得快速通過，因為那個城堡是任務建築，無論你打掉幾次，綠色村民都會來補蓋。
                  </li>
                  <li>
                    救了公主之後，公主為了感謝你，會無限提供你飛刀女兵。（應該是bug），因此救了公主之後你就可以用免費的女兵海直接淹死紅色取得勝利。
                  </li>
                </ol>
                <h2>細節</h2>
                <div class="hrn1"></div>
                <div class="n1">
                  <ul>
                    <li>
                      這戰役木材是異常的貴重，因此保護貿易站資源會非常豐富（用市集買賣）。
                    </li>
                    <li>
                      美瑪公主變成你的單位時美瑪就會轉換成同盟，相對得美瑪公主死亡美瑪會轉換成敵對，但是如果你打掉關押美瑪公主的城堡他又會轉換成同盟。
                    </li>
                    <li>
                      美瑪公主被救出後會得到無限的飛刀女獵手的生產，因此這任務解完基本上就算通關了。
                    </li>
                    <li>
                      無限的飛刀女獵手會共享你所研究有關飛刀女獵手的各項科技。
                    </li>
                    <li>法克裡只要你沒達到他給的條件他就會轉換成敵對。</li>
                    <li>
                      這場戰役可用<nuxt-link to="/building/Wonder"
                        >世界奇觀</nuxt-link
                      >獲得勝利。
                    </li>
                    <li>你救出得是美瑪公主但說話的人是美瑪王子。</li>
                    <li>
                      這場戰役根據遊戲後續得對話大概可以推測是1235年在基里納戰役，這場戰役代表馬利帝國得興起。
                    </li>
                    <li>
                      基里納戰役後，松迪亞塔被公推為「曼薩」，建立了馬利帝國。
                    </li>
                    <li>基里納戰役後，蘇曼古魯就逃進山區消失了。</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                血濺河灘
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/Sundjata/Blood_on_the_River_Bank_map.png" alt="" /></div>
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">
              <nuxt-link to="/batt/Sundjataa">松迪亞塔</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>第二章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Djeriba_Gold">虎口奪食</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Lions_Den">深入虎穴</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由熊、天翔協助編輯。</div>

        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的基里納戰役（英文版）
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a
                    href="https://en.wikipedia.org/wiki/Battle_of_Kirina"
                    target="_blank"
                    >Battle of Kirina</a
                  ></b
                ></i
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
