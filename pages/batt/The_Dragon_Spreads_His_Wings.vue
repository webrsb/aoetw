<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>火龍展翅</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>火龍展翅</b>是《<nuxt-link to="/games/aof"
              >世紀帝國II：失落的帝國</nuxt-link
            >》<nuxt-link to="/batt/Draculaa">德古拉戰役</nuxt-link
            >的第一個場景。<nuxt-link to="/batt">戰役</nuxt-link
            >中弗拉德·<nuxt-link to="/batt/Draculaa">德古拉</nuxt-link
            >要收回他父親的領土，瓦拉幾亞，臨終夙願成為<nuxt-link
              to="/techs/Sultans"
              >蘇丹</nuxt-link
            >穆拉德二世的附庸，並與伏伊伏德·丹尼<nuxt-link to="/civs/Slavs"
              >斯拉夫</nuxt-link
            >，伏伊伏德·雅各和伏伊伏德·伊斯特萬聯手打擊弗拉迪斯拉夫二世。
          </p>
        </div>
        <h3>AI</h3>
        <table class="table-bordered" width="100%">
          <tr>
            <td class="tc4" colspan="4" style="background: #2980b9;">
              玩家本身
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p2"></div>
              玩家1
            </td>
            <td class="tc6" colspan="3">
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>（紅色）
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p6"></div>
              玩家2
            </td>
            <td class="tc6" width="42%">
              <nuxt-link to="/units/hero/Osman">奧斯曼</nuxt-link
              >帝國（紫色）土耳其
            </td>
            <td class="tc6">
              <div class="p1"></div>
              玩家3
            </td>
            <td class="tc6" width="38%">
              雅各大公（藍色）<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p4"></div>
              玩家4
            </td>
            <td class="tc6">伊斯特萬大公（黃色）馬扎爾</td>
            <td class="tc6">
              <div class="p8"></div>
              玩家5
            </td>
            <td class="tc6">丹尼斯拉夫大公（橙色）斯拉夫</td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p7"></div>
              玩家6
            </td>
            <td class="tc6">
              瓦拉幾亞土著（灰色）<nuxt-link to="/civs/Huns">匈人</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#ea6153;">
              敵對變同盟再變敵對
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p5"></div>
              玩家7
            </td>
            <td class="tc6">弗拉迪斯拉夫二世（淡藍色）馬扎爾</td>
          </tr>
          <tr>
            <td class="tc4" colspan="4" style="background:#2980b9;">
              中立變敵對
            </td>
          </tr>
          <tr>
            <td class="tc6">
              <div class="p3"></div>
              玩家8
            </td>
            <td class="tc6">匈牙利（綠色）馬扎爾</td>
          </tr>
        </table>

        <h3>主要任務</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>德古拉必須存活。</li>
            <li>
              選擇性任務
              <ol>
                <li>讓德古拉與蘇丹穆拉德二世交談。</li>
                <li>
                  登上<nuxt-link to="/building/Dock">碼頭</nuxt-link
                  >的<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
                  >到對岸。
                </li>
                <li>帶德古拉到瓦內幾亞村莊跟酋長談話</li>
                <li>
                  到亞各大公的<nuxt-link to="/building/Castle">城堡</nuxt-link
                  >與他交談，幫他奪回南方的城鎮，摧毀那裏的軍事防衛塔和殺死鄧尼斯狄將軍，然後返回會面雅各。
                </li>
                <li>
                  去找丹尼斯拉夫大公，幫他擊敗在他城市內的敵人還有所有軍事<nuxt-link
                    to="/building"
                    >建築</nuxt-link
                  >（<nuxt-link to="/building/Barracks">軍營</nuxt-link
                  >、<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
                  >、<nuxt-link to="/building/Stable">馬廄</nuxt-link
                  >和<nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
                  >），然後回去找丹尼斯拉夫。
                </li>
                <li>
                  在地圖最北端找到伊斯特萬大公，幫助他抵禦弗拉迪斯拉夫二世的攻擊（三分鐘後會打過來），之後夷平所有的建築再回去找伊斯特萬。
                </li>
                <li>擊敗弗拉迪斯拉夫二世的軍隊。</li>
                <li>
                  向東駛往摩爾多瓦，在其港口下船。把所有四位<nuxt-link
                    to="/units/hero"
                    >英雄</nuxt-link
                  >都守在城堡裡並和主人說話。
                </li>
              </ol>
            </li>
          </ul>
        </div>
        <h3>斥候</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              你的<nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link
              >回報：德古拉在同盟土耳其首都埃迪爾內（阿德里安堡）城外開始了征途。他必須要越過多瑙河才能回到他的故土瓦拉幾亞。
            </li>
            <li>
              鄧尼斯堤部落的篡權者弗拉迪斯拉夫二世，即瓦拉幾亞的大公，掌控著瓦拉幾亞的大部分地區，並且有一支強力的軍隊遍布在這多民族的土地上，他是目前最可怕的敵人。
            </li>
            <li>
              目前有三位自封的大公都在對抗弗拉迪斯拉夫二世，他們可以成為有力的盟軍。
              <ul>
                <li>
                  雅各（藍色）是最強的，他的城堡屹立於地圖的中央，守衛著多瑙河一條支流的主要渡口。
                </li>
                <li>
                  弗拉迪斯拉夫二世剛剛攻陷了鄧尼斯拉夫（橘色）的首都，因此鄧尼斯拉夫和一些忠臣們都藏身在地圖西部的樹林中。
                </li>
                <li>
                  伊斯特萬（黃色）被鄧尼斯迪大批的<nuxt-link
                    to="/units/Siege_Weapons"
                    >攻城武器</nuxt-link
                  >圍困在北邊的城堡裡。
                </li>
              </ul>
            </li>
            <li>
              一些瓦拉幾亞（灰色）村莊散落在地圖各處，當中很多已經被弗拉迪斯拉夫二世佔據了。
            </li>
            <li>
              匈牙利（綠色）軍隊撤離瓦拉幾亞已近一月，但他們擁護弗拉迪斯拉夫二世且他們的<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵單位</nuxt-link
              >讓整個歐洲聞風喪膽。
            </li>
          </ul>
        </div>
        <h3>攻略</h3>
        <div class="hrn1"></div>
        <ol>
          <li>
            你正扮演獨自一人的德古拉。你需要去奧斯曼蘇丹穆拉德二世的城堡外面見他，然後登上他的運輸船過河。你將會遇到幾名你的瓦拉幾亞士兵。然後，你需要在附近的瓦拉幾亞村與當地的酋長見面，他會要求你見見三個人
            &nbsp;-&nbsp;伏伊伏德·丹尼斯拉夫，伏伊伏德·雅各和伏伊伏德·伊斯特萬。
          </li>
          <li>
            先去找地圖中間的雅各，他會要求你在雅各市南部弗拉迪斯拉夫的另一個小地方摧毀那裡的軍事塔和將軍。你會看到一隊警衛在橋上巡邏，所以之後瓦拉幾亞村的市場旁會有一輛“<nuxt-link
              to="/units/Trade_Cart"
              >貿易車隊</nuxt-link
            >”，把車送到敵人的基地。在這一刻，你和弗拉迪斯拉夫成為“盟友”。<nuxt-link
              to="/techs/Hand_Cart"
              >手推車</nuxt-link
            >可能會遇到過橋時被行進的守衛阻擋，所以你必須手動點擊向前。然後把車推到右邊的礦坑並放火。守衛會跑過去看然後會被炸毀。你將再次和弗拉迪斯拉夫成為“敵人”。履行雅各任務並回到他身邊，獲得他的部隊。
          </li>
          <li>
            再去找地圖西邊的丹尼斯拉夫，他剛剛從弗拉迪斯拉夫的攻擊下逃離了他的城市，會要求你擊敗弗拉迪斯拉夫的軍隊。殺死所有的敵人，並摧毀所有的“軍事<nuxt-link
              to="/building"
              >建築物</nuxt-link
            >”，回去之後所有丹尼斯拉夫的士兵都成為你的，而丹尼斯拉夫則消失了。
          </li>
          <li>
            在到達伊斯特萬的基地之前，你會遇到一些敵人並殺了他們。到伊斯特萬你會得到一些部隊，而他要求你幫助他防禦弗拉迪斯拉夫的軍隊。然後你必須摧毀伊斯特萬基地東南部敵方基地的所有建築物，建議可在基地內等敵方攻來解決他們即可，之後派<nuxt-link
              to="/units/Battering_Ram"
              >衝撞車</nuxt-link
            >破壞城堡。
          </li>
          <li>
            帶你的部隊進一步向東南方向再次遇見三個大公。你將再次與弗拉迪斯拉夫“結盟”，你有3分鐘的時間準備戰鬥。確保你所有的4個英雄都能生存，把他們設定快捷鍵並遠離戰場。
          </li>
          <li>
            之後會有一場大混戰，原本已經要到手的勝利突然會有更多的匈牙利軍隊進來逆轉戰局，由於弗拉迪斯拉夫的軍隊正在失去戰鬥力，趕快讓你的四位英雄往南逃跑並登上一艘運輸船，前往地圖東側與另一個當地的瓦拉基亞酋長的城堡會面。不要理會海上弗拉迪斯拉夫的<nuxt-link
              to="/units/Naval_Vessels"
              >戰船</nuxt-link
            >，到了之後把所有4位英雄都駐守在城堡裡並贏得場景。
          </li>
        </ol>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                火龍展翅
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Dracula/The_Dragon_Spreads_His_Wings_map.png" alt="" />
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
              <nuxt-link to="/batt/Draculaa">德古拉</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">玩家顏色</td>
            <td class="unit4">
              <div class="p2"></div>
              紅色
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>戰役第二章之一
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">N/A</td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/The_Return_of_the_Dragon"
                >龍之歸來</nuxt-link
              >
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
                維基百科上的瓦拉幾亞統治者
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        href="https://en.wikipedia.org/wiki/Vladislav_II_of_Wallachia"
                        target="_blank"
                        >瓦拉幾亞統治者</a
                      ></b
                    ></i
                  >
                </div>
              </div>
              <div style="margin-left: 60px;">
                維基百科上的弗拉迪斯拉夫二世
                <div style="margin-left: 10px;">
                  <i
                    ><b
                      ><a
                        href="https://en.wikipedia.org/wiki/Vladislav_II_of_Wallachia"
                        target="_blank"
                        >弗拉迪斯拉夫二世</a
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
definePageMeta({ layout: 'allbatt' })

export default {
  components: {}
}
</script>
<style></style>
