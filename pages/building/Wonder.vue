<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12"><h1>世界奇觀</h1></div>
      <div class="hrn1"></div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>世界奇觀</b>能在<nuxt-link to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >建造。而在某些模式下，守護奇觀達到遊戲時間200年即可獲得勝利。
          </p>
          <p>
            每個<nuxt-link to="/civs">文明</nuxt-link
            >的世界奇觀都有獨特造型，而它們全部都跟該文明的歷史息息相關。
          </p>
        </div>
        <h3>概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              世界奇觀可以在任何模式裡面建造，但是只有在特定遊戲模式中會導致世界奇觀勝利。
            </li>
            <li>
              當一個玩家開始建立世界奇觀時，遊戲會自動送出消息通知所有玩家，且會直接標記出位置，以便其他玩家攻擊。
            </li>
            <li>
              紀念碑，是一個跟世界奇觀長的一樣的<nuxt-link to="/building"
                >建築</nuxt-link
              >，但是只能在地圖編輯器或是特定遊戲模式或<nuxt-link to="/batt"
                >戰役</nuxt-link
              >裡找到，有9999點<nuxt-link to="/elements/Hit_points"
                >生命值</nuxt-link
              >，且每個文明的紀念碑都跟奇觀長的一樣。
            </li>
            <li>
              世界奇觀建造時間非常長，沒有<nuxt-link to="/techs/Treadmill_Crane"
                >滑輪起重機</nuxt-link
              >的狀況下，單獨一名<nuxt-link to="/units/Villager">村民</nuxt-link
              >建造世界奇觀的時間是58.5分鐘。就算有30名村民也要至少5分鐘的時間才能建築完成。
            </li>
            <li>
              你可以建造一個以上的世界奇觀，他們長的一樣，但是要注意，每個世界奇觀的倒數計時是分開計算的，舉個例子：一名玩家建立了世界奇觀A，並在遊戲時間50年後建立世界奇觀B，建立了B之後又過了50年，世界奇觀A被摧毀了，倒數計時會從剩餘100年跳回剩餘150年(也就是世界奇觀B的倒數計時)。
            </li>
          </ul>
        </div>
        <h3>戰術與位置</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>世界奇觀需要被建立在一個完善的防禦中心。</li>
            <li>
              世界奇觀勝利可以說是防禦性文明的專利，若你是個擅長進攻的文明譬如<nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >，那還是直接消滅敵人比較快。
            </li>
            <li>
              最好能先建立陣地，以及一支可靠的軍隊，然後再開始建築世界奇觀，因為一旦開始建築，敵人很可能立刻發兵攻擊你。
            </li>
            <li>
              <nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
              >可以有效的保護世界奇觀，多建立幾層的城牆只有好處，但是至少要留幾格空間以放置幾個村民，以免被損傷的世界奇觀沒有辦法修復。
            </li>
            <li>
              世界奇觀最好建立在高地，以防止敵軍用高低差優勢對世界奇觀造成更多傷害。
            </li>
            <li>
              如果你有強大的<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
              >防衛(比如<nuxt-link to="/civs/Chinese">中國</nuxt-link
              >的<nuxt-link to="/units/Demolition_Ship">神風船</nuxt-link
              >或<nuxt-link to="/civs/Spanish">西班牙</nuxt-link>的<nuxt-link
                to="/units/Cannon_Galleon"
                >火砲戰船</nuxt-link
              >)，則選擇在海島上建築奇觀也是很不錯的選擇。
            </li>
            <li>
              <nuxt-link to="/maps/Black_Forest">黑森林</nuxt-link
              >等地圖尤其適合世界奇觀，但是要小心敵人用<nuxt-link
                to="/units/Siege_Onager"
                >重型投石車</nuxt-link
              >切穿樹林進攻。
            </li>
            <li>
              如果可以，把世界奇觀對敵軍的出入口減少，並且集中你的部隊在出入口。
            </li>
            <li>
              通常你需要大量的<nuxt-link to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >來防禦世界奇觀，若你的攻城武器真的不行，那還是換種勝利方式吧。
            </li>
          </ul>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle"><font color="black">劣勢與優勢</font></div>
            </td>
          </tr>
          <tr>
            <td class="tta1">強勢(容易對抗)</td>
            <td class="tta4">無。</td>
          </tr>
          <tr>
            <td class="tta1">劣勢(不易對抗)</td>
            <td class="tta4">所有單位。</td>
          </tr>
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle"><font color="black">升級</font></div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">生命值</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Masonry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link>(+10%) <br />
              <img
                class="gg"
                src="~assets/Architecture.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link>(+10%)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:20%">護甲</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Masonry.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Masonry">磚瓦技術</nuxt-link
              >(護甲+1/+1，+3建築護甲) <br />
              <img
                class="gg"
                src="~assets/Architecture.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Architecture">建築學</nuxt-link
              >(護甲+1/+1，+3建築護甲)
            </td>
          </tr>
          <tr>
            <td class="tta1"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Townwatch.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link>(+4)
              <br />
              <img
                class="gg"
                src="~assets/Townpatrol.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Town_Patrol">城鎮巡邏</nuxt-link>(+4)
            </td>
          </tr>
          <tr>
            <td class="tta1">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Faith.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link> <br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">建造速率</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Treadmillcrane.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >(+20%建造效率)
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">其它</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/Unique-tech.jpg"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Atheism">無神論</nuxt-link>(<nuxt-link
                to="/elements/Relic"
                >遺跡</nuxt-link
              >和世界奇觀的勝利時間延長100年，<nuxt-link to="/techs/Spies"
                >間諜</nuxt-link
              >/<nuxt-link to="/techs/Spies">叛徒</nuxt-link>花費-50%)
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">世界奇觀</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Wondericon.png" width="45px;" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">特殊</td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有文明</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築時間</td>
            <td class="unit4">3500秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Wood">木材</nuxt-link>
            </td>
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Stone">石頭</nuxt-link>
            </td>
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">1000</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">尺寸</td>
            <td class="unit4">5x5</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">4800</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">10</td>
          </tr>
          <tr>
            <td class="unit3">護甲分類</td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link>
              <br />
              <nuxt-link to="/armor/Armor_Class_Standard_Building"
                >標準建築</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">視野</td>
            <td class="unit4">8</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis和賜齡協助編輯</div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3>文明加成</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                >：世界奇觀的生命值+40%。
              </li>
              <li>
                <nuxt-link to="/civs/Chinese">中國</nuxt-link
                >：在帝王時代，對世界奇觀有加成的<nuxt-link to="/techs"
                  >科技</nuxt-link
                >價格便宜20％。
              </li>
              <li>
                <nuxt-link to="/civs/Incas">印加</nuxt-link
                >：世界奇觀成本減少15%石頭。
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link
                >：世界奇觀成本減少15%木材。
              </li>
            </ul>
          </div>
          <h3>團隊加分</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研究<nuxt-link
                  to="/techs/Treadmill_Crane"
                  >滑輪起重機</nuxt-link
                >，
                <nuxt-link to="/techs/Architecture">建築學</nuxt-link
                >和<nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
                >科技的團隊速度提高80%。
              </li>
            </ul>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3>
              <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
            </h3>
            <ul>
              <li>
                <nuxt-link to="/civs/Indians">印度</nuxt-link>的世界奇觀是Gol
                Gumbaz。
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
            </h3>
            <ul>
              <li>
                <nuxt-link to="/civs/Indians">印度</nuxt-link
                >現在的世界奇觀是布里哈迪希瓦拉神廟，Gol
                Gumbaz還是可以在戰役編輯器中找到。
              </li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                世界奇觀不屬於<nuxt-link
                  to="/armor/Armor_Class_standard_building"
                  >標準建築</nuxt-link
                >的<nuxt-link to="/armor">防禦類型</nuxt-link
                >，而這樣的建築只有兩個，<nuxt-link to="/building/Fish_Trap"
                  >漁網</nuxt-link
                >跟世界奇觀。
              </li>
              <li>
                在世紀帝國II裡的所有單位、科技、建築，只有世界奇觀是需要三種不同資源的。
              </li>
              <li>
                <nuxt-link to="/civs/Britons">不列顛</nuxt-link
                >的世界奇觀原型是在德國，且當時是<nuxt-link
                  to="/units/hero/Charlemagne"
                  >查理曼大帝</nuxt-link
                >的行宮，也就是說這是一個在德國境內為了<nuxt-link
                  to="/civs/Franks"
                  >法國</nuxt-link
                >國王建造的教堂。
              </li>
              <li>
                <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
                >的世界奇觀，聖索菲亞大教堂，相比現實建築之所以少了四根尖塔，是因為當時拜占庭帝國並不是伊斯蘭教，沒有那四根尖塔，尖塔是由鄂圖曼<nuxt-link
                  to="/civs/Turks"
                  >土耳其</nuxt-link
                >帝國的歷任蘇丹慢慢加上去的。
              </li>
              <li>
                比起沙特爾主教座堂，巴黎聖母院或許更能勝任<nuxt-link
                  to="/civs/Franks"
                  >法蘭克</nuxt-link
                >的世界奇觀，雖然巴黎聖母院其實算是<nuxt-link to="/civs/Goths"
                  >哥德</nuxt-link
                >式建築，但是哥德式這個詞其實是在近代出現的，在此之前的哥德式建築稱為法國式建築。
              </li>
              <li>
                東大寺至今仍是世界上最大的單一木造建築物(木造建築群則是紫禁城)。
              </li>
              <li>
                <nuxt-link to="/units/hero/Genghis_Khan">成吉思汗</nuxt-link
                >的金帳其實不如想像中宏偉，<nuxt-link to="/civs/Mongols"
                  >蒙古</nuxt-link
                >是遊牧民族，而巨大的金帳只會造成行軍不便罷了。
              </li>
              <li>
                <nuxt-link to="/civs/Persians">波斯</nuxt-link
                >的世界奇觀其實是長方形，而非遊戲中的正方形。
              </li>
              <li>
                <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
                >的世界奇觀，薩邁拉大清真寺，曾在2005年遭受炸彈攻擊炸毀部分塔頂，據說是跟美軍曾經使用這地方作為瞭望台有關。
              </li>
              <li>
                <nuxt-link to="/civs/Teutons">條頓</nuxt-link
                >的世界奇觀是個<nuxt-link to="/building/Monastery"
                  >修道院</nuxt-link
                >，而非馬爾堡<nuxt-link to="/building/Castle">城堡</nuxt-link
                >這個歷史悠久且由條頓<nuxt-link to="/units/Knight"
                  >騎士</nuxt-link
                >親手建造的城堡，這是很奇怪的，畢竟條頓騎士團曾在中世紀以強大的戰鬥力揚名立萬，而馬爾堡城堡是他們的指揮中心。
              </li>
              <li>
                距離最近的世界奇觀為拜占庭的聖索菲亞大教堂與土耳其的蘇丹艾哈邁德清真寺，兩者相距僅500公尺。
              </li>
              <li>
                <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
                >的世界奇觀，特诺奇蒂特兰大金字塔，頂上有兩座神廟，一座代表雨神，一座代表戰神，中間有活人祭祀用的石台。大部分祭品都是戰俘，這點引起鄰國不滿，間接導致阿茲特克的滅亡。
              </li>
              <li>
                <nuxt-link to="/civs/Huns">匈奴人</nuxt-link
                >不需要房子，連遊戲都這麼說，可是<nuxt-link to="/civs/Huns"
                  >匈奴</nuxt-link
                >卻有世界奇觀可以建造，而且根本跟匈奴一點關係沒有(撐死來說，是被他們征服文明的世界奇觀)。
              </li>
              <li>
                <nuxt-link to="/civs/Mayans">馬雅</nuxt-link
                >的世界奇觀更像是把大美洲豹神廟跟面具神廟融合起來的產物。
              </li>
              <li>
                西班牙的黃金塔，作用是保護西班牙珍寶船隊(從美洲運送奢侈品的船隊，黃金塔也得名於此)，實際上沒有遊戲中這麼宏偉。
              </li>
              <li>
                沒有人知道馬丘比丘到底是怎麼建造的，<nuxt-link to="/civs/Incas"
                  >印加人</nuxt-link
                >有輪子，但是不用，且每個石頭都緊密契合，連匕首都插不進去，這種高工藝技術使的<nuxt-link
                  to="/civs/Incas"
                  >印加</nuxt-link
                >文化留下了深深的謎團。
              </li>
              <li>
                很神奇的，<nuxt-link to="/civs/Indians">印度</nuxt-link
                >的世界奇觀不是泰姬瑪哈陵，這是因為泰姬瑪哈陵是出於穆斯林之手，比起神廟或是陵墓，印度文化的元素更少。
              </li>
              <li>
                <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
                >的世界奇觀是不合時宜的，基日島木教堂其實建構於17世紀，若要說哪個更適合斯拉夫，聖母升天大教堂、費拉邦多夫修道院以及古克里姆林宮可能更加合適(克里姆林宮以前曾是石灰石城堡)。
              </li>
              <li>
                <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
                >是中世紀非洲少數的基督教國家，該國基督教歷史可以追溯至舊約聖經列王紀上第十章，示巴女王為了聽取所羅門王的智慧來到以色列，帶回了基督教文化的前身：猶太信仰，而新約聖經使徒行傳第八章也提到有衣索比亞的太監來聽基督的福音。
              </li>
              <li>
                <nuxt-link to="/civs/Malians">馬利</nuxt-link
                >的世界奇觀也是不合時宜的，傑內大清真寺雖然確實是是13世紀馬利的建築，但是現在的清真寺其實是1907年重建的，真正的古清真寺可能不是這個模樣。
              </li>
              <li>
                <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
                >的瑞西貢佛塔，是真正意義上的金碧輝煌，整個佛塔是用金箔貼上的(真有錢)。
              </li>
              <li>
                <nuxt-link to="/civs/Khmer">高棉</nuxt-link
                >是古稱，現在叫做柬埔寨，而吳哥窟就在柬埔寨的國旗上。
              </li>
              <li>
                最大的世界奇觀是法蘭克的沙特爾主教座堂，而最小的是狄奧多里克陵墓，但以建築群來說，是高棉的吳哥窟最大。
              </li>
              <li>
                建立最早的世界奇觀是匈奴的君士坦丁凱旋門，最晚的是馬利的傑內大清真寺，兩者建造時間差距近1600年。但若以原始建築來說，最晚的是斯拉夫基日島的木結構教堂，但也差距了近1400年。
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-12">
          <h4 style="margin-top:30px;"><strong>世界奇觀列表</strong></h4>
          <div class="col-md-4">
            <h3>
              <span class="we">不列顛</span
              ><strong
                ><a href="http://tinyurl.com/y7b3ntp5" target="_blank"
                  >亞琛主教座堂</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderbritons.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於德國亞琛並由許多不同時期基督教建築藝術組合而成的主教座堂。建成於805年，為查理曼大帝的國王行宮。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Attila_the_Huna">阿提拉</nuxt-link
              >6-<nuxt-link to="/batt/Fall_of_Rome">羅馬的衰落</nuxt-link>
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">拜占庭</span
              ><strong
                ><a href="http://tinyurl.com/y9spbwty" target="_blank"
                  >聖索菲亞大教堂</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderbyzantines.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今土耳其伊斯坦堡的宗教建築，有近一千五百年的漫長歷史，因其巨大的圓頂而聞名於世。<nuxt-link
                to="/units/hero/Osman"
                >奧斯曼</nuxt-link
              ><nuxt-link to="/civs/Turks">土耳其人</nuxt-link
              >在1453年征服君士坦丁堡，蘇丹穆罕默德二世下令將大教堂轉變為清真寺。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Barbarossas_March"
                >紅鬍子的行軍</nuxt-link
              >、<nuxt-link to="/batt/Walls_of_Constantinople"
                >君士坦丁堡的城牆</nuxt-link
              >
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">塞爾特</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/卡瑟爾岩"
                  target="_blank"
                  >卡瑟爾岩</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/ROCK_OF_CASHEL_AOE2.gif" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今愛爾蘭南部城市卡瑟爾，最早建築於1100年，曾是芒斯特王國的重要據點，
            </p>
            <p>
              登場戰役：阿提拉6-羅馬的衰落、<nuxt-link
                to="/batt/Battles_of_the_Forgotten"
                >失落帝國的戰役</nuxt-link
              >-<nuxt-link to="/batt/York_865">約克（865）</nuxt-link>
            </p>
            <br />
            <br />
            <br />
            <br />
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">中國</span
              ><strong
                ><a href="https://zh.wikipedia.org/wiki/天壇" target="_blank"
                  >天壇</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderchineseaoeII.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今中國北京，古代皇帝的祈福場所，明清時期最高階地祭祀場所，只有皇帝才能使用，遊戲內的世界奇觀為天壇內的祈年殿。
            </p>
            <p>
              登場戰役：成吉思汗3-<nuxt-link to="/batt/Into_China"
                >進入中國</nuxt-link
              >
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">法蘭克</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/沙特爾主教座堂"
                  target="_blank"
                  >沙特爾主教座堂</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderfranks.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今法國巴黎西南70公里的沙特爾市，最初的模樣與現今不同，今天看到的教堂是在1220年完工，據說此地保存著聖母瑪利亞生下耶穌時穿的聖衣。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Battles_of_the_Conquerors"
                >征服者的戰役</nuxt-link
              >-<nuxt-link to="/batt/Agincourt_1415">亞琴哥特（1415）</nuxt-link
              >、阿提拉6-羅馬的衰落
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">哥德</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/狄奧多里克陵墓"
                  target="_blank"
                  >狄奧多里克陵墓</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wondergoths.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今<nuxt-link to="/civs/Italians">義大利</nuxt-link
              >拉偉納城外，狄奧多里克本人建立於520年。當代國王陵墓唯一的留到今日的，且是純粹的哥德建築，並沒有使用羅馬或是拜占庭式的建築風格。
            </p>
            <p>登場戰役：無</p>
            <br />
            <br />
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we"
                ><nuxt-link to="/civs/Japanese">日本</nuxt-link></span
              ><strong
                ><a href="https://zh.wikipedia.org/wiki/東大寺" target="_blank"
                  >東大寺</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderjapaneseaoeII.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今日本奈良，由聖武天皇於728年建立，內有奈良大佛，總共有260萬人跟東大寺的建立有關(建築工、捐獻物資等等)，而大佛則幾乎使用當時整個日本的銅器。現今的東大寺為1709年重建，而現在的東大寺只有以前的70%大小。
            </p>
            <p>
              登場戰役：失落帝國的戰役-<nuxt-link to="/batt/Kurikara_1183"
                >礪波山（1183）</nuxt-link
              >
            </p>
          </div>
          <div class="col-md-4">
            <h3><span class="we">蒙古</span><strong>成吉思汗金帳</strong></h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wondermongols.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              這是唯一一個完全沒有原型的世界奇觀，唯一知道的就是這個世界奇觀是成吉思汗的主帳篷。
            </p>
            <p>
              登場戰役：成吉思汗2-<nuxt-link to="/batt/A_Life_of_Revenge"
                >復仇的人生</nuxt-link
              >
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">波斯</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/塔克基思拉宮"
                  target="_blank"
                  >塔克基思拉宮</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderpersianaoeII.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今伊拉克泰西封，可能於540年開始建造，古代世界最大的拱形建築，1888年毀於大水災。
            </p>
            <p>
              登場戰役：成吉思汗4-<nuxt-link to="/batt/The_Horde_Rides_West"
                >遊牧民族的西遷</nuxt-link
              >
            </p>
            <br />
            <br />
            <br />
            <br />
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">薩拉森</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/薩邁拉大清真寺"
                  target="_blank"
                  >薩邁拉大清真寺</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wondersaracens.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今伊拉克薩邁拉，848年由阿拔斯王朝哈里發穆塔瓦基勒下令興建，852年完工，遊戲內的塔狀物只是清真寺的宣禮塔(用來提醒信徒每日五次朝拜)，真正的清真寺有多大可見一斑。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Saladina">沙拉丁</nuxt-link
              >6-<nuxt-link to="/batt/The_Lion_and_the_Demon"
                >獅子與惡魔</nuxt-link
              >、<nuxt-link to="/batt/Francisco_de_Almeidaa"
                >法蘭西斯科·阿爾梅達</nuxt-link
              >3-<nuxt-link to="/batt/Ruins_of_Empires">帝國的廢墟</nuxt-link>
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">條頓</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/瑪麗亞拉赫修道院"
                  target="_blank"
                  >瑪麗亞拉赫修道院</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderteutons.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今德國萊茵蘭-普法爾茨州，阿夫利赫姆修道院的修士建立於1093年，12世紀開始變成學術中心，瑪麗亞這個名字是在1862年，耶穌會的修士加上去的。
            </p>
            <p>
              登場戰役：沙拉丁5-<nuxt-link to="/batt/Jihad">聖戰</nuxt-link
              >、成吉思汗6-<nuxt-link to="/batt/Pax_Mongolia"
                >蒙古治下的和平</nuxt-link
              >、<nuxt-link to="/batt/Barbarossa">巴巴羅薩</nuxt-link
              >4-<nuxt-link to="/batt/The_Lombard_League">倫巴聯盟</nuxt-link
              >、阿提拉6-羅馬的衰落
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">土耳其</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/塞利米耶清真寺"
                  target="_blank"
                  >塞利米耶清真寺</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderturks.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今土耳其埃迪爾內，鄂圖曼帝國時期的清真寺，1575年完工，1913年遭到保加利亞大砲直接擊中頂端，但是只有輕微損傷，土耳其國父阿塔圖爾克下令不得修復，讓後代時刻以此為鑑。
            </p>
            <p>
              登場戰役：沙拉丁1-<nuxt-link to="/batt/An_Arabian_Knight"
                >阿拉伯騎士</nuxt-link
              >、<nuxt-link to="/batt/El_Cida">熙德</nuxt-link>4-<nuxt-link
                to="/batt/Black_Guards"
                >黑衛隊</nuxt-link
              >、<nuxt-link to="/batt/Prithviraj">布里斯比羅吉</nuxt-link
              >4-<nuxt-link to="/batt/Battles_of_Tarain">塔蘭村之戰</nuxt-link>
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we"
                ><nuxt-link to="/civs/Vikings">維京</nuxt-link></span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/博爾貢木板教堂"
                  target="_blank"
                  >博爾貢木板教堂</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WondervikingsaoeII.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今<nuxt-link to="/civs/Vikings">挪威</nuxt-link
              >萊達爾博爾貢，建於1180年到1250年間，為挪威28座木教堂裡保存最好的一座，現在不再是教堂，而是博物館。
            </p>
            <p>登場戰役：失落帝國的戰役-約克（865）</p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">阿茲特克</span
              ><strong
                ><a
                  href="https://baike.baidu.com/item/特诺奇蒂特兰大金字塔"
                  target="_blank"
                  >特诺奇蒂特兰大金字塔</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img
                  class="hg"
                  src="~assets/GREAT_PYRAMID_OF_TENOCHTITLAN_AOE2.gif"
                  alt=""
                />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今墨西哥墨西哥市，僅存地基，1325年開始修建，1487年最後一次擴建時的獻祭殺死了至少2000人作為祭品。毀於1521年<nuxt-link
                to="/units/Conquistador"
                >西班牙征服者</nuxt-link
              >的入侵。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Montezumaa">蒙特蘇馬</nuxt-link
              >6-<nuxt-link to="/batt/Broken_Spears">斷矛</nuxt-link
              >、失落帝國的戰役-雙柱城(648)
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">匈奴</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/君士坦丁凱旋門"
                  target="_blank"
                  >君士坦丁凱旋門</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderhuns.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今義大利羅馬，建立於312年，嚴格說起來並不算是中世紀建築，而他至今保存完好，是所有羅馬現存凱旋門最新的一座。
            </p>
            <p>登場戰役：無</p>
            <br />
            <br />
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we"
                ><nuxt-link to="/civs/Koreans">韓國</nuxt-link></span
              ><strong
                ><a href="https://zh.wikipedia.org/wiki/皇龍寺" target="_blank"
                  >皇龍寺</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderkorean.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今南韓慶州市，553年由新羅真興王下令修建，費時16年，1238年<nuxt-link
                to="/civs/Mongols"
                >蒙古人</nuxt-link
              >入侵被毀，韓國歷史上最大規模的佛寺。
            </p>
            <p>
              登場戰役：征服者的戰役-<nuxt-link to="/batt/Noryang_Point_1598"
                >洛陽點（1598）</nuxt-link
              >
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">馬雅</span><br /><strong
                ><a href="https://baike.baidu.com/item/蒂卡尔" target="_blank"
                  >大美洲豹神廟</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wondermayan.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今瓜地馬拉的叢林中，蒂卡爾早在2世紀就有人類活動，而大美洲豹則是當地的神廟，傾斜70度角的高聳神廟與哥德式建築有幾分相似，因而得名叢林大教堂。
            </p>
            <p>登場戰役：失落帝國的戰役-雙柱城(648)</p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">西班牙</span
              ><strong
                ><a href="https://zh.wikipedia.org/wiki/黃金塔" target="_blank"
                  >黃金塔</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderspanishaoeII.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今西班牙賽維亞，修建於13世紀的穆瓦希德王朝，作用是以鐵鍊控制水路進出口，1755年大地震摧毀了河岸另一端的塔，於是僅僅剩下一座，現為博物館。
            </p>
            <p>
              登場戰役：熙德5-<nuxt-link to="/batt/King_of_Valencia"
                >瓦倫西亞之主</nuxt-link
              >、蒙特蘇馬4-<nuxt-link to="/batt/La_Noche_Triste"
                >悲傷之夜</nuxt-link
              >、征服者的戰役-勒班陀(1571)
            </p>
            <br />
            <br />
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">印加</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/馬丘比丘"
                  target="_blank"
                  >馬丘比丘太陽神廟</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderincasaoeII.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今祕魯馬丘比丘，可能由印加統治者帕查庫蒂於1440年興建，馬丘比丘最驚奇的是，所有建築都是石材堆砌而成，沒有使用任何金屬，且據估計最高峰時期僅僅有750人居住。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/El_Doradoa">黃金國</nuxt-link
              >3-<nuxt-link to="/batt/The_Amazones">亞馬遜族</nuxt-link>
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">印度</span
              ><strong
                ><a
                  href="https://en.wikipedia.org/wiki/Gol_Gumbaz"
                  target="_blank"
                  >果爾。古姆巴斯</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderindiansaoeII.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今印度比賈布爾，穆罕默德·阿迪爾·沙阿王的陵墓，建立於1656年，名字是"圓形的屋頂"的意思，其上的圓頂跟建築本身高度幾乎相同。
            </p>
            <p>登場戰役：無</p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">義大利</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/圣老楞佐主教座堂_(热那亚)"
                  target="_blank"
                  >聖勞倫斯大教堂</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderitalians.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今義大利熱那亞，可能建造於5~6世紀，原是獻給熱那亞主教，後來獻給聖勞倫斯，此處在羅馬時代可能是個公墓。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Alaric">阿拉里克</nuxt-link
              >4-<nuxt-link to="/batt/The_Sack_of_Rome">洗劫羅馬</nuxt-link
              >、失落帝國的戰役-塞普勒斯(1191)
            </p>
            <br />
            <br />
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">馬扎爾</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/科文城堡"
                  target="_blank"
                  >科文城堡</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wondermagyars.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今羅馬尼亞胡內多阿拉，建於1446年，歐洲最大城堡之一，被選為羅馬尼亞七大奇蹟。城堡共有三個大區：騎士大廳、飯廳與環形走廊。
            </p>
            <p>登場戰役：無</p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">斯拉夫</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/基日島的木結構教堂"
                  target="_blank"
                  >基日島的木結構教堂</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Wonderslavs.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今俄羅斯基日島，修建於17世紀，完全由<nuxt-link
                to="/resource/Wood"
                >木頭</nuxt-link
              >打造，全教堂沒有使用任何一根釘子，主堂共有22個圓頂結構，代禱堂則有8個。
            </p>
            <p>登場戰役：無</p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we"
                ><nuxt-link to="/civs/Berbers">柏柏</nuxt-link></span
              ><strong
                ><a
                  href="https://en.wikipedia.org/wiki/Hassan_Tower"
                  target="_blank"
                  >哈桑塔</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderBerbers.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今摩洛哥拉巴特，1195年開始建造，原本是一座大清真寺的尖塔，並且其有望成為最大的清真寺尖塔，但是由於建造者蘇丹·阿布·優素福·雅各布·曼蘇爾逝世，工程於1199年停擺。
            </p>
            <p>登場戰役：無</p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">衣索比亞</span
              ><strong
                ><a
                  href="https://en.wikipedia.org/wiki/Biete_Amanuel"
                  target="_blank"
                  >比埃特阿曼紐爾</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderEthiopians.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今衣索比亞拉利貝拉，是阿克蘇姆帝國時期的建築物，阿克蘇姆帝國從330年開始就成為基督教國家，建築物本身一直是個基督教堂，整座教堂是一塊岩石鑿出來的。
            </p>
            <p>登場戰役：無</p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">馬利</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/傑內大清真寺"
                  target="_blank"
                  >傑內大清真寺</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderMalians.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今馬利傑內市巴尼河的氾濫平原上，是一座巨型的土坯建築(意思是只有土)，傑內大清真寺最早可追溯至13世紀，但是當時的模樣並沒有確切紀錄，現在的傑內大清真寺是1907年建造的。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Sundjataa">松迪亞塔</nuxt-link
              >5-<nuxt-link to="/batt/The_Lions_Den">深入虎穴</nuxt-link
              >、法蘭西斯科·阿爾梅達3-帝國的廢墟
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we"
                ><nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link></span
              ><strong
                ><a href="https://zh.wikipedia.org/wiki/貝倫塔" target="_blank"
                  >貝倫塔</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/WonderPortuguese.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今葡萄牙里斯本的貝倫區，建立於1514年至1520年間，用來紀念達伽馬成功航海世界一周以及防禦位於貝倫區的港口，建築本身大量使用了摩爾人和阿拉伯人的藝術元素。
            </p>
            <p>
              登場戰役：法蘭西斯科·阿爾梅達4-<nuxt-link
                to="/batt/Estado_da_India"
                >葡屬印度</nuxt-link
              >、法蘭西斯科·阿爾梅達5-<nuxt-link to="/batt/A_Sons_Blood"
                >兒子的血仇</nuxt-link
              >、<nuxt-link to="/batt/Bayinnaunga">勃印曩</nuxt-link
              >5-<nuxt-link to="/batt/The_Old_Tiger">鳳凰涅槃</nuxt-link>
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">緬甸</span
              ><strong
                ><a
                  href="https://en.wikipedia.org/wiki/Shwezigon_Pagoda"
                  target="_blank"
                  >瑞西貢佛塔</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/ShwezigonPagoda.png" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今緬甸蒲甘娘烏，建立於1059年，蒲甘內最古老的寺廟，建立者阿奴律陀王把佛陀舍利放在白大象上，讓大象走啊走的，停留的地方就蓋了這座佛塔。
            </p>
            <p>
              登場戰役：勃印曩2-<nuxt-link to="/batt/The_Mandalay_Cobra"
                >猛蛇出洞</nuxt-link
              >、勃印曩3-<nuxt-link to="/batt/The_Royal_Peacock"
                >百鳥朝鳳</nuxt-link
              >、勃印曩5-鳳凰涅槃
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we">高棉</span
              ><strong
                ><a href="https://zh.wikipedia.org/wiki/吳哥窟" target="_blank"
                  >吳哥窟</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Angkorwataoe2irl.png" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今柬埔寨西北部，蘇利耶跋摩二世於13世紀動用全國之力花費35年修成，世界上最大的廟宇，整座廟宇是石材建造，整個廟宇隱藏在叢林裡，樹根滿布，非常具有神祕氣息。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Suryavarman_I"
                >蘇利耶跋摩一世</nuxt-link
              >5-<nuxt-link to="/batt/Nirvanapada">千古偉業</nuxt-link
              >、勃印曩1-<nuxt-link to="/batt/The_Burmese_Tigers"
                >餓虎撲食</nuxt-link
              >
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we"
                ><nuxt-link to="/civs/Malay">馬來</nuxt-link></span
              ><strong
                ><a href="https://en.wikipedia.org/wiki/Kalasan" target="_blank"
                  >卡拉桑</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/KalasanAOE2.jpg" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今印度尼西亞爪哇島，根據卡拉桑銘文，建立於778年，整座的石造廟宇，是一座佛教建築，並不是印度教建築(常常被人誤認)。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Gajah_Madaa">加查·馬達</nuxt-link
              >5-<nuxt-link to="/batt/The_Pasunda_Bubat_Tragedy"
                >風雲變色</nuxt-link
              >、勃印曩5-鳳凰涅槃
            </p>
            <br />
            <br />
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we"
                ><nuxt-link to="/civs/Vietnamese">越南</nuxt-link></span
              ><strong
                ><a
                  href="http://www.baohuasi.org/gnews/2013413/2013413280755.html"
                  target="_blank"
                  >寧福寺</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img class="hg" src="~assets/Butthapaoe2irl.png" alt="" />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今越南順成縣隴江，13世紀建成，供奉千手千眼觀音，越南最有名的寶塔，總共有十幢建築物，遊戲內只有顯示出一幢。
            </p>
            <p>
              登場戰役：<nuxt-link to="/batt/Le_Loi">黎利</nuxt-link
              >4-<nuxt-link to="/batt/Reaching_South">揮師南下</nuxt-link>
            </p>
          </div>
          <div class="col-md-4">
            <h3>
              <span class="we"
                >印度(<nuxt-link to="/games/aor">王者崛起</nuxt-link>版本)</span
              ><strong
                ><a
                  href="https://zh.wikipedia.org/wiki/布里哈迪希瓦拉神廟"
                  target="_blank"
                  >布里哈迪希瓦拉神廟</a
                ></strong
              >
            </h3>
            <div class="wimg">
              <gallery>
                <img
                  class="hg"
                  src="~assets/Brihadeeswarartempleaoe2irl.png"
                  alt=""
                />
              </gallery>
            </div>
            <div class="hrn1"></div>
            <p>
              位於現今印度泰米爾納德邦，建立於1000年左右，印度最高的神廟，供奉濕婆神，主殿內供奉有印度現存最大的石雕林伽(各位男性，就是你胯下那根)。
            </p>
            <p>登場戰役：勃印曩1-餓虎撲食</p>
          </div>
          <div class="col-md-12"></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allbuilding',
  components: {}
}
</script>
<style></style>
