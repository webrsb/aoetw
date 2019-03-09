<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>洗劫羅馬</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>洗劫羅馬</b>隨時殺到為<nuxt-link to="/batt/Alarica"
              >阿拉里克戰役</nuxt-link
            >的第四關劇情關卡，<nuxt-link to="/batt/Alarica">阿拉里克</nuxt-link
            >大軍已經來到羅馬城下並由東面發動攻勢，西邊則由阿陶爾夫負責，玩家將從阿拉里克身旁開始圍攻，同時得應付羅馬帝國軍團的增援，一路的殺進羅馬城。
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
                <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
              </td>
              <td class="tc1" width="15%">起始資源：</td>
              <td class="tc2">無</td>
              <td class="tc1" width="15%">人口上限：</td>
              <td class="tc2" width="5%">200</td>
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
              <td class="tc6"><div class="p1">玩家1</div></td>
              <td class="tc6" colspan="3">
                <nuxt-link to="/civs/Goths">哥德人</nuxt-link>（藍色）
              </td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background: #27ae60;">同盟</td>
            </tr>
            <tr>
              <td class="tc6" width="15%"><div class="p2">玩家2</div></td>
              <td class="tc6" width="35%">
                羅馬（紅色）<nuxt-link to="/civs/Italians">義大利</nuxt-link>
              </td>
              <td class="tc6" width="15%"><div class="p3">玩家3</div></td>
              <td class="tc6" width="35%">
                哥德人（綠色）<nuxt-link to="/civs/Goths">哥德</nuxt-link>
              </td>
            </tr>
            <tr>
              <td class="tc6" width="15%"><div class="p5">玩家5</div></td>
              <td class="tc6" width="35%">阿陶爾夫（水藍色）哥德</td>
            </tr>
            <tr>
              <td class="tc4" colspan="4" style="background:#ea6153;">敵對</td>
            </tr>
            <tr></tr>
            <tr>
              <td class="tc6" width="15%"><div class="p4">玩家4</div></td>
              <td class="tc6" width="35%">守城將士（黃色）義大利</td>
              <td class="tc6" width="15%"><div class="p6">玩家6</div></td>
              <td class="tc6" width="35%">帝國軍團（紫色）義大利</td>
            </tr>
          </table>

          <br />
          <dl class="dl-horizontal">
            <dt>開場單位：</dt>
            <dd>
              8位<nuxt-link to="/units/Knight">騎士</nuxt-link>、8位<nuxt-link
                to="/units/Huskarl"
                >哥德衛隊</nuxt-link
              >、1台<nuxt-link to="/units/Battering_Ram">輕型衝撞車</nuxt-link
              >。
            </dd>
            <dt>大地之母單位:</dt>
            <dd>無</dd>
          </dl>
          <h2>主要任務</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ol>
              <li>阿拉里克必須存活。</li>
              <li>去東邊和阿陶爾夫的手下會面</li>
              <li>阿拉里克要安全的到達北邊的村莊</li>
              <li>
                帶阿拉里克到拉文納的<nuxt-link to="/building/Harbor"
                  >海港</nuxt-link
                >
              </li>
              <li>帶阿拉里克到拉文納的皇宮</li>
              <li>帶阿拉里克的南部的義大利小鎮</li>
              <li>摧毀薩魯斯的防禦工事</li>
            </ol>
          </div>
        </div>
        <h2>任務提示</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>制定戰術，小心行事，多聽你手下的意見，最好走大道。</li>
            <li>
              阿拉里克的上尉阿陶爾夫已經派了一些部隊和<nuxt-link
                to="/units/Scout_Cavalry"
                >斥候</nuxt-link
              >走在阿拉里克前面了，這些部隊有的在附近靜候命令，有的在港口備船等候。
            </li>
            <li>
              據說薩魯斯的手下駐紮在拉文納外面，選擇一條安全通往港口的航線可以讓你避開惡戰。
            </li>
            <li>
              薩魯斯在拉文納的海域有很多的<nuxt-link to="/units/Naval_Vessels"
                >戰船</nuxt-link
              >，所以你最好遠離拉文納，免遭襲擊。
            </li>
            <li>
              哥德人只能升級至<nuxt-link to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              >。
            </li>
          </ul>
        </div>
        <h2>斥候</h2>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              阿拉里克(水藍色)帶領一小部隊出現在西邊，準備在拉文納和皇帝相遇。
            </li>
            <li>
              阿拉里克(藍綠色)帶領一小部隊出現在西邊，準備在拉文納和皇帝相遇。
            </li>
            <li>市郊有幾個小村莊，有的願意協助你完成任務。</li>
            <li>
              薩魯斯的部隊(綠色)是你的主要敵人，他們有許多<nuxt-link
                to="/units/Infantry_Units"
                >步兵</nuxt-link
              >，<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >和<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
              >在郊外巡邏，一旦發現你就會衝過來交戰，薩魯斯自己則控制著拉文納城西南的一座要塞。
            </li>
          </ul>
          <h2>戰術</h2>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                玩家首先會看到阿拉里克指揮他的軍隊攻擊羅馬西邊的三座<nuxt-link
                  to="/building/Watch_Tower"
                  >箭塔</nuxt-link
                >， 然後玩家會得到一個<nuxt-link to="/units/Capped_Ram"
                  >裝甲衝撞車</nuxt-link
                >、8個哥德衛隊以及8位騎士，以摧毀羅馬的東門。
                這個時候會有軍團的增援從東方來攻擊，並在哥德軍的攔阻之下嘗試摧毀玩家的<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城武器</nuxt-link
                >。
              </li>
              <li>
                一旦東<nuxt-link to="/building/Gate">城門</nuxt-link
                >陷落(在官方HD<nuxt-link to="/games/aof">失落帝國</nuxt-link
                >版本裡，<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
                >會自動被摧毀)，另外一批軍團的增援會從地圖東方角落殺到，玩家會取得一小部分的哥德士兵來擊退他們。
              </li>
              <li>
                阿拉里克將命令信使(<nuxt-link to="/elements/Hit_points"
                  >生命值</nuxt-link
                >提高的<nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link
                >)將攻擊命令發送給位於羅馬西部的阿陶爾夫。信使必須存活直到他遇到阿陶爾夫(在原來的非官方失落帝國MOD中，在信使的起點附近有三個不法之徒(名稱為“OUTLW”)，但他們會輕易地被一刀殺死)。通往羅馬南門的道路上有城市守衛在巡邏，信使必須避開他們。信使可以選擇兩種路徑：穿<nuxt-link
                  to="/civs/Vietnamese"
                  >越南</nuxt-link
                >部森林的道路很長，但是很安全，只要對付四個軍團的弓兵，還有兩座城市守衛的箭塔；短的路線很危險，必須經過軍團駐地，穿過部隊。
              </li>
              <li>
                由於阿陶爾夫接到阿拉里克的命令，他會命令準備好<nuxt-link
                  to="/units/Trebuchet"
                  >投石機</nuxt-link
                >，但會突然被軍團襲擊。
                經過一場血腥的戰鬥，阿陶爾夫將前往基地，命令<nuxt-link
                  to="/units/Villager"
                  >村民</nuxt-link
                >為部隊收集<nuxt-link to="/resource/Food">食物</nuxt-link
                >。玩家將獲得一些村民和<nuxt-link to="/building/Mill"
                  >磨坊</nuxt-link
                >，好收集250食物。
                玩家可以狩獵、從灌木叢收集、或把阿陶爾夫的<nuxt-link
                  to="/building/Farm"
                  >農田</nuxt-link
                >占用。
              </li>
              <li>
                當目標實現後，玩家將接管阿陶爾夫和整個基地，但不包括他的軍隊。只要玩家準備好攻擊羅馬，就點擊阿陶爾夫。點擊阿陶爾夫會觸發羅馬平民打開位於阿陶爾夫部隊面對的城門的劇情，並將城門讓給玩家。君士坦丁凱旋門的羅馬衛兵將開始捍衛凱旋門(他們的所有權從“羅馬城”轉移到“城市守衛”，除了一個將蓋拉普拉西迪婭護送到哈德良陵墓旁的<nuxt-link
                  to="/units/Spearman"
                  >長槍兵</nuxt-link
                >外)。 阿陶爾夫必須去到君士坦丁凱旋門旁。
              </li>
              <li>
                在那之後，阿陶爾夫將前往哈德良陵墓與蓋拉普拉西迪婭會面，而阿拉里克將派出另一支部隊從東部瓦解羅馬，<nuxt-link
                  to="/batt"
                  >戰役</nuxt-link
                >勝利。
              </li>
              <li>
                當玩家正在阿陶爾夫那裏準備部隊時，軍團會繼續在基地西邊的道路上派出增援部隊，以攻擊玩家的基地。玩家可以簡單地建造<nuxt-link
                  to="/building/Palisade_Wall"
                  >木牆</nuxt-link
                >，木城門和箭塔來抵禦它們，如果箭塔被弓兵或<nuxt-link
                  to="/units/Crossbowman"
                  >弩兵</nuxt-link
                >駐守，會非常有幫助。如果玩家選擇阿陶爾夫，開始攻擊羅馬，軍團將開始在他們的兩個陣地生產部隊，因此建議玩家摧毀兩個陣地。
              </li>
              <li>
                在基地只有少量<nuxt-link to="/resource/Stone">石頭</nuxt-link
                >，玩家可以在河的西邊找到一些，有些在羅馬東南部，就是信使開始尋找阿陶爾夫的地方，還有幾個在阿拉里克所在的羅馬東部。為了在河的西邊開採，四名軍團弓兵必須被殺死，並且兩座城市守衛的箭塔必須被摧毀。
              </li>
            </ul>
            <h2>趣事</h2>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  這是阿拉里克系列中唯一一場玩家能夠晉級到帝王時代的戰役，
                  也是唯一一場沒有控制阿拉里克本人的戰役。
                </li>
                <li>
                  這場戰役有個彩蛋：羅馬城的東邊，有個<nuxt-link
                    to="/units/Throwing_Axeman"
                    >精銳擲斧兵</nuxt-link
                  >名叫考利，就在被清空的樹林中央。如果他被選取，他會大叫要移除所有樹木。這片被砍伐的樹林，玩家可以透過研發<nuxt-link
                    to="/techs/Spies"
                    >間諜</nuxt-link
                  >或是打入密技來發現。
                </li>
                <li>
                  原版失落帝國MOD中，在阿拉里克派出信使的部分裡，有三個"不法之徒"(名稱就叫OUTLW的弓兵)會在玩家接受信使時，直接在旁邊生成，然後攻擊信使。但是他們很弱，可以一刀就殺死。而這些不法之徒原本是被設計成會隨機生成在貿易路線旁，用來攻擊村民跟<nuxt-link
                    to="/units/Trade_Cart"
                    >貿易車隊</nuxt-link
                  >的，但後來設計失敗了。
                </li>
                <li>
                  阿陶爾夫在414年跟加拉·普拉西提阿結婚，在阿拉里克死後繼承了西哥德王位。
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                洗劫羅馬
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Alaric_4.jpg" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#375d96;">
              <div class="unititle2">
                情景信息
              </div>
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
              <nuxt-link to="/batt/Alarica">阿拉里克</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/civs/Goths">哥德人</nuxt-link>
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
              <nuxt-link to="/games/aof">失落帝國</nuxt-link>第一章之四
            </td>
          </tr>
          <tr>
            <td class="unit3">上一關</td>
            <td class="unit4">
              <nuxt-link to="/batt/Emperor_of_the_West">西域之君</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一關</td>
            <td class="unit4">N/A</td>
          </tr>
        </table>

        <div class="thanks">感謝！此頁面由裕暉、Dennis協助編輯</div>
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
