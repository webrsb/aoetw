<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1><img src="~assets/chinese.png" />中國</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>中國</b
            >是非常古老的民族，甚至可以說是世紀帝國II裡面最具有歷史性的<nuxt-link
              to="/civs"
              >文明</nuxt-link
            >之一(同樣古老的有<nuxt-link to="/civs/Persians">波斯</nuxt-link
            >)。中國人由於戰術與文化，善於使用弓箭、弩、火器等遠程攻擊武器，而遊戲中，中國的多樣性得到了展現。中國是古老的國家，許多技術由中國傳出，然而遊戲為了平衡，拿掉了許多中國"該有"的技術。人口第一一直是中國的標誌，而至今他們仍舊保留這個頭銜。
          </p>
        </div>
        <h3>文明概要</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              中國是東亞的<nuxt-link to="/units/Archer_Units"
                >弓兵文明</nuxt-link
              >，為世紀帝國II最初種族之一。
            </li>
            <li>研發許多技術，在遊戲中卻沒有幾個自家發明的技術。</li>
            <li>中國是個難以捉摸的文明，許多戰術對中國來說都是可行的。</li>
            <li>
              特殊的開局讓他很難被完整的發揮，但是一旦完整發揮，他將是恐怖又不可阻擋的。
            </li>
            <li>
              中國的特點就是技術的進步，而遊戲中則讓中國研發技術非常便宜。
            </li>
            <li>
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
              ><nuxt-link to="/techs/untech">特殊科技</nuxt-link
              ><nuxt-link to="/techs/Great_Wall">長城</nuxt-link
              >，讓喜歡打大後期的玩家有好的防禦力。<nuxt-link
                to="/techs/age/Imperial_Age"
                >帝王時代</nuxt-link
              >的特殊科技為<nuxt-link to="/techs/Rocketry">火箭技術</nuxt-link
              >，這個<nuxt-link to="/techs">科技</nuxt-link
              >則讓本來就已經很強大的中國<nuxt-link to="/units/Archer_Units"
                >遠程</nuxt-link
              >火力變得更加威猛。
            </li>
          </ul>
          <h3>特殊單位</h3>
          <ul>
            <li>
              <img class="gg" src="~assets/ChuKoNuIcon.png" alt="" /><nuxt-link
                to="/units/Chu_Ko_Nu"
                >連弩兵</nuxt-link
              >:可以一次射出許多箭矢的<nuxt-link to="/units/Archer_Units"
                >弓兵</nuxt-link
              >，對於長<nuxt-link to="/armor/Armor_Class_Spearman"
                >槍兵類</nuxt-link
              >的傷害+2
            </li>
          </ul>
          <h3>特殊科技</h3>
          <ul>
            <li>
              <img class="gg" src="~assets/unique_tech.png" alt="" /><nuxt-link
                to="/techs/Great_Wall"
                >長城</nuxt-link
              >：塔與<nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
              >+30%<nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </li>
            <li>
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                alt=""
              /><nuxt-link to="/techs/Rocketry">火箭技術</nuxt-link
              >：連弩兵攻擊+2，弩砲攻擊+4
            </li>
          </ul>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              遊戲開始時有六個<nuxt-link to="/units/Villager">村民</nuxt-link
              >，但是少了200<nuxt-link to="/resource/Food">食物</nuxt-link
              >跟50<nuxt-link to="/resource/Wood">木材</nuxt-link>
            </li>
            <li>
              <nuxt-link to="/building/Town_Center">城鎮中心</nuxt-link
              >可以支持10人口，且<nuxt-link to="/elements/Line_of_Sight"
                >視野</nuxt-link
              >+5
            </li>
            <li>
              技術在<nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
              >便宜10%，城堡時代便宜15%，帝王時代便宜20%
            </li>
            <li>
              <nuxt-link to="/units/Demolition_Ship">爆破船</nuxt-link
              >多了50%生命值
            </li>
            <p>
              <strong
                ><nuxt-link to="/elements/Team_Bonus">團隊加分</nuxt-link
                >:</strong
              ><nuxt-link to="/building/Farm">農田</nuxt-link>可生產食物+45
            </p>
          </ul>
        </div>
        <h3>科技樹</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <em><nuxt-link to="/tree/chi">中國科技樹</nuxt-link></em>
        </div>
        <h3>戰術概論</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <strong>優勢</strong>
            <li>
              中國的城鎮中心有額外的空間，且開局就有六個村民，讓中國的工作效率有了保障。
            </li>
            <li>
              城鎮中心的高視野，讓中國很容易開局就看到羊，而且可以更好的保護村民(可以提早警戒並敲鐘)。
            </li>
            <li>
              封建時代開始技術研發減免，代表中國從封建開始就能夠投入更多資源生產部隊。
            </li>
            <li>
              中國的農田可以生產更多食物，這代表你能投入更多木材來生產弓兵。
            </li>
            <li>
              <nuxt-link to="/units/Infantry_Units">步兵</nuxt-link
              >與弓兵的<nuxt-link to="/tree/vie">科技樹</nuxt-link>完整。
            </li>
            <li>強力的弓兵和科技的減免讓中國的弓兵稱得上是頂尖。</li>
            <li>
              作為少數有<nuxt-link to="/units/Camel_Rider">駱駝</nuxt-link
              >的文明，反制<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
              >打帶跑的手段更加多元。
            </li>
            <li>長城可以在城堡時代為玩家爭取反攻的時機。</li>
            <li>
              科技樹完整讓中國擁有很不錯的防禦，若算上長城則幾乎可媲美<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >。
            </li>
            <li>
              爆破船是有其價值的，若沒有<nuxt-link to="/units/Naval_Vessels"
                >海軍</nuxt-link
              >加成的文明，碰到中國的爆破船很可能損失整個艦隊。
            </li>
            <li>中國騎兵在城堡時代是可靠的。</li>
            <li>
              中國的優勢在於後期的強大，完整的弓兵與步兵可以克制<nuxt-link
                to="/units/Siege_Weapons"
                >攻城武器</nuxt-link
              >以外的大多數單位。
            </li>
          </ul>
          <ul>
            <strong>劣勢</strong>
            <li>
              中國由於特殊的開局模式，讓他很難使用任何<nuxt-link
                to="/techs/age/Dark_Age"
                >黑暗時代</nuxt-link
              >或是封建時代的快攻，且因為食物短缺，前期尤其害怕快攻(無法產生足夠的軍事單位來保護村民)。
            </li>
            <li>
              縱然中國有許多經濟優勢，但是仍然容易吃虧，因為操作不當反而更容易落後。
            </li>
            <li>
              沒有<nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >，但是卻有火箭技術，這讓中國的弩砲處在一個尷尬的位置。
            </li>
            <li>
              缺少幾個必要的科技，讓中國的<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >也處在尷尬的位置。
            </li>
            <li>
              中國沒有<nuxt-link to="/units/Hand_Cannoneer">火槍兵</nuxt-link
              >，也沒有<nuxt-link to="/units/Paladin">遊俠</nuxt-link
              >，對付大量的步兵略顯吃力。
            </li>
            <li>
              沒有<nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link
              >，且沒有<nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link
              >，讓中國以弓兵與步兵為主的部隊更加害怕<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >。
            </li>
            <li>
              沒有<nuxt-link to="/units/Hussar">匈牙利輕騎兵</nuxt-link
              >，連弩兵射程短，這注定了中國對上僧侶會有吃虧。
            </li>
          </ul>
          <ul>
            <strong>主要策略</strong>
            <li>
              中國開局必須研究織布，因為沒有食物可以生產村民，這代表拉豬會更輕鬆。
            </li>
            <li>
              由於開局沒有食物，所以必須隨時確認城鎮中心在工作，而且要提早讓村民放資源，否則容易斷村。
            </li>
            <li>六個村民，所以中國在遊牧這個地圖特別的強大。</li>
            <li>中國特別害怕快攻，所以及早把市鎮圍好，對於發展更有利。</li>
            <li>
              城堡時代的中國可以出<nuxt-link to="/units/Knight">騎士</nuxt-link
              >，因為到帝王時代科技才開始不完整，但要小心投資，以免因無法升級而浪費。
            </li>
            <li>城快馬弓對食物依賴較小，是很適合中國的策略。</li>
            <li>城堡時代的中國就是標準的"甚麼都可以做，但甚麼都不專精"。</li>
            <li>
              帝王時代的中國是很強勢的，農田有食物加成，科技便宜，防禦完好。
            </li>
            <li>
              善用連弩兵，他們能對高遠程防禦的單位造成比正常弓兵更大的傷害，通常來說會讓連弩兵聚集起來，因為聚集起來的連弩兵甚至可以秒殺<nuxt-link
                to="/units/Battering_Ram"
                >衝撞車</nuxt-link
              >。
            </li>
            <li>
              算上特殊科技，連弩兵可以說是非常強大的單位，但是他們的短射程注定了他們只能是防禦性的單位。
            </li>
            <li>
              總的來說，中國可以很好的壓制大部分的後期文明，包括波斯或甚至<nuxt-link
                to="/civs/Goths"
                >哥德</nuxt-link
              >；但是對於前期強勢或是有良好騎兵的文明會很吃虧，比如<nuxt-link
                to="/civs/Mongols"
                >蒙古</nuxt-link
              >或<nuxt-link to="/civs/Huns">匈人</nuxt-link>。
            </li>
          </ul>
          <ul>
            <strong>盟友選擇</strong>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >跟中國是很好的朋友，因為這樣條頓的農田可以有超高的資源交換率，而條頓的團隊加分則讓中國的騎士快攻更有效果。
            </li>
            <li>
              <nuxt-link to="/civs/Saracens">薩拉森</nuxt-link
              >是個比較奇怪的盟友，他的團隊加分讓連弩兵對於<nuxt-link
                to="/building"
                >建築物</nuxt-link
              >來說更加強悍，而經過實測，25個連弩兵加上薩拉森盟友可以比一個<nuxt-link
                to="/units/Trebuchet"
                >投石機</nuxt-link
              >更快拆除<nuxt-link to="/building">建築</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link
              >是中國最好的盟友之一，因為馬利的前期相對來說較好，馬利的騎兵很好的補足了中國騎兵的需要，而且最重要的是，馬利讓大學的研發速度更快，這讓中國升上城堡時代可以非常快速的取得<nuxt-link
                to="/techs/Ballistics"
                >彈道學</nuxt-link
              >，讓中國的弓兵更強，最後，馬利的農田有減免，搭配中國的農田加成可以讓馬利更順利的生產大量的騎兵。
            </li>
            <li>
              <nuxt-link to="/civs/Turks">土耳其</nuxt-link
              >是中國一個比較特殊的隊友，他們的團隊加分可以說相性很差，但是科技樹的互補讓他們可以很好的補足對方的不足(跟你不存在的理想老婆一樣)。
            </li>
            <li>
              東南亞文明自古以來跟中國往來，而遊戲中他們也是很好的盟友，因為他們有<nuxt-link
                to="/units/Battle_Elephant"
                >矛象伕</nuxt-link
              >，可以做為後期缺乏遊俠的中國的補償，而他們都有可以跟中國配合的地方：<nuxt-link
                to="/civs/Khmer"
                >高棉</nuxt-link
              >讓中國弩砲更強，且有快速的矛象伕；<nuxt-link to="/civs/Malay"
                >馬來</nuxt-link
              >讓中國可以及時生產爆破船來對抗來襲的海軍，且農田加成讓馬來的免<nuxt-link
                to="/resource/Gold"
                >黃金</nuxt-link
              ><nuxt-link to="/units/Two-Handed_Swordsman">雙手劍兵</nuxt-link
              >更便宜了(省下農田的木材)。
            </li>
            <li>
              中國的隊友最好能夠有強力的騎兵，或是能夠在前期保護中國，而最要緊的是必須有火砲或是火槍等等單位。
            </li>
          </ul>
          <strong>對抗要點</strong>
          <ul>
            <li>中國的前期很弱，盡早打擊他們。</li>
            <li>
              弓兵文明通常害怕高<nuxt-link to="/armor">遠程護甲</nuxt-link
              >單位，但是擁有連弩兵的中國不一樣，而用投石車能很好的打擊中國。
            </li>
            <li>善用他們沒有火砲與火槍兵這一點。</li>
            <li>
              用爆破船來對付中國爆破船會更有效，因為它們的高生命值在爆破船面前其實造成影響不大。
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
                <nuxt-link to="/batt/Into_China">成吉思汗</nuxt-link
                >3-<nuxt-link to="/batt/Into_China">入主中原</nuxt-link>
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                突厥(敵對)
                <div class="p2" style="height: 23px"></div>
                <br />西夏(敵對)
                <div class="p3" style="height: 23px"></div>
                <br />金(敵對)
                <div class="p4" style="height: 23px"></div>
                <br />宋(敵對)
                <div class="p5" style="height: 23px"></div>
                <br />工程師(敵對)
                <div class="p1" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Noryang_Point_1598"
                  >露梁海戰(1598) </nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                明朝軍隊(友軍)
                <div class="p8" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Langshan_Jiang_919"
                  >狼山江（919）</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: green;"
                  class="glyphicon glyphicon-ok okc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                玩家
                <div class="p1" style="height: 23px"></div>
                <br />彭彥章(敵對)
                <div class="p8" style="height: 23px"></div>
                <br />河盜(敵對)
                <div class="p3" style="height: 23px"></div>
                <br />寺廟聖地(友軍)
                <div class="p4" style="height: 23px"></div>
                <br />佃農(友軍)
                <div class="p5" style="height: 23px"></div>
                <br />吳國陸軍(敵對)
                <div class="p6" style="height: 23px"></div>
                <br />吳越人(友軍)
                <div class="p7" style="height: 23px"></div>
                <br />吳國水軍(敵對)
                <div class="p2" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Bayinnaunga">莽應龍</nuxt-link>1-<nuxt-link
                  to="/batt/The_Burmese_Tigers"
                  >餓虎撲食</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                撣族人(敵對)
                <div class="p4" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                莽應龍2-<nuxt-link to="/batt/The_Mandalay_Cobra"
                  >猛蛇出洞</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                撣族人(敵對)
                <div class="p4" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                <nuxt-link to="/batt/Le_Loi">黎利</nuxt-link>1-<nuxt-link
                  to="/batt/The_Dai_Viet_Uprising"
                  >大越義軍</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                明朝軍隊(敵對)
                <div class="p1" style="height: 23px"></div>
                <br />明朝軍隊(敵對)
                <div class="p1" style="height: 23px"></div>
                <br />明朝巡邏隊(敵對)
                <div class="p5" style="height: 23px"></div>
                <br />宋(敵對)
                <div class="p5" style="height: 23px"></div>
                <br />工程師(敵對)
                <div class="p1" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                黎利2-<nuxt-link to="/batt/The_Mountain_Siege"
                  >至靈山魂</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                明朝軍隊(敵對)
                <div class="p1" style="height: 23px"></div>
                <br />明朝軍隊(敵對)
                <div class="p5" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                黎利3-<nuxt-link to="/batt/The_Battle_at_Hanoi"
                  >圍困昇龍</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                明軍(敵對)
                <div class="p1" style="height: 23px"></div>
                <br />棄明投越部隊(敵對)
                <div class="p8" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                黎利4-<nuxt-link to="/batt/Reaching_South">揮師南下</nuxt-link>
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                琴彭軍(敵對)
                <div class="p1" style="height: 23px"></div>
                <br />明朝水師(敵對)
                <div class="p6" style="height: 23px"></div>
                <br />明朝軍隊(敵對)
                <div class="p3" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                黎利5-<nuxt-link to="/batt/A_Three_Pronged_Attack"
                  >兵分三路</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                柳升將軍(敵對)
                <div class="p1" style="height: 23px"></div>
                <br /><nuxt-link to="/units/hero/Wang_Tong">王通</nuxt-link
                >將軍(敵對)
                <div class="p6" style="height: 23px"></div>
              </td>
            </tr>
            <tr>
              <td class="tta1">
                黎利6-<nuxt-link to="/batt/The_Final_Fortress"
                  >決戰東都</nuxt-link
                >
              </td>
              <td class="tta2">
                <span
                  style="color: #d9534f;"
                  class="glyphicon glyphicon-remove noc"
                  aria-hidden="true"
                ></span>
              </td>
              <td class="tta3">
                明朝軍隊(敵對)
                <div class="p1" style="height: 23px"></div>
                <br />明朝先鋒軍(敵對)
                <div class="p5" style="height: 23px"></div>
              </td>
            </tr>
          </table>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              只有四個文明從世紀帝國一延續到現在：中國、朝鮮、<nuxt-link
                to="/civs/Japanese"
                >日本</nuxt-link
              >、波斯。
            </li>
            <li>
              中國是唯一在四個世紀帝國系列都有出現的文明(世紀帝國123與神話世紀)。
            </li>
            <li>中國的奇觀是天壇。</li>
            <li>中國沒有獨立的戰役系列，而狼山江之戰其實對中國影響不大。</li>
            <li>
              中國研發雕版印刷技術，或稱為活字版印刷，卻沒有<nuxt-link
                to="/techs/Block_Printing"
                >印刷技術</nuxt-link
              >，直到決定版更新檔34699才獲得。
            </li>
            <li>中國研發火砲，卻沒有火砲。</li>
            <li>
              值得一提的是，明朝的火器使用率為當時世界第一，諷刺的是中國沒有火槍兵。
            </li>
            <li>
              <nuxt-link to="/techs/Crop_Rotation">輪耕制度</nuxt-link
              >技術是由中國首先發明，而中國卻沒有輪耕制度可以研發。
            </li>
            <li>
              中國的爆破船有加成，我們可以從黃蓋用小船火燒連環船這個故事看到蛛絲馬跡
            </li>
            <li>所謂連弩其實有兩種，一種是聯發型，一種是散彈型。</li>
          </ul>
        </div>

        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
          </h3>
          <ul>
            <li>
              (36399更新) 新增印刷技術。
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#e6992c;">
              <div class="unititle2">中國</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/1280px-20090529_Great_Wall_8185.jpg"
                  width="300"
                  alt=""
                />
                <p><em>中國萬里長城</em></p>
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
            <td class="unit4">東亞</td>
          </tr>
          <tr>
            <td class="unit3">分類文明</td>
            <td class="unit4">
              <nuxt-link to="/units/Archer_Units">弓兵</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/units/Unique_Unit">特殊單位</nuxt-link>
            </td>
            <td class="unit4">
              <img class="gg" src="~assets/ChuKoNuIcon.png" /><nuxt-link
                to="/units/Chu_Ko_Nu"
                >連弩兵</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">首選戰略</td>
            <td class="unit4">
              城快<nuxt-link to="/units/Cavalry_Archer">馬弓</nuxt-link
              >，城快<nuxt-link to="/units/Knight">騎士</nuxt-link>，大後期戰爭
            </td>
          </tr>
          <tr>
            <td class="unit3">特殊技術</td>
            <td class="unit4">
              <img class="gg" src="~assets/unique_tech.png" /><nuxt-link
                to="/techs/Great_Wall"
                >長城</nuxt-link
              ><br /><img
                class="gg"
                src="~assets/unique_tech_imperial.png"
              /><nuxt-link to="/techs/Rocketry">火箭技術</nuxt-link>
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
