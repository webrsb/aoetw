<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>波斯</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>波斯</b
            >是個古老的國家，最廣為人知的波斯帝國其實早在亞歷山大東征時滅亡。
          </p>
          <p>
            遊戲中很好的還原了上古波斯的強盛經濟。並且對於上古波斯的強大<nuxt-link
              to="/units/Cavalry_Units"
              >騎兵</nuxt-link
            >與虛弱的<nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
            >有很好的還原。(電影300壯士有很好的描述)
          </p>
          <p>
            上古波斯的<nuxt-link to="/units/Naval_Vessels">海軍</nuxt-link
            >曾強盛一時，並且很好的提供了陸上部隊的支援，這也許就是為甚麼波斯海軍的<nuxt-link
              to="/tree/vie"
              >科技樹</nuxt-link
            >也如此完整
          </p>
          <p>
            中世紀時候的波斯對中亞影響甚鉅，但是對歐洲<nuxt-link to="/civs"
              >文明</nuxt-link
            >與東亞甚至西亞的影響卻不如以往。時至今日，上古波斯的光榮已經不再。
          </p>
        </div>
        <h3>文明概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              波斯是西亞的<nuxt-link to="/units/Cavalry_Units"
                >騎兵文明</nuxt-link
              >，為世紀帝國II最初種族之一。
            </li>
            <li>
              波斯有完整的騎兵科技樹，且<nuxt-link to="/elements/Team_Bonus"
                >團隊加分</nuxt-link
              >讓波斯與其隊友的騎兵變得更強力。
            </li>
            <li>
              波斯擁有近乎完美的騎兵，但是同時擁有全文明最弱的步兵作為代價。
            </li>
            <li>
              由於文明加成的緣故，波斯是受<nuxt-link to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
              >影響最小的文明之一。
            </li>
            <li>總體來說是一個以進攻為主的文明，但進入守勢則顯得吃力。</li>
            <li>
              他的<nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link
              >是<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
              >，歸類為騎兵，所以非常懼怕<nuxt-link to="/units/Spearman"
                >長槍兵</nuxt-link
              >
            </li>
            <li>
              沒有<nuxt-link to="/units/Champion">劍兵勇士</nuxt-link
              >與三級遠程攻擊，面對垃圾海的消耗戰，顯然吃不消。
            </li>
            <li>
              <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >的特殊科技為<nuxt-link to="/techs/Mahouts">象伕</nuxt-link
              >，這個<nuxt-link to="/techs">科技</nuxt-link
              >則減輕了戰象最大的弱點：緩慢的移動速度。
            </li>
          </ul>
          <h3>特殊單位</h3>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/WarElephantIcon.png"
                alt=""
              /><nuxt-link to="/units/War_Elephant">戰象</nuxt-link
              >：笨重緩慢，但是戰鬥力近乎恐怖的騎兵
            </li>
          </ul>
          <h3>特殊科技</h3>
          <ul>
            <li>
              <img class="gg" src="~assets/unique_tech.png" alt="" /><nuxt-link
                to="/techs/Kamandaran"
                >波斯弓兵</nuxt-link
              >：訓練徒步<nuxt-link to="/units/Archer_Units">弓兵系</nuxt-link
              >消耗額外木材，而不消耗黃金。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                alt=""
              /><nuxt-link to="/techs/Mahouts">象伕</nuxt-link
              >：戰象的移動速度+30%
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              開始時有+50<nuxt-link to="/resource/Food">食物</nuxt-link
              >與+50<nuxt-link to="/resource/Wood">木材</nuxt-link>
            </li>
            <li>
              <nuxt-link to="/building/Dock">碼頭</nuxt-link>與<nuxt-link
                to="/building/Town_Center"
                >城鎮中心</nuxt-link
              >的<nuxt-link to="/elements/Hit_points">生命值</nuxt-link
              >+100%，且工作速度(生產速度與研發速度)於<nuxt-link
                to="/techs/age/Feudal_Age"
                >封建時代</nuxt-link
              >+10%，城堡時代+15%，帝王時代+20%(互不疊加)
            </li>
            <li>
              <strong>團隊加分:</strong
              ><nuxt-link to="/units/Knight">騎士</nuxt-link>系對於<nuxt-link
                to="/units/Archer"
                >弓箭手</nuxt-link
              >的傷害+2
            </li>
          </ul>
        </div>
        <h3>科技樹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em><nuxt-link to="/tree/pre">波斯科技樹</nuxt-link></em>
        </div>
        <br />
        <h3>戰術概論</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <strong>優勢</strong>
            <li>
              波斯的文明加成使他有強大的後期經濟體系，快速生產<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >可以在遊戲中可以取得巨大優勢。
            </li>
            <li>波斯的騎兵(包括戰象)是遊戲中最強大的。</li>
            <li>波斯可以在早期取得海軍優勢，且後期的海軍科技術也幾乎完整。</li>
            <li>
              <nuxt-link to="/units/Heavy_Cavalry_Archer"
                >重裝馬弓騎兵</nuxt-link
              >經常被玩家忽略，雖然缺乏<nuxt-link to="/techs/Bracer"
                >護腕</nuxt-link
              >科技，但是作為克制<nuxt-link to="/units/Monk">僧侶</nuxt-link
              >的部隊卻十分好用。
            </li>
          </ul>
          <ul>
            <strong>劣勢</strong>
            <li>強大但是單一的兵種容易被克制。</li>
            <li>
              波斯的步兵雖然有完整的<nuxt-link to="/building/Blacksmith"
                >兵工廠</nuxt-link
              >科技，但是只能升級至<nuxt-link to="/units/Long_Swordsman"
                >長劍兵</nuxt-link
              >(遊戲中唯一)。
            </li>
            <li>波斯的進攻非常猛烈，但是在防禦方面，卻缺少大量關鍵的科技。</li>
            <li>
              僧侶科技遠在平均水平之下，這使的大量的戰象被<nuxt-link
                to="/elements/Conversion"
                >招降</nuxt-link
              >後，波斯很難有還手的餘地。
            </li>
            <li>
              面對如<nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >垃圾兵的消耗，沒有劍兵勇士與護腕科技，顯然吃不消
            </li>
          </ul>
          <ul>
            <strong>主要策略</strong>
            <li>
              波斯的文明加成使TC(城鎮中心)爆戰術變得更加可以實現。(雖然這是少見的戰術)
            </li>
            <li>
              波斯的步兵雖然是最弱的，但這一特徵要到帝王時代才會顯現出來，在此之前波斯可以善用良好的經濟，產出足夠的步兵來打擊對手。唯一要注意的是，若希望將遊戲拖進帝王時代，則要斟酌是否要生產過量的步兵，由於不可升級成<nuxt-link
                to="/units/Two-Handed_Swordsman"
                >雙手劍兵</nuxt-link
              >，這些多餘的<nuxt-link to="/units/Infantry_Units"
                >步兵單位</nuxt-link
              >在帝王會顯得非常無力。
            </li>
            <li>
              波斯的戰象雖然強大，但是也容易被克制，所幸波斯擁有克制僧侶與<nuxt-link
                to="/units/Halberdier"
                >戟兵</nuxt-link
              >所需的兵種，<nuxt-link to="/units/Hand_Cannoneer"
                >火槍兵</nuxt-link
              >與<nuxt-link to="/units/Cavalry_Archer">馬弓騎兵</nuxt-link
              >對於戰象來說是很好的支援。
            </li>
            <li>
              在水上地圖，波斯是非常強大的，由於加速的生產與研發，波斯可以壓制大多數沒有<nuxt-link
                to="/units/Naval_Vessels"
                >船艦</nuxt-link
              >文明加成的種族，並且可以建構大批的<nuxt-link
                to="/units/Fishing_Ship"
                >漁船</nuxt-link
              >與商船來支援陸上戰鬥所需的經濟。
            </li>
            <li>
              波斯善於打擊弓手文明譬如<nuxt-link to="/civs/Mayans"
                >馬雅</nuxt-link
              >與<nuxt-link to="/civs/Britons">不列顛</nuxt-link
              >，但是對於僧侶強盛的文明則很乏力，比方<nuxt-link
                to="/civs/Aztecs"
                >阿茲特克</nuxt-link
              >、<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>與<nuxt-link
                to="/civs/Spanish"
                >西班牙</nuxt-link
              >。
            </li>
            <li>
              波斯的強大戰力建立在經濟強盛之下，<nuxt-link to="/resource/Gold"
                >黃金</nuxt-link
              >與食物對於波斯玩家來說至關重要，且沒有黃金的波斯幾乎沒有任何作用，所以黃金的收入就變得關鍵。
            </li>
          </ul>
          <ul>
            <strong>盟友選擇</strong>
            <li>
              波斯是<nuxt-link to="/civs/Huns">匈奴</nuxt-link>，<nuxt-link
                to="/civs/Franks"
                >法蘭克</nuxt-link
              >，與西班牙的寶貴盟友，因為波斯的團隊加分可以讓這些文明本來就已經強大的<nuxt-link
                to="/units/Paladin"
                >遊俠</nuxt-link
              >更加的強大。西班牙更能提供更多的貿易收入以支持波斯的軍隊。
            </li>
            <li>
              <nuxt-link to="/civs/Italians">義大利</nuxt-link
              >作為盟友可以讓波斯補足不足的步兵戰力，<nuxt-link
                to="/units/Condottiero"
                >傭兵</nuxt-link
              >可以作為劍兵勇士的替代品。且義大利強勢的<nuxt-link
                to="/units/Archer_Units"
                >弓兵系</nuxt-link
              >可以更好的保護戰象免於戟兵的摧殘。弓兵系有了戰象的保護也更能發揮威力。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >作為波斯的盟友，可令雙方獲得的收益是不可估計的，先是能夠讓戰象更能抵抗對方僧侶的招降，且條頓完善的步兵可以補足波斯的不足，而波斯的騎兵則能摧毀試圖<nuxt-link
                to="/units/Archer_Units"
                >遠程</nuxt-link
              >狙殺<nuxt-link to="/units/Teutonic_Knight">條頓武士</nuxt-link
              >的弓箭手。
            </li>
            <li>
              <nuxt-link to="/civs/Khmer">高棉</nuxt-link>擁有的<nuxt-link
                to="/units/Ballista_Elephant"
                >弩砲象</nuxt-link
              >與戰象幾乎是完美的配合，大量的弩砲象與戰象是後期所有玩家的惡夢。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link>的<nuxt-link
                to="/units/Gunpowder_Unit"
                >火藥單位</nuxt-link
              >與戰象也能彼此掩護，<nuxt-link to="/units/Janissary"
                >土耳其火槍兵</nuxt-link
              >跟戰象可以壓制幾乎所有組合。
            </li>
            <li>
              波斯的盟友大部分看上的是戰象的高近戰能力，所以任何能有效克制戟兵與僧侶的文明都能與波斯很好的配合。
            </li>
          </ul>
          <ul>
            <strong>對抗要點</strong>
            <li>波斯是個騎兵文明，善用你的長槍兵。</li>
            <li>
              早期的波斯比起後期的波斯來說更脆弱，不要讓他們有機會建立騎兵團。
            </li>
            <li>對付戰象與遊俠，僧侶是個好選擇。</li>
            <li>
              波斯沒有劍兵勇士與護腕科技，面對大量的垃圾兵會顯得非常吃虧。
            </li>
            <li>
              波斯擅長進攻，在你抵擋波斯進攻的同時，派出騎兵騷擾他的基地。
            </li>
            <li>
              由於波斯有<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
              >，用<nuxt-link to="/building/Stone_Wall">石牆</nuxt-link
              >與<nuxt-link to="/units/Mangonel">投石車</nuxt-link
              >來防守並沒有甚麼意義，不如產出大量的戟兵與<nuxt-link
                to="/units/Light_Cavalry"
                >輕騎兵</nuxt-link
              >來反制會更有效果。
            </li>
            <li>
              悄悄蒐集波斯的戰象，因為波斯的步兵很虛弱，大多數波斯玩家根本不怎麼建造<nuxt-link
                to="/building/Barracks"
                >軍營</nuxt-link
              >，所以用偷過來的戰象大軍突襲會讓對手根本無法反映。
            </li>
          </ul>
        </div>
        <h3>出場戰役</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <table class="table-bordered" width="100%">
            <tr class="tta">
              <td><nuxt-link to="/batt">戰役</nuxt-link>名稱</td>
              <td>可否使用</td>
              <td>稱號與顏色</td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Saladina">沙拉丁</nuxt-link>5-<nuxt-link
                  to="/batt/Jihad"
                  >聖戰</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                底比利亞斯(敵對)
                <div class="p1" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                沙拉丁6-<nuxt-link to="/batt/The_Lion_and_the_Demon"
                  >獅子與惡魔</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                波斯的警戒部隊(友軍)
                <div class="p6" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Genghis_Khana">成吉思汗</nuxt-link
                >4-<nuxt-link to="/batt/The_Horde_Rides_West"
                  >遊牧民族的西遷</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                瓜利密(友軍變成敵對)
                <div class="p4" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Barbarossa">巴巴羅薩</nuxt-link
                >6-<nuxt-link to="/batt/The_Emperor_Sleeping"
                  >沉睡的皇帝</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                大馬士革(敵對)
                <div class="p4" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Attila_the_Huna">阿提拉</nuxt-link
                >1-<nuxt-link to="/batt/Scourge_of_God">上帝之鞭</nuxt-link>
              </td>
              <td class="tta2">
                <span
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                <nuxt-link to="/civs/Persians">波斯人</nuxt-link>(敵對)
                <div class="p2" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/El_Cida">熙德</nuxt-link>5-<nuxt-link
                  to="/batt/King_of_Valencia"
                  >瓦倫西亞之主</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                達尼亞(友軍)
                <div class="p3" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Battles_of_the_Forgotten"
                  >失落的帝國戰役</nuxt-link
                >-<nuxt-link to="/batt/Honfoglalas_895"
                  >征服家園（895）</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                卡扎爾人(友軍)
                <div class="p8" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                失落的帝國戰役-<nuxt-link to="/batt/Bukhara_557"
                  >布哈拉（557）</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  class="glyphicon glyphicon-ok okc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                波斯人(友軍)
                <div class="p8" style="height: 23px"></div>
              </td>
            </tr>
          </table>

          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                真正的波斯帝國早在西元前滅亡，遊戲中的波斯是概括了當時大部分的中亞民族。
              </li>
              <li>和高棉的弩砲象一樣，戰象似乎不需要人類的駕馭。</li>
              <li>作為祆教的起源地，擁有如此不完全的僧侶科技是很奇怪的。</li>
              <li>
                如果進入遊戲後期，波斯碰到拜占庭似乎束手無策，這或許反映了真實的歷史。
              </li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            波斯是伊朗在歐洲的古希臘語和拉丁語的舊稱譯音，是伊朗歷史的一部分。歷史上在這一西南亞地區曾建立過多個的帝國。全盛時期領土東至<nuxt-link
              to="/civs/Indians"
              >印度</nuxt-link
            >河平原，西北至小亞細亞、歐洲的馬其頓、希臘半島、色雷斯，西南至埃及或葉門。波斯興起於伊朗<nuxt-link
              to="/maps/Highland"
              >高原</nuxt-link
            >的西南部。
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Wonderpersians.jpg" alt=""
                /></gallery>
                <p>
                  <em
                    >波斯的<nuxt-link to="/building/Wonder"
                      >世界奇觀</nuxt-link
                    ></em
                  >
                </p>
              </div>
            </div>
          </div>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3>
              <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
            </h3>
            <ul>
              <li>
                只有精銳戰象可以有<nuxt-link to="/elements/Area_of_Effect"
                  >踐踏傷害</nuxt-link
                >。
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aor">王者崛起</nuxt-link></em>
            </h3>
            <ul>
              <li>戰象和精銳戰象都可以有踐踏傷害。</li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
            </h3>
            <ul>
              <li>
                <nuxt-link to="/building/Dock">碼頭</nuxt-link>與<nuxt-link
                  to="/building/Town_Center"
                  >城鎮中心</nuxt-link
                >的工作速度(生產速度與研發速度)於<nuxt-link
                  to="/techs/age/Dark_Age"
                  >黑暗時代</nuxt-link
                >+5%
              </li>
              <li>
                <nuxt-link to="/techs/Boiling_Oil">沸油</nuxt-link>被<nuxt-link
                  to="/techs/Kamandaran"
                  >波斯弓兵</nuxt-link
                >取代。波斯弓兵(200F, 200G)訓練徒步<nuxt-link
                  to="/units/Archer_Units"
                  >弓兵系</nuxt-link
                >消耗額外木材，而不消耗黃金。
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#e6992c;">
              <div class="unititle2">波斯</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Taq-i-kisra.jpg" width="300" alt="" />
                <p><em>古波斯帝國廢墟</em></p>
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
            <td class="unit4">中東</td>
          </tr>
          <tr>
            <td class="unit3">分類文明</td>
            <td class="unit4">
              <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">特殊單位</td>
            <td class="unit4">
              <img class="gg" src="~assets/WarElephantIcon.png" /><nuxt-link
                to="/units/War_Elephant"
                >戰象</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">首選戰略</td>
            <td class="unit4">
              TC爆，城快<nuxt-link to="/units/Knight">騎士</nuxt-link
              >，<nuxt-link to="/units/Naval_Vessels">戰船</nuxt-link
              >快攻，城快插堡，大後期戰爭
            </td>
          </tr>
          <tr>
            <td class="unit3">特殊技術</td>
            <td class="unit4">
              <img class="gg" src="~assets/unique_tech.png" /><nuxt-link
                to="/techs/"
                >波斯弓兵</nuxt-link
              ><br />
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
              /><nuxt-link to="/techs/Mahouts">象伕</nuxt-link>
            </td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由Dennis協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allciv',
  components: {}
}
</script>
<style></style>
