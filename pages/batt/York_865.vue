<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>約克城(865)</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>約克城(865)</b>為<nuxt-link to="/batt/Battles_of_the_Forgotten"
              >失落帝國的戰役</nuxt-link
            >中編號第3的關卡，玩家扮演朗納爾·洛德布羅克的兒子，865年朗納爾因遇海難而漂流到諾桑比亞王國領地的沿岸，遭艾勒國王俘虜，扔進蛇坑處決，死前吟詠了《渡鴉之詩》，希望兒子們在獲知自己死訊後前來復仇。
          </p>
          <p>
            根據挪威文獻《朗納爾·洛德布羅克諸子傳》記載，西元865年入侵英格蘭的維京雄師(異教徒大軍)，正是朗納爾的兒子們領導，為了報復艾拉國王的殺父之仇。
          </p>
          <p>
            該場景的地圖以其巨大尺寸而著稱，描繪了包括英國，愛爾蘭和馬恩島在內的整個不列顛群島。由於巨大的地圖大小和大量單位（人口限制為200，有七個對手），這可能是整個遊戲中要求最高的場景，所以在玩家執行遊戲中如果擁有相當強大的電腦CPU將是一個優勢。
          </p>
        </div>

        <h2>玩家</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>基本資訊</h3>
          <table class="table-bordered" width="100%">
            <tr>
              <td class="tc1" width="14%">起始時代：</td>
              <td class="tc2" width="15%">
                <nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link>
              </td>
              <td class="tc1" width="14%">起始資源：</td>
              <td class="tc2">
                1,000<nuxt-link to="/resource/Wood">木材</nuxt-link
                >／600<nuxt-link to="/resource/Food">食物</nuxt-link
                >／400<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >／00<nuxt-link to="/resource/Stone">石礦</nuxt-link>
              </td>

              <td class="tc1" width="14%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
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
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家1
              </td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Turks">維京</nuxt-link>（紅色)
              </td>
            </tr>
            <tr>
              <td col class="tc4" colspan="4" style="background:#ea6153;">
                敵對
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p4"></div>
                玩家2
              </td>
              <td class="tc6">諾森比亞人（黃色）塞爾特</td>
              <td class="tc6" width="14%">
                <div class="p8"></div>
                玩家3
              </td>
              <td class="tc6">
                東盎格利亞人（橘色）<nuxt-link to="/civs/Britons"
                  >不列顛</nuxt-link
                >
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p1"></div>
                玩家3
              </td>
              <td class="tc6">麥西亞人（藍色）不列顛</td>
              <td class="tc6" width="14%">
                <div class="p5"></div>
                玩家4
              </td>
              <td class="tc6">
                威塞克斯人（水藍色）<nuxt-link to="/civs/Goths">哥德</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p3"></div>
                玩家5
              </td>
              <td class="tc6">斯傑克萊人（綠色）塞爾特</td>
              <td class="tc6" width="14%">
                <div class="p6"></div>
                玩家6
              </td>
              <td class="tc6">
                烏伊尼爾人（紫色）塞爾特
              </td>
            </tr>
            <tr>
              <td class="tc6" width="14%">
                <div class="p7"></div>
                玩家7
              </td>
              <td class="tc6">芒斯特人（灰色）塞爾特</td>
            </tr>
          </table>

          <h3>開場</h3>
          <li>
            4位<nuxt-link to="/units/Villager">村民</nuxt-link>，2位<nuxt-link
              to="/units/Berserk"
              >狂戰士</nuxt-link
            >，2位<nuxt-link to="/units/Throwing_Axeman">擲斧兵</nuxt-link
            >，2位<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
            >，2艘<nuxt-link to="/units/Transport_Ship">運輸船</nuxt-link
            >，3艘<nuxt-link to="/units/Longboat">維京大戰船</nuxt-link>。
          </li>

          <h3>主要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                安營紮寨：在5個可供安營的地方（地圖上標有旗幟處）選一處來建立一座<nuxt-link
                  to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >，一座<nuxt-link to="/building/Barracks">軍營</nuxt-link
                >，一座<nuxt-link to="/building/Market">市集</nuxt-link
                >和5個<nuxt-link to="/building/House">房屋</nuxt-link>。
              </li>
              <li>
                繼續完善你的基地，等待你的友軍在15分鐘後到來。主力軍隊已經抵達！你現在有四種不同的方法可以贏得這場<nuxt-link
                  to="/batt"
                  >戰役</nuxt-link
                >，提示裡有詳細介紹：
              </li>
              <ol>
                <li>
                  報復諾桑比亞國王艾拉，他曾打敗了維京人的傳奇領袖拉格納。傳說朗納爾曾經帶領維京人東征西站劫掠歐洲，平生50餘場大戰只敗過一次。現在為了向敵人證明北歐的神是最高等的神靈，你可以摧毀諾桑比亞人在約克城裡的宮殿，並建造奧丁神廟（即你的<nuxt-link
                    to="/building/Wonder"
                    >世界奇觀</nuxt-link
                  >）去取而代之。
                </li>
                <li>
                  收集15個聖物並把他們放到你的<nuxt-link
                    to="/building/Monastery"
                    >修道院</nuxt-link
                  >裡。
                </li>
                <li>
                  收集50,000單位的黃金——算是敵人為我們的先人<nuxt-link
                    to="/units/hero"
                    >英雄</nuxt-link
                  >拉格納的死付的賠償金吧。
                </li>
                <li>
                  打敗7個敵人（諾桑比亞人， 東盎格利亞人，
                  麥西亞人，威塞克斯人， 斯傑克萊人， 烏伊尼爾人和芒斯特人）
                  中的至少5個。
                </li>
              </ol>
            </ol>
          </div>
          <h3>次要任務</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                如果你不想從那幾個無人的安營點處建立陣地的話可以直襲曼島的修道院（插旗幟處），然後在那裡建立你的基地。
              </li>
              <li>
                摧毀敵人的市集，城鎮中心，修道院，大教堂或者世界奇觀來掠奪大量的金子。
              </li>
              <li>
                搶奪敵人的聖物來為你增加金子收入。
              </li>
            </ul>
          </div>
          <h3>任務提示</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>
                搜索安營地點的時候最好避開敵人沿海的防禦陣地（從小地圖上能看到），他們的火力太強大了。
              </li>
              <li>
                你有5個可選的營地（小地圖上有旗幟）：3個在蘇格蘭，一個在南愛爾蘭，一個在曼島。幾個營地各有優劣之處。
              </li>
              <li>
                安營設防。你的敵人會注意到大軍的到來，所以會對你發起進攻。
              </li>
              <li>
                每一座基督的村莊和城鎮只要有修道院就會有聖物，一共有23個聖物。
              </li>
              <li>
                洗劫教堂、市集、城鎮中心或者大教堂能給你帶來不少金子。
              </li>
            </ol>
          </div>
          <h3>斥候</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                維京大軍的先鋒隊已經抵達不列顛群島了，他們打算先偵察這片地區並建立合適的軍營以便在此發展勢力。
              </li>
              <li>
                不列顛群島上七國並立：
              </li>
              <li>
                諾桑比亞（黃色）的盎格魯-撒克遜人王國是維京大軍的主要目標，他們的國都約克有著這片土地上最好的防禦工事。
              </li>
              <li>
                >東盎格利亞（橙色）的盎格魯-撒克遜人王國國力較弱，隨時可能被強敵吞併。
              </li>
              <li>
                麥西亞（藍色）的盎格魯-撒克遜人王國實力更強些，但是它的軍力都分散在長條形的國土上了。
              </li>
              <li>
                威塞克斯的盎格魯-撒克遜人王國是你目前最可怕的對手，他們的國王擁有南英格蘭富饒的土地，繼承了羅馬人留下的所有東西。
              </li>
              <li>
                控制著斯特拉思克萊德地區的蘇格蘭領主統治著一幫無畏的勇士，這是一個正在迅速成長著的國家。
              </li>
              <li>
                愛爾蘭王朝烏伊尼爾控制著北愛爾蘭的大部分地區，但是朝代更替以及它和南邊國家的紛爭已經讓它日漸衰敗了。
              </li>
              <li>
                還有一個愛爾蘭國家叫芒斯特，坐擁著名的凱袖宮，而它正在和它的周邊國家交戰著。
              </li>
              <li>
                維京人的維京長船乃當時最無敵的槳帆戰船，在海上可以迅速解決任何對手。
              </li>
            </ul>
          </div>

          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              起始位置概略
            </li>
            <li>
              玩家從諾桑比亞王國東邊海岸的小型登陸會師開始，此時的主要目標是建立一個基地。
            </li>
            <li>
              這可以在任何島嶼上完成，但玩家選擇一個可以正確防禦性但有利於玩家擴展的地方。
            </li>
            <li>
              位於英格蘭與愛爾蘭之間的海上島嶼曼島的就是成為一個不錯位置的島嶼，
            </li>
            <li>
              並在摧毀位於其中心的烏伊尼爾的修道院時將會授予一座免費<nuxt-link
                to="/building/Castle"
                >城堡</nuxt-link
              >（雖然登陸作戰時須注意敵方部隊與<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >）
            </li>
            <li>
              但曼島並沒有很多資源。愛爾蘭南部或蘇格蘭北部的基地可能在開始時更難防守，但從長遠來看會更好，特別是當玩家能夠獲得敵方市場並將其用於交易時，但建議玩家還是快速從其它位置登陸獲取更多天然資源。
            </li>
            <li>
              一旦主要目標中的<nuxt-link to="/building">建築物</nuxt-link
              >完成，玩家必須等待15分鐘，然後40艘<nuxt-link
                to="/units/Elite_Longboat"
                >精銳維京大戰船</nuxt-link
              >將加入玩家陣營。
            </li>
            <li>
              之後，贏得此關的目標將是4種中滿足以下任一條件：
            </li>
            <ol>
              <li>
                打倒諾桑比亞王國，摧毀諾桑比亞人在約克城裡的宮殿，並建造你的世界奇觀去取而代之。
              </li>
              <li>
                收集15個聖物並把他們放到你的修道院裡。(此關地圖共23個)。
              </li>
              <li>
                收集50,000單位的黃金。
              </li>
              <li>
                打敗7個敵人（諾桑比亞人， 東盎格利亞人， 麥西亞人，
                威塞克斯人，斯傑克萊人， 烏伊尼爾人和芒斯特人） 中的至少5個。
              </li>
            </ol>
          </ul>

          <h3>攻略</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              由於在主要軍隊抵達後玩家雖有眾多維京大戰船支援。
            </li>
            <li>
              玩家可試著規避第一項任務提到的指定<nuxt-link to="/building"
                >建築</nuxt-link
              >與數量:一座城鎮中心，一座軍營，一座市集和5間<nuxt-link
                to="/building/House"
                >居住房舍</nuxt-link
              >。
            </li>
            <li>
              當然，第一項的市鎮中心是必須的，市集也是後期交換資源的關鍵建築。
            </li>
            <li>
              居住房舍也是擴展人口的必須建築，如果玩家只蓋4間居住房舍，接下來用城堡來衝人口數也是必行，但是這樣消耗太多<nuxt-link
                to="/resource/Stone"
                >石頭</nuxt-link
              >與時間，且較不建議。
            </li>
            <li>
              最後來看軍營，如果避開建造軍營將會是較容易的發展，在這種情況下，玩家必須沒有軍營的<nuxt-link
                to="/techs/Squires"
                >護衛技術</nuxt-link
              ><nuxt-link to="/techs">科技</nuxt-link
              >下繼續遊戲，但這只是一個非常小的劣勢。
            </li>
            <li>
              維京人的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
              >狂戰士將擁有結合<nuxt-link to="/units/Champion"
                >劍兵勇士</nuxt-link
              >與<nuxt-link to="/units/Spearman">長槍兵</nuxt-link
              >系的<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >的兩方優點:對建築的額外傷害與對<nuxt-link
                to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >的額外傷害(<nuxt-link to="/techs/Chieftains">酋長</nuxt-link
              >科技狂戰士對騎兵+5傷害)
            </li>
            <li>
              玩家在規避此項指定建築的主要目標時，遊戲此時還是會正常進行，玩家將可以用緩慢而血腥的方式征服整個地圖的所有玩家，
            </li>
            <li>
              並可同時完成4項選擇性任務的所有主要目標，但在完成所有目標時，玩家此時就可以蓋完指定建築並等待15分鐘的援軍後，即可勝利。
            </li>
            <li>
              <nuxt-link to="/units/Berserk">精銳狂戰士</nuxt-link
              >非常適合發動突襲，狂戰士的自我痊癒能力使的他們能應付各種情況，對上建築也會造成很大的破壞。
            </li>
            <li>
              此地圖也適合維京大戰船突襲對方海岸建築因為不僅有很長的海岸線，而且維京大戰船也可以在許多內陸的河流上航行攻擊。
            </li>
            <li>
              雖然此關無法建造火炮戰船（不然會更容易），一群維京大戰船非常適合大量騷擾敵人。
            </li>
          </ul>

          <h3>遊戲內細節</h3>
          <div class="hrn1"></div>
          <ul>
            <li>
              麥西亞王國是由盎格魯人建立的，領土範圍大體相當於現在的英國的米德蘭地區。奇怪的是，此關麥西亞王國也控制著威爾士地區。這是錯誤的，因為該地區應由布立吞亞支(為海島凱爾特語支的其中一支凱爾特語言)/威爾士王國的人民控制此地區，如格溫內斯地區，這可能是因為此關場景的玩家位置已滿，無法再為威爾士地區添加玩家。
            </li>

            <li>
              威塞克斯在此關<nuxt-link to="/civs">文明</nuxt-link>為<nuxt-link
                to="/civs/Goths"
                >哥德人</nuxt-link
              >而不是<nuxt-link to="/civs/Britons">不列顛人</nuxt-link
              >，這可能是對<nuxt-link to="/batt/Battles_of_the_Conquerors"
                >征服者戰役</nuxt-link
              >第4章的1066年黑斯廷斯戰役劇情的一種提及，該關盎格魯撒克遜人又由同一文明代表。威塞克斯有（「西撒克遜」之意）可能是在495年由徹迪克領導下的撒克遜人建立的，據傳他率領族人在今天英國漢普郡沿海地帶登陸。到了徹迪克的孫子查烏林（560年－593年在位）時，撒克遜人的定居點已經遍布希爾騰山脈。隨著1066年的征服者威廉的諾曼征服，威塞克斯不再成為政治概念，而成為地理概念，它一般指現在英國的多塞特郡。
            </li>

            <li>
              維京人的世界奇觀在此關劇情被稱為日耳曼/北歐神奧丁的神廟，但此奇觀原形為是位於現今挪威萊達爾的博爾貢木板教堂（基督教的教堂)。
            </li>

            <li>
              朗納爾.洛德布洛克(Ragnar
              Lothbrok)，其姓氏(洛德布洛克)意思是指(毛絨綁腿褲)，指的是他上戰場時所打的奇怪皮革綁腿，而他本人聲稱此物具有某種魔力，可以保護他。
            </li>
            <li>
              根據一則傳說，他的第一任妻子被一條毒龍般的巨蟒囚禁，為了拯救妻子，他將一條皮褲丟入滾燙的瀝青中烹煮，然後沾滾上沙子，保護自己免受有毒的巨蟒咬傷。這件很不正統的裝備保護了他救出妻子。
            </li>
            <li>
              雖然朗納爾是位歷史人物，但有些人認為(洛德布洛克)是杜撰出來的傳說。
            </li>
            <li>
              然而，流傳最廣的故事則是他在英格蘭海岸上遇上了反常的風暴而沈船，生還者紛紛上了灘頭，諾森比亞的國王艾拉制服了這些人並抓住朗納爾。
            </li>
            <li>
              由於艾拉的領地一直是維京人最鍾愛的襲擊目標，艾拉國王當然要享受這個良機，好好修理這些折磨過他的人。
            </li>
            <li>
              他想出了一個特別的處決方式，將朗納爾丟進一個毒蛇坑裡，讓他被毒蛇活活咬死。
            </li>
            <li>
              等到朗納爾那條知名的褲子保護他免遭蛇咬時，艾拉就把他拉出坑來，剝光他的衣服並把他丟回坑裡
            </li>
            <li>
              朗納爾此時赤裸躺著受了致命傷，不屈的抬頭看著艾拉，唱出了維京人的戰歌:
            </li>
            <li>
              朗納爾:我很高興知道，奧丁會準備好盛宴的長凳，很快的我們就會暢飲著彎腳杯中的麥酒。來到英靈神殿的戰士不會哀嘆自己的死亡，我不會在唇邊掛著恐懼的話語，進入奧丁的殿堂。阿薩神族會來迎接我，死期將至而毫無哀嘆。我渴望離去，女武神正在召喚我回家，我笑著面對死亡。-----朗納爾.洛德布洛克(引述十三世紀冰島傳奇)
            </li>
            <li>
              曼島（英語：Isle of Man，曼島語：Ellan
              Vannin，簡稱「Mann」）位於英格蘭與愛爾蘭之間的海上島嶼，而從更精確的地理角度來看，曼島正地處於英格蘭、蘇格蘭、威爾斯、北愛爾蘭和愛爾蘭共和國的中心點。曼島是英國皇家屬地，嚴格來說在法律上並不是英國的一部分。該島的自治政府歷史悠久，早在10世紀就已經有自己的國會，首府為道格拉斯（Douglas）。馬恩島於華文地區內並沒有統一譯名，所以本島於各地都有不同譯名，甚至會出現某個華文地區中有多個譯名的情況。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              ><nuxt-link to="/maps/Continental">大陸</nuxt-link
              >：馬恩島，香港：馬恩島（天文臺），人島（運輸署），萌島（臨時立法會，稅務局，《蘋果日報》，曼島（海事處）臺灣：曼島，新加坡：曼島。
            </li>
            <li>
              遊戲內細節引述來源:維京傳奇：來自海上的戰狼號，(The Sea Wolves: A
              History of the Vikings) 原文作者： Lars
              Brownworth，譯者：黃芳田，出版社：馬可孛羅
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">約克城(865)</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Battles_of_the_Conquerors/York_map.png" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">戰役資訊</div>
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
              <nuxt-link to="/batt/Battles_of_the_Forgotten"
                >失落的帝國的戰役</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Persians">維京</nuxt-link>
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
              <nuxt-link to="/games/aof">失落的帝國</nuxt-link>第七章之三
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Dos_Pilas_648">雙池城記（648）</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Honfoglalas_895">征服家園(895)</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由賜齡、裕暉協助編輯。</div>
        <div class="wiki" style="margin-top: 5px;">
          <div style="float: left;">
            <img src="~assets/Wikipedia-logo.png" width="50" height="46" />
          </div>
          <div style="margin-left: 60px;">
            維基百科上的此關戰役其他資訊
            <div style="margin-left: 10px;">
              <em
                ><strong
                  ><a
                    href="https://en.wikipedia.org/wiki/Great_Heathen_Army"
                    target="_blank"
                    >維基百科上的異教徒大軍(英文)</a
                  ></strong
                ></em
              >、<em
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E6%9C%97%E7%B4%8D%E7%88%BE%C2%B7%E6%B4%9B%E5%BE%B7%E5%B8%83%E7%BE%85%E5%85%8B"
                    target="_blank"
                    >朗納爾·洛德布羅克</a
                  ></strong
                ></em
              >、<em
                ><strong
                  ><a
                    href="https://en.wikipedia.org/wiki/Tale_of_Ragnar%27s_Sons"
                    target="_blank"
                    >朗納爾之子的傳說故事(英文)</a
                  ></strong
                ></em
              >、<em
                ><strong
                  ><a
                    href="https://zh.wikipedia.org/wiki/%E4%B8%83%E5%9B%BD%E6%97%B6%E4%BB%A3"
                    target="_blank"
                    >英國七國時代</a
                  ></strong
                ></em
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
