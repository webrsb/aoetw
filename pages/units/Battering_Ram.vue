<template>
  <div class="container">
    <div class="row padtop">
      <div class="col-md-12">
        <h1>輕型衝撞車</h1>
        <div class="hrn1"></div>
      </div>
      <div class="col-md-8">
        <div class="n1">
          <p>
            <b>輕型衝撞車</b
            >是世紀帝國II遊戲中，沒有人駕駛卻可以講話的神奇軍事單位，它可以從<nuxt-link
              to="/building/Siege_Workshop"
              >攻城器製造所</nuxt-link
            >製造，對一般單位的<nuxt-link to="/elements/Attack"
              >攻擊力</nuxt-link
            >較低，對<nuxt-link to="/armor/Armor_Class_Building"
              >建築物</nuxt-link
            >、<nuxt-link to="/units/Siege_Weapons">攻城器單位</nuxt-link
            >皆有額外的傷害加成，其<nuxt-link to="/armor">遠程護甲</nuxt-link
            >值極高，行進中幾乎不受<nuxt-link to="/units/Archer"
              >弓箭手</nuxt-link
            >傷害影響，因此許多玩家會將<nuxt-link to="/units/Infantry_Units"
              >步兵單位</nuxt-link
            >駐紮在<nuxt-link to="/units/Battering_Ram">衝撞車</nuxt-link
            >內做掩護殺入敵陣。
          </p>
          <p>
            每一台衝撞車最多可以駐紮四個步兵單位(<nuxt-link
              to="/units/Infantry_Units"
              >步兵</nuxt-link
            >、徒步弓手、<nuxt-link to="/units/Villager">村民</nuxt-link
            >)，當步兵單位駐紮在衝撞車時，可以提升移動速度和對建築物的傷害，要特別留意的是，衝撞車在遊戲中移動速度排最後一名，建造費用很耗<nuxt-link
              to="/resource/Wood"
              >木材</nuxt-link
            >與<nuxt-link to="/resource/Gold">黃金</nuxt-link
            >資源，且近身裝甲竟然只有(-3)，但在遊戲中顯示值為0，一般村民、村姑徒手亂打便可造成大量傷害，因此需要好好保護。
          </p>
          <p>輕型衝撞車移動速度與駐紮數量前後比較</p>
          <ul>
            <li>駐紮步兵數量0→移動速度0.5</li>
            <li>駐紮步兵數量1→移動速度0.55</li>
            <li>
              駐紮步兵數量2→移動速度0.6 (<nuxt-link to="/units/Siege_Ram"
                >重型衝撞車</nuxt-link
              >、<nuxt-link to="/units/War_Elephant">戰象</nuxt-link
              >移動速度0.6)
            </li>
            <li>
              駐紮步兵數量3→移動速度0.65 (<nuxt-link to="/units/Scorpion"
                >弩砲</nuxt-link
              >移動速度0.65)
            </li>
            <li>
              駐紮步兵數量4→移動速度0.7 (<nuxt-link to="/units/Monk"
                >僧侶</nuxt-link
              >移動速度0.7)
            </li>
          </ul>
        </div>
        <h3>戰術</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <p>
            在<nuxt-link to="/techs/age/Castle_Age">城堡時代</nuxt-link
            >，輕型衝撞車是最強大的<nuxt-link to="/units/Siege_Weapons"
              >攻城武器</nuxt-link
            >之一，也是少數在<nuxt-link to="/techs/age/Castle_Age"
              >城堡時代</nuxt-link
            >可以對城堡建築物造成威脅的單位，適合拿來拆除對手的建築物，其傷害對<nuxt-link
              to="/armor/Armor_Class_Building"
              >建築物</nuxt-link
            >皆有額外的加成效果，同時可以做為步兵單位推進的掩護物，不少玩家會運用他的超高遠程護甲特性來吸收敵方弓箭手的火力。
          </p>
          <p>
            輕型衝撞車在遊戲中顯示的近身裝甲值為0，實際上的值設定為(-3)，雖然<nuxt-link
              to="/armor"
              >遠防</nuxt-link
            >裝甲很高，但對於近戰單位的抵抗力卻非常薄弱，因此輕型衝撞車可以承受大多數遠程攻擊單位的傷害(<nuxt-link
              to="/units/Mangonel"
              >投石車</nuxt-link
            >、<nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>除外)。
          </p>
          <p>
            關於衝撞車用途不單純是做為攻城武器，亦可做為步兵軍事單位的掩護物，另外對於其他攻城器製造所單位也有額外的傷害效果，故有時會拿來破敵方的衝撞車陣、弩砲陣、<nuxt-link
              to="/units/Mangonel"
              >投石車</nuxt-link
            >陣也是蠻常見的，可是行走速度很慢是個致命缺點，而且非常吃重木材資源，所以一般來說數量不會一次生產太多，或者是生產後先藏放在城器製造所，等到一定的數量才會搭配其他軍事單位放手一搏殺出一條血路。
          </p>
          <p>
            如果對手出輕型衝撞車拆除你的建築物，在沒有其他任何的兵力支援下，村民上前拆除也許是個不錯的選擇，因為輕型衝撞車的近身裝甲值很低、行走的慢，所以它很怕近戰的傷害，反之，若你選擇輕型衝撞車當推進幫手，在混亂中一定要小心衝撞車的控制，只要稍不注意，很可能會被一群村民徒手拆除，當然，比較建議使用<nuxt-link
              to="/units/Light_Cavalry"
              >輕騎兵</nuxt-link
            >或<nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link
            >這類的單位拆除會更好。
          </p>
          <p>
            <nuxt-link to="/civs/Cumans">庫曼</nuxt-link
            >是唯一能在封建時代就能蓋攻城器製造所並製造輕型衝撞車的文明，但由於資源和戰術的問題比，除了可泰安汗的第二關成就打法以外比較難用到這個特性。
          </p>
        </div>
        <h3>更多數據</h3>
        <div class="hrn1"></div>
        <div class="n1"></div>
        <table class="table-bordered" width="100%">
          <tr class="tta">
            <td class="unit" colspan="2" style="text-align: center;">
              <div class="unititle">劣勢與優勢</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">強勢(容易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >和<nuxt-link to="/units/Trebuchet">投石機</nuxt-link>。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:30%">劣勢(不易對抗)</td>
            <td class="tta4">
              <nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link>、<nuxt-link
                to="/units/Mangonel"
                >投石車</nuxt-link
              >、近戰單位特別是<nuxt-link to="/units/Magyar_Huszar"
                >馬扎爾驃騎兵</nuxt-link
              >。
            </td>
          </tr>
          <tr class="tta">
            <td colspan="2" style="text-align: center;">
              <div class="unititle">升級</div>
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Hit_points">生命值</nuxt-link>
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Furor_Celtica">塞爾特狂熱</nuxt-link
              >:攻城器製造所的單位+40% HP。<nuxt-link to="/civs/Celts"
                >塞爾特</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">攻擊力</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/siege_engineers.png"
                alt=""
              /><nuxt-link to="/techs/Siege_Engineers">攻城工程師</nuxt-link
              >:對<nuxt-link to="/armor/Armor_Class_Building">建築物</nuxt-link
              >攻擊加成+20%。
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">防禦</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Ironclad">鋼鐵甲</nuxt-link
              >:攻城武器近戰護甲+4，<nuxt-link to="/civs/Teutons"
                >條頓</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">速度</td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/unique_tech_imperial.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Drill">鑿岩機</nuxt-link
              >:攻城器製造所的單位移動速度+50%，<nuxt-link to="/civs/Mongols"
                >蒙古</nuxt-link
              >限定
            </td>
          </tr>
          <tr>
            <td class="tta1" style="width:10%">
              <nuxt-link to="/elements/Conversion">招降</nuxt-link>抵抗
            </td>
            <td class="tta4">
              <img
                class="gg"
                src="~assets/faith.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link><br />
              <img
                class="gg"
                src="~assets/Heresy.png"
                width="30"
                alt=""
              /><nuxt-link to="/techs/Heresy">異端邪說</nuxt-link>
            </td>
          </tr>
        </table>

        <h3>剋輕型衝撞車的單位與建築</h3>
        <div class="hrn1"></div>
        <div class="n1 bonuses">
          以下單位擁有對輕型衝撞車的額外傷害，按造殺傷力排列。
          <div class="n1">
            <div class="row">
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+65攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/SiegeRamIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Siege_Ram">重型衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+60攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/PetardIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Petard">炸藥桶</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+50攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CappedRamIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+40攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BatteringRamIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Battering_Ram"
                      >輕型衝撞車</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/CannonGalleonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Cannon_Galleon">火砲戰船</nuxt-link
                    >→
                    <img
                      class="gg"
                      src="~assets/Elite_cannon_galleonicon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Cannon_Galleon"
                      >精銳火砲戰船</nuxt-link
                    >
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+20攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/BombardCannonIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Bombard_Cannon">火砲</nuxt-link>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <div style="margin:12px 0px;"><strong>+12攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangonelIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Mangonel">輕型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/OnagerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Onager">中型投石車</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/SiegeOnagerIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Siege_Onager">重型投石車</nuxt-link>
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+8攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >精銳馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+5攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EliteEagleWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Elite_Eagle_Warrior"
                      >精銳鷹勇士</nuxt-link
                    >
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">精銳蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/Magyar_Huszar_icon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Magyar_Huszar"
                      >馬扎爾驃騎兵</nuxt-link
                    >(<nuxt-link to="/civs/Magyars">馬扎爾</nuxt-link>限定)
                  </li>
                </ul>
                <div style="margin:12px 0px;"><strong>+3攻擊</strong></div>
                <ul>
                  <li>
                    <img
                      class="gg"
                      src="~assets/EagleScoutIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Scout">鷹斥候</nuxt-link>→
                    <img
                      class="gg"
                      src="~assets/EagleWarriorIcon.png"
                      alt=""
                    /><nuxt-link to="/units/Eagle_Warrior">鷹勇士</nuxt-link>
                  </li>
                  <li>
                    <img
                      class="gg"
                      src="~assets/MangudaiIcon.png"
                      width="22"
                      alt=""
                    /><nuxt-link to="/units/Mangudai">蒙古突騎</nuxt-link
                    >(<nuxt-link to="/civs/Mongols">蒙古</nuxt-link>限定)
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h3>文明加成</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Aztecs">阿茲特克</nuxt-link
              >：輕型衝撞車訓練速度快11%。
            </li>
            <li>
              <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link
              >：升級<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
              >所需食物-50%。
            </li>
            <li>
              <nuxt-link to="/civs/Burmese">緬甸</nuxt-link>：<nuxt-link
                to="/techs/Faith"
                >忠誠信仰</nuxt-link
              >便宜50%。
            </li>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link
              >：輕型衝撞車<nuxt-link to="/elements/Rate_of_Fire"
                >攻擊速度</nuxt-link
              >快25%
            </li>
            <li>
              <nuxt-link to="/civs/Chinese">中國</nuxt-link
              >：對輕型衝撞車有利的<nuxt-link to="/techs">科技</nuxt-link
              >在<nuxt-link to="/techs/age/Castle_Age">城堡</nuxt-link
              >/<nuxt-link to="/techs/age/Imperial_Age">帝王時代</nuxt-link
              >各便宜15%/20%。
            </li>
            <li>
              <nuxt-link to="/civs/Cumans">庫曼</nuxt-link
              >：封建時代即可建造<nuxt-link to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >並生產輕型衝撞車。
            </li>
            <li>
              <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link
              >：輕型衝撞車黃金花費減少20%。輕型衝撞車科技研發速度+30%。
            </li>
            <li>
              <nuxt-link to="/civs/Slavs">斯拉夫</nuxt-link
              >：輕型衝撞車成本減少15%。
            </li>
            <li>
              <nuxt-link to="/civs/Tatars">韃靼</nuxt-link
              >：輕型衝撞車高地戰鬥傷害+50%。
            </li>
          </ul>
        </div>
        <h3>團隊加分</h3>
        <div class="hrn1"></div>
        <div class="n1">
          <ul>
            <li>
              <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>：<nuxt-link
                to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >單位生產速度快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Lithuanians">立陶宛</nuxt-link>：<nuxt-link
                to="/techs/Heresy"
                >異端邪說</nuxt-link
              >與<nuxt-link to="/techs/Faith">忠誠信仰</nuxt-link>研發快20%。
            </li>
            <li>
              <nuxt-link to="/civs/Malians">馬利</nuxt-link>：研發<nuxt-link
                to="/techs/Siege_Engineers"
                >攻城工程師</nuxt-link
              >的速度快80%。
            </li>
            <li>
              <nuxt-link to="/civs/Teutons">條頓</nuxt-link
              >：其軍事單位對<nuxt-link to="/elements/Conversion"
                >僧侶的招降</nuxt-link
              >有較好的抗性。
            </li>
          </ul>
          <h3>更新日誌</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <h3>
              <em><nuxt-link to="/games/aok">帝王世紀</nuxt-link></em>
            </h3>
            <ul>
              <li>
                升級到<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
                >成本為300F/250G。
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aoc">征服者入侵</nuxt-link></em>
            </h3>
            <ul>
              <li>
                步兵、徒步<nuxt-link to="/units/Archer_Units">弓兵</nuxt-link
                >可以駐紮在衝撞車裡面。
              </li>
              <li>
                升級到<nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link
                >為300F。
              </li>
              <li>
                <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>:<nuxt-link
                  to="/techs/Furor_Celtica"
                  >塞爾特狂熱</nuxt-link
                >給予衝撞車多50%的HP。
              </li>
              <li>
                <nuxt-link to="/civs/Mongols">蒙古</nuxt-link>：<nuxt-link
                  to="/techs/Drill"
                  >鑿岩機</nuxt-link
                >引進。
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/aof">失落的帝國</nuxt-link></em>
            </h3>
            <ul>
              <li>現在村民可以駐紮在衝撞車裡面。</li>
              <li>
                <nuxt-link to="/civs/Celts">塞爾特</nuxt-link>:<nuxt-link
                  to="/techs/Furor_Celtica"
                  >塞爾特狂熱</nuxt-link
                >給予衝撞車多40%的HP。
              </li>
              <li>
                <nuxt-link to="/civs/Teutons">條頓</nuxt-link>新科技：<nuxt-link
                  to="/techs/Ironclad"
                  >鋼鐵甲</nuxt-link
                >
              </li>
            </ul>
            <h3>
              <em><nuxt-link to="/games/de">決定版</nuxt-link></em>
            </h3>
            <ul>
              <li>
                <nuxt-link to="/civs/Cumans">庫曼</nuxt-link
                >：封建時代即可建造<nuxt-link to="/building/Siege_Workshop"
                  >攻城器製造所</nuxt-link
                >並生產輕型衝撞車。
              </li>
              <li>
                (42848更新)
                <nuxt-link to="/civs/Bulgarians">保加利亞</nuxt-link>:
                攻城器製造所科技升級所需食物-50%。
              </li>
              <li>
                (42848更新)
                <nuxt-link to="/civs/Portuguese">葡萄牙</nuxt-link>:
                科技研發速度 +30%。
              </li>
            </ul>
          </div>
          <h3>趣事</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <ul>
              <li>
                駐紮單位：世紀帝國II初期，衝撞車是沒辦法被駐紮的，到了<nuxt-link
                  to="/games/aoc"
                  >征服者入侵</nuxt-link
                >資料片之後，衝撞車才可以<nuxt-link to="/elements/Garrison"
                  >駐軍</nuxt-link
                >(步兵、徒步弓兵，不包含村民，僧侶、<nuxt-link
                  to="/units/edmap/King"
                  >國王</nuxt-link
                >、<nuxt-link to="/units/Petard">炸藥桶</nuxt-link
                >)，而到了<nuxt-link to="/games/aof">失落的帝國</nuxt-link
                >才能讓村民駐軍衝撞車。另外有國外的網友在實驗衝撞車單位時，發現了一有趣的現象，<nuxt-link
                  to="/units/Longbowman"
                  >長弓兵</nuxt-link
                >駐軍的衝撞車會跟馬路三寶或酒罪人士一樣，不斷的失控去卡別台衝撞車。(
                <a
                  href="https://www.youtube.com/watch?v=aPK2RnpEgPA"
                  target="_blank"
                  >見實驗影片</a
                >)。
              </li>
              <li>
                移動速度：步兵駐軍後的衝撞車移動速度比弓兵駐軍的衝撞車快，簡單來說，只有步兵駐軍才能堤升衝撞車的移動速度，且任何種類的步兵駐紮衝撞車後的速度都是一樣的。
              </li>
              <li>攻擊2，是陸上最弱的攻擊。</li>
              <li>
                防禦-3，是所有單位<nuxt-link to="/armor">近防</nuxt-link
                >最低的。
              </li>
            </ul>
          </div>
          <h3>歷史</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <p>
              <nuxt-link to="/units/Battering_Ram">衝車</nuxt-link
              >、或稱撞車，屬於古代攻城器械，在四輪車上安裝撞木，前裹鐵皮，以衝撞的力量破壞<nuxt-link
                to="/building/Stone_Wall"
                >城牆</nuxt-link
              >或<nuxt-link to="/building/Gate">城門</nuxt-link>的攻城主要兵器。
            </p>
            <p>
              《三國演義》第九十七回敘述：孔明大怒曰：「汝燒吾雲梯，吾卻用『衝車』之法！」
            </p>
            <p>
              諸葛亮攻擊陳倉的武器，也是歷代進行攻城的時候使用的重要戰車，在陳倉，被郝昭用鏈球式磨盤所破。今天的通用輪式裝甲車略有其風，只是沒有它這樣巨大。
            </p>
          </div>
          <h3>圖庫</h3>
          <div class="hrn1"></div>
          <div class="n1">
            <div class="row">
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Bram1.jpg" alt=""
                /></gallery>
                <p><em>衝撞車模型。</em></p>
              </div>
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Batteringram.png" alt=""
                /></gallery>
                <p><em>一群輕型衝撞車。</em></p>
              </div>
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Ramline.png" alt=""
                /></gallery>
                <p>
                  <em
                    ><nuxt-link to="/armor/Armor_Class_Ram">衝撞車系</nuxt-link
                    >。</em
                  >
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <gallery
                  ><img class="imgn hg" src="~assets/Splashdamageram.jpg" alt=""
                /></gallery>
                <p><em>各類型衝撞車與其傷害。</em></p>
              </div>
              <div class="col-md-4">
                <gallery
                  ><img
                    class="imgn hg"
                    src="~assets/Batteringramgarrison.png"
                    alt=""
                /></gallery>
                <p><em>有單位駐紮的衝撞車。</em></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <table class="table-bordered" width="100%">
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">輕型衝撞車</div>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div class="unititle">
                <img
                  src="~assets/BatteringRamIcon.png"
                  alt=""
                />
              </div>
            </td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位介紹</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">類型</td>
            <td class="unit4">
              <nuxt-link to="/units/Siege_Weapons">攻城器</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/civs">文明</nuxt-link></td>
            <td class="unit4">所有</td>
          </tr>
          <tr>
            <td class="unit3">時代</td>
            <td class="unit4">
              <img class="gg" src="~assets/castle_age.png" alt="" /><nuxt-link
                to="/techs/age/Castle_Age"
                >城堡時代</nuxt-link
              ><br /><img
                class="gg"
                src="~assets/feudal_age.png"
                alt=""
              /><nuxt-link to="/techs/age/Feudal_Age">封建時代</nuxt-link
              >（<nuxt-link to="/civs/Cumans">庫曼</nuxt-link>限定）
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練於</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/Siege-workshop-logo.jpg"
                alt=""
              /><nuxt-link to="/building/Siege_Workshop"
                >攻城器製造所</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">訓練時間</td>
            <td class="unit4">36秒</td>
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
            <td class="unit4">160</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/resource/Gold">黃金</nuxt-link>
            </td>
            <td class="unit4">75</td>
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
            <td class="unit4">175</td>
          </tr>
          <tr>
            <td class="unit3">攻擊</td>
            <td class="unit4">2(近戰)</td>
          </tr>
          <tr>
            <td class="unit3">攻擊加成</td>
            <td class="unit4">
              +125 vs<nuxt-link to="/armor/Armor_Class_Building">建築</nuxt-link
              >(每1個步兵進駐攻擊+10，最多+40) <br />+40 vs<nuxt-link
                to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
            </td>
          </tr>
          <tr>
            <td class="unit3">攻擊速度</td>
            <td class="unit4">5</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">近防</nuxt-link></td>
            <td class="unit4">-3</td>
          </tr>
          <tr>
            <td class="unit3">遠防</td>
            <td class="unit4">180</td>
          </tr>
          <tr>
            <td class="unit3"><nuxt-link to="/armor">防禦類型</nuxt-link></td>
            <td class="unit4">
              <nuxt-link to="/armor/Armor_Class_Siege_Weapon"
                >攻城武器</nuxt-link
              >
              <br /><nuxt-link to="/armor/Armor_Class_Ram">衝撞車</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">駐軍數量</td>
            <td class="unit4">4</td>
          </tr>
          <tr>
            <td class="unit3">跑速</td>
            <td class="unit4">0.5</td>
          </tr>
          <tr>
            <td class="unit3">
              <nuxt-link to="/elements/Line_of_Sight">視野</nuxt-link>
            </td>
            <td class="unit4">3</td>
          </tr>
          <tr>
            <td class="unit" colspan="2" style="background-color:#3c763d;">
              <div class="unititle2">單位演變</div>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級到</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/CappedRamIcon.png"
                alt=""
              /><nuxt-link to="/units/Capped_Ram">裝甲衝撞車</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級成本</td>
            <td class="unit4">
              <img
                class="gg"
                src="~assets/capped_ram.png"
                alt=""
              />300<nuxt-link to="/resource/Food">食物</nuxt-link>
            </td>
          </tr>
          <tr>
            <td class="unit3">升級時間</td>
            <td class="unit4">50秒</td>
          </tr>
        </table>

        <div class="thanks">感謝! 此頁面由JuneRain六月雨協助編輯</div>
      </div>
    </div>
  </div>
</template>
<script>
definePageMeta({ layout: 'allunit' })

export default {
  components: {}
}
</script>
<style></style>
