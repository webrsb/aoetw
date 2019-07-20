<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>傑爾巴島的黃金</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>傑爾巴島的黃金</b>為<nuxt-link to="/batt/Sundjataa"
              >松迪亞塔戰役</nuxt-link
            >的第三關劇情關卡，此關描述<nuxt-link to="/units/hero/Sundjata"
              >松迪亞塔</nuxt-link
            >為了切斷西非極為重要的貿易線，此貿易線是關係到西非王國統治的重要手段，相對的對索索人們也是極為重要的資金來源。
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
                1,000<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／1,000<nuxt-link to="/resource/Food">食物</nuxt-link
                >／1,000<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／250<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>
              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">150</td>
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
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Malians">馬利</nuxt-link>（紫色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="12%">
                <div class="p8"></div>
                玩家4
              </td>
              <td class="tc6" width="38%">
                被關押的<nuxt-link to="/units/Villager">村民</nuxt-link
                >（橘色）馬利
              </td>
              <td class="tc6" width="12%">
                <div class="p4"></div>
                玩家6
              </td>
              <td class="tc6" width="38%">
                阿拉伯商人（黃色）<nuxt-link to="/civs/Saracens"
                  >薩拉森</nuxt-link
                >
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
              <td class="tc6">索索商人（紅色）馬利</td>
              <td class="tc6">
                <div class="p3"></div>
                玩家3
              </td>
              <td class="tc6">傑內人（綠色）馬利</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p5"></div>
                玩家5
              </td>
              <td class="tc6">傑內城（水藍色）馬利</td>
            </tr>
          </table>

          <h3>開場</h3>
          <li>
            軍事單位 -<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
            >x6、<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link>x4
          </li>
          <li>
            大地之母單位&nbsp;-&nbsp;駱駝（大地之母）x8、馬利<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >x8、<nuxt-link to="/units/Pikeman">重裝長槍兵</nuxt-link>x4。
          </li>
          <li>
            大地之母<nuxt-link to="/building">建築</nuxt-link>單位 -<nuxt-link
              to="/building/Watch_Tower"
              >暸望箭塔</nuxt-link
            >x3、<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >x1、<nuxt-link to="/building/Stable">馬廄</nuxt-link>x1、<nuxt-link
              to="/units//building/Siege_Workshop"
              >攻城器製造所</nuxt-link
            >x1、<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link>x1。
          </li>

          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>找到你的先鋒部隊所在的營地。</li>
              <li>
                摧毀傑內城的<nuxt-link to="/building/Market">市集</nuxt-link>。
              </li>
            </ol>
            <h2>次要任務</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ol>
                <li>
                  盡可能掃蕩更多的城鎮，摧毀他們的儲藏物資的倉庫。裡面儲藏的資源能幫助你訓練供養掃蕩單位。
                </li>
                <li>解救被困的村民。</li>
                <li>
                  利用被解救的村民來建造一個<nuxt-link
                    to="/building/Town_Center"
                    >城鎮中心</nuxt-link
                  >。
                </li>
                <li>可選：找到4隻駱駝並由商人帶它們進入包圍圈。</li>
                <li>可選：奪取西方的鹽礦，摧毀守衛它們的箭塔。</li>
                <li>可選：奪取東部的鹽礦，摧毀守衛它們的箭塔。</li>
                <li>可選：奪取北邊的索索營地，從而獲得更多資源。</li>
                <li>
                  可選：給阿拉伯商人（黃色）送去2,000木材這樣你就可以跟他們交易。
                </li>
              </ol>
            </div>
          </div>
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>在你足夠強大之前不要攻擊傑內人（綠色）。</li>
              <li>
                在建造基地之前盡可能累積更多的資源。一旦你釋放了任何關押的村民，傑內人（綠色）就可能會對你有敵意。
              </li>
              <li>你的單位可以在當地的水塘休整療傷。</li>
              <li>摧毀北邊的索索營地，這樣你就能去採集那裡的資源了。</li>
              <li>
                在這個劇情中無法訓練<nuxt-link to="/units/Gunpowder_Unit"
                  >火藥單位</nuxt-link
                >。
              </li>
            </ul>
            <h2>斥候</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  松迪亞塔的人馬從東部到達。他們必須先去南方的營地集結後才能開始襲擊。
                </li>
                <li>
                  宏偉的傑內城控制著尼日河兩岸的地域。他十分堅固，可以經受各種攻城進攻。
                </li>
                <li>
                  幾個村莊（水藍色）分佈在這一帶，有一些有資源礦產，另一些則困禁了那些忠誠於松迪亞塔的曼丁哥村民。
                </li>
                <li>
                  兩個挖礦營地（紅色）坐落於西方和東方，他們出產珍貴的黃金和鹽。黃金在這一帶並不多見，所以這些礦產和貿易將是主要的收入來源。
                </li>
              </ul>
              <h2>攻略</h2>
              <div class="hrn1"></div>
              <div class="n1">
                <ol>
                  <li>
                    一開始，提示就會跟你說要去找營地，去地圖揭露的地方就可以找到，由於一開始的輕騎兵跟馬弓並不是很重要，想節省時間的話可以直接右鍵點目的地，然後開八倍速讓他們自己跑過去。中間的損失都無須計較。
                  </li>
                  <li>
                    到營地之後，會送你8隻馬利騎士，因為這8隻是<nuxt-link
                      to="/units/hero"
                      >英雄</nuxt-link
                    >，會自己<nuxt-link to="/elements/Regeneration"
                      >回血</nuxt-link
                    >，還有8點<nuxt-link to="/armor">遠防</nuxt-link
                    >，拆塔靠他們就行了，所以一開始獲得的資源全都拿來造一些馬弓，可以拉打無損換血～
                  </li>
                  <li>
                    帶著你的馬弓與英雄們掠奪各個青色村莊，用英雄隊把對方的移動部隊引出來給馬弓射死，然後用英雄隊去拆中間看起來像茅草屋的建築，就可以獲得資源。旁邊的建塔可以看情況拆，如果你預計待會要經過就拆。
                  </li>
                  <li>
                    地圖最東邊與最西邊的任務一定要去解，因為整張地圖沒多少金礦，摧毀這兩個城鎮的箭塔可以讓他們定期進貢金礦給你，獲得穩定的金礦來源。地圖上方的索索人營地也建議去推掉，因為裡面有一些石礦跟金礦在你消耗過度時可以派村民來採。
                  </li>
                  <li>
                    一邊掠奪可以一邊找駱駝，找到四隻帶去給商人，就會告訴你任務目標的四座市場在哪裡。
                  </li>
                  <li>
                    掠奪得差不多之後，到地圖中間一處有<nuxt-link
                      to="/building/Stone_Wall"
                      >城牆</nuxt-link
                    >的青色堡壘，把<nuxt-link to="/building/Gate"
                      >城門</nuxt-link
                    >與箭塔全部拆掉之後就可以獲得三位村民。將堡壘西邊不遠處的青色村莊建築全部摧毀，在那裏建立營地，因為這個地方易守難攻，只要一兩座<nuxt-link
                      to="/building/Castle"
                      >城堡</nuxt-link
                    >搭配城牆就可以防守住。
                  </li>
                  <li>
                    由於你已經囤積了很多資源，所以不急著採食物，城鎮中心蓋好之後趕快生村民採石礦，把周圍用城牆圍好，並且蓋一兩座城堡防守。就可以專心爆經濟。
                  </li>
                  <li>
                    升帝王之後，用大量馬弓＋女兵＋巨投就可以輕易摧毀對方四座市場取得勝利。即使在困難模式，敵人的守軍依然零零散散，派二十多隻女兵進去就可以攔下所有守軍讓巨投好好拆屋了。
                  </li>
                </ol>
                <h2>細節</h2>
                <div class="hrn1"></div>
                <div class="n1">
                  <ul>
                    <li>
                      傑內城是真的有這座城遊戲裡的介紹也是完全跟事實一樣就是中世紀時非洲重要的貿易中心。
                    </li>
                    <li>
                      松迪亞塔會信仰穆斯林最主要原因是阿拉伯商人對馬利帝國影響甚遠，雖說信仰但還是有保留非洲巫術傳統。
                    </li>
                    <li>
                      這場<nuxt-link to="/batt">戰役</nuxt-link
                      >在你解救村民（有<nuxt-link to="/building/Stone_Wall"
                        >石牆</nuxt-link
                      >的地區）時就正式進入戰爭階段。
                    </li>
                    <li>
                      雖然對面擁有<nuxt-link to="/units/Camel_Archer"
                        >駱駝弓騎兵</nuxt-link
                      >這強大兵種但是你殺掉他們之後他們是不能再生產的。
                    </li>
                    <li>
                      次要任務雖然都是可選或者可不作，但是你不完成結束遊戲的方式和種類還有資源會非常少。
                    </li>
                    <li>
                      第一階段在掠奪城鎮時是很吃玩家的控兵，馬利騎士是你最強也是最稀有的單位。
                    </li>
                    <li>多利用水塘補血。</li>
                    <LI
                      >注意只要打掉市集就贏了就代表說你可以直接攻擊市集（遠程攻城器）。</LI
                    >
                    <LI
                      >真的打不進去也可以蓋<nuxt-link to="/building/Wonder"
                        >世界奇觀</nuxt-link
                      >來獲勝。</LI
                    >
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
                傑爾巴島的黃金
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle"><img src="~assets/SUN 3.jpg" alt="" /></div>
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
              <nuxt-link to="/games/ak">非洲王國</nuxt-link>第二章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Sting_of_the_Scorpion"
                >馬利戰役（蠍螫）</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Blood_on_the_River_Bank">血濺河灘</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由熊、天翔協助編輯。</div>

        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的傑內城
            <div style="margin-left: 10px;">
              <i
                ><b
                  ><a
                    target="_blank"
                    href="https://zh.wikipedia.org/wiki/%E6%9D%B0%E5%86%85"
                    >傑內</a
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
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
