<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1><img src="~assets/goths.png" />哥德</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>哥德</b
            >泛指日耳曼地區東部部落的總稱，最廣為人知的哥德事跡是於西元476年將西羅馬帝國滅亡。
          </p>
          <p>
            遊戲中的哥德很好的還原了他們在歷史上的高侵略性。並且對於"後期強大"這一明顯特徵有顯著的描寫。(羅馬帝國強盛時很好的壓制哥德部落，但最終被東哥德滅亡)
          </p>
          <p>
            歷史上的哥德分為兩部分，東哥德在滅亡了西羅馬帝國之後就定居在<nuxt-link
              to="/civs/Italians"
              >義大利</nuxt-link
            >(也難怪他克制遊戲中的<nuxt-link to="/civs/Italians"
              >義大利人</nuxt-link
            >)，西哥德則在伊比利半島，成為了<nuxt-link to="/civs/Portuguese"
              >葡萄牙人</nuxt-link
            >與<nuxt-link to="/civs/Spanish">西班牙人</nuxt-link
            >的祖先。(這或許也是為甚麼他在遊戲中有<nuxt-link
              to="/units/Gunpowder_Unit"
              >火藥單位</nuxt-link
            >)
          </p>
          <p>
            中世紀的開始通常被標記為476年，也就是當哥德的入侵終於導致羅馬的滅亡開始，此後的將近900多年被史學稱之為黑暗時代。
          </p>
          <p>
            如今大多數人所知道的"哥德"就是哥德式建築風格，通常為帶有尖形拱門的高聳建築，並大量使用彩繪玻璃。哥德蘿莉風與哥德金屬樂團則是以黑色為主，大概是繼承了<nuxt-link
              to="/civs/Goths"
              >哥德人</nuxt-link
            >帶給羅馬人的恐懼。
          </p>
        </div>
        <h3>
          <strong><nuxt-link to="/civs">文明</nuxt-link>概要</strong>
        </h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              哥德是中歐的<nuxt-link to="/units/Infantry_Units"
                >步兵文明</nuxt-link
              >，為世紀帝國II最初種族之一。
            </li>
            <li>
              他有一個近乎完整的<nuxt-link to="/units/Infantry_Units"
                >步兵</nuxt-link
              ><nuxt-link to="/tree/vie">科技樹</nuxt-link>，且<nuxt-link
                to="/elements/Team_Bonus"
                >團隊加分</nuxt-link
              >讓他與他的隊友的<nuxt-link to="/building/Barracks"
                >軍營</nuxt-link
              >更加有力。
            </li>
            <li>
              哥德擁有近乎完美的<nuxt-link to="/units/Cavalry_Units"
                >騎兵</nuxt-link
              >，但是同時擁有了全文明最弱的防禦作為代價。
            </li>
            <li>
              由於<nuxt-link to="/techs/untech">特殊科技</nuxt-link
              >的緣故，哥德可以在後期把大量資源輕易轉成單位。
            </li>
            <li>是進攻異常兇悍的文明，進入守勢則顯得異常吃力。</li>
            <li>
              <nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
              >是<nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
              >，歸類為步兵，可以克制一切<nuxt-link to="/units/Archer_Units"
                >遠程單位</nuxt-link
              >(<nuxt-link to="/units/Mangonel">投石車</nuxt-link>系除外)。
            </li>
            <li>
              哥德三大<nuxt-link to="/units/Infantry_Units">步兵單位</nuxt-link
              >可以克制幾乎所有組合，但是顯然需要龐大的<nuxt-link
                to="/resource/Food"
                >食物</nuxt-link
              >來源。
            </li>
            <li>
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              >特殊科技<nuxt-link to="/techs/Anarchy">無政府狀態</nuxt-link
              >，<nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
              >單位通常克制軍營單位，而無政府則讓射箭場單位束手無策，讓軍營的功能更加完整。<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >的特殊科技為<nuxt-link to="/techs/Perfusion">井噴</nuxt-link
              >，這個<nuxt-link to="/techs">科技</nuxt-link
              >則讓哥德軍營擁有全遊戲最快的步兵生產速度。
            </li>
            <li>
              哥德的文明跟科技使他十分適合後帝王死鬥，這是個非常優待哥德的遊戲模式。
            </li>
          </ul>
          <h3><strong>特殊單位</strong></h3>
          <ul>
            <li>
              <img class="gg" src="~assets/HuskarlIcon.png" alt="" /><nuxt-link
                to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >：快速的步兵，且有異常高的<nuxt-link to="/armor"
                >遠程護甲</nuxt-link
              >，基本上克制所有弓箭系。碰到高攻擊近戰單位會顯得吃力。
            </li>
          </ul>
          <h3><strong>特殊科技</strong></h3>
          <ul>
            <li>
              <img class="gg" src="~assets/unique_tech.png" alt="" /><nuxt-link
                to="/techs/Anarchy"
                >無政府狀態</nuxt-link
              >：軍營可以生產哥德衛隊。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                alt=""
              /><nuxt-link to="/techs/Perfusion">井噴</nuxt-link
              >：軍營生產單位速度快100%。
            </li>
          </ul>
        </div>
        <h3><strong>文明加成</strong></h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              步兵花費在黑暗/封建/城堡/帝王時代，減免為20%/25%/30%/35%。
            </li>
            <li>
              步兵在封建/城堡/帝王時代，對<nuxt-link
                to="/armor/Armor_Class_Building"
                >建築物</nuxt-link
              >攻擊+1/+2/+3。
            </li>
            <li>
              <nuxt-link to="/units/Villager">村民</nuxt-link>對<nuxt-link
                to="/units/animal/Wild_Boar"
                >野豬</nuxt-link
              >傷害+5，且獵人攜帶食物+15
            </li>
            <li>帝王時代的人口上限+10</li>
            <li>織布技術立即研發完成</li>
            <li><strong>團隊加分:</strong>軍營生產速度快20%</li>
          </ul>
        </div>
        <h3>科技樹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em><nuxt-link to="/tree/got">哥德科技樹</nuxt-link></em>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>
              可研發<nuxt-link to="/techs/Treadmill_Crane">滑輪起重機</nuxt-link
              >。
            </li>
            <li>非精銳哥德衛隊訓練時間為26秒。</li>
            <li>
              <nuxt-link to="/units/Huskarl">哥德衛隊</nuxt-link
              >遠防為4；精銳哥德衛隊遠防則為6。
            </li>
            <li>對弓兵系額外攻擊加成一般哥德衛隊為4，精銳為6。</li>
            <li>哥德衛隊移動速度為0.9。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>1.0b改版後步兵單位成本從封建時代-35%。</li>
            <li>獲得<nuxt-link to="/techs/Arson">縱火</nuxt-link>。</li>
            <li>
              獲得<nuxt-link to="/techs/Perfusion/">井噴</nuxt-link
              >(舊稱灌注士氣)。
            </li>
            <li>非精銳哥德衛隊訓練時間調降為16秒。</li>
            <li>哥德衛隊遠防為6；精銳哥德衛隊遠防則為8。</li>
            <li>對弓兵系額外攻擊加成一般哥德衛隊為6，精銳為10。</li>
            <li>哥德衛隊移動速度為1.05。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>移除滑輪起重機。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/ak">非洲王朝</nuxt-link></em>
          </h3>
          <ul>
            <li>
              4.8改版後科技樹移除<nuxt-link to="/techs/Arrowslits"
                >箭狹槽</nuxt-link
              >。
            </li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aok">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>(35584更新) 步兵造價全時代-35%。</li>
            <li>
              (36202更新) 步兵造價黑暗/封建/城堡/帝王各-20%/-25%/-30%/-35%。
            </li>
            <li>
              (36202更新)
              步兵對建築的攻擊加成從封建時代開始每個時代+1(到帝王總共+3)，但失去縱火科技。
            </li>
            <li>(36906更新) 獲得免費織布技術。</li>
            <li>(42848更新) 織布技術不再免費，改為立即研發完成。</li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/Wondergoths.jpg" alt=""
              /></gallery>
              <p><em>哥德世界奇觀</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img class="imgn hg" src="~assets/CentEuropean.jpg" alt=""
              /></gallery>
              <p><em>哥德的建築風格</em></p>
            </div>
          </div>
        </div>
        <h3><strong>戰術概論</strong></h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong>優勢</strong>
          <ul>
            <li>哥德的步兵是遊戲最便宜，且生產也最快。</li>
            <li>哥德步兵若算上費用減免與特殊單位，則為遊戲中最強。</li>
            <li>哥德有早期的獵人優勢，但實際上沒什麼用。</li>
            <li>步兵很便宜，可以用大量步兵壓制對手。</li>
            <li>
              軍營可以生產哥德衛隊，所以相對其他文明不需要太多<nuxt-link
                to="/resource/Stone"
                >石頭</nuxt-link
              >。
            </li>
            <li>
              <nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
              >其實在平均水平，若有需要可以使用。
            </li>
            <li>
              哥德衛隊害怕近戰步兵，但是哥德有火槍手可以搭配哥德衛隊使用。
            </li>
            <li>
              弩砲可以有效克制步兵，但是哥德有完美的<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >系可以克制它們。
            </li>
            <li>
              哥德的<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
              >並不差，<nuxt-link to="/units/Siege_Tower">攻城塔</nuxt-link
              >常常被忽略，但其實非常適合哥德。
            </li>
            <li>
              哥德<nuxt-link to="/units/Crossbowman">弩兵</nuxt-link
              >在城堡時代其實很好用，但是大多數玩家不會猜到哥德出弩兵，可以讓對手無法反應。
            </li>
          </ul>
          <strong>劣勢</strong>
          <ul>
            <li>
              由於沒有<nuxt-link to="/building/Stone_Wall">石牆</nuxt-link
              >與任何<nuxt-link to="/building/Watch_Tower">箭塔</nuxt-link
              >升級，哥德必須大量進攻，所以經濟被打擊的哥德將毫無用處。
            </li>
            <li>
              攻城武器雖然不差，但是毫無特色，也就是對於<nuxt-link
                to="/civs/Koreans"
                >朝鮮</nuxt-link
              >這樣擁有<nuxt-link to="/building/Bombard_Tower">火砲塔</nuxt-link
              >的防禦性文明將很難造成傷害。
            </li>
            <li>
              哥德單位害怕強力的近戰步兵，因為它們缺少<nuxt-link
                to="/techs/Plate_Mail_Armor"
                >步兵板甲</nuxt-link
              >，所以碰到<nuxt-link to="/units/Jaguar_Warrior"
                >豹勇士</nuxt-link
              >
              或是<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >這樣的單位則會吃大虧。
            </li>
            <li>
              哥德封建快攻很強力，但是若遭到防禦，後果可能是無法有足夠的後期經濟來壓制對手。
            </li>
            <li>房子被拆毀的哥德很容易被消滅。</li>
          </ul>
          <strong>主要策略</strong>
          <ul>
            <li>
              哥德的封建快攻是毀滅性的，因為他能比其他文明生產更多的步兵，且速度更快。
            </li>
            <li>
              若來到城堡時代，哥德衛隊與<nuxt-link to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >是很強勢的組合，好的哥德玩家必須熟知兵種相剋，善用便宜且升級完全的<nuxt-link
                to="/units/Pikeman"
                >重裝長槍兵</nuxt-link
              >克制對手的騎兵，並且善用長劍兵對付對手的步兵，以保護哥德衛隊。
            </li>
            <li>
              城堡時代只要20個左右的哥德衛隊就可以強攻<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >。
            </li>
            <li>
              在水上地圖，哥德並不差，但是大多數情況下，哥德玩家最好保持"乾燥"，因為<nuxt-link
                to="/units/Naval_Vessels"
                >海軍單位</nuxt-link
              >沒有減免。
            </li>
            <li>
              哥德善於打擊弓箭文明，譬如<nuxt-link to="/civs/Mayans"
                >馬雅</nuxt-link
              >或是<nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >，但是對於擁有強大近戰步兵或是強力攻城武器的文明則很吃力，比如塞爾特。
            </li>
            <li>由於沒有石牆，所以善用建築圍城則變得至關重要。</li>
            <li>
              若遊戲進行到大後期，且經濟完善，毫無策略的無腦進攻就是最好的策略。
            </li>
            <li>以進攻為防守就是哥德玩家必須遵守的核心概念。</li>
          </ul>
          <strong>盟友選擇</strong>
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >擁有的豹勇士非常適合與哥德衛隊聯合進攻，且哥德的團隊加分能夠讓阿茲特克的步兵生產更加快速。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >的團隊加分尤其適合哥德(哥德通常有很多軍營)，再加上斯拉夫本身就強悍的步兵，甚至搭配<nuxt-link
                to="/units/Boyar"
                >貴族鐵騎</nuxt-link
              >也是可行的。
            </li>
            <li>
              義大利的<nuxt-link to="/units/Condottiero">傭兵</nuxt-link
              >於帝王時代可以在同盟的軍營生產，這使哥德可以擁有更多選擇，讓原本害怕大量<nuxt-link
                to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >的哥德步兵團隊更加無敵。
            </li>
            <li>
              <nuxt-link to="/civs/Malay">馬來</nuxt-link
              >擁有不需要花費<nuxt-link to="/resource/Gold">黃金</nuxt-link
              >的<nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
              >，且受益於哥德的團隊加分，可以用來保護哥德衛隊。
            </li>
            <li>
              其實哥德本身很強大，但是由於前期擁有劣勢，所以任何能夠在前期保護哥德的文明都是好的盟友選擇，譬如<nuxt-link
                to="/civs/Magyars"
                >馬扎爾</nuxt-link
              >。
            </li>
          </ul>
          <strong>對抗要點</strong>
          <ul>
            <li>
              對上哥德的策略有兩種:在城堡時代之前消滅他們，或是在後期用投石車與火砲塔打陣地戰。
            </li>
            <li>
              哥德從封建時代開始增強，若是能在黑暗時代進行騷擾，則能對他造成很大的打擊。
            </li>
            <li>若哥德玩家在封建時代開始攻擊你，建造石牆能夠有效防禦。</li>
            <li>
              若你發現封建時代的哥德玩家沒有來進攻，那就換你必須顯得激進，以防止他們建立經濟，否則到了後期你將束手無策。
            </li>
            <li>
              封建時代的哥德沒有哥德衛隊，善用這一點好用<nuxt-link
                to="/units/Archer_Units"
                >弓兵</nuxt-link
              >進攻。
            </li>
            <li>
              城堡時代的哥德非常強大，但是仍然對於石牆加上投石車的防禦策略毫無辦法。
            </li>
            <li>大多數哥德玩家使用步兵，這就讓投石車顯得有利。</li>
            <li>帝王時代的哥德雖然強勢，但仍然害怕大量的火槍兵與投石車。</li>
            <li>擁有火砲塔與良好投石車的文明能夠有效防禦哥德玩家的進攻。</li>
          </ul>
        </div>
        <h3>
          出場戰役
        </h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td>戰役名稱</td>
              <td>可否使用</td>
              <td>稱號與顏色</td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Barbarossa">巴巴羅薩</nuxt-link
                >1-<nuxt-link to="/batt/Holy_Roman_Emperor">羅馬皇帝</nuxt-link>
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p1" style="height: 23px"></div>
                奧地利(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                巴巴羅薩2-<nuxt-link to="/batt/Henry_the_Lion"
                  >猛獅亨利</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p1" style="height: 23px"></div>
                波蘭(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Genghis_Khana">成吉思汗</nuxt-link
                >4-<nuxt-link to="/batt/The_Horde_Rides_West"
                  >策馬西征</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p2" style="height: 23px"></div>
                俄羅斯(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                成吉思汗5-<nuxt-link to="/batt/The_Promise">臨終夙願</nuxt-link>
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p1" style="height: 23px"></div>
                波蘭人(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Attila_the_Huna">阿提拉</nuxt-link
                >2-<nuxt-link to="/batt/The_Great_Ride">天下第一騎</nuxt-link>
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p3" style="height: 23px"></div>
                尼賽斯(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                阿提拉3-<nuxt-link to="/batt/Walls_of_Constantinople"
                  >君士坦丁堡的城牆</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p3" style="height: 23px"></div>
                馬西雅拿不勒斯(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                阿提拉5-<nuxt-link to="/batt/Catalaunian_Fields"
                  >沙隆戰役</nuxt-link
                >(895)
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p2" style="height: 23px"></div>
                東哥德人(友軍)
                <br />
                <div class="p3" style="height: 23px"></div>
                西哥德人(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Battles_of_the_Conquerors"
                  >征服者的戰役</nuxt-link
                >-<nuxt-link to="/batt/Hastings_1066"
                  >哈斯汀斯戰役(1066)</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p2" style="height: 23px"></div>
                撒克遜(敵對)
                <br />
                <div class="p8" style="height: 23px"></div>
                撒克遜人哈羅德(敵對)
                <br />
                <div class="p4" style="height: 23px"></div>
                哈羅德的偷襲部隊(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Alaric">阿拉里克</nuxt-link>1-<nuxt-link
                  to="/batt/All_Roads_Lead_to_a_Besieged_City"
                  >冷河戰役</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-check" style="color: green;"></span>
              </td>
              <td class="tta3">
                <div class="p1" style="height: 23px"></div>
                玩家
                <br />
                <div class="p6" style="height: 23px"></div>
                哥德人(友軍)
                <br />
                <div class="p7" style="height: 23px"></div>
                哥德難民(友軍)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                阿拉里克2-<nuxt-link to="/batt/Legionaries_on_the_Horizon"
                  >羅馬軍團隨時殺到</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-check" style="color: green;"></span>
              </td>
              <td class="tta3">
                <div class="p1" style="height: 23px"></div>
                玩家
                <br />
                <div class="p3" style="height: 23px"></div>
                阿陶爾夫的部隊(友軍)
                <br />
                <div class="p6" style="height: 23px"></div>
                哥德人(友軍)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                阿拉里克3-<nuxt-link to="/batt/Emperor_of_the_West"
                  >西域之君</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-check" style="color: green;"></span>
              </td>
              <td class="tta3">
                <div class="p1" style="height: 23px"></div>
                玩家
                <br />
                <div class="p3" style="height: 23px"></div>
                薩魯斯(敵對)
                <br />
                <div class="p5" style="height: 23px"></div>
                阿拉里克(友軍)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                阿拉里克4-<nuxt-link to="/batt/The_Sack_of_Rome"
                  >洗劫羅馬</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-check" style="color: green;"></span>
              </td>
              <td class="tta3">
                <div class="p1" style="height: 23px"></div>
                玩家
                <br />
                <div class="p3" style="height: 23px"></div>
                哥德人(友軍)
                <br />
                <div class="p5" style="height: 23px"></div>
                阿陶爾夫(友軍)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Baria">巴里</nuxt-link>1-<nuxt-link
                  to="/batt/Arrival_at_Bari"
                  >抵達巴里</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p7" style="height: 23px"></div>
                倫巴第(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                巴里2-<nuxt-link to="/batt/The_Rebellion_of_Melus"
                  >邁勒斯叛變</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p3" style="height: 23px"></div>
                友好的倫巴第人(友軍)
                <br />
                <div class="p8" style="height: 23px"></div>
                反抗軍(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/units/hero/Tariq_ibn_Ziyad"
                  >塔里克·伊本·齊亞德</nuxt-link
                >1-<nuxt-link to="/batt/The_Battle_of_Guadalete"
                  >瓜達萊特之戰</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p3" style="height: 23px"></div>
                羅德里克軍隊(敵對)
                <br />
                <div class="p5" style="height: 23px"></div>
                西哥德(敵對)
                <br />
                <div class="p7" style="height: 23px"></div>
                當地人(友軍)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                塔里克·伊本·齊亞德2-<nuxt-link
                  to="/batt/Consolidation_and_Subjugation"
                  >攻城拔寨</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p3" style="height: 23px"></div>
                西哥德守備隊(敵對)
                <br />
                <div class="p2" style="height: 23px"></div>
                梅里達(敵對)
                <br />
                <div class="p5" style="height: 23px"></div>
                瓜達拉哈拉(敵對)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                塔里克·伊本·齊亞德3-<nuxt-link to="/batt/Divide_and_Conquer"
                  >縱橫捭闔</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p8" style="height: 23px"></div>
                穆爾西亞的奧德米爾(敵對)
                <br />
                <div class="p2" style="height: 23px"></div>
                阿斯圖里亞斯帝國(敵對)
                <br />
                <div class="p5" style="height: 23px"></div>
                納博納(敵對)
                <br />
                <div class="p7" style="height: 23px"></div>
                當地人(友軍)
              </td>
            </tr>
            <tr>
              <td class="tta1">
                塔里克·伊本·齊亞德4-<nuxt-link to="/batt/Crossing_the_Pyrenees"
                  >穿越庇里牛斯山脈</nuxt-link
                >
              </td>
              <td class="tta2">
                <span class="fas fa-times" style="color: #d9534f;"></span>
              </td>
              <td class="tta3">
                <div class="p7" style="height: 23px"></div>
                當地人(友軍)
                <br />
                <div class="p2" style="height: 23px"></div>
                阿斯圖里亞人(敵對)
                <br />
                <div class="p6" style="height: 23px"></div>
                西哥德人(敵對)
              </td>
            </tr>
          </table>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              哥德衛隊的英文發音跟<nuxt-link to="/units/Hussar"
                >匈牙利輕騎兵</nuxt-link
              >非常相似，常常會有人弄混。
            </li>
            <li>
              哥德是唯一無法建造石牆與<nuxt-link to="/building/Gate"
                >城門</nuxt-link
              >的文明。
            </li>
            <li>
              哥德在正史中沒有使用<nuxt-link to="/units/Gunpowder_Unit"
                >火藥</nuxt-link
              >部隊的紀錄，但是出於遊戲平衡，他們擁有所有火藥部隊。
            </li>
            <li>
              雖然在世紀帝國II中哥德是步兵文明，但歷史上的哥德以騎兵為主。
            </li>
            <li>
              哥德步兵常被戲稱為三色布丁，若是有義大利為同盟則是四色布丁。
            </li>
            <li>在25人口上限的遊戲中，哥德比別人多了40%人口上限。</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#e6992c;">
              <div class="unititle2">
                哥德
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/92000230.jpg" width="300" alt="" />
                <p><em>硬幣上的人為狄奧多里克大帝，東哥德王國建立者。</em></p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#e6992c;">
              <div class="unititle2">概要</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">建築風格</td>
            <td class="unit4">中歐</td>
          </tr>
          <tr>
            <td class="unit3">分類文明</td>
            <td class="unit4">
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">特殊單位</td>
            <td class="unit4">
              <img class="gg" src="~assets/HuskarlIcon.png" /><nuxt-link
                to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">首選戰略</td>
            <td class="unit4">
              大後期戰爭，<nuxt-link to="/techs/age/Feudal_Age">封建</nuxt-link
              >快攻，<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link>快攻
            </td>
          </tr>
          <tr>
            <td class="unit3">特殊技術</td>
            <td class="unit4">
              <img class="gg" src="~assets/unique_tech.png" /><nuxt-link
                to="/techs/Anarchy"
                >無政府狀態</nuxt-link
              >
              <br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
              /><nuxt-link to="/techs/Perfusion">井噴</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allciv' })

export default {
  components: {}
}
</script>
<style></style>
