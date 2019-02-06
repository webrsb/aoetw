<template>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row" style=" margin-top: 50px;">
      <div class="col-md-12">
        <h1>葡屬印度</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>葡屬印度</b
            >為非洲王國戰役中《法蘭西斯科．阿爾梅達》劇情戰役中的第四關。
          </p>
          <p>
            法蘭西斯科一行人終於抵達了目的地--富裕的印度馬拉巴爾海岸…傳說中的千佛之地--遍地的香料、白銀和黃金。他們在附近的坎納諾爾城和科欽城設立了貿易站。
          </p>
          <p>
            法蘭西斯科和他的兒子洛倫佐巧妙地在酋長和蘇丹王們之間挑撥離間，利用香料貿易和信仰的爭端搧風點火，操控各個諸侯國政治。
          </p>
          <p>
            然而，一位被稱為“扎莫林”的卡里卡特統治者印度教王子反對他們，宣稱要挫敗法蘭西斯科精策的計謀，也要終止這些曾讓葡萄牙人能從中獲利的紛爭。
          </p>
          <p>
            這位印度王子憑著刀劍和伶牙俐齒一統各族宗教，他不但和酋長、蘇丹王結盟，還得到了遠至埃及和威尼斯統治者的支持。
          </p>
          <p>
            甚至連葡萄牙的印度同盟部落也開始倒戈、背信棄義，科拉提立拉哈酋長也是坎納諾爾國的王子，為了扎莫林的黃金背叛了法蘭西斯科。
          </p>
          <p>法蘭西斯科一行人身陷囹圄、四面楚歌，命運之神似乎不再眷顧他們……</p>
        </div>
        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="15%">起始時代：</td>
              <td class="tc2" width="15%">帝王時代</td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">300木頭，300食物，300黃金，250石頭</td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">40/125</td>
            </tr>
          </table>

          <br />
          <h3>AI</h3>
          <!--
<span class="glyphicon glyphicon-star" aria-hidden="true" style="color: #ff911d; margin-left: 5px;"></span>:中立</p>!-->
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc4" colspan="4" style="background: #2980b9;">
                玩家本身
              </td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p1"></div>
                玩家1：
              </td>
              <td class="tc6" colspan="4">主角（藍色）葡萄牙</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p4"></div>
                玩家2：
              </td>
              <td class="tc6" colspan="4">印度海盜（黃色）印度</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr>
              <td class="tc6">
                <div class="p3"></div>
                玩家3：
              </td>
              <td class="tc6" colspan="4">卡里卡特城的扎莫林（綠色）印度</td>
            </tr>
            <tr>
              <td class="tc6" width="15%">
                <div class="p2"></div>
                玩家4：
              </td>
              <td class="tc6" width="35%">科拉提立拉哈（紅色）印度</td>
              <td class="tc6" width="15%">
                <div class="p2"></div>
                玩家5：
              </td>
              <td class="tc6" width="35%">坎納諾爾城（紅色）印度</td>
            </tr>
          </table>

          <br />
          <h3>開場：</h3>
          <p>
            洛倫索阿爾梅達、火砲*1、手風琴砲*1、西班牙征服者*2、火槍兵*2、僧侶*2、騎士*3、村民*4、強弩兵*4、雙手劍兵*5、卡拉維爾戰船*5、戟兵*10
          </p>
          <h3>大地之母單位：</h3>
          <p>無 <br /></p>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <p>從以下選擇一項：</p>
            <ul>
              <li>建造一個世界奇觀。</li>
              <li>奪取所有聖物。</li>
              <li>消滅所有敵人。</li>
            </ul>
          </div>
          <br />
          <h2>次要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>將建築夷為平地，洗劫建築裡存放的資源。</li>
              <li>擊沉扎莫林（綠）啟航的炮艦，殺他措手不及。</li>
            </ul>
          </div>
          <br />
          <h2>任務提示</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>你的人口上限是125，但不需要建造房屋。</li>
              <li>
                你要以戰養戰，搶劫敵人的建築以搶奪資源。有一些建築會提供獎勵資源。
              </li>
              <li>大商站需要占用人口空間，但是可以提供穩定的資源。</li>
              <li>
                敵人依賴於坎納諾爾以外的經濟，所以不要將攻擊範圍侷限於城內。
              </li>
              <li>
                印度海盜神龍見首不見尾、善於突襲，你即可以和他們結盟，也可以選擇打敗海盜而奪取他們富足的資源。
              </li>
            </ol>
          </div>
        </div>
        <br />
        <h2>斥侯回報</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              受坎納諾爾城城主科拉提立拉哈所背叛，法蘭西斯科阿爾梅達和他的兒子洛倫索在聖安杰洛堡遭到圍攻。
            </li>
            <li>
              科拉提立拉哈（紅）指揮一支由大象、駱駝、輕騎兵、劍士和弓箭手組成的軍隊。該城在前一任統治時是葡萄牙同盟，而前城主的死亡引發了一場繼承權爭奪戰。新上任的科拉提立拉哈在扎莫林（綠）的支持下奪取了王位，而作為回報，他答應幫扎莫林把葡萄牙人擊退回海裡。
            </li>
            <li>
              扎莫林（綠）為卡里卡特城的統治者，帶來了一支軍隊來支援科拉提立拉哈。軍隊由大象、駱駝、馬弓騎兵、劍士、火槍兵和攻城部隊組成。他在坎納諾爾城外駐紮的營地U易守難攻，但是他南方的補給線很脆弱。
            </li>
            <li>
              印度海盜（黃）是由狡猾的海盜王提摩西統領，他們攻佔了安歇迪瓦--海岸外的一座島嶼。無論是通過戰爭還是和平的方式與海盜達成一致將是是葡萄牙最好的選擇。
            </li>
          </ul>
          <h2>玩家攻略</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              快速通關：奪下左上區紅色領地後圍死，即可蓋世界奇觀，守護200年就能獲得勝利。
            </p>
            <ol>
              <li>
                關卡初始擊退紅色後，儘快蓋起城門並鎖定，村民初期很珍貴，若閒置時建議駐軍箭塔。
              </li>
              <li>
                綠色海陸都會進攻，初期資源不多時不建議發展海軍，主要著重攻下左上方紅色區塊。
              </li>
              <li>
                清除敵軍建築物可獲得資源，分別是木材+100、食物+100、黃金+125、石礦+55，剛開始兵力不足時可在城牆內利用火砲清除紅色房屋賺取資源。
              </li>
              <li>
                有資源後大量生產戰矛兵，並研發兵工廠科技、城堡的徵兵制度，如果可以碼頭研發火炮戰船、生產卡拉維爾戰船駐軍在碼頭裡。
              </li>
              <li>
                城牆內的房屋可以Delete掉以獲取更多空間（不會影響最高人口數），蓋學院研發火砲塔，還有多的資源蓋一個大商站。
              </li>
              <li>
                趁敵軍進攻空檔往城門外推進，兵力掩護下蓋城堡、攻城武器製造所。等周圍敵人兵力、箭塔及城堡摧毀後（紅色的城堡也可用火炮戰船從海面清除），缺口處儘速蓋城牆和城門。
              </li>
              <li>
                紅色城牆外左上方外有HP1的籬笆，摧毀一樣有資源（※垛牆沒有），紅色城門打掉後蓋自己的城門，派少許兵力去摧毀籬笆賺資源。
              </li>
              <li>
                左上區塊圍死並清除敵方軍事建築後，即可開始蓋世界奇觀，如果想蓋快一點就蓋城鎮中心生產村民，儘速將世界奇觀蓋起來，守護200年即可獲得全面勝利。
              </li>
            </ol>
          </div>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <!--               <img
                class="imgn hg"
                src="~assets/Estado_da_India-01.png"
                alt=""
                width="100%"
              /> -->
              <p>地圖中的Hp1籬笆可獲取大量資源。</p>
            </div>
            <div class="col-md-12">
              <!--               <img
                class="imgn hg"
                src="~assets/Estado_da_India-02.png"
                alt=""
                width="100%"
              /> -->
              <p>功用不明的紀念碑，無法摧毀，只要某勢力單位經過即從屬。</p>
            </div>
          </div>
          <h2>玩家註記</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                此關其實不需要建立龐大海軍去攻打敵人港口，自家港口生產一些駐軍即可。如果綠色派火炮戰船攻擊且在我方城堡或火炮塔攻擊範圍外，派卡拉維爾戰船去擊沉或吸引到城堡攻擊範圍內即可。
              </li>
              <li>
                如果想省資源<strike>（偷懶）</strike>連生產海軍、加蓋港口都不需要，貌似沒有探索海域，就不會有額外的敵方戰船進攻。
              </li>
              <li>
                偷偷說還有個更省力的破關法：關卡初始擊退紅色後迅速城牆兩層圍死（建議蓋雙城門才能把村民拉回，外的鎖、內的不鎖），內部Delete掉房屋，火砲打外圍房屋賺資源（如果想打掉更多外圍敵軍建築賺資源，可生產投石機），生產戰矛兵保護火砲（近戰單位送出門打架<strike>送死</strike>...裡面才不會太擠）。只要沒研發科技及生產太多兵，資源其實不會很緊繃，蓋市集換些石頭就能建造世界奇觀了，位置儘量裡面些，以避免被綠色投石機打到。記得也要蓋城鎮中心生產村民，才能快速地將世界奇觀蓋起來。
              </li>
            </ul>
          </div>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="col-md-12">
              <!--               <img
                class="imgn hg"
                src="~assets/Estado_da_India-03.png"
                alt=""
                width="100%"
              /> -->
              <p>
                原領地內蓋世界奇觀快速破關法。<br />
                （市集蓋的位置應該要再離城門遠些，不然前線單位移動時都會卡卡的。）
              </p>
            </div>
          </div>
          <br />
        </div>
      </div>
      <br />
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style=" background-color:#375d96;">
              <div class="unititle"><nuxt-link to="">葡屬印度</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <center>
                  <!-- <img src="~assets/Estado_da_India.png" width="" alt="" /> -->
                </center>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#375d96;">
              <div class="unititle2"><nuxt-link to="">情景信息</nuxt-link></div>
            </td>
          </tr>
          <tr>
            <td class="unit3">版本</td>
            <td class="unit4">非洲王國戰役</td>
          </tr>
          <tr>
            <td class="unit3">戰役</td>
            <td class="unit4">法蘭西斯科．阿爾梅達</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4"><nuxt-link to="">葡萄牙人</nuxt-link></td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style=" background-color:#375d96;">
              <div class="unititle2">
                <nuxt-link to="">戰役關卡編號</nuxt-link>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit3">章節</td>
            <td class="unit4">非洲王國第三章之四</td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="batt/Ruins_of_Empires">帝國的廢墟</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/A_Sons_Blood">兒子的血仇</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由小蛇、裕暉協助編輯。</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的<i
              ><b><a href="http://t.cn/E5JAhwV">葡屬印度</a></b></i
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /container -->
</template>
<script>
export default {
  layout: 'allbatt',
  components: {}
}
</script>
<style></style>
