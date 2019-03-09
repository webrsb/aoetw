<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>僧侶</h1>
        <div class="dc">
          <em
            ><img
              src="~assets/Vladdraculaicon.png"
              width="50px;"
              alt=""
              style="margin-right:20px;"/>這條目相當完整，是一篇<nuxt-link
              to="/ue"
              >優異條目</nuxt-link
            ><img src="~assets/u1.png" style="margin-left: 15px;" width="25px;"
          /></em>
        </div>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>僧侶</b>是遊戲中的一個<nuxt-link to="/units/Unique_Unit"
              >特殊單位</nuxt-link
            >，可以在
            <nuxt-link to="/building/Monastery">修道院</nuxt-link>
            進行訓練。雖然缺乏一切攻擊手段，他們仍然佔有一席之地，因為他們是能夠將其他單位轉換為玩家己方單位（另一個是
            <nuxt-link to="/units/Missionary">傳教士</nuxt-link
            >）的唯二單位之一。
            此外，僧侶可以治癒所有同盟或自己的單位，除了<nuxt-link
              to="/units/Naval_Vessels"
              >船隻</nuxt-link
            >和<nuxt-link to="/units/Siege_Weapons">攻城武器</nuxt-link
            >。起初，他們非常薄弱，但是通過研究<nuxt-link
              to="/building/Monastery"
              >修道院</nuxt-link
            >內的所有技術，他們能力可以得到很大的提升。
          </p>
          <p>
            在所有的<nuxt-link to="/civs">文明</nuxt-link>中，<nuxt-link
              to="/civs/Aztecs"
              >阿茲特克</nuxt-link
            >人擁有最強大的僧侶，可以使用所有的宗教技術，同時每研發一項技術可獲得+5生命。
            如果每項技術研發，<nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
            >僧侶擁有95生命 - 是普通僧侶（45生命，研發<nuxt-link
              to="/techs/Sanctity"
              >聖潔虔誠</nuxt-link
            >）的兩倍以上。
          </p>
          <p>
            <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>，<nuxt-link
              to="/civs/Saracens"
              >薩拉森人</nuxt-link
            >和<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
            >也有獨特的技術，使他們的僧侶受益，不過需要<nuxt-link
              to="/building/Castle"
              >城堡</nuxt-link
            >才能研發，顯得特別雞肋。而
            <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>的<nuxt-link
              to="/techs"
              >科技</nuxt-link
            >減免，則是相當實用。
          </p>
          <p>
            <nuxt-link to="/civs/Teutons">條頓</nuxt-link>和<nuxt-link
              to="/civs/Byzantines"
              >拜占庭</nuxt-link
            >僧侶相當強大，並受益於修道院升級技術和<nuxt-link
              to="/elements/Team_Bonus"
              >團隊加分</nuxt-link
            >。
          </p>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            僧侶是一個多功能單位，在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >以後扮演著重要的角色，包括收集<nuxt-link to="/Relic"
              >遺跡</nuxt-link
            >
            ，騷擾對手的資源節點，擾亂對手戰線，阻擋<nuxt-link
              to="/units/Knight"
              >騎士</nuxt-link
            >的侵略以及治療受傷的單位。
          </p>
          <h3>科技</h3>
          <p>以下科技影響僧侶</p>
          <div class="col-md-12">
            <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            <ul>
              <li>
                <img class="gg" src="~assets/Redemption.jpg" alt="" /><nuxt-link
                  to="/techs/Redemption"
                  >信仰救贖</nuxt-link
                >:僧侶可<nuxt-link to="/elements/Conversion">招降</nuxt-link
                >大部分<nuxt-link to="/building">建築物</nuxt-link>和<nuxt-link
                  to="/units/Siege_Weapons"
                  >攻城單位</nuxt-link
                >。
              </li>
              <li>
                <img class="gg" src="~assets/Atonement.jpg" alt="" /><nuxt-link
                  to="/techs/Atonement"
                  >贖罪</nuxt-link
                >:僧侶可招降對方的僧侶。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Herbalmedicine.png"
                  alt=""
                /><nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link
                >:駐紮單位自身治療速度變為4倍。
              </li>
              <li>
                <img class="gg" src="~assets/Heresy.png" alt="" /><nuxt-link
                  to="/techs/Heresy"
                  >異端邪說</nuxt-link
                >:被招降的單位/建築物立即死亡/毀壞)。
              </li>
              <li>
                <img class="gg" src="~assets/Sanctity.jpg" alt="" /><nuxt-link
                  to="/techs/Sanctity"
                  >聖潔虔誠</nuxt-link
                >:僧侶+15 HP。
              </li>
              <li>
                <img class="gg" src="~assets/Fervor.jpg" alt="" /><nuxt-link
                  to="/techs/Fervor"
                  >宗教狂熱</nuxt-link
                >:僧侶移動速度+15%。
              </li>
              <li>
                <img
                  src="~assets/CastleAgeUnique.png"
                  class="gg"
                  alt=""
                /><nuxt-link to="/techs/Inquisition"
                  >異端審判:僧侶招降速度變快(對單位時間-1，對建築物時間-7)(西班牙限定)</nuxt-link
                >
              </li>
              <li>
                <img
                  src="~assets/CastleAgeUnique.png"
                  class="gg"
                  alt=""
                /><nuxt-link to="/techs/Madrasah">穆斯林學墊</nuxt-link
                >:僧侶死亡時返還33<nuxt-link to="/resource/Gold">黃金</nuxt-link
                >。(<nuxt-link to="/civs/Saracens">薩拉森</nuxt-link>限定)
              </li>
              <li>
                <img
                  src="~assets/CastleAgeUnique.png"
                  class="gg"
                  alt=""
                /><nuxt-link to="/techs/Orthodoxy">東正教</nuxt-link
                >:僧侶護甲+3/+3。(<nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
                >限定)
              </li>
            </ul>
          </div>
          <div class="col-md-12">
            <nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link>
            <ul>
              <li>
                <img class="gg" src="~assets/Faith.jpg" alt="" /><nuxt-link
                  to="/techs/Faith"
                  >忠誠信仰</nuxt-link
                >:單位對僧侶(<nuxt-link to="/units/Missionary">傳教士</nuxt-link
                >)的招降更具抵抗力。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Illumination.jpg"
                  alt=""
                /><nuxt-link to="/techs/Illumination">啟發教化</nuxt-link
                >:僧侶招降成功後，恢復信仰的速度快50%。33秒後可再次招降對方(原為62秒)。
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/Blockprinting.jpg"
                  alt=""
                /><nuxt-link to="/techs/Block_Printing">雕版印刷術</nuxt-link
                >:僧侶(傳教士)的招降範圍+3。
              </li>
              <li>
                <img class="gg" src="~assets/Theocracy.png" alt="" /><nuxt-link
                  to="/techs/Theocracy"
                  >神權統治</nuxt-link
                >:一群僧侶招降一個單位成功後，只有一位僧侶需要恢復信仰。
              </li>
            </ul>
          </div>
          <h3><nuxt-link to="/Relic">遺跡</nuxt-link></h3>
          <p>
            <em>請見主條目：<nuxt-link to="/Relic">遺跡</nuxt-link></em>
          </p>
          <p>
            <nuxt-link to="/Relic">遺跡</nuxt-link
            >是一個特殊的物品，當遺跡進入修道院時，擁有它的玩家將會隨著時間的推移而收到一小筆連續不斷的黃金，大致相當於一個礦工。玩家收集的遺跡越多，生成的黃金就越多。與採礦不同，遺跡不會耗盡。最重要的是，在城堡時代以後，快速而有效地訓練僧侶在標準勝利的遊戲中變得至關重要，因為在短時間內收集並持有每個聖物是贏得遊戲的眾多方式之一。
          </p>
          <h3>招降</h3>
          <p>
            <em
              >請見主條目：<nuxt-link to="/elements/Conversion"
                >招降</nuxt-link
              ></em
            >
          </p>
          <p>
            僧侶的第二個功能是招降敵方單位。意見可以在遊戲中廣泛使用不同的轉換。然而，招降一個單位會使敵人的力量變小，同時增強自己的軍隊。在城堡時代，僧侶可以有效地支援快攻，對手沒有能力和時間研發異教邪說或使用如<nuxt-link
              to="/units/Longbowman"
              >不列顛長弓兵</nuxt-link
            >的<nuxt-link to="/units/Archer_Units">遠距離單位</nuxt-link
            >作反制。
          </p>
          <p>
            優異的僧侶文明（如<nuxt-link to="/civs/Aztecs">阿茲特克人</nuxt-link
            >，<nuxt-link to="/civs/Burmese">緬甸</nuxt-link>，<nuxt-link
              to="/civs/Saracens"
              >薩拉森</nuxt-link
            >， <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link>，<nuxt-link
              to="/civs/Spanish"
              >西班牙</nuxt-link
            >和<nuxt-link to="/civs/Teutons">條頓</nuxt-link
            >）甚至可以進行僧侶快攻。這極具侵略性，因為被快攻的玩家很可能沒有研發異教邪說，若用僧侶反制則需花費大量的黃金。
            <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
            >也可以僧侶快攻，因為他們的僧侶便宜了15％，只花費85黃金。<nuxt-link
              to="/civs/Teutons"
              >條頓</nuxt-link
            >的僧侶可以輕易地對抗早期僧侶快攻，因為他們的文明利益可讓單位更能抵抗招降（可與<nuxt-link
              to="/techs/age/Imperial_Age"
              >帝王時代</nuxt-link
            >的<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>疊加）。
          </p>
          <p>
            在<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
            >，研發印刷技術可增加僧侶的招降距離，但是在帝王時代，玩家的軍隊變得更加強大，這使得僧侶更顯脆弱。幾乎所有的<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >和<nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link
            >部隊都能三下殺死僧侶，<nuxt-link to="/units/Archer_Units"
              >弓箭手</nuxt-link
            >通常只需要五箭。攻城部隊對僧侶來說也是致命的。對於依賴僧侶的玩家來說，這是一個巨大的問題。此外，隨著忠誠信仰的出現，招降的效益顯著減少。另一個問題是招降需要大量的微操作，因為僧侶不會自動招降（僧侶在系統設定為非激進立場）。這意味著玩家總得時時注意戰場並手動招降。在遊戲的後期階段，當戰鬥較大，發生在多個地點時，幾乎不可能有時間指揮僧侶。如果只有一個主戰場，那麼玩家仍然可以招降<nuxt-link
              to="/units/Paladin"
              >遊俠</nuxt-link
            >，<nuxt-link to="/units/War_Elephant">戰象</nuxt-link>或<nuxt-link
              to="/units/Boyar"
              >貴族鐵騎</nuxt-link
            >等關鍵單位，並且僧侶遠離威脅。
          </p>
          <h3>治療</h3>
          <p>
            僧侶能夠治療友方單位（每0.4秒恢復1生命
            ）。僧侶通常搭配弓箭手，因為他們很容易控制，並且容易防守。但攻城武器對這個組合而言是一個嚴重威脅。玩家應該根據自己的部隊大小，搭配2到10名僧侶，在戰鬥中治療受傷部隊。僧侶應該盡量遠離危險，讓受傷的單位應該來到僧侶身邊，而不是讓僧侶衝向戰場，否則他們很容易成為目標。
            <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link>和<nuxt-link
              to="/civs/Teutons"
              >條頓</nuxt-link
            >在遊戲中分別有更快的治癒率和更長的治療範圍。<nuxt-link
              to="/civs/Spanish"
              >西班牙</nuxt-link
            >傳教士則有較快的移動速度可以跟上軍隊。
          </p>
          <h3>防禦</h3>
          <p>
            修道院不是軍事<nuxt-link to="/building">建築</nuxt-link
            >，且進入<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >後就可直接建造。這對於蓋<nuxt-link to="/building/Blacksmith"
              >兵工廠</nuxt-link
            >和
            <nuxt-link to="/building/Market">市集</nuxt-link
            >用來進入城堡時代的爆經濟戰略是重要的。在達到城堡時代之後，玩家將很難走出定點，因此他們需要建造<nuxt-link
              to="/building/Barracks"
              >軍營</nuxt-link
            >、有
            <nuxt-link to="/building/Archery_Range">射箭場</nuxt-link
            >和<nuxt-link to="/building/Stable">馬廄</nuxt-link
            >，然後開始生產尚未升級的單位做防禦。相較之下，修道院可以馬上建造，僧侶可以立即生產，他們的功能齊全，搭配
            <nuxt-link to="/building/Siege_Workshop">攻城器製造所</nuxt-link
            >的<nuxt-link to="/units/Mangonel">投石車</nuxt-link
            >，玩家將可以最小的投資對<nuxt-link to="/units/Archer_Units"
              >弓箭手</nuxt-link
            >，
            <nuxt-link to="/units/Cavalry_Units">騎兵</nuxt-link>和<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >的攻擊進行反制。隨著<nuxt-link to="/building/Stone_Wall"
              >城牆</nuxt-link
            >蓋起，留給對手的侵略性選項會進一步受到限制，因為他們不能再讓
            <nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>或<nuxt-link
              to="/units/Scout_Cavalry"
              >斥候</nuxt-link
            >隨意進你的陣地。
          </p>
        </div>
        <h3>控僧技巧</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            <em
              >作者：<a
                href="https://www.ptt.cc/bbs/AOE/M.1491728400.A.743.html"
                >PTT＠qaws68</a
              ></em
            >
          </p>
          一群僧侶招降方式有兩種:
          <ol>
            <li>每隻編一隊</li>
            <li>clone操作</li>
          </ol>
          圈5隻僧侶對某敵兵按右鍵，這時就是5僧侶同時招1敵兵，但這時，對某中一僧侶按下ctrl+左鍵，就會取消選擇他，這時用沒有取消選擇的僧侶對另一敵兵按右鍵，這時就是4僧侶招1敵兵，被取消選擇那個就繼續招原本那敵兵。再用相同方法，取消選擇其中一僧侶，用剩下3僧侶招另一隻敵兵，如此類推。就會變成5僧侶在差不多時間招5隻敵兵了。另外，這方法也可以用於其他兵種的，不限定是僧侶，如用5
          <nuxt-link to="/units/Scout_Cavalry">肉馬</nuxt-link>追殺敵人5僧侶。
          <p><em>操作影片教學</em></p>
          <iframe
            width="300"
            src="https://www.youtube.com/embed/hf1gCiqfwx8"
            frameborder="0"
            allow="autoplay; encrypted-media"
            allowfullscreen
          ></iframe>
        </div>
        <h3>剋僧侶單位的單位</h3>
        <div class="hrn1"></div>
        <div class="n1">
          以下單位擁有對僧侶單位的額外傷害，按照傷殺力排列。
          <div class="n1">
            <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
            <ul>
              <li>
                <img class="gg" src="~assets/HussarIcon.jpg" alt="" /><nuxt-link
                  to="/units/Hussar"
                  >匈牙利輕騎兵</nuxt-link
                >
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+10攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/EliteEagleWarriorIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Elite_Eagle_Warrior"
                  >精銳鷹勇士</nuxt-link
                >
              </li>
              <li>
                <img
                  class="gg"
                  src="~assets/LightCavalryIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Light_Cavalry">輕騎兵</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  src="~assets/EagleScoutIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Eagle_Scout">鷹斥候→</nuxt-link>
                <img
                  class="gg"
                  src="~assets/EagleWarriorIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
              </li>
            </ul>
            <div style="margin:12px 0px;"><strong>+6攻擊</strong></div>
            <ul>
              <li>
                <img
                  class="gg"
                  style="margin: 2px;"
                  src="~assets/ScoutCavalryIcon.jpg"
                  alt=""
                /><nuxt-link to="/units/Scout_Cavalry">斥候</nuxt-link>
              </li>
            </ul>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              阿茲特克：修道院每項技術研發可讓僧侶獲得+5 HP。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
              >：使僧侶受益的技術便宜50％。
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：受益僧侶的技術在城堡/帝國時代分別便宜15％/ 20％。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：僧侶黃金成本減少了15％。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：僧侶有雙倍的治療範圍。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Byzantines">拜占庭</nuxt-link
              >：僧侶治療速度提高50％。
            </li>
            <li>
              條頓：僧侶的團隊對招降更有抵抗力。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link
              >：可以看到所有遺跡的起始位置
            </li>
          </ul>
        </div>
        <h3>更新日誌</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <h3>
            <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link>影響所有僧侶。
            </li>
            <li>拜占庭僧侶治療速度快200%。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link
              >只影響拿遺跡的僧侶，這其實是一個BUG。
            </li>
            <li>拿著遺跡的僧侶不會受到反僧侶單位的加成。</li>
            <li>
              引入<nuxt-link to="/techs/Theocracy">神權統治</nuxt-link
              >與<nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
            </li>
            <li>拜占庭僧侶現在治療速度只快50%。</li>
          </ul>
          <h3>
            <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
          </h3>
          <ul>
            <li>
              <nuxt-link to="/techs/Fervor">宗教狂熱</nuxt-link
              >影響所有僧侶，不再是拿著遺跡的僧侶。
            </li>
            <li>拿著遺跡的僧侶也會受到反僧侶單位的加成</li>
            <li>
              薩拉森引入新科技<nuxt-link to="/techs/Madrasah"
                >穆斯林學墊
              </nuxt-link>
            </li>
            <li>
              西班牙引入新科技<nuxt-link to="/techs/Inquisition"
                >異端審判</nuxt-link
              >
            </li>
          </ul>
        </div>
        <h3>趣事</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              僧侶是遊戲中唯二兩個只需要黃金生產的單位，另一個是<nuxt-link
                to="/units/Missionary"
                >傳教士</nuxt-link
              >。
            </li>
            <li>
              僧侶是遊戲中唯三同種單位，卻有不同的外表之一，另外兩個是<nuxt-link
                to="/units/Villager"
                >村民</nuxt-link
              >與<nuxt-link to="/units/Trade_Cart">貿易車隊</nuxt-link>。
            </li>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link>、<nuxt-link
                to="/civs/Saracens"
                >薩拉森</nuxt-link
              >和<nuxt-link to="/civs/Spanish">西班牙</nuxt-link
              >都是僧侶科技全滿的文明，而
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link>與<nuxt-link
                to="/civs/Byzantines"
                >拜占庭</nuxt-link
              >都只缺乏<nuxt-link to="/techs/Herbal_Medicine">草藥學</nuxt-link
              >。
            </li>
            <li>
              英語版的<nuxt-link to="/Taunts">嘲諷語音</nuxt-link>編號<a
                href="https://www.youtube.com/watch?v=3tBqdKGiqnI"
                >30(Wololo)</a
              >，其實就是1代僧侶的配音。
            </li>
          </ul>
        </div>
        <h3>圖庫</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <div class="row">
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/monks1.jpg"
                  alt=""
              /></gallery>
              <p>
                <em
                  >Voobly模組內，亞洲國家獨特的僧侶外型。其實原型是<nuxt-link
                    to="/units/hero/Chand_Bhai"
                    >金德·伯勒達伊</nuxt-link
                  >。</em
                >
              </p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/monks2.png"
                  alt=""
              /></gallery>
              <p><em>一般的僧侶。</em></p>
            </div>
            <div class="col-md-4">
              <gallery
                ><img
                  class="imgn hg"
                  width="250"
                  src="~assets/monks3.png"
                  alt=""
              /></gallery>
              <p><em>美洲國家的僧侶。</em></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">僧侶</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/MonkIcon.jpg"
                  width="45"
                  style="margin-right: 10px;"
                  alt=""
                />
                <img src="~assets/MonkIcon2.jpg" width="45" alt="" />
                <p><em>一般國家的僧侶與美洲僧侶</em></p>
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Monk">僧侶</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">文明</td>
            <td class="unit4">所有國家</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <nuxt-link to="/building/Monastery">修道院</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">51秒</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">成本</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">黃金</td>
            <td class="unit4">100</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">數據</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Hit_points">血量</nuxt-link>
            </td>
            <td class="unit4">30</td>
          </tr>
          <tr>
            <td class="unit3">招降後恢復時間</td>
            <td class="unit4">62</td>
          </tr>
          <tr>
            <td class="unit3">最小射程</td>
            <td class="unit4">1</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">遠防</nuxt-link></td>
            <td class="unit4">0</td>
          </tr>
          <tr>
            <td class="unit3">速度</td>
            <td class="unit4">0.7</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/los.php">視野</nuxt-link></td>
            <td class="unit4">11</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由賜齡、眠協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: 'allunit',
  components: {}
}
</script>
<style></style>
