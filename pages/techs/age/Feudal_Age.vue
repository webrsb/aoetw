<template>
  <!-- Main jumbotron for a primary marketing message or call to action
    -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row padtop">
      <div class="col-md-12">
        <h1>封建時代</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            封建時代是帝國時代的第二個時代。
            它允許訓練和建造更多的單位和建築，還有更多的科技可以研發。
            玩家可以使用一系列的<nuxt-link to="/units/Infantry_Units"
              >步兵</nuxt-link
            >、
            <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>、<nuxt-link
              to="/units/Archer_Units"
              >弓箭手</nuxt-link
            >和<nuxt-link to="/units/Naval_Vessels">海軍單位</nuxt-link
            >以及有效的防禦建築。
          </p>
        </div>
        <h3>可建造建築</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <strong>民用建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Blacksmithicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Blacksmith">兵工廠</nuxt-link
              >:研究升級軍事科技。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Fishtrapicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Fish_Trap">漁網</nuxt-link
              >:水上食物來源。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Marketicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Market">市集</nuxt-link
              >：可供貿易和交換資源。
            </li>
          </ul>
          <strong>軍事建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Archery-range-logo.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
              >:訓練和升級弓兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Stableicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Stable">馬廄</nuxt-link
              >：訓練和升級騎兵單位。
            </li>
          </ul>
          <strong>防禦建築</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Watchtowericon.png"
                width="22"
                alt=""
              /><nuxt-link to="/units/Watch_Tower">瞭望箭塔</nuxt-link
              >:防禦敵人的塔。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Stonewallicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Stone_Wall">城牆</nuxt-link
              >：可抵禦敵人攻擊。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/Gateicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Gateicon_Gate">城門</nuxt-link
              >：可與城牆蓋在一起，讓友方單位通過。
            </li>
          </ul>
        </div>
        <h3>可生產單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h4>普通單位</h4>
          <strong>碼頭</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/TradeCogIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Trade_Cog">貿易商旅</nuxt-link
              >:海上貿易單位。
            </li>
          </ul>
          <strong>市集</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/TradeCartIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Trade_Cart">貿易馬車</nuxt-link
              >:路上貿易單位。
            </li>
          </ul>
          <h4>軍事單位</h4>
          <strong>軍營</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/ManAtArmsIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Man-at-Arms">裝甲步兵</nuxt-link
              >：劍兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/SpearmanIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Spearman">長槍兵</nuxt-link>：反騎兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/EagleScoutIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Eagle_Scout">鷹斥侯</nuxt-link
              >：偵查單位。
            </li>
          </ul>
          <strong>射箭場</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/ArcherIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Archer">弓兵</nuxt-link>：弓兵單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/SkirmisherIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Skirmisher">矛兵</nuxt-link>：反弓兵單位。
            </li>
          </ul>
          <strong>馬廄</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/ScoutCavalryIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Scout_Cavalry">斥侯騎兵</nuxt-link
              >：騎馬偵查單位
            </li>
          </ul>
          <strong>碼頭</strong>
          <ul>
            <li>
              <img
                class="gg"
                src="~assets/Galley.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Galley">戰船</nuxt-link>：基本戰船。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/FireGalleyIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Fire_Galley">火蒙衝</nuxt-link
              >：反戰船單位。
            </li>
            <li>
              <img
                class="gg"
                src="~assets/DemoRaftIcon.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/units/Demolition_Raft">自爆筏</nuxt-link
              >：反火戰船的自殺單位。
            </li>
          </ul>
          <h3>可研發科技</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <strong>城鎮中心</strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Townwatch.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Town_Watch">城鎮瞭望</nuxt-link
                >：建築視野+4。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Wheelbarrow.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Wheelbarrow">獨輪推車</nuxt-link
                >：村民更有效率村民速度快10%，每趟可攜帶資源量+25%。
              </li>
            </ul>
            <strong>磨坊</strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Horsecollar.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Horse_Collar">馬軛</nuxt-link
                >：農田產量+75。
              </li>
            </ul>
            <strong>伐木場</strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Doublebitaxe.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Double-Bit_Axe">雙刃斧</nuxt-link
                >：村民伐木速度快20%。
              </li>
            </ul>
            <strong>採礦營地</strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Stonemining.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Stone_Mining">採石技術</nuxt-link
                >：村民採石速度快15%。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Goldmining.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Gold_Mining">採金技術</nuxt-link
                >：村民採金速度快15%。
              </li>
            </ul>
            <strong>市集</strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Cartography.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Cartography">製圖法</nuxt-link
                >：可看到所有同盟的視野。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Coinage.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Coinage">鑄幣術</nuxt-link
                >：進貢費用減少至20%。
              </li>
            </ul>
            <strong>軍營</strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Tracking.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Tracking">追蹤技術</nuxt-link
                >：步兵+2視野。
              </li>
            </ul>
            <strong>馬廄</strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Bloodlines.png"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Bloodlines">品種</nuxt-link
                >：騎兵部隊生命值+20。
              </li>
            </ul>
            <strong>兵工廠</strong>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/Scalemailarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Scale_Mail_Armor">步兵鱗甲</nuxt-link
                >：步兵護甲+1/+1。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Fletching.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Fletching">箭羽</nuxt-link
                >：弓兵、馬騎弓兵、戰船、城堡和箭塔的攻擊+1、範圍+1。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Paddedarcherarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Padded_Archer_Armor">弓兵布甲</nuxt-link
                >：弓兵和馬騎弓兵護甲+1/+1。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Forging.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Forging">鍛造</nuxt-link
                >:步兵騎兵攻擊+1。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Scalebardingarmor.jpg"
                  width="22"
                  alt=""
                /><nuxt-link to="/techs/Scale_Barding_Armor">騎兵鱗甲</nuxt-link
                >：騎兵護甲+1/+1。
              </li>
            </ul>
            <strong></strong>
            <h3>文明加成</h3>
            <div class="hrn1"></div>
            <div class="n1">
              <ul>
                <li>
                  <nuxt-link to="/civs/Ethiopians">衣索比亞</nuxt-link
                  >：到封建時代可獲得100金、100肉。
                </li>
                <li>
                  <nuxt-link to="/civs/Italians">義大利</nuxt-link
                  >：研發封建時代成本減少15％。
                </li>
                <li>
                  <nuxt-link to="/civs/Khmer">高棉</nuxt-link
                  >：升級封建時代不需要前置建築。
                </li>
                <li>
                  <nuxt-link to="/civs/Malay">馬來</nuxt-link
                  >：研究封建時代速度快80。
                </li>
              </ul>
              <h3>戰術</h3>
              <div class="hrn1"></div>
              <div class="n1">
                <p>
                  封建時代通常是不同文明開始脫穎而出的地方。弓箭手，騎兵和海上文明可以開始在這個時代訓練他們的基本單位。封建時代也是軍事衝突開始發生的地方。玩家應該考慮開採石礦，準備在
                  <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
                  >建造威力強大的<nuxt-link to="/building/Castle"
                    >城堡</nuxt-link
                  >。玩家也應該開始消除城鎮旁的漏洞，用圍牆或是建築搭配天然障礙物以防止其他玩家的早期攻擊。
                </p>
                <p>
                  正是在這個階段，玩家開始決定採取哪種策略。如果選擇步兵，弓箭手或騎兵的快攻，玩家必須建立一個兵營（至少兩個，如果他們選擇棒棒快攻(民兵)），然後射箭場或馬廄（取決於他們的文明加成）和一個兵工廠以升級他們的單位。另外，重點要放在經濟的調配上，打什麼樣的策略去決定要收集甚麼資源。如果玩家進行塔攻，或是防守城鎮；抑或是快速上城堡時代然後蓋城堡，他們應該把重點放在收集木材和石頭上，建立一個市集（可以做資源交換），並讓至少八個村民在農田採集食物維持經濟。
                </p>
                <p>
                  如果玩家想要趕快進入城堡時代進行僧快(僧侶快攻)，馬暴(大量騎士)或是其他城堡時代的快攻，那麼他們應該建立一個市場和一個兵工廠，或是建立一個軍營和訓練一些長槍兵，也許在蓋一些塔保護自己。在經濟注重食物和黃金收集然後盡快進入城堡時代。
                </p>
                <p>
                  在達到封建時代的團隊遊戲中，製圖法可讓玩家分享盟友的視線。進貢策略也從封建時代開始，因為可以興建市場並且能夠進貢和交換資源，達到快速進入下個時代用更強大的軍隊和經濟打敗對手。
                </p>
              </div>
            </div>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              查理曼大帝在西元九世紀時創建法蘭西帝國，結束了歐洲的黑暗時代，也是封建時代的開始。大部分被西歐野蠻人部落統治的的地方正慢慢被地方力量收復。羅馬教會正在提供一個統一的社會結構。查理大帝試圖恢復教育，鼓勵藝術發展。然而，他的帝國在他去世後走向頹勢，新的掠奪者破壞了他的大部分建設和制度。政治和經濟權力從國王轉移到統治層級內的地主。普通百姓在這片土地上耕耘，供養著貴族和教士。
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td
              class="unit"
              colspan="2"
              style=" background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle" style="color: #fff">封建時代</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img src="~assets/Feudal-age-reseach.jpg" width="45" alt="" />
              </div>
            </td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style=" background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">時代介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">上一個</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Dark-age-logo-small.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/techs/age/Dark_Age">黑暗時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">下一個</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Castle-age-reseach.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">所需建築</td>
            <td class="unit4">
              下面任兩項：
              <br />
              <img
                class="gg"
                src="~assets/Barracks-logo.jpg"
                width="22"
                alt=""
              /><nuxt-link to="/building/Barracks">軍營</nuxt-link>
              <br />
              <img
                class="gg"
                src="~assets/Millicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Mill">磨坊</nuxt-link>
              <br />
              <img
                class="gg"
                src="~assets/Lumbercampicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Lumber_Camp">伐木場</nuxt-link>
              <br />
              <img
                class="gg"
                src="~assets/Miningcampicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Mining_Camp">採礦營地</nuxt-link>
              <br />
              <img
                class="gg"
                src="~assets/Dockicon.png"
                width="22"
                alt=""
              /><nuxt-link to="/building/Dock">碼頭</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研究於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Towncentericon.png"
                width="22"
                alt=""
              /><nuxt-link to="/techs/Town_Watch">城鎮中心</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">研究時間</td>
            <td class="unit4">130秒</td>
          </tr>
          <tr>
            <td
              class="unit"
              colspan="2"
              style=" background-color:#5b2167f0;text-align: center;"
            >
              <div class="unititle2" style="color: #fff">研究成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">食物</td>
            <td class="unit4">500</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡協助編輯</div>
      </div>
      <div class="col-md-12">
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="col-md-12">
            <div class="col-md-4">
              <nuxt-link to="/img/Civilizationfeudalage.png"
                ><img
                  class="imgn hg"
                  src="~assets/Civilizationfeudalage.png"
                  alt=""
              /></nuxt-link>
              <p><em>文明在封建時代的樣子。</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allage',
  components: {}
}
</script>
<style></style>
